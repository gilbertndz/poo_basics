<?php

require_once ('Bicycle.php');
require_once ('./quete1/Cars.php');

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
$rockrider = new Bicycle('yellow');
var_dump($rockrider);
echo '<br/><br/>';
// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');
echo $tornado->forward();
echo '<br/> <br/>';
var_dump($tornado);
echo '<br/> <br/>';
        
$car1 = new Cars('red', 0, 5, 4, 'gas',);
var_dump($car1);
echo '<br/><br/>';

echo $car1->start();
echo '<br/><br/>';
echo $car1->brake();
echo '<br/><br/>';
echo $car1->start();
echo '<br/><br/>';
echo $car1->forward();


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

