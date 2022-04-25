<?php

require_once 'Vehicle.php';
class Bicycle extends Vehicle implements LightableInterface

{
    public function __construct(string $color = '', int $currentSpeed=0, int $nbSeats=2, int $nbWheels=2, string $energy='', int $energyLevel=100, bool $hasParkBrake)
    {
        $this -> color = $color;
        $this -> currentSpeed = $currentSpeed;
        $this -> nbSeats = $nbSeats;
        $this -> nbWheels = $nbWheels;
        $this -> energy = $energy;
        $this -> energyLevel = $energyLevel;
        $this -> hasParkBrake = $hasParkBrake;
    }
    public function switchOn(bool $light): bool
    {
        if ($this-> currentSpeed > 10) {
            echo '<br/> 💡 The light is on';
            return true;
        } else {
            echo '<br/> 💡 The light is off';
            return false;
        }
    }
    public function switchOff(bool $light): bool
    {
        if ($light === false) {
            echo '<br/> 💡 The light is off';
            return false;
        } else {
            echo '<br/> 💡 The light is on';
            return true;
        }
    }
}
?>