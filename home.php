<?php include("modules/auth.php") ?>
<?php include("includes/head.php") ?>

<body>
    <?php include("includes/nav.php") ?>

    <div class="container p-3">
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="placa" id="placa" placeholder="Placa do Veículo">
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" >Buscar</button>
            </div>
        </form>
    </div>

    <?php include("includes/foot.php") ?>
</body>