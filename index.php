<?php

require_once ('Vehicle.php');
require_once ('Bicycle.php');
require_once ('./quete1/Cars.php');
require_once ('Truck.php');

$bike = new Bicycle('blue', 0, 1, 2);
var_dump ($bike);
echo '<br/><br/>';
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(0) . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(0) . ' km/h' . '<br>';
echo $bike->brake().'<br/><br/>';

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow', 0, 1, 2);
var_dump($rockrider);
echo '<br/><br/>';
// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black', 0, 1, 2);
echo $tornado->forward();
echo '<br/> <br/>';
var_dump($tornado);
echo '<br/> <br/>'; 
        
$car1 = new Cars('red', 0, 5, 4, 'fuel',);
var_dump($car1);
echo '<br/><br/>';

echo $car1->start();
echo '<br/><br/>';
echo $car1->brake();
echo '<br/><br/>';
echo $car1->start();
echo '<br/><br/>';
echo $car1->move();
echo '<br/><br/>';

$car2 = new Cars('green', 0, 4, 4, 'electric', 100);
var_dump($car2);
echo '<br/><br/>';
echo $car2->move();
echo '<br/><br/>';

var_dump(Cars::ALLOWED_ENERGIES);

$truck1 = new Truck('red', 0, 3, 4, 'fuel', 100);
var_dump($truck1);
echo '<br/><br/>';
echo $truck1->loadTruck(0);
echo '<br/><br/>';
echo $truck1->start();
echo '<br/><br/>';
echo $truck1->move();
echo '<br/><br/>';
echo $truck1->start();
echo '<br/><br/>';
echo $truck1->brake();
echo '<br/><br/>';
echo $truck1->unloadTruck(0);
echo '<br/><br/>';

/*

$i=1;
while ($cars1->getEnergyLevel() > 0) {
      if ($cars1->getEnergyLevel()===0){
          echo $bike->brake();
          echo '💀 No more '.$cars1->getEnergy().' ! The car cannot move';
          exit();
      }
   }
   else {
       $heracles->fight($lionDeNemee);
       echo '<p>'.
       $heracles->getName().' 🗡️ 🦁 '.$lionDeNemee->getName().' 💙🦁 '.$lionDeNemee->getName().' :'.$lionDeNemee->getLife().'<br/>';
       $lionDeNemee->fight($heracles);
       echo '🦁'.$lionDeNemee->getName().' 🗡️ 🧔🏽'.$heracles->getName().' 💙️🧔🏽 '.$heracles->getName().' :'.$heracles->getLife().
           '<br/>Round #'.$i.'</p>';
       $i++;
   } */
?>

