object DataModule1: TDataModule1
  OldCreateOrder = False
  OnCreate = DataModuleCreate
  Height = 389
  Width = 578
  object FDConnection1: TFDConnection
    Params.Strings = (
      'Database=sarscov'
      'User_Name=postgres'
      'Password=masterkey'
      'Port=5433'
      'DriverID=PG')
    Connected = True
    LoginPrompt = False
    Left = 72
    Top = 48
  end
  object FDPhysPgDriverLink1: TFDPhysPgDriverLink
    VendorHome = 
      'E:\'#193'rea de Trabalho\SarsCoVNews\Material Para Avaliacao\Programa' +
      'caoIII\Client\Win32\Debug'
    Left = 208
    Top = 48
  end
  object FDQacesso: TFDQuery
    Active = True
    Connection = FDConnection1
    SQL.Strings = (
      'SELECT * FROM acesso;')
    Left = 192
    Top = 136
    object FDQacessologace: TWideStringField
      FieldName = 'logace'
      Origin = 'logace'
      ProviderFlags = [pfInUpdate, pfInWhere, pfInKey]
      Size = 255
    end
    object FDQacessopasace: TWideStringField
      FieldName = 'pasace'
      Origin = 'pasace'
      Size = 32
    end
    object FDQacessohinace: TWideStringField
      FieldName = 'hinace'
      Origin = 'hinace'
      Size = 50
    end
    object FDQacessonivace: TIntegerField
      FieldName = 'nivace'
      Origin = 'nivace'
    end
  end
  object FDGUIxWaitCursor1: TFDGUIxWaitCursor
    Provider = 'FMX'
    Left = 56
    Top = 136
  end
  object FDQusuario: TFDQuery
    Active = True
    Connection = FDConnection1
    SQL.Strings = (
      'SELECT * FROM usuario')
    Left = 192
    Top = 208
    object FDQusuarioidusu: TIntegerField
      FieldName = 'idusu'
      Origin = 'idusu'
      ProviderFlags = [pfInUpdate, pfInWhere, pfInKey]
    end
    object FDQusuarionomusu: TWideStringField
      FieldName = 'nomusu'
      Origin = 'nomusu'
      Size = 50
    end
    object FDQusuariocpfusu: TWideStringField
      FieldName = 'cpfusu'
      Origin = 'cpfusu'
      Size = 15
    end
    object FDQusuariorgusu: TWideStringField
      FieldName = 'rgusu'
      Origin = 'rgusu'
      Size = 15
    end
    object FDQusuarioidausu: TIntegerField
      FieldName = 'idausu'
      Origin = 'idausu'
    end
    object FDQusuarioaltusu: TFloatField
      FieldName = 'altusu'
      Origin = 'altusu'
    end
    object FDQusuariotelusu: TWideStringField
      FieldName = 'telusu'
      Origin = 'telusu'
      Size = 15
    end
    object FDQusuariopesusu: TFloatField
      FieldName = 'pesusu'
      Origin = 'pesusu'
    end
    object FDQusuariotipsanusu: TWideStringField
      FieldName = 'tipsanusu'
      Origin = 'tipsanusu'
      Size = 3
    end
    object FDQusuariosexusu: TWideStringField
      FieldName = 'sexusu'
      Origin = 'sexusu'
      FixedChar = True
      Size = 1
    end
    object FDQusuarioruausu: TWideStringField
      FieldName = 'ruausu'
      Origin = 'ruausu'
      Size = 255
    end
    object FDQusuarionumusu: TIntegerField
      FieldName = 'numusu'
      Origin = 'numusu'
    end
    object FDQusuariobaiusu: TWideStringField
      FieldName = 'baiusu'
      Origin = 'baiusu'
      Size = 255
    end
    object FDQusuariocidusu: TWideStringField
      FieldName = 'cidusu'
      Origin = 'cidusu'
      Size = 255
    end
    object FDQusuarioidpai: TIntegerField
      FieldName = 'idpai'
      Origin = 'idpai'
    end
    object FDQusuarioidest: TIntegerField
      FieldName = 'idest'
      Origin = 'idest'
    end
    object FDQusuariologace: TWideStringField
      FieldName = 'logace'
      Origin = 'logace'
      Size = 255
    end
  end
  object FDQcidade: TFDQuery
    Active = True
    Connection = FDConnection1
    SQL.Strings = (
      'SELECT * FROM cidade')
    Left = 128
    Top = 200
    object FDQcidadecodcid: TIntegerField
      FieldName = 'codcid'
      Origin = 'codcid'
      ProviderFlags = [pfInUpdate, pfInWhere, pfInKey]
    end
    object FDQcidadenomcid: TWideStringField
      FieldName = 'nomcid'
      Origin = 'nomcid'
      Size = 50
    end
    object FDQcidadeidest: TIntegerField
      FieldName = 'idest'
      Origin = 'idest'
    end
  end
end
