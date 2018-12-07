<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Quantities StructType
 * @subpackage Structs
 */
class Quantities extends AbstractStructBase
{
    /**
     * The StandardNumBeds
     * @var int
     */
    public $StandardNumBeds;
    /**
     * Constructor method for Quantities
     * @uses Quantities::setStandardNumBeds()
     * @param int $standardNumBeds
     */
    public function __construct($standardNumBeds = null)
    {
        $this
            ->setStandardNumBeds($standardNumBeds);
    }
    /**
     * Get StandardNumBeds value
     * @return int|null
     */
    public function getStandardNumBeds()
    {
        return $this->StandardNumBeds;
    }
    /**
     * Set StandardNumBeds value
     * @param int $standardNumBeds
     * @return \Devlabs91\TravelgatePushApi\StructType\Quantities
     */
    public function setStandardNumBeds($standardNumBeds = null)
    {
        // validation for constraint: int
        if (!is_null($standardNumBeds) && !is_numeric($standardNumBeds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($standardNumBeds)), __LINE__);
        }
        $this->StandardNumBeds = $standardNumBeds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\Quantities
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
