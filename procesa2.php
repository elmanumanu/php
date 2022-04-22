<?php

//  recibimos el identificador del alumno a eliminar de elimina.php
//   el método es GET y se envia con el nombre "idalumno"

$valornumeroc=$_GET['idalumno'];


//************************ conexión
$myconexion = new mysqli("localhost","root","", "alumnos","3306");
if ($myconexion->connect_errno) {
    die("Error en la conexión". $myconexion->connect_error);

}
else{

//*********************** creamos la consulta para eliminar el registro 
//*********************** y regresamos el control al menú.html

$myconsulta="delete from alumnos_datos where ncuenta=". $valornumeroc;
$myconexion->query($myconsulta);

//******************** cerramos la conexión
$myconexion->close();

//******************** mostramos el resultado de eliminar registro
echo " Se ha eliminado el registro:<br> N&uacute;mero de cuenta: " .$valornumeroc . "<br><br>" ;
echo "<a href='menu.html'>REGRESAR AL MEN&Uacute;</a>";
}

//************************
?>


