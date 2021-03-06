<?php

try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=treinaweb', 'root', '704802');

    $result = $conn->query("INSERT INTO alunos (id, nome) VALUES (4, 'Taylon Otwel')");

    var_dump($result);

}catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
}