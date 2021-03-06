<?php

/*
$conn = new mysqli('127.0.0.1', 'root', '704802', 'treinaweb');

// erros de conexão
if ($conn->connect_errno) {
    echo "código: " . $conn->connect_errno;
    echo "<br> mensagem: " . $conn->connect_error;
}

// erros de execução
$result = $conn->query('SELECT * FRO alunos');
if (!$result) {
    echo "código: " . $conn->errno;
    echo "<br>mensagem: " . $conn->error;
}*/

try {
    $conn = new mysqli('127.0.0.1', 'root', '704802', 'treinaweb');

    if ($conn->connect_errno) {
        throw new Exception($conn->error, $conn->errno);
    }

    $result = $conn->query('SELECT * FROM alunos WHERE id = 1');

    if (!$result) {
        throw new Exception($conn->error, $conn->errno);
    }

    var_dump($result->fetch_all());

} catch (Throwable $throwable) {
    echo "mensagem: "  . $throwable->getMessage();
    echo "<br>código erro: " . $throwable->getCode();
}