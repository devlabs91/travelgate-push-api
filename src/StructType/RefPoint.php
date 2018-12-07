<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefPoint StructType
 * @subpackage Structs
 */
class RefPoint extends RelativePositionType
{
    /**
     * The RefPointName
     * @var string
     */
    public $RefPointName;
    /**
     * The Latitude
     * @var string
     */
    public $Latitude;
    /**
     * The Longitude
     * @var string
     */
    public $Longitude;
    /**
     * Constructor method for RefPoint
     * @uses RefPoint::setRefPointName()
     * @uses RefPoint::setLatitude()
     * @uses RefPoint::setLongitude()
     * @param string $refPointName
     * @param string $latitude
     * @param string $longitude
     */
    public function __construct($refPointName = null, $latitude = null, $longitude = null)
    {
        $this
            ->setRefPointName($refPointName)
            ->setLatitude($latitude)
            ->setLongitude($longitude);
    }
    /**
     * Get RefPointName value
     * @return string|null
     */
    public function getRefPointName()
    {
        return $this->RefPointName;
    }
    /**
     * Set RefPointName value
     * @param string $refPointName
     * @return \StructType\RefPoint
     */
    public function setRefPointName($refPointName = null)
    {
        // validation for constraint: string
        if (!is_null($refPointName) && !is_string($refPointName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refPointName)), __LINE__);
        }
        $this->RefPointName = $refPointName;
        return $this;
    }
    /**
     * Get Latitude value
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param string $latitude
     * @return \StructType\RefPoint
     */
    public function setLatitude($latitude = null)
    {
        // validation for constraint: string
        if (!is_null($latitude) && !is_string($latitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($latitude)), __LINE__);
        }
        $this->Latitude = $latitude;
        return $this;
    }
    /**
     * Get Longitude value
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param string $longitude
     * @return \StructType\RefPoint
     */
    public function setLongitude($longitude = null)
    {
        // validation for constraint: string
        if (!is_null($longitude) && !is_string($longitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($longitude)), __LINE__);
        }
        $this->Longitude = $longitude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RefPoint
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
