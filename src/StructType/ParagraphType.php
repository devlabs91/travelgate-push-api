<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParagraphType StructType
 * @subpackage Structs
 */
class ParagraphType extends AbstractStructBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FormattedTextTextType
     */
    public $Text;
    /**
     * The Image
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var mixed
     */
    public $Image;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * Constructor method for ParagraphType
     * @uses ParagraphType::setText()
     * @uses ParagraphType::setImage()
     * @uses ParagraphType::setName()
     * @param \StructType\FormattedTextTextType $text
     * @param mixed $image
     * @param string $name
     */
    public function __construct(\StructType\FormattedTextTextType $text = null, $image = null, $name = null)
    {
        $this
            ->setText($text)
            ->setImage($image)
            ->setName($name);
    }
    /**
     * Get Text value
     * @return \StructType\FormattedTextTextType|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param \StructType\FormattedTextTextType $text
     * @return \StructType\ParagraphType
     */
    public function setText(\StructType\FormattedTextTextType $text = null)
    {
        $this->Text = $text;
        return $this;
    }
    /**
     * Get Image value
     * @return mixed|null
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * Set Image value
     * @param mixed $image
     * @return \StructType\ParagraphType
     */
    public function setImage($image = null)
    {
        $this->Image = $image;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\ParagraphType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ParagraphType
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
