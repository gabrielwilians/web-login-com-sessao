<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>projeto</title>
</head>

<body>
    <div class="container">
        <!-- cabecalho-->
        <div class="jumbotron">
            <div class="col">
                <h1> Cadastrar Sequências </h1>
            </div>
            <div>
                <h4><span class="badge badge-light"> Autor: Gabriel Willian</span></h4>
            </div>
            <table class="table table-striped">
                <tr>
                    <th scope="col"> <a href="inserirnumeros.php" class="btn btn-success">Inserir numeros</a></th>
                    <th scope="col"> <a href="editar.php" class="btn btn-outline-info">editar</a></th>

                </tr>

<!--
                <tr>
                    <th scope="col"> <a href="cadastrarproduto.php" class="btn btn-success">Cadastrar Productos</a></th>
                    <th scope="col"><a href="listaproduto.php" class="btn btn-outline-info">Listar Productos</a></th>
                </tr>
-->
            </table>
        </div>


        <div class="row">

            <div class=" col-md-12 text-center">
                <img class="img-responsive" src="img/logo-inicio.png" alt="Imagem" />
            </div>
        </div>
    </div>


    <!--             <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'banco.php';
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM cliente ORDER BY id DESC';

                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
			                      echo '<th scope="row">'. $row['id'] . '</th>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['endereco'] . '</td>';
                            echo '<td>'. $row['telefone'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['sexo'] . '</td>';
                            echo '<td width=250>';
                            echo '<a class="btn btn-primary" href="read-clientes.php?id='.$row['id'].'">Info</a>';
                            echo ' ';
                            echo '<a class="btn btn-warning" href="update-clientes.php?id='.$row['id'].'">Atualizar</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="deletecliente.php?id='.$row['id'].'">Excluir</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        Banco::desconectar();
                        ?>
                </tbody>
            </table> -->
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
