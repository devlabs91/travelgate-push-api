<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelDescriptiveInfoRS StructType
 * @subpackage Structs
 */
class OTA_HotelDescriptiveInfoRS extends AbstractStructBase
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
     * The HotelDescriptiveContents
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents[]
     */
    public $HotelDescriptiveContents;
    /**
     * Constructor method for OTA_HotelDescriptiveInfoRS
     * @uses OTA_HotelDescriptiveInfoRS::setErrors()
     * @uses OTA_HotelDescriptiveInfoRS::setSuccess()
     * @uses OTA_HotelDescriptiveInfoRS::setHotelDescriptiveContents()
     * @param \Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors
     * @param \Devlabs91\TravelgatePushApi\StructType\SuccessType $success
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents[] $hotelDescriptiveContents
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\ErrorsType $errors = null, \Devlabs91\TravelgatePushApi\StructType\SuccessType $success = null, array $hotelDescriptiveContents = array())
    {
        $this
            ->setErrors($errors)
            ->setSuccess($success)
            ->setHotelDescriptiveContents($hotelDescriptiveContents);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRS
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
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRS
     */
    public function setSuccess(\Devlabs91\TravelgatePushApi\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get HotelDescriptiveContents value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents[]|null
     */
    public function getHotelDescriptiveContents()
    {
        return $this->HotelDescriptiveContents;
    }
    /**
     * Set HotelDescriptiveContents value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents[] $hotelDescriptiveContents
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRS
     */
    public function setHotelDescriptiveContents(array $hotelDescriptiveContents = array())
    {
        foreach ($hotelDescriptiveContents as $oTA_HotelDescriptiveInfoRSHotelDescriptiveContentsItem) {
            // validation for constraint: itemType
            if (!$oTA_HotelDescriptiveInfoRSHotelDescriptiveContentsItem instanceof \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents) {
                throw new \InvalidArgumentException(sprintf('The HotelDescriptiveContents property can only contain items of \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents, "%s" given', is_object($oTA_HotelDescriptiveInfoRSHotelDescriptiveContentsItem) ? get_class($oTA_HotelDescriptiveInfoRSHotelDescriptiveContentsItem) : gettype($oTA_HotelDescriptiveInfoRSHotelDescriptiveContentsItem)), __LINE__);
            }
        }
        $this->HotelDescriptiveContents = $hotelDescriptiveContents;
        return $this;
    }
    /**
     * Add item to HotelDescriptiveContents value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents $item
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRS
     */
    public function addToHotelDescriptiveContents(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents) {
            throw new \InvalidArgumentException(sprintf('The HotelDescriptiveContents property can only contain items of \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelDescriptiveContents[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRS
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
