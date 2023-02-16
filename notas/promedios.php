<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>promedios</title>
</head>
<body>
    <h1> Introduzca los Las notas</h1> <br><br>
    <form name="prom" action="promedios.php" method= "POST" aling="center">
alumno: <input type="text" name="nombre" size="10" value=""><br><br>
nota de programacion : <input type="text" name="nota1" size="10" value=""><br><br>
Nota de fisica: <input type="text" name="nota2" size="10" value=""><br><br>
Nota de matematica: <input type="text" name="nota3" size="10" value=""><br><br>
Nota de Calculo: <input type="text" name="nota4" size="10" value=""><br><br>
<input type = "submit" value= "calcular promedio" name="btnBoton" ><br><br>
    </form>
</body>
</html>
<?php
@$nombre=$_POST['nombre'];
@$nota1=$_POST['nota1'];
@$nota2=$_POST['nota2'];
@$nota3=$_POST['nota3'];
@$nota4=$_POST['nota4'];
@$prom=($nota1+$nota2+$nota3+$nota4)/4;

echo "El promedio Final es: $prom <br />";

if ($prom >=7)
{
echo "<font color= 'blue'>$nombre Aprob&oacute; esta Materia</font>";
}
if ($prom< 7)
{
echo "<font color= 'red'>$nombre Reprob&oacute; esta Materia</font>";
}

?>