<?php


/**
 * Base static class for performing query and update operations on the 'volunteer' table.
 *
 * a volunteer
 *
 * @package propel.generator.persistence.om
 */
abstract class BaseVolunteerPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'persistence';

    /** the table name for this class */
    const TABLE_NAME = 'volunteer';

    /** the related Propel class for this table */
    const OM_CLASS = 'Volunteer';

    /** the related TableMap class for this table */
    const TM_CLASS = 'VolunteerTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 41;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 41;

    /** the column name for the id field */
    const ID = 'volunteer.id';

    /** the column name for the first_name field */
    const FIRST_NAME = 'volunteer.first_name';

    /** the column name for the last_name field */
    const LAST_NAME = 'volunteer.last_name';

    /** the column name for the city field */
    const CITY = 'volunteer.city';

    /** the column name for the state field */
    const STATE = 'volunteer.state';

    /** the column name for the zip field */
    const ZIP = 'volunteer.zip';

    /** the column name for the streetAddress field */
    const STREETADDRESS = 'volunteer.streetAddress';

    /** the column name for the vehicle field */
    const VEHICLE = 'volunteer.vehicle';

    /** the column name for the island field */
    const ISLAND = 'volunteer.island';

    /** the column name for the email field */
    const EMAIL = 'volunteer.email';

    /** the column name for the training field */
    const TRAINING = 'volunteer.training';

    /** the column name for the comments field */
    const COMMENTS = 'volunteer.comments';

    /** the column name for the phoneNumber field */
    const PHONENUMBER = 'volunteer.phoneNumber';

    /** the column name for the sunday_from_hour field */
    const SUNDAY_FROM_HOUR = 'volunteer.sunday_from_hour';

    /** the column name for the monday_from_hour field */
    const MONDAY_FROM_HOUR = 'volunteer.monday_from_hour';

    /** the column name for the tuesday_from_hour field */
    const TUESDAY_FROM_HOUR = 'volunteer.tuesday_from_hour';

    /** the column name for the wednesday_from_hour field */
    const WEDNESDAY_FROM_HOUR = 'volunteer.wednesday_from_hour';

    /** the column name for the thursday_from_hour field */
    const THURSDAY_FROM_HOUR = 'volunteer.thursday_from_hour';

    /** the column name for the friday_from_hour field */
    const FRIDAY_FROM_HOUR = 'volunteer.friday_from_hour';

    /** the column name for the saturday_from_hour field */
    const SATURDAY_FROM_HOUR = 'volunteer.saturday_from_hour';

    /** the column name for the sunday_to_hour field */
    const SUNDAY_TO_HOUR = 'volunteer.sunday_to_hour';

    /** the column name for the monday_to_hour field */
    const MONDAY_TO_HOUR = 'volunteer.monday_to_hour';

    /** the column name for the tuesday_to_hour field */
    const TUESDAY_TO_HOUR = 'volunteer.tuesday_to_hour';

    /** the column name for the wednesday_to_hour field */
    const WEDNESDAY_TO_HOUR = 'volunteer.wednesday_to_hour';

    /** the column name for the thursday_to_hour field */
    const THURSDAY_TO_HOUR = 'volunteer.thursday_to_hour';

    /** the column name for the friday_to_hour field */
    const FRIDAY_TO_HOUR = 'volunteer.friday_to_hour';

    /** the column name for the saturday_to_hour field */
    const SATURDAY_TO_HOUR = 'volunteer.saturday_to_hour';

    /** the column name for the sunday_any_time field */
    const SUNDAY_ANY_TIME = 'volunteer.sunday_any_time';

    /** the column name for the monday_any_time field */
    const MONDAY_ANY_TIME = 'volunteer.monday_any_time';

    /** the column name for the tuesday_any_time field */
    const TUESDAY_ANY_TIME = 'volunteer.tuesday_any_time';

    /** the column name for the wednesday_any_time field */
    const WEDNESDAY_ANY_TIME = 'volunteer.wednesday_any_time';

    /** the column name for the thursday_any_time field */
    const THURSDAY_ANY_TIME = 'volunteer.thursday_any_time';

    /** the column name for the friday_any_time field */
    const FRIDAY_ANY_TIME = 'volunteer.friday_any_time';

    /** the column name for the saturday_any_time field */
    const SATURDAY_ANY_TIME = 'volunteer.saturday_any_time';

    /** the column name for the sunday_no_time field */
    const SUNDAY_NO_TIME = 'volunteer.sunday_no_time';

    /** the column name for the monday_no_time field */
    const MONDAY_NO_TIME = 'volunteer.monday_no_time';

    /** the column name for the tuesday_no_time field */
    const TUESDAY_NO_TIME = 'volunteer.tuesday_no_time';

    /** the column name for the wednesday_no_time field */
    const WEDNESDAY_NO_TIME = 'volunteer.wednesday_no_time';

    /** the column name for the thursday_no_time field */
    const THURSDAY_NO_TIME = 'volunteer.thursday_no_time';

    /** the column name for the friday_no_time field */
    const FRIDAY_NO_TIME = 'volunteer.friday_no_time';

    /** the column name for the saturday_no_time field */
    const SATURDAY_NO_TIME = 'volunteer.saturday_no_time';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Volunteer objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Volunteer[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. VolunteerPeer::$fieldNames[VolunteerPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'FirstName', 'LastName', 'City', 'State', 'Zip', 'Streetaddress', 'Vehicle', 'Island', 'Email', 'Training', 'Comments', 'Phonenumber', 'SundayFromHour', 'MondayFromHour', 'TuesdayFromHour', 'WednesdayFromHour', 'ThursdayFromHour', 'FridayFromHour', 'SaturdayFromHour', 'SundayToHour', 'MondayToHour', 'TuesdayToHour', 'WednesdayToHour', 'ThursdayToHour', 'FridayToHour', 'SaturdayToHour', 'SundayAnyTime', 'MondayAnyTime', 'TuesdayAnyTime', 'WednesdayAnyTime', 'ThursdayAnyTime', 'FridayAnyTime', 'SaturdayAnyTime', 'SundayNoTime', 'MondayNoTime', 'TuesdayNoTime', 'WednesdayNoTime', 'ThursdayNoTime', 'FridayNoTime', 'SaturdayNoTime', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'firstName', 'lastName', 'city', 'state', 'zip', 'streetaddress', 'vehicle', 'island', 'email', 'training', 'comments', 'phonenumber', 'sundayFromHour', 'mondayFromHour', 'tuesdayFromHour', 'wednesdayFromHour', 'thursdayFromHour', 'fridayFromHour', 'saturdayFromHour', 'sundayToHour', 'mondayToHour', 'tuesdayToHour', 'wednesdayToHour', 'thursdayToHour', 'fridayToHour', 'saturdayToHour', 'sundayAnyTime', 'mondayAnyTime', 'tuesdayAnyTime', 'wednesdayAnyTime', 'thursdayAnyTime', 'fridayAnyTime', 'saturdayAnyTime', 'sundayNoTime', 'mondayNoTime', 'tuesdayNoTime', 'wednesdayNoTime', 'thursdayNoTime', 'fridayNoTime', 'saturdayNoTime', ),
        BasePeer::TYPE_COLNAME => array (VolunteerPeer::ID, VolunteerPeer::FIRST_NAME, VolunteerPeer::LAST_NAME, VolunteerPeer::CITY, VolunteerPeer::STATE, VolunteerPeer::ZIP, VolunteerPeer::STREETADDRESS, VolunteerPeer::VEHICLE, VolunteerPeer::ISLAND, VolunteerPeer::EMAIL, VolunteerPeer::TRAINING, VolunteerPeer::COMMENTS, VolunteerPeer::PHONENUMBER, VolunteerPeer::SUNDAY_FROM_HOUR, VolunteerPeer::MONDAY_FROM_HOUR, VolunteerPeer::TUESDAY_FROM_HOUR, VolunteerPeer::WEDNESDAY_FROM_HOUR, VolunteerPeer::THURSDAY_FROM_HOUR, VolunteerPeer::FRIDAY_FROM_HOUR, VolunteerPeer::SATURDAY_FROM_HOUR, VolunteerPeer::SUNDAY_TO_HOUR, VolunteerPeer::MONDAY_TO_HOUR, VolunteerPeer::TUESDAY_TO_HOUR, VolunteerPeer::WEDNESDAY_TO_HOUR, VolunteerPeer::THURSDAY_TO_HOUR, VolunteerPeer::FRIDAY_TO_HOUR, VolunteerPeer::SATURDAY_TO_HOUR, VolunteerPeer::SUNDAY_ANY_TIME, VolunteerPeer::MONDAY_ANY_TIME, VolunteerPeer::TUESDAY_ANY_TIME, VolunteerPeer::WEDNESDAY_ANY_TIME, VolunteerPeer::THURSDAY_ANY_TIME, VolunteerPeer::FRIDAY_ANY_TIME, VolunteerPeer::SATURDAY_ANY_TIME, VolunteerPeer::SUNDAY_NO_TIME, VolunteerPeer::MONDAY_NO_TIME, VolunteerPeer::TUESDAY_NO_TIME, VolunteerPeer::WEDNESDAY_NO_TIME, VolunteerPeer::THURSDAY_NO_TIME, VolunteerPeer::FRIDAY_NO_TIME, VolunteerPeer::SATURDAY_NO_TIME, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'FIRST_NAME', 'LAST_NAME', 'CITY', 'STATE', 'ZIP', 'STREETADDRESS', 'VEHICLE', 'ISLAND', 'EMAIL', 'TRAINING', 'COMMENTS', 'PHONENUMBER', 'SUNDAY_FROM_HOUR', 'MONDAY_FROM_HOUR', 'TUESDAY_FROM_HOUR', 'WEDNESDAY_FROM_HOUR', 'THURSDAY_FROM_HOUR', 'FRIDAY_FROM_HOUR', 'SATURDAY_FROM_HOUR', 'SUNDAY_TO_HOUR', 'MONDAY_TO_HOUR', 'TUESDAY_TO_HOUR', 'WEDNESDAY_TO_HOUR', 'THURSDAY_TO_HOUR', 'FRIDAY_TO_HOUR', 'SATURDAY_TO_HOUR', 'SUNDAY_ANY_TIME', 'MONDAY_ANY_TIME', 'TUESDAY_ANY_TIME', 'WEDNESDAY_ANY_TIME', 'THURSDAY_ANY_TIME', 'FRIDAY_ANY_TIME', 'SATURDAY_ANY_TIME', 'SUNDAY_NO_TIME', 'MONDAY_NO_TIME', 'TUESDAY_NO_TIME', 'WEDNESDAY_NO_TIME', 'THURSDAY_NO_TIME', 'FRIDAY_NO_TIME', 'SATURDAY_NO_TIME', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'first_name', 'last_name', 'city', 'state', 'zip', 'streetAddress', 'vehicle', 'island', 'email', 'training', 'comments', 'phoneNumber', 'sunday_from_hour', 'monday_from_hour', 'tuesday_from_hour', 'wednesday_from_hour', 'thursday_from_hour', 'friday_from_hour', 'saturday_from_hour', 'sunday_to_hour', 'monday_to_hour', 'tuesday_to_hour', 'wednesday_to_hour', 'thursday_to_hour', 'friday_to_hour', 'saturday_to_hour', 'sunday_any_time', 'monday_any_time', 'tuesday_any_time', 'wednesday_any_time', 'thursday_any_time', 'friday_any_time', 'saturday_any_time', 'sunday_no_time', 'monday_no_time', 'tuesday_no_time', 'wednesday_no_time', 'thursday_no_time', 'friday_no_time', 'saturday_no_time', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. VolunteerPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'FirstName' => 1, 'LastName' => 2, 'City' => 3, 'State' => 4, 'Zip' => 5, 'Streetaddress' => 6, 'Vehicle' => 7, 'Island' => 8, 'Email' => 9, 'Training' => 10, 'Comments' => 11, 'Phonenumber' => 12, 'SundayFromHour' => 13, 'MondayFromHour' => 14, 'TuesdayFromHour' => 15, 'WednesdayFromHour' => 16, 'ThursdayFromHour' => 17, 'FridayFromHour' => 18, 'SaturdayFromHour' => 19, 'SundayToHour' => 20, 'MondayToHour' => 21, 'TuesdayToHour' => 22, 'WednesdayToHour' => 23, 'ThursdayToHour' => 24, 'FridayToHour' => 25, 'SaturdayToHour' => 26, 'SundayAnyTime' => 27, 'MondayAnyTime' => 28, 'TuesdayAnyTime' => 29, 'WednesdayAnyTime' => 30, 'ThursdayAnyTime' => 31, 'FridayAnyTime' => 32, 'SaturdayAnyTime' => 33, 'SundayNoTime' => 34, 'MondayNoTime' => 35, 'TuesdayNoTime' => 36, 'WednesdayNoTime' => 37, 'ThursdayNoTime' => 38, 'FridayNoTime' => 39, 'SaturdayNoTime' => 40, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'firstName' => 1, 'lastName' => 2, 'city' => 3, 'state' => 4, 'zip' => 5, 'streetaddress' => 6, 'vehicle' => 7, 'island' => 8, 'email' => 9, 'training' => 10, 'comments' => 11, 'phonenumber' => 12, 'sundayFromHour' => 13, 'mondayFromHour' => 14, 'tuesdayFromHour' => 15, 'wednesdayFromHour' => 16, 'thursdayFromHour' => 17, 'fridayFromHour' => 18, 'saturdayFromHour' => 19, 'sundayToHour' => 20, 'mondayToHour' => 21, 'tuesdayToHour' => 22, 'wednesdayToHour' => 23, 'thursdayToHour' => 24, 'fridayToHour' => 25, 'saturdayToHour' => 26, 'sundayAnyTime' => 27, 'mondayAnyTime' => 28, 'tuesdayAnyTime' => 29, 'wednesdayAnyTime' => 30, 'thursdayAnyTime' => 31, 'fridayAnyTime' => 32, 'saturdayAnyTime' => 33, 'sundayNoTime' => 34, 'mondayNoTime' => 35, 'tuesdayNoTime' => 36, 'wednesdayNoTime' => 37, 'thursdayNoTime' => 38, 'fridayNoTime' => 39, 'saturdayNoTime' => 40, ),
        BasePeer::TYPE_COLNAME => array (VolunteerPeer::ID => 0, VolunteerPeer::FIRST_NAME => 1, VolunteerPeer::LAST_NAME => 2, VolunteerPeer::CITY => 3, VolunteerPeer::STATE => 4, VolunteerPeer::ZIP => 5, VolunteerPeer::STREETADDRESS => 6, VolunteerPeer::VEHICLE => 7, VolunteerPeer::ISLAND => 8, VolunteerPeer::EMAIL => 9, VolunteerPeer::TRAINING => 10, VolunteerPeer::COMMENTS => 11, VolunteerPeer::PHONENUMBER => 12, VolunteerPeer::SUNDAY_FROM_HOUR => 13, VolunteerPeer::MONDAY_FROM_HOUR => 14, VolunteerPeer::TUESDAY_FROM_HOUR => 15, VolunteerPeer::WEDNESDAY_FROM_HOUR => 16, VolunteerPeer::THURSDAY_FROM_HOUR => 17, VolunteerPeer::FRIDAY_FROM_HOUR => 18, VolunteerPeer::SATURDAY_FROM_HOUR => 19, VolunteerPeer::SUNDAY_TO_HOUR => 20, VolunteerPeer::MONDAY_TO_HOUR => 21, VolunteerPeer::TUESDAY_TO_HOUR => 22, VolunteerPeer::WEDNESDAY_TO_HOUR => 23, VolunteerPeer::THURSDAY_TO_HOUR => 24, VolunteerPeer::FRIDAY_TO_HOUR => 25, VolunteerPeer::SATURDAY_TO_HOUR => 26, VolunteerPeer::SUNDAY_ANY_TIME => 27, VolunteerPeer::MONDAY_ANY_TIME => 28, VolunteerPeer::TUESDAY_ANY_TIME => 29, VolunteerPeer::WEDNESDAY_ANY_TIME => 30, VolunteerPeer::THURSDAY_ANY_TIME => 31, VolunteerPeer::FRIDAY_ANY_TIME => 32, VolunteerPeer::SATURDAY_ANY_TIME => 33, VolunteerPeer::SUNDAY_NO_TIME => 34, VolunteerPeer::MONDAY_NO_TIME => 35, VolunteerPeer::TUESDAY_NO_TIME => 36, VolunteerPeer::WEDNESDAY_NO_TIME => 37, VolunteerPeer::THURSDAY_NO_TIME => 38, VolunteerPeer::FRIDAY_NO_TIME => 39, VolunteerPeer::SATURDAY_NO_TIME => 40, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'FIRST_NAME' => 1, 'LAST_NAME' => 2, 'CITY' => 3, 'STATE' => 4, 'ZIP' => 5, 'STREETADDRESS' => 6, 'VEHICLE' => 7, 'ISLAND' => 8, 'EMAIL' => 9, 'TRAINING' => 10, 'COMMENTS' => 11, 'PHONENUMBER' => 12, 'SUNDAY_FROM_HOUR' => 13, 'MONDAY_FROM_HOUR' => 14, 'TUESDAY_FROM_HOUR' => 15, 'WEDNESDAY_FROM_HOUR' => 16, 'THURSDAY_FROM_HOUR' => 17, 'FRIDAY_FROM_HOUR' => 18, 'SATURDAY_FROM_HOUR' => 19, 'SUNDAY_TO_HOUR' => 20, 'MONDAY_TO_HOUR' => 21, 'TUESDAY_TO_HOUR' => 22, 'WEDNESDAY_TO_HOUR' => 23, 'THURSDAY_TO_HOUR' => 24, 'FRIDAY_TO_HOUR' => 25, 'SATURDAY_TO_HOUR' => 26, 'SUNDAY_ANY_TIME' => 27, 'MONDAY_ANY_TIME' => 28, 'TUESDAY_ANY_TIME' => 29, 'WEDNESDAY_ANY_TIME' => 30, 'THURSDAY_ANY_TIME' => 31, 'FRIDAY_ANY_TIME' => 32, 'SATURDAY_ANY_TIME' => 33, 'SUNDAY_NO_TIME' => 34, 'MONDAY_NO_TIME' => 35, 'TUESDAY_NO_TIME' => 36, 'WEDNESDAY_NO_TIME' => 37, 'THURSDAY_NO_TIME' => 38, 'FRIDAY_NO_TIME' => 39, 'SATURDAY_NO_TIME' => 40, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'first_name' => 1, 'last_name' => 2, 'city' => 3, 'state' => 4, 'zip' => 5, 'streetAddress' => 6, 'vehicle' => 7, 'island' => 8, 'email' => 9, 'training' => 10, 'comments' => 11, 'phoneNumber' => 12, 'sunday_from_hour' => 13, 'monday_from_hour' => 14, 'tuesday_from_hour' => 15, 'wednesday_from_hour' => 16, 'thursday_from_hour' => 17, 'friday_from_hour' => 18, 'saturday_from_hour' => 19, 'sunday_to_hour' => 20, 'monday_to_hour' => 21, 'tuesday_to_hour' => 22, 'wednesday_to_hour' => 23, 'thursday_to_hour' => 24, 'friday_to_hour' => 25, 'saturday_to_hour' => 26, 'sunday_any_time' => 27, 'monday_any_time' => 28, 'tuesday_any_time' => 29, 'wednesday_any_time' => 30, 'thursday_any_time' => 31, 'friday_any_time' => 32, 'saturday_any_time' => 33, 'sunday_no_time' => 34, 'monday_no_time' => 35, 'tuesday_no_time' => 36, 'wednesday_no_time' => 37, 'thursday_no_time' => 38, 'friday_no_time' => 39, 'saturday_no_time' => 40, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, )
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
        $toNames = VolunteerPeer::getFieldNames($toType);
        $key = isset(VolunteerPeer::$fieldKeys[$fromType][$name]) ? VolunteerPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(VolunteerPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, VolunteerPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return VolunteerPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. VolunteerPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(VolunteerPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(VolunteerPeer::ID);
            $criteria->addSelectColumn(VolunteerPeer::FIRST_NAME);
            $criteria->addSelectColumn(VolunteerPeer::LAST_NAME);
            $criteria->addSelectColumn(VolunteerPeer::CITY);
            $criteria->addSelectColumn(VolunteerPeer::STATE);
            $criteria->addSelectColumn(VolunteerPeer::ZIP);
            $criteria->addSelectColumn(VolunteerPeer::STREETADDRESS);
            $criteria->addSelectColumn(VolunteerPeer::VEHICLE);
            $criteria->addSelectColumn(VolunteerPeer::ISLAND);
            $criteria->addSelectColumn(VolunteerPeer::EMAIL);
            $criteria->addSelectColumn(VolunteerPeer::TRAINING);
            $criteria->addSelectColumn(VolunteerPeer::COMMENTS);
            $criteria->addSelectColumn(VolunteerPeer::PHONENUMBER);
            $criteria->addSelectColumn(VolunteerPeer::SUNDAY_FROM_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::MONDAY_FROM_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::TUESDAY_FROM_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::WEDNESDAY_FROM_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::THURSDAY_FROM_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::FRIDAY_FROM_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::SATURDAY_FROM_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::SUNDAY_TO_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::MONDAY_TO_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::TUESDAY_TO_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::WEDNESDAY_TO_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::THURSDAY_TO_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::FRIDAY_TO_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::SATURDAY_TO_HOUR);
            $criteria->addSelectColumn(VolunteerPeer::SUNDAY_ANY_TIME);
            $criteria->addSelectColumn(VolunteerPeer::MONDAY_ANY_TIME);
            $criteria->addSelectColumn(VolunteerPeer::TUESDAY_ANY_TIME);
            $criteria->addSelectColumn(VolunteerPeer::WEDNESDAY_ANY_TIME);
            $criteria->addSelectColumn(VolunteerPeer::THURSDAY_ANY_TIME);
            $criteria->addSelectColumn(VolunteerPeer::FRIDAY_ANY_TIME);
            $criteria->addSelectColumn(VolunteerPeer::SATURDAY_ANY_TIME);
            $criteria->addSelectColumn(VolunteerPeer::SUNDAY_NO_TIME);
            $criteria->addSelectColumn(VolunteerPeer::MONDAY_NO_TIME);
            $criteria->addSelectColumn(VolunteerPeer::TUESDAY_NO_TIME);
            $criteria->addSelectColumn(VolunteerPeer::WEDNESDAY_NO_TIME);
            $criteria->addSelectColumn(VolunteerPeer::THURSDAY_NO_TIME);
            $criteria->addSelectColumn(VolunteerPeer::FRIDAY_NO_TIME);
            $criteria->addSelectColumn(VolunteerPeer::SATURDAY_NO_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.first_name');
            $criteria->addSelectColumn($alias . '.last_name');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.state');
            $criteria->addSelectColumn($alias . '.zip');
            $criteria->addSelectColumn($alias . '.streetAddress');
            $criteria->addSelectColumn($alias . '.vehicle');
            $criteria->addSelectColumn($alias . '.island');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.training');
            $criteria->addSelectColumn($alias . '.comments');
            $criteria->addSelectColumn($alias . '.phoneNumber');
            $criteria->addSelectColumn($alias . '.sunday_from_hour');
            $criteria->addSelectColumn($alias . '.monday_from_hour');
            $criteria->addSelectColumn($alias . '.tuesday_from_hour');
            $criteria->addSelectColumn($alias . '.wednesday_from_hour');
            $criteria->addSelectColumn($alias . '.thursday_from_hour');
            $criteria->addSelectColumn($alias . '.friday_from_hour');
            $criteria->addSelectColumn($alias . '.saturday_from_hour');
            $criteria->addSelectColumn($alias . '.sunday_to_hour');
            $criteria->addSelectColumn($alias . '.monday_to_hour');
            $criteria->addSelectColumn($alias . '.tuesday_to_hour');
            $criteria->addSelectColumn($alias . '.wednesday_to_hour');
            $criteria->addSelectColumn($alias . '.thursday_to_hour');
            $criteria->addSelectColumn($alias . '.friday_to_hour');
            $criteria->addSelectColumn($alias . '.saturday_to_hour');
            $criteria->addSelectColumn($alias . '.sunday_any_time');
            $criteria->addSelectColumn($alias . '.monday_any_time');
            $criteria->addSelectColumn($alias . '.tuesday_any_time');
            $criteria->addSelectColumn($alias . '.wednesday_any_time');
            $criteria->addSelectColumn($alias . '.thursday_any_time');
            $criteria->addSelectColumn($alias . '.friday_any_time');
            $criteria->addSelectColumn($alias . '.saturday_any_time');
            $criteria->addSelectColumn($alias . '.sunday_no_time');
            $criteria->addSelectColumn($alias . '.monday_no_time');
            $criteria->addSelectColumn($alias . '.tuesday_no_time');
            $criteria->addSelectColumn($alias . '.wednesday_no_time');
            $criteria->addSelectColumn($alias . '.thursday_no_time');
            $criteria->addSelectColumn($alias . '.friday_no_time');
            $criteria->addSelectColumn($alias . '.saturday_no_time');
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
        $criteria->setPrimaryTableName(VolunteerPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VolunteerPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(VolunteerPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(VolunteerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Volunteer
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = VolunteerPeer::doSelect($critcopy, $con);
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
        return VolunteerPeer::populateObjects(VolunteerPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(VolunteerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            VolunteerPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(VolunteerPeer::DATABASE_NAME);

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
     * @param Volunteer $obj A Volunteer object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            VolunteerPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Volunteer object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Volunteer) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Volunteer object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(VolunteerPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Volunteer Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(VolunteerPeer::$instances[$key])) {
                return VolunteerPeer::$instances[$key];
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
        foreach (VolunteerPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        VolunteerPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to volunteer
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
        $cls = VolunteerPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = VolunteerPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = VolunteerPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                VolunteerPeer::addInstanceToPool($obj, $key);
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
     * @return array (Volunteer object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = VolunteerPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = VolunteerPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + VolunteerPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = VolunteerPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            VolunteerPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(VolunteerPeer::DATABASE_NAME)->getTable(VolunteerPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseVolunteerPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseVolunteerPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \VolunteerTableMap());
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
        return VolunteerPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Volunteer or Criteria object.
     *
     * @param      mixed $values Criteria or Volunteer object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VolunteerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Volunteer object
        }

        if ($criteria->containsKey(VolunteerPeer::ID) && $criteria->keyContainsValue(VolunteerPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.VolunteerPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(VolunteerPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Volunteer or Criteria object.
     *
     * @param      mixed $values Criteria or Volunteer object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VolunteerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(VolunteerPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(VolunteerPeer::ID);
            $value = $criteria->remove(VolunteerPeer::ID);
            if ($value) {
                $selectCriteria->add(VolunteerPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(VolunteerPeer::TABLE_NAME);
            }

        } else { // $values is Volunteer object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(VolunteerPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the volunteer table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VolunteerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(VolunteerPeer::TABLE_NAME, $con, VolunteerPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            VolunteerPeer::clearInstancePool();
            VolunteerPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Volunteer or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Volunteer object or primary key or array of primary keys
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
            $con = Propel::getConnection(VolunteerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            VolunteerPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Volunteer) { // it's a model object
            // invalidate the cache for this single object
            VolunteerPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(VolunteerPeer::DATABASE_NAME);
            $criteria->add(VolunteerPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                VolunteerPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(VolunteerPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            VolunteerPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Volunteer object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Volunteer $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(VolunteerPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(VolunteerPeer::TABLE_NAME);

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

        return BasePeer::doValidate(VolunteerPeer::DATABASE_NAME, VolunteerPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Volunteer
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = VolunteerPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(VolunteerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(VolunteerPeer::DATABASE_NAME);
        $criteria->add(VolunteerPeer::ID, $pk);

        $v = VolunteerPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Volunteer[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VolunteerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(VolunteerPeer::DATABASE_NAME);
            $criteria->add(VolunteerPeer::ID, $pks, Criteria::IN);
            $objs = VolunteerPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseVolunteerPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseVolunteerPeer::buildTableMap();

