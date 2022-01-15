<?php

require_once("./Animal.php");

class Cat implements Animal {
    public function eat() {
        echo "Cat is eating..." . PHP_EOL;
    }
}
