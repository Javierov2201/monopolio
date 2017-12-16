var squareData = [];
var communityChestData = [];
var chanceData = [];

var square = [];
var communityChestCards = [];
var chanceCards = [];

function Square(name, pricetext, color, price, groupNumber, baserent, rent1, rent2, rent3, rent4, rent5) {
	this.name = name;
	this.pricetext = pricetext;
	this.color = color;
	this.owner = 0;
	this.mortgage = false;
	this.house = 0;
	this.hotel = 0;
	this.groupNumber = groupNumber || 0;
	this.price = (price || 0);
	this.baserent = (baserent || 0);
	this.rent1 = (rent1 || 0);
	this.rent2 = (rent2 || 0);
	this.rent3 = (rent3 || 0);
	this.rent4 = (rent4 || 0);
	this.rent5 = (rent5 || 0);
	this.landcount = 0;
	
	if (groupNumber === 3 || groupNumber === 4) {
		this.houseprice = 50;
	} else if (groupNumber === 5 || groupNumber === 6) {
		this.houseprice = 100;
	} else if (groupNumber === 7 || groupNumber === 8) {
		this.houseprice = 150;
	} else if (groupNumber === 9 || groupNumber === 10) {
		this.houseprice = 200;
	} else {
		this.houseprice = 0;
	}
}

function getSquares() {
	$.ajax({
		type: 'GET',
	    cache: false,
	    url: 'http://localhost/monopolio/data/sitios.txt',
	    success: function (data) {
			squareData = data.split("\n");
			square[0] = new Square(squareData[0], "COLLECT $200 SALARY AS YOU PASS.", "#FFFFFF");
			square[1] = new Square(squareData[1], "$60", "#8B4513", 60, 3, 2, 10, 30, 90, 160, 250);
			square[2] = new Square(squareData[2], "FOLLOW INSTRUCTIONS ON TOP CARD", "#FFFFFF");
			square[3] = new Square(squareData[3], "$60", "#8B4513", 60, 3, 4, 20, 60, 180, 320, 450);
			square[4] = new Square(squareData[4], "Pay $200", "#FFFFFF");
			square[5] = new Square(squareData[5], "$200", "#FFFFFF", 200, 1);
			square[6] = new Square(squareData[6], "$100", "#87CEEB", 100, 4, 6, 30, 90, 270, 400, 550);
			square[7] = new Square(squareData[7], "FOLLOW INSTRUCTIONS ON TOP CARD", "#FFFFFF");
			square[8] = new Square(squareData[8], "$100", "#87CEEB", 100, 4, 6, 30, 90, 270, 400, 550);
			square[9] = new Square(squareData[9], "$120", "#87CEEB", 120, 4, 8, 40, 100, 300, 450, 600);
			square[10] = new Square(squareData[10], "", "#FFFFFF");
			square[11] = new Square(squareData[11], "$140", "#FF0080", 140, 5, 10, 50, 150, 450, 625, 750);
			square[12] = new Square(squareData[12], "$150", "#FFFFFF", 150, 2);
			square[13] = new Square(squareData[13], "$140", "#FF0080", 140, 5, 10, 50, 150, 450, 625, 750);
			square[14] = new Square(squareData[14], "$160", "#FF0080", 160, 5, 12, 60, 180, 500, 700, 900);
			square[15] = new Square(squareData[15], "$200", "#FFFFFF", 200, 1);
			square[16] = new Square(squareData[16], "$180", "#FFA500", 180, 6, 14, 70, 200, 550, 750, 950);
			square[17] = new Square(squareData[17], "FOLLOW INSTRUCTIONS ON TOP CARD", "#FFFFFF");
			square[18] = new Square(squareData[18], "$180", "#FFA500", 180, 6, 14, 70, 200, 550, 750, 950);
			square[19] = new Square(squareData[19], "$200", "#FFA500", 200, 6, 16, 80, 220, 600, 800, 1000);
			square[20] = new Square(squareData[20], "", "#FFFFFF");
			square[21] = new Square(squareData[21], "$220", "#FF0000", 220, 7, 18, 90, 250, 700, 875, 1050);
			square[22] = new Square(squareData[22], "FOLLOW INSTRUCTIONS ON TOP CARD", "#FFFFFF");
			square[23] = new Square(squareData[23], "$220", "#FF0000", 220, 7, 18, 90, 250, 700, 875, 1050);
			square[24] = new Square(squareData[24], "$240", "#FF0000", 240, 7, 20, 100, 300, 750, 925, 1100);
			square[25] = new Square(squareData[25], "$200", "#FFFFFF", 200, 1);
			square[26] = new Square(squareData[26], "$260", "#FFFF00", 260, 8, 22, 110, 330, 800, 975, 1150);
			square[27] = new Square(squareData[27], "$260", "#FFFF00", 260, 8, 22, 110, 330, 800, 975, 1150);
			square[28] = new Square(squareData[28], "$150", "#FFFFFF", 150, 2);
			square[29] = new Square(squareData[29], "$280", "#FFFF00", 280, 8, 24, 120, 360, 850, 1025, 1200);
			square[30] = new Square(squareData[30], "Go directly to Jail. Do not pass GO. Do not collect $200.", "#FFFFFF");
			square[31] = new Square(squareData[31], "$300", "#008000", 300, 9, 26, 130, 390, 900, 110, 1275);
			square[32] = new Square(squareData[32], "$300", "#008000", 300, 9, 26, 130, 390, 900, 110, 1275);
			square[33] = new Square(squareData[33], "FOLLOW INSTRUCTIONS ON TOP CARD", "#FFFFFF");
			square[34] = new Square(squareData[34], "$320", "#008000", 320, 9, 28, 150, 450, 1000, 1200, 1400);
			square[35] = new Square(squareData[35], "$200", "#FFFFFF", 200, 1);
			square[36] = new Square(squareData[36], "FOLLOW INSTRUCTIONS ON TOP CARD", "#FFFFFF");
			square[37] = new Square(squareData[37], "$350", "#0000FF", 350, 10, 35, 175, 500, 1100, 1300, 1500);
			square[38] = new Square(squareData[38], "Pay $100", "#FFFFFF");
			square[39] = new Square(squareData[39], "$400", "#0000FF", 400, 10, 50, 200, 600, 1400, 1700, 2000);
			console.log(square);
		}
	})
}

function getCommunityChest() {
	$.ajax({
		type: 'GET',
	    cache: false,
	    url: 'http://localhost/monopolio/data/arcacomunal.txt',
	    success: function (data) {
	    	communityChestData = data.split("\n");
			communityChestCards[0] = new Card(communityChestData[0], function(p) { p.communityChestJailCard = true; updateOwned();});
			communityChestCards[1] = new Card(communityChestData[1], function() { addamount(10, 'Community Chest');});
			communityChestCards[2] = new Card(communityChestData[2], function() { addamount(50, 'Community Chest');});
			communityChestCards[3] = new Card(communityChestData[3], function() { addamount(100, 'Community Chest');});
			communityChestCards[4] = new Card(communityChestData[4], function() { addamount(20, 'Community Chest');});
			communityChestCards[5] = new Card(communityChestData[5], function() { addamount(100, 'Community Chest');});
			communityChestCards[6] = new Card(communityChestData[6], function() { addamount(100, 'Community Chest');});
			communityChestCards[7] = new Card(communityChestData[7], function() { addamount(25, 'Community Chest');});
			communityChestCards[8] = new Card(communityChestData[8], function() { subtractamount(100, 'Community Chest');});
			communityChestCards[9] = new Card(communityChestData[9], function() { addamount(200, 'Community Chest');});
			communityChestCards[10] = new Card(communityChestData[10], function() { subtractamount(50, 'Community Chest');});
			communityChestCards[11] = new Card(communityChestData[11], function() { subtractamount(50, 'Community Chest');});
			communityChestCards[12] = new Card(communityChestData[12], function() { collectfromeachplayer(10, 'Community Chest');});
			communityChestCards[13] = new Card(communityChestData[13], function() { advance(0);});
			communityChestCards[14] = new Card(communityChestData[14], function() { streetrepairs(40, 115);});
			communityChestCards[15] = new Card(communityChestData[15], function() { gotojail();});
		   	console.log(communityChestCards);
		}
	})
}


function getChances() {
	$.ajax({
		type: 'GET',
	    cache: false,
	    url: 'http://localhost/monopolio/data/chances.txt',
	    success: function (data) {
	    	chanceData = data.split("\n");
			chanceCards[0] = new Card(chanceData[0], function(p) { p.chanceJailCard=true; updateOwned();});
			chanceCards[1] = new Card(chanceData[1], function() { streetrepairs(25, 100);});
			chanceCards[2] = new Card(chanceData[2], function() { subtractamount(15, 'Chance');});
			chanceCards[3] = new Card(chanceData[3], function() { payeachplayer(50, 'Chance');});
			chanceCards[4] = new Card(chanceData[4], function() { gobackthreespaces();});
			chanceCards[5] = new Card(chanceData[5], function() { advanceToNearestUtility();});
			chanceCards[6] = new Card(chanceData[6], function() { addamount(50, 'Chance');});
			chanceCards[7] = new Card(chanceData[7], function() { advanceToNearestRailroad();});
			chanceCards[8] = new Card(chanceData[8], function() { subtractamount(15, 'Chance');});
			chanceCards[9] = new Card(chanceData[9], function() { advance(5);});
			chanceCards[10] = new Card(chanceData[10], function() { advance(39);});
			chanceCards[11] = new Card(chanceData[11], function() { advance(24);});
			chanceCards[12] = new Card(chanceData[12], function() { addamount(150, 'Chance');});
			chanceCards[13] = new Card(chanceData[13], function() { advanceToNearestRailroad();});
			chanceCards[14] = new Card(chanceData[14], function() { advance(11);});
			chanceCards[15] = new Card(chanceData[15], function() { gotojail();});
			console.log(chanceCards);
		}
	})
}

function Card(text, action) {
	this.text = text;
	this.action = action;
}

function corrections() {
	document.getElementById("cell1name").textContent = "Mediter-ranean Avenue";
	
	// Add images to enlarges.
	document.getElementById("enlarge5token").innerHTML += '<img src="images/train_icon.png" height="60" width="65" alt="" style="position: relative; bottom: 20px;" />';
	document.getElementById("enlarge15token").innerHTML += '<img src="images/train_icon.png" height="60" width="65" alt="" style="position: relative; top: -20px;" />';
	document.getElementById("enlarge25token").innerHTML += '<img src="images/train_icon.png" height="60" width="65" alt="" style="position: relative; top: -20px;" />';
	document.getElementById("enlarge35token").innerHTML += '<img src="images/train_icon.png" height="60" width="65" alt="" style="position: relative; top: -20px;" />';
	document.getElementById("enlarge12token").innerHTML += '<img src="images/electric_icon.png" height="60" width="48" alt="" style="position: relative; top: -20px;" />';
	document.getElementById("enlarge28token").innerHTML += '<img src="images/water_icon.png" height="60" width="78" alt="" style="position: relative; top: -20px;" />';
}

function utiltext() {
	return '&nbsp;&nbsp;&nbsp;&nbsp;If one "Utility" is owned rent is 4 times amount shown on dice.<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;If both "Utilitys" are owned rent is 10 times amount shown on dice.';
}

function transtext() {
	return '<div style="font-size: 14px; line-height: 1.5;">Rent<span style="float: right;">$25.</span><br />If 2 Railroads are owned<span style="float: right;">50.</span><br />If 3 &nbsp; &nbsp; " &nbsp; &nbsp; " &nbsp; &nbsp; "<span style="float: right;">100.</span><br />If 4 &nbsp; &nbsp; " &nbsp; &nbsp; " &nbsp; &nbsp; "<span style="float: right;">200.</span></div>';
}

function luxurytax() {
	addAlert(player[turn].name + " paid $100 for landing on Luxury Tax.");
	player[turn].pay(100, 0);
	
	$("#landed").show().text("You landed on Luxury Tax. Pay $100.");
}

function citytax() {
	addAlert(player[turn].name + " paid $200 for landing on City Tax.");
	player[turn].pay(200, 0);

	$("#landed").show().text("You landed on City Tax. Pay $200.");
}