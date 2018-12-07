<?php

namespace Devlabs91\TravelgatePushApi\StructType;

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
     * @var \Devlabs91\TravelgatePushApi\StructType\ParagraphType[]
     */
    public $Description;
    /**
     * Constructor method for Feature
     * @uses Feature::setDescription()
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType[] $description
     */
    public function __construct(array $description = array())
    {
        $this
            ->setDescription($description);
    }
    /**
     * Get Description value
     * @return \Devlabs91\TravelgatePushApi\StructType\ParagraphType[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType[] $description
     * @return \Devlabs91\TravelgatePushApi\StructType\Feature
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $featureDescriptionItem) {
            // validation for constraint: itemType
            if (!$featureDescriptionItem instanceof \Devlabs91\TravelgatePushApi\StructType\ParagraphType) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Devlabs91\TravelgatePushApi\StructType\ParagraphType, "%s" given', is_object($featureDescriptionItem) ? get_class($featureDescriptionItem) : gettype($featureDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType $item
     * @return \Devlabs91\TravelgatePushApi\StructType\Feature
     */
    public function addToDescription(\Devlabs91\TravelgatePushApi\StructType\ParagraphType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\ParagraphType) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Devlabs91\TravelgatePushApi\StructType\ParagraphType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\Feature
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
