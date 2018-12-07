<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelAvailNotifRQ StructType
 * @subpackage Structs
 */
class OTA_HotelAvailNotifRQ extends AbstractStructBase
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
     * The AvailStatusMessages
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AvailStatusMessages
     */
    public $AvailStatusMessages;
    /**
     * The PrimaryLangID
     * @var string
     */
    public $PrimaryLangID;
    /**
     * Constructor method for OTA_HotelAvailNotifRQ
     * @uses OTA_HotelAvailNotifRQ::setPOS()
     * @uses OTA_HotelAvailNotifRQ::setAvailStatusMessages()
     * @uses OTA_HotelAvailNotifRQ::setPrimaryLangID()
     * @param \ArrayType\ArrayOfSourceType $pOS
     * @param \StructType\AvailStatusMessages $availStatusMessages
     * @param string $primaryLangID
     */
    public function __construct(\ArrayType\ArrayOfSourceType $pOS = null, \StructType\AvailStatusMessages $availStatusMessages = null, $primaryLangID = null)
    {
        $this
            ->setPOS($pOS)
            ->setAvailStatusMessages($availStatusMessages)
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
     * @return \StructType\OTA_HotelAvailNotifRQ
     */
    public function setPOS(\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get AvailStatusMessages value
     * @return \StructType\AvailStatusMessages|null
     */
    public function getAvailStatusMessages()
    {
        return $this->AvailStatusMessages;
    }
    /**
     * Set AvailStatusMessages value
     * @param \StructType\AvailStatusMessages $availStatusMessages
     * @return \StructType\OTA_HotelAvailNotifRQ
     */
    public function setAvailStatusMessages(\StructType\AvailStatusMessages $availStatusMessages = null)
    {
        $this->AvailStatusMessages = $availStatusMessages;
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
     * @return \StructType\OTA_HotelAvailNotifRQ
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
     * @return \StructType\OTA_HotelAvailNotifRQ
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
