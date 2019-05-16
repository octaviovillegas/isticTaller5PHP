<?php

session_start();


var_dump($_POST);

/*
$archivo=fopen("usuarios.txt", "a");
$renglon=$_POST["correo"]."=>".$_POST["contraseña"]."\n";
*/
$archivo=fopen("usuarios.txt", "r");
while(!feof($archivo))
{
  $renglon = fgets($archivo);
  //echo $renglon."<br>";
  $datosArray=explode("=>", $renglon);

 	 //echo "<a href='#' class='list-group-item'>$datosArray[0]</a> <br>";
 	 if($_POST["correo"] ==trim($datosArray[0]))
 	 {
 	 	echo "sali";


 	 	if($_POST["contraseña"]==trim($datosArray[1]))
 	 	{
 	 		 $_SESSION['usuario']=$_POST["contraseña"];
 	 		header("Location:listarSesion.php");

 	 		//var_dump($_SESSION);
 	 	}
 	 }
}
//var_dump($_SESSION);
fclose($archivo);


?>
