<?php

$conexao = mysqli_connect('localhost', 'root', '704802', 'treinaweb');

$result = mysqli_query($conexao, 'SELECT * FROM alunos');

var_dump(mysqli_fetch_all($result));