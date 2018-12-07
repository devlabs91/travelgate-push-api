<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfHotelReservationIDsTypeHotelReservationID ArrayType
 * @subpackage Arrays
 */
class ArrayOfHotelReservationIDsTypeHotelReservationID extends AbstractStructArrayBase
{
    /**
     * The HotelReservationID
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelReservationID[]
     */
    public $HotelReservationID;
    /**
     * Constructor method for ArrayOfHotelReservationIDsTypeHotelReservationID
     * @uses ArrayOfHotelReservationIDsTypeHotelReservationID::setHotelReservationID()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReservationID[] $hotelReservationID
     */
    public function __construct(array $hotelReservationID = array())
    {
        $this
            ->setHotelReservationID($hotelReservationID);
    }
    /**
     * Get HotelReservationID value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationID[]|null
     */
    public function getHotelReservationID()
    {
        return $this->HotelReservationID;
    }
    /**
     * Set HotelReservationID value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReservationID[] $hotelReservationID
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID
     */
    public function setHotelReservationID(array $hotelReservationID = array())
    {
        foreach ($hotelReservationID as $arrayOfHotelReservationIDsTypeHotelReservationIDHotelReservationIDItem) {
            // validation for constraint: itemType
            if (!$arrayOfHotelReservationIDsTypeHotelReservationIDHotelReservationIDItem instanceof \Devlabs91\TravelgatePushApi\StructType\HotelReservationID) {
                throw new \InvalidArgumentException(sprintf('The HotelReservationID property can only contain items of \Devlabs91\TravelgatePushApi\StructType\HotelReservationID, "%s" given', is_object($arrayOfHotelReservationIDsTypeHotelReservationIDHotelReservationIDItem) ? get_class($arrayOfHotelReservationIDsTypeHotelReservationIDHotelReservationIDItem) : gettype($arrayOfHotelReservationIDsTypeHotelReservationIDHotelReservationIDItem)), __LINE__);
            }
        }
        $this->HotelReservationID = $hotelReservationID;
        return $this;
    }
    /**
     * Add item to HotelReservationID value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReservationID $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID
     */
    public function addToHotelReservationID(\Devlabs91\TravelgatePushApi\StructType\HotelReservationID $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\HotelReservationID) {
            throw new \InvalidArgumentException(sprintf('The HotelReservationID property can only contain items of \Devlabs91\TravelgatePushApi\StructType\HotelReservationID, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelReservationID[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationID|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationID|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationID|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationID|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationID|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string HotelReservationID
     */
    public function getAttributeName()
    {
        return 'HotelReservationID';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID
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
