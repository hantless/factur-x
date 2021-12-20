<rsm:ExchangedDocumentContext>
    <ram:BusinessProcessSpecifiedDocumentContextParameter>
        <ram:ID>A1</ram:ID>
    </ram:BusinessProcessSpecifiedDocumentContextParameter>
    <ram:GuidelineSpecifiedDocumentContextParameter>
        <ram:ID>
            <?php
                switch ($facturx->getStandard()) {
                    case \Hantless\FacturX\FacturxXML::STANDARD_BASIC :
                        echo 'urn:cen.eu:en16931:2017#compliant#urn:facturx.eu:1p0:basic';
                        break;
                    case \Hantless\FacturX\FacturxXML::STANDARD_BASIC_WL :
                        echo 'urn:factur-x.eu:1p0:basicwl';
                        break;
                    case \Hantless\FacturX\FacturxXML::STANDARD_EN16931 :
                        echo 'urn:cen.eu:en16931:2017';
                        break;
                    case \Hantless\FacturX\FacturxXML::STANDARD_EXTENDED :
                        echo 'urn:cen.eu:en16931:2017#conformant#urn:facturx.eu:1p0:extended';
                        break;
                    default :
                        echo 'urn:factur-x.eu:1p0:minimum';
                }
            ?>
        </ram:ID>
    </ram:GuidelineSpecifiedDocumentContextParameter>
</rsm:ExchangedDocumentContext>