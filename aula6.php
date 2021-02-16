<?php
//sobre json
$pessoas = array();

array_push($pessoas, array(
	'nome' => 'joao',
	'idade' => 20,
	'sexo' => 'm'
));

array_push($pessoas, array(
	'nome' => 'maria',
	'idade' => 25,
	'sexo' => 'f'
));

print_r($pessoas);
echo "<br/>";echo "<br/>";
print_r($pessoas[1]);
echo "<br/>";echo "<br/>";
print_r($pessoas[1]['sexo']);
echo "<br/>";echo "<br/>";


?>