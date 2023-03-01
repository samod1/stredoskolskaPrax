<?php

$tab = "vypis";
$conn="";
include_once "confs/head.php";
include_once "confs/db_config.php";

$sql="SELECT id,meno,priezvisko FROM Samod_Pouzivatelia";
$result = mysqli_query($conn,$sql);
$numRows= mysqli_num_rows($result);

if($numRows != 0)
{
?>
    <table class="table table-hover table-stripped">
        <tr>
            <th scope="col">id</th>
            <th scope="col">meno</th>
            <th scope="col">priezvisko</th>
            <th colspan="2">Akcia</th>
        </tr>
      
    <?php
    //1. sposob
    while($row = mysqli_fetch_assoc($result))
    {
       
        ?>

    
        <?php 
            ?> 
            <tr>
                    <th scope= 'row'><?php echo $row["id"]; ?></th>
                    <td><?php echo $row["meno"]; ?></td>
                    <td><?php echo $row["priezvisko"]; ?></td>
            </tr>

            <?php
             echo $row["id"]." ".$row["meno"]." ".$row["priezvisko"]."<br>";
            }
        ?>
    </table>



  

<?php
}

else
{
    echo "V databazovej tabulke sa nenachdza ziaden udaj";
}


?>