<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStayCandidateType StructType
 * @subpackage Structs
 */
class RoomStayCandidateType extends AbstractStructBase
{
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\GuestCountType
     */
    public $GuestCounts;
    /**
     * The RPH
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for RoomStayCandidateType
     * @uses RoomStayCandidateType::setGuestCounts()
     * @uses RoomStayCandidateType::setRPH()
     * @param \Devlabs91\TravelgatePushApi\StructType\GuestCountType $guestCounts
     * @param string $rPH
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\GuestCountType $guestCounts = null, $rPH = null)
    {
        $this
            ->setGuestCounts($guestCounts)
            ->setRPH($rPH);
    }
    /**
     * Get GuestCounts value
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestCountType|null
     */
    public function getGuestCounts()
    {
        return $this->GuestCounts;
    }
    /**
     * Set GuestCounts value
     * @param \Devlabs91\TravelgatePushApi\StructType\GuestCountType $guestCounts
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStayCandidateType
     */
    public function setGuestCounts(\Devlabs91\TravelgatePushApi\StructType\GuestCountType $guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStayCandidateType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStayCandidateType
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
