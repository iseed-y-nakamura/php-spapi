<?php
/**
 * ProductPricingApi
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Popsicle\Amazon\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Popsicle\Amazon\ApiException;
use Popsicle\Amazon\ApiRequest;
use Popsicle\Amazon\Configuration;
use Popsicle\Amazon\HeaderSelector;
use Popsicle\Amazon\ObjectSerializer;

/**
 * ProductPricingApi Class Doc Comment
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductPricingApi
{
    use ApiRequest;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getCompetitivePricing
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param  string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param  string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param  string $customer_type Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Popsicle\Amazon\Model\ProductPricing\GetPricingResponse
     */
    public function getCompetitivePricing($marketplace_id, $item_type, $asins = null, $skus = null, $customer_type = null)
    {
        list($response) = $this->getCompetitivePricingWithHttpInfo($marketplace_id, $item_type, $asins, $skus, $customer_type);
        return $response;
    }

    /**
     * Operation getCompetitivePricingWithHttpInfo
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param  string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param  string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param  string $customer_type Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Popsicle\Amazon\Model\ProductPricing\GetPricingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCompetitivePricingWithHttpInfo($marketplace_id, $item_type, $asins = null, $skus = null, $customer_type = null)
    {
        $returnType = '\Popsicle\Amazon\Model\ProductPricing\GetPricingResponse';
        $request = $this->getCompetitivePricingRequest($marketplace_id, $item_type, $asins, $skus, $customer_type);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getCompetitivePricingAsync
     *
     * 
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param  string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param  string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param  string $customer_type Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompetitivePricingAsync($marketplace_id, $item_type, $asins = null, $skus = null, $customer_type = null)
    {
        return $this->getCompetitivePricingAsyncWithHttpInfo($marketplace_id, $item_type, $asins, $skus, $customer_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCompetitivePricingAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param  string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param  string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param  string $customer_type Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompetitivePricingAsyncWithHttpInfo($marketplace_id, $item_type, $asins = null, $skus = null, $customer_type = null)
    {
        $returnType = '\Popsicle\Amazon\Model\ProductPricing\GetPricingResponse';
        $request = $this->getCompetitivePricingRequest($marketplace_id, $item_type, $asins, $skus, $customer_type);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getCompetitivePricing'
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param  string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param  string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param  string $customer_type Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCompetitivePricingRequest($marketplace_id, $item_type, $asins = null, $skus = null, $customer_type = null)
    {
        // verify the required parameter 'marketplace_id' is set
        if ($marketplace_id === null || (is_array($marketplace_id) && count($marketplace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplace_id when calling getCompetitivePricing'
            );
        }
        // verify the required parameter 'item_type' is set
        if ($item_type === null || (is_array($item_type) && count($item_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $item_type when calling getCompetitivePricing'
            );
        }

        $resourcePath = '/products/pricing/v0/competitivePrice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($marketplace_id !== null) {
            $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id, null);
        }
        // query params
        if (is_array($asins)) {
            $asins = ObjectSerializer::serializeCollection($asins, 'csv', true);
        }
        if ($asins !== null) {
            $queryParams['Asins'] = ObjectSerializer::toQueryValue($asins, null);
        }
        // query params
        if (is_array($skus)) {
            $skus = ObjectSerializer::serializeCollection($skus, 'csv', true);
        }
        if ($skus !== null) {
            $queryParams['Skus'] = ObjectSerializer::toQueryValue($skus, null);
        }
        // query params
        if ($item_type !== null) {
            $queryParams['ItemType'] = ObjectSerializer::toQueryValue($item_type, null);
        }
        // query params
        if ($customer_type !== null) {
            $queryParams['CustomerType'] = ObjectSerializer::toQueryValue($customer_type, null);
        }


        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getItemOffers
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Popsicle\Amazon\Model\ProductPricing\GetOffersResponse
     */
    public function getItemOffers($marketplace_id, $item_condition, $asin, $customer_type = null)
    {
        list($response) = $this->getItemOffersWithHttpInfo($marketplace_id, $item_condition, $asin, $customer_type);
        return $response;
    }

    /**
     * Operation getItemOffersWithHttpInfo
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Popsicle\Amazon\Model\ProductPricing\GetOffersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getItemOffersWithHttpInfo($marketplace_id, $item_condition, $asin, $customer_type = null)
    {
        $returnType = '\Popsicle\Amazon\Model\ProductPricing\GetOffersResponse';
        $request = $this->getItemOffersRequest($marketplace_id, $item_condition, $asin, $customer_type);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getItemOffersAsync
     *
     * 
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemOffersAsync($marketplace_id, $item_condition, $asin, $customer_type = null)
    {
        return $this->getItemOffersAsyncWithHttpInfo($marketplace_id, $item_condition, $asin, $customer_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getItemOffersAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemOffersAsyncWithHttpInfo($marketplace_id, $item_condition, $asin, $customer_type = null)
    {
        $returnType = '\Popsicle\Amazon\Model\ProductPricing\GetOffersResponse';
        $request = $this->getItemOffersRequest($marketplace_id, $item_condition, $asin, $customer_type);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getItemOffers'
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getItemOffersRequest($marketplace_id, $item_condition, $asin, $customer_type = null)
    {
        // verify the required parameter 'marketplace_id' is set
        if ($marketplace_id === null || (is_array($marketplace_id) && count($marketplace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplace_id when calling getItemOffers'
            );
        }
        // verify the required parameter 'item_condition' is set
        if ($item_condition === null || (is_array($item_condition) && count($item_condition) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $item_condition when calling getItemOffers'
            );
        }
        // verify the required parameter 'asin' is set
        if ($asin === null || (is_array($asin) && count($asin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $asin when calling getItemOffers'
            );
        }

        $resourcePath = '/products/pricing/v0/items/{Asin}/offers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($marketplace_id !== null) {
            $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id, null);
        }
        // query params
        if ($item_condition !== null) {
            $queryParams['ItemCondition'] = ObjectSerializer::toQueryValue($item_condition, null);
        }
        // query params
        if ($customer_type !== null) {
            $queryParams['CustomerType'] = ObjectSerializer::toQueryValue($customer_type, null);
        }

        // path params
        if ($asin !== null) {
            $resourcePath = str_replace(
                '{' . 'Asin' . '}',
                ObjectSerializer::toPathValue($asin),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getListingOffers
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param  string $seller_sku Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     * @param  string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Popsicle\Amazon\Model\ProductPricing\GetOffersResponse
     */
    public function getListingOffers($marketplace_id, $item_condition, $seller_sku, $customer_type = null)
    {
        list($response) = $this->getListingOffersWithHttpInfo($marketplace_id, $item_condition, $seller_sku, $customer_type);
        return $response;
    }

    /**
     * Operation getListingOffersWithHttpInfo
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param  string $seller_sku Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     * @param  string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Popsicle\Amazon\Model\ProductPricing\GetOffersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getListingOffersWithHttpInfo($marketplace_id, $item_condition, $seller_sku, $customer_type = null)
    {
        $returnType = '\Popsicle\Amazon\Model\ProductPricing\GetOffersResponse';
        $request = $this->getListingOffersRequest($marketplace_id, $item_condition, $seller_sku, $customer_type);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getListingOffersAsync
     *
     * 
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param  string $seller_sku Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     * @param  string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingOffersAsync($marketplace_id, $item_condition, $seller_sku, $customer_type = null)
    {
        return $this->getListingOffersAsyncWithHttpInfo($marketplace_id, $item_condition, $seller_sku, $customer_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getListingOffersAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param  string $seller_sku Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     * @param  string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingOffersAsyncWithHttpInfo($marketplace_id, $item_condition, $seller_sku, $customer_type = null)
    {
        $returnType = '\Popsicle\Amazon\Model\ProductPricing\GetOffersResponse';
        $request = $this->getListingOffersRequest($marketplace_id, $item_condition, $seller_sku, $customer_type);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getListingOffers'
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param  string $seller_sku Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     * @param  string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getListingOffersRequest($marketplace_id, $item_condition, $seller_sku, $customer_type = null)
    {
        // verify the required parameter 'marketplace_id' is set
        if ($marketplace_id === null || (is_array($marketplace_id) && count($marketplace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplace_id when calling getListingOffers'
            );
        }
        // verify the required parameter 'item_condition' is set
        if ($item_condition === null || (is_array($item_condition) && count($item_condition) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $item_condition when calling getListingOffers'
            );
        }
        // verify the required parameter 'seller_sku' is set
        if ($seller_sku === null || (is_array($seller_sku) && count($seller_sku) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $seller_sku when calling getListingOffers'
            );
        }

        $resourcePath = '/products/pricing/v0/listings/{SellerSKU}/offers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($marketplace_id !== null) {
            $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id, null);
        }
        // query params
        if ($item_condition !== null) {
            $queryParams['ItemCondition'] = ObjectSerializer::toQueryValue($item_condition, null);
        }
        // query params
        if ($customer_type !== null) {
            $queryParams['CustomerType'] = ObjectSerializer::toQueryValue($customer_type, null);
        }

        // path params
        if ($seller_sku !== null) {
            $resourcePath = str_replace(
                '{' . 'SellerSKU' . '}',
                ObjectSerializer::toPathValue($seller_sku),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getPricing
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param  string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param  string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param  string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     * @param  string $offer_type Indicates whether to request pricing information for the seller&#x27;s B2C or B2B offers. Default is B2C. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Popsicle\Amazon\Model\ProductPricing\GetPricingResponse
     */
    public function getPricing($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null, $offer_type = null)
    {
        list($response) = $this->getPricingWithHttpInfo($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type);
        return $response;
    }

    /**
     * Operation getPricingWithHttpInfo
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param  string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param  string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param  string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     * @param  string $offer_type Indicates whether to request pricing information for the seller&#x27;s B2C or B2B offers. Default is B2C. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Popsicle\Amazon\Model\ProductPricing\GetPricingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPricingWithHttpInfo($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null, $offer_type = null)
    {
        $returnType = '\Popsicle\Amazon\Model\ProductPricing\GetPricingResponse';
        $request = $this->getPricingRequest($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getPricingAsync
     *
     * 
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param  string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param  string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param  string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     * @param  string $offer_type Indicates whether to request pricing information for the seller&#x27;s B2C or B2B offers. Default is B2C. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPricingAsync($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null, $offer_type = null)
    {
        return $this->getPricingAsyncWithHttpInfo($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPricingAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param  string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param  string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param  string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     * @param  string $offer_type Indicates whether to request pricing information for the seller&#x27;s B2C or B2B offers. Default is B2C. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPricingAsyncWithHttpInfo($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null, $offer_type = null)
    {
        $returnType = '\Popsicle\Amazon\Model\ProductPricing\GetPricingResponse';
        $request = $this->getPricingRequest($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getPricing'
     *
     * @param  string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param  string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param  string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param  string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param  string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     * @param  string $offer_type Indicates whether to request pricing information for the seller&#x27;s B2C or B2B offers. Default is B2C. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPricingRequest($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null, $offer_type = null)
    {
        // verify the required parameter 'marketplace_id' is set
        if ($marketplace_id === null || (is_array($marketplace_id) && count($marketplace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplace_id when calling getPricing'
            );
        }
        // verify the required parameter 'item_type' is set
        if ($item_type === null || (is_array($item_type) && count($item_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $item_type when calling getPricing'
            );
        }

        $resourcePath = '/products/pricing/v0/price';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($marketplace_id !== null) {
            $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id, null);
        }
        // query params
        if (is_array($asins)) {
            $asins = ObjectSerializer::serializeCollection($asins, 'csv', true);
        }
        if ($asins !== null) {
            $queryParams['Asins'] = ObjectSerializer::toQueryValue($asins, null);
        }
        // query params
        if (is_array($skus)) {
            $skus = ObjectSerializer::serializeCollection($skus, 'csv', true);
        }
        if ($skus !== null) {
            $queryParams['Skus'] = ObjectSerializer::toQueryValue($skus, null);
        }
        // query params
        if ($item_type !== null) {
            $queryParams['ItemType'] = ObjectSerializer::toQueryValue($item_type, null);
        }
        // query params
        if ($item_condition !== null) {
            $queryParams['ItemCondition'] = ObjectSerializer::toQueryValue($item_condition, null);
        }
        // query params
        if ($offer_type !== null) {
            $queryParams['OfferType'] = ObjectSerializer::toQueryValue($offer_type, null);
        }


        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

}
