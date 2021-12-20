<ram:CountryID><?php echo $addressInfo['countryId']; ?></ram:CountryID>
<?php if (isset($addressInfo['postcode']) && !empty($addressInfo['postcode'])) : ?>
    <ram:PostcodeCode><?php echo $addressInfo['postcode']; ?></ram:PostcodeCode>
<?php endif; ?>
<?php if (isset($addressInfo['lineOne']) && !empty($addressInfo['lineOne'])) : ?>
    <ram:LineOne><?php echo $addressInfo['lineOne']; ?></ram:LineOne>
<?php endif; ?>
<?php if (isset($addressInfo['cityName']) && !empty($addressInfo['cityName'])) : ?>
    <ram:CityName><?php echo $addressInfo['cityName']; ?></ram:CityName>
<?php endif; ?>
<?php if (isset($addressInfo['countrySubDivisionName']) && !empty($addressInfo['countrySubDivisionName'])) : ?>
    <ram:CountrySubDivisionName><?php echo $addressInfo['countrySubDivisionName']; ?></ram:CountrySubDivisionName>
<?php endif; ?>