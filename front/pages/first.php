<?php

defined('FRONT') || die;
require_once __DIR__ . '/Pinigine.php';
// Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. 
// Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, 
// tai prideda prie metaliniaiPinigai, jeigu didesnis nei 2 prie popieriniaiPinigai. 
// Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir 
// metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą.

$p1 = new Pinigine;

$p1->ideti(1);
$p1->ideti(3);
$p1->ideti(0.5);
$p1->ideti(10);
_p($p1);
$p1->skaiciuoti();