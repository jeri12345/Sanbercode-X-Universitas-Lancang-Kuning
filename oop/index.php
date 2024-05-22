<?php

require_once 'Ape.php';
require_once 'Frog.php';

$shaun = new Animal('Shaun');
$buduk = new Frog('Buduk');
$keraSakti = new Ape('Kera Sakti');

echo "Name: " . $shaun->getName() . "<br>";
echo "Legs: " . $shaun->getLegs() . "<br>";
echo "Cold Blooded: " . ($shaun->isColdBlooded() ? 'Yes' : 'No') . "<br>";


echo "Name: " . $buduk->getName() . "<br>";
echo "Legs: " . $buduk->getLegs() . "<br>";
echo "Cold Blooded: " . ($buduk->isColdBlooded() ? 'Yes' : 'No') . "<br>";
echo "Jump: " . $buduk->makeSound() . "<br><br>";

echo "Name: " . $keraSakti->getName() . "<br>";
echo "Legs: " . $keraSakti->getLegs() . "<br>";
echo "Cold Blooded: " . ($keraSakti->isColdBlooded() ? 'Yes' : 'No') . "<br>";
echo "Yell: " . $keraSakti->makeSound() . "<br>";

?>