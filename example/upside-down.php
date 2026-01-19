<?php
/* Demonstration of upside-down printing */
require __DIR__ . '/../vendor/autoload.php';
use Alves\Escpos\Printer;
use Alves\Escpos\PrintConnectors\FilePrintConnector;

$connector = new FilePrintConnector("php://stdout");
$printer = new Printer($connector);

// Most simple example
$printer -> text("Hello\n");
$printer -> setUpsideDown(true);
$printer -> text("World\n");
$printer -> cut();
$printer -> close();

