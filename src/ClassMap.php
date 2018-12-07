<?php
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
            'Response' => '\\StructType\\Response',
            'CheckFluxRQ' => '\\StructType\\CheckFluxRQ',
            'CheckFluxRS' => '\\StructType\\CheckFluxRS',
            'OTA_HotelAvailRQ' => '\\StructType\\OTA_HotelAvailRQ',
            'AvailRequestSegments' => '\\StructType\\AvailRequestSegments',
            'ArrayOfSourceType' => '\\ArrayType\\ArrayOfSourceType',
            'SourceType' => '\\StructType\\SourceType',
            'RequestorID' => '\\StructType\\RequestorID',
            'BookingChannel' => '\\StructType\\BookingChannel',
            'UniqueID_Type' => '\\StructType\\UniqueID_Type',
            'CompanyNameType' => '\\StructType\\CompanyNameType',
            'TPA_ExtensionsType' => '\\StructType\\TPA_ExtensionsType',
            'AvailRequestSegmentsType' => '\\StructType\\AvailRequestSegmentsType',
            'AvailRequestSegment' => '\\StructType\\AvailRequestSegment',
            'HotelSearchCriteria' => '\\StructType\\HotelSearchCriteria',
            'HotelSearchCriteriaType' => '\\StructType\\HotelSearchCriteriaType',
            'Criterion' => '\\StructType\\Criterion',
            'HotelSearchCriterionType' => '\\StructType\\HotelSearchCriterionType',
            'ItemSearchCriterionType' => '\\StructType\\ItemSearchCriterionType',
            'HotelRef' => '\\StructType\\HotelRef',
            'DateTimeSpanType' => '\\StructType\\DateTimeSpanType',
            'ArrayOfRatePlanCandidatesTypeRatePlanCandidate' => '\\ArrayType\\ArrayOfRatePlanCandidatesTypeRatePlanCandidate',
            'RatePlanCandidate' => '\\StructType\\RatePlanCandidate',
            'ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate' => '\\ArrayType\\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate',
            'RoomStayCandidate' => '\\StructType\\RoomStayCandidate',
            'RoomStayCandidateType' => '\\StructType\\RoomStayCandidateType',
            'GuestCountType' => '\\StructType\\GuestCountType',
            'GuestCount' => '\\StructType\\GuestCount',
            'OTA_HotelAvailRS' => '\\StructType\\OTA_HotelAvailRS',
            'RoomStays' => '\\StructType\\RoomStays',
            'RoomStay' => '\\StructType\\RoomStay',
            'ErrorsType' => '\\StructType\\ErrorsType',
            'ErrorType' => '\\StructType\\ErrorType',
            'FreeTextType' => '\\StructType\\FreeTextType',
            'RoomStayType' => '\\StructType\\RoomStayType',
            'RoomRates' => '\\StructType\\RoomRates',
            'RoomRate' => '\\StructType\\RoomRate',
            'BasicPropertyInfo' => '\\StructType\\BasicPropertyInfo',
            'ArrayOfRoomTypeType' => '\\ArrayType\\ArrayOfRoomTypeType',
            'RoomTypeType' => '\\StructType\\RoomTypeType',
            'Occupancy' => '\\StructType\\Occupancy',
            'ParagraphType' => '\\StructType\\ParagraphType',
            'FormattedTextTextType' => '\\StructType\\FormattedTextTextType',
            'ArrayOfRatePlanType' => '\\ArrayType\\ArrayOfRatePlanType',
            'RatePlanType' => '\\StructType\\RatePlanType',
            'Guarantee' => '\\StructType\\Guarantee',
            'CommissionType' => '\\StructType\\CommissionType',
            'GuaranteeType' => '\\StructType\\GuaranteeType',
            'ArrayOfGuaranteeTypeGuaranteeAccepted' => '\\ArrayType\\ArrayOfGuaranteeTypeGuaranteeAccepted',
            'GuaranteeAccepted' => '\\StructType\\GuaranteeAccepted',
            'PaymentFormType' => '\\StructType\\PaymentFormType',
            'Cash' => '\\StructType\\Cash',
            'PaymentCardType' => '\\StructType\\PaymentCardType',
            'List_PaymentCardIssuer' => '\\StructType\\List_PaymentCardIssuer',
            'EncryptionTokenType' => '\\StructType\\EncryptionTokenType',
            'RoomRateType' => '\\StructType\\RoomRateType',
            'ArrayOfRateTypeRate' => '\\ArrayType\\ArrayOfRateTypeRate',
            'Rate' => '\\StructType\\Rate',
            'AmountType' => '\\StructType\\AmountType',
            'AdditionalGuestAmounts' => '\\StructType\\AdditionalGuestAmounts',
            'Discount' => '\\StructType\\Discount',
            'TotalType' => '\\StructType\\TotalType',
            'TaxesType' => '\\StructType\\TaxesType',
            'TaxType' => '\\StructType\\TaxType',
            'DiscountType' => '\\StructType\\DiscountType',
            'AdditionalGuestAmountType' => '\\StructType\\AdditionalGuestAmountType',
            'CancelPenaltiesType' => '\\StructType\\CancelPenaltiesType',
            'CancelPenaltyType' => '\\StructType\\CancelPenaltyType',
            'Deadline' => '\\StructType\\Deadline',
            'AmountPercentType' => '\\StructType\\AmountPercentType',
            'ArrayOfRoomRateTypeFeature' => '\\ArrayType\\ArrayOfRoomRateTypeFeature',
            'Feature' => '\\StructType\\Feature',
            'BasicPropertyInfoType' => '\\StructType\\BasicPropertyInfoType',
            'SuccessType' => '\\StructType\\SuccessType',
            'OTA_HotelResRQ' => '\\StructType\\OTA_HotelResRQ',
            'HotelResRequestType' => '\\StructType\\HotelResRequestType',
            'HotelReservationsType' => '\\StructType\\HotelReservationsType',
            'HotelReservation' => '\\StructType\\HotelReservation',
            'HotelReservationType' => '\\StructType\\HotelReservationType',
            'ArrayOfRoomStaysTypeRoomStay' => '\\ArrayType\\ArrayOfRoomStaysTypeRoomStay',
            'ArrayOfCommentTypeComment' => '\\ArrayType\\ArrayOfCommentTypeComment',
            'Comment' => '\\StructType\\Comment',
            'ArrayOfServiceRPHsTypeServiceRPH' => '\\ArrayType\\ArrayOfServiceRPHsTypeServiceRPH',
            'ServiceRPH' => '\\StructType\\ServiceRPH',
            'ArrayOfResGuestType' => '\\ArrayType\\ArrayOfResGuestType',
            'ResGuestType' => '\\StructType\\ResGuestType',
            'ArrayOfProfilesTypeProfileInfo' => '\\ArrayType\\ArrayOfProfilesTypeProfileInfo',
            'ProfileInfo' => '\\StructType\\ProfileInfo',
            'ProfileType' => '\\StructType\\ProfileType',
            'CustomerType' => '\\StructType\\CustomerType',
            'Telephone' => '\\StructType\\Telephone',
            'Email' => '\\StructType\\Email',
            'Address' => '\\StructType\\Address',
            'PersonNameType' => '\\StructType\\PersonNameType',
            'EmailType' => '\\StructType\\EmailType',
            'AddressInfoType' => '\\StructType\\AddressInfoType',
            'AddressType' => '\\StructType\\AddressType',
            'StateProvType' => '\\StructType\\StateProvType',
            'CountryNameType' => '\\StructType\\CountryNameType',
            'InsuranceCustomerType' => '\\StructType\\InsuranceCustomerType',
            'ResGlobalInfoType' => '\\StructType\\ResGlobalInfoType',
            'ResCommonDetailType' => '\\StructType\\ResCommonDetailType',
            'TimeSpan' => '\\StructType\\TimeSpan',
            'ArrayOfHotelReservationIDsTypeHotelReservationID' => '\\ArrayType\\ArrayOfHotelReservationIDsTypeHotelReservationID',
            'HotelReservationID' => '\\StructType\\HotelReservationID',
            'OTA_HotelResRS' => '\\StructType\\OTA_HotelResRS',
            'OTA_CancelRQ' => '\\StructType\\OTA_CancelRQ',
            'UniqueID' => '\\StructType\\UniqueID',
            'OTA_CancelRS' => '\\StructType\\OTA_CancelRS',
            'CancelInfoRSType' => '\\StructType\\CancelInfoRSType',
            'ArrayOfCancelRuleType' => '\\ArrayType\\ArrayOfCancelRuleType',
            'CancelRuleType' => '\\StructType\\CancelRuleType',
            'OTA_ReadRQ' => '\\StructType\\OTA_ReadRQ',
            'ReadRequests' => '\\StructType\\ReadRequests',
            'HotelReadRequest' => '\\StructType\\HotelReadRequest',
            'SelectionCriteria' => '\\StructType\\SelectionCriteria',
            'OTA_HotelDescriptiveInfoRQ' => '\\StructType\\OTA_HotelDescriptiveInfoRQ',
            'HotelDescriptiveInfos' => '\\StructType\\HotelDescriptiveInfos',
            'OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo' => '\\StructType\\OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo',
            'HotelDescriptiveInfoRequestType' => '\\StructType\\HotelDescriptiveInfoRequestType',
            'OTA_HotelDescriptiveInfoRS' => '\\StructType\\OTA_HotelDescriptiveInfoRS',
            'OTA_HotelDescriptiveInfoRSHotelDescriptiveContents' => '\\StructType\\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents',
            'HotelDescriptiveContent' => '\\StructType\\HotelDescriptiveContent',
            'HotelDescriptiveContentType' => '\\StructType\\HotelDescriptiveContentType',
            'Policies' => '\\StructType\\Policies',
            'HotelInfoType' => '\\StructType\\HotelInfoType',
            'Descriptions' => '\\StructType\\Descriptions',
            'Renovation' => '\\StructType\\Renovation',
            'Position' => '\\StructType\\Position',
            'CategoryCodesType' => '\\StructType\\CategoryCodesType',
            'LocationCategory' => '\\StructType\\LocationCategory',
            'SegmentCategory' => '\\StructType\\SegmentCategory',
            'HotelCategory' => '\\StructType\\HotelCategory',
            'ArrayOfHotelInfoTypeService' => '\\ArrayType\\ArrayOfHotelInfoTypeService',
            'Service' => '\\StructType\\Service',
            'FacilityInfoType' => '\\StructType\\FacilityInfoType',
            'GuestRooms' => '\\StructType\\GuestRooms',
            'GuestRoom' => '\\StructType\\GuestRoom',
            'TypeRoom' => '\\StructType\\TypeRoom',
            'ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity' => '\\ArrayType\\ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity',
            'Amenity' => '\\StructType\\Amenity',
            'MultimediaDescriptionsType' => '\\StructType\\MultimediaDescriptionsType',
            'MultimediaDescriptionType' => '\\StructType\\MultimediaDescriptionType',
            'ImageItemsType' => '\\StructType\\ImageItemsType',
            'ImageItem' => '\\StructType\\ImageItem',
            'ImageDescriptionType' => '\\StructType\\ImageDescriptionType',
            'ImageFormat' => '\\StructType\\ImageFormat',
            'Description' => '\\StructType\\Description',
            'ImageItemType' => '\\StructType\\ImageItemType',
            'TextItemsType' => '\\StructType\\TextItemsType',
            'TextItem' => '\\StructType\\TextItem',
            'TextDescriptionType' => '\\StructType\\TextDescriptionType',
            'PoliciesType' => '\\StructType\\PoliciesType',
            'Policy' => '\\StructType\\Policy',
            'GuaranteePaymentPolicy' => '\\StructType\\GuaranteePaymentPolicy',
            'PolicyInfo' => '\\StructType\\PolicyInfo',
            'RequiredPaymentsType' => '\\StructType\\RequiredPaymentsType',
            'GuaranteePayment' => '\\StructType\\GuaranteePayment',
            'ArrayOfAcceptedPaymentsTypeAcceptedPayment' => '\\ArrayType\\ArrayOfAcceptedPaymentsTypeAcceptedPayment',
            'AcceptedPayment' => '\\StructType\\AcceptedPayment',
            'AreaInfoType' => '\\StructType\\AreaInfoType',
            'RefPoints' => '\\StructType\\RefPoints',
            'Attractions' => '\\StructType\\Attractions',
            'Attraction' => '\\StructType\\Attraction',
            'Contact' => '\\StructType\\Contact',
            'Recreations' => '\\StructType\\Recreations',
            'Recreation' => '\\StructType\\Recreation',
            'RefPointsType' => '\\StructType\\RefPointsType',
            'RefPoint' => '\\StructType\\RefPoint',
            'RelativePositionType' => '\\StructType\\RelativePositionType',
            'ContactInfoType' => '\\StructType\\ContactInfoType',
            'ArrayOfAddressesTypeAddress' => '\\ArrayType\\ArrayOfAddressesTypeAddress',
            'ArrayOfPhonesTypePhone' => '\\ArrayType\\ArrayOfPhonesTypePhone',
            'Phone' => '\\StructType\\Phone',
            'ArrayOfEmailsTypeEmail' => '\\ArrayType\\ArrayOfEmailsTypeEmail',
            'ArrayOfURLsTypeURL' => '\\ArrayType\\ArrayOfURLsTypeURL',
            'URL' => '\\StructType\\URL',
            'URL_Type' => '\\StructType\\URL_Type',
            'ContactInfoRootType' => '\\StructType\\ContactInfoRootType',
            'ArrayOfOperationSchedulesPlusChargeTypeOperationSchedule' => '\\ArrayType\\ArrayOfOperationSchedulesPlusChargeTypeOperationSchedule',
            'OperationSchedule' => '\\StructType\\OperationSchedule',
            'OperationSchedulePlusChargeType' => '\\StructType\\OperationSchedulePlusChargeType',
            'OperationScheduleType' => '\\StructType\\OperationScheduleType',
            'FeeType' => '\\StructType\\FeeType',
            'ArrayOfRefPointsTypeRefPoint' => '\\ArrayType\\ArrayOfRefPointsTypeRefPoint',
            'ArrayOfBoolean' => '\\ArrayType\\ArrayOfBoolean',
            'ArrayOfBoolean1' => '\\ArrayType\\ArrayOfBoolean1',
            'AffiliationInfoType' => '\\StructType\\AffiliationInfoType',
            'ArrayOfAffiliationInfoTypeAward' => '\\ArrayType\\ArrayOfAffiliationInfoTypeAward',
            'Award' => '\\StructType\\Award',
            'ArrayOfContactInfoRootType' => '\\ArrayType\\ArrayOfContactInfoRootType',
            'OTA_HotelAvailNotifRQ' => '\\StructType\\OTA_HotelAvailNotifRQ',
            'AvailStatusMessages' => '\\StructType\\AvailStatusMessages',
            'AvailStatusMessageType' => '\\StructType\\AvailStatusMessageType',
            'RestrictionStatus' => '\\StructType\\RestrictionStatus',
            'StatusApplicationControlType' => '\\StructType\\StatusApplicationControlType',
            'LengthsOfStayType' => '\\StructType\\LengthsOfStayType',
            'LengthOfStay' => '\\StructType\\LengthOfStay',
            'OTA_HotelAvailNotifRS' => '\\StructType\\OTA_HotelAvailNotifRS',
            'OTA_HotelRatePlanNotifRQ' => '\\StructType\\OTA_HotelRatePlanNotifRQ',
            'RatePlans' => '\\StructType\\RatePlans',
            'HotelRatePlanType' => '\\StructType\\HotelRatePlanType',
            'BookingRules' => '\\StructType\\BookingRules',
            'BookingRulesType' => '\\StructType\\BookingRulesType',
            'BookingRule' => '\\StructType\\BookingRule',
            'ArrayOfViewershipsTypeViewership' => '\\ArrayType\\ArrayOfViewershipsTypeViewership',
            'Viewership' => '\\StructType\\Viewership',
            'LocationCodes' => '\\StructType\\LocationCodes',
            'LocationCode' => '\\StructType\\LocationCode',
            'ArrayOfHotelRatePlanTypeRate' => '\\ArrayType\\ArrayOfHotelRatePlanTypeRate',
            'RateUploadType' => '\\StructType\\RateUploadType',
            'MealsIncluded' => '\\StructType\\MealsIncluded',
            'ArrayOfRateUploadTypeBaseByGuestAmt' => '\\ArrayType\\ArrayOfRateUploadTypeBaseByGuestAmt',
            'BaseByGuestAmt' => '\\StructType\\BaseByGuestAmt',
            'ArrayOfRateUploadTypeAdditionalGuestAmount' => '\\ArrayType\\ArrayOfRateUploadTypeAdditionalGuestAmount',
            'AdditionalGuestAmount' => '\\StructType\\AdditionalGuestAmount',
            'ArrayOfRequiredPaymentsTypeGuaranteePayment' => '\\ArrayType\\ArrayOfRequiredPaymentsTypeGuaranteePayment',
            'ArrayOfHotelRatePlanTypeSupplement' => '\\ArrayType\\ArrayOfHotelRatePlanTypeSupplement',
            'Supplement' => '\\StructType\\Supplement',
            'ArrayOfHotelRatePlanTypeOffer' => '\\ArrayType\\ArrayOfHotelRatePlanTypeOffer',
            'Offer' => '\\StructType\\Offer',
            'OfferType' => '\\StructType\\OfferType',
            'FreeUpgrade' => '\\StructType\\FreeUpgrade',
            'UpgradeFrom' => '\\StructType\\UpgradeFrom',
            'UpgradeTo' => '\\StructType\\UpgradeTo',
            'ArrayOfOfferTypeOfferRule' => '\\ArrayType\\ArrayOfOfferTypeOfferRule',
            'OfferRule' => '\\StructType\\OfferRule',
            'DateRestriction' => '\\StructType\\DateRestriction',
            'DOW_RestrictionsType' => '\\StructType\\DOW_RestrictionsType',
            'AvailableDaysOfWeek' => '\\StructType\\AvailableDaysOfWeek',
            'ArrayOfOfferTypeOfferRuleInventory' => '\\ArrayType\\ArrayOfOfferTypeOfferRuleInventory',
            'Inventory' => '\\StructType\\Inventory',
            'HotelRatePlanInclusionsType' => '\\StructType\\HotelRatePlanInclusionsType',
            'RatePlanInclusionDescriptionType' => '\\StructType\\RatePlanInclusionDescriptionType',
            'ArrayOfSellableProductsTypeSellableProduct' => '\\ArrayType\\ArrayOfSellableProductsTypeSellableProduct',
            'SellableProduct' => '\\StructType\\SellableProduct',
            'GuestRoomType' => '\\StructType\\GuestRoomType',
            'Quantities' => '\\StructType\\Quantities',
            'Room' => '\\StructType\\Room',
            'OTA_HotelRatePlanNotifRS' => '\\StructType\\OTA_HotelRatePlanNotifRS',
            'OTA_HotelRatePlanRQ' => '\\StructType\\OTA_HotelRatePlanRQ',
            'ArrayOfOTA_HotelRatePlanRQRatePlan' => '\\ArrayType\\ArrayOfOTA_HotelRatePlanRQRatePlan',
            'RatePlan' => '\\StructType\\RatePlan',
            'DateRange' => '\\StructType\\DateRange',
            'OTA_HotelRatePlanRS' => '\\StructType\\OTA_HotelRatePlanRS',
            'OTA_HotelAvailGetRQ' => '\\StructType\\OTA_HotelAvailGetRQ',
            'ArrayOfOTA_HotelAvailGetRQHotelAvailRequest' => '\\ArrayType\\ArrayOfOTA_HotelAvailGetRQHotelAvailRequest',
            'HotelAvailRequest' => '\\StructType\\HotelAvailRequest',
            'OTA_HotelAvailGetRS' => '\\StructType\\OTA_HotelAvailGetRS',
            'OTA_HotelRoomListRQ' => '\\StructType\\OTA_HotelRoomListRQ',
            'ArrayOfHotelRoomListType' => '\\ArrayType\\ArrayOfHotelRoomListType',
            'HotelRoomListType' => '\\StructType\\HotelRoomListType',
            'ArrayOfHotelRoomListTypeRoomStay' => '\\ArrayType\\ArrayOfHotelRoomListTypeRoomStay',
            'OTA_HotelRoomListRS' => '\\StructType\\OTA_HotelRoomListRS',
            'HotelRoomLists' => '\\StructType\\HotelRoomLists',
            'CheckStatus' => '\\StructType\\CheckStatus',
            'CheckStatusResponse' => '\\StructType\\CheckStatusResponse',
            'CheckFlux' => '\\StructType\\CheckFlux',
            'CheckFluxResponse' => '\\StructType\\CheckFluxResponse',
            'HotelAvail' => '\\StructType\\HotelAvail',
            'HotelAvailResponse' => '\\StructType\\HotelAvailResponse',
            'HotelValuation' => '\\StructType\\HotelValuation',
            'HotelValuationResponse' => '\\StructType\\HotelValuationResponse',
            'HotelRes' => '\\StructType\\HotelRes',
            'HotelResResponse' => '\\StructType\\HotelResResponse',
            'Cancel' => '\\StructType\\Cancel',
            'CancelResponse' => '\\StructType\\CancelResponse',
            'HotelResRead' => '\\StructType\\HotelResRead',
            'HotelResReadResponse' => '\\StructType\\HotelResReadResponse',
            'HotelReservationList' => '\\StructType\\HotelReservationList',
            'HotelReservationListResponse' => '\\StructType\\HotelReservationListResponse',
            'HotelDescriptiveInfo' => '\\StructType\\HotelDescriptiveInfo',
            'HotelDescriptiveInfoResponse' => '\\StructType\\HotelDescriptiveInfoResponse',
            'HotelListInfo' => '\\StructType\\HotelListInfo',
            'HotelListInfoResponse' => '\\StructType\\HotelListInfoResponse',
            'HotelAvailNotif' => '\\StructType\\HotelAvailNotif',
            'HotelAvailNotifResponse' => '\\StructType\\HotelAvailNotifResponse',
            'HotelRatePlanNotif' => '\\StructType\\HotelRatePlanNotif',
            'HotelRatePlanNotifResponse' => '\\StructType\\HotelRatePlanNotifResponse',
            'HotelRatePlanInventoryNotif' => '\\StructType\\HotelRatePlanInventoryNotif',
            'HotelRatePlanInventoryNotifResponse' => '\\StructType\\HotelRatePlanInventoryNotifResponse',
            'HotelRatePlanRetrieve' => '\\StructType\\HotelRatePlanRetrieve',
            'HotelRatePlanRetrieveResponse' => '\\StructType\\HotelRatePlanRetrieveResponse',
            'HotelAvailRetrieve' => '\\StructType\\HotelAvailRetrieve',
            'HotelAvailRetrieveResponse' => '\\StructType\\HotelAvailRetrieveResponse',
            'HotelRatePlanInventoryRetrieve' => '\\StructType\\HotelRatePlanInventoryRetrieve',
            'HotelRatePlanInventoryRetrieveResponse' => '\\StructType\\HotelRatePlanInventoryRetrieveResponse',
            'HotelResRetrieve' => '\\StructType\\HotelResRetrieve',
            'HotelResRetrieveResponse' => '\\StructType\\HotelResRetrieveResponse',
            'HotelRoomListRetrieve' => '\\StructType\\HotelRoomListRetrieve',
            'HotelRoomListRetrieveResponse' => '\\StructType\\HotelRoomListRetrieveResponse',
        );
    }
}
