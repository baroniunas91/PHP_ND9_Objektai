<?php

defined('FRONT') || die;
require_once __DIR__ . '/PatobulintaPinigine.php';
// Patobulinti 1 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų ir 
// kiek banknotų. Parašyti metodą monetos, kuris skaičiuotų kiek yra piniginėje monetų ir 
// metoda banknotai - popierinių pinigų skaičiavimui.

$pinigine = new PatobulintaPinigine;

$pinigine->ideti(10);
$pinigine->ideti(5);
$pinigine->ideti(20);
$pinigine->ideti(1);
$pinigine->ideti(0.5);

echo 'Piniginėje yra: ' . $pinigine->skaiciuotiBanknotus() . ' banknotai';
echo '<br>';
echo 'Piniginėje yra: ' . $pinigine->skaiciuotiMonetas() . ' banknotai';
echo '<br>';
echo 'Bendra suma yra: ' . $pinigine->skaiciuoti() . ' Eur';
echo '<br>';
_l($pinigine);
