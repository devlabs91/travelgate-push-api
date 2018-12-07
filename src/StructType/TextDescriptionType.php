<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextDescriptionType StructType
 * @subpackage Structs
 */
class TextDescriptionType extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Description
     */
    public $Description;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The Category
     * @var string
     */
    public $Category;
    /**
     * Constructor method for TextDescriptionType
     * @uses TextDescriptionType::setDescription()
     * @uses TextDescriptionType::setURL()
     * @uses TextDescriptionType::setCategory()
     * @param \StructType\Description $description
     * @param string $uRL
     * @param string $category
     */
    public function __construct(\StructType\Description $description = null, $uRL = null, $category = null)
    {
        $this
            ->setDescription($description)
            ->setURL($uRL)
            ->setCategory($category);
    }
    /**
     * Get Description value
     * @return \StructType\Description|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \StructType\Description $description
     * @return \StructType\TextDescriptionType
     */
    public function setDescription(\StructType\Description $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \StructType\TextDescriptionType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \StructType\TextDescriptionType
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TextDescriptionType
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
