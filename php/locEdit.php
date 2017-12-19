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
<html>
<body style="background-color: lightgray">
<br><br><br><br><br>

<center><h2 style="color: black;">Pregunta correctamente modificada</center><br><br><br>
<center><form action="searchQuest.php" method="POST"	>
        <button class="btn-lg btn-danger" type="submit" value=""> Regresar </button>
    </form></center>
</body>
</html>