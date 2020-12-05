unit DMSarsCov;

interface

uses
  System.SysUtils, System.Classes, FireDAC.Stan.Intf, FireDAC.Stan.Option,
  FireDAC.Stan.Error, FireDAC.UI.Intf, FireDAC.Phys.Intf, FireDAC.Stan.Def,
  FireDAC.Stan.Pool, FireDAC.Stan.Async, FireDAC.Phys, FireDAC.FMXUI.Wait,
  FireDAC.Phys.PGDef, FireDAC.Stan.Param, FireDAC.DatS, FireDAC.DApt.Intf,
  FireDAC.DApt, Data.DB, FireDAC.Comp.DataSet, FireDAC.Comp.Client,
  FireDAC.Phys.PG, FireDAC.Comp.UI;

type
    TDataModule1 = class(TDataModule)
    FDConnection1: TFDConnection;
    FDPhysPgDriverLink1: TFDPhysPgDriverLink;
    FDQuery1: TFDQuery;
    FDGUIxWaitCursor1: TFDGUIxWaitCursor;
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
  // usu�rio e senha do banco, quando for local, usar esses
  //FDConnection1.Params.Password := 'masterkey';
  // indicar onde est� a biblioteca para conex�o
  //Driver.VendorLib := GetCurrentDir + '\lib\libpq.dll';
  // marcar a conex�o como TRUE
  FDConnection1.Connected:= TRUE;
end;

end.
