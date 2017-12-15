var questionsData = [];
var qnaData = [];
var answer = "";
var isCorrect = false;

function prompQuestion(i) {
	console.log($("p"));
	$("#qtext").textContent = "floro";
	$( function() {
		$( "#question" ).dialog({
			dialogClass: "no-close",
		    buttons: {    
		        "1": function() { 
		        	if (qnaData[i].answer == 1) {
		        		alert("Correcto!");
		        		$(this).dialog("close");
		        		isCorrect = true;
		        	}
		        	else {
		        		alert("Incorrecto!");
		        		$(this).dialog("close");
		        		isCorrect = false;
		        	} 
		        },
		        "2": function() { 
		        	if (qnaData[i].answer == 2) {
		        		alert("Correcto!");
		        		$(this).dialog("close");
		        		isCorrect = true;
		        	}
		        	else {
		        		alert("Incorrecto!");
		        		$(this).dialog("close");
		        		isCorrect = false;
		        	} 
		        },
	    	},
	    	width: "400px"
		});
	});
}

prompQuestion(1);

function getCommunityChest() {
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