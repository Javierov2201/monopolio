<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Monopolio KM</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <style>
        th{
            height: 45px;
        }
        body{
            min-width:100%;
            width: auto !important;
            width:100%;
            text-align: center;
            background-color: lightgray;
        }
        .sublayout{
            min-width: 1000px;
            width:1000px;
        }
    </style>
    <?php
    $pregunta = $_POST['preguntaSeleccionada'];
    $preg = [];
    $myfile = fopen("../data/preguntas.txt", "r") or die("Unable to open file!");
    if ($myfile) {
        $i=1;
        while (($line = fgets($myfile)) !== false) {
            $preg[$i] = $line;
            $i++;
        }
    }
    $quest = strstr($preg[$pregunta],'?',true).'?';
    $pos1= strpos($preg[$pregunta],'1')+2;
    $pos2= strpos($preg[$pregunta],'2')+2;
    $pos3= strpos($preg[$pregunta],'3')+2;
    $pos4= strpos($preg[$pregunta],'4')+2;
    $pos5= strpos($preg[$pregunta],'/')+2;
    $a1 = substr($preg[$pregunta],$pos1,$pos2-$pos1-3);
    $a2 = substr($preg[$pregunta],$pos2,$pos3-$pos2-3);
    $a3 = substr($preg[$pregunta],$pos3,$pos4-$pos3-3);
    $a4 = substr($preg[$pregunta],$pos4,$pos5-$pos4-3);
    $ac = substr($preg[$pregunta],$pos5,1);
    fclose($myfile);


    ?>

</head>

<body>
<center>
    <h1 style="color: Orange">Monopolio KM</h1>
    <h3 style="color: black">Editor</h3>
    <div class="sublayout" style=" background-color: #e7e7e7; border: 1px; border-radius: 10px; height: auto; padding-bottom: 50px;" >
          <nav class="navbar navbar-default" >
            <ul class="nav navbar-nav">
                <li id="ap"><a href="newQuest.php">Añadir Preguntas</a></li>
                <li id="ep" class="active" ><a href="searchQuest.php">Editar Pregunta</a></li>
                <li ><a href="editLoc.php">Editar Locaciones</a></li>
            </ul>
            <form class="navbar-form navbar-left" action="../index.php">
                <button type="submit" class="btn btn-danger">Jugar</button>
            </form>
        </nav>
        <center>
            <form action="questMod.php" method="POST" enctype="multipart/form-data">
            <table style="width:60%;">
                <input name="id_pregunta" type="text" class="hidden" value="<?php echo $pregunta?>">
                <h3 style="color: darkblue;">Editar pregunta</h3>
                <col width="30%">
                <col width="70%">
                 <tr>
                    <th>Pregunta</th>
                    <th><input type="text" name="txtPregunta" class="form-control"style="width: 90%" value="<?php echo $quest?>" required ></th>
                </tr>
                <tr>
                    <th>Alternativa 1</th>
                    <th><input type="text" name="txtA1" class="form-control" style="width: 90%" value="<?php echo $a1?>" required></th>
                </tr>
                <tr>
                    <th>Alternativa 2</th>
                    <th><input type="text" name="txtA2" class="form-control" style="width: 90%" value="<?php echo $a2?>" required></th>
                </tr>
                <tr>
                    <th>Alternativa 3</th>
                    <th><input type="text" name="txtA3" class="form-control" style="width: 90%" value="<?php echo $a3?>" required></th>
                </tr>
                <tr>
                    <th>Alternativa 4</th>
                    <th><input type="text" name="txtA4" class="form-control" style="width: 90%" value="<?php echo $a4?>" required></th>
                </tr>
                <tr>
                    <th>Respuesta correcta</th>
                    <th>
                        <center>
                            <select name="txtRespuesta" class="form-control" id="alternativas" style="width: 70%; align-items: center">
                                <option value="1">Alternativa 1</option>
                                <option value="2">Alternativa 2</option>
                                <option value="3">Alternativa 3</option>
                                <option value="4">Alternativa 4</option>
                            </select>
                        </center>
                    </th>
                </tr>
            </table>
            <input class="btn btn-success" id="nextButton" type="submit" name="next" class="action-button" value="Guardar pregunta" />
            </form>
        </center>
    </div>
</center>
</body>