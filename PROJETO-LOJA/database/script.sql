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

CREATE TABLE categoria(
    idCategoria INT NOT NULL AUTO_INCREMENT,
    descricao VARCHAR (60) NOT NULL,
    PRIMARY KEY (idCategoria)
);

CREATE TABLE produto(
    idProduto INT (11) NOT NULL AUTO_INCREMENT,
    idCategoria INT NOT NULL,
    preco DOUBLE NOT NULL,
    nomeProduto VARCHAR (30) NOT NULL,
    descricao VARCHAR (60) NOT NULL,
    imagem VARCHAR (60) NOT NULL,
    estoque_minimo INT (11) NOT NULL,
    estoque_maximo INT (11) NOT NULL,
    quant_estoque INTEGER NOT NULL,
    PRIMARY KEY (idProduto),
    FOREIGN KEY (idCategoria) REFERENCES categoria (idCategoria)
);
