<?php
/**
 * @var \Hantless\FacturX\FacturxXML $facturx
 */
?>
<rsm:SupplyChainTradeTransaction>
    <?php if ($facturx->hasLines()) : ?>
        <?php include __DIR__ . '/template_line_item.php'; ?>
    <?php endif; ?>
    <ram:ApplicableHeaderTradeAgreement>
        <?php if ($facturx->hasBuyerReference()) : ?>
            <ram:BuyerReference><?php echo $facturx->getBuyerReference(); ?></ram:BuyerReference>
        <?php endif; ?>
        <ram:SellerTradeParty>
            <ram:Name><?php echo $facturx->getSellerName(); ?></ram:Name>
            <ram:SpecifiedLegalOrganization>
                <ram:ID <?php if ($facturx->hasSellerLeaglIdType()) : ?>schemeID="<?php echo $facturx->getSellerLegalIdType(); ?>"<?php endif; ?>>
                    <?php echo $facturx->getSellerLegalId(); ?>
                </ram:ID>
            </ram:SpecifiedLegalOrganization>
            <ram:PostalTradeAddress>
                <?php include __DIR__ . '/template_seller_postal_trade_address.php'; ?>
            </ram:PostalTradeAddress>
            <ram:SpecifiedTaxRegistration>
                <ram:ID schemeID="VA"><?php echo $facturx->getSellerTaxRegistrationId(); ?></ram:ID>
            </ram:SpecifiedTaxRegistration>
        </ram:SellerTradeParty>
        <ram:BuyerTradeParty>
            <ram:Name><?php echo $facturx->getBuyerName(); ?></ram:Name>
            <ram:SpecifiedLegalOrganization>
                <ram:ID <?php if ($facturx->hasBuyerLeaglIdType()) : ?> schemeID="<?php echo $facturx->getBuyerLegalIdType(); ?>" <?php endif; ?>>
                    <?php echo $facturx->getBuyerLegalId(); ?>
                </ram:ID>
            </ram:SpecifiedLegalOrganization>
            <ram:PostalTradeAddress>
                <?php include __DIR__ . '/template_buyer_postal_trade_address.php'; ?>
            </ram:PostalTradeAddress>
        </ram:BuyerTradeParty>
    </ram:ApplicableHeaderTradeAgreement>

    <ram:ApplicableHeaderTradeDelivery/>

    <ram:ApplicableHeaderTradeSettlement>
        <ram:InvoiceCurrencyCode><?php echo $facturx->getInvoiceCurrencyCode(); ?></ram:InvoiceCurrencyCode>
        <ram:SpecifiedTradeSettlementHeaderMonetarySummation>
            <ram:TaxBasisTotalAmount>100.00</ram:TaxBasisTotalAmount>
            <ram:TaxTotalAmount currencyID="EUR">20.00</ram:TaxTotalAmount>
            <ram:GrandTotalAmount>120.00</ram:GrandTotalAmount>
            <ram:DuePayableAmount>120.00</ram:DuePayableAmount>
        </ram:SpecifiedTradeSettlementHeaderMonetarySummation>
    </ram:ApplicableHeaderTradeSettlement>

</rsm:SupplyChainTradeTransaction>