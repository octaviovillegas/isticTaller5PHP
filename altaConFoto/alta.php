<?php

var_dump($_FILES);
/*$archivo=fopen("usuarios.txt", "a");
$renglon=$_POST["correo"]."=>".$_POST["contraseña"]."\n";

fwrite($archivo,$renglon);

fclose($archivo);*/


//vincula el archivo php

include "persona.php";
$nuevaPersona=new Persona();


//$nuevaPersona->mostrar($_POST['correo']);
$nuevaPersona->correo=$_POST['correo']; 
$nuevaPersona->contraseña=$_POST['contraseña'];
$nuevaPersona->nombre=$_POST['nombre'];
$nuevaPersona->apellido=$_POST['apellido'];
$nuevaPersona->guardar();


?>
