<?php
    require 'banco.php';

    if(!empty($_POST))
    {
        //Acompanha os erros de validação
        $nomeErro = null;
        $enderecoErro = null;


        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];


        //Validaçao dos campos:
        $validacao = true;
        if(empty($nome))
        {
            $nomeErro = 'Por favor digite o seu nome!';
            $validacao = false;
        }

        if(empty($endereco))
        {
            $enderecoErro = 'Por favor digite o seu endereço!';
            $validacao = false;
        }




        //Inserindo no Banco:
        if($validacao)
        {
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO cliente (nome, endereco) VALUES(?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$endereco));
            Banco::desconectar();
            header("Location:index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Adicionar jogos</title>
</head>

<body>
    <div class="container">
        <div clas="span10 offset1">
            <div class="card">
                <div class="card-header">
                    <h3 class="well"> Adicionar ultimos jogos para gerar combinações  </h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="inserirnumeros.php" method="post">
<!-- nome -->
                        <div  class="control-group <?php echo !empty($nomeErro)?'error ' : '';?>">
                            <label class="control-label">concurso</label>
                            <div class="controls">
                                <input size="50" class="form-control" name="nome" type="text" placeholder="digite o concurso correspondente"
                                    required="" value="<?php echo !empty($nome)?$nome: '';?>">
                                <?php if(!empty($nomeErro)): ?>
                                <span class="help-inline"><?php echo $nomeErro;?></span>
                                <?php endif;?>
                            </div>
                        </div>
<!-- endereço -->
                        <div class="control-group <?php echo !empty($enderecoErro)?'error ': '';?>">
                            <label class="control-label">combinação (ex: 00 01 02) em pares</label>
                            <div class="controls">
                                <input  size="80" class="form-control" name="endereco" type="text" placeholder="digite a combinação"
                                    required="" value="<?php echo !empty($endereco)?$endereco: '';?>">
                                <?php if(!empty($enderecoErro)): ?>
                                <span class="help-inline"><?php echo $enderecoErro;?></span>
                                <?php endif;?>
                            </div>
                        </div>









                            </div>
                        </div>

                        <div class="form-actions">
                            <br />

                            <button type="submit" class="btn btn-success">Adicionar</button>
                            <a href="index.php" type="btn" class="btn btn-default">Voltar</a>

                        </div>
                    </form>
                </div>
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
