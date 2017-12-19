<?php
// Array with names
include("conexion.php");
$con=conectar();
$insertado = "Select nombre from locaciones";
$myfile = fopen("data/sitios.txt", "w") or die("Unable to open file!");
$stmt = mysqli_query($con,$insertado);
while($hint=mysqli_fetch_array($stmt)){
    fwrite($myfile, $hint[0]."\n");
}
fclose($myfile);

$insertado2 = "Select * from preguntas";
$myfile2 = fopen("data/preguntas.txt", "w") or die("Unable to open file!");
$stmt2 = mysqli_query($con,$insertado2);
while($hint2=mysqli_fetch_array($stmt2)){
    fwrite($myfile2, $hint2[1]." 1.");
    fwrite($myfile2, $hint2[2]." 2."   );
    fwrite($myfile2, $hint2[3]." 3.");
    fwrite($myfile2, $hint2[4]." 4.");
    fwrite($myfile2, $hint2[5]." / ");
    fwrite($myfile2, $hint2[6]."\n");

}
fclose($myfile2);