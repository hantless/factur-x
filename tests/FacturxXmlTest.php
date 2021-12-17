<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FacturxXmlTest extends TestCase
{
    public function testInvoiceidIsSetOnInstanciation() {
        $data = array('invoiceId' => 'fact-20211213-001');

        $facturxXml = new \Hantless\FacturX\FacturxXML($data);

        $this->assertEquals('fact-20211213-001', $facturxXml->getInvoice_id());
    }

    public function testLinesItemsAreSetOnInstanciation() {
        $data = array(
            'invoiceId' => 'invoice-0001',
            'lines' => array(
                'name' => 'whatever product',
                'price' => 42.3,
                'quantity' => 5
            ),
        );

        $facturxXml = new \Hantless\FacturX\FacturxXML($data);

        $this->assertCount(1, $facturxXml->getLines());
    }
}