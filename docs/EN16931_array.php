<?php

/**
 * This is a full template of all the fields available in the
 * AN16 standard
 *
 * Value is set to his mandatory state
 *
 */

$en16931_array = array(
    'invoiceId' => 'mandatory string',
    'invoiceType' => 380, // check Types in FacturxXML
    'issueDate' => 'mandatory date string with YYYYMMDD format',

    'lines' => array(
        array(
        ),
    ),

);