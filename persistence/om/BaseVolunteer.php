<?php


/**
 * Base class that represents a row from the 'volunteer' table.
 *
 * a volunteer
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseVolunteer extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
  const PEER = 'VolunteerPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        VolunteerPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the first_name field.
	 * @var        string
	 */
	protected $first_name;

	/**
	 * The value for the last_name field.
	 * @var        string
	 */
	protected $last_name;

	/**
	 * The value for the city field.
	 * @var        string
	 */
	protected $city;

	/**
	 * The value for the state field.
	 * @var        string
	 */
	protected $state;

	/**
	 * The value for the zip field.
	 * @var        string
	 */
	protected $zip;

	/**
	 * The value for the streetaddress field.
	 * @var        string
	 */
	protected $streetaddress;

	/**
	 * The value for the vehicle field.
	 * @var        string
	 */
	protected $vehicle;

	/**
	 * The value for the island field.
	 * @var        string
	 */
	protected $island;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the training field.
	 * @var        string
	 */
	protected $training;

	/**
	 * The value for the comments field.
	 * @var        string
	 */
	protected $comments;

	/**
	 * The value for the phonenumber field.
	 * @var        string
	 */
	protected $phonenumber;

	/**
	 * The value for the sunday_from_hour field.
	 * @var        int
	 */
	protected $sunday_from_hour;

	/**
	 * The value for the monday_from_hour field.
	 * @var        int
	 */
	protected $monday_from_hour;

	/**
	 * The value for the tuesday_from_hour field.
	 * @var        int
	 */
	protected $tuesday_from_hour;

	/**
	 * The value for the wednesday_from_hour field.
	 * @var        int
	 */
	protected $wednesday_from_hour;

	/**
	 * The value for the thursday_from_hour field.
	 * @var        int
	 */
	protected $thursday_from_hour;

	/**
	 * The value for the friday_from_hour field.
	 * @var        int
	 */
	protected $friday_from_hour;

	/**
	 * The value for the saturday_from_hour field.
	 * @var        int
	 */
	protected $saturday_from_hour;

	/**
	 * The value for the sunday_to_hour field.
	 * @var        int
	 */
	protected $sunday_to_hour;

	/**
	 * The value for the monday_to_hour field.
	 * @var        int
	 */
	protected $monday_to_hour;

	/**
	 * The value for the tuesday_to_hour field.
	 * @var        int
	 */
	protected $tuesday_to_hour;

	/**
	 * The value for the wednesday_to_hour field.
	 * @var        int
	 */
	protected $wednesday_to_hour;

	/**
	 * The value for the thursday_to_hour field.
	 * @var        int
	 */
	protected $thursday_to_hour;

	/**
	 * The value for the friday_to_hour field.
	 * @var        int
	 */
	protected $friday_to_hour;

	/**
	 * The value for the saturday_to_hour field.
	 * @var        int
	 */
	protected $saturday_to_hour;

	/**
	 * The value for the sunday_any_time field.
	 * @var        boolean
	 */
	protected $sunday_any_time;

	/**
	 * The value for the monday_any_time field.
	 * @var        boolean
	 */
	protected $monday_any_time;

	/**
	 * The value for the tuesday_any_time field.
	 * @var        boolean
	 */
	protected $tuesday_any_time;

	/**
	 * The value for the wednesday_any_time field.
	 * @var        boolean
	 */
	protected $wednesday_any_time;

	/**
	 * The value for the thursday_any_time field.
	 * @var        boolean
	 */
	protected $thursday_any_time;

	/**
	 * The value for the friday_any_time field.
	 * @var        boolean
	 */
	protected $friday_any_time;

	/**
	 * The value for the saturday_any_time field.
	 * @var        boolean
	 */
	protected $saturday_any_time;

	/**
	 * The value for the sunday_no_time field.
	 * @var        boolean
	 */
	protected $sunday_no_time;

	/**
	 * The value for the monday_no_time field.
	 * @var        boolean
	 */
	protected $monday_no_time;

	/**
	 * The value for the tuesday_no_time field.
	 * @var        boolean
	 */
	protected $tuesday_no_time;

	/**
	 * The value for the wednesday_no_time field.
	 * @var        boolean
	 */
	protected $wednesday_no_time;

	/**
	 * The value for the thursday_no_time field.
	 * @var        boolean
	 */
	protected $thursday_no_time;

	/**
	 * The value for the friday_no_time field.
	 * @var        boolean
	 */
	protected $friday_no_time;

	/**
	 * The value for the saturday_no_time field.
	 * @var        boolean
	 */
	protected $saturday_no_time;

	/**
	 * @var        array Report[] Collection to store aggregation of Report objects.
	 */
	protected $collReports;

	/**
	 * @var        array ReportComments[] Collection to store aggregation of ReportComments objects.
	 */
	protected $collReportCommentss;

	/**
	 * @var        array BlogEntryComments[] Collection to store aggregation of BlogEntryComments objects.
	 */
	protected $collBlogEntryCommentss;

	/**
	 * @var        array VolunteerHours[] Collection to store aggregation of VolunteerHours objects.
	 */
	protected $collVolunteerHourss;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [id] column value.
	 * id
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [first_name] column value.
	 * 
	 * @return     string
	 */
	public function getFirstName()
	{
		return $this->first_name;
	}

	/**
	 * Get the [last_name] column value.
	 * 
	 * @return     string
	 */
	public function getLastName()
	{
		return $this->last_name;
	}

	/**
	 * Get the [city] column value.
	 * 
	 * @return     string
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * Get the [state] column value.
	 * 
	 * @return     string
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Get the [zip] column value.
	 * 
	 * @return     string
	 */
	public function getZip()
	{
		return $this->zip;
	}

	/**
	 * Get the [streetaddress] column value.
	 * 
	 * @return     string
	 */
	public function getStreetaddress()
	{
		return $this->streetaddress;
	}

	/**
	 * Get the [vehicle] column value.
	 * 
	 * @return     string
	 */
	public function getVehicle()
	{
		return $this->vehicle;
	}

	/**
	 * Get the [island] column value.
	 * 
	 * @return     string
	 */
	public function getIsland()
	{
		return $this->island;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [training] column value.
	 * 
	 * @return     string
	 */
	public function getTraining()
	{
		return $this->training;
	}

	/**
	 * Get the [comments] column value.
	 * 
	 * @return     string
	 */
	public function getComments()
	{
		return $this->comments;
	}

	/**
	 * Get the [phonenumber] column value.
	 * 
	 * @return     string
	 */
	public function getPhonenumber()
	{
		return $this->phonenumber;
	}

	/**
	 * Get the [sunday_from_hour] column value.
	 * 
	 * @return     int
	 */
	public function getSundayFromHour()
	{
		return $this->sunday_from_hour;
	}

	/**
	 * Get the [monday_from_hour] column value.
	 * 
	 * @return     int
	 */
	public function getMondayFromHour()
	{
		return $this->monday_from_hour;
	}

	/**
	 * Get the [tuesday_from_hour] column value.
	 * 
	 * @return     int
	 */
	public function getTuesdayFromHour()
	{
		return $this->tuesday_from_hour;
	}

	/**
	 * Get the [wednesday_from_hour] column value.
	 * 
	 * @return     int
	 */
	public function getWednesdayFromHour()
	{
		return $this->wednesday_from_hour;
	}

	/**
	 * Get the [thursday_from_hour] column value.
	 * 
	 * @return     int
	 */
	public function getThursdayFromHour()
	{
		return $this->thursday_from_hour;
	}

	/**
	 * Get the [friday_from_hour] column value.
	 * 
	 * @return     int
	 */
	public function getFridayFromHour()
	{
		return $this->friday_from_hour;
	}

	/**
	 * Get the [saturday_from_hour] column value.
	 * 
	 * @return     int
	 */
	public function getSaturdayFromHour()
	{
		return $this->saturday_from_hour;
	}

	/**
	 * Get the [sunday_to_hour] column value.
	 * 
	 * @return     int
	 */
	public function getSundayToHour()
	{
		return $this->sunday_to_hour;
	}

	/**
	 * Get the [monday_to_hour] column value.
	 * 
	 * @return     int
	 */
	public function getMondayToHour()
	{
		return $this->monday_to_hour;
	}

	/**
	 * Get the [tuesday_to_hour] column value.
	 * 
	 * @return     int
	 */
	public function getTuesdayToHour()
	{
		return $this->tuesday_to_hour;
	}

	/**
	 * Get the [wednesday_to_hour] column value.
	 * 
	 * @return     int
	 */
	public function getWednesdayToHour()
	{
		return $this->wednesday_to_hour;
	}

	/**
	 * Get the [thursday_to_hour] column value.
	 * 
	 * @return     int
	 */
	public function getThursdayToHour()
	{
		return $this->thursday_to_hour;
	}

	/**
	 * Get the [friday_to_hour] column value.
	 * 
	 * @return     int
	 */
	public function getFridayToHour()
	{
		return $this->friday_to_hour;
	}

	/**
	 * Get the [saturday_to_hour] column value.
	 * 
	 * @return     int
	 */
	public function getSaturdayToHour()
	{
		return $this->saturday_to_hour;
	}

	/**
	 * Get the [sunday_any_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getSundayAnyTime()
	{
		return $this->sunday_any_time;
	}

	/**
	 * Get the [monday_any_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getMondayAnyTime()
	{
		return $this->monday_any_time;
	}

	/**
	 * Get the [tuesday_any_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getTuesdayAnyTime()
	{
		return $this->tuesday_any_time;
	}

	/**
	 * Get the [wednesday_any_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getWednesdayAnyTime()
	{
		return $this->wednesday_any_time;
	}

	/**
	 * Get the [thursday_any_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getThursdayAnyTime()
	{
		return $this->thursday_any_time;
	}

	/**
	 * Get the [friday_any_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getFridayAnyTime()
	{
		return $this->friday_any_time;
	}

	/**
	 * Get the [saturday_any_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getSaturdayAnyTime()
	{
		return $this->saturday_any_time;
	}

	/**
	 * Get the [sunday_no_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getSundayNoTime()
	{
		return $this->sunday_no_time;
	}

	/**
	 * Get the [monday_no_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getMondayNoTime()
	{
		return $this->monday_no_time;
	}

	/**
	 * Get the [tuesday_no_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getTuesdayNoTime()
	{
		return $this->tuesday_no_time;
	}

	/**
	 * Get the [wednesday_no_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getWednesdayNoTime()
	{
		return $this->wednesday_no_time;
	}

	/**
	 * Get the [thursday_no_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getThursdayNoTime()
	{
		return $this->thursday_no_time;
	}

	/**
	 * Get the [friday_no_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getFridayNoTime()
	{
		return $this->friday_no_time;
	}

	/**
	 * Get the [saturday_no_time] column value.
	 * 
	 * @return     boolean
	 */
	public function getSaturdayNoTime()
	{
		return $this->saturday_no_time;
	}

	/**
	 * Set the value of [id] column.
	 * id
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = VolunteerPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [first_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setFirstName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->first_name !== $v) {
			$this->first_name = $v;
			$this->modifiedColumns[] = VolunteerPeer::FIRST_NAME;
		}

		return $this;
	} // setFirstName()

	/**
	 * Set the value of [last_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setLastName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->last_name !== $v) {
			$this->last_name = $v;
			$this->modifiedColumns[] = VolunteerPeer::LAST_NAME;
		}

		return $this;
	} // setLastName()

	/**
	 * Set the value of [city] column.
	 * 
	 * @param      string $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setCity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->city !== $v) {
			$this->city = $v;
			$this->modifiedColumns[] = VolunteerPeer::CITY;
		}

		return $this;
	} // setCity()

	/**
	 * Set the value of [state] column.
	 * 
	 * @param      string $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->state !== $v) {
			$this->state = $v;
			$this->modifiedColumns[] = VolunteerPeer::STATE;
		}

		return $this;
	} // setState()

	/**
	 * Set the value of [zip] column.
	 * 
	 * @param      string $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setZip($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->zip !== $v) {
			$this->zip = $v;
			$this->modifiedColumns[] = VolunteerPeer::ZIP;
		}

		return $this;
	} // setZip()

	/**
	 * Set the value of [streetaddress] column.
	 * 
	 * @param      string $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setStreetaddress($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->streetaddress !== $v) {
			$this->streetaddress = $v;
			$this->modifiedColumns[] = VolunteerPeer::STREETADDRESS;
		}

		return $this;
	} // setStreetaddress()

	/**
	 * Set the value of [vehicle] column.
	 * 
	 * @param      string $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setVehicle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->vehicle !== $v) {
			$this->vehicle = $v;
			$this->modifiedColumns[] = VolunteerPeer::VEHICLE;
		}

		return $this;
	} // setVehicle()

	/**
	 * Set the value of [island] column.
	 * 
	 * @param      string $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setIsland($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->island !== $v) {
			$this->island = $v;
			$this->modifiedColumns[] = VolunteerPeer::ISLAND;
		}

		return $this;
	} // setIsland()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = VolunteerPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [training] column.
	 * 
	 * @param      string $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setTraining($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->training !== $v) {
			$this->training = $v;
			$this->modifiedColumns[] = VolunteerPeer::TRAINING;
		}

		return $this;
	} // setTraining()

	/**
	 * Set the value of [comments] column.
	 * 
	 * @param      string $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setComments($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->comments !== $v) {
			$this->comments = $v;
			$this->modifiedColumns[] = VolunteerPeer::COMMENTS;
		}

		return $this;
	} // setComments()

	/**
	 * Set the value of [phonenumber] column.
	 * 
	 * @param      string $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setPhonenumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->phonenumber !== $v) {
			$this->phonenumber = $v;
			$this->modifiedColumns[] = VolunteerPeer::PHONENUMBER;
		}

		return $this;
	} // setPhonenumber()

	/**
	 * Set the value of [sunday_from_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setSundayFromHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->sunday_from_hour !== $v) {
			$this->sunday_from_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::SUNDAY_FROM_HOUR;
		}

		return $this;
	} // setSundayFromHour()

	/**
	 * Set the value of [monday_from_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setMondayFromHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->monday_from_hour !== $v) {
			$this->monday_from_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::MONDAY_FROM_HOUR;
		}

		return $this;
	} // setMondayFromHour()

	/**
	 * Set the value of [tuesday_from_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setTuesdayFromHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tuesday_from_hour !== $v) {
			$this->tuesday_from_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::TUESDAY_FROM_HOUR;
		}

		return $this;
	} // setTuesdayFromHour()

	/**
	 * Set the value of [wednesday_from_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setWednesdayFromHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->wednesday_from_hour !== $v) {
			$this->wednesday_from_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::WEDNESDAY_FROM_HOUR;
		}

		return $this;
	} // setWednesdayFromHour()

	/**
	 * Set the value of [thursday_from_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setThursdayFromHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->thursday_from_hour !== $v) {
			$this->thursday_from_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::THURSDAY_FROM_HOUR;
		}

		return $this;
	} // setThursdayFromHour()

	/**
	 * Set the value of [friday_from_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setFridayFromHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->friday_from_hour !== $v) {
			$this->friday_from_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::FRIDAY_FROM_HOUR;
		}

		return $this;
	} // setFridayFromHour()

	/**
	 * Set the value of [saturday_from_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setSaturdayFromHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->saturday_from_hour !== $v) {
			$this->saturday_from_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::SATURDAY_FROM_HOUR;
		}

		return $this;
	} // setSaturdayFromHour()

	/**
	 * Set the value of [sunday_to_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setSundayToHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->sunday_to_hour !== $v) {
			$this->sunday_to_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::SUNDAY_TO_HOUR;
		}

		return $this;
	} // setSundayToHour()

	/**
	 * Set the value of [monday_to_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setMondayToHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->monday_to_hour !== $v) {
			$this->monday_to_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::MONDAY_TO_HOUR;
		}

		return $this;
	} // setMondayToHour()

	/**
	 * Set the value of [tuesday_to_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setTuesdayToHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tuesday_to_hour !== $v) {
			$this->tuesday_to_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::TUESDAY_TO_HOUR;
		}

		return $this;
	} // setTuesdayToHour()

	/**
	 * Set the value of [wednesday_to_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setWednesdayToHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->wednesday_to_hour !== $v) {
			$this->wednesday_to_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::WEDNESDAY_TO_HOUR;
		}

		return $this;
	} // setWednesdayToHour()

	/**
	 * Set the value of [thursday_to_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setThursdayToHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->thursday_to_hour !== $v) {
			$this->thursday_to_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::THURSDAY_TO_HOUR;
		}

		return $this;
	} // setThursdayToHour()

	/**
	 * Set the value of [friday_to_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setFridayToHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->friday_to_hour !== $v) {
			$this->friday_to_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::FRIDAY_TO_HOUR;
		}

		return $this;
	} // setFridayToHour()

	/**
	 * Set the value of [saturday_to_hour] column.
	 * 
	 * @param      int $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setSaturdayToHour($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->saturday_to_hour !== $v) {
			$this->saturday_to_hour = $v;
			$this->modifiedColumns[] = VolunteerPeer::SATURDAY_TO_HOUR;
		}

		return $this;
	} // setSaturdayToHour()

	/**
	 * Set the value of [sunday_any_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setSundayAnyTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->sunday_any_time !== $v) {
			$this->sunday_any_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::SUNDAY_ANY_TIME;
		}

		return $this;
	} // setSundayAnyTime()

	/**
	 * Set the value of [monday_any_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setMondayAnyTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->monday_any_time !== $v) {
			$this->monday_any_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::MONDAY_ANY_TIME;
		}

		return $this;
	} // setMondayAnyTime()

	/**
	 * Set the value of [tuesday_any_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setTuesdayAnyTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->tuesday_any_time !== $v) {
			$this->tuesday_any_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::TUESDAY_ANY_TIME;
		}

		return $this;
	} // setTuesdayAnyTime()

	/**
	 * Set the value of [wednesday_any_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setWednesdayAnyTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->wednesday_any_time !== $v) {
			$this->wednesday_any_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::WEDNESDAY_ANY_TIME;
		}

		return $this;
	} // setWednesdayAnyTime()

	/**
	 * Set the value of [thursday_any_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setThursdayAnyTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->thursday_any_time !== $v) {
			$this->thursday_any_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::THURSDAY_ANY_TIME;
		}

		return $this;
	} // setThursdayAnyTime()

	/**
	 * Set the value of [friday_any_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setFridayAnyTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->friday_any_time !== $v) {
			$this->friday_any_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::FRIDAY_ANY_TIME;
		}

		return $this;
	} // setFridayAnyTime()

	/**
	 * Set the value of [saturday_any_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setSaturdayAnyTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->saturday_any_time !== $v) {
			$this->saturday_any_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::SATURDAY_ANY_TIME;
		}

		return $this;
	} // setSaturdayAnyTime()

	/**
	 * Set the value of [sunday_no_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setSundayNoTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->sunday_no_time !== $v) {
			$this->sunday_no_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::SUNDAY_NO_TIME;
		}

		return $this;
	} // setSundayNoTime()

	/**
	 * Set the value of [monday_no_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setMondayNoTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->monday_no_time !== $v) {
			$this->monday_no_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::MONDAY_NO_TIME;
		}

		return $this;
	} // setMondayNoTime()

	/**
	 * Set the value of [tuesday_no_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setTuesdayNoTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->tuesday_no_time !== $v) {
			$this->tuesday_no_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::TUESDAY_NO_TIME;
		}

		return $this;
	} // setTuesdayNoTime()

	/**
	 * Set the value of [wednesday_no_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setWednesdayNoTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->wednesday_no_time !== $v) {
			$this->wednesday_no_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::WEDNESDAY_NO_TIME;
		}

		return $this;
	} // setWednesdayNoTime()

	/**
	 * Set the value of [thursday_no_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setThursdayNoTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->thursday_no_time !== $v) {
			$this->thursday_no_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::THURSDAY_NO_TIME;
		}

		return $this;
	} // setThursdayNoTime()

	/**
	 * Set the value of [friday_no_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setFridayNoTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->friday_no_time !== $v) {
			$this->friday_no_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::FRIDAY_NO_TIME;
		}

		return $this;
	} // setFridayNoTime()

	/**
	 * Set the value of [saturday_no_time] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Volunteer The current object (for fluent API support)
	 */
	public function setSaturdayNoTime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->saturday_no_time !== $v) {
			$this->saturday_no_time = $v;
			$this->modifiedColumns[] = VolunteerPeer::SATURDAY_NO_TIME;
		}

		return $this;
	} // setSaturdayNoTime()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->first_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->last_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->city = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->state = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->zip = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->streetaddress = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->vehicle = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->island = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->email = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->training = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->comments = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->phonenumber = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->sunday_from_hour = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->monday_from_hour = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->tuesday_from_hour = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
			$this->wednesday_from_hour = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->thursday_from_hour = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
			$this->friday_from_hour = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
			$this->saturday_from_hour = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->sunday_to_hour = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
			$this->monday_to_hour = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
			$this->tuesday_to_hour = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
			$this->wednesday_to_hour = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
			$this->thursday_to_hour = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
			$this->friday_to_hour = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
			$this->saturday_to_hour = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
			$this->sunday_any_time = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
			$this->monday_any_time = ($row[$startcol + 28] !== null) ? (boolean) $row[$startcol + 28] : null;
			$this->tuesday_any_time = ($row[$startcol + 29] !== null) ? (boolean) $row[$startcol + 29] : null;
			$this->wednesday_any_time = ($row[$startcol + 30] !== null) ? (boolean) $row[$startcol + 30] : null;
			$this->thursday_any_time = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
			$this->friday_any_time = ($row[$startcol + 32] !== null) ? (boolean) $row[$startcol + 32] : null;
			$this->saturday_any_time = ($row[$startcol + 33] !== null) ? (boolean) $row[$startcol + 33] : null;
			$this->sunday_no_time = ($row[$startcol + 34] !== null) ? (boolean) $row[$startcol + 34] : null;
			$this->monday_no_time = ($row[$startcol + 35] !== null) ? (boolean) $row[$startcol + 35] : null;
			$this->tuesday_no_time = ($row[$startcol + 36] !== null) ? (boolean) $row[$startcol + 36] : null;
			$this->wednesday_no_time = ($row[$startcol + 37] !== null) ? (boolean) $row[$startcol + 37] : null;
			$this->thursday_no_time = ($row[$startcol + 38] !== null) ? (boolean) $row[$startcol + 38] : null;
			$this->friday_no_time = ($row[$startcol + 39] !== null) ? (boolean) $row[$startcol + 39] : null;
			$this->saturday_no_time = ($row[$startcol + 40] !== null) ? (boolean) $row[$startcol + 40] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 41; // 41 = VolunteerPeer::NUM_COLUMNS - VolunteerPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Volunteer object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(VolunteerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = VolunteerPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collReports = null;

			$this->collReportCommentss = null;

			$this->collBlogEntryCommentss = null;

			$this->collVolunteerHourss = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(VolunteerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				VolunteerQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(VolunteerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				VolunteerPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = VolunteerPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(VolunteerPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.VolunteerPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = VolunteerPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collReports !== null) {
				foreach ($this->collReports as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collReportCommentss !== null) {
				foreach ($this->collReportCommentss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collBlogEntryCommentss !== null) {
				foreach ($this->collBlogEntryCommentss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collVolunteerHourss !== null) {
				foreach ($this->collVolunteerHourss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = VolunteerPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collReports !== null) {
					foreach ($this->collReports as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collReportCommentss !== null) {
					foreach ($this->collReportCommentss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collBlogEntryCommentss !== null) {
					foreach ($this->collBlogEntryCommentss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collVolunteerHourss !== null) {
					foreach ($this->collVolunteerHourss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = VolunteerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getFirstName();
				break;
			case 2:
				return $this->getLastName();
				break;
			case 3:
				return $this->getCity();
				break;
			case 4:
				return $this->getState();
				break;
			case 5:
				return $this->getZip();
				break;
			case 6:
				return $this->getStreetaddress();
				break;
			case 7:
				return $this->getVehicle();
				break;
			case 8:
				return $this->getIsland();
				break;
			case 9:
				return $this->getEmail();
				break;
			case 10:
				return $this->getTraining();
				break;
			case 11:
				return $this->getComments();
				break;
			case 12:
				return $this->getPhonenumber();
				break;
			case 13:
				return $this->getSundayFromHour();
				break;
			case 14:
				return $this->getMondayFromHour();
				break;
			case 15:
				return $this->getTuesdayFromHour();
				break;
			case 16:
				return $this->getWednesdayFromHour();
				break;
			case 17:
				return $this->getThursdayFromHour();
				break;
			case 18:
				return $this->getFridayFromHour();
				break;
			case 19:
				return $this->getSaturdayFromHour();
				break;
			case 20:
				return $this->getSundayToHour();
				break;
			case 21:
				return $this->getMondayToHour();
				break;
			case 22:
				return $this->getTuesdayToHour();
				break;
			case 23:
				return $this->getWednesdayToHour();
				break;
			case 24:
				return $this->getThursdayToHour();
				break;
			case 25:
				return $this->getFridayToHour();
				break;
			case 26:
				return $this->getSaturdayToHour();
				break;
			case 27:
				return $this->getSundayAnyTime();
				break;
			case 28:
				return $this->getMondayAnyTime();
				break;
			case 29:
				return $this->getTuesdayAnyTime();
				break;
			case 30:
				return $this->getWednesdayAnyTime();
				break;
			case 31:
				return $this->getThursdayAnyTime();
				break;
			case 32:
				return $this->getFridayAnyTime();
				break;
			case 33:
				return $this->getSaturdayAnyTime();
				break;
			case 34:
				return $this->getSundayNoTime();
				break;
			case 35:
				return $this->getMondayNoTime();
				break;
			case 36:
				return $this->getTuesdayNoTime();
				break;
			case 37:
				return $this->getWednesdayNoTime();
				break;
			case 38:
				return $this->getThursdayNoTime();
				break;
			case 39:
				return $this->getFridayNoTime();
				break;
			case 40:
				return $this->getSaturdayNoTime();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. 
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = VolunteerPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getFirstName(),
			$keys[2] => $this->getLastName(),
			$keys[3] => $this->getCity(),
			$keys[4] => $this->getState(),
			$keys[5] => $this->getZip(),
			$keys[6] => $this->getStreetaddress(),
			$keys[7] => $this->getVehicle(),
			$keys[8] => $this->getIsland(),
			$keys[9] => $this->getEmail(),
			$keys[10] => $this->getTraining(),
			$keys[11] => $this->getComments(),
			$keys[12] => $this->getPhonenumber(),
			$keys[13] => $this->getSundayFromHour(),
			$keys[14] => $this->getMondayFromHour(),
			$keys[15] => $this->getTuesdayFromHour(),
			$keys[16] => $this->getWednesdayFromHour(),
			$keys[17] => $this->getThursdayFromHour(),
			$keys[18] => $this->getFridayFromHour(),
			$keys[19] => $this->getSaturdayFromHour(),
			$keys[20] => $this->getSundayToHour(),
			$keys[21] => $this->getMondayToHour(),
			$keys[22] => $this->getTuesdayToHour(),
			$keys[23] => $this->getWednesdayToHour(),
			$keys[24] => $this->getThursdayToHour(),
			$keys[25] => $this->getFridayToHour(),
			$keys[26] => $this->getSaturdayToHour(),
			$keys[27] => $this->getSundayAnyTime(),
			$keys[28] => $this->getMondayAnyTime(),
			$keys[29] => $this->getTuesdayAnyTime(),
			$keys[30] => $this->getWednesdayAnyTime(),
			$keys[31] => $this->getThursdayAnyTime(),
			$keys[32] => $this->getFridayAnyTime(),
			$keys[33] => $this->getSaturdayAnyTime(),
			$keys[34] => $this->getSundayNoTime(),
			$keys[35] => $this->getMondayNoTime(),
			$keys[36] => $this->getTuesdayNoTime(),
			$keys[37] => $this->getWednesdayNoTime(),
			$keys[38] => $this->getThursdayNoTime(),
			$keys[39] => $this->getFridayNoTime(),
			$keys[40] => $this->getSaturdayNoTime(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = VolunteerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setFirstName($value);
				break;
			case 2:
				$this->setLastName($value);
				break;
			case 3:
				$this->setCity($value);
				break;
			case 4:
				$this->setState($value);
				break;
			case 5:
				$this->setZip($value);
				break;
			case 6:
				$this->setStreetaddress($value);
				break;
			case 7:
				$this->setVehicle($value);
				break;
			case 8:
				$this->setIsland($value);
				break;
			case 9:
				$this->setEmail($value);
				break;
			case 10:
				$this->setTraining($value);
				break;
			case 11:
				$this->setComments($value);
				break;
			case 12:
				$this->setPhonenumber($value);
				break;
			case 13:
				$this->setSundayFromHour($value);
				break;
			case 14:
				$this->setMondayFromHour($value);
				break;
			case 15:
				$this->setTuesdayFromHour($value);
				break;
			case 16:
				$this->setWednesdayFromHour($value);
				break;
			case 17:
				$this->setThursdayFromHour($value);
				break;
			case 18:
				$this->setFridayFromHour($value);
				break;
			case 19:
				$this->setSaturdayFromHour($value);
				break;
			case 20:
				$this->setSundayToHour($value);
				break;
			case 21:
				$this->setMondayToHour($value);
				break;
			case 22:
				$this->setTuesdayToHour($value);
				break;
			case 23:
				$this->setWednesdayToHour($value);
				break;
			case 24:
				$this->setThursdayToHour($value);
				break;
			case 25:
				$this->setFridayToHour($value);
				break;
			case 26:
				$this->setSaturdayToHour($value);
				break;
			case 27:
				$this->setSundayAnyTime($value);
				break;
			case 28:
				$this->setMondayAnyTime($value);
				break;
			case 29:
				$this->setTuesdayAnyTime($value);
				break;
			case 30:
				$this->setWednesdayAnyTime($value);
				break;
			case 31:
				$this->setThursdayAnyTime($value);
				break;
			case 32:
				$this->setFridayAnyTime($value);
				break;
			case 33:
				$this->setSaturdayAnyTime($value);
				break;
			case 34:
				$this->setSundayNoTime($value);
				break;
			case 35:
				$this->setMondayNoTime($value);
				break;
			case 36:
				$this->setTuesdayNoTime($value);
				break;
			case 37:
				$this->setWednesdayNoTime($value);
				break;
			case 38:
				$this->setThursdayNoTime($value);
				break;
			case 39:
				$this->setFridayNoTime($value);
				break;
			case 40:
				$this->setSaturdayNoTime($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = VolunteerPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFirstName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setLastName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCity($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setState($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setZip($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setStreetaddress($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setVehicle($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setIsland($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setEmail($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setTraining($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setComments($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setPhonenumber($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setSundayFromHour($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setMondayFromHour($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setTuesdayFromHour($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setWednesdayFromHour($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setThursdayFromHour($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setFridayFromHour($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setSaturdayFromHour($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setSundayToHour($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setMondayToHour($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setTuesdayToHour($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setWednesdayToHour($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setThursdayToHour($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setFridayToHour($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setSaturdayToHour($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setSundayAnyTime($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setMondayAnyTime($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setTuesdayAnyTime($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setWednesdayAnyTime($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setThursdayAnyTime($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setFridayAnyTime($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setSaturdayAnyTime($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setSundayNoTime($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setMondayNoTime($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setTuesdayNoTime($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setWednesdayNoTime($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setThursdayNoTime($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setFridayNoTime($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setSaturdayNoTime($arr[$keys[40]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(VolunteerPeer::DATABASE_NAME);

		if ($this->isColumnModified(VolunteerPeer::ID)) $criteria->add(VolunteerPeer::ID, $this->id);
		if ($this->isColumnModified(VolunteerPeer::FIRST_NAME)) $criteria->add(VolunteerPeer::FIRST_NAME, $this->first_name);
		if ($this->isColumnModified(VolunteerPeer::LAST_NAME)) $criteria->add(VolunteerPeer::LAST_NAME, $this->last_name);
		if ($this->isColumnModified(VolunteerPeer::CITY)) $criteria->add(VolunteerPeer::CITY, $this->city);
		if ($this->isColumnModified(VolunteerPeer::STATE)) $criteria->add(VolunteerPeer::STATE, $this->state);
		if ($this->isColumnModified(VolunteerPeer::ZIP)) $criteria->add(VolunteerPeer::ZIP, $this->zip);
		if ($this->isColumnModified(VolunteerPeer::STREETADDRESS)) $criteria->add(VolunteerPeer::STREETADDRESS, $this->streetaddress);
		if ($this->isColumnModified(VolunteerPeer::VEHICLE)) $criteria->add(VolunteerPeer::VEHICLE, $this->vehicle);
		if ($this->isColumnModified(VolunteerPeer::ISLAND)) $criteria->add(VolunteerPeer::ISLAND, $this->island);
		if ($this->isColumnModified(VolunteerPeer::EMAIL)) $criteria->add(VolunteerPeer::EMAIL, $this->email);
		if ($this->isColumnModified(VolunteerPeer::TRAINING)) $criteria->add(VolunteerPeer::TRAINING, $this->training);
		if ($this->isColumnModified(VolunteerPeer::COMMENTS)) $criteria->add(VolunteerPeer::COMMENTS, $this->comments);
		if ($this->isColumnModified(VolunteerPeer::PHONENUMBER)) $criteria->add(VolunteerPeer::PHONENUMBER, $this->phonenumber);
		if ($this->isColumnModified(VolunteerPeer::SUNDAY_FROM_HOUR)) $criteria->add(VolunteerPeer::SUNDAY_FROM_HOUR, $this->sunday_from_hour);
		if ($this->isColumnModified(VolunteerPeer::MONDAY_FROM_HOUR)) $criteria->add(VolunteerPeer::MONDAY_FROM_HOUR, $this->monday_from_hour);
		if ($this->isColumnModified(VolunteerPeer::TUESDAY_FROM_HOUR)) $criteria->add(VolunteerPeer::TUESDAY_FROM_HOUR, $this->tuesday_from_hour);
		if ($this->isColumnModified(VolunteerPeer::WEDNESDAY_FROM_HOUR)) $criteria->add(VolunteerPeer::WEDNESDAY_FROM_HOUR, $this->wednesday_from_hour);
		if ($this->isColumnModified(VolunteerPeer::THURSDAY_FROM_HOUR)) $criteria->add(VolunteerPeer::THURSDAY_FROM_HOUR, $this->thursday_from_hour);
		if ($this->isColumnModified(VolunteerPeer::FRIDAY_FROM_HOUR)) $criteria->add(VolunteerPeer::FRIDAY_FROM_HOUR, $this->friday_from_hour);
		if ($this->isColumnModified(VolunteerPeer::SATURDAY_FROM_HOUR)) $criteria->add(VolunteerPeer::SATURDAY_FROM_HOUR, $this->saturday_from_hour);
		if ($this->isColumnModified(VolunteerPeer::SUNDAY_TO_HOUR)) $criteria->add(VolunteerPeer::SUNDAY_TO_HOUR, $this->sunday_to_hour);
		if ($this->isColumnModified(VolunteerPeer::MONDAY_TO_HOUR)) $criteria->add(VolunteerPeer::MONDAY_TO_HOUR, $this->monday_to_hour);
		if ($this->isColumnModified(VolunteerPeer::TUESDAY_TO_HOUR)) $criteria->add(VolunteerPeer::TUESDAY_TO_HOUR, $this->tuesday_to_hour);
		if ($this->isColumnModified(VolunteerPeer::WEDNESDAY_TO_HOUR)) $criteria->add(VolunteerPeer::WEDNESDAY_TO_HOUR, $this->wednesday_to_hour);
		if ($this->isColumnModified(VolunteerPeer::THURSDAY_TO_HOUR)) $criteria->add(VolunteerPeer::THURSDAY_TO_HOUR, $this->thursday_to_hour);
		if ($this->isColumnModified(VolunteerPeer::FRIDAY_TO_HOUR)) $criteria->add(VolunteerPeer::FRIDAY_TO_HOUR, $this->friday_to_hour);
		if ($this->isColumnModified(VolunteerPeer::SATURDAY_TO_HOUR)) $criteria->add(VolunteerPeer::SATURDAY_TO_HOUR, $this->saturday_to_hour);
		if ($this->isColumnModified(VolunteerPeer::SUNDAY_ANY_TIME)) $criteria->add(VolunteerPeer::SUNDAY_ANY_TIME, $this->sunday_any_time);
		if ($this->isColumnModified(VolunteerPeer::MONDAY_ANY_TIME)) $criteria->add(VolunteerPeer::MONDAY_ANY_TIME, $this->monday_any_time);
		if ($this->isColumnModified(VolunteerPeer::TUESDAY_ANY_TIME)) $criteria->add(VolunteerPeer::TUESDAY_ANY_TIME, $this->tuesday_any_time);
		if ($this->isColumnModified(VolunteerPeer::WEDNESDAY_ANY_TIME)) $criteria->add(VolunteerPeer::WEDNESDAY_ANY_TIME, $this->wednesday_any_time);
		if ($this->isColumnModified(VolunteerPeer::THURSDAY_ANY_TIME)) $criteria->add(VolunteerPeer::THURSDAY_ANY_TIME, $this->thursday_any_time);
		if ($this->isColumnModified(VolunteerPeer::FRIDAY_ANY_TIME)) $criteria->add(VolunteerPeer::FRIDAY_ANY_TIME, $this->friday_any_time);
		if ($this->isColumnModified(VolunteerPeer::SATURDAY_ANY_TIME)) $criteria->add(VolunteerPeer::SATURDAY_ANY_TIME, $this->saturday_any_time);
		if ($this->isColumnModified(VolunteerPeer::SUNDAY_NO_TIME)) $criteria->add(VolunteerPeer::SUNDAY_NO_TIME, $this->sunday_no_time);
		if ($this->isColumnModified(VolunteerPeer::MONDAY_NO_TIME)) $criteria->add(VolunteerPeer::MONDAY_NO_TIME, $this->monday_no_time);
		if ($this->isColumnModified(VolunteerPeer::TUESDAY_NO_TIME)) $criteria->add(VolunteerPeer::TUESDAY_NO_TIME, $this->tuesday_no_time);
		if ($this->isColumnModified(VolunteerPeer::WEDNESDAY_NO_TIME)) $criteria->add(VolunteerPeer::WEDNESDAY_NO_TIME, $this->wednesday_no_time);
		if ($this->isColumnModified(VolunteerPeer::THURSDAY_NO_TIME)) $criteria->add(VolunteerPeer::THURSDAY_NO_TIME, $this->thursday_no_time);
		if ($this->isColumnModified(VolunteerPeer::FRIDAY_NO_TIME)) $criteria->add(VolunteerPeer::FRIDAY_NO_TIME, $this->friday_no_time);
		if ($this->isColumnModified(VolunteerPeer::SATURDAY_NO_TIME)) $criteria->add(VolunteerPeer::SATURDAY_NO_TIME, $this->saturday_no_time);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(VolunteerPeer::DATABASE_NAME);
		$criteria->add(VolunteerPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Volunteer (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setFirstName($this->first_name);
		$copyObj->setLastName($this->last_name);
		$copyObj->setCity($this->city);
		$copyObj->setState($this->state);
		$copyObj->setZip($this->zip);
		$copyObj->setStreetaddress($this->streetaddress);
		$copyObj->setVehicle($this->vehicle);
		$copyObj->setIsland($this->island);
		$copyObj->setEmail($this->email);
		$copyObj->setTraining($this->training);
		$copyObj->setComments($this->comments);
		$copyObj->setPhonenumber($this->phonenumber);
		$copyObj->setSundayFromHour($this->sunday_from_hour);
		$copyObj->setMondayFromHour($this->monday_from_hour);
		$copyObj->setTuesdayFromHour($this->tuesday_from_hour);
		$copyObj->setWednesdayFromHour($this->wednesday_from_hour);
		$copyObj->setThursdayFromHour($this->thursday_from_hour);
		$copyObj->setFridayFromHour($this->friday_from_hour);
		$copyObj->setSaturdayFromHour($this->saturday_from_hour);
		$copyObj->setSundayToHour($this->sunday_to_hour);
		$copyObj->setMondayToHour($this->monday_to_hour);
		$copyObj->setTuesdayToHour($this->tuesday_to_hour);
		$copyObj->setWednesdayToHour($this->wednesday_to_hour);
		$copyObj->setThursdayToHour($this->thursday_to_hour);
		$copyObj->setFridayToHour($this->friday_to_hour);
		$copyObj->setSaturdayToHour($this->saturday_to_hour);
		$copyObj->setSundayAnyTime($this->sunday_any_time);
		$copyObj->setMondayAnyTime($this->monday_any_time);
		$copyObj->setTuesdayAnyTime($this->tuesday_any_time);
		$copyObj->setWednesdayAnyTime($this->wednesday_any_time);
		$copyObj->setThursdayAnyTime($this->thursday_any_time);
		$copyObj->setFridayAnyTime($this->friday_any_time);
		$copyObj->setSaturdayAnyTime($this->saturday_any_time);
		$copyObj->setSundayNoTime($this->sunday_no_time);
		$copyObj->setMondayNoTime($this->monday_no_time);
		$copyObj->setTuesdayNoTime($this->tuesday_no_time);
		$copyObj->setWednesdayNoTime($this->wednesday_no_time);
		$copyObj->setThursdayNoTime($this->thursday_no_time);
		$copyObj->setFridayNoTime($this->friday_no_time);
		$copyObj->setSaturdayNoTime($this->saturday_no_time);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getReports() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addReport($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getReportCommentss() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addReportComments($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getBlogEntryCommentss() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addBlogEntryComments($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getVolunteerHourss() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addVolunteerHours($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


		$copyObj->setNew(true);
		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Volunteer Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     VolunteerPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new VolunteerPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collReports collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addReports()
	 */
	public function clearReports()
	{
		$this->collReports = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collReports collection.
	 *
	 * By default this just sets the collReports collection to an empty array (like clearcollReports());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initReports()
	{
		$this->collReports = new PropelObjectCollection();
		$this->collReports->setModel('Report');
	}

	/**
	 * Gets an array of Report objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Volunteer is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Report[] List of Report objects
	 * @throws     PropelException
	 */
	public function getReports($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collReports || null !== $criteria) {
			if ($this->isNew() && null === $this->collReports) {
				// return empty collection
				$this->initReports();
			} else {
				$collReports = ReportQuery::create(null, $criteria)
					->filterByVolunteer($this)
					->find($con);
				if (null !== $criteria) {
					return $collReports;
				}
				$this->collReports = $collReports;
			}
		}
		return $this->collReports;
	}

	/**
	 * Returns the number of related Report objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Report objects.
	 * @throws     PropelException
	 */
	public function countReports(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collReports || null !== $criteria) {
			if ($this->isNew() && null === $this->collReports) {
				return 0;
			} else {
				$query = ReportQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByVolunteer($this)
					->count($con);
			}
		} else {
			return count($this->collReports);
		}
	}

	/**
	 * Method called to associate a Report object to this object
	 * through the Report foreign key attribute.
	 *
	 * @param      Report $l Report
	 * @return     void
	 * @throws     PropelException
	 */
	public function addReport(Report $l)
	{
		if ($this->collReports === null) {
			$this->initReports();
		}
		if (!$this->collReports->contains($l)) { // only add it if the **same** object is not already associated
			$this->collReports[]= $l;
			$l->setVolunteer($this);
		}
	}

	/**
	 * Clears out the collReportCommentss collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addReportCommentss()
	 */
	public function clearReportCommentss()
	{
		$this->collReportCommentss = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collReportCommentss collection.
	 *
	 * By default this just sets the collReportCommentss collection to an empty array (like clearcollReportCommentss());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initReportCommentss()
	{
		$this->collReportCommentss = new PropelObjectCollection();
		$this->collReportCommentss->setModel('ReportComments');
	}

	/**
	 * Gets an array of ReportComments objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Volunteer is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array ReportComments[] List of ReportComments objects
	 * @throws     PropelException
	 */
	public function getReportCommentss($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collReportCommentss || null !== $criteria) {
			if ($this->isNew() && null === $this->collReportCommentss) {
				// return empty collection
				$this->initReportCommentss();
			} else {
				$collReportCommentss = ReportCommentsQuery::create(null, $criteria)
					->filterByVolunteer($this)
					->find($con);
				if (null !== $criteria) {
					return $collReportCommentss;
				}
				$this->collReportCommentss = $collReportCommentss;
			}
		}
		return $this->collReportCommentss;
	}

	/**
	 * Returns the number of related ReportComments objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ReportComments objects.
	 * @throws     PropelException
	 */
	public function countReportCommentss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collReportCommentss || null !== $criteria) {
			if ($this->isNew() && null === $this->collReportCommentss) {
				return 0;
			} else {
				$query = ReportCommentsQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByVolunteer($this)
					->count($con);
			}
		} else {
			return count($this->collReportCommentss);
		}
	}

	/**
	 * Method called to associate a ReportComments object to this object
	 * through the ReportComments foreign key attribute.
	 *
	 * @param      ReportComments $l ReportComments
	 * @return     void
	 * @throws     PropelException
	 */
	public function addReportComments(ReportComments $l)
	{
		if ($this->collReportCommentss === null) {
			$this->initReportCommentss();
		}
		if (!$this->collReportCommentss->contains($l)) { // only add it if the **same** object is not already associated
			$this->collReportCommentss[]= $l;
			$l->setVolunteer($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Volunteer is new, it will return
	 * an empty collection; or if this Volunteer has previously
	 * been saved, it will retrieve related ReportCommentss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Volunteer.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ReportComments[] List of ReportComments objects
	 */
	public function getReportCommentssJoinReport($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ReportCommentsQuery::create(null, $criteria);
		$query->joinWith('Report', $join_behavior);

		return $this->getReportCommentss($query, $con);
	}

	/**
	 * Clears out the collBlogEntryCommentss collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addBlogEntryCommentss()
	 */
	public function clearBlogEntryCommentss()
	{
		$this->collBlogEntryCommentss = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collBlogEntryCommentss collection.
	 *
	 * By default this just sets the collBlogEntryCommentss collection to an empty array (like clearcollBlogEntryCommentss());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initBlogEntryCommentss()
	{
		$this->collBlogEntryCommentss = new PropelObjectCollection();
		$this->collBlogEntryCommentss->setModel('BlogEntryComments');
	}

	/**
	 * Gets an array of BlogEntryComments objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Volunteer is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array BlogEntryComments[] List of BlogEntryComments objects
	 * @throws     PropelException
	 */
	public function getBlogEntryCommentss($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collBlogEntryCommentss || null !== $criteria) {
			if ($this->isNew() && null === $this->collBlogEntryCommentss) {
				// return empty collection
				$this->initBlogEntryCommentss();
			} else {
				$collBlogEntryCommentss = BlogEntryCommentsQuery::create(null, $criteria)
					->filterByVolunteer($this)
					->find($con);
				if (null !== $criteria) {
					return $collBlogEntryCommentss;
				}
				$this->collBlogEntryCommentss = $collBlogEntryCommentss;
			}
		}
		return $this->collBlogEntryCommentss;
	}

	/**
	 * Returns the number of related BlogEntryComments objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related BlogEntryComments objects.
	 * @throws     PropelException
	 */
	public function countBlogEntryCommentss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collBlogEntryCommentss || null !== $criteria) {
			if ($this->isNew() && null === $this->collBlogEntryCommentss) {
				return 0;
			} else {
				$query = BlogEntryCommentsQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByVolunteer($this)
					->count($con);
			}
		} else {
			return count($this->collBlogEntryCommentss);
		}
	}

	/**
	 * Method called to associate a BlogEntryComments object to this object
	 * through the BlogEntryComments foreign key attribute.
	 *
	 * @param      BlogEntryComments $l BlogEntryComments
	 * @return     void
	 * @throws     PropelException
	 */
	public function addBlogEntryComments(BlogEntryComments $l)
	{
		if ($this->collBlogEntryCommentss === null) {
			$this->initBlogEntryCommentss();
		}
		if (!$this->collBlogEntryCommentss->contains($l)) { // only add it if the **same** object is not already associated
			$this->collBlogEntryCommentss[]= $l;
			$l->setVolunteer($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Volunteer is new, it will return
	 * an empty collection; or if this Volunteer has previously
	 * been saved, it will retrieve related BlogEntryCommentss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Volunteer.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array BlogEntryComments[] List of BlogEntryComments objects
	 */
	public function getBlogEntryCommentssJoinBlogEntry($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = BlogEntryCommentsQuery::create(null, $criteria);
		$query->joinWith('BlogEntry', $join_behavior);

		return $this->getBlogEntryCommentss($query, $con);
	}

	/**
	 * Clears out the collVolunteerHourss collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addVolunteerHourss()
	 */
	public function clearVolunteerHourss()
	{
		$this->collVolunteerHourss = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collVolunteerHourss collection.
	 *
	 * By default this just sets the collVolunteerHourss collection to an empty array (like clearcollVolunteerHourss());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initVolunteerHourss()
	{
		$this->collVolunteerHourss = new PropelObjectCollection();
		$this->collVolunteerHourss->setModel('VolunteerHours');
	}

	/**
	 * Gets an array of VolunteerHours objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Volunteer is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array VolunteerHours[] List of VolunteerHours objects
	 * @throws     PropelException
	 */
	public function getVolunteerHourss($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collVolunteerHourss || null !== $criteria) {
			if ($this->isNew() && null === $this->collVolunteerHourss) {
				// return empty collection
				$this->initVolunteerHourss();
			} else {
				$collVolunteerHourss = VolunteerHoursQuery::create(null, $criteria)
					->filterByVolunteer($this)
					->find($con);
				if (null !== $criteria) {
					return $collVolunteerHourss;
				}
				$this->collVolunteerHourss = $collVolunteerHourss;
			}
		}
		return $this->collVolunteerHourss;
	}

	/**
	 * Returns the number of related VolunteerHours objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related VolunteerHours objects.
	 * @throws     PropelException
	 */
	public function countVolunteerHourss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collVolunteerHourss || null !== $criteria) {
			if ($this->isNew() && null === $this->collVolunteerHourss) {
				return 0;
			} else {
				$query = VolunteerHoursQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByVolunteer($this)
					->count($con);
			}
		} else {
			return count($this->collVolunteerHourss);
		}
	}

	/**
	 * Method called to associate a VolunteerHours object to this object
	 * through the VolunteerHours foreign key attribute.
	 *
	 * @param      VolunteerHours $l VolunteerHours
	 * @return     void
	 * @throws     PropelException
	 */
	public function addVolunteerHours(VolunteerHours $l)
	{
		if ($this->collVolunteerHourss === null) {
			$this->initVolunteerHourss();
		}
		if (!$this->collVolunteerHourss->contains($l)) { // only add it if the **same** object is not already associated
			$this->collVolunteerHourss[]= $l;
			$l->setVolunteer($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->first_name = null;
		$this->last_name = null;
		$this->city = null;
		$this->state = null;
		$this->zip = null;
		$this->streetaddress = null;
		$this->vehicle = null;
		$this->island = null;
		$this->email = null;
		$this->training = null;
		$this->comments = null;
		$this->phonenumber = null;
		$this->sunday_from_hour = null;
		$this->monday_from_hour = null;
		$this->tuesday_from_hour = null;
		$this->wednesday_from_hour = null;
		$this->thursday_from_hour = null;
		$this->friday_from_hour = null;
		$this->saturday_from_hour = null;
		$this->sunday_to_hour = null;
		$this->monday_to_hour = null;
		$this->tuesday_to_hour = null;
		$this->wednesday_to_hour = null;
		$this->thursday_to_hour = null;
		$this->friday_to_hour = null;
		$this->saturday_to_hour = null;
		$this->sunday_any_time = null;
		$this->monday_any_time = null;
		$this->tuesday_any_time = null;
		$this->wednesday_any_time = null;
		$this->thursday_any_time = null;
		$this->friday_any_time = null;
		$this->saturday_any_time = null;
		$this->sunday_no_time = null;
		$this->monday_no_time = null;
		$this->tuesday_no_time = null;
		$this->wednesday_no_time = null;
		$this->thursday_no_time = null;
		$this->friday_no_time = null;
		$this->saturday_no_time = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collReports) {
				foreach ((array) $this->collReports as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collReportCommentss) {
				foreach ((array) $this->collReportCommentss as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collBlogEntryCommentss) {
				foreach ((array) $this->collBlogEntryCommentss as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collVolunteerHourss) {
				foreach ((array) $this->collVolunteerHourss as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collReports = null;
		$this->collReportCommentss = null;
		$this->collBlogEntryCommentss = null;
		$this->collVolunteerHourss = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		throw new PropelException('Call to undefined method: ' . $name);
	}

} // BaseVolunteer
