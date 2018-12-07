<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealsIncluded StructType
 * @subpackage Structs
 */
class MealsIncluded extends AbstractStructBase
{
    /**
     * The MealPlanCodes
     * @var string[]
     */
    public $MealPlanCodes;
    /**
     * Constructor method for MealsIncluded
     * @uses MealsIncluded::setMealPlanCodes()
     * @param string[] $mealPlanCodes
     */
    public function __construct(array $mealPlanCodes = array())
    {
        $this
            ->setMealPlanCodes($mealPlanCodes);
    }
    /**
     * Get MealPlanCodes value
     * @return string[]|null
     */
    public function getMealPlanCodes()
    {
        return $this->MealPlanCodes;
    }
    /**
     * Set MealPlanCodes value
     * @throws \InvalidArgumentException
     * @param string[] $mealPlanCodes
     * @return \Devlabs91\TravelgatePushApi\StructType\MealsIncluded
     */
    public function setMealPlanCodes(array $mealPlanCodes = array())
    {
        foreach ($mealPlanCodes as $mealsIncludedMealPlanCodesItem) {
            // validation for constraint: itemType
            if (!is_string($mealsIncludedMealPlanCodesItem)) {
                throw new \InvalidArgumentException(sprintf('The MealPlanCodes property can only contain items of string, "%s" given', is_object($mealsIncludedMealPlanCodesItem) ? get_class($mealsIncludedMealPlanCodesItem) : gettype($mealsIncludedMealPlanCodesItem)), __LINE__);
            }
        }
        $this->MealPlanCodes = $mealPlanCodes;
        return $this;
    }
    /**
     * Add item to MealPlanCodes value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Devlabs91\TravelgatePushApi\StructType\MealsIncluded
     */
    public function addToMealPlanCodes($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The MealPlanCodes property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MealPlanCodes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\MealsIncluded
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
