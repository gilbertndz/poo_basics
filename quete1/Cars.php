<?php

class Cars {

    
// CONSTRUCTOR
    public function __construct(private string $color = '', private int $currentSpeed=0, 
                                private int $nbSeats=5, private int $nbWheels=4,
                                private string $energy='', private int $energyLevel=100)
        {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
        $this->energy = $energy;
        $this->energyLevel = $energyLevel;
        }

// GETTERS && SETTERS
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
        public function getEnergy()
        {
        return $this->energy;
        }
        public function setEnergy(string $energy): void
        {
        $this->energy = $energy;
        }
        public function getEnergyLevel()
        {
        return $this->energyLevel;
        }
        public function setEnergyLevel(int $energyLevel): void
        {
        $this->energyLevel = $energyLevel;
        }
    
        // METHODES 
        
        public function start(): string
        {
            $this->currentSpeed = 15;

        return "🚗 Go !";
        }
        public function forward(): string
        {
        $sentence = "";
        while ($this->energyLevel > 0 && $this->currentSpeed > 0){
            $this->energyLevel--;
            echo "🏁 Vroum ! Vroum !";
        }
        return "<br/><br/> 💀 I need some gas";
        }
    
        public function brake(): string
        {
        $sentence = "";
        while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
        $sentence .= "<br/><br/> I'm stopped !";
        return $sentence;
        }
    }
    
    
    
    
    
    ?>