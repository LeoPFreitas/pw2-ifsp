create database estoque;
use estoque;

create TABLE produto(
	idproduto 		INT NOT NULL AUTO_INCREMENT,
    nome 			VARCHAR(100),
    preco 			DECIMAL NOT NULL,
    descricao 		TEXT,
    data_criacao 	TIMESTAMP,
    
    PRIMARY KEY (idproduto)
)