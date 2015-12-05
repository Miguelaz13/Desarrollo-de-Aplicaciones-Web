<!DOCTYPE html>
<html>
<head><title>Horario</title>
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
            <form method="post" action="matriculados_primaria.php">
            	<?php
                        if(isset($_POST['Guardar']))
                        {
                              if($_POST['nombre']=="" || $_POST['DNI']=="" || $_POST['distrito']=="" || $_POST['direccion']=="" || $_POST['telefono']=="" || $_POST['celular']=="" || $_POST['email']=="")
                              {
                              	echo "<br>";
                                    echo "<h2><font color='red'>MATRICULA NO REGISTRADA, llene todos los campos...</font></h2>";
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<td><A href='primaria.html'><h2>Volver a la Matricula</h2></a></td>";
                              }
                              else
                              {
                                    require_once 'login.php';	
                                    $fecha=$_POST['año']."-".$_POST['mes']."-".$_POST['dia'];  
                                    $link=mysql_connect($db_hostname, $db_username, $db_password) or die('No se pudo conectar: '.mysql_error()); 
                                    //prueba de la base de datos
                                    mysql_select_db($db_database)or die('No se pudo seleccionar la base de datos');
                                    //Ejecucion de la sentencia SQL 
                                    $query="INSERT INTO primaria(nombre,DNI,fecha,genero,grado,seccion,region,distrito,direccion,telefono,celular,email)
                                    VALUES ('{$_POST['nombre']}','{$_POST['DNI']}','$fecha','{$_POST['sexo']}','{$_POST['grado']}','{$_POST['seccion']}','{$_POST['region']}',
                                          '{$_POST['distrito']}','{$_POST['direccion']}','{$_POST['telefono']}','{$_POST['celular']}','{$_POST['email']}')";
                                    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
                                    // Liberar resultados
                                    echo "<br>";
                                    echo "<h2><font color='blue'>MATRICULA REGISTRADA</font></h2>";
                                    mysql_free_result($result);
                                    // Cerrar la conexión
                                    mysql_close($link);
                                    echo "<br>";
                                    echo "<h3>Horario Primaria: </h3>".$_POST['grado'];
                                    echo "<table width: '100%' border='1' bordercolor='#0099FF' bgcolor='77D7FD'>";
                                    echo "<tbody>";
                                    echo "<tr> <td align='center'>Hora</td>";
                                    echo "<td align='center' bgcolor='0391E9' ><font color='white'><b>Lunes</b></font></td>";
                                    echo "<td align='center' bgcolor='0391E9'><font color='white'><b>Martes</b></td>";
                                    echo "<td align='center' bgcolor='0391E9'><font color='white'><b>Miercoles</b></td>";
                                    echo "<td align='center' bgcolor='0391E9'><font color='white'><b>Jueves</b></td>";
                                    echo "<td align='center' bgcolor='0391E9'><font color='white'><b>Viernes</b></td> </tr>";
                                    echo "<tr> <td>7:00 a 7:30</td>";
                                    echo "<td colspan='5' align='center' bgcolor='4A84EF'><font color='black'><b>INGRESO</b></font></td> </tr>";
                                    echo "<tr> <td>7:30 a 8:10</td>";
                                    echo "<td>Ingles</td>";
                                    echo "<td>Matematicas</td>";
                                    echo "<td>Lenguaje y Literatura</td>";
                                    echo "<td>Ciencias y Ambiente</td>";
                                    echo "<td>Matematicas</td> </tr>";
                                    echo "<tr> <td>8:10 a 8:50</td>";
                                    echo "<td>Lenguaje y Literatura</td>";
                                    echo "<td>Ingles</td>";
                                    echo "<td>Lenguaje y Literatura</td>";
                                    echo "<td>Lenguaje y Literatura</td>";
                                    echo "<td>Matematicas</td> </tr>";
                                    echo "<tr> <td>8:50 a 9:30</td>";
                                    echo "<td>Lenguaje y Literatura</td>";
                                    echo "<td>Lenguaje y Literatura</td>";
                                    echo "<td>Matematicas</td>";
                                    echo "<td>Ciencias Sociales</td>";
                                    echo "<td>Lenguaje y Literatura</td> </tr>";
                                    echo "<tr> <td>9:30 a 9:45</td>";
                                    echo "<td colspan='5' align='center' bgcolor='4A84EF'><font color='black'><b>RECREO</b></font></td> </tr>";
                                    echo "<tr> <td>9:45 a 10:25</td>";
                                    echo "<td>Matematicas</td>";
                                    echo "<td>Computaci&oacute;n</td>";
                                    echo "<td>Matematicas</td>";
                                    echo "<td>Religion</td>";
                                    echo "<td>Ciencias Sociales</td> </tr>";
                                    echo "<tr> <td>10:25 a 11:05</td>";
                                    echo "<td>Matematicas</td>";
                                    echo "<td>Computaci&oacute;n</td>";
                                    echo "<td>Ingles</td>";
                                    echo "<td>Religion</td>";
                                    echo "<td>Personal Social</td> </tr>";
                                    echo "<tr> <td>11:05 a 11:45</td>";
                                    echo "<td>Lenguaje y Literatura</td>";
                                    echo "<td>Lenguaje y Literatura</td>";
                                    echo "<td>Ingles</td>";
                                    echo "<td>Personal Social</td>";
                                    echo "<td>Lenguaje y Literatura</td> </tr>";
                                    echo "<tr> <td>11:45 a 12:00</td>";
                                    echo "<td colspan='5' align='center' bgcolor='4A84EF'><font color='black'><b>RECREO</b></font></td> </tr>";
                                    echo "<tr> <td>12:00 a 12:45</td>";
                                    echo "<td>Ciencias Sociales</td>";
                                    echo "<td>Educacion Fisica</td>";
                                    echo "<td>Ciencias y Ambiente</td>";
                                    echo "<td>Educacion Fisical</td>";
                                    echo "<td>Musica</td> </tr>";
                                    echo "<tr> <td>12:45 a 1:30</td>";
                                    echo "<td>Ciencias Sociales</td>";
                                    echo "<td>Arte</td>";
                                    echo "<td>Matematicas</td>";
                                    echo "<td>Arte</td>";
                                    echo "<td>Musica</td> </tr>";
                                    echo "<tr> <td>1:30 a 1:45</td>";
                                    echo "<td colspan='5' align='center' bgcolor='4A84EF'><font color='black'><b>SALIDA</b></font></td> </tr>";
            				echo "</tbody>";
            				echo "</table>";
                                    echo "<br>";
                                    echo "<input type='submit' value='Matriculados' name='guardar'>";
            				echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
            				echo "<A href='sistema_matricula.html'>Volver al Inicio</a>";
                              }
                        }
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