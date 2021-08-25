<?php

#Conexão com o BD
$servidor = 'localhost';
$usuario = 'web';
$senha = 'K52tg_o3';
$banco = 'academiaforte';

#Conecta
$link = mysqli_connect($servidor,$usuario,$senha,$banco) 
or die('Erro1: '.mysqli_error($link));

$sql = "SELECT * FROM cadastro WHERE ";
$sql .= "email = ".$_POST['user'];

$result = mysqli_query($link, $sql);

$valor = mysqli_fetch_array($result);

    $email = $valor['email'];
    $senha = $valor['senha'];

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Academia Firme&Forte</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        <main class="container-fluid vw-100 vh-100" style="background-image: url(img/login-screen.jpeg); background-size: cover;">
            <div class="row d-flex justify-content-center">
                <div class="col-8 col-md-4 rounded bg-dark text-white" style="margin-top: 10%;">
                    <form action="area_cliente.html">
                        <div class="mb-3 text-center">
                            <h1 class="display-5">Academia Firme&Forte</h1>
                            <small>Área do Cliente</small>
                        </div>
                        <div class="mb-3">
                            <label for="user" class="form-label">E-mail</label>
                            <input type="text" name="user" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" name="senha" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="form-control btn btn-success" value="Entrar">
                        </div>
                        <div class="mb-3">
                            <a href="index.html" class="text-white text-decoration-none"><small>Página inicial</small> </a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </body>
</html>