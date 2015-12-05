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
            <form>
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
                                    $fecha=$_POST['año']."-".$_POST['mes']."-".$_POST['dia'];  
                                    $link=mysql_connect('localhost','root','') or die('No se pudo conectar: '.mysql_error()); 
                                    echo 'conexion establecida';
                                    echo "<br>";
                                    //prueba de la base de datos
                                    mysql_select_db('matricula')or die('No se pudo seleccionar la base de datos');
                                    echo 'conexion establecida';
                                    echo "<br>";
                                    //Ejecucion de la sentencia SQL 
                                    $query="INSERT INTO secundaria(nombre,DNI,fecha,genero,grado,seccion,region,distrito,direccion,telefono,celular,email)
                                    VALUES ('{$_POST['nombre']}','{$_POST['DNI']}','$fecha','{$_POST['sexo']}','{$_POST['grado']}','{$_POST['seccion']}','{$_POST['region']}','{$_POST['distrito']}','{$_POST['direccion']}','{$_POST['telefono']}','{$_POST['celular']}','{$_POST['email']}')";
                                    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
                                    // Liberar resultados
                                    mysql_free_result($result);
                                    // Cerrar la conexión
                                    mysql_close($link);
                              	echo "<br>";
                                    echo "<h2><font color='blue'>MATRICULA REGISTRADA</font></h2>";
                                    echo "<br>";
                                    echo "<h3>Revise sus Datos</h3>";
                                    echo "<table width: '100%' border='1' bordercolor='#0099FF'>";
                                    echo "<tbody>";
                                    echo "<tr> <td>Apellidos y Nombres:</td>";
                                    echo "<td>".$_POST['nombre']."</td> </tr>";
                                    echo "<tr><td>DNI: </td>";
                                    echo "<td>".$_POST['DNI']."</td> </tr>";
                                    echo "<tr> <td> Fecha de Nacimiento: </td>";
            				echo "<td> ".$_POST['dia']."/".$_POST['mes']."/".$_POST['año']."</td> </tr>";
            				echo "<tr> <td> Genero: </td>";
            				echo "<td> ".$_POST['sexo']."</td> </tr>";
            				echo "<tr> <td>Grado:</td>";
            				echo "<td>".$_POST['grado']."</td> </tr>";
                                    echo "<tr> <td>Seccion:</td>";
                                    echo "<td>".$_POST['seccion']."</td> </tr>";
            				echo "<tr> <td>Region:</td>";
            				echo "<td>".$_POST['region']."</td> </tr>";
            				echo "<tr> <td>Distrito: </td>";
            				echo "<td> ".$_POST['distrito']."</td></tr>";
            				echo "<tr> <td>Direccion: </td>";
            				echo "<td> ".$_POST['direccion']."</td></tr>";
            				echo "<tr> <td>Telefono: </td>";
            				echo "<td> ".$_POST['telefono']."</td></tr>";
            				echo "<tr> <td>Celular: </td>";
            				echo "<td> ".$_POST['celular']."</td></tr>";
            				echo "<tr> <td>Correo Electronico: </td>";
            				echo "<td> ".$_POST['email']."</td></tr>";
            				echo "</tbody>";
            				echo "</table>";
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