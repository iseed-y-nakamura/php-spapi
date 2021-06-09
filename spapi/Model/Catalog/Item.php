<?php
/**
 * Item
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.
 *
 * OpenAPI spec version: 2020-12-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Popsicle\Amazon\Model\Catalog;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * Item Class Doc Comment
 *
 * @category Class
 * @description An item in the Amazon catalog.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Item implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asin' => 'string',//'\Popsicle\Amazon\Model\Catalog\ItemAsin',
'attributes' => 'object',//'\Popsicle\Amazon\Model\Catalog\ItemAttributes',
'identifiers' => '\Popsicle\Amazon\Model\Catalog\ItemIdentifiers',
'images' => '\Popsicle\Amazon\Model\Catalog\ItemImages',
'product_types' => '\Popsicle\Amazon\Model\Catalog\ItemProductTypes',
'sales_ranks' => '\Popsicle\Amazon\Model\Catalog\ItemSalesRanks',
'summaries' => '\Popsicle\Amazon\Model\Catalog\ItemSummaries',
'variations' => '\Popsicle\Amazon\Model\Catalog\ItemVariations',
'vendor_details' => '\Popsicle\Amazon\Model\Catalog\ItemVendorDetails'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asin' => null,
'attributes' => null,
'identifiers' => null,
'images' => null,
'product_types' => null,
'sales_ranks' => null,
'summaries' => null,
'variations' => null,
'vendor_details' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'asin' => 'asin',
'attributes' => 'attributes',
'identifiers' => 'identifiers',
'images' => 'images',
'product_types' => 'productTypes',
'sales_ranks' => 'salesRanks',
'summaries' => 'summaries',
'variations' => 'variations',
'vendor_details' => 'vendorDetails'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
'attributes' => 'setAttributes',
'identifiers' => 'setIdentifiers',
'images' => 'setImages',
'product_types' => 'setProductTypes',
'sales_ranks' => 'setSalesRanks',
'summaries' => 'setSummaries',
'variations' => 'setVariations',
'vendor_details' => 'setVendorDetails'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
'attributes' => 'getAttributes',
'identifiers' => 'getIdentifiers',
'images' => 'getImages',
'product_types' => 'getProductTypes',
'sales_ranks' => 'getSalesRanks',
'summaries' => 'getSummaries',
'variations' => 'getVariations',
'vendor_details' => 'getVendorDetails'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['identifiers'] = isset($data['identifiers']) ? $data['identifiers'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['product_types'] = isset($data['product_types']) ? $data['product_types'] : null;
        $this->container['sales_ranks'] = isset($data['sales_ranks']) ? $data['sales_ranks'] : null;
        $this->container['summaries'] = isset($data['summaries']) ? $data['summaries'] : null;
        $this->container['variations'] = isset($data['variations']) ? $data['variations'] : null;
        $this->container['vendor_details'] = isset($data['vendor_details']) ? $data['vendor_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets asin
     *
     * @return \Popsicle\Amazon\Model\Catalog\ItemAsin
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param \Popsicle\Amazon\Model\Catalog\ItemAsin $asin asin
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \Popsicle\Amazon\Model\Catalog\ItemAttributes
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Popsicle\Amazon\Model\Catalog\ItemAttributes $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return \Popsicle\Amazon\Model\Catalog\ItemIdentifiers
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \Popsicle\Amazon\Model\Catalog\ItemIdentifiers $identifiers identifiers
     *
     * @return $this
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \Popsicle\Amazon\Model\Catalog\ItemImages
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Popsicle\Amazon\Model\Catalog\ItemImages $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets product_types
     *
     * @return \Popsicle\Amazon\Model\Catalog\ItemProductTypes
     */
    public function getProductTypes()
    {
        return $this->container['product_types'];
    }

    /**
     * Sets product_types
     *
     * @param \Popsicle\Amazon\Model\Catalog\ItemProductTypes $product_types product_types
     *
     * @return $this
     */
    public function setProductTypes($product_types)
    {
        $this->container['product_types'] = $product_types;

        return $this;
    }

    /**
     * Gets sales_ranks
     *
     * @return \Popsicle\Amazon\Model\Catalog\ItemSalesRanks
     */
    public function getSalesRanks()
    {
        return $this->container['sales_ranks'];
    }

    /**
     * Sets sales_ranks
     *
     * @param \Popsicle\Amazon\Model\Catalog\ItemSalesRanks $sales_ranks sales_ranks
     *
     * @return $this
     */
    public function setSalesRanks($sales_ranks)
    {
        $this->container['sales_ranks'] = $sales_ranks;

        return $this;
    }

    /**
     * Gets summaries
     *
     * @return \Popsicle\Amazon\Model\Catalog\ItemSummaries
     */
    public function getSummaries()
    {
        return $this->container['summaries'];
    }

    /**
     * Sets summaries
     *
     * @param \Popsicle\Amazon\Model\Catalog\ItemSummaries $summaries summaries
     *
     * @return $this
     */
    public function setSummaries($summaries)
    {
        $this->container['summaries'] = $summaries;

        return $this;
    }

    /**
     * Gets variations
     *
     * @return \Popsicle\Amazon\Model\Catalog\ItemVariations
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     *
     * @param \Popsicle\Amazon\Model\Catalog\ItemVariations $variations variations
     *
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

        return $this;
    }

    /**
     * Gets vendor_details
     *
     * @return \Popsicle\Amazon\Model\Catalog\ItemVendorDetails
     */
    public function getVendorDetails()
    {
        return $this->container['vendor_details'];
    }

    /**
     * Sets vendor_details
     *
     * @param \Popsicle\Amazon\Model\Catalog\ItemVendorDetails $vendor_details vendor_details
     *
     * @return $this
     */
    public function setVendorDetails($vendor_details)
    {
        $this->container['vendor_details'] = $vendor_details;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
