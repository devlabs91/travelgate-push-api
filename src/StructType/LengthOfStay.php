<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LengthOfStay StructType
 * @subpackage Structs
 */
class LengthOfStay extends AbstractStructBase
{
    /**
     * The Time
     * @var int
     */
    public $Time;
    /**
     * The TimeUnit
     * @var string
     */
    public $TimeUnit;
    /**
     * The MinMaxMessageType
     * @var string
     */
    public $MinMaxMessageType;
    /**
     * Constructor method for LengthOfStay
     * @uses LengthOfStay::setTime()
     * @uses LengthOfStay::setTimeUnit()
     * @uses LengthOfStay::setMinMaxMessageType()
     * @param int $time
     * @param string $timeUnit
     * @param string $minMaxMessageType
     */
    public function __construct($time = null, $timeUnit = null, $minMaxMessageType = null)
    {
        $this
            ->setTime($time)
            ->setTimeUnit($timeUnit)
            ->setMinMaxMessageType($minMaxMessageType);
    }
    /**
     * Get Time value
     * @return int|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param int $time
     * @return \Devlabs91\TravelgatePushApi\StructType\LengthOfStay
     */
    public function setTime($time = null)
    {
        // validation for constraint: int
        if (!is_null($time) && !is_numeric($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($time)), __LINE__);
        }
        $this->Time = $time;
        return $this;
    }
    /**
     * Get TimeUnit value
     * @return string|null
     */
    public function getTimeUnit()
    {
        return $this->TimeUnit;
    }
    /**
     * Set TimeUnit value
     * @uses \Devlabs91\TravelgatePushApi\EnumType\TimeUnitType::valueIsValid()
     * @uses \Devlabs91\TravelgatePushApi\EnumType\TimeUnitType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $timeUnit
     * @return \Devlabs91\TravelgatePushApi\StructType\LengthOfStay
     */
    public function setTimeUnit($timeUnit = null)
    {
        // validation for constraint: enumeration
        if (!\Devlabs91\TravelgatePushApi\EnumType\TimeUnitType::valueIsValid($timeUnit)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $timeUnit, implode(', ', \Devlabs91\TravelgatePushApi\EnumType\TimeUnitType::getValidValues())), __LINE__);
        }
        $this->TimeUnit = $timeUnit;
        return $this;
    }
    /**
     * Get MinMaxMessageType value
     * @return string|null
     */
    public function getMinMaxMessageType()
    {
        return $this->MinMaxMessageType;
    }
    /**
     * Set MinMaxMessageType value
     * @param string $minMaxMessageType
     * @return \Devlabs91\TravelgatePushApi\StructType\LengthOfStay
     */
    public function setMinMaxMessageType($minMaxMessageType = null)
    {
        // validation for constraint: string
        if (!is_null($minMaxMessageType) && !is_string($minMaxMessageType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minMaxMessageType)), __LINE__);
        }
        $this->MinMaxMessageType = $minMaxMessageType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\LengthOfStay
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
