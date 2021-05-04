# Popsicle\Amazon\ShippingApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipment**](ShippingApi.md#cancelshipment) | **POST** /shipping/v1/shipments/{shipmentId}/cancel | 
[**createShipment**](ShippingApi.md#createshipment) | **POST** /shipping/v1/shipments | 
[**getAccount**](ShippingApi.md#getaccount) | **GET** /shipping/v1/account | 
[**getRates**](ShippingApi.md#getrates) | **POST** /shipping/v1/rates | 
[**getShipment**](ShippingApi.md#getshipment) | **GET** /shipping/v1/shipments/{shipmentId} | 
[**getTrackingInformation**](ShippingApi.md#gettrackinginformation) | **GET** /shipping/v1/tracking/{trackingId} | 
[**purchaseLabels**](ShippingApi.md#purchaselabels) | **POST** /shipping/v1/shipments/{shipmentId}/purchaseLabels | 
[**purchaseShipment**](ShippingApi.md#purchaseshipment) | **POST** /shipping/v1/purchaseShipment | 
[**retrieveShippingLabel**](ShippingApi.md#retrieveshippinglabel) | **POST** /shipping/v1/shipments/{shipmentId}/containers/{trackingId}/label | 

# **cancelShipment**
> \Popsicle\Amazon\Model\CancelShipmentResponse cancelShipment($shipment_id)



Cancel a shipment by the given shipmentId.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | 

try {
    $result = $apiInstance->cancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**|  |

### Return type

[**\Popsicle\Amazon\Model\CancelShipmentResponse**](../Model/CancelShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShipment**
> \Popsicle\Amazon\Model\CreateShipmentResponse createShipment($body)



Create a new shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\CreateShipmentRequest(); // \Popsicle\Amazon\Model\CreateShipmentRequest | 

try {
    $result = $apiInstance->createShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\CreateShipmentRequest**](../Model/CreateShipmentRequest.md)|  |

### Return type

[**\Popsicle\Amazon\Model\CreateShipmentResponse**](../Model/CreateShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccount**
> \Popsicle\Amazon\Model\GetAccountResponse getAccount()



Verify if the current account is valid.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Popsicle\Amazon\Model\GetAccountResponse**](../Model/GetAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRates**
> \Popsicle\Amazon\Model\GetRatesResponse getRates($body)



Get service rates.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\GetRatesRequest(); // \Popsicle\Amazon\Model\GetRatesRequest | 

try {
    $result = $apiInstance->getRates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->getRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\GetRatesRequest**](../Model/GetRatesRequest.md)|  |

### Return type

[**\Popsicle\Amazon\Model\GetRatesResponse**](../Model/GetRatesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShipment**
> \Popsicle\Amazon\Model\GetShipmentResponse getShipment($shipment_id)



Return the entire shipment object for the shipmentId.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | 

try {
    $result = $apiInstance->getShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**|  |

### Return type

[**\Popsicle\Amazon\Model\GetShipmentResponse**](../Model/GetShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrackingInformation**
> \Popsicle\Amazon\Model\GetTrackingInformationResponse getTrackingInformation($tracking_id)



Return the tracking information of a shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tracking_id = "tracking_id_example"; // string | 

try {
    $result = $apiInstance->getTrackingInformation($tracking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->getTrackingInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_id** | **string**|  |

### Return type

[**\Popsicle\Amazon\Model\GetTrackingInformationResponse**](../Model/GetTrackingInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseLabels**
> \Popsicle\Amazon\Model\PurchaseLabelsResponse purchaseLabels($body, $shipment_id)



Purchase shipping labels based on a given rate.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\PurchaseLabelsRequest(); // \Popsicle\Amazon\Model\PurchaseLabelsRequest | 
$shipment_id = "shipment_id_example"; // string | 

try {
    $result = $apiInstance->purchaseLabels($body, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->purchaseLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\PurchaseLabelsRequest**](../Model/PurchaseLabelsRequest.md)|  |
 **shipment_id** | **string**|  |

### Return type

[**\Popsicle\Amazon\Model\PurchaseLabelsResponse**](../Model/PurchaseLabelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseShipment**
> \Popsicle\Amazon\Model\PurchaseShipmentResponse purchaseShipment($body)



Purchase shipping labels.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\PurchaseShipmentRequest(); // \Popsicle\Amazon\Model\PurchaseShipmentRequest | 

try {
    $result = $apiInstance->purchaseShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->purchaseShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\PurchaseShipmentRequest**](../Model/PurchaseShipmentRequest.md)|  |

### Return type

[**\Popsicle\Amazon\Model\PurchaseShipmentResponse**](../Model/PurchaseShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveShippingLabel**
> \Popsicle\Amazon\Model\RetrieveShippingLabelResponse retrieveShippingLabel($body, $shipment_id, $tracking_id)



Retrieve shipping label based on the shipment id and tracking id.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\RetrieveShippingLabelRequest(); // \Popsicle\Amazon\Model\RetrieveShippingLabelRequest | 
$shipment_id = "shipment_id_example"; // string | 
$tracking_id = "tracking_id_example"; // string | 

try {
    $result = $apiInstance->retrieveShippingLabel($body, $shipment_id, $tracking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->retrieveShippingLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\RetrieveShippingLabelRequest**](../Model/RetrieveShippingLabelRequest.md)|  |
 **shipment_id** | **string**|  |
 **tracking_id** | **string**|  |

### Return type

[**\Popsicle\Amazon\Model\RetrieveShippingLabelResponse**](../Model/RetrieveShippingLabelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

