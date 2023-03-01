<?php include "confs/head.php";?>
<h1>Uprava udajov</h1>

<?php
 $conn="";
 include_once "confs/conf_db.php";

 //mazanie udajov
 if(isset($_GET["id"]))
    $query="SELECT Meno, priezvisko, pohlavie, bydlisko, id_cloveka FROM ludia WHERE id_cloveka=".$_GET["id"];
    $result = mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);
    
 {
    ?>
    <form method="post" action="confs/edit_action.php">
            <label>Meno</label>
            <input type="text" name="name" value="<?php echo $row["Meno"]?>" required  class="form-control form-control-lg">
            <br>
            <label>Priezvisko</label>
            <input type="text" name="last_name" value="<?php echo $row["priezvisko"]?>" required class="form-control form-control-lg">
            <br>
            <label>Pohlavie</label>
            <input type="text" name="sex" value="<?php echo $row["pohlavie"]?>" required class="form-control form-control-lg">
            <br>
            <label>Bydlisko</label>
            <input type="text" name="residence" value="<?php echo $row["bydlisko"]?>" required class="form-control form-control-lg">
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
            <br>
            <div class="row">
                <div class="col-6"><input class="btn btn-primary btn-lg btn-block" type="submit" name="send"></div>
                <div class="col-6"><input class="btn btn-secondary btn-lg btn-block" type="reset"></div>
            </div>
    </form>
    <?php
 }