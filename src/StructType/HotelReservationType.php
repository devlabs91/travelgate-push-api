<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReservationType StructType
 * @subpackage Structs
 */
class HotelReservationType extends AbstractStructBase
{
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type[]
     */
    public $UniqueID;
    /**
     * The RoomStays
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomStaysTypeRoomStay
     */
    public $RoomStays;
    /**
     * The ResGuests
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfResGuestType
     */
    public $ResGuests;
    /**
     * The ResGlobalInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ResGlobalInfoType
     */
    public $ResGlobalInfo;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType
     */
    public $TPA_Extensions;
    /**
     * The CreateDateTime
     * @var string
     */
    public $CreateDateTime;
    /**
     * The LastModifyDateTime
     * @var string
     */
    public $LastModifyDateTime;
    /**
     * The ResStatus
     * @var string
     */
    public $ResStatus;
    /**
     * Constructor method for HotelReservationType
     * @uses HotelReservationType::setUniqueID()
     * @uses HotelReservationType::setRoomStays()
     * @uses HotelReservationType::setResGuests()
     * @uses HotelReservationType::setResGlobalInfo()
     * @uses HotelReservationType::setTPA_Extensions()
     * @uses HotelReservationType::setCreateDateTime()
     * @uses HotelReservationType::setLastModifyDateTime()
     * @uses HotelReservationType::setResStatus()
     * @param \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type[] $uniqueID
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomStaysTypeRoomStay $roomStays
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfResGuestType $resGuests
     * @param \Devlabs91\TravelgatePushApi\StructType\ResGlobalInfoType $resGlobalInfo
     * @param \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions
     * @param string $createDateTime
     * @param string $lastModifyDateTime
     * @param string $resStatus
     */
    public function __construct(array $uniqueID = array(), \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomStaysTypeRoomStay $roomStays = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfResGuestType $resGuests = null, \Devlabs91\TravelgatePushApi\StructType\ResGlobalInfoType $resGlobalInfo = null, \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions = null, $createDateTime = null, $lastModifyDateTime = null, $resStatus = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setRoomStays($roomStays)
            ->setResGuests($resGuests)
            ->setResGlobalInfo($resGlobalInfo)
            ->setTPA_Extensions($tPA_Extensions)
            ->setCreateDateTime($createDateTime)
            ->setLastModifyDateTime($lastModifyDateTime)
            ->setResStatus($resStatus);
    }
    /**
     * Get UniqueID value
     * @return \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type[]|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type[] $uniqueID
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationType
     */
    public function setUniqueID(array $uniqueID = array())
    {
        foreach ($uniqueID as $hotelReservationTypeUniqueIDItem) {
            // validation for constraint: itemType
            if (!$hotelReservationTypeUniqueIDItem instanceof \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type) {
                throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type, "%s" given', is_object($hotelReservationTypeUniqueIDItem) ? get_class($hotelReservationTypeUniqueIDItem) : gettype($hotelReservationTypeUniqueIDItem)), __LINE__);
            }
        }
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Add item to UniqueID value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type $item
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationType
     */
    public function addToUniqueID(\Devlabs91\TravelgatePushApi\StructType\UniqueID_Type $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type) {
            throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UniqueID[] = $item;
        return $this;
    }
    /**
     * Get RoomStays value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomStaysTypeRoomStay|null
     */
    public function getRoomStays()
    {
        return $this->RoomStays;
    }
    /**
     * Set RoomStays value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomStaysTypeRoomStay $roomStays
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationType
     */
    public function setRoomStays(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomStaysTypeRoomStay $roomStays = null)
    {
        $this->RoomStays = $roomStays;
        return $this;
    }
    /**
     * Get ResGuests value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfResGuestType|null
     */
    public function getResGuests()
    {
        return $this->ResGuests;
    }
    /**
     * Set ResGuests value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfResGuestType $resGuests
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationType
     */
    public function setResGuests(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfResGuestType $resGuests = null)
    {
        $this->ResGuests = $resGuests;
        return $this;
    }
    /**
     * Get ResGlobalInfo value
     * @return \Devlabs91\TravelgatePushApi\StructType\ResGlobalInfoType|null
     */
    public function getResGlobalInfo()
    {
        return $this->ResGlobalInfo;
    }
    /**
     * Set ResGlobalInfo value
     * @param \Devlabs91\TravelgatePushApi\StructType\ResGlobalInfoType $resGlobalInfo
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationType
     */
    public function setResGlobalInfo(\Devlabs91\TravelgatePushApi\StructType\ResGlobalInfoType $resGlobalInfo = null)
    {
        $this->ResGlobalInfo = $resGlobalInfo;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationType
     */
    public function setTPA_Extensions(\Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get CreateDateTime value
     * @return string|null
     */
    public function getCreateDateTime()
    {
        return $this->CreateDateTime;
    }
    /**
     * Set CreateDateTime value
     * @param string $createDateTime
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationType
     */
    public function setCreateDateTime($createDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($createDateTime) && !is_string($createDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDateTime)), __LINE__);
        }
        $this->CreateDateTime = $createDateTime;
        return $this;
    }
    /**
     * Get LastModifyDateTime value
     * @return string|null
     */
    public function getLastModifyDateTime()
    {
        return $this->LastModifyDateTime;
    }
    /**
     * Set LastModifyDateTime value
     * @param string $lastModifyDateTime
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationType
     */
    public function setLastModifyDateTime($lastModifyDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifyDateTime) && !is_string($lastModifyDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModifyDateTime)), __LINE__);
        }
        $this->LastModifyDateTime = $lastModifyDateTime;
        return $this;
    }
    /**
     * Get ResStatus value
     * @return string|null
     */
    public function getResStatus()
    {
        return $this->ResStatus;
    }
    /**
     * Set ResStatus value
     * @param string $resStatus
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationType
     */
    public function setResStatus($resStatus = null)
    {
        // validation for constraint: string
        if (!is_null($resStatus) && !is_string($resStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resStatus)), __LINE__);
        }
        $this->ResStatus = $resStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationType
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
