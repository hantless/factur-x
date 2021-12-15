<?php

namespace Hantless\FacturX\Utils;

use Exception;

class InvoiceItem
{
    /**
     * @var \DOMNode $_item
     */
    private $_item;

    public function __construct(\DOMNode $item)
    {
        $domdoc = new \DOMDocument();
        $domdoc->loadXML($item);
        $this->_item = new \DOMXPath($domdoc);
    }

    public function getLineNumber()
    {
        return $this->_query(static::LINE_NUMBER);
    }

    /**
     * Get the node value of an element.
     *
     * @param string $query_path
     * @return mixed
     * @throws Exception
     */
    private function _query(string $query_path)
    {
        $data = $this->_item->query($query_path);

        if (false === $data) {
            throw new Exception('Malformed expression or contextNode invalid.');
        }

        if ($data->length <= 0) {
            throw new Exception('No result.');
        }

        return $data->item(0)->nodeValue;
    }


    const LINE_NUMBER = '/ram:LineID';
}