<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Discount StructType
 * @subpackage Structs
 */
class Discount extends DiscountType
{
    /**
     * The NightsDiscounted
     * @var int
     */
    public $NightsDiscounted;
    /**
     * The DiscountPattern
     * @var string
     */
    public $DiscountPattern;
    /**
     * The Amount
     * @var float
     */
    public $Amount;
    /**
     * The Percent
     * @var float
     */
    public $Percent;
    /**
     * Constructor method for Discount
     * @uses Discount::setNightsDiscounted()
     * @uses Discount::setDiscountPattern()
     * @uses Discount::setAmount()
     * @uses Discount::setPercent()
     * @param int $nightsDiscounted
     * @param string $discountPattern
     * @param float $amount
     * @param float $percent
     */
    public function __construct($nightsDiscounted = null, $discountPattern = null, $amount = null, $percent = null)
    {
        $this
            ->setNightsDiscounted($nightsDiscounted)
            ->setDiscountPattern($discountPattern)
            ->setAmount($amount)
            ->setPercent($percent);
    }
    /**
     * Get NightsDiscounted value
     * @return int|null
     */
    public function getNightsDiscounted()
    {
        return $this->NightsDiscounted;
    }
    /**
     * Set NightsDiscounted value
     * @param int $nightsDiscounted
     * @return \Devlabs91\TravelgatePushApi\StructType\Discount
     */
    public function setNightsDiscounted($nightsDiscounted = null)
    {
        // validation for constraint: int
        if (!is_null($nightsDiscounted) && !is_numeric($nightsDiscounted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nightsDiscounted)), __LINE__);
        }
        $this->NightsDiscounted = $nightsDiscounted;
        return $this;
    }
    /**
     * Get DiscountPattern value
     * @return string|null
     */
    public function getDiscountPattern()
    {
        return $this->DiscountPattern;
    }
    /**
     * Set DiscountPattern value
     * @param string $discountPattern
     * @return \Devlabs91\TravelgatePushApi\StructType\Discount
     */
    public function setDiscountPattern($discountPattern = null)
    {
        // validation for constraint: string
        if (!is_null($discountPattern) && !is_string($discountPattern)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discountPattern)), __LINE__);
        }
        $this->DiscountPattern = $discountPattern;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Devlabs91\TravelgatePushApi\StructType\Discount
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \Devlabs91\TravelgatePushApi\StructType\Discount
     */
    public function setPercent($percent = null)
    {
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\Discount
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
