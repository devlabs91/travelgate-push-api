<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelAvailGetRQ StructType
 * @subpackage Structs
 */
class OTA_HotelAvailGetRQ extends AbstractStructBase
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
     * The HotelAvailRequests
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfOTA_HotelAvailGetRQHotelAvailRequest
     */
    public $HotelAvailRequests;
    /**
     * The PrimaryLangID
     * @var string
     */
    public $PrimaryLangID;
    /**
     * Constructor method for OTA_HotelAvailGetRQ
     * @uses OTA_HotelAvailGetRQ::setPOS()
     * @uses OTA_HotelAvailGetRQ::setHotelAvailRequests()
     * @uses OTA_HotelAvailGetRQ::setPrimaryLangID()
     * @param \ArrayType\ArrayOfSourceType $pOS
     * @param \ArrayType\ArrayOfOTA_HotelAvailGetRQHotelAvailRequest $hotelAvailRequests
     * @param string $primaryLangID
     */
    public function __construct(\ArrayType\ArrayOfSourceType $pOS = null, \ArrayType\ArrayOfOTA_HotelAvailGetRQHotelAvailRequest $hotelAvailRequests = null, $primaryLangID = null)
    {
        $this
            ->setPOS($pOS)
            ->setHotelAvailRequests($hotelAvailRequests)
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
     * @return \StructType\OTA_HotelAvailGetRQ
     */
    public function setPOS(\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get HotelAvailRequests value
     * @return \ArrayType\ArrayOfOTA_HotelAvailGetRQHotelAvailRequest|null
     */
    public function getHotelAvailRequests()
    {
        return $this->HotelAvailRequests;
    }
    /**
     * Set HotelAvailRequests value
     * @param \ArrayType\ArrayOfOTA_HotelAvailGetRQHotelAvailRequest $hotelAvailRequests
     * @return \StructType\OTA_HotelAvailGetRQ
     */
    public function setHotelAvailRequests(\ArrayType\ArrayOfOTA_HotelAvailGetRQHotelAvailRequest $hotelAvailRequests = null)
    {
        $this->HotelAvailRequests = $hotelAvailRequests;
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
     * @return \StructType\OTA_HotelAvailGetRQ
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
     * @return \StructType\OTA_HotelAvailGetRQ
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
