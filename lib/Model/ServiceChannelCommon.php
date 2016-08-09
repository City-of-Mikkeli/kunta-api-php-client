<?php
/**
 * ServiceChannelCommon
 *
 * PHP version 5
 *
 * @category Class
 * @package  KuntaAPI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kunta API
 *
 * One API to rule them all. One API to find them, One API to bring them all and in the darkness bind them.
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace KuntaAPI\Model;

use \ArrayAccess;

/**
 * ServiceChannelCommon Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     KuntaAPI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ServiceChannelCommon implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ServiceChannelCommon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'organization_id' => 'string',
        'description' => '\KuntaAPI\Model\LocalizedValue',
        'name' => '\KuntaAPI\Model\LocalizedValue',
        'web_pages' => '\KuntaAPI\Model\WebPage[]',
        'service_hours' => '\KuntaAPI\Model\ServiceHour[]',
        'support_contacts' => '\KuntaAPI\Model\Support[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'organization_id' => 'organizationId',
        'description' => 'description',
        'name' => 'name',
        'web_pages' => 'webPages',
        'service_hours' => 'serviceHours',
        'support_contacts' => 'supportContacts'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'organization_id' => 'setOrganizationId',
        'description' => 'setDescription',
        'name' => 'setName',
        'web_pages' => 'setWebPages',
        'service_hours' => 'setServiceHours',
        'support_contacts' => 'setSupportContacts'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'organization_id' => 'getOrganizationId',
        'description' => 'getDescription',
        'name' => 'getName',
        'web_pages' => 'getWebPages',
        'service_hours' => 'getServiceHours',
        'support_contacts' => 'getSupportContacts'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['web_pages'] = isset($data['web_pages']) ? $data['web_pages'] : null;
        $this->container['service_hours'] = isset($data['service_hours']) ? $data['service_hours'] : null;
        $this->container['support_contacts'] = isset($data['support_contacts']) ? $data['support_contacts'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets organization_id
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     * @param string $organization_id
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets description
     * @return \KuntaAPI\Model\LocalizedValue
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param \KuntaAPI\Model\LocalizedValue $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets name
     * @return \KuntaAPI\Model\LocalizedValue
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \KuntaAPI\Model\LocalizedValue $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets web_pages
     * @return \KuntaAPI\Model\WebPage[]
     */
    public function getWebPages()
    {
        return $this->container['web_pages'];
    }

    /**
     * Sets web_pages
     * @param \KuntaAPI\Model\WebPage[] $web_pages
     * @return $this
     */
    public function setWebPages($web_pages)
    {
        $this->container['web_pages'] = $web_pages;

        return $this;
    }

    /**
     * Gets service_hours
     * @return \KuntaAPI\Model\ServiceHour[]
     */
    public function getServiceHours()
    {
        return $this->container['service_hours'];
    }

    /**
     * Sets service_hours
     * @param \KuntaAPI\Model\ServiceHour[] $service_hours
     * @return $this
     */
    public function setServiceHours($service_hours)
    {
        $this->container['service_hours'] = $service_hours;

        return $this;
    }

    /**
     * Gets support_contacts
     * @return \KuntaAPI\Model\Support[]
     */
    public function getSupportContacts()
    {
        return $this->container['support_contacts'];
    }

    /**
     * Sets support_contacts
     * @param \KuntaAPI\Model\Support[] $support_contacts
     * @return $this
     */
    public function setSupportContacts($support_contacts)
    {
        $this->container['support_contacts'] = $support_contacts;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\KuntaAPI\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\KuntaAPI\ObjectSerializer::sanitizeForSerialization($this));
    }
}


