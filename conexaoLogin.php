<?php

$usuario = "root";
$senha = "";
$database = "projetologin";
$host = "localhost";

$mysqli = new mysqli ($host, $usuario, $senha, $database);

if($mysqli->error){
    die("Falha ao se conectar ao banco de dados" . $mysqli->error);
}
