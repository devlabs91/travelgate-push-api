<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentCategory StructType
 * @subpackage Structs
 */
class SegmentCategory extends AbstractStructBase
{
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * The CodeDetail
     * @var string
     */
    public $CodeDetail;
    /**
     * Constructor method for SegmentCategory
     * @uses SegmentCategory::setCode()
     * @uses SegmentCategory::setCodeDetail()
     * @param string $code
     * @param string $codeDetail
     */
    public function __construct($code = null, $codeDetail = null)
    {
        $this
            ->setCode($code)
            ->setCodeDetail($codeDetail);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\TravelgatePushApi\StructType\SegmentCategory
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get CodeDetail value
     * @return string|null
     */
    public function getCodeDetail()
    {
        return $this->CodeDetail;
    }
    /**
     * Set CodeDetail value
     * @param string $codeDetail
     * @return \Devlabs91\TravelgatePushApi\StructType\SegmentCategory
     */
    public function setCodeDetail($codeDetail = null)
    {
        // validation for constraint: string
        if (!is_null($codeDetail) && !is_string($codeDetail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeDetail)), __LINE__);
        }
        $this->CodeDetail = $codeDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\SegmentCategory
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
