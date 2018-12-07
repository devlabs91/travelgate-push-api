<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Attractions StructType
 * @subpackage Structs
 */
class Attractions extends AbstractStructBase
{
    /**
     * The Attraction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Attraction[]
     */
    public $Attraction;
    /**
     * The LastUpdated
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for Attractions
     * @uses Attractions::setAttraction()
     * @uses Attractions::setLastUpdated()
     * @param \StructType\Attraction[] $attraction
     * @param string $lastUpdated
     */
    public function __construct(array $attraction = array(), $lastUpdated = null)
    {
        $this
            ->setAttraction($attraction)
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get Attraction value
     * @return \StructType\Attraction[]|null
     */
    public function getAttraction()
    {
        return $this->Attraction;
    }
    /**
     * Set Attraction value
     * @throws \InvalidArgumentException
     * @param \StructType\Attraction[] $attraction
     * @return \StructType\Attractions
     */
    public function setAttraction(array $attraction = array())
    {
        foreach ($attraction as $attractionsAttractionItem) {
            // validation for constraint: itemType
            if (!$attractionsAttractionItem instanceof \StructType\Attraction) {
                throw new \InvalidArgumentException(sprintf('The Attraction property can only contain items of \StructType\Attraction, "%s" given', is_object($attractionsAttractionItem) ? get_class($attractionsAttractionItem) : gettype($attractionsAttractionItem)), __LINE__);
            }
        }
        $this->Attraction = $attraction;
        return $this;
    }
    /**
     * Add item to Attraction value
     * @throws \InvalidArgumentException
     * @param \StructType\Attraction $item
     * @return \StructType\Attractions
     */
    public function addToAttraction(\StructType\Attraction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Attraction) {
            throw new \InvalidArgumentException(sprintf('The Attraction property can only contain items of \StructType\Attraction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Attraction[] = $item;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \StructType\Attractions
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Attractions
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
