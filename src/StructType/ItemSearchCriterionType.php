<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemSearchCriterionType StructType
 * @subpackage Structs
 */
class ItemSearchCriterionType extends AbstractStructBase
{
    /**
     * The HotelRef
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelRef[]
     */
    public $HotelRef;
    /**
     * Constructor method for ItemSearchCriterionType
     * @uses ItemSearchCriterionType::setHotelRef()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRef[] $hotelRef
     */
    public function __construct(array $hotelRef = array())
    {
        $this
            ->setHotelRef($hotelRef);
    }
    /**
     * Get HotelRef value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRef[]|null
     */
    public function getHotelRef()
    {
        return $this->HotelRef;
    }
    /**
     * Set HotelRef value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRef[] $hotelRef
     * @return \Devlabs91\TravelgatePushApi\StructType\ItemSearchCriterionType
     */
    public function setHotelRef(array $hotelRef = array())
    {
        foreach ($hotelRef as $itemSearchCriterionTypeHotelRefItem) {
            // validation for constraint: itemType
            if (!$itemSearchCriterionTypeHotelRefItem instanceof \Devlabs91\TravelgatePushApi\StructType\HotelRef) {
                throw new \InvalidArgumentException(sprintf('The HotelRef property can only contain items of \Devlabs91\TravelgatePushApi\StructType\HotelRef, "%s" given', is_object($itemSearchCriterionTypeHotelRefItem) ? get_class($itemSearchCriterionTypeHotelRefItem) : gettype($itemSearchCriterionTypeHotelRefItem)), __LINE__);
            }
        }
        $this->HotelRef = $hotelRef;
        return $this;
    }
    /**
     * Add item to HotelRef value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRef $item
     * @return \Devlabs91\TravelgatePushApi\StructType\ItemSearchCriterionType
     */
    public function addToHotelRef(\Devlabs91\TravelgatePushApi\StructType\HotelRef $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\HotelRef) {
            throw new \InvalidArgumentException(sprintf('The HotelRef property can only contain items of \Devlabs91\TravelgatePushApi\StructType\HotelRef, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelRef[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\ItemSearchCriterionType
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
