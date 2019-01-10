<?php 

namespace Devlabs91\TravelgatePushApi\Factories;

use Devlabs91\TravelgatePushApi\Adapters\HotelResRetrieveAdapter;

class HotelResRetrieveAdapterFactory {
    
    /**
     * 
     * @param string $username
     * @param string $password
     * @param string $clientCode
     * @param string $requestorId
     * @param string $hotelCode
     * @param string $primaryLangID
     * @return \Devlabs91\TravelgatePushApi\Adapters\HotelResRetrieveAdapter
     */
    public static function factory( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID = 'EN' ) {
        return new HotelResRetrieveAdapter( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID );
    }
    
}