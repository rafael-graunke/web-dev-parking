<?php 

include("connection.php");

function buscaVeiculo($placa) {
    $conexao = dbConnect();
    $sql = "SELECT * FROM veiculos WHERE placa = :placa";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":placa", $placa);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    return $resultado;
}

function cadastraVeiculo($placa, $fabricante, $modelo, $categoria) {
    $conexao = dbConnect();
    $sql = "INSERT INTO veiculos VALUES (default, :placa, :fabricante, :modelo, :categoria)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":placa", $placa);
    $stmt->bindParam(":fabricante", $fabricante);
    $stmt->bindParam(":modelo", $modelo);
    $stmt->bindParam(":categoria", $categoria);
    $stmt->execute();

}

function buscaUltimaEntrada($id) {
    $conexao = dbConnect();
    $sql = "SELECT * FROM entrada_saida
    INNER JOIN veiculos
    ON entrada_saida.veiculo_id = veiculos.id
    WHERE veiculos.id = :id
    ORDER BY DESC entrada_saida.id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    return $resultado['entrada'];
}

function buscaUltimaSaida($id) {
    $conexao = dbConnect();
    $sql = "SELECT * FROM entrada_saida
    INNER JOIN veiculos
    ON entrada_saida.veiculo_id = veiculos.id
    WHERE veiculos.id = :id
    ORDER BY DESC entrada_saida.id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    return $resultado['saida'];
}