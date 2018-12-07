<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Feature StructType
 * @subpackage Structs
 */
class Feature extends AbstractStructBase
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
     * Constructor method for Feature
     * @uses Feature::setDescription()
     * @param \StructType\ParagraphType[] $description
     */
    public function __construct(array $description = array())
    {
        $this
            ->setDescription($description);
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
     * @return \StructType\Feature
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $featureDescriptionItem) {
            // validation for constraint: itemType
            if (!$featureDescriptionItem instanceof \StructType\ParagraphType) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \StructType\ParagraphType, "%s" given', is_object($featureDescriptionItem) ? get_class($featureDescriptionItem) : gettype($featureDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param \StructType\ParagraphType $item
     * @return \StructType\Feature
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Feature
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
