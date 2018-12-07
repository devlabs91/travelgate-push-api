<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalGuestAmounts StructType
 * @subpackage Structs
 */
class AdditionalGuestAmounts extends AbstractStructBase
{
    /**
     * The AdditionalGuestAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AdditionalGuestAmountType[]
     */
    public $AdditionalGuestAmount;
    /**
     * Constructor method for AdditionalGuestAmounts
     * @uses AdditionalGuestAmounts::setAdditionalGuestAmount()
     * @param \StructType\AdditionalGuestAmountType[] $additionalGuestAmount
     */
    public function __construct(array $additionalGuestAmount = array())
    {
        $this
            ->setAdditionalGuestAmount($additionalGuestAmount);
    }
    /**
     * Get AdditionalGuestAmount value
     * @return \StructType\AdditionalGuestAmountType[]|null
     */
    public function getAdditionalGuestAmount()
    {
        return $this->AdditionalGuestAmount;
    }
    /**
     * Set AdditionalGuestAmount value
     * @throws \InvalidArgumentException
     * @param \StructType\AdditionalGuestAmountType[] $additionalGuestAmount
     * @return \StructType\AdditionalGuestAmounts
     */
    public function setAdditionalGuestAmount(array $additionalGuestAmount = array())
    {
        foreach ($additionalGuestAmount as $additionalGuestAmountsAdditionalGuestAmountItem) {
            // validation for constraint: itemType
            if (!$additionalGuestAmountsAdditionalGuestAmountItem instanceof \StructType\AdditionalGuestAmountType) {
                throw new \InvalidArgumentException(sprintf('The AdditionalGuestAmount property can only contain items of \StructType\AdditionalGuestAmountType, "%s" given', is_object($additionalGuestAmountsAdditionalGuestAmountItem) ? get_class($additionalGuestAmountsAdditionalGuestAmountItem) : gettype($additionalGuestAmountsAdditionalGuestAmountItem)), __LINE__);
            }
        }
        $this->AdditionalGuestAmount = $additionalGuestAmount;
        return $this;
    }
    /**
     * Add item to AdditionalGuestAmount value
     * @throws \InvalidArgumentException
     * @param \StructType\AdditionalGuestAmountType $item
     * @return \StructType\AdditionalGuestAmounts
     */
    public function addToAdditionalGuestAmount(\StructType\AdditionalGuestAmountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AdditionalGuestAmountType) {
            throw new \InvalidArgumentException(sprintf('The AdditionalGuestAmount property can only contain items of \StructType\AdditionalGuestAmountType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalGuestAmount[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdditionalGuestAmounts
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
