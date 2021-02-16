<?php
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
//Array ( [0] => Array ( [nome] => joão [idade] => 20 [sexo] => m ) [1] => Array ( [nome] => maria [idade] => 25 [sexo] => f ) )

print_r($pessoas[1]);
echo "<br/>";echo "<br/>";
//Array ( [nome] => maria [idade] => 25 [sexo] => f )

print_r($pessoas[1]['sexo']);
echo "<br/>";echo "<br/>";
//f

echo json_encode($pessoas);//TRANSFORMA ARRAY EM JSON

//ESTÁ EM UTF8 -> tudo ok com acentos => JSON RECEBIDO
$json = '[{"nome":"jo\u00e3o","idade":20,"sexo":"m"},{"nome":"maria","idade":25,"sexo":"f"}]';
echo "<br/>";echo "<br/>"; echo "$json";

echo "<br/>";echo "<br/>";
$data = json_decode($json, true);//TRANSFORMA JSON EM ARRAY
//se não colocar "true" será um objeto
print_r($data);//para imprimir array

echo "<br/>";echo "<br/>";
$data = json_decode($json);//TRANSFORMA JSON EM OBJETO
//se não colocar "true" será um objeto
print_r($data);//para imprimir array


?>