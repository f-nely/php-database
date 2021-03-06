<?php

$conn = new mysqli('127.0.0.1', 'root', '704802', 'treinaweb');

$sql = "SELECT * FROM alunos";

$resultado = $conn->query($sql);

/*while ($linha = $resultado->fetch_assoc()) {
    var_dump($linha);
}*/

$linhas = $resultado->fetch_all(MYSQLI_BOTH);

foreach ($linhas as $linha) {
    echo $linha['id'] . ' ' . $linha['nome'] . '<br>';
}
