<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>resultados</title>
</head>

<body>
    <div class="container">
        <!-- cabecalho-->
        <div class="jumbotron">
            <div class="row">
                <h2> Resultados  </h2>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>


                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'banco.php';
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM cliente ORDER BY id DESC';

                        foreach($pdo->query($sql)as $row)
                        {




                          	echo substr_count ( 'vezes:  '.$row['nome'].' ', ' 1 ' );
                            echo "</br>";



                        }
                        Banco::desconectar();
                        ?>
                </tbody>
            </table>
        </div>
        <a href="index.php" type="btn" class="btn btn-default">Voltar</a>
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
