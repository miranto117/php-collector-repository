<?php

class MonSingleton {

    protected static $instance;

    protected function __construct() {

    }

    protected function __clone() {

    }

    public static function getInstance () {
        if (!isset (self::$instance))
            self::$instance = new self;

        return self::$instance;
    }

}