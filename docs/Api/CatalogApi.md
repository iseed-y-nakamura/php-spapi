# Popsicle\Amazon\CatalogApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCatalogItem**](CatalogApi.md#getcatalogitem) | **GET** /catalog/2020-12-01/items/{asin} | 
[**searchCatalogItems**](CatalogApi.md#searchcatalogitems) | **GET** /catalog/2020-12-01/items | 

# **getCatalogItem**
> \Popsicle\Amazon\Model\Catalog\Item getCatalogItem($asin, $marketplace_ids, $included_data, $locale)



Retrieves details for an item in the Amazon catalog.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 5 | 5 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asin = "asin_example"; // string | The Amazon Standard Identification Number (ASIN) of the item.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces.
$included_data = array("included_data_example"); // string[] | A comma-delimited list of data sets to include in the response. Default: summaries.
$locale = "locale_example"; // string | Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.

try {
    $result = $apiInstance->getCatalogItem($asin, $marketplace_ids, $included_data, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCatalogItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. |
 **included_data** | [**string[]**](../Model/string.md)| A comma-delimited list of data sets to include in the response. Default: summaries. | [optional]
 **locale** | **string**| Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. | [optional]

### Return type

[**\Popsicle\Amazon\Model\Catalog\Item**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCatalogItems**
> \Popsicle\Amazon\Model\Catalog\ItemSearchResults searchCatalogItems($keywords, $marketplace_ids, $included_data, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale, $locale)



Search for and return a list of Amazon catalog items and associated information.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 1 | 5 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$keywords = array("keywords_example"); // string[] | A comma-delimited list of words or item identifiers to search the Amazon catalog for.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$included_data = array("included_data_example"); // string[] | A comma-delimited list of data sets to include in the response. Default: summaries.
$brand_names = array("brand_names_example"); // string[] | A comma-delimited list of brand names to limit the search to.
$classification_ids = array("classification_ids_example"); // string[] | A comma-delimited list of classification identifiers to limit the search to.
$page_size = 10; // int | Number of results to be returned per page.
$page_token = "page_token_example"; // string | A token to fetch a certain page when there are multiple pages worth of results.
$keywords_locale = "keywords_locale_example"; // string | The language the keywords are provided in. Defaults to the primary locale of the marketplace.
$locale = "locale_example"; // string | Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.

try {
    $result = $apiInstance->searchCatalogItems($keywords, $marketplace_ids, $included_data, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->searchCatalogItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keywords** | [**string[]**](../Model/string.md)| A comma-delimited list of words or item identifiers to search the Amazon catalog for. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **included_data** | [**string[]**](../Model/string.md)| A comma-delimited list of data sets to include in the response. Default: summaries. | [optional]
 **brand_names** | [**string[]**](../Model/string.md)| A comma-delimited list of brand names to limit the search to. | [optional]
 **classification_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of classification identifiers to limit the search to. | [optional]
 **page_size** | **int**| Number of results to be returned per page. | [optional] [default to 10]
 **page_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. | [optional]
 **keywords_locale** | **string**| The language the keywords are provided in. Defaults to the primary locale of the marketplace. | [optional]
 **locale** | **string**| Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. | [optional]

### Return type

[**\Popsicle\Amazon\Model\Catalog\ItemSearchResults**](../Model/ItemSearchResults.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

