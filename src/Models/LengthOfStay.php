<?php

namespace Devlabs91\TravelgatePushApi\Models;

class LengthOfStay
{
    /**
     * Indicates the number of @TimeUnit for this stay.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Time;
    /**
     * Day.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TimeUnit;
    /**
     * (MinLOS, MaxLOS) Indicates the minimum or maximum stay for his AvailStatusMessage.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $MinMaxMessageType;
    
    public function __construct($time = null, $timeUnit = 'Day', $minMaxMessageType = null) {
        $this->Time = $time;
        $this->TimeUnit = $timeUnit;
        $this->MinMaxMessageType = $minMaxMessageType;
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
     * @return LengthOfStay
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
     * @throws \InvalidArgumentException
     * @param string $timeUnit
     * @return LengthOfStay
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
     * @return LengthOfStay
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
}
