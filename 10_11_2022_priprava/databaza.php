<?php
    $conn = "";
    include_once "confs/db_config.php";
?>
<h1>Databaza</h1>
<h3>Ako sa k nej dostat</h3>
<ul>
    <li>Lokalne v xamppe</li>
    <li>Vzdialene vam ju vytvorim</li>
</ul>
<img src="../assets/img/databaza.png">

<?php


echo "<h3>Pripojenie databazy</h3>";
if(!$conn)
{
    echo "Shit happens";
}

else
{
    echo "everything is okay";
}
?>
<br>

<a href="confs/db_skript_na_vytvorenie_db.php">Skript na vytvorenie databazy</a>

<br>

<?php

    if($_GET["status"] == "ok")
    {
        echo "vytvorenie tabulky prebehlo v poriadku";
    }

    if($_GET["status"] == "fail")
    {
        echo "vytvorenie tabulky neprebehlo spravne";
    }

    if($_GET["status"] == "")
    {
        //nic sa nevypise
    }

?>
