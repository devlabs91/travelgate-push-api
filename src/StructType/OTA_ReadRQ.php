<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_ReadRQ StructType
 * @subpackage Structs
 */
class OTA_ReadRQ extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType
     */
    public $POS;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type
     */
    public $UniqueID;
    /**
     * The ReadRequests
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ReadRequests
     */
    public $ReadRequests;
    /**
     * The PrimaryLangID
     * @var string
     */
    public $PrimaryLangID;
    /**
     * Constructor method for OTA_ReadRQ
     * @uses OTA_ReadRQ::setPOS()
     * @uses OTA_ReadRQ::setUniqueID()
     * @uses OTA_ReadRQ::setReadRequests()
     * @uses OTA_ReadRQ::setPrimaryLangID()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS
     * @param \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type $uniqueID
     * @param \Devlabs91\TravelgatePushApi\StructType\ReadRequests $readRequests
     * @param string $primaryLangID
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS = null, \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type $uniqueID = null, \Devlabs91\TravelgatePushApi\StructType\ReadRequests $readRequests = null, $primaryLangID = null)
    {
        $this
            ->setPOS($pOS)
            ->setUniqueID($uniqueID)
            ->setReadRequests($readRequests)
            ->setPrimaryLangID($primaryLangID);
    }
    /**
     * Get POS value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_ReadRQ
     */
    public function setPOS(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type $uniqueID
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_ReadRQ
     */
    public function setUniqueID(\Devlabs91\TravelgatePushApi\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get ReadRequests value
     * @return \Devlabs91\TravelgatePushApi\StructType\ReadRequests|null
     */
    public function getReadRequests()
    {
        return $this->ReadRequests;
    }
    /**
     * Set ReadRequests value
     * @param \Devlabs91\TravelgatePushApi\StructType\ReadRequests $readRequests
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_ReadRQ
     */
    public function setReadRequests(\Devlabs91\TravelgatePushApi\StructType\ReadRequests $readRequests = null)
    {
        $this->ReadRequests = $readRequests;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_ReadRQ
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_ReadRQ
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
