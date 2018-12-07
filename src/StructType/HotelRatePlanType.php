<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRatePlanType StructType
 * @subpackage Structs
 */
class HotelRatePlanType extends AbstractStructBase
{
    /**
     * The RateReturn
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $RateReturn;
    /**
     * The BookingRules
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\BookingRules
     */
    public $BookingRules;
    /**
     * The Rates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeRate
     */
    public $Rates;
    /**
     * The Supplements
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeSupplement
     */
    public $Supplements;
    /**
     * The Offers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeOffer
     */
    public $Offers;
    /**
     * The RatePlanInclusionsType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInclusionsType
     */
    public $RatePlanInclusionsType;
    /**
     * The SellableProducts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSellableProductsTypeSellableProduct
     */
    public $SellableProducts;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\CommissionType
     */
    public $Commission;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ParagraphType[]
     */
    public $Description;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TaxesType
     */
    public $Taxes;
    /**
     * The Start
     * @var string
     */
    public $Start;
    /**
     * The Duration
     * @var string
     */
    public $Duration;
    /**
     * The End
     * @var string
     */
    public $End;
    /**
     * The CurrencyCode
     * @var string
     */
    public $CurrencyCode;
    /**
     * The PromotionCode
     * @var string
     */
    public $PromotionCode;
    /**
     * The RatePlanType
     * @var string
     */
    public $RatePlanType;
    /**
     * The RatePlanCode
     * @var string
     */
    public $RatePlanCode;
    /**
     * The RatePlanNotifType
     * @var string
     */
    public $RatePlanNotifType;
    /**
     * The SuplementsNotifType
     * @var string
     */
    public $SuplementsNotifType;
    /**
     * The RatePlanStatusType
     * @var string
     */
    public $RatePlanStatusType;
    /**
     * The IsCommissionable
     * @var bool
     */
    public $IsCommissionable;
    /**
     * The YieldableIndicator
     * @var bool
     */
    public $YieldableIndicator;
    /**
     * The BaseRatePlanCode
     * @var string
     */
    public $BaseRatePlanCode;
    /**
     * The AdjustedAmount
     * @var float
     */
    public $AdjustedAmount;
    /**
     * The AdjustedPercentage
     * @var float
     */
    public $AdjustedPercentage;
    /**
     * The AdjustUpIndicator
     * @var bool
     */
    public $AdjustUpIndicator;
    /**
     * Constructor method for HotelRatePlanType
     * @uses HotelRatePlanType::setRateReturn()
     * @uses HotelRatePlanType::setBookingRules()
     * @uses HotelRatePlanType::setRates()
     * @uses HotelRatePlanType::setSupplements()
     * @uses HotelRatePlanType::setOffers()
     * @uses HotelRatePlanType::setRatePlanInclusionsType()
     * @uses HotelRatePlanType::setSellableProducts()
     * @uses HotelRatePlanType::setCommission()
     * @uses HotelRatePlanType::setDescription()
     * @uses HotelRatePlanType::setTaxes()
     * @uses HotelRatePlanType::setStart()
     * @uses HotelRatePlanType::setDuration()
     * @uses HotelRatePlanType::setEnd()
     * @uses HotelRatePlanType::setCurrencyCode()
     * @uses HotelRatePlanType::setPromotionCode()
     * @uses HotelRatePlanType::setRatePlanType()
     * @uses HotelRatePlanType::setRatePlanCode()
     * @uses HotelRatePlanType::setRatePlanNotifType()
     * @uses HotelRatePlanType::setSuplementsNotifType()
     * @uses HotelRatePlanType::setRatePlanStatusType()
     * @uses HotelRatePlanType::setIsCommissionable()
     * @uses HotelRatePlanType::setYieldableIndicator()
     * @uses HotelRatePlanType::setBaseRatePlanCode()
     * @uses HotelRatePlanType::setAdjustedAmount()
     * @uses HotelRatePlanType::setAdjustedPercentage()
     * @uses HotelRatePlanType::setAdjustUpIndicator()
     * @param bool $rateReturn
     * @param \Devlabs91\TravelgatePushApi\StructType\BookingRules $bookingRules
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeRate $rates
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeSupplement $supplements
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeOffer $offers
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInclusionsType $ratePlanInclusionsType
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSellableProductsTypeSellableProduct $sellableProducts
     * @param \Devlabs91\TravelgatePushApi\StructType\CommissionType $commission
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType[] $description
     * @param \Devlabs91\TravelgatePushApi\StructType\TaxesType $taxes
     * @param string $start
     * @param string $duration
     * @param string $end
     * @param string $currencyCode
     * @param string $promotionCode
     * @param string $ratePlanType
     * @param string $ratePlanCode
     * @param string $ratePlanNotifType
     * @param string $suplementsNotifType
     * @param string $ratePlanStatusType
     * @param bool $isCommissionable
     * @param bool $yieldableIndicator
     * @param string $baseRatePlanCode
     * @param float $adjustedAmount
     * @param float $adjustedPercentage
     * @param bool $adjustUpIndicator
     */
    public function __construct($rateReturn = null, \Devlabs91\TravelgatePushApi\StructType\BookingRules $bookingRules = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeRate $rates = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeSupplement $supplements = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeOffer $offers = null, \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInclusionsType $ratePlanInclusionsType = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSellableProductsTypeSellableProduct $sellableProducts = null, \Devlabs91\TravelgatePushApi\StructType\CommissionType $commission = null, array $description = array(), \Devlabs91\TravelgatePushApi\StructType\TaxesType $taxes = null, $start = null, $duration = null, $end = null, $currencyCode = null, $promotionCode = null, $ratePlanType = null, $ratePlanCode = null, $ratePlanNotifType = null, $suplementsNotifType = null, $ratePlanStatusType = null, $isCommissionable = null, $yieldableIndicator = null, $baseRatePlanCode = null, $adjustedAmount = null, $adjustedPercentage = null, $adjustUpIndicator = null)
    {
        $this
            ->setRateReturn($rateReturn)
            ->setBookingRules($bookingRules)
            ->setRates($rates)
            ->setSupplements($supplements)
            ->setOffers($offers)
            ->setRatePlanInclusionsType($ratePlanInclusionsType)
            ->setSellableProducts($sellableProducts)
            ->setCommission($commission)
            ->setDescription($description)
            ->setTaxes($taxes)
            ->setStart($start)
            ->setDuration($duration)
            ->setEnd($end)
            ->setCurrencyCode($currencyCode)
            ->setPromotionCode($promotionCode)
            ->setRatePlanType($ratePlanType)
            ->setRatePlanCode($ratePlanCode)
            ->setRatePlanNotifType($ratePlanNotifType)
            ->setSuplementsNotifType($suplementsNotifType)
            ->setRatePlanStatusType($ratePlanStatusType)
            ->setIsCommissionable($isCommissionable)
            ->setYieldableIndicator($yieldableIndicator)
            ->setBaseRatePlanCode($baseRatePlanCode)
            ->setAdjustedAmount($adjustedAmount)
            ->setAdjustedPercentage($adjustedPercentage)
            ->setAdjustUpIndicator($adjustUpIndicator);
    }
    /**
     * Get RateReturn value
     * @return bool
     */
    public function getRateReturn()
    {
        return $this->RateReturn;
    }
    /**
     * Set RateReturn value
     * @param bool $rateReturn
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setRateReturn($rateReturn = null)
    {
        // validation for constraint: boolean
        if (!is_null($rateReturn) && !is_bool($rateReturn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rateReturn)), __LINE__);
        }
        $this->RateReturn = $rateReturn;
        return $this;
    }
    /**
     * Get BookingRules value
     * @return \Devlabs91\TravelgatePushApi\StructType\BookingRules|null
     */
    public function getBookingRules()
    {
        return $this->BookingRules;
    }
    /**
     * Set BookingRules value
     * @param \Devlabs91\TravelgatePushApi\StructType\BookingRules $bookingRules
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setBookingRules(\Devlabs91\TravelgatePushApi\StructType\BookingRules $bookingRules = null)
    {
        $this->BookingRules = $bookingRules;
        return $this;
    }
    /**
     * Get Rates value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeRate|null
     */
    public function getRates()
    {
        return $this->Rates;
    }
    /**
     * Set Rates value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeRate $rates
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setRates(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeRate $rates = null)
    {
        $this->Rates = $rates;
        return $this;
    }
    /**
     * Get Supplements value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeSupplement|null
     */
    public function getSupplements()
    {
        return $this->Supplements;
    }
    /**
     * Set Supplements value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeSupplement $supplements
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setSupplements(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeSupplement $supplements = null)
    {
        $this->Supplements = $supplements;
        return $this;
    }
    /**
     * Get Offers value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeOffer|null
     */
    public function getOffers()
    {
        return $this->Offers;
    }
    /**
     * Set Offers value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeOffer $offers
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setOffers(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeOffer $offers = null)
    {
        $this->Offers = $offers;
        return $this;
    }
    /**
     * Get RatePlanInclusionsType value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInclusionsType|null
     */
    public function getRatePlanInclusionsType()
    {
        return $this->RatePlanInclusionsType;
    }
    /**
     * Set RatePlanInclusionsType value
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInclusionsType $ratePlanInclusionsType
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setRatePlanInclusionsType(\Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInclusionsType $ratePlanInclusionsType = null)
    {
        $this->RatePlanInclusionsType = $ratePlanInclusionsType;
        return $this;
    }
    /**
     * Get SellableProducts value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSellableProductsTypeSellableProduct|null
     */
    public function getSellableProducts()
    {
        return $this->SellableProducts;
    }
    /**
     * Set SellableProducts value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSellableProductsTypeSellableProduct $sellableProducts
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setSellableProducts(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSellableProductsTypeSellableProduct $sellableProducts = null)
    {
        $this->SellableProducts = $sellableProducts;
        return $this;
    }
    /**
     * Get Commission value
     * @return \Devlabs91\TravelgatePushApi\StructType\CommissionType|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Devlabs91\TravelgatePushApi\StructType\CommissionType $commission
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setCommission(\Devlabs91\TravelgatePushApi\StructType\CommissionType $commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get Description value
     * @return \Devlabs91\TravelgatePushApi\StructType\ParagraphType[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType[] $description
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $hotelRatePlanTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$hotelRatePlanTypeDescriptionItem instanceof \Devlabs91\TravelgatePushApi\StructType\ParagraphType) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Devlabs91\TravelgatePushApi\StructType\ParagraphType, "%s" given', is_object($hotelRatePlanTypeDescriptionItem) ? get_class($hotelRatePlanTypeDescriptionItem) : gettype($hotelRatePlanTypeDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType $item
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function addToDescription(\Devlabs91\TravelgatePushApi\StructType\ParagraphType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\ParagraphType) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Devlabs91\TravelgatePushApi\StructType\ParagraphType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxesType|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Devlabs91\TravelgatePushApi\StructType\TaxesType $taxes
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setTaxes(\Devlabs91\TravelgatePushApi\StructType\TaxesType $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
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
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
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
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get PromotionCode value
     * @return string|null
     */
    public function getPromotionCode()
    {
        return $this->PromotionCode;
    }
    /**
     * Set PromotionCode value
     * @param string $promotionCode
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setPromotionCode($promotionCode = null)
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionCode)), __LINE__);
        }
        $this->PromotionCode = $promotionCode;
        return $this;
    }
    /**
     * Get RatePlanType value
     * @return string|null
     */
    public function getRatePlanType()
    {
        return $this->RatePlanType;
    }
    /**
     * Set RatePlanType value
     * @param string $ratePlanType
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setRatePlanType($ratePlanType = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanType) && !is_string($ratePlanType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanType)), __LINE__);
        }
        $this->RatePlanType = $ratePlanType;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    /**
     * Get RatePlanNotifType value
     * @return string|null
     */
    public function getRatePlanNotifType()
    {
        return $this->RatePlanNotifType;
    }
    /**
     * Set RatePlanNotifType value
     * @param string $ratePlanNotifType
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setRatePlanNotifType($ratePlanNotifType = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanNotifType) && !is_string($ratePlanNotifType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanNotifType)), __LINE__);
        }
        $this->RatePlanNotifType = $ratePlanNotifType;
        return $this;
    }
    /**
     * Get SuplementsNotifType value
     * @return string|null
     */
    public function getSuplementsNotifType()
    {
        return $this->SuplementsNotifType;
    }
    /**
     * Set SuplementsNotifType value
     * @param string $suplementsNotifType
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setSuplementsNotifType($suplementsNotifType = null)
    {
        // validation for constraint: string
        if (!is_null($suplementsNotifType) && !is_string($suplementsNotifType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($suplementsNotifType)), __LINE__);
        }
        $this->SuplementsNotifType = $suplementsNotifType;
        return $this;
    }
    /**
     * Get RatePlanStatusType value
     * @return string|null
     */
    public function getRatePlanStatusType()
    {
        return $this->RatePlanStatusType;
    }
    /**
     * Set RatePlanStatusType value
     * @param string $ratePlanStatusType
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setRatePlanStatusType($ratePlanStatusType = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanStatusType) && !is_string($ratePlanStatusType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanStatusType)), __LINE__);
        }
        $this->RatePlanStatusType = $ratePlanStatusType;
        return $this;
    }
    /**
     * Get IsCommissionable value
     * @return bool|null
     */
    public function getIsCommissionable()
    {
        return $this->IsCommissionable;
    }
    /**
     * Set IsCommissionable value
     * @param bool $isCommissionable
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setIsCommissionable($isCommissionable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCommissionable) && !is_bool($isCommissionable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCommissionable)), __LINE__);
        }
        $this->IsCommissionable = $isCommissionable;
        return $this;
    }
    /**
     * Get YieldableIndicator value
     * @return bool|null
     */
    public function getYieldableIndicator()
    {
        return $this->YieldableIndicator;
    }
    /**
     * Set YieldableIndicator value
     * @param bool $yieldableIndicator
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setYieldableIndicator($yieldableIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($yieldableIndicator) && !is_bool($yieldableIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($yieldableIndicator)), __LINE__);
        }
        $this->YieldableIndicator = $yieldableIndicator;
        return $this;
    }
    /**
     * Get BaseRatePlanCode value
     * @return string|null
     */
    public function getBaseRatePlanCode()
    {
        return $this->BaseRatePlanCode;
    }
    /**
     * Set BaseRatePlanCode value
     * @param string $baseRatePlanCode
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setBaseRatePlanCode($baseRatePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($baseRatePlanCode) && !is_string($baseRatePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baseRatePlanCode)), __LINE__);
        }
        $this->BaseRatePlanCode = $baseRatePlanCode;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setAdjustedAmount($adjustedAmount = null)
    {
        $this->AdjustedAmount = $adjustedAmount;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
     */
    public function setAdjustedPercentage($adjustedPercentage = null)
    {
        $this->AdjustedPercentage = $adjustedPercentage;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType
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
