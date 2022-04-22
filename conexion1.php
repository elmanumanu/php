<?php

/*
*     $myconexion es la variable que guarda la conexión y mysqli es  la palabra reservasda que se utiliza para crear la conexión
*
*/
$myconexion = new mysqli("localhost","root","", "alumnos");

/*
 *Despues de generar la conexión validamos si se establecio o no mandando un mensaje de error o de éxito si se logro establecer la conexión 
 */
if ($myconexion->connect_error) {
    die('Error en la conexión Conexión');
}
else{
	echo ' Se ha establecido la conexión con éxito... ' ;
}

/* se cierra la conexión, siempre que ya no se utilice una conexión tiene que ser cerrada ya que es espacio ocupado en el servidor de base de datos
*  y reduce  el rendimiento 
*/
$myconexion->close();
?>