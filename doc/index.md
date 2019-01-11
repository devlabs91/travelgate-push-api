Introduction
============

Soap Client API generated for use with [Travelgate Hotel Push API](http://tech.xmltravelgate.com/docs/hotel-push/index).

Functiallity focused on :

    HotelRatePlanInventoryRetrieve
    HotelResRetrieve
    HotelAvailNotif
    HotelRatePlanNotif

Generation
==========

Initially generated using

    wsdltophp generate:package \
        --urlorpath="https://pushprovider.xmltravelgate.com/Service/Hotel/Provider/ProviderGEN.svc?wsdl" \
        --destination="./TravelGate" \
        --composer-name="devlabs91/travelgate-push-api" \
        --force \
        --namespace="Devlabs91\TravelgatePushApi"

Issues
------

Issues with generation are stored in the `doc/issues.md` file in this bundle:

[Read the documentation](https://github.com/devlabs91/travelgate-push-api/blob/master/doc/issues.md)

Testing
=======

Tests are using mockup responses located in tests/resources/

For additional testing using the real soap client, you will need to update your credentials in ./phpunit.xml

    <php>
        <const name="PHPUNIT_TG_USERNAME" value="" />
        <const name="PHPUNIT_TG_PASSWORD" value="" />
        <const name="PHPUNIT_TG_CLIENT_CODE" value="" />
        <const name="PHPUNIT_TG_REQUESTOR_ID" value="" />
        <const name="PHPUNIT_TG_HOTEL_CODE" value="" />
    </php>

then run
    
    ./vendor/bin/phpunit 
    
or run for individual files

    ./vendor/bin/phpunit tests/src/PHPUnit/HotelRatePlanInventoryRetrieveTest.php
