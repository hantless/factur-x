<?php

/**
 * @var \Hantless\FacturX\FacturxXML $facturx
 */

$lines = $facturx->getLines();
$i = 1;

foreach ($lines as $line) :
?>
<ram:IncludedSupplyChainTradeLineItem>
    <ram:AssociatedDocumentLineDocument>
        <ram:LineID><?php echo $i++; ?></ram:LineID>
    </ram:AssociatedDocumentLineDocument>
    <ram:SpecifiedTradeProduct>
        <ram:SellerAssignedID><?php echo $line['product_id']; ?></ram:SellerAssignedID>
        <ram:Name><?php echo $line['product_name']; ?></ram:Name>
    </ram:SpecifiedTradeProduct>
    <ram:SpecifiedLineTradeAgreement>
        <ram:NetPriceProductTradePrice>
            <ram:ChargeAmount><?php echo $line['product_price']; ?></ram:ChargeAmount>
        </ram:NetPriceProductTradePrice>
    </ram:SpecifiedLineTradeAgreement>
    <ram:SpecifiedLineTradeDelivery>
        <ram:BilledQuantity unitCode="<?php echo $line['unit_code']; ?>"><?php echo $line['billed_quantity']; ?></ram:BilledQuantity>
    </ram:SpecifiedLineTradeDelivery>
    <ram:SpecifiedLineTradeSettlement>
        <ram:ApplicableTradeTax>
            <ram:TypeCode>VAT</ram:TypeCode>
            <ram:CategoryCode><?php echo $line['tva_category_code']; ?></ram:CategoryCode>
            <ram:RateApplicablePercent><?php echo $line['tva_rate']; ?></ram:RateApplicablePercent>
        </ram:ApplicableTradeTax>
        <ram:SpecifiedTradeSettlementLineMonetarySummation>
            <ram:LineTotalAmount><?php echo $line['line_total']; ?></ram:LineTotalAmount>
        </ram:SpecifiedTradeSettlementLineMonetarySummation>
    </ram:SpecifiedLineTradeSettlement>
</ram:IncludedSupplyChainTradeLineItem>
<?php endforeach; ?>