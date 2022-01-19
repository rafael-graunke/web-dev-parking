<?php include('../db/daoVeiculo.php') ?>
<?php

$placa = $_POST['placa'];
$fabricante = $_POST['marca'];
$modelo = $_POST['modelo'];
$categoria = $_POST['categoria'];

if ($placa == "" || $fabricante == "" || $modelo == "" || $categoria == "") {
    //Erro
} else {
    cadastraVeiculo($placa, $fabricante, $modelo, $categoria);
    registraEntrada(buscaVeiculo($placa)['id']);
    header("Location: ../home.php");
}