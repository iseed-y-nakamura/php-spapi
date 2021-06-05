# UpdateFulfillmentOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. | [optional] 
**displayable_order_id** | **string** | A fulfillment order identifier that the seller creates. This value displays as the order identifier in recipient-facing materials such as the outbound shipment packing slip. The value of DisplayableOrderId should match the order identifier that the seller provides to the recipient. The seller can use the SellerFulfillmentOrderId for this value or they can specify an alternate value if they want the recipient to reference an alternate order identifier. | [optional] 
**displayable_order_date** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Timestamp**](Timestamp.md) |  | [optional] 
**displayable_order_comment** | **string** | Order-specific text that appears in recipient-facing materials such as the outbound shipment packing slip. | [optional] 
**shipping_speed_category** | [**\Popsicle\Amazon\Model\FulfillmentInbound\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  | [optional] 
**destination_address** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Address**](Address.md) |  | [optional] 
**fulfillment_action** | [**\Popsicle\Amazon\Model\FulfillmentInbound\FulfillmentAction**](FulfillmentAction.md) |  | [optional] 
**fulfillment_policy** | [**\Popsicle\Amazon\Model\FulfillmentInbound\FulfillmentPolicy**](FulfillmentPolicy.md) |  | [optional] 
**ship_from_country_code** | **string** | The two-character country code for the country from which the fulfillment order ships. Must be in ISO 3166-1 alpha-2 format. | [optional] 
**notification_emails** | [**\Popsicle\Amazon\Model\FulfillmentInbound\NotificationEmailList**](NotificationEmailList.md) |  | [optional] 
**feature_constraints** | [**\Popsicle\Amazon\Model\FulfillmentInbound\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional] 
**items** | [**\Popsicle\Amazon\Model\FulfillmentInbound\UpdateFulfillmentOrderItemList**](UpdateFulfillmentOrderItemList.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

