# Popsicle\Amazon\FeesApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMyFeesEstimateForASIN**](FeesApi.md#getmyfeesestimateforasin) | **POST** /products/fees/v0/items/{Asin}/feesEstimate | 
[**getMyFeesEstimateForSKU**](FeesApi.md#getmyfeesestimateforsku) | **POST** /products/fees/v0/listings/{SellerSKU}/feesEstimate | 

# **getMyFeesEstimateForASIN**
> \Popsicle\Amazon\Model\ProductFees\GetMyFeesEstimateResponse getMyFeesEstimateForASIN($body, $asin)



Returns the estimated fees for the item indicated by the specified Asin in the marketplace specified in the request body.  You can call getMyFeesEstimateForASIN for an item on behalf of a seller before the seller sets the item's price. They can then take estimated fees into account. With each product fees request, you must include an original identifier. This identifier is included in the fees estimate so you can correlate a fees estimate with the original request.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 20 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\ProductFees\GetMyFeesEstimateRequest(); // \Popsicle\Amazon\Model\ProductFees\GetMyFeesEstimateRequest | 
$asin = "asin_example"; // string | The Amazon Standard Identification Number (ASIN) of the item.

try {
    $result = $apiInstance->getMyFeesEstimateForASIN($body, $asin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->getMyFeesEstimateForASIN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\ProductFees\GetMyFeesEstimateRequest**](../Model/GetMyFeesEstimateRequest.md)|  |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |

### Return type

[**\Popsicle\Amazon\Model\ProductFees\GetMyFeesEstimateResponse**](../Model/GetMyFeesEstimateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyFeesEstimateForSKU**
> \Popsicle\Amazon\Model\ProductFees\GetMyFeesEstimateResponse getMyFeesEstimateForSKU($body, $seller_sku)



Returns the estimated fees for the item indicated by the specified seller SKU in the marketplace specified in the request body.  You can call getMyFeesEstimateForSKU for an item on behalf of a seller before the seller sets the item's price. They can then take estimated fees into account. With each fees estimate request, you must include an original identifier. This identifier is included in the fees estimate so you can correlate a fees estimate with the original request.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 20 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\ProductFees\GetMyFeesEstimateRequest(); // \Popsicle\Amazon\Model\ProductFees\GetMyFeesEstimateRequest | 
$seller_sku = "seller_sku_example"; // string | Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.

try {
    $result = $apiInstance->getMyFeesEstimateForSKU($body, $seller_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->getMyFeesEstimateForSKU: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\ProductFees\GetMyFeesEstimateRequest**](../Model/GetMyFeesEstimateRequest.md)|  |
 **seller_sku** | **string**| Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. |

### Return type

[**\Popsicle\Amazon\Model\ProductFees\GetMyFeesEstimateResponse**](../Model/GetMyFeesEstimateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

