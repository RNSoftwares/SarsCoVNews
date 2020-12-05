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
  FireDAC.DApt.Intf, FireDAC.DApt, FireDAC.Comp.DataSet, Datasnap.DBClient;

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
    RecNome: TRectangle;
    RecCPF: TRectangle;
    RecRG: TRectangle;
    RecIdade: TRectangle;
    LblCPF: TLabel;
    LlbRG: TLabel;
    LblIdade: TLabel;
    LblAltura: TLabel;
    RecAltura: TRectangle;
    EdtNome: TEdit;
    EdtCPF: TEdit;
    EdtRG: TEdit;
    EdtIdade: TEdit;
    EdtAltura: TEdit;
    TabCadastro2: TTabItem;
    ToolBar6: TToolBar;
    Rectangle1: TRectangle;
    Label1: TLabel;
    Rectangle2: TRectangle;
    Rectangle3: TRectangle;
    LblCadastro2: TLabel;
    LblCelular: TLabel;
    RecCelular: TRectangle;
    EdtCelular: TEdit;
    RecPeso: TRectangle;
    EdtPeso: TEdit;
    RecSangue: TRectangle;
    EdtSangue: TEdit;
    LblPeso: TLabel;
    LblSangue: TLabel;
    LblSexo: TLabel;
    RecEmailCadastro: TRectangle;
    EdtEmailCadastro: TEdit;
    LblEmail: TLabel;
    CheckBox1: TCheckBox;
    CheckBox2: TCheckBox;
    RecProximo1: TRectangle;
    LblProximo: TLabel;
    RecProximo2: TRectangle;
    LblProximo1: TLabel;
    RecConsulta: TRectangle;
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
    RecMostrar: TRectangle;
    SizeGrip1: TSizeGrip;
    RecPesquisar: TRectangle;
    Rectangle30: TRectangle;
    Rectangle32: TRectangle;
    Rectangle33: TRectangle;
    Rectangle34: TRectangle;
    Edit9: TEdit;
    LblPesquisa: TLabel;
    Label21: TLabel;
    Action1: TAction;
    TabCadastro3: TTabItem;
    ToolBar7: TToolBar;
    Rectangle14: TRectangle;
    Label10: TLabel;
    CorpoCadastro3: TRectangle;
    InfoCadastro3: TRectangle;
    LblCadastro3: TLabel;
    LblCidade: TLabel;
    RecCidade: TRectangle;
    EdtCidade: TEdit;
    RecRua: TRectangle;
    EdtRua: TEdit;
    RecNumero: TRectangle;
    EdtNumero: TEdit;
    LblRua: TLabel;
    LblNumero: TLabel;
    LblBairro: TLabel;
    LblSenha: TLabel;
    RecBairro: TRectangle;
    RecSenhaCadastro: TRectangle;
    EdtBairro: TEdit;
    EdtSenhaCadastro: TEdit;
    RecFinalizar: TRectangle;
    procedure GestureDone(Sender: TObject; const EventInfo: TGestureEventInfo; var Handled: Boolean);
    procedure FormCreate(Sender: TObject);
    procedure FormShow(Sender: TObject);
    procedure FormKeyUp(Sender: TObject; var Key: Word; var KeyChar: Char; Shift: TShiftState);
    procedure RecProximo1Click(Sender: TObject);
    procedure RecProximo2Click(Sender: TObject);
    procedure FormClose(Sender: TObject);
    procedure RecLoginClick(Sender: TObject);
    procedure RecFinalizarClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  TabbedwithNavigationForm: TTabbedwithNavigationForm;
  nome, cpf, rg, email, bairro, telefone, tipsan, rua, cidade, senha, senhaCadastro, login, emailCadastro: String;
  idade, numrua, altura, nivace: integer;
  peso: real;
  sexo: char;

implementation

{$R *.fmx}

uses DMSarsCov;

{$R *.LgXhdpiTb.fmx ANDROID}
{$R *.LgXhdpiPh.fmx ANDROID}
{$R *.NmXhdpiPh.fmx ANDROID}

procedure TTabbedwithNavigationForm.FormCreate(Sender: TObject);
begin
  { This defines the default active tab at runtime }
  TabControl1.ActiveTab := TabLoginCadastro;
end;

procedure TTabbedwithNavigationForm.FormShow(Sender: TObject);
begin
  DataModule1.FDConnection1.Connected:= TRUE;
  DataModule1.FDQuery1.Active:= TRUE;
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

procedure TTabbedwithNavigationForm.RecLoginClick(Sender: TObject);
begin
  login:= EdtEmail.Text;
  senha:= EdtSenha.Text;

  DataModule1.FDQuery1.Active:= false;
  DataModule1.FDQuery1.SQL.Clear;
  DataModule1.FDQuery1.SQL.Add('SELECT * FROM acesso WHERE logace = :login AND pasace = :senha');
  DataModule1.FDQuery1.ParamByName('login').Value:= login;
  DataModule1.FDQuery1.ParamByName('senha').Value:= senha;
  DataModule1.FDQuery1.Active:= true;

  if(DataModule1.FDQuery1.RecordCount>0)then
    begin
      TabControl1.ActiveTab:= TabConsultas;
    end
  else
    showmessage('Login ou Senha incorretos')
end;

procedure TTabbedwithNavigationForm.RecProximo1Click(Sender: TObject);
begin
    nome:= EdtNome.Text;
    cpf:= EdtCPF.Text;
    rg:= EdtRG.Text;
    idade:= StrToInt(EdtIdade.Text);
    altura:= StrToInt(EdtAltura.Text);
    TabControl2.ActiveTab := TabCadastro2;
end;

procedure TTabbedwithNavigationForm.RecProximo2Click(Sender: TObject);
begin
    telefone:= EdtCelular.Text;
    peso:= StrToFloat(EdtPeso.Text);
    tipsan:= EdtSangue.Text;
    sexo:= 'M';
    emailCadastro:= edtEmailCadastro.Text;
    TabControl2.ActiveTab := TabCadastro3;
end;

procedure TTabbedwithNavigationForm.RecFinalizarClick(Sender: TObject);
begin
  cidade:= EdtCidade.Text;
  rua:= edtRua.Text;
  numrua:= StrToInt(edtNumero.Text);
  bairro:= edtBairro.Text;
  senhaCadastro:= edtSenhaCadastro.Text;
  nivace:= 5;

  DataModule1.FDQuery1.Active:= false;
  DataModule1.FDQuery1.SQL.Clear;
  DataModule1.FDQuery1.SQL.Add('INSERT INTO acesso (logace, pasace)');
  DataModule1.FDQuery1.SQL.Add('VALUES (:login, :emailCadastro)');
  DataModule1.FDQuery1.ParamByName('login').Value:= login;
  DataModule1.FDQuery1.ParamByName('emailCadastro').Value:= emailCadastro;
  DataModule1.FDQuery1.SQL.Add('INSERT INTO usuario (nomusu, cpfusu, rgusu, idausu, altusu, telusu, pesusu, tipsanusu, sexusu, ruausu, numusu, baiusu');
  DataModule1.FDQuery1.SQL.Add('VALUES (:nome, :cpf, :rg, :idade, :altura, :telefone, :peso, :tipsan, :sexo, :rua, :numrua, :bairro');
  DataModule1.FDQuery1.ParamByName('nome').Value:= nome;
  DataModule1.FDQuery1.ParamByName('cpf').Value:= cpf;
  DataModule1.FDQuery1.ParamByName('rg').Value:= rg;
  DataModule1.FDQuery1.ParamByName('idade').Value:= idade;
  DataModule1.FDQuery1.ParamByName('altura').Value:= altura;
  DataModule1.FDQuery1.ParamByName('telefone').Value:= telefone;
  DataModule1.FDQuery1.ParamByName('peso').Value:= peso;
  DataModule1.FDQuery1.ParamByName('tipsan').Value:= tipsan;
  DataModule1.FDQuery1.ParamByName('sexo').Value:= sexo;
  DataModule1.FDQuery1.ParamByName('rua').Value:= rua;
  DataModule1.FDQuery1.ParamByName('numrua').Value:= numrua;
  DataModule1.FDQuery1.ParamByName('bairro').Value:= bairro;
  DataModule1.FDQuery1.SQL.Add('INSERT INTO cidade (nomcid)');
  DataModule1.FDQuery1.SQL.Add('VALUES (:cidade)');
  DataModule1.FDQuery1.ParamByName('cidade').Value:= cidade;
  DataModule1.FDQuery1.SQL.Add('INSERT INTO acesso (logace, pasace, nivace)');
  DataModule1.FDQuery1.SQL.Add('VALUES (:emailCadastro, :senhaCadastro, :nivace)');
  DataModule1.FDQuery1.ParamByName('emailCadastro').Value:= emailCadastro;
  DataModule1.FDQuery1.ParamByName('senhaCadastro').Value:= senhaCadastro;
  DataModule1.FDQuery1.ParamByName('nivace').Value:= nivace;
  DataModule1.FDQuery1.Active:= true;
end;

procedure TTabbedwithNavigationForm.FormClose(Sender: TObject);
begin
  DataModule1.FDQuery1.Active:= FALSE;
  DataModule1.FDConnection1.Connected:= FALSE;
end;

end.
