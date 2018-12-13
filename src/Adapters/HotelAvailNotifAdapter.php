<?php 

namespace Devlabs91\TravelgatePushApi\Adapters;

use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType;
use Devlabs91\TravelgatePushApi\StructType\AvailStatusMessages;
use Devlabs91\TravelgatePushApi\StructType\AvailStatusMessageType;
use Devlabs91\TravelgatePushApi\Models\Hotel;
use Devlabs91\TravelgatePushApi\StructType\HotelAvailNotif;
use Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType;
use Devlabs91\TravelgatePushApi\StructType\LengthOfStay;
use Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType;
use Devlabs91\TravelgatePushApi\StructType\RestrictionStatus;

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
    public function retrieve( Hotel $hotel ) {
        $this->buildRequest($hotel);
        $parameters = new HotelAvailNotif( $this->request );
        
        if ( $this->hotel->HotelAvailNotif( $parameters ) !== false ) {
            return $this->hotel->getResult()->getHotelAvailNotifResult();
//            print_r($hotel->getResult());
        } else {
//            print_r($hotel->getLastError());
        }
        return null;
    }
    
    public function buildRequest( Hotel $hotel ) {
        $availStatusMessages = new AvailStatusMessages();
        $availStatusMessages->setHotelCode( $hotel->getHotelCode() );
        
        foreach( $hotel->getAvailStatusMessages() AS $availStatusMessage ) {
            $item = new AvailStatusMessageType();
            $item->setBookingLimit( $availStatusMessage->getBookingLimit() );
            $item->setStatusApplicationControl( $this->createStatusApplicationControl( $availStatusMessage->getStatusApplicationControl() ) );
            if( $availStatusMessage->getLengthsOfStay() ) {
                $item->setLengthsOfStay( $this->createLengthsOfStayType( $availStatusMessage->getLengthsOfStay() ) );
            }
            if( $availStatusMessage->getRestrictionStatus() ) {
                $item->setRestrictionStatus( $this->createRestrictionStatus( $availStatusMessage->getRestrictionStatus() ) );
            }
            
            $availStatusMessages->addToAvailStatusMessage($item);
        }
        $this->request->setAvailStatusMessages($availStatusMessages);
        
    }
    
    public function createStatusApplicationControl( \Devlabs91\TravelgatePushApi\Models\StatusApplicationControl $statusApplicationControl ) {
        $item = new StatusApplicationControlType();
        $item->setStart( $statusApplicationControl->getStart() );
        $item->setEnd( $statusApplicationControl->getEnd() );
        $item->setRatePlanCode( $statusApplicationControl->getRatePlanCode() );
        if( $statusApplicationControl->getInvCode() ) {
            $item->setInvCode( $statusApplicationControl->getInvCode() );
        }
        if( $statusApplicationControl->getInvType() ) {
            $item->setInvType( $statusApplicationControl->getInvType() );
        }
        $item->setMon( $statusApplicationControl->getMon() );
        $item->setTue( $statusApplicationControl->getTue() );
        $item->setWeds( $statusApplicationControl->getWeds() );
        $item->setThur( $statusApplicationControl->getThur() );
        $item->setFri( $statusApplicationControl->getFri() );
        $item->setSat( $statusApplicationControl->getSat() );
        $item->setSun( $statusApplicationControl->getSun() );
        return $item;
    }
    
    public function createLengthsOfStayType( \Devlabs91\TravelgatePushApi\Models\LengthsOfStayType $lengthOfStayType ) {
        $item = new LengthsOfStayType();
        if($lengthOfStayType->getArrivalDateBased()) {
            $item->setArrivalDateBased( $lengthOfStayType->getArrivalDateBased() );
        }
        foreach( $lengthOfStayType->getLengthOfStay() AS $lengthOfStay ) {
            $item->addToLengthOfStay( $this->createLengthsOfStay( $lengthOfStay ) );
        }
        return $item;
    }
    
    public function createLengthsOfStay( \Devlabs91\TravelgatePushApi\Models\LengthOfStay $lengthOfStay ) {
        $item = new LengthOfStay();
        $item->setTime( $lengthOfStay->getTime() );
        $item->setTimeUnit( $lengthOfStay->getTimeUnit() );
        $item->setMinMaxMessageType( $lengthOfStay->getMinMaxMessageType() );
        return $item;
    }
    
    public function createRestrictionStatus( \Devlabs91\TravelgatePushApi\Models\RestrictionStatus $restrictionStatus ) {
        $item = new RestrictionStatus();
        if( $restrictionStatus->getStatus() ) {
            $item->setStatus( $restrictionStatus->getStatus() );
        }
        if( $restrictionStatus->getRestriction() ) {
            $item->setRestriction( $restrictionStatus->getRestriction() );
        }
        if( $restrictionStatus->getMinAdvancedBookingOffset() ) {
            $item->setMinAdvancedBookingOffset( $restrictionStatus->getMinAdvancedBookingOffset() );
        }
        if( $restrictionStatus->getMaxAdvancedBookingOffset() ) {
            $item->setMaxAdvancedBookingOffset( $restrictionStatus->getMaxAdvancedBookingOffset() );
        }
        if( $restrictionStatus->getSellThroughOpenIndicator() ) {
            $item->setSellThroughOpenIndicator( $restrictionStatus->getSellThroughOpenIndicator() );
        }
        return $item;
    }
    
}