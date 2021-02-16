<?php
//sobre json
$pessoas = array();

array_push($pessoas, array(
	'nome' => 'joão',
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

echo json_encode($pessoas);

//ESTÁ EM UTF8 -> tudo ok com acentos
$json = '[{"nome":"jo\u00e3o","idade":20,"sexo":"m"},{"nome":"maria","idade":25,"sexo":"f"}]';

echo "<br/>";echo "<br/>";
echo "$json";

echo "<br/>";echo "<br/>";
$data = json_decode($json, true);
//se não colocar "true" será um objeto
print_r($data);//para imprimir array

?>