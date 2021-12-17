<?php

namespace Hantless\FacturX\Utils;

use Exception;

class InvoiceItem
{
    /**
     * @var \DOMNode $_item
     */
    private $_item;

    private $_xpath = null;

    public function __construct(\DOMNode $item)
    {
        $this->_item = $item;
    }

    public function getLineNumber()
    {
        return $this->_query(static::LINE_NUMBER)->nodeValue;
    }

    /**
     * Get the node value of an element.
     *
     * @param string $query_path
     * @return \DOMNode
     * @throws Exception
     */
    private function _query(string $query_path)
    {
        if (null === $this->_xpath) {
            $docFacturx = new \DOMDocument();
            $docFacturx->append($this->_item);
            $this->_xpath = new \DOMXPath($docFacturx);
        }

        $data = $this->_xpath->query($query_path);

        if (false === $data) {
            throw new Exception('Malformed expression or contextNode invalid.');
        }

        if ($data->length <= 0) {
            throw new Exception('No result.');
        }

        return $data->item(0);
    }


    const LINE_NUMBER = '/ram:LineID';
}