<?php

if(isset($_GET["id"]))
{

    $conn="";
    require_once "conf_db.php";


    $query="DELETE FROM ludia WHERE id_cloveka=?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt, 'i',$_GET["id"]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:vypis_z_db.php");
}







?>