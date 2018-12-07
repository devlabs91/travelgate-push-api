<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_CancelRQ StructType
 * @subpackage Structs
 */
class OTA_CancelRQ extends AbstractStructBase
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\UniqueID[]
     */
    public $UniqueID;
    /**
     * The PrimaryLangID
     * @var string
     */
    public $PrimaryLangID;
    /**
     * Constructor method for OTA_CancelRQ
     * @uses OTA_CancelRQ::setPOS()
     * @uses OTA_CancelRQ::setUniqueID()
     * @uses OTA_CancelRQ::setPrimaryLangID()
     * @param \ArrayType\ArrayOfSourceType $pOS
     * @param \StructType\UniqueID[] $uniqueID
     * @param string $primaryLangID
     */
    public function __construct(\ArrayType\ArrayOfSourceType $pOS = null, array $uniqueID = array(), $primaryLangID = null)
    {
        $this
            ->setPOS($pOS)
            ->setUniqueID($uniqueID)
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
     * @return \StructType\OTA_CancelRQ
     */
    public function setPOS(\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return \StructType\UniqueID[]|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @throws \InvalidArgumentException
     * @param \StructType\UniqueID[] $uniqueID
     * @return \StructType\OTA_CancelRQ
     */
    public function setUniqueID(array $uniqueID = array())
    {
        foreach ($uniqueID as $oTA_CancelRQUniqueIDItem) {
            // validation for constraint: itemType
            if (!$oTA_CancelRQUniqueIDItem instanceof \StructType\UniqueID) {
                throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of \StructType\UniqueID, "%s" given', is_object($oTA_CancelRQUniqueIDItem) ? get_class($oTA_CancelRQUniqueIDItem) : gettype($oTA_CancelRQUniqueIDItem)), __LINE__);
            }
        }
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Add item to UniqueID value
     * @throws \InvalidArgumentException
     * @param \StructType\UniqueID $item
     * @return \StructType\OTA_CancelRQ
     */
    public function addToUniqueID(\StructType\UniqueID $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\UniqueID) {
            throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of \StructType\UniqueID, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UniqueID[] = $item;
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
     * @return \StructType\OTA_CancelRQ
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
     * @return \StructType\OTA_CancelRQ
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
