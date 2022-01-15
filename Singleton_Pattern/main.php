<?php

require('./Singleton_Pattern.php');


// Object 1
$o1 = Singleton_Pattern::instance();
echo $o1->get_counter() . PHP_EOL;
$o1->inc_counter();
$o1->inc_counter();
echo $o1->get_counter() . PHP_EOL;

// Object 2
$o2 = Singleton_Pattern::instance();
echo $o2->get_counter() . PHP_EOL;
