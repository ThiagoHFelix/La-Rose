/*
 ===================================================================
  @Arquivo: La'Rose SQL                              
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data Auteração: 03/01/2018                     
  @Projeto: La-Rose                                
 ===================================================================   
 */

 
 CREATE TABLE PESSOA(
	 
	 id integer auto_increment,
     nome_usuario varchar(20) not null,
     senha varchar(30) not null,
	 nome varchar(60) not null,
	 email varchar(60) not null,
	 telefone varchar(20) not null,
	 sexo char(1) not null,
	 status boolean not null,
	 nascimento date not null,
	 tipo varchar(20) not null,
	 funcao varchar(45) not null,
	 data_cadastro date NOT NULL,
	 
	 constraint PK_PESSOA primary key (id),
	 constraint CK_SEXO check(upper(sexo) = 'M' or upper(sexo) = 'F'),
	 constraint CK_STATUS_PE check (upper(status) = 'ATIVO' or upper(status) = 'INATIVO'),
	 constraint CK_TIPO check(upper(tipo) = 'CLIENTE' or upper(tipo) = 'ADM')
 );
 
 CREATE TABLE AGENDAMENTO(
 
	id integer auto_increment,
    data date not null,
    hora time not null,
    status boolean not null,
    pessoa_id integer not null,
    
    constraint PK_AGENDAMENTO primary key (id),
    constraint CK_STATUS_AG check (upper(status) = 'DISPONIVEL' or upper(status) = 'INDISPONIVEL'),
    constraint FK_PESSOA foreign key (pessoa_id) references PESSOA (id)
 
 );
 
 CREATE TABLE AVISO (
 
	id integer auto_increment,
    titulo varchar(45) not null,
    status boolean not null,
    mensagem varchar(350) not null,
    pessoa_id integer NOT NULL,
    
    constraint PK_AVISO primary key (id),
    constraint FK_PESSOA_ foreign key (pessoa_id) references PESSOA (id),
    constraint CK_STATUS_AV check (upper(status) = 'ATIVO' or upper(status) = 'INATIVO') 
 
 );
 
 /*========= TRIGGER ===========*/
	 DELIMITER $$
	 CREATE TRIGGER TR_AGENDAMENTO 
	 BEFORE INSERT ON AGENDAMENTO
	 FOR EACH ROW
		BEGIN 
			IF NEW.DATA IS NULL THEN 
				SET NEW.DATA = CURRENT_DATE();
			ELSEIF NEW.HORA IS NULL THEN
				SET NEW.HORA = CURRENT_TIME();
			END IF;
		END$$
	 DELIMITER ; 
 /*========= / TRIGGER ===========*/	 
 
 COMMIT;