<?php

namespace Devlabs91\TravelgatePushApi\StructType;

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
     * The AvailStatusMessages
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessages[]
     */
    public $AvailStatusMessages;
    /**
     * Constructor method for OTA_HotelAvailGetRS
     * @uses OTA_HotelAvailGetRS::setErrors()
     * @uses OTA_HotelAvailGetRS::setSuccess()
     * @uses OTA_HotelAvailGetRS::setAvailStatusMessages()
     * @param \Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors
     * @param \Devlabs91\TravelgatePushApi\StructType\SuccessType $success
     * @param \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessages[] $availStatusMessages
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors = null, \Devlabs91\TravelgatePushApi\StructType\SuccessType $success = null, array $availStatusMessages = array())
    {
        $this
            ->setErrors($errors)
            ->setSuccess($success)
            ->setAvailStatusMessages($availStatusMessages);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailGetRS
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailGetRS
     */
    public function setSuccess(\Devlabs91\TravelgatePushApi\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get AvailStatusMessages value
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessages[]|null
     */
    public function getAvailStatusMessages()
    {
        return $this->AvailStatusMessages;
    }
    /**
     * Set AvailStatusMessages value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessages[] $availStatusMessages
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailGetRS
     */
    public function setAvailStatusMessages(array $availStatusMessages = array())
    {
        foreach ($availStatusMessages as $oTA_HotelAvailGetRSAvailStatusMessagesItem) {
            // validation for constraint: itemType
            if (!$oTA_HotelAvailGetRSAvailStatusMessagesItem instanceof \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessages) {
                throw new \InvalidArgumentException(sprintf('The AvailStatusMessages property can only contain items of \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessages, "%s" given', is_object($oTA_HotelAvailGetRSAvailStatusMessagesItem) ? get_class($oTA_HotelAvailGetRSAvailStatusMessagesItem) : gettype($oTA_HotelAvailGetRSAvailStatusMessagesItem)), __LINE__);
            }
        }
        $this->AvailStatusMessages = $availStatusMessages;
        return $this;
    }
    /**
     * Add item to AvailStatusMessages value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessages $item
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailGetRS
     */
    public function addToAvailStatusMessages(\Devlabs91\TravelgatePushApi\StructType\AvailStatusMessages $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessages) {
            throw new \InvalidArgumentException(sprintf('The AvailStatusMessages property can only contain items of \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessages, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailGetRS
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
