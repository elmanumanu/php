<?php
//************************ conexión
$myconexion = new mysqli("localhost","root","", "alumnos","3306");
if ($myconexion->connect_errno) {
    die("Error en la conexión". $myconexion->connect_error);
}
else{
	echo " Se ha establecido la conexión con éxito...". $myconexion->host_info ."<br><br>" ;
}

//************************
?>


<html>
 <head>
  <title>Ejemplo 2 de conexión</title>
 </head>

 <body>
    <table border="1">
	<tr bgcolor="#336699" style="color='#FFFFFF'";><td>Nombre del alumno</td><td>N&uacute;mero de cuenta</td></tr>

<?php
//************************ Ejecutamos una consulta y mostramos los resultados

    $resultado=$myconexion->query("select nombre,ncuenta from alumnos_datos");

    $filas=$resultado->num_rows;
//    echo " numero de filas:". $filas . "<br>" ;
    if ($filas >=1){

       while ($fila = $resultado->fetch_assoc()) {
?>

  	<tr bgcolor="#CEF6F5" onmouseover="this.style.background='#FFD961';" onmouseout="this.style.background='#CEF6F5';">
	   <td> <?php echo $fila['nombre']; ?> </td>
	   <td> <?php echo $fila['ncuenta']; ?></td>
        </tr>

<?php
       }
    }
?>

    </table>
 </body>
</html>


<?php
//******************** cerramos la conexión
$myconexion->close();

?>