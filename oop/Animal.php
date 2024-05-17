<?php

abstract class Animal {
    protected $name;
    protected $legs;
    protected $coldBlooded;

    public function __construct($name, $legs, $coldBlooded) {
        $this->name = $name;
        $this->legs = $legs;
        $this->coldBlooded = $coldBlooded;
    }

    public function getName() {
        return $this->name;
    }

    public function getLegs() {
        return $this->legs;
    }

    public function isColdBlooded() {
        return $this->coldBlooded;
    }

    abstract public function makeSound();
}

?>