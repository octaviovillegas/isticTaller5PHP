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
 	 	echo " <br> ok correo $datosArray[1] ". $_POST['contraseña'];


 	 	if($_POST["contraseña"]==trim($datosArray[1]))
 	 	{
 	 		 $_SESSION['usuario']=$_POST["correo"];
 	 		echo "<br>  ok clave";
 	 		//var_dump($_SESSION);
 	 	}
 	 }
}
echo "sali";

//var_dump($_SESSION);
header("Location:listarSesion.php");
fclose($archivo);


?>
