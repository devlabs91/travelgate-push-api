<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelResNotifRS StructType
 * @subpackage Structs
 */
class OTA_HotelResNotifRS extends AbstractStructBase
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
     * The Errors
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ErrorsType
     */
    public $Errors;
    /**
     * The HotelReservations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType
     */
    public $HotelReservations;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\SuccessType
     */
    public $Success;
    /**
     * The TimeStamp
     * @var string
     */
    public $TimeStamp;
    /**
     * Constructor method for OTA_HotelResNotifRS
     * @uses OTA_HotelResNotifRS::setPOS()
     * @uses OTA_HotelResNotifRS::setErrors()
     * @uses OTA_HotelResNotifRS::setHotelReservations()
     * @uses OTA_HotelResNotifRS::setSuccess()
     * @uses OTA_HotelResNotifRS::setTimeStamp()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS
     * @param \Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType $hotelReservations
     * @param \Devlabs91\TravelgatePushApi\StructType\SuccessType $success
     * @param string $timeStamp
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS = null, \Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors = null, \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType $hotelReservations = null, \Devlabs91\TravelgatePushApi\StructType\SuccessType $success = null, $timeStamp = null)
    {
        $this
            ->setPOS($pOS)
            ->setErrors($errors)
            ->setHotelReservations($hotelReservations)
            ->setSuccess($success)
            ->setTimeStamp($timeStamp);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResNotifRS
     */
    public function setPOS(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResNotifRS
     */
    public function setErrors(\Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get HotelReservations value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType|null
     */
    public function getHotelReservations()
    {
        return $this->HotelReservations;
    }
    /**
     * Set HotelReservations value
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType $hotelReservations
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResNotifRS
     */
    public function setHotelReservations(\Devlabs91\TravelgatePushApi\StructType\HotelReservationsType $hotelReservations = null)
    {
        $this->HotelReservations = $hotelReservations;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResNotifRS
     */
    public function setSuccess(\Devlabs91\TravelgatePushApi\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get TimeStamp value
     * @return string|null
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param string $timeStamp
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResNotifRS
     */
    public function setTimeStamp($timeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResNotifRS
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
