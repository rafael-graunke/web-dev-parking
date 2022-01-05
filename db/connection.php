<?php
define("SERVER", "localhost");
define("USER", "root");
define("PASS", "root");
define("DB", "parking");

function dbConnect()
{
    try {
        $conexao = new PDO('mysql:host=' . SERVER . ';dbname=' . DB, USER, PASS);
        return $conexao;
    } catch (PDOException $e) {
        echo "Erro na conexão. Erro gerado: " . $e->getMessage();
    }
}