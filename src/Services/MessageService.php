<?php 

namespace Devlabs91\TravelgatePushApi\Services;

class MessageService {
    
    public static function create( ) {
        $instance = new self();
        return $instance;
    }
    
    public static function getOptions() {
        return [
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'file://'.__DIR__."/../Schemas/index.wsdl",
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Devlabs91\TravelgatePushApi\ClassMap::get(),
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOCATION => 'https://pushprovider.xmltravelgate.com/Service/Hotel/Provider/ProviderGEN.svc',
        ];
    }
    
    public static function setSoapHeaderSecurity( $serviceType, $username, $password ) {
        
        $ns_s = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
        $node1 = new \SoapVar($username, XSD_STRING, null, null, 'Username', $ns_s);
        $node2 = new \SoapVar($password, XSD_STRING, null, null, 'Password', $ns_s);
        $token = new \SoapVar(array($node1,$node2), SOAP_ENC_OBJECT, null, null, 'UsernameToken', $ns_s);
        $security = new \SoapVar(array($token), SOAP_ENC_OBJECT, null, null, 'Security', $ns_s);
        
        $serviceType->setSoapHeader( $ns_s, 'Security', $security );
        
    }
    
}