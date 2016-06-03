<?php
/**
 * Shipment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * Shipment Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Shipment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'name' => 'string',
        'pickup' => '\Swagger\Client\Model\Stop',
        'delivery' => '\Swagger\Client\Model\Stop',
        'size' => 'int[]',
        'required_skills' => 'string[]',
        'allowed_vehicles' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'name' => 'name',
        'pickup' => 'pickup',
        'delivery' => 'delivery',
        'size' => 'size',
        'required_skills' => 'required_skills',
        'allowed_vehicles' => 'allowed_vehicles'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'name' => 'setName',
        'pickup' => 'setPickup',
        'delivery' => 'setDelivery',
        'size' => 'setSize',
        'required_skills' => 'setRequiredSkills',
        'allowed_vehicles' => 'setAllowedVehicles'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'name' => 'getName',
        'pickup' => 'getPickup',
        'delivery' => 'getDelivery',
        'size' => 'getSize',
        'required_skills' => 'getRequiredSkills',
        'allowed_vehicles' => 'getAllowedVehicles'
    );
  
    
    /**
      * $id Unique identifier of service
      * @var string
      */
    protected $id;
    
    /**
      * $name name of shipment
      * @var string
      */
    protected $name;
    
    /**
      * $pickup 
      * @var \Swagger\Client\Model\Stop
      */
    protected $pickup;
    
    /**
      * $delivery 
      * @var \Swagger\Client\Model\Stop
      */
    protected $delivery;
    
    /**
      * $size array of capacity dimensions
      * @var int[]
      */
    protected $size;
    
    /**
      * $required_skills array of required skills
      * @var string[]
      */
    protected $required_skills;
    
    /**
      * $allowed_vehicles array of allowed vehicle ids
      * @var string[]
      */
    protected $allowed_vehicles;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->name = $data["name"];
            $this->pickup = $data["pickup"];
            $this->delivery = $data["delivery"];
            $this->size = $data["size"];
            $this->required_skills = $data["required_skills"];
            $this->allowed_vehicles = $data["allowed_vehicles"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id Unique identifier of service
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name name of shipment
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets pickup
     * @return \Swagger\Client\Model\Stop
     */
    public function getPickup()
    {
        return $this->pickup;
    }
  
    /**
     * Sets pickup
     * @param \Swagger\Client\Model\Stop $pickup 
     * @return $this
     */
    public function setPickup($pickup)
    {
        
        $this->pickup = $pickup;
        return $this;
    }
    
    /**
     * Gets delivery
     * @return \Swagger\Client\Model\Stop
     */
    public function getDelivery()
    {
        return $this->delivery;
    }
  
    /**
     * Sets delivery
     * @param \Swagger\Client\Model\Stop $delivery 
     * @return $this
     */
    public function setDelivery($delivery)
    {
        
        $this->delivery = $delivery;
        return $this;
    }
    
    /**
     * Gets size
     * @return int[]
     */
    public function getSize()
    {
        return $this->size;
    }
  
    /**
     * Sets size
     * @param int[] $size array of capacity dimensions
     * @return $this
     */
    public function setSize($size)
    {
        
        $this->size = $size;
        return $this;
    }
    
    /**
     * Gets required_skills
     * @return string[]
     */
    public function getRequiredSkills()
    {
        return $this->required_skills;
    }
  
    /**
     * Sets required_skills
     * @param string[] $required_skills array of required skills
     * @return $this
     */
    public function setRequiredSkills($required_skills)
    {
        
        $this->required_skills = $required_skills;
        return $this;
    }
    
    /**
     * Gets allowed_vehicles
     * @return string[]
     */
    public function getAllowedVehicles()
    {
        return $this->allowed_vehicles;
    }
  
    /**
     * Sets allowed_vehicles
     * @param string[] $allowed_vehicles array of allowed vehicle ids
     * @return $this
     */
    public function setAllowedVehicles($allowed_vehicles)
    {
        
        $this->allowed_vehicles = $allowed_vehicles;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}