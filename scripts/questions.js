var questionsData = [];
var qnaData = [];
var answer = "";
var isCorrect = false;


function prompQuestion(i, p) {
	$( function() {
		document.getElementById("qtext").textContent = qnaData[i].question;
		$( "#question" ).dialog({
			dialogClass: "no-close",
		    buttons: {    
		        "1": function() { 
		        	if (qnaData[i].answer == 1) {
		        		p.money += 200;
		        		alert("Correcto!");
						addAlert(p.name + " ha recogido un salario de $200 por pasar GO. ");
		        		$(this).dialog("close");
		        	}
		        	else {
		        		alert("Incorrecto!");
		        		addAlert(p.name + " no se recogió nada por pasar GO. ");
		        		$(this).dialog("close");
		        	} 
		        },
		        "2": function() { 
		        	if (qnaData[i].answer == 2) {
		        		p.money += 200;
		        		alert("Correcto!");
						addAlert(p.name + " ha recogido un salario de $200 por pasar GO. ");
		        		$(this).dialog("close");
		        	}
		        	else {
		        		alert("Incorrecto!");
						addAlert(p.name + " no se recogió nada por pasar GO. ");
		        		$(this).dialog("close");		        	} 
		        },
	    	},
	    	width: "400px"
		});
	});
}
/*function connection() {
    var mysql = require('mysql');

    var con = mysql.createConnection({
        host: "localhost",
        user: "root",
        password: "",
        database: "monopolio"
    });

    con.connect(function(err) {
        if (err) throw err;
        con.query("SELECT * FROM preguntas", function (err, result, fields) {
            if (err) throw err;
            console.log(result);
        });
    });
}*/

function getQuestions() {
	$.ajax({
		type: 'GET',
	    cache: false,
	    url: 'http://localhost/monopolio/data/preguntas.txt',
	    success: function (data) {
	    	var questionsData = data.split("\n");
	    	console.log(questionsData);
            var arrayLength = questionsData.length;
			for (var i = 0; i < arrayLength; i++) {
				var split = questionsData[i].split("/");
				var qna = {question: "", answer: ""};
				qna.question = split[0];
				qna.answer = split[1];
				qnaData.push(qna);
			}
		}
	})
}