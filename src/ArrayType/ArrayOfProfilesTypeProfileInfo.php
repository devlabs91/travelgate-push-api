<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProfilesTypeProfileInfo ArrayType
 * @subpackage Arrays
 */
class ArrayOfProfilesTypeProfileInfo extends AbstractStructArrayBase
{
    /**
     * The ProfileInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ProfileInfo[]
     */
    public $ProfileInfo;
    /**
     * Constructor method for ArrayOfProfilesTypeProfileInfo
     * @uses ArrayOfProfilesTypeProfileInfo::setProfileInfo()
     * @param \StructType\ProfileInfo[] $profileInfo
     */
    public function __construct(array $profileInfo = array())
    {
        $this
            ->setProfileInfo($profileInfo);
    }
    /**
     * Get ProfileInfo value
     * @return \StructType\ProfileInfo[]|null
     */
    public function getProfileInfo()
    {
        return $this->ProfileInfo;
    }
    /**
     * Set ProfileInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\ProfileInfo[] $profileInfo
     * @return \ArrayType\ArrayOfProfilesTypeProfileInfo
     */
    public function setProfileInfo(array $profileInfo = array())
    {
        foreach ($profileInfo as $arrayOfProfilesTypeProfileInfoProfileInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfProfilesTypeProfileInfoProfileInfoItem instanceof \StructType\ProfileInfo) {
                throw new \InvalidArgumentException(sprintf('The ProfileInfo property can only contain items of \StructType\ProfileInfo, "%s" given', is_object($arrayOfProfilesTypeProfileInfoProfileInfoItem) ? get_class($arrayOfProfilesTypeProfileInfoProfileInfoItem) : gettype($arrayOfProfilesTypeProfileInfoProfileInfoItem)), __LINE__);
            }
        }
        $this->ProfileInfo = $profileInfo;
        return $this;
    }
    /**
     * Add item to ProfileInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\ProfileInfo $item
     * @return \ArrayType\ArrayOfProfilesTypeProfileInfo
     */
    public function addToProfileInfo(\StructType\ProfileInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ProfileInfo) {
            throw new \InvalidArgumentException(sprintf('The ProfileInfo property can only contain items of \StructType\ProfileInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProfileInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ProfileInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ProfileInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ProfileInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ProfileInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ProfileInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProfileInfo
     */
    public function getAttributeName()
    {
        return 'ProfileInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfProfilesTypeProfileInfo
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
