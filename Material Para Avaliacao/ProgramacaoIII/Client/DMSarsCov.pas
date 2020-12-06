unit DMSarsCov;

interface

uses
  System.SysUtils, System.Classes, FireDAC.Stan.Intf, FireDAC.Stan.Option,
  FireDAC.Stan.Error, FireDAC.UI.Intf, FireDAC.Phys.Intf, FireDAC.Stan.Def,
  FireDAC.Stan.Pool, FireDAC.Stan.Async, FireDAC.Phys, FireDAC.FMXUI.Wait,
  FireDAC.Stan.Param, FireDAC.DatS, FireDAC.DApt.Intf,
  FireDAC.DApt, Data.DB, FireDAC.Comp.DataSet, FireDAC.Comp.Client,
  FireDAC.Comp.UI, FireDAC.Phys.PG, FireDAC.Phys.PGDef;

type
    TDataModule1 = class(TDataModule)
    FDConnection1: TFDConnection;
    FDPhysPgDriverLink1: TFDPhysPgDriverLink;
    FDQacesso: TFDQuery;
    FDGUIxWaitCursor1: TFDGUIxWaitCursor;
    FDQusuario: TFDQuery;
    FDQcidade: TFDQuery;
    FDQacessologace: TWideStringField;
    FDQacessopasace: TWideStringField;
    FDQacessohinace: TWideStringField;
    FDQacessonivace: TIntegerField;
    FDQcidadecodcid: TIntegerField;
    FDQcidadenomcid: TWideStringField;
    FDQcidadeidest: TIntegerField;
    FDQusuarioidusu: TIntegerField;
    FDQusuarionomusu: TWideStringField;
    FDQusuariocpfusu: TWideStringField;
    FDQusuariorgusu: TWideStringField;
    FDQusuarioidausu: TIntegerField;
    FDQusuarioaltusu: TFloatField;
    FDQusuariotelusu: TWideStringField;
    FDQusuariopesusu: TFloatField;
    FDQusuariotipsanusu: TWideStringField;
    FDQusuariosexusu: TWideStringField;
    FDQusuarioruausu: TWideStringField;
    FDQusuarionumusu: TIntegerField;
    FDQusuariobaiusu: TWideStringField;
    FDQusuariocidusu: TWideStringField;
    FDQusuarioidpai: TIntegerField;
    FDQusuarioidest: TIntegerField;
    FDQusuariologace: TWideStringField;
    procedure DataModuleCreate(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  DataModule1: TDataModule1;

implementation

{%CLASSGROUP 'FMX.Controls.TControl'}

uses TabbedFormwithNavigation;

{$R *.dfm}

procedure TDataModule1.DataModuleCreate(Sender: TObject);
begin
  //FDConnection1.Connected:= FALSE;
  // conectar ao banco de dados local
  //FDConnection1.Params.Database := 'SarsCov';
  // indicar o nome do banco
  //FDConnection1.Params.UserName := 'postgres';
  // usuário e senha do banco, quando for local, usar esses
  //FDConnection1.Params.Password := 'masterkey';
  // indicar onde está a biblioteca para conexão
  //Driver.VendorLib := GetCurrentDir + '\lib\libpq.dll';
  // marcar a conexão como TRUE
  FDConnection1.Connected:= TRUE;
end;

end.
