<?php

include_once __DIR__ . '/../interfaces/Prestito.php';
abstract class MaterialeBibliotecario implements Prestito {

    public $titolo;
    public $anno;
    static public $contatoreMateriali = 0;

    function __construct($titolo, $anno) {
        $this->titolo = $titolo;
        $this->anno = $anno;
        self::$contatoreMateriali++;
    }


    public function presta() {
        if(self::$contatoreMateriali > 0) {
            self::$contatoreMateriali--;
            static::$contatoreMateriali--;  }
        }
    

    public function restituisci() {
        self::$contatoreMateriali++;
        static::$contatoreMateriali++;
    }

}