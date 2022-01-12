<?php include("../db/daoVeiculo.php") ?>
<?php

$placa = $_POST['placa'];
$veiculo = buscaVeiculo($placa);

if ($veiculo == null) {
    header("Location: ../home.php?cadastra=true&placa=".$placa);
} else {
    $registro = buscaUltimoRegistro($veiculo['id']);

    if ($registro != null) {
        if ($registro['entrada'] != null && $registro['saida'] == null) {
            registraSaida($veiculo['id'], $registro['id']);
            header("Location: ../home.php?success=saida"); //Alterar
        } else if ($registro['entrada'] != null && $registro['saida'] != null) {
            registraEntrada($veiculo['id']);
            header("Location: ../home.php?success=entrada&entrada=".date("H:i:s")."&placa=".$placa);
        }
    } else {
        registraEntrada($veiculo['id']);
        header("Location: ../home.php?success=entrada&entrada=".date("H:i:s")."&placa=".$placa);
    }
}
