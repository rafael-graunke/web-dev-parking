<!DOCTYPE html>
<html lang="pt-bt">

<?php include_once("includes/head.php") ?>

<body>

    <div class="wrapper d-flex justify-content-center align-items-center vh-100">
        <div class="login">
            <div class="half-login half-bg">
                <h1 class="text-white title">Parking</h1>
                <h1 class="text-white subtitle">Estacionamento Inteligente</h1>
            </div>
            <div class="half-login">
                <h1 class="subtitle mb-3">Conectar-se</h1>
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
            <!-- <div class="d-flex justify-content-left align-items-center p-3">
                <img src="assets/img/logo.gif" alt="" width="100px">
                <h1>Parking</h1>
            </div>
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
            </form> -->
        </div>
    </div>

    <?php include_once("includes/foot.php") ?>
</body>

</html>