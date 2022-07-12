<?php
$id_local = $_POST['id_local'];
require 'conexion.php';

$q = "UPDATE estadistica_local SET cantidad_personas=cantidad_personas+1 WHERE id_local=$id_local";


$r = mysqli_query($con, $q);


?>