# OrderItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on. | 
**amazon_product_identifier** | **string** | Amazon Standard Identification Number (ASIN) of an item. | [optional] 
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. | [optional] 
**ordered_quantity** | [**\Popsicle\Amazon\Model\VendorOrders\ItemQuantity**](ItemQuantity.md) |  | 
**is_back_order_allowed** | **bool** | When true, we will accept backorder confirmations for this item. | 
**net_cost** | [**\Popsicle\Amazon\Model\VendorOrders\Money**](Money.md) |  | [optional] 
**list_price** | [**\Popsicle\Amazon\Model\VendorOrders\Money**](Money.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

