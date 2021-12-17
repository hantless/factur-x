<rsm:ExchangedDocument>
    <ram:ID><?php echo $invoiceId; ?></ram:ID>
    <ram:TypeCode><?php echo $invoiceType; ?></ram:TypeCode>
    <ram:IssueDateTime>
        <udt:DateTimeString format="102"><?php echo $issueDate; ?></udt:DateTimeString>
    </ram:IssueDateTime>
</rsm:ExchangedDocument>