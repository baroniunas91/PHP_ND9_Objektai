<?php
// Sukurti klasę Grybas. Sukurti klasę Krepsys. Grybas turi tris privačias savybes: 
// valgomas, sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai 
// priskiriamos taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. 
// Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, 
// kol bus pririnkta 500 svorio nesukirmijusių ir valgomų grybų.

class Krepsys {
    private $talpa = 500;
    private $kiekis = 0;

    public function deti($svoris) {
        if($this->kiekis + $svoris >= $this->talpa) {
            $this->kiekis = $this->talpa;
        } else {
            $this->kiekis += $svoris;
        }
    }
    public function getKiekis() {
        return $this->kiekis;
    }

    public function getTalpa() {
        return $this->talpa;
    }
}