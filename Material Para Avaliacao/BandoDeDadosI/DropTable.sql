ALTER TABLE Usuario DROP CONSTRAINT FKUsuario821861;
ALTER TABLE Cidade DROP CONSTRAINT FKCidade498664;
ALTER TABLE FAQ DROP CONSTRAINT FKFAQ9472;
ALTER TABLE Prontuario DROP CONSTRAINT FKProntuario994830;
ALTER TABLE Historico DROP CONSTRAINT FKHistorico335668;
ALTER TABLE Prontuario DROP CONSTRAINT FKProntuario389966;
ALTER TABLE Sintomas DROP CONSTRAINT FKSintomas305450;
ALTER TABLE Usuario DROP CONSTRAINT FKUsuario569700;
ALTER TABLE ProntoAtendimento DROP CONSTRAINT FKProntoAten759521;
ALTER TABLE ProntoAtendimento DROP CONSTRAINT FKProntoAten541339;
ALTER TABLE Usuario DROP CONSTRAINT FKUsuario891635;
ALTER TABLE Usuario DROP CONSTRAINT FKUsuario409225;
ALTER TABLE Estado DROP CONSTRAINT FKEstado201820;
DROP TABLE IF EXISTS Acesso CASCADE;
DROP TABLE IF EXISTS Cidade CASCADE;
DROP TABLE IF EXISTS Estado CASCADE;
DROP TABLE IF EXISTS FAQ CASCADE;
DROP TABLE IF EXISTS Historico CASCADE;
DROP TABLE IF EXISTS Pais CASCADE;
DROP TABLE IF EXISTS ProntoAtendimento CASCADE;
DROP TABLE IF EXISTS Prontuario CASCADE;
DROP TABLE IF EXISTS Sintomas CASCADE;
DROP TABLE IF EXISTS Usuario CASCADE;
