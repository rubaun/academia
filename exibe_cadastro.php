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
$sql .= "id = ".$_GET['id'];

$result = mysqli_query($link, $sql);

$valor = mysqli_fetch_array($result);

    $nome = $valor["nome"];
    $nascimento = $valor['nascimento']; 
    $sexo = $valor['sexo'];
    $cpf = $valor['cpf'];
    $tel = $valor['telefone'];
    $email = $valor['email'];
    $cep = $valor['cep'];
    $endereco = $valor['endereco'];
    $cidade = $valor['cidade'];
    $bairro = $valor['bairro'];
    $estado = $valor['estado'];

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
        <main>
          <div class="container-fluid">
              <div class="row mt-5"><br></div>
                <div class="text-center"> 
                  <h2 class="display-3">Dados Cadastrais</h2>
                  <small>Academia Firme&Forte</small>
                </div>
                <div class="row d-flex justify-content-center" id="contato">
                    <div class="col-lg-8">
                      <form method="POST" action="registro.php">
                            <div class="mb-3 col-md-6 float-start p-2">
                                <label for="nome" class="form-label">Nome Completo:</label>
                                <p class="text-black-50"><?echo $nome ?>
                            </div>
                            <div class="mb-3 p-2 col-md-6 float-start">
                              <label for="nascimento" class="form-label">Data de Nascimento:</label>
                              <p class="text-black-50"><? echo $nascimento ?></p>
                            </div>
                            <div class="mb-3 p-2 col-md-6 float-start">
                              <label for="sexo" class="form-label">Sexo:</label>
                              <p class="text-black-50"><? echo $sexo ?></p>
                            </div>
                            <div class="mb-3 col-md-6 float-start p-2">
                              <label for="cpf" class="form-label">CPF:</label>
                              <p class="text-black-50"><? echo $cpf ?></p>  
                            </div>
                            <div class="mb-3 col-md-6 float-start p-2">
                                <label for="tel" class="form-label">Telefone:</label>
                                <p class="text-black-50"><? echo $tel ?></p>
                            </div>
                            <div class="mb-3 col-md-6 float-start p-2">
                            <label for="email" class="form-label">E-mail:</label>
                            <p class="text-black-50"><? echo $email ?></p>
                            </div>
                            <div class="mb-3 col-md-6 float-start p-2">
                              <label for="cep" class="form-label">CEP:</label>
                              <p class="text-black-50"><? echo $cep ?></p>
                            </div>
                            <div class="mb-3 col-md-12 float-start p-2">
                                <label for="endereco" class="form-label">Endereço:</label>
                                <p class="text-black-50"><? echo $endereco ?></p>
                            </div>
                            <div class="mb-3 col-md-4 float-start p-2">
                              <label for="cidade" class="form-label">Cidade:</label>
                              <p class="text-black-50"><? echo $cidade ?></p>
                            </div>
                            <div class="mb-3 col-md-4 float-start p-2">
                              <label for="bairro" class="form-label">Bairro:</label>
                              <p class="text-black-50"><? echo $bairro ?></p>
                            </div>
                            <div class="mb-3 col-md-4 float-start p-2">
                              <label for="cidade" class="form-label">Estado:</label>
                              <p class="text-black-50"><? echo $estado ?></p>
                            </div>
                      </form>
                    </div>
                </div>
                <div class="row"><br></div> 
            </div>
            
        </main>
        
        <footer class="footer mt-auto py-3 bg-success text-center">
            <div class="container">
                <p class="text-white">Academia Firme&Forte</p>
                <p class="text-white">Sua vida e sua saúde sempre firme e forte!</p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </body>
</html>