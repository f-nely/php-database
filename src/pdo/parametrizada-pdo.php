<?php

$conn = new PDO('mysql:host=localhost;dbname=treinaweb', 'root', '704802');

/*$id = 1;

$query = $conn->prepare('SELECT * FROM alunos WHERE id = ?');

$query->bindValue(1, $id, PDO::PARAM_INT);

$query->execute();

foreach ($query as $linha) {
    var_dump($linha);
}*/

$query = $conn->prepare("SELECT * FROM alunos WHERE nome LIKE :nome");

$nome = '';

$query->bindParam(':nome', $nome, PDO::PARAM_STR);

$nome = '%ia%';

$query->execute();

foreach ($query as $linha) {
    var_dump($linha);
}



