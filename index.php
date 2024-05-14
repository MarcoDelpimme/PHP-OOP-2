<?php
include_once __DIR__ . '/classes/MaterialeBibliotecario.php';
include_once __DIR__ . '/classes/Libro.php';
include_once __DIR__ . '/classes/DVD.php';

$libro1 = new Libro("Il signore degli anelli", "Tolkien", 2422);
$libro2 = new Libro("Avatar", "Cameron", 1800);

$dvd1 = new DVD("Principessa di Persia", "Marco Delpi", 2010);
$dvd2 = new DVD("Shark", "Gianmarco Piearoni", 1998);
$dvd3 = new DVD("Shark", "Gianmarco Piearoni", 1998);

$libro1->presta();
$libro2->presta();
$dvd1->presta();
$dvd2->presta();
$dvd3->presta();
$dvd3->restituisci();

echo "Numero totale di libri: " . Libro::contaLibri() . "<br>";
echo "Numero totale di DVD: " . DVD::contaDVD();
