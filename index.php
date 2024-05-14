<?php

include_once __DIR__ . '/classes/MaterialeBibliotecario.php';
include_once __DIR__ . '/classes/Libro.php';
include_once __DIR__ . '/classes/DVD.php';

$newBook = new Libro("LOTR", "1973", "Tolkien");
$newBook2 = new Libro("LOTR", "1973", "Tolkien");
$newDvd = new DVD("LOTR", "1973", "Tolkien");


echo MaterialeBibliotecario::$contatoreMateriali . '<br>';

$newBook->presta();
$newDvd->presta();

echo MaterialeBibliotecario::$contatoreMateriali;
