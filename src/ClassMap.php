<?php

namespace Devlabs91\TravelgatePushApi;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Response' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Response',
            'CheckFluxRQ' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CheckFluxRQ',
            'CheckFluxRS' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CheckFluxRS',
            'OTA_HotelAvailRQ' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelAvailRQ',
            'AvailRequestSegments' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AvailRequestSegments',
            'ArrayOfSourceType' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfSourceType',
            'SourceType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\SourceType',
            'RequestorID' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RequestorID',
            'BookingChannel' => '\\Devlabs91\\TravelgatePushApi\\StructType\\BookingChannel',
            'UniqueID_Type' => '\\Devlabs91\\TravelgatePushApi\\StructType\\UniqueID_Type',
            'CompanyNameType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CompanyNameType',
            'TPA_ExtensionsType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\TPA_ExtensionsType',
            'AvailRequestSegmentsType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AvailRequestSegmentsType',
            'AvailRequestSegment' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AvailRequestSegment',
            'HotelSearchCriteria' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelSearchCriteria',
            'HotelSearchCriteriaType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelSearchCriteriaType',
            'Criterion' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Criterion',
            'HotelSearchCriterionType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelSearchCriterionType',
            'ItemSearchCriterionType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ItemSearchCriterionType',
            'HotelRef' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRef',
            'DateTimeSpanType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\DateTimeSpanType',
            'ArrayOfRatePlanCandidatesTypeRatePlanCandidate' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfRatePlanCandidatesTypeRatePlanCandidate',
            'RatePlanCandidate' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RatePlanCandidate',
            'ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate',
            'RoomStayCandidate' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RoomStayCandidate',
            'RoomStayCandidateType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RoomStayCandidateType',
            'GuestCountType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\GuestCountType',
            'GuestCount' => '\\Devlabs91\\TravelgatePushApi\\StructType\\GuestCount',
            'OTA_HotelAvailRS' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelAvailRS',
            'RoomStays' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RoomStays',
            'RoomStay' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RoomStay',
            'ErrorsType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ErrorsType',
            'ErrorType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ErrorType',
            'FreeTextType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\FreeTextType',
            'RoomStayType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RoomStayType',
            'RoomRates' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RoomRates',
            'RoomRate' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RoomRate',
            'BasicPropertyInfo' => '\\Devlabs91\\TravelgatePushApi\\StructType\\BasicPropertyInfo',
            'ArrayOfRoomTypeType' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfRoomTypeType',
            'RoomTypeType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RoomTypeType',
            'Occupancy' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Occupancy',
            'ParagraphType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ParagraphType',
            'FormattedTextTextType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\FormattedTextTextType',
            'ArrayOfRatePlanType' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfRatePlanType',
            'RatePlanType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RatePlanType',
            'Guarantee' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Guarantee',
            'CommissionType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CommissionType',
            'GuaranteeType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\GuaranteeType',
            'ArrayOfGuaranteeTypeGuaranteeAccepted' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfGuaranteeTypeGuaranteeAccepted',
            'GuaranteeAccepted' => '\\Devlabs91\\TravelgatePushApi\\StructType\\GuaranteeAccepted',
            'PaymentFormType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\PaymentFormType',
            'Cash' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Cash',
            'PaymentCardType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\PaymentCardType',
            'List_PaymentCardIssuer' => '\\Devlabs91\\TravelgatePushApi\\StructType\\List_PaymentCardIssuer',
            'EncryptionTokenType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\EncryptionTokenType',
            'RoomRateType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RoomRateType',
            'ArrayOfRateTypeRate' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfRateTypeRate',
            'Rate' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Rate',
            'AmountType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AmountType',
            'AdditionalGuestAmounts' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AdditionalGuestAmounts',
            'Discount' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Discount',
            'TotalType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\TotalType',
            'TaxesType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\TaxesType',
            'TaxType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\TaxType',
            'DiscountType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\DiscountType',
            'AdditionalGuestAmountType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AdditionalGuestAmountType',
            'CancelPenaltiesType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CancelPenaltiesType',
            'CancelPenaltyType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CancelPenaltyType',
            'Deadline' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Deadline',
            'AmountPercentType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AmountPercentType',
            'ArrayOfRoomRateTypeFeature' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfRoomRateTypeFeature',
            'Feature' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Feature',
            'BasicPropertyInfoType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\BasicPropertyInfoType',
            'SuccessType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\SuccessType',
            'OTA_HotelResRQ' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelResRQ',
            'HotelResRequestType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelResRequestType',
            'HotelReservationsType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelReservationsType',
            'HotelReservation' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelReservation',
            'HotelReservationType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelReservationType',
            'ArrayOfRoomStaysTypeRoomStay' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfRoomStaysTypeRoomStay',
            'ArrayOfCommentTypeComment' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfCommentTypeComment',
            'Comment' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Comment',
            'ArrayOfServiceRPHsTypeServiceRPH' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfServiceRPHsTypeServiceRPH',
            'ServiceRPH' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ServiceRPH',
            'ArrayOfResGuestType' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfResGuestType',
            'ResGuestType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ResGuestType',
            'ArrayOfProfilesTypeProfileInfo' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfProfilesTypeProfileInfo',
            'ProfileInfo' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ProfileInfo',
            'ProfileType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ProfileType',
            'CustomerType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CustomerType',
            'Telephone' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Telephone',
            'Email' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Email',
            'Address' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Address',
            'PersonNameType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\PersonNameType',
            'EmailType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\EmailType',
            'AddressInfoType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AddressInfoType',
            'AddressType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AddressType',
            'StateProvType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\StateProvType',
            'CountryNameType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CountryNameType',
            'InsuranceCustomerType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\InsuranceCustomerType',
            'ResGlobalInfoType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ResGlobalInfoType',
            'ResCommonDetailType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ResCommonDetailType',
            'TimeSpan' => '\\Devlabs91\\TravelgatePushApi\\StructType\\TimeSpan',
            'ArrayOfHotelReservationIDsTypeHotelReservationID' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfHotelReservationIDsTypeHotelReservationID',
            'HotelReservationID' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelReservationID',
            'OTA_HotelResRS' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelResRS',
            'OTA_HotelResNotifRS' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelResNotifRS',
            'OTA_CancelRQ' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_CancelRQ',
            'UniqueID' => '\\Devlabs91\\TravelgatePushApi\\StructType\\UniqueID',
            'OTA_CancelRS' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_CancelRS',
            'CancelInfoRSType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CancelInfoRSType',
            'ArrayOfCancelRuleType' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfCancelRuleType',
            'CancelRuleType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CancelRuleType',
            'OTA_ReadRQ' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_ReadRQ',
            'ReadRequests' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ReadRequests',
            'HotelReadRequest' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelReadRequest',
            'SelectionCriteria' => '\\Devlabs91\\TravelgatePushApi\\StructType\\SelectionCriteria',
            'OTA_HotelDescriptiveInfoRQ' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelDescriptiveInfoRQ',
            'HotelDescriptiveInfos' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelDescriptiveInfos',
            'OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo',
            'HotelDescriptiveInfoRequestType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelDescriptiveInfoRequestType',
            'OTA_HotelDescriptiveInfoRS' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelDescriptiveInfoRS',
            'OTA_HotelDescriptiveInfoRSHotelDescriptiveContents' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents',
            'HotelDescriptiveContent' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelDescriptiveContent',
            'HotelDescriptiveContentType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelDescriptiveContentType',
            'Policies' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Policies',
            'HotelInfoType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelInfoType',
            'Descriptions' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Descriptions',
            'Renovation' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Renovation',
            'Position' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Position',
            'CategoryCodesType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CategoryCodesType',
            'LocationCategory' => '\\Devlabs91\\TravelgatePushApi\\StructType\\LocationCategory',
            'SegmentCategory' => '\\Devlabs91\\TravelgatePushApi\\StructType\\SegmentCategory',
            'HotelCategory' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelCategory',
            'ArrayOfHotelInfoTypeService' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfHotelInfoTypeService',
            'Service' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Service',
            'FacilityInfoType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\FacilityInfoType',
            'GuestRooms' => '\\Devlabs91\\TravelgatePushApi\\StructType\\GuestRooms',
            'GuestRoom' => '\\Devlabs91\\TravelgatePushApi\\StructType\\GuestRoom',
            'TypeRoom' => '\\Devlabs91\\TravelgatePushApi\\StructType\\TypeRoom',
            'ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity',
            'Amenity' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Amenity',
            'MultimediaDescriptionsType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\MultimediaDescriptionsType',
            'MultimediaDescriptionType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\MultimediaDescriptionType',
            'ImageItemsType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ImageItemsType',
            'ImageItem' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ImageItem',
            'ImageDescriptionType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ImageDescriptionType',
            'ImageFormat' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ImageFormat',
            'Description' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Description',
            'ImageItemType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ImageItemType',
            'TextItemsType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\TextItemsType',
            'TextItem' => '\\Devlabs91\\TravelgatePushApi\\StructType\\TextItem',
            'TextDescriptionType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\TextDescriptionType',
            'PoliciesType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\PoliciesType',
            'Policy' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Policy',
            'GuaranteePaymentPolicy' => '\\Devlabs91\\TravelgatePushApi\\StructType\\GuaranteePaymentPolicy',
            'PolicyInfo' => '\\Devlabs91\\TravelgatePushApi\\StructType\\PolicyInfo',
            'RequiredPaymentsType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RequiredPaymentsType',
            'GuaranteePayment' => '\\Devlabs91\\TravelgatePushApi\\StructType\\GuaranteePayment',
            'ArrayOfAcceptedPaymentsTypeAcceptedPayment' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfAcceptedPaymentsTypeAcceptedPayment',
            'AcceptedPayment' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AcceptedPayment',
            'AreaInfoType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AreaInfoType',
            'RefPoints' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RefPoints',
            'Attractions' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Attractions',
            'Attraction' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Attraction',
            'Contact' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Contact',
            'Recreations' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Recreations',
            'Recreation' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Recreation',
            'RefPointsType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RefPointsType',
            'RefPoint' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RefPoint',
            'RelativePositionType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RelativePositionType',
            'ContactInfoType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ContactInfoType',
            'ArrayOfAddressesTypeAddress' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfAddressesTypeAddress',
            'ArrayOfPhonesTypePhone' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfPhonesTypePhone',
            'Phone' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Phone',
            'ArrayOfEmailsTypeEmail' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfEmailsTypeEmail',
            'ArrayOfURLsTypeURL' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfURLsTypeURL',
            'URL' => '\\Devlabs91\\TravelgatePushApi\\StructType\\URL',
            'URL_Type' => '\\Devlabs91\\TravelgatePushApi\\StructType\\URL_Type',
            'ContactInfoRootType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\ContactInfoRootType',
            'ArrayOfOperationSchedulesPlusChargeTypeOperationSchedule' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfOperationSchedulesPlusChargeTypeOperationSchedule',
            'OperationSchedule' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OperationSchedule',
            'OperationSchedulePlusChargeType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OperationSchedulePlusChargeType',
            'OperationScheduleType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OperationScheduleType',
            'FeeType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\FeeType',
            'ArrayOfRefPointsTypeRefPoint' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfRefPointsTypeRefPoint',
            'ArrayOfBoolean' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfBoolean',
            'ArrayOfBoolean1' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfBoolean1',
            'AffiliationInfoType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AffiliationInfoType',
            'ArrayOfAffiliationInfoTypeAward' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfAffiliationInfoTypeAward',
            'Award' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Award',
            'ArrayOfContactInfoRootType' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfContactInfoRootType',
            'OTA_HotelAvailNotifRQ' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelAvailNotifRQ',
            'AvailStatusMessages' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AvailStatusMessages',
            'AvailStatusMessageType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AvailStatusMessageType',
            'RestrictionStatus' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RestrictionStatus',
            'StatusApplicationControlType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\StatusApplicationControlType',
            'LengthsOfStayType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\LengthsOfStayType',
            'LengthOfStay' => '\\Devlabs91\\TravelgatePushApi\\StructType\\LengthOfStay',
            'OTA_HotelAvailNotifRS' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelAvailNotifRS',
            'OTA_HotelRatePlanNotifRQ' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelRatePlanNotifRQ',
            'RatePlans' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RatePlans',
            'HotelRatePlanType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRatePlanType',
            'BookingRules' => '\\Devlabs91\\TravelgatePushApi\\StructType\\BookingRules',
            'BookingRulesType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\BookingRulesType',
            'BookingRule' => '\\Devlabs91\\TravelgatePushApi\\StructType\\BookingRule',
            'ArrayOfViewershipsTypeViewership' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfViewershipsTypeViewership',
            'Viewership' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Viewership',
            'LocationCodes' => '\\Devlabs91\\TravelgatePushApi\\StructType\\LocationCodes',
            'LocationCode' => '\\Devlabs91\\TravelgatePushApi\\StructType\\LocationCode',
            'ArrayOfHotelRatePlanTypeRate' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfHotelRatePlanTypeRate',
            'RateUploadType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RateUploadType',
            'MealsIncluded' => '\\Devlabs91\\TravelgatePushApi\\StructType\\MealsIncluded',
            'ArrayOfRateUploadTypeBaseByGuestAmt' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfRateUploadTypeBaseByGuestAmt',
            'BaseByGuestAmt' => '\\Devlabs91\\TravelgatePushApi\\StructType\\BaseByGuestAmt',
            'ArrayOfRateUploadTypeAdditionalGuestAmount' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfRateUploadTypeAdditionalGuestAmount',
            'AdditionalGuestAmount' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AdditionalGuestAmount',
            'ArrayOfRequiredPaymentsTypeGuaranteePayment' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfRequiredPaymentsTypeGuaranteePayment',
            'ArrayOfHotelRatePlanTypeSupplement' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfHotelRatePlanTypeSupplement',
            'Supplement' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Supplement',
            'ArrayOfHotelRatePlanTypeOffer' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfHotelRatePlanTypeOffer',
            'Offer' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Offer',
            'OfferType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OfferType',
            'FreeUpgrade' => '\\Devlabs91\\TravelgatePushApi\\StructType\\FreeUpgrade',
            'UpgradeFrom' => '\\Devlabs91\\TravelgatePushApi\\StructType\\UpgradeFrom',
            'UpgradeTo' => '\\Devlabs91\\TravelgatePushApi\\StructType\\UpgradeTo',
            'ArrayOfOfferTypeOfferRule' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfOfferTypeOfferRule',
            'OfferRule' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OfferRule',
            'DateRestriction' => '\\Devlabs91\\TravelgatePushApi\\StructType\\DateRestriction',
            'DOW_RestrictionsType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\DOW_RestrictionsType',
            'AvailableDaysOfWeek' => '\\Devlabs91\\TravelgatePushApi\\StructType\\AvailableDaysOfWeek',
            'ArrayOfOfferTypeOfferRuleInventory' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfOfferTypeOfferRuleInventory',
            'Inventory' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Inventory',
            'HotelRatePlanInclusionsType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRatePlanInclusionsType',
            'RatePlanInclusionDescriptionType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RatePlanInclusionDescriptionType',
            'ArrayOfSellableProductsTypeSellableProduct' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfSellableProductsTypeSellableProduct',
            'SellableProduct' => '\\Devlabs91\\TravelgatePushApi\\StructType\\SellableProduct',
            'GuestRoomType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\GuestRoomType',
            'Quantities' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Quantities',
            'Room' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Room',
            'OTA_HotelRatePlanNotifRS' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelRatePlanNotifRS',
            'OTA_HotelRatePlanRQ' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelRatePlanRQ',
            'ArrayOfOTA_HotelRatePlanRQRatePlan' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfOTA_HotelRatePlanRQRatePlan',
            'RatePlan' => '\\Devlabs91\\TravelgatePushApi\\StructType\\RatePlan',
            'DateRange' => '\\Devlabs91\\TravelgatePushApi\\StructType\\DateRange',
            'OTA_HotelRatePlanRS' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelRatePlanRS',
            'OTA_HotelAvailGetRQ' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelAvailGetRQ',
            'ArrayOfOTA_HotelAvailGetRQHotelAvailRequest' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfOTA_HotelAvailGetRQHotelAvailRequest',
            'HotelAvailRequest' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelAvailRequest',
            'OTA_HotelAvailGetRS' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelAvailGetRS',
            'OTA_HotelRoomListRQ' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelRoomListRQ',
            'ArrayOfHotelRoomListType' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfHotelRoomListType',
            'HotelRoomListType' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRoomListType',
            'ArrayOfHotelRoomListTypeRoomStay' => '\\Devlabs91\\TravelgatePushApi\\ArrayType\\ArrayOfHotelRoomListTypeRoomStay',
            'OTA_HotelRoomListRS' => '\\Devlabs91\\TravelgatePushApi\\StructType\\OTA_HotelRoomListRS',
            'HotelRoomLists' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRoomLists',
            'CheckStatus' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CheckStatus',
            'CheckStatusResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CheckStatusResponse',
            'CheckFlux' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CheckFlux',
            'CheckFluxResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CheckFluxResponse',
            'HotelAvail' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelAvail',
            'HotelAvailResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelAvailResponse',
            'HotelValuation' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelValuation',
            'HotelValuationResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelValuationResponse',
            'HotelRes' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRes',
            'HotelResResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelResResponse',
            'Cancel' => '\\Devlabs91\\TravelgatePushApi\\StructType\\Cancel',
            'CancelResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\CancelResponse',
            'HotelResRead' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelResRead',
            'HotelResReadResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelResReadResponse',
            'HotelReservationList' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelReservationList',
            'HotelReservationListResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelReservationListResponse',
            'HotelDescriptiveInfo' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelDescriptiveInfo',
            'HotelDescriptiveInfoResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelDescriptiveInfoResponse',
            'HotelListInfo' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelListInfo',
            'HotelListInfoResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelListInfoResponse',
            'HotelAvailNotif' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelAvailNotif',
            'HotelAvailNotifResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelAvailNotifResponse',
            'HotelRatePlanNotif' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRatePlanNotif',
            'HotelRatePlanNotifResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRatePlanNotifResponse',
            'HotelRatePlanInventoryNotif' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRatePlanInventoryNotif',
            'HotelRatePlanInventoryNotifResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRatePlanInventoryNotifResponse',
            'HotelRatePlanRetrieve' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRatePlanRetrieve',
            'HotelRatePlanRetrieveResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRatePlanRetrieveResponse',
            'HotelAvailRetrieve' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelAvailRetrieve',
            'HotelAvailRetrieveResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelAvailRetrieveResponse',
            'HotelRatePlanInventoryRetrieve' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRatePlanInventoryRetrieve',
            'HotelRatePlanInventoryRetrieveResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRatePlanInventoryRetrieveResponse',
            'HotelResRetrieve' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelResRetrieve',
            'HotelResRetrieveResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelResRetrieveResponse',
            'HotelRoomListRetrieve' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRoomListRetrieve',
            'HotelRoomListRetrieveResponse' => '\\Devlabs91\\TravelgatePushApi\\StructType\\HotelRoomListRetrieveResponse',
        );
    }
}
