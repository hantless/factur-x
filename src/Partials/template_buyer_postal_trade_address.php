<?php
/**
 * @var \Hantless\FacturX\FacturxXML $facturx
 */
$addressInfo = $facturx->getBuyerPostalTradeAddress();

include __DIR__ . '/template_postal_address.php';
