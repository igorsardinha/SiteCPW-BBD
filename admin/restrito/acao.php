<?php
include "../conectar.php";

$acao = $_POST["txt_hidden"];

//Cadastrar
if ($acao == "cadastrar"){
if(isset($_POST["nome"])){
$nome = $_POST["nome"];
}
if(isset($_POST["user"])){
$user = $_POST["user"];
}
if(isset($_POST["email"])){
$email = $_POST["email"];
}
}
if(isset($_POST["senha"])){
$senha = $_POST["senha"];
}
if(isset($_POST["confsenha"])){
$confsenha = $_POST["confsenha"];
}
if(isset($_POST["nivel"])){
$nivel = $_POST["nivel"];
}
//Verificar se existem campos vazios
if ($user == ""  or $senha == "" or $confsenha == "" ){
echo '<b>Erro no cadastro</b>. Verifique se os dados foram preenchidos corretamente. <a href="novo.php">Clique aqui</a> para voltar.';
exit();
}
//Mostrar mensagem e encerrar programa se dados de confirmação não baterem
if ($confsenha <> $senha){
echo '<b>Erro no cadastro</b>. Verifique se o email/senha conferem com o email/senha de confirmação. <a href="novo.php">Clique aqui</a> para voltar.';
exit();
}
mysql_query("INSERT INTO usuarios (nome, usuario, email, senha, nivel) VALUES ('$nome', '$user', '$email', '$senha', '$nivel')");		
  header("Location: exclui.php"); exit;

?>