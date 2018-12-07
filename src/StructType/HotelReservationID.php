<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReservationID StructType
 * @subpackage Structs
 */
class HotelReservationID extends AbstractStructBase
{
    /**
     * The ResID_Type
     * @var string
     */
    public $ResID_Type;
    /**
     * The ResID_Value
     * @var string
     */
    public $ResID_Value;
    /**
     * The ResID_SourceContext
     * @var string
     */
    public $ResID_SourceContext;
    /**
     * Constructor method for HotelReservationID
     * @uses HotelReservationID::setResID_Type()
     * @uses HotelReservationID::setResID_Value()
     * @uses HotelReservationID::setResID_SourceContext()
     * @param string $resID_Type
     * @param string $resID_Value
     * @param string $resID_SourceContext
     */
    public function __construct($resID_Type = null, $resID_Value = null, $resID_SourceContext = null)
    {
        $this
            ->setResID_Type($resID_Type)
            ->setResID_Value($resID_Value)
            ->setResID_SourceContext($resID_SourceContext);
    }
    /**
     * Get ResID_Type value
     * @return string|null
     */
    public function getResID_Type()
    {
        return $this->ResID_Type;
    }
    /**
     * Set ResID_Type value
     * @param string $resID_Type
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationID
     */
    public function setResID_Type($resID_Type = null)
    {
        // validation for constraint: string
        if (!is_null($resID_Type) && !is_string($resID_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resID_Type)), __LINE__);
        }
        $this->ResID_Type = $resID_Type;
        return $this;
    }
    /**
     * Get ResID_Value value
     * @return string|null
     */
    public function getResID_Value()
    {
        return $this->ResID_Value;
    }
    /**
     * Set ResID_Value value
     * @param string $resID_Value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationID
     */
    public function setResID_Value($resID_Value = null)
    {
        // validation for constraint: string
        if (!is_null($resID_Value) && !is_string($resID_Value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resID_Value)), __LINE__);
        }
        $this->ResID_Value = $resID_Value;
        return $this;
    }
    /**
     * Get ResID_SourceContext value
     * @return string|null
     */
    public function getResID_SourceContext()
    {
        return $this->ResID_SourceContext;
    }
    /**
     * Set ResID_SourceContext value
     * @param string $resID_SourceContext
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationID
     */
    public function setResID_SourceContext($resID_SourceContext = null)
    {
        // validation for constraint: string
        if (!is_null($resID_SourceContext) && !is_string($resID_SourceContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resID_SourceContext)), __LINE__);
        }
        $this->ResID_SourceContext = $resID_SourceContext;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationID
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
