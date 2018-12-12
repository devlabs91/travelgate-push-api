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
    
    public function __construct( $hotelCode ) {
        $this->HotelCode = $hotelCode;
        $this->RatePlans = [];
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
    
}