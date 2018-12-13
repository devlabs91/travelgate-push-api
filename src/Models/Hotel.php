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
     * Present if rate update.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var RatePlan[]
     */
    public $RatePlans;
    
    /**
     * Present if availability/restriction update.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var AvailStatusMessage[]
     */
    public $AvailStatusMessages;
    
    /**
     * @param string $hotelCode
     */
    public function __construct( $hotelCode ) {
        $this->HotelCode = $hotelCode;
        $this->RatePlans = [];
        $this->AvailStatusMessages = [];
    }
    
    /**
     * @return string
     */
    public function getHotelCode() {
        return $this->HotelCode;
    }
    
    /**
     * @param RatePlan $ratePlan
     */
    public function addToRatePlans( RatePlan $ratePlan ) {
        $this->RatePlans[] = $ratePlan;
    }
    
    /**
     * @return \Devlabs91\TravelgatePushApi\Models\RatePlan[]
     */
    public function getRatePlans() {
        return $this->RatePlans;
    }
    
    /**
     * @param AvailStatusMessage $availStatusMessage
     */
    public function addToAvailStatusMessages( AvailStatusMessage $availStatusMessage ) {
        $this->AvailStatusMessages[] = $availStatusMessage;
    }
    
    /**
     * @return \Devlabs91\TravelgatePushApi\Models\AvailStatusMessage[]
     */
    public function getAvailStatusMessages() {
        return $this->AvailStatusMessages;
    }
    
}