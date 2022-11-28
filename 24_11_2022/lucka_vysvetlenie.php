<?php

//vytvorenie zaznamu v DB

//udaje z formularu

?>

<form method="POST">

<input type="text" name="meno" placeholder="Sem vyplnte vase ctene meno">
<input type ="text" name="priezvisko" placeholder="Sem vyplnte vase priezvisko">

<input type="submit" name="potvrdenie">
</form>

<?php

    if(isset($_POST["potvrdenie"]))
    {
        $id = 0;
        $query = "INSERT INTO tbl_pouzivatelia (vals) VALUES (?,?,?)";

        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$query);
        mysqli_stmt_bind_param($stmt, 'iss',$id,$_POST["meno"],$_POST["priezvisko"]);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
?>