<?php


include("conex.php");
$con = conectar();

$camposFormR = [
    "idEquipo"          => $_POST['idEquipo'],
    "fechaPrestamo"     => $_POST['fechaPrestamo'],
    "idUsuario"         => $_POST['idUsuario']
];

function query_Insert($arrayAsociativo){
    global $con;
    
    $prestamo = "INSERT INTO prestamoequipo (        
        idEquipo,
        fechaPrestamo, 
        idUsuario) 
        VALUES("
            .$arrayAsociativo['idEquipo'].",'"
            .$arrayAsociativo['fechaPrestamo']."',"
            .$arrayAsociativo['idUsuario'].
        ");";
    
    $query = mysqli_query($con, $prestamo);
    return $query;
}
$consultaSQL = query_Insert($camposFormR);
    if (!$consultaSQL) {
        $msj = "Consulta no valida " . mysqli_error($con);
        die($msj);
    }

    function prestar($camposForm){

        global $con;
        
        $prestamo ="UPDATE equipo SET 
                 idEstado = 5 
                 WHERE idEquipo = ".$camposForm['idEquipo'].";"; 
        $query= mysqli_query($con, $prestamo);
        return $query;   
    }
    
    $consultaSQL = prestar($camposFormR);
        if (!$consultaSQL) {
            $msj = "Consulta no valida " . mysqli_error($con);
            die($msj);
        }
    

Header("Location: ../prestamoEquipo.php");

?>