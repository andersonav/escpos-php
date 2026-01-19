# ESC/POS Print Driver for PHP

[![Build Status](https://travis-ci.org/alves/escpos-php.svg?branch=master)](https://travis-ci.org/alves/escpos-php)
[![Latest Stable Version](https://poser.pugx.org/alves/escpos-php/v/stable)](https://packagist.org/packages/alves/escpos-php)
[![Total Downloads](https://poser.pugx.org/alves/escpos-php/downloads)](https://packagist.org/packages/alves/escpos-php)
[![License](https://poser.pugx.org/alves/escpos-php/license)](https://packagist.org/packages/alves/escpos-php)
[![Coverage Status](https://coveralls.io/repos/github/alves/escpos-php/badge.svg?branch=development)](https://coveralls.io/github/alves/escpos-php?branch=development)

A PHP library implementing a **subset of Epson’s ESC/POS protocol** for thermal receipt printers.

It allows PHP applications to generate and print receipts with **text formatting, images, barcodes, QR codes, paper cutting and cash drawer control**, without relying on vendor-specific SDKs.

This library is suitable for **web-based POS systems**, desktop services and server-side printing workflows.

---

## ✨ Features

- ESC/POS command abstraction for PHP
- Multiple connection types (USB, serial, network, CUPS, SMB, LPT)
- Text formatting, alignment and styles
- Image printing (with optional GD / Imagick acceleration)
- Barcode, QR Code and PDF417 support
- Cash drawer control
- Capability profiles for different printer models

---

## 🖨️ Compatibility

### Interfaces & Operating Systems

This driver is known to work with the following OS / interface combinations:

| Interface     | Linux | macOS | Windows |
|--------------|-------|-------|---------|
| Ethernet     | Yes   | Yes   | Yes     |
| USB          | Yes   | Not tested | Yes |
| USB-Serial   | Yes   | Yes   | Yes     |
| Serial       | Yes   | Yes   | Yes     |
| Parallel     | Yes   | Not tested | Yes |
| SMB Shared   | Yes   | No    | Yes     |
| CUPS Hosted  | Yes   | Yes   | No      |

See the [`example/interface/`](https://github.com/alves/escpos-php/tree/master/example/interface) directory for working examples.

---

### Supported Printers

Many ESC/POS-compatible printers are known to work with this library, including models from:

- Epson
- Bematech
- Elgin
- Bixolon
- Star
- Daruma
- Rongta
- Xprinter
- Zjiang  
*(and many others — see full list above)*

If your printer works and is not listed, please [open an issue](https://github.com/alves/escpos-php/issues/new) so it can be added.

---

## 🚀 Installation

### Requirements

- PHP **7.3 or newer**
- `json` extension
- `intl` extension
- `zlib` extension

Optional (recommended for better image performance):
- `gd`
- `imagick`

---

### Composer

```bash
composer require alves/escpos-php

```

### Basic Usage

```bash
<?php
require __DIR__ . '/vendor/autoload.php';

use Alves\Escpos\PrintConnectors\FilePrintConnector;
use Alves\Escpos\Printer;

$connector = new FilePrintConnector("php://stdout");
$printer = new Printer($connector);

$printer->text("Hello World!\n");
$printer->cut();
$printer->close();

```

