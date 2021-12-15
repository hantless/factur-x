PHP Factur-X library
------------------
Factur-X is the e-invoicing standard for France and Germany. The Factur-X specifications are available on the FNFE-MPE website.
The Factur-X standard is also called ZUGFeRD 2.0 in Germany.

This library enable you to manage your Factur-X PDF invoices files.

The library is made of:

* FacturxReader to extract the XML from the PDF file and to retreive the data inside of it.
* FacturxWriter to compile the FacturX XML and merge it into a PDF invoice.


Table of contents:
------------------

- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)
- [Contributing](CONTRIBUTING.md)

Requirements
------------
**to define, this is the requirement of the base library**

- Apache2
- PHP 7.2+
- Composer
- [FPDI](https://github.com/Setasign/FPDI) (MIT License)
- [Smalot](https://github.com/smalot/pdfparser) (LGPL License)


Installation
------------

#### Add to your compose.json file

```json
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/hantless/factur-x.git"
  }
],
"require": {
  "hantless/factur-x": "dev-master"
}
```

Then run the command:

```bash
composer install
```

Usage (to be enhanced)
-----

```php
<?php
// Include or autoload (with Composer) all library classes

// Reader usage
$path_to_pdf = "path/to/a/facturX.pdf";

// will throw errors if attached XML is not compliant. See code for now.
$reader = new FacturxReader($path_to_pdf);

// Retreive informations for the XML
$invoiceId = $reader->getId();

$documentType = $reader->getDocumentType();
```

License
-------
This project is licensed under MIT License
