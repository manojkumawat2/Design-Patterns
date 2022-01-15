<?php

require_once('./Animal.php');
require_once('./Cat.php');
require_once('./Dog.php');
require_once('./Lion.php');

class Animal_Factory {
    public static function get_animal(string $type): Animal {
        if($type === 'cat') {
            return new Cat();
        } else if($type === 'dog') {
            return new Dog();
        } else if($type === 'lion') {
            return new Lion();
        }

        return null;
    }
}