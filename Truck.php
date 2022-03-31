<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    
// CONSTRUCTOR

    public function __construct(string $color = '', int $currentSpeed = 0, int $nbSeats = 2, 
                                int $nbWheels = 4, string $energy = '', int $energyLevel = 100,
                                protected int $storageCapacity = 100, protected int $load = 0)
    {
        parent::__construct($color, $currentSpeed, $nbSeats, $nbWheels, $energy, $energyLevel);
        $this->storageCapacity = $storageCapacity;
        $this->load = $load;
        $this->energy = $energy;
        $this->energyLevel = $energyLevel;
    }

// GETTERS && SETTERS

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }
    public function getLoad(): int
    {
        return $this->load;
    }
    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

// METHODES 

    public function loadTruck(int $truck): string
    {
        $i=1;
        if ($this->load + $truck <= $this->storageCapacity) {
            $this->load += $truck;
            return "Truck in filling !";
            
        } else {
            return "Truck is full !";
            exit();
        }
    }
    public function unloadTruck(int $truck): string
    {
        if ($this->load - $truck >= 0) {
            $this->load -= $truck;
            return "Truck is empty !";
        } else {
            return "Truck is too heavy !";
        }
    }
    public function move(): string
    {
            $sentence = "";
            while ($this->energyLevel > 0 && $this->currentSpeed > 0){
                $this->energyLevel--;
                echo "🏁 Vroum ! Vroum !";
            }
            return "<br/><br/> 💀 I need some gas!";
    }
}