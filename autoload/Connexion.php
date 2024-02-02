<?php 

class Connexion {

    private $hote = "hote";
    private $user = "user";
    private $pwd = "pwd";
    private $db= "db";

    private static $_connexion;

    private function __construct () {
        
    }

    public static function getConnect (){
        if (!isset($_connexion))
        self::$_connexion = new self;

        return self::$_connexion;
    }

    public function connectDB() {
        echo ' Tonga de voantso ito methode ito ';
    }

    public function __sleep() {
        return array('var3', 'var2','var1');
    }
 
}