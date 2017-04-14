<html>

<head>
<title>Calculator</title>
</head>

<body bgcolor="navyblue">

<br><br>

<center>






<?php

if(isset($resta)) /*Codigo de la operacion resta */
{
$primero=$pantalla;
$_operacion="-";
$pantalla=0;
}

if(isset($sumar)) /*Codigo de la operacion suma*/
{
$primero=$pantalla;
$_operacion="+";
$pantalla=0;
}

if(isset($mult)) /*Codigo de la operacion multiplicacion*/
{
$primero=$pantalla;
$_operacion="*";
$pantalla=0;
}

if(isset($div)) /*Codigo de la operacion division*/
{
$primero=$pantalla;
$_operacion="/";
$pantalla=0;
}

if((isset($dec)) && ($pantalla-intval($pantalla)==0) && ($pantalla!=='0.') && ((doubleval($pantalla)>=0) && (doubleval($pantalla)<10) ))
/*Codigo que pone el punto decimal*/
{ /* Comprobamos que estamos trabajando con un numero entero, ya que */
/* si ya es decimal no hay que ponerle otro punto decimal */
/* si numero - su_entero = 0 => no es decimal */
$pantalla=$pantalla.".";
}

if(isset($igual)) /* Aqui entrara si le hemos dado al igual */
{
unset($nuevaop); /*Una vez que le demos al igual, el siguiente numero*/
/*introducido sera una nueva operacion, por lo tanto*/
/*el anterior ha de desaparecer asi que quitamos */
/*la variable nuevaop, para que pase por el bucle */
/*que se encarga de borrar todo y poner el nuevo numero*/
switch($_operacion)
{
case '+':
$pantalla=$pantalla+$primero;
break;
case '-':
$pantalla=$primero-$pantalla;
break;
case '*':
$pantalla=$primero*$pantalla;
break;
case '/':
if($pantalla==0) /*Comprobamos que no se divida por cero */
{
$pantalla="Division por cero";
}
else
{
$pantalla=$primero/$pantalla;
}
break;
}
unset($_operacion); /*"apagamos" operacion para evitar cosas como :*/
/* despues de darle al igual ,y comenzar una nueva operacion, escribir un */
/* numero y darle al igual repite la anterior operacion */
}

if((!isset($igual)) && (!isset($dec))) /*Aqui entrara si no le hemos dado al */
{ /* igual o al punto decimal */
if(!isset($numero)) /* Si no hay numero pone la pantalla a cero */
{
$pantalla=0;
}
else
{
if((($pantalla==='0') || (!isset($nuevaop))) && ($pantalla!=='0.')) /* En caso contrario este codigo pondra */
{ /* el nuevo numero */
/*si nuevaop no existe eso quiere decir que estamos*/
/*en una nueva operacion y hay que borrar el resto*/

$pantalla=$numero; /* Atencion al igual estricto === => */
$nuevaop="Estamos en una nueva operacion";
} /* es igual estricto, si no se cree que */
else /* 0. = 0 */
{
$pantalla=$pantalla.$numero;
}
}
}


/* A partir de aqui el formulario */
/**********************************/
/**********************************/
?>

<form action="<?php echo $PHP_SELF; ?>" name="calculadora" method="get">

<?php
if(isset($nuevaop))
{
?>
<input type="hidden" name="nuevaop" value="Estamos en una nueva operacion" >
<?php
}
?>

<?php
if(isset($_operacion))
{
?>
<input type="hidden" name="_operacion" value="<?php echo $_operacion; ?>" >
<?php
}
?>


<?php
if(isset($primero))
{
?>
<input type="hidden" name="primero" value="<?php echo $primero; ?>" >
<?php
}
?>

<br>
<table border="3" bgcolor="gray" cellpadding="5">
<tr>
<td colspan="2">
<input type="Text" name="pantalla" value="<?php echo $pantalla ?>" size="18" tabindex="0">
</td>
</tr>
<tr>
<td>
<center>
<input type="submit" name="numero" value="1">
<input type="submit" name="numero" value="2">
<input type="submit" name="numero" value="3">

<br>
<input type="submit" name="numero" value="4">
<input type="submit" name="numero" value="5">
<input type="submit" name="numero" value="6">

<br>
<input type="submit" name="numero" value="7">
<input type="submit" name="numero" value="8">
<input type="submit" name="numero" value="9">

<br>
<input type="submit" name="numero" value="0">
<br>
<br>
</center>
</td>

<td>
<center>
<input type="submit" name="clr" value="clr">
<input type="submit" name="sumar" value="+">
<br>
<input type="submit" name="resta" value="-">
<input type="submit" name="mult" value="*">
<br>
<input type="submit" name="div" value="/">
<input type="submit" name="igual" value="=">
<br>
<input type="submit" name="dec" value=".">

</center>
</td>
</tr>
</table>

</form>

<br><br>

</body>

</html>