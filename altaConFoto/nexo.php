 <?php

 		if(isset($_GET['Salir']))

 			{
 	 			require "deslogear.php";	
 	 		}

 	 	
 	    else 
 	 	

 	 		{
 	 			header("Location:Perfil.php");
 	 		}


//header("Location:listarSesion.php");
?>