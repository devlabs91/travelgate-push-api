<?php

namespace Devlabs91\TravelgatePushApi\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 */
class Check extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CheckStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\CheckStatus $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckStatusResponse|bool
     */
    public function CheckStatus(\Devlabs91\TravelgatePushApi\StructType\CheckStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CheckStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckFlux
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\CheckFlux $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckFluxResponse|bool
     */
    public function CheckFlux(\Devlabs91\TravelgatePushApi\StructType\CheckFlux $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CheckFlux($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckFluxResponse|\Devlabs91\TravelgatePushApi\StructType\CheckStatusResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
