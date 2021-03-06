<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN">
<html>
<head>
	<title>Monopolio KM</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="scripts/questions.js"></script>
	<script type="text/javascript" src="scripts/monopoly.js"></script>
	<script type="text/javascript" src="scripts/classicedition.js"></script>

		<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<!-- Comment out the previous line and uncomment the next one to enable the New York City Edition -->
	<!-- <script type="text/javascript" src="newyorkcityedition.js"></script> -->
	<script type="text/javascript" src="scripts/ai.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/styles.css" />
	<style>
		.no-close .ui-dialog-titlebar-close {
		  display: none;
		}
		.loader {
		  border: 16px solid #f3f3f3;
		  border-radius: 50%;
		  border-top: 16px solid #3498db;
		  width: 120px;
		  height: 120px;
		  -webkit-animation: spin 2s linear infinite; /* Safari */
		  animation: spin 2s linear infinite;
		}

		/* Safari */
		@-webkit-keyframes spin {
		  0% { -webkit-transform: rotate(0deg); }
		  100% { -webkit-transform: rotate(360deg); }
		}

		@keyframes spin {
		  0% { transform: rotate(0deg); }
		  100% { transform: rotate(360deg); }
		}

	</style>
</head>
<body style="text-align: center;  background-color:lightgray ">
	<div id="popupbackground"></div>
	<div id="popupwrap">
		<div id="popup">
			<div style="position: relative;">
				<!-- <img id="popupclose" src="Images/close.png" title="Close" alt="x" onclick="hide('popupbackground'); hide('popupwrap');" /> -->
				<div id="popuptext"></div>
				<div id="popupdrag"></div>
			</div>
		</div>
	</div>

	<div id="statsbackground"></div>
	<div id="statswrap">
		<div id="stats">
			<div style="position: relative;">
				<img id="statsclose" src="images/close.png" title="Close" alt="x" />
				<div id="statstext"></div>
				<div id="statsdrag"></div>
			</div>
		</div>
	</div>
	<center><h1 style="color: Orange">Monopolio KM</h1></center>
	<div id="noscript" align="center" >
		<div class="loader" style="margin-top:100px"></div>
	</div>

	<div id="refresh">
		Actualiza esta página para iniciar un nuevo juego
	</div>

	<!-- <div id="enlarge"></div> -->

	<div id="question" title="Pregunta Preguntona">
	  <p id="qtext"></p>
	</div>

	<div id="deed">
		<div id="deed-normal" style="display: none;">
			<div id="deed-header">
				<div style="margin: 5px; font-size: 11px;">T I T L E&nbsp;&nbsp;D E E D</div>
				<div id="deed-name"></div>
			</div>
			<table id="deed-table">
				<tr>
					<td colspan="2">
						RENTA&nbsp;$<span id="deed-baserent">12</span>.
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Con 1 Casa</td>
					<td style="text-align: right;">$&nbsp;&nbsp;&nbsp;<span id="deed-rent1">60</span>.</td>
				</tr>
				<tr>
					<td style="text-align: left;">Con 2 Casas</td>
					<td style="text-align: right;"><span id="deed-rent2">180</span>.</td>
				</tr>
				<tr>
					<td style="text-align: left;">Con 3 Casas</td>
					<td style="text-align: right;"><span id="deed-rent3">500</span>.</td>
				</tr>
				<tr>
					<td style="text-align: left;">Con 4 Casas</td>
					<td style="text-align: right;"><span id="deed-rent4">700</span>.</td>
				</tr>
				<tr>
					<td colspan="2">
						<div style="margin-bottom: 8px;">Con HOTEL $<span id="deed-rent5">900</span>.</div>
						<div>Valor de Hipoteca $<span id="deed-mortgage">80</span>.</div>
						<div>Costo de las casas $<span id="deed-houseprice">100</span>. each</div>
						<div>Hoteles, $<span id="deed-hotelprice">100</span>. plus 4 houses</div>
						<div style="font-size: 9px; font-style: italic; margin-top: 5px;">Si un jugador posee TODOS los lotes de cualquier grupo de colores, el alquiler se duplica en lotes no mejorados en ese grupo.</div>
					</td>
				</tr>
			</table>
		</div>

		<div id="deed-mortgaged">
			<div id="deed-mortgaged-name"></div>
			<p>&bull;</p>
			<div>Hipotecado</div>
			<div> por $<span id="deed-mortgaged-mortgage">80</span></div>
			<p>&bull;</p>
			<div style="font-style: italic; font-size: 13px; margin: 10px;">La tarjeta debe voltearse de este lado si la propiedad está hipotecada</div>
		</div>

		<div id="deed-special">
			<div id="deed-special-name"></div>
			<div id="deed-special-text"></div>
			<div id="deed-special-footer">
				Valor de Hipoteca
				<span style="float: right;">$<span id="deed-special-mortgage">100</span>.</span>
			</div>
		</div>
	</div>

	<table id="board">
		<tr>
			<td class="cell board-corner" id="cell20"></td>
			<td class="cell board-top" id="cell21"></td>
			<td class="cell board-top" id="cell22"></td>
			<td class="cell board-top" id="cell23"></td>
			<td class="cell board-top" id="cell24"></td>
			<td class="cell board-top" id="cell25"></td>
			<td class="cell board-top" id="cell26"></td>
			<td class="cell board-top" id="cell27"></td>
			<td class="cell board-top" id="cell28"></td>
			<td class="cell board-top" id="cell29"></td>
			<td class="cell board-corner" id="cell30"></td>
		</tr><tr>
			<td class="cell board-left" id="cell19"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell31"></td>
		</tr><tr>
			<td class="cell board-left" id="cell18"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell32"></td>
		</tr><tr>
			<td class="cell board-left" id="cell17"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell33"></td>
		</tr><tr>
			<td class="cell board-left" id="cell16"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell34"></td>
		</tr><tr>
			<td class="cell board-left" id="cell15"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell35"></td>
		</tr><tr>
			<td class="cell board-left" id="cell14"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell36"></td>
		</tr><tr>
			<td class="cell board-left" id="cell13"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell37"></td>
		</tr><tr>
			<td class="cell board-left" id="cell12"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell38"></td>
		</tr><tr>
			<td class="cell board-left" id="cell11"></td>
			<td colspan="9" class="board-center">
				<div id="jail"></div>
			</td>
			<td class="cell board-right" id="cell39"></td>
		</tr><tr>
			<td class="cell board-corner" id="cell10"></td>
			<td class="cell board-bottom" id="cell9"></td>
			<td class="cell board-bottom" id="cell8"></td>
			<td class="cell board-bottom" id="cell7"></td>
			<td class="cell board-bottom" id="cell6"></td>
			<td class="cell board-bottom" id="cell5"></td>
			<td class="cell board-bottom" id="cell4"></td>
			<td class="cell board-bottom" id="cell3"></td>
			<td class="cell board-bottom" id="cell2"></td>
			<td class="cell board-bottom" id="cell1"></td>
			<td class="cell board-corner" id="cell0"></td>
		</tr>
	</table>

	<div id="moneybarwrap" >
		<div id="moneybar" style="border: red 1px">
			<table>
				<tr id="moneybarrow0" class="money-bar-row">

					<td class="moneybararrowcell"><img src="images/arrow.png" id="p0arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p0moneybar" class="moneybarcell">
						<div><span id="p0moneyname" >Jugador 0</span>:</div>
						<div>$<span id="p0money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow1" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p1arrow" class="money-bar-arrow" alt=">"/></td>
					<td id="p1moneybar" class="moneybarcell">
						<div><span id="p1moneyname" >Jugador 1</span>:</div>
						<div>$<span id="p1money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow2" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p2arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p2moneybar" class="moneybarcell">
						<div><span id="p2moneyname" >Jugador 2</span>:</div>
						<div>$<span id="p2money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow3" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p3arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p3moneybar" class="moneybarcell">
						<div><span id="p3moneyname" >Jugador 3</span>:</div>
						<div>$<span id="p3money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow4" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p4arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p4moneybar" class="moneybarcell">
						<div><span id="p4moneyname" >Jugador 4</span>:</div>
						<div>$<span id="p4money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow5" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p5arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p5moneybar" class="moneybarcell">
						<div><span id="p5moneyname" >Jugador 5</span>:</div>
						<div>$<span id="p5money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow6" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p6arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p6moneybar" class="moneybarcell">
						<div><span id="p6moneyname" >Jugador 6</span>:</div>
						<div>$<span id="p6money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow7" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p7arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p7moneybar" class="moneybarcell">
						<div><span id="p7moneyname" >Jugador 7</span>:</div>
						<div>$<span id="p7money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow8">
					<td style="border: none;" class="moneybararrowcell">&nbsp;</td>
					<td style="border: none;">
						<input type="button" id="viewstats" value="View stats" title="Ver una ventana emergente que muestra una lista de las propiedades de cada jugador.
" />
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div id="setup">
		<div style="margin-bottom: 20px;">
			Selecciona el número de jugadores.
			<select id="playernumber" title="Selecciona el número de jugadores">
				<option>2</option>
				<option>3</option>
				<option selected="selected">4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
			</select>
		</div>

		<div id="player-wrappers">
		</div>

		<div style="margin: 20px 0px;">
			<input type="button" class="btn btn-info" value="Iniciar Juego" onclick="game_ns.setup();" title="Comienza a jugar" />
		</div>

		<div id="noF5">Nota: Actualizar esta página o navegar fuera de ella puede finalizar su juego sin previo aviso.</div>
		<form>
			<br>
			<input type="button" value="Editar Monopolio" class="btn btn-danger" onclick="window.location.href='php/newQuest.php'" />
		</form>


	</div>

	<div id="control">
		<table>
			<tr>
				<td style="text-align: left; vertical-align: top; border: none;">
					<div id="menu">
						<table id="menutable" cellspacing="0">
							<tr>
								<td class="menu-item" id="buy-menu-item">

									<a href="javascript:void(0);" title="Ver alertas y comprar la propiedad en la que aterrizó.">Comprar</a>
								</td>
								<td class="menu-item" id="manage-menu-item">

									<a href="javascript:void(0);" title="Vea, hipoteque y mejore su propiedad. ">Administrar</a>
								</td>
								<td class="menu-item" id="trade-menu-item">

									<a href="javascript:void(0);" title="Cambiar propiedad con otros jugadores">Vender</a>
								</td>
							</tr>
						</table>
					</div>

					<div id="buy">
						<div id="alert"></div>
						<div id="landed"></div>
					</div>

					<div id="manage">
						<div id="option">
							<div id="buildings" title="Available buildings"></div>
							<input type="button" value="Buy house" id="buyhousebutton"/>
							<input type="button" value="Mortgage" id="mortgagebutton" />
							<input type="button" value="Sell house" id="sellhousebutton"/>
						</div>
						<div id="owned"></div>
					</div>
				</td>
				<td style="vertical-align: top; border: none;">
					<div id="quickstats" style="">
							<div><span id="pname" >Jugador 1</span>:</div>
							<div><span id="pmoney">$1500</span></div>
					</div>
					<div>
						<div id="die0" title="Die" class="die die-no-img"></div>
						<div id="die1" title="Die" class="die die-no-img"></div>
					</div>

				</td>
			</tr><tr>
				<td colspan="2" style="border: none">
					<div style="padding-top: 8px;">
						<input type="button" id="nextbutton" title="Tira los dados y mueve tu ficha en consecuencia." value="Roll Dice"/>
						<input type="button" id="resignbutton" title="Si no puede pagar su deuda, debe renunciar al juego." value="Resign" onclick="game.resign();" />
					</div>
				</td>
			</tr>
		</table>
	</div>

	<div id="trade">
		<table style="border-spacing: 3px;">
			<tr>
				<td class="trade-cell">
					<div id="trade-leftp-name"></div>
				</td>
				<td class="trade-cell">
					<div id="trade-rightp-name"></div>
				</td>
			</tr>
			<tr>
				<td class="trade-cell">
					$&nbsp;<input id="trade-leftp-money" value="0" title="Ingrese la cantidad para intercambiar con el otro jugador." />
				</td>
				<td class="trade-cell">
					$&nbsp;<input id="trade-rightp-money" value="0" title="Ingrese la cantidad para intercambiar con el otro jugador." />
				</td>
			</tr>
			<tr>
				<td id="trade-leftp-property" class="trade-cell"></td>
				<td id="trade-rightp-property" class="trade-cell"></td>
			</tr>
			<tr>
				<td colspan="2" class="trade-cell">
					<input type="button" id="proposetradebutton" value="Proponer transacción" onclick="game.proposeTrade();" title="Cambiar el dinero y las propiedades que se marcan arriba." />
					<input type="button" id="canceltradebutton" value="Cancelar transacción" onclick='game.cancelTrade();' title="Cancelar el intercambio." />
					<input type="button" id="accepttradebutton" value="Aceptar transacción" onclick="game.acceptTrade();" title="Aceptar el intercambio." />
					<input type="button" id="rejecttradebutton" value="Rechazar transacción" onclick='game.cancelTrade();' title="Rechazar el intercambio." />
				</td>
			</tr>
		</table>
	</div>

</body>
</html>
