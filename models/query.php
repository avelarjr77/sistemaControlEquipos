<?php
include("conex.php");
$con = conectar();

function query_Insert($arrayAsociativo){
    global $con;
    
    $equipo = "INSERT INTO equipo (        
            idTipoEquipo,
            Inventario, 
            Marca, 
            Modelo, 
            serieEquipo, 
            idDepartamento, 
            idEstado
        ) 
        VALUES("
            .$arrayAsociativo['idTipoEquipo'].",'"
            .$arrayAsociativo['Inventario']."','"
            .$arrayAsociativo['Marca']."','"
            .$arrayAsociativo['Modelo']."','"
            .$arrayAsociativo['serieEquipo']."',"
            .$arrayAsociativo['idDepartamento'].","
            .$arrayAsociativo['idEstado'].
        ");";
    
    $query = mysqli_query($con, $equipo);
    return $query;
}
