<?php

$conn = new PDO('pgsql:host=localhost;dbname=tw_nfe', 'postgres', '704802');

$sql = "SELECT * FROM geral.prd_produtos";

$resultado = $conn->query($sql);


$resultado->setFetchMode(PDO::FETCH_ASSOC);
foreach ($resultado as $result) {
    var_dump($result);
}