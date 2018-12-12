<?php 

namespace Devlabs91\TravelgatePushApi\Adapters;

use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType;
use Devlabs91\TravelgatePushApi\StructType\RatePlan;
use Devlabs91\TravelgatePushApi\StructType\HotelRef;
use Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryNotif;
use Devlabs91\TravelgatePushApi\StructType\AvailStatusMessages;
use Devlabs91\TravelgatePushApi\StructType\AvailStatusMessageType;

class HotelAvailNotifAdapter extends BaseAdapter {

    /** @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRQ */
    public $request;
    
    public $hotelCode;
    
    public function __construct( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID ) {
        parent::__construct( $username, $password, $clientCode, $requestorId, $primaryLangID );
        
        $this->hotelCode = $hotelCode;
        $this->request = new \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRQ( new ArrayOfSourceType(), new AvailStatusMessages(), $primaryLangID );
        
        $this->addPOS( $this->request );
        $this->addSoapHeaderSecurity( $this->hotel );
    }

    /**
     * 
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRS|NULL|NULL
     */
    public function retrieve() {
        $this->request->getAvailStatusMessages()->addToAvailStatusMessage( new AvailStatusMessageType( ) ); // new RatePlan( null, null, new HotelRef( $this->hotelCode ) ) );
        $parameters = new HotelRatePlanInventoryNotif( $this->request );
        
        if ( $this->hotel->HotelAvailNotif( $parameters ) !== false ) {
            return $this->hotel->getResult()->getHotelAvailNotifResult();
//            print_r($hotel->getResult());
        } else {
//            print_r($hotel->getLastError());
        }
        return null;
    }
    
}