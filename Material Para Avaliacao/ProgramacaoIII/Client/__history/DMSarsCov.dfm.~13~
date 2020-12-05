object DataModule1: TDataModule1
  OldCreateOrder = False
  OnCreate = DataModuleCreate
  Height = 389
  Width = 578
  object FDConnection1: TFDConnection
    Params.Strings = (
      'Database=SarsCov'
      'User_Name=postgres'
      'Password=masterkey'
      'DriverID=PG')
    Connected = True
    LoginPrompt = False
    Left = 72
    Top = 48
  end
  object FDPhysPgDriverLink1: TFDPhysPgDriverLink
    VendorHome = 
      'D:\Desenvolvimento\Projetos\SarsCoVNews\Material Para Avaliacao\' +
      'ProgramacaoIII\Client\Win32\Debug'
    Left = 208
    Top = 48
  end
  object FDQuery1: TFDQuery
    Connection = FDConnection1
    SQL.Strings = (
      'SELECT * FROM acesso')
    Left = 192
    Top = 136
  end
  object FDGUIxWaitCursor1: TFDGUIxWaitCursor
    Provider = 'FMX'
    Left = 56
    Top = 136
  end
end
