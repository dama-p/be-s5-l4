<?php
include_once __DIR__ . '/MaterialeBibliotecario.php';

class DVD extends MaterialeBibliotecario {

    public $regista;
    public function __construct($titolo, $anno, $regista) {
        parent::__construct($titolo, $anno);
        $this->regista = $regista;

    }

    public static $countDVD;

    public static function contaDVD() {
        self::$countDVD++;
    }
    
}