<?php

try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=treinaweb', 'root', '704802');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->beginTransaction();

    $conn->query("INSERT INTO alunos (id, nome) VALUES (5, 'Sebastian')");
    $conn->query("UPDATE alunos SET nome = 'Sebastian Bergmann' WHERE id = 5");

    $conn->commit();

}catch (PDOException $PDOException) {
    $conn->rollBack();
    echo $PDOException->getMessage();
    echo "<br>código: " . $PDOException->getCode();
}