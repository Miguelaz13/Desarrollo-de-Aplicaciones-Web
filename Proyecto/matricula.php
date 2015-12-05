<!DOCTYPE html>
<html>
<head><title>Matricula</title>
<link rel="StyleSheet" href="home.css" type="text/css">
</head>
<body>
<div id="contenedor">
	<div id="cabecera">
		<img src="cabecera.jpg"  height="170px" width="1340px"> 
	</div>
	<div id="columna1">
		<h3>Menu</h3>
		<br>
		<div id="menu">
		<p > <a href="http://localhost/Proyecto/home.html">Inicio</a></p>
			<br> 
			<p > <a href="http://localhost/Proyecto/resena.html">Rese&ntilde;a</a></p>
			<br>
			<p> <a href="http://localhost/Proyecto/mision.html">Misi&oacute;n y Visi&oacute;n</a></p>
			<br>
			<p> <a href="http://localhost/Proyecto/sistema_matricula.html">Matriculas</a></p>
			<br>
			<p> <a href="http://localhost/Proyecto/objetivos.html">Objetivos</a></p>
			<br>
			<p> <a href="http://localhost/Proyecto/ubicacion.html">Ubicaci&oacute;n</a></p>
		</div> 
	</div>
	<div id="columna2">
		<div align="center">
			<form>
			<?php
				if(isset($_POST['ingreso']))
				{
					if($_POST['usuario']!=$_POST['contrasena'])
					{
						echo "<br>";
						echo "<h2><font color='red'>La contrase&ntilde;a y el usuario no coinciden</font></h2>";
						echo "<br>";
						echo "<A href='sistema_matricula.html'>Volver al Inicio</a>";
					}
					else
					{
						echo"<center><h1><font color='blue'>Matriculas</font></h1></center>";
						echo"<br>";
						echo"<h2><font color='black'>Elija la matricula:</font></h2>";
						echo "<br>";
						echo "<br>";
						echo"<table width: '100%'' border='1' bordercolor='#0099FF' bgcolor='lightskyblue' cellpadding='25'>";
							echo"<tbody>";
							echo"<tr>";
								echo"<td><A href='inicial.html'><h3>Inicial</h3></a></td>";
								echo"<td><A href='primaria.html'><h3>Primaria</h3></a></td>";
								echo"<td><A href='secundaria.html'><h3>Secundaria</h3></a></td>";
							echo"</tbody>";
						echo"</table>";
						echo"<br>";
						echo"<br>";
						echo"<h2><font color='black'>Lista de Utiles:</font></h2>";
						echo "<br>";
						echo "<br>";
						echo"<table width: '100%'' border='1' bordercolor='#0099FF' bgcolor='lightskyblue' cellpadding='25'>";
							echo"<tbody>";
							echo"<tr>";
								echo"<td><A href='inicial_utiles.html'><h3>Inicial</h3></a></td>";
								echo"<td><A href='primaria_utiles.html'><h3>Primaria</h3></a></td>";
								echo"<td><A href='secundaria_utiles.html'><h3>Secundaria</h3></a></td>";
							echo"</tbody>";
						echo"</table>";
					}
				}
			?>
			</form>
		</div>
	</div>
	<div id="pie">
		<img src="pie.jpg"  height="170px" width="1338px"> 
	</div>
</div>
</body>
</html>