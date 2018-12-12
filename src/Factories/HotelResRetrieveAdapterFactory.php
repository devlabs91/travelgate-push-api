<?php 

namespace Devlabs91\TravelgatePushApi\Factories;

use Devlabs91\TravelgatePushApi\Adapters\HotelResRetrieveAdapter;

class HotelResRetrieveAdapterFactory {
    
    public static function factory( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID = 'EN' ) {
        return new HotelResRetrieveAdapter( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID );
    }
    
}