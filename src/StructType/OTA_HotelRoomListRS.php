<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelRoomListRS StructType
 * @subpackage Structs
 */
class OTA_HotelRoomListRS extends AbstractStructBase
{
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ErrorsType
     */
    public $Errors;
    /**
     * The HotelRoomLists
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelRoomLists
     */
    public $HotelRoomLists;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\SuccessType
     */
    public $Success;
    /**
     * Constructor method for OTA_HotelRoomListRS
     * @uses OTA_HotelRoomListRS::setErrors()
     * @uses OTA_HotelRoomListRS::setHotelRoomLists()
     * @uses OTA_HotelRoomListRS::setSuccess()
     * @param \Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRoomLists $hotelRoomLists
     * @param \Devlabs91\TravelgatePushApi\StructType\SuccessType $success
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors = null, \Devlabs91\TravelgatePushApi\StructType\HotelRoomLists $hotelRoomLists = null, \Devlabs91\TravelgatePushApi\StructType\SuccessType $success = null)
    {
        $this
            ->setErrors($errors)
            ->setHotelRoomLists($hotelRoomLists)
            ->setSuccess($success);
    }
    /**
     * Get Errors value
     * @return \Devlabs91\TravelgatePushApi\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRS
     */
    public function setErrors(\Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get HotelRoomLists value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRoomLists|null
     */
    public function getHotelRoomLists()
    {
        return $this->HotelRoomLists;
    }
    /**
     * Set HotelRoomLists value
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRoomLists $hotelRoomLists
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRS
     */
    public function setHotelRoomLists(\Devlabs91\TravelgatePushApi\StructType\HotelRoomLists $hotelRoomLists = null)
    {
        $this->HotelRoomLists = $hotelRoomLists;
        return $this;
    }
    /**
     * Get Success value
     * @return \Devlabs91\TravelgatePushApi\StructType\SuccessType|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param \Devlabs91\TravelgatePushApi\StructType\SuccessType $success
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRS
     */
    public function setSuccess(\Devlabs91\TravelgatePushApi\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRS
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
