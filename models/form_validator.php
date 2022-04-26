<?php

include("query.php");


$camposForm = [
    "idTipoEquipo"      => $_POST['idTipoEquipo'],
    "Inventario"        => $_POST['Inventario'],
    "Marca"             => $_POST['Marca'],
    "Modelo"            => $_POST['Modelo'],
    "serieEquipo"       => $_POST['serieEquipo'],
    "idDepartamento"    => $_POST['idDepartamento'],
    "idEstado"          => $_POST['idEstado']
];

$campoNull = FALSE;

foreach($camposForm as $campo){
    if (empty($campo)) {
        $campoNull = TRUE;
        break;
    }
}

if ($campoNull) {
    echo "No relleno todos los campos";
}else{
    $consultaSQL = query_Insert($camposForm);
    if (!$consultaSQL) {
        $msj = "Consulta no valida " . mysqli_error($con);
        die($msj);
    }
}
Header("Location: ../agregarEquipos.php");

?>