<?php

namespace StructType;

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
     * @var \StructType\ErrorsType
     */
    public $Errors;
    /**
     * The HotelRoomLists
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\HotelRoomLists
     */
    public $HotelRoomLists;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SuccessType
     */
    public $Success;
    /**
     * Constructor method for OTA_HotelRoomListRS
     * @uses OTA_HotelRoomListRS::setErrors()
     * @uses OTA_HotelRoomListRS::setHotelRoomLists()
     * @uses OTA_HotelRoomListRS::setSuccess()
     * @param \StructType\ErrorsType $errors
     * @param \StructType\HotelRoomLists $hotelRoomLists
     * @param \StructType\SuccessType $success
     */
    public function __construct(\StructType\ErrorsType $errors = null, \StructType\HotelRoomLists $hotelRoomLists = null, \StructType\SuccessType $success = null)
    {
        $this
            ->setErrors($errors)
            ->setHotelRoomLists($hotelRoomLists)
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
     * @return \StructType\OTA_HotelRoomListRS
     */
    public function setErrors(\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get HotelRoomLists value
     * @return \StructType\HotelRoomLists|null
     */
    public function getHotelRoomLists()
    {
        return $this->HotelRoomLists;
    }
    /**
     * Set HotelRoomLists value
     * @param \StructType\HotelRoomLists $hotelRoomLists
     * @return \StructType\OTA_HotelRoomListRS
     */
    public function setHotelRoomLists(\StructType\HotelRoomLists $hotelRoomLists = null)
    {
        $this->HotelRoomLists = $hotelRoomLists;
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
     * @return \StructType\OTA_HotelRoomListRS
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
     * @return \StructType\OTA_HotelRoomListRS
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
