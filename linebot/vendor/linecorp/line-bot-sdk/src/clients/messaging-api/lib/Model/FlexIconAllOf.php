<?php
/**
 * Copyright 2023 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
/**
 * FlexIconAllOf
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  LINE\Clients\MessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LINE Messaging API
 *
 * This document describes LINE Messaging API.
 *
 * The version of the OpenAPI document: 0.0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LINE\Clients\MessagingApi\Model;

use \ArrayAccess;
use \LINE\Clients\MessagingApi\ObjectSerializer;

/**
 * FlexIconAllOf Class Doc Comment
 *
 * @category Class
 * @package  LINE\Clients\MessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FlexIconAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FlexIcon_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url' => 'string',
        'size' => 'string',
        'aspectRatio' => 'string',
        'margin' => 'string',
        'position' => 'string',
        'offsetTop' => 'string',
        'offsetBottom' => 'string',
        'offsetStart' => 'string',
        'offsetEnd' => 'string',
        'scaling' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'url' => 'uri',
        'size' => null,
        'aspectRatio' => null,
        'margin' => null,
        'position' => null,
        'offsetTop' => null,
        'offsetBottom' => null,
        'offsetStart' => null,
        'offsetEnd' => null,
        'scaling' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'url' => false,
		'size' => false,
		'aspectRatio' => false,
		'margin' => false,
		'position' => false,
		'offsetTop' => false,
		'offsetBottom' => false,
		'offsetStart' => false,
		'offsetEnd' => false,
		'scaling' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'url' => 'url',
        'size' => 'size',
        'aspectRatio' => 'aspectRatio',
        'margin' => 'margin',
        'position' => 'position',
        'offsetTop' => 'offsetTop',
        'offsetBottom' => 'offsetBottom',
        'offsetStart' => 'offsetStart',
        'offsetEnd' => 'offsetEnd',
        'scaling' => 'scaling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'size' => 'setSize',
        'aspectRatio' => 'setAspectRatio',
        'margin' => 'setMargin',
        'position' => 'setPosition',
        'offsetTop' => 'setOffsetTop',
        'offsetBottom' => 'setOffsetBottom',
        'offsetStart' => 'setOffsetStart',
        'offsetEnd' => 'setOffsetEnd',
        'scaling' => 'setScaling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'size' => 'getSize',
        'aspectRatio' => 'getAspectRatio',
        'margin' => 'getMargin',
        'position' => 'getPosition',
        'offsetTop' => 'getOffsetTop',
        'offsetBottom' => 'getOffsetBottom',
        'offsetStart' => 'getOffsetStart',
        'offsetEnd' => 'getOffsetEnd',
        'scaling' => 'getScaling'
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

    public const POSITION_RELATIVE = 'relative';
    public const POSITION_ABSOLUTE = 'absolute';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPositionAllowableValues()
    {
        return [
            self::POSITION_RELATIVE,
            self::POSITION_ABSOLUTE,
        ];
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
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('aspectRatio', $data ?? [], null);
        $this->setIfExists('margin', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('offsetTop', $data ?? [], null);
        $this->setIfExists('offsetBottom', $data ?? [], null);
        $this->setIfExists('offsetStart', $data ?? [], null);
        $this->setIfExists('offsetEnd', $data ?? [], null);
        $this->setIfExists('scaling', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPositionAllowableValues();
        if (!is_null($this->container['position']) && !in_array($this->container['position'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'position', must be one of '%s'",
                $this->container['position'],
                implode("', '", $allowedValues)
            );
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
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets aspectRatio
     *
     * @return string|null
     */
    public function getAspectRatio()
    {
        return $this->container['aspectRatio'];
    }

    /**
     * Sets aspectRatio
     *
     * @param string|null $aspectRatio aspectRatio
     *
     * @return self
     */
    public function setAspectRatio($aspectRatio)
    {
        if (is_null($aspectRatio)) {
            throw new \InvalidArgumentException('non-nullable aspectRatio cannot be null');
        }
        $this->container['aspectRatio'] = $aspectRatio;

        return $this;
    }

    /**
     * Gets margin
     *
     * @return string|null
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param string|null $margin margin
     *
     * @return self
     */
    public function setMargin($margin)
    {
        if (is_null($margin)) {
            throw new \InvalidArgumentException('non-nullable margin cannot be null');
        }
        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $allowedValues = $this->getPositionAllowableValues();
        if (!in_array($position, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'position', must be one of '%s'",
                    $position,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets offsetTop
     *
     * @return string|null
     */
    public function getOffsetTop()
    {
        return $this->container['offsetTop'];
    }

    /**
     * Sets offsetTop
     *
     * @param string|null $offsetTop offsetTop
     *
     * @return self
     */
    public function setOffsetTop($offsetTop)
    {
        if (is_null($offsetTop)) {
            throw new \InvalidArgumentException('non-nullable offsetTop cannot be null');
        }
        $this->container['offsetTop'] = $offsetTop;

        return $this;
    }

    /**
     * Gets offsetBottom
     *
     * @return string|null
     */
    public function getOffsetBottom()
    {
        return $this->container['offsetBottom'];
    }

    /**
     * Sets offsetBottom
     *
     * @param string|null $offsetBottom offsetBottom
     *
     * @return self
     */
    public function setOffsetBottom($offsetBottom)
    {
        if (is_null($offsetBottom)) {
            throw new \InvalidArgumentException('non-nullable offsetBottom cannot be null');
        }
        $this->container['offsetBottom'] = $offsetBottom;

        return $this;
    }

    /**
     * Gets offsetStart
     *
     * @return string|null
     */
    public function getOffsetStart()
    {
        return $this->container['offsetStart'];
    }

    /**
     * Sets offsetStart
     *
     * @param string|null $offsetStart offsetStart
     *
     * @return self
     */
    public function setOffsetStart($offsetStart)
    {
        if (is_null($offsetStart)) {
            throw new \InvalidArgumentException('non-nullable offsetStart cannot be null');
        }
        $this->container['offsetStart'] = $offsetStart;

        return $this;
    }

    /**
     * Gets offsetEnd
     *
     * @return string|null
     */
    public function getOffsetEnd()
    {
        return $this->container['offsetEnd'];
    }

    /**
     * Sets offsetEnd
     *
     * @param string|null $offsetEnd offsetEnd
     *
     * @return self
     */
    public function setOffsetEnd($offsetEnd)
    {
        if (is_null($offsetEnd)) {
            throw new \InvalidArgumentException('non-nullable offsetEnd cannot be null');
        }
        $this->container['offsetEnd'] = $offsetEnd;

        return $this;
    }

    /**
     * Gets scaling
     *
     * @return bool|null
     */
    public function getScaling()
    {
        return $this->container['scaling'];
    }

    /**
     * Sets scaling
     *
     * @param bool|null $scaling scaling
     *
     * @return self
     */
    public function setScaling($scaling)
    {
        if (is_null($scaling)) {
            throw new \InvalidArgumentException('non-nullable scaling cannot be null');
        }
        $this->container['scaling'] = $scaling;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


