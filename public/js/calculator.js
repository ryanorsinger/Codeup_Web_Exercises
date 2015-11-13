"use strict";

function listener(event) {
    var clickedButton = this;
    checkUserInput(clickedButton);
}

function checkUserInput(object){
    if (object.getAttribute('data-value') == 'clear') {
        clearScreen();
    } else if (object.getAttribute('class') == 'number') {
        handleNumberInput(object);
    } else if (object.getAttribute('class') == 'operator') {
        handleOperatorInput(object);
    }
}

function clearScreen() {

}

function handleNumberInput(object) {

}

function handleOperatorInput(object) {

}

function addNumberToLeftInput(){}

function addNumberToRightInput(){}



// Add event listener on all buttons
var buttons = document.getElementsByTagName('button');
for(var i = 0; i < buttons.length; i += 1) {
    buttons[i].addEventListener('click', listener, false);
}
