<?php 

namespace Devlabs91\TravelgatePushApi\Adapters;

use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOTA_HotelRatePlanRQRatePlan;
use Devlabs91\TravelgatePushApi\StructType\RatePlan;
use Devlabs91\TravelgatePushApi\StructType\HotelRef;
use Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryNotif;

class HotelRatePlanInventoryNotifAdapter extends BaseAdapter {

    /** @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanNotifRQ */
    public $request;
    
    public $hotelCode;
    
    public function __construct( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID ) {
        parent::__construct( $username, $password, $clientCode, $requestorId, $primaryLangID );
        
        $this->hotelCode = $hotelCode;
        $this->request = new \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRQ( new ArrayOfSourceType(), new ArrayOfOTA_HotelRatePlanRQRatePlan(), $primaryLangID );
        
        $this->addPOS( $this->request );
        $this->addSoapHeaderSecurity( $this->hotel );
    }

    /**
     * 
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanNotifRS|NULL|NULL
     */
    public function retrieve() {
        $this->request->getRatePlans()->addToRatePlan( new RatePlan( null, null, new HotelRef( $this->hotelCode ) ) );
        $parameters = new HotelRatePlanInventoryNotif( $this->request );
        
        if ( $this->hotel->HotelRatePlanInventoryNotif( $parameters ) !== false ) {
            return $this->hotel->getResult()->getHotelRatePlanInventoryNotifResult();
//            print_r($hotel->getResult());
        } else {
//            print_r($hotel->getLastError());
        }
        return null;
    }
    
}