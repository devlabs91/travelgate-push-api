<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfHotelRatePlanTypeOffer ArrayType
 * @subpackage Arrays
 */
class ArrayOfHotelRatePlanTypeOffer extends AbstractStructArrayBase
{
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Offer[]
     */
    public $Offer;
    /**
     * Constructor method for ArrayOfHotelRatePlanTypeOffer
     * @uses ArrayOfHotelRatePlanTypeOffer::setOffer()
     * @param \StructType\Offer[] $offer
     */
    public function __construct(array $offer = array())
    {
        $this
            ->setOffer($offer);
    }
    /**
     * Get Offer value
     * @return \StructType\Offer[]|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @throws \InvalidArgumentException
     * @param \StructType\Offer[] $offer
     * @return \ArrayType\ArrayOfHotelRatePlanTypeOffer
     */
    public function setOffer(array $offer = array())
    {
        foreach ($offer as $arrayOfHotelRatePlanTypeOfferOfferItem) {
            // validation for constraint: itemType
            if (!$arrayOfHotelRatePlanTypeOfferOfferItem instanceof \StructType\Offer) {
                throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \StructType\Offer, "%s" given', is_object($arrayOfHotelRatePlanTypeOfferOfferItem) ? get_class($arrayOfHotelRatePlanTypeOfferOfferItem) : gettype($arrayOfHotelRatePlanTypeOfferOfferItem)), __LINE__);
            }
        }
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Add item to Offer value
     * @throws \InvalidArgumentException
     * @param \StructType\Offer $item
     * @return \ArrayType\ArrayOfHotelRatePlanTypeOffer
     */
    public function addToOffer(\StructType\Offer $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Offer) {
            throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \StructType\Offer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Offer[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Offer|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Offer|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Offer|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Offer|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Offer|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Offer
     */
    public function getAttributeName()
    {
        return 'Offer';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfHotelRatePlanTypeOffer
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
