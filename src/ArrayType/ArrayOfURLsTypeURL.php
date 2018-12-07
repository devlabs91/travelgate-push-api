<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfURLsTypeURL ArrayType
 * @subpackage Arrays
 */
class ArrayOfURLsTypeURL extends AbstractStructArrayBase
{
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\URL[]
     */
    public $URL;
    /**
     * Constructor method for ArrayOfURLsTypeURL
     * @uses ArrayOfURLsTypeURL::setURL()
     * @param \StructType\URL[] $uRL
     */
    public function __construct(array $uRL = array())
    {
        $this
            ->setURL($uRL);
    }
    /**
     * Get URL value
     * @return \StructType\URL[]|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @throws \InvalidArgumentException
     * @param \StructType\URL[] $uRL
     * @return \ArrayType\ArrayOfURLsTypeURL
     */
    public function setURL(array $uRL = array())
    {
        foreach ($uRL as $arrayOfURLsTypeURLURLItem) {
            // validation for constraint: itemType
            if (!$arrayOfURLsTypeURLURLItem instanceof \StructType\URL) {
                throw new \InvalidArgumentException(sprintf('The URL property can only contain items of \StructType\URL, "%s" given', is_object($arrayOfURLsTypeURLURLItem) ? get_class($arrayOfURLsTypeURLURLItem) : gettype($arrayOfURLsTypeURLURLItem)), __LINE__);
            }
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Add item to URL value
     * @throws \InvalidArgumentException
     * @param \StructType\URL $item
     * @return \ArrayType\ArrayOfURLsTypeURL
     */
    public function addToURL(\StructType\URL $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\URL) {
            throw new \InvalidArgumentException(sprintf('The URL property can only contain items of \StructType\URL, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->URL[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\URL|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\URL|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\URL|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\URL|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\URL|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string URL
     */
    public function getAttributeName()
    {
        return 'URL';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfURLsTypeURL
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
