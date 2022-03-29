<?php

class Bicycle {
  

// GETTERS && SETTERS
    public function __construct(private string $color = '', private int $currentSpeed=0, private int $nbSeats=1, private int $nbWheels=2)
    {
    $this->color = $color;
    $this->currentSpeed = $currentSpeed;
    $this->nbSeats = $nbSeats;
    $this->nbWheels = $nbWheels;
    }
    public function getColor()
    {
    return $this->color;
    }
    public function setColor(string $color): void
    {
    $this->color = $color;
    }
    public function getCurrentSpeed(int $currentSpeed)
    {
    return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
    if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
        }
    }
    public function getNbSeats()
    {
    return $this->nbSeats;
    }
    public function setNbSeats(int $nbSeats): void
    {
    $this->nbSeats = $nbSeats;
    }
    public function getNbWheels()
    {
    return $this->nbWheels;
    }
    public function setNbWheels(int $nbWheels): void
    {
    $this->nbWheels = $nbWheels;
    }

    // METHODES 

    public function forward(): string
    {
    $this->currentSpeed = 15;

    return "Go !";
    }

    public function brake(): string
    {
    $sentence = "";
    while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
    $sentence .= "I'm stopped !";
    return $sentence;
    }
}





?>