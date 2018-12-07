<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryCodesType StructType
 * @subpackage Structs
 */
class CategoryCodesType extends AbstractStructBase
{
    /**
     * The LocationCategory
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\LocationCategory[]
     */
    public $LocationCategory;
    /**
     * The SegmentCategory
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SegmentCategory[]
     */
    public $SegmentCategory;
    /**
     * The HotelCategory
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\HotelCategory[]
     */
    public $HotelCategory;
    /**
     * Constructor method for CategoryCodesType
     * @uses CategoryCodesType::setLocationCategory()
     * @uses CategoryCodesType::setSegmentCategory()
     * @uses CategoryCodesType::setHotelCategory()
     * @param \StructType\LocationCategory[] $locationCategory
     * @param \StructType\SegmentCategory[] $segmentCategory
     * @param \StructType\HotelCategory[] $hotelCategory
     */
    public function __construct(array $locationCategory = array(), array $segmentCategory = array(), array $hotelCategory = array())
    {
        $this
            ->setLocationCategory($locationCategory)
            ->setSegmentCategory($segmentCategory)
            ->setHotelCategory($hotelCategory);
    }
    /**
     * Get LocationCategory value
     * @return \StructType\LocationCategory[]|null
     */
    public function getLocationCategory()
    {
        return $this->LocationCategory;
    }
    /**
     * Set LocationCategory value
     * @throws \InvalidArgumentException
     * @param \StructType\LocationCategory[] $locationCategory
     * @return \StructType\CategoryCodesType
     */
    public function setLocationCategory(array $locationCategory = array())
    {
        foreach ($locationCategory as $categoryCodesTypeLocationCategoryItem) {
            // validation for constraint: itemType
            if (!$categoryCodesTypeLocationCategoryItem instanceof \StructType\LocationCategory) {
                throw new \InvalidArgumentException(sprintf('The LocationCategory property can only contain items of \StructType\LocationCategory, "%s" given', is_object($categoryCodesTypeLocationCategoryItem) ? get_class($categoryCodesTypeLocationCategoryItem) : gettype($categoryCodesTypeLocationCategoryItem)), __LINE__);
            }
        }
        $this->LocationCategory = $locationCategory;
        return $this;
    }
    /**
     * Add item to LocationCategory value
     * @throws \InvalidArgumentException
     * @param \StructType\LocationCategory $item
     * @return \StructType\CategoryCodesType
     */
    public function addToLocationCategory(\StructType\LocationCategory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LocationCategory) {
            throw new \InvalidArgumentException(sprintf('The LocationCategory property can only contain items of \StructType\LocationCategory, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LocationCategory[] = $item;
        return $this;
    }
    /**
     * Get SegmentCategory value
     * @return \StructType\SegmentCategory[]|null
     */
    public function getSegmentCategory()
    {
        return $this->SegmentCategory;
    }
    /**
     * Set SegmentCategory value
     * @throws \InvalidArgumentException
     * @param \StructType\SegmentCategory[] $segmentCategory
     * @return \StructType\CategoryCodesType
     */
    public function setSegmentCategory(array $segmentCategory = array())
    {
        foreach ($segmentCategory as $categoryCodesTypeSegmentCategoryItem) {
            // validation for constraint: itemType
            if (!$categoryCodesTypeSegmentCategoryItem instanceof \StructType\SegmentCategory) {
                throw new \InvalidArgumentException(sprintf('The SegmentCategory property can only contain items of \StructType\SegmentCategory, "%s" given', is_object($categoryCodesTypeSegmentCategoryItem) ? get_class($categoryCodesTypeSegmentCategoryItem) : gettype($categoryCodesTypeSegmentCategoryItem)), __LINE__);
            }
        }
        $this->SegmentCategory = $segmentCategory;
        return $this;
    }
    /**
     * Add item to SegmentCategory value
     * @throws \InvalidArgumentException
     * @param \StructType\SegmentCategory $item
     * @return \StructType\CategoryCodesType
     */
    public function addToSegmentCategory(\StructType\SegmentCategory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SegmentCategory) {
            throw new \InvalidArgumentException(sprintf('The SegmentCategory property can only contain items of \StructType\SegmentCategory, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SegmentCategory[] = $item;
        return $this;
    }
    /**
     * Get HotelCategory value
     * @return \StructType\HotelCategory[]|null
     */
    public function getHotelCategory()
    {
        return $this->HotelCategory;
    }
    /**
     * Set HotelCategory value
     * @throws \InvalidArgumentException
     * @param \StructType\HotelCategory[] $hotelCategory
     * @return \StructType\CategoryCodesType
     */
    public function setHotelCategory(array $hotelCategory = array())
    {
        foreach ($hotelCategory as $categoryCodesTypeHotelCategoryItem) {
            // validation for constraint: itemType
            if (!$categoryCodesTypeHotelCategoryItem instanceof \StructType\HotelCategory) {
                throw new \InvalidArgumentException(sprintf('The HotelCategory property can only contain items of \StructType\HotelCategory, "%s" given', is_object($categoryCodesTypeHotelCategoryItem) ? get_class($categoryCodesTypeHotelCategoryItem) : gettype($categoryCodesTypeHotelCategoryItem)), __LINE__);
            }
        }
        $this->HotelCategory = $hotelCategory;
        return $this;
    }
    /**
     * Add item to HotelCategory value
     * @throws \InvalidArgumentException
     * @param \StructType\HotelCategory $item
     * @return \StructType\CategoryCodesType
     */
    public function addToHotelCategory(\StructType\HotelCategory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HotelCategory) {
            throw new \InvalidArgumentException(sprintf('The HotelCategory property can only contain items of \StructType\HotelCategory, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelCategory[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CategoryCodesType
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
