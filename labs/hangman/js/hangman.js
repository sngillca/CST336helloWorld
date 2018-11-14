//VARIABLES
var selectedWord = "";
var selectedHint = "";
var board = [];
var remainingGuesses = 6;
var words = [{word:"snake", hint:"It's a reptile"},
             {word:"monkey", hint:"It's a mamamal"},  
             {word:"beetle", hint:"It's an insect"},];
var alphabet = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

console.log(words[0]);
//var randomInt = Math.floor(Math.random()*words.length);
//selectedWord = words[randomInt].word;


function initBoard(){
    for (var letter in selectedWord) {
        board.push("_");
        
    }//for
}//function initBoard


for (var letter in selectedWord) {
    document.getElementById("word").innerHTML += letter += " ";
}//for



//LISTENERS
window.onload = startGame();

function startGame(){
    createLetters();
    pickWord();
    initBoard();
    updateBoard();
   
}
       


function pickWord() {
    var randomInt = Math.floor(Math.random()*words.length);
    selectedWord = words[randomInt].word.toUpperCase();
    //console.log(selectedWord);
    selectedHint = words[randomInt].hint;
    console.log("hhe"+selectedWord);
}//function pickWord

function updateBoard() {
    $("#word").empty();
    
    for (var letter of board) {
        document.getElementById("word").innerHTML += letter + " ";
    }//for
    
    $("#word").append("<br />");
    $("#word").append("<span class='hint'>Hint: "+ selectedHint +"</span>");
    
}//function updateBoard

function createLetters() {
    console.log("lettersss");
    for (var letter of alphabet) {
        console.log(letter);
        $("#letters").append("<button class='btn btn-success letter' id='" + letter +"'>" + letter + "</button>");
    }//for
}//createLetters

function checkLetter(letter) {
    var positions = new Array();
    
    for(var i = 0; i < selectedWord.length; i++){
        console.log(selectedWord)
        if(letter == selectedWord[i]) {
            positions.push(i);
        }//if
    }//for
    console.log(positions);
    if (positions.length > 0) {
        updateWord(positions, letter);
        
        if(!board.includes('_')){
            endGame(true);
        }
    } else {
        remainingGuesses -= 1;
        updateMan();
    }
    
    if (remainingGuesses <= 0) {
        endGame(false);
    }
}//checkLetter

function updateWord(positions, letter) {
    for (var pos of positions ) {
        board[pos] = letter;
    }
    updateBoard();
}//updateWord

function updateMan() {
    $("#hangImg").attr("src", "img/stick_" + (6 - remainingGuesses) + ".png");
}//updateMan

$("#letterBtn").click(function() {
    var boxVal = $("#letterBox").val();
    console.log("You pressed the button it had the value:" + boxVal);
} )

$(".letter").click(function(){
   checkLetter($(this).attr("id"));
   disableButton($(this));
});

function endGame(win) {
    $("#letters").hide();
    
    if(win) {
        $('#won').show();
    } else {
        $('#lost').show();
    }
}//endGame
//call function

$(".replayBtn").on("click", function(){
    location.reload();
});


function disableButton(btn) {
    btn.prop("disabled", true);
    btn.attr("class", "btn btn-danger");
}



