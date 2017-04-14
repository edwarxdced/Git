<?php 

//$H="10.158.117.168:3306";
$H="10.158.107.40:3306";
$R="ROOT";
$A="98662019";
$F="FAG";

//$conexion = mysqli_connect("localhost", "root", "", "frigorifico");

$conexion = mysqli_connect($H, $R, $A, $F);

$Texto = "INSERT INTO datos(id, fecha, serie, temperatura) VALUES ( '' , CURRENT_TIMESTAMP, '11', '39')";

mysqli_query($conexion, $Texto );
mysqli_close($conexion); 

echo "Dato ingresado =";
echo $Texto;
?>

 
