<?php

//spracovanie dat
$conn = "";
include "conf_db.php";


if(isset($_POST["send"]))
{
//SQL dopyt
$query = "INSERT INTO lucka.ludia (Meno, priezvisko, pohlavie, bydlisko, id_cloveka) VALUES (?,?,?,?,?)";

//inicializacia spojenia
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);
mysqli_stmt_bind_param($stmt,'ssssi',$_POST["name"],$_POST["last_name"],$_POST["sex"],$_POST["residence"],$_POST["id"]);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("Location:../insert.php");
}
?>