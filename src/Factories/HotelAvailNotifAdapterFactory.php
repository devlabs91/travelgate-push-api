<?php 

namespace Devlabs91\TravelgatePushApi\Factories;

use Devlabs91\TravelgatePushApi\Adapters\HotelAvailNotifAdapter;

class HotelAvailNotifAdapterFactory {
    
    public static function factory( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID = 'EN' ) {
        return new HotelAvailNotifAdapter( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID );
    }
    
}