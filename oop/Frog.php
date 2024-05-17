<?php

require_once 'Animal.php';

class Frog extends Animal {
    public function __construct($name) {
        parent::__construct($name, 4, false);
    }

    public function makeSound() {
        return 'Hop Hop';
    }
}

?>