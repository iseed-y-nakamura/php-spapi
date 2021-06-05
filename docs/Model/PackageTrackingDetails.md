# PackageTrackingDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**package_number** | **int** | The package identifier. | 
**tracking_number** | **string** | The tracking number for the package. | [optional] 
**customer_tracking_link** | **string** | Link on swiship.com that allows customers to track the package. | [optional] 
**carrier_code** | **string** | The name of the carrier. | [optional] 
**carrier_phone_number** | **string** | The phone number of the carrier. | [optional] 
**carrier_url** | **string** | The URL of the carrier’s website. | [optional] 
**ship_date** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Timestamp**](Timestamp.md) |  | [optional] 
**estimated_arrival_date** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Timestamp**](Timestamp.md) |  | [optional] 
**ship_to_address** | [**\Popsicle\Amazon\Model\FulfillmentInbound\TrackingAddress**](TrackingAddress.md) |  | [optional] 
**current_status** | [**\Popsicle\Amazon\Model\FulfillmentInbound\CurrentStatus**](CurrentStatus.md) |  | [optional] 
**current_status_description** | **string** | Description corresponding to the CurrentStatus value. | [optional] 
**signed_for_by** | **string** | The name of the person who signed for the package. | [optional] 
**additional_location_info** | [**\Popsicle\Amazon\Model\FulfillmentInbound\AdditionalLocationInfo**](AdditionalLocationInfo.md) |  | [optional] 
**tracking_events** | [**\Popsicle\Amazon\Model\FulfillmentInbound\TrackingEventList**](TrackingEventList.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

