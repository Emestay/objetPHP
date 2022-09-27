<?php
include 'maison.php';

$premiere = new maison("Voila", 180, 500, 4);



echo "<p>la surface de {$premiere->nom} est égale à : {$premiere->getSuperficie()} m2</p>";
echo "<p>la surface de {$premiere->nom} est égale avec ses étages à : {$premiere->getSuperficieEtages()} m2</p>";