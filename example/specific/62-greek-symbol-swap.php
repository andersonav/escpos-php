<?php
require __DIR__ . '/../../vendor/autoload.php';
use Alves\Escpos\Printer;
use Alves\Escpos\PrintConnectors\FilePrintConnector;
use Alves\Escpos\CapabilityProfile;

$connector = new FilePrintConnector("php://stdout");
$profile = CapabilityProfile::load("default");
$printer = new Printer($connector, $profile);

$printer -> text("Μιχάλης Νίκος\n");
$printer -> cut();
$printer -> close();

?>
