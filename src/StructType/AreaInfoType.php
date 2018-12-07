<?php

namespace StructType;

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
     * @var \StructType\RefPoints
     */
    public $RefPoints;
    /**
     * The Attractions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Attractions
     */
    public $Attractions;
    /**
     * The Recreations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Recreations
     */
    public $Recreations;
    /**
     * Constructor method for AreaInfoType
     * @uses AreaInfoType::setRefPoints()
     * @uses AreaInfoType::setAttractions()
     * @uses AreaInfoType::setRecreations()
     * @param \StructType\RefPoints $refPoints
     * @param \StructType\Attractions $attractions
     * @param \StructType\Recreations $recreations
     */
    public function __construct(\StructType\RefPoints $refPoints = null, \StructType\Attractions $attractions = null, \StructType\Recreations $recreations = null)
    {
        $this
            ->setRefPoints($refPoints)
            ->setAttractions($attractions)
            ->setRecreations($recreations);
    }
    /**
     * Get RefPoints value
     * @return \StructType\RefPoints|null
     */
    public function getRefPoints()
    {
        return $this->RefPoints;
    }
    /**
     * Set RefPoints value
     * @param \StructType\RefPoints $refPoints
     * @return \StructType\AreaInfoType
     */
    public function setRefPoints(\StructType\RefPoints $refPoints = null)
    {
        $this->RefPoints = $refPoints;
        return $this;
    }
    /**
     * Get Attractions value
     * @return \StructType\Attractions|null
     */
    public function getAttractions()
    {
        return $this->Attractions;
    }
    /**
     * Set Attractions value
     * @param \StructType\Attractions $attractions
     * @return \StructType\AreaInfoType
     */
    public function setAttractions(\StructType\Attractions $attractions = null)
    {
        $this->Attractions = $attractions;
        return $this;
    }
    /**
     * Get Recreations value
     * @return \StructType\Recreations|null
     */
    public function getRecreations()
    {
        return $this->Recreations;
    }
    /**
     * Set Recreations value
     * @param \StructType\Recreations $recreations
     * @return \StructType\AreaInfoType
     */
    public function setRecreations(\StructType\Recreations $recreations = null)
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
     * @return \StructType\AreaInfoType
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
