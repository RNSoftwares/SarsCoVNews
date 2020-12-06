unit TabbedFormwithNavigation;

interface

uses
  System.SysUtils, System.Types, System.UITypes, System.Classes, System.Variants,
  FMX.Types, FMX.Controls, FMX.Forms, FMX.Graphics, FMX.Dialogs, FMX.TabControl, FMX.StdCtrls, FMX.Controls.Presentation,
  FMX.Gestures, System.Actions, FMX.ActnList, FMX.Objects, FMX.Edit,
  FireDAC.Stan.Intf, FireDAC.Stan.Option, FireDAC.Stan.Error, FireDAC.UI.Intf,
  FireDAC.Phys.Intf, FireDAC.Stan.Def, FireDAC.Stan.Pool, FireDAC.Stan.Async,
  FireDAC.Phys, FireDAC.FMXUI.Wait,
  Data.DB, FireDAC.Comp.Client, FireDAC.Stan.Param, FireDAC.DatS,
  FireDAC.DApt.Intf, FireDAC.DApt, FireDAC.Comp.DataSet, Datasnap.DBClient,
  System.Rtti, FMX.Grid.Style, FMX.Grid, FMX.ScrollBox;

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
    CorpoLogin: TRectangle;
    SarsCovOpaco: TLabel;
    RNSoftwares: TLabel;
    RecEmail: TRectangle;
    lblEmailLogin: TLabel;
    lblLogin: TLabel;
    lblSenhaLogin: TLabel;
    RecLogin: TRectangle;
    EdtEmail: TEdit;
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
    TabPerfil: TTabItem;
    ToolBar5: TToolBar;
    Rectangle27: TRectangle;
    Label20: TLabel;
    RecCorpoPerfil: TRectangle;
    RecMostrar: TRectangle;
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
    RecSenha: TRectangle;
    EdtSenha: TEdit;
    Label2: TLabel;
    radiomasc: TRadioButton;
    radiosexfem: TRadioButton;
    RecFoto: TRectangle;
    F: TRectangle;
    LblPerfil: TLabel;
    RecObsPerfil: TRectangle;
    RecEmailPerfil: TRectangle;
    RecNomePerfil: TRectangle;
    LblEmailPerfil: TLabel;
    LblObservacoes: TLabel;
    LblNomePerfil: TLabel;
    Label8: TLabel;
    Label9: TLabel;
    Label11: TLabel;
    LblSintomas: TLabel;
    CheckBox1: TCheckBox;
    CheckBox2: TCheckBox;
    CheckBox3: TCheckBox;
    CheckBox4: TCheckBox;
    Label4: TLabel;
    Grid1: TGrid;
    Column1: TColumn;
    Column2: TColumn;
    Column3: TColumn;
    Column4: TColumn;
    Column5: TColumn;
    Column6: TColumn;
    Label5: TLabel;
    Label6: TLabel;
    Label7: TLabel;
    Label12: TLabel;
    Label13: TLabel;
    Bot�oPerfil: TRectangle;
    Label14: TLabel;
    BotaoConsulta: TRectangle;
    Label15: TLabel;
    procedure GestureDone(Sender: TObject; const EventInfo: TGestureEventInfo; var Handled: Boolean);
    procedure FormCreate(Sender: TObject);
    procedure FormShow(Sender: TObject);
    procedure FormKeyUp(Sender: TObject; var Key: Word; var KeyChar: Char; Shift: TShiftState);
    procedure RecProximo1Click(Sender: TObject);
    procedure RecProximo2Click(Sender: TObject);
    procedure FormClose(Sender: TObject);
    procedure RecLoginClick(Sender: TObject);
    procedure RecFinalizarClick(Sender: TObject);
    procedure radiomascChange(Sender: TObject);
    procedure radiosexfemChange(Sender: TObject);
    procedure Bot�oPerfilClick(Sender: TObject);
    procedure BotaoConsultaClick(Sender: TObject);

    { Private declarations }
  public
    { Public declarations }
  end;

var
  TabbedwithNavigationForm: TTabbedwithNavigationForm;
  nome, cpf, rg, email, bairro, telefone, tipsan, rua, cidade, senha, senhaCadastro, login, emailCadastro: String;
  idade, numrua, altura, nivace: integer;
  peso: real;
  sexo, sexosel: char;

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
  DataModule1.FDQacesso.Active:= TRUE;
  DataModule1.FDQusuario.Active:= TRUE;
  DataModule1.FDQcidade.Active:= TRUE;
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

procedure TTabbedwithNavigationForm.radiomascChange(Sender: TObject);
begin
  sexosel:= 'M';
end;

procedure TTabbedwithNavigationForm.radiosexfemChange(Sender: TObject);
begin
  sexosel:= 'F';
end;

procedure TTabbedwithNavigationForm.RecLoginClick(Sender: TObject);
begin
  login:= EdtEmail.Text;
  senha:= EdtSenha.Text;

  DataModule1.FDQacesso.Active:= false;
  DataModule1.FDQacesso.SQL.Clear;
  DataModule1.FDQacesso.SQL.Add('SELECT * FROM acesso WHERE logace = :login AND pasace = :senha');
  DataModule1.FDQacesso.ParamByName('login').Value:= login;
  DataModule1.FDQacesso.ParamByName('senha').Value:= senha;
  DataModule1.FDQacesso.Active:= true;

  if(DataModule1.FDQacesso.RecordCount>0)then
    begin
      TabControl1.ActiveTab:= TabConsultas;
      showmessage('Logado com Sucesso');
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
    sexo:= sexosel;
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
  nivace:= 1;



  DataModule1.FDQusuario.SQL.Clear;
  DataModule1.FDQusuario.SQL.Add('INSERT INTO usuario');
  DataModule1.FDQusuario.SQL.Add('(nomusu, cpfusu, rgusu, idausu, altusu, telusu, pesusu, tipsanusu, sexusu, ruausu, numusu, baiusu)');
  DataModule1.FDQusuario.SQL.Add('VALUES (:nome, :cpf, :rg, :idade, :altura, :telefone, :peso, :tipsan, :sexo, :rua, :numrua, :bairro)');
  DataModule1.FDQusuario.ParamByName('nome').Value:= nome;
  DataModule1.FDQusuario.ParamByName('cpf').Value:= cpf;
  DataModule1.FDQusuario.ParamByName('rg').Value:= rg;
  DataModule1.FDQusuario.ParamByName('idade').Value:= idade;
  DataModule1.FDQusuario.ParamByName('altura').Value:= altura;
  DataModule1.FDQusuario.ParamByName('telefone').Value:= telefone;
  DataModule1.FDQusuario.ParamByName('peso').Value:= peso;
  DataModule1.FDQusuario.ParamByName('tipsan').Value:= tipsan;
  DataModule1.FDQusuario.ParamByName('sexo').Value:= sexo;
  DataModule1.FDQusuario.ParamByName('rua').Value:= rua;
  DataModule1.FDQusuario.ParamByName('numrua').Value:= numrua;
  DataModule1.FDQusuario.ParamByName('bairro').Value:= bairro;
  DataModule1.FDQusuario.ExecSQL;

  DataModule1.FDQcidade.SQL.Clear;
  DataModule1.FDQcidade.SQL.Add('INSERT INTO cidade');
  DataModule1.FDQcidade.SQL.Add('(nomcid)');
  DataModule1.FDQcidade.SQL.Add('VALUES (:cidade)');
  DataModule1.FDQcidade.ParamByName('cidade').Value := cidade;
  DataModule1.FDQcidade.ExecSQL;

  DataModule1.FDQacesso.SQL.Clear;
  DataModule1.FDQacesso.SQL.Add('INSERT INTO acesso');
  DataModule1.FDQacesso.SQL.Add('(logace, pasace, nivace)');
  DataModule1.FDQacesso.SQL.Add('VALUES (:emailCadastro, :senhaCadastro, :nivace)');
  DataModule1.FDQacesso.ParamByName('emailCadastro').Value := emailCadastro;
  DataModule1.FDQacesso.ParamByName('senhaCadastro').Value := senhaCadastro;
  DataModule1.FDQacesso.ParamByName('nivace').Value := nivace;
  DataModule1.FDQacesso.ExecSQL;


   TabControl2.ActiveTab := Tablogin;
   showmessage('Cadastro realizado com sucesso');
end;

procedure TTabbedwithNavigationForm.BotaoConsultaClick(Sender: TObject);
begin
  TabControl1.ActiveTab := TabConsultas
end;

procedure TTabbedwithNavigationForm.Bot�oPerfilClick(Sender: TObject);
begin
  TabControl1.ActiveTab := TabPerfil;
end;

procedure TTabbedwithNavigationForm.FormClose(Sender: TObject);
begin
  DataModule1.FDQacesso.Active:= FALSE;
  DataModule1.FDQusuario.Active:= FALSE;
  DataModule1.FDQcidade.Active:= FALSE;
  DataModule1.FDConnection1.Connected:= FALSE;
end;

end.