<?php

namespace Devlabs91\TravelgatePushApi\Models;

class AdditionalGuestAmount {
    
    /**
     * Number of additional pax, one node for each additional pax, int the above example 
     * has one for first child, and one for second.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MaxAdditionalGuests;
    
    /**
     * OTA AmountDeterminationType. If not specified then the price is a supplement, if @Type 
     * is Exclusive then the the price is absolute.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    
    /**
     * (10 - Adult,8 - Child,7 - Infant).
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AgeQualifyingCode;
    
    /**
     * Price for each additional pax.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Amount;
    
    /**
     * Percent for each additional pax.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Percent;
    
    public function __construct( $maxAdditionalGuests, $AgeQualifyingCode = 10, $amount = null ) {
        $this->MaxAdditionalGuests = $maxAdditionalGuests;
        $this->AgeQualifyingCode = (string) $AgeQualifyingCode;
        $this->Amount = $amount;
    }
    
    /**
     * Get MaxAdditionalGuests value
     * @return int|null
     */
    public function getMaxAdditionalGuests() {
        return $this->MaxAdditionalGuests;
    }
    
    /**
     * Set MaxAdditionalGuests value
     * @param int $maxAdditionalGuests
     * @return \Devlabs91\TravelgatePushApi\Models\AdditionalGuestAmount
     */
    public function setMaxAdditionalGuests($maxAdditionalGuests = null) {
        // validation for constraint: int
        if (!is_null($maxAdditionalGuests) && !is_numeric($maxAdditionalGuests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxAdditionalGuests)), __LINE__);
        }
        $this->MaxAdditionalGuests = $maxAdditionalGuests;
        return $this;
    }
    
    /**
     * Get Type value
     * @return string|null
     */
    public function getType() {
        return $this->Type;
    }
    
    /**
     * Set Type value
     * @uses \Devlabs91\TravelgatePushApi\EnumType\AmountDeterminationType::valueIsValid()
     * @uses \Devlabs91\TravelgatePushApi\EnumType\AmountDeterminationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Devlabs91\TravelgatePushApi\Models\AdditionalGuestAmount
     */
    public function setType($type = null) {
        // validation for constraint: enumeration
        if (!\Devlabs91\TravelgatePushApi\EnumType\AmountDeterminationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Devlabs91\TravelgatePushApi\EnumType\AmountDeterminationType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Get AgeQualifyingCode value
     * @return string|null
     */
    public function getAgeQualifyingCode() {
        return $this->AgeQualifyingCode;
    }
    
    /**
     * Set AgeQualifyingCode value
     * @param string $ageQualifyingCode
     * @return \Devlabs91\TravelgatePushApi\Models\AdditionalGuestAmount
     */
    public function setAgeQualifyingCode($ageQualifyingCode = null) {
        // validation for constraint: string
        if (!is_null($ageQualifyingCode) && !is_string($ageQualifyingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ageQualifyingCode)), __LINE__);
        }
        $this->AgeQualifyingCode = $ageQualifyingCode;
        return $this;
    }
    
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount() {
        return $this->Amount;
    }
    
    /**
     * Set Amount value
     * @param float $amount
     * @return \Devlabs91\TravelgatePushApi\Models\AdditionalGuestAmount
     */
    public function setAmount($amount = null) {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent() {
        return $this->Percent;
    }
    
    /**
     * Set Percent value
     * @param float $percent
     * @return \Devlabs91\TravelgatePushApi\Models\AdditionalGuestAmount
     */
    public function setPercent($percent = null) {
        $this->Percent = $percent;
        return $this;
    }
    
}
