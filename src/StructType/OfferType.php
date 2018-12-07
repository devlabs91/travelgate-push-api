<?php

namespace StructType;

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
     * @var \ArrayType\ArrayOfOfferTypeOfferRule
     */
    public $OfferRules;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Discount
     */
    public $Discount;
    /**
     * The FreeUpgrade
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FreeUpgrade
     */
    public $FreeUpgrade;
    /**
     * The OfferDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ParagraphType
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
     * @param \ArrayType\ArrayOfOfferTypeOfferRule $offerRules
     * @param \StructType\Discount $discount
     * @param \StructType\FreeUpgrade $freeUpgrade
     * @param \StructType\ParagraphType $offerDescription
     * @param string $offerCode
     * @param string $offerStatusType
     * @param string $offerNotifType
     */
    public function __construct(\ArrayType\ArrayOfOfferTypeOfferRule $offerRules = null, \StructType\Discount $discount = null, \StructType\FreeUpgrade $freeUpgrade = null, \StructType\ParagraphType $offerDescription = null, $offerCode = null, $offerStatusType = null, $offerNotifType = null)
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
     * @return \ArrayType\ArrayOfOfferTypeOfferRule|null
     */
    public function getOfferRules()
    {
        return $this->OfferRules;
    }
    /**
     * Set OfferRules value
     * @param \ArrayType\ArrayOfOfferTypeOfferRule $offerRules
     * @return \StructType\OfferType
     */
    public function setOfferRules(\ArrayType\ArrayOfOfferTypeOfferRule $offerRules = null)
    {
        $this->OfferRules = $offerRules;
        return $this;
    }
    /**
     * Get Discount value
     * @return \StructType\Discount|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @param \StructType\Discount $discount
     * @return \StructType\OfferType
     */
    public function setDiscount(\StructType\Discount $discount = null)
    {
        $this->Discount = $discount;
        return $this;
    }
    /**
     * Get FreeUpgrade value
     * @return \StructType\FreeUpgrade|null
     */
    public function getFreeUpgrade()
    {
        return $this->FreeUpgrade;
    }
    /**
     * Set FreeUpgrade value
     * @param \StructType\FreeUpgrade $freeUpgrade
     * @return \StructType\OfferType
     */
    public function setFreeUpgrade(\StructType\FreeUpgrade $freeUpgrade = null)
    {
        $this->FreeUpgrade = $freeUpgrade;
        return $this;
    }
    /**
     * Get OfferDescription value
     * @return \StructType\ParagraphType|null
     */
    public function getOfferDescription()
    {
        return $this->OfferDescription;
    }
    /**
     * Set OfferDescription value
     * @param \StructType\ParagraphType $offerDescription
     * @return \StructType\OfferType
     */
    public function setOfferDescription(\StructType\ParagraphType $offerDescription = null)
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
     * @return \StructType\OfferType
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
     * @return \StructType\OfferType
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
     * @return \StructType\OfferType
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
     * @return \StructType\OfferType
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
