<?php

$nome = "joao";

function teste() {
	global $nome;//nome agora é global
	echo $nome;
}

teste();

?>
