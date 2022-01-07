<?php include("modules/auth.php") ?>
<?php include("includes/head.php") ?>

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
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Placa:</label>
                            <input type="text" class="form-control" id="recipient-name" <?php if (isset($_GET['placa'])) {
                                                                                            echo "value='" . $_GET['placa'] . "'";
                                                                                        } ?>>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <div class="container p-3">
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

    <?php include("includes/foot.php") ?>
    <?php if (isset($_GET['cadastra']) && $_GET['cadastra'] == 'true') { ?>
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#exampleModal').modal('show');
            });
        </script>
    <?php } ?>
</body>