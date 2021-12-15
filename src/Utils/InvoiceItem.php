<?php

namespace Hantless\FacturX\Utils;

class InvoiceItem
{
    /**
     * @var \DOMNode $_item
     */
    private $_item;

    public function __construct(\DOMNode $item)
    {
        $this->_item = $item;
    }

    public function getLineNumber()
    {
        return $this->_item;
    }
}