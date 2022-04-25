<?php

class Skateboard extends Vehicle

{
    public function __construct(string $color = '', int $currentSpeed=0, int $nbWheels=4, string $energy='', int $energyLevel=100, bool $hasParkBrake)
    {
        $this -> color = $color;
        $this -> currentSpeed = $currentSpeed;
        $this -> nbWheels = $nbWheels;
        $this -> energy = $energy;
        $this -> energyLevel = $energyLevel;
        $this -> hasParkBrake = $hasParkBrake;
    }
}