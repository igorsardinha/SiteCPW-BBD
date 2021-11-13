<?php

$servidor = "localhost";

$user = "id8703606_root";

$senha = "123456";

$db= "id8703606_cpw01";

$conexao =  mysql_pconnect($servidor, $user, $senha) or trigger_error(mysql_error(),E_USER_ERROR); 

$banco = mysql_select_db($db, $conexao) or die (mysql_error());


if(isset($_POST["nome"])){
$nome = $_POST["nome"];
}
if(isset($_POST["sobrenome"])){
$sobrenome = $_POST["sobrenome"];
}
if(isset($_POST["responsavel"])){
$responsavel = $_POST["responsavel"];
}
if(isset($_POST["telefone"])){
$telefone = $_POST["telefone"];
}
if(isset($_POST["celular"])){
$celular = $_POST["celular"];
}
if(isset($_POST["email"])){
$email = $_POST["email"];
}
if(isset($_POST["cursoescolha"])){
$curso = $_POST["cursoescolha"];
}
if(isset($_POST["cidade"])){
$cidade = $_POST["cidade"];
}

//Verificar se existem campos vazios
if ($nome == "" or $sobrenome == "" or $celular == ""){
header("Location: matriculaerro.html");
exit();
}

mysql_query("INSERT INTO alunos (nome, sobrenome, responsavel, telefone, celular, email, curso, cidade) VALUES ('$nome', '$sobrenome','$
	responsavel', '$telefone','$celular', '$email', '$curso', '$cidade')");

header("Location: matriculafeita.html");
?>
