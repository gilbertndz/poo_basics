<?php

require_once 'Vehicle.php';
class Cars extends Vehicle {

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
// CONSTRUCTOR
    public function __construct(protected string $color = '', protected int $currentSpeed=0, 
                                protected int $nbSeats=5, protected int $nbWheels=4,
                                protected string $energy='', protected int $energyLevel=100)
        {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
        $this->setEnergy($energy);
        $this->energyLevel = $energyLevel;
        }

// GETTERS && SETTERS

        public function getEnergy()
        {
        return $this->energy;
        }
        public function setEnergy(string $energy): Cars
        {
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }
            return $this;
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

        public function move(): string
        {
            $sentence = "";
            while ($this->energyLevel > 0 && $this->currentSpeed > 0){
                $this->energyLevel--;
                echo "🏁 Vroum ! Vroum !";
            }
            return "<br/><br/> 💀 I need some gas!";
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