<?php

class Singleton_Pattern {
    private static $instance = NULL;
    private $counter = 0;
    function __construct() {
    }

    public static function instance(): Singleton_Pattern {
        if(self::$instance == NULL) {
            self::$instance = new Singleton_Pattern();
        }
        return self::$instance;
    }

    public function inc_counter(): void {
        $this->counter++;
    }

    public function dec_counter(): void {
        $this->counter--;
    }

    public function get_counter(): int {
        return $this->counter;
    }
}
