<?php
include '../Model/Bus.php';
include '../Model/insertBus.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Controller {
    private static $instance =null;
    private $buses=  array();

  private  function __construct() {
      
  } 
  
  public static function getInstance() {
    
    if(!isset(Controller::$instance))
    {
      Controller::$instance = new Controller();
      
    }
    return Controller::$instance;
}

  
  public function addBus($id, $driver, $capacity, $services){
      $bus = new Bus($id,$driver, $capacity, $services);
      $this->buses[$id] = $bus;
      return insertBus($bus);
      
  }
  
  public function getBus($id){
    if($this->buses[$id] !== NULL){

      return $this->buses[$id];
    }
    return NULL;
  }
  
  public function getBuses(){
    return $this->buses;
    
  }
  
}

?>






