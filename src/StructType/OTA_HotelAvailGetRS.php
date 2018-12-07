<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelAvailGetRS StructType
 * @subpackage Structs
 */
class OTA_HotelAvailGetRS extends AbstractStructBase
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
     * The Success
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SuccessType
     */
    public $Success;
    /**
     * The AvailStatusMessages
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AvailStatusMessages[]
     */
    public $AvailStatusMessages;
    /**
     * Constructor method for OTA_HotelAvailGetRS
     * @uses OTA_HotelAvailGetRS::setErrors()
     * @uses OTA_HotelAvailGetRS::setSuccess()
     * @uses OTA_HotelAvailGetRS::setAvailStatusMessages()
     * @param \StructType\ErrorsType $errors
     * @param \StructType\SuccessType $success
     * @param \StructType\AvailStatusMessages[] $availStatusMessages
     */
    public function __construct(\StructType\ErrorsType $errors = null, \StructType\SuccessType $success = null, array $availStatusMessages = array())
    {
        $this
            ->setErrors($errors)
            ->setSuccess($success)
            ->setAvailStatusMessages($availStatusMessages);
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
     * @return \StructType\OTA_HotelAvailGetRS
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
     * @return \StructType\OTA_HotelAvailGetRS
     */
    public function setSuccess(\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get AvailStatusMessages value
     * @return \StructType\AvailStatusMessages[]|null
     */
    public function getAvailStatusMessages()
    {
        return $this->AvailStatusMessages;
    }
    /**
     * Set AvailStatusMessages value
     * @throws \InvalidArgumentException
     * @param \StructType\AvailStatusMessages[] $availStatusMessages
     * @return \StructType\OTA_HotelAvailGetRS
     */
    public function setAvailStatusMessages(array $availStatusMessages = array())
    {
        foreach ($availStatusMessages as $oTA_HotelAvailGetRSAvailStatusMessagesItem) {
            // validation for constraint: itemType
            if (!$oTA_HotelAvailGetRSAvailStatusMessagesItem instanceof \StructType\AvailStatusMessages) {
                throw new \InvalidArgumentException(sprintf('The AvailStatusMessages property can only contain items of \StructType\AvailStatusMessages, "%s" given', is_object($oTA_HotelAvailGetRSAvailStatusMessagesItem) ? get_class($oTA_HotelAvailGetRSAvailStatusMessagesItem) : gettype($oTA_HotelAvailGetRSAvailStatusMessagesItem)), __LINE__);
            }
        }
        $this->AvailStatusMessages = $availStatusMessages;
        return $this;
    }
    /**
     * Add item to AvailStatusMessages value
     * @throws \InvalidArgumentException
     * @param \StructType\AvailStatusMessages $item
     * @return \StructType\OTA_HotelAvailGetRS
     */
    public function addToAvailStatusMessages(\StructType\AvailStatusMessages $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AvailStatusMessages) {
            throw new \InvalidArgumentException(sprintf('The AvailStatusMessages property can only contain items of \StructType\AvailStatusMessages, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailStatusMessages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OTA_HotelAvailGetRS
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
