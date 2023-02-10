<?php
include_once 'ver_login.php';
$page_name = 'Painel';
include_once 'header.php';

echo 'Usuario: ' . $_SESSION['usuario_nome'] . '<br>';
echo 'ID: ' . $_SESSION['usuario_id'] . '<br>';
echo 'Perfil: ' . $_SESSION['usuario_perfil'] . '<br>';