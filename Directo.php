<?php 

$H="localhost";
$R="root";
$A="";
$F="frigorifico";

//$conexion = mysqli_connect("localhost", "root", "", "frigorifico");

$conexion = mysqli_connect($H, $R, $A, $F);

$Texto = "INSERT INTO datos(id, fecha, serie, temperatura) VALUES ( '' , CURRENT_TIMESTAMP, '11', '39')";

mysqli_query($conexion, $Texto );
mysqli_close($conexion); 

echo "Dato ingresado =";
echo $Texto;
?>