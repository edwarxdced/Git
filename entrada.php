<?php 
$conexion = mysqli_connect("localhost", "root", "", "frigorifico");

$serie = $_POST ['serie'];
$temperatura = $_POST ['temp'];

mysqli_query($conexion, "INSERT INTO datos(id, fecha, serie, temperatura) VALUES ( '' , CURRENT_TIMESTAMP, '$serie', '$temperatura')"); 
//mysqli_query($conexion, "INSERT INTO datos(id, fecha, serie, temperatura) VALUES ( '' , CURRENT_TIMESTAMP, '49', '80')");
mysqli_close($conexion); 

echo "Dato ingresado = ";
echo $temperatura;
?>