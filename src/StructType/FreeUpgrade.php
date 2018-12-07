<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreeUpgrade StructType
 * @subpackage Structs
 */
class FreeUpgrade extends AbstractStructBase
{
    /**
     * The UpgradeFrom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\UpgradeFrom
     */
    public $UpgradeFrom;
    /**
     * The UpgradeTo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\UpgradeTo
     */
    public $UpgradeTo;
    /**
     * Constructor method for FreeUpgrade
     * @uses FreeUpgrade::setUpgradeFrom()
     * @uses FreeUpgrade::setUpgradeTo()
     * @param \StructType\UpgradeFrom $upgradeFrom
     * @param \StructType\UpgradeTo $upgradeTo
     */
    public function __construct(\StructType\UpgradeFrom $upgradeFrom = null, \StructType\UpgradeTo $upgradeTo = null)
    {
        $this
            ->setUpgradeFrom($upgradeFrom)
            ->setUpgradeTo($upgradeTo);
    }
    /**
     * Get UpgradeFrom value
     * @return \StructType\UpgradeFrom|null
     */
    public function getUpgradeFrom()
    {
        return $this->UpgradeFrom;
    }
    /**
     * Set UpgradeFrom value
     * @param \StructType\UpgradeFrom $upgradeFrom
     * @return \StructType\FreeUpgrade
     */
    public function setUpgradeFrom(\StructType\UpgradeFrom $upgradeFrom = null)
    {
        $this->UpgradeFrom = $upgradeFrom;
        return $this;
    }
    /**
     * Get UpgradeTo value
     * @return \StructType\UpgradeTo|null
     */
    public function getUpgradeTo()
    {
        return $this->UpgradeTo;
    }
    /**
     * Set UpgradeTo value
     * @param \StructType\UpgradeTo $upgradeTo
     * @return \StructType\FreeUpgrade
     */
    public function setUpgradeTo(\StructType\UpgradeTo $upgradeTo = null)
    {
        $this->UpgradeTo = $upgradeTo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FreeUpgrade
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
