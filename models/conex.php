<?php

function conectar(){
    $hostname ="localhost";
    $usuario= "root";
    $pass="";

    $bd="equipogestion";

    $con = mysqli_connect($hostname,$usuario,$pass,$bd);
    return $con;

}

?>