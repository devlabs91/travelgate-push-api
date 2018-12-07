<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentCardType StructType
 * @subpackage Structs
 */
class PaymentCardType extends AbstractStructBase
{
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\List_PaymentCardIssuer
     */
    public $CardType;
    /**
     * The CardHolderName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderName;
    /**
     * The CardNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType
     */
    public $CardNumber;
    /**
     * The SeriesCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType
     */
    public $SeriesCode;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType
     */
    public $TPA_Extensions;
    /**
     * The CardCode
     * @var string
     */
    public $CardCode;
    /**
     * The ExpireDate
     * @var string
     */
    public $ExpireDate;
    /**
     * Constructor method for PaymentCardType
     * @uses PaymentCardType::setCardType()
     * @uses PaymentCardType::setCardHolderName()
     * @uses PaymentCardType::setCardNumber()
     * @uses PaymentCardType::setSeriesCode()
     * @uses PaymentCardType::setTPA_Extensions()
     * @uses PaymentCardType::setCardCode()
     * @uses PaymentCardType::setExpireDate()
     * @param \Devlabs91\TravelgatePushApi\StructType\List_PaymentCardIssuer $cardType
     * @param string $cardHolderName
     * @param \Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType $cardNumber
     * @param \Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType $seriesCode
     * @param \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions
     * @param string $cardCode
     * @param string $expireDate
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\List_PaymentCardIssuer $cardType = null, $cardHolderName = null, \Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType $cardNumber = null, \Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType $seriesCode = null, \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions = null, $cardCode = null, $expireDate = null)
    {
        $this
            ->setCardType($cardType)
            ->setCardHolderName($cardHolderName)
            ->setCardNumber($cardNumber)
            ->setSeriesCode($seriesCode)
            ->setTPA_Extensions($tPA_Extensions)
            ->setCardCode($cardCode)
            ->setExpireDate($expireDate);
    }
    /**
     * Get CardType value
     * @return \Devlabs91\TravelgatePushApi\StructType\List_PaymentCardIssuer|null
     */
    public function getCardType()
    {
        return $this->CardType;
    }
    /**
     * Set CardType value
     * @param \Devlabs91\TravelgatePushApi\StructType\List_PaymentCardIssuer $cardType
     * @return \Devlabs91\TravelgatePushApi\StructType\PaymentCardType
     */
    public function setCardType(\Devlabs91\TravelgatePushApi\StructType\List_PaymentCardIssuer $cardType = null)
    {
        $this->CardType = $cardType;
        return $this;
    }
    /**
     * Get CardHolderName value
     * @return string|null
     */
    public function getCardHolderName()
    {
        return $this->CardHolderName;
    }
    /**
     * Set CardHolderName value
     * @param string $cardHolderName
     * @return \Devlabs91\TravelgatePushApi\StructType\PaymentCardType
     */
    public function setCardHolderName($cardHolderName = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderName) && !is_string($cardHolderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderName)), __LINE__);
        }
        $this->CardHolderName = $cardHolderName;
        return $this;
    }
    /**
     * Get CardNumber value
     * @return \Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }
    /**
     * Set CardNumber value
     * @param \Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType $cardNumber
     * @return \Devlabs91\TravelgatePushApi\StructType\PaymentCardType
     */
    public function setCardNumber(\Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType $cardNumber = null)
    {
        $this->CardNumber = $cardNumber;
        return $this;
    }
    /**
     * Get SeriesCode value
     * @return \Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType|null
     */
    public function getSeriesCode()
    {
        return $this->SeriesCode;
    }
    /**
     * Set SeriesCode value
     * @param \Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType $seriesCode
     * @return \Devlabs91\TravelgatePushApi\StructType\PaymentCardType
     */
    public function setSeriesCode(\Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType $seriesCode = null)
    {
        $this->SeriesCode = $seriesCode;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions
     * @return \Devlabs91\TravelgatePushApi\StructType\PaymentCardType
     */
    public function setTPA_Extensions(\Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get CardCode value
     * @return string|null
     */
    public function getCardCode()
    {
        return $this->CardCode;
    }
    /**
     * Set CardCode value
     * @param string $cardCode
     * @return \Devlabs91\TravelgatePushApi\StructType\PaymentCardType
     */
    public function setCardCode($cardCode = null)
    {
        // validation for constraint: string
        if (!is_null($cardCode) && !is_string($cardCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardCode)), __LINE__);
        }
        $this->CardCode = $cardCode;
        return $this;
    }
    /**
     * Get ExpireDate value
     * @return string|null
     */
    public function getExpireDate()
    {
        return $this->ExpireDate;
    }
    /**
     * Set ExpireDate value
     * @param string $expireDate
     * @return \Devlabs91\TravelgatePushApi\StructType\PaymentCardType
     */
    public function setExpireDate($expireDate = null)
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDate)), __LINE__);
        }
        $this->ExpireDate = $expireDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\PaymentCardType
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
