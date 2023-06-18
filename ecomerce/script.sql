-- Criação das tabelas
CREATE TABLE produtos (
    id INT PRIMARY KEY,
    nome VARCHAR(255),
    valor DECIMAL(10, 2)
);

CREATE TABLE carrinho (
    id INT PRIMARY KEY,
    produto INT,
    quantidade INT,
    FOREIGN KEY (produto) REFERENCES produtos(id)
);

CREATE TABLE cupom (
    id INT PRIMARY KEY,
    nome VARCHAR(255),
);

-- Inserção de dados de exemplo
INSERT INTO produtos (id, nome, valor) VALUES
    (1, 'Produto A', 10.50),
    (2, 'Produto B', 15.75),
    (3, 'Produto C', 20.00);

INSERT INTO carrinho (id, produto, quantidade) VALUES
    (1, 1, 2),
    (2, 2, 1),
    (3, 3, 3);
