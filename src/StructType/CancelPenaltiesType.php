<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPenaltiesType StructType
 * @subpackage Structs
 */
class CancelPenaltiesType extends AbstractStructBase
{
    /**
     * The CancelPenalty
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CancelPenaltyType[]
     */
    public $CancelPenalty;
    /**
     * The CancelPolicyIndicator
     * @var string
     */
    public $CancelPolicyIndicator;
    /**
     * Constructor method for CancelPenaltiesType
     * @uses CancelPenaltiesType::setCancelPenalty()
     * @uses CancelPenaltiesType::setCancelPolicyIndicator()
     * @param \StructType\CancelPenaltyType[] $cancelPenalty
     * @param string $cancelPolicyIndicator
     */
    public function __construct(array $cancelPenalty = array(), $cancelPolicyIndicator = null)
    {
        $this
            ->setCancelPenalty($cancelPenalty)
            ->setCancelPolicyIndicator($cancelPolicyIndicator);
    }
    /**
     * Get CancelPenalty value
     * @return \StructType\CancelPenaltyType[]|null
     */
    public function getCancelPenalty()
    {
        return $this->CancelPenalty;
    }
    /**
     * Set CancelPenalty value
     * @throws \InvalidArgumentException
     * @param \StructType\CancelPenaltyType[] $cancelPenalty
     * @return \StructType\CancelPenaltiesType
     */
    public function setCancelPenalty(array $cancelPenalty = array())
    {
        foreach ($cancelPenalty as $cancelPenaltiesTypeCancelPenaltyItem) {
            // validation for constraint: itemType
            if (!$cancelPenaltiesTypeCancelPenaltyItem instanceof \StructType\CancelPenaltyType) {
                throw new \InvalidArgumentException(sprintf('The CancelPenalty property can only contain items of \StructType\CancelPenaltyType, "%s" given', is_object($cancelPenaltiesTypeCancelPenaltyItem) ? get_class($cancelPenaltiesTypeCancelPenaltyItem) : gettype($cancelPenaltiesTypeCancelPenaltyItem)), __LINE__);
            }
        }
        $this->CancelPenalty = $cancelPenalty;
        return $this;
    }
    /**
     * Add item to CancelPenalty value
     * @throws \InvalidArgumentException
     * @param \StructType\CancelPenaltyType $item
     * @return \StructType\CancelPenaltiesType
     */
    public function addToCancelPenalty(\StructType\CancelPenaltyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CancelPenaltyType) {
            throw new \InvalidArgumentException(sprintf('The CancelPenalty property can only contain items of \StructType\CancelPenaltyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelPenalty[] = $item;
        return $this;
    }
    /**
     * Get CancelPolicyIndicator value
     * @return string|null
     */
    public function getCancelPolicyIndicator()
    {
        return $this->CancelPolicyIndicator;
    }
    /**
     * Set CancelPolicyIndicator value
     * @param string $cancelPolicyIndicator
     * @return \StructType\CancelPenaltiesType
     */
    public function setCancelPolicyIndicator($cancelPolicyIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($cancelPolicyIndicator) && !is_string($cancelPolicyIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelPolicyIndicator)), __LINE__);
        }
        $this->CancelPolicyIndicator = $cancelPolicyIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CancelPenaltiesType
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
