"use strict";

// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var randomColor = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; // TODO: change this to your favorite color from the list
var message;

console.log('Random color chosen is ' + randomColor);
console.log('My favorite color is ' + favorite);

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
if(randomColor == 'red') {
    message = 'Roses are red';
} else if (randomColor == 'orange') {
    message = 'Orange is the color of Trump\'s hair';
} else if (randomColor == 'yellow') {
    message = 'yellow is the color of my true love\'s hair';
} else if (randomColor == 'green') {
    message = 'green thumb';
} else if (randomColor == 'blue') {
    message = 'My eyes are blue';
} else {
    message = 'I don\'t know anything about that color';
}

console.log(message);

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.

// (condition) ? "then" : "else";

message = (randomColor == favorite) ? 'Random color matches, YAY!' : 'No match';
console.log(message);

