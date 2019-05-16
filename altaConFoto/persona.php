<?php

class Persona 
{
	//atributos

	public $correo;
	public $clave;
	public $nombre;
	public $apellido;

	function guardar()
	{
		//echo $this->correo;
		//echo $this->clave;
		$archivo=fopen("usuarios.txt", "a");
		$renglon=$this->correo."=>".$this->contraseña."=>".$this->nombre."=>".$this->apellido."\n";

		fwrite($archivo,$renglon);

		fclose($archivo);

	}

	function mostrar($algo)
	{
		echo "hola".$algo;

	}

	


}

?>
