<?php 
$pregunta = $_POST['txtPregunta'];
$id = $_POST['id_pregunta'];
$a1= $_POST['txtA1'];
$a2= $_POST['txtA2'];
$a3= $_POST['txtA3'];
$a4= $_POST['txtA4'];
$respuesta= $_POST['txtRespuesta'];

$preg = [];
$myfile = fopen("../data/preguntas.txt", "r") or die("Unable to open file!");
if ($myfile) {
    $i=1;
    while (($line = fgets($myfile)) !== false) {
        $preg[$i] = $line;
        $i++;
    }
}
$j=$i;
fclose($myfile);

$myfile2 = fopen("../data/preguntas.txt", "w") or die("Unable to open file!");
if ($myfile2) {
    $i=1;
    while ($i<$j) {
        if($i!=$id){
            fwrite($myfile2,$preg[$i]);
        }else{
            fwrite($myfile2,$pregunta." 1.");
            fwrite($myfile2,$a1." 2.");
            fwrite($myfile2,$a2." 3.");
            fwrite($myfile2,$a3." 4.");
            fwrite($myfile2,$a4." / ");
        }

        $i++;
    }
}
fclose($myfile2)





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
