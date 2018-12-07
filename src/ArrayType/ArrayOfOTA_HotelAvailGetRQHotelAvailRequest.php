<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOTA_HotelAvailGetRQHotelAvailRequest ArrayType
 * @subpackage Arrays
 */
class ArrayOfOTA_HotelAvailGetRQHotelAvailRequest extends AbstractStructArrayBase
{
    /**
     * The HotelAvailRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest[]
     */
    public $HotelAvailRequest;
    /**
     * Constructor method for ArrayOfOTA_HotelAvailGetRQHotelAvailRequest
     * @uses ArrayOfOTA_HotelAvailGetRQHotelAvailRequest::setHotelAvailRequest()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest[] $hotelAvailRequest
     */
    public function __construct(array $hotelAvailRequest = array())
    {
        $this
            ->setHotelAvailRequest($hotelAvailRequest);
    }
    /**
     * Get HotelAvailRequest value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest[]|null
     */
    public function getHotelAvailRequest()
    {
        return $this->HotelAvailRequest;
    }
    /**
     * Set HotelAvailRequest value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest[] $hotelAvailRequest
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOTA_HotelAvailGetRQHotelAvailRequest
     */
    public function setHotelAvailRequest(array $hotelAvailRequest = array())
    {
        foreach ($hotelAvailRequest as $arrayOfOTA_HotelAvailGetRQHotelAvailRequestHotelAvailRequestItem) {
            // validation for constraint: itemType
            if (!$arrayOfOTA_HotelAvailGetRQHotelAvailRequestHotelAvailRequestItem instanceof \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest) {
                throw new \InvalidArgumentException(sprintf('The HotelAvailRequest property can only contain items of \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest, "%s" given', is_object($arrayOfOTA_HotelAvailGetRQHotelAvailRequestHotelAvailRequestItem) ? get_class($arrayOfOTA_HotelAvailGetRQHotelAvailRequestHotelAvailRequestItem) : gettype($arrayOfOTA_HotelAvailGetRQHotelAvailRequestHotelAvailRequestItem)), __LINE__);
            }
        }
        $this->HotelAvailRequest = $hotelAvailRequest;
        return $this;
    }
    /**
     * Add item to HotelAvailRequest value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOTA_HotelAvailGetRQHotelAvailRequest
     */
    public function addToHotelAvailRequest(\Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest) {
            throw new \InvalidArgumentException(sprintf('The HotelAvailRequest property can only contain items of \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelAvailRequest[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string HotelAvailRequest
     */
    public function getAttributeName()
    {
        return 'HotelAvailRequest';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOTA_HotelAvailGetRQHotelAvailRequest
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
