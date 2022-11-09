<?php
$conn = "";
include_once "db_config.php";

$sql = "CREATE TABLE Samod_Pouzivatelia (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
meno VARCHAR(30) NOT NULL,
priezvisko VARCHAR(30) NOT NULL,
bydlisko VARCHAR(50),
plnoletost VARCHAR(10),
hobby VARCHAR(150)
)";

if (mysqli_query($conn, $sql)) {
    header('Location: ../databaza.php?status=ok');
} 

else {
    header('Location: ../databaza.php?status=fail');
}



?>