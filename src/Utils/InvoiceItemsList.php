<?php

namespace Hantless\FacturX\Utils;


class InvoiceItemsList implements \Iterator
{
    private $_position = 0;

    /**
     * @var \DOMNodeList $_items
     */
    private $_items;

    public function __construct(\DOMNodeList $items)
    {
        $this->_items = $items;
    }

    public function current(): InvoiceItem
    {
        return new InvoiceItem($this->_items->item($this->_position));
    }

    public function next()
    {
        ++$this->_position;
    }

    public function key()
    {
        return $this->_position;
    }

    public function valid(): bool
    {
        return null !== $this->_items->item($this->_position);
    }

    public function rewind()
    {
        $this->_position = 0;
    }
}