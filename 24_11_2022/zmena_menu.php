<?php
    $conn = "";
    include_once "confs/head.php";
    include_once "confs/db_conf.php";


    if(!isset($_GET["meno"]))
    {
        echo "Nie je vyplnene meno stravnika";
    }

    else
    {
        echo $_GET["meno"];
    }
?>