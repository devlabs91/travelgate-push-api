<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultimediaDescriptionType StructType
 * @subpackage Structs
 */
class MultimediaDescriptionType extends AbstractStructBase
{
    /**
     * The ImageItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ImageItemsType
     */
    public $ImageItems;
    /**
     * The TextItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TextItemsType
     */
    public $TextItems;
    /**
     * Constructor method for MultimediaDescriptionType
     * @uses MultimediaDescriptionType::setImageItems()
     * @uses MultimediaDescriptionType::setTextItems()
     * @param \StructType\ImageItemsType $imageItems
     * @param \StructType\TextItemsType $textItems
     */
    public function __construct(\StructType\ImageItemsType $imageItems = null, \StructType\TextItemsType $textItems = null)
    {
        $this
            ->setImageItems($imageItems)
            ->setTextItems($textItems);
    }
    /**
     * Get ImageItems value
     * @return \StructType\ImageItemsType|null
     */
    public function getImageItems()
    {
        return $this->ImageItems;
    }
    /**
     * Set ImageItems value
     * @param \StructType\ImageItemsType $imageItems
     * @return \StructType\MultimediaDescriptionType
     */
    public function setImageItems(\StructType\ImageItemsType $imageItems = null)
    {
        $this->ImageItems = $imageItems;
        return $this;
    }
    /**
     * Get TextItems value
     * @return \StructType\TextItemsType|null
     */
    public function getTextItems()
    {
        return $this->TextItems;
    }
    /**
     * Set TextItems value
     * @param \StructType\TextItemsType $textItems
     * @return \StructType\MultimediaDescriptionType
     */
    public function setTextItems(\StructType\TextItemsType $textItems = null)
    {
        $this->TextItems = $textItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\MultimediaDescriptionType
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
