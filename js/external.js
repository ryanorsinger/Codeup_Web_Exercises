// console log a hello

console.log("Hello from external JavaScript!");

var someBoolean = true;

if(someBoolean) {
    console.log("This variable is true");
}

var someBoolean = false;

if (username == 'ryano') {
    console.log("This variable is " + someBoolean);
} else if (someBoolean2) {
    console.log("This variable is " + someBoolean2);
} else if (someBoolean3) {
    console.log("This variable is " + someBoolean3);
} else {
    console.log("If none of the above cases were true, this else will run");
}


var loggedOn = true;
var isCaptain = true;
var captainIsOnDuty = true;
var message = '';

if (loggedOn && isCaptain) {
    message = (captainIsOnDuty) ? 'Please stay off the rum.' : 'welcome aboard';
} else if (loggedOn) {
    message = 'welcome aboard, crew';
} else {
    message = 'You are not yet logged on';
}

console.log(message);
