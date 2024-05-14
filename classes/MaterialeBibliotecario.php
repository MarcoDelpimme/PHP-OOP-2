<?php

interface Prestito
{
    public function presta();
    public function restituisci();
}

abstract class MaterialeBibliotecario implements Prestito
{
    private $titolo;
    private $annoPubblicazione;
    protected static $contatoreMateriali = 0;

    function __construct($titolo, $annoPubblicazione)
    {
        $this->titolo = $titolo;
        $this->annoPubblicazione = $annoPubblicazione;
    }


    public function presta()
    {
        static::$contatoreMateriali++;
    }

    public function restituisci()
    {
        static::$contatoreMateriali--;
    }
}
