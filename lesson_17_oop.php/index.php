<?php
include "Car.php";


$bmw = new Car("mersedes", "red", 200, 0);


echo $bmw->maxSpeed . " " .$bmw->brand;
echo $bmw->move() . "<br>";
echo $bmw->currentSpeed;