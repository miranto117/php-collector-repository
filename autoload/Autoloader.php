<?php 

// namespace myNamespace;


class Autoloader{

    public static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    public static function autoload($class){
        
        // var_dump($class);

        $class = str_replace('\\', '/', $class);
        $dir = __DIR__ ;
        $directory = str_replace( '\\', '/', $dir);

        // var_dump($class);

        require $directory . '/' . $class .'.php';

    }

}