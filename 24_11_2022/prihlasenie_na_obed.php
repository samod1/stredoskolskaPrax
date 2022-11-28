<?php
    $conn = "";
    $cena = 0;
    
    include_once "confs/head.php";
    include_once "confs/db_conf.php";

    if(isset($_GET["meno"]))
    {
        include "confs/tab_s_jedlami.php";
       
        
        ?>
            </div>
            <div class="col-4"></div>
            <div class="col-4"></div>
        </div>
        <h2>Objednanie jedla</h2>
        <form class="form-group" method="post">
        <label for="meno_stravnika">Meno stravnika</label>    
        <input id="meno_stravnika" class="form-control form-control-lg" name="meno" value="<?php echo $_GET["meno"];?>" readonly>
        <br>
        <label for="jedlo">Zvolte si jedlo</label>
        <select id="jedlo" name="jedlo" class="form-control form-control-lg">
            <?php
                $query1="SELECT id, nazov, cena, gramaz FROM samod_jedla ORDER BY id ASC";
                $result1= mysqli_query($conn,$query1);
                while($row = mysqli_fetch_assoc($result1))
                {
                    echo "<option value='".$row["id"]."'>".$row['nazov']." (".$row['cena']."€ ".$row['gramaz']."g)</option>";
                }
            ?>
        </select>
        <div class="row">
            <div class="col-6">
                <input type="reset">
            </div>
            <div class="col-6">
                
            </div>
        </div>

        </form>
        <?php
    }

    else
    {
        echo "<h2>Nebolo vyplnene meno stravnika</h2>";
    }


?>