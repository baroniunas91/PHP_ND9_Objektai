<?php

defined('FRONT') || die;

// Sukurti klasę Stiklinė. Sukurti privačią savybę tūris ir kiekis. Parašyti metodą ipilti($kiekis), 
// kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa 
// ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną kiekį. Sukurti tris stiklines 
// objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, 
// o mažesnę į dar mažesnę.

require_once __DIR__ . '/Stikline.php';

$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);

$stikline1->ipilti(300);
$stikline2->ipilti($stikline1->ispilti());
$stikline3->ipilti($stikline2->ispilti());
_p($stikline1);
_p($stikline2);
_p($stikline3);
