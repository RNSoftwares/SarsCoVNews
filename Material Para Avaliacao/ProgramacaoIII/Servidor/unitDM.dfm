object DM: TDM
  Left = 0
  Top = 0
  ClientHeight = 354
  ClientWidth = 528
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object FDPhysPgDriverLink1: TFDPhysPgDriverLink
    VendorHome = 
      'D:\Desenvolvimento\Projetos\SarsCoVNews\Material Para Avaliacao\' +
      'ProgramacaoIII\Servidor\Win32\Debug'
    Left = 184
    Top = 48
  end
  object FDConnection: TFDConnection
    Params.Strings = (
      'Database=SarsCov'
      'User_Name=postgres'
      'Password=masterkey'
      'DriverID=PG')
    Connected = True
    LoginPrompt = False
    Left = 56
    Top = 40
  end
  object FDQUsuario: TFDQuery
    Active = True
    Connection = FDConnection
    SQL.Strings = (
      'SELECT * FROM USUARIO')
    Left = 56
    Top = 216
  end
end
