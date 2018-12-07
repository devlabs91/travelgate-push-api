<?php

namespace Devlabs91\TravelgatePushApi\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Cancel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\Cancel $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\CancelResponse|bool
     */
    public function Cancel(\Devlabs91\TravelgatePushApi\StructType\Cancel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Cancel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Devlabs91\TravelgatePushApi\StructType\CancelResponse
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
