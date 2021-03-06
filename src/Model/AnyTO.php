<?php
/**
 * AnyTO
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
 * AnyTO Class Doc Comment
 *
 * @category Class
 * @package  OpenEuropa\SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AnyTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = '@class';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AnyTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'class' => 'string',
        'key' => 'string',
        'type' => 'string',
        'realm' => 'string',
        'creator' => 'string',
        'creationDate' => '\DateTime',
        'lastModifier' => 'string',
        'lastChangeDate' => '\DateTime',
        'status' => 'string',
        'dynRealms' => 'string[]',
        'auxClasses' => 'string[]',
        'plainAttrs' => '\OpenEuropa\SyncopePhpClient\Model\AttrTO[]',
        'derAttrs' => '\OpenEuropa\SyncopePhpClient\Model\AttrTO[]',
        'virAttrs' => '\OpenEuropa\SyncopePhpClient\Model\AttrTO[]',
        'resources' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'class' => null,
        'key' => null,
        'type' => null,
        'realm' => null,
        'creator' => null,
        'creationDate' => 'date-time',
        'lastModifier' => null,
        'lastChangeDate' => 'date-time',
        'status' => null,
        'dynRealms' => null,
        'auxClasses' => null,
        'plainAttrs' => null,
        'derAttrs' => null,
        'virAttrs' => null,
        'resources' => null
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
        'class' => '@class',
        'key' => 'key',
        'type' => 'type',
        'realm' => 'realm',
        'creator' => 'creator',
        'creationDate' => 'creationDate',
        'lastModifier' => 'lastModifier',
        'lastChangeDate' => 'lastChangeDate',
        'status' => 'status',
        'dynRealms' => 'dynRealms',
        'auxClasses' => 'auxClasses',
        'plainAttrs' => 'plainAttrs',
        'derAttrs' => 'derAttrs',
        'virAttrs' => 'virAttrs',
        'resources' => 'resources'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'class' => 'setClass',
        'key' => 'setKey',
        'type' => 'setType',
        'realm' => 'setRealm',
        'creator' => 'setCreator',
        'creationDate' => 'setCreationDate',
        'lastModifier' => 'setLastModifier',
        'lastChangeDate' => 'setLastChangeDate',
        'status' => 'setStatus',
        'dynRealms' => 'setDynRealms',
        'auxClasses' => 'setAuxClasses',
        'plainAttrs' => 'setPlainAttrs',
        'derAttrs' => 'setDerAttrs',
        'virAttrs' => 'setVirAttrs',
        'resources' => 'setResources'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'class' => 'getClass',
        'key' => 'getKey',
        'type' => 'getType',
        'realm' => 'getRealm',
        'creator' => 'getCreator',
        'creationDate' => 'getCreationDate',
        'lastModifier' => 'getLastModifier',
        'lastChangeDate' => 'getLastChangeDate',
        'status' => 'getStatus',
        'dynRealms' => 'getDynRealms',
        'auxClasses' => 'getAuxClasses',
        'plainAttrs' => 'getPlainAttrs',
        'derAttrs' => 'getDerAttrs',
        'virAttrs' => 'getVirAttrs',
        'resources' => 'getResources'
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
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['realm'] = isset($data['realm']) ? $data['realm'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['lastModifier'] = isset($data['lastModifier']) ? $data['lastModifier'] : null;
        $this->container['lastChangeDate'] = isset($data['lastChangeDate']) ? $data['lastChangeDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dynRealms'] = isset($data['dynRealms']) ? $data['dynRealms'] : null;
        $this->container['auxClasses'] = isset($data['auxClasses']) ? $data['auxClasses'] : null;
        $this->container['plainAttrs'] = isset($data['plainAttrs']) ? $data['plainAttrs'] : null;
        $this->container['derAttrs'] = isset($data['derAttrs']) ? $data['derAttrs'] : null;
        $this->container['virAttrs'] = isset($data['virAttrs']) ? $data['virAttrs'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('@class', self::$attributeMap);
        $this->container[$discriminator] = static::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['class'] === null) {
            $invalidProperties[] = "'class' can't be null";
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
     * Gets class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string $class class
     *
     * @return $this
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets realm
     *
     * @return string|null
     */
    public function getRealm()
    {
        return $this->container['realm'];
    }

    /**
     * Sets realm
     *
     * @param string|null $realm realm
     *
     * @return $this
     */
    public function setRealm($realm)
    {
        $this->container['realm'] = $realm;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string|null $creator creator
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime|null $creationDate creationDate
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets lastModifier
     *
     * @return string|null
     */
    public function getLastModifier()
    {
        return $this->container['lastModifier'];
    }

    /**
     * Sets lastModifier
     *
     * @param string|null $lastModifier lastModifier
     *
     * @return $this
     */
    public function setLastModifier($lastModifier)
    {
        $this->container['lastModifier'] = $lastModifier;

        return $this;
    }

    /**
     * Gets lastChangeDate
     *
     * @return \DateTime|null
     */
    public function getLastChangeDate()
    {
        return $this->container['lastChangeDate'];
    }

    /**
     * Sets lastChangeDate
     *
     * @param \DateTime|null $lastChangeDate lastChangeDate
     *
     * @return $this
     */
    public function setLastChangeDate($lastChangeDate)
    {
        $this->container['lastChangeDate'] = $lastChangeDate;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets dynRealms
     *
     * @return string[]|null
     */
    public function getDynRealms()
    {
        return $this->container['dynRealms'];
    }

    /**
     * Sets dynRealms
     *
     * @param string[]|null $dynRealms dynRealms
     *
     * @return $this
     */
    public function setDynRealms($dynRealms)
    {
        $this->container['dynRealms'] = $dynRealms;

        return $this;
    }

    /**
     * Gets auxClasses
     *
     * @return string[]|null
     */
    public function getAuxClasses()
    {
        return $this->container['auxClasses'];
    }

    /**
     * Sets auxClasses
     *
     * @param string[]|null $auxClasses auxClasses
     *
     * @return $this
     */
    public function setAuxClasses($auxClasses)
    {
        $this->container['auxClasses'] = $auxClasses;

        return $this;
    }

    /**
     * Gets plainAttrs
     *
     * @return \OpenEuropa\SyncopePhpClient\Model\AttrTO[]|null
     */
    public function getPlainAttrs()
    {
        return $this->container['plainAttrs'];
    }

    /**
     * Sets plainAttrs
     *
     * @param \OpenEuropa\SyncopePhpClient\Model\AttrTO[]|null $plainAttrs plainAttrs
     *
     * @return $this
     */
    public function setPlainAttrs($plainAttrs)
    {
        $this->container['plainAttrs'] = $plainAttrs;

        return $this;
    }

    /**
     * Gets derAttrs
     *
     * @return \OpenEuropa\SyncopePhpClient\Model\AttrTO[]|null
     */
    public function getDerAttrs()
    {
        return $this->container['derAttrs'];
    }

    /**
     * Sets derAttrs
     *
     * @param \OpenEuropa\SyncopePhpClient\Model\AttrTO[]|null $derAttrs derAttrs
     *
     * @return $this
     */
    public function setDerAttrs($derAttrs)
    {
        $this->container['derAttrs'] = $derAttrs;

        return $this;
    }

    /**
     * Gets virAttrs
     *
     * @return \OpenEuropa\SyncopePhpClient\Model\AttrTO[]|null
     */
    public function getVirAttrs()
    {
        return $this->container['virAttrs'];
    }

    /**
     * Sets virAttrs
     *
     * @param \OpenEuropa\SyncopePhpClient\Model\AttrTO[]|null $virAttrs virAttrs
     *
     * @return $this
     */
    public function setVirAttrs($virAttrs)
    {
        $this->container['virAttrs'] = $virAttrs;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return string[]|null
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param string[]|null $resources resources
     *
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

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


