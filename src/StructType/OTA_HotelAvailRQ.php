<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelAvailRQ StructType
 * @subpackage Structs
 */
class OTA_HotelAvailRQ extends AbstractStructBase
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
     * The AvailRequestSegments
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AvailRequestSegments
     */
    public $AvailRequestSegments;
    /**
     * The PrimaryLangID
     * @var string
     */
    public $PrimaryLangID;
    /**
     * Constructor method for OTA_HotelAvailRQ
     * @uses OTA_HotelAvailRQ::setPOS()
     * @uses OTA_HotelAvailRQ::setAvailRequestSegments()
     * @uses OTA_HotelAvailRQ::setPrimaryLangID()
     * @param \ArrayType\ArrayOfSourceType $pOS
     * @param \StructType\AvailRequestSegments $availRequestSegments
     * @param string $primaryLangID
     */
    public function __construct(\ArrayType\ArrayOfSourceType $pOS = null, \StructType\AvailRequestSegments $availRequestSegments = null, $primaryLangID = null)
    {
        $this
            ->setPOS($pOS)
            ->setAvailRequestSegments($availRequestSegments)
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
     * @return \StructType\OTA_HotelAvailRQ
     */
    public function setPOS(\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get AvailRequestSegments value
     * @return \StructType\AvailRequestSegments|null
     */
    public function getAvailRequestSegments()
    {
        return $this->AvailRequestSegments;
    }
    /**
     * Set AvailRequestSegments value
     * @param \StructType\AvailRequestSegments $availRequestSegments
     * @return \StructType\OTA_HotelAvailRQ
     */
    public function setAvailRequestSegments(\StructType\AvailRequestSegments $availRequestSegments = null)
    {
        $this->AvailRequestSegments = $availRequestSegments;
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
     * @return \StructType\OTA_HotelAvailRQ
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
     * @return \StructType\OTA_HotelAvailRQ
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
