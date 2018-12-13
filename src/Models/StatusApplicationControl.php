<?php

namespace Devlabs91\TravelgatePushApi\Models;

class StatusApplicationControl
{
    /**
     * Start date.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Start;
    /**
     * The End
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $End;
    /**
     * The RatePlanCode
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RatePlanCode;
    /**
     * Room Code. Not used for derived rates.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InvCode;
    /**
     * Product type (ROOM). Not used for derived rates.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InvType;
    /**
     * Indicates whether the AvailStatusMessage data applies to Mondays.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $Mon;
    /**
     * Indicates whether the AvailStatusMessage data applies to Tuesdays.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $Tue;
    /**
     * Indicates whether the AvailStatusMessage data applies to Wednesdays.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $Weds;
    /**
     * Indicates whether the AvailStatusMessage data applies to Thursdays.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $Thur;
    /**
     * Indicates whether the AvailStatusMessage data applies to Fridays.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $Fri;
    /**
     * Indicates whether the AvailStatusMessage data applies to Saturdays.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $Sat;
    /**
     * Indicates whether the AvailStatusMessage data applies to Sundays.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $Sun;
    
    public function __construct( \DateTime $start, \DateTime $end, $ratePlanCode, $invCode = null, $invType = 'ROOM', $mon = true, $tue = true, $weds = true, $thur = true, $fri = true, $sat = true, $sun = true ) {
        $this->setStart( $start->format('Y-m-d') );
        $this->setEnd( $end->format('Y-m-d') );
        $this->RatePlanCode = $ratePlanCode;
        $this->InvCode = $invCode;
        $this->InvType = $invType;
        $this->Mon = $mon;
        $this->Tue = $tue;
        $this->Weds = $weds;
        $this->Thur = $thur;
        $this->Fri = $fri;
        $this->Sat = $sat;
        $this->Sun = $sun;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
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
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
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
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    /**
     * Get PromotionCode value
     * @return string|null
     */
    public function getPromotionCode()
    {
        return $this->PromotionCode;
    }
    /**
     * Set PromotionCode value
     * @param string $promotionCode
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public function setPromotionCode($promotionCode = null)
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionCode)), __LINE__);
        }
        $this->PromotionCode = $promotionCode;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
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
    /**
     * Get InvType value
     * @return string|null
     */
    public function getInvType()
    {
        return $this->InvType;
    }
    /**
     * Set InvType value
     * @param string $invType
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public function setInvType($invType = null)
    {
        // validation for constraint: string
        if (!is_null($invType) && !is_string($invType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invType)), __LINE__);
        }
        $this->InvType = $invType;
        return $this;
    }
    /**
     * Get InvTypeCode value
     * @return string|null
     */
    public function getInvTypeCode()
    {
        return $this->InvTypeCode;
    }
    /**
     * Set InvTypeCode value
     * @param string $invTypeCode
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public function setInvTypeCode($invTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($invTypeCode) && !is_string($invTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invTypeCode)), __LINE__);
        }
        $this->InvTypeCode = $invTypeCode;
        return $this;
    }
    /**
     * Get Mon value
     * @return bool|null
     */
    public function getMon()
    {
        return $this->Mon;
    }
    /**
     * Set Mon value
     * @param bool $mon
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public function setMon($mon = null)
    {
        // validation for constraint: boolean
        if (!is_null($mon) && !is_bool($mon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mon)), __LINE__);
        }
        $this->Mon = $mon;
        return $this;
    }
    /**
     * Get Tue value
     * @return bool|null
     */
    public function getTue()
    {
        return $this->Tue;
    }
    /**
     * Set Tue value
     * @param bool $tue
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public function setTue($tue = null)
    {
        // validation for constraint: boolean
        if (!is_null($tue) && !is_bool($tue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($tue)), __LINE__);
        }
        $this->Tue = $tue;
        return $this;
    }
    /**
     * Get Weds value
     * @return bool|null
     */
    public function getWeds()
    {
        return $this->Weds;
    }
    /**
     * Set Weds value
     * @param bool $weds
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public function setWeds($weds = null)
    {
        // validation for constraint: boolean
        if (!is_null($weds) && !is_bool($weds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($weds)), __LINE__);
        }
        $this->Weds = $weds;
        return $this;
    }
    /**
     * Get Thur value
     * @return bool|null
     */
    public function getThur()
    {
        return $this->Thur;
    }
    /**
     * Set Thur value
     * @param bool $thur
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public function setThur($thur = null)
    {
        // validation for constraint: boolean
        if (!is_null($thur) && !is_bool($thur)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($thur)), __LINE__);
        }
        $this->Thur = $thur;
        return $this;
    }
    /**
     * Get Fri value
     * @return bool|null
     */
    public function getFri()
    {
        return $this->Fri;
    }
    /**
     * Set Fri value
     * @param bool $fri
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public function setFri($fri = null)
    {
        // validation for constraint: boolean
        if (!is_null($fri) && !is_bool($fri)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fri)), __LINE__);
        }
        $this->Fri = $fri;
        return $this;
    }
    /**
     * Get Sat value
     * @return bool|null
     */
    public function getSat()
    {
        return $this->Sat;
    }
    /**
     * Set Sat value
     * @param bool $sat
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public function setSat($sat = null)
    {
        // validation for constraint: boolean
        if (!is_null($sat) && !is_bool($sat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sat)), __LINE__);
        }
        $this->Sat = $sat;
        return $this;
    }
    /**
     * Get Sun value
     * @return bool|null
     */
    public function getSun()
    {
        return $this->Sun;
    }
    /**
     * Set Sun value
     * @param bool $sun
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public function setSun($sun = null)
    {
        // validation for constraint: boolean
        if (!is_null($sun) && !is_bool($sun)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sun)), __LINE__);
        }
        $this->Sun = $sun;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
