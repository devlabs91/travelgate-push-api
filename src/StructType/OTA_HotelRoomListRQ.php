<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelRoomListRQ StructType
 * @subpackage Structs
 */
class OTA_HotelRoomListRQ extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType
     */
    public $POS;
    /**
     * The HotelRoomLists
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRoomListType
     */
    public $HotelRoomLists;
    /**
     * The PrimaryLangID
     * @var string
     */
    public $PrimaryLangID;
    /**
     * Constructor method for OTA_HotelRoomListRQ
     * @uses OTA_HotelRoomListRQ::setPOS()
     * @uses OTA_HotelRoomListRQ::setHotelRoomLists()
     * @uses OTA_HotelRoomListRQ::setPrimaryLangID()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRoomListType $hotelRoomLists
     * @param string $primaryLangID
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRoomListType $hotelRoomLists = null, $primaryLangID = null)
    {
        $this
            ->setPOS($pOS)
            ->setHotelRoomLists($hotelRoomLists)
            ->setPrimaryLangID($primaryLangID);
    }
    /**
     * Get POS value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRQ
     */
    public function setPOS(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get HotelRoomLists value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRoomListType|null
     */
    public function getHotelRoomLists()
    {
        return $this->HotelRoomLists;
    }
    /**
     * Set HotelRoomLists value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRoomListType $hotelRoomLists
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRQ
     */
    public function setHotelRoomLists(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRoomListType $hotelRoomLists = null)
    {
        $this->HotelRoomLists = $hotelRoomLists;
        return $this;
    }
    /**
     * Get PrimaryLangID value
     * @return string|null
     */
    public function getPrimaryLangID()
    {
        return $this->PrimaryLangID;
    }
    /**
     * Set PrimaryLangID value
     * @param string $primaryLangID
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRQ
     */
    public function setPrimaryLangID($primaryLangID = null)
    {
        // validation for constraint: string
        if (!is_null($primaryLangID) && !is_string($primaryLangID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryLangID)), __LINE__);
        }
        $this->PrimaryLangID = $primaryLangID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRQ
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
