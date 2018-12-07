<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountType StructType
 * @subpackage Structs
 */
class AmountType extends AbstractStructBase
{
    /**
     * The Base
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TotalType
     */
    public $Base;
    /**
     * The AdditionalGuestAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmounts
     */
    public $AdditionalGuestAmounts;
    /**
     * The CancelPolicies
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType
     */
    public $CancelPolicies;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Discount[]
     */
    public $Discount;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TotalType
     */
    public $Total;
    /**
     * The EffectiveDate
     * @var string
     */
    public $EffectiveDate;
    /**
     * The ExpireDate
     * @var string
     */
    public $ExpireDate;
    /**
     * Constructor method for AmountType
     * @uses AmountType::setBase()
     * @uses AmountType::setAdditionalGuestAmounts()
     * @uses AmountType::setCancelPolicies()
     * @uses AmountType::setDiscount()
     * @uses AmountType::setTotal()
     * @uses AmountType::setEffectiveDate()
     * @uses AmountType::setExpireDate()
     * @param \Devlabs91\TravelgatePushApi\StructType\TotalType $base
     * @param \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmounts $additionalGuestAmounts
     * @param \Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType $cancelPolicies
     * @param \Devlabs91\TravelgatePushApi\StructType\Discount[] $discount
     * @param \Devlabs91\TravelgatePushApi\StructType\TotalType $total
     * @param string $effectiveDate
     * @param string $expireDate
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\TotalType $base = null, \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmounts $additionalGuestAmounts = null, \Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType $cancelPolicies = null, array $discount = array(), \Devlabs91\TravelgatePushApi\StructType\TotalType $total = null, $effectiveDate = null, $expireDate = null)
    {
        $this
            ->setBase($base)
            ->setAdditionalGuestAmounts($additionalGuestAmounts)
            ->setCancelPolicies($cancelPolicies)
            ->setDiscount($discount)
            ->setTotal($total)
            ->setEffectiveDate($effectiveDate)
            ->setExpireDate($expireDate);
    }
    /**
     * Get Base value
     * @return \Devlabs91\TravelgatePushApi\StructType\TotalType|null
     */
    public function getBase()
    {
        return $this->Base;
    }
    /**
     * Set Base value
     * @param \Devlabs91\TravelgatePushApi\StructType\TotalType $base
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountType
     */
    public function setBase(\Devlabs91\TravelgatePushApi\StructType\TotalType $base = null)
    {
        $this->Base = $base;
        return $this;
    }
    /**
     * Get AdditionalGuestAmounts value
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmounts|null
     */
    public function getAdditionalGuestAmounts()
    {
        return $this->AdditionalGuestAmounts;
    }
    /**
     * Set AdditionalGuestAmounts value
     * @param \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmounts $additionalGuestAmounts
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountType
     */
    public function setAdditionalGuestAmounts(\Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmounts $additionalGuestAmounts = null)
    {
        $this->AdditionalGuestAmounts = $additionalGuestAmounts;
        return $this;
    }
    /**
     * Get CancelPolicies value
     * @return \Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType|null
     */
    public function getCancelPolicies()
    {
        return $this->CancelPolicies;
    }
    /**
     * Set CancelPolicies value
     * @param \Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType $cancelPolicies
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountType
     */
    public function setCancelPolicies(\Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType $cancelPolicies = null)
    {
        $this->CancelPolicies = $cancelPolicies;
        return $this;
    }
    /**
     * Get Discount value
     * @return \Devlabs91\TravelgatePushApi\StructType\Discount[]|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Discount[] $discount
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountType
     */
    public function setDiscount(array $discount = array())
    {
        foreach ($discount as $amountTypeDiscountItem) {
            // validation for constraint: itemType
            if (!$amountTypeDiscountItem instanceof \Devlabs91\TravelgatePushApi\StructType\Discount) {
                throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Discount, "%s" given', is_object($amountTypeDiscountItem) ? get_class($amountTypeDiscountItem) : gettype($amountTypeDiscountItem)), __LINE__);
            }
        }
        $this->Discount = $discount;
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Discount $item
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountType
     */
    public function addToDiscount(\Devlabs91\TravelgatePushApi\StructType\Discount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Discount) {
            throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Discount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Discount[] = $item;
        return $this;
    }
    /**
     * Get Total value
     * @return \Devlabs91\TravelgatePushApi\StructType\TotalType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \Devlabs91\TravelgatePushApi\StructType\TotalType $total
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountType
     */
    public function setTotal(\Devlabs91\TravelgatePushApi\StructType\TotalType $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountType
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get ExpireDate value
     * @return string|null
     */
    public function getExpireDate()
    {
        return $this->ExpireDate;
    }
    /**
     * Set ExpireDate value
     * @param string $expireDate
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountType
     */
    public function setExpireDate($expireDate = null)
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDate)), __LINE__);
        }
        $this->ExpireDate = $expireDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountType
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
