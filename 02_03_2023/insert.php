<?php
include "confs/head.php";
$conn = "";
include "confs/conf_db.php";

?>
<h1>Vkladanie do databazy</h1>

<form method="post" action="confs/insert_action.php" class="form-group">
    <label>Meno</label>
    <input type="text" name="name" required class="form-control form-control-lg">
    <br>
    <label>Priezvisko</label>
    <input type="text" name="last_name" required class="form-control form-control-lg">
    <br>
    <label>Pohlavie</label>
    <input type="text" name="sex" required class="form-control form-control-lg">
    <br>
    <label>Bydlisko</label>
    <input type="text" name="residence" required class="form-control form-control-lg">
    <input type="hidden" name="id" value="0">
    <br>
    <div class="row">
        <div class="col-6"><input class="btn btn-primary btn-lg btn-block" type="submit" name="send"></div>
        <div class="col-6"><input class="btn btn-secondary btn-lg btn-block" type="reset"></div>
    </div>
</form>

<?php

