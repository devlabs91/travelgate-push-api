<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelResRS StructType
 * @subpackage Structs
 */
class OTA_HotelResRS extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfSourceType
     */
    public $POS;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ErrorsType
     */
    public $Errors;
    /**
     * The HotelReservations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\HotelReservationsType
     */
    public $HotelReservations;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SuccessType
     */
    public $Success;
    /**
     * The EchoToken
     * @var string
     */
    public $EchoToken;
    /**
     * The TimeStamp
     * @var string
     */
    public $TimeStamp;
    /**
     * The ResResponseType
     * @var string
     */
    public $ResResponseType;
    /**
     * Constructor method for OTA_HotelResRS
     * @uses OTA_HotelResRS::setPOS()
     * @uses OTA_HotelResRS::setErrors()
     * @uses OTA_HotelResRS::setHotelReservations()
     * @uses OTA_HotelResRS::setSuccess()
     * @uses OTA_HotelResRS::setEchoToken()
     * @uses OTA_HotelResRS::setTimeStamp()
     * @uses OTA_HotelResRS::setResResponseType()
     * @param \ArrayType\ArrayOfSourceType $pOS
     * @param \StructType\ErrorsType $errors
     * @param \StructType\HotelReservationsType $hotelReservations
     * @param \StructType\SuccessType $success
     * @param string $echoToken
     * @param string $timeStamp
     * @param string $resResponseType
     */
    public function __construct(\ArrayType\ArrayOfSourceType $pOS = null, \StructType\ErrorsType $errors = null, \StructType\HotelReservationsType $hotelReservations = null, \StructType\SuccessType $success = null, $echoToken = null, $timeStamp = null, $resResponseType = null)
    {
        $this
            ->setPOS($pOS)
            ->setErrors($errors)
            ->setHotelReservations($hotelReservations)
            ->setSuccess($success)
            ->setEchoToken($echoToken)
            ->setTimeStamp($timeStamp)
            ->setResResponseType($resResponseType);
    }
    /**
     * Get POS value
     * @return \ArrayType\ArrayOfSourceType|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \ArrayType\ArrayOfSourceType $pOS
     * @return \StructType\OTA_HotelResRS
     */
    public function setPOS(\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
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
     * @return \StructType\OTA_HotelResRS
     */
    public function setErrors(\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get HotelReservations value
     * @return \StructType\HotelReservationsType|null
     */
    public function getHotelReservations()
    {
        return $this->HotelReservations;
    }
    /**
     * Set HotelReservations value
     * @param \StructType\HotelReservationsType $hotelReservations
     * @return \StructType\OTA_HotelResRS
     */
    public function setHotelReservations(\StructType\HotelReservationsType $hotelReservations = null)
    {
        $this->HotelReservations = $hotelReservations;
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
     * @return \StructType\OTA_HotelResRS
     */
    public function setSuccess(\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get EchoToken value
     * @return string|null
     */
    public function getEchoToken()
    {
        return $this->EchoToken;
    }
    /**
     * Set EchoToken value
     * @param string $echoToken
     * @return \StructType\OTA_HotelResRS
     */
    public function setEchoToken($echoToken = null)
    {
        // validation for constraint: string
        if (!is_null($echoToken) && !is_string($echoToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($echoToken)), __LINE__);
        }
        $this->EchoToken = $echoToken;
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
     * @return \StructType\OTA_HotelResRS
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
     * Get ResResponseType value
     * @return string|null
     */
    public function getResResponseType()
    {
        return $this->ResResponseType;
    }
    /**
     * Set ResResponseType value
     * @uses \EnumType\TransactionStatusType::valueIsValid()
     * @uses \EnumType\TransactionStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $resResponseType
     * @return \StructType\OTA_HotelResRS
     */
    public function setResResponseType($resResponseType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionStatusType::valueIsValid($resResponseType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $resResponseType, implode(', ', \EnumType\TransactionStatusType::getValidValues())), __LINE__);
        }
        $this->ResResponseType = $resResponseType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OTA_HotelResRS
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
