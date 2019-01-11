<?php

namespace Devlabs91\TravelgatePushApi\Tests\PHPUnit;

class Client extends \SoapClient
{
    
    public $mockResponse;
    
    public function __doRequest($request, $location, $action, $version, $one_way = NULL)
    {
        if( $this->mockResponse ) { return $this->mockResponse; }
/*        if( stristr($request, 'HotelResRetrieve') ) {
            return file_get_contents(__DIR__ . '/../../resources/HotelResRetrieveRS.xml');
        }
        else if( stristr($request, 'HotelRatePlanInventoryRetrieve') ) {
            return file_get_contents(__DIR__ . '/../../resources/HotelRatePlanInventoryRetrieveRS.xml');
        }
*/        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }
    
    public function setMockResponse($mockResponse) {
        $this->mockResponse = $mockResponse;
    }
    
}
