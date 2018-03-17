<?php


/**
 * Base static class for performing query and update operations on the 'report' table.
 *
 * a report
 *
 * @package propel.generator.persistence.om
 */
abstract class BaseReportPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'persistence';

    /** the table name for this class */
    const TABLE_NAME = 'report';

    /** the related Propel class for this table */
    const OM_CLASS = 'Report';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ReportTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 55;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 55;

    /** the column name for the id field */
    const ID = 'report.id';

    /** the column name for the responder field */
    const RESPONDER = 'report.responder';

    /** the column name for the call_date field */
    const CALL_DATE = 'report.call_date';

    /** the column name for the call_from field */
    const CALL_FROM = 'report.call_from';

    /** the column name for the caller_name field */
    const CALLER_NAME = 'report.caller_name';

    /** the column name for the caller_phone_number field */
    const CALLER_PHONE_NUMBER = 'report.caller_phone_number';

    /** the column name for the call_location field */
    const CALL_LOCATION = 'report.call_location';

    /** the column name for the call_species field */
    const CALL_SPECIES = 'report.call_species';

    /** the column name for the when_first_seen field */
    const WHEN_FIRST_SEEN = 'report.when_first_seen';

    /** the column name for the call_comments field */
    const CALL_COMMENTS = 'report.call_comments';

    /** the column name for the call_referred_to field */
    const CALL_REFERRED_TO = 'report.call_referred_to';

    /** the column name for the call_condition field */
    const CALL_CONDITION = 'report.call_condition';

    /** the column name for the investigator_support field */
    const INVESTIGATOR_SUPPORT = 'report.investigator_support';

    /** the column name for the investigation_date field */
    const INVESTIGATION_DATE = 'report.investigation_date';

    /** the column name for the investigation_lat_location field */
    const INVESTIGATION_LAT_LOCATION = 'report.investigation_lat_location';

    /** the column name for the investigation_lon_location field */
    const INVESTIGATION_LON_LOCATION = 'report.investigation_lon_location';

    /** the column name for the investigation_location_accuracy field */
    const INVESTIGATION_LOCATION_ACCURACY = 'report.investigation_location_accuracy';

    /** the column name for the investigation_physical_location field */
    const INVESTIGATION_PHYSICAL_LOCATION = 'report.investigation_physical_location';

    /** the column name for the investigation_species field */
    const INVESTIGATION_SPECIES = 'report.investigation_species';

    /** the column name for the animal_not_found field */
    const ANIMAL_NOT_FOUND = 'report.animal_not_found';

    /** the column name for the investigation_condition field */
    const INVESTIGATION_CONDITION = 'report.investigation_condition';

    /** the column name for the tags field */
    const TAGS = 'report.tags';

    /** the column name for the disposition field */
    const DISPOSITION = 'report.disposition';

    /** the column name for the seal_pickup field */
    const SEAL_PICKUP = 'report.seal_pickup';

    /** the column name for the sex field */
    const SEX = 'report.sex';

    /** the column name for the weight field */
    const WEIGHT = 'report.weight';

    /** the column name for the straight_length field */
    const STRAIGHT_LENGTH = 'report.straight_length';

    /** the column name for the contour_length field */
    const CONTOUR_LENGTH = 'report.contour_length';

    /** the column name for the girth field */
    const GIRTH = 'report.girth';

    /** the column name for the investigation_comments field */
    const INVESTIGATION_COMMENTS = 'report.investigation_comments';

    /** the column name for the is_photo_taken field */
    const IS_PHOTO_TAKEN = 'report.is_photo_taken';

    /** the column name for the is_con_sick field */
    const IS_CON_SICK = 'report.is_con_sick';

    /** the column name for the is_con_injured field */
    const IS_CON_INJURED = 'report.is_con_injured';

    /** the column name for the is_con_out_of_habitat field */
    const IS_CON_OUT_OF_HABITAT = 'report.is_con_out_of_habitat';

    /** the column name for the is_con_deemed_releasable field */
    const IS_CON_DEEMED_RELEASABLE = 'report.is_con_deemed_releasable';

    /** the column name for the is_con_abandoned field */
    const IS_CON_ABANDONED = 'report.is_con_abandoned';

    /** the column name for the is_con_inaccessible field */
    const IS_CON_INACCESSIBLE = 'report.is_con_inaccessible';

    /** the column name for the is_con_location_hazard_to_animal field */
    const IS_CON_LOCATION_HAZARD_TO_ANIMAL = 'report.is_con_location_hazard_to_animal';

    /** the column name for the is_con_location_hazard_to_humans field */
    const IS_CON_LOCATION_HAZARD_TO_HUMANS = 'report.is_con_location_hazard_to_humans';

    /** the column name for the is_con_unknown field */
    const IS_CON_UNKNOWN = 'report.is_con_unknown';

    /** the column name for the is_con_other field */
    const IS_CON_OTHER = 'report.is_con_other';

    /** the column name for the is_action_left_at_site field */
    const IS_ACTION_LEFT_AT_SITE = 'report.is_action_left_at_site';

    /** the column name for the is_action_immediate_release_at_site field */
    const IS_ACTION_IMMEDIATE_RELEASE_AT_SITE = 'report.is_action_immediate_release_at_site';

    /** the column name for the is_action_relocated field */
    const IS_ACTION_RELOCATED = 'report.is_action_relocated';

    /** the column name for the is_action_died_at_site field */
    const IS_ACTION_DIED_AT_SITE = 'report.is_action_died_at_site';

    /** the column name for the is_action_died_during_transport field */
    const IS_ACTION_DIED_DURING_TRANSPORT = 'report.is_action_died_during_transport';

    /** the column name for the is_action_euthanized_at_site field */
    const IS_ACTION_EUTHANIZED_AT_SITE = 'report.is_action_euthanized_at_site';

    /** the column name for the is_action_euthanized_during_transport field */
    const IS_ACTION_EUTHANIZED_DURING_TRANSPORT = 'report.is_action_euthanized_during_transport';

    /** the column name for the is_action_transferred_to_rehab field */
    const IS_ACTION_TRANSFERRED_TO_REHAB = 'report.is_action_transferred_to_rehab';

    /** the column name for the is_action_other field */
    const IS_ACTION_OTHER = 'report.is_action_other';

    /** the column name for the relocated_location field */
    const RELOCATED_LOCATION = 'report.relocated_location';

    /** the column name for the volunteer_id field */
    const VOLUNTEER_ID = 'report.volunteer_id';

    /** the column name for the investigation_nutritional_condition field */
    const INVESTIGATION_NUTRITIONAL_CONDITION = 'report.investigation_nutritional_condition';

    /** the column name for the investigation_age_class field */
    const INVESTIGATION_AGE_CLASS = 'report.investigation_age_class';

    /** the column name for the live_animals_comments field */
    const LIVE_ANIMALS_COMMENTS = 'report.live_animals_comments';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Report objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Report[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ReportPeer::$fieldNames[ReportPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Responder', 'CallDate', 'CallFrom', 'CallerName', 'CallerPhoneNumber', 'CallLocation', 'CallSpecies', 'WhenFirstSeen', 'CallComments', 'CallReferredTo', 'CallCondition', 'InvestigatorSupport', 'InvestigationDate', 'InvestigationLatLocation', 'InvestigationLonLocation', 'InvestigationLocationAccuracy', 'InvestigationPhysicalLocation', 'InvestigationSpecies', 'AnimalNotFound', 'InvestigationCondition', 'Tags', 'Disposition', 'SealPickup', 'Sex', 'Weight', 'StraightLength', 'ContourLength', 'Girth', 'InvestigationComments', 'IsPhotoTaken', 'IsConSick', 'IsConInjured', 'IsConOutOfHabitat', 'IsConDeemedReleasable', 'IsConAbandoned', 'IsConInaccessible', 'IsConLocationHazardToAnimal', 'IsConLocationHazardToHumans', 'IsConUnknown', 'IsConOther', 'IsActionLeftAtSite', 'IsActionImmediateReleaseAtSite', 'IsActionRelocated', 'IsActionDiedAtSite', 'IsActionDiedDuringTransport', 'IsActionEuthanizedAtSite', 'IsActionEuthanizedDuringTransport', 'IsActionTransferredToRehab', 'IsActionOther', 'RelocatedLocation', 'VolunteerId', 'InvestigationNutritionalCondition', 'InvestigationAgeClass', 'LiveAnimalsComments', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'responder', 'callDate', 'callFrom', 'callerName', 'callerPhoneNumber', 'callLocation', 'callSpecies', 'whenFirstSeen', 'callComments', 'callReferredTo', 'callCondition', 'investigatorSupport', 'investigationDate', 'investigationLatLocation', 'investigationLonLocation', 'investigationLocationAccuracy', 'investigationPhysicalLocation', 'investigationSpecies', 'animalNotFound', 'investigationCondition', 'tags', 'disposition', 'sealPickup', 'sex', 'weight', 'straightLength', 'contourLength', 'girth', 'investigationComments', 'isPhotoTaken', 'isConSick', 'isConInjured', 'isConOutOfHabitat', 'isConDeemedReleasable', 'isConAbandoned', 'isConInaccessible', 'isConLocationHazardToAnimal', 'isConLocationHazardToHumans', 'isConUnknown', 'isConOther', 'isActionLeftAtSite', 'isActionImmediateReleaseAtSite', 'isActionRelocated', 'isActionDiedAtSite', 'isActionDiedDuringTransport', 'isActionEuthanizedAtSite', 'isActionEuthanizedDuringTransport', 'isActionTransferredToRehab', 'isActionOther', 'relocatedLocation', 'volunteerId', 'investigationNutritionalCondition', 'investigationAgeClass', 'liveAnimalsComments', ),
        BasePeer::TYPE_COLNAME => array (ReportPeer::ID, ReportPeer::RESPONDER, ReportPeer::CALL_DATE, ReportPeer::CALL_FROM, ReportPeer::CALLER_NAME, ReportPeer::CALLER_PHONE_NUMBER, ReportPeer::CALL_LOCATION, ReportPeer::CALL_SPECIES, ReportPeer::WHEN_FIRST_SEEN, ReportPeer::CALL_COMMENTS, ReportPeer::CALL_REFERRED_TO, ReportPeer::CALL_CONDITION, ReportPeer::INVESTIGATOR_SUPPORT, ReportPeer::INVESTIGATION_DATE, ReportPeer::INVESTIGATION_LAT_LOCATION, ReportPeer::INVESTIGATION_LON_LOCATION, ReportPeer::INVESTIGATION_LOCATION_ACCURACY, ReportPeer::INVESTIGATION_PHYSICAL_LOCATION, ReportPeer::INVESTIGATION_SPECIES, ReportPeer::ANIMAL_NOT_FOUND, ReportPeer::INVESTIGATION_CONDITION, ReportPeer::TAGS, ReportPeer::DISPOSITION, ReportPeer::SEAL_PICKUP, ReportPeer::SEX, ReportPeer::WEIGHT, ReportPeer::STRAIGHT_LENGTH, ReportPeer::CONTOUR_LENGTH, ReportPeer::GIRTH, ReportPeer::INVESTIGATION_COMMENTS, ReportPeer::IS_PHOTO_TAKEN, ReportPeer::IS_CON_SICK, ReportPeer::IS_CON_INJURED, ReportPeer::IS_CON_OUT_OF_HABITAT, ReportPeer::IS_CON_DEEMED_RELEASABLE, ReportPeer::IS_CON_ABANDONED, ReportPeer::IS_CON_INACCESSIBLE, ReportPeer::IS_CON_LOCATION_HAZARD_TO_ANIMAL, ReportPeer::IS_CON_LOCATION_HAZARD_TO_HUMANS, ReportPeer::IS_CON_UNKNOWN, ReportPeer::IS_CON_OTHER, ReportPeer::IS_ACTION_LEFT_AT_SITE, ReportPeer::IS_ACTION_IMMEDIATE_RELEASE_AT_SITE, ReportPeer::IS_ACTION_RELOCATED, ReportPeer::IS_ACTION_DIED_AT_SITE, ReportPeer::IS_ACTION_DIED_DURING_TRANSPORT, ReportPeer::IS_ACTION_EUTHANIZED_AT_SITE, ReportPeer::IS_ACTION_EUTHANIZED_DURING_TRANSPORT, ReportPeer::IS_ACTION_TRANSFERRED_TO_REHAB, ReportPeer::IS_ACTION_OTHER, ReportPeer::RELOCATED_LOCATION, ReportPeer::VOLUNTEER_ID, ReportPeer::INVESTIGATION_NUTRITIONAL_CONDITION, ReportPeer::INVESTIGATION_AGE_CLASS, ReportPeer::LIVE_ANIMALS_COMMENTS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'RESPONDER', 'CALL_DATE', 'CALL_FROM', 'CALLER_NAME', 'CALLER_PHONE_NUMBER', 'CALL_LOCATION', 'CALL_SPECIES', 'WHEN_FIRST_SEEN', 'CALL_COMMENTS', 'CALL_REFERRED_TO', 'CALL_CONDITION', 'INVESTIGATOR_SUPPORT', 'INVESTIGATION_DATE', 'INVESTIGATION_LAT_LOCATION', 'INVESTIGATION_LON_LOCATION', 'INVESTIGATION_LOCATION_ACCURACY', 'INVESTIGATION_PHYSICAL_LOCATION', 'INVESTIGATION_SPECIES', 'ANIMAL_NOT_FOUND', 'INVESTIGATION_CONDITION', 'TAGS', 'DISPOSITION', 'SEAL_PICKUP', 'SEX', 'WEIGHT', 'STRAIGHT_LENGTH', 'CONTOUR_LENGTH', 'GIRTH', 'INVESTIGATION_COMMENTS', 'IS_PHOTO_TAKEN', 'IS_CON_SICK', 'IS_CON_INJURED', 'IS_CON_OUT_OF_HABITAT', 'IS_CON_DEEMED_RELEASABLE', 'IS_CON_ABANDONED', 'IS_CON_INACCESSIBLE', 'IS_CON_LOCATION_HAZARD_TO_ANIMAL', 'IS_CON_LOCATION_HAZARD_TO_HUMANS', 'IS_CON_UNKNOWN', 'IS_CON_OTHER', 'IS_ACTION_LEFT_AT_SITE', 'IS_ACTION_IMMEDIATE_RELEASE_AT_SITE', 'IS_ACTION_RELOCATED', 'IS_ACTION_DIED_AT_SITE', 'IS_ACTION_DIED_DURING_TRANSPORT', 'IS_ACTION_EUTHANIZED_AT_SITE', 'IS_ACTION_EUTHANIZED_DURING_TRANSPORT', 'IS_ACTION_TRANSFERRED_TO_REHAB', 'IS_ACTION_OTHER', 'RELOCATED_LOCATION', 'VOLUNTEER_ID', 'INVESTIGATION_NUTRITIONAL_CONDITION', 'INVESTIGATION_AGE_CLASS', 'LIVE_ANIMALS_COMMENTS', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'responder', 'call_date', 'call_from', 'caller_name', 'caller_phone_number', 'call_location', 'call_species', 'when_first_seen', 'call_comments', 'call_referred_to', 'call_condition', 'investigator_support', 'investigation_date', 'investigation_lat_location', 'investigation_lon_location', 'investigation_location_accuracy', 'investigation_physical_location', 'investigation_species', 'animal_not_found', 'investigation_condition', 'tags', 'disposition', 'seal_pickup', 'sex', 'weight', 'straight_length', 'contour_length', 'girth', 'investigation_comments', 'is_photo_taken', 'is_con_sick', 'is_con_injured', 'is_con_out_of_habitat', 'is_con_deemed_releasable', 'is_con_abandoned', 'is_con_inaccessible', 'is_con_location_hazard_to_animal', 'is_con_location_hazard_to_humans', 'is_con_unknown', 'is_con_other', 'is_action_left_at_site', 'is_action_immediate_release_at_site', 'is_action_relocated', 'is_action_died_at_site', 'is_action_died_during_transport', 'is_action_euthanized_at_site', 'is_action_euthanized_during_transport', 'is_action_transferred_to_rehab', 'is_action_other', 'relocated_location', 'volunteer_id', 'investigation_nutritional_condition', 'investigation_age_class', 'live_animals_comments', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ReportPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Responder' => 1, 'CallDate' => 2, 'CallFrom' => 3, 'CallerName' => 4, 'CallerPhoneNumber' => 5, 'CallLocation' => 6, 'CallSpecies' => 7, 'WhenFirstSeen' => 8, 'CallComments' => 9, 'CallReferredTo' => 10, 'CallCondition' => 11, 'InvestigatorSupport' => 12, 'InvestigationDate' => 13, 'InvestigationLatLocation' => 14, 'InvestigationLonLocation' => 15, 'InvestigationLocationAccuracy' => 16, 'InvestigationPhysicalLocation' => 17, 'InvestigationSpecies' => 18, 'AnimalNotFound' => 19, 'InvestigationCondition' => 20, 'Tags' => 21, 'Disposition' => 22, 'SealPickup' => 23, 'Sex' => 24, 'Weight' => 25, 'StraightLength' => 26, 'ContourLength' => 27, 'Girth' => 28, 'InvestigationComments' => 29, 'IsPhotoTaken' => 30, 'IsConSick' => 31, 'IsConInjured' => 32, 'IsConOutOfHabitat' => 33, 'IsConDeemedReleasable' => 34, 'IsConAbandoned' => 35, 'IsConInaccessible' => 36, 'IsConLocationHazardToAnimal' => 37, 'IsConLocationHazardToHumans' => 38, 'IsConUnknown' => 39, 'IsConOther' => 40, 'IsActionLeftAtSite' => 41, 'IsActionImmediateReleaseAtSite' => 42, 'IsActionRelocated' => 43, 'IsActionDiedAtSite' => 44, 'IsActionDiedDuringTransport' => 45, 'IsActionEuthanizedAtSite' => 46, 'IsActionEuthanizedDuringTransport' => 47, 'IsActionTransferredToRehab' => 48, 'IsActionOther' => 49, 'RelocatedLocation' => 50, 'VolunteerId' => 51, 'InvestigationNutritionalCondition' => 52, 'InvestigationAgeClass' => 53, 'LiveAnimalsComments' => 54, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'responder' => 1, 'callDate' => 2, 'callFrom' => 3, 'callerName' => 4, 'callerPhoneNumber' => 5, 'callLocation' => 6, 'callSpecies' => 7, 'whenFirstSeen' => 8, 'callComments' => 9, 'callReferredTo' => 10, 'callCondition' => 11, 'investigatorSupport' => 12, 'investigationDate' => 13, 'investigationLatLocation' => 14, 'investigationLonLocation' => 15, 'investigationLocationAccuracy' => 16, 'investigationPhysicalLocation' => 17, 'investigationSpecies' => 18, 'animalNotFound' => 19, 'investigationCondition' => 20, 'tags' => 21, 'disposition' => 22, 'sealPickup' => 23, 'sex' => 24, 'weight' => 25, 'straightLength' => 26, 'contourLength' => 27, 'girth' => 28, 'investigationComments' => 29, 'isPhotoTaken' => 30, 'isConSick' => 31, 'isConInjured' => 32, 'isConOutOfHabitat' => 33, 'isConDeemedReleasable' => 34, 'isConAbandoned' => 35, 'isConInaccessible' => 36, 'isConLocationHazardToAnimal' => 37, 'isConLocationHazardToHumans' => 38, 'isConUnknown' => 39, 'isConOther' => 40, 'isActionLeftAtSite' => 41, 'isActionImmediateReleaseAtSite' => 42, 'isActionRelocated' => 43, 'isActionDiedAtSite' => 44, 'isActionDiedDuringTransport' => 45, 'isActionEuthanizedAtSite' => 46, 'isActionEuthanizedDuringTransport' => 47, 'isActionTransferredToRehab' => 48, 'isActionOther' => 49, 'relocatedLocation' => 50, 'volunteerId' => 51, 'investigationNutritionalCondition' => 52, 'investigationAgeClass' => 53, 'liveAnimalsComments' => 54, ),
        BasePeer::TYPE_COLNAME => array (ReportPeer::ID => 0, ReportPeer::RESPONDER => 1, ReportPeer::CALL_DATE => 2, ReportPeer::CALL_FROM => 3, ReportPeer::CALLER_NAME => 4, ReportPeer::CALLER_PHONE_NUMBER => 5, ReportPeer::CALL_LOCATION => 6, ReportPeer::CALL_SPECIES => 7, ReportPeer::WHEN_FIRST_SEEN => 8, ReportPeer::CALL_COMMENTS => 9, ReportPeer::CALL_REFERRED_TO => 10, ReportPeer::CALL_CONDITION => 11, ReportPeer::INVESTIGATOR_SUPPORT => 12, ReportPeer::INVESTIGATION_DATE => 13, ReportPeer::INVESTIGATION_LAT_LOCATION => 14, ReportPeer::INVESTIGATION_LON_LOCATION => 15, ReportPeer::INVESTIGATION_LOCATION_ACCURACY => 16, ReportPeer::INVESTIGATION_PHYSICAL_LOCATION => 17, ReportPeer::INVESTIGATION_SPECIES => 18, ReportPeer::ANIMAL_NOT_FOUND => 19, ReportPeer::INVESTIGATION_CONDITION => 20, ReportPeer::TAGS => 21, ReportPeer::DISPOSITION => 22, ReportPeer::SEAL_PICKUP => 23, ReportPeer::SEX => 24, ReportPeer::WEIGHT => 25, ReportPeer::STRAIGHT_LENGTH => 26, ReportPeer::CONTOUR_LENGTH => 27, ReportPeer::GIRTH => 28, ReportPeer::INVESTIGATION_COMMENTS => 29, ReportPeer::IS_PHOTO_TAKEN => 30, ReportPeer::IS_CON_SICK => 31, ReportPeer::IS_CON_INJURED => 32, ReportPeer::IS_CON_OUT_OF_HABITAT => 33, ReportPeer::IS_CON_DEEMED_RELEASABLE => 34, ReportPeer::IS_CON_ABANDONED => 35, ReportPeer::IS_CON_INACCESSIBLE => 36, ReportPeer::IS_CON_LOCATION_HAZARD_TO_ANIMAL => 37, ReportPeer::IS_CON_LOCATION_HAZARD_TO_HUMANS => 38, ReportPeer::IS_CON_UNKNOWN => 39, ReportPeer::IS_CON_OTHER => 40, ReportPeer::IS_ACTION_LEFT_AT_SITE => 41, ReportPeer::IS_ACTION_IMMEDIATE_RELEASE_AT_SITE => 42, ReportPeer::IS_ACTION_RELOCATED => 43, ReportPeer::IS_ACTION_DIED_AT_SITE => 44, ReportPeer::IS_ACTION_DIED_DURING_TRANSPORT => 45, ReportPeer::IS_ACTION_EUTHANIZED_AT_SITE => 46, ReportPeer::IS_ACTION_EUTHANIZED_DURING_TRANSPORT => 47, ReportPeer::IS_ACTION_TRANSFERRED_TO_REHAB => 48, ReportPeer::IS_ACTION_OTHER => 49, ReportPeer::RELOCATED_LOCATION => 50, ReportPeer::VOLUNTEER_ID => 51, ReportPeer::INVESTIGATION_NUTRITIONAL_CONDITION => 52, ReportPeer::INVESTIGATION_AGE_CLASS => 53, ReportPeer::LIVE_ANIMALS_COMMENTS => 54, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'RESPONDER' => 1, 'CALL_DATE' => 2, 'CALL_FROM' => 3, 'CALLER_NAME' => 4, 'CALLER_PHONE_NUMBER' => 5, 'CALL_LOCATION' => 6, 'CALL_SPECIES' => 7, 'WHEN_FIRST_SEEN' => 8, 'CALL_COMMENTS' => 9, 'CALL_REFERRED_TO' => 10, 'CALL_CONDITION' => 11, 'INVESTIGATOR_SUPPORT' => 12, 'INVESTIGATION_DATE' => 13, 'INVESTIGATION_LAT_LOCATION' => 14, 'INVESTIGATION_LON_LOCATION' => 15, 'INVESTIGATION_LOCATION_ACCURACY' => 16, 'INVESTIGATION_PHYSICAL_LOCATION' => 17, 'INVESTIGATION_SPECIES' => 18, 'ANIMAL_NOT_FOUND' => 19, 'INVESTIGATION_CONDITION' => 20, 'TAGS' => 21, 'DISPOSITION' => 22, 'SEAL_PICKUP' => 23, 'SEX' => 24, 'WEIGHT' => 25, 'STRAIGHT_LENGTH' => 26, 'CONTOUR_LENGTH' => 27, 'GIRTH' => 28, 'INVESTIGATION_COMMENTS' => 29, 'IS_PHOTO_TAKEN' => 30, 'IS_CON_SICK' => 31, 'IS_CON_INJURED' => 32, 'IS_CON_OUT_OF_HABITAT' => 33, 'IS_CON_DEEMED_RELEASABLE' => 34, 'IS_CON_ABANDONED' => 35, 'IS_CON_INACCESSIBLE' => 36, 'IS_CON_LOCATION_HAZARD_TO_ANIMAL' => 37, 'IS_CON_LOCATION_HAZARD_TO_HUMANS' => 38, 'IS_CON_UNKNOWN' => 39, 'IS_CON_OTHER' => 40, 'IS_ACTION_LEFT_AT_SITE' => 41, 'IS_ACTION_IMMEDIATE_RELEASE_AT_SITE' => 42, 'IS_ACTION_RELOCATED' => 43, 'IS_ACTION_DIED_AT_SITE' => 44, 'IS_ACTION_DIED_DURING_TRANSPORT' => 45, 'IS_ACTION_EUTHANIZED_AT_SITE' => 46, 'IS_ACTION_EUTHANIZED_DURING_TRANSPORT' => 47, 'IS_ACTION_TRANSFERRED_TO_REHAB' => 48, 'IS_ACTION_OTHER' => 49, 'RELOCATED_LOCATION' => 50, 'VOLUNTEER_ID' => 51, 'INVESTIGATION_NUTRITIONAL_CONDITION' => 52, 'INVESTIGATION_AGE_CLASS' => 53, 'LIVE_ANIMALS_COMMENTS' => 54, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'responder' => 1, 'call_date' => 2, 'call_from' => 3, 'caller_name' => 4, 'caller_phone_number' => 5, 'call_location' => 6, 'call_species' => 7, 'when_first_seen' => 8, 'call_comments' => 9, 'call_referred_to' => 10, 'call_condition' => 11, 'investigator_support' => 12, 'investigation_date' => 13, 'investigation_lat_location' => 14, 'investigation_lon_location' => 15, 'investigation_location_accuracy' => 16, 'investigation_physical_location' => 17, 'investigation_species' => 18, 'animal_not_found' => 19, 'investigation_condition' => 20, 'tags' => 21, 'disposition' => 22, 'seal_pickup' => 23, 'sex' => 24, 'weight' => 25, 'straight_length' => 26, 'contour_length' => 27, 'girth' => 28, 'investigation_comments' => 29, 'is_photo_taken' => 30, 'is_con_sick' => 31, 'is_con_injured' => 32, 'is_con_out_of_habitat' => 33, 'is_con_deemed_releasable' => 34, 'is_con_abandoned' => 35, 'is_con_inaccessible' => 36, 'is_con_location_hazard_to_animal' => 37, 'is_con_location_hazard_to_humans' => 38, 'is_con_unknown' => 39, 'is_con_other' => 40, 'is_action_left_at_site' => 41, 'is_action_immediate_release_at_site' => 42, 'is_action_relocated' => 43, 'is_action_died_at_site' => 44, 'is_action_died_during_transport' => 45, 'is_action_euthanized_at_site' => 46, 'is_action_euthanized_during_transport' => 47, 'is_action_transferred_to_rehab' => 48, 'is_action_other' => 49, 'relocated_location' => 50, 'volunteer_id' => 51, 'investigation_nutritional_condition' => 52, 'investigation_age_class' => 53, 'live_animals_comments' => 54, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = ReportPeer::getFieldNames($toType);
        $key = isset(ReportPeer::$fieldKeys[$fromType][$name]) ? ReportPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ReportPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, ReportPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ReportPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. ReportPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ReportPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ReportPeer::ID);
            $criteria->addSelectColumn(ReportPeer::RESPONDER);
            $criteria->addSelectColumn(ReportPeer::CALL_DATE);
            $criteria->addSelectColumn(ReportPeer::CALL_FROM);
            $criteria->addSelectColumn(ReportPeer::CALLER_NAME);
            $criteria->addSelectColumn(ReportPeer::CALLER_PHONE_NUMBER);
            $criteria->addSelectColumn(ReportPeer::CALL_LOCATION);
            $criteria->addSelectColumn(ReportPeer::CALL_SPECIES);
            $criteria->addSelectColumn(ReportPeer::WHEN_FIRST_SEEN);
            $criteria->addSelectColumn(ReportPeer::CALL_COMMENTS);
            $criteria->addSelectColumn(ReportPeer::CALL_REFERRED_TO);
            $criteria->addSelectColumn(ReportPeer::CALL_CONDITION);
            $criteria->addSelectColumn(ReportPeer::INVESTIGATOR_SUPPORT);
            $criteria->addSelectColumn(ReportPeer::INVESTIGATION_DATE);
            $criteria->addSelectColumn(ReportPeer::INVESTIGATION_LAT_LOCATION);
            $criteria->addSelectColumn(ReportPeer::INVESTIGATION_LON_LOCATION);
            $criteria->addSelectColumn(ReportPeer::INVESTIGATION_LOCATION_ACCURACY);
            $criteria->addSelectColumn(ReportPeer::INVESTIGATION_PHYSICAL_LOCATION);
            $criteria->addSelectColumn(ReportPeer::INVESTIGATION_SPECIES);
            $criteria->addSelectColumn(ReportPeer::ANIMAL_NOT_FOUND);
            $criteria->addSelectColumn(ReportPeer::INVESTIGATION_CONDITION);
            $criteria->addSelectColumn(ReportPeer::TAGS);
            $criteria->addSelectColumn(ReportPeer::DISPOSITION);
            $criteria->addSelectColumn(ReportPeer::SEAL_PICKUP);
            $criteria->addSelectColumn(ReportPeer::SEX);
            $criteria->addSelectColumn(ReportPeer::WEIGHT);
            $criteria->addSelectColumn(ReportPeer::STRAIGHT_LENGTH);
            $criteria->addSelectColumn(ReportPeer::CONTOUR_LENGTH);
            $criteria->addSelectColumn(ReportPeer::GIRTH);
            $criteria->addSelectColumn(ReportPeer::INVESTIGATION_COMMENTS);
            $criteria->addSelectColumn(ReportPeer::IS_PHOTO_TAKEN);
            $criteria->addSelectColumn(ReportPeer::IS_CON_SICK);
            $criteria->addSelectColumn(ReportPeer::IS_CON_INJURED);
            $criteria->addSelectColumn(ReportPeer::IS_CON_OUT_OF_HABITAT);
            $criteria->addSelectColumn(ReportPeer::IS_CON_DEEMED_RELEASABLE);
            $criteria->addSelectColumn(ReportPeer::IS_CON_ABANDONED);
            $criteria->addSelectColumn(ReportPeer::IS_CON_INACCESSIBLE);
            $criteria->addSelectColumn(ReportPeer::IS_CON_LOCATION_HAZARD_TO_ANIMAL);
            $criteria->addSelectColumn(ReportPeer::IS_CON_LOCATION_HAZARD_TO_HUMANS);
            $criteria->addSelectColumn(ReportPeer::IS_CON_UNKNOWN);
            $criteria->addSelectColumn(ReportPeer::IS_CON_OTHER);
            $criteria->addSelectColumn(ReportPeer::IS_ACTION_LEFT_AT_SITE);
            $criteria->addSelectColumn(ReportPeer::IS_ACTION_IMMEDIATE_RELEASE_AT_SITE);
            $criteria->addSelectColumn(ReportPeer::IS_ACTION_RELOCATED);
            $criteria->addSelectColumn(ReportPeer::IS_ACTION_DIED_AT_SITE);
            $criteria->addSelectColumn(ReportPeer::IS_ACTION_DIED_DURING_TRANSPORT);
            $criteria->addSelectColumn(ReportPeer::IS_ACTION_EUTHANIZED_AT_SITE);
            $criteria->addSelectColumn(ReportPeer::IS_ACTION_EUTHANIZED_DURING_TRANSPORT);
            $criteria->addSelectColumn(ReportPeer::IS_ACTION_TRANSFERRED_TO_REHAB);
            $criteria->addSelectColumn(ReportPeer::IS_ACTION_OTHER);
            $criteria->addSelectColumn(ReportPeer::RELOCATED_LOCATION);
            $criteria->addSelectColumn(ReportPeer::VOLUNTEER_ID);
            $criteria->addSelectColumn(ReportPeer::INVESTIGATION_NUTRITIONAL_CONDITION);
            $criteria->addSelectColumn(ReportPeer::INVESTIGATION_AGE_CLASS);
            $criteria->addSelectColumn(ReportPeer::LIVE_ANIMALS_COMMENTS);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.responder');
            $criteria->addSelectColumn($alias . '.call_date');
            $criteria->addSelectColumn($alias . '.call_from');
            $criteria->addSelectColumn($alias . '.caller_name');
            $criteria->addSelectColumn($alias . '.caller_phone_number');
            $criteria->addSelectColumn($alias . '.call_location');
            $criteria->addSelectColumn($alias . '.call_species');
            $criteria->addSelectColumn($alias . '.when_first_seen');
            $criteria->addSelectColumn($alias . '.call_comments');
            $criteria->addSelectColumn($alias . '.call_referred_to');
            $criteria->addSelectColumn($alias . '.call_condition');
            $criteria->addSelectColumn($alias . '.investigator_support');
            $criteria->addSelectColumn($alias . '.investigation_date');
            $criteria->addSelectColumn($alias . '.investigation_lat_location');
            $criteria->addSelectColumn($alias . '.investigation_lon_location');
            $criteria->addSelectColumn($alias . '.investigation_location_accuracy');
            $criteria->addSelectColumn($alias . '.investigation_physical_location');
            $criteria->addSelectColumn($alias . '.investigation_species');
            $criteria->addSelectColumn($alias . '.animal_not_found');
            $criteria->addSelectColumn($alias . '.investigation_condition');
            $criteria->addSelectColumn($alias . '.tags');
            $criteria->addSelectColumn($alias . '.disposition');
            $criteria->addSelectColumn($alias . '.seal_pickup');
            $criteria->addSelectColumn($alias . '.sex');
            $criteria->addSelectColumn($alias . '.weight');
            $criteria->addSelectColumn($alias . '.straight_length');
            $criteria->addSelectColumn($alias . '.contour_length');
            $criteria->addSelectColumn($alias . '.girth');
            $criteria->addSelectColumn($alias . '.investigation_comments');
            $criteria->addSelectColumn($alias . '.is_photo_taken');
            $criteria->addSelectColumn($alias . '.is_con_sick');
            $criteria->addSelectColumn($alias . '.is_con_injured');
            $criteria->addSelectColumn($alias . '.is_con_out_of_habitat');
            $criteria->addSelectColumn($alias . '.is_con_deemed_releasable');
            $criteria->addSelectColumn($alias . '.is_con_abandoned');
            $criteria->addSelectColumn($alias . '.is_con_inaccessible');
            $criteria->addSelectColumn($alias . '.is_con_location_hazard_to_animal');
            $criteria->addSelectColumn($alias . '.is_con_location_hazard_to_humans');
            $criteria->addSelectColumn($alias . '.is_con_unknown');
            $criteria->addSelectColumn($alias . '.is_con_other');
            $criteria->addSelectColumn($alias . '.is_action_left_at_site');
            $criteria->addSelectColumn($alias . '.is_action_immediate_release_at_site');
            $criteria->addSelectColumn($alias . '.is_action_relocated');
            $criteria->addSelectColumn($alias . '.is_action_died_at_site');
            $criteria->addSelectColumn($alias . '.is_action_died_during_transport');
            $criteria->addSelectColumn($alias . '.is_action_euthanized_at_site');
            $criteria->addSelectColumn($alias . '.is_action_euthanized_during_transport');
            $criteria->addSelectColumn($alias . '.is_action_transferred_to_rehab');
            $criteria->addSelectColumn($alias . '.is_action_other');
            $criteria->addSelectColumn($alias . '.relocated_location');
            $criteria->addSelectColumn($alias . '.volunteer_id');
            $criteria->addSelectColumn($alias . '.investigation_nutritional_condition');
            $criteria->addSelectColumn($alias . '.investigation_age_class');
            $criteria->addSelectColumn($alias . '.live_animals_comments');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ReportPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ReportPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ReportPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Report
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ReportPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return ReportPeer::populateObjects(ReportPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ReportPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ReportPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Report $obj A Report object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            ReportPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Report object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Report) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Report object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ReportPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Report Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ReportPeer::$instances[$key])) {
                return ReportPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (ReportPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ReportPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to report
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = ReportPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ReportPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ReportPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ReportPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Report object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ReportPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ReportPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ReportPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ReportPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ReportPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Volunteer table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinVolunteer(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ReportPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ReportPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ReportPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ReportPeer::VOLUNTEER_ID, VolunteerPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Report objects pre-filled with their Volunteer objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Report objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinVolunteer(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ReportPeer::DATABASE_NAME);
        }

        ReportPeer::addSelectColumns($criteria);
        $startcol = ReportPeer::NUM_HYDRATE_COLUMNS;
        VolunteerPeer::addSelectColumns($criteria);

        $criteria->addJoin(ReportPeer::VOLUNTEER_ID, VolunteerPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ReportPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ReportPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ReportPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ReportPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = VolunteerPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = VolunteerPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = VolunteerPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    VolunteerPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Report) to $obj2 (Volunteer)
                $obj2->addReport($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ReportPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ReportPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ReportPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ReportPeer::VOLUNTEER_ID, VolunteerPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Report objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Report objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ReportPeer::DATABASE_NAME);
        }

        ReportPeer::addSelectColumns($criteria);
        $startcol2 = ReportPeer::NUM_HYDRATE_COLUMNS;

        VolunteerPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + VolunteerPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ReportPeer::VOLUNTEER_ID, VolunteerPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ReportPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ReportPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ReportPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ReportPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Volunteer rows

            $key2 = VolunteerPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = VolunteerPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = VolunteerPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    VolunteerPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Report) to the collection in $obj2 (Volunteer)
                $obj2->addReport($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(ReportPeer::DATABASE_NAME)->getTable(ReportPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseReportPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseReportPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ReportTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return ReportPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Report or Criteria object.
     *
     * @param      mixed $values Criteria or Report object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Report object
        }

        if ($criteria->containsKey(ReportPeer::ID) && $criteria->keyContainsValue(ReportPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ReportPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ReportPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Report or Criteria object.
     *
     * @param      mixed $values Criteria or Report object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ReportPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ReportPeer::ID);
            $value = $criteria->remove(ReportPeer::ID);
            if ($value) {
                $selectCriteria->add(ReportPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ReportPeer::TABLE_NAME);
            }

        } else { // $values is Report object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ReportPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the report table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ReportPeer::TABLE_NAME, $con, ReportPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ReportPeer::clearInstancePool();
            ReportPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Report or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Report object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ReportPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Report) { // it's a model object
            // invalidate the cache for this single object
            ReportPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ReportPeer::DATABASE_NAME);
            $criteria->add(ReportPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ReportPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ReportPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ReportPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Report object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Report $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ReportPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ReportPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(ReportPeer::DATABASE_NAME, ReportPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Report
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ReportPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ReportPeer::DATABASE_NAME);
        $criteria->add(ReportPeer::ID, $pk);

        $v = ReportPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Report[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ReportPeer::DATABASE_NAME);
            $criteria->add(ReportPeer::ID, $pks, Criteria::IN);
            $objs = ReportPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseReportPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseReportPeer::buildTableMap();

