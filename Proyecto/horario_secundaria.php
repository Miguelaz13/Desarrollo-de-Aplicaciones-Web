<!DOCTYPE html>
<html>
<head><title>Registro de Datos</title>
<link rel="StyleSheet" href="home.css" type="text/css">
</head>
<body>
<div id="contenedor">
      <div id="cabecera">
            <img src="cabecera.jpg"  height="170px" width="1340px"> 
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
            <form method="post" action="matriculados_secundaria.php">
            	<?php
                        if(isset($_POST['Guardar']))
                        {
                              if($_POST['nombre']=="" || $_POST['DNI']=="" || $_POST['distrito']=="" || $_POST['direccion']=="" || $_POST['telefono']=="" || $_POST['celular']=="" || $_POST['email']=="")
                              {
                              	echo "<br>";
                                    echo "<h2><font color='red'>MATRICULA NO REGISTRADA, llene todos los campos...</font></h2>";
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<td><A href='secundaria.html'><h2>Volver a la Matricula</h2></a></td>";
                              }
                              else
                              {
                                    require_once 'login.php';
                                    $fecha=$_POST['año']."-".$_POST['mes']."-".$_POST['dia'];  
                                    $link=mysql_connect($db_hostname, $db_username, $db_password) or die('No se pudo conectar: '.mysql_error()); 
                                    //prueba de la base de datos
                                    mysql_select_db($db_database)or die('No se pudo seleccionar la base de datos');

                                    //Ejecucion de la sentencia SQL 
                                    $query="INSERT INTO secundaria(nombre,DNI,fecha,genero,grado,seccion,region,distrito,direccion,telefono,celular,email)
                                    VALUES ('{$_POST['nombre']}','{$_POST['DNI']}','$fecha','{$_POST['sexo']}','{$_POST['grado']}','{$_POST['seccion']}','{$_POST['region']}','{$_POST['distrito']}','{$_POST['direccion']}','{$_POST['telefono']}','{$_POST['celular']}','{$_POST['email']}')";
                                    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
                                    echo "<br>";
                                    echo "<h2><font color='blue'>MATRICULA REGISTRADA</font></h2>";
                                    // Liberar resultados
                                    mysql_free_result($result);
                                    // Cerrar la conexión
                                    mysql_close($link);
                                    echo "<br>";
                                    echo "<h3>Horario Secundaria: </h3>".$_POST['grado'];
                                    echo "<table width: '100%' border='1' bordercolor='#0099FF' bgcolor='77D7FD'>";
                                    echo "<tbody>";
                                    echo "<tr> <td align='center'>Hora</td>";
                                    echo "<td align='center' bgcolor='0391E9' ><font color='white'><b>Lunes</b></font></td>";
                                    echo "<td align='center' bgcolor='0391E9'><font color='white'><b>Martes</b></td>";
                                    echo "<td align='center' bgcolor='0391E9'><font color='white'><b>Miercoles</b></td>";
                                    echo "<td align='center' bgcolor='0391E9'><font color='white'><b>Jueves</b></td>";
                                    echo "<td align='center' bgcolor='0391E9'><font color='white'><b>Viernes</b></td> </tr>";
                                    echo "<tr> <td>7:30 a 7:45</td>";
                                    echo "<td colspan='5' align='center' bgcolor='4A84EF'><font color='black'><b>INGRESO</b></font></td> </tr>";
                                    echo "<tr> <td>7:45 a 8:30</td>";
                                    echo "<td>Fisica II</td>";
                                    echo "<td>Biologia</td>";
                                    echo "<td>Anatomia</td>";
                                    echo "<td>Educacion Fisica</td>";
                                    echo "<td>Geometria</td> </tr>";
                                    echo "<tr> <td>8:30 a 9:15</td>";
                                    echo "<td>G. Analitica</td>";
                                    echo "<td>Biologia</td>";
                                    echo "<td>Anatomia</td>";
                                    echo "<td>Educacion Fisica</td>";
                                    echo "<td>Portugues</td> </tr>";
                                    echo "<tr> <td>9:15 a 10:00</td>";
                                    echo "<td>Fisica II</td>";
                                    echo "<td>R. Matematico</td>";
                                    echo "<td>R. Matematico</td>";
                                    echo "<td>Civica</td>";
                                    echo "<td>Trigonometria</td> </tr>";
                                    echo "<tr> <td>10:00 a 10:15</td>";
                                    echo "<td colspan='5' align='center' bgcolor='4A84EF'><font color='black'><b>RECREO</b></font></td> </tr>";
                                    echo "<tr> <td>10:15 a 11:00</td>";
                                    echo "<td>Filosofia</td>";
                                    echo "<td>Lenguaje</td>";
                                    echo "<td>Fisica I</td>";
                                    echo "<td>Psicologia</td>";
                                    echo "<td>A. Academica</td> </tr>";
                                    echo "<tr> <td>11:00 a 11:45</td>";
                                    echo "<td>Oratoria</td>";
                                    echo "<td>Quimica I</td>";
                                    echo "<td>Fisica I</td>";
                                    echo "<td>Constitucion</td>";
                                    echo "<td>Tutoria</td> </tr>";
                                    echo "<tr> <td>11:45 a 12:30</td>";
                                    echo "<td>Historia</td>";
                                    echo "<td>Quimica I</td>";
                                    echo "<td>A. Academica</td>";
                                    echo "<td>Ingles</td>";
                                    echo "<td>Economia</td> </tr>";
                                    echo "<tr> <td>12:30 a 12:45</td>";
                                    echo "<td colspan='5' align='center' bgcolor='4A84EF'><font color='black'><b>RECREO</b></font></td> </tr>";
                                    echo "<tr> <td>12:45 a 1:30</td>";
                                    echo "<td>Historia</td>";
                                    echo "<td>Geografia</td>";
                                    echo "<td>Literatura</td>";
                                    echo "<td>Arte</td>";
                                    echo "<td>Religion</td> </tr>";
                                    echo "<tr> <td>1:30 a 2:15</td>";
                                    echo "<td>Aritmetica</td>";
                                    echo "<td>Quimica II</td>";
                                    echo "<td>Algebra</td>";
                                    echo "<td>Ingles</td>";
                                    echo "<td>Religion</td> </tr>";
                                    echo "<tr> <td>2:15 a 3:00</td>";
                                    echo "<td>Aritmetica</td>";
                                    echo "<td>Lenguaje</td>";
                                    echo "<td>Algebra</td>";
                                    echo "<td>Computo</td>";
                                    echo "<td>Computo</td> </tr>";
                                    echo "<tr> <td>3:00 a 3:15</td>";
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
            <img src="pie.jpg"  height="170px" width="1338px"> 
      </div>
</div>
</body>
</html>