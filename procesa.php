<?php

//  recibimos los valores del formulario con el metodo POST 
//  y el nombre de los atributos declarados en ejemplo2.html
$valornombre=$_POST['nombre'];
$valornumeroc=$_POST['numeroc'];

//************************ conexión
$myconexion = new mysqli("localhost","root","", "alumnos","3306");
if ($myconexion->connect_errno) {
    die("Error en la conexión". $myconexion->connect_error);

}
else{

//*********************** creamos la consulta para insertar 
//*********************** los valores y regresamos el control al menú.html

$myconsulta="insert into alumnos_datos values('". $valornombre ."'," . $valornumeroc . ");";
$myconexion->query($myconsulta);

//******************** cerramos la conexión
$myconexion->close();

//******************** mostramos el resultado del ingreso del registro
echo " Se ha ingresado el registro:<br> nombre: " . $valornombre .
     "<br> n&uacute;mero de cuenta: " .$valornumeroc . "<br><br>" ;
echo "<a href='menu.html'>REGRESAR AL MEN&Uacute;</a>";
}

//************************
?>


