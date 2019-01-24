<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://pushprovider.xmltravelgate.com/Service/Hotel/Provider/ProviderGEN.svc?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://pushprovider.xmltravelgate.com/Service/Hotel/Provider/ProviderGEN.svc?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Devlabs91\TravelgatePushApi\ClassMap::get(),
);
/**
 * Samples for Check ServiceType
 */
$check = new \Devlabs91\TravelgatePushApi\ServiceType\Check($options);
/**
 * Sample call for CheckStatus operation/method
 */
if ($check->CheckStatus(new \Devlabs91\TravelgatePushApi\StructType\CheckStatus()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for CheckFlux operation/method
 */
if ($check->CheckFlux(new \Devlabs91\TravelgatePushApi\StructType\CheckFlux()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for Hotel ServiceType
 */
$hotel = new \Devlabs91\TravelgatePushApi\ServiceType\Hotel($options);
/**
 * Sample call for HotelAvail operation/method
 */
if ($hotel->HotelAvail(new \Devlabs91\TravelgatePushApi\StructType\HotelAvail()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelValuation operation/method
 */
if ($hotel->HotelValuation(new \Devlabs91\TravelgatePushApi\StructType\HotelValuation()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelRes operation/method
 */
if ($hotel->HotelRes(new \Devlabs91\TravelgatePushApi\StructType\HotelRes()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelResRead operation/method
 */
if ($hotel->HotelResRead(new \Devlabs91\TravelgatePushApi\StructType\HotelResRead()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelReservationList operation/method
 */
if ($hotel->HotelReservationList(new \Devlabs91\TravelgatePushApi\StructType\HotelReservationList()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelDescriptiveInfo operation/method
 */
if ($hotel->HotelDescriptiveInfo(new \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfo()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelListInfo operation/method
 */
if ($hotel->HotelListInfo(new \Devlabs91\TravelgatePushApi\StructType\HotelListInfo()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelAvailNotif operation/method
 */
if ($hotel->HotelAvailNotif(new \Devlabs91\TravelgatePushApi\StructType\HotelAvailNotif()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelRatePlanNotif operation/method
 */
if ($hotel->HotelRatePlanNotif(new \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanNotif()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelRatePlanInventoryNotif operation/method
 */
if ($hotel->HotelRatePlanInventoryNotif(new \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryNotif()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelRatePlanRetrieve operation/method
 */
if ($hotel->HotelRatePlanRetrieve(new \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanRetrieve()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelAvailRetrieve operation/method
 */
if ($hotel->HotelAvailRetrieve(new \Devlabs91\TravelgatePushApi\StructType\HotelAvailRetrieve()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelRatePlanInventoryRetrieve operation/method
 */
if ($hotel->HotelRatePlanInventoryRetrieve(new \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryRetrieve()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelResRetrieve operation/method
 */
if ($hotel->HotelResRetrieve(new \Devlabs91\TravelgatePushApi\StructType\HotelResRetrieve()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Sample call for HotelRoomListRetrieve operation/method
 */
if ($hotel->HotelRoomListRetrieve(new \Devlabs91\TravelgatePushApi\StructType\HotelRoomListRetrieve()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \Devlabs91\TravelgatePushApi\ServiceType\Cancel($options);
/**
 * Sample call for Cancel operation/method
 */
if ($cancel->Cancel(new \Devlabs91\TravelgatePushApi\StructType\Cancel()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for OTAH ServiceType
 */
$oTAH = new \Devlabs91\TravelgatePushApi\ServiceType\OTAH($options);
/**
 * Sample call for OTA_HotelResRS operation/method
 */
if ($oTAH->OTA_HotelResRS(new \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS()) !== false) {
    print_r($oTAH->getResult());
} else {
    print_r($oTAH->getLastError());
}
