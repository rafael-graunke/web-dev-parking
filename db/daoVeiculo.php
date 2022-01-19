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

function buscaUltimoRegistro($id) {
    $conexao = dbConnect();
    $sql = "SELECT entrada_saida.id AS id,
    entrada_saida.saida AS saida,
    entrada_saida.entrada AS entrada
    FROM entrada_saida
    INNER JOIN veiculos
    ON entrada_saida.veiculo_id = veiculos.id
    WHERE veiculos.id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $resultados = $stmt->fetchAll();

    $resultado = end($resultados);

    return $resultado;
}

function registraEntrada($id) {
    $conexao = dbConnect();
    $sql = "INSERT INTO entrada_saida VALUES (default, :data, default, :id)";
    $data = date('Y-m-d H:i:s');

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":data", $data);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    // print_r($stmt->errorInfo());
}

function registraSaida($id, $id_registro) {
    $conexao = dbConnect();
    $sql = "UPDATE entrada_saida SET saida = :data WHERE veiculo_id = :id AND entrada_saida.id = :id_registro";
    $data = date('Y-m-d H:i:s');

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":data", $data);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":id_registro", $id_registro);
    $stmt->execute();
    // print_r($stmt->errorInfo());
}