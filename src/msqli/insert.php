<?php

$conn = new Mysqli('127.0.0.1', 'root', '704802', 'treinaweb');

$sql = "INSERT INTO alunos (id, nome) VALUES (3, 'Elton Minetto')";

var_dump($conn->query($sql));