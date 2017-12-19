<?php
$loc = [];
$myfile = fopen("../data/sitios.txt", "r") or die("Unable to open file!");
if ($myfile) {
    $i=1;
    while (($line = fgets($myfile)) !== false) {
        $loc[$i] = $line;
        $i++;
    }
}
fclose($myfile);
$myfile2 = fopen("../data/sitios.txt", "w") or die("Unable to open file!");
for($i=1;$i<41;$i++){
    if($i!=1 and $i!=3 and $i!=8 and $i!=11 and $i!=18 and $i!=23 and $i!=31 and $i!=34 and $i!=37){
        fwrite($myfile2,$_POST[$i]."\n");
    }else{
        fwrite($myfile2,$loc[$i]);
    }
}

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


<html>
<body style="background-color: lightgray">
<br><br><br><br><br>

<center><h2 style="color: black;">Pregunta correctamente modificada</center><br><br><br>
<center><form action="../index.php" method="POST"	>
        <button class="btn btn-danger" type="submit" value=""> Regresar </button>
    </form></center>
</body>
</html>