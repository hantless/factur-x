<?php

namespace Hantless\FacturX;

use Hantless\FacturX\Utils\FacturxException;

/**
 * Class FacturxXML Template - Class to render the Facturx-XML
 */
class FacturxXML
{
    public const STANDARD_BASIC = 'basic';
    public const STANDARD_BASIC_WL = 'basic_wl';
    public const STANDARD_EN16 = 'en16';

    private const SUPPORTED_STANDARD = array(
        self::STANDARD_BASIC,
        self::STANDARD_BASIC_WL,
        self::STANDARD_EN16
    );

    private const MANDATORY_FIELDS_BASIC = [];
    private const MANDATORY_FIELDS_BASIC_WL = [];
    private const MANDATORY_FIELDS_EN16 = [];

    private $_standard;

    private $_invoiceId;
    private $_issueDate;

    private $_lines = array();

    public function __construct(array $data, $standard = self::STANDARD_EN16)
    {
        $this->_parseData($data);
        $this->setStandard($standard);
    }

    /**
     * @throws FacturxException
     */
    public function setStandard($standard): FacturxXML
    {
        if (!in_array($standard, self::SUPPORTED_STANDARD)) {
            throw new FacturxException('Standard not supported.');
        }
        $this->_standard = $standard;
        return $this;
    }
    public function getStandard() {
        return $this->_standard;
    }

    public function setInvoiceId($value) {
        $this->_invoiceId = $value;
        return $this;
    }
    public function getInvoiceId() {
        return $this->_invoiceId;
    }.

    public function setLines($linesArray) {
        $this->_lines = $linesArray;
        return $this;
    }
    public function getLines() {
        return $this->_lines;
    }

    public function valid() {
        // check mandatory fields for the document type
    }

    public function getXML() {

        // Build an XML string depending on the document type

    }

    private function _parseData(array $data) {
        foreach ($data as $key => $value) {

            if (function_exists('set' . ucfirst($key))) {
                $this->{'set' . ucfirst($key)}($value);
            }

        }
    }

}