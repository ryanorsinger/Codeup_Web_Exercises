"use strict";

(function() {
    // create a circle object
    var circle = {
        radius: 3,
        getArea: function() {
            // todo: finish this method
            // hint: area = pi * radius^2
            var area = Math.PI * Math.pow(this.radius, 2);
            return area;
        },
        getDiameter: function() {
            return 2 * this.radius;
        },
        getCircumference: function() {
            // A circle's circumference is 2*pi*r;
            // Math.PI * this.radius * 2
            return Math.PI * this.getDiameter();
        },
        logInfo: function (round) {
            var result = this.getArea();
            // todo: complete this method. if round is true, round the result to the nearest integer.
            if(round) {
                console.log('Area of a circle with radius: ' + this.radius + ', is ' + Math.round(result));
            } else {
                console.log('Area of a circle with radius: ' + this.radius + ', is: ' + result);
            }
        }
    };

    // log info about the circle
    circle.logInfo(false);
    circle.logInfo(true);

    // todo:
    // Change the radius of the circle to 5.
    circle.radius = 5;

    // log info about the circle
    circle.logInfo(false);
    circle.logInfo(true);

    console.log('The diameter of a circle with radius of ' + circle.radius + ' is ' + circle.getDiameter());
    console.log('The circumference of a circle with radius of ' + circle.radius  + ' is ' + circle.getCircumference());

    circle.radius = 22;
    circle.logInfo(false);
    circle.logInfo(true);
})();
