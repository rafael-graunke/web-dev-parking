<?php

include_once("../db/daoUsuario.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$user = buscaUsuario($usuario);

if ($user == null) {
    header("Location: ../index.php?error=true");
} else if ($user['senha'] == $senha) {
    session_start();
    $_SESSION['id'] = $user['id'];
    header("Location: ../home.php");
} else {
    header("Location: ../index.php?error=true");
}