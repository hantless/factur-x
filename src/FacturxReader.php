<?php

/**
 * This is a class reader for the Factur-X XML that can be extracted
 * with the Facturx class.
 *
 */

namespace Hantless\FacturX;

use Exception;
use Hantless\FacturX\Utils\FacturxPath as Path;
use Hantless\FacturX\Utils\InvoiceItemsList;

class FacturxReader
{
    private $_xml;
    private $_xpath = null;

    /**
     * @param $path_to_pdf
     * @throws \Exception
     */
    public function __construct($path_to_pdf)
    {
        $facturx = new Facturx();
        $this->_xml = $facturx->getFacturxXmlFromPdf($path_to_pdf);
    }

    public function getId()
    {
        return $this->_query(Path::INVOICE_ID)->nodeValue;
    }

    public function getDocumentType()
    {
        return $this->_query(Path::DOCUMENT_TYPE)->nodeValue;
    }

    public function getDocumentLines()
    {
        $lines = $this->_query(Path::DOCUMENT_LINES);
        return new InvoiceItemsList($lines);
    }

    /**
     * Return the DOMNode for single result or a DOMNodeList if multiple results.
     *
     * @param string $query_path
     * @return \DOMNodeList | \DOMNode
     *
     * @throws Exception
     */
    private function _query(string $query_path, $multiple = false)
    {
        if (null === $this->_xpath) {
            $docFacturx = new \DOMDocument();
            $docFacturx->loadXML($this->_xml);
            $this->_xpath = new \DOMXPath($docFacturx);
        }

        $data = $this->_xpath->query($query_path);

        if (false === $data) {
            throw new Exception('Malformed expression or contextNode invalid.');
        }

        if ($data->length <= 0) {
            throw new Exception('No result.');
        }

        if ($multiple) {
            return $data;
        }

        return $data->item(0);
    }

}