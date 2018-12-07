<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelAvailRS StructType
 * @subpackage Structs
 */
class OTA_HotelAvailRS extends AbstractStructBase
{
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ErrorsType
     */
    public $Errors;
    /**
     * The RoomStays
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RoomStays
     */
    public $RoomStays;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SuccessType
     */
    public $Success;
    /**
     * Constructor method for OTA_HotelAvailRS
     * @uses OTA_HotelAvailRS::setErrors()
     * @uses OTA_HotelAvailRS::setRoomStays()
     * @uses OTA_HotelAvailRS::setSuccess()
     * @param \StructType\ErrorsType $errors
     * @param \StructType\RoomStays $roomStays
     * @param \StructType\SuccessType $success
     */
    public function __construct(\StructType\ErrorsType $errors = null, \StructType\RoomStays $roomStays = null, \StructType\SuccessType $success = null)
    {
        $this
            ->setErrors($errors)
            ->setRoomStays($roomStays)
            ->setSuccess($success);
    }
    /**
     * Get Errors value
     * @return \StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \StructType\ErrorsType $errors
     * @return \StructType\OTA_HotelAvailRS
     */
    public function setErrors(\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get RoomStays value
     * @return \StructType\RoomStays|null
     */
    public function getRoomStays()
    {
        return $this->RoomStays;
    }
    /**
     * Set RoomStays value
     * @param \StructType\RoomStays $roomStays
     * @return \StructType\OTA_HotelAvailRS
     */
    public function setRoomStays(\StructType\RoomStays $roomStays = null)
    {
        $this->RoomStays = $roomStays;
        return $this;
    }
    /**
     * Get Success value
     * @return \StructType\SuccessType|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param \StructType\SuccessType $success
     * @return \StructType\OTA_HotelAvailRS
     */
    public function setSuccess(\StructType\SuccessType $success = null)
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
     * @return \StructType\OTA_HotelAvailRS
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
