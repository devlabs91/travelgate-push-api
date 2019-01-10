<?php

namespace Devlabs91\TravelgatePushApi\Tests\PHPUnit;

class Client extends \SoapClient
{
    
    public function __doRequest($request, $location, $action, $version, $one_way = NULL)
    {
        if( stristr($request, 'HotelResRetrieve') ) {
            return file_get_contents(__DIR__ . '/../../resources/HotelResRetrieveRS.xml');
        }
        else if( stristr($request, 'HotelRatePlanInventoryRetrieve') ) {
            return file_get_contents(__DIR__ . '/../../resources/HotelRatePlanInventoryRetrieveRS.xml');
        }
        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }
    
}
