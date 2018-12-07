<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReservationsType StructType
 * @subpackage Structs
 */
class HotelReservationsType extends AbstractStructBase
{
    /**
     * The HotelReservation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelReservation[]
     */
    public $HotelReservation;
    /**
     * The WrittenConfInst
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WrittenConfInst;
    /**
     * Constructor method for HotelReservationsType
     * @uses HotelReservationsType::setHotelReservation()
     * @uses HotelReservationsType::setWrittenConfInst()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReservation[] $hotelReservation
     * @param string $writtenConfInst
     */
    public function __construct(array $hotelReservation = array(), $writtenConfInst = null)
    {
        $this
            ->setHotelReservation($hotelReservation)
            ->setWrittenConfInst($writtenConfInst);
    }
    /**
     * Get HotelReservation value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservation[]|null
     */
    public function getHotelReservation()
    {
        return $this->HotelReservation;
    }
    /**
     * Set HotelReservation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReservation[] $hotelReservation
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType
     */
    public function setHotelReservation(array $hotelReservation = array())
    {
        foreach ($hotelReservation as $hotelReservationsTypeHotelReservationItem) {
            // validation for constraint: itemType
            if (!$hotelReservationsTypeHotelReservationItem instanceof \Devlabs91\TravelgatePushApi\StructType\HotelReservation) {
                throw new \InvalidArgumentException(sprintf('The HotelReservation property can only contain items of \Devlabs91\TravelgatePushApi\StructType\HotelReservation, "%s" given', is_object($hotelReservationsTypeHotelReservationItem) ? get_class($hotelReservationsTypeHotelReservationItem) : gettype($hotelReservationsTypeHotelReservationItem)), __LINE__);
            }
        }
        $this->HotelReservation = $hotelReservation;
        return $this;
    }
    /**
     * Add item to HotelReservation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReservation $item
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType
     */
    public function addToHotelReservation(\Devlabs91\TravelgatePushApi\StructType\HotelReservation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\HotelReservation) {
            throw new \InvalidArgumentException(sprintf('The HotelReservation property can only contain items of \Devlabs91\TravelgatePushApi\StructType\HotelReservation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelReservation[] = $item;
        return $this;
    }
    /**
     * Get WrittenConfInst value
     * @return string|null
     */
    public function getWrittenConfInst()
    {
        return $this->WrittenConfInst;
    }
    /**
     * Set WrittenConfInst value
     * @param string $writtenConfInst
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType
     */
    public function setWrittenConfInst($writtenConfInst = null)
    {
        // validation for constraint: string
        if (!is_null($writtenConfInst) && !is_string($writtenConfInst)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($writtenConfInst)), __LINE__);
        }
        $this->WrittenConfInst = $writtenConfInst;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType
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
