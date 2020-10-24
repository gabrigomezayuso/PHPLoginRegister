<?php
    // require_once __DIR__ . '/db_config.php';
	
session_start();


		$myusername=$_SESSION["user_signin"];
	

		?>
		<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- /Bootstrap --> 

</head>
<body background="Fondo2.png" style="background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">


<div class="App">
        <div class="vertical-center">
            <div class="inner-block">

  	<div class="row" >
      <div class="col-3">
		
	  </div>
          <div class="col-6">
	<h1 align="center">Bienvenido/a: <?php echo $myusername?></h1>
	<br>


	<table  class="table">
	<tr>
		<td align="center"><button type="button" class="btn btn-outline-dark btn-lg btn-block" onclick="location.href='crear_ranking.php'" class="btn btn-primary btn-lg">Crear Ranking</button></td>

	<tr>
		<td align="center"><button class="btn btn-outline-dark btn-lg btn-block"  type="button" onclick="location.href='profesores_BONUS_DAW.php'" class="btn btn-primary btn-lg">Modificar puntuaciones</button></td>
 	</tr>		
	<tr>
		<td align="center"><button class="btn btn-outline-dark btn-lg btn-block"  type="button" onclick="location.href='consultarRanking.php'" class="btn btn-primary btn-lg">Ver Ranking (como alumno)</button></td>
 	</tr>
	<tr>
		<td align="center"><button class="btn btn-outline-dark btn-lg btn-block"  type="button" onclick="location.href='logout.php'" class="btn btn-secondary btn-lg">Salir</button></td>
	</tr>
	</table>

			</div>
		<div class="col-3" >

			<!--<iframe frameborder="1" height="100%" width="100%" src="consultarRanking.php" name="ranking"></iframe>-->
		</div>
	</div>
</div>

            </div>
        </div>
    </div>





</body>
</html>
		
		<?php





?>