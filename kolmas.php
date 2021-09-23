<?php

$alkupalkka=1234.56;

$laskettu_palkka = laske_palkka($alkupalkka, 20);


echo $laskettu_palkka;
function laske_palkka($vanha_palkka, $alennus_prosentti){
    $alennus = ($alennus_prosentti/100)*$vanha_palkka;
    $uusi_palkka = ($vanha_palkka) - $alennus;
    return $vanha_palkka;
}
?>