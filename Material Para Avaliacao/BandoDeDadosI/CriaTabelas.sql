--Criar tabela acesso

CREATE TABLE acesso (
	logace varchar(255) NOT NULL,
	pasace varchar(32) NOT NULL,
	hinace varchar(50),
	nivace int NOT NULL,
	PRIMARY KEY (logace)
);

--Comentários

COMMENT ON COLUMN acesso.logace IS 'Usuário para acesso ao sistema';
COMMENT ON COLUMN acesso.pasace IS 'Senha de acesso de até 32 caracteres';
COMMENT ON COLUMN acesso.hinace IS 'Dica de lembrar senha de ate 50 caracteres';
COMMENT ON COLUMN acesso.nivace IS 'Nivel de acesso ao sistema';

--Criar tabela estado

CREATE TABLE estado (
	idest SERIAL NOT NULL,
	nomest varchar(50) NOT NULL,
	idpai int NOT NULL,
	PRIMARY KEY (idest)
);

--Comentários

COMMENT ON COLUMN estado.idest IS 'Código de identificação do estado';
COMMENT ON COLUMN estado.nomest IS 'Nome por extenso do estado';
COMMENT ON COLUMN estado.idpai IS 'Código do pais';

--Criar tabela faq

CREATE TABLE faq (
	idfaq SERIAL NOT NULL,
	duvfaq varchar(255) NOT NULL,
	logace varchar(255) NOT NULL,
	idusu int NOT NULL,
	PRIMARY KEY (idfaq)
);

--Comentários

COMMENT ON COLUMN faq.idfaq IS 'Identificação da pergunta/duvida';
COMMENT ON COLUMN faq.duvfaq IS 'Duvida referente ao COVID-19';
COMMENT ON COLUMN faq.logace IS 'Nome de usuario cadastrado';

--Criar tabela historico

CREATE TABLE historico (
	idhis SERIAL NOT NULL,
	parmedhis varchar(255) NOT NULL,
	idpro int NOT NULL,
	PRIMARY KEY (idhis)
);

--Comentários

COMMENT ON COLUMN historico.idhis IS 'Código de identificação do Histórico';
COMMENT ON COLUMN historico.parmedhis IS 'Parecer do médico que avaliou';
COMMENT ON COLUMN historico.idpro IS 'Identificação do prontuario';

--Criar tabela pais

CREATE TABLE pais (
	idpai SERIAL NOT NULL,
	nompai varchar(50) NOT NULL,
	PRIMARY KEY (idpai)
);

--Comentários

COMMENT ON COLUMN pais.idpai IS 'Código do pais';
COMMENT ON COLUMN pais.nompai IS 'Nome por extenso do pais';

--Criar tabela prontoAtendimento

CREATE TABLE prontoAtendimento (
	idproate SERIAL NOT NULL,
	nomproate int NOT NULL,
	lotproate int NOT NULL,
	telproate varchar(12) NOT NULL,
	cepproate varchar(255) NOT NULL,
	cidproate varchar(255) NOT NULL,
	baiproate varchar(255) NOT NULL,
	ruaproate varchar(255) NOT NULL, numproate int NOT NULL,
	idpai int NOT NULL,
	idest int NOT NULL,
	PRIMARY KEY (idproate)
);

--Comentários

COMMENT ON COLUMN prontoAtendimento.idproate IS 'Identificação do local de prontoatendimento';
COMMENT ON COLUMN prontoAtendimento.nomproate IS 'Nome do pronto atendimento';
COMMENT ON COLUMN prontoAtendimento.lotproate IS 'Lotação do pronto atendimento';
COMMENT ON COLUMN prontoAtendimento.telproate IS 'Telefone para contato do pronto atendimento';
COMMENT ON COLUMN prontoAtendimento.cepproate IS 'Endereço pronto atendimento';
COMMENT ON COLUMN prontoAtendimento.cidproate IS 'Cidade do prontoatendimento';
COMMENT ON COLUMN prontoAtendimento.baiproate IS 'Endereço pronto atendimento';
COMMENT ON COLUMN prontoAtendimento.ruaproate IS 'Endereço pronto atendimento';
COMMENT ON COLUMN prontoAtendimento.numproate IS 'Endereço pronto atendimento';
COMMENT ON COLUMN prontoAtendimento.idpai IS 'Identificação do pais do prontoatendimento';
COMMENT ON COLUMN prontoAtendimento.idest IS 'Identificação do estado do pronto atendimento';

--Criar tabela prontuario

CREATE TABLE prontuario (
	idpro SERIAL NOT NULL,
	nommedpro varchar(50) NOT NULL,
	datentpro date NOT NULL,
	dataltpro date NOT NULL,
	idproate int NOT NULL,
	idusu int NOT NULL,
	PRIMARY KEY (idpro)
);

--Comentários

COMMENT ON COLUMN prontuario.idpro IS 'identificação do prontuário';
COMMENT ON COLUMN prontuario.nommedpro IS 'Nome do médico que atendeu';
COMMENT ON COLUMN prontuario.datentpro IS 'Data de entrada do paciente';
COMMENT ON COLUMN prontuario.dataltpro IS 'Data de alta do paciente';
COMMENT ON COLUMN prontuario.idproate IS 'Identificação do pronto atendimento';
COMMENT ON COLUMN prontuario.idusu IS 'Identificação do usuário';

--Criar tabela sintomas

CREATE TABLE sintomas (
	idsin SERIAL NOT NULL,
	codsin int NOT NULL,
	nomsim varchar(50) NOT NULL,
	grasin int NOT NULL,
	idusu int NOT NULL,
	PRIMARY KEY (idsin)
);

--Comentários

COMMENT ON COLUMN sintomas.idsin IS 'Código de identificação do registro do sintoma';
COMMENT ON COLUMN sintomas.codsin IS 'Identificação do sintoma';
COMMENT ON COLUMN sintomas.nomsim IS 'Nome por extenso do sintoma';
COMMENT ON COLUMN sintomas.grasin IS 'Grau do sintoma';
COMMENT ON COLUMN sintomas.idusu IS 'Identificação do usuário';

--Criar tabela usuario

CREATE TABLE usuario (
	idusu SERIAL NOT NULL,
	nomusu varchar(50) NOT NULL,
	cpfusu varchar(15) NOT NULL,
	rgusu varchar(15) NOT NULL,
	idausu int NOT NULL,
	altusu float NOT NULL,
	telusu numeric(19, 0) NOT NULL,
	pesusu float NOT NULL,
	tipsanusu varchar(3) NOT NULL,
	sexusu char(1) NOT NULL,
	ruausu varchar(255) NOT NULL,
	numusu int NOT NULL,
	baiusu varchar(255) NOT NULL,
	idpai int NOT NULL,
	idest int NOT NULL,
	logace varchar(255) NOT NULL,
	PRIMARY KEY (idusu)
);

--Comentários

COMMENT ON COLUMN usuario.idusu IS 'Numero de identificação do usuário';
COMMENT ON COLUMN usuario.nomusu IS 'Nome do usuário';
COMMENT ON COLUMN usuario.cpfusu IS 'CPF do usuário';
COMMENT ON COLUMN usuario.rgusu IS 'RG do usuário';
COMMENT ON COLUMN usuario.idausu IS 'Idade do usuário';
COMMENT ON COLUMN usuario.altusu IS 'Altura do usuário em centimetros';
COMMENT ON COLUMN usuario.telusu IS 'Contato de telefone do usuario';
COMMENT ON COLUMN usuario.pesusu IS 'Peso do usuário em Kg';
COMMENT ON COLUMN usuario.tipsanusu IS 'Tipo sanguineo do usuário';
COMMENT ON COLUMN usuario.sexusu IS 'Sexo do usuário';
COMMENT ON COLUMN usuario.ruausu IS 'Rua usuario/paciente';
COMMENT ON COLUMN usuario.numusu IS 'Número casa usuário/paciente';
COMMENT ON COLUMN usuario.baiusu IS 'Bairro do usuário';
COMMENT ON COLUMN usuario.idpai IS 'Código de identificação do pais';
COMMENT ON COLUMN usuario.idest IS 'Código de identificação do estado';
COMMENT ON COLUMN usuario.logace IS 'Login do usuario';

--Criação dos checks

ALTER TABLE usuario 
	ADD CONSTRAINT usu_sexusu_ck check (sexusu in ('F', 'M'));

--Criação das chaves estrangeiras

ALTER TABLE faq ADD CONSTRAINT FKfaq9472 FOREIGN KEY (idusu) REFERENCES usuario (idusu);
ALTER TABLE prontuario ADD CONSTRAINT FKprontuario994830 FOREIGN KEY (idusu) REFERENCES usuario (idusu);
ALTER TABLE historico ADD CONSTRAINT FKhistorico335668 FOREIGN KEY (idpro) REFERENCES prontuario (idpro);
ALTER TABLE prontuario ADD CONSTRAINT FKprontuario389966 FOREIGN KEY (idproate) REFERENCES prontoAtendimento (idproate);
ALTER TABLE sintomas ADD CONSTRAINT FKsintomas305450 FOREIGN KEY (idusu) REFERENCES usuario (idusu);
ALTER TABLE usuario ADD CONSTRAINT FKusuario569700 FOREIGN KEY (logace) REFERENCES acesso (logace);
ALTER TABLE prontoAtendimento ADD CONSTRAINT FKProntoAten759521 FOREIGN KEY (idest) REFERENCES estado (idest);
ALTER TABLE prontoAtendimento ADD CONSTRAINT FKProntoAten541339 FOREIGN KEY (idpai) REFERENCES pais (idpai);
ALTER TABLE usuario ADD CONSTRAINT FKusuario891635 FOREIGN KEY (idest) REFERENCES estado (idest);
ALTER TABLE usuario ADD CONSTRAINT FKusuario409225 FOREIGN KEY (idpai) REFERENCES pais (idpai);
ALTER TABLE estado ADD CONSTRAINT FKestado201820 FOREIGN KEY (idpai) REFERENCES pais (idpai);
