<?php
/**
 * ProvisioningResult
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
 * ProvisioningResult Class Doc Comment
 *
 * @category Class
 * @package  OpenEuropa\SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProvisioningResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProvisioningResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'entity' => '\OpenEuropa\SyncopePhpClient\Model\EntityTO',
        'propagationStatuses' => '\OpenEuropa\SyncopePhpClient\Model\PropagationStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'entity' => null,
        'propagationStatuses' => null
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
        'entity' => 'entity',
        'propagationStatuses' => 'propagationStatuses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entity' => 'setEntity',
        'propagationStatuses' => 'setPropagationStatuses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entity' => 'getEntity',
        'propagationStatuses' => 'getPropagationStatuses'
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
        $this->container['entity'] = isset($data['entity']) ? $data['entity'] : null;
        $this->container['propagationStatuses'] = isset($data['propagationStatuses']) ? $data['propagationStatuses'] : null;
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
     * Gets entity
     *
     * @return \OpenEuropa\SyncopePhpClient\Model\EntityTO|null
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param \OpenEuropa\SyncopePhpClient\Model\EntityTO|null $entity entity
     *
     * @return $this
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets propagationStatuses
     *
     * @return \OpenEuropa\SyncopePhpClient\Model\PropagationStatus[]|null
     */
    public function getPropagationStatuses()
    {
        return $this->container['propagationStatuses'];
    }

    /**
     * Sets propagationStatuses
     *
     * @param \OpenEuropa\SyncopePhpClient\Model\PropagationStatus[]|null $propagationStatuses propagationStatuses
     *
     * @return $this
     */
    public function setPropagationStatuses($propagationStatuses)
    {
        $this->container['propagationStatuses'] = $propagationStatuses;

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


