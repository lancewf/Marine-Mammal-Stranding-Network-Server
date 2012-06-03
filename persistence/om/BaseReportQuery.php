<?php


/**
 * Base class that represents a query for the 'report' table.
 *
 * a report
 *
 * @method     ReportQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ReportQuery orderByResponder($order = Criteria::ASC) Order by the responder column
 * @method     ReportQuery orderByCallDate($order = Criteria::ASC) Order by the call_date column
 * @method     ReportQuery orderByCallFrom($order = Criteria::ASC) Order by the call_from column
 * @method     ReportQuery orderByCallerName($order = Criteria::ASC) Order by the caller_name column
 * @method     ReportQuery orderByCallerPhoneNumber($order = Criteria::ASC) Order by the caller_phone_number column
 * @method     ReportQuery orderByCallLocation($order = Criteria::ASC) Order by the call_location column
 * @method     ReportQuery orderByCallSpecies($order = Criteria::ASC) Order by the call_species column
 * @method     ReportQuery orderByWhenFirstSeen($order = Criteria::ASC) Order by the when_first_seen column
 * @method     ReportQuery orderByCallComments($order = Criteria::ASC) Order by the call_comments column
 * @method     ReportQuery orderByCallReferredTo($order = Criteria::ASC) Order by the call_referred_to column
 * @method     ReportQuery orderByCallCondition($order = Criteria::ASC) Order by the call_condition column
 * @method     ReportQuery orderByInvestigatorSupport($order = Criteria::ASC) Order by the investigator_support column
 * @method     ReportQuery orderByInvestigationDate($order = Criteria::ASC) Order by the investigation_date column
 * @method     ReportQuery orderByInvestigationLatLonLocation($order = Criteria::ASC) Order by the investigation_lat_lon_location column
 * @method     ReportQuery orderByInvestigationPhysicalLocation($order = Criteria::ASC) Order by the investigation_physical_location column
 * @method     ReportQuery orderByInvestigationSpecies($order = Criteria::ASC) Order by the investigation_species column
 * @method     ReportQuery orderByAnimalNotFound($order = Criteria::ASC) Order by the animal_not_found column
 * @method     ReportQuery orderByInvestigationCondition($order = Criteria::ASC) Order by the investigation_condition column
 * @method     ReportQuery orderByTags($order = Criteria::ASC) Order by the tags column
 * @method     ReportQuery orderByDisposition($order = Criteria::ASC) Order by the disposition column
 * @method     ReportQuery orderBySealPickup($order = Criteria::ASC) Order by the seal_pickup column
 * @method     ReportQuery orderBySex($order = Criteria::ASC) Order by the sex column
 * @method     ReportQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method     ReportQuery orderByStraightLength($order = Criteria::ASC) Order by the straight_length column
 * @method     ReportQuery orderByContourLength($order = Criteria::ASC) Order by the contour_length column
 * @method     ReportQuery orderByGirth($order = Criteria::ASC) Order by the girth column
 * @method     ReportQuery orderByInvestigationComments($order = Criteria::ASC) Order by the investigation_comments column
 * @method     ReportQuery orderByIsPhotoTaken($order = Criteria::ASC) Order by the is_photo_taken column
 * @method     ReportQuery orderByVolunteerId($order = Criteria::ASC) Order by the volunteer_id column
 *
 * @method     ReportQuery groupById() Group by the id column
 * @method     ReportQuery groupByResponder() Group by the responder column
 * @method     ReportQuery groupByCallDate() Group by the call_date column
 * @method     ReportQuery groupByCallFrom() Group by the call_from column
 * @method     ReportQuery groupByCallerName() Group by the caller_name column
 * @method     ReportQuery groupByCallerPhoneNumber() Group by the caller_phone_number column
 * @method     ReportQuery groupByCallLocation() Group by the call_location column
 * @method     ReportQuery groupByCallSpecies() Group by the call_species column
 * @method     ReportQuery groupByWhenFirstSeen() Group by the when_first_seen column
 * @method     ReportQuery groupByCallComments() Group by the call_comments column
 * @method     ReportQuery groupByCallReferredTo() Group by the call_referred_to column
 * @method     ReportQuery groupByCallCondition() Group by the call_condition column
 * @method     ReportQuery groupByInvestigatorSupport() Group by the investigator_support column
 * @method     ReportQuery groupByInvestigationDate() Group by the investigation_date column
 * @method     ReportQuery groupByInvestigationLatLonLocation() Group by the investigation_lat_lon_location column
 * @method     ReportQuery groupByInvestigationPhysicalLocation() Group by the investigation_physical_location column
 * @method     ReportQuery groupByInvestigationSpecies() Group by the investigation_species column
 * @method     ReportQuery groupByAnimalNotFound() Group by the animal_not_found column
 * @method     ReportQuery groupByInvestigationCondition() Group by the investigation_condition column
 * @method     ReportQuery groupByTags() Group by the tags column
 * @method     ReportQuery groupByDisposition() Group by the disposition column
 * @method     ReportQuery groupBySealPickup() Group by the seal_pickup column
 * @method     ReportQuery groupBySex() Group by the sex column
 * @method     ReportQuery groupByWeight() Group by the weight column
 * @method     ReportQuery groupByStraightLength() Group by the straight_length column
 * @method     ReportQuery groupByContourLength() Group by the contour_length column
 * @method     ReportQuery groupByGirth() Group by the girth column
 * @method     ReportQuery groupByInvestigationComments() Group by the investigation_comments column
 * @method     ReportQuery groupByIsPhotoTaken() Group by the is_photo_taken column
 * @method     ReportQuery groupByVolunteerId() Group by the volunteer_id column
 *
 * @method     ReportQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ReportQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ReportQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ReportQuery leftJoinVolunteer($relationAlias = '') Adds a LEFT JOIN clause to the query using the Volunteer relation
 * @method     ReportQuery rightJoinVolunteer($relationAlias = '') Adds a RIGHT JOIN clause to the query using the Volunteer relation
 * @method     ReportQuery innerJoinVolunteer($relationAlias = '') Adds a INNER JOIN clause to the query using the Volunteer relation
 *
 * @method     ReportQuery leftJoinReportComments($relationAlias = '') Adds a LEFT JOIN clause to the query using the ReportComments relation
 * @method     ReportQuery rightJoinReportComments($relationAlias = '') Adds a RIGHT JOIN clause to the query using the ReportComments relation
 * @method     ReportQuery innerJoinReportComments($relationAlias = '') Adds a INNER JOIN clause to the query using the ReportComments relation
 *
 * @method     ReportQuery leftJoinAttachment($relationAlias = '') Adds a LEFT JOIN clause to the query using the Attachment relation
 * @method     ReportQuery rightJoinAttachment($relationAlias = '') Adds a RIGHT JOIN clause to the query using the Attachment relation
 * @method     ReportQuery innerJoinAttachment($relationAlias = '') Adds a INNER JOIN clause to the query using the Attachment relation
 *
 * @method     Report findOne(PropelPDO $con = null) Return the first Report matching the query
 * @method     Report findOneOrCreate(PropelPDO $con = null) Return the first Report matching the query, or a new Report object populated from the query conditions when no match is found
 *
 * @method     Report findOneById(int $id) Return the first Report filtered by the id column
 * @method     Report findOneByResponder(string $responder) Return the first Report filtered by the responder column
 * @method     Report findOneByCallDate(string $call_date) Return the first Report filtered by the call_date column
 * @method     Report findOneByCallFrom(string $call_from) Return the first Report filtered by the call_from column
 * @method     Report findOneByCallerName(string $caller_name) Return the first Report filtered by the caller_name column
 * @method     Report findOneByCallerPhoneNumber(string $caller_phone_number) Return the first Report filtered by the caller_phone_number column
 * @method     Report findOneByCallLocation(string $call_location) Return the first Report filtered by the call_location column
 * @method     Report findOneByCallSpecies(string $call_species) Return the first Report filtered by the call_species column
 * @method     Report findOneByWhenFirstSeen(string $when_first_seen) Return the first Report filtered by the when_first_seen column
 * @method     Report findOneByCallComments(string $call_comments) Return the first Report filtered by the call_comments column
 * @method     Report findOneByCallReferredTo(string $call_referred_to) Return the first Report filtered by the call_referred_to column
 * @method     Report findOneByCallCondition(string $call_condition) Return the first Report filtered by the call_condition column
 * @method     Report findOneByInvestigatorSupport(string $investigator_support) Return the first Report filtered by the investigator_support column
 * @method     Report findOneByInvestigationDate(string $investigation_date) Return the first Report filtered by the investigation_date column
 * @method     Report findOneByInvestigationLatLonLocation(string $investigation_lat_lon_location) Return the first Report filtered by the investigation_lat_lon_location column
 * @method     Report findOneByInvestigationPhysicalLocation(string $investigation_physical_location) Return the first Report filtered by the investigation_physical_location column
 * @method     Report findOneByInvestigationSpecies(string $investigation_species) Return the first Report filtered by the investigation_species column
 * @method     Report findOneByAnimalNotFound(boolean $animal_not_found) Return the first Report filtered by the animal_not_found column
 * @method     Report findOneByInvestigationCondition(string $investigation_condition) Return the first Report filtered by the investigation_condition column
 * @method     Report findOneByTags(string $tags) Return the first Report filtered by the tags column
 * @method     Report findOneByDisposition(string $disposition) Return the first Report filtered by the disposition column
 * @method     Report findOneBySealPickup(string $seal_pickup) Return the first Report filtered by the seal_pickup column
 * @method     Report findOneBySex(string $sex) Return the first Report filtered by the sex column
 * @method     Report findOneByWeight(double $weight) Return the first Report filtered by the weight column
 * @method     Report findOneByStraightLength(double $straight_length) Return the first Report filtered by the straight_length column
 * @method     Report findOneByContourLength(double $contour_length) Return the first Report filtered by the contour_length column
 * @method     Report findOneByGirth(double $girth) Return the first Report filtered by the girth column
 * @method     Report findOneByInvestigationComments(string $investigation_comments) Return the first Report filtered by the investigation_comments column
 * @method     Report findOneByIsPhotoTaken(boolean $is_photo_taken) Return the first Report filtered by the is_photo_taken column
 * @method     Report findOneByVolunteerId(int $volunteer_id) Return the first Report filtered by the volunteer_id column
 *
 * @method     array findById(int $id) Return Report objects filtered by the id column
 * @method     array findByResponder(string $responder) Return Report objects filtered by the responder column
 * @method     array findByCallDate(string $call_date) Return Report objects filtered by the call_date column
 * @method     array findByCallFrom(string $call_from) Return Report objects filtered by the call_from column
 * @method     array findByCallerName(string $caller_name) Return Report objects filtered by the caller_name column
 * @method     array findByCallerPhoneNumber(string $caller_phone_number) Return Report objects filtered by the caller_phone_number column
 * @method     array findByCallLocation(string $call_location) Return Report objects filtered by the call_location column
 * @method     array findByCallSpecies(string $call_species) Return Report objects filtered by the call_species column
 * @method     array findByWhenFirstSeen(string $when_first_seen) Return Report objects filtered by the when_first_seen column
 * @method     array findByCallComments(string $call_comments) Return Report objects filtered by the call_comments column
 * @method     array findByCallReferredTo(string $call_referred_to) Return Report objects filtered by the call_referred_to column
 * @method     array findByCallCondition(string $call_condition) Return Report objects filtered by the call_condition column
 * @method     array findByInvestigatorSupport(string $investigator_support) Return Report objects filtered by the investigator_support column
 * @method     array findByInvestigationDate(string $investigation_date) Return Report objects filtered by the investigation_date column
 * @method     array findByInvestigationLatLonLocation(string $investigation_lat_lon_location) Return Report objects filtered by the investigation_lat_lon_location column
 * @method     array findByInvestigationPhysicalLocation(string $investigation_physical_location) Return Report objects filtered by the investigation_physical_location column
 * @method     array findByInvestigationSpecies(string $investigation_species) Return Report objects filtered by the investigation_species column
 * @method     array findByAnimalNotFound(boolean $animal_not_found) Return Report objects filtered by the animal_not_found column
 * @method     array findByInvestigationCondition(string $investigation_condition) Return Report objects filtered by the investigation_condition column
 * @method     array findByTags(string $tags) Return Report objects filtered by the tags column
 * @method     array findByDisposition(string $disposition) Return Report objects filtered by the disposition column
 * @method     array findBySealPickup(string $seal_pickup) Return Report objects filtered by the seal_pickup column
 * @method     array findBySex(string $sex) Return Report objects filtered by the sex column
 * @method     array findByWeight(double $weight) Return Report objects filtered by the weight column
 * @method     array findByStraightLength(double $straight_length) Return Report objects filtered by the straight_length column
 * @method     array findByContourLength(double $contour_length) Return Report objects filtered by the contour_length column
 * @method     array findByGirth(double $girth) Return Report objects filtered by the girth column
 * @method     array findByInvestigationComments(string $investigation_comments) Return Report objects filtered by the investigation_comments column
 * @method     array findByIsPhotoTaken(boolean $is_photo_taken) Return Report objects filtered by the is_photo_taken column
 * @method     array findByVolunteerId(int $volunteer_id) Return Report objects filtered by the volunteer_id column
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseReportQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseReportQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'persistence', $modelName = 'Report', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ReportQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ReportQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ReportQuery) {
			return $criteria;
		}
		$query = new ReportQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Report|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ReportPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ReportPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ReportPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ReportPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the responder column
	 * 
	 * @param     string $responder The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByResponder($responder = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($responder)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $responder)) {
				$responder = str_replace('*', '%', $responder);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::RESPONDER, $responder, $comparison);
	}

	/**
	 * Filter the query on the call_date column
	 * 
	 * @param     string|array $callDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByCallDate($callDate = null, $comparison = null)
	{
		if (is_array($callDate)) {
			$useMinMax = false;
			if (isset($callDate['min'])) {
				$this->addUsingAlias(ReportPeer::CALL_DATE, $callDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($callDate['max'])) {
				$this->addUsingAlias(ReportPeer::CALL_DATE, $callDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReportPeer::CALL_DATE, $callDate, $comparison);
	}

	/**
	 * Filter the query on the call_from column
	 * 
	 * @param     string $callFrom The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByCallFrom($callFrom = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($callFrom)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $callFrom)) {
				$callFrom = str_replace('*', '%', $callFrom);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::CALL_FROM, $callFrom, $comparison);
	}

	/**
	 * Filter the query on the caller_name column
	 * 
	 * @param     string $callerName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByCallerName($callerName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($callerName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $callerName)) {
				$callerName = str_replace('*', '%', $callerName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::CALLER_NAME, $callerName, $comparison);
	}

	/**
	 * Filter the query on the caller_phone_number column
	 * 
	 * @param     string $callerPhoneNumber The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByCallerPhoneNumber($callerPhoneNumber = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($callerPhoneNumber)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $callerPhoneNumber)) {
				$callerPhoneNumber = str_replace('*', '%', $callerPhoneNumber);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::CALLER_PHONE_NUMBER, $callerPhoneNumber, $comparison);
	}

	/**
	 * Filter the query on the call_location column
	 * 
	 * @param     string $callLocation The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByCallLocation($callLocation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($callLocation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $callLocation)) {
				$callLocation = str_replace('*', '%', $callLocation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::CALL_LOCATION, $callLocation, $comparison);
	}

	/**
	 * Filter the query on the call_species column
	 * 
	 * @param     string $callSpecies The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByCallSpecies($callSpecies = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($callSpecies)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $callSpecies)) {
				$callSpecies = str_replace('*', '%', $callSpecies);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::CALL_SPECIES, $callSpecies, $comparison);
	}

	/**
	 * Filter the query on the when_first_seen column
	 * 
	 * @param     string $whenFirstSeen The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByWhenFirstSeen($whenFirstSeen = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($whenFirstSeen)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $whenFirstSeen)) {
				$whenFirstSeen = str_replace('*', '%', $whenFirstSeen);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::WHEN_FIRST_SEEN, $whenFirstSeen, $comparison);
	}

	/**
	 * Filter the query on the call_comments column
	 * 
	 * @param     string $callComments The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByCallComments($callComments = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($callComments)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $callComments)) {
				$callComments = str_replace('*', '%', $callComments);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::CALL_COMMENTS, $callComments, $comparison);
	}

	/**
	 * Filter the query on the call_referred_to column
	 * 
	 * @param     string $callReferredTo The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByCallReferredTo($callReferredTo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($callReferredTo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $callReferredTo)) {
				$callReferredTo = str_replace('*', '%', $callReferredTo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::CALL_REFERRED_TO, $callReferredTo, $comparison);
	}

	/**
	 * Filter the query on the call_condition column
	 * 
	 * @param     string $callCondition The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByCallCondition($callCondition = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($callCondition)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $callCondition)) {
				$callCondition = str_replace('*', '%', $callCondition);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::CALL_CONDITION, $callCondition, $comparison);
	}

	/**
	 * Filter the query on the investigator_support column
	 * 
	 * @param     string $investigatorSupport The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByInvestigatorSupport($investigatorSupport = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($investigatorSupport)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $investigatorSupport)) {
				$investigatorSupport = str_replace('*', '%', $investigatorSupport);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::INVESTIGATOR_SUPPORT, $investigatorSupport, $comparison);
	}

	/**
	 * Filter the query on the investigation_date column
	 * 
	 * @param     string|array $investigationDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByInvestigationDate($investigationDate = null, $comparison = null)
	{
		if (is_array($investigationDate)) {
			$useMinMax = false;
			if (isset($investigationDate['min'])) {
				$this->addUsingAlias(ReportPeer::INVESTIGATION_DATE, $investigationDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($investigationDate['max'])) {
				$this->addUsingAlias(ReportPeer::INVESTIGATION_DATE, $investigationDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReportPeer::INVESTIGATION_DATE, $investigationDate, $comparison);
	}

	/**
	 * Filter the query on the investigation_lat_lon_location column
	 * 
	 * @param     string $investigationLatLonLocation The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByInvestigationLatLonLocation($investigationLatLonLocation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($investigationLatLonLocation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $investigationLatLonLocation)) {
				$investigationLatLonLocation = str_replace('*', '%', $investigationLatLonLocation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::INVESTIGATION_LAT_LON_LOCATION, $investigationLatLonLocation, $comparison);
	}

	/**
	 * Filter the query on the investigation_physical_location column
	 * 
	 * @param     string $investigationPhysicalLocation The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByInvestigationPhysicalLocation($investigationPhysicalLocation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($investigationPhysicalLocation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $investigationPhysicalLocation)) {
				$investigationPhysicalLocation = str_replace('*', '%', $investigationPhysicalLocation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::INVESTIGATION_PHYSICAL_LOCATION, $investigationPhysicalLocation, $comparison);
	}

	/**
	 * Filter the query on the investigation_species column
	 * 
	 * @param     string $investigationSpecies The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByInvestigationSpecies($investigationSpecies = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($investigationSpecies)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $investigationSpecies)) {
				$investigationSpecies = str_replace('*', '%', $investigationSpecies);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::INVESTIGATION_SPECIES, $investigationSpecies, $comparison);
	}

	/**
	 * Filter the query on the animal_not_found column
	 * 
	 * @param     boolean|string $animalNotFound The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByAnimalNotFound($animalNotFound = null, $comparison = null)
	{
		if (is_string($animalNotFound)) {
			$animal_not_found = in_array(strtolower($animalNotFound), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(ReportPeer::ANIMAL_NOT_FOUND, $animalNotFound, $comparison);
	}

	/**
	 * Filter the query on the investigation_condition column
	 * 
	 * @param     string $investigationCondition The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByInvestigationCondition($investigationCondition = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($investigationCondition)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $investigationCondition)) {
				$investigationCondition = str_replace('*', '%', $investigationCondition);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::INVESTIGATION_CONDITION, $investigationCondition, $comparison);
	}

	/**
	 * Filter the query on the tags column
	 * 
	 * @param     string $tags The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByTags($tags = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tags)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tags)) {
				$tags = str_replace('*', '%', $tags);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::TAGS, $tags, $comparison);
	}

	/**
	 * Filter the query on the disposition column
	 * 
	 * @param     string $disposition The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByDisposition($disposition = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($disposition)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $disposition)) {
				$disposition = str_replace('*', '%', $disposition);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::DISPOSITION, $disposition, $comparison);
	}

	/**
	 * Filter the query on the seal_pickup column
	 * 
	 * @param     string $sealPickup The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterBySealPickup($sealPickup = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sealPickup)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sealPickup)) {
				$sealPickup = str_replace('*', '%', $sealPickup);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::SEAL_PICKUP, $sealPickup, $comparison);
	}

	/**
	 * Filter the query on the sex column
	 * 
	 * @param     string $sex The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterBySex($sex = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sex)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sex)) {
				$sex = str_replace('*', '%', $sex);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::SEX, $sex, $comparison);
	}

	/**
	 * Filter the query on the weight column
	 * 
	 * @param     double|array $weight The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByWeight($weight = null, $comparison = null)
	{
		if (is_array($weight)) {
			$useMinMax = false;
			if (isset($weight['min'])) {
				$this->addUsingAlias(ReportPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($weight['max'])) {
				$this->addUsingAlias(ReportPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReportPeer::WEIGHT, $weight, $comparison);
	}

	/**
	 * Filter the query on the straight_length column
	 * 
	 * @param     double|array $straightLength The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByStraightLength($straightLength = null, $comparison = null)
	{
		if (is_array($straightLength)) {
			$useMinMax = false;
			if (isset($straightLength['min'])) {
				$this->addUsingAlias(ReportPeer::STRAIGHT_LENGTH, $straightLength['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($straightLength['max'])) {
				$this->addUsingAlias(ReportPeer::STRAIGHT_LENGTH, $straightLength['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReportPeer::STRAIGHT_LENGTH, $straightLength, $comparison);
	}

	/**
	 * Filter the query on the contour_length column
	 * 
	 * @param     double|array $contourLength The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByContourLength($contourLength = null, $comparison = null)
	{
		if (is_array($contourLength)) {
			$useMinMax = false;
			if (isset($contourLength['min'])) {
				$this->addUsingAlias(ReportPeer::CONTOUR_LENGTH, $contourLength['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($contourLength['max'])) {
				$this->addUsingAlias(ReportPeer::CONTOUR_LENGTH, $contourLength['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReportPeer::CONTOUR_LENGTH, $contourLength, $comparison);
	}

	/**
	 * Filter the query on the girth column
	 * 
	 * @param     double|array $girth The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByGirth($girth = null, $comparison = null)
	{
		if (is_array($girth)) {
			$useMinMax = false;
			if (isset($girth['min'])) {
				$this->addUsingAlias(ReportPeer::GIRTH, $girth['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($girth['max'])) {
				$this->addUsingAlias(ReportPeer::GIRTH, $girth['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReportPeer::GIRTH, $girth, $comparison);
	}

	/**
	 * Filter the query on the investigation_comments column
	 * 
	 * @param     string $investigationComments The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByInvestigationComments($investigationComments = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($investigationComments)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $investigationComments)) {
				$investigationComments = str_replace('*', '%', $investigationComments);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReportPeer::INVESTIGATION_COMMENTS, $investigationComments, $comparison);
	}

	/**
	 * Filter the query on the is_photo_taken column
	 * 
	 * @param     boolean|string $isPhotoTaken The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByIsPhotoTaken($isPhotoTaken = null, $comparison = null)
	{
		if (is_string($isPhotoTaken)) {
			$is_photo_taken = in_array(strtolower($isPhotoTaken), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(ReportPeer::IS_PHOTO_TAKEN, $isPhotoTaken, $comparison);
	}

	/**
	 * Filter the query on the volunteer_id column
	 * 
	 * @param     int|array $volunteerId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByVolunteerId($volunteerId = null, $comparison = null)
	{
		if (is_array($volunteerId)) {
			$useMinMax = false;
			if (isset($volunteerId['min'])) {
				$this->addUsingAlias(ReportPeer::VOLUNTEER_ID, $volunteerId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($volunteerId['max'])) {
				$this->addUsingAlias(ReportPeer::VOLUNTEER_ID, $volunteerId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReportPeer::VOLUNTEER_ID, $volunteerId, $comparison);
	}

	/**
	 * Filter the query by a related Volunteer object
	 *
	 * @param     Volunteer $volunteer  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByVolunteer($volunteer, $comparison = null)
	{
		return $this
			->addUsingAlias(ReportPeer::VOLUNTEER_ID, $volunteer->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Volunteer relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function joinVolunteer($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Volunteer');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Volunteer');
		}
		
		return $this;
	}

	/**
	 * Use the Volunteer relation Volunteer object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VolunteerQuery A secondary query class using the current class as primary query
	 */
	public function useVolunteerQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinVolunteer($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Volunteer', 'VolunteerQuery');
	}

	/**
	 * Filter the query by a related ReportComments object
	 *
	 * @param     ReportComments $reportComments  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByReportComments($reportComments, $comparison = null)
	{
		return $this
			->addUsingAlias(ReportPeer::ID, $reportComments->getReportId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ReportComments relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function joinReportComments($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ReportComments');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'ReportComments');
		}
		
		return $this;
	}

	/**
	 * Use the ReportComments relation ReportComments object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ReportCommentsQuery A secondary query class using the current class as primary query
	 */
	public function useReportCommentsQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinReportComments($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ReportComments', 'ReportCommentsQuery');
	}

	/**
	 * Filter the query by a related Attachment object
	 *
	 * @param     Attachment $attachment  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function filterByAttachment($attachment, $comparison = null)
	{
		return $this
			->addUsingAlias(ReportPeer::ID, $attachment->getReportId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Attachment relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function joinAttachment($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Attachment');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Attachment');
		}
		
		return $this;
	}

	/**
	 * Use the Attachment relation Attachment object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AttachmentQuery A secondary query class using the current class as primary query
	 */
	public function useAttachmentQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAttachment($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Attachment', 'AttachmentQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Report $report Object to remove from the list of results
	 *
	 * @return    ReportQuery The current query, for fluid interface
	 */
	public function prune($report = null)
	{
		if ($report) {
			$this->addUsingAlias(ReportPeer::ID, $report->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseReportQuery
