<?php 

include("connection.php");

function buscaUsuario($usuario) {
    $conexao = dbConnect();
    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":usuario", $usuario);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    return $resultado;
}