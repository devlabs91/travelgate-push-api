<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatusApplicationControlType StructType
 * @subpackage Structs
 */
class StatusApplicationControlType extends AbstractStructBase
{
    /**
     * The Start
     * @var string
     */
    public $Start;
    /**
     * The End
     * @var string
     */
    public $End;
    /**
     * The RatePlanCode
     * @var string
     */
    public $RatePlanCode;
    /**
     * The PromotionCode
     * @var string
     */
    public $PromotionCode;
    /**
     * The InvCode
     * @var string
     */
    public $InvCode;
    /**
     * The InvType
     * @var string
     */
    public $InvType;
    /**
     * The InvTypeCode
     * @var string
     */
    public $InvTypeCode;
    /**
     * The Mon
     * @var bool
     */
    public $Mon;
    /**
     * The Tue
     * @var bool
     */
    public $Tue;
    /**
     * The Weds
     * @var bool
     */
    public $Weds;
    /**
     * The Thur
     * @var bool
     */
    public $Thur;
    /**
     * The Fri
     * @var bool
     */
    public $Fri;
    /**
     * The Sat
     * @var bool
     */
    public $Sat;
    /**
     * The Sun
     * @var bool
     */
    public $Sun;
    /**
     * Constructor method for StatusApplicationControlType
     * @uses StatusApplicationControlType::setStart()
     * @uses StatusApplicationControlType::setEnd()
     * @uses StatusApplicationControlType::setRatePlanCode()
     * @uses StatusApplicationControlType::setPromotionCode()
     * @uses StatusApplicationControlType::setInvCode()
     * @uses StatusApplicationControlType::setInvType()
     * @uses StatusApplicationControlType::setInvTypeCode()
     * @uses StatusApplicationControlType::setMon()
     * @uses StatusApplicationControlType::setTue()
     * @uses StatusApplicationControlType::setWeds()
     * @uses StatusApplicationControlType::setThur()
     * @uses StatusApplicationControlType::setFri()
     * @uses StatusApplicationControlType::setSat()
     * @uses StatusApplicationControlType::setSun()
     * @param string $start
     * @param string $end
     * @param string $ratePlanCode
     * @param string $promotionCode
     * @param string $invCode
     * @param string $invType
     * @param string $invTypeCode
     * @param bool $mon
     * @param bool $tue
     * @param bool $weds
     * @param bool $thur
     * @param bool $fri
     * @param bool $sat
     * @param bool $sun
     */
    public function __construct($start = null, $end = null, $ratePlanCode = null, $promotionCode = null, $invCode = null, $invType = null, $invTypeCode = null, $mon = null, $tue = null, $weds = null, $thur = null, $fri = null, $sat = null, $sun = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end)
            ->setRatePlanCode($ratePlanCode)
            ->setPromotionCode($promotionCode)
            ->setInvCode($invCode)
            ->setInvType($invType)
            ->setInvTypeCode($invTypeCode)
            ->setMon($mon)
            ->setTue($tue)
            ->setWeds($weds)
            ->setThur($thur)
            ->setFri($fri)
            ->setSat($sat)
            ->setSun($sun);
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
     * @return \StructType\StatusApplicationControlType
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
