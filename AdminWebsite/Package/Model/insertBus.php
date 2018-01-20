<?php
include 'Connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

function insertBus($bus){
    $mysqli = connection();
    $id = $bus->getId();
    $capacity = $bus->getCapacity();
    $driver = $bus->getDriver();
    $services = $bus->getServices();
	$query = 'call insertBus("'.$id.'", '.$capacity.', "'.$driver.'","'.$services.'");';
	
	if (! ($result = $mysqli->query($query))) {
        $mysqli ->close(); 
        return $mysqli->error;
    }
    else{
        $mysqli ->close(); 
        return "SUCCESS";
    }
	
	
}


?>