<?php
/* Example of Greek text on the P-822D */
require __DIR__ . '/../../vendor/autoload.php';
use Alves\Escpos\CapabilityProfile;
use Alves\Escpos\Printer;
use Alves\Escpos\PrintConnectors\FilePrintConnector;

// Setup the printer
$connector = new FilePrintConnector("php://stdout");
$profile = CapabilityProfile::load("P822D");
$printer = new Printer($connector, $profile);

// Print a Greek pangram
$text = "Ξεσκεπάζω την ψυχοφθόρα βδελυγμία";
$printer -> text($text . "\n");
$printer -> cut();

// Close the connection
$printer -> close();
