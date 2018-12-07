<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelRatePlanRS StructType
 * @subpackage Structs
 */
class OTA_HotelRatePlanRS extends AbstractStructBase
{
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ErrorsType
     */
    public $Errors;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SuccessType
     */
    public $Success;
    /**
     * The RatePlans
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RatePlans[]
     */
    public $RatePlans;
    /**
     * Constructor method for OTA_HotelRatePlanRS
     * @uses OTA_HotelRatePlanRS::setErrors()
     * @uses OTA_HotelRatePlanRS::setSuccess()
     * @uses OTA_HotelRatePlanRS::setRatePlans()
     * @param \StructType\ErrorsType $errors
     * @param \StructType\SuccessType $success
     * @param \StructType\RatePlans[] $ratePlans
     */
    public function __construct(\StructType\ErrorsType $errors = null, \StructType\SuccessType $success = null, array $ratePlans = array())
    {
        $this
            ->setErrors($errors)
            ->setSuccess($success)
            ->setRatePlans($ratePlans);
    }
    /**
     * Get Errors value
     * @return \StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \StructType\ErrorsType $errors
     * @return \StructType\OTA_HotelRatePlanRS
     */
    public function setErrors(\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Success value
     * @return \StructType\SuccessType|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param \StructType\SuccessType $success
     * @return \StructType\OTA_HotelRatePlanRS
     */
    public function setSuccess(\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get RatePlans value
     * @return \StructType\RatePlans[]|null
     */
    public function getRatePlans()
    {
        return $this->RatePlans;
    }
    /**
     * Set RatePlans value
     * @throws \InvalidArgumentException
     * @param \StructType\RatePlans[] $ratePlans
     * @return \StructType\OTA_HotelRatePlanRS
     */
    public function setRatePlans(array $ratePlans = array())
    {
        foreach ($ratePlans as $oTA_HotelRatePlanRSRatePlansItem) {
            // validation for constraint: itemType
            if (!$oTA_HotelRatePlanRSRatePlansItem instanceof \StructType\RatePlans) {
                throw new \InvalidArgumentException(sprintf('The RatePlans property can only contain items of \StructType\RatePlans, "%s" given', is_object($oTA_HotelRatePlanRSRatePlansItem) ? get_class($oTA_HotelRatePlanRSRatePlansItem) : gettype($oTA_HotelRatePlanRSRatePlansItem)), __LINE__);
            }
        }
        $this->RatePlans = $ratePlans;
        return $this;
    }
    /**
     * Add item to RatePlans value
     * @throws \InvalidArgumentException
     * @param \StructType\RatePlans $item
     * @return \StructType\OTA_HotelRatePlanRS
     */
    public function addToRatePlans(\StructType\RatePlans $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RatePlans) {
            throw new \InvalidArgumentException(sprintf('The RatePlans property can only contain items of \StructType\RatePlans, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatePlans[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OTA_HotelRatePlanRS
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
