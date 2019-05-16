<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <?php 
      include "menu.php";
    ?>




    <main role="main" class="container">

      <div class="starter-template">
       <form action="alta.php" method="post">
 <?php

                   if (isset($_SESSION['usuario']))

                      {

            ?>
		<div class="form-group" text-align: right>
			<label for="exampleInputEmail1">Nombre</label>
			<input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Tu nombre" name="nombre">
		</div>

		<div class="form-group" text-align: right>
			<label for="exampleInputEmail1">Apellido</label>
			<input type="text" class="form-control" id="apellido" aria-describedby="apellido" placeholder="Tu apellido" name="apellido">
		</div>
	  
		<div class="form-group">
			<label for="exampleInputEmail1">Correo electronico</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tu correo electronico" name="correo">
		</div>

		<div class="form-group" text-align: right>
			<label for="exampleInputPassword1"   text-align: right>Clave</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Clave alfanumerica" name="fecha">
		</div>	
  
    <div class="form-group" text-align: right>
      <label for="exampleInputPassword1"   text-align: right>Clave</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Clave alfanumerica" name="legajo">
    </div>


<?php
                           }
              ?>
 

		<button type="submit" class="btn btn-primary">Dar de alta</button>
		</form>
      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
