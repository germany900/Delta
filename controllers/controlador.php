<?php
    require_once("../models/modelo.php");
/*
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";*/

    $services = new Service();
    $datos = $services->getServicios();
    require_once("../views/vista.php");
    require_once("../views/update.php");
?>