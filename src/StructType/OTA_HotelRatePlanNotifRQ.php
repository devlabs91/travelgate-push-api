<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelRatePlanNotifRQ StructType
 * @subpackage Structs
 */
class OTA_HotelRatePlanNotifRQ extends AbstractStructBase
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
     * @var \StructType\RatePlans
     */
    public $RatePlans;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TPA_ExtensionsType
     */
    public $TPA_Extensions;
    /**
     * The PrimaryLangID
     * @var string
     */
    public $PrimaryLangID;
    /**
     * Constructor method for OTA_HotelRatePlanNotifRQ
     * @uses OTA_HotelRatePlanNotifRQ::setPOS()
     * @uses OTA_HotelRatePlanNotifRQ::setRatePlans()
     * @uses OTA_HotelRatePlanNotifRQ::setTPA_Extensions()
     * @uses OTA_HotelRatePlanNotifRQ::setPrimaryLangID()
     * @param \ArrayType\ArrayOfSourceType $pOS
     * @param \StructType\RatePlans $ratePlans
     * @param \StructType\TPA_ExtensionsType $tPA_Extensions
     * @param string $primaryLangID
     */
    public function __construct(\ArrayType\ArrayOfSourceType $pOS = null, \StructType\RatePlans $ratePlans = null, \StructType\TPA_ExtensionsType $tPA_Extensions = null, $primaryLangID = null)
    {
        $this
            ->setPOS($pOS)
            ->setRatePlans($ratePlans)
            ->setTPA_Extensions($tPA_Extensions)
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
     * @return \StructType\OTA_HotelRatePlanNotifRQ
     */
    public function setPOS(\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get RatePlans value
     * @return \StructType\RatePlans|null
     */
    public function getRatePlans()
    {
        return $this->RatePlans;
    }
    /**
     * Set RatePlans value
     * @param \StructType\RatePlans $ratePlans
     * @return \StructType\OTA_HotelRatePlanNotifRQ
     */
    public function setRatePlans(\StructType\RatePlans $ratePlans = null)
    {
        $this->RatePlans = $ratePlans;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return \StructType\TPA_ExtensionsType|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param \StructType\TPA_ExtensionsType $tPA_Extensions
     * @return \StructType\OTA_HotelRatePlanNotifRQ
     */
    public function setTPA_Extensions(\StructType\TPA_ExtensionsType $tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
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
     * @return \StructType\OTA_HotelRatePlanNotifRQ
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
     * @return \StructType\OTA_HotelRatePlanNotifRQ
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
