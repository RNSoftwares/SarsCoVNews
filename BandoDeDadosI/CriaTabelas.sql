CREATE TABLE Acesso (logace varchar(255) NOT NULL, pasace varchar(32) NOT NULL, hinace varchar(50), nivace int4 NOT NULL, PRIMARY KEY (logace));

COMMENT ON COLUMN Acesso.logace IS 'Usuário para acesso ao sistema';
COMMENT ON COLUMN Acesso.pasace IS 'Senha de acesso de até 32 caracteres';
COMMENT ON COLUMN Acesso.hinace IS 'Dica de lembrar senha de ate 50 caracteres';
COMMENT ON COLUMN Acesso.nivace IS 'Nivel de acesso ao sistema';

CREATE TABLE Cidade (codcid SERIAL NOT NULL, nomcid varchar(50) NOT NULL, idest int4 NOT NULL, PRIMARY KEY (codcid));

COMMENT ON COLUMN Cidade.codcid IS 'Código da cidade';
COMMENT ON COLUMN Cidade.nomcid IS 'Nome da cidade';

CREATE TABLE Estado (idest SERIAL NOT NULL, nomest varchar(50) NOT NULL, idpai int4 NOT NULL, PRIMARY KEY (idest));

COMMENT ON COLUMN Estado.idest IS 'Código de identificação do estado';
COMMENT ON COLUMN Estado.nomest IS 'Nome por extenso do estado';
COMMENT ON COLUMN Estado.idpai IS 'Código do pais';

CREATE TABLE FAQ (idfaq SERIAL NOT NULL, duvfaq varchar(255) NOT NULL, logace varchar(255) NOT NULL, idusu int4 NOT NULL, PRIMARY KEY (idfaq));

COMMENT ON COLUMN FAQ.idfaq IS 'Identificação da pergunta/duvida';
COMMENT ON COLUMN FAQ.duvfaq IS 'Duvida referente ao COVID-19';
COMMENT ON COLUMN FAQ.logace IS 'Nome de usuario cadastrado';

CREATE TABLE Historico (idhis SERIAL NOT NULL, parmedhis varchar(255) NOT NULL, idpro int4 NOT NULL, PRIMARY KEY (idhis));

COMMENT ON COLUMN Historico.idhis IS 'Código de identificação do Histórico';
COMMENT ON COLUMN Historico.parmedhis IS 'Parecer do médico que avaliou';
COMMENT ON COLUMN Historico.idpro IS 'Identificação do prontuario';
CREATE TABLE Pais (idpai SERIAL NOT NULL, nompai varchar(50) NOT NULL, PRIMARY KEY (idpai));
COMMENT ON COLUMN Pais.idpai IS 'Código do pais';
COMMENT ON COLUMN Pais.nompai IS 'Nome por extenso do pais';

CREATE TABLE ProntoAtendimento (idproate SERIAL NOT NULL, nomproate int4 NOT NULL, lotproate int4 NOT NULL, telproate varchar(12) NOT NULL, cepproate varchar(255) NOT NULL, cidproate varchar(255) NOT NULL, baiproate varchar(255) NOT NULL, ruaproate varchar(255) NOT NULL, numproate int4 NOT NULL, idpai int4 NOT NULL, idest int4 NOT NULL, PRIMARY KEY (idproate));

COMMENT ON COLUMN ProntoAtendimento.idproate IS 'Identificação do local de prontoatendimento';
COMMENT ON COLUMN ProntoAtendimento.nomproate IS 'Nome do pronto atendimento';
COMMENT ON COLUMN ProntoAtendimento.lotproate IS 'Lotação do pronto atendimento';
COMMENT ON COLUMN ProntoAtendimento.telproate IS 'Telefone para contato do pronto atendimento';
COMMENT ON COLUMN ProntoAtendimento.cepproate IS 'Endereço pronto atendimento';
COMMENT ON COLUMN ProntoAtendimento.cidproate IS 'Cidade do prontoatendimento';
COMMENT ON COLUMN ProntoAtendimento.baiproate IS 'Endereço pronto atendimento';
COMMENT ON COLUMN ProntoAtendimento.ruaproate IS 'Endereço pronto atendimento';
COMMENT ON COLUMN ProntoAtendimento.numproate IS 'Endereço pronto atendimento';
COMMENT ON COLUMN ProntoAtendimento.idpai IS 'Identificação do pais do prontoatendimento';
COMMENT ON COLUMN ProntoAtendimento.idest IS 'Identificação do estado do pronto atendimento';

CREATE TABLE Prontuario (idpro SERIAL NOT NULL, nommedpro varchar(50) NOT NULL, datentpro date NOT NULL, dataltpro date NOT NULL, idproate int4 NOT NULL, idusu int4 NOT NULL, PRIMARY KEY (idpro));

COMMENT ON COLUMN Prontuario.idpro IS 'identificação do prontuário';
COMMENT ON COLUMN Prontuario.nommedpro IS 'Nome do médico que atendeu';
COMMENT ON COLUMN Prontuario.datentpro IS 'Data de entrada do paciente';
COMMENT ON COLUMN Prontuario.dataltpro IS 'Data de alta do paciente';
COMMENT ON COLUMN Prontuario.idproate IS 'Identificação do pronto atendimento';
COMMENT ON COLUMN Prontuario.idusu IS 'Identificação do usuário';

CREATE TABLE Sintomas (idsin SERIAL NOT NULL, codsin int4 NOT NULL, nomsim varchar(50) NOT NULL, grasin int4 NOT NULL, idusu int4 NOT NULL, PRIMARY KEY (idsin));

COMMENT ON COLUMN Sintomas.idsin IS 'Código de identificação do registro do sintoma';
COMMENT ON COLUMN Sintomas.codsin IS 'Identificação do sintoma';
COMMENT ON COLUMN Sintomas.nomsim IS 'Nome por extenso do sintoma';
COMMENT ON COLUMN Sintomas.grasin IS 'Grau do sintoma';
COMMENT ON COLUMN Sintomas.idusu IS 'Identificação do usuário';

CREATE TABLE Usuario (idusu SERIAL NOT NULL, nomusu varchar(50) NOT NULL, cpfusu varchar(15) NOT NULL, rgusu varchar(15) NOT NULL, idausu int4 NOT NULL, altusu float4 NOT NULL, telusu varchar(50) NOT NULL, pesusu float4 NOT NULL, tipsanusu varchar(3) NOT NULL, sexusu char(1) NOT NULL, ruausu varchar(255) NOT NULL, numusu int4 NOT NULL, baiusu varchar(255) NOT NULL, idpai int4 NOT NULL, idest int4 NOT NULL, logace varchar(255) NOT NULL, codcid int4 NOT NULL, PRIMARY KEY (idusu));

COMMENT ON COLUMN Usuario.idusu IS 'Numero de identificação do usuário';
COMMENT ON COLUMN Usuario.nomusu IS 'Nome do usuário';
COMMENT ON COLUMN Usuario.cpfusu IS 'CPF do usuário';
COMMENT ON COLUMN Usuario.rgusu IS 'RG do usuário';
COMMENT ON COLUMN Usuario.idausu IS 'Idade do usuário';
COMMENT ON COLUMN Usuario.altusu IS 'Altura do usuário em centimetros';
COMMENT ON COLUMN Usuario.telusu IS 'Contato de telefone do usuario';
COMMENT ON COLUMN Usuario.pesusu IS 'Peso do usuário em Kg';
COMMENT ON COLUMN Usuario.tipsanusu IS 'Tipo sanguineo do usuário';
COMMENT ON COLUMN Usuario.sexusu IS 'Sexo do usuário';
COMMENT ON COLUMN Usuario.ruausu IS 'Rua usuario/paciente';
COMMENT ON COLUMN Usuario.numusu IS 'Número casa usuário/paciente';
COMMENT ON COLUMN Usuario.baiusu IS 'Bairro do usuário';
COMMENT ON COLUMN Usuario.idpai IS 'Código de identificação do pais';
COMMENT ON COLUMN Usuario.idest IS 'Código de identificação do estado';
COMMENT ON COLUMN Usuario.logace IS 'Login do usuario';

ALTER TABLE Usuario ADD CONSTRAINT FKUsuario821861 FOREIGN KEY (codcid) REFERENCES Cidade (codcid);
ALTER TABLE Cidade ADD CONSTRAINT FKCidade498664 FOREIGN KEY (idest) REFERENCES Estado (idest);
ALTER TABLE FAQ ADD CONSTRAINT FKFAQ9472 FOREIGN KEY (idusu) REFERENCES Usuario (idusu);
ALTER TABLE Prontuario ADD CONSTRAINT FKProntuario994830 FOREIGN KEY (idusu) REFERENCES Usuario (idusu);
ALTER TABLE Historico ADD CONSTRAINT FKHistorico335668 FOREIGN KEY (idpro) REFERENCES Prontuario (idpro);
ALTER TABLE Prontuario ADD CONSTRAINT FKProntuario389966 FOREIGN KEY (idproate) REFERENCES ProntoAtendimento (idproate);
ALTER TABLE Sintomas ADD CONSTRAINT FKSintomas305450 FOREIGN KEY (idusu) REFERENCES Usuario (idusu);
ALTER TABLE Usuario ADD CONSTRAINT FKUsuario569700 FOREIGN KEY (logace) REFERENCES Acesso (logace);
ALTER TABLE ProntoAtendimento ADD CONSTRAINT FKProntoAten759521 FOREIGN KEY (idest) REFERENCES Estado (idest);
ALTER TABLE ProntoAtendimento ADD CONSTRAINT FKProntoAten541339 FOREIGN KEY (idpai) REFERENCES Pais (idpai);
ALTER TABLE Usuario ADD CONSTRAINT FKUsuario891635 FOREIGN KEY (idest) REFERENCES Estado (idest);
ALTER TABLE Usuario ADD CONSTRAINT FKUsuario409225 FOREIGN KEY (idpai) REFERENCES Pais (idpai);
ALTER TABLE Estado ADD CONSTRAINT FKEstado201820 FOREIGN KEY (idpai) REFERENCES Pais (idpai);