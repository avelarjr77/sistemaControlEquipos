<?php

   
    $idDepartamento="Equipo agregado al departamento : $_POST[idDepartamento]";

    if($_POST['idDepartamento']!=""){
        $response=array('success'=>true, 'idDepartamento'=>$idDepartamento);
    }else{
        $response=array('success'=>false, 'error'=>'Uno de los parametros esta vacio');
    }

    echo json_encode($response);

?>