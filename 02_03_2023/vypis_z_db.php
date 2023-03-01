<?php
include "confs/head.php";
$conn = "";
include "confs/conf_db.php";
$query="SELECT Meno, priezvisko, pohlavie, bydlisko, id_cloveka FROM ludia ORDER BY id_cloveka ASC";

$result = mysqli_query($conn,$query);
$rowNum = mysqli_num_rows($result);

if($rowNum !=0)
{
    ?>
    <h1>Vypis z databazy</h1>
    <table class="table table-stripped">
    <tr>
        <th>Meno</th>
        <th>Priezvisko</th>
        <th>Pohlavie</th>
        <th>Bydlisko</th>
        <th colspan="2">Akcia</th>
    </tr>

    <?php
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
            <td><?php echo $row['Meno']?> </td>
            <td><?php echo $row['priezvisko']?></td>
            <td><?php echo $row['pohlavie']?></td>
            <td><?php echo $row['bydlisko']?></td>
            <td><a class="btn btn-danger btn-lg btn-block" href='delete.php?id=<?php echo $row['id_cloveka']?>'>Vymazat</a>
            <td><a class="btn btn-warning btn-lg btn-block" href='edit.php?id=<?php echo $row['id_cloveka']?>'>Upravit</a></td>
    </tr>
    <?php
    }

    
}



?>  
</table>
