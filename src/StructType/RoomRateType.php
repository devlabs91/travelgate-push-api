<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomRateType StructType
 * @subpackage Structs
 */
class RoomRateType extends AbstractStructBase
{
    /**
     * The Rates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRateTypeRate
     */
    public $Rates;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TotalType
     */
    public $Total;
    /**
     * The Features
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRoomRateTypeFeature
     */
    public $Features;
    /**
     * The BookingCode
     * @var string
     */
    public $BookingCode;
    /**
     * The EffectiveDate
     * @var string
     */
    public $EffectiveDate;
    /**
     * The ExpireDate
     * @var string
     */
    public $ExpireDate;
    /**
     * The RoomTypeCode
     * @var string
     */
    public $RoomTypeCode;
    /**
     * The InvBlockCode
     * @var string
     */
    public $InvBlockCode;
    /**
     * The NumberOfUnits
     * @var int
     */
    public $NumberOfUnits;
    /**
     * The RatePlanCode
     * @var string
     */
    public $RatePlanCode;
    /**
     * The RoomID
     * @var string
     */
    public $RoomID;
    /**
     * Constructor method for RoomRateType
     * @uses RoomRateType::setRates()
     * @uses RoomRateType::setTotal()
     * @uses RoomRateType::setFeatures()
     * @uses RoomRateType::setBookingCode()
     * @uses RoomRateType::setEffectiveDate()
     * @uses RoomRateType::setExpireDate()
     * @uses RoomRateType::setRoomTypeCode()
     * @uses RoomRateType::setInvBlockCode()
     * @uses RoomRateType::setNumberOfUnits()
     * @uses RoomRateType::setRatePlanCode()
     * @uses RoomRateType::setRoomID()
     * @param \ArrayType\ArrayOfRateTypeRate $rates
     * @param \StructType\TotalType $total
     * @param \ArrayType\ArrayOfRoomRateTypeFeature $features
     * @param string $bookingCode
     * @param string $effectiveDate
     * @param string $expireDate
     * @param string $roomTypeCode
     * @param string $invBlockCode
     * @param int $numberOfUnits
     * @param string $ratePlanCode
     * @param string $roomID
     */
    public function __construct(\ArrayType\ArrayOfRateTypeRate $rates = null, \StructType\TotalType $total = null, \ArrayType\ArrayOfRoomRateTypeFeature $features = null, $bookingCode = null, $effectiveDate = null, $expireDate = null, $roomTypeCode = null, $invBlockCode = null, $numberOfUnits = null, $ratePlanCode = null, $roomID = null)
    {
        $this
            ->setRates($rates)
            ->setTotal($total)
            ->setFeatures($features)
            ->setBookingCode($bookingCode)
            ->setEffectiveDate($effectiveDate)
            ->setExpireDate($expireDate)
            ->setRoomTypeCode($roomTypeCode)
            ->setInvBlockCode($invBlockCode)
            ->setNumberOfUnits($numberOfUnits)
            ->setRatePlanCode($ratePlanCode)
            ->setRoomID($roomID);
    }
    /**
     * Get Rates value
     * @return \ArrayType\ArrayOfRateTypeRate|null
     */
    public function getRates()
    {
        return $this->Rates;
    }
    /**
     * Set Rates value
     * @param \ArrayType\ArrayOfRateTypeRate $rates
     * @return \StructType\RoomRateType
     */
    public function setRates(\ArrayType\ArrayOfRateTypeRate $rates = null)
    {
        $this->Rates = $rates;
        return $this;
    }
    /**
     * Get Total value
     * @return \StructType\TotalType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \StructType\TotalType $total
     * @return \StructType\RoomRateType
     */
    public function setTotal(\StructType\TotalType $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get Features value
     * @return \ArrayType\ArrayOfRoomRateTypeFeature|null
     */
    public function getFeatures()
    {
        return $this->Features;
    }
    /**
     * Set Features value
     * @param \ArrayType\ArrayOfRoomRateTypeFeature $features
     * @return \StructType\RoomRateType
     */
    public function setFeatures(\ArrayType\ArrayOfRoomRateTypeFeature $features = null)
    {
        $this->Features = $features;
        return $this;
    }
    /**
     * Get BookingCode value
     * @return string|null
     */
    public function getBookingCode()
    {
        return $this->BookingCode;
    }
    /**
     * Set BookingCode value
     * @param string $bookingCode
     * @return \StructType\RoomRateType
     */
    public function setBookingCode($bookingCode = null)
    {
        // validation for constraint: string
        if (!is_null($bookingCode) && !is_string($bookingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingCode)), __LINE__);
        }
        $this->BookingCode = $bookingCode;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \StructType\RoomRateType
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get ExpireDate value
     * @return string|null
     */
    public function getExpireDate()
    {
        return $this->ExpireDate;
    }
    /**
     * Set ExpireDate value
     * @param string $expireDate
     * @return \StructType\RoomRateType
     */
    public function setExpireDate($expireDate = null)
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDate)), __LINE__);
        }
        $this->ExpireDate = $expireDate;
        return $this;
    }
    /**
     * Get RoomTypeCode value
     * @return string|null
     */
    public function getRoomTypeCode()
    {
        return $this->RoomTypeCode;
    }
    /**
     * Set RoomTypeCode value
     * @param string $roomTypeCode
     * @return \StructType\RoomRateType
     */
    public function setRoomTypeCode($roomTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomTypeCode) && !is_string($roomTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomTypeCode)), __LINE__);
        }
        $this->RoomTypeCode = $roomTypeCode;
        return $this;
    }
    /**
     * Get InvBlockCode value
     * @return string|null
     */
    public function getInvBlockCode()
    {
        return $this->InvBlockCode;
    }
    /**
     * Set InvBlockCode value
     * @param string $invBlockCode
     * @return \StructType\RoomRateType
     */
    public function setInvBlockCode($invBlockCode = null)
    {
        // validation for constraint: string
        if (!is_null($invBlockCode) && !is_string($invBlockCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invBlockCode)), __LINE__);
        }
        $this->InvBlockCode = $invBlockCode;
        return $this;
    }
    /**
     * Get NumberOfUnits value
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param int $numberOfUnits
     * @return \StructType\RoomRateType
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfUnits) && !is_numeric($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfUnits)), __LINE__);
        }
        $this->NumberOfUnits = $numberOfUnits;
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
     * @return \StructType\RoomRateType
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
     * Get RoomID value
     * @return string|null
     */
    public function getRoomID()
    {
        return $this->RoomID;
    }
    /**
     * Set RoomID value
     * @param string $roomID
     * @return \StructType\RoomRateType
     */
    public function setRoomID($roomID = null)
    {
        // validation for constraint: string
        if (!is_null($roomID) && !is_string($roomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomID)), __LINE__);
        }
        $this->RoomID = $roomID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RoomRateType
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
