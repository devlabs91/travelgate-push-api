<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellableProduct StructType
 * @subpackage Structs
 */
class SellableProduct extends AbstractStructBase
{
    /**
     * The GuestRoom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\GuestRoomType
     */
    public $GuestRoom;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ParagraphType
     */
    public $Description;
    /**
     * The InvCode
     * @var string
     */
    public $InvCode;
    /**
     * The InvType
     * @var string
     */
    public $InvType;
    /**
     * The InvNotifType
     * @var string
     */
    public $InvNotifType;
    /**
     * The InvStatusType
     * @var string
     */
    public $InvStatusType;
    /**
     * The InvTypeCode
     * @var string
     */
    public $InvTypeCode;
    /**
     * Constructor method for SellableProduct
     * @uses SellableProduct::setGuestRoom()
     * @uses SellableProduct::setDescription()
     * @uses SellableProduct::setInvCode()
     * @uses SellableProduct::setInvType()
     * @uses SellableProduct::setInvNotifType()
     * @uses SellableProduct::setInvStatusType()
     * @uses SellableProduct::setInvTypeCode()
     * @param \Devlabs91\TravelgatePushApi\StructType\GuestRoomType $guestRoom
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType $description
     * @param string $invCode
     * @param string $invType
     * @param string $invNotifType
     * @param string $invStatusType
     * @param string $invTypeCode
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\GuestRoomType $guestRoom = null, \Devlabs91\TravelgatePushApi\StructType\ParagraphType $description = null, $invCode = null, $invType = null, $invNotifType = null, $invStatusType = null, $invTypeCode = null)
    {
        $this
            ->setGuestRoom($guestRoom)
            ->setDescription($description)
            ->setInvCode($invCode)
            ->setInvType($invType)
            ->setInvNotifType($invNotifType)
            ->setInvStatusType($invStatusType)
            ->setInvTypeCode($invTypeCode);
    }
    /**
     * Get GuestRoom value
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoomType|null
     */
    public function getGuestRoom()
    {
        return $this->GuestRoom;
    }
    /**
     * Set GuestRoom value
     * @param \Devlabs91\TravelgatePushApi\StructType\GuestRoomType $guestRoom
     * @return \Devlabs91\TravelgatePushApi\StructType\SellableProduct
     */
    public function setGuestRoom(\Devlabs91\TravelgatePushApi\StructType\GuestRoomType $guestRoom = null)
    {
        $this->GuestRoom = $guestRoom;
        return $this;
    }
    /**
     * Get Description value
     * @return \Devlabs91\TravelgatePushApi\StructType\ParagraphType|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType $description
     * @return \Devlabs91\TravelgatePushApi\StructType\SellableProduct
     */
    public function setDescription(\Devlabs91\TravelgatePushApi\StructType\ParagraphType $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get InvCode value
     * @return string|null
     */
    public function getInvCode()
    {
        return $this->InvCode;
    }
    /**
     * Set InvCode value
     * @param string $invCode
     * @return \Devlabs91\TravelgatePushApi\StructType\SellableProduct
     */
    public function setInvCode($invCode = null)
    {
        // validation for constraint: string
        if (!is_null($invCode) && !is_string($invCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invCode)), __LINE__);
        }
        $this->InvCode = $invCode;
        return $this;
    }
    /**
     * Get InvType value
     * @return string|null
     */
    public function getInvType()
    {
        return $this->InvType;
    }
    /**
     * Set InvType value
     * @param string $invType
     * @return \Devlabs91\TravelgatePushApi\StructType\SellableProduct
     */
    public function setInvType($invType = null)
    {
        // validation for constraint: string
        if (!is_null($invType) && !is_string($invType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invType)), __LINE__);
        }
        $this->InvType = $invType;
        return $this;
    }
    /**
     * Get InvNotifType value
     * @return string|null
     */
    public function getInvNotifType()
    {
        return $this->InvNotifType;
    }
    /**
     * Set InvNotifType value
     * @param string $invNotifType
     * @return \Devlabs91\TravelgatePushApi\StructType\SellableProduct
     */
    public function setInvNotifType($invNotifType = null)
    {
        // validation for constraint: string
        if (!is_null($invNotifType) && !is_string($invNotifType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invNotifType)), __LINE__);
        }
        $this->InvNotifType = $invNotifType;
        return $this;
    }
    /**
     * Get InvStatusType value
     * @return string|null
     */
    public function getInvStatusType()
    {
        return $this->InvStatusType;
    }
    /**
     * Set InvStatusType value
     * @param string $invStatusType
     * @return \Devlabs91\TravelgatePushApi\StructType\SellableProduct
     */
    public function setInvStatusType($invStatusType = null)
    {
        // validation for constraint: string
        if (!is_null($invStatusType) && !is_string($invStatusType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invStatusType)), __LINE__);
        }
        $this->InvStatusType = $invStatusType;
        return $this;
    }
    /**
     * Get InvTypeCode value
     * @return string|null
     */
    public function getInvTypeCode()
    {
        return $this->InvTypeCode;
    }
    /**
     * Set InvTypeCode value
     * @param string $invTypeCode
     * @return \Devlabs91\TravelgatePushApi\StructType\SellableProduct
     */
    public function setInvTypeCode($invTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($invTypeCode) && !is_string($invTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invTypeCode)), __LINE__);
        }
        $this->InvTypeCode = $invTypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\SellableProduct
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
