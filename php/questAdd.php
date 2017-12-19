<?php 
$pregunta = $_POST['txtPregunta'];
$a1= $_POST['txtA1'];
$a2= $_POST['txtA2'];
$a3= $_POST['txtA3'];
$a4= $_POST['txtA4'];
$respuesta= $_POST['txtRespuesta'];
$myfile = fopen("../data/preguntas.txt", "r") or die("Unable to open file!");
$javier =fread($myfile,filesize("../data/preguntas.txt"));
fclose($myfile);


$myfile2 = fopen("../data/preguntas.txt", "w") or die("Unable to open file!");
    fwrite($myfile2, $javier);
    fwrite($myfile2, $pregunta." 1.");
    fwrite($myfile2, $a1." 2."   );
    fwrite($myfile2, $a2." 3.");
    fwrite($myfile2, $a3." 4.");
    fwrite($myfile2, $a4." / ");
    fwrite($myfile2, $respuesta."\n");

fclose($myfile2);

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<html>
<body style="background-color: lightgray">
<br><br><br><br><br>

<center><h2 style="color: black;">Pregunta correctamente registrada</center><br><br><br>
<center><form action="newQuest.php" method="POST"	>
    <button class="btn btn-danger" type="submit" value=""> Regresar </button>
</form></center>
</body>
</html>
