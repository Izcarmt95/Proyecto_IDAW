<?php
include 'Controller.php';

$tag = $_POST["tag"];

if($tag == 'displayTableFlotilla')
{
    $Controlador2 = Controller::getInstance();
    $buses = $Controlador2->getBuses();
    $arrayBus = array();
    foreach($buses as $bus){
        $id = $bus->getId();
        $capacity = $bus->getCapacity();
        $services = $bus->getServices();
        $driver = $bus->getDriver();
        $object = array("id"=>$id, "capacity"=>$capacity, "services"=>$services, "driver"=>$driver);
        array_push($arrayBus,$object); 
    }
    $arrayJson=array("data"=>$arrayBus);
    echo json_encode($arrayJson);
}

if($tag == "addBus" )
{
    $id = $_POST["id"];
    $capacity = $_POST["capacity"];
    $services = $_POST["services"];
    $driver = $_POST["driver"];
    $Controlador = Controller::getInstance();
    $response = $Controlador->addBus($id,$driver, $capacity,$services);
     
    echo json_encode($response);
}

/*    $buses = $Controlador->getBuses();
    $arrayBus = array();
    foreach($buses as $bus){
        $id = $bus->getId();
        $capacity = $bus->getCapacity();
        $services = $bus->getServices();
        $driver = $bus->getDriver();
        $object = array("id"=>$id, "capacity"=>$capacity, "services"=>$services, "driver"=>$driver);
        array_push($arrayBus,$object); 
    }
    $arrayJson=array("data"=>$arrayBus);*/
?>