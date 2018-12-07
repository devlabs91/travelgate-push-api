<?php

namespace StructType;

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
     * @var \StructType\HotelReservation[]
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
     * @param \StructType\HotelReservation[] $hotelReservation
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
     * @return \StructType\HotelReservation[]|null
     */
    public function getHotelReservation()
    {
        return $this->HotelReservation;
    }
    /**
     * Set HotelReservation value
     * @throws \InvalidArgumentException
     * @param \StructType\HotelReservation[] $hotelReservation
     * @return \StructType\HotelReservationsType
     */
    public function setHotelReservation(array $hotelReservation = array())
    {
        foreach ($hotelReservation as $hotelReservationsTypeHotelReservationItem) {
            // validation for constraint: itemType
            if (!$hotelReservationsTypeHotelReservationItem instanceof \StructType\HotelReservation) {
                throw new \InvalidArgumentException(sprintf('The HotelReservation property can only contain items of \StructType\HotelReservation, "%s" given', is_object($hotelReservationsTypeHotelReservationItem) ? get_class($hotelReservationsTypeHotelReservationItem) : gettype($hotelReservationsTypeHotelReservationItem)), __LINE__);
            }
        }
        $this->HotelReservation = $hotelReservation;
        return $this;
    }
    /**
     * Add item to HotelReservation value
     * @throws \InvalidArgumentException
     * @param \StructType\HotelReservation $item
     * @return \StructType\HotelReservationsType
     */
    public function addToHotelReservation(\StructType\HotelReservation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HotelReservation) {
            throw new \InvalidArgumentException(sprintf('The HotelReservation property can only contain items of \StructType\HotelReservation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\HotelReservationsType
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
     * @return \StructType\HotelReservationsType
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
