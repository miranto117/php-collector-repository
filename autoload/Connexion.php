<?php 

class Connexion {

    private $hote, $user, $pwd, $db;

    public function __construct ($hote, $user, $pwd, $db) {
        $this->hote = $hote;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->db = $db;

        $this->connectDB();
    }

    public function connectDB() {
        echo ' Tonga de voantso ito methode ito ';
    }

    public function __sleep() {
        return array('var3', 'var2','var1');
    }

}