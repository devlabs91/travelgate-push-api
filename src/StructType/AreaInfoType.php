<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AreaInfoType StructType
 * @subpackage Structs
 */
class AreaInfoType extends AbstractStructBase
{
    /**
     * The RefPoints
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\RefPoints
     */
    public $RefPoints;
    /**
     * The Attractions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Attractions
     */
    public $Attractions;
    /**
     * The Recreations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Recreations
     */
    public $Recreations;
    /**
     * Constructor method for AreaInfoType
     * @uses AreaInfoType::setRefPoints()
     * @uses AreaInfoType::setAttractions()
     * @uses AreaInfoType::setRecreations()
     * @param \Devlabs91\TravelgatePushApi\StructType\RefPoints $refPoints
     * @param \Devlabs91\TravelgatePushApi\StructType\Attractions $attractions
     * @param \Devlabs91\TravelgatePushApi\StructType\Recreations $recreations
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\RefPoints $refPoints = null, \Devlabs91\TravelgatePushApi\StructType\Attractions $attractions = null, \Devlabs91\TravelgatePushApi\StructType\Recreations $recreations = null)
    {
        $this
            ->setRefPoints($refPoints)
            ->setAttractions($attractions)
            ->setRecreations($recreations);
    }
    /**
     * Get RefPoints value
     * @return \Devlabs91\TravelgatePushApi\StructType\RefPoints|null
     */
    public function getRefPoints()
    {
        return $this->RefPoints;
    }
    /**
     * Set RefPoints value
     * @param \Devlabs91\TravelgatePushApi\StructType\RefPoints $refPoints
     * @return \Devlabs91\TravelgatePushApi\StructType\AreaInfoType
     */
    public function setRefPoints(\Devlabs91\TravelgatePushApi\StructType\RefPoints $refPoints = null)
    {
        $this->RefPoints = $refPoints;
        return $this;
    }
    /**
     * Get Attractions value
     * @return \Devlabs91\TravelgatePushApi\StructType\Attractions|null
     */
    public function getAttractions()
    {
        return $this->Attractions;
    }
    /**
     * Set Attractions value
     * @param \Devlabs91\TravelgatePushApi\StructType\Attractions $attractions
     * @return \Devlabs91\TravelgatePushApi\StructType\AreaInfoType
     */
    public function setAttractions(\Devlabs91\TravelgatePushApi\StructType\Attractions $attractions = null)
    {
        $this->Attractions = $attractions;
        return $this;
    }
    /**
     * Get Recreations value
     * @return \Devlabs91\TravelgatePushApi\StructType\Recreations|null
     */
    public function getRecreations()
    {
        return $this->Recreations;
    }
    /**
     * Set Recreations value
     * @param \Devlabs91\TravelgatePushApi\StructType\Recreations $recreations
     * @return \Devlabs91\TravelgatePushApi\StructType\AreaInfoType
     */
    public function setRecreations(\Devlabs91\TravelgatePushApi\StructType\Recreations $recreations = null)
    {
        $this->Recreations = $recreations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\AreaInfoType
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
