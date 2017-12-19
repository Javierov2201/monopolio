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
</head>

<body>
	<center>
        <h1 style="color: Orange">Monopolio KM</h1>
        <h3 style="color: black">Editor</h3>
        <div class="sublayout" style=" background-color: #e7e7e7; border: 1px; border-radius: 10px; height: auto; padding-bottom: 50px;" >
            <nav class="navbar navbar-default" >
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="">Añadir Preguntas</a></li>
                        <li ><a href="searchQuest.php">Editar Pregunta</a></li>
                        <li ><a href="editLoc.php">Editar Locaciones</a></li>
                    </ul>
                <form class="navbar-form navbar-left" action="../index.php">
                    <button type="submit" class="btn btn-danger">Jugar</button>
                </form>
            </nav>
            <div id="añadirpreguntas">
                <center>
                    <form action="questAdd.php" method="POST" enctype="multipart/form-data">
                    <table style="width:60%;">
                        <h3 style="color: darkblue;">Añadir pregunta</h3>
                        <col width="30%">
                        <col width="70%">
                        <tr>
                            <th>Pregunta</th>
                            <th><input type="text" name="txtPregunta" class="form-control" style="width: 90%"></th>
                        </tr>
                        <tr>
                            <th>Alternativa 1</th>
                            <th><input type="text" name="txtA1" class="form-control" style="width: 90%"></th>
                        </tr>
                        <tr>
                            <th>Alternativa 2</th>
                            <th><input type="text" name="txtA2" class="form-control" style="width: 90%"></th>
                        </tr>
                        <tr>
                            <th>Alternativa 3</th>
                            <th><input type="text" name="txtA3" class="form-control" style="width: 90%"></th>
                        </tr>
                        <tr>
                            <th>Alternativa 4</th>
                            <th><input type="text" name="txtA4" class="form-control" style="width: 90%"></th>
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
                        <input id="nextButton" type="submit" name="next" class="action-button btn btn-success" value="Guardar pregunta" />
                    </form>
                </center>
            </div>
        </div>
    </center>
</body>