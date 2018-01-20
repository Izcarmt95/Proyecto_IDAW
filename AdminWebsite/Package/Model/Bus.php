<?php
class Bus {
    
    private $id;
    private $driver;
    private $capacity;
    private $services;

    public function __construct($id, $driver, $capacity, $services) {
        $this->id = $id;
        $this->driver = $driver;
        $this->capacity = $capacity;
        $this->services = $services;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getDriver(){
        return $this->driver;
    }
    
    public function getCapacity(){
        return $this->capacity;
    }
    
    public function getServices(){
/*        $serviceString = "";
        foreach($this->services as $service){
            $serviceString .=" " . $service;
            
        }*/
        return $this->services;
    }
}
?>