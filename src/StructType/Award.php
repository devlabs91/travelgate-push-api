<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Award StructType
 * @subpackage Structs
 */
class Award extends AbstractStructBase
{
    /**
     * The Rating
     * @var string
     */
    public $Rating;
    /**
     * The RatingSymbol
     * @var string
     */
    public $RatingSymbol;
    /**
     * Constructor method for Award
     * @uses Award::setRating()
     * @uses Award::setRatingSymbol()
     * @param string $rating
     * @param string $ratingSymbol
     */
    public function __construct($rating = null, $ratingSymbol = null)
    {
        $this
            ->setRating($rating)
            ->setRatingSymbol($ratingSymbol);
    }
    /**
     * Get Rating value
     * @return string|null
     */
    public function getRating()
    {
        return $this->Rating;
    }
    /**
     * Set Rating value
     * @param string $rating
     * @return \StructType\Award
     */
    public function setRating($rating = null)
    {
        // validation for constraint: string
        if (!is_null($rating) && !is_string($rating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rating)), __LINE__);
        }
        $this->Rating = $rating;
        return $this;
    }
    /**
     * Get RatingSymbol value
     * @return string|null
     */
    public function getRatingSymbol()
    {
        return $this->RatingSymbol;
    }
    /**
     * Set RatingSymbol value
     * @param string $ratingSymbol
     * @return \StructType\Award
     */
    public function setRatingSymbol($ratingSymbol = null)
    {
        // validation for constraint: string
        if (!is_null($ratingSymbol) && !is_string($ratingSymbol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratingSymbol)), __LINE__);
        }
        $this->RatingSymbol = $ratingSymbol;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Award
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
