<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";

class Libro extends MaterialeBibliotecario
{

    private $autore;
    static $contatoreMateriali = 0;

    public function __construct($titolo, $autore, $annoPubblicazione)
    {
        parent::__construct($titolo, $annoPubblicazione);

        $this->autore = $autore;
    }

    public static function contaLibri()
    {
        return self::$contatoreMateriali;
    }
}
