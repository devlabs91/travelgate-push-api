<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfHotelInfoTypeService ArrayType
 * @subpackage Arrays
 */
class ArrayOfHotelInfoTypeService extends AbstractStructArrayBase
{
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Service[]
     */
    public $Service;
    /**
     * Constructor method for ArrayOfHotelInfoTypeService
     * @uses ArrayOfHotelInfoTypeService::setService()
     * @param \StructType\Service[] $service
     */
    public function __construct(array $service = array())
    {
        $this
            ->setService($service);
    }
    /**
     * Get Service value
     * @return \StructType\Service[]|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @throws \InvalidArgumentException
     * @param \StructType\Service[] $service
     * @return \ArrayType\ArrayOfHotelInfoTypeService
     */
    public function setService(array $service = array())
    {
        foreach ($service as $arrayOfHotelInfoTypeServiceServiceItem) {
            // validation for constraint: itemType
            if (!$arrayOfHotelInfoTypeServiceServiceItem instanceof \StructType\Service) {
                throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \StructType\Service, "%s" given', is_object($arrayOfHotelInfoTypeServiceServiceItem) ? get_class($arrayOfHotelInfoTypeServiceServiceItem) : gettype($arrayOfHotelInfoTypeServiceServiceItem)), __LINE__);
            }
        }
        $this->Service = $service;
        return $this;
    }
    /**
     * Add item to Service value
     * @throws \InvalidArgumentException
     * @param \StructType\Service $item
     * @return \ArrayType\ArrayOfHotelInfoTypeService
     */
    public function addToService(\StructType\Service $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Service) {
            throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \StructType\Service, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Service[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Service|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Service|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Service|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Service|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Service|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Service
     */
    public function getAttributeName()
    {
        return 'Service';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfHotelInfoTypeService
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
