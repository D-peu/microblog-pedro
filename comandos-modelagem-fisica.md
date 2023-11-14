# Comandos SQL  para modelagem fisica

## Criar banco de dados 

```sql
CREATE DATABASE microblog_pedro CHARACTER SET utf8mb4;
```

## Criar tabela de usuários

```sql
CREATE TABLE usuarios(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome  VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    tipo ENUM('admin', 'editor') NOT NULL
);
```

# Faça o comando SQL para criação da tabela de notícias com todas as colunas: id, data, titulo, texto, resumo, imagem e usuario_id

```sql
CREATE TABLE noticias(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    data DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    titulo VARCHAR(150) NOT NULL,
    texto TEXT NOT NULL,
    resumo TINYTEXT NOT NULL,
    imagem VARCHAR(45) NOT NULL,
    usuario_id INT 
);
```


## Criar o relacionamento entre tabelas e a chave estrangeira 

```sql
ALTER TABLE noticias
    ADD CONSTRAINT fk_noticias_usuarios
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id);
```