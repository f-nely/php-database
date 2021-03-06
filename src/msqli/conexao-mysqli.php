<?php

// Object oriented style
$conexao = new mysqli('127.0.0.1', 'root', '704802', 'treinaweb');

//var_dump($conexao);

// Procedural style
$connect = mysqli_connect('127.0.0.1', 'root', '704802', 'treinaweb');

var_dump($connect);