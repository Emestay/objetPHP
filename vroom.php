<?php
include './class.php';
$voitureuh = new Vroom('vromm','red', 8, 150);


var_dump($voitureuh);

echo "<p>$voitureuh->name </p>";
echo "<p>$voitureuh->color </p>";
echo "<p>$voitureuh->vitesse </p>";
echo "<p>$voitureuh->roue </p>";

?>
