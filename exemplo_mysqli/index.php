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
		<main class="container">
			<h3>Semana 01 - Exemplo 04 - Listagem Geral de Produtos - Imagem</h3>
			<?php
            try {
                include_once "conexao.php";

                // ajustando a instrução select para ordenar por produto
                //$query = mysqli_query($conexao, "select * from tabelaimg order by produto");
                $sql = "select * from tabelaimg order by produto";
                $query = $conexao->query($sql);

                //vai usar try e catch
                // if (!$query) {
                // 	die('Query Inválida: ' . @mysqli_error($conexao));
                // 	}

                echo "<table class=\"table table-info table-hover\">";// note que abri echo com aspas para executar
                //comando html e os atributos das tags com apostrofe
                echo "<tr>
                        <th width=\"30px\">Id</th>
                        <th width=\"100px\">C&oacute;digo</th>
                        <th width=\"250px\">Produto</th>
                        <th width=\"100px\">Valor</th>
                        <th width=\"100px\">Produto</th>
					</tr>\n";

                while ($dados = mysqli_fetch_array($query)) {
                    echo "<tr>\n";
                    echo "<td class=\"centraliza\">" . $dados['id'] . "</td>\n";
                    echo "<td>" . $dados['codigo'] . "</td>\n";
                    echo "<td>" . $dados['produto'] . "</td>\n";
                    echo "<td> R$ " . number_format( $dados['valor'],2,",",".") . "</td>\n";
                    // buscando a na pasta imagem
                    if (empty($dados['imagem'])){
                        $imagem = "SemImagem.png";
                    }else{
                        $imagem = $dados['imagem'];
                    }
                    echo "<td><img src=\"img/$imagem\" class=\"foto img-thumbnail shadow\"></td>\n";
                    echo "</tr>\n";
                }
                echo "</table>";

                //mysqli_close($conexao);
            } catch (Exception $e) {
                echo "<div
                    class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><h2> Aconteceu um erro: <br>\n {$e->getMessage()}\n</h2>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" arealabel=\"Close\"></button>
                </div>";
            }
			?>
	    </main>
	    <script src="js/bootstrap.bundle.min.js"></script>
	</body>

</html>