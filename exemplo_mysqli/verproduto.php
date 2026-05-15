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

                $id = $_GET["id"];

                // ajustando a instrução select para ordenar por produto
                //$query = mysqli_query($conexao, "select * from tabelaimg order by produto");
                $sql = "select * from tabelaimg where id = $id";
                $query = $conexao->query($sql);

                $dados = $query->fetch_assoc();// mysqli_fetch_array($query);

                $produto = $dados["produto"];
                $codigo = $dados["codigo"];
                $descricao = $dados["descricao"];
                $valor = " R$: ". number_format($dados["valor"], 2, ",", ".");

                if (empty($dados['imagem'])){
                    $imagem = "SemImagem.png";
                }else{
                    $imagem = $dados['imagem'];
                }

            } 
            
            catch (Exception $e) {
                echo "<div
                    class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><h2> Aconteceu um erro: <br>\n {$e->getMessage()}\n</h2>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" arealabel=\"Close\"></button>
                </div>";
            }
			?>
            <?php if (!empty($codigo)): ?>
                <div class="card shadow" style="width: 35rem;">
                <img src="img/<?php echo $imagem?>" class="img-thumbnail img-fluid" alt="<?php echo $produto?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produto?></h5>
                    <p class="card-text"><?php echo "código: " . $codigo?></p>
                    <p class="card-text"><?php echo $descricao?></p>
                    <p class="card-text"><?php echo $valor?></p>
                    <a href="index.php" class="btn btn-primary">voltar</a>
                </div>
                </div>

            <?php else: ?>
                <div
                    class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h2> 
                        Aconteceu um erro: <br>Produto não encontrado<br>
                    </h2>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" arealabel="Close"></button>
                </div>";
            <?php endif; ?>

	    </main>
	    <script src="js/bootstrap.bundle.min.js"></script>
	</body>

</html>