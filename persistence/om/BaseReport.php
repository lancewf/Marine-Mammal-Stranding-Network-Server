<?php


/**
 * Base class that represents a row from the 'report' table.
 *
 * a report
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseReport extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
  const PEER = 'ReportPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ReportPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the responder field.
	 * @var        string
	 */
	protected $responder;

	/**
	 * The value for the call_date field.
	 * @var        string
	 */
	protected $call_date;

	/**
	 * The value for the call_from field.
	 * @var        string
	 */
	protected $call_from;

	/**
	 * The value for the caller_name field.
	 * @var        string
	 */
	protected $caller_name;

	/**
	 * The value for the caller_phone_number field.
	 * @var        string
	 */
	protected $caller_phone_number;

	/**
	 * The value for the call_location field.
	 * @var        string
	 */
	protected $call_location;

	/**
	 * The value for the call_species field.
	 * @var        string
	 */
	protected $call_species;

	/**
	 * The value for the when_first_seen field.
	 * @var        string
	 */
	protected $when_first_seen;

	/**
	 * The value for the call_comments field.
	 * @var        string
	 */
	protected $call_comments;

	/**
	 * The value for the call_referred_to field.
	 * @var        string
	 */
	protected $call_referred_to;

	/**
	 * The value for the call_condition field.
	 * @var        string
	 */
	protected $call_condition;

	/**
	 * The value for the investigator_support field.
	 * @var        string
	 */
	protected $investigator_support;

	/**
	 * The value for the investigation_date field.
	 * @var        string
	 */
	protected $investigation_date;

	/**
	 * The value for the investigation_lat_lon_location field.
	 * @var        string
	 */
	protected $investigation_lat_lon_location;

	/**
	 * The value for the investigation_physical_location field.
	 * @var        string
	 */
	protected $investigation_physical_location;

	/**
	 * The value for the investigation_species field.
	 * @var        string
	 */
	protected $investigation_species;

	/**
	 * The value for the animal_not_found field.
	 * @var        boolean
	 */
	protected $animal_not_found;

	/**
	 * The value for the investigation_condition field.
	 * @var        string
	 */
	protected $investigation_condition;

	/**
	 * The value for the tags field.
	 * @var        string
	 */
	protected $tags;

	/**
	 * The value for the disposition field.
	 * @var        string
	 */
	protected $disposition;

	/**
	 * The value for the seal_pickup field.
	 * @var        string
	 */
	protected $seal_pickup;

	/**
	 * The value for the sex field.
	 * @var        string
	 */
	protected $sex;

	/**
	 * The value for the weight field.
	 * @var        double
	 */
	protected $weight;

	/**
	 * The value for the straight_length field.
	 * @var        double
	 */
	protected $straight_length;

	/**
	 * The value for the contour_length field.
	 * @var        double
	 */
	protected $contour_length;

	/**
	 * The value for the girth field.
	 * @var        double
	 */
	protected $girth;

	/**
	 * The value for the investigation_comments field.
	 * @var        string
	 */
	protected $investigation_comments;

	/**
	 * The value for the is_photo_taken field.
	 * @var        boolean
	 */
	protected $is_photo_taken;

	/**
	 * The value for the is_con_sick field.
	 * @var        boolean
	 */
	protected $is_con_sick;

    /**
	 * The value for the is_con_injured field.
	 * @var        boolean
	 */
	protected $is_con_injured;
	
    /**
	 * The value for the is_con_out_of_habitat field.
	 * @var        boolean
	 */
	protected $is_con_out_of_habitat;

    /**
	 * The value for the is_con_deemed_releasable field.
	 * @var        boolean
	 */
	protected $is_con_deemed_releasable;

    /**
	 * The value for the is_con_abandoned field.
	 * @var        boolean
	 */
	protected $is_con_abandoned;

    /**
	 * The value for the is_con_inaccessible field.
	 * @var        boolean
	 */
	protected $is_con_inaccessible;

    /**
	 * The value for the is_con_location_hazard_to_animal field.
	 * @var        boolean
	 */
	protected $is_con_location_hazard_to_animal;

    /**
	 * The value for the is_con_location_hazard_to_humans field.
	 * @var        boolean
	 */
	protected $is_con_location_hazard_to_humans;

    /**
	 * The value for the is_con_unknown field.
	 * @var        boolean
	 */
	protected $is_con_unknown;

    /**
	 * The value for the is_con_other field.
	 * @var        boolean
	 */
	protected $is_con_other;

    /**
	 * The value for the is_action_left_at_site field.
	 * @var        boolean
	 */
	protected $is_action_left_at_site;

    /**
	 * The value for the is_action_immediate_release_at_site field.
	 * @var        boolean
	 */
	protected $is_action_immediate_release_at_site;

    /**
	 * The value for the is_action_relocated field.
	 * @var        boolean
	 */
	protected $is_action_relocated;

    /**
	 * The value for the is_action_died_at_site field.
	 * @var        boolean
	 */
	protected $is_action_died_at_site;

    /**
	 * The value for the is_action_died_during_transport field.
	 * @var        boolean
	 */
	protected $is_action_died_during_transport;

    /**
	 * The value for the is_action_euthanized_at_site field.
	 * @var        boolean
	 */
	protected $is_action_euthanized_at_site;

    /**
	 * The value for the is_action_euthanized_during_transport field.
	 * @var        boolean
	 */
	protected $is_action_euthanized_during_transport;

    /**
	 * The value for the is_action_transferred_to_rehab field.
	 * @var        boolean
	 */
	protected $is_action_transferred_to_rehab;

	protected $is_action_other;

	/**
	 * The value for the volunteer_id field.
	 * @var        int
	 */
	protected $volunteer_id;

	/**
	 * @var        Volunteer
	 */
	protected $aVolunteer;

	/**
	 * @var        array ReportComments[] Collection to store aggregation of ReportComments objects.
	 */
	protected $collReportCommentss;

	/**
	 * @var        array Attachment[] Collection to store aggregation of Attachment objects.
	 */
	protected $collAttachments;

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
	 * Get the [responder] column value.
	 * 
	 * @return     string
	 */
	public function getResponder()
	{
		return $this->responder;
	}

	/**
	 * Get the [optionally formatted] temporal [call_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCallDate($format = 'Y-m-d H:i:s')
	{
		if ($this->call_date === null) {
			return null;
		}


		if ($this->call_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->call_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->call_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [call_from] column value.
	 * 
	 * @return     string
	 */
	public function getCallFrom()
	{
		return $this->call_from;
	}

	/**
	 * Get the [caller_name] column value.
	 * 
	 * @return     string
	 */
	public function getCallerName()
	{
		return $this->caller_name;
	}

	/**
	 * Get the [caller_phone_number] column value.
	 * 
	 * @return     string
	 */
	public function getCallerPhoneNumber()
	{
		return $this->caller_phone_number;
	}

	/**
	 * Get the [call_location] column value.
	 * 
	 * @return     string
	 */
	public function getCallLocation()
	{
		return $this->call_location;
	}

	/**
	 * Get the [call_species] column value.
	 * 
	 * @return     string
	 */
	public function getCallSpecies()
	{
		return $this->call_species;
	}

	/**
	 * Get the [when_first_seen] column value.
	 * 
	 * @return     string
	 */
	public function getWhenFirstSeen()
	{
		return $this->when_first_seen;
	}

	/**
	 * Get the [call_comments] column value.
	 * 
	 * @return     string
	 */
	public function getCallComments()
	{
		return $this->call_comments;
	}

	/**
	 * Get the [call_referred_to] column value.
	 * 
	 * @return     string
	 */
	public function getCallReferredTo()
	{
		return $this->call_referred_to;
	}

	/**
	 * Get the [call_condition] column value.
	 * 
	 * @return     string
	 */
	public function getCallCondition()
	{
		return $this->call_condition;
	}

	/**
	 * Get the [investigator_support] column value.
	 * 
	 * @return     string
	 */
	public function getInvestigatorSupport()
	{
		return $this->investigator_support;
	}

	/**
	 * Get the [optionally formatted] temporal [investigation_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getInvestigationDate($format = 'Y-m-d H:i:s')
	{
		if ($this->investigation_date === null) {
			return null;
		}


		if ($this->investigation_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->investigation_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->investigation_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [investigation_lat_lon_location] column value.
	 * 
	 * @return     string
	 */
	public function getInvestigationLatLonLocation()
	{
		return $this->investigation_lat_lon_location;
	}

	/**
	 * Get the [investigation_physical_location] column value.
	 * 
	 * @return     string
	 */
	public function getInvestigationPhysicalLocation()
	{
		return $this->investigation_physical_location;
	}

	/**
	 * Get the [investigation_species] column value.
	 * 
	 * @return     string
	 */
	public function getInvestigationSpecies()
	{
		return $this->investigation_species;
	}

	/**
	 * Get the [animal_not_found] column value.
	 * 
	 * @return     boolean
	 */
	public function getAnimalNotFound()
	{
		return $this->animal_not_found;
	}

	/**
	 * Get the [investigation_condition] column value.
	 * 
	 * @return     string
	 */
	public function getInvestigationCondition()
	{
		return $this->investigation_condition;
	}

	/**
	 * Get the [tags] column value.
	 * 
	 * @return     string
	 */
	public function getTags()
	{
		return $this->tags;
	}

	/**
	 * Get the [disposition] column value.
	 * 
	 * @return     string
	 */
	public function getDisposition()
	{
		return $this->disposition;
	}

	/**
	 * Get the [seal_pickup] column value.
	 * 
	 * @return     string
	 */
	public function getSealPickup()
	{
		return $this->seal_pickup;
	}

	/**
	 * Get the [sex] column value.
	 * 
	 * @return     string
	 */
	public function getSex()
	{
		return $this->sex;
	}

	/**
	 * Get the [weight] column value.
	 * 
	 * @return     double
	 */
	public function getWeight()
	{
		return $this->weight;
	}

	/**
	 * Get the [straight_length] column value.
	 * 
	 * @return     double
	 */
	public function getStraightLength()
	{
		return $this->straight_length;
	}

	/**
	 * Get the [contour_length] column value.
	 * 
	 * @return     double
	 */
	public function getContourLength()
	{
		return $this->contour_length;
	}

	/**
	 * Get the [girth] column value.
	 * 
	 * @return     double
	 */
	public function getGirth()
	{
		return $this->girth;
	}

	/**
	 * Get the [investigation_comments] column value.
	 * 
	 * @return     string
	 */
	public function getInvestigationComments()
	{
		return $this->investigation_comments;
	}

	/**
	 * Get the [is_photo_taken] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsPhotoTaken()
	{
		return $this->is_photo_taken;
	}

	public function getIsConSick()
	{
		return $this->is_con_sick;
	}

	public function getIsConInjured()
	{
		return $this->is_con_injured;
	}

	public function getIsConOutOfHabitat()
	{
		return $this->is_con_out_of_habitat;
	}

	public function getIsConDeemedReleasable()
	{
		return $this->is_con_deemed_releasable;
	}

	public function getIsConAbandoned()
	{
		return $this->is_con_abandoned;
	}

	public function getIsConInaccessible()
	{
		return $this->is_con_inaccessible;
	}

	public function getIsConLocationHazardToAnimal()
	{
		return $this->is_con_location_hazard_to_animal;
	}

	public function getIsConLocationHazardToHumans()
	{
		return $this->is_con_location_hazard_to_humans;
	}

	public function getIsConUnknown()
	{
		return $this->is_con_unknown;
	}

	public function getIsConOther()
	{
		return $this->is_con_other;
	}

	public function getIsActionLeftAtSite()
	{
		return $this->is_action_left_at_site;
	}

	public function getIsActionImmediateReleaseAtSite()
	{
		return $this->is_action_immediate_release_at_site;
	}

	public function getIsActionRelocated()
	{
		return $this->is_action_relocated;
	}

	public function getIsActionDiedAtSite()
	{
		return $this->is_action_died_at_site;
	}

	public function getIsActionDiedDuringTransport()
	{
		return $this->is_action_died_during_transport;
	}

	public function getIsActionEuthanizedAtSite()
	{
		return $this->is_action_euthanized_at_site;
	}

	public function getIsActionEuthanizedDuringTransport()
	{
		return $this->is_action_euthanized_during_transport;
	}

	public function getIsActionTransferredToRehab()
	{
		return $this->is_action_transferred_to_rehab;
	}

	public function getIsActionOther()
	{
		return $this->is_action_other;
	}

	/**
	 * Get the [volunteer_id] column value.
	 * 
	 * @return     int
	 */
	public function getVolunteerId()
	{
		return $this->volunteer_id;
	}

	/**
	 * Set the value of [id] column.
	 * id
	 * @param      int $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ReportPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [responder] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setResponder($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->responder !== $v) {
			$this->responder = $v;
			$this->modifiedColumns[] = ReportPeer::RESPONDER;
		}

		return $this;
	} // setResponder()

	/**
	 * Sets the value of [call_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Report The current object (for fluent API support)
	 */
	public function setCallDate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->call_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->call_date !== null && $tmpDt = new DateTime($this->call_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->call_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ReportPeer::CALL_DATE;
			}
		} // if either are not null

		return $this;
	} // setCallDate()

	/**
	 * Set the value of [call_from] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setCallFrom($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->call_from !== $v) {
			$this->call_from = $v;
			$this->modifiedColumns[] = ReportPeer::CALL_FROM;
		}

		return $this;
	} // setCallFrom()

	/**
	 * Set the value of [caller_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setCallerName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->caller_name !== $v) {
			$this->caller_name = $v;
			$this->modifiedColumns[] = ReportPeer::CALLER_NAME;
		}

		return $this;
	} // setCallerName()

	/**
	 * Set the value of [caller_phone_number] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setCallerPhoneNumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->caller_phone_number !== $v) {
			$this->caller_phone_number = $v;
			$this->modifiedColumns[] = ReportPeer::CALLER_PHONE_NUMBER;
		}

		return $this;
	} // setCallerPhoneNumber()

	/**
	 * Set the value of [call_location] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setCallLocation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->call_location !== $v) {
			$this->call_location = $v;
			$this->modifiedColumns[] = ReportPeer::CALL_LOCATION;
		}

		return $this;
	} // setCallLocation()

	/**
	 * Set the value of [call_species] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setCallSpecies($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->call_species !== $v) {
			$this->call_species = $v;
			$this->modifiedColumns[] = ReportPeer::CALL_SPECIES;
		}

		return $this;
	} // setCallSpecies()

	/**
	 * Set the value of [when_first_seen] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setWhenFirstSeen($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->when_first_seen !== $v) {
			$this->when_first_seen = $v;
			$this->modifiedColumns[] = ReportPeer::WHEN_FIRST_SEEN;
		}

		return $this;
	} // setWhenFirstSeen()

	/**
	 * Set the value of [call_comments] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setCallComments($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->call_comments !== $v) {
			$this->call_comments = $v;
			$this->modifiedColumns[] = ReportPeer::CALL_COMMENTS;
		}

		return $this;
	} // setCallComments()

	/**
	 * Set the value of [call_referred_to] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setCallReferredTo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->call_referred_to !== $v) {
			$this->call_referred_to = $v;
			$this->modifiedColumns[] = ReportPeer::CALL_REFERRED_TO;
		}

		return $this;
	} // setCallReferredTo()

	/**
	 * Set the value of [call_condition] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setCallCondition($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->call_condition !== $v) {
			$this->call_condition = $v;
			$this->modifiedColumns[] = ReportPeer::CALL_CONDITION;
		}

		return $this;
	} // setCallCondition()

	/**
	 * Set the value of [investigator_support] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setInvestigatorSupport($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->investigator_support !== $v) {
			$this->investigator_support = $v;
			$this->modifiedColumns[] = ReportPeer::INVESTIGATOR_SUPPORT;
		}

		return $this;
	} // setInvestigatorSupport()

	/**
	 * Sets the value of [investigation_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Report The current object (for fluent API support)
	 */
	public function setInvestigationDate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->investigation_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->investigation_date !== null && $tmpDt = new DateTime($this->investigation_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->investigation_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ReportPeer::INVESTIGATION_DATE;
			}
		} // if either are not null

		return $this;
	} // setInvestigationDate()

	/**
	 * Set the value of [investigation_lat_lon_location] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setInvestigationLatLonLocation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->investigation_lat_lon_location !== $v) {
			$this->investigation_lat_lon_location = $v;
			$this->modifiedColumns[] = ReportPeer::INVESTIGATION_LAT_LON_LOCATION;
		}

		return $this;
	} // setInvestigationLatLonLocation()

	/**
	 * Set the value of [investigation_physical_location] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setInvestigationPhysicalLocation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->investigation_physical_location !== $v) {
			$this->investigation_physical_location = $v;
			$this->modifiedColumns[] = ReportPeer::INVESTIGATION_PHYSICAL_LOCATION;
		}

		return $this;
	} // setInvestigationPhysicalLocation()

	/**
	 * Set the value of [investigation_species] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setInvestigationSpecies($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->investigation_species !== $v) {
			$this->investigation_species = $v;
			$this->modifiedColumns[] = ReportPeer::INVESTIGATION_SPECIES;
		}

		return $this;
	} // setInvestigationSpecies()

	/**
	 * Set the value of [animal_not_found] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setAnimalNotFound($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->animal_not_found !== $v) {
			$this->animal_not_found = $v;
			$this->modifiedColumns[] = ReportPeer::ANIMAL_NOT_FOUND;
		}

		return $this;
	} // setAnimalNotFound()

	/**
	 * Set the value of [investigation_condition] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setInvestigationCondition($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->investigation_condition !== $v) {
			$this->investigation_condition = $v;
			$this->modifiedColumns[] = ReportPeer::INVESTIGATION_CONDITION;
		}

		return $this;
	} // setInvestigationCondition()

	/**
	 * Set the value of [tags] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setTags($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tags !== $v) {
			$this->tags = $v;
			$this->modifiedColumns[] = ReportPeer::TAGS;
		}

		return $this;
	} // setTags()

	/**
	 * Set the value of [disposition] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setDisposition($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->disposition !== $v) {
			$this->disposition = $v;
			$this->modifiedColumns[] = ReportPeer::DISPOSITION;
		}

		return $this;
	} // setDisposition()

	/**
	 * Set the value of [seal_pickup] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setSealPickup($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->seal_pickup !== $v) {
			$this->seal_pickup = $v;
			$this->modifiedColumns[] = ReportPeer::SEAL_PICKUP;
		}

		return $this;
	} // setSealPickup()

	/**
	 * Set the value of [sex] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setSex($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sex !== $v) {
			$this->sex = $v;
			$this->modifiedColumns[] = ReportPeer::SEX;
		}

		return $this;
	} // setSex()

	/**
	 * Set the value of [weight] column.
	 * 
	 * @param      double $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setWeight($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->weight !== $v) {
			$this->weight = $v;
			$this->modifiedColumns[] = ReportPeer::WEIGHT;
		}

		return $this;
	} // setWeight()

	/**
	 * Set the value of [straight_length] column.
	 * 
	 * @param      double $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setStraightLength($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->straight_length !== $v) {
			$this->straight_length = $v;
			$this->modifiedColumns[] = ReportPeer::STRAIGHT_LENGTH;
		}

		return $this;
	} // setStraightLength()

	/**
	 * Set the value of [contour_length] column.
	 * 
	 * @param      double $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setContourLength($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->contour_length !== $v) {
			$this->contour_length = $v;
			$this->modifiedColumns[] = ReportPeer::CONTOUR_LENGTH;
		}

		return $this;
	} // setContourLength()

	/**
	 * Set the value of [girth] column.
	 * 
	 * @param      double $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setGirth($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->girth !== $v) {
			$this->girth = $v;
			$this->modifiedColumns[] = ReportPeer::GIRTH;
		}

		return $this;
	} // setGirth()

	/**
	 * Set the value of [investigation_comments] column.
	 * 
	 * @param      string $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setInvestigationComments($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->investigation_comments !== $v) {
			$this->investigation_comments = $v;
			$this->modifiedColumns[] = ReportPeer::INVESTIGATION_COMMENTS;
		}

		return $this;
	} // setInvestigationComments()

	/**
	 * Set the value of [is_photo_taken] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setIsPhotoTaken($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_photo_taken !== $v) {
			$this->is_photo_taken = $v;
			$this->modifiedColumns[] = ReportPeer::IS_PHOTO_TAKEN;
		}

		return $this;
	} // setIsPhotoTaken()


	public function setIsConSick($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_con_sick !== $v) {
			$this->is_con_sick = $v;
			$this->modifiedColumns[] = ReportPeer::IS_CON_SICK;
		}

		return $this;
	}

	public function setIsConInjured($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_con_injured !== $v) {
			$this->is_con_injured = $v;
			$this->modifiedColumns[] = ReportPeer::IS_CON_INJURED;
		}

		return $this;
	}

	public function setIsConOutOfHabitat($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_con_out_of_habitat !== $v) {
			$this->is_con_out_of_habitat = $v;
			$this->modifiedColumns[] = ReportPeer::IS_CON_OUT_OF_HABITAT;
		}

		return $this;
	}

	public function setIsConDeemedReleasable($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_con_deemed_releasable !== $v) {
			$this->is_con_deemed_releasable = $v;
			$this->modifiedColumns[] = ReportPeer::IS_CON_DEEMED_RELEASABLE;
		}

		return $this;
	}

	public function setIsConAbandoned($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_con_abandoned !== $v) {
			$this->is_con_abandoned = $v;
			$this->modifiedColumns[] = ReportPeer::IS_CON_ABANDONED;
		}

		return $this;
	}

	public function setIsConInaccessible($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_con_inaccessible !== $v) {
			$this->is_con_inaccessible = $v;
			$this->modifiedColumns[] = ReportPeer::IS_CON_INACCESSIBLE;
		}

		return $this;
	}

	public function setIsConLocationHazardToAnimal($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_con_location_hazard_to_animal !== $v) {
			$this->is_con_location_hazard_to_animal = $v;
			$this->modifiedColumns[] = ReportPeer::IS_CON_LOCATION_HAZARD_TO_ANIMAL;
		}

		return $this;
	}

	public function setIsConLocationHazardToHumans($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_con_location_hazard_to_humans !== $v) {
			$this->is_con_location_hazard_to_humans = $v;
			$this->modifiedColumns[] = ReportPeer::IS_CON_LOCATION_HAZARD_TO_HUMANS;
		}

		return $this;
	}

	public function setIsConUnknown($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_con_unknown !== $v) {
			$this->is_con_unknown = $v;
			$this->modifiedColumns[] = ReportPeer::IS_CON_UNKNOWN;
		}

		return $this;
	}

	public function setIsConOther($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_con_other !== $v) {
			$this->is_con_other = $v;
			$this->modifiedColumns[] = ReportPeer::IS_CON_OTHER;
		}

		return $this;
	}

	public function setIsActionLeftAtSite($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_action_left_at_site !== $v) {
			$this->is_action_left_at_site = $v;
			$this->modifiedColumns[] = ReportPeer::IS_ACTION_LEFT_AT_SITE;
		}

		return $this;
	}

	public function setIsActionImmediateReleaseAtSite($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_action_immediate_release_at_site !== $v) {
			$this->is_action_immediate_release_at_site = $v;
			$this->modifiedColumns[] = ReportPeer::IS_ACTION_IMMEDIATE_RELEASE_AT_SITE;
		}

		return $this;
	}

	public function setIsActionRelocated($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_action_relocated !== $v) {
			$this->is_action_relocated = $v;
			$this->modifiedColumns[] = ReportPeer::IS_ACTION_RELOCATED;
		}

		return $this;
	}

	public function setIsActionDiedAtSite($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_action_died_at_site !== $v) {
			$this->is_action_died_at_site = $v;
			$this->modifiedColumns[] = ReportPeer::IS_ACTION_DIED_AT_SITE;
		}

		return $this;
	}

	public function setIsActionDiedDuringTransport($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_action_died_during_transport !== $v) {
			$this->is_action_died_during_transport = $v;
			$this->modifiedColumns[] = ReportPeer::IS_ACTION_DIED_DURING_TRANSPORT;
		}

		return $this;
	}

	public function setIsActionEuthanizedAtSite($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_action_euthanized_at_site !== $v) {
			$this->is_action_euthanized_at_site = $v;
			$this->modifiedColumns[] = ReportPeer::IS_ACTION_EUTHANIZED_AT_SITE;
		}

		return $this;
	}

	public function setIsActionEuthanizedDuringTransport($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_action_euthanized_during_transport !== $v) {
			$this->is_action_euthanized_during_transport = $v;
			$this->modifiedColumns[] = ReportPeer::IS_ACTION_EUTHANIZED_DURING_TRANSPORT;
		}

		return $this;
	}

	public function setIsActionTransferredToRehab($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_action_transferred_to_rehab !== $v) {
			$this->is_action_transferred_to_rehab = $v;
			$this->modifiedColumns[] = ReportPeer::IS_ACTION_TRANSFERRED_TO_REHAB;
		}

		return $this;
	}

	public function setIsActionOther($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_action_other !== $v) {
			$this->is_action_other = $v;
			$this->modifiedColumns[] = ReportPeer::IS_ACTION_OTHER;
		}

		return $this;
	}

	/**
	 * Set the value of [volunteer_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Report The current object (for fluent API support)
	 */
	public function setVolunteerId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->volunteer_id !== $v) {
			$this->volunteer_id = $v;
			$this->modifiedColumns[] = ReportPeer::VOLUNTEER_ID;
		}

		if ($this->aVolunteer !== null && $this->aVolunteer->getId() !== $v) {
			$this->aVolunteer = null;
		}

		return $this;
	} // setVolunteerId()

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
			$this->responder = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->call_date = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->call_from = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->caller_name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->caller_phone_number = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->call_location = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->call_species = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->when_first_seen = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->call_comments = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->call_referred_to = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->call_condition = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->investigator_support = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->investigation_date = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->investigation_lat_lon_location = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->investigation_physical_location = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->investigation_species = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->animal_not_found = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
			$this->investigation_condition = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->tags = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->disposition = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->seal_pickup = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->sex = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->weight = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
			$this->straight_length = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
			$this->contour_length = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
			$this->girth = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
			$this->investigation_comments = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
			$this->is_photo_taken = ($row[$startcol + 28] !== null) ? (boolean) $row[$startcol + 28] : null;
			$this->volunteer_id = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
			$this->is_con_sick = ($row[$startcol + 30] !== null) ? (boolean) $row[$startcol + 30] : null;

			$this->is_con_injured = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
			$this->is_con_out_of_habitat = ($row[$startcol + 32] !== null) ? (boolean) $row[$startcol + 32] : null;
			$this->is_con_deemed_releasable = ($row[$startcol + 33] !== null) ? (boolean) $row[$startcol + 33] : null;
			$this->is_con_abandoned = ($row[$startcol + 34] !== null) ? (boolean) $row[$startcol + 34] : null;
			$this->is_con_inaccessible = ($row[$startcol + 35] !== null) ? (boolean) $row[$startcol + 35] : null;
			$this->is_con_location_hazard_to_animal = ($row[$startcol + 36] !== null) ? (boolean) $row[$startcol + 36] : null;
			$this->is_con_location_hazard_to_humans = ($row[$startcol + 37] !== null) ? (boolean) $row[$startcol + 37] : null;
			$this->is_con_unknown = ($row[$startcol + 38] !== null) ? (boolean) $row[$startcol + 38] : null;
			$this->is_con_other = ($row[$startcol + 39] !== null) ? (boolean) $row[$startcol + 39] : null;
			$this->is_action_left_at_site = ($row[$startcol + 40] !== null) ? (boolean) $row[$startcol + 40] : null;
			$this->is_action_immediate_release_at_site = ($row[$startcol + 41] !== null) ? (boolean) $row[$startcol + 41] : null;
			$this->is_action_relocated = ($row[$startcol + 42] !== null) ? (boolean) $row[$startcol + 42] : null;
			$this->is_action_died_at_site = ($row[$startcol + 43] !== null) ? (boolean) $row[$startcol + 43] : null;
			$this->is_action_died_during_transport = ($row[$startcol + 44] !== null) ? (boolean) $row[$startcol + 44] : null;
			$this->is_action_euthanized_at_site = ($row[$startcol + 45] !== null) ? (boolean) $row[$startcol + 45] : null;
			$this->is_action_euthanized_during_transport = ($row[$startcol + 46] !== null) ? (boolean) $row[$startcol + 46] : null;
			$this->is_action_transferred_to_rehab = ($row[$startcol + 47] !== null) ? (boolean) $row[$startcol + 47] : null;
			$this->is_action_other = ($row[$startcol + 48] !== null) ? (boolean) $row[$startcol + 48] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 30; // 30 = ReportPeer::NUM_COLUMNS - ReportPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Report object", $e);
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

		if ($this->aVolunteer !== null && $this->volunteer_id !== $this->aVolunteer->getId()) {
			$this->aVolunteer = null;
		}
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
			$con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ReportPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aVolunteer = null;
			$this->collReportCommentss = null;

			$this->collAttachments = null;

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
			$con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ReportQuery::create()
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
			$con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ReportPeer::addInstanceToPool($this);
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

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aVolunteer !== null) {
				if ($this->aVolunteer->isModified() || $this->aVolunteer->isNew()) {
					$affectedRows += $this->aVolunteer->save($con);
				}
				$this->setVolunteer($this->aVolunteer);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = ReportPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ReportPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ReportPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += ReportPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collReportCommentss !== null) {
				foreach ($this->collReportCommentss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collAttachments !== null) {
				foreach ($this->collAttachments as $referrerFK) {
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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aVolunteer !== null) {
				if (!$this->aVolunteer->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aVolunteer->getValidationFailures());
				}
			}


			if (($retval = ReportPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collReportCommentss !== null) {
					foreach ($this->collReportCommentss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collAttachments !== null) {
					foreach ($this->collAttachments as $referrerFK) {
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
		$pos = ReportPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getResponder();
				break;
			case 2:
				return $this->getCallDate();
				break;
			case 3:
				return $this->getCallFrom();
				break;
			case 4:
				return $this->getCallerName();
				break;
			case 5:
				return $this->getCallerPhoneNumber();
				break;
			case 6:
				return $this->getCallLocation();
				break;
			case 7:
				return $this->getCallSpecies();
				break;
			case 8:
				return $this->getWhenFirstSeen();
				break;
			case 9:
				return $this->getCallComments();
				break;
			case 10:
				return $this->getCallReferredTo();
				break;
			case 11:
				return $this->getCallCondition();
				break;
			case 12:
				return $this->getInvestigatorSupport();
				break;
			case 13:
				return $this->getInvestigationDate();
				break;
			case 14:
				return $this->getInvestigationLatLonLocation();
				break;
			case 15:
				return $this->getInvestigationPhysicalLocation();
				break;
			case 16:
				return $this->getInvestigationSpecies();
				break;
			case 17:
				return $this->getAnimalNotFound();
				break;
			case 18:
				return $this->getInvestigationCondition();
				break;
			case 19:
				return $this->getTags();
				break;
			case 20:
				return $this->getDisposition();
				break;
			case 21:
				return $this->getSealPickup();
				break;
			case 22:
				return $this->getSex();
				break;
			case 23:
				return $this->getWeight();
				break;
			case 24:
				return $this->getStraightLength();
				break;
			case 25:
				return $this->getContourLength();
				break;
			case 26:
				return $this->getGirth();
				break;
			case 27:
				return $this->getInvestigationComments();
				break;
			case 28:
				return $this->getIsPhotoTaken();
				break;
			case 29:
				return $this->getVolunteerId();
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
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $includeForeignObjects = false)
	{
		$keys = ReportPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getResponder(),
			$keys[2] => $this->getCallDate(),
			$keys[3] => $this->getCallFrom(),
			$keys[4] => $this->getCallerName(),
			$keys[5] => $this->getCallerPhoneNumber(),
			$keys[6] => $this->getCallLocation(),
			$keys[7] => $this->getCallSpecies(),
			$keys[8] => $this->getWhenFirstSeen(),
			$keys[9] => $this->getCallComments(),
			$keys[10] => $this->getCallReferredTo(),
			$keys[11] => $this->getCallCondition(),
			$keys[12] => $this->getInvestigatorSupport(),
			$keys[13] => $this->getInvestigationDate(),
			$keys[14] => $this->getInvestigationLatLonLocation(),
			$keys[15] => $this->getInvestigationPhysicalLocation(),
			$keys[16] => $this->getInvestigationSpecies(),
			$keys[17] => $this->getAnimalNotFound(),
			$keys[18] => $this->getInvestigationCondition(),
			$keys[19] => $this->getTags(),
			$keys[20] => $this->getDisposition(),
			$keys[21] => $this->getSealPickup(),
			$keys[22] => $this->getSex(),
			$keys[23] => $this->getWeight(),
			$keys[24] => $this->getStraightLength(),
			$keys[25] => $this->getContourLength(),
			$keys[26] => $this->getGirth(),
			$keys[27] => $this->getInvestigationComments(),
			$keys[28] => $this->getIsPhotoTaken(),
			$keys[29] => $this->getVolunteerId(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aVolunteer) {
				$result['Volunteer'] = $this->aVolunteer->toArray($keyType, $includeLazyLoadColumns, true);
			}
		}
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
		$pos = ReportPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setResponder($value);
				break;
			case 2:
				$this->setCallDate($value);
				break;
			case 3:
				$this->setCallFrom($value);
				break;
			case 4:
				$this->setCallerName($value);
				break;
			case 5:
				$this->setCallerPhoneNumber($value);
				break;
			case 6:
				$this->setCallLocation($value);
				break;
			case 7:
				$this->setCallSpecies($value);
				break;
			case 8:
				$this->setWhenFirstSeen($value);
				break;
			case 9:
				$this->setCallComments($value);
				break;
			case 10:
				$this->setCallReferredTo($value);
				break;
			case 11:
				$this->setCallCondition($value);
				break;
			case 12:
				$this->setInvestigatorSupport($value);
				break;
			case 13:
				$this->setInvestigationDate($value);
				break;
			case 14:
				$this->setInvestigationLatLonLocation($value);
				break;
			case 15:
				$this->setInvestigationPhysicalLocation($value);
				break;
			case 16:
				$this->setInvestigationSpecies($value);
				break;
			case 17:
				$this->setAnimalNotFound($value);
				break;
			case 18:
				$this->setInvestigationCondition($value);
				break;
			case 19:
				$this->setTags($value);
				break;
			case 20:
				$this->setDisposition($value);
				break;
			case 21:
				$this->setSealPickup($value);
				break;
			case 22:
				$this->setSex($value);
				break;
			case 23:
				$this->setWeight($value);
				break;
			case 24:
				$this->setStraightLength($value);
				break;
			case 25:
				$this->setContourLength($value);
				break;
			case 26:
				$this->setGirth($value);
				break;
			case 27:
				$this->setInvestigationComments($value);
				break;
			case 28:
				$this->setIsPhotoTaken($value);
				break;
			case 29:
				$this->setVolunteerId($value);
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
		$keys = ReportPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setResponder($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCallDate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCallFrom($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCallerName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCallerPhoneNumber($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCallLocation($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCallSpecies($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setWhenFirstSeen($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCallComments($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCallReferredTo($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCallCondition($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setInvestigatorSupport($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setInvestigationDate($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setInvestigationLatLonLocation($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setInvestigationPhysicalLocation($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setInvestigationSpecies($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setAnimalNotFound($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setInvestigationCondition($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setTags($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setDisposition($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setSealPickup($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setSex($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setWeight($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setStraightLength($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setContourLength($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setGirth($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setInvestigationComments($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setIsPhotoTaken($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setVolunteerId($arr[$keys[29]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ReportPeer::DATABASE_NAME);

		if ($this->isColumnModified(ReportPeer::ID)) $criteria->add(ReportPeer::ID, $this->id);
		if ($this->isColumnModified(ReportPeer::RESPONDER)) $criteria->add(ReportPeer::RESPONDER, $this->responder);
		if ($this->isColumnModified(ReportPeer::CALL_DATE)) $criteria->add(ReportPeer::CALL_DATE, $this->call_date);
		if ($this->isColumnModified(ReportPeer::CALL_FROM)) $criteria->add(ReportPeer::CALL_FROM, $this->call_from);
		if ($this->isColumnModified(ReportPeer::CALLER_NAME)) $criteria->add(ReportPeer::CALLER_NAME, $this->caller_name);
		if ($this->isColumnModified(ReportPeer::CALLER_PHONE_NUMBER)) $criteria->add(ReportPeer::CALLER_PHONE_NUMBER, $this->caller_phone_number);
		if ($this->isColumnModified(ReportPeer::CALL_LOCATION)) $criteria->add(ReportPeer::CALL_LOCATION, $this->call_location);
		if ($this->isColumnModified(ReportPeer::CALL_SPECIES)) $criteria->add(ReportPeer::CALL_SPECIES, $this->call_species);
		if ($this->isColumnModified(ReportPeer::WHEN_FIRST_SEEN)) $criteria->add(ReportPeer::WHEN_FIRST_SEEN, $this->when_first_seen);
		if ($this->isColumnModified(ReportPeer::CALL_COMMENTS)) $criteria->add(ReportPeer::CALL_COMMENTS, $this->call_comments);
		if ($this->isColumnModified(ReportPeer::CALL_REFERRED_TO)) $criteria->add(ReportPeer::CALL_REFERRED_TO, $this->call_referred_to);
		if ($this->isColumnModified(ReportPeer::CALL_CONDITION)) $criteria->add(ReportPeer::CALL_CONDITION, $this->call_condition);
		if ($this->isColumnModified(ReportPeer::INVESTIGATOR_SUPPORT)) $criteria->add(ReportPeer::INVESTIGATOR_SUPPORT, $this->investigator_support);
		if ($this->isColumnModified(ReportPeer::INVESTIGATION_DATE)) $criteria->add(ReportPeer::INVESTIGATION_DATE, $this->investigation_date);
		if ($this->isColumnModified(ReportPeer::INVESTIGATION_LAT_LON_LOCATION)) $criteria->add(ReportPeer::INVESTIGATION_LAT_LON_LOCATION, $this->investigation_lat_lon_location);
		if ($this->isColumnModified(ReportPeer::INVESTIGATION_PHYSICAL_LOCATION)) $criteria->add(ReportPeer::INVESTIGATION_PHYSICAL_LOCATION, $this->investigation_physical_location);
		if ($this->isColumnModified(ReportPeer::INVESTIGATION_SPECIES)) $criteria->add(ReportPeer::INVESTIGATION_SPECIES, $this->investigation_species);
		if ($this->isColumnModified(ReportPeer::ANIMAL_NOT_FOUND)) $criteria->add(ReportPeer::ANIMAL_NOT_FOUND, $this->animal_not_found);
		if ($this->isColumnModified(ReportPeer::INVESTIGATION_CONDITION)) $criteria->add(ReportPeer::INVESTIGATION_CONDITION, $this->investigation_condition);
		if ($this->isColumnModified(ReportPeer::TAGS)) $criteria->add(ReportPeer::TAGS, $this->tags);
		if ($this->isColumnModified(ReportPeer::DISPOSITION)) $criteria->add(ReportPeer::DISPOSITION, $this->disposition);
		if ($this->isColumnModified(ReportPeer::SEAL_PICKUP)) $criteria->add(ReportPeer::SEAL_PICKUP, $this->seal_pickup);
		if ($this->isColumnModified(ReportPeer::SEX)) $criteria->add(ReportPeer::SEX, $this->sex);
		if ($this->isColumnModified(ReportPeer::WEIGHT)) $criteria->add(ReportPeer::WEIGHT, $this->weight);
		if ($this->isColumnModified(ReportPeer::STRAIGHT_LENGTH)) $criteria->add(ReportPeer::STRAIGHT_LENGTH, $this->straight_length);
		if ($this->isColumnModified(ReportPeer::CONTOUR_LENGTH)) $criteria->add(ReportPeer::CONTOUR_LENGTH, $this->contour_length);
		if ($this->isColumnModified(ReportPeer::GIRTH)) $criteria->add(ReportPeer::GIRTH, $this->girth);
		if ($this->isColumnModified(ReportPeer::INVESTIGATION_COMMENTS)) $criteria->add(ReportPeer::INVESTIGATION_COMMENTS, $this->investigation_comments);
		if ($this->isColumnModified(ReportPeer::IS_PHOTO_TAKEN)) $criteria->add(ReportPeer::IS_PHOTO_TAKEN, $this->is_photo_taken);
		if ($this->isColumnModified(ReportPeer::VOLUNTEER_ID)) $criteria->add(ReportPeer::VOLUNTEER_ID, $this->volunteer_id);
		if ($this->isColumnModified(ReportPeer::IS_CON_SICK)) $criteria->add(ReportPeer::IS_CON_SICK, $this->is_con_sick);
		if ($this->isColumnModified(ReportPeer::IS_CON_INJURED)) $criteria->add(ReportPeer::IS_CON_INJURED, $this->is_con_injured);

		if ($this->isColumnModified(ReportPeer::IS_CON_OUT_OF_HABITAT)) $criteria->add(ReportPeer::IS_CON_OUT_OF_HABITAT, $this->is_con_out_of_habitat);
		if ($this->isColumnModified(ReportPeer::IS_CON_DEEMED_RELEASABLE)) $criteria->add(ReportPeer::IS_CON_DEEMED_RELEASABLE, $this->is_con_deemed_releasable);
		if ($this->isColumnModified(ReportPeer::IS_CON_ABANDONED)) $criteria->add(ReportPeer::IS_CON_ABANDONED, $this->is_con_abandoned);
		if ($this->isColumnModified(ReportPeer::IS_CON_INACCESSIBLE)) $criteria->add(ReportPeer::IS_CON_INACCESSIBLE, $this->is_con_inaccessible);
		if ($this->isColumnModified(ReportPeer::IS_CON_LOCATION_HAZARD_TO_ANIMAL)) $criteria->add(ReportPeer::IS_CON_LOCATION_HAZARD_TO_ANIMAL, $this->is_con_location_hazard_to_animal);
		if ($this->isColumnModified(ReportPeer::IS_CON_LOCATION_HAZARD_TO_HUMANS)) $criteria->add(ReportPeer::IS_CON_LOCATION_HAZARD_TO_HUMANS, $this->is_con_location_hazard_to_humans);
		if ($this->isColumnModified(ReportPeer::IS_CON_UNKNOWN)) $criteria->add(ReportPeer::IS_CON_UNKNOWN, $this->is_con_unknown);
		if ($this->isColumnModified(ReportPeer::IS_CON_OTHER)) $criteria->add(ReportPeer::IS_CON_OTHER, $this->is_con_other);
		if ($this->isColumnModified(ReportPeer::IS_ACTION_LEFT_AT_SITE)) $criteria->add(ReportPeer::IS_ACTION_LEFT_AT_SITE, $this->is_action_left_at_site);
		if ($this->isColumnModified(ReportPeer::IS_ACTION_IMMEDIATE_RELEASE_AT_SITE)) $criteria->add(ReportPeer::IS_ACTION_IMMEDIATE_RELEASE_AT_SITE, $this->is_action_immediate_release_at_site);
		if ($this->isColumnModified(ReportPeer::IS_ACTION_RELOCATED)) $criteria->add(ReportPeer::IS_ACTION_RELOCATED, $this->is_action_relocated);
		if ($this->isColumnModified(ReportPeer::IS_ACTION_DIED_AT_SITE)) $criteria->add(ReportPeer::IS_ACTION_DIED_AT_SITE, $this->is_action_died_at_site);
		if ($this->isColumnModified(ReportPeer::IS_ACTION_DIED_DURING_TRANSPORT)) $criteria->add(ReportPeer::IS_ACTION_DIED_DURING_TRANSPORT, $this->is_action_died_during_transport);
		if ($this->isColumnModified(ReportPeer::IS_ACTION_EUTHANIZED_AT_SITE)) $criteria->add(ReportPeer::IS_ACTION_EUTHANIZED_AT_SITE, $this->is_action_euthanized_at_site);
		if ($this->isColumnModified(ReportPeer::IS_ACTION_EUTHANIZED_DURING_TRANSPORT)) $criteria->add(ReportPeer::IS_ACTION_EUTHANIZED_DURING_TRANSPORT, $this->is_action_euthanized_during_transport);
		if ($this->isColumnModified(ReportPeer::IS_ACTION_TRANSFERRED_TO_REHAB)) $criteria->add(ReportPeer::IS_ACTION_TRANSFERRED_TO_REHAB, $this->is_action_transferred_to_rehab);
		if ($this->isColumnModified(ReportPeer::IS_ACTION_OTHER)) $criteria->add(ReportPeer::IS_ACTION_OTHER, $this->is_action_other);
		
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
		$criteria = new Criteria(ReportPeer::DATABASE_NAME);
		$criteria->add(ReportPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Report (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setResponder($this->responder);
		$copyObj->setCallDate($this->call_date);
		$copyObj->setCallFrom($this->call_from);
		$copyObj->setCallerName($this->caller_name);
		$copyObj->setCallerPhoneNumber($this->caller_phone_number);
		$copyObj->setCallLocation($this->call_location);
		$copyObj->setCallSpecies($this->call_species);
		$copyObj->setWhenFirstSeen($this->when_first_seen);
		$copyObj->setCallComments($this->call_comments);
		$copyObj->setCallReferredTo($this->call_referred_to);
		$copyObj->setCallCondition($this->call_condition);
		$copyObj->setInvestigatorSupport($this->investigator_support);
		$copyObj->setInvestigationDate($this->investigation_date);
		$copyObj->setInvestigationLatLonLocation($this->investigation_lat_lon_location);
		$copyObj->setInvestigationPhysicalLocation($this->investigation_physical_location);
		$copyObj->setInvestigationSpecies($this->investigation_species);
		$copyObj->setAnimalNotFound($this->animal_not_found);
		$copyObj->setInvestigationCondition($this->investigation_condition);
		$copyObj->setTags($this->tags);
		$copyObj->setDisposition($this->disposition);
		$copyObj->setSealPickup($this->seal_pickup);
		$copyObj->setSex($this->sex);
		$copyObj->setWeight($this->weight);
		$copyObj->setStraightLength($this->straight_length);
		$copyObj->setContourLength($this->contour_length);
		$copyObj->setGirth($this->girth);
		$copyObj->setInvestigationComments($this->investigation_comments);
		$copyObj->setIsPhotoTaken($this->is_photo_taken);
		$copyObj->setVolunteerId($this->volunteer_id);
		$copyObj->setIsConSick($this->is_con_sick);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getReportCommentss() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addReportComments($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getAttachments() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addAttachment($relObj->copy($deepCopy));
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
	 * @return     Report Clone of current object.
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
	 * @return     ReportPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ReportPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Volunteer object.
	 *
	 * @param      Volunteer $v
	 * @return     Report The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setVolunteer(Volunteer $v = null)
	{
		if ($v === null) {
			$this->setVolunteerId(NULL);
		} else {
			$this->setVolunteerId($v->getId());
		}

		$this->aVolunteer = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Volunteer object, it will not be re-added.
		if ($v !== null) {
			$v->addReport($this);
		}

		return $this;
	}


	/**
	 * Get the associated Volunteer object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Volunteer The associated Volunteer object.
	 * @throws     PropelException
	 */
	public function getVolunteer(PropelPDO $con = null)
	{
		if ($this->aVolunteer === null && ($this->volunteer_id !== null)) {
			$this->aVolunteer = VolunteerQuery::create()->findPk($this->volunteer_id, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aVolunteer->addReports($this);
			 */
		}
		return $this->aVolunteer;
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
	 * If this Report is new, it will return
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
					->filterByReport($this)
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
					->filterByReport($this)
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
			$l->setReport($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Report is new, it will return
	 * an empty collection; or if this Report has previously
	 * been saved, it will retrieve related ReportCommentss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Report.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ReportComments[] List of ReportComments objects
	 */
	public function getReportCommentssJoinVolunteer($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ReportCommentsQuery::create(null, $criteria);
		$query->joinWith('Volunteer', $join_behavior);

		return $this->getReportCommentss($query, $con);
	}

	/**
	 * Clears out the collAttachments collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addAttachments()
	 */
	public function clearAttachments()
	{
		$this->collAttachments = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collAttachments collection.
	 *
	 * By default this just sets the collAttachments collection to an empty array (like clearcollAttachments());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initAttachments()
	{
		$this->collAttachments = new PropelObjectCollection();
		$this->collAttachments->setModel('Attachment');
	}

	/**
	 * Gets an array of Attachment objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Report is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Attachment[] List of Attachment objects
	 * @throws     PropelException
	 */
	public function getAttachments($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collAttachments || null !== $criteria) {
			if ($this->isNew() && null === $this->collAttachments) {
				// return empty collection
				$this->initAttachments();
			} else {
				$collAttachments = AttachmentQuery::create(null, $criteria)
					->filterByReport($this)
					->find($con);
				if (null !== $criteria) {
					return $collAttachments;
				}
				$this->collAttachments = $collAttachments;
			}
		}
		return $this->collAttachments;
	}

	/**
	 * Returns the number of related Attachment objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Attachment objects.
	 * @throws     PropelException
	 */
	public function countAttachments(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collAttachments || null !== $criteria) {
			if ($this->isNew() && null === $this->collAttachments) {
				return 0;
			} else {
				$query = AttachmentQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByReport($this)
					->count($con);
			}
		} else {
			return count($this->collAttachments);
		}
	}

	/**
	 * Method called to associate a Attachment object to this object
	 * through the Attachment foreign key attribute.
	 *
	 * @param      Attachment $l Attachment
	 * @return     void
	 * @throws     PropelException
	 */
	public function addAttachment(Attachment $l)
	{
		if ($this->collAttachments === null) {
			$this->initAttachments();
		}
		if (!$this->collAttachments->contains($l)) { // only add it if the **same** object is not already associated
			$this->collAttachments[]= $l;
			$l->setReport($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->responder = null;
		$this->call_date = null;
		$this->call_from = null;
		$this->caller_name = null;
		$this->caller_phone_number = null;
		$this->call_location = null;
		$this->call_species = null;
		$this->when_first_seen = null;
		$this->call_comments = null;
		$this->call_referred_to = null;
		$this->call_condition = null;
		$this->investigator_support = null;
		$this->investigation_date = null;
		$this->investigation_lat_lon_location = null;
		$this->investigation_physical_location = null;
		$this->investigation_species = null;
		$this->animal_not_found = null;
		$this->investigation_condition = null;
		$this->tags = null;
		$this->disposition = null;
		$this->seal_pickup = null;
		$this->sex = null;
		$this->weight = null;
		$this->straight_length = null;
		$this->contour_length = null;
		$this->girth = null;
		$this->investigation_comments = null;
		$this->is_photo_taken = null;
		$this->is_con_sick = null;
		$this->volunteer_id = null;
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
			if ($this->collReportCommentss) {
				foreach ((array) $this->collReportCommentss as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collAttachments) {
				foreach ((array) $this->collAttachments as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collReportCommentss = null;
		$this->collAttachments = null;
		$this->aVolunteer = null;
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

} // BaseReport
