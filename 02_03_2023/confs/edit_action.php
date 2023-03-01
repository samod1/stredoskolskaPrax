<?php
$conn = "";
include "conf_db.php";


if(isset($_POST["send"]) && isset($_POST["id"]))
{
//SQL dopyt
$query = "UPDATE ludia SET Meno=?, priezvisko=?, pohlavie=?, bydlisko=? WHERE id_cloveka=?";

//inicializacia spojenia
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);
mysqli_stmt_bind_param($stmt,'ssssi',$_POST["name"],$_POST["last_name"],$_POST["sex"],$_POST["residence"],$_POST["id"]);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
echo "ok";
header("Location:../vypis_z_db.php");
}

?>