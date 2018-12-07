<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableDaysOfWeek StructType
 * @subpackage Structs
 */
class AvailableDaysOfWeek extends AbstractStructBase
{
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
     * Constructor method for AvailableDaysOfWeek
     * @uses AvailableDaysOfWeek::setMon()
     * @uses AvailableDaysOfWeek::setTue()
     * @uses AvailableDaysOfWeek::setWeds()
     * @uses AvailableDaysOfWeek::setThur()
     * @uses AvailableDaysOfWeek::setFri()
     * @uses AvailableDaysOfWeek::setSat()
     * @uses AvailableDaysOfWeek::setSun()
     * @param bool $mon
     * @param bool $tue
     * @param bool $weds
     * @param bool $thur
     * @param bool $fri
     * @param bool $sat
     * @param bool $sun
     */
    public function __construct($mon = null, $tue = null, $weds = null, $thur = null, $fri = null, $sat = null, $sun = null)
    {
        $this
            ->setMon($mon)
            ->setTue($tue)
            ->setWeds($weds)
            ->setThur($thur)
            ->setFri($fri)
            ->setSat($sat)
            ->setSun($sun);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailableDaysOfWeek
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailableDaysOfWeek
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailableDaysOfWeek
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailableDaysOfWeek
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailableDaysOfWeek
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailableDaysOfWeek
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailableDaysOfWeek
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailableDaysOfWeek
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
