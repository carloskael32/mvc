<?php

require_once "config/database.php";
require_once "controllers/Vehiculos.php";

$control = new vehiculosController();
$control->index();

?>