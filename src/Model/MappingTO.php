<?php
/**
 * MappingTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenEuropa\SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Apache Syncope
 *
 * Apache Syncope 2.1.2-SNAPSHOT
 *
 * OpenAPI spec version: 2.1.2-SNAPSHOT
 * Contact: dev@syncope.apache.org
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenEuropa\SyncopePhpClient\Model;

use \ArrayAccess;
use \OpenEuropa\SyncopePhpClient\ObjectSerializer;

/**
 * MappingTO Class Doc Comment
 *
 * @category Class
 * @package  OpenEuropa\SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MappingTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MappingTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'connObjectLink' => 'string',
        'connObjectKeyItem' => '\OpenEuropa\SyncopePhpClient\Model\ItemTO',
        'items' => '\OpenEuropa\SyncopePhpClient\Model\ItemTO[]',
        'linkingItems' => '\OpenEuropa\SyncopePhpClient\Model\ItemTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'connObjectLink' => null,
        'connObjectKeyItem' => null,
        'items' => null,
        'linkingItems' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'connObjectLink' => 'connObjectLink',
        'connObjectKeyItem' => 'connObjectKeyItem',
        'items' => 'items',
        'linkingItems' => 'linkingItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connObjectLink' => 'setConnObjectLink',
        'connObjectKeyItem' => 'setConnObjectKeyItem',
        'items' => 'setItems',
        'linkingItems' => 'setLinkingItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connObjectLink' => 'getConnObjectLink',
        'connObjectKeyItem' => 'getConnObjectKeyItem',
        'items' => 'getItems',
        'linkingItems' => 'getLinkingItems'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['connObjectLink'] = isset($data['connObjectLink']) ? $data['connObjectLink'] : null;
        $this->container['connObjectKeyItem'] = isset($data['connObjectKeyItem']) ? $data['connObjectKeyItem'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['linkingItems'] = isset($data['linkingItems']) ? $data['linkingItems'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets connObjectLink
     *
     * @return string|null
     */
    public function getConnObjectLink()
    {
        return $this->container['connObjectLink'];
    }

    /**
     * Sets connObjectLink
     *
     * @param string|null $connObjectLink connObjectLink
     *
     * @return $this
     */
    public function setConnObjectLink($connObjectLink)
    {
        $this->container['connObjectLink'] = $connObjectLink;

        return $this;
    }

    /**
     * Gets connObjectKeyItem
     *
     * @return \OpenEuropa\SyncopePhpClient\Model\ItemTO|null
     */
    public function getConnObjectKeyItem()
    {
        return $this->container['connObjectKeyItem'];
    }

    /**
     * Sets connObjectKeyItem
     *
     * @param \OpenEuropa\SyncopePhpClient\Model\ItemTO|null $connObjectKeyItem connObjectKeyItem
     *
     * @return $this
     */
    public function setConnObjectKeyItem($connObjectKeyItem)
    {
        $this->container['connObjectKeyItem'] = $connObjectKeyItem;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenEuropa\SyncopePhpClient\Model\ItemTO[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenEuropa\SyncopePhpClient\Model\ItemTO[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets linkingItems
     *
     * @return \OpenEuropa\SyncopePhpClient\Model\ItemTO[]|null
     */
    public function getLinkingItems()
    {
        return $this->container['linkingItems'];
    }

    /**
     * Sets linkingItems
     *
     * @param \OpenEuropa\SyncopePhpClient\Model\ItemTO[]|null $linkingItems linkingItems
     *
     * @return $this
     */
    public function setLinkingItems($linkingItems)
    {
        $this->container['linkingItems'] = $linkingItems;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

