<?php

//variaveis
$anoNovo = "2021";//string
echo($anoNovo);

$anoVelho = 2020;
echo($anoVelho);

echo "<br/>";
echo "<br/>";

$nome = "Joao";
$sobrenome = "Rocha";
$completo = $nome.$sobrenome;//concatenacao
echo($completo);//JoãoRocha

echo "<br/>";//nova linha
echo "<br/>";

//concatenação
$completo = "$nome" ." "."$sobrenome";
echo($completo);//João Rocha

//exit;//o php para a execução

//unset($nome);//limpar a variável

//if (isset($nome){//se $nome existe
// echo($nome);}

?>