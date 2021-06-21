CREATE TABLE users (
    id BIGSERIAL NOT NULL,
    name varchar(50) NOT NULL,
    cpf varchar(15) NOT NULL UNIQUE,
    age int4 NOT NULL,
    height int4 NOT NULL,
    phone varchar(255) NOT NULL,
    weight float4 NOT NULL,
    sex char(1) NOT NULL,
    adress varchar(255) NOT NULL,
    zip_code varchar(50) NOT NULL,
    city_id int8 NOT NULL, PRIMARY KEY (id)
);

COMMENT ON COLUMN users.id IS 'Numero de identificação do usuário';
COMMENT ON COLUMN users.name IS 'Nome do usuário';
COMMENT ON COLUMN users.cpf IS 'CPF do usuário';
COMMENT ON COLUMN users.age IS 'Idade do usuário';
COMMENT ON COLUMN users.height IS 'Altura do usuário em centimetros';
COMMENT ON COLUMN users.fone IS 'Contato de telefone do usuario';
COMMENT ON COLUMN users.weight IS 'Peso do usuário em Kg';
COMMENT ON COLUMN users.sex IS 'Sexo do usuário';
COMMENT ON COLUMN users.adress IS 'Rua usuario/paciente';

CREATE TABLE acesses (
    id BIGSERIAL NOT NULL,
    email varchar(255) NOT NULL UNIQUE,
    password varchar(32) NOT NULL,
    level int4 DEFAULT 1 NOT NULL,
    user_id int8 NOT NULL,
    PRIMARY KEY (id)
);

COMMENT ON COLUMN acesses.id IS 'id de acesso';
COMMENT ON COLUMN acesses.email IS 'Usuário para acesso ao sistema';
COMMENT ON COLUMN acesses.password IS 'Senha de acesso de até 32 caracteres';
COMMENT ON COLUMN acesses.nivace IS 'Nivel de acesso ao sistema';

CREATE TABLE countries (
    id BIGSERIAL NOT NULL,
    name varchar(50) NOT NULL,
    initials varchar(5) NOT NULL,
    PRIMARY KEY (id)
);

COMMENT ON COLUMN countries.id IS 'Código do pais';
COMMENT ON COLUMN countries.name IS 'Nome por extenso do pais';

CREATE TABLE states (
    id BIGSERIAL NOT NULL,
    name varchar(50) NOT NULL,
    country_id int8 NOT NULL,
    PRIMARY KEY (id)
);


COMMENT ON COLUMN states.id IS 'Código de identificação do estado';
COMMENT ON COLUMN states.name IS 'Nome por extenso do estado';
COMMENT ON COLUMN states.country_id IS 'Código do pais';

CREATE TABLE cities (
    id BIGSERIAL NOT NULL,
    name varchar(50) NOT NULL,
    state_id int8 NOT NULL,
    PRIMARY KEY (codcid)
);

COMMENT ON COLUMN cities.codcid IS 'Código da cidade';
COMMENT ON COLUMN cities.name IS 'Nome da cidade';

CREATE TABLE monitorings (
    id BIGSERIAL NOT NULL,
    degree int4 NOT NULL,
    timestamps timestamp(255) NOT NULL,
    user_id int8 NOT NULL,
    sympton_id int8 NOT NULL,
    created_at timestamp NOT NULL,
    updated_at timestamp,
    status int4 NOT NULL,
    PRIMARY KEY (id)
);

COMMENT ON COLUMN monitorings.id IS 'Identificação do local de prontoatendimento';
COMMENT ON COLUMN monitorings.degree IS 'gravidade do sintoma';

CREATE TABLE symptoms (
    id BIGSERIAL NOT NULL,
    name varchar(50) NOT NULL,
    PRIMARY KEY (id)
);

COMMENT ON COLUMN symptoms.id IS 'Código de identificação do registro do sintoma';
COMMENT ON COLUMN symptoms.name IS 'Nome por extenso do sintoma';

ALTER TABLE states ADD CONSTRAINT FKstates294072 FOREIGN KEY (country_id) REFERENCES countries (id);
ALTER TABLE cities ADD CONSTRAINT FKcities434231 FOREIGN KEY (state_id) REFERENCES states (id);
ALTER TABLE users ADD CONSTRAINT FKusers227988 FOREIGN KEY (city_id) REFERENCES cities (codcid);
ALTER TABLE acesses ADD CONSTRAINT FKacesses906999 FOREIGN KEY (user_id) REFERENCES users (id);
ALTER TABLE monitorings ADD CONSTRAINT FKmonitoring647781 FOREIGN KEY (user_id) REFERENCES users (id);
ALTER TABLE monitorings ADD CONSTRAINT FKmonitoring749248 FOREIGN KEY (sympton_id) REFERENCES symptoms (id);