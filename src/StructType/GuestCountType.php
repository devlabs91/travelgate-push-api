<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestCountType StructType
 * @subpackage Structs
 */
class GuestCountType extends AbstractStructBase
{
    /**
     * The GuestCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\GuestCount[]
     */
    public $GuestCount;
    /**
     * The IsPerRoom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IsPerRoom;
    /**
     * Constructor method for GuestCountType
     * @uses GuestCountType::setGuestCount()
     * @uses GuestCountType::setIsPerRoom()
     * @param \StructType\GuestCount[] $guestCount
     * @param string $isPerRoom
     */
    public function __construct(array $guestCount = array(), $isPerRoom = null)
    {
        $this
            ->setGuestCount($guestCount)
            ->setIsPerRoom($isPerRoom);
    }
    /**
     * Get GuestCount value
     * @return \StructType\GuestCount[]|null
     */
    public function getGuestCount()
    {
        return $this->GuestCount;
    }
    /**
     * Set GuestCount value
     * @throws \InvalidArgumentException
     * @param \StructType\GuestCount[] $guestCount
     * @return \StructType\GuestCountType
     */
    public function setGuestCount(array $guestCount = array())
    {
        foreach ($guestCount as $guestCountTypeGuestCountItem) {
            // validation for constraint: itemType
            if (!$guestCountTypeGuestCountItem instanceof \StructType\GuestCount) {
                throw new \InvalidArgumentException(sprintf('The GuestCount property can only contain items of \StructType\GuestCount, "%s" given', is_object($guestCountTypeGuestCountItem) ? get_class($guestCountTypeGuestCountItem) : gettype($guestCountTypeGuestCountItem)), __LINE__);
            }
        }
        $this->GuestCount = $guestCount;
        return $this;
    }
    /**
     * Add item to GuestCount value
     * @throws \InvalidArgumentException
     * @param \StructType\GuestCount $item
     * @return \StructType\GuestCountType
     */
    public function addToGuestCount(\StructType\GuestCount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GuestCount) {
            throw new \InvalidArgumentException(sprintf('The GuestCount property can only contain items of \StructType\GuestCount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuestCount[] = $item;
        return $this;
    }
    /**
     * Get IsPerRoom value
     * @return string|null
     */
    public function getIsPerRoom()
    {
        return $this->IsPerRoom;
    }
    /**
     * Set IsPerRoom value
     * @param string $isPerRoom
     * @return \StructType\GuestCountType
     */
    public function setIsPerRoom($isPerRoom = null)
    {
        // validation for constraint: string
        if (!is_null($isPerRoom) && !is_string($isPerRoom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($isPerRoom)), __LINE__);
        }
        $this->IsPerRoom = $isPerRoom;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GuestCountType
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
