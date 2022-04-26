<?php


include("conex.php");
$con=conectar();

$camposFormR = [
    "idEquipo"      =>$_POST['idEquipo'],
    "idTipoEquipo"   =>$_POST['idTipoEquipo'],
    "Inventario"     =>$_POST['Inventario'],
    "Marca"        =>$_POST['Marca'],
    "Modelo"       =>$_POST['Modelo'],
    "serieEquipo"     =>$_POST['serieEquipo'],
    "idDepartamento" =>$_POST['idDepartamento'],
    "idEstado"      =>$_POST['idEstado']
];

function actualizar ($camposForm){

    global $con;
    
    $actualizar ="UPDATE equipo SET 
             idTipoEquipo = ".$camposForm['idTipoEquipo'].", 
             Inventario  = '".$camposForm['Inventario']."',
             Marca  = '".$camposForm['Marca']."',
             Modelo  = '".$camposForm['Modelo']."',
             serieEquipo  = '".$camposForm['serieEquipo']."',
             idDepartamento  = ".$camposForm['idDepartamento'].",
             idEstado  = ".$camposForm['idEstado']."
             WHERE idEquipo = ".$camposForm['idEquipo'].";"; 
    $query= mysqli_query($con, $actualizar);
    return $query;   
}

$consultaSQL = actualizar($camposFormR);
    if (!$consultaSQL) {
        $msj = "Consulta no valida " . mysqli_error($con);
        die($msj);
    }

 header("Location: ../equipos.php");




?>