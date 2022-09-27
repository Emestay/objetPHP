<?php
include 'vehicule.php';

$bagnole = new vehicule('Titine', 160, 'Red', 4);
$pasBagnole = new vehicule('vroomVroom', 180, 'Red', 2);

//foreach (vehicule as $key => $value){
//    $value->detect();
//    $value->plusRapide($value);
//
//}

$bagnole->detect();
$pasBagnole->detect();
$bagnole->boost();
$bagnole->plusRapide($pasBagnole);
$pasBagnole->plusRapide($bagnole);