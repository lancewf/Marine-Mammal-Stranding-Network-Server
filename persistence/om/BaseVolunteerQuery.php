<?php


/**
 * Base class that represents a query for the 'volunteer' table.
 *
 * a volunteer
 *
 * @method     VolunteerQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     VolunteerQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method     VolunteerQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method     VolunteerQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     VolunteerQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     VolunteerQuery orderByZip($order = Criteria::ASC) Order by the zip column
 * @method     VolunteerQuery orderByStreetaddress($order = Criteria::ASC) Order by the streetAddress column
 * @method     VolunteerQuery orderByVehicle($order = Criteria::ASC) Order by the vehicle column
 * @method     VolunteerQuery orderByIsland($order = Criteria::ASC) Order by the island column
 * @method     VolunteerQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     VolunteerQuery orderByTraining($order = Criteria::ASC) Order by the training column
 * @method     VolunteerQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method     VolunteerQuery orderByPhonenumber($order = Criteria::ASC) Order by the phoneNumber column
 * @method     VolunteerQuery orderBySundayFromHour($order = Criteria::ASC) Order by the sunday_from_hour column
 * @method     VolunteerQuery orderByMondayFromHour($order = Criteria::ASC) Order by the monday_from_hour column
 * @method     VolunteerQuery orderByTuesdayFromHour($order = Criteria::ASC) Order by the tuesday_from_hour column
 * @method     VolunteerQuery orderByWednesdayFromHour($order = Criteria::ASC) Order by the wednesday_from_hour column
 * @method     VolunteerQuery orderByThursdayFromHour($order = Criteria::ASC) Order by the thursday_from_hour column
 * @method     VolunteerQuery orderByFridayFromHour($order = Criteria::ASC) Order by the friday_from_hour column
 * @method     VolunteerQuery orderBySaturdayFromHour($order = Criteria::ASC) Order by the saturday_from_hour column
 * @method     VolunteerQuery orderBySundayToHour($order = Criteria::ASC) Order by the sunday_to_hour column
 * @method     VolunteerQuery orderByMondayToHour($order = Criteria::ASC) Order by the monday_to_hour column
 * @method     VolunteerQuery orderByTuesdayToHour($order = Criteria::ASC) Order by the tuesday_to_hour column
 * @method     VolunteerQuery orderByWednesdayToHour($order = Criteria::ASC) Order by the wednesday_to_hour column
 * @method     VolunteerQuery orderByThursdayToHour($order = Criteria::ASC) Order by the thursday_to_hour column
 * @method     VolunteerQuery orderByFridayToHour($order = Criteria::ASC) Order by the friday_to_hour column
 * @method     VolunteerQuery orderBySaturdayToHour($order = Criteria::ASC) Order by the saturday_to_hour column
 * @method     VolunteerQuery orderBySundayAnyTime($order = Criteria::ASC) Order by the sunday_any_time column
 * @method     VolunteerQuery orderByMondayAnyTime($order = Criteria::ASC) Order by the monday_any_time column
 * @method     VolunteerQuery orderByTuesdayAnyTime($order = Criteria::ASC) Order by the tuesday_any_time column
 * @method     VolunteerQuery orderByWednesdayAnyTime($order = Criteria::ASC) Order by the wednesday_any_time column
 * @method     VolunteerQuery orderByThursdayAnyTime($order = Criteria::ASC) Order by the thursday_any_time column
 * @method     VolunteerQuery orderByFridayAnyTime($order = Criteria::ASC) Order by the friday_any_time column
 * @method     VolunteerQuery orderBySaturdayAnyTime($order = Criteria::ASC) Order by the saturday_any_time column
 * @method     VolunteerQuery orderBySundayNoTime($order = Criteria::ASC) Order by the sunday_no_time column
 * @method     VolunteerQuery orderByMondayNoTime($order = Criteria::ASC) Order by the monday_no_time column
 * @method     VolunteerQuery orderByTuesdayNoTime($order = Criteria::ASC) Order by the tuesday_no_time column
 * @method     VolunteerQuery orderByWednesdayNoTime($order = Criteria::ASC) Order by the wednesday_no_time column
 * @method     VolunteerQuery orderByThursdayNoTime($order = Criteria::ASC) Order by the thursday_no_time column
 * @method     VolunteerQuery orderByFridayNoTime($order = Criteria::ASC) Order by the friday_no_time column
 * @method     VolunteerQuery orderBySaturdayNoTime($order = Criteria::ASC) Order by the saturday_no_time column
 *
 * @method     VolunteerQuery groupById() Group by the id column
 * @method     VolunteerQuery groupByFirstName() Group by the first_name column
 * @method     VolunteerQuery groupByLastName() Group by the last_name column
 * @method     VolunteerQuery groupByCity() Group by the city column
 * @method     VolunteerQuery groupByState() Group by the state column
 * @method     VolunteerQuery groupByZip() Group by the zip column
 * @method     VolunteerQuery groupByStreetaddress() Group by the streetAddress column
 * @method     VolunteerQuery groupByVehicle() Group by the vehicle column
 * @method     VolunteerQuery groupByIsland() Group by the island column
 * @method     VolunteerQuery groupByEmail() Group by the email column
 * @method     VolunteerQuery groupByTraining() Group by the training column
 * @method     VolunteerQuery groupByComments() Group by the comments column
 * @method     VolunteerQuery groupByPhonenumber() Group by the phoneNumber column
 * @method     VolunteerQuery groupBySundayFromHour() Group by the sunday_from_hour column
 * @method     VolunteerQuery groupByMondayFromHour() Group by the monday_from_hour column
 * @method     VolunteerQuery groupByTuesdayFromHour() Group by the tuesday_from_hour column
 * @method     VolunteerQuery groupByWednesdayFromHour() Group by the wednesday_from_hour column
 * @method     VolunteerQuery groupByThursdayFromHour() Group by the thursday_from_hour column
 * @method     VolunteerQuery groupByFridayFromHour() Group by the friday_from_hour column
 * @method     VolunteerQuery groupBySaturdayFromHour() Group by the saturday_from_hour column
 * @method     VolunteerQuery groupBySundayToHour() Group by the sunday_to_hour column
 * @method     VolunteerQuery groupByMondayToHour() Group by the monday_to_hour column
 * @method     VolunteerQuery groupByTuesdayToHour() Group by the tuesday_to_hour column
 * @method     VolunteerQuery groupByWednesdayToHour() Group by the wednesday_to_hour column
 * @method     VolunteerQuery groupByThursdayToHour() Group by the thursday_to_hour column
 * @method     VolunteerQuery groupByFridayToHour() Group by the friday_to_hour column
 * @method     VolunteerQuery groupBySaturdayToHour() Group by the saturday_to_hour column
 * @method     VolunteerQuery groupBySundayAnyTime() Group by the sunday_any_time column
 * @method     VolunteerQuery groupByMondayAnyTime() Group by the monday_any_time column
 * @method     VolunteerQuery groupByTuesdayAnyTime() Group by the tuesday_any_time column
 * @method     VolunteerQuery groupByWednesdayAnyTime() Group by the wednesday_any_time column
 * @method     VolunteerQuery groupByThursdayAnyTime() Group by the thursday_any_time column
 * @method     VolunteerQuery groupByFridayAnyTime() Group by the friday_any_time column
 * @method     VolunteerQuery groupBySaturdayAnyTime() Group by the saturday_any_time column
 * @method     VolunteerQuery groupBySundayNoTime() Group by the sunday_no_time column
 * @method     VolunteerQuery groupByMondayNoTime() Group by the monday_no_time column
 * @method     VolunteerQuery groupByTuesdayNoTime() Group by the tuesday_no_time column
 * @method     VolunteerQuery groupByWednesdayNoTime() Group by the wednesday_no_time column
 * @method     VolunteerQuery groupByThursdayNoTime() Group by the thursday_no_time column
 * @method     VolunteerQuery groupByFridayNoTime() Group by the friday_no_time column
 * @method     VolunteerQuery groupBySaturdayNoTime() Group by the saturday_no_time column
 *
 * @method     VolunteerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     VolunteerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     VolunteerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     VolunteerQuery leftJoinReport($relationAlias = '') Adds a LEFT JOIN clause to the query using the Report relation
 * @method     VolunteerQuery rightJoinReport($relationAlias = '') Adds a RIGHT JOIN clause to the query using the Report relation
 * @method     VolunteerQuery innerJoinReport($relationAlias = '') Adds a INNER JOIN clause to the query using the Report relation
 *
 * @method     VolunteerQuery leftJoinReportComments($relationAlias = '') Adds a LEFT JOIN clause to the query using the ReportComments relation
 * @method     VolunteerQuery rightJoinReportComments($relationAlias = '') Adds a RIGHT JOIN clause to the query using the ReportComments relation
 * @method     VolunteerQuery innerJoinReportComments($relationAlias = '') Adds a INNER JOIN clause to the query using the ReportComments relation
 *
 * @method     VolunteerQuery leftJoinBlogEntryComments($relationAlias = '') Adds a LEFT JOIN clause to the query using the BlogEntryComments relation
 * @method     VolunteerQuery rightJoinBlogEntryComments($relationAlias = '') Adds a RIGHT JOIN clause to the query using the BlogEntryComments relation
 * @method     VolunteerQuery innerJoinBlogEntryComments($relationAlias = '') Adds a INNER JOIN clause to the query using the BlogEntryComments relation
 *
 * @method     VolunteerQuery leftJoinVolunteerHours($relationAlias = '') Adds a LEFT JOIN clause to the query using the VolunteerHours relation
 * @method     VolunteerQuery rightJoinVolunteerHours($relationAlias = '') Adds a RIGHT JOIN clause to the query using the VolunteerHours relation
 * @method     VolunteerQuery innerJoinVolunteerHours($relationAlias = '') Adds a INNER JOIN clause to the query using the VolunteerHours relation
 *
 * @method     Volunteer findOne(PropelPDO $con = null) Return the first Volunteer matching the query
 * @method     Volunteer findOneOrCreate(PropelPDO $con = null) Return the first Volunteer matching the query, or a new Volunteer object populated from the query conditions when no match is found
 *
 * @method     Volunteer findOneById(int $id) Return the first Volunteer filtered by the id column
 * @method     Volunteer findOneByFirstName(string $first_name) Return the first Volunteer filtered by the first_name column
 * @method     Volunteer findOneByLastName(string $last_name) Return the first Volunteer filtered by the last_name column
 * @method     Volunteer findOneByCity(string $city) Return the first Volunteer filtered by the city column
 * @method     Volunteer findOneByState(string $state) Return the first Volunteer filtered by the state column
 * @method     Volunteer findOneByZip(string $zip) Return the first Volunteer filtered by the zip column
 * @method     Volunteer findOneByStreetaddress(string $streetAddress) Return the first Volunteer filtered by the streetAddress column
 * @method     Volunteer findOneByVehicle(string $vehicle) Return the first Volunteer filtered by the vehicle column
 * @method     Volunteer findOneByIsland(string $island) Return the first Volunteer filtered by the island column
 * @method     Volunteer findOneByEmail(string $email) Return the first Volunteer filtered by the email column
 * @method     Volunteer findOneByTraining(string $training) Return the first Volunteer filtered by the training column
 * @method     Volunteer findOneByComments(string $comments) Return the first Volunteer filtered by the comments column
 * @method     Volunteer findOneByPhonenumber(string $phoneNumber) Return the first Volunteer filtered by the phoneNumber column
 * @method     Volunteer findOneBySundayFromHour(int $sunday_from_hour) Return the first Volunteer filtered by the sunday_from_hour column
 * @method     Volunteer findOneByMondayFromHour(int $monday_from_hour) Return the first Volunteer filtered by the monday_from_hour column
 * @method     Volunteer findOneByTuesdayFromHour(int $tuesday_from_hour) Return the first Volunteer filtered by the tuesday_from_hour column
 * @method     Volunteer findOneByWednesdayFromHour(int $wednesday_from_hour) Return the first Volunteer filtered by the wednesday_from_hour column
 * @method     Volunteer findOneByThursdayFromHour(int $thursday_from_hour) Return the first Volunteer filtered by the thursday_from_hour column
 * @method     Volunteer findOneByFridayFromHour(int $friday_from_hour) Return the first Volunteer filtered by the friday_from_hour column
 * @method     Volunteer findOneBySaturdayFromHour(int $saturday_from_hour) Return the first Volunteer filtered by the saturday_from_hour column
 * @method     Volunteer findOneBySundayToHour(int $sunday_to_hour) Return the first Volunteer filtered by the sunday_to_hour column
 * @method     Volunteer findOneByMondayToHour(int $monday_to_hour) Return the first Volunteer filtered by the monday_to_hour column
 * @method     Volunteer findOneByTuesdayToHour(int $tuesday_to_hour) Return the first Volunteer filtered by the tuesday_to_hour column
 * @method     Volunteer findOneByWednesdayToHour(int $wednesday_to_hour) Return the first Volunteer filtered by the wednesday_to_hour column
 * @method     Volunteer findOneByThursdayToHour(int $thursday_to_hour) Return the first Volunteer filtered by the thursday_to_hour column
 * @method     Volunteer findOneByFridayToHour(int $friday_to_hour) Return the first Volunteer filtered by the friday_to_hour column
 * @method     Volunteer findOneBySaturdayToHour(int $saturday_to_hour) Return the first Volunteer filtered by the saturday_to_hour column
 * @method     Volunteer findOneBySundayAnyTime(boolean $sunday_any_time) Return the first Volunteer filtered by the sunday_any_time column
 * @method     Volunteer findOneByMondayAnyTime(boolean $monday_any_time) Return the first Volunteer filtered by the monday_any_time column
 * @method     Volunteer findOneByTuesdayAnyTime(boolean $tuesday_any_time) Return the first Volunteer filtered by the tuesday_any_time column
 * @method     Volunteer findOneByWednesdayAnyTime(boolean $wednesday_any_time) Return the first Volunteer filtered by the wednesday_any_time column
 * @method     Volunteer findOneByThursdayAnyTime(boolean $thursday_any_time) Return the first Volunteer filtered by the thursday_any_time column
 * @method     Volunteer findOneByFridayAnyTime(boolean $friday_any_time) Return the first Volunteer filtered by the friday_any_time column
 * @method     Volunteer findOneBySaturdayAnyTime(boolean $saturday_any_time) Return the first Volunteer filtered by the saturday_any_time column
 * @method     Volunteer findOneBySundayNoTime(boolean $sunday_no_time) Return the first Volunteer filtered by the sunday_no_time column
 * @method     Volunteer findOneByMondayNoTime(boolean $monday_no_time) Return the first Volunteer filtered by the monday_no_time column
 * @method     Volunteer findOneByTuesdayNoTime(boolean $tuesday_no_time) Return the first Volunteer filtered by the tuesday_no_time column
 * @method     Volunteer findOneByWednesdayNoTime(boolean $wednesday_no_time) Return the first Volunteer filtered by the wednesday_no_time column
 * @method     Volunteer findOneByThursdayNoTime(boolean $thursday_no_time) Return the first Volunteer filtered by the thursday_no_time column
 * @method     Volunteer findOneByFridayNoTime(boolean $friday_no_time) Return the first Volunteer filtered by the friday_no_time column
 * @method     Volunteer findOneBySaturdayNoTime(boolean $saturday_no_time) Return the first Volunteer filtered by the saturday_no_time column
 *
 * @method     array findById(int $id) Return Volunteer objects filtered by the id column
 * @method     array findByFirstName(string $first_name) Return Volunteer objects filtered by the first_name column
 * @method     array findByLastName(string $last_name) Return Volunteer objects filtered by the last_name column
 * @method     array findByCity(string $city) Return Volunteer objects filtered by the city column
 * @method     array findByState(string $state) Return Volunteer objects filtered by the state column
 * @method     array findByZip(string $zip) Return Volunteer objects filtered by the zip column
 * @method     array findByStreetaddress(string $streetAddress) Return Volunteer objects filtered by the streetAddress column
 * @method     array findByVehicle(string $vehicle) Return Volunteer objects filtered by the vehicle column
 * @method     array findByIsland(string $island) Return Volunteer objects filtered by the island column
 * @method     array findByEmail(string $email) Return Volunteer objects filtered by the email column
 * @method     array findByTraining(string $training) Return Volunteer objects filtered by the training column
 * @method     array findByComments(string $comments) Return Volunteer objects filtered by the comments column
 * @method     array findByPhonenumber(string $phoneNumber) Return Volunteer objects filtered by the phoneNumber column
 * @method     array findBySundayFromHour(int $sunday_from_hour) Return Volunteer objects filtered by the sunday_from_hour column
 * @method     array findByMondayFromHour(int $monday_from_hour) Return Volunteer objects filtered by the monday_from_hour column
 * @method     array findByTuesdayFromHour(int $tuesday_from_hour) Return Volunteer objects filtered by the tuesday_from_hour column
 * @method     array findByWednesdayFromHour(int $wednesday_from_hour) Return Volunteer objects filtered by the wednesday_from_hour column
 * @method     array findByThursdayFromHour(int $thursday_from_hour) Return Volunteer objects filtered by the thursday_from_hour column
 * @method     array findByFridayFromHour(int $friday_from_hour) Return Volunteer objects filtered by the friday_from_hour column
 * @method     array findBySaturdayFromHour(int $saturday_from_hour) Return Volunteer objects filtered by the saturday_from_hour column
 * @method     array findBySundayToHour(int $sunday_to_hour) Return Volunteer objects filtered by the sunday_to_hour column
 * @method     array findByMondayToHour(int $monday_to_hour) Return Volunteer objects filtered by the monday_to_hour column
 * @method     array findByTuesdayToHour(int $tuesday_to_hour) Return Volunteer objects filtered by the tuesday_to_hour column
 * @method     array findByWednesdayToHour(int $wednesday_to_hour) Return Volunteer objects filtered by the wednesday_to_hour column
 * @method     array findByThursdayToHour(int $thursday_to_hour) Return Volunteer objects filtered by the thursday_to_hour column
 * @method     array findByFridayToHour(int $friday_to_hour) Return Volunteer objects filtered by the friday_to_hour column
 * @method     array findBySaturdayToHour(int $saturday_to_hour) Return Volunteer objects filtered by the saturday_to_hour column
 * @method     array findBySundayAnyTime(boolean $sunday_any_time) Return Volunteer objects filtered by the sunday_any_time column
 * @method     array findByMondayAnyTime(boolean $monday_any_time) Return Volunteer objects filtered by the monday_any_time column
 * @method     array findByTuesdayAnyTime(boolean $tuesday_any_time) Return Volunteer objects filtered by the tuesday_any_time column
 * @method     array findByWednesdayAnyTime(boolean $wednesday_any_time) Return Volunteer objects filtered by the wednesday_any_time column
 * @method     array findByThursdayAnyTime(boolean $thursday_any_time) Return Volunteer objects filtered by the thursday_any_time column
 * @method     array findByFridayAnyTime(boolean $friday_any_time) Return Volunteer objects filtered by the friday_any_time column
 * @method     array findBySaturdayAnyTime(boolean $saturday_any_time) Return Volunteer objects filtered by the saturday_any_time column
 * @method     array findBySundayNoTime(boolean $sunday_no_time) Return Volunteer objects filtered by the sunday_no_time column
 * @method     array findByMondayNoTime(boolean $monday_no_time) Return Volunteer objects filtered by the monday_no_time column
 * @method     array findByTuesdayNoTime(boolean $tuesday_no_time) Return Volunteer objects filtered by the tuesday_no_time column
 * @method     array findByWednesdayNoTime(boolean $wednesday_no_time) Return Volunteer objects filtered by the wednesday_no_time column
 * @method     array findByThursdayNoTime(boolean $thursday_no_time) Return Volunteer objects filtered by the thursday_no_time column
 * @method     array findByFridayNoTime(boolean $friday_no_time) Return Volunteer objects filtered by the friday_no_time column
 * @method     array findBySaturdayNoTime(boolean $saturday_no_time) Return Volunteer objects filtered by the saturday_no_time column
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseVolunteerQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseVolunteerQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'persistence', $modelName = 'Volunteer', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new VolunteerQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    VolunteerQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof VolunteerQuery) {
			return $criteria;
		}
		$query = new VolunteerQuery();
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
	 * @return    Volunteer|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = VolunteerPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(VolunteerPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(VolunteerPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(VolunteerPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the first_name column
	 * 
	 * @param     string $firstName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByFirstName($firstName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($firstName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $firstName)) {
				$firstName = str_replace('*', '%', $firstName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::FIRST_NAME, $firstName, $comparison);
	}

	/**
	 * Filter the query on the last_name column
	 * 
	 * @param     string $lastName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByLastName($lastName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lastName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lastName)) {
				$lastName = str_replace('*', '%', $lastName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::LAST_NAME, $lastName, $comparison);
	}

	/**
	 * Filter the query on the city column
	 * 
	 * @param     string $city The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByCity($city = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($city)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $city)) {
				$city = str_replace('*', '%', $city);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the state column
	 * 
	 * @param     string $state The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByState($state = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($state)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $state)) {
				$state = str_replace('*', '%', $state);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the zip column
	 * 
	 * @param     string $zip The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByZip($zip = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($zip)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $zip)) {
				$zip = str_replace('*', '%', $zip);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::ZIP, $zip, $comparison);
	}

	/**
	 * Filter the query on the streetAddress column
	 * 
	 * @param     string $streetaddress The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByStreetaddress($streetaddress = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($streetaddress)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $streetaddress)) {
				$streetaddress = str_replace('*', '%', $streetaddress);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::STREETADDRESS, $streetaddress, $comparison);
	}

	/**
	 * Filter the query on the vehicle column
	 * 
	 * @param     string $vehicle The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByVehicle($vehicle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($vehicle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $vehicle)) {
				$vehicle = str_replace('*', '%', $vehicle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::VEHICLE, $vehicle, $comparison);
	}

	/**
	 * Filter the query on the island column
	 * 
	 * @param     string $island The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByIsland($island = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($island)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $island)) {
				$island = str_replace('*', '%', $island);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::ISLAND, $island, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the training column
	 * 
	 * @param     string $training The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByTraining($training = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($training)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $training)) {
				$training = str_replace('*', '%', $training);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::TRAINING, $training, $comparison);
	}

	/**
	 * Filter the query on the comments column
	 * 
	 * @param     string $comments The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByComments($comments = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comments)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comments)) {
				$comments = str_replace('*', '%', $comments);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::COMMENTS, $comments, $comparison);
	}

	/**
	 * Filter the query on the phoneNumber column
	 * 
	 * @param     string $phonenumber The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByPhonenumber($phonenumber = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($phonenumber)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $phonenumber)) {
				$phonenumber = str_replace('*', '%', $phonenumber);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::PHONENUMBER, $phonenumber, $comparison);
	}

	/**
	 * Filter the query on the sunday_from_hour column
	 * 
	 * @param     int|array $sundayFromHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterBySundayFromHour($sundayFromHour = null, $comparison = null)
	{
		if (is_array($sundayFromHour)) {
			$useMinMax = false;
			if (isset($sundayFromHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::SUNDAY_FROM_HOUR, $sundayFromHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sundayFromHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::SUNDAY_FROM_HOUR, $sundayFromHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::SUNDAY_FROM_HOUR, $sundayFromHour, $comparison);
	}

	/**
	 * Filter the query on the monday_from_hour column
	 * 
	 * @param     int|array $mondayFromHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByMondayFromHour($mondayFromHour = null, $comparison = null)
	{
		if (is_array($mondayFromHour)) {
			$useMinMax = false;
			if (isset($mondayFromHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::MONDAY_FROM_HOUR, $mondayFromHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($mondayFromHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::MONDAY_FROM_HOUR, $mondayFromHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::MONDAY_FROM_HOUR, $mondayFromHour, $comparison);
	}

	/**
	 * Filter the query on the tuesday_from_hour column
	 * 
	 * @param     int|array $tuesdayFromHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByTuesdayFromHour($tuesdayFromHour = null, $comparison = null)
	{
		if (is_array($tuesdayFromHour)) {
			$useMinMax = false;
			if (isset($tuesdayFromHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::TUESDAY_FROM_HOUR, $tuesdayFromHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tuesdayFromHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::TUESDAY_FROM_HOUR, $tuesdayFromHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::TUESDAY_FROM_HOUR, $tuesdayFromHour, $comparison);
	}

	/**
	 * Filter the query on the wednesday_from_hour column
	 * 
	 * @param     int|array $wednesdayFromHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByWednesdayFromHour($wednesdayFromHour = null, $comparison = null)
	{
		if (is_array($wednesdayFromHour)) {
			$useMinMax = false;
			if (isset($wednesdayFromHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::WEDNESDAY_FROM_HOUR, $wednesdayFromHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($wednesdayFromHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::WEDNESDAY_FROM_HOUR, $wednesdayFromHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::WEDNESDAY_FROM_HOUR, $wednesdayFromHour, $comparison);
	}

	/**
	 * Filter the query on the thursday_from_hour column
	 * 
	 * @param     int|array $thursdayFromHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByThursdayFromHour($thursdayFromHour = null, $comparison = null)
	{
		if (is_array($thursdayFromHour)) {
			$useMinMax = false;
			if (isset($thursdayFromHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::THURSDAY_FROM_HOUR, $thursdayFromHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($thursdayFromHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::THURSDAY_FROM_HOUR, $thursdayFromHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::THURSDAY_FROM_HOUR, $thursdayFromHour, $comparison);
	}

	/**
	 * Filter the query on the friday_from_hour column
	 * 
	 * @param     int|array $fridayFromHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByFridayFromHour($fridayFromHour = null, $comparison = null)
	{
		if (is_array($fridayFromHour)) {
			$useMinMax = false;
			if (isset($fridayFromHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::FRIDAY_FROM_HOUR, $fridayFromHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fridayFromHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::FRIDAY_FROM_HOUR, $fridayFromHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::FRIDAY_FROM_HOUR, $fridayFromHour, $comparison);
	}

	/**
	 * Filter the query on the saturday_from_hour column
	 * 
	 * @param     int|array $saturdayFromHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterBySaturdayFromHour($saturdayFromHour = null, $comparison = null)
	{
		if (is_array($saturdayFromHour)) {
			$useMinMax = false;
			if (isset($saturdayFromHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::SATURDAY_FROM_HOUR, $saturdayFromHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($saturdayFromHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::SATURDAY_FROM_HOUR, $saturdayFromHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::SATURDAY_FROM_HOUR, $saturdayFromHour, $comparison);
	}

	/**
	 * Filter the query on the sunday_to_hour column
	 * 
	 * @param     int|array $sundayToHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterBySundayToHour($sundayToHour = null, $comparison = null)
	{
		if (is_array($sundayToHour)) {
			$useMinMax = false;
			if (isset($sundayToHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::SUNDAY_TO_HOUR, $sundayToHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sundayToHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::SUNDAY_TO_HOUR, $sundayToHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::SUNDAY_TO_HOUR, $sundayToHour, $comparison);
	}

	/**
	 * Filter the query on the monday_to_hour column
	 * 
	 * @param     int|array $mondayToHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByMondayToHour($mondayToHour = null, $comparison = null)
	{
		if (is_array($mondayToHour)) {
			$useMinMax = false;
			if (isset($mondayToHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::MONDAY_TO_HOUR, $mondayToHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($mondayToHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::MONDAY_TO_HOUR, $mondayToHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::MONDAY_TO_HOUR, $mondayToHour, $comparison);
	}

	/**
	 * Filter the query on the tuesday_to_hour column
	 * 
	 * @param     int|array $tuesdayToHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByTuesdayToHour($tuesdayToHour = null, $comparison = null)
	{
		if (is_array($tuesdayToHour)) {
			$useMinMax = false;
			if (isset($tuesdayToHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::TUESDAY_TO_HOUR, $tuesdayToHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tuesdayToHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::TUESDAY_TO_HOUR, $tuesdayToHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::TUESDAY_TO_HOUR, $tuesdayToHour, $comparison);
	}

	/**
	 * Filter the query on the wednesday_to_hour column
	 * 
	 * @param     int|array $wednesdayToHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByWednesdayToHour($wednesdayToHour = null, $comparison = null)
	{
		if (is_array($wednesdayToHour)) {
			$useMinMax = false;
			if (isset($wednesdayToHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::WEDNESDAY_TO_HOUR, $wednesdayToHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($wednesdayToHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::WEDNESDAY_TO_HOUR, $wednesdayToHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::WEDNESDAY_TO_HOUR, $wednesdayToHour, $comparison);
	}

	/**
	 * Filter the query on the thursday_to_hour column
	 * 
	 * @param     int|array $thursdayToHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByThursdayToHour($thursdayToHour = null, $comparison = null)
	{
		if (is_array($thursdayToHour)) {
			$useMinMax = false;
			if (isset($thursdayToHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::THURSDAY_TO_HOUR, $thursdayToHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($thursdayToHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::THURSDAY_TO_HOUR, $thursdayToHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::THURSDAY_TO_HOUR, $thursdayToHour, $comparison);
	}

	/**
	 * Filter the query on the friday_to_hour column
	 * 
	 * @param     int|array $fridayToHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByFridayToHour($fridayToHour = null, $comparison = null)
	{
		if (is_array($fridayToHour)) {
			$useMinMax = false;
			if (isset($fridayToHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::FRIDAY_TO_HOUR, $fridayToHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fridayToHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::FRIDAY_TO_HOUR, $fridayToHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::FRIDAY_TO_HOUR, $fridayToHour, $comparison);
	}

	/**
	 * Filter the query on the saturday_to_hour column
	 * 
	 * @param     int|array $saturdayToHour The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterBySaturdayToHour($saturdayToHour = null, $comparison = null)
	{
		if (is_array($saturdayToHour)) {
			$useMinMax = false;
			if (isset($saturdayToHour['min'])) {
				$this->addUsingAlias(VolunteerPeer::SATURDAY_TO_HOUR, $saturdayToHour['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($saturdayToHour['max'])) {
				$this->addUsingAlias(VolunteerPeer::SATURDAY_TO_HOUR, $saturdayToHour['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerPeer::SATURDAY_TO_HOUR, $saturdayToHour, $comparison);
	}

	/**
	 * Filter the query on the sunday_any_time column
	 * 
	 * @param     boolean|string $sundayAnyTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterBySundayAnyTime($sundayAnyTime = null, $comparison = null)
	{
		if (is_string($sundayAnyTime)) {
			$sunday_any_time = in_array(strtolower($sundayAnyTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::SUNDAY_ANY_TIME, $sundayAnyTime, $comparison);
	}

	/**
	 * Filter the query on the monday_any_time column
	 * 
	 * @param     boolean|string $mondayAnyTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByMondayAnyTime($mondayAnyTime = null, $comparison = null)
	{
		if (is_string($mondayAnyTime)) {
			$monday_any_time = in_array(strtolower($mondayAnyTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::MONDAY_ANY_TIME, $mondayAnyTime, $comparison);
	}

	/**
	 * Filter the query on the tuesday_any_time column
	 * 
	 * @param     boolean|string $tuesdayAnyTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByTuesdayAnyTime($tuesdayAnyTime = null, $comparison = null)
	{
		if (is_string($tuesdayAnyTime)) {
			$tuesday_any_time = in_array(strtolower($tuesdayAnyTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::TUESDAY_ANY_TIME, $tuesdayAnyTime, $comparison);
	}

	/**
	 * Filter the query on the wednesday_any_time column
	 * 
	 * @param     boolean|string $wednesdayAnyTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByWednesdayAnyTime($wednesdayAnyTime = null, $comparison = null)
	{
		if (is_string($wednesdayAnyTime)) {
			$wednesday_any_time = in_array(strtolower($wednesdayAnyTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::WEDNESDAY_ANY_TIME, $wednesdayAnyTime, $comparison);
	}

	/**
	 * Filter the query on the thursday_any_time column
	 * 
	 * @param     boolean|string $thursdayAnyTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByThursdayAnyTime($thursdayAnyTime = null, $comparison = null)
	{
		if (is_string($thursdayAnyTime)) {
			$thursday_any_time = in_array(strtolower($thursdayAnyTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::THURSDAY_ANY_TIME, $thursdayAnyTime, $comparison);
	}

	/**
	 * Filter the query on the friday_any_time column
	 * 
	 * @param     boolean|string $fridayAnyTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByFridayAnyTime($fridayAnyTime = null, $comparison = null)
	{
		if (is_string($fridayAnyTime)) {
			$friday_any_time = in_array(strtolower($fridayAnyTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::FRIDAY_ANY_TIME, $fridayAnyTime, $comparison);
	}

	/**
	 * Filter the query on the saturday_any_time column
	 * 
	 * @param     boolean|string $saturdayAnyTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterBySaturdayAnyTime($saturdayAnyTime = null, $comparison = null)
	{
		if (is_string($saturdayAnyTime)) {
			$saturday_any_time = in_array(strtolower($saturdayAnyTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::SATURDAY_ANY_TIME, $saturdayAnyTime, $comparison);
	}

	/**
	 * Filter the query on the sunday_no_time column
	 * 
	 * @param     boolean|string $sundayNoTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterBySundayNoTime($sundayNoTime = null, $comparison = null)
	{
		if (is_string($sundayNoTime)) {
			$sunday_no_time = in_array(strtolower($sundayNoTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::SUNDAY_NO_TIME, $sundayNoTime, $comparison);
	}

	/**
	 * Filter the query on the monday_no_time column
	 * 
	 * @param     boolean|string $mondayNoTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByMondayNoTime($mondayNoTime = null, $comparison = null)
	{
		if (is_string($mondayNoTime)) {
			$monday_no_time = in_array(strtolower($mondayNoTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::MONDAY_NO_TIME, $mondayNoTime, $comparison);
	}

	/**
	 * Filter the query on the tuesday_no_time column
	 * 
	 * @param     boolean|string $tuesdayNoTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByTuesdayNoTime($tuesdayNoTime = null, $comparison = null)
	{
		if (is_string($tuesdayNoTime)) {
			$tuesday_no_time = in_array(strtolower($tuesdayNoTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::TUESDAY_NO_TIME, $tuesdayNoTime, $comparison);
	}

	/**
	 * Filter the query on the wednesday_no_time column
	 * 
	 * @param     boolean|string $wednesdayNoTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByWednesdayNoTime($wednesdayNoTime = null, $comparison = null)
	{
		if (is_string($wednesdayNoTime)) {
			$wednesday_no_time = in_array(strtolower($wednesdayNoTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::WEDNESDAY_NO_TIME, $wednesdayNoTime, $comparison);
	}

	/**
	 * Filter the query on the thursday_no_time column
	 * 
	 * @param     boolean|string $thursdayNoTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByThursdayNoTime($thursdayNoTime = null, $comparison = null)
	{
		if (is_string($thursdayNoTime)) {
			$thursday_no_time = in_array(strtolower($thursdayNoTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::THURSDAY_NO_TIME, $thursdayNoTime, $comparison);
	}

	/**
	 * Filter the query on the friday_no_time column
	 * 
	 * @param     boolean|string $fridayNoTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByFridayNoTime($fridayNoTime = null, $comparison = null)
	{
		if (is_string($fridayNoTime)) {
			$friday_no_time = in_array(strtolower($fridayNoTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::FRIDAY_NO_TIME, $fridayNoTime, $comparison);
	}

	/**
	 * Filter the query on the saturday_no_time column
	 * 
	 * @param     boolean|string $saturdayNoTime The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterBySaturdayNoTime($saturdayNoTime = null, $comparison = null)
	{
		if (is_string($saturdayNoTime)) {
			$saturday_no_time = in_array(strtolower($saturdayNoTime), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VolunteerPeer::SATURDAY_NO_TIME, $saturdayNoTime, $comparison);
	}

	/**
	 * Filter the query by a related Report object
	 *
	 * @param     Report $report  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByReport($report, $comparison = null)
	{
		return $this
			->addUsingAlias(VolunteerPeer::ID, $report->getVolunteerId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Report relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function joinReport($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Report');
		
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
			$this->addJoinObject($join, 'Report');
		}
		
		return $this;
	}

	/**
	 * Use the Report relation Report object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ReportQuery A secondary query class using the current class as primary query
	 */
	public function useReportQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinReport($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Report', 'ReportQuery');
	}

	/**
	 * Filter the query by a related ReportComments object
	 *
	 * @param     ReportComments $reportComments  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByReportComments($reportComments, $comparison = null)
	{
		return $this
			->addUsingAlias(VolunteerPeer::ID, $reportComments->getVolunteerId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ReportComments relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
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
	 * Filter the query by a related BlogEntryComments object
	 *
	 * @param     BlogEntryComments $blogEntryComments  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByBlogEntryComments($blogEntryComments, $comparison = null)
	{
		return $this
			->addUsingAlias(VolunteerPeer::ID, $blogEntryComments->getVolunteerId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the BlogEntryComments relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function joinBlogEntryComments($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('BlogEntryComments');
		
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
			$this->addJoinObject($join, 'BlogEntryComments');
		}
		
		return $this;
	}

	/**
	 * Use the BlogEntryComments relation BlogEntryComments object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BlogEntryCommentsQuery A secondary query class using the current class as primary query
	 */
	public function useBlogEntryCommentsQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinBlogEntryComments($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'BlogEntryComments', 'BlogEntryCommentsQuery');
	}

	/**
	 * Filter the query by a related VolunteerHours object
	 *
	 * @param     VolunteerHours $volunteerHours  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function filterByVolunteerHours($volunteerHours, $comparison = null)
	{
		return $this
			->addUsingAlias(VolunteerPeer::ID, $volunteerHours->getVolunteerId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the VolunteerHours relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function joinVolunteerHours($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('VolunteerHours');
		
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
			$this->addJoinObject($join, 'VolunteerHours');
		}
		
		return $this;
	}

	/**
	 * Use the VolunteerHours relation VolunteerHours object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VolunteerHoursQuery A secondary query class using the current class as primary query
	 */
	public function useVolunteerHoursQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinVolunteerHours($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'VolunteerHours', 'VolunteerHoursQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Volunteer $volunteer Object to remove from the list of results
	 *
	 * @return    VolunteerQuery The current query, for fluid interface
	 */
	public function prune($volunteer = null)
	{
		if ($volunteer) {
			$this->addUsingAlias(VolunteerPeer::ID, $volunteer->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseVolunteerQuery
