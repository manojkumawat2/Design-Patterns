<?php

require_once('./Animal_Factory.php');

$cat = Animal_Factory::get_animal("cat");
echo $cat->eat();

$dog = Animal_Factory::get_animal("dog");
echo $dog->eat();

$lion = Animal_Factory::get_animal("lion");
echo $lion->eat();