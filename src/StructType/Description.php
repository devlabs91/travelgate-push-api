<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Description StructType
 * @subpackage Structs
 */
class Description extends FormattedTextTextType
{
    /**
     * The _
     * @var \StructType\FormattedTextTextType
     */
    public $_;
    /**
     * The ListItem
     * @var int
     */
    public $ListItem;
    /**
     * Constructor method for Description
     * @uses Description::set_()
     * @uses Description::setListItem()
     * @param \StructType\FormattedTextTextType $_
     * @param int $listItem
     */
    public function __construct(\StructType\FormattedTextTextType $_ = null, $listItem = null)
    {
        $this
            ->set_($_)
            ->setListItem($listItem);
    }
    /**
     * Get _ value
     * @return \StructType\FormattedTextTextType|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \StructType\FormattedTextTextType $_
     * @return \StructType\Description
     */
    public function set_(\StructType\FormattedTextTextType $_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Get ListItem value
     * @return int|null
     */
    public function getListItem()
    {
        return $this->ListItem;
    }
    /**
     * Set ListItem value
     * @param int $listItem
     * @return \StructType\Description
     */
    public function setListItem($listItem = null)
    {
        // validation for constraint: int
        if (!is_null($listItem) && !is_numeric($listItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listItem)), __LINE__);
        }
        $this->ListItem = $listItem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Description
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
