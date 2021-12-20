<?php
/**
 * @var \Hantless\FacturX\FacturxXML $facturx
 */
$addressInfo = $facturx->getSellerPostalTradeAddress();

include __DIR__ . '/template_postal_address.php';
