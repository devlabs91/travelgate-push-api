<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EncryptionTokenType StructType
 * @subpackage Structs
 */
class EncryptionTokenType extends AbstractStructBase
{
    /**
     * The PlainText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PlainText;
    /**
     * Constructor method for EncryptionTokenType
     * @uses EncryptionTokenType::setPlainText()
     * @param string $plainText
     */
    public function __construct($plainText = null)
    {
        $this
            ->setPlainText($plainText);
    }
    /**
     * Get PlainText value
     * @return string|null
     */
    public function getPlainText()
    {
        return $this->PlainText;
    }
    /**
     * Set PlainText value
     * @param string $plainText
     * @return \StructType\EncryptionTokenType
     */
    public function setPlainText($plainText = null)
    {
        // validation for constraint: string
        if (!is_null($plainText) && !is_string($plainText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($plainText)), __LINE__);
        }
        $this->PlainText = $plainText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EncryptionTokenType
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
