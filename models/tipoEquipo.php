<?php


include("conex.php");
$con = conectar();

$camposFormR = [
    "detalleTipoEquipo" => $_POST['detalleTipoEquipo']
];

function query_Insert($arrayAsociativo){
    global $con;
    
    $detalleTipoEquipo = "INSERT INTO tipoequipo (detalleTipoEquipo) 
        VALUES('".$arrayAsociativo['detalleTipoEquipo']."');";
    
    $query = mysqli_query($con, $detalleTipoEquipo);
    return $query;
}
$consultaSQL = query_Insert($camposFormR);
    if (!$consultaSQL) {
        $msj = "Consulta no valida " . mysqli_error($con);
        die($msj);
    }
   
    

Header("Location: ../agregarEquipos.php");

?>