<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxesType StructType
 * @subpackage Structs
 */
class TaxesType extends AbstractStructBase
{
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TaxType[]
     */
    public $Tax;
    /**
     * Constructor method for TaxesType
     * @uses TaxesType::setTax()
     * @param \Devlabs91\TravelgatePushApi\StructType\TaxType[] $tax
     */
    public function __construct(array $tax = array())
    {
        $this
            ->setTax($tax);
    }
    /**
     * Get Tax value
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxType[]|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\TaxType[] $tax
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxesType
     */
    public function setTax(array $tax = array())
    {
        foreach ($tax as $taxesTypeTaxItem) {
            // validation for constraint: itemType
            if (!$taxesTypeTaxItem instanceof \Devlabs91\TravelgatePushApi\StructType\TaxType) {
                throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Devlabs91\TravelgatePushApi\StructType\TaxType, "%s" given', is_object($taxesTypeTaxItem) ? get_class($taxesTypeTaxItem) : gettype($taxesTypeTaxItem)), __LINE__);
            }
        }
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\TaxType $item
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxesType
     */
    public function addToTax(\Devlabs91\TravelgatePushApi\StructType\TaxType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\TaxType) {
            throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Devlabs91\TravelgatePushApi\StructType\TaxType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Tax[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxesType
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
