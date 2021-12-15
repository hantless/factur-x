<?php

namespace Hantless\FacturX\Utils;

class FacturxPath {
    /**
     * XPath to every piece of data
     *
     * available in Factur-X 1.0.05 2020 03 24 FR VF.pdf
     * starting page 41
     */
    const INVOICE_ID = '/rsm:CrossIndustryInvoice/rsm:ExchangedDocument/ram:ID';
    const DOCUMENT_TYPE = '/rsm:CrossIndustryInvoice/rsm:ExchangedDocument/ram:TypeCode';


    const DOCUMENT_LINES = '/rsm:CrossIndustryInvoice/rsm:SupplyChainTradeTransaction/ram:IncludedSupplyChainTradeLineItem';
}