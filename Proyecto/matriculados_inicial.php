<!DOCTYPE html>
<html>
<head><title>Matriculados</title>
<link rel="StyleSheet" href="home.css" type="text/css">
</head>
<body>
<div id="contenedor">
      <div id="cabecera">
            <img src="cabecera.jpg"  height="170px" width="1910px"> 
      </div>
      <div id="columna4">
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
				<?php //query.php
					require_once 'login.php';
					$db_server = mysql_connect($db_hostname, $db_username, $db_password);

					if (!$db_server) die ("Unable to connect to MySQL: ". mysql_error());

					mysql_select_db($db_database) or die ("Unable to select database: " . mysql_error());

					$query = " SELECT * FROM inicial";
					$result = mysql_query($query);

					if (!$result) die ("Database access failed: " . mysql_error());
					echo "<h2>Lista de Matriculados</h2>";
					echo "<br>";
					echo "<br>";
					$rows = mysql_num_rows($result);
					echo "<table width: '100%' border='1' bordercolor='#0099FF' bgcolor='77D7FD'>";
					echo "<tbody>";
					echo "<tr> <td bgcolor='4A84EF'><font color='black'><b>Nombre</b></font></td>";
					echo "<td bgcolor='4A84EF'><font color='black'><b>DNI</b></font></td>";
					echo "<td bgcolor='4A84EF'><font color='black'><b>Fecha</b></font></td>";
					echo "<td bgcolor='4A84EF'><font color='black'><b>Genero</b></font></td>";
					echo "<td bgcolor='4A84EF'><font color='black'><b>Nivel</b></font></td>";
					echo "<td bgcolor='4A84EF'><font color='black'><b>Region</b></font></td>";
					echo "<td bgcolor='4A84EF'><font color='black'><b>Distrito</b></font></td>";
					echo "<td bgcolor='4A84EF'><font color='black'><b>Direccion</b></font></td>";
					echo "<td bgcolor='4A84EF'><font color='black'><b>Telefono</b></font></td>";
					echo "<td bgcolor='4A84EF'><font color='black'><b>Celular</b></font></td>";
					echo "<td bgcolor='4A84EF'><font color='black'><b>Correo Electronico</b></font></td> </tr>";
					for ($j =0; $j<$rows;++$j)
					{	
						echo "<tr>";
						echo '<td> ' . mysql_result($result,$j,'nombre') . '</td>';
						echo '<td> ' . mysql_result($result,$j,'DNI') . '</td>';
						echo '<td> ' . mysql_result($result,$j,'fecha') . '</td>';
						echo '<td> ' . mysql_result($result,$j,'genero') . '</td>';
						echo '<td> ' . mysql_result($result,$j,'nivel') . '</td>';
						echo '<td> ' . mysql_result($result,$j,'region') . '</td>';
						echo '<td> ' . mysql_result($result,$j,'distrito') . '</td>';
						echo '<td> ' . mysql_result($result,$j,'direccion') . '</td>';
						echo '<td> ' . mysql_result($result,$j,'telefono') . '</td>';
						echo '<td> ' . mysql_result($result,$j,'celular') . '</td>';
						echo '<td> ' . mysql_result($result,$j,'email') . '</td>';
						echo "</tr>";
					}
					echo "</tbody>";
            		echo "</table>";
            		echo "<br>";
                    echo "<br>";
            		echo "<A href='sistema_matricula.html'>Volver al Inicio</a>";
				?>
			</form>
            </div>
      </div>
      <div id="pie">
            <img src="pie.jpg"  height="170px" width="1910px"> 
      </div>
</div>
</body>
</html>