<?php
    $conn = "";
    include_once "confs/head.php";
    include_once "confs/db_conf.php";

    $query = "SELECT nazov,cena,gramaz FROM samod_jedla ORDER BY id ASC";
    $result = mysqli_query($conn, $query);
    $pocetRiadkov = mysqli_num_rows($result);
   ?>
   <br>
   <div class="row">
   <div class="col-4"></div>
   <div class="col-4">
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>Nazov jedla</th>
                <th>Gramaz jedla</th>
                <th>Cena jedla</th>
            </tr>
        </thead>
        <tbody>
    
    <?php
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo $row["nazov"]; ?></td>
                <td><?php echo $row["gramaz"]; ?></td>
                <td><?php echo $row["cena"]; ?> euro</td>
            </tr>
            <?php
        }    
    ?>
        </tbody>
    </table>
</div>
<div class="col-4"></div>
</div>