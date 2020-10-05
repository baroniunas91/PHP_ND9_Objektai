<?php

// Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. 
// Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, 
// tai prideda prie metaliniaiPinigai, jeigu didesnis nei 2 prie popieriniaiPinigai. 
// Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir 
// metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą.

class Pinigine {
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function ideti($kiekis) {
        if($kiekis < 2) {
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti() {
        $sum = $this->popieriniaiPinigai + $this->metaliniaiPinigai;
        _p($sum);
    }
}