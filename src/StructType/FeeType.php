<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeType StructType
 * @subpackage Structs
 */
class FeeType extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ParagraphType[]
     */
    public $Description;
    /**
     * The Taxes
     * @var string
     */
    public $Taxes;
    /**
     * Constructor method for FeeType
     * @uses FeeType::setDescription()
     * @uses FeeType::setTaxes()
     * @param \StructType\ParagraphType[] $description
     * @param string $taxes
     */
    public function __construct(array $description = array(), $taxes = null)
    {
        $this
            ->setDescription($description)
            ->setTaxes($taxes);
    }
    /**
     * Get Description value
     * @return \StructType\ParagraphType[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param \StructType\ParagraphType[] $description
     * @return \StructType\FeeType
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $feeTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$feeTypeDescriptionItem instanceof \StructType\ParagraphType) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \StructType\ParagraphType, "%s" given', is_object($feeTypeDescriptionItem) ? get_class($feeTypeDescriptionItem) : gettype($feeTypeDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param \StructType\ParagraphType $item
     * @return \StructType\FeeType
     */
    public function addToDescription(\StructType\ParagraphType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ParagraphType) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \StructType\ParagraphType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get Taxes value
     * @return string|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param string $taxes
     * @return \StructType\FeeType
     */
    public function setTaxes($taxes = null)
    {
        // validation for constraint: string
        if (!is_null($taxes) && !is_string($taxes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxes)), __LINE__);
        }
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FeeType
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
