<?php

namespace Devlabs91\TravelgatePushApi\Tests\PHPUnit;

use Devlabs91\TravelgatePushApi\ServiceType\Hotel;

class HotelSoapClient extends Hotel
{
    
    public function getSoapClientClassName($soapClientClassName = null)
    {
        return parent::getSoapClientClassName(empty($soapClientClassName) ? '\Devlabs91\TravelgatePushApi\Tests\PHPUnit\Client' : $soapClientClassName);
    }

    /**
     * @return Client
     */
    public function getSoapClient()
    {
        return parent::getSoapClient();
    }

}
