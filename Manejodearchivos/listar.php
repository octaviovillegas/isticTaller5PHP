<?php

var_dump($_POST);
$archivo=fopen("usuarios.txt", "r");
while(!feof($archivo))
{
	$renglon = fgets($archivo);
	echo $renglon."<br>";
}




fclose($archivo);


?>
