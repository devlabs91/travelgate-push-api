<?php 

namespace Devlabs91\TravelgatePushApi\Factories;

use Devlabs91\TravelgatePushApi\Adapters\HotelRatePlanInventoryNotifAdapter;

class HotelRatePlanInventoryNotifAdapterFactory {
    
    public static function factory( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID = 'EN' ) {
        return new HotelRatePlanInventoryNotifAdapter( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID );
    }
    
}