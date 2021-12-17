<ram:IncludedSupplyChainTradeLineItem> <!-- BG-25, 1..n, LIGNE DE FACTURE -->
    <ram:AssociatedDocumentLineDocument> <!-- BT-126, 1..1, Identifiant de ligne de facture, Identifiant -->
        <ram:LineID> 1 </ram:LineID>
    </ram:AssociatedDocumentLineDocument>
    <ram:SpecifiedTradeProduct> <!-- BG-31, 1..1, INFORMATIONS SUR L'ARTICLE -->
        <ram:GlobalID schemeID ="ID SCHEME"> <!-- BT-157, 0..1, Identifiant standard de l'article, Identifiant --> ID ARTICLE </ram:GlobalID>
        <ram:Name> <!-- BT-153, 1..1, Nom de l'article, Texte --> DESIGNATION ARTICLE </ram:Name>
    </ram:SpecifiedTradeProduct>
    <ram:SpecifiedLineTradeAgreement> <!-- BG-29, 1..1, DÉTAILS DU PRIX -->
        <ram:NetPriceProductTradePrice> <!-- BT-146, 1..1, Prix net de l'article, Montant de prix unitaire -->
            <ram:ChargeAmount> <!-- BT-146, 1..1, Prix net de l'article, Montant de prix unitaire --> 20.00 </ram:ChargeAmount>
            < ram:BasisQuantity unitCode=”C62”> > <!-- BT-149, 0..1, Quantité de base du prix de l'article--> 1< /ram:BasisQuantity>
        </ram:NetPriceProductTradePrice>
    </ram:SpecifiedLineTradeAgreement>
    <ram:SpecifiedLineTradeDelivery> <!-- BT-129, 1..1, Quantité facturée, Quantité -->
        <ram:BilledQuantity unitCode ="C62" > <!-- BT-129, 1..1, Quantité facturée, Quantité --> 5.00 </ram:BilledQuantity>
    </ram:SpecifiedLineTradeDelivery>
    <ram:SpecifiedLineTradeSettlement>
        <ram:ApplicableTradeTax> <!-- BG-30, 1..1, INFORMATIONS DE TVA D'UNE LIGNE -->
            <ram:TypeCode> <!-- BT-151-0, 1..1, Type en code --> VAT </ram:TypeCode>
            <ram:CategoryCode> <!-- BT-151, 1..1, Code de type de TVA de l'article facturé, Code --> S </ram:CategoryCode>
            <ram:RateApplicablePercent> <!-- BT-152, 0..1, Taux de TVA de l'article facturé, Pourcentage --> 20.00 </ram:RateApplicablePercent>
        </ram:ApplicableTradeTax>
        <ram:SpecifiedTradeAllowanceCharge>
            <!-- BG-27, 0..n, REMISES DE LIGNE DE FACTURE --> <>
            <ram:ChargeIndicator> <!-- BG-27-0, 1..1, Indicateur de remise ou charge -->
                <udt:Indicator> <!-- BG-27-1, 1..1, Valeur de l'indicateur de charge --> FALSE </udt:Indicator>
            </ram:ChargeIndicator>
            <ram:ActualAmount> <!-- BT-136, 1..1, Montant de la remise applicable à la ligne de facture, Montant --> 7.00 </ram:ActualAmount>
            <ram:ReasonCode> <!-- BT-140, 1..1, Code de motif de la remise applicable à la ligne de facture, Code --> 100 </ram:ReasonCode>
            <ram:Reason> <!-- BT-139, 1..1, Motif de la remise applicable à la ligne de facture, Texte --> Remise spéciale </ram:Reason>
            <!-- BG-28, 0..n, CHARGE ET FRAIS DE LIGNE DE FACTURE --> <>
            <ram:ChargeIndicator> <!-- BG-28-0, 1..1, Indicateur de charge -->
                <udt:Indicator> <!-- BG-28-1, 1..1, Valeur de l'indicateur de charge --> TRUE </udt:Indicator>
            </ram:ChargeIndicator>
            <ram:ActualAmount> <!-- BT-141, 1..1, Montant des charges et frais applicables à la ligne de facture, Montant --> 7.00 </ram:ActualAmount>
            <ram:ReasonCode> <!-- BT-145, 1..1, Code de motif des charges et frais applicables à la ligne de facture, Codre--> FC </ram:ReasonCode>
            <ram:Reason> <!-- BT-144, 1..1, Motif des charges et frais applicables à la ligne de facture, Texte --> Frais de transport </ram:Reason>
        </ram:SpecifiedTradeAllowanceCharge>
        <ram:SpecifiedTradeSettlementLineMonetarySummation> <!-- BT-131, 1..1, Montant net de ligne de facture, Montant -->
            <ram:LineTotalAmount> <!-- BT-131, 1..1, Montant net de ligne de facture, Montant --> 100.00 </ram:LineTotalAmount>
        </ram:SpecifiedTradeSettlementLineMonetarySummation>
    </ram:SpecifiedLineTradeSettlement>
</ram:IncludedSupplyChainTradeLineItem>