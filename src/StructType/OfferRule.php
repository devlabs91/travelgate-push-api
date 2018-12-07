<?php

namespace StructType;

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
     * @var \StructType\DateRestriction[]
     */
    public $DateRestriction;
    /**
     * The LengthsOfStay
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LengthsOfStayType
     */
    public $LengthsOfStay;
    /**
     * The DOW_Restrictions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\DOW_RestrictionsType
     */
    public $DOW_Restrictions;
    /**
     * The Inventories
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfOfferTypeOfferRuleInventory
     */
    public $Inventories;
    /**
     * Constructor method for OfferRule
     * @uses OfferRule::setDateRestriction()
     * @uses OfferRule::setLengthsOfStay()
     * @uses OfferRule::setDOW_Restrictions()
     * @uses OfferRule::setInventories()
     * @param \StructType\DateRestriction[] $dateRestriction
     * @param \StructType\LengthsOfStayType $lengthsOfStay
     * @param \StructType\DOW_RestrictionsType $dOW_Restrictions
     * @param \ArrayType\ArrayOfOfferTypeOfferRuleInventory $inventories
     */
    public function __construct(array $dateRestriction = array(), \StructType\LengthsOfStayType $lengthsOfStay = null, \StructType\DOW_RestrictionsType $dOW_Restrictions = null, \ArrayType\ArrayOfOfferTypeOfferRuleInventory $inventories = null)
    {
        $this
            ->setDateRestriction($dateRestriction)
            ->setLengthsOfStay($lengthsOfStay)
            ->setDOW_Restrictions($dOW_Restrictions)
            ->setInventories($inventories);
    }
    /**
     * Get DateRestriction value
     * @return \StructType\DateRestriction[]|null
     */
    public function getDateRestriction()
    {
        return $this->DateRestriction;
    }
    /**
     * Set DateRestriction value
     * @throws \InvalidArgumentException
     * @param \StructType\DateRestriction[] $dateRestriction
     * @return \StructType\OfferRule
     */
    public function setDateRestriction(array $dateRestriction = array())
    {
        foreach ($dateRestriction as $offerRuleDateRestrictionItem) {
            // validation for constraint: itemType
            if (!$offerRuleDateRestrictionItem instanceof \StructType\DateRestriction) {
                throw new \InvalidArgumentException(sprintf('The DateRestriction property can only contain items of \StructType\DateRestriction, "%s" given', is_object($offerRuleDateRestrictionItem) ? get_class($offerRuleDateRestrictionItem) : gettype($offerRuleDateRestrictionItem)), __LINE__);
            }
        }
        $this->DateRestriction = $dateRestriction;
        return $this;
    }
    /**
     * Add item to DateRestriction value
     * @throws \InvalidArgumentException
     * @param \StructType\DateRestriction $item
     * @return \StructType\OfferRule
     */
    public function addToDateRestriction(\StructType\DateRestriction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DateRestriction) {
            throw new \InvalidArgumentException(sprintf('The DateRestriction property can only contain items of \StructType\DateRestriction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DateRestriction[] = $item;
        return $this;
    }
    /**
     * Get LengthsOfStay value
     * @return \StructType\LengthsOfStayType|null
     */
    public function getLengthsOfStay()
    {
        return $this->LengthsOfStay;
    }
    /**
     * Set LengthsOfStay value
     * @param \StructType\LengthsOfStayType $lengthsOfStay
     * @return \StructType\OfferRule
     */
    public function setLengthsOfStay(\StructType\LengthsOfStayType $lengthsOfStay = null)
    {
        $this->LengthsOfStay = $lengthsOfStay;
        return $this;
    }
    /**
     * Get DOW_Restrictions value
     * @return \StructType\DOW_RestrictionsType|null
     */
    public function getDOW_Restrictions()
    {
        return $this->DOW_Restrictions;
    }
    /**
     * Set DOW_Restrictions value
     * @param \StructType\DOW_RestrictionsType $dOW_Restrictions
     * @return \StructType\OfferRule
     */
    public function setDOW_Restrictions(\StructType\DOW_RestrictionsType $dOW_Restrictions = null)
    {
        $this->DOW_Restrictions = $dOW_Restrictions;
        return $this;
    }
    /**
     * Get Inventories value
     * @return \ArrayType\ArrayOfOfferTypeOfferRuleInventory|null
     */
    public function getInventories()
    {
        return $this->Inventories;
    }
    /**
     * Set Inventories value
     * @param \ArrayType\ArrayOfOfferTypeOfferRuleInventory $inventories
     * @return \StructType\OfferRule
     */
    public function setInventories(\ArrayType\ArrayOfOfferTypeOfferRuleInventory $inventories = null)
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
     * @return \StructType\OfferRule
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
