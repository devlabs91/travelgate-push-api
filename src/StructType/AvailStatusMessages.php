<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailStatusMessages StructType
 * @subpackage Structs
 */
class AvailStatusMessages extends AbstractStructBase
{
    /**
     * The AvailStatusMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AvailStatusMessageType[]
     */
    public $AvailStatusMessage;
    /**
     * The HotelCode
     * @var string
     */
    public $HotelCode;
    /**
     * Constructor method for AvailStatusMessages
     * @uses AvailStatusMessages::setAvailStatusMessage()
     * @uses AvailStatusMessages::setHotelCode()
     * @param \StructType\AvailStatusMessageType[] $availStatusMessage
     * @param string $hotelCode
     */
    public function __construct(array $availStatusMessage = array(), $hotelCode = null)
    {
        $this
            ->setAvailStatusMessage($availStatusMessage)
            ->setHotelCode($hotelCode);
    }
    /**
     * Get AvailStatusMessage value
     * @return \StructType\AvailStatusMessageType[]|null
     */
    public function getAvailStatusMessage()
    {
        return $this->AvailStatusMessage;
    }
    /**
     * Set AvailStatusMessage value
     * @throws \InvalidArgumentException
     * @param \StructType\AvailStatusMessageType[] $availStatusMessage
     * @return \StructType\AvailStatusMessages
     */
    public function setAvailStatusMessage(array $availStatusMessage = array())
    {
        foreach ($availStatusMessage as $availStatusMessagesAvailStatusMessageItem) {
            // validation for constraint: itemType
            if (!$availStatusMessagesAvailStatusMessageItem instanceof \StructType\AvailStatusMessageType) {
                throw new \InvalidArgumentException(sprintf('The AvailStatusMessage property can only contain items of \StructType\AvailStatusMessageType, "%s" given', is_object($availStatusMessagesAvailStatusMessageItem) ? get_class($availStatusMessagesAvailStatusMessageItem) : gettype($availStatusMessagesAvailStatusMessageItem)), __LINE__);
            }
        }
        $this->AvailStatusMessage = $availStatusMessage;
        return $this;
    }
    /**
     * Add item to AvailStatusMessage value
     * @throws \InvalidArgumentException
     * @param \StructType\AvailStatusMessageType $item
     * @return \StructType\AvailStatusMessages
     */
    public function addToAvailStatusMessage(\StructType\AvailStatusMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AvailStatusMessageType) {
            throw new \InvalidArgumentException(sprintf('The AvailStatusMessage property can only contain items of \StructType\AvailStatusMessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailStatusMessage[] = $item;
        return $this;
    }
    /**
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode()
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \StructType\AvailStatusMessages
     */
    public function setHotelCode($hotelCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AvailStatusMessages
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
