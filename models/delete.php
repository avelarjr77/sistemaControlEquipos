<?php
include("conex.php");

$con = conectar();

$idEquipo=$_GET['id'];

$del="DELETE FROM equipo WHERE idEquipo='$idEquipo'";
$query=mysqli_query($con,$del);

if($query){
    header("Location: ../equipos.php");
}

?> 