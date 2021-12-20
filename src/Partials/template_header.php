<?php
/**
* @var \Hantless\FacturX\FacturxXML $facturx
 */
?>
<rsm:ExchangedDocument>
    <ram:ID><?php echo $facturx->getInvoiceId(); ?></ram:ID>
    <ram:TypeCode><?php echo $facturx->getInvoiceType(); ?></ram:TypeCode>
    <ram:IssueDateTime>
        <udt:DateTimeString format="102"><?php echo $facturx->getIssueDate(); ?></udt:DateTimeString>
    </ram:IssueDateTime>
    <?php if ($facturx->hasContentNote() || $facturx->hasSubjectCode()) : ?>
    <ram:IncludedNote>
        <?php if ($facturx->hasContentNote()) : ?>
            <ram:Content><?php echo $facturx->getContentNote(); ?></ram:Content>
        <?php endif; ?>
        <?php if ($facturx->hasSubjectCode()) : ?>
            <ram:SubjectCode>AAR</ram:SubjectCode>
        <?php endif; ?>
    </ram:IncludedNote>
    <?php endif; ?>
</rsm:ExchangedDocument>