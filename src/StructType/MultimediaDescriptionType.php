<?php

namespace Devlabs91\TravelgatePushApi\StructType;

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
     * @var \Devlabs91\TravelgatePushApi\StructType\ImageItemsType
     */
    public $ImageItems;
    /**
     * The TextItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TextItemsType
     */
    public $TextItems;
    /**
     * Constructor method for MultimediaDescriptionType
     * @uses MultimediaDescriptionType::setImageItems()
     * @uses MultimediaDescriptionType::setTextItems()
     * @param \Devlabs91\TravelgatePushApi\StructType\ImageItemsType $imageItems
     * @param \Devlabs91\TravelgatePushApi\StructType\TextItemsType $textItems
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\ImageItemsType $imageItems = null, \Devlabs91\TravelgatePushApi\StructType\TextItemsType $textItems = null)
    {
        $this
            ->setImageItems($imageItems)
            ->setTextItems($textItems);
    }
    /**
     * Get ImageItems value
     * @return \Devlabs91\TravelgatePushApi\StructType\ImageItemsType|null
     */
    public function getImageItems()
    {
        return $this->ImageItems;
    }
    /**
     * Set ImageItems value
     * @param \Devlabs91\TravelgatePushApi\StructType\ImageItemsType $imageItems
     * @return \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType
     */
    public function setImageItems(\Devlabs91\TravelgatePushApi\StructType\ImageItemsType $imageItems = null)
    {
        $this->ImageItems = $imageItems;
        return $this;
    }
    /**
     * Get TextItems value
     * @return \Devlabs91\TravelgatePushApi\StructType\TextItemsType|null
     */
    public function getTextItems()
    {
        return $this->TextItems;
    }
    /**
     * Set TextItems value
     * @param \Devlabs91\TravelgatePushApi\StructType\TextItemsType $textItems
     * @return \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType
     */
    public function setTextItems(\Devlabs91\TravelgatePushApi\StructType\TextItemsType $textItems = null)
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
     * @return \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType
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
