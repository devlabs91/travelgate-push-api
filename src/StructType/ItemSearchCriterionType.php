<?php

namespace StructType;

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
     * @var \StructType\HotelRef[]
     */
    public $HotelRef;
    /**
     * Constructor method for ItemSearchCriterionType
     * @uses ItemSearchCriterionType::setHotelRef()
     * @param \StructType\HotelRef[] $hotelRef
     */
    public function __construct(array $hotelRef = array())
    {
        $this
            ->setHotelRef($hotelRef);
    }
    /**
     * Get HotelRef value
     * @return \StructType\HotelRef[]|null
     */
    public function getHotelRef()
    {
        return $this->HotelRef;
    }
    /**
     * Set HotelRef value
     * @throws \InvalidArgumentException
     * @param \StructType\HotelRef[] $hotelRef
     * @return \StructType\ItemSearchCriterionType
     */
    public function setHotelRef(array $hotelRef = array())
    {
        foreach ($hotelRef as $itemSearchCriterionTypeHotelRefItem) {
            // validation for constraint: itemType
            if (!$itemSearchCriterionTypeHotelRefItem instanceof \StructType\HotelRef) {
                throw new \InvalidArgumentException(sprintf('The HotelRef property can only contain items of \StructType\HotelRef, "%s" given', is_object($itemSearchCriterionTypeHotelRefItem) ? get_class($itemSearchCriterionTypeHotelRefItem) : gettype($itemSearchCriterionTypeHotelRefItem)), __LINE__);
            }
        }
        $this->HotelRef = $hotelRef;
        return $this;
    }
    /**
     * Add item to HotelRef value
     * @throws \InvalidArgumentException
     * @param \StructType\HotelRef $item
     * @return \StructType\ItemSearchCriterionType
     */
    public function addToHotelRef(\StructType\HotelRef $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HotelRef) {
            throw new \InvalidArgumentException(sprintf('The HotelRef property can only contain items of \StructType\HotelRef, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\ItemSearchCriterionType
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
