unit TabbedFormwithNavigation;

interface

uses
  System.SysUtils, System.Types, System.UITypes, System.Classes, System.Variants,
  FMX.Types, FMX.Controls, FMX.Forms, FMX.Graphics, FMX.Dialogs, FMX.TabControl, FMX.StdCtrls, FMX.Controls.Presentation,
  FMX.Gestures, System.Actions, FMX.ActnList, FMX.Objects, FMX.Edit,
  FireDAC.Stan.Intf, FireDAC.Stan.Option, FireDAC.Stan.Error, FireDAC.UI.Intf,
  FireDAC.Phys.Intf, FireDAC.Stan.Def, FireDAC.Stan.Pool, FireDAC.Stan.Async,
  FireDAC.Phys, FireDAC.Phys.PG, FireDAC.Phys.PGDef, FireDAC.FMXUI.Wait,
  Data.DB, FireDAC.Comp.Client, FireDAC.Stan.Param, FireDAC.DatS,
  FireDAC.DApt.Intf, FireDAC.DApt, FireDAC.Comp.DataSet;

type
  TTabbedwithNavigationForm = class(TForm)
    TabControl1: TTabControl;
    TabLoginCadastro: TTabItem;
    TabControl2: TTabControl;
    TabLogin: TTabItem;
    ToolBar1: TToolBar;
    lblTitle1: TLabel;
    btnNext: TSpeedButton;
    TabCadastro: TTabItem;
    ToolBar2: TToolBar;
    lblTitulo: TLabel;
    btnBack: TSpeedButton;
    TabConsultas: TTabItem;
    ToolBar3: TToolBar;
    GestureManager1: TGestureManager;
    ActionList1: TActionList;
    NextTabAction1: TNextTabAction;
    PreviousTabAction1: TPreviousTabAction;
    topo: TRectangle;
    corpo: TRectangle;
    Siz: TRectangle;
    SarsCovOpaco: TLabel;
    RNSoftwares: TLabel;
    RecEmail: TRectangle;
    RecSenha: TRectangle;
    Email: TLabel;
    Label2: TLabel;
    Senha: TLabel;
    RecLogin: TRectangle;
    EdtEmail: TEdit;
    EdtSenha: TEdit;
    RecEsqueciSenha: TRectangle;
    LblEsqueciSenha: TLabel;
    Label3: TLabel;
    TopoCadastro: TRectangle;
    CorpoCadastro: TRectangle;
    InfoCadastro: TRectangle;
    LblCadastro: TLabel;
    LblNomeCompleto: TLabel;
    Rectangle4: TRectangle;
    Rectangle5: TRectangle;
    Rectangle6: TRectangle;
    Rectangle7: TRectangle;
    LblCPF: TLabel;
    LlbRG: TLabel;
    LblIdade: TLabel;
    LblAltura: TLabel;
    Rectangle8: TRectangle;
    Edit1: TEdit;
    Edit2: TEdit;
    Edit3: TEdit;
    Edit4: TEdit;
    Edit5: TEdit;
    TabCadastro2: TTabItem;
    ToolBar6: TToolBar;
    Rectangle1: TRectangle;
    Label1: TLabel;
    Rectangle2: TRectangle;
    Rectangle3: TRectangle;
    Label4: TLabel;
    Label5: TLabel;
    Rectangle9: TRectangle;
    Edit6: TEdit;
    Rectangle10: TRectangle;
    Edit7: TEdit;
    Rectangle11: TRectangle;
    Edit8: TEdit;
    Label6: TLabel;
    Label7: TLabel;
    Label8: TLabel;
    Rectangle13: TRectangle;
    Edit10: TEdit;
    Label9: TLabel;
    TabCadastro3: TTabItem;
    ToolBar7: TToolBar;
    Rectangle14: TRectangle;
    Label10: TLabel;
    Rectangle15: TRectangle;
    Rectangle16: TRectangle;
    Label11: TLabel;
    Label12: TLabel;
    Rectangle17: TRectangle;
    Edit11: TEdit;
    Rectangle18: TRectangle;
    Edit12: TEdit;
    Rectangle19: TRectangle;
    Edit13: TEdit;
    Rectangle20: TRectangle;
    Edit14: TEdit;
    Label13: TLabel;
    Label14: TLabel;
    Label15: TLabel;
    CheckBox1: TCheckBox;
    CheckBox2: TCheckBox;
    Rectangle12: TRectangle;
    Label16: TLabel;
    Rectangle21: TRectangle;
    Label17: TLabel;
    Rectangle22: TRectangle;
    Label18: TLabel;
    Rectangle23: TRectangle;
    TituloConsulta: TLabel;
    Rectangle24: TRectangle;
    TabDuvidas: TTabItem;
    ToolBar4: TToolBar;
    Rectangle25: TRectangle;
    Label19: TLabel;
    Rectangle26: TRectangle;
    TabSintomas: TTabItem;
    ToolBar5: TToolBar;
    Rectangle27: TRectangle;
    Label20: TLabel;
    Rectangle28: TRectangle;
    RadioButton1: TRadioButton;
    FDConnection1: TFDConnection;
    FDPhysPgDriverLink1: TFDPhysPgDriverLink;
    FDQuery1: TFDQuery;
    procedure GestureDone(Sender: TObject; const EventInfo: TGestureEventInfo; var Handled: Boolean);
    procedure FormCreate(Sender: TObject);
    procedure FormKeyUp(Sender: TObject; var Key: Word; var KeyChar: Char; Shift: TShiftState);
    procedure Rectangle12Click(Sender: TObject);
    procedure Rectangle21Click(Sender: TObject);
    procedure Label18Click(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  TabbedwithNavigationForm: TTabbedwithNavigationForm;
  nome, cpf, rg, email, bairro, telefone, tipsan: String;
  idade, numrua: integer;
  peso, altura: real;
  sexo: char;

implementation

{$R *.fmx}
{$R *.LgXhdpiTb.fmx ANDROID}
{$R *.LgXhdpiPh.fmx ANDROID}
{$R *.NmXhdpiPh.fmx ANDROID}

procedure TTabbedwithNavigationForm.FormCreate(Sender: TObject);
begin
  { This defines the default active tab at runtime }
  TabControl1.ActiveTab := TabLoginCadastro;
end;

procedure TTabbedwithNavigationForm.FormKeyUp(Sender: TObject; var Key: Word; var KeyChar: Char; Shift: TShiftState);
begin
  if Key = vkHardwareBack then
  begin
    if (TabControl1.ActiveTab = TabLoginCadastro) and (TabControl2.ActiveTab = TabCadastro) then
    begin
      TabControl2.Previous;
      Key := 0;
    end;
  end;
end;

procedure TTabbedwithNavigationForm.GestureDone(Sender: TObject; const EventInfo: TGestureEventInfo; var Handled: Boolean);
begin
  case EventInfo.GestureID of
    sgiLeft:
      begin
        if TabControl1.ActiveTab <> TabControl1.Tabs[TabControl1.TabCount - 1] then
          TabControl1.ActiveTab := TabControl1.Tabs[TabControl1.TabIndex + 1];
        Handled := True;
      end;

    sgiRight:
      begin
        if TabControl1.ActiveTab <> TabControl1.Tabs[0] then
          TabControl1.ActiveTab := TabControl1.Tabs[TabControl1.TabIndex - 1];
        Handled := True;
      end;
  end;
end;

procedure TTabbedwithNavigationForm.Label18Click(Sender: TObject);
var
  Query: TFDQuery;

begin
    Query:= Query.Create(Self);
    Query.Connection := TabbedwithNavigationForm.FDConnection1;
    Query.Connection.Connected;
    Query.Close;
    Query.SQL.Clear;
    Query.Close;
    Query.SQL.Clear;
    Query.SQL.Add('INSERT INTO usuario');
    Query.SQL.Add('nomusu, cpfusu, rgusu, idausu, altusu, telusu, pesusu, tipsanusu, sexusu, ruausu, numusu, baiusu, idpai, idest, logace, cidusu');
    Query.SQL.Add('VALUES (:nome, :cpf, :rg, :idade, :altura, :telefone, :peso, :tipsan, :sexo, :rua, :numrua, :bairro, 1, 1, 2828602, :cidade)');
    Query.ParamByName('idade').AsInteger := StrToInt(Edit4.Text);
    Query.ParamByName('altura').AsInteger := StrToInt(Edit5.Text);
    Query.ParamByName('peso').AsFloat := StrToInt(Edit7.Text);
    Query.ParamByName('numrua').AsInteger := StrToInt(Edit13.Text);
    Query.ExecSQL;

    TabControl1.ActiveTab:= TabLoginCadastro;
end;

procedure TTabbedwithNavigationForm.Rectangle12Click(Sender: TObject);
begin
    TabControl2.ActiveTab := TabCadastro2;
    nome:= Edit1.Text;
    cpf:= Edit2.Text;
    rg:= Edit3.Text;
    idade:= StrToInt(Edit4.Text);
    altura:= StrToInt(Edit5.Text);
end;

procedure TTabbedwithNavigationForm.Rectangle21Click(Sender: TObject);
begin
    TabControl2.ActiveTab := TabCadastro3;

    telefone:= Edit6.Text;
    peso:= StrToFloat(Edit7.Text);
    tipsan:= Edit8.Text;
    sexo:= 'M';
end;

end.

