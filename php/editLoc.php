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
        input{
            width: 80%;
        }
    </style>
    <?php
        $locaciones[]="";
        $myfile = fopen("../data/sitios.txt", "r") or die("Unable to open file!");
        $i=1;
        if ($myfile) {
             while (($line = fgets($myfile)) !== false) {
                $locaciones[$i] = $line;
                $i++;
            }
        }
    ?>
</head>

<body>
<center>
    <h1 style="color: Orange">Monopolio KM</h1>
    <h3 style="color: black">Editor</h3>
    <div class="sublayout" style=" background-color: #e7e7e7; border: 1px; border-radius: 10px; height: auto; padding-bottom: 50px;" >
        <nav class="navbar navbar-default" >
            <ul class="nav navbar-nav">
                <li ><a href="newQuest.php">Añadir Preguntas</a></li>
                <li ><a href="searchQuest.php">Editar Pregunta</a></li>
                <li class="active"><a href="">Editar Locaciones</a></li>
            </ul>
            <form class="navbar-form navbar-left" action="../index.php">
                <button type="submit" class="btn btn-danger">Jugar</button>
            </form>
        </nav>
        <div id="añadirpreguntas">
            <center>
                <form action="locEdit.php" method="POST" enctype="multipart/form-data">
                    <table style="width:70%; align-content: center">
                        <h3 style="color: darkblue;">Locaciones</h3>
                        <col width="5%">
                        <col width="45%">
                        <col width="5%">
                        <col width="45%">
                        <tr>
                            <th>1</th>
                            <th><input name="1" type="text" value="<?php echo $locaciones[1]?>" disabled></th>
                            <th>21</th>
                            <th><input name="21"type="text" value="<?php echo $locaciones[21]?>"></th>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th><input name="2" type="text" value="<?php echo $locaciones[2]?>"></th>
                            <th>22</th>
                            <th><input name="22" type="text" value="<?php echo $locaciones[22]?>"></th>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th><input name="3" type="text" value="<?php echo $locaciones[3]?>" disabled></th>
                            <th>23</th>
                            <th><input name="23" type="text" value="<?php echo $locaciones[23]?>" disabled></th>
                        </tr>
                        <tr>
                            <th>4</th>
                            <th><input name="4" type="text" value="<?php echo $locaciones[4]?>"></th>
                            <th>24</th>
                            <th><input name="24" type="text" value="<?php echo $locaciones[24]?>"></th>
                        </tr>
                        <tr>
                            <th>5</th>
                            <th><input name="5" type="text" value="<?php echo $locaciones[5]?>"></th>
                            <th>25</th>
                            <th><input name="25" type="text" value="<?php echo $locaciones[25]?>"></th>
                        </tr>
                        <tr>
                            <th>6</th>
                            <th><input name="6" type="text" value="<?php echo $locaciones[6]?>"></th>
                            <th>26</th>
                            <th><input name="26" type="text" value="<?php echo $locaciones[26]?>"></th>
                        </tr>
                        <tr>
                            <th>7</th>
                            <th><input name="7" type="text" value="<?php echo $locaciones[7]?>"></th>
                            <th>27</th>
                            <th><input name="27" type="text" value="<?php echo $locaciones[27]?>"></th>
                        </tr>
                        <tr>
                            <th>8</th>
                            <th><input name="8" type="text" value="<?php echo $locaciones[8]?>" disabled></th>
                            <th>28</th>
                            <th><input name="28" type="text" value="<?php echo $locaciones[28]?>"></th>
                        </tr>
                        <tr>
                            <th>9</th>
                            <th><input name="9" type="text" value="<?php echo $locaciones[9]?>"></th>
                            <th>29</th>
                            <th><input name="29" type="text" value="<?php echo $locaciones[29]?>"></th>
                        </tr>
                        <tr>
                            <th>10</th>
                            <th><input name="10" type="text" value="<?php echo $locaciones[10]?>"></th>
                            <th>30</th>
                            <th><input name="30" type="text" value="<?php echo $locaciones[30]?>"></th>
                        </tr>
                        <tr>
                            <th>11</th>
                            <th><input name="11" type="text" value="<?php echo $locaciones[11]?>" disabled></th>
                            <th>31</th>
                            <th><input name="31" type="text" value="<?php echo $locaciones[31]?>" disabled></th>
                        </tr>
                        <tr>
                            <th>12</th>
                            <th><input name="12" type="text" value="<?php echo $locaciones[12]?>"></th>
                            <th>32</th>
                            <th><input name="32" type="text" value="<?php echo $locaciones[32]?>"></th>
                        </tr>
                        <tr>
                            <th>13</th>
                            <th><input name="13" type="text" value="<?php echo $locaciones[13]?>"></th>
                            <th>33</th>
                            <th><input name="33" type="text" value="<?php echo $locaciones[33]?>"></th>
                        </tr>
                        <tr>
                            <th>14</th>
                            <th><input name="14" type="text" value="<?php echo $locaciones[14]?>"></th>
                            <th>34</th>
                            <th><input name="34" type="text" value="<?php echo $locaciones[34]?>" disabled></th>
                        </tr>
                        <tr>
                            <th>15</th>
                            <th><input name="15" type="text" value="<?php echo $locaciones[15]?>"></th>
                            <th>35</th>
                            <th><input name="35" type="text" value="<?php echo $locaciones[35]?>"></th>
                        </tr>
                        <tr>
                            <th>16</th>
                            <th><input name="16" type="text" value="<?php echo $locaciones[16]?>"></th>
                            <th>36</th>
                            <th><input name="36" type="text" value="<?php echo $locaciones[36]?>"></th>
                        </tr>
                        <tr>
                            <th>17</th>
                            <th><input name="17" type="text" value="<?php echo $locaciones[17]?>"></th>
                            <th>37</th>
                            <th><input name="37" type="text" value="<?php echo $locaciones[37]?>" disabled></th>
                        </tr>
                        <tr>
                            <th>18</th>
                            <th><input name="18" type="text" value="<?php echo $locaciones[18]?>" disabled></th>
                            <th>38</th>
                            <th><input name="38" type="text" value="<?php echo $locaciones[38]?>"></th>
                        </tr>
                        <tr>
                            <th>19</th>
                            <th><input name="19" type="text" value="<?php echo $locaciones[19]?>"></th>
                            <th>39</th>
                            <th><input name="39" type="text" value="<?php echo $locaciones[39]?>"></th>
                        </tr>
                        <tr>
                            <th>20</th>
                            <th><input name="20" type="text" value="<?php echo $locaciones[20]?>"></th>
                            <th>40</th>
                            <th><input name="40" type="text" value="<?php echo $locaciones[40]?>"></th>
                        </tr>
                       </table>
                    <br>
                    <input id="nextButton" style="width: 200px" type="submit" name="next" class="action-button btn-lg btn-success" value="Guardar locaciones" />
                </form>
            </center>
        </div>
    </div>
</center>
</body>