<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'login';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->connect_error){
    die ("erro ao conectar ao banco de dados" . $coon->connect_error);
}

?>