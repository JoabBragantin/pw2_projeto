CREATE TABLE usuario {
    id_usuario INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    sexo CHAR NOT NULL,
    senha INT NOT NULL,
    dataNascimento DATE NOT NULL,
    telefone INT NOT NULL,
    PRIMARY KEY(id_aluno)
};

CREATE TABLE endereco {
    id_endereco INT NOT NULL AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    rua VARCHAR(100) NOT NULL,
    numero INT NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    cep INT NOT NULL,
    PRIMARY KEY(id_endereco),
    FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario)
};