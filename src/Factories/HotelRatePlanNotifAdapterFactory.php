<?php 

namespace Devlabs91\TravelgatePushApi\Factories;

use Devlabs91\TravelgatePushApi\Adapters\HotelRatePlanNotifAdapter;

class HotelRatePlanNotifAdapterFactory {
    
    public static function factory( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID = 'EN' ) {
        return new HotelRatePlanNotifAdapter( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID );
    }
    
}