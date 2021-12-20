<?php

namespace Hantless\FacturX;

use Hantless\FacturX\Utils\FacturxException;

/**
 * Class FacturxXML Template - Class to render the Facturx-XML
 */
class FacturxXML
{
    public const STANDARD_MINIMUM = 'minimum';
    public const STANDARD_BASIC = 'basic';
    public const STANDARD_BASIC_WL = 'basic_wl';
    public const STANDARD_EN16931 = 'en16931';
    public const STANDARD_EXTENDED = 'extended';

    private const SUPPORTED_STANDARD = array(
        self::STANDARD_BASIC,
        self::STANDARD_BASIC_WL,
        self::STANDARD_EN16931
    );

    private const MANDATORY_FIELDS_BASIC = [];
    private const MANDATORY_FIELDS_BASIC_WL = [];
    private const MANDATORY_FIELDS_EN16 = [];

    /**
     * Facture commerciale
     */
    public const TYPE_INVOICE = 380;
    public const TYPE_CREDIT_NOTE = 381;

    private $_standard;

    private $_invoiceId;
    private $_invoiceType;
    private $_issueDate;

    private $_contentNote;
    private $_subjectCode;

    private $_lines = array();

    private $_buyerReference;

    private $_sellerName;
    private $_sellerLegalId;
    private $_sellerLegalIdType;
    private $_sellerTradingBusinessName;
    private $_sellerPostalTradeAddress;
    private $_sellerTaxRegistrationId;

    private $_buyerName;
    private $_buyerLegalId;
    private $_buyerLegalIdType;
    private $_buyerPostalTradeAddress;
    private $_buyerTaxRegistrationId;

    private $_invoiceCurrencyCode;

    public function __construct(array $data, $standard = self::STANDARD_EN16931)
    {
        $data['standard'] = $standard;
        $this->_parseData($data);
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
    }

    public function setInvoiceType($value) {
        $this->_invoiceType = $value;
        return $this;
    }
    public function getInvoiceType() {
        return $this->_invoiceType;
    }

    public function setIssueDate($value) {
        $this->_issueDate = $value;
        return $this;
    }
    public function getIssueDate() {
        return $this->_issueDate;
    }

    public function hasContentNote() {
        return !empty($this->_contentNote);
    }
    public function setContentNote($value) {
        $this->_contentNote = $value;
        return $this;
    }
    public function getContentNote() {
        return $this->_contentNote;
    }

    public function hasSubjectCode() {
        return !empty($this->_subjectCode);
    }
    public function setSubjectCode($value) {
        $this->_subjectCode = $value;
        return $this;
    }
    public function getSubjectCode() {
        return $this->_subjectCode;
    }

    public function hasLines() {
        return count($this->_lines);
    }
    public function setLines($linesArray) {
        $this->_lines = $linesArray;
        return $this;
    }
    public function getLines() {
        return $this->_lines;
    }

    public function hasBuyerReference() {
        return !empty($this->_buyerReference);
    }
    public function setBuyerReference($value) {
        $this->_buyerReference = $value;
        return $this;
    }
    public function getBuyerReference() {
        return $this->_buyerReference;
    }

    public function setSellerName($value) {
        $this->_sellerName = $value;
        return $this;
    }
    public function getSellerName() {
        return $this->_sellerName;
    }

    public function setSellerLegalId($value) {
        $this->_sellerLegalId = $value;
        return $this;
    }
    public function getSellerLegalId() {
        return $this->_sellerLegalId;
    }

    public function hasSellerLeaglIdType() {
        return !empty($this->_sellerLegalIdType);
    }
    public function setSellerLegalIdType($value) {
        $this->_sellerLegalIdType = $value;
        return $this;
    }
    public function getSellerLegalIdType() {
        return $this->_sellerLegalIdType;
    }

    public function hasSellerTradingBusinessName() {
        return !empty($this->_sellerTradingBusinessName);
    }
    public function setSellerTradingBusinessName($value) {
        $this->_sellerTradingBusinessName = $value;
        return $this;
    }
    public function getSellerTradingBusinessName() {
        return $this->_sellerTradingBusinessName;
    }

    public function setSellerPostalTradeAddress($value) {
        $this->_sellerPostalTradeAddress = $value;
        return $this;
    }
    public function getSellerPostalTradeAddress() {
        return $this->_sellerPostalTradeAddress;
    }

    public function setSellerTaxRegistrationId($value) {
        $this->_sellerTaxRegistrationId = $value;
        return $this;
    }
    public function getSellerTaxRegistrationId() {
        return $this->_sellerTaxRegistrationId;
    }

    public function setBuyerName($value) {
        $this->_buyerName = $value;
        return $this;
    }
    public function getBuyerName() {
        return $this->_buyerName;
    }

    public function setBuyerLegalId($value) {
        $this->_buyerLegalId = $value;
        return $this;
    }
    public function getBuyerLegalId() {
        return $this->_buyerLegalId;
    }

    public function hasBuyerLeaglIdType() {
        return !empty($this->_buyerLegalIdType);
    }
    public function setBuyerLegalIdType($value) {
        $this->_buyerLegalIdType = $value;
        return $this;
    }
    public function getBuyerLegalIdType() {
        return $this->_buyerLegalIdType;
    }

    public function setBuyerPostalTradeAddress($value) {
        $this->_buyerPostalTradeAddress = $value;
        return $this;
    }
    public function getBuyerPostalTradeAddress() {
        return $this->_buyerPostalTradeAddress;
    }

    public function setInvoiceCurrencyCode($value) {
        $this->_invoiceCurrencyCode = $value;
        return $this;
    }
    public function getInvoiceCurrencyCode() {
        return $this->_invoiceCurrencyCode;
    }

    public function valid() {
        // check mandatory fields for the document type
    }

    public function getXML() : string {

        /**
         * @var FacturxXML $facturx
         */
        $facturx = $this;

        // Build an XML string depending on the document type
        ob_start();

        include __DIR__ . '/Partials/template_envelop.php';

        return ob_get_clean();

    }

    private function _parseData(array $data) {
        foreach ($data as $key => $value) {
            if (method_exists($this, 'set' . ucfirst($key))) {
                $this->{'set' . ucfirst($key)}($value);
            }

        }
    }

}