<?php

namespace Devlabs91\TravelgatePushApi\EnumType;

/**
 * This class stands for List_PaymentCardIssuer_Base EnumType
 * @subpackage Enumerations
 */
class List_PaymentCardIssuer_Base
{
    /**
     * Constant for value 'AmericanExpress'
     * @return string 'AmericanExpress'
     */
    const VALUE_AMERICAN_EXPRESS = 'AmericanExpress';
    /**
     * Constant for value 'BankOfAmerica'
     * @return string 'BankOfAmerica'
     */
    const VALUE_BANK_OF_AMERICA = 'BankOfAmerica';
    /**
     * Constant for value 'BritishAirways'
     * @return string 'BritishAirways'
     */
    const VALUE_BRITISH_AIRWAYS = 'BritishAirways';
    /**
     * Constant for value 'CapitalOne'
     * @return string 'CapitalOne'
     */
    const VALUE_CAPITAL_ONE = 'CapitalOne';
    /**
     * Constant for value 'Chase'
     * @return string 'Chase'
     */
    const VALUE_CHASE = 'Chase';
    /**
     * Constant for value 'Citibank'
     * @return string 'Citibank'
     */
    const VALUE_CITIBANK = 'Citibank';
    /**
     * Constant for value 'ContinentalAirlines'
     * @return string 'ContinentalAirlines'
     */
    const VALUE_CONTINENTAL_AIRLINES = 'ContinentalAirlines';
    /**
     * Constant for value 'DeltaAirlines'
     * @return string 'DeltaAirlines'
     */
    const VALUE_DELTA_AIRLINES = 'DeltaAirlines';
    /**
     * Constant for value 'DiscoverCard'
     * @return string 'DiscoverCard'
     */
    const VALUE_DISCOVER_CARD = 'DiscoverCard';
    /**
     * Constant for value 'Disney'
     * @return string 'Disney'
     */
    const VALUE_DISNEY = 'Disney';
    /**
     * Constant for value 'Eurocard'
     * @return string 'Eurocard'
     */
    const VALUE_EUROCARD = 'Eurocard';
    /**
     * Constant for value 'Hilton'
     * @return string 'Hilton'
     */
    const VALUE_HILTON = 'Hilton';
    /**
     * Constant for value 'Hyatt'
     * @return string 'Hyatt'
     */
    const VALUE_HYATT = 'Hyatt';
    /**
     * Constant for value 'Mariott'
     * @return string 'Mariott'
     */
    const VALUE_MARIOTT = 'Mariott';
    /**
     * Constant for value 'Mastercard'
     * @return string 'Mastercard'
     */
    const VALUE_MASTERCARD = 'Mastercard';
    /**
     * Constant for value 'RitzCarlton'
     * @return string 'RitzCarlton'
     */
    const VALUE_RITZ_CARLTON = 'RitzCarlton';
    /**
     * Constant for value 'SouthwestAirlines'
     * @return string 'SouthwestAirlines'
     */
    const VALUE_SOUTHWEST_AIRLINES = 'SouthwestAirlines';
    /**
     * Constant for value 'StarwoodHotels'
     * @return string 'StarwoodHotels'
     */
    const VALUE_STARWOOD_HOTELS = 'StarwoodHotels';
    /**
     * Constant for value 'UnitedAirlines'
     * @return string 'UnitedAirlines'
     */
    const VALUE_UNITED_AIRLINES = 'UnitedAirlines';
    /**
     * Constant for value 'USAirways'
     * @return string 'USAirways'
     */
    const VALUE_USAIRWAYS = 'USAirways';
    /**
     * Constant for value 'VISA'
     * @return string 'VISA'
     */
    const VALUE_VISA = 'VISA';
    /**
     * Constant for value 'Other_'
     * @return string 'Other_'
     */
    const VALUE_OTHER = 'Other_';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_AMERICAN_EXPRESS
     * @uses self::VALUE_BANK_OF_AMERICA
     * @uses self::VALUE_BRITISH_AIRWAYS
     * @uses self::VALUE_CAPITAL_ONE
     * @uses self::VALUE_CHASE
     * @uses self::VALUE_CITIBANK
     * @uses self::VALUE_CONTINENTAL_AIRLINES
     * @uses self::VALUE_DELTA_AIRLINES
     * @uses self::VALUE_DISCOVER_CARD
     * @uses self::VALUE_DISNEY
     * @uses self::VALUE_EUROCARD
     * @uses self::VALUE_HILTON
     * @uses self::VALUE_HYATT
     * @uses self::VALUE_MARIOTT
     * @uses self::VALUE_MASTERCARD
     * @uses self::VALUE_RITZ_CARLTON
     * @uses self::VALUE_SOUTHWEST_AIRLINES
     * @uses self::VALUE_STARWOOD_HOTELS
     * @uses self::VALUE_UNITED_AIRLINES
     * @uses self::VALUE_USAIRWAYS
     * @uses self::VALUE_VISA
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AMERICAN_EXPRESS,
            self::VALUE_BANK_OF_AMERICA,
            self::VALUE_BRITISH_AIRWAYS,
            self::VALUE_CAPITAL_ONE,
            self::VALUE_CHASE,
            self::VALUE_CITIBANK,
            self::VALUE_CONTINENTAL_AIRLINES,
            self::VALUE_DELTA_AIRLINES,
            self::VALUE_DISCOVER_CARD,
            self::VALUE_DISNEY,
            self::VALUE_EUROCARD,
            self::VALUE_HILTON,
            self::VALUE_HYATT,
            self::VALUE_MARIOTT,
            self::VALUE_MASTERCARD,
            self::VALUE_RITZ_CARLTON,
            self::VALUE_SOUTHWEST_AIRLINES,
            self::VALUE_STARWOOD_HOTELS,
            self::VALUE_UNITED_AIRLINES,
            self::VALUE_USAIRWAYS,
            self::VALUE_VISA,
            self::VALUE_OTHER,
        );
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
