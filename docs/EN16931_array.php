<?php

/**
 * This is a full template of all the fields available in the
 * AN16 standard
 *
 * Value is set to his mandatory state
 *
 */

$en16931_array = array(
    'invoiceId' => '', // mandatory
    'invoiceType' => 380, // check Types in FacturxXML
    'issueDate' => 'YYYYMMDD', // mandatory

    'contentNote' => '', // optional
    'subjectCode' => '', // optional

    'lines' => array( // at least one line mandatory
        array(
            'product_id' => '', // mandatory
            'product_name' => '', // mandatory
            'product_price' => '9.5', // mandatory
            'billed_quantity' => '', // mandatory
            'unit_code' => 'C62', // mandatory
            'tva_category_code' => 'S', // mandatory
            /**
            Les codes de catégorie de
            TVA sont les suivants :
            • S = Taux de TVA standard
            • Z = Taux de TVA égal à 0 (non applicable en France)
            • E = Exempté de TVA
            • AE = Autoliquidation de TVA
            • K = Autoliquidation pour cause de livraison intracommunautaire
            • G = Exempté de TVA pour Export hors UE
            • O = Hors du périmètre d'application de la TVA
            • L = Iles Canaries
            • M = Ceuta et Mellila
             */
            'tva_rate' => 20, // 20% => 20
            'line_total' => 19.9, // excluded VAT, included all charges and other taxes

        ),
    ),

    'buyerReference' => '', // optional

    'sellerName' => '', // mandatory
    'sellerLegalId' => '', // mandatory SIREN/SIRET
    'sellerLegalIdType' => '', // optional 0002 = SIREN/SIRET
    'sellerTradingBusinessName' => '', // optional
    'sellerPostalTradeAddress' => array( // mandatory
        'countryId' => 'FR', // mandatory
        'postcode' => '',
        'lineOne' => '',
        'cityName' => '',
        'countrySubDivisionName' => '', // optional
    ),
    'sellerTaxRegistrationId' => '', // mandatory

    'buyerName' => '', // mandatory
    'buyerLegalId' => '',
    'buyerLegalIdType' => '',
    'buyerPostalTradeAddress' => array( // mandatory
        'countryId' => 'FR', // mandatory
        'postcode' => '',
        'lineOne' => '',
        'cityName' => '',
        'countrySubDivisionName' => '', // optional
    ),
    'buyerTaxRegistrationId' => '',

    'invoiceCurrencyCode' => 'EUR', // mandatory

);