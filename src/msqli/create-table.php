<?php

$conexao = new mysqli('127.0.0.1', 'root', '704802', 'treinaweb');

$sql = "CREATE TABLE alunos (id INT PRIMARY KEY, nome VARCHAR(100))";

if ($conexao->query($sql)) {
    echo "Tabela criada com sucesso";
}

//var_dump($conexao);

