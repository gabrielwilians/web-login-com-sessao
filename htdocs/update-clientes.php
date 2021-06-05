<?php

	require 'banco.php';

	$id = null;
	if ( !empty($_GET['id']))
            {
		$id = $_REQUEST['id'];
            }

	if ( null==$id )
            {
		header("Location: index.php");
            }

	if ( !empty($_POST))
            {

		$nomeErro = null;
		$enderecoErro = null;


		$nome = $_POST['nome'];
		$endereco = $_POST['endereco'];


		//Validação
		$validacao = true;
		if (empty($nome))
                {
                    $nomeErro = 'Por favor digite o nome!';
                    $validacao = false;
                }


		if (empty($endereco))
                {
                    $endereco = 'Por favor digite o endereço!';
                    $validacao = false;
		}



		// update data
		if ($validacao)
                {
                    $pdo = Banco::conectar();
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "UPDATE cliente  set nome = ?, endereco = ? WHERE id = ?";
                    $q = $pdo->prepare($sql);
                    $q->execute(array($nome,$endereco,$id));
                    Banco::desconectar();
                    header("Location: index.php");
		}
	}
        else
            {
                $pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM cliente where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$nome = $data['nome'];
                $endereco = $data['endereco'];

		Banco::desconectar();
	}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>editar combinação</title>
</head>

<body>
    <div class="container">

        <div class="span10 offset1">
            <div class="card">
                <div class="card-header">
                    <h3 class="well"> Atualizar Contato </h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="update-clientes.php?id=<?php echo $id?>" method="post">

                        <div class="control-group <?php echo !empty($nomeErro)?'error':'';?>">
                            <label class="control-label">Concurso</label>
                            <div class="controls">
                                <input name="nome" class="form-control" size="50" type="text" placeholder=""
                                    value="<?php echo !empty($nome)?$nome:'';?>">
                                <?php if (!empty($nomeErro)): ?>
                                <span class="help-inline"><?php echo $nomeErro;?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="control-group <?php echo !empty($enderecoErro)?'error':'';?>">
                            <label class="control-label">combinação</label>
                            <div class="controls">
                                <input name="endereco" class="form-control" size="80" type="text" placeholder=""
                                    value="<?php echo !empty($endereco)?$endereco:'';?>">
                                <?php if (!empty($enderecoErro)): ?>
                                <span class="help-inline"><?php echo $enderecoErro;?></span>
                                <?php endif; ?>
                            </div>
                        </div>







                        <br />
                        <div class="form-actions">
                            <button type="submit" class="btn btn-warning">Atualizar</button>
                            <a href="index.php" type="btn" class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
