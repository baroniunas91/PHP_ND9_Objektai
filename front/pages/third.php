<?php

defined('FRONT') || die;

require_once __DIR__ . '/Grybas.php';
require_once __DIR__ . '/Krepsys.php';

// Sukurti klasę Grybas. Sukurti klasę Krepsys. Grybas turi tris privačias savybes: valgomas, 
// sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos 
// taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. 
// Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į 
// Krepsi objektą, kol bus pririnkta 500 svorio nesukirmijusių ir valgomų grybų.

$krepsys = new Krepsys;
$count = 0;
// _l($krepsys->getKiekis());
// _l($krepsys);
while($krepsys->getKiekis() < $krepsys->getTalpa()) {
    $rastasGrybas = new Grybas;
    if($rastasGrybas->getValgomas() && $rastasGrybas->getSukirmijes()) {
        $krepsys->deti($rastasGrybas->getSvoris());
        $count++;
        _l($krepsys);
    }
}

echo "Buvo pririnkta $count grybų";
