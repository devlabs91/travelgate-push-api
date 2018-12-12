<?php

namespace Devlabs91\TravelgatePushApi\Models;

class Rate
{
    /**
     * Start date of rate.
     * @var string
     */
    public $Start;
    
    /**
     * End date of rate.
     * @var string
     */
    public $End;
    
    /**
     * The percentage off the base rate plan amount used to determine the price of this derived rate plan. Only used for derived rates.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $AdjustedPercentage;
    
    /**
     * The amount which should be added to the base rate plan to determine the price of this derived rate plan. Only used for derived rates.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $AdjustedAmount;
    
    /**
     * When true, the adjusted amount or adjusted percentage is added to the amount specified for the base rate plan to determine the derived rate amount. When false, the adjusted amount or adjusted percentage is subtracted from the amount specified for the base rate plan to determine the derived rate amount. Only used for derived rates.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $AdjustUpIndicator;
    
    /**
     * Different types of price can come in the same BaseByGuestAmts element.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\Models\BaseByGuestAmt[]
     */
    public $BaseByGuestAmts;
    
    /**
     * Price and information about the additional pax (children, infants or extra adults).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\Models\AdditionalGuestAmount[]
     */
    public $AdditionalGuestAmounts;
    
    public function __construct( \DateTime $start, \DateTime $end ) {
        $this->setStart( $start->format('Y-m-d') );
        $this->setEnd( $end->format('Y-m-d') );
        
    }
    
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \Devlabs91\TravelgatePushApi\StructType\RateUploadType
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \Devlabs91\TravelgatePushApi\StructType\RateUploadType
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    /**
     * Get AdjustedPercentage value
     * @return float|null
     */
    public function getAdjustedPercentage()
    {
        return $this->AdjustedPercentage;
    }
    /**
     * Set AdjustedPercentage value
     * @param float $adjustedPercentage
     * @return \Devlabs91\TravelgatePushApi\StructType\Rate
     */
    public function setAdjustedPercentage($adjustedPercentage = null)
    {
        $this->AdjustedPercentage = $adjustedPercentage;
        return $this;
    }
    /**
     * Get AdjustedAmount value
     * @return float|null
     */
    public function getAdjustedAmount()
    {
        return $this->AdjustedAmount;
    }
    /**
     * Set AdjustedAmount value
     * @param float $adjustedAmount
     * @return \Devlabs91\TravelgatePushApi\StructType\Rate
     */
    public function setAdjustedAmount($adjustedAmount = null)
    {
        $this->AdjustedAmount = $adjustedAmount;
        return $this;
    }
    /**
     * Get AdjustUpIndicator value
     * @return bool|null
     */
    public function getAdjustUpIndicator()
    {
        return $this->AdjustUpIndicator;
    }
    /**
     * Set AdjustUpIndicator value
     * @param bool $adjustUpIndicator
     * @return \Devlabs91\TravelgatePushApi\StructType\Rate
     */
    public function setAdjustUpIndicator($adjustUpIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($adjustUpIndicator) && !is_bool($adjustUpIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($adjustUpIndicator)), __LINE__);
        }
        $this->AdjustUpIndicator = $adjustUpIndicator;
        return $this;
    }
    
    public function addToBaseByGuestAmts( BaseByGuestAmt $baseByGuestAmts ) {
        $this->BaseByGuestAmts[] = $baseByGuestAmts;
    }

    public function getBaseByGuestAmts()
    {
        return $this->BaseByGuestAmts;
    }
    
    public function addToAdditionalGuestAmounts( AdditionalGuestAmount $additionalGuestAmounts ) {
        $this->AdditionalGuestAmounts[] = $additionalGuestAmounts;
    }
    
    public function getAdditionalGuestAmounts()
    {
        return $this->AdditionalGuestAmounts;
    }
    
}
