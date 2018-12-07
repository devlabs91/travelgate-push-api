<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationCodes StructType
 * @subpackage Structs
 */
class LocationCodes extends AbstractStructBase
{
    /**
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\LocationCode[]
     */
    public $LocationCode;
    /**
     * The LocationCodesInclusive
     * @var bool
     */
    public $LocationCodesInclusive;
    /**
     * Constructor method for LocationCodes
     * @uses LocationCodes::setLocationCode()
     * @uses LocationCodes::setLocationCodesInclusive()
     * @param \StructType\LocationCode[] $locationCode
     * @param bool $locationCodesInclusive
     */
    public function __construct(array $locationCode = array(), $locationCodesInclusive = null)
    {
        $this
            ->setLocationCode($locationCode)
            ->setLocationCodesInclusive($locationCodesInclusive);
    }
    /**
     * Get LocationCode value
     * @return \StructType\LocationCode[]|null
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @throws \InvalidArgumentException
     * @param \StructType\LocationCode[] $locationCode
     * @return \StructType\LocationCodes
     */
    public function setLocationCode(array $locationCode = array())
    {
        foreach ($locationCode as $locationCodesLocationCodeItem) {
            // validation for constraint: itemType
            if (!$locationCodesLocationCodeItem instanceof \StructType\LocationCode) {
                throw new \InvalidArgumentException(sprintf('The LocationCode property can only contain items of \StructType\LocationCode, "%s" given', is_object($locationCodesLocationCodeItem) ? get_class($locationCodesLocationCodeItem) : gettype($locationCodesLocationCodeItem)), __LINE__);
            }
        }
        $this->LocationCode = $locationCode;
        return $this;
    }
    /**
     * Add item to LocationCode value
     * @throws \InvalidArgumentException
     * @param \StructType\LocationCode $item
     * @return \StructType\LocationCodes
     */
    public function addToLocationCode(\StructType\LocationCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LocationCode) {
            throw new \InvalidArgumentException(sprintf('The LocationCode property can only contain items of \StructType\LocationCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LocationCode[] = $item;
        return $this;
    }
    /**
     * Get LocationCodesInclusive value
     * @return bool|null
     */
    public function getLocationCodesInclusive()
    {
        return $this->LocationCodesInclusive;
    }
    /**
     * Set LocationCodesInclusive value
     * @param bool $locationCodesInclusive
     * @return \StructType\LocationCodes
     */
    public function setLocationCodesInclusive($locationCodesInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($locationCodesInclusive) && !is_bool($locationCodesInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($locationCodesInclusive)), __LINE__);
        }
        $this->LocationCodesInclusive = $locationCodesInclusive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LocationCodes
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
