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
<a href="databaza.php">Databaza</a>
<a href="forms.php">Formulare</a>
<a href="tabulka.php">Tabulka</a>
<a href="poslanie_emailu.php">Emailovy zasielac</a>

<input type="text" value="<?php echo $meno; ?>">