<?php
/**
 * UpdateInventoryApi
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Direct Fulfillment Inventory Updates
 *
 * The Selling Partner API for Direct Fulfillment Inventory Updates provides programmatic access to a direct fulfillment vendor's inventory updates.
 *
 * OpenAPI spec version: v1
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
 * UpdateInventoryApi Class Doc Comment
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateInventoryApi
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
     * Operation submitInventoryUpdate
     *
     * @param  \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body body (required)
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse
     */
    public function submitInventoryUpdate($body, $warehouse_id)
    {
        list($response) = $this->submitInventoryUpdateWithHttpInfo($body, $warehouse_id);
        return $response;
    }

    /**
     * Operation submitInventoryUpdateWithHttpInfo
     *
     * @param  \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body (required)
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function submitInventoryUpdateWithHttpInfo($body, $warehouse_id)
    {
        $returnType = '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse';
        $request = $this->submitInventoryUpdateRequest($body, $warehouse_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation submitInventoryUpdateAsync
     *
     * 
     *
     * @param  \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body (required)
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitInventoryUpdateAsync($body, $warehouse_id)
    {
        return $this->submitInventoryUpdateAsyncWithHttpInfo($body, $warehouse_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation submitInventoryUpdateAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body (required)
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitInventoryUpdateAsyncWithHttpInfo($body, $warehouse_id)
    {
        $returnType = '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse';
        $request = $this->submitInventoryUpdateRequest($body, $warehouse_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'submitInventoryUpdate'
     *
     * @param  \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body (required)
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function submitInventoryUpdateRequest($body, $warehouse_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling submitInventoryUpdate'
            );
        }
        // verify the required parameter 'warehouse_id' is set
        if ($warehouse_id === null || (is_array($warehouse_id) && count($warehouse_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $warehouse_id when calling submitInventoryUpdate'
            );
        }

        $resourcePath = '/vendor/directFulfillment/inventory/v1/warehouses/{warehouseId}/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($warehouse_id !== null) {
            $resourcePath = str_replace(
                '{' . 'warehouseId' . '}',
                ObjectSerializer::toPathValue($warehouse_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

}
