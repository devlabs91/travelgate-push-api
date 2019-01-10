<?php 

namespace Devlabs91\TravelgatePushApi\Adapters;

use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType;
use Devlabs91\TravelgatePushApi\StructType\ReadRequests;
use Devlabs91\TravelgatePushApi\StructType\HotelReadRequest;
use Devlabs91\TravelgatePushApi\StructType\SelectionCriteria;
use Devlabs91\TravelgatePushApi\StructType\HotelResRetrieve;

class HotelResRetrieveAdapter extends BaseAdapter {

    /** @var \Devlabs91\TravelgatePushApi\StructType\OTA_ReadRQ */
    public $request;
    
    public $hotelCode;
    
    public function __construct( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID ) {
        parent::__construct( $username, $password, $clientCode, $requestorId, $primaryLangID );

        $this->hotelCode = $hotelCode;
        $this->request = new \Devlabs91\TravelgatePushApi\StructType\OTA_ReadRQ( new ArrayOfSourceType(), null, new ReadRequests(), $primaryLangID );
        
        $this->addPOS( $this->request );
        $this->addSoapHeaderSecurity( $this->hotel );
    }
    
    /**
     * 
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS|NULL|NULL
     */
    public function retrieve( \DateTime $start = null, \DateTime $end = null, $dateType = 'LastUpdateDate' ) {
        
        if( !$end ) { $end = new \DateTime(); }
        if( !$start ) { $start = clone $end; $start->sub( new \DateInterval('P2D') ); }
        
        $this->request->getReadRequests()->setHotelReadRequest(
            new HotelReadRequest( new SelectionCriteria( $start->format('Y-m-d'), $end->format('Y-m-d'), $dateType ) ) );
        $parameters = new HotelResRetrieve( $this->request );
        
        if ( $this->hotel->HotelResRetrieve( $parameters ) !== false ) {
            return $this->hotel->getResult()->getHotelResRetrieveResult();
//            print_r($hotel->getResult());
        } else {
//            print_r($hotel->getLastError());
        }
        return null;
    }
        
}