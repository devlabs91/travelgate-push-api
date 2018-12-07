<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelRatePlanRQ StructType
 * @subpackage Structs
 */
class OTA_HotelRatePlanRQ extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfSourceType
     */
    public $POS;
    /**
     * The RatePlans
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfOTA_HotelRatePlanRQRatePlan
     */
    public $RatePlans;
    /**
     * The PrimaryLangID
     * @var string
     */
    public $PrimaryLangID;
    /**
     * Constructor method for OTA_HotelRatePlanRQ
     * @uses OTA_HotelRatePlanRQ::setPOS()
     * @uses OTA_HotelRatePlanRQ::setRatePlans()
     * @uses OTA_HotelRatePlanRQ::setPrimaryLangID()
     * @param \ArrayType\ArrayOfSourceType $pOS
     * @param \ArrayType\ArrayOfOTA_HotelRatePlanRQRatePlan $ratePlans
     * @param string $primaryLangID
     */
    public function __construct(\ArrayType\ArrayOfSourceType $pOS = null, \ArrayType\ArrayOfOTA_HotelRatePlanRQRatePlan $ratePlans = null, $primaryLangID = null)
    {
        $this
            ->setPOS($pOS)
            ->setRatePlans($ratePlans)
            ->setPrimaryLangID($primaryLangID);
    }
    /**
     * Get POS value
     * @return \ArrayType\ArrayOfSourceType|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \ArrayType\ArrayOfSourceType $pOS
     * @return \StructType\OTA_HotelRatePlanRQ
     */
    public function setPOS(\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get RatePlans value
     * @return \ArrayType\ArrayOfOTA_HotelRatePlanRQRatePlan|null
     */
    public function getRatePlans()
    {
        return $this->RatePlans;
    }
    /**
     * Set RatePlans value
     * @param \ArrayType\ArrayOfOTA_HotelRatePlanRQRatePlan $ratePlans
     * @return \StructType\OTA_HotelRatePlanRQ
     */
    public function setRatePlans(\ArrayType\ArrayOfOTA_HotelRatePlanRQRatePlan $ratePlans = null)
    {
        $this->RatePlans = $ratePlans;
        return $this;
    }
    /**
     * Get PrimaryLangID value
     * @return string|null
     */
    public function getPrimaryLangID()
    {
        return $this->PrimaryLangID;
    }
    /**
     * Set PrimaryLangID value
     * @param string $primaryLangID
     * @return \StructType\OTA_HotelRatePlanRQ
     */
    public function setPrimaryLangID($primaryLangID = null)
    {
        // validation for constraint: string
        if (!is_null($primaryLangID) && !is_string($primaryLangID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryLangID)), __LINE__);
        }
        $this->PrimaryLangID = $primaryLangID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OTA_HotelRatePlanRQ
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
