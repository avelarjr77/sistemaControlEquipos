<?php

include ("conex.php");

$tipoEquipo     =$_POST['tipoEquipo'];
$Inventario     =$_POST['Inventario'];
$Marca          =$_POST['Marca'];
$Modelo         =$_POST['Modelo'];
$serieEquipo    =$_POST['serieEquipo'];
$departamento   =$_POST['departamento'];
$estadoEquipo   =$_POST['estadoEquipo'];

$sql="INSERT INTO equipo VALUES('$idEquipo','$tipoEquipo','$Inventario','$Marca','$Modelo','$serieEquipo','$departamento','$estadoEquipo')";

$query=mysqli_query($con,$sql);


    Header("Location: agregarEquipos.php");

?>