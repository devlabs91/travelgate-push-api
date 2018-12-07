<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Deadline StructType
 * @subpackage Structs
 */
class Deadline extends AbstractStructBase
{
    /**
     * The AbsoluteDeadline
     * @var string
     */
    public $AbsoluteDeadline;
    /**
     * The OffsetTimeUnit
     * @var string
     */
    public $OffsetTimeUnit;
    /**
     * The OffsetUnitMultiplier
     * @var int
     */
    public $OffsetUnitMultiplier;
    /**
     * The OffsetDropTime
     * @var string
     */
    public $OffsetDropTime;
    /**
     * Constructor method for Deadline
     * @uses Deadline::setAbsoluteDeadline()
     * @uses Deadline::setOffsetTimeUnit()
     * @uses Deadline::setOffsetUnitMultiplier()
     * @uses Deadline::setOffsetDropTime()
     * @param string $absoluteDeadline
     * @param string $offsetTimeUnit
     * @param int $offsetUnitMultiplier
     * @param string $offsetDropTime
     */
    public function __construct($absoluteDeadline = null, $offsetTimeUnit = null, $offsetUnitMultiplier = null, $offsetDropTime = null)
    {
        $this
            ->setAbsoluteDeadline($absoluteDeadline)
            ->setOffsetTimeUnit($offsetTimeUnit)
            ->setOffsetUnitMultiplier($offsetUnitMultiplier)
            ->setOffsetDropTime($offsetDropTime);
    }
    /**
     * Get AbsoluteDeadline value
     * @return string|null
     */
    public function getAbsoluteDeadline()
    {
        return $this->AbsoluteDeadline;
    }
    /**
     * Set AbsoluteDeadline value
     * @param string $absoluteDeadline
     * @return \Devlabs91\TravelgatePushApi\StructType\Deadline
     */
    public function setAbsoluteDeadline($absoluteDeadline = null)
    {
        // validation for constraint: string
        if (!is_null($absoluteDeadline) && !is_string($absoluteDeadline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($absoluteDeadline)), __LINE__);
        }
        $this->AbsoluteDeadline = $absoluteDeadline;
        return $this;
    }
    /**
     * Get OffsetTimeUnit value
     * @return string|null
     */
    public function getOffsetTimeUnit()
    {
        return $this->OffsetTimeUnit;
    }
    /**
     * Set OffsetTimeUnit value
     * @uses \Devlabs91\TravelgatePushApi\EnumType\TimeUnitType::valueIsValid()
     * @uses \Devlabs91\TravelgatePushApi\EnumType\TimeUnitType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offsetTimeUnit
     * @return \Devlabs91\TravelgatePushApi\StructType\Deadline
     */
    public function setOffsetTimeUnit($offsetTimeUnit = null)
    {
        // validation for constraint: enumeration
        if (!\Devlabs91\TravelgatePushApi\EnumType\TimeUnitType::valueIsValid($offsetTimeUnit)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $offsetTimeUnit, implode(', ', \Devlabs91\TravelgatePushApi\EnumType\TimeUnitType::getValidValues())), __LINE__);
        }
        $this->OffsetTimeUnit = $offsetTimeUnit;
        return $this;
    }
    /**
     * Get OffsetUnitMultiplier value
     * @return int|null
     */
    public function getOffsetUnitMultiplier()
    {
        return $this->OffsetUnitMultiplier;
    }
    /**
     * Set OffsetUnitMultiplier value
     * @param int $offsetUnitMultiplier
     * @return \Devlabs91\TravelgatePushApi\StructType\Deadline
     */
    public function setOffsetUnitMultiplier($offsetUnitMultiplier = null)
    {
        // validation for constraint: int
        if (!is_null($offsetUnitMultiplier) && !is_numeric($offsetUnitMultiplier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($offsetUnitMultiplier)), __LINE__);
        }
        $this->OffsetUnitMultiplier = $offsetUnitMultiplier;
        return $this;
    }
    /**
     * Get OffsetDropTime value
     * @return string|null
     */
    public function getOffsetDropTime()
    {
        return $this->OffsetDropTime;
    }
    /**
     * Set OffsetDropTime value
     * @param string $offsetDropTime
     * @return \Devlabs91\TravelgatePushApi\StructType\Deadline
     */
    public function setOffsetDropTime($offsetDropTime = null)
    {
        // validation for constraint: string
        if (!is_null($offsetDropTime) && !is_string($offsetDropTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offsetDropTime)), __LINE__);
        }
        $this->OffsetDropTime = $offsetDropTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\Deadline
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
