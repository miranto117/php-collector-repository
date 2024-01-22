<?php

// namespace myNamespace;

class Object {

    private $attribut = array();

    private $unAttributPrive;

    public function hello() {
        return 'Ma class article';
    }

    public function __get($nom) {
        if (isset ($this->attribut[$nom]))
            return $this->attribut[$nom];    
    }

    public function __set($name, $valeur) {
        $this->attribut[$name] = $valeur;
    }

    public function __isset ($nom) {
        return isset ($this->attribut[$nom]);
    }

    public function __unset ($nom) {
        if (isset ($this->attributs[$nom]))
            unset ($this->attributs[$nom]);
    }

    public function __call ($nom, $arguments) {
        echo '<br> Nom du méthode: ' . $nom . '<br> Valeur de la methode: ' . implode($arguments);
    }

    public function __callStatic ($nom, $arguments) {
        echo '<br> Nom du méthode: ' . $nom . '<br> Valeur de la methode: ' . implode($arguments) . '<br>';
    }

}