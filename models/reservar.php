<?php


include("conex.php");
$con = conectar();

$camposFormR = [
    "idEquipo"          => $_POST['idEquipo'],
    "fechaReserva"      => $_POST['fechaReserva'],
    "idUsuario"         => $_POST['idUsuario']
];

function query_Insert($arrayAsociativo){
    global $con;
    
    $reserva = "INSERT INTO reservaequipo (        
        idEquipo,
        fechaReserva, 
        idUsuario) 
        VALUES("            
            .$arrayAsociativo['idEquipo'].",'"
            .$arrayAsociativo['fechaReserva']."',"
            .$arrayAsociativo['idUsuario'].
        ");";
    
    $query2 = mysqli_query($con, $reserva);
    return $query2;
}

$consultaSQL = query_Insert($camposFormR);
    if (!$consultaSQL) {
        $msj = "Consulta no valida " . mysqli_error($con);
        die($msj);
    }

    
function reservados($camposForm){

    global $con;
    
    $reserva ="UPDATE equipo SET 
             idEstado = 2 
             WHERE idEquipo = ".$camposForm['idEquipo'].";"; 
    $query= mysqli_query($con, $reserva);
    return $query;   
}

$consultaSQL = reservados($camposFormR);
    if (!$consultaSQL) {
        $msj = "Consulta no valida " . mysqli_error($con);
        die($msj);
    }

 header("Location: ../reservados.php");

?>