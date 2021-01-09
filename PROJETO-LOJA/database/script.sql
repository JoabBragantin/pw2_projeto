CREATE TABLE usuario (
    cpf INTEGER NOT NULL,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    sexo CHAR NOT NULL,
    senha INTEGER NOT NULL,
    dataNascimento DATE NOT NULL,
    telefone INTEGER NOT NULL,
    adm TINYINT NOT NULL,
    PRIMARY KEY(cpf)
);

CREATE TABLE endereco (
    id_endereco INT NOT NULL AUTO_INCREMENT,
    cpf INT NOT NULL,
    pais VARCHAR(2) NOT NULL,
    estado VARCHAR(2) NOT NULL,
    cidade VARCHAR(40) NOT NULL, 
    rua VARCHAR(100) NOT NULL,
    numero INT NOT NULL,
    cep INT NOT NULL,
    PRIMARY KEY(id_endereco),
    FOREIGN KEY(cpf) REFERENCES usuario (cpf)
);