<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRoomRateTypeFeature ArrayType
 * @subpackage Arrays
 */
class ArrayOfRoomRateTypeFeature extends AbstractStructArrayBase
{
    /**
     * The Feature
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Feature[]
     */
    public $Feature;
    /**
     * Constructor method for ArrayOfRoomRateTypeFeature
     * @uses ArrayOfRoomRateTypeFeature::setFeature()
     * @param \Devlabs91\TravelgatePushApi\StructType\Feature[] $feature
     */
    public function __construct(array $feature = array())
    {
        $this
            ->setFeature($feature);
    }
    /**
     * Get Feature value
     * @return \Devlabs91\TravelgatePushApi\StructType\Feature[]|null
     */
    public function getFeature()
    {
        return $this->Feature;
    }
    /**
     * Set Feature value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Feature[] $feature
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomRateTypeFeature
     */
    public function setFeature(array $feature = array())
    {
        foreach ($feature as $arrayOfRoomRateTypeFeatureFeatureItem) {
            // validation for constraint: itemType
            if (!$arrayOfRoomRateTypeFeatureFeatureItem instanceof \Devlabs91\TravelgatePushApi\StructType\Feature) {
                throw new \InvalidArgumentException(sprintf('The Feature property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Feature, "%s" given', is_object($arrayOfRoomRateTypeFeatureFeatureItem) ? get_class($arrayOfRoomRateTypeFeatureFeatureItem) : gettype($arrayOfRoomRateTypeFeatureFeatureItem)), __LINE__);
            }
        }
        $this->Feature = $feature;
        return $this;
    }
    /**
     * Add item to Feature value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Feature $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomRateTypeFeature
     */
    public function addToFeature(\Devlabs91\TravelgatePushApi\StructType\Feature $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Feature) {
            throw new \InvalidArgumentException(sprintf('The Feature property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Feature, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Feature[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\Feature|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\Feature|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\Feature|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\Feature|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\Feature|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Feature
     */
    public function getAttributeName()
    {
        return 'Feature';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomRateTypeFeature
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
