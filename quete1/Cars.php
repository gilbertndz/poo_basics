<?php

require_once 'Vehicle.php';
class Cars extends Vehicle  implements LightableInterface{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
// CONSTRUCTOR

    public function __construct(protected string $color = '', protected int $currentSpeed=0, 
                                protected int $nbSeats=5, protected int $nbWheels=4,
                                protected string $energy='', protected int $energyLevel=100,
                                protected bool $hasParkBrake) 
        {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
        $this->setEnergy($energy);
        $this->energyLevel = $energyLevel;
        $this->hasParkBrake = $hasParkBrake;
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

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {
        if ($this->hasParkBrake === true) {
            throw new Exception("Park brake is on, you can't start the car !");
        }
        try {
            if ($this->hasParkBrake) {
                throw new Exception("The car is stopped");
            }
            if ($this->energyLevel <= 0) {
                throw new Exception("The car is out of fuel");
            }
            if ($this->currentSpeed > 0) {
                throw new Exception("The car is already started");
            }
            $this->currentSpeed = 15;
            $this->energyLevel--;
            return "The car is started";
        } catch (Exception $e) {
            if (isset($e)) {
                $this->setParkBrake('');
            }
            return $e->getMessage();
        } finally {
            return "Ma voiture roule comme un donut";
        }

    }
    
    public function switchOn(bool $light): bool
    {
        if ($light === true) {
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