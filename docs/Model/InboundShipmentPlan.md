# InboundShipmentPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | A shipment identifier originally returned by the createInboundShipmentPlan operation. | 
**destination_fulfillment_center_id** | **string** | An Amazon fulfillment center identifier created by Amazon. | 
**ship_to_address** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\Address**](Address.md) |  | 
**label_prep_type** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\LabelPrepType**](LabelPrepType.md) |  | 
**items** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\InboundShipmentPlanItemList**](InboundShipmentPlanItemList.md) |  | 
**estimated_box_contents_fee** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\BoxContentsFeeDetails**](BoxContentsFeeDetails.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

