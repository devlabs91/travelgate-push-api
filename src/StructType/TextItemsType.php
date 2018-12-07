<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextItemsType StructType
 * @subpackage Structs
 */
class TextItemsType extends AbstractStructBase
{
    /**
     * The TextItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TextItem[]
     */
    public $TextItem;
    /**
     * Constructor method for TextItemsType
     * @uses TextItemsType::setTextItem()
     * @param \StructType\TextItem[] $textItem
     */
    public function __construct(array $textItem = array())
    {
        $this
            ->setTextItem($textItem);
    }
    /**
     * Get TextItem value
     * @return \StructType\TextItem[]|null
     */
    public function getTextItem()
    {
        return $this->TextItem;
    }
    /**
     * Set TextItem value
     * @throws \InvalidArgumentException
     * @param \StructType\TextItem[] $textItem
     * @return \StructType\TextItemsType
     */
    public function setTextItem(array $textItem = array())
    {
        foreach ($textItem as $textItemsTypeTextItemItem) {
            // validation for constraint: itemType
            if (!$textItemsTypeTextItemItem instanceof \StructType\TextItem) {
                throw new \InvalidArgumentException(sprintf('The TextItem property can only contain items of \StructType\TextItem, "%s" given', is_object($textItemsTypeTextItemItem) ? get_class($textItemsTypeTextItemItem) : gettype($textItemsTypeTextItemItem)), __LINE__);
            }
        }
        $this->TextItem = $textItem;
        return $this;
    }
    /**
     * Add item to TextItem value
     * @throws \InvalidArgumentException
     * @param \StructType\TextItem $item
     * @return \StructType\TextItemsType
     */
    public function addToTextItem(\StructType\TextItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TextItem) {
            throw new \InvalidArgumentException(sprintf('The TextItem property can only contain items of \StructType\TextItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TextItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TextItemsType
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
