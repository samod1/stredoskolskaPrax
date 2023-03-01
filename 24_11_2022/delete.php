<?php
 $conn="";
 include_once "confs/db_conf.php";

 //mazanie udajov
 if(isset($_GET["id"]))
 {
    $query="DELETE FROM Samod_Pouzivatelia WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt, 'i',$_GET["id"]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

else
{
    echo "<h2>nebolo vyplnene meno</h2>";
}
?> 