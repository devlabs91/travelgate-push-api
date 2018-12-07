<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Descriptions StructType
 * @subpackage Structs
 */
class Descriptions extends AbstractStructBase
{
    /**
     * The Renovation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Renovation[]
     */
    public $Renovation;
    /**
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DescriptiveText;
    /**
     * Constructor method for Descriptions
     * @uses Descriptions::setRenovation()
     * @uses Descriptions::setDescriptiveText()
     * @param \StructType\Renovation[] $renovation
     * @param string $descriptiveText
     */
    public function __construct(array $renovation = array(), $descriptiveText = null)
    {
        $this
            ->setRenovation($renovation)
            ->setDescriptiveText($descriptiveText);
    }
    /**
     * Get Renovation value
     * @return \StructType\Renovation[]|null
     */
    public function getRenovation()
    {
        return $this->Renovation;
    }
    /**
     * Set Renovation value
     * @throws \InvalidArgumentException
     * @param \StructType\Renovation[] $renovation
     * @return \StructType\Descriptions
     */
    public function setRenovation(array $renovation = array())
    {
        foreach ($renovation as $descriptionsRenovationItem) {
            // validation for constraint: itemType
            if (!$descriptionsRenovationItem instanceof \StructType\Renovation) {
                throw new \InvalidArgumentException(sprintf('The Renovation property can only contain items of \StructType\Renovation, "%s" given', is_object($descriptionsRenovationItem) ? get_class($descriptionsRenovationItem) : gettype($descriptionsRenovationItem)), __LINE__);
            }
        }
        $this->Renovation = $renovation;
        return $this;
    }
    /**
     * Add item to Renovation value
     * @throws \InvalidArgumentException
     * @param \StructType\Renovation $item
     * @return \StructType\Descriptions
     */
    public function addToRenovation(\StructType\Renovation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Renovation) {
            throw new \InvalidArgumentException(sprintf('The Renovation property can only contain items of \StructType\Renovation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Renovation[] = $item;
        return $this;
    }
    /**
     * Get DescriptiveText value
     * @return string|null
     */
    public function getDescriptiveText()
    {
        return $this->DescriptiveText;
    }
    /**
     * Set DescriptiveText value
     * @param string $descriptiveText
     * @return \StructType\Descriptions
     */
    public function setDescriptiveText($descriptiveText = null)
    {
        // validation for constraint: string
        if (!is_null($descriptiveText) && !is_string($descriptiveText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptiveText)), __LINE__);
        }
        $this->DescriptiveText = $descriptiveText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Descriptions
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
