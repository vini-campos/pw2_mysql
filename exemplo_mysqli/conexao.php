<?php

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $host = "localhost";
    $banco = "banco";
    $user = "admin_vini";
    $pass = "Xx_414097879";

    try {
        $pdo = new PDO("mysql:host={$host};dbname={$banco}", $user, $pass);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        die("Erro na conexão" . $e->getMessage());
    }

    try {
        $conexao = new mysqli($host, $user, $pass, $banco);
        $conexao->set_charset("utf8");
        //mysqli_set_charset($conexao, "utf8");
    } catch (Exception $e) {
        throw new Exception("Problemas com a conexão do Banco de Dados : <br>" . $e->getMessage());
    }


// $conexao = @mysqli_connect($host, $user, $pass, $banco )
// or die ("Problemas com a conexão do Banco de Dados");
?>
