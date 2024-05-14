<?php
include_once __DIR__ . '/MaterialeBibliotecario.php';

class Libro extends MaterialeBibliotecario {

    public $autore;

    static public $contatoreMateriali = 0; //indipendente dalla variabile nella classe genitore
    public function __construct($titolo, $anno, $autore) {
        parent::__construct($titolo, $anno);
        $this->autore = $autore;
        
    }
    public static $countBook;

    public static function contaLibri() {
        self::$countBook++;
    }
    
}