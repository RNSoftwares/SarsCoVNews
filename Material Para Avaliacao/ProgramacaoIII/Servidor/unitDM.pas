unit unitDM;

interface

uses
  System.SysUtils, System.Classes, uDWDataModule, FireDAC.Phys.PGDef,
  FireDAC.Stan.Intf, FireDAC.Stan.Option, FireDAC.Stan.Error, FireDAC.UI.Intf,
  FireDAC.Phys.Intf, FireDAC.Stan.Def, FireDAC.Stan.Pool, FireDAC.Stan.Async,
  FireDAC.Phys, FireDAC.Phys.PG, FireDAC.FMXUI.Wait, Data.DB,
  FireDAC.Comp.Client, uDWJSONObject, uDWAbout, uRESTDWServerEvents, System.JSON,
  FireDAC.Stan.Param, FireDAC.DatS, FireDAC.DApt.Intf, FireDAC.DApt,
  FireDAC.Comp.DataSet, uDWConsts;

type
  TDM = class(TServerMethodDataModule)
    FDPhysPgDriverLink1: TFDPhysPgDriverLink;
    FDConnection: TFDConnection;
    FDQUsuario: TFDQuery;
    procedure DWSEventsEventsValidarLoginReplyEvent(var Params: TDWParams;
      var Result: string);
    procedure DWSEventsEventsListarClientesReplyEvent(var Params: TDWParams;
      var Result: string);
    procedure DWSEventsEventsListarPessoasReplyEvent(var Params: TDWParams;
      var Result: string);
    procedure DWSEventsEventsAdcionarClienteReplyEvent(var Params: TDWParams;
      var Result: string);
    procedure DWSEventsEventsAtualizarClienteReplyEvent(var Params: TDWParams;
      var Result: string);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  DM: TDM;

implementation

{%CLASSGROUP 'FMX.Controls.TControl'}

{$R *.dfm}


procedure TDM.DWSEventsEventsAdcionarClienteReplyEvent(var Params: TDWParams;
  var Result: string);

//localhost:8082/AdicionarCliente?nome=xxxxx&filhos=xxxxx
var
  json: TJsonObject;
  FDQClientes: TFDQuery;
begin
  try
    json := TJsonObject.Create;
    FDQClientes := TFDQuery.Create(nil);
    FDQClientes.Connection := DM.FDConnection;

    if((Params.ItemsString['nome'].AsString = '') OR
      (Params.ItemsString['filhos'].AsString = ''))then
    begin
      json.AddPair('retorno', 'Par�metros n�o informados');
      Result := json.ToString;
      exit;
    end;

    try
      FDQClientes.Active := FALSE;
      FDQClientes.SQL.Clear;
      FDQClientes.SQL.Add('INSERT INTO CLIENTES(NOME,FILHOS) ');
      FDQClientes.SQL.Add('VALUES (:nome, :filhos)');
      FDQClientes.ParamByName('nome').Value := Params.ItemsString['nome'].AsString;
      FDQClientes.ParamByName('filhos').Value := Params.ItemsString['filhos'].AsInteger;
      FDQClientes.ExecSQL;

      json.AddPair('retorno', 'OK');

    except on e:exception do
       json.AddPair('retorno',e.Message);
    end;
    Result := json.ToString;
  finally
    FDQClientes.DisposeOf;
    json.DisposeOf;
  end;
end;


procedure TDM.DWSEventsEventsAtualizarClienteReplyEvent(var Params: TDWParams;
  var Result: string);
//localhost:8082/AtualizarCliente?nome=xxxx&filhos=xxxx
var
  json: TJsonObject;
  FDQClientes: TFDQuery;
begin
  try
    json := TJsonObject.Create;
    FDQClientes := TFDQuery.Create(nil);
    FDQClientes.Connection := DM.FDConnection;

    if((Params.ItemsString['nome'].AsString = '') OR
      (Params.ItemsString['filhos'].AsString = ''))then
    begin
      json.AddPair('retorno', 'Par�metros n�o informados');
      Result := json.ToString;
      exit;
    end;

    try
      FDQClientes.Active := FALSE;
      FDQClientes.SQL.Clear;
      FDQClientes.SQL.Add('UPDATE CLIENTES SET FILHOS =:filhos ');
      FDQClientes.SQL.Add('WHERE NOME =:nome');
      FDQClientes.ParamByName('nome').Value := Params.ItemsString['nome'].AsString;
      FDQClientes.ParamByName('filhos').Value := Params.ItemsString['filhos'].asInteger;
      FDQClientes.ExecSQL;
      json.AddPair('retorno', 'OK');
    except on e:exception do
       json.AddPair('retorno',e.Message);
    end;
    Result := json.ToString;
  finally
    FDQClientes.DisposeOf;
    json.DisposeOf;

  end;
end;


procedure TDM.DWSEventsEventsListarClientesReplyEvent(var Params: TDWParams;
  var Result: string);
// localhost:8082/ListarClientes
var
  FDQClientes: TFDQuery;
  json : uDWJSONObject.TJSONValue;
begin
  try
    FDQClientes := TFDQuery.Create(nil);
    FDQClientes.Connection := DM.FDConnection;

    json := uDWJSONObject.TJSONValue.Create;

    FDQClientes.Active:= false;
    FDQClientes.SQL.clear;
    FDQClientes.SQL.Add('SELECT * FROM CLIENTES ');
    FDQClientes.SQL.Add('ORDER BY NOME');
    FDQClientes.Active:= true;

    json.LoadFromDataset('', FDQClientes,false,jmPureJSON);

    Result := json.ToJSON;
  finally
    json.DisposeOf;
    FDQClientes.DisposeOf;
  end;

end;

procedure TDM.DWSEventsEventsListarPessoasReplyEvent(var Params: TDWParams;
  var Result: string);
// localhost:8082/ListarPessoas
// localhost:8082/ListarPessoas?nacionalidade=xxxxx
var
   FDQPessoas : TFDQuery;
   json : uDWJSONObject.TJSONValue;
begin
  try
    FDQPessoas := TFDQuery.Create(nil);
    FDQPessoas.Connection := DM.FDConnection;

    json :=   uDWJSONObject.TJSONValue.Create;

    FDQPessoas.Active := FALSE;
    FDQPessoas.SQL.Clear;
    FDQPessoas.SQL.Add('SELECT P.NOMEPESSOA, N.DESCNAC FROM PESSOA P, NACIONALIDADE N ');
    FDQPessoas.SQL.Add('WHERE P.CODNAC = N.CODNACIONALIDADE ');

    if(Params.ItemsString['nacionalidade'].AsString<>'')then
    begin
        FDQPessoas.SQL.Add(' AND N.DESCNAC LIKE :nacionalidade');
        FDQPessoas.ParamByName('nacionalidade').Value := '%' +  Params.ItemsString['nacionalidade'].AsString + '%' ;
    end;

    FDQPessoas.SQL.Add('ORDER BY P.NOMEPESSOA');

    FDQPessoas.Active := TRUE;

    json.LoadFromDataset('', FDQPessoas, false, jmPureJSON);

    Result := json.ToJSON;

  finally
    json.DisposeOf;
    FDQPessoas.DisposeOf;

  end;



end;

procedure TDM.DWSEventsEventsValidarLoginReplyEvent(var Params: TDWParams;
//http://localhost:8080/ValidarLogin?login=xxxxx&senha=xxxx
  var Result: string);
var
  json : TJSONObject;
begin
  try
    json:= TJsonObject.Create;
    if(Params.ItemsString['login'].AsString='')then
    begin
      // json -> {"retorno":"mensagem"}
      json.AddPair('retorno','Usuario n�o informado');
      Result:= json.ToString;
      exit;
    end;

    try
      FDQUsuario.Active:= false;
      FDQUsuario.SQL.Clear;
      FDQUsuario.SQL.Add('SELECT * FROM USUARIO WHERE LOGIN =:login AND SENHA =:senha');
      FDQUsuario.ParamByName('login').Value:= Params.ItemsString['login'].AsString;
      FDQUsuario.ParamByName('senha').Value:= Params.ItemsString['senha'].AsString;

      FDQUsuario.Active:= true;

      if(FDQUsuario.RecordCount > 0)then
        json.AddPair('retorno','OK')
      else
        json.AddPair('retorno', 'Usuario ou senha inv�lido');
      Result := json.ToString;

      except
        json.AddPair('retorno', 'Erro ao validar login');
        Result := json.ToString;
      end;
    finally
      json.DisposeOf;
    end;
  end;

end.
