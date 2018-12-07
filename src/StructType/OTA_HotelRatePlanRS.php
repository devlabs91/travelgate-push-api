<?php

namespace Devlabs91\TravelgatePushApi\StructType;

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
     * @var \Devlabs91\TravelgatePushApi\StructType\ErrorsType
     */
    public $Errors;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\SuccessType
     */
    public $Success;
    /**
     * The RatePlans
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\RatePlans[]
     */
    public $RatePlans;
    /**
     * Constructor method for OTA_HotelRatePlanRS
     * @uses OTA_HotelRatePlanRS::setErrors()
     * @uses OTA_HotelRatePlanRS::setSuccess()
     * @uses OTA_HotelRatePlanRS::setRatePlans()
     * @param \Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors
     * @param \Devlabs91\TravelgatePushApi\StructType\SuccessType $success
     * @param \Devlabs91\TravelgatePushApi\StructType\RatePlans[] $ratePlans
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors = null, \Devlabs91\TravelgatePushApi\StructType\SuccessType $success = null, array $ratePlans = array())
    {
        $this
            ->setErrors($errors)
            ->setSuccess($success)
            ->setRatePlans($ratePlans);
    }
    /**
     * Get Errors value
     * @return \Devlabs91\TravelgatePushApi\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS
     */
    public function setErrors(\Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Success value
     * @return \Devlabs91\TravelgatePushApi\StructType\SuccessType|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param \Devlabs91\TravelgatePushApi\StructType\SuccessType $success
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS
     */
    public function setSuccess(\Devlabs91\TravelgatePushApi\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get RatePlans value
     * @return \Devlabs91\TravelgatePushApi\StructType\RatePlans[]|null
     */
    public function getRatePlans()
    {
        return $this->RatePlans;
    }
    /**
     * Set RatePlans value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\RatePlans[] $ratePlans
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS
     */
    public function setRatePlans(array $ratePlans = array())
    {
        foreach ($ratePlans as $oTA_HotelRatePlanRSRatePlansItem) {
            // validation for constraint: itemType
            if (!$oTA_HotelRatePlanRSRatePlansItem instanceof \Devlabs91\TravelgatePushApi\StructType\RatePlans) {
                throw new \InvalidArgumentException(sprintf('The RatePlans property can only contain items of \Devlabs91\TravelgatePushApi\StructType\RatePlans, "%s" given', is_object($oTA_HotelRatePlanRSRatePlansItem) ? get_class($oTA_HotelRatePlanRSRatePlansItem) : gettype($oTA_HotelRatePlanRSRatePlansItem)), __LINE__);
            }
        }
        $this->RatePlans = $ratePlans;
        return $this;
    }
    /**
     * Add item to RatePlans value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\RatePlans $item
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS
     */
    public function addToRatePlans(\Devlabs91\TravelgatePushApi\StructType\RatePlans $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\RatePlans) {
            throw new \InvalidArgumentException(sprintf('The RatePlans property can only contain items of \Devlabs91\TravelgatePushApi\StructType\RatePlans, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS
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
