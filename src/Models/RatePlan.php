<?php

namespace Devlabs91\TravelgatePushApi\Models;

class RatePlan {

    /**
     * Rate code.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RatePlanCode;
    
    /**
     * Active or Deactivated (You can save prices with initial status deactivated if you want). If this attribute is missing, the price will be saved as active.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RatePlanStatusType;
    
    /**
     * Rate code of the base RatePlan. Only used for derived rates.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BaseRatePlanCode;
    
    /**
     * ISO Currency (EUR). Not used for derived rates.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CurrencyCode;
    
    /**
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Devlabs91\TravelgatePushApi\Models\Rate[]
     */
    public $Rates;
    
    /**
     * Present if supplements by board exists. Not used for derived rates.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\Models\Supplement[]
     */
    public $Supplements;
    
    /**
     * List of sellable products. Null for derived rates.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\Models\SellableProduct[]
     */
    public $SellableProducts;
    
    public function __construct( $ratePlanCode, $ratePlanStatusType = 'Active', $currencyCode = 'EUR' ) {
        $this->RatePlanCode = $ratePlanCode;
        $this->RatePlanStatusType = $ratePlanStatusType;
        $this->CurrencyCode = $currencyCode;
        $this->Rates = [];
        $this->Supplements = [];
        $this->SellableProducts = [];
    }
    
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode() {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return RatePlan
     */
    public function setRatePlanCode($ratePlanCode = null) {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    
    /**
     * Get RatePlanStatusType value
     * @return string|null
     */
    public function getRatePlanStatusType() {
        return $this->RatePlanStatusType;
    }
    /**
     * Set RatePlanStatusType value
     * @param string $ratePlanStatusType
     * @return RatePlan
     */
    public function setRatePlanStatusType($ratePlanStatusType = null) {
        // validation for constraint: string
        if (!is_null($ratePlanStatusType) && !is_string($ratePlanStatusType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanStatusType)), __LINE__);
        }
        $this->RatePlanStatusType = $ratePlanStatusType;
        return $this;
    }
    /**
     * Get BaseRatePlanCode value
     * @return string|null
     */
    public function getBaseRatePlanCode() {
        return $this->BaseRatePlanCode;
    }
    /**
     * Set BaseRatePlanCode value
     * @param string $baseRatePlanCode
     * @return RatePlan
     */
    public function setBaseRatePlanCode($baseRatePlanCode = null) {
        // validation for constraint: string
        if (!is_null($baseRatePlanCode) && !is_string($baseRatePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baseRatePlanCode)), __LINE__);
        }
        $this->BaseRatePlanCode = $baseRatePlanCode;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode() {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return RatePlan
     */
    public function setCurrencyCode($currencyCode = null) {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    
    /**
     * 
     * @param Rate $rate
     */
    public function addToRates( Rate $rate ) {
        $this->Rates[] = $rate;
    }
    
    /**
     * 
     * @return \Devlabs91\TravelgatePushApi\Models\Rate[]
     */
    public function getRates() {
        return $this->Rates;
    }
    
    /**
     * 
     * @param Supplement $supplement
     */
    public function addToSupplements( Supplement $supplement ) {
        $this->Supplements[] = $supplement;
    }
    
    /**
     * 
     * @return \Devlabs91\TravelgatePushApi\Models\Supplement[]
     */
    public function getSupplements() {
        return $this->Supplements;
    }
    
    /**
     * 
     * @param SellableProduct $sellableProduct
     */
    public function addToSellableProducts( SellableProduct $sellableProduct ) {
        $this->SellableProducts[] = $sellableProduct;
    }
    
    /**
     * 
     * @return \Devlabs91\TravelgatePushApi\Models\SellableProduct[]
     */
    public function getSellableProducts() {
        return $this->SellableProducts;
    }
    
}
