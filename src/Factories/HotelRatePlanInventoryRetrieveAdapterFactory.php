<?php 

namespace Devlabs91\TravelgatePushApi\Factories;

use Devlabs91\TravelgatePushApi\Adapters\HotelRatePlanInventoryRetrieveAdapter;

class HotelRatePlanInventoryRetrieveAdapterFactory {
    
    public static function factory( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID = 'EN' ) {
        return new HotelRatePlanInventoryRetrieveAdapter( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID );
    }
    
}