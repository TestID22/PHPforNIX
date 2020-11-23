<?php


class Car
{
    public $brand;
    public $color;
    public $maxSpeed;
    public $currentSpeed = 0;

    public function __construct($brand, $color, $maxSpeed, $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
        $this->brand = $brand;
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
    }


    public function move(){
        $this->currentSpeed = 60;
    }
}