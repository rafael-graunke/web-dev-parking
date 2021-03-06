<?php include('../db/daoVeiculo.php') ?>
<?php

$placa = $_POST['placa'];
$fabricante = $_POST['marca'];
$modelo = $_POST['modelo'];
$categoria = $_POST['categoria'];
$cor = $_POST['cor'];

if ($placa == "" || $fabricante == "" || $modelo == "" || $categoria == "" || $cor == "") {
    header("Location: ../home.php?error=true");
} else {
    cadastraVeiculo($placa, $fabricante, $modelo, $categoria, $cor);
    registraEntrada(buscaVeiculo($placa)['id']);
    header("Location: ../home.php?success=entrada&entrada=".date("H:i:s")."&placa=".$placa);
}