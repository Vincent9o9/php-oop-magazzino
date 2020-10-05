<?php
require_once 'classes/Notebook.php';
require_once 'classes/Notebook2.php';

$portatile = new Notebook(15, 16, 512);


$portatile->setProcessore("i9");


$portatile->setGpu("GTX 2080");

var_dump($portatile);
?>
