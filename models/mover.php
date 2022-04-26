<?php


include("conex.php");
$con = conectar();

$camposFormR = [
    "idEquipo"          => $_POST['idEquipo'],
    "idDepartamento"    => $_POST['idDepartamento']
];

    
function reservados ($camposForm){

    global $con;
    
    $reserva ="UPDATE equipo SET 
             idDepartamento = ".$camposForm['idDepartamento']." 
             WHERE idEquipo = ".$camposForm['idEquipo'].";"; 
    $query= mysqli_query($con, $reserva);
    return $query;   
}

$consultaSQL = reservados($camposFormR);
    if (!$consultaSQL) {
        $msj = "Consulta no valida " . mysqli_error($con);
        die($msj);
    }

 header("Location: ../equipos.php");

?>