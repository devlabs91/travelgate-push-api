<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultimediaDescriptionsType StructType
 * @subpackage Structs
 */
class MultimediaDescriptionsType extends AbstractStructBase
{
    /**
     * The MultimediaDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType[]
     */
    public $MultimediaDescription;
    /**
     * The LastUpdated
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for MultimediaDescriptionsType
     * @uses MultimediaDescriptionsType::setMultimediaDescription()
     * @uses MultimediaDescriptionsType::setLastUpdated()
     * @param \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType[] $multimediaDescription
     * @param string $lastUpdated
     */
    public function __construct(array $multimediaDescription = array(), $lastUpdated = null)
    {
        $this
            ->setMultimediaDescription($multimediaDescription)
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get MultimediaDescription value
     * @return \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType[]|null
     */
    public function getMultimediaDescription()
    {
        return $this->MultimediaDescription;
    }
    /**
     * Set MultimediaDescription value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType[] $multimediaDescription
     * @return \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType
     */
    public function setMultimediaDescription(array $multimediaDescription = array())
    {
        foreach ($multimediaDescription as $multimediaDescriptionsTypeMultimediaDescriptionItem) {
            // validation for constraint: itemType
            if (!$multimediaDescriptionsTypeMultimediaDescriptionItem instanceof \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType) {
                throw new \InvalidArgumentException(sprintf('The MultimediaDescription property can only contain items of \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType, "%s" given', is_object($multimediaDescriptionsTypeMultimediaDescriptionItem) ? get_class($multimediaDescriptionsTypeMultimediaDescriptionItem) : gettype($multimediaDescriptionsTypeMultimediaDescriptionItem)), __LINE__);
            }
        }
        $this->MultimediaDescription = $multimediaDescription;
        return $this;
    }
    /**
     * Add item to MultimediaDescription value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType $item
     * @return \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType
     */
    public function addToMultimediaDescription(\Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType) {
            throw new \InvalidArgumentException(sprintf('The MultimediaDescription property can only contain items of \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MultimediaDescription[] = $item;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType
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
     * @return \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType
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
