<?php
$ponteiro = fopen("contador.txt", "r");
$conteudotxt = fread($ponteiro, 50);
$contador = $conteudotxt + 1;
$ponteiro = fopen("contador.txt", "w");
$escrever = fwrite($ponteiro, $contador);
$ponteiro = fopen("contador.txt", "r");
$conteudotxt = fread($ponteiro, 50);
echo $conteudotxt;
$fechar = fclose(fopen("contador.txt", "r"));
?>