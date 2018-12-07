<?php

namespace StructType;

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
     * @var \ArrayType\ArrayOfSourceType
     */
    public $POS;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\UniqueID_Type
     */
    public $UniqueID;
    /**
     * The ReadRequests
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReadRequests
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
     * @param \ArrayType\ArrayOfSourceType $pOS
     * @param \StructType\UniqueID_Type $uniqueID
     * @param \StructType\ReadRequests $readRequests
     * @param string $primaryLangID
     */
    public function __construct(\ArrayType\ArrayOfSourceType $pOS = null, \StructType\UniqueID_Type $uniqueID = null, \StructType\ReadRequests $readRequests = null, $primaryLangID = null)
    {
        $this
            ->setPOS($pOS)
            ->setUniqueID($uniqueID)
            ->setReadRequests($readRequests)
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
     * @return \StructType\OTA_ReadRQ
     */
    public function setPOS(\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return \StructType\UniqueID_Type|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param \StructType\UniqueID_Type $uniqueID
     * @return \StructType\OTA_ReadRQ
     */
    public function setUniqueID(\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get ReadRequests value
     * @return \StructType\ReadRequests|null
     */
    public function getReadRequests()
    {
        return $this->ReadRequests;
    }
    /**
     * Set ReadRequests value
     * @param \StructType\ReadRequests $readRequests
     * @return \StructType\OTA_ReadRQ
     */
    public function setReadRequests(\StructType\ReadRequests $readRequests = null)
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
     * @return \StructType\OTA_ReadRQ
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
     * @return \StructType\OTA_ReadRQ
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
