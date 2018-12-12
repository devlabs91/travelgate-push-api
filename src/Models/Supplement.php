<?php

namespace Devlabs91\TravelgatePushApi\Models;

class Supplement {
    
    /**
     * Start date of this supplement.
     * @var string
     */
    public $Start;
    
    /**
     * End date of this supplement.
     * @var string
     */
    public $End;
    
    /**
     * Age qualifyingCode which affects this supplement (10 - Adult,8 - Child,7 - Infant). Not allowed if charging board supplement by occupancy.
     * @var string
     */
    public $AgeQualifyingCode;
    
    /**
     * Indicates the board supplement occupancy. Only allowed if charging board supplement by occupancy. The occupancy code is defined by AdultNumber-ChildNumber-InfantNumber. @ChargeTypeCode for an occupancy of 2 adults, 1 child and 0 babies would be “2-1-0”.
     * @var string
     */
    public $ChargeTypeCode;
    
    /**
     * Amount of supplement.
     * @var float
     */
    public $Amount;
    
    /**
     * (Board).
     * @var string
     */
    public $SupplementType;
    
    /**
     * OTA MPT Code if @SupplementType is Board.
     * @var string
     */
    public $InvCode;
    
    public function __construct() {
        
    }
    
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    
    /**
     * Set Start value
     * @param string $start
     * @return \Devlabs91\TravelgatePushApi\StructType\Supplement
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->Start = $start;
        return $this;
    }
    
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    
    /**
     * Set End value
     * @param string $end
     * @return \Devlabs91\TravelgatePushApi\StructType\Supplement
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    
    /**
     * Get AgeQualifyingCode value
     * @return string|null
     */
    public function getAgeQualifyingCode()
    {
        return $this->AgeQualifyingCode;
    }
    
    /**
     * Set AgeQualifyingCode value
     * @param string $ageQualifyingCode
     * @return \Devlabs91\TravelgatePushApi\StructType\Supplement
     */
    public function setAgeQualifyingCode($ageQualifyingCode = null)
    {
        // validation for constraint: string
        if (!is_null($ageQualifyingCode) && !is_string($ageQualifyingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ageQualifyingCode)), __LINE__);
        }
        $this->AgeQualifyingCode = $ageQualifyingCode;
        return $this;
    }
    
    /**
     * Get ChargeTypeCode value
     * @return string|null
     */
    public function getChargeTypeCode()
    {
        return $this->ChargeTypeCode;
    }
    
    /**
     * Set ChargeTypeCode value
     * @param string $chargeTypeCode
     * @return \Devlabs91\TravelgatePushApi\StructType\Supplement
     */
    public function setChargeTypeCode($chargeTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($chargeTypeCode) && !is_string($chargeTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeTypeCode)), __LINE__);
        }
        $this->ChargeTypeCode = $chargeTypeCode;
        return $this;
    }

    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    
    /**
     * Set Amount value
     * @param float $amount
     * @return \Devlabs91\TravelgatePushApi\StructType\Supplement
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }

    /**
     * Get SupplementType value
     * @return string|null
     */
    public function getSupplementType()
    {
        return $this->SupplementType;
    }
    
    /**
     * Set SupplementType value
     * @param string $supplementType
     * @return \Devlabs91\TravelgatePushApi\StructType\Supplement
     */
    public function setSupplementType($supplementType = null)
    {
        // validation for constraint: string
        if (!is_null($supplementType) && !is_string($supplementType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplementType)), __LINE__);
        }
        $this->SupplementType = $supplementType;
        return $this;
    }

    /**
     * Get InvCode value
     * @return string|null
     */
    public function getInvCode()
    {
        return $this->InvCode;
    }
    /**
     * Set InvCode value
     * @param string $invCode
     * @return \Devlabs91\TravelgatePushApi\StructType\Supplement
     */
    public function setInvCode($invCode = null)
    {
        // validation for constraint: string
        if (!is_null($invCode) && !is_string($invCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invCode)), __LINE__);
        }
        $this->InvCode = $invCode;
        return $this;
    }
    
}
