<?php include("db/daoVeiculo.php") ?>
<?php
$placa = $_GET['placa'];
$veiculo = buscaVeiculo($placa);
$id = $veiculo['id'];
$registro = buscaUltimoRegistro($id);

$entrada = new DateTime($registro['entrada']);
$saida = new DateTime($registro['saida']);

$diff = $saida->getTimestamp() - $entrada->getTimestamp();

$valor = ($diff / 60) * (5.50 / 60);

?>

<?php include('includes/head.php') ?>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <h3>Entrada:</h3>
                <h5><?php echo $registro['entrada'] ?></h5>
            </div>
            <div class="col text-center">
                <h3>Saída:</h3>
                <h5><?php echo $registro['saida'] ?></h5>
            </div>
            <div class="col text-center">
                <h3>Valor:</h3>
                <h5>R$ <?php echo round($valor, 2) ?></h5>
            </div>
        </div>
        <div class="row d-flex justify-content-end">
            <a href="home.php" class="btn btn-success">Finalizar</a>
        </div>

    </div>

    <?php include('includes/foot.php') ?>
</body>