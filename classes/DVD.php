<?php


include_once __DIR__ . "/MaterialeBibliotecario.php";


class DVD extends MaterialeBibliotecario
{

    private $regista;
    static $contatoreMateriali = 0;

    public function __construct($titolo, $regista, $annoPubblicazione)
    {
        parent::__construct($titolo, $annoPubblicazione);

        $this->regista = $regista;
    }

    public static function contaDVD()
    {
        return self::$contatoreMateriali;
    }
}
