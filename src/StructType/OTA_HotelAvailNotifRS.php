<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelAvailNotifRS StructType
 * @subpackage Structs
 */
class OTA_HotelAvailNotifRS extends AbstractStructBase
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
     * The Success
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\SuccessType
     */
    public $Success;
    /**
     * The TransactionIdentifier
     * @var string
     */
    public $TransactionIdentifier;
    /**
     * Constructor method for OTA_HotelAvailNotifRS
     * @uses OTA_HotelAvailNotifRS::setErrors()
     * @uses OTA_HotelAvailNotifRS::setSuccess()
     * @uses OTA_HotelAvailNotifRS::setTransactionIdentifier()
     * @param \Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors
     * @param \Devlabs91\TravelgatePushApi\StructType\SuccessType $success
     * @param string $transactionIdentifier
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors = null, \Devlabs91\TravelgatePushApi\StructType\SuccessType $success = null, $transactionIdentifier = null)
    {
        $this
            ->setErrors($errors)
            ->setSuccess($success)
            ->setTransactionIdentifier($transactionIdentifier);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRS
     */
    public function setErrors(\Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRS
     */
    public function setSuccess(\Devlabs91\TravelgatePushApi\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get TransactionIdentifier value
     * @return string|null
     */
    public function getTransactionIdentifier()
    {
        return $this->TransactionIdentifier;
    }
    /**
     * Set TransactionIdentifier value
     * @param string $transactionIdentifier
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRS
     */
    public function setTransactionIdentifier($transactionIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($transactionIdentifier) && !is_string($transactionIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionIdentifier)), __LINE__);
        }
        $this->TransactionIdentifier = $transactionIdentifier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRS
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
