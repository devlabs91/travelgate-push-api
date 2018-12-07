<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSearchCriteriaType StructType
 * @subpackage Structs
 */
class HotelSearchCriteriaType extends AbstractStructBase
{
    /**
     * The Criterion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Criterion[]
     */
    public $Criterion;
    /**
     * Constructor method for HotelSearchCriteriaType
     * @uses HotelSearchCriteriaType::setCriterion()
     * @param \Devlabs91\TravelgatePushApi\StructType\Criterion[] $criterion
     */
    public function __construct(array $criterion = array())
    {
        $this
            ->setCriterion($criterion);
    }
    /**
     * Get Criterion value
     * @return \Devlabs91\TravelgatePushApi\StructType\Criterion[]|null
     */
    public function getCriterion()
    {
        return $this->Criterion;
    }
    /**
     * Set Criterion value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Criterion[] $criterion
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelSearchCriteriaType
     */
    public function setCriterion(array $criterion = array())
    {
        foreach ($criterion as $hotelSearchCriteriaTypeCriterionItem) {
            // validation for constraint: itemType
            if (!$hotelSearchCriteriaTypeCriterionItem instanceof \Devlabs91\TravelgatePushApi\StructType\Criterion) {
                throw new \InvalidArgumentException(sprintf('The Criterion property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Criterion, "%s" given', is_object($hotelSearchCriteriaTypeCriterionItem) ? get_class($hotelSearchCriteriaTypeCriterionItem) : gettype($hotelSearchCriteriaTypeCriterionItem)), __LINE__);
            }
        }
        $this->Criterion = $criterion;
        return $this;
    }
    /**
     * Add item to Criterion value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Criterion $item
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelSearchCriteriaType
     */
    public function addToCriterion(\Devlabs91\TravelgatePushApi\StructType\Criterion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Criterion) {
            throw new \InvalidArgumentException(sprintf('The Criterion property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Criterion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Criterion[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelSearchCriteriaType
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
