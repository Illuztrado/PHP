<?php
header('Content-type: text/javascript');

?>

$(document).ready(function() {
    var randomNum1 = Math.floor((Math.random()*99));
    var randomNum2 = Math.floor((Math.random()*99));
    var product = randomNum1 * randomNum2;
    alert(randomNum1 + " x " + randomNum2 + " = " + product);
});