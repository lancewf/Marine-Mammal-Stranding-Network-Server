<?php


/**
 * Base class that represents a row from the 'report' table.
 *
 * a report
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseReport extends BaseObject implements Persistent
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
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

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
     * The value for the investigation_lat_location field.
     * @var        string
     */
    protected $investigation_lat_location;

    /**
     * The value for the investigation_lon_location field.
     * @var        string
     */
    protected $investigation_lon_location;

    /**
     * The value for the investigation_location_accuracy field.
     * @var        string
     */
    protected $investigation_location_accuracy;

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

    /**
     * The value for the is_action_other field.
     * @var        boolean
     */
    protected $is_action_other;

    /**
     * The value for the relocated_location field.
     * @var        string
     */
    protected $relocated_location;

    /**
     * The value for the volunteer_id field.
     * @var        int
     */
    protected $volunteer_id;

    /**
     * The value for the investigation_nutritional_condition field.
     * @var        string
     */
    protected $investigation_nutritional_condition;

    /**
     * The value for the investigation_age_class field.
     * @var        string
     */
    protected $investigation_age_class;

    /**
     * The value for the live_animals_comments field.
     * @var        string
     */
    protected $live_animals_comments;

    /**
     * @var        Volunteer
     */
    protected $aVolunteer;

    /**
     * @var        PropelObjectCollection|ReportComments[] Collection to store aggregation of ReportComments objects.
     */
    protected $collReportCommentss;
    protected $collReportCommentssPartial;

    /**
     * @var        PropelObjectCollection|ReportHumanInteractionSection[] Collection to store aggregation of ReportHumanInteractionSection objects.
     */
    protected $collReportHumanInteractionSections;
    protected $collReportHumanInteractionSectionsPartial;

    /**
     * @var        PropelObjectCollection|Attachment[] Collection to store aggregation of Attachment objects.
     */
    protected $collAttachments;
    protected $collAttachmentsPartial;

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
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $reportCommentssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $reportHumanInteractionSectionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $attachmentsScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     * id
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [responder] column value.
     *
     * @return string
     */
    public function getResponder()
    {

        return $this->responder;
    }

    /**
     * Get the [optionally formatted] temporal [call_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCallDate($format = 'Y-m-d H:i:s')
    {
        if ($this->call_date === null) {
            return null;
        }

        if ($this->call_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->call_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->call_date, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [call_from] column value.
     *
     * @return string
     */
    public function getCallFrom()
    {

        return $this->call_from;
    }

    /**
     * Get the [caller_name] column value.
     *
     * @return string
     */
    public function getCallerName()
    {

        return $this->caller_name;
    }

    /**
     * Get the [caller_phone_number] column value.
     *
     * @return string
     */
    public function getCallerPhoneNumber()
    {

        return $this->caller_phone_number;
    }

    /**
     * Get the [call_location] column value.
     *
     * @return string
     */
    public function getCallLocation()
    {

        return $this->call_location;
    }

    /**
     * Get the [call_species] column value.
     *
     * @return string
     */
    public function getCallSpecies()
    {

        return $this->call_species;
    }

    /**
     * Get the [when_first_seen] column value.
     *
     * @return string
     */
    public function getWhenFirstSeen()
    {

        return $this->when_first_seen;
    }

    /**
     * Get the [call_comments] column value.
     *
     * @return string
     */
    public function getCallComments()
    {

        return $this->call_comments;
    }

    /**
     * Get the [call_referred_to] column value.
     *
     * @return string
     */
    public function getCallReferredTo()
    {

        return $this->call_referred_to;
    }

    /**
     * Get the [call_condition] column value.
     *
     * @return string
     */
    public function getCallCondition()
    {

        return $this->call_condition;
    }

    /**
     * Get the [investigator_support] column value.
     *
     * @return string
     */
    public function getInvestigatorSupport()
    {

        return $this->investigator_support;
    }

    /**
     * Get the [optionally formatted] temporal [investigation_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getInvestigationDate($format = 'Y-m-d H:i:s')
    {
        if ($this->investigation_date === null) {
            return null;
        }

        if ($this->investigation_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->investigation_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->investigation_date, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [investigation_lat_location] column value.
     *
     * @return string
     */
    public function getInvestigationLatLocation()
    {

        return $this->investigation_lat_location;
    }

    /**
     * Get the [investigation_lon_location] column value.
     *
     * @return string
     */
    public function getInvestigationLonLocation()
    {

        return $this->investigation_lon_location;
    }

    /**
     * Get the [investigation_location_accuracy] column value.
     *
     * @return string
     */
    public function getInvestigationLocationAccuracy()
    {

        return $this->investigation_location_accuracy;
    }

    /**
     * Get the [investigation_physical_location] column value.
     *
     * @return string
     */
    public function getInvestigationPhysicalLocation()
    {

        return $this->investigation_physical_location;
    }

    /**
     * Get the [investigation_species] column value.
     *
     * @return string
     */
    public function getInvestigationSpecies()
    {

        return $this->investigation_species;
    }

    /**
     * Get the [animal_not_found] column value.
     *
     * @return boolean
     */
    public function getAnimalNotFound()
    {

        return $this->animal_not_found;
    }

    /**
     * Get the [investigation_condition] column value.
     *
     * @return string
     */
    public function getInvestigationCondition()
    {

        return $this->investigation_condition;
    }

    /**
     * Get the [tags] column value.
     *
     * @return string
     */
    public function getTags()
    {

        return $this->tags;
    }

    /**
     * Get the [disposition] column value.
     *
     * @return string
     */
    public function getDisposition()
    {

        return $this->disposition;
    }

    /**
     * Get the [seal_pickup] column value.
     *
     * @return string
     */
    public function getSealPickup()
    {

        return $this->seal_pickup;
    }

    /**
     * Get the [sex] column value.
     *
     * @return string
     */
    public function getSex()
    {

        return $this->sex;
    }

    /**
     * Get the [weight] column value.
     *
     * @return double
     */
    public function getWeight()
    {

        return $this->weight;
    }

    /**
     * Get the [straight_length] column value.
     *
     * @return double
     */
    public function getStraightLength()
    {

        return $this->straight_length;
    }

    /**
     * Get the [contour_length] column value.
     *
     * @return double
     */
    public function getContourLength()
    {

        return $this->contour_length;
    }

    /**
     * Get the [girth] column value.
     *
     * @return double
     */
    public function getGirth()
    {

        return $this->girth;
    }

    /**
     * Get the [investigation_comments] column value.
     *
     * @return string
     */
    public function getInvestigationComments()
    {

        return $this->investigation_comments;
    }

    /**
     * Get the [is_photo_taken] column value.
     *
     * @return boolean
     */
    public function getIsPhotoTaken()
    {

        return $this->is_photo_taken;
    }

    /**
     * Get the [is_con_sick] column value.
     *
     * @return boolean
     */
    public function getIsConSick()
    {

        return $this->is_con_sick;
    }

    /**
     * Get the [is_con_injured] column value.
     *
     * @return boolean
     */
    public function getIsConInjured()
    {

        return $this->is_con_injured;
    }

    /**
     * Get the [is_con_out_of_habitat] column value.
     *
     * @return boolean
     */
    public function getIsConOutOfHabitat()
    {

        return $this->is_con_out_of_habitat;
    }

    /**
     * Get the [is_con_deemed_releasable] column value.
     *
     * @return boolean
     */
    public function getIsConDeemedReleasable()
    {

        return $this->is_con_deemed_releasable;
    }

    /**
     * Get the [is_con_abandoned] column value.
     *
     * @return boolean
     */
    public function getIsConAbandoned()
    {

        return $this->is_con_abandoned;
    }

    /**
     * Get the [is_con_inaccessible] column value.
     *
     * @return boolean
     */
    public function getIsConInaccessible()
    {

        return $this->is_con_inaccessible;
    }

    /**
     * Get the [is_con_location_hazard_to_animal] column value.
     *
     * @return boolean
     */
    public function getIsConLocationHazardToAnimal()
    {

        return $this->is_con_location_hazard_to_animal;
    }

    /**
     * Get the [is_con_location_hazard_to_humans] column value.
     *
     * @return boolean
     */
    public function getIsConLocationHazardToHumans()
    {

        return $this->is_con_location_hazard_to_humans;
    }

    /**
     * Get the [is_con_unknown] column value.
     *
     * @return boolean
     */
    public function getIsConUnknown()
    {

        return $this->is_con_unknown;
    }

    /**
     * Get the [is_con_other] column value.
     *
     * @return boolean
     */
    public function getIsConOther()
    {

        return $this->is_con_other;
    }

    /**
     * Get the [is_action_left_at_site] column value.
     *
     * @return boolean
     */
    public function getIsActionLeftAtSite()
    {

        return $this->is_action_left_at_site;
    }

    /**
     * Get the [is_action_immediate_release_at_site] column value.
     *
     * @return boolean
     */
    public function getIsActionImmediateReleaseAtSite()
    {

        return $this->is_action_immediate_release_at_site;
    }

    /**
     * Get the [is_action_relocated] column value.
     *
     * @return boolean
     */
    public function getIsActionRelocated()
    {

        return $this->is_action_relocated;
    }

    /**
     * Get the [is_action_died_at_site] column value.
     *
     * @return boolean
     */
    public function getIsActionDiedAtSite()
    {

        return $this->is_action_died_at_site;
    }

    /**
     * Get the [is_action_died_during_transport] column value.
     *
     * @return boolean
     */
    public function getIsActionDiedDuringTransport()
    {

        return $this->is_action_died_during_transport;
    }

    /**
     * Get the [is_action_euthanized_at_site] column value.
     *
     * @return boolean
     */
    public function getIsActionEuthanizedAtSite()
    {

        return $this->is_action_euthanized_at_site;
    }

    /**
     * Get the [is_action_euthanized_during_transport] column value.
     *
     * @return boolean
     */
    public function getIsActionEuthanizedDuringTransport()
    {

        return $this->is_action_euthanized_during_transport;
    }

    /**
     * Get the [is_action_transferred_to_rehab] column value.
     *
     * @return boolean
     */
    public function getIsActionTransferredToRehab()
    {

        return $this->is_action_transferred_to_rehab;
    }

    /**
     * Get the [is_action_other] column value.
     *
     * @return boolean
     */
    public function getIsActionOther()
    {

        return $this->is_action_other;
    }

    /**
     * Get the [relocated_location] column value.
     * a description of the relocated location
     * @return string
     */
    public function getRelocatedLocation()
    {

        return $this->relocated_location;
    }

    /**
     * Get the [volunteer_id] column value.
     *
     * @return int
     */
    public function getVolunteerId()
    {

        return $this->volunteer_id;
    }

    /**
     * Get the [investigation_nutritional_condition] column value.
     *
     * @return string
     */
    public function getInvestigationNutritionalCondition()
    {

        return $this->investigation_nutritional_condition;
    }

    /**
     * Get the [investigation_age_class] column value.
     *
     * @return string
     */
    public function getInvestigationAgeClass()
    {

        return $this->investigation_age_class;
    }

    /**
     * Get the [live_animals_comments] column value.
     *
     * @return string
     */
    public function getLiveAnimalsComments()
    {

        return $this->live_animals_comments;
    }

    /**
     * Set the value of [id] column.
     * id
     * @param  int $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Report The current object (for fluent API support)
     */
    public function setCallDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->call_date !== null || $dt !== null) {
            $currentDateAsString = ($this->call_date !== null && $tmpDt = new DateTime($this->call_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->call_date = $newDateAsString;
                $this->modifiedColumns[] = ReportPeer::CALL_DATE;
            }
        } // if either are not null


        return $this;
    } // setCallDate()

    /**
     * Set the value of [call_from] column.
     *
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Report The current object (for fluent API support)
     */
    public function setInvestigationDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->investigation_date !== null || $dt !== null) {
            $currentDateAsString = ($this->investigation_date !== null && $tmpDt = new DateTime($this->investigation_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->investigation_date = $newDateAsString;
                $this->modifiedColumns[] = ReportPeer::INVESTIGATION_DATE;
            }
        } // if either are not null


        return $this;
    } // setInvestigationDate()

    /**
     * Set the value of [investigation_lat_location] column.
     *
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setInvestigationLatLocation($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->investigation_lat_location !== $v) {
            $this->investigation_lat_location = $v;
            $this->modifiedColumns[] = ReportPeer::INVESTIGATION_LAT_LOCATION;
        }


        return $this;
    } // setInvestigationLatLocation()

    /**
     * Set the value of [investigation_lon_location] column.
     *
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setInvestigationLonLocation($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->investigation_lon_location !== $v) {
            $this->investigation_lon_location = $v;
            $this->modifiedColumns[] = ReportPeer::INVESTIGATION_LON_LOCATION;
        }


        return $this;
    } // setInvestigationLonLocation()

    /**
     * Set the value of [investigation_location_accuracy] column.
     *
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setInvestigationLocationAccuracy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->investigation_location_accuracy !== $v) {
            $this->investigation_location_accuracy = $v;
            $this->modifiedColumns[] = ReportPeer::INVESTIGATION_LOCATION_ACCURACY;
        }


        return $this;
    } // setInvestigationLocationAccuracy()

    /**
     * Set the value of [investigation_physical_location] column.
     *
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * Sets the value of the [animal_not_found] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setAnimalNotFound($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * @param  double $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setWeight($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  double $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setStraightLength($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  double $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setContourLength($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  double $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setGirth($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
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
     * Sets the value of the [is_photo_taken] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsPhotoTaken($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_photo_taken !== $v) {
            $this->is_photo_taken = $v;
            $this->modifiedColumns[] = ReportPeer::IS_PHOTO_TAKEN;
        }


        return $this;
    } // setIsPhotoTaken()

    /**
     * Sets the value of the [is_con_sick] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsConSick($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_con_sick !== $v) {
            $this->is_con_sick = $v;
            $this->modifiedColumns[] = ReportPeer::IS_CON_SICK;
        }


        return $this;
    } // setIsConSick()

    /**
     * Sets the value of the [is_con_injured] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsConInjured($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_con_injured !== $v) {
            $this->is_con_injured = $v;
            $this->modifiedColumns[] = ReportPeer::IS_CON_INJURED;
        }


        return $this;
    } // setIsConInjured()

    /**
     * Sets the value of the [is_con_out_of_habitat] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsConOutOfHabitat($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_con_out_of_habitat !== $v) {
            $this->is_con_out_of_habitat = $v;
            $this->modifiedColumns[] = ReportPeer::IS_CON_OUT_OF_HABITAT;
        }


        return $this;
    } // setIsConOutOfHabitat()

    /**
     * Sets the value of the [is_con_deemed_releasable] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsConDeemedReleasable($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_con_deemed_releasable !== $v) {
            $this->is_con_deemed_releasable = $v;
            $this->modifiedColumns[] = ReportPeer::IS_CON_DEEMED_RELEASABLE;
        }


        return $this;
    } // setIsConDeemedReleasable()

    /**
     * Sets the value of the [is_con_abandoned] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsConAbandoned($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_con_abandoned !== $v) {
            $this->is_con_abandoned = $v;
            $this->modifiedColumns[] = ReportPeer::IS_CON_ABANDONED;
        }


        return $this;
    } // setIsConAbandoned()

    /**
     * Sets the value of the [is_con_inaccessible] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsConInaccessible($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_con_inaccessible !== $v) {
            $this->is_con_inaccessible = $v;
            $this->modifiedColumns[] = ReportPeer::IS_CON_INACCESSIBLE;
        }


        return $this;
    } // setIsConInaccessible()

    /**
     * Sets the value of the [is_con_location_hazard_to_animal] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsConLocationHazardToAnimal($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_con_location_hazard_to_animal !== $v) {
            $this->is_con_location_hazard_to_animal = $v;
            $this->modifiedColumns[] = ReportPeer::IS_CON_LOCATION_HAZARD_TO_ANIMAL;
        }


        return $this;
    } // setIsConLocationHazardToAnimal()

    /**
     * Sets the value of the [is_con_location_hazard_to_humans] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsConLocationHazardToHumans($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_con_location_hazard_to_humans !== $v) {
            $this->is_con_location_hazard_to_humans = $v;
            $this->modifiedColumns[] = ReportPeer::IS_CON_LOCATION_HAZARD_TO_HUMANS;
        }


        return $this;
    } // setIsConLocationHazardToHumans()

    /**
     * Sets the value of the [is_con_unknown] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsConUnknown($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_con_unknown !== $v) {
            $this->is_con_unknown = $v;
            $this->modifiedColumns[] = ReportPeer::IS_CON_UNKNOWN;
        }


        return $this;
    } // setIsConUnknown()

    /**
     * Sets the value of the [is_con_other] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsConOther($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_con_other !== $v) {
            $this->is_con_other = $v;
            $this->modifiedColumns[] = ReportPeer::IS_CON_OTHER;
        }


        return $this;
    } // setIsConOther()

    /**
     * Sets the value of the [is_action_left_at_site] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsActionLeftAtSite($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_action_left_at_site !== $v) {
            $this->is_action_left_at_site = $v;
            $this->modifiedColumns[] = ReportPeer::IS_ACTION_LEFT_AT_SITE;
        }


        return $this;
    } // setIsActionLeftAtSite()

    /**
     * Sets the value of the [is_action_immediate_release_at_site] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsActionImmediateReleaseAtSite($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_action_immediate_release_at_site !== $v) {
            $this->is_action_immediate_release_at_site = $v;
            $this->modifiedColumns[] = ReportPeer::IS_ACTION_IMMEDIATE_RELEASE_AT_SITE;
        }


        return $this;
    } // setIsActionImmediateReleaseAtSite()

    /**
     * Sets the value of the [is_action_relocated] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsActionRelocated($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_action_relocated !== $v) {
            $this->is_action_relocated = $v;
            $this->modifiedColumns[] = ReportPeer::IS_ACTION_RELOCATED;
        }


        return $this;
    } // setIsActionRelocated()

    /**
     * Sets the value of the [is_action_died_at_site] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsActionDiedAtSite($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_action_died_at_site !== $v) {
            $this->is_action_died_at_site = $v;
            $this->modifiedColumns[] = ReportPeer::IS_ACTION_DIED_AT_SITE;
        }


        return $this;
    } // setIsActionDiedAtSite()

    /**
     * Sets the value of the [is_action_died_during_transport] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsActionDiedDuringTransport($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_action_died_during_transport !== $v) {
            $this->is_action_died_during_transport = $v;
            $this->modifiedColumns[] = ReportPeer::IS_ACTION_DIED_DURING_TRANSPORT;
        }


        return $this;
    } // setIsActionDiedDuringTransport()

    /**
     * Sets the value of the [is_action_euthanized_at_site] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsActionEuthanizedAtSite($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_action_euthanized_at_site !== $v) {
            $this->is_action_euthanized_at_site = $v;
            $this->modifiedColumns[] = ReportPeer::IS_ACTION_EUTHANIZED_AT_SITE;
        }


        return $this;
    } // setIsActionEuthanizedAtSite()

    /**
     * Sets the value of the [is_action_euthanized_during_transport] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsActionEuthanizedDuringTransport($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_action_euthanized_during_transport !== $v) {
            $this->is_action_euthanized_during_transport = $v;
            $this->modifiedColumns[] = ReportPeer::IS_ACTION_EUTHANIZED_DURING_TRANSPORT;
        }


        return $this;
    } // setIsActionEuthanizedDuringTransport()

    /**
     * Sets the value of the [is_action_transferred_to_rehab] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsActionTransferredToRehab($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_action_transferred_to_rehab !== $v) {
            $this->is_action_transferred_to_rehab = $v;
            $this->modifiedColumns[] = ReportPeer::IS_ACTION_TRANSFERRED_TO_REHAB;
        }


        return $this;
    } // setIsActionTransferredToRehab()

    /**
     * Sets the value of the [is_action_other] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Report The current object (for fluent API support)
     */
    public function setIsActionOther($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_action_other !== $v) {
            $this->is_action_other = $v;
            $this->modifiedColumns[] = ReportPeer::IS_ACTION_OTHER;
        }


        return $this;
    } // setIsActionOther()

    /**
     * Set the value of [relocated_location] column.
     * a description of the relocated location
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setRelocatedLocation($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->relocated_location !== $v) {
            $this->relocated_location = $v;
            $this->modifiedColumns[] = ReportPeer::RELOCATED_LOCATION;
        }


        return $this;
    } // setRelocatedLocation()

    /**
     * Set the value of [volunteer_id] column.
     *
     * @param  int $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setVolunteerId($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * Set the value of [investigation_nutritional_condition] column.
     *
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setInvestigationNutritionalCondition($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->investigation_nutritional_condition !== $v) {
            $this->investigation_nutritional_condition = $v;
            $this->modifiedColumns[] = ReportPeer::INVESTIGATION_NUTRITIONAL_CONDITION;
        }


        return $this;
    } // setInvestigationNutritionalCondition()

    /**
     * Set the value of [investigation_age_class] column.
     *
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setInvestigationAgeClass($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->investigation_age_class !== $v) {
            $this->investigation_age_class = $v;
            $this->modifiedColumns[] = ReportPeer::INVESTIGATION_AGE_CLASS;
        }


        return $this;
    } // setInvestigationAgeClass()

    /**
     * Set the value of [live_animals_comments] column.
     *
     * @param  string $v new value
     * @return Report The current object (for fluent API support)
     */
    public function setLiveAnimalsComments($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->live_animals_comments !== $v) {
            $this->live_animals_comments = $v;
            $this->modifiedColumns[] = ReportPeer::LIVE_ANIMALS_COMMENTS;
        }


        return $this;
    } // setLiveAnimalsComments()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
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
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
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
            $this->investigation_lat_location = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->investigation_lon_location = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->investigation_location_accuracy = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->investigation_physical_location = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->investigation_species = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->animal_not_found = ($row[$startcol + 19] !== null) ? (boolean) $row[$startcol + 19] : null;
            $this->investigation_condition = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->tags = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->disposition = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->seal_pickup = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->sex = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->weight = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->straight_length = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->contour_length = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->girth = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->investigation_comments = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->is_photo_taken = ($row[$startcol + 30] !== null) ? (boolean) $row[$startcol + 30] : null;
            $this->is_con_sick = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
            $this->is_con_injured = ($row[$startcol + 32] !== null) ? (boolean) $row[$startcol + 32] : null;
            $this->is_con_out_of_habitat = ($row[$startcol + 33] !== null) ? (boolean) $row[$startcol + 33] : null;
            $this->is_con_deemed_releasable = ($row[$startcol + 34] !== null) ? (boolean) $row[$startcol + 34] : null;
            $this->is_con_abandoned = ($row[$startcol + 35] !== null) ? (boolean) $row[$startcol + 35] : null;
            $this->is_con_inaccessible = ($row[$startcol + 36] !== null) ? (boolean) $row[$startcol + 36] : null;
            $this->is_con_location_hazard_to_animal = ($row[$startcol + 37] !== null) ? (boolean) $row[$startcol + 37] : null;
            $this->is_con_location_hazard_to_humans = ($row[$startcol + 38] !== null) ? (boolean) $row[$startcol + 38] : null;
            $this->is_con_unknown = ($row[$startcol + 39] !== null) ? (boolean) $row[$startcol + 39] : null;
            $this->is_con_other = ($row[$startcol + 40] !== null) ? (boolean) $row[$startcol + 40] : null;
            $this->is_action_left_at_site = ($row[$startcol + 41] !== null) ? (boolean) $row[$startcol + 41] : null;
            $this->is_action_immediate_release_at_site = ($row[$startcol + 42] !== null) ? (boolean) $row[$startcol + 42] : null;
            $this->is_action_relocated = ($row[$startcol + 43] !== null) ? (boolean) $row[$startcol + 43] : null;
            $this->is_action_died_at_site = ($row[$startcol + 44] !== null) ? (boolean) $row[$startcol + 44] : null;
            $this->is_action_died_during_transport = ($row[$startcol + 45] !== null) ? (boolean) $row[$startcol + 45] : null;
            $this->is_action_euthanized_at_site = ($row[$startcol + 46] !== null) ? (boolean) $row[$startcol + 46] : null;
            $this->is_action_euthanized_during_transport = ($row[$startcol + 47] !== null) ? (boolean) $row[$startcol + 47] : null;
            $this->is_action_transferred_to_rehab = ($row[$startcol + 48] !== null) ? (boolean) $row[$startcol + 48] : null;
            $this->is_action_other = ($row[$startcol + 49] !== null) ? (boolean) $row[$startcol + 49] : null;
            $this->relocated_location = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->volunteer_id = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->investigation_nutritional_condition = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->investigation_age_class = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->live_animals_comments = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 55; // 55 = ReportPeer::NUM_HYDRATE_COLUMNS.

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
     * @throws PropelException
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
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
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

            $this->collReportHumanInteractionSections = null;

            $this->collAttachments = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
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
            $deleteQuery = ReportQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
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
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
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
        } catch (Exception $e) {
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
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aVolunteer !== null) {
                if ($this->aVolunteer->isModified() || $this->aVolunteer->isNew()) {
                    $affectedRows += $this->aVolunteer->save($con);
                }
                $this->setVolunteer($this->aVolunteer);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->reportCommentssScheduledForDeletion !== null) {
                if (!$this->reportCommentssScheduledForDeletion->isEmpty()) {
                    ReportCommentsQuery::create()
                        ->filterByPrimaryKeys($this->reportCommentssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->reportCommentssScheduledForDeletion = null;
                }
            }

            if ($this->collReportCommentss !== null) {
                foreach ($this->collReportCommentss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->reportHumanInteractionSectionsScheduledForDeletion !== null) {
                if (!$this->reportHumanInteractionSectionsScheduledForDeletion->isEmpty()) {
                    ReportHumanInteractionSectionQuery::create()
                        ->filterByPrimaryKeys($this->reportHumanInteractionSectionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->reportHumanInteractionSectionsScheduledForDeletion = null;
                }
            }

            if ($this->collReportHumanInteractionSections !== null) {
                foreach ($this->collReportHumanInteractionSections as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->attachmentsScheduledForDeletion !== null) {
                if (!$this->attachmentsScheduledForDeletion->isEmpty()) {
                    AttachmentQuery::create()
                        ->filterByPrimaryKeys($this->attachmentsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->attachmentsScheduledForDeletion = null;
                }
            }

            if ($this->collAttachments !== null) {
                foreach ($this->collAttachments as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ReportPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ReportPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ReportPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(ReportPeer::RESPONDER)) {
            $modifiedColumns[':p' . $index++]  = '`responder`';
        }
        if ($this->isColumnModified(ReportPeer::CALL_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`call_date`';
        }
        if ($this->isColumnModified(ReportPeer::CALL_FROM)) {
            $modifiedColumns[':p' . $index++]  = '`call_from`';
        }
        if ($this->isColumnModified(ReportPeer::CALLER_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`caller_name`';
        }
        if ($this->isColumnModified(ReportPeer::CALLER_PHONE_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`caller_phone_number`';
        }
        if ($this->isColumnModified(ReportPeer::CALL_LOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`call_location`';
        }
        if ($this->isColumnModified(ReportPeer::CALL_SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`call_species`';
        }
        if ($this->isColumnModified(ReportPeer::WHEN_FIRST_SEEN)) {
            $modifiedColumns[':p' . $index++]  = '`when_first_seen`';
        }
        if ($this->isColumnModified(ReportPeer::CALL_COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`call_comments`';
        }
        if ($this->isColumnModified(ReportPeer::CALL_REFERRED_TO)) {
            $modifiedColumns[':p' . $index++]  = '`call_referred_to`';
        }
        if ($this->isColumnModified(ReportPeer::CALL_CONDITION)) {
            $modifiedColumns[':p' . $index++]  = '`call_condition`';
        }
        if ($this->isColumnModified(ReportPeer::INVESTIGATOR_SUPPORT)) {
            $modifiedColumns[':p' . $index++]  = '`investigator_support`';
        }
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`investigation_date`';
        }
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_LAT_LOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`investigation_lat_location`';
        }
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_LON_LOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`investigation_lon_location`';
        }
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_LOCATION_ACCURACY)) {
            $modifiedColumns[':p' . $index++]  = '`investigation_location_accuracy`';
        }
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_PHYSICAL_LOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`investigation_physical_location`';
        }
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`investigation_species`';
        }
        if ($this->isColumnModified(ReportPeer::ANIMAL_NOT_FOUND)) {
            $modifiedColumns[':p' . $index++]  = '`animal_not_found`';
        }
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_CONDITION)) {
            $modifiedColumns[':p' . $index++]  = '`investigation_condition`';
        }
        if ($this->isColumnModified(ReportPeer::TAGS)) {
            $modifiedColumns[':p' . $index++]  = '`tags`';
        }
        if ($this->isColumnModified(ReportPeer::DISPOSITION)) {
            $modifiedColumns[':p' . $index++]  = '`disposition`';
        }
        if ($this->isColumnModified(ReportPeer::SEAL_PICKUP)) {
            $modifiedColumns[':p' . $index++]  = '`seal_pickup`';
        }
        if ($this->isColumnModified(ReportPeer::SEX)) {
            $modifiedColumns[':p' . $index++]  = '`sex`';
        }
        if ($this->isColumnModified(ReportPeer::WEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`weight`';
        }
        if ($this->isColumnModified(ReportPeer::STRAIGHT_LENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`straight_length`';
        }
        if ($this->isColumnModified(ReportPeer::CONTOUR_LENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`contour_length`';
        }
        if ($this->isColumnModified(ReportPeer::GIRTH)) {
            $modifiedColumns[':p' . $index++]  = '`girth`';
        }
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`investigation_comments`';
        }
        if ($this->isColumnModified(ReportPeer::IS_PHOTO_TAKEN)) {
            $modifiedColumns[':p' . $index++]  = '`is_photo_taken`';
        }
        if ($this->isColumnModified(ReportPeer::IS_CON_SICK)) {
            $modifiedColumns[':p' . $index++]  = '`is_con_sick`';
        }
        if ($this->isColumnModified(ReportPeer::IS_CON_INJURED)) {
            $modifiedColumns[':p' . $index++]  = '`is_con_injured`';
        }
        if ($this->isColumnModified(ReportPeer::IS_CON_OUT_OF_HABITAT)) {
            $modifiedColumns[':p' . $index++]  = '`is_con_out_of_habitat`';
        }
        if ($this->isColumnModified(ReportPeer::IS_CON_DEEMED_RELEASABLE)) {
            $modifiedColumns[':p' . $index++]  = '`is_con_deemed_releasable`';
        }
        if ($this->isColumnModified(ReportPeer::IS_CON_ABANDONED)) {
            $modifiedColumns[':p' . $index++]  = '`is_con_abandoned`';
        }
        if ($this->isColumnModified(ReportPeer::IS_CON_INACCESSIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`is_con_inaccessible`';
        }
        if ($this->isColumnModified(ReportPeer::IS_CON_LOCATION_HAZARD_TO_ANIMAL)) {
            $modifiedColumns[':p' . $index++]  = '`is_con_location_hazard_to_animal`';
        }
        if ($this->isColumnModified(ReportPeer::IS_CON_LOCATION_HAZARD_TO_HUMANS)) {
            $modifiedColumns[':p' . $index++]  = '`is_con_location_hazard_to_humans`';
        }
        if ($this->isColumnModified(ReportPeer::IS_CON_UNKNOWN)) {
            $modifiedColumns[':p' . $index++]  = '`is_con_unknown`';
        }
        if ($this->isColumnModified(ReportPeer::IS_CON_OTHER)) {
            $modifiedColumns[':p' . $index++]  = '`is_con_other`';
        }
        if ($this->isColumnModified(ReportPeer::IS_ACTION_LEFT_AT_SITE)) {
            $modifiedColumns[':p' . $index++]  = '`is_action_left_at_site`';
        }
        if ($this->isColumnModified(ReportPeer::IS_ACTION_IMMEDIATE_RELEASE_AT_SITE)) {
            $modifiedColumns[':p' . $index++]  = '`is_action_immediate_release_at_site`';
        }
        if ($this->isColumnModified(ReportPeer::IS_ACTION_RELOCATED)) {
            $modifiedColumns[':p' . $index++]  = '`is_action_relocated`';
        }
        if ($this->isColumnModified(ReportPeer::IS_ACTION_DIED_AT_SITE)) {
            $modifiedColumns[':p' . $index++]  = '`is_action_died_at_site`';
        }
        if ($this->isColumnModified(ReportPeer::IS_ACTION_DIED_DURING_TRANSPORT)) {
            $modifiedColumns[':p' . $index++]  = '`is_action_died_during_transport`';
        }
        if ($this->isColumnModified(ReportPeer::IS_ACTION_EUTHANIZED_AT_SITE)) {
            $modifiedColumns[':p' . $index++]  = '`is_action_euthanized_at_site`';
        }
        if ($this->isColumnModified(ReportPeer::IS_ACTION_EUTHANIZED_DURING_TRANSPORT)) {
            $modifiedColumns[':p' . $index++]  = '`is_action_euthanized_during_transport`';
        }
        if ($this->isColumnModified(ReportPeer::IS_ACTION_TRANSFERRED_TO_REHAB)) {
            $modifiedColumns[':p' . $index++]  = '`is_action_transferred_to_rehab`';
        }
        if ($this->isColumnModified(ReportPeer::IS_ACTION_OTHER)) {
            $modifiedColumns[':p' . $index++]  = '`is_action_other`';
        }
        if ($this->isColumnModified(ReportPeer::RELOCATED_LOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`relocated_location`';
        }
        if ($this->isColumnModified(ReportPeer::VOLUNTEER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`volunteer_id`';
        }
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_NUTRITIONAL_CONDITION)) {
            $modifiedColumns[':p' . $index++]  = '`investigation_nutritional_condition`';
        }
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_AGE_CLASS)) {
            $modifiedColumns[':p' . $index++]  = '`investigation_age_class`';
        }
        if ($this->isColumnModified(ReportPeer::LIVE_ANIMALS_COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`live_animals_comments`';
        }

        $sql = sprintf(
            'INSERT INTO `report` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`responder`':
                        $stmt->bindValue($identifier, $this->responder, PDO::PARAM_STR);
                        break;
                    case '`call_date`':
                        $stmt->bindValue($identifier, $this->call_date, PDO::PARAM_STR);
                        break;
                    case '`call_from`':
                        $stmt->bindValue($identifier, $this->call_from, PDO::PARAM_STR);
                        break;
                    case '`caller_name`':
                        $stmt->bindValue($identifier, $this->caller_name, PDO::PARAM_STR);
                        break;
                    case '`caller_phone_number`':
                        $stmt->bindValue($identifier, $this->caller_phone_number, PDO::PARAM_STR);
                        break;
                    case '`call_location`':
                        $stmt->bindValue($identifier, $this->call_location, PDO::PARAM_STR);
                        break;
                    case '`call_species`':
                        $stmt->bindValue($identifier, $this->call_species, PDO::PARAM_STR);
                        break;
                    case '`when_first_seen`':
                        $stmt->bindValue($identifier, $this->when_first_seen, PDO::PARAM_STR);
                        break;
                    case '`call_comments`':
                        $stmt->bindValue($identifier, $this->call_comments, PDO::PARAM_STR);
                        break;
                    case '`call_referred_to`':
                        $stmt->bindValue($identifier, $this->call_referred_to, PDO::PARAM_STR);
                        break;
                    case '`call_condition`':
                        $stmt->bindValue($identifier, $this->call_condition, PDO::PARAM_STR);
                        break;
                    case '`investigator_support`':
                        $stmt->bindValue($identifier, $this->investigator_support, PDO::PARAM_STR);
                        break;
                    case '`investigation_date`':
                        $stmt->bindValue($identifier, $this->investigation_date, PDO::PARAM_STR);
                        break;
                    case '`investigation_lat_location`':
                        $stmt->bindValue($identifier, $this->investigation_lat_location, PDO::PARAM_STR);
                        break;
                    case '`investigation_lon_location`':
                        $stmt->bindValue($identifier, $this->investigation_lon_location, PDO::PARAM_STR);
                        break;
                    case '`investigation_location_accuracy`':
                        $stmt->bindValue($identifier, $this->investigation_location_accuracy, PDO::PARAM_STR);
                        break;
                    case '`investigation_physical_location`':
                        $stmt->bindValue($identifier, $this->investigation_physical_location, PDO::PARAM_STR);
                        break;
                    case '`investigation_species`':
                        $stmt->bindValue($identifier, $this->investigation_species, PDO::PARAM_STR);
                        break;
                    case '`animal_not_found`':
                        $stmt->bindValue($identifier, (int) $this->animal_not_found, PDO::PARAM_INT);
                        break;
                    case '`investigation_condition`':
                        $stmt->bindValue($identifier, $this->investigation_condition, PDO::PARAM_STR);
                        break;
                    case '`tags`':
                        $stmt->bindValue($identifier, $this->tags, PDO::PARAM_STR);
                        break;
                    case '`disposition`':
                        $stmt->bindValue($identifier, $this->disposition, PDO::PARAM_STR);
                        break;
                    case '`seal_pickup`':
                        $stmt->bindValue($identifier, $this->seal_pickup, PDO::PARAM_STR);
                        break;
                    case '`sex`':
                        $stmt->bindValue($identifier, $this->sex, PDO::PARAM_STR);
                        break;
                    case '`weight`':
                        $stmt->bindValue($identifier, $this->weight, PDO::PARAM_STR);
                        break;
                    case '`straight_length`':
                        $stmt->bindValue($identifier, $this->straight_length, PDO::PARAM_STR);
                        break;
                    case '`contour_length`':
                        $stmt->bindValue($identifier, $this->contour_length, PDO::PARAM_STR);
                        break;
                    case '`girth`':
                        $stmt->bindValue($identifier, $this->girth, PDO::PARAM_STR);
                        break;
                    case '`investigation_comments`':
                        $stmt->bindValue($identifier, $this->investigation_comments, PDO::PARAM_STR);
                        break;
                    case '`is_photo_taken`':
                        $stmt->bindValue($identifier, (int) $this->is_photo_taken, PDO::PARAM_INT);
                        break;
                    case '`is_con_sick`':
                        $stmt->bindValue($identifier, (int) $this->is_con_sick, PDO::PARAM_INT);
                        break;
                    case '`is_con_injured`':
                        $stmt->bindValue($identifier, (int) $this->is_con_injured, PDO::PARAM_INT);
                        break;
                    case '`is_con_out_of_habitat`':
                        $stmt->bindValue($identifier, (int) $this->is_con_out_of_habitat, PDO::PARAM_INT);
                        break;
                    case '`is_con_deemed_releasable`':
                        $stmt->bindValue($identifier, (int) $this->is_con_deemed_releasable, PDO::PARAM_INT);
                        break;
                    case '`is_con_abandoned`':
                        $stmt->bindValue($identifier, (int) $this->is_con_abandoned, PDO::PARAM_INT);
                        break;
                    case '`is_con_inaccessible`':
                        $stmt->bindValue($identifier, (int) $this->is_con_inaccessible, PDO::PARAM_INT);
                        break;
                    case '`is_con_location_hazard_to_animal`':
                        $stmt->bindValue($identifier, (int) $this->is_con_location_hazard_to_animal, PDO::PARAM_INT);
                        break;
                    case '`is_con_location_hazard_to_humans`':
                        $stmt->bindValue($identifier, (int) $this->is_con_location_hazard_to_humans, PDO::PARAM_INT);
                        break;
                    case '`is_con_unknown`':
                        $stmt->bindValue($identifier, (int) $this->is_con_unknown, PDO::PARAM_INT);
                        break;
                    case '`is_con_other`':
                        $stmt->bindValue($identifier, (int) $this->is_con_other, PDO::PARAM_INT);
                        break;
                    case '`is_action_left_at_site`':
                        $stmt->bindValue($identifier, (int) $this->is_action_left_at_site, PDO::PARAM_INT);
                        break;
                    case '`is_action_immediate_release_at_site`':
                        $stmt->bindValue($identifier, (int) $this->is_action_immediate_release_at_site, PDO::PARAM_INT);
                        break;
                    case '`is_action_relocated`':
                        $stmt->bindValue($identifier, (int) $this->is_action_relocated, PDO::PARAM_INT);
                        break;
                    case '`is_action_died_at_site`':
                        $stmt->bindValue($identifier, (int) $this->is_action_died_at_site, PDO::PARAM_INT);
                        break;
                    case '`is_action_died_during_transport`':
                        $stmt->bindValue($identifier, (int) $this->is_action_died_during_transport, PDO::PARAM_INT);
                        break;
                    case '`is_action_euthanized_at_site`':
                        $stmt->bindValue($identifier, (int) $this->is_action_euthanized_at_site, PDO::PARAM_INT);
                        break;
                    case '`is_action_euthanized_during_transport`':
                        $stmt->bindValue($identifier, (int) $this->is_action_euthanized_during_transport, PDO::PARAM_INT);
                        break;
                    case '`is_action_transferred_to_rehab`':
                        $stmt->bindValue($identifier, (int) $this->is_action_transferred_to_rehab, PDO::PARAM_INT);
                        break;
                    case '`is_action_other`':
                        $stmt->bindValue($identifier, (int) $this->is_action_other, PDO::PARAM_INT);
                        break;
                    case '`relocated_location`':
                        $stmt->bindValue($identifier, $this->relocated_location, PDO::PARAM_STR);
                        break;
                    case '`volunteer_id`':
                        $stmt->bindValue($identifier, $this->volunteer_id, PDO::PARAM_INT);
                        break;
                    case '`investigation_nutritional_condition`':
                        $stmt->bindValue($identifier, $this->investigation_nutritional_condition, PDO::PARAM_STR);
                        break;
                    case '`investigation_age_class`':
                        $stmt->bindValue($identifier, $this->investigation_age_class, PDO::PARAM_STR);
                        break;
                    case '`live_animals_comments`':
                        $stmt->bindValue($identifier, $this->live_animals_comments, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
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
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
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

                if ($this->collReportHumanInteractionSections !== null) {
                    foreach ($this->collReportHumanInteractionSections as $referrerFK) {
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
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
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
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
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
                return $this->getInvestigationLatLocation();
                break;
            case 15:
                return $this->getInvestigationLonLocation();
                break;
            case 16:
                return $this->getInvestigationLocationAccuracy();
                break;
            case 17:
                return $this->getInvestigationPhysicalLocation();
                break;
            case 18:
                return $this->getInvestigationSpecies();
                break;
            case 19:
                return $this->getAnimalNotFound();
                break;
            case 20:
                return $this->getInvestigationCondition();
                break;
            case 21:
                return $this->getTags();
                break;
            case 22:
                return $this->getDisposition();
                break;
            case 23:
                return $this->getSealPickup();
                break;
            case 24:
                return $this->getSex();
                break;
            case 25:
                return $this->getWeight();
                break;
            case 26:
                return $this->getStraightLength();
                break;
            case 27:
                return $this->getContourLength();
                break;
            case 28:
                return $this->getGirth();
                break;
            case 29:
                return $this->getInvestigationComments();
                break;
            case 30:
                return $this->getIsPhotoTaken();
                break;
            case 31:
                return $this->getIsConSick();
                break;
            case 32:
                return $this->getIsConInjured();
                break;
            case 33:
                return $this->getIsConOutOfHabitat();
                break;
            case 34:
                return $this->getIsConDeemedReleasable();
                break;
            case 35:
                return $this->getIsConAbandoned();
                break;
            case 36:
                return $this->getIsConInaccessible();
                break;
            case 37:
                return $this->getIsConLocationHazardToAnimal();
                break;
            case 38:
                return $this->getIsConLocationHazardToHumans();
                break;
            case 39:
                return $this->getIsConUnknown();
                break;
            case 40:
                return $this->getIsConOther();
                break;
            case 41:
                return $this->getIsActionLeftAtSite();
                break;
            case 42:
                return $this->getIsActionImmediateReleaseAtSite();
                break;
            case 43:
                return $this->getIsActionRelocated();
                break;
            case 44:
                return $this->getIsActionDiedAtSite();
                break;
            case 45:
                return $this->getIsActionDiedDuringTransport();
                break;
            case 46:
                return $this->getIsActionEuthanizedAtSite();
                break;
            case 47:
                return $this->getIsActionEuthanizedDuringTransport();
                break;
            case 48:
                return $this->getIsActionTransferredToRehab();
                break;
            case 49:
                return $this->getIsActionOther();
                break;
            case 50:
                return $this->getRelocatedLocation();
                break;
            case 51:
                return $this->getVolunteerId();
                break;
            case 52:
                return $this->getInvestigationNutritionalCondition();
                break;
            case 53:
                return $this->getInvestigationAgeClass();
                break;
            case 54:
                return $this->getLiveAnimalsComments();
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
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Report'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Report'][$this->getPrimaryKey()] = true;
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
            $keys[14] => $this->getInvestigationLatLocation(),
            $keys[15] => $this->getInvestigationLonLocation(),
            $keys[16] => $this->getInvestigationLocationAccuracy(),
            $keys[17] => $this->getInvestigationPhysicalLocation(),
            $keys[18] => $this->getInvestigationSpecies(),
            $keys[19] => $this->getAnimalNotFound(),
            $keys[20] => $this->getInvestigationCondition(),
            $keys[21] => $this->getTags(),
            $keys[22] => $this->getDisposition(),
            $keys[23] => $this->getSealPickup(),
            $keys[24] => $this->getSex(),
            $keys[25] => $this->getWeight(),
            $keys[26] => $this->getStraightLength(),
            $keys[27] => $this->getContourLength(),
            $keys[28] => $this->getGirth(),
            $keys[29] => $this->getInvestigationComments(),
            $keys[30] => $this->getIsPhotoTaken(),
            $keys[31] => $this->getIsConSick(),
            $keys[32] => $this->getIsConInjured(),
            $keys[33] => $this->getIsConOutOfHabitat(),
            $keys[34] => $this->getIsConDeemedReleasable(),
            $keys[35] => $this->getIsConAbandoned(),
            $keys[36] => $this->getIsConInaccessible(),
            $keys[37] => $this->getIsConLocationHazardToAnimal(),
            $keys[38] => $this->getIsConLocationHazardToHumans(),
            $keys[39] => $this->getIsConUnknown(),
            $keys[40] => $this->getIsConOther(),
            $keys[41] => $this->getIsActionLeftAtSite(),
            $keys[42] => $this->getIsActionImmediateReleaseAtSite(),
            $keys[43] => $this->getIsActionRelocated(),
            $keys[44] => $this->getIsActionDiedAtSite(),
            $keys[45] => $this->getIsActionDiedDuringTransport(),
            $keys[46] => $this->getIsActionEuthanizedAtSite(),
            $keys[47] => $this->getIsActionEuthanizedDuringTransport(),
            $keys[48] => $this->getIsActionTransferredToRehab(),
            $keys[49] => $this->getIsActionOther(),
            $keys[50] => $this->getRelocatedLocation(),
            $keys[51] => $this->getVolunteerId(),
            $keys[52] => $this->getInvestigationNutritionalCondition(),
            $keys[53] => $this->getInvestigationAgeClass(),
            $keys[54] => $this->getLiveAnimalsComments(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aVolunteer) {
                $result['Volunteer'] = $this->aVolunteer->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collReportCommentss) {
                $result['ReportCommentss'] = $this->collReportCommentss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collReportHumanInteractionSections) {
                $result['ReportHumanInteractionSections'] = $this->collReportHumanInteractionSections->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collAttachments) {
                $result['Attachments'] = $this->collAttachments->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ReportPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
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
                $this->setInvestigationLatLocation($value);
                break;
            case 15:
                $this->setInvestigationLonLocation($value);
                break;
            case 16:
                $this->setInvestigationLocationAccuracy($value);
                break;
            case 17:
                $this->setInvestigationPhysicalLocation($value);
                break;
            case 18:
                $this->setInvestigationSpecies($value);
                break;
            case 19:
                $this->setAnimalNotFound($value);
                break;
            case 20:
                $this->setInvestigationCondition($value);
                break;
            case 21:
                $this->setTags($value);
                break;
            case 22:
                $this->setDisposition($value);
                break;
            case 23:
                $this->setSealPickup($value);
                break;
            case 24:
                $this->setSex($value);
                break;
            case 25:
                $this->setWeight($value);
                break;
            case 26:
                $this->setStraightLength($value);
                break;
            case 27:
                $this->setContourLength($value);
                break;
            case 28:
                $this->setGirth($value);
                break;
            case 29:
                $this->setInvestigationComments($value);
                break;
            case 30:
                $this->setIsPhotoTaken($value);
                break;
            case 31:
                $this->setIsConSick($value);
                break;
            case 32:
                $this->setIsConInjured($value);
                break;
            case 33:
                $this->setIsConOutOfHabitat($value);
                break;
            case 34:
                $this->setIsConDeemedReleasable($value);
                break;
            case 35:
                $this->setIsConAbandoned($value);
                break;
            case 36:
                $this->setIsConInaccessible($value);
                break;
            case 37:
                $this->setIsConLocationHazardToAnimal($value);
                break;
            case 38:
                $this->setIsConLocationHazardToHumans($value);
                break;
            case 39:
                $this->setIsConUnknown($value);
                break;
            case 40:
                $this->setIsConOther($value);
                break;
            case 41:
                $this->setIsActionLeftAtSite($value);
                break;
            case 42:
                $this->setIsActionImmediateReleaseAtSite($value);
                break;
            case 43:
                $this->setIsActionRelocated($value);
                break;
            case 44:
                $this->setIsActionDiedAtSite($value);
                break;
            case 45:
                $this->setIsActionDiedDuringTransport($value);
                break;
            case 46:
                $this->setIsActionEuthanizedAtSite($value);
                break;
            case 47:
                $this->setIsActionEuthanizedDuringTransport($value);
                break;
            case 48:
                $this->setIsActionTransferredToRehab($value);
                break;
            case 49:
                $this->setIsActionOther($value);
                break;
            case 50:
                $this->setRelocatedLocation($value);
                break;
            case 51:
                $this->setVolunteerId($value);
                break;
            case 52:
                $this->setInvestigationNutritionalCondition($value);
                break;
            case 53:
                $this->setInvestigationAgeClass($value);
                break;
            case 54:
                $this->setLiveAnimalsComments($value);
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
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
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
        if (array_key_exists($keys[14], $arr)) $this->setInvestigationLatLocation($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setInvestigationLonLocation($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setInvestigationLocationAccuracy($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setInvestigationPhysicalLocation($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setInvestigationSpecies($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAnimalNotFound($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setInvestigationCondition($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTags($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDisposition($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setSealPickup($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setSex($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setWeight($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setStraightLength($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setContourLength($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setGirth($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setInvestigationComments($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setIsPhotoTaken($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setIsConSick($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setIsConInjured($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setIsConOutOfHabitat($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setIsConDeemedReleasable($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setIsConAbandoned($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setIsConInaccessible($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setIsConLocationHazardToAnimal($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setIsConLocationHazardToHumans($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setIsConUnknown($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setIsConOther($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setIsActionLeftAtSite($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setIsActionImmediateReleaseAtSite($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setIsActionRelocated($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setIsActionDiedAtSite($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setIsActionDiedDuringTransport($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setIsActionEuthanizedAtSite($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setIsActionEuthanizedDuringTransport($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setIsActionTransferredToRehab($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setIsActionOther($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setRelocatedLocation($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setVolunteerId($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setInvestigationNutritionalCondition($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setInvestigationAgeClass($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setLiveAnimalsComments($arr[$keys[54]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
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
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_LAT_LOCATION)) $criteria->add(ReportPeer::INVESTIGATION_LAT_LOCATION, $this->investigation_lat_location);
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_LON_LOCATION)) $criteria->add(ReportPeer::INVESTIGATION_LON_LOCATION, $this->investigation_lon_location);
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_LOCATION_ACCURACY)) $criteria->add(ReportPeer::INVESTIGATION_LOCATION_ACCURACY, $this->investigation_location_accuracy);
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
        if ($this->isColumnModified(ReportPeer::RELOCATED_LOCATION)) $criteria->add(ReportPeer::RELOCATED_LOCATION, $this->relocated_location);
        if ($this->isColumnModified(ReportPeer::VOLUNTEER_ID)) $criteria->add(ReportPeer::VOLUNTEER_ID, $this->volunteer_id);
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_NUTRITIONAL_CONDITION)) $criteria->add(ReportPeer::INVESTIGATION_NUTRITIONAL_CONDITION, $this->investigation_nutritional_condition);
        if ($this->isColumnModified(ReportPeer::INVESTIGATION_AGE_CLASS)) $criteria->add(ReportPeer::INVESTIGATION_AGE_CLASS, $this->investigation_age_class);
        if ($this->isColumnModified(ReportPeer::LIVE_ANIMALS_COMMENTS)) $criteria->add(ReportPeer::LIVE_ANIMALS_COMMENTS, $this->live_animals_comments);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ReportPeer::DATABASE_NAME);
        $criteria->add(ReportPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
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
     * @param object $copyObj An object of Report (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setResponder($this->getResponder());
        $copyObj->setCallDate($this->getCallDate());
        $copyObj->setCallFrom($this->getCallFrom());
        $copyObj->setCallerName($this->getCallerName());
        $copyObj->setCallerPhoneNumber($this->getCallerPhoneNumber());
        $copyObj->setCallLocation($this->getCallLocation());
        $copyObj->setCallSpecies($this->getCallSpecies());
        $copyObj->setWhenFirstSeen($this->getWhenFirstSeen());
        $copyObj->setCallComments($this->getCallComments());
        $copyObj->setCallReferredTo($this->getCallReferredTo());
        $copyObj->setCallCondition($this->getCallCondition());
        $copyObj->setInvestigatorSupport($this->getInvestigatorSupport());
        $copyObj->setInvestigationDate($this->getInvestigationDate());
        $copyObj->setInvestigationLatLocation($this->getInvestigationLatLocation());
        $copyObj->setInvestigationLonLocation($this->getInvestigationLonLocation());
        $copyObj->setInvestigationLocationAccuracy($this->getInvestigationLocationAccuracy());
        $copyObj->setInvestigationPhysicalLocation($this->getInvestigationPhysicalLocation());
        $copyObj->setInvestigationSpecies($this->getInvestigationSpecies());
        $copyObj->setAnimalNotFound($this->getAnimalNotFound());
        $copyObj->setInvestigationCondition($this->getInvestigationCondition());
        $copyObj->setTags($this->getTags());
        $copyObj->setDisposition($this->getDisposition());
        $copyObj->setSealPickup($this->getSealPickup());
        $copyObj->setSex($this->getSex());
        $copyObj->setWeight($this->getWeight());
        $copyObj->setStraightLength($this->getStraightLength());
        $copyObj->setContourLength($this->getContourLength());
        $copyObj->setGirth($this->getGirth());
        $copyObj->setInvestigationComments($this->getInvestigationComments());
        $copyObj->setIsPhotoTaken($this->getIsPhotoTaken());
        $copyObj->setIsConSick($this->getIsConSick());
        $copyObj->setIsConInjured($this->getIsConInjured());
        $copyObj->setIsConOutOfHabitat($this->getIsConOutOfHabitat());
        $copyObj->setIsConDeemedReleasable($this->getIsConDeemedReleasable());
        $copyObj->setIsConAbandoned($this->getIsConAbandoned());
        $copyObj->setIsConInaccessible($this->getIsConInaccessible());
        $copyObj->setIsConLocationHazardToAnimal($this->getIsConLocationHazardToAnimal());
        $copyObj->setIsConLocationHazardToHumans($this->getIsConLocationHazardToHumans());
        $copyObj->setIsConUnknown($this->getIsConUnknown());
        $copyObj->setIsConOther($this->getIsConOther());
        $copyObj->setIsActionLeftAtSite($this->getIsActionLeftAtSite());
        $copyObj->setIsActionImmediateReleaseAtSite($this->getIsActionImmediateReleaseAtSite());
        $copyObj->setIsActionRelocated($this->getIsActionRelocated());
        $copyObj->setIsActionDiedAtSite($this->getIsActionDiedAtSite());
        $copyObj->setIsActionDiedDuringTransport($this->getIsActionDiedDuringTransport());
        $copyObj->setIsActionEuthanizedAtSite($this->getIsActionEuthanizedAtSite());
        $copyObj->setIsActionEuthanizedDuringTransport($this->getIsActionEuthanizedDuringTransport());
        $copyObj->setIsActionTransferredToRehab($this->getIsActionTransferredToRehab());
        $copyObj->setIsActionOther($this->getIsActionOther());
        $copyObj->setRelocatedLocation($this->getRelocatedLocation());
        $copyObj->setVolunteerId($this->getVolunteerId());
        $copyObj->setInvestigationNutritionalCondition($this->getInvestigationNutritionalCondition());
        $copyObj->setInvestigationAgeClass($this->getInvestigationAgeClass());
        $copyObj->setLiveAnimalsComments($this->getLiveAnimalsComments());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getReportCommentss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addReportComments($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getReportHumanInteractionSections() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addReportHumanInteractionSection($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getAttachments() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAttachment($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Report Clone of current object.
     * @throws PropelException
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
     * @return ReportPeer
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
     * @param                  Volunteer $v
     * @return Report The current object (for fluent API support)
     * @throws PropelException
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
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Volunteer The associated Volunteer object.
     * @throws PropelException
     */
    public function getVolunteer(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aVolunteer === null && ($this->volunteer_id !== null) && $doQuery) {
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
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('ReportComments' == $relationName) {
            $this->initReportCommentss();
        }
        if ('ReportHumanInteractionSection' == $relationName) {
            $this->initReportHumanInteractionSections();
        }
        if ('Attachment' == $relationName) {
            $this->initAttachments();
        }
    }

    /**
     * Clears out the collReportCommentss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Report The current object (for fluent API support)
     * @see        addReportCommentss()
     */
    public function clearReportCommentss()
    {
        $this->collReportCommentss = null; // important to set this to null since that means it is uninitialized
        $this->collReportCommentssPartial = null;

        return $this;
    }

    /**
     * reset is the collReportCommentss collection loaded partially
     *
     * @return void
     */
    public function resetPartialReportCommentss($v = true)
    {
        $this->collReportCommentssPartial = $v;
    }

    /**
     * Initializes the collReportCommentss collection.
     *
     * By default this just sets the collReportCommentss collection to an empty array (like clearcollReportCommentss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initReportCommentss($overrideExisting = true)
    {
        if (null !== $this->collReportCommentss && !$overrideExisting) {
            return;
        }
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
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ReportComments[] List of ReportComments objects
     * @throws PropelException
     */
    public function getReportCommentss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collReportCommentssPartial && !$this->isNew();
        if (null === $this->collReportCommentss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collReportCommentss) {
                // return empty collection
                $this->initReportCommentss();
            } else {
                $collReportCommentss = ReportCommentsQuery::create(null, $criteria)
                    ->filterByReport($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collReportCommentssPartial && count($collReportCommentss)) {
                      $this->initReportCommentss(false);

                      foreach ($collReportCommentss as $obj) {
                        if (false == $this->collReportCommentss->contains($obj)) {
                          $this->collReportCommentss->append($obj);
                        }
                      }

                      $this->collReportCommentssPartial = true;
                    }

                    $collReportCommentss->getInternalIterator()->rewind();

                    return $collReportCommentss;
                }

                if ($partial && $this->collReportCommentss) {
                    foreach ($this->collReportCommentss as $obj) {
                        if ($obj->isNew()) {
                            $collReportCommentss[] = $obj;
                        }
                    }
                }

                $this->collReportCommentss = $collReportCommentss;
                $this->collReportCommentssPartial = false;
            }
        }

        return $this->collReportCommentss;
    }

    /**
     * Sets a collection of ReportComments objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $reportCommentss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Report The current object (for fluent API support)
     */
    public function setReportCommentss(PropelCollection $reportCommentss, PropelPDO $con = null)
    {
        $reportCommentssToDelete = $this->getReportCommentss(new Criteria(), $con)->diff($reportCommentss);


        $this->reportCommentssScheduledForDeletion = $reportCommentssToDelete;

        foreach ($reportCommentssToDelete as $reportCommentsRemoved) {
            $reportCommentsRemoved->setReport(null);
        }

        $this->collReportCommentss = null;
        foreach ($reportCommentss as $reportComments) {
            $this->addReportComments($reportComments);
        }

        $this->collReportCommentss = $reportCommentss;
        $this->collReportCommentssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ReportComments objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ReportComments objects.
     * @throws PropelException
     */
    public function countReportCommentss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collReportCommentssPartial && !$this->isNew();
        if (null === $this->collReportCommentss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collReportCommentss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getReportCommentss());
            }
            $query = ReportCommentsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByReport($this)
                ->count($con);
        }

        return count($this->collReportCommentss);
    }

    /**
     * Method called to associate a ReportComments object to this object
     * through the ReportComments foreign key attribute.
     *
     * @param    ReportComments $l ReportComments
     * @return Report The current object (for fluent API support)
     */
    public function addReportComments(ReportComments $l)
    {
        if ($this->collReportCommentss === null) {
            $this->initReportCommentss();
            $this->collReportCommentssPartial = true;
        }

        if (!in_array($l, $this->collReportCommentss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddReportComments($l);

            if ($this->reportCommentssScheduledForDeletion and $this->reportCommentssScheduledForDeletion->contains($l)) {
                $this->reportCommentssScheduledForDeletion->remove($this->reportCommentssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ReportComments $reportComments The reportComments object to add.
     */
    protected function doAddReportComments($reportComments)
    {
        $this->collReportCommentss[]= $reportComments;
        $reportComments->setReport($this);
    }

    /**
     * @param	ReportComments $reportComments The reportComments object to remove.
     * @return Report The current object (for fluent API support)
     */
    public function removeReportComments($reportComments)
    {
        if ($this->getReportCommentss()->contains($reportComments)) {
            $this->collReportCommentss->remove($this->collReportCommentss->search($reportComments));
            if (null === $this->reportCommentssScheduledForDeletion) {
                $this->reportCommentssScheduledForDeletion = clone $this->collReportCommentss;
                $this->reportCommentssScheduledForDeletion->clear();
            }
            $this->reportCommentssScheduledForDeletion[]= clone $reportComments;
            $reportComments->setReport(null);
        }

        return $this;
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
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ReportComments[] List of ReportComments objects
     */
    public function getReportCommentssJoinVolunteer($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ReportCommentsQuery::create(null, $criteria);
        $query->joinWith('Volunteer', $join_behavior);

        return $this->getReportCommentss($query, $con);
    }

    /**
     * Clears out the collReportHumanInteractionSections collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Report The current object (for fluent API support)
     * @see        addReportHumanInteractionSections()
     */
    public function clearReportHumanInteractionSections()
    {
        $this->collReportHumanInteractionSections = null; // important to set this to null since that means it is uninitialized
        $this->collReportHumanInteractionSectionsPartial = null;

        return $this;
    }

    /**
     * reset is the collReportHumanInteractionSections collection loaded partially
     *
     * @return void
     */
    public function resetPartialReportHumanInteractionSections($v = true)
    {
        $this->collReportHumanInteractionSectionsPartial = $v;
    }

    /**
     * Initializes the collReportHumanInteractionSections collection.
     *
     * By default this just sets the collReportHumanInteractionSections collection to an empty array (like clearcollReportHumanInteractionSections());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initReportHumanInteractionSections($overrideExisting = true)
    {
        if (null !== $this->collReportHumanInteractionSections && !$overrideExisting) {
            return;
        }
        $this->collReportHumanInteractionSections = new PropelObjectCollection();
        $this->collReportHumanInteractionSections->setModel('ReportHumanInteractionSection');
    }

    /**
     * Gets an array of ReportHumanInteractionSection objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Report is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ReportHumanInteractionSection[] List of ReportHumanInteractionSection objects
     * @throws PropelException
     */
    public function getReportHumanInteractionSections($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collReportHumanInteractionSectionsPartial && !$this->isNew();
        if (null === $this->collReportHumanInteractionSections || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collReportHumanInteractionSections) {
                // return empty collection
                $this->initReportHumanInteractionSections();
            } else {
                $collReportHumanInteractionSections = ReportHumanInteractionSectionQuery::create(null, $criteria)
                    ->filterByReport($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collReportHumanInteractionSectionsPartial && count($collReportHumanInteractionSections)) {
                      $this->initReportHumanInteractionSections(false);

                      foreach ($collReportHumanInteractionSections as $obj) {
                        if (false == $this->collReportHumanInteractionSections->contains($obj)) {
                          $this->collReportHumanInteractionSections->append($obj);
                        }
                      }

                      $this->collReportHumanInteractionSectionsPartial = true;
                    }

                    $collReportHumanInteractionSections->getInternalIterator()->rewind();

                    return $collReportHumanInteractionSections;
                }

                if ($partial && $this->collReportHumanInteractionSections) {
                    foreach ($this->collReportHumanInteractionSections as $obj) {
                        if ($obj->isNew()) {
                            $collReportHumanInteractionSections[] = $obj;
                        }
                    }
                }

                $this->collReportHumanInteractionSections = $collReportHumanInteractionSections;
                $this->collReportHumanInteractionSectionsPartial = false;
            }
        }

        return $this->collReportHumanInteractionSections;
    }

    /**
     * Sets a collection of ReportHumanInteractionSection objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $reportHumanInteractionSections A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Report The current object (for fluent API support)
     */
    public function setReportHumanInteractionSections(PropelCollection $reportHumanInteractionSections, PropelPDO $con = null)
    {
        $reportHumanInteractionSectionsToDelete = $this->getReportHumanInteractionSections(new Criteria(), $con)->diff($reportHumanInteractionSections);


        $this->reportHumanInteractionSectionsScheduledForDeletion = $reportHumanInteractionSectionsToDelete;

        foreach ($reportHumanInteractionSectionsToDelete as $reportHumanInteractionSectionRemoved) {
            $reportHumanInteractionSectionRemoved->setReport(null);
        }

        $this->collReportHumanInteractionSections = null;
        foreach ($reportHumanInteractionSections as $reportHumanInteractionSection) {
            $this->addReportHumanInteractionSection($reportHumanInteractionSection);
        }

        $this->collReportHumanInteractionSections = $reportHumanInteractionSections;
        $this->collReportHumanInteractionSectionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ReportHumanInteractionSection objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ReportHumanInteractionSection objects.
     * @throws PropelException
     */
    public function countReportHumanInteractionSections(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collReportHumanInteractionSectionsPartial && !$this->isNew();
        if (null === $this->collReportHumanInteractionSections || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collReportHumanInteractionSections) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getReportHumanInteractionSections());
            }
            $query = ReportHumanInteractionSectionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByReport($this)
                ->count($con);
        }

        return count($this->collReportHumanInteractionSections);
    }

    /**
     * Method called to associate a ReportHumanInteractionSection object to this object
     * through the ReportHumanInteractionSection foreign key attribute.
     *
     * @param    ReportHumanInteractionSection $l ReportHumanInteractionSection
     * @return Report The current object (for fluent API support)
     */
    public function addReportHumanInteractionSection(ReportHumanInteractionSection $l)
    {
        if ($this->collReportHumanInteractionSections === null) {
            $this->initReportHumanInteractionSections();
            $this->collReportHumanInteractionSectionsPartial = true;
        }

        if (!in_array($l, $this->collReportHumanInteractionSections->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddReportHumanInteractionSection($l);

            if ($this->reportHumanInteractionSectionsScheduledForDeletion and $this->reportHumanInteractionSectionsScheduledForDeletion->contains($l)) {
                $this->reportHumanInteractionSectionsScheduledForDeletion->remove($this->reportHumanInteractionSectionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ReportHumanInteractionSection $reportHumanInteractionSection The reportHumanInteractionSection object to add.
     */
    protected function doAddReportHumanInteractionSection($reportHumanInteractionSection)
    {
        $this->collReportHumanInteractionSections[]= $reportHumanInteractionSection;
        $reportHumanInteractionSection->setReport($this);
    }

    /**
     * @param	ReportHumanInteractionSection $reportHumanInteractionSection The reportHumanInteractionSection object to remove.
     * @return Report The current object (for fluent API support)
     */
    public function removeReportHumanInteractionSection($reportHumanInteractionSection)
    {
        if ($this->getReportHumanInteractionSections()->contains($reportHumanInteractionSection)) {
            $this->collReportHumanInteractionSections->remove($this->collReportHumanInteractionSections->search($reportHumanInteractionSection));
            if (null === $this->reportHumanInteractionSectionsScheduledForDeletion) {
                $this->reportHumanInteractionSectionsScheduledForDeletion = clone $this->collReportHumanInteractionSections;
                $this->reportHumanInteractionSectionsScheduledForDeletion->clear();
            }
            $this->reportHumanInteractionSectionsScheduledForDeletion[]= clone $reportHumanInteractionSection;
            $reportHumanInteractionSection->setReport(null);
        }

        return $this;
    }

    /**
     * Clears out the collAttachments collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Report The current object (for fluent API support)
     * @see        addAttachments()
     */
    public function clearAttachments()
    {
        $this->collAttachments = null; // important to set this to null since that means it is uninitialized
        $this->collAttachmentsPartial = null;

        return $this;
    }

    /**
     * reset is the collAttachments collection loaded partially
     *
     * @return void
     */
    public function resetPartialAttachments($v = true)
    {
        $this->collAttachmentsPartial = $v;
    }

    /**
     * Initializes the collAttachments collection.
     *
     * By default this just sets the collAttachments collection to an empty array (like clearcollAttachments());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAttachments($overrideExisting = true)
    {
        if (null !== $this->collAttachments && !$overrideExisting) {
            return;
        }
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
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Attachment[] List of Attachment objects
     * @throws PropelException
     */
    public function getAttachments($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAttachmentsPartial && !$this->isNew();
        if (null === $this->collAttachments || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAttachments) {
                // return empty collection
                $this->initAttachments();
            } else {
                $collAttachments = AttachmentQuery::create(null, $criteria)
                    ->filterByReport($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAttachmentsPartial && count($collAttachments)) {
                      $this->initAttachments(false);

                      foreach ($collAttachments as $obj) {
                        if (false == $this->collAttachments->contains($obj)) {
                          $this->collAttachments->append($obj);
                        }
                      }

                      $this->collAttachmentsPartial = true;
                    }

                    $collAttachments->getInternalIterator()->rewind();

                    return $collAttachments;
                }

                if ($partial && $this->collAttachments) {
                    foreach ($this->collAttachments as $obj) {
                        if ($obj->isNew()) {
                            $collAttachments[] = $obj;
                        }
                    }
                }

                $this->collAttachments = $collAttachments;
                $this->collAttachmentsPartial = false;
            }
        }

        return $this->collAttachments;
    }

    /**
     * Sets a collection of Attachment objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $attachments A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Report The current object (for fluent API support)
     */
    public function setAttachments(PropelCollection $attachments, PropelPDO $con = null)
    {
        $attachmentsToDelete = $this->getAttachments(new Criteria(), $con)->diff($attachments);


        $this->attachmentsScheduledForDeletion = $attachmentsToDelete;

        foreach ($attachmentsToDelete as $attachmentRemoved) {
            $attachmentRemoved->setReport(null);
        }

        $this->collAttachments = null;
        foreach ($attachments as $attachment) {
            $this->addAttachment($attachment);
        }

        $this->collAttachments = $attachments;
        $this->collAttachmentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Attachment objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Attachment objects.
     * @throws PropelException
     */
    public function countAttachments(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAttachmentsPartial && !$this->isNew();
        if (null === $this->collAttachments || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAttachments) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAttachments());
            }
            $query = AttachmentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByReport($this)
                ->count($con);
        }

        return count($this->collAttachments);
    }

    /**
     * Method called to associate a Attachment object to this object
     * through the Attachment foreign key attribute.
     *
     * @param    Attachment $l Attachment
     * @return Report The current object (for fluent API support)
     */
    public function addAttachment(Attachment $l)
    {
        if ($this->collAttachments === null) {
            $this->initAttachments();
            $this->collAttachmentsPartial = true;
        }

        if (!in_array($l, $this->collAttachments->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAttachment($l);

            if ($this->attachmentsScheduledForDeletion and $this->attachmentsScheduledForDeletion->contains($l)) {
                $this->attachmentsScheduledForDeletion->remove($this->attachmentsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Attachment $attachment The attachment object to add.
     */
    protected function doAddAttachment($attachment)
    {
        $this->collAttachments[]= $attachment;
        $attachment->setReport($this);
    }

    /**
     * @param	Attachment $attachment The attachment object to remove.
     * @return Report The current object (for fluent API support)
     */
    public function removeAttachment($attachment)
    {
        if ($this->getAttachments()->contains($attachment)) {
            $this->collAttachments->remove($this->collAttachments->search($attachment));
            if (null === $this->attachmentsScheduledForDeletion) {
                $this->attachmentsScheduledForDeletion = clone $this->collAttachments;
                $this->attachmentsScheduledForDeletion->clear();
            }
            $this->attachmentsScheduledForDeletion[]= clone $attachment;
            $attachment->setReport(null);
        }

        return $this;
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
        $this->investigation_lat_location = null;
        $this->investigation_lon_location = null;
        $this->investigation_location_accuracy = null;
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
        $this->is_con_injured = null;
        $this->is_con_out_of_habitat = null;
        $this->is_con_deemed_releasable = null;
        $this->is_con_abandoned = null;
        $this->is_con_inaccessible = null;
        $this->is_con_location_hazard_to_animal = null;
        $this->is_con_location_hazard_to_humans = null;
        $this->is_con_unknown = null;
        $this->is_con_other = null;
        $this->is_action_left_at_site = null;
        $this->is_action_immediate_release_at_site = null;
        $this->is_action_relocated = null;
        $this->is_action_died_at_site = null;
        $this->is_action_died_during_transport = null;
        $this->is_action_euthanized_at_site = null;
        $this->is_action_euthanized_during_transport = null;
        $this->is_action_transferred_to_rehab = null;
        $this->is_action_other = null;
        $this->relocated_location = null;
        $this->volunteer_id = null;
        $this->investigation_nutritional_condition = null;
        $this->investigation_age_class = null;
        $this->live_animals_comments = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collReportCommentss) {
                foreach ($this->collReportCommentss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collReportHumanInteractionSections) {
                foreach ($this->collReportHumanInteractionSections as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collAttachments) {
                foreach ($this->collAttachments as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aVolunteer instanceof Persistent) {
              $this->aVolunteer->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collReportCommentss instanceof PropelCollection) {
            $this->collReportCommentss->clearIterator();
        }
        $this->collReportCommentss = null;
        if ($this->collReportHumanInteractionSections instanceof PropelCollection) {
            $this->collReportHumanInteractionSections->clearIterator();
        }
        $this->collReportHumanInteractionSections = null;
        if ($this->collAttachments instanceof PropelCollection) {
            $this->collAttachments->clearIterator();
        }
        $this->collAttachments = null;
        $this->aVolunteer = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ReportPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
