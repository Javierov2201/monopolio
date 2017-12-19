var questionsData = [];
var qnaData = [];
var answer = "";

function askQuestion(per, action, conv) {
    var length = qnaData.length;
    var rand = Math.round(Math.random()*(length-1));
    console.log("indice random: " + rand);

    $( function() {
        console.log(qnaData[rand]);
        document.getElementById("qtext").textContent = qnaData[rand].question;
        $( "#question" ).dialog({
            dialogClass: "no-close",
            buttons: {
                "1": function() {
                    checkAnswer(1, rand, per, action, conv);
                    $(this).dialog("close");
                },
                "2": function() {
                    checkAnswer(2, rand, per, action, conv);
                    $(this).dialog("close");
                },
                "3": function() {
                    checkAnswer(3, rand, per, action, conv);
                    $(this).dialog("close");
                },
                "4": function() {
                    checkAnswer(4, rand, per, action, conv);
                    $(this).dialog("close");
                },
            },
            width: "400px"
        });
    });
};

function collectGo(per) {
    per.money += 200;
    addAlert(per.name + " ha recogido un salario de $200 por pasar GO. ");
}

// answer, index, person, question case
function checkAnswer(ans, ind, per, action, conv) {
    if (qnaData[ind].answer == ans) {
        alert("Correcto!");
        addAlert(per.name + " respondió correctamente. ");
        if (conv == 1 || conv ==2){
            action(per);
        }
        updateMoney();
    }
    else {
        alert("Incorrecto!");
        if (conv == 0 || conv == 2){
            action(per);
        }
        addAlert(per.name + " respondió incorrectamente. ");
    }
}

function getQuestions() {
    $.ajax({
        type: 'GET',
        cache: false,
        url: 'data/preguntas.txt',
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
            console.log(qnaData);
        }
    })
}