<?php
/**
 * LeaveApplication
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * OpenAPI spec version: 2.0.7
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * LeaveApplication Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LeaveApplication implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LeaveApplication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'leave_application_id' => 'string',
        'employee_id' => 'string',
        'leave_type_id' => 'string',
        'title' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'description' => 'string',
        'leave_periods' => '\XeroAPI\XeroPHP\Models\PayrollAu\LeavePeriod[]',
        'updated_date_utc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'leave_application_id' => 'uuid',
        'employee_id' => 'uuid',
        'leave_type_id' => 'uuid',
        'title' => null,
        'start_date' => null,
        'end_date' => null,
        'description' => null,
        'leave_periods' => null,
        'updated_date_utc' => null
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
        'leave_application_id' => 'LeaveApplicationID',
        'employee_id' => 'EmployeeID',
        'leave_type_id' => 'LeaveTypeID',
        'title' => 'Title',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'description' => 'Description',
        'leave_periods' => 'LeavePeriods',
        'updated_date_utc' => 'UpdatedDateUTC'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leave_application_id' => 'setLeaveApplicationId',
        'employee_id' => 'setEmployeeId',
        'leave_type_id' => 'setLeaveTypeId',
        'title' => 'setTitle',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'description' => 'setDescription',
        'leave_periods' => 'setLeavePeriods',
        'updated_date_utc' => 'setUpdatedDateUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leave_application_id' => 'getLeaveApplicationId',
        'employee_id' => 'getEmployeeId',
        'leave_type_id' => 'getLeaveTypeId',
        'title' => 'getTitle',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'description' => 'getDescription',
        'leave_periods' => 'getLeavePeriods',
        'updated_date_utc' => 'getUpdatedDateUtc'
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
        $this->container['leave_application_id'] = isset($data['leave_application_id']) ? $data['leave_application_id'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['leave_type_id'] = isset($data['leave_type_id']) ? $data['leave_type_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['leave_periods'] = isset($data['leave_periods']) ? $data['leave_periods'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
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
     * Gets leave_application_id
     *
     * @return string|null
     */
    public function getLeaveApplicationId()
    {
        return $this->container['leave_application_id'];
    }

    /**
     * Sets leave_application_id
     *
     * @param string|null $leave_application_id The Xero identifier for Payroll Employee
     *
     * @return $this
     */
    public function setLeaveApplicationId($leave_application_id)
    {

        $this->container['leave_application_id'] = $leave_application_id;

        return $this;
    }



    /**
     * Gets employee_id
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string|null $employee_id The Xero identifier for Payroll Employee
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {

        $this->container['employee_id'] = $employee_id;

        return $this;
    }



    /**
     * Gets leave_type_id
     *
     * @return string|null
     */
    public function getLeaveTypeId()
    {
        return $this->container['leave_type_id'];
    }

    /**
     * Sets leave_type_id
     *
     * @param string|null $leave_type_id The Xero identifier for Leave Type
     *
     * @return $this
     */
    public function setLeaveTypeId($leave_type_id)
    {

        $this->container['leave_type_id'] = $leave_type_id;

        return $this;
    }



    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of the leave
     *
     * @return $this
     */
    public function setTitle($title)
    {

        $this->container['title'] = $title;

        return $this;
    }



    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }
    public function getStartDateAsDate()
    {
      if ($this->getStartDate() != null) {
        return StringUtil::convertStringToDate($this->getStartDate());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date Start date of the leave (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {

        $this->container['start_date'] = $start_date;

        return $this;
    }
    /**
     * Sets start_date
     *
     * @param \DateTime |null $start_date Start date of the leave (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setStartDateAsDate($start_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($start_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($start_date->format('Y-m-d')) * 1000;
        $start_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['start_date'] = $start_date;
      return $this;
    }



    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }
    public function getEndDateAsDate()
    {
      if ($this->getEndDate() != null) {
        return StringUtil::convertStringToDate($this->getEndDate());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date End date of the leave (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {

        $this->container['end_date'] = $end_date;

        return $this;
    }
    /**
     * Sets end_date
     *
     * @param \DateTime |null $end_date End date of the leave (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setEndDateAsDate($end_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($end_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($end_date->format('Y-m-d')) * 1000;
        $end_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['end_date'] = $end_date;
      return $this;
    }



    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The Description of the Leave
     *
     * @return $this
     */
    public function setDescription($description)
    {

        $this->container['description'] = $description;

        return $this;
    }



    /**
     * Gets leave_periods
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\LeavePeriod[]|null
     */
    public function getLeavePeriods()
    {
        return $this->container['leave_periods'];
    }

    /**
     * Sets leave_periods
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\LeavePeriod[]|null $leave_periods leave_periods
     *
     * @return $this
     */
    public function setLeavePeriods($leave_periods)
    {

        $this->container['leave_periods'] = $leave_periods;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return string|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }
    public function getUpdatedDateUtcAsDate()
    {
      if ($this->getUpdatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getUpdatedDateUtc());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets updated_date_utc
     *
     * @param string|null $updated_date_utc Last modified timestamp
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

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
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


