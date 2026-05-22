<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP PW2</title>
    <link rel="icon" type="image/icon" href="img\iconphp.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        .centraliza {
            text-align: center;
        }

        .foto {
            width: 150px;
        }
    </style>
</head>

<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                include_once('conexao.php');
                // recuperando 
                $codigo = $_POST['codigo'];
                $produto = $_POST['produto'];	
                $descricao = $_POST['descricao'];	
                $data = $_POST['data'];	
                $valor = $_POST['valor'];	

                // criando a linha de INSERT
                $sql =  "insert into tabelaimg ( codigo,produto, descricao, data, valor) values ('$codigo','$produto', '$descricao', '$data', $valor)";
                $resultado = $conexao->query($sql);
                if ($resultado->num_rows > 0) {
                    //continuamos
                }
            }
            catch(Exception $e) {

            }

        }
    ?>
    <main class="container">
        <h3>Semana 01 - Exemplo 13 - Listagem Geral de Produtos - Imagem</h3>
        <form name="produto" action="incluir.php" method="post">
            <b>Código:</b> <input type="number" name="codigo" required="required"><br><br>
            <b>Produto:</b> <input type="text" name="produto" maxlength='80' style="width:550px"><br><br>
            <b>Descrição: </b><br><textarea name="descricao" rows='3' cols='100'
                style="resize: none;"></textarea><br><br>
            <b>Data: </b> <input type="date" name="data"><br><br>
            <b>Valor: R$ </b><input type="number" step="0.01" name="valor"> <br><br>
            <input type="submit" value="Ok "class="btn btn-secondary">&nbsp;&nbsp;
            <input type="reset" value="Limpar" class="btn btn-secondary">
        </form>
    </main>
</body>

</html>