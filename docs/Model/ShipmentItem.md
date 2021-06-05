# ShipmentItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. The seller SKU is qualified by the seller&#x27;s seller ID, which is included with every call to the Selling Partner API. | [optional] 
**order_item_id** | **string** | An Amazon-defined order item identifier. | [optional] 
**order_adjustment_item_id** | **string** | An Amazon-defined order adjustment identifier defined for refunds, guarantee claims, and chargeback events. | [optional] 
**quantity_shipped** | **int** | The number of items shipped. | [optional] 
**item_charge_list** | [**\Popsicle\Amazon\Model\Finances\ChargeComponentList**](ChargeComponentList.md) |  | [optional] 
**item_charge_adjustment_list** | [**\Popsicle\Amazon\Model\Finances\ChargeComponentList**](ChargeComponentList.md) |  | [optional] 
**item_fee_list** | [**\Popsicle\Amazon\Model\Finances\FeeComponentList**](FeeComponentList.md) |  | [optional] 
**item_fee_adjustment_list** | [**\Popsicle\Amazon\Model\Finances\FeeComponentList**](FeeComponentList.md) |  | [optional] 
**item_tax_withheld_list** | [**\Popsicle\Amazon\Model\Finances\TaxWithheldComponentList**](TaxWithheldComponentList.md) |  | [optional] 
**promotion_list** | [**\Popsicle\Amazon\Model\Finances\PromotionList**](PromotionList.md) |  | [optional] 
**promotion_adjustment_list** | [**\Popsicle\Amazon\Model\Finances\PromotionList**](PromotionList.md) |  | [optional] 
**cost_of_points_granted** | [**\Popsicle\Amazon\Model\Finances\Currency**](Currency.md) |  | [optional] 
**cost_of_points_returned** | [**\Popsicle\Amazon\Model\Finances\Currency**](Currency.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

