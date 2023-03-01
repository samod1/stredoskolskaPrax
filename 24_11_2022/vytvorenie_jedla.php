<?php
    $conn = "";
    include_once "confs/head.php";
    include_once "confs/db_conf.php";

    if(isset($_GET["rola"]))
    {
        if($_GET["rola"] == "admin")
        {
            ?>
            <form method="POST" class="form-group">
                <label for="nazov_jedla">Nazov jedla</label>
                <input class="form-control form-control-lg" id="nazov_jedla" type="text" name="nazov_jedla" autofocus required>    
                <div class="row">
                    <div class="col-6">
                        <label for="nazov_jedla">Gramaz jedla</label>
                        <input class="form-control form-control-lg" id="nazov_jedla" type="number" name="gramaz_jedla" autofocus required> 
                    </div>

                    <div class="col-6">
                        <label for="nazov_jedla">Cena jedla</label>
                        <input class="form-control form-control-lg" id="nazov_jedla" type="number" step="0.01" name="cena_jedla" autofocus required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <input type="reset" class="btn btn-lg btn-block btn-secondary">
                    </div>
                    <div class="col-6">
                        <input type="submit" name="odoslat" class="btn btn-primary btn-lg btn-block">
                    </div>
                </div>
            </form>

        <?php
            if(isset($_POST["nazov_jedla"]) && isset($_POST["gramaz_jedla"]) && isset($_POST["cena_jedla"]) && isset($_POST["odoslat"]))
            {
                $id=0;
                //zacina sa spracovanie
                $query="INSERT INTO samod_jedla (id,nazov,gramaz,cena) VALUES (?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$query);
                mysqli_stmt_bind_param($stmt,'isss',$id,$_POST["nazov_jedla"], $_POST["gramaz_jedla"], $_POST["cena_jedla"]);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
                header("Location:index.php");
                
            }

            else
            {
                echo "Niesu vypisane ziadne parametre";
            }
        }
        else
        {
            echo "nespravna rola";
        }
    }

    else
    {
        echo "nie je vyplnena rola";
    }
?>