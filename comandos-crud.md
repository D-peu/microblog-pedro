# Comandos SQL para operações de dados (CRUD)

## Resumo

- C: CREATE (INSERT) -> usado para inserir dados 
- R: READ (SELECT) -> usado para ler/consultar dados
- U: UPDATE (UPDATE) -> usado para atualizar dados
- D: DELETE (DELETE) -> usado para excluir dados 

## Exemplos

### INSERT na tabela de usuários

INSERT INTO usuarios(nome, email, senha, tipo)
VALUES(
    'Tiago B. dos Santos',
    'tiago@gmail.com',
    '123senac',
    'admin'
);

INSERT INTO usuarios(nome, email, senha, tipo)
VALUES(
    'Fulano da Silva',
    'fulano@gmail.com',
    '456',
    'editor'
), (
    'Beltrano Soares',
    'beltrano@msn.com',
    '000penha',
    'admin'
), (
    'Chapolin Colorado',
    'chapolin@vingadores.com.br',
    'marreta',
    'editor'
);

### SELECT na tabela de usuários

SELECT * FROM usuarios;

SELECT nome, email FROM usuarios;

SELECT nome, email FROM usuarios WHERE tipo = 'admin';

### UPDATE em dados da tabela de usuários

UPDATE usuarios SET tipo = 'admin' WHERE id = 4;

-- Obs: NUNCA ESQUEÇA DE PASSAR UMA CONDIÇÃO PARA O UPDATE!

### DELETE em dados da tabela de usuários

DELETE FROM usuarios WHERE id = 3;

-- Obs: NUNCA ESQUEÇA DE PASSAR UMA CONDIÇÃO PARA O UPDATE!


### INSERT na tabela de noticias 

INSERT INTO noticias(titulo, resumo, texto, imagem, usuario_id)
VALUE(
    'Descoberto oxigênio em Vênus',
    'Recentemente a sonda XYZ encontrou traços de oxigênio no planeta',
    'Nesta manhã, em um belo dia para a astronomia, pois foi feita uma incivél descoberta em relação ao espaço e sua infinita extensão...',
    'vanus.jpg',
    1
);


INSERT INTO noticias(titulo, resumo, texto, imagem, usuario_id)
VALUE(
    'Nova versão do VsCode',
    'Atualização inovadora já disponivel',
    'Dentre as novidades temos diversas possibilidades com inteligência artifial e melhor organização de arquivo e projetos em grupo',
    'vscode.png',
    5
);


INSERT INTO noticias(titulo, resumo, texto, imagem, usuario_id)
VALUE(
    'Onda de Calor no Brasil',
    'Calor de 40 graus assustador',
    'Tenha cuidado com os proximos dias, temos muitas formas de prevenir possiveis problemas',
    'sol.svg',
    1
);