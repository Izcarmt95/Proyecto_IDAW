<?php
function connection(){
    $mysqli = new mysqli('localhost', 'jonardrgz', '', 'c9');
    	if ($mysqli->connect_error) {
            $jsonResponse["STATUS"] = "NO_CONNECT";
         	die(json_encode($jsonResponse));
        }
    /* cambiar el conjunto de caracteres a utf8 */
    if (!$mysqli->set_charset("utf8")) {
        printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
        exit();
    }
    
    return $mysqli;
}
?>