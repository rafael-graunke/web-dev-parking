<?php include("modules/auth.php") ?>
<?php include("includes/head.php") ?>
<?php include("db/daoCategoria.php") ?>

<body>
    <?php include("includes/nav.php") ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar Veículo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="modules/cadastraVeiculo.php" method="POST">
                        <div class="form-group">
                            <label for="placa" class="col-form-label">Placa:</label>
                            <input type="text" name="placa" class="form-control" id="placa" <?php if (isset($_GET['placa'])) {
                                                                                                echo "value='" . $_GET['placa'] . "'";
                                                                                            } ?>>
                        </div>
                        <div class="form-group">
                            <label for="marca">Marca:</label>
                            <input type="text" name="marca" id="marca" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="marca">Cor:</label>
                            <input type="text" name="cor" id="cor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="modelo" class="col-form-label">Modelo:</label>
                            <input type="text" name="modelo" id="modelo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria:</label>
                            <select name="categoria" id="categoria" class="form-control">
                                <?php foreach (buscaCategorias() as $categoria) { ?>
                                    <option value="<?php echo $categoria['id'] ?>"><?php echo $categoria['nome'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary ml-2">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <div class="wrapper d-flex align-items-center justify-content-center vh-100">
        <div class="search">
            <div class="w-100 mb-4">
                <h1 class="title mx-auto">Parking</h1>
            </div>
            <hr>
            <h1 class="subtitle">Inserir Placa</h1>
            <form action="modules/processaPlaca.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="placa" id="placa" placeholder="Placa do Veículo">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
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
    </div>

    <?php include("includes/foot.php") ?>
    <?php if (isset($_GET['cadastra']) && $_GET['cadastra'] == 'true') { ?>
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#exampleModal').modal('show');
            });
        </script>
    <?php } ?>
</body>