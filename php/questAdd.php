<?php 
session_start();
include("conexion.php");
$con=conectar();

$pregunta = $_POST['txtPregunta'];
$a1= $_POST['txtA1'];
$a2= $_POST['txtA2'];
$a3= $_POST['txtA3'];
$a4= $_POST['txtA4'];
$respuesta= $_POST['txtRespuesta'];

$insertado = "INSERT INTO `preguntas` (`pregunta`, `alternativa1`, `alternativa2`, `alternativa3`, `alternativa4`, `respuesta`) 
VALUES ('$pregunta', '$a1', '$a2', '$a3', '$a4', '$respuesta')";
$stmt = mysqli_query($con,$insertado);
?>

<html>
<body style="background-color: lightgray">
<br><br><br><br><br>

<center><h2 style="color: black;">Pregunta correctamente registrada</center><br><br><br>
<center><form action="newQuest.php" method="POST"	>
    <button class="btn-lg btn-danger" type="submit" value=""> Regresar </button>
</form></center>
</body>
</html>
