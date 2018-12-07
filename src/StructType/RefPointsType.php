<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefPointsType StructType
 * @subpackage Structs
 */
class RefPointsType extends AbstractStructBase
{
    /**
     * The RefPoint
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RefPoint[]
     */
    public $RefPoint;
    /**
     * Constructor method for RefPointsType
     * @uses RefPointsType::setRefPoint()
     * @param \StructType\RefPoint[] $refPoint
     */
    public function __construct(array $refPoint = array())
    {
        $this
            ->setRefPoint($refPoint);
    }
    /**
     * Get RefPoint value
     * @return \StructType\RefPoint[]|null
     */
    public function getRefPoint()
    {
        return $this->RefPoint;
    }
    /**
     * Set RefPoint value
     * @throws \InvalidArgumentException
     * @param \StructType\RefPoint[] $refPoint
     * @return \StructType\RefPointsType
     */
    public function setRefPoint(array $refPoint = array())
    {
        foreach ($refPoint as $refPointsTypeRefPointItem) {
            // validation for constraint: itemType
            if (!$refPointsTypeRefPointItem instanceof \StructType\RefPoint) {
                throw new \InvalidArgumentException(sprintf('The RefPoint property can only contain items of \StructType\RefPoint, "%s" given', is_object($refPointsTypeRefPointItem) ? get_class($refPointsTypeRefPointItem) : gettype($refPointsTypeRefPointItem)), __LINE__);
            }
        }
        $this->RefPoint = $refPoint;
        return $this;
    }
    /**
     * Add item to RefPoint value
     * @throws \InvalidArgumentException
     * @param \StructType\RefPoint $item
     * @return \StructType\RefPointsType
     */
    public function addToRefPoint(\StructType\RefPoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RefPoint) {
            throw new \InvalidArgumentException(sprintf('The RefPoint property can only contain items of \StructType\RefPoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RefPoint[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RefPointsType
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
