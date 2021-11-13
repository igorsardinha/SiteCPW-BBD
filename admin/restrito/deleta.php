<?php
include("../conectar.php");
$acao = $_POST["excluircadastro"];

//Excluir

if ($acao == "excluir"){
$usuarioexcluir = $_POST["apagaruser"];
//Verificar se o usuário existe
$query = mysql_query("SELECT * FROM usuarios WHERE id='$usuarioexcluir'") or die(mysql_error());
while($resultado = mysql_fetch_array($query))
{
}
mysql_query("DELETE FROM usuarios WHERE id=$usuarioexcluir");
  header("Location: exclui.php"); exit;
}
?>