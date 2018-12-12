<?php 

namespace Devlabs91\TravelgatePushApi\Adapters;

use Devlabs91\TravelgatePushApi\StructType\RequestorID;
use Devlabs91\TravelgatePushApi\StructType\BookingChannel;
use Devlabs91\TravelgatePushApi\StructType\CompanyNameType;

class BaseAdapter {
    
    public $username;
    public $password;
    public $clientCode;
    public $requestorId;
    public $primaryLangID;

    /** @var \Devlabs91\TravelgatePushApi\ServiceType\Hotel */
    public $hotel;
    
    public function __construct( $username, $password, $clientCode, $requestorId, $primaryLangID ) {
        $this->username = $username;
        $this->password = $password;
        $this->clientCode = $clientCode;
        $this->requestorId = $requestorId;
        $this->primaryLangID = $primaryLangID;
        
        $this->hotel = new \Devlabs91\TravelgatePushApi\ServiceType\Hotel( $this->getOptions() );
        
    }
    
    public function getOptions() {
        return [
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'file://'.__DIR__."/../Schemas/index.wsdl",
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Devlabs91\TravelgatePushApi\ClassMap::get(),
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOCATION => 'https://pushprovider.xmltravelgate.com/Service/Hotel/Provider/ProviderGEN.svc',
        ];
    }
    
    public function addPOS( $structType ) {

        $item = new \Devlabs91\TravelgatePushApi\StructType\SourceType( new RequestorID(), new BookingChannel( new CompanyNameType( null, null, $this->clientCode) ) );
        $item->getRequestorID()->setID( $this->requestorId );
        $structType->getPOS()->addToSource( $item );
        
    }
    
    public function addSoapHeaderSecurity( $serviceType ) {
        $ns_s = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
        $node1 = new \SoapVar($this->username, XSD_STRING, null, null, 'Username', $ns_s);
        $node2 = new \SoapVar($this->password, XSD_STRING, null, null, 'Password', $ns_s);
        $token = new \SoapVar(array($node1,$node2), SOAP_ENC_OBJECT, null, null, 'UsernameToken', $ns_s);
        $security = new \SoapVar(array($token), SOAP_ENC_OBJECT, null, null, 'Security', $ns_s);
        $serviceType->setSoapHeader( $ns_s, 'Security', $security );
    }
    
    public function getLastRequestResponse() {
        return [ 'request' => $this->hotel->getLastRequest(), 'response' => $this->hotel->getLastResponse() ];
    }
}