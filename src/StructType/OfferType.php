<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferType StructType
 * @subpackage Structs
 */
class OfferType extends AbstractStructBase
{
    /**
     * The OfferRules
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRule
     */
    public $OfferRules;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Discount
     */
    public $Discount;
    /**
     * The FreeUpgrade
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\FreeUpgrade
     */
    public $FreeUpgrade;
    /**
     * The OfferDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ParagraphType
     */
    public $OfferDescription;
    /**
     * The OfferCode
     * @var string
     */
    public $OfferCode;
    /**
     * The OfferStatusType
     * @var string
     */
    public $OfferStatusType;
    /**
     * The OfferNotifType
     * @var string
     */
    public $OfferNotifType;
    /**
     * Constructor method for OfferType
     * @uses OfferType::setOfferRules()
     * @uses OfferType::setDiscount()
     * @uses OfferType::setFreeUpgrade()
     * @uses OfferType::setOfferDescription()
     * @uses OfferType::setOfferCode()
     * @uses OfferType::setOfferStatusType()
     * @uses OfferType::setOfferNotifType()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRule $offerRules
     * @param \Devlabs91\TravelgatePushApi\StructType\Discount $discount
     * @param \Devlabs91\TravelgatePushApi\StructType\FreeUpgrade $freeUpgrade
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType $offerDescription
     * @param string $offerCode
     * @param string $offerStatusType
     * @param string $offerNotifType
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRule $offerRules = null, \Devlabs91\TravelgatePushApi\StructType\Discount $discount = null, \Devlabs91\TravelgatePushApi\StructType\FreeUpgrade $freeUpgrade = null, \Devlabs91\TravelgatePushApi\StructType\ParagraphType $offerDescription = null, $offerCode = null, $offerStatusType = null, $offerNotifType = null)
    {
        $this
            ->setOfferRules($offerRules)
            ->setDiscount($discount)
            ->setFreeUpgrade($freeUpgrade)
            ->setOfferDescription($offerDescription)
            ->setOfferCode($offerCode)
            ->setOfferStatusType($offerStatusType)
            ->setOfferNotifType($offerNotifType);
    }
    /**
     * Get OfferRules value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRule|null
     */
    public function getOfferRules()
    {
        return $this->OfferRules;
    }
    /**
     * Set OfferRules value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRule $offerRules
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferType
     */
    public function setOfferRules(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRule $offerRules = null)
    {
        $this->OfferRules = $offerRules;
        return $this;
    }
    /**
     * Get Discount value
     * @return \Devlabs91\TravelgatePushApi\StructType\Discount|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @param \Devlabs91\TravelgatePushApi\StructType\Discount $discount
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferType
     */
    public function setDiscount(\Devlabs91\TravelgatePushApi\StructType\Discount $discount = null)
    {
        $this->Discount = $discount;
        return $this;
    }
    /**
     * Get FreeUpgrade value
     * @return \Devlabs91\TravelgatePushApi\StructType\FreeUpgrade|null
     */
    public function getFreeUpgrade()
    {
        return $this->FreeUpgrade;
    }
    /**
     * Set FreeUpgrade value
     * @param \Devlabs91\TravelgatePushApi\StructType\FreeUpgrade $freeUpgrade
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferType
     */
    public function setFreeUpgrade(\Devlabs91\TravelgatePushApi\StructType\FreeUpgrade $freeUpgrade = null)
    {
        $this->FreeUpgrade = $freeUpgrade;
        return $this;
    }
    /**
     * Get OfferDescription value
     * @return \Devlabs91\TravelgatePushApi\StructType\ParagraphType|null
     */
    public function getOfferDescription()
    {
        return $this->OfferDescription;
    }
    /**
     * Set OfferDescription value
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType $offerDescription
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferType
     */
    public function setOfferDescription(\Devlabs91\TravelgatePushApi\StructType\ParagraphType $offerDescription = null)
    {
        $this->OfferDescription = $offerDescription;
        return $this;
    }
    /**
     * Get OfferCode value
     * @return string|null
     */
    public function getOfferCode()
    {
        return $this->OfferCode;
    }
    /**
     * Set OfferCode value
     * @param string $offerCode
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferType
     */
    public function setOfferCode($offerCode = null)
    {
        // validation for constraint: string
        if (!is_null($offerCode) && !is_string($offerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerCode)), __LINE__);
        }
        $this->OfferCode = $offerCode;
        return $this;
    }
    /**
     * Get OfferStatusType value
     * @return string|null
     */
    public function getOfferStatusType()
    {
        return $this->OfferStatusType;
    }
    /**
     * Set OfferStatusType value
     * @param string $offerStatusType
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferType
     */
    public function setOfferStatusType($offerStatusType = null)
    {
        // validation for constraint: string
        if (!is_null($offerStatusType) && !is_string($offerStatusType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerStatusType)), __LINE__);
        }
        $this->OfferStatusType = $offerStatusType;
        return $this;
    }
    /**
     * Get OfferNotifType value
     * @return string|null
     */
    public function getOfferNotifType()
    {
        return $this->OfferNotifType;
    }
    /**
     * Set OfferNotifType value
     * @param string $offerNotifType
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferType
     */
    public function setOfferNotifType($offerNotifType = null)
    {
        // validation for constraint: string
        if (!is_null($offerNotifType) && !is_string($offerNotifType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerNotifType)), __LINE__);
        }
        $this->OfferNotifType = $offerNotifType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferType
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
