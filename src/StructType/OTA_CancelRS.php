<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_CancelRS StructType
 * @subpackage Structs
 */
class OTA_CancelRS extends AbstractStructBase
{
    /**
     * The CancelInfoRS
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CancelInfoRSType
     */
    public $CancelInfoRS;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ErrorsType
     */
    public $Errors;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SuccessType
     */
    public $Success;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\UniqueID_Type
     */
    public $UniqueID;
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
     * The TransactionStatusCode
     * @var string
     */
    public $TransactionStatusCode;
    /**
     * Constructor method for OTA_CancelRS
     * @uses OTA_CancelRS::setCancelInfoRS()
     * @uses OTA_CancelRS::setErrors()
     * @uses OTA_CancelRS::setSuccess()
     * @uses OTA_CancelRS::setUniqueID()
     * @uses OTA_CancelRS::setEchoToken()
     * @uses OTA_CancelRS::setTimeStamp()
     * @uses OTA_CancelRS::setTransactionStatusCode()
     * @param \StructType\CancelInfoRSType $cancelInfoRS
     * @param \StructType\ErrorsType $errors
     * @param \StructType\SuccessType $success
     * @param \StructType\UniqueID_Type $uniqueID
     * @param string $echoToken
     * @param string $timeStamp
     * @param string $transactionStatusCode
     */
    public function __construct(\StructType\CancelInfoRSType $cancelInfoRS = null, \StructType\ErrorsType $errors = null, \StructType\SuccessType $success = null, \StructType\UniqueID_Type $uniqueID = null, $echoToken = null, $timeStamp = null, $transactionStatusCode = null)
    {
        $this
            ->setCancelInfoRS($cancelInfoRS)
            ->setErrors($errors)
            ->setSuccess($success)
            ->setUniqueID($uniqueID)
            ->setEchoToken($echoToken)
            ->setTimeStamp($timeStamp)
            ->setTransactionStatusCode($transactionStatusCode);
    }
    /**
     * Get CancelInfoRS value
     * @return \StructType\CancelInfoRSType|null
     */
    public function getCancelInfoRS()
    {
        return $this->CancelInfoRS;
    }
    /**
     * Set CancelInfoRS value
     * @param \StructType\CancelInfoRSType $cancelInfoRS
     * @return \StructType\OTA_CancelRS
     */
    public function setCancelInfoRS(\StructType\CancelInfoRSType $cancelInfoRS = null)
    {
        $this->CancelInfoRS = $cancelInfoRS;
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
     * @return \StructType\OTA_CancelRS
     */
    public function setErrors(\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
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
     * @return \StructType\OTA_CancelRS
     */
    public function setSuccess(\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return \StructType\UniqueID_Type|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param \StructType\UniqueID_Type $uniqueID
     * @return \StructType\OTA_CancelRS
     */
    public function setUniqueID(\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
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
     * @return \StructType\OTA_CancelRS
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
     * @return \StructType\OTA_CancelRS
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
     * Get TransactionStatusCode value
     * @return string|null
     */
    public function getTransactionStatusCode()
    {
        return $this->TransactionStatusCode;
    }
    /**
     * Set TransactionStatusCode value
     * @param string $transactionStatusCode
     * @return \StructType\OTA_CancelRS
     */
    public function setTransactionStatusCode($transactionStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($transactionStatusCode) && !is_string($transactionStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionStatusCode)), __LINE__);
        }
        $this->TransactionStatusCode = $transactionStatusCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OTA_CancelRS
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
