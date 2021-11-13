<?php
include("../conectar.php");
$acao = $_POST["excluircadastro"];

//Excluir

if ($acao == "excluir"){
$usuarioexcluir = $_POST["apagaraluno"];
//Verificar se o usuário existe
$query = mysql_query("SELECT * FROM alunos WHERE id='$usuarioexcluir'") or die(mysql_error());
while($resultado = mysql_fetch_array($query))
{
}
mysql_query("DELETE FROM alunos WHERE id=$usuarioexcluir");
  header("Location: master.php"); exit;
}

//Excluir todos

if ($acao == "excluirtudo"){
//Verificar se o usuário existe
$query = mysql_query("SELECT * FROM alunos") or die(mysql_error());
while($resultado = mysql_fetch_array($query))
{
}
mysql_query("DELETE * FROM alunos");
  header("Location: master.php"); exit;
}
?>