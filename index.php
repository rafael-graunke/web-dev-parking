<!DOCTYPE html>
<html lang="pt-bt">

<?php include_once("includes/head.php") ?>

<body>

    <div class="wrapper d-flex justify-content-center">
        <div class="login">
            <form action="modules/login.php" method="POST">
                <div class="form-group">
                    <input type="text" name="usuario" id="usuario" placeholder="Usuário" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="senha" id="senha" placeholder="Senha" class="form-control">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Conectar</button>
                </div>
            </form>
        </div>
    </div>

    <?php include_once("includes/foot.php") ?>
</body>

</html>