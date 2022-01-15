<?php

require_once("./Animal.php");

class Lion implements Animal {
    public function eat() {
        echo "Lion is eating..." . PHP_EOL;
    }
}
