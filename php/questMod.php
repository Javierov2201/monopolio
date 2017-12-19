<?php 
session_start();
include("conexion.php");
$con=conectar();

$pregunta = $_POST['txtPregunta'];
$id = $_POST['id_pregunta'];
$a1= $_POST['txtA1'];
$a2= $_POST['txtA2'];
$a3= $_POST['txtA3'];
$a4= $_POST['txtA4'];
$respuesta= $_POST['txtRespuesta'];

$insertado = "UPDATE  `preguntas` SET `pregunta`='$pregunta', `alternativa1`='$a1 ', `alternativa2`='$a2', `alternativa3`='$a3', `alternativa4`='$a4',`respuesta`='$respuesta'
 WHERE `id_pregunta`='$id'";
$stmt = mysqli_query($con,$insertado);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<html>
<body style="background-color: lightgray">
<br><br><br><br><br>

<center><h2 style="color: black;">Pregunta correctamente modificada</center><br><br><br>
<center><form action="searchQuest.php" method="POST"	>
    <button class="btn btn-danger" type="submit" value=""> Regresar </button>
</form></center>
</body>
</html>
