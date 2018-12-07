<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImageDescriptionType StructType
 * @subpackage Structs
 */
class ImageDescriptionType extends AbstractStructBase
{
    /**
     * The ImageFormat
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ImageFormat[]
     */
    public $ImageFormat;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Description[]
     */
    public $Description;
    /**
     * The Category
     * @var string
     */
    public $Category;
    /**
     * Constructor method for ImageDescriptionType
     * @uses ImageDescriptionType::setImageFormat()
     * @uses ImageDescriptionType::setDescription()
     * @uses ImageDescriptionType::setCategory()
     * @param \StructType\ImageFormat[] $imageFormat
     * @param \StructType\Description[] $description
     * @param string $category
     */
    public function __construct(array $imageFormat = array(), array $description = array(), $category = null)
    {
        $this
            ->setImageFormat($imageFormat)
            ->setDescription($description)
            ->setCategory($category);
    }
    /**
     * Get ImageFormat value
     * @return \StructType\ImageFormat[]|null
     */
    public function getImageFormat()
    {
        return $this->ImageFormat;
    }
    /**
     * Set ImageFormat value
     * @throws \InvalidArgumentException
     * @param \StructType\ImageFormat[] $imageFormat
     * @return \StructType\ImageDescriptionType
     */
    public function setImageFormat(array $imageFormat = array())
    {
        foreach ($imageFormat as $imageDescriptionTypeImageFormatItem) {
            // validation for constraint: itemType
            if (!$imageDescriptionTypeImageFormatItem instanceof \StructType\ImageFormat) {
                throw new \InvalidArgumentException(sprintf('The ImageFormat property can only contain items of \StructType\ImageFormat, "%s" given', is_object($imageDescriptionTypeImageFormatItem) ? get_class($imageDescriptionTypeImageFormatItem) : gettype($imageDescriptionTypeImageFormatItem)), __LINE__);
            }
        }
        $this->ImageFormat = $imageFormat;
        return $this;
    }
    /**
     * Add item to ImageFormat value
     * @throws \InvalidArgumentException
     * @param \StructType\ImageFormat $item
     * @return \StructType\ImageDescriptionType
     */
    public function addToImageFormat(\StructType\ImageFormat $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ImageFormat) {
            throw new \InvalidArgumentException(sprintf('The ImageFormat property can only contain items of \StructType\ImageFormat, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ImageFormat[] = $item;
        return $this;
    }
    /**
     * Get Description value
     * @return \StructType\Description[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param \StructType\Description[] $description
     * @return \StructType\ImageDescriptionType
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $imageDescriptionTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$imageDescriptionTypeDescriptionItem instanceof \StructType\Description) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \StructType\Description, "%s" given', is_object($imageDescriptionTypeDescriptionItem) ? get_class($imageDescriptionTypeDescriptionItem) : gettype($imageDescriptionTypeDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param \StructType\Description $item
     * @return \StructType\ImageDescriptionType
     */
    public function addToDescription(\StructType\Description $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Description) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \StructType\Description, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
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
     * @return \StructType\ImageDescriptionType
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
     * @return \StructType\ImageDescriptionType
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
