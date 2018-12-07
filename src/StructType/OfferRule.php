<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferRule StructType
 * @subpackage Structs
 */
class OfferRule extends AbstractStructBase
{
    /**
     * The DateRestriction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\DateRestriction[]
     */
    public $DateRestriction;
    /**
     * The LengthsOfStay
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType
     */
    public $LengthsOfStay;
    /**
     * The DOW_Restrictions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\DOW_RestrictionsType
     */
    public $DOW_Restrictions;
    /**
     * The Inventories
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRuleInventory
     */
    public $Inventories;
    /**
     * Constructor method for OfferRule
     * @uses OfferRule::setDateRestriction()
     * @uses OfferRule::setLengthsOfStay()
     * @uses OfferRule::setDOW_Restrictions()
     * @uses OfferRule::setInventories()
     * @param \Devlabs91\TravelgatePushApi\StructType\DateRestriction[] $dateRestriction
     * @param \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType $lengthsOfStay
     * @param \Devlabs91\TravelgatePushApi\StructType\DOW_RestrictionsType $dOW_Restrictions
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRuleInventory $inventories
     */
    public function __construct(array $dateRestriction = array(), \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType $lengthsOfStay = null, \Devlabs91\TravelgatePushApi\StructType\DOW_RestrictionsType $dOW_Restrictions = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRuleInventory $inventories = null)
    {
        $this
            ->setDateRestriction($dateRestriction)
            ->setLengthsOfStay($lengthsOfStay)
            ->setDOW_Restrictions($dOW_Restrictions)
            ->setInventories($inventories);
    }
    /**
     * Get DateRestriction value
     * @return \Devlabs91\TravelgatePushApi\StructType\DateRestriction[]|null
     */
    public function getDateRestriction()
    {
        return $this->DateRestriction;
    }
    /**
     * Set DateRestriction value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\DateRestriction[] $dateRestriction
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferRule
     */
    public function setDateRestriction(array $dateRestriction = array())
    {
        foreach ($dateRestriction as $offerRuleDateRestrictionItem) {
            // validation for constraint: itemType
            if (!$offerRuleDateRestrictionItem instanceof \Devlabs91\TravelgatePushApi\StructType\DateRestriction) {
                throw new \InvalidArgumentException(sprintf('The DateRestriction property can only contain items of \Devlabs91\TravelgatePushApi\StructType\DateRestriction, "%s" given', is_object($offerRuleDateRestrictionItem) ? get_class($offerRuleDateRestrictionItem) : gettype($offerRuleDateRestrictionItem)), __LINE__);
            }
        }
        $this->DateRestriction = $dateRestriction;
        return $this;
    }
    /**
     * Add item to DateRestriction value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\DateRestriction $item
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferRule
     */
    public function addToDateRestriction(\Devlabs91\TravelgatePushApi\StructType\DateRestriction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\DateRestriction) {
            throw new \InvalidArgumentException(sprintf('The DateRestriction property can only contain items of \Devlabs91\TravelgatePushApi\StructType\DateRestriction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DateRestriction[] = $item;
        return $this;
    }
    /**
     * Get LengthsOfStay value
     * @return \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType|null
     */
    public function getLengthsOfStay()
    {
        return $this->LengthsOfStay;
    }
    /**
     * Set LengthsOfStay value
     * @param \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType $lengthsOfStay
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferRule
     */
    public function setLengthsOfStay(\Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType $lengthsOfStay = null)
    {
        $this->LengthsOfStay = $lengthsOfStay;
        return $this;
    }
    /**
     * Get DOW_Restrictions value
     * @return \Devlabs91\TravelgatePushApi\StructType\DOW_RestrictionsType|null
     */
    public function getDOW_Restrictions()
    {
        return $this->DOW_Restrictions;
    }
    /**
     * Set DOW_Restrictions value
     * @param \Devlabs91\TravelgatePushApi\StructType\DOW_RestrictionsType $dOW_Restrictions
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferRule
     */
    public function setDOW_Restrictions(\Devlabs91\TravelgatePushApi\StructType\DOW_RestrictionsType $dOW_Restrictions = null)
    {
        $this->DOW_Restrictions = $dOW_Restrictions;
        return $this;
    }
    /**
     * Get Inventories value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRuleInventory|null
     */
    public function getInventories()
    {
        return $this->Inventories;
    }
    /**
     * Set Inventories value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRuleInventory $inventories
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferRule
     */
    public function setInventories(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRuleInventory $inventories = null)
    {
        $this->Inventories = $inventories;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferRule
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
