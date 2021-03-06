<?php

try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=treinaweb', 'root', '704802');

    //PDO::ERRMODE_SILENT, PDO::ERRMODE_WARNING,
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $conn->query('SELECT * FROM alunos');

    /*$result->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($result as $aluno) {
        var_dump($aluno);
    }*/
    if (!$result) {
        $erro = $conn->errorInfo();

        throw new PDOException($erro[2], $erro[1]);
    }
    $alunos = $result->fetchAll(PDO::FETCH_OBJ);

    var_dump($alunos);


}catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
    echo "<br>código: " . $PDOException->getCode();
}