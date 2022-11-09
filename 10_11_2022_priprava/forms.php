<?php
    $tab="formulare";
    $conn = "";
    include_once "confs/head.php";
    include_once "confs/db_config.php";
?>
<h1>
    Formulare
</h1>

<form method="post">
    <label>meno</label>
    <input type="text" name="meno">
    <br>
    <label>Priezvisko</label>
    <input type="text" name="priezvisko">
    <br>
    <label>Bydlisko</label>
    <select name="bydlisko">
        <option value="Trnava">Trnava</option>
        <option value="Bratislava">Bratislava</option>
        <option value="Majcichov">Majcichov</option>
    </select>
    <br>
    <input type="radio" name="plnoletost" id="nie" value="nie">
    <label for="ano">nie</label>
    
    <input type="radio" name="plnoletost" id="ano" value="ano">
    <label for="ano">ano</label>
    <br>
    <label>Hobby</label>
    <textarea name="hobby" rows="10" cols="10"></textarea>
    <br>
    <input type="reset">
    <input type="submit" name="poslat">
</form>

<?php
if(isset($_POST["poslat"]))
{
    $id = 0;

    $query = "INSERT INTO Samod_Pouzivatelia (id,meno,priezvisko,bydlisko,plnoletost,hobby) VALUES (?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt,'isssss', $id, $_POST["meno"], $_POST["priezvisko"], $_POST["bydlisko"],
    $_POST["plnoletost"], $_POST["hobby"]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
