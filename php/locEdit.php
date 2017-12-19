<?php
include("conexion.php");

for($i=1;$i<41;$i++){
    if($i!=1 and $i!=3 and $i!=8 and $i!=11 and $i!=18 and $i!=23 and $i!=31 and $i!=34 and $i!=37){
        $con=conectar();
        $newName="'".$_POST[$i]."'";
        $insertado = "UPDATE  `locaciones` SET `nombre`= $newName WHERE `id_locacion`=$i";
         $stmt = mysqli_query($con,$insertado);
    }
}

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


<html>
<body style="background-color: lightgray">
<br><br><br><br><br>

<center><h2 style="color: black;">Pregunta correctamente modificada</center><br><br><br>
<center><form action="searchQuest.php" method="POST"	>
        <button class="btn btn-danger" type="submit" value=""> Regresar </button>
    </form></center>
</body>
</html>