<?php

$servidor = "localhost";

$user = "id8703606_root";

$senha = "123456";

$db= "id8703606_cpw01";

$conexao =  mysql_pconnect($servidor, $user, $senha) or trigger_error(mysql_error(),E_USER_ERROR); 

$banco = mysql_select_db($db, $conexao) or die (mysql_error());
?>