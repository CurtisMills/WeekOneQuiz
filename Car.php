<?php

class Car {

    private $colour;
    private $make;
    private $model;
    private $mileage;

    function __construct($colour, $make, $model, $mileage) {
        $this->colour = $colour;
        $this->make = $make;
        $this->model = $model;
        $this->mileage = $mileage;
    }

    function getColour() {
        return $this->colour;
    }

    function getMake() {
        return $this->make;
    }

    function getModel() {
        return $this->model;
    }

    function getMileage() {
        return $this->mileage;
    }

    function __toString()
    {   
        return "The colour of the car is: " . $this->colour . "<br> The make of the car is: " . $this->make . "<br> The model of the car is: " . $this->model . "<br> The mileage of the car is: " . $this->mileage . "<br> <br>";
    }

    function sprayPaintCar($newColour) {
        $this->colour = $newColour;
        return "The car has been spray painted " . $newColour;
    }

    function moveCar($miles) {
        $this->mileage = $this->mileage + $miles;
        return "You have travelled " . $miles . ". The new mileage of your car is: " . $this->getMileage();
    }


}

?>