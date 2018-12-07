<?php

namespace StructType;

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
     * @var \StructType\TotalType
     */
    public $Base;
    /**
     * The AdditionalGuestAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalGuestAmounts
     */
    public $AdditionalGuestAmounts;
    /**
     * The CancelPolicies
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CancelPenaltiesType
     */
    public $CancelPolicies;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Discount[]
     */
    public $Discount;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TotalType
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
     * @param \StructType\TotalType $base
     * @param \StructType\AdditionalGuestAmounts $additionalGuestAmounts
     * @param \StructType\CancelPenaltiesType $cancelPolicies
     * @param \StructType\Discount[] $discount
     * @param \StructType\TotalType $total
     * @param string $effectiveDate
     * @param string $expireDate
     */
    public function __construct(\StructType\TotalType $base = null, \StructType\AdditionalGuestAmounts $additionalGuestAmounts = null, \StructType\CancelPenaltiesType $cancelPolicies = null, array $discount = array(), \StructType\TotalType $total = null, $effectiveDate = null, $expireDate = null)
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
     * @return \StructType\TotalType|null
     */
    public function getBase()
    {
        return $this->Base;
    }
    /**
     * Set Base value
     * @param \StructType\TotalType $base
     * @return \StructType\AmountType
     */
    public function setBase(\StructType\TotalType $base = null)
    {
        $this->Base = $base;
        return $this;
    }
    /**
     * Get AdditionalGuestAmounts value
     * @return \StructType\AdditionalGuestAmounts|null
     */
    public function getAdditionalGuestAmounts()
    {
        return $this->AdditionalGuestAmounts;
    }
    /**
     * Set AdditionalGuestAmounts value
     * @param \StructType\AdditionalGuestAmounts $additionalGuestAmounts
     * @return \StructType\AmountType
     */
    public function setAdditionalGuestAmounts(\StructType\AdditionalGuestAmounts $additionalGuestAmounts = null)
    {
        $this->AdditionalGuestAmounts = $additionalGuestAmounts;
        return $this;
    }
    /**
     * Get CancelPolicies value
     * @return \StructType\CancelPenaltiesType|null
     */
    public function getCancelPolicies()
    {
        return $this->CancelPolicies;
    }
    /**
     * Set CancelPolicies value
     * @param \StructType\CancelPenaltiesType $cancelPolicies
     * @return \StructType\AmountType
     */
    public function setCancelPolicies(\StructType\CancelPenaltiesType $cancelPolicies = null)
    {
        $this->CancelPolicies = $cancelPolicies;
        return $this;
    }
    /**
     * Get Discount value
     * @return \StructType\Discount[]|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @throws \InvalidArgumentException
     * @param \StructType\Discount[] $discount
     * @return \StructType\AmountType
     */
    public function setDiscount(array $discount = array())
    {
        foreach ($discount as $amountTypeDiscountItem) {
            // validation for constraint: itemType
            if (!$amountTypeDiscountItem instanceof \StructType\Discount) {
                throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \StructType\Discount, "%s" given', is_object($amountTypeDiscountItem) ? get_class($amountTypeDiscountItem) : gettype($amountTypeDiscountItem)), __LINE__);
            }
        }
        $this->Discount = $discount;
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws \InvalidArgumentException
     * @param \StructType\Discount $item
     * @return \StructType\AmountType
     */
    public function addToDiscount(\StructType\Discount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Discount) {
            throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \StructType\Discount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Discount[] = $item;
        return $this;
    }
    /**
     * Get Total value
     * @return \StructType\TotalType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \StructType\TotalType $total
     * @return \StructType\AmountType
     */
    public function setTotal(\StructType\TotalType $total = null)
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
     * @return \StructType\AmountType
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
     * @return \StructType\AmountType
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
     * @return \StructType\AmountType
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
