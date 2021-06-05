<?php
/**
 * SalesApi
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Sales
 *
 * The Selling Partner API for Sales provides APIs related to sales performance.
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
use Popsicle\Amazon\Configuration;
use Popsicle\Amazon\HeaderSelector;
use Popsicle\Amazon\ObjectSerializer;

/**
 * SalesApi Class Doc Comment
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesApi
{
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
     * Operation getOrderMetrics
     *
     * @param  string[] $marketplace_ids A list of marketplace identifiers. Example: ATVPDKIKX0DER indicates the US marketplace. (required)
     * @param  string $interval A time interval used for selecting order metrics. This takes the form of two dates separated by two hyphens (first date is inclusive; second date is exclusive). Dates are in ISO8601 format and must represent absolute time (either Z notation or offset notation). Example: 2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for Sept 1st, 2nd and 3rd in the -07:00 zone. (required)
     * @param  string $granularity The granularity of the grouping of order metrics, based on a unit of time. Specifying granularity&#x3D;Hour results in a successful request only if the interval specified is less than or equal to 30 days from now. For all other granularities, the interval specified must be less or equal to 2 years from now. Specifying granularity&#x3D;Total results in order metrics that are aggregated over the entire interval that you specify. If the interval start and end date don’t align with the specified granularity, the head and tail end of the response interval will contain partial data. Example: Day to get a daily breakdown of the request interval, where the day boundary is defined by the granularityTimeZone. (required)
     * @param  string $granularity_time_zone An IANA-compatible time zone for determining the day boundary. Required when specifying a granularity value greater than Hour. The granularityTimeZone value must align with the offset of the specified interval value. For example, if the interval value uses Z notation, then granularityTimeZone must be UTC. If the interval value uses an offset, then granularityTimeZone must be an IANA-compatible time zone that matches the offset. Example: US/Pacific to compute day boundaries, accounting for daylight time savings, for US/Pacific zone. (optional)
     * @param  string $buyer_type Filters the results by the buyer type that you specify, B2B (business to business) or B2C (business to customer). Example: B2B, if you want the response to include order metrics for only B2B buyers. (optional, default to All)
     * @param  string $fulfillment_network Filters the results by the fulfillment network that you specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network). Do not include this filter if you want the response to include order metrics for all fulfillment networks. Example: AFN, if you want the response to include order metrics for only Amazon fulfillment network. (optional)
     * @param  string $first_day_of_week Specifies the day that the week starts on when granularity&#x3D;Week, either Monday or Sunday. Default: Monday. Example: Sunday, if you want the week to start on a Sunday. (optional, default to Monday)
     * @param  string $asin Filters the results by the ASIN that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all ASINs. Example: B0792R1RSN, if you want the response to include order metrics for only ASIN B0792R1RSN. (optional)
     * @param  string $sku Filters the results by the SKU that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all SKUs. Example: TestSKU, if you want the response to include order metrics for only SKU TestSKU. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse
     */
    public function getOrderMetrics($marketplace_ids, $interval, $granularity, $granularity_time_zone = null, $buyer_type = 'All', $fulfillment_network = null, $first_day_of_week = 'Monday', $asin = null, $sku = null)
    {
        list($response) = $this->getOrderMetricsWithHttpInfo($marketplace_ids, $interval, $granularity, $granularity_time_zone, $buyer_type, $fulfillment_network, $first_day_of_week, $asin, $sku);
        return $response;
    }

    /**
     * Operation getOrderMetricsWithHttpInfo
     *
     * @param  string[] $marketplace_ids A list of marketplace identifiers. Example: ATVPDKIKX0DER indicates the US marketplace. (required)
     * @param  string $interval A time interval used for selecting order metrics. This takes the form of two dates separated by two hyphens (first date is inclusive; second date is exclusive). Dates are in ISO8601 format and must represent absolute time (either Z notation or offset notation). Example: 2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for Sept 1st, 2nd and 3rd in the -07:00 zone. (required)
     * @param  string $granularity The granularity of the grouping of order metrics, based on a unit of time. Specifying granularity&#x3D;Hour results in a successful request only if the interval specified is less than or equal to 30 days from now. For all other granularities, the interval specified must be less or equal to 2 years from now. Specifying granularity&#x3D;Total results in order metrics that are aggregated over the entire interval that you specify. If the interval start and end date don’t align with the specified granularity, the head and tail end of the response interval will contain partial data. Example: Day to get a daily breakdown of the request interval, where the day boundary is defined by the granularityTimeZone. (required)
     * @param  string $granularity_time_zone An IANA-compatible time zone for determining the day boundary. Required when specifying a granularity value greater than Hour. The granularityTimeZone value must align with the offset of the specified interval value. For example, if the interval value uses Z notation, then granularityTimeZone must be UTC. If the interval value uses an offset, then granularityTimeZone must be an IANA-compatible time zone that matches the offset. Example: US/Pacific to compute day boundaries, accounting for daylight time savings, for US/Pacific zone. (optional)
     * @param  string $buyer_type Filters the results by the buyer type that you specify, B2B (business to business) or B2C (business to customer). Example: B2B, if you want the response to include order metrics for only B2B buyers. (optional, default to All)
     * @param  string $fulfillment_network Filters the results by the fulfillment network that you specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network). Do not include this filter if you want the response to include order metrics for all fulfillment networks. Example: AFN, if you want the response to include order metrics for only Amazon fulfillment network. (optional)
     * @param  string $first_day_of_week Specifies the day that the week starts on when granularity&#x3D;Week, either Monday or Sunday. Default: Monday. Example: Sunday, if you want the week to start on a Sunday. (optional, default to Monday)
     * @param  string $asin Filters the results by the ASIN that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all ASINs. Example: B0792R1RSN, if you want the response to include order metrics for only ASIN B0792R1RSN. (optional)
     * @param  string $sku Filters the results by the SKU that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all SKUs. Example: TestSKU, if you want the response to include order metrics for only SKU TestSKU. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderMetricsWithHttpInfo($marketplace_ids, $interval, $granularity, $granularity_time_zone = null, $buyer_type = 'All', $fulfillment_network = null, $first_day_of_week = 'Monday', $asin = null, $sku = null)
    {
        $returnType = '\Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse';
        $request = $this->getOrderMetricsRequest($marketplace_ids, $interval, $granularity, $granularity_time_zone, $buyer_type, $fulfillment_network, $first_day_of_week, $asin, $sku);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrderMetricsAsync
     *
     * 
     *
     * @param  string[] $marketplace_ids A list of marketplace identifiers. Example: ATVPDKIKX0DER indicates the US marketplace. (required)
     * @param  string $interval A time interval used for selecting order metrics. This takes the form of two dates separated by two hyphens (first date is inclusive; second date is exclusive). Dates are in ISO8601 format and must represent absolute time (either Z notation or offset notation). Example: 2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for Sept 1st, 2nd and 3rd in the -07:00 zone. (required)
     * @param  string $granularity The granularity of the grouping of order metrics, based on a unit of time. Specifying granularity&#x3D;Hour results in a successful request only if the interval specified is less than or equal to 30 days from now. For all other granularities, the interval specified must be less or equal to 2 years from now. Specifying granularity&#x3D;Total results in order metrics that are aggregated over the entire interval that you specify. If the interval start and end date don’t align with the specified granularity, the head and tail end of the response interval will contain partial data. Example: Day to get a daily breakdown of the request interval, where the day boundary is defined by the granularityTimeZone. (required)
     * @param  string $granularity_time_zone An IANA-compatible time zone for determining the day boundary. Required when specifying a granularity value greater than Hour. The granularityTimeZone value must align with the offset of the specified interval value. For example, if the interval value uses Z notation, then granularityTimeZone must be UTC. If the interval value uses an offset, then granularityTimeZone must be an IANA-compatible time zone that matches the offset. Example: US/Pacific to compute day boundaries, accounting for daylight time savings, for US/Pacific zone. (optional)
     * @param  string $buyer_type Filters the results by the buyer type that you specify, B2B (business to business) or B2C (business to customer). Example: B2B, if you want the response to include order metrics for only B2B buyers. (optional, default to All)
     * @param  string $fulfillment_network Filters the results by the fulfillment network that you specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network). Do not include this filter if you want the response to include order metrics for all fulfillment networks. Example: AFN, if you want the response to include order metrics for only Amazon fulfillment network. (optional)
     * @param  string $first_day_of_week Specifies the day that the week starts on when granularity&#x3D;Week, either Monday or Sunday. Default: Monday. Example: Sunday, if you want the week to start on a Sunday. (optional, default to Monday)
     * @param  string $asin Filters the results by the ASIN that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all ASINs. Example: B0792R1RSN, if you want the response to include order metrics for only ASIN B0792R1RSN. (optional)
     * @param  string $sku Filters the results by the SKU that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all SKUs. Example: TestSKU, if you want the response to include order metrics for only SKU TestSKU. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderMetricsAsync($marketplace_ids, $interval, $granularity, $granularity_time_zone = null, $buyer_type = 'All', $fulfillment_network = null, $first_day_of_week = 'Monday', $asin = null, $sku = null)
    {
        return $this->getOrderMetricsAsyncWithHttpInfo($marketplace_ids, $interval, $granularity, $granularity_time_zone, $buyer_type, $fulfillment_network, $first_day_of_week, $asin, $sku)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderMetricsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string[] $marketplace_ids A list of marketplace identifiers. Example: ATVPDKIKX0DER indicates the US marketplace. (required)
     * @param  string $interval A time interval used for selecting order metrics. This takes the form of two dates separated by two hyphens (first date is inclusive; second date is exclusive). Dates are in ISO8601 format and must represent absolute time (either Z notation or offset notation). Example: 2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for Sept 1st, 2nd and 3rd in the -07:00 zone. (required)
     * @param  string $granularity The granularity of the grouping of order metrics, based on a unit of time. Specifying granularity&#x3D;Hour results in a successful request only if the interval specified is less than or equal to 30 days from now. For all other granularities, the interval specified must be less or equal to 2 years from now. Specifying granularity&#x3D;Total results in order metrics that are aggregated over the entire interval that you specify. If the interval start and end date don’t align with the specified granularity, the head and tail end of the response interval will contain partial data. Example: Day to get a daily breakdown of the request interval, where the day boundary is defined by the granularityTimeZone. (required)
     * @param  string $granularity_time_zone An IANA-compatible time zone for determining the day boundary. Required when specifying a granularity value greater than Hour. The granularityTimeZone value must align with the offset of the specified interval value. For example, if the interval value uses Z notation, then granularityTimeZone must be UTC. If the interval value uses an offset, then granularityTimeZone must be an IANA-compatible time zone that matches the offset. Example: US/Pacific to compute day boundaries, accounting for daylight time savings, for US/Pacific zone. (optional)
     * @param  string $buyer_type Filters the results by the buyer type that you specify, B2B (business to business) or B2C (business to customer). Example: B2B, if you want the response to include order metrics for only B2B buyers. (optional, default to All)
     * @param  string $fulfillment_network Filters the results by the fulfillment network that you specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network). Do not include this filter if you want the response to include order metrics for all fulfillment networks. Example: AFN, if you want the response to include order metrics for only Amazon fulfillment network. (optional)
     * @param  string $first_day_of_week Specifies the day that the week starts on when granularity&#x3D;Week, either Monday or Sunday. Default: Monday. Example: Sunday, if you want the week to start on a Sunday. (optional, default to Monday)
     * @param  string $asin Filters the results by the ASIN that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all ASINs. Example: B0792R1RSN, if you want the response to include order metrics for only ASIN B0792R1RSN. (optional)
     * @param  string $sku Filters the results by the SKU that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all SKUs. Example: TestSKU, if you want the response to include order metrics for only SKU TestSKU. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderMetricsAsyncWithHttpInfo($marketplace_ids, $interval, $granularity, $granularity_time_zone = null, $buyer_type = 'All', $fulfillment_network = null, $first_day_of_week = 'Monday', $asin = null, $sku = null)
    {
        $returnType = '\Popsicle\Amazon\Model\Sales\GetOrderMetricsResponse';
        $request = $this->getOrderMetricsRequest($marketplace_ids, $interval, $granularity, $granularity_time_zone, $buyer_type, $fulfillment_network, $first_day_of_week, $asin, $sku);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOrderMetrics'
     *
     * @param  string[] $marketplace_ids A list of marketplace identifiers. Example: ATVPDKIKX0DER indicates the US marketplace. (required)
     * @param  string $interval A time interval used for selecting order metrics. This takes the form of two dates separated by two hyphens (first date is inclusive; second date is exclusive). Dates are in ISO8601 format and must represent absolute time (either Z notation or offset notation). Example: 2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for Sept 1st, 2nd and 3rd in the -07:00 zone. (required)
     * @param  string $granularity The granularity of the grouping of order metrics, based on a unit of time. Specifying granularity&#x3D;Hour results in a successful request only if the interval specified is less than or equal to 30 days from now. For all other granularities, the interval specified must be less or equal to 2 years from now. Specifying granularity&#x3D;Total results in order metrics that are aggregated over the entire interval that you specify. If the interval start and end date don’t align with the specified granularity, the head and tail end of the response interval will contain partial data. Example: Day to get a daily breakdown of the request interval, where the day boundary is defined by the granularityTimeZone. (required)
     * @param  string $granularity_time_zone An IANA-compatible time zone for determining the day boundary. Required when specifying a granularity value greater than Hour. The granularityTimeZone value must align with the offset of the specified interval value. For example, if the interval value uses Z notation, then granularityTimeZone must be UTC. If the interval value uses an offset, then granularityTimeZone must be an IANA-compatible time zone that matches the offset. Example: US/Pacific to compute day boundaries, accounting for daylight time savings, for US/Pacific zone. (optional)
     * @param  string $buyer_type Filters the results by the buyer type that you specify, B2B (business to business) or B2C (business to customer). Example: B2B, if you want the response to include order metrics for only B2B buyers. (optional, default to All)
     * @param  string $fulfillment_network Filters the results by the fulfillment network that you specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network). Do not include this filter if you want the response to include order metrics for all fulfillment networks. Example: AFN, if you want the response to include order metrics for only Amazon fulfillment network. (optional)
     * @param  string $first_day_of_week Specifies the day that the week starts on when granularity&#x3D;Week, either Monday or Sunday. Default: Monday. Example: Sunday, if you want the week to start on a Sunday. (optional, default to Monday)
     * @param  string $asin Filters the results by the ASIN that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all ASINs. Example: B0792R1RSN, if you want the response to include order metrics for only ASIN B0792R1RSN. (optional)
     * @param  string $sku Filters the results by the SKU that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all SKUs. Example: TestSKU, if you want the response to include order metrics for only SKU TestSKU. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderMetricsRequest($marketplace_ids, $interval, $granularity, $granularity_time_zone = null, $buyer_type = 'All', $fulfillment_network = null, $first_day_of_week = 'Monday', $asin = null, $sku = null)
    {
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (is_array($marketplace_ids) && count($marketplace_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling getOrderMetrics'
            );
        }
        // verify the required parameter 'interval' is set
        if ($interval === null || (is_array($interval) && count($interval) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $interval when calling getOrderMetrics'
            );
        }
        // verify the required parameter 'granularity' is set
        if ($granularity === null || (is_array($granularity) && count($granularity) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $granularity when calling getOrderMetrics'
            );
        }

        $resourcePath = '/sales/v1/orderMetrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'csv', true);
        }
        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids, null);
        }
        // query params
        if ($interval !== null) {
            $queryParams['interval'] = ObjectSerializer::toQueryValue($interval, null);
        }
        // query params
        if ($granularity_time_zone !== null) {
            $queryParams['granularityTimeZone'] = ObjectSerializer::toQueryValue($granularity_time_zone, null);
        }
        // query params
        if ($granularity !== null) {
            $queryParams['granularity'] = ObjectSerializer::toQueryValue($granularity, null);
        }
        // query params
        if ($buyer_type !== null) {
            $queryParams['buyerType'] = ObjectSerializer::toQueryValue($buyer_type, null);
        }
        // query params
        if ($fulfillment_network !== null) {
            $queryParams['fulfillmentNetwork'] = ObjectSerializer::toQueryValue($fulfillment_network, null);
        }
        // query params
        if ($first_day_of_week !== null) {
            $queryParams['firstDayOfWeek'] = ObjectSerializer::toQueryValue($first_day_of_week, null);
        }
        // query params
        if ($asin !== null) {
            $queryParams['asin'] = ObjectSerializer::toQueryValue($asin, null);
        }
        // query params
        if ($sku !== null) {
            $queryParams['sku'] = ObjectSerializer::toQueryValue($sku, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'payload']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'payload'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $method = 'GET';
        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        $amazonHeader = \Popsicle\Amazon\Signature::calculateSignature(
            $this->config,
            str_replace('https://', '', $this->config->getHost()),
            $method,
            $resourcePath,
            $query,
            (string) $httpBody,
        );
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers,
            $amazonHeader
        );
        return new Request(
            $method,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
