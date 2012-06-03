<?php


/**
 * Base static class for performing query and update operations on the 'report' table.
 *
 * a report
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseReportPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'persistence';

	/** the table name for this class */
	const TABLE_NAME = 'report';

	/** the related Propel class for this table */
	const OM_CLASS = 'Report';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'persistence.Report';

	/** the related TableMap class for this table */
	const TM_CLASS = 'ReportTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 30;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'report.ID';

	/** the column name for the RESPONDER field */
	const RESPONDER = 'report.RESPONDER';

	/** the column name for the CALL_DATE field */
	const CALL_DATE = 'report.CALL_DATE';

	/** the column name for the CALL_FROM field */
	const CALL_FROM = 'report.CALL_FROM';

	/** the column name for the CALLER_NAME field */
	const CALLER_NAME = 'report.CALLER_NAME';

	/** the column name for the CALLER_PHONE_NUMBER field */
	const CALLER_PHONE_NUMBER = 'report.CALLER_PHONE_NUMBER';

	/** the column name for the CALL_LOCATION field */
	const CALL_LOCATION = 'report.CALL_LOCATION';

	/** the column name for the CALL_SPECIES field */
	const CALL_SPECIES = 'report.CALL_SPECIES';

	/** the column name for the WHEN_FIRST_SEEN field */
	const WHEN_FIRST_SEEN = 'report.WHEN_FIRST_SEEN';

	/** the column name for the CALL_COMMENTS field */
	const CALL_COMMENTS = 'report.CALL_COMMENTS';

	/** the column name for the CALL_REFERRED_TO field */
	const CALL_REFERRED_TO = 'report.CALL_REFERRED_TO';

	/** the column name for the CALL_CONDITION field */
	const CALL_CONDITION = 'report.CALL_CONDITION';

	/** the column name for the INVESTIGATOR_SUPPORT field */
	const INVESTIGATOR_SUPPORT = 'report.INVESTIGATOR_SUPPORT';

	/** the column name for the INVESTIGATION_DATE field */
	const INVESTIGATION_DATE = 'report.INVESTIGATION_DATE';

	/** the column name for the INVESTIGATION_LAT_LON_LOCATION field */
	const INVESTIGATION_LAT_LON_LOCATION = 'report.INVESTIGATION_LAT_LON_LOCATION';

	/** the column name for the INVESTIGATION_PHYSICAL_LOCATION field */
	const INVESTIGATION_PHYSICAL_LOCATION = 'report.INVESTIGATION_PHYSICAL_LOCATION';

	/** the column name for the INVESTIGATION_SPECIES field */
	const INVESTIGATION_SPECIES = 'report.INVESTIGATION_SPECIES';

	/** the column name for the ANIMAL_NOT_FOUND field */
	const ANIMAL_NOT_FOUND = 'report.ANIMAL_NOT_FOUND';

	/** the column name for the INVESTIGATION_CONDITION field */
	const INVESTIGATION_CONDITION = 'report.INVESTIGATION_CONDITION';

	/** the column name for the TAGS field */
	const TAGS = 'report.TAGS';

	/** the column name for the DISPOSITION field */
	const DISPOSITION = 'report.DISPOSITION';

	/** the column name for the SEAL_PICKUP field */
	const SEAL_PICKUP = 'report.SEAL_PICKUP';

	/** the column name for the SEX field */
	const SEX = 'report.SEX';

	/** the column name for the WEIGHT field */
	const WEIGHT = 'report.WEIGHT';

	/** the column name for the STRAIGHT_LENGTH field */
	const STRAIGHT_LENGTH = 'report.STRAIGHT_LENGTH';

	/** the column name for the CONTOUR_LENGTH field */
	const CONTOUR_LENGTH = 'report.CONTOUR_LENGTH';

	/** the column name for the GIRTH field */
	const GIRTH = 'report.GIRTH';

	/** the column name for the INVESTIGATION_COMMENTS field */
	const INVESTIGATION_COMMENTS = 'report.INVESTIGATION_COMMENTS';

	/** the column name for the IS_PHOTO_TAKEN field */
	const IS_PHOTO_TAKEN = 'report.IS_PHOTO_TAKEN';

	/** the column name for the VOLUNTEER_ID field */
	const VOLUNTEER_ID = 'report.VOLUNTEER_ID';

	/**
	 * An identiy map to hold any loaded instances of Report objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Report[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Responder', 'CallDate', 'CallFrom', 'CallerName', 'CallerPhoneNumber', 'CallLocation', 'CallSpecies', 'WhenFirstSeen', 'CallComments', 'CallReferredTo', 'CallCondition', 'InvestigatorSupport', 'InvestigationDate', 'InvestigationLatLonLocation', 'InvestigationPhysicalLocation', 'InvestigationSpecies', 'AnimalNotFound', 'InvestigationCondition', 'Tags', 'Disposition', 'SealPickup', 'Sex', 'Weight', 'StraightLength', 'ContourLength', 'Girth', 'InvestigationComments', 'IsPhotoTaken', 'VolunteerId', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'responder', 'callDate', 'callFrom', 'callerName', 'callerPhoneNumber', 'callLocation', 'callSpecies', 'whenFirstSeen', 'callComments', 'callReferredTo', 'callCondition', 'investigatorSupport', 'investigationDate', 'investigationLatLonLocation', 'investigationPhysicalLocation', 'investigationSpecies', 'animalNotFound', 'investigationCondition', 'tags', 'disposition', 'sealPickup', 'sex', 'weight', 'straightLength', 'contourLength', 'girth', 'investigationComments', 'isPhotoTaken', 'volunteerId', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::RESPONDER, self::CALL_DATE, self::CALL_FROM, self::CALLER_NAME, self::CALLER_PHONE_NUMBER, self::CALL_LOCATION, self::CALL_SPECIES, self::WHEN_FIRST_SEEN, self::CALL_COMMENTS, self::CALL_REFERRED_TO, self::CALL_CONDITION, self::INVESTIGATOR_SUPPORT, self::INVESTIGATION_DATE, self::INVESTIGATION_LAT_LON_LOCATION, self::INVESTIGATION_PHYSICAL_LOCATION, self::INVESTIGATION_SPECIES, self::ANIMAL_NOT_FOUND, self::INVESTIGATION_CONDITION, self::TAGS, self::DISPOSITION, self::SEAL_PICKUP, self::SEX, self::WEIGHT, self::STRAIGHT_LENGTH, self::CONTOUR_LENGTH, self::GIRTH, self::INVESTIGATION_COMMENTS, self::IS_PHOTO_TAKEN, self::VOLUNTEER_ID, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'RESPONDER', 'CALL_DATE', 'CALL_FROM', 'CALLER_NAME', 'CALLER_PHONE_NUMBER', 'CALL_LOCATION', 'CALL_SPECIES', 'WHEN_FIRST_SEEN', 'CALL_COMMENTS', 'CALL_REFERRED_TO', 'CALL_CONDITION', 'INVESTIGATOR_SUPPORT', 'INVESTIGATION_DATE', 'INVESTIGATION_LAT_LON_LOCATION', 'INVESTIGATION_PHYSICAL_LOCATION', 'INVESTIGATION_SPECIES', 'ANIMAL_NOT_FOUND', 'INVESTIGATION_CONDITION', 'TAGS', 'DISPOSITION', 'SEAL_PICKUP', 'SEX', 'WEIGHT', 'STRAIGHT_LENGTH', 'CONTOUR_LENGTH', 'GIRTH', 'INVESTIGATION_COMMENTS', 'IS_PHOTO_TAKEN', 'VOLUNTEER_ID', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'responder', 'call_date', 'call_from', 'caller_name', 'caller_phone_number', 'call_location', 'call_species', 'when_first_seen', 'call_comments', 'call_referred_to', 'call_condition', 'investigator_support', 'investigation_date', 'investigation_lat_lon_location', 'investigation_physical_location', 'investigation_species', 'animal_not_found', 'investigation_condition', 'tags', 'disposition', 'seal_pickup', 'sex', 'weight', 'straight_length', 'contour_length', 'girth', 'investigation_comments', 'is_photo_taken', 'volunteer_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Responder' => 1, 'CallDate' => 2, 'CallFrom' => 3, 'CallerName' => 4, 'CallerPhoneNumber' => 5, 'CallLocation' => 6, 'CallSpecies' => 7, 'WhenFirstSeen' => 8, 'CallComments' => 9, 'CallReferredTo' => 10, 'CallCondition' => 11, 'InvestigatorSupport' => 12, 'InvestigationDate' => 13, 'InvestigationLatLonLocation' => 14, 'InvestigationPhysicalLocation' => 15, 'InvestigationSpecies' => 16, 'AnimalNotFound' => 17, 'InvestigationCondition' => 18, 'Tags' => 19, 'Disposition' => 20, 'SealPickup' => 21, 'Sex' => 22, 'Weight' => 23, 'StraightLength' => 24, 'ContourLength' => 25, 'Girth' => 26, 'InvestigationComments' => 27, 'IsPhotoTaken' => 28, 'VolunteerId' => 29, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'responder' => 1, 'callDate' => 2, 'callFrom' => 3, 'callerName' => 4, 'callerPhoneNumber' => 5, 'callLocation' => 6, 'callSpecies' => 7, 'whenFirstSeen' => 8, 'callComments' => 9, 'callReferredTo' => 10, 'callCondition' => 11, 'investigatorSupport' => 12, 'investigationDate' => 13, 'investigationLatLonLocation' => 14, 'investigationPhysicalLocation' => 15, 'investigationSpecies' => 16, 'animalNotFound' => 17, 'investigationCondition' => 18, 'tags' => 19, 'disposition' => 20, 'sealPickup' => 21, 'sex' => 22, 'weight' => 23, 'straightLength' => 24, 'contourLength' => 25, 'girth' => 26, 'investigationComments' => 27, 'isPhotoTaken' => 28, 'volunteerId' => 29, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::RESPONDER => 1, self::CALL_DATE => 2, self::CALL_FROM => 3, self::CALLER_NAME => 4, self::CALLER_PHONE_NUMBER => 5, self::CALL_LOCATION => 6, self::CALL_SPECIES => 7, self::WHEN_FIRST_SEEN => 8, self::CALL_COMMENTS => 9, self::CALL_REFERRED_TO => 10, self::CALL_CONDITION => 11, self::INVESTIGATOR_SUPPORT => 12, self::INVESTIGATION_DATE => 13, self::INVESTIGATION_LAT_LON_LOCATION => 14, self::INVESTIGATION_PHYSICAL_LOCATION => 15, self::INVESTIGATION_SPECIES => 16, self::ANIMAL_NOT_FOUND => 17, self::INVESTIGATION_CONDITION => 18, self::TAGS => 19, self::DISPOSITION => 20, self::SEAL_PICKUP => 21, self::SEX => 22, self::WEIGHT => 23, self::STRAIGHT_LENGTH => 24, self::CONTOUR_LENGTH => 25, self::GIRTH => 26, self::INVESTIGATION_COMMENTS => 27, self::IS_PHOTO_TAKEN => 28, self::VOLUNTEER_ID => 29, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'RESPONDER' => 1, 'CALL_DATE' => 2, 'CALL_FROM' => 3, 'CALLER_NAME' => 4, 'CALLER_PHONE_NUMBER' => 5, 'CALL_LOCATION' => 6, 'CALL_SPECIES' => 7, 'WHEN_FIRST_SEEN' => 8, 'CALL_COMMENTS' => 9, 'CALL_REFERRED_TO' => 10, 'CALL_CONDITION' => 11, 'INVESTIGATOR_SUPPORT' => 12, 'INVESTIGATION_DATE' => 13, 'INVESTIGATION_LAT_LON_LOCATION' => 14, 'INVESTIGATION_PHYSICAL_LOCATION' => 15, 'INVESTIGATION_SPECIES' => 16, 'ANIMAL_NOT_FOUND' => 17, 'INVESTIGATION_CONDITION' => 18, 'TAGS' => 19, 'DISPOSITION' => 20, 'SEAL_PICKUP' => 21, 'SEX' => 22, 'WEIGHT' => 23, 'STRAIGHT_LENGTH' => 24, 'CONTOUR_LENGTH' => 25, 'GIRTH' => 26, 'INVESTIGATION_COMMENTS' => 27, 'IS_PHOTO_TAKEN' => 28, 'VOLUNTEER_ID' => 29, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'responder' => 1, 'call_date' => 2, 'call_from' => 3, 'caller_name' => 4, 'caller_phone_number' => 5, 'call_location' => 6, 'call_species' => 7, 'when_first_seen' => 8, 'call_comments' => 9, 'call_referred_to' => 10, 'call_condition' => 11, 'investigator_support' => 12, 'investigation_date' => 13, 'investigation_lat_lon_location' => 14, 'investigation_physical_location' => 15, 'investigation_species' => 16, 'animal_not_found' => 17, 'investigation_condition' => 18, 'tags' => 19, 'disposition' => 20, 'seal_pickup' => 21, 'sex' => 22, 'weight' => 23, 'straight_length' => 24, 'contour_length' => 25, 'girth' => 26, 'investigation_comments' => 27, 'is_photo_taken' => 28, 'volunteer_id' => 29, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
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
	 * @return     string
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
	 * @throws     PropelException Any exceptions caught during processing will be
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
			$criteria->addSelectColumn(ReportPeer::INVESTIGATION_LAT_LON_LOCATION);
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
			$criteria->addSelectColumn(ReportPeer::VOLUNTEER_ID);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.RESPONDER');
			$criteria->addSelectColumn($alias . '.CALL_DATE');
			$criteria->addSelectColumn($alias . '.CALL_FROM');
			$criteria->addSelectColumn($alias . '.CALLER_NAME');
			$criteria->addSelectColumn($alias . '.CALLER_PHONE_NUMBER');
			$criteria->addSelectColumn($alias . '.CALL_LOCATION');
			$criteria->addSelectColumn($alias . '.CALL_SPECIES');
			$criteria->addSelectColumn($alias . '.WHEN_FIRST_SEEN');
			$criteria->addSelectColumn($alias . '.CALL_COMMENTS');
			$criteria->addSelectColumn($alias . '.CALL_REFERRED_TO');
			$criteria->addSelectColumn($alias . '.CALL_CONDITION');
			$criteria->addSelectColumn($alias . '.INVESTIGATOR_SUPPORT');
			$criteria->addSelectColumn($alias . '.INVESTIGATION_DATE');
			$criteria->addSelectColumn($alias . '.INVESTIGATION_LAT_LON_LOCATION');
			$criteria->addSelectColumn($alias . '.INVESTIGATION_PHYSICAL_LOCATION');
			$criteria->addSelectColumn($alias . '.INVESTIGATION_SPECIES');
			$criteria->addSelectColumn($alias . '.ANIMAL_NOT_FOUND');
			$criteria->addSelectColumn($alias . '.INVESTIGATION_CONDITION');
			$criteria->addSelectColumn($alias . '.TAGS');
			$criteria->addSelectColumn($alias . '.DISPOSITION');
			$criteria->addSelectColumn($alias . '.SEAL_PICKUP');
			$criteria->addSelectColumn($alias . '.SEX');
			$criteria->addSelectColumn($alias . '.WEIGHT');
			$criteria->addSelectColumn($alias . '.STRAIGHT_LENGTH');
			$criteria->addSelectColumn($alias . '.CONTOUR_LENGTH');
			$criteria->addSelectColumn($alias . '.GIRTH');
			$criteria->addSelectColumn($alias . '.INVESTIGATION_COMMENTS');
			$criteria->addSelectColumn($alias . '.IS_PHOTO_TAKEN');
			$criteria->addSelectColumn($alias . '.VOLUNTEER_ID');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
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
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

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
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Report
	 * @throws     PropelException Any exceptions caught during processing will be
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
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return ReportPeer::populateObjects(ReportPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
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
		$criteria->setDbName(self::DATABASE_NAME);

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
	 * @param      Report $value A Report object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Report $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
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

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Report Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
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
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
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
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = ReportPeer::getOMClass(false);
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
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (Report object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = ReportPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = ReportPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + ReportPeer::NUM_COLUMNS;
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
	 * @return     int Number of matching rows.
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
		$criteria->setDbName(self::DATABASE_NAME);

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
	 * @return     array Array of Report objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinVolunteer(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ReportPeer::addSelectColumns($criteria);
		$startcol = (ReportPeer::NUM_COLUMNS - ReportPeer::NUM_LAZY_LOAD_COLUMNS);
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

				$cls = ReportPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ReportPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = VolunteerPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = VolunteerPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = VolunteerPeer::getOMClass(false);

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
	 * @return     int Number of matching rows.
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
		$criteria->setDbName(self::DATABASE_NAME);

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
	 * @return     array Array of Report objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ReportPeer::addSelectColumns($criteria);
		$startcol2 = (ReportPeer::NUM_COLUMNS - ReportPeer::NUM_LAZY_LOAD_COLUMNS);

		VolunteerPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (VolunteerPeer::NUM_COLUMNS - VolunteerPeer::NUM_LAZY_LOAD_COLUMNS);

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
				$cls = ReportPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ReportPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined Volunteer rows

			$key2 = VolunteerPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = VolunteerPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = VolunteerPeer::getOMClass(false);

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
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseReportPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseReportPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new ReportTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? ReportPeer::CLASS_DEFAULT : ReportPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Report or Criteria object.
	 *
	 * @param      mixed $values Criteria or Report object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
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
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a Report or Criteria object.
	 *
	 * @param      mixed $values Criteria or Report object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ReportPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

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
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the report table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
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
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Report or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Report object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
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
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ReportPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				ReportPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			ReportPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
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
	 * @param      Report $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Report $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ReportPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ReportPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
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
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Report
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
	 * @throws     PropelException Any exceptions caught during processing will be
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

