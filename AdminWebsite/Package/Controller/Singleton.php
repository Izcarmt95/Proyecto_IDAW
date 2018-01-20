<?php
include 'Controller.php';

class SingletonController {
    private static $singleton = null ;
    private  $elControlador;

    private function __construct() {
        $elControlador = new Controller();
    }
    
    public static function getInstance() {
        if ($singleton == null){
            $singleton = new SingletonController();
        }
        return $singleton;
    }
    
    public function getController(){
        return $this->getInstance()->elControlador;
    }
}

?>