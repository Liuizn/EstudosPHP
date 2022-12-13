<?php

require_once("config.php");

$sql = new Database();

$usuarios = $sql->select("SELECT carteira FROM clientes");

echo json_encode($usuarios);

?>