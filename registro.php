<?php

#Conexão com o BD
$servidor = 'localhost';
$usuario = 'web';
$senha = 'K52tg_o3';
$banco = 'academiaforte';

#Conecta
$link = mysqli_connect($servidor,$usuario,$senha,$banco) 
or die('Erro1: '.mysqli_error($link));

#Importante criar uma verificação
if(isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'matricular')
{
    $sql = "INSERT INTO cadastro (nome,nascimento,sexo,cpf,telefone,email,senha,
    cep,endereco,cidade,bairro,estado) VALUES (";
    $sql .= "'".$_POST['nome']."',";
    $sql .= "'".$_POST['nascimento']."',"; 
    $sql .= "'".$_POST['sexo']."',";
    $sql .= "'".$_POST['cpf']."',";
    $sql .= "'".$_POST['tel']."',";
    $sql .= "'".$_POST['email']."',";
    $sql .= "'".md5($_POST['senha'])."',";
    $sql .= "'".$_POST['cep']."',";
    $sql .= "'".$_POST['endereco']."',";
    $sql .= "'".$_POST['cidade']."',";
    $sql .= "'".$_POST['bairro']."',";
    $sql .= "'".$_POST['estado']."'";
    $sql .= ")";

    #Roda o comando no BD
    $result = mysqli_query($link, $sql);

    #Recebe o feedback do BD caso tenha erro mostra o erro.
    if(!$result)
    {
        die('Erro2: '.mysqli_error($link));
    }

    #Se não houve erro então SUCESSO!
    else
    {
        echo 'A operação foi realizada com sucesso.';
    }


}
?>
