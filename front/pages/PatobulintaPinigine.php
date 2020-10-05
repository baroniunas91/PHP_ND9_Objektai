<?php

// Patobulinti 1 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų ir 
// kiek banknotų. Parašyti metodą monetos, kuris skaičiuotų kiek yra piniginėje monetų ir 
// metoda banknotai - popierinių pinigų skaičiavimui.

class PatobulintaPinigine {
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    private $banknotuKiekis;
    private $monetuKiekis;

    public function ideti($kiekis) {
        if($kiekis < 2) {
            $this->metaliniaiPinigai += $kiekis;
            $this->monetuKiekis++;
        } else {
            $this->popieriniaiPinigai += $kiekis;
            $this->banknotuKiekis++;
        }
    }

    public function skaiciuoti() {
        $sum = $this->popieriniaiPinigai + $this->metaliniaiPinigai;
        return $sum;
    }

    public function skaiciuotiMonetas() {
        return $this->monetuKiekis;
    }

    public function skaiciuotiBanknotus() {
        return $this->banknotuKiekis;
    }
}