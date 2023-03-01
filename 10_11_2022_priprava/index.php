<!-- Zaciatok php skriptu -->
<?php
$tab = "domovska stranka";
include_once "confs/head.php";
//definicia premennej. Premenna vzdy musi zacinat $
echo "Hello World!<br>";
$meno = "samo";

$a = 3;
$b = 4;

$c = $a + $b;

echo "Vysledok tohoto prikladu je " . $c . "<br>";
?>
<!-- Koniec php skriptu -->


<input type="text" value="<?php echo $meno; ?>">