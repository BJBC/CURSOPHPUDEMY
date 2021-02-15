<?php

//variavel super global
//$nome = (int)$_GET["a"];

//na url após o endereço vem uma "?" ela separa as áreas
//get e post sempre vem string
//para tornar inteiro damos um "cast"

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
echo "<br/>";echo "<br/>";

$nomme = $_SERVER["SCRIPT_NAME"];
echo $nomme;

