unit unitPrincipal;

interface

uses
  System.SysUtils, System.Types, System.UITypes, System.Classes, System.Variants,
  FMX.Types, FMX.Controls, FMX.Forms, FMX.Graphics, FMX.Dialogs, uDWAbout,
  uRESTDWBase, FMX.StdCtrls, FMX.Controls.Presentation;

type
  TfrmPrincipal = class(TForm)
    Label1: TLabel;
    Switch1: TSwitch;
    procedure FormShow(Sender: TObject);
    procedure Switch1Switch(Sender: TObject);
    procedure ConectarBanco();
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  frmPrincipal: TfrmPrincipal;

implementation

{$R *.fmx}

uses unitDM;



procedure TfrmPrincipal.ConectarBanco;
begin
    try
      DM.FDConnection.Params.Values['DriverID']:='PG';
      DM.FDConnection.Params.Values['DataBase'] := 'SarsCov';
      DM.FDConnection.Params.Values['User_Name'] := 'postgres';
      DM.FDConnection.Params.Values['Password'] := 'masterkey';
      DM.FDConnection.Connected:= true;
    except
      showmessage('Erro ao acessar o banco');
    end;
end;

procedure TfrmPrincipal.FormShow(Sender: TObject);
begin
  RESTServicePooler.ServerMethodClass := TDM;
  RESTServicePooler.Active := Switch1.IsChecked;
  ConectarBanco();
end;

procedure TfrmPrincipal.Switch1Switch(Sender: TObject);
begin
   RESTServicePooler.Active := Switch1.IsChecked;
   DM.FDConnection.Connected:= false;
end;



end.
