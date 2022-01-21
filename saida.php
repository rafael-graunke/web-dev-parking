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

    <?php include("includes/nav.php") ?>

    <div class="wrapper d-flex align-items-center justify-content-center vh-100">
        <div class="search">
            <div class="w-100 mb-4">
                <h1 class="title mx-auto">Parking</h1>
            </div>
            <hr>
            <div class="row mt-4 mb-4">
                <div class="col text-center">
                    <h1 class="subtitle">Entrada:</h1>
                    <h1 class="subtitle"><?php echo date('H:i:s', strtotime($registro['entrada'])) ?></h1>
                </div>
                <div class="col text-center">
                    <h1 class="subtitle">Saída:</h1>
                    <h1 class="subtitle"><?php echo date('H:i:s', strtotime($registro['saida'])) ?></h1>
                </div>
                <div class="col text-center">
                    <h1 class="subtitle">Valor:</h1>
                    <h1 class="subtitle">R$ <?php echo round($valor, 2) ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="home.php" class="btn btn-primary btn-block">Finalizar</a>
                </div>
            </div>
        </div>
        <?php if (isset($_GET['success']) && $_GET['success'] == 'entrada') { ?>
            <div class="alert alert-success alert-dismissible fade show">
                <p>Entrada do veículo registrada com sucesso.</p>
                <p>Placa: <?php echo $_GET['placa'] ?></p>
                <p>Hora de Entrada: <?php echo $_GET['entrada'] ?></p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
    </div>
</body>