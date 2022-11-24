<?php
$conn="";
$cena=0;
include "db_conf.php";
$menoStravnika = "samo";
echo "<h2>Vypis objednavok pre pouzivatela: ".$_GET['meno']."</h2>";
        
        $query="SELECT so.datum_objednavky , sj.nazov , sj.gramaz , sj.cena  FROM samod_objednavky so INNER JOIN samod_jedla sj ON so.id_jedla = sj.id 
        WHERE so.meno_stravnika='". $menoStravnika. "' ORDER BY so.datum_objednavky ASC";
        $result= mysqli_query($conn,$query);
        $pocetRiadkov = mysqli_num_rows($result);
        ?>

            <br>
            <div class="row">
                <div class="col-4">
                    <table class="table table-stripped table-hover">
                        <thead>
                            <tr>
                                <th>Datum Objednavky</th>
                                <th>Nazov jedla</th>
                                <th>Cena jedla</th>
                            </tr>
                        </thead>



        <?php
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo $row["datum_objednavky"]?></td>
                <td><?php echo $row["nazov"]?></td>
                <td><?php echo $row["cena"]?></td>
            </tr>
            <?php
            $cena = $cena + $row["cena"];
        }
            ?>
            
            <tr>
                <td colspan="2">Cena spolu</td>
                <td><?php echo $cena;?></td>
            </tr>
            </table>
