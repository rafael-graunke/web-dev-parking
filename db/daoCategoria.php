<?php include("connection.php") ?>
<?php

function buscaCategorias() {
    $conexao = dbConnect();
    $sql = "SELECT * FROM categorias";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    return $resultado;
}