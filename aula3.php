<?php

$nome = "eu ia brincar o carnaval";

echo $nome;
echo "<br/>";echo "<br/>";

//var_dump mostra o tipo e o tamanho da variável
var_dump($nome);
echo "<br/>";echo "<br/>";

//para eliminar a variável
unset($nome);
echo $nome;
echo "<br/>";echo "<br/>";

//para verificar se a variavel existe
//isset($nome);

$relogio = new DateTime();
//echo $relogio; APRESENTA ERRO
print_r($relogio); //o que é print_r????
echo "<br/>";echo "<br/>";
var_dump($relogio);
echo "<br/>";echo "<br/>";


$arquivo = fopen("aula3.php", 'r');
var_dump($arquivo);

