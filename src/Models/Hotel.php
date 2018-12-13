<?php 

namespace Devlabs91\TravelgatePushApi\Models;

class Hotel {
    
    /**
     * Hotel code whose information is provided by the method.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HotelCode;
    
    /**
     * Present if rate exists.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var RatePlan[]
     */
    public $RatePlans;

    /**
     * Present if availability exists.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var AvailStatusMessage[]
     */
    public $AvailStatusMessages;
    
    public function __construct( $hotelCode ) {
        $this->HotelCode = $hotelCode;
        $this->RatePlans = [];
        $this->AvailStatusMessages = [];
    }
    
    /**
     * Get HotelCode value
     */
    public function getHotelCode() {
        return $this->HotelCode;
    }
    
    public function addToRatePlan( RatePlan $ratePlan ) {
        $this->RatePlans[] = $ratePlan;
    }
    
    public function getRatePlans() {
        return $this->RatePlans;
    }
    
    public function addToAvailStatusMessages( AvailStatusMessage $availStatusMessage ) {
        $this->AvailStatusMessages[] = $availStatusMessage;
    }
    
    public function getAvailStatusMessages() {
        return $this->AvailStatusMessages;
    }
    
}