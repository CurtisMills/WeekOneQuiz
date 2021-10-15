<?php

include_once 'Car.php';

$colour;
$make;
$model;
$mileage;

if(isset($_GET['submit'])) {

    $colour = $_GET['colour'];
    $make = $_GET['make'];
    $model = $_GET['model'];
    $mileage = $_GET['mileage'];

}


$myNewCar = new Car($colour, $make, $model, $mileage);
// $myNewCar->sprayPaintCar("Green");

echo $myNewCar;

$myNewCar->sprayPaintCar("Red");
echo $myNewCar;


?>