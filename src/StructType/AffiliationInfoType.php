<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AffiliationInfoType StructType
 * @subpackage Structs
 */
class AffiliationInfoType extends AbstractStructBase
{
    /**
     * The Awards
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAffiliationInfoTypeAward
     */
    public $Awards;
    /**
     * Constructor method for AffiliationInfoType
     * @uses AffiliationInfoType::setAwards()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAffiliationInfoTypeAward $awards
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAffiliationInfoTypeAward $awards = null)
    {
        $this
            ->setAwards($awards);
    }
    /**
     * Get Awards value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAffiliationInfoTypeAward|null
     */
    public function getAwards()
    {
        return $this->Awards;
    }
    /**
     * Set Awards value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAffiliationInfoTypeAward $awards
     * @return \Devlabs91\TravelgatePushApi\StructType\AffiliationInfoType
     */
    public function setAwards(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAffiliationInfoTypeAward $awards = null)
    {
        $this->Awards = $awards;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\AffiliationInfoType
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
