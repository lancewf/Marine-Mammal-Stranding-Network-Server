<?php


/**
 * Base class that represents a query for the 'volunteer_hours' table.
 *
 * a volunteer
 *
 * @method     VolunteerHoursQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     VolunteerHoursQuery orderByTotalHours($order = Criteria::ASC) Order by the total_hours column
 * @method     VolunteerHoursQuery orderByMileage($order = Criteria::ASC) Order by the mileage column
 * @method     VolunteerHoursQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method     VolunteerHoursQuery orderByDayOfMonth($order = Criteria::ASC) Order by the day_of_month column
 * @method     VolunteerHoursQuery orderByMonth($order = Criteria::ASC) Order by the month column
 * @method     VolunteerHoursQuery orderByYear($order = Criteria::ASC) Order by the year column
 * @method     VolunteerHoursQuery orderByVolunteerId($order = Criteria::ASC) Order by the volunteer_id column
 *
 * @method     VolunteerHoursQuery groupById() Group by the id column
 * @method     VolunteerHoursQuery groupByTotalHours() Group by the total_hours column
 * @method     VolunteerHoursQuery groupByMileage() Group by the mileage column
 * @method     VolunteerHoursQuery groupByComments() Group by the comments column
 * @method     VolunteerHoursQuery groupByDayOfMonth() Group by the day_of_month column
 * @method     VolunteerHoursQuery groupByMonth() Group by the month column
 * @method     VolunteerHoursQuery groupByYear() Group by the year column
 * @method     VolunteerHoursQuery groupByVolunteerId() Group by the volunteer_id column
 *
 * @method     VolunteerHoursQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     VolunteerHoursQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     VolunteerHoursQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     VolunteerHoursQuery leftJoinVolunteer($relationAlias = '') Adds a LEFT JOIN clause to the query using the Volunteer relation
 * @method     VolunteerHoursQuery rightJoinVolunteer($relationAlias = '') Adds a RIGHT JOIN clause to the query using the Volunteer relation
 * @method     VolunteerHoursQuery innerJoinVolunteer($relationAlias = '') Adds a INNER JOIN clause to the query using the Volunteer relation
 *
 * @method     VolunteerHours findOne(PropelPDO $con = null) Return the first VolunteerHours matching the query
 * @method     VolunteerHours findOneOrCreate(PropelPDO $con = null) Return the first VolunteerHours matching the query, or a new VolunteerHours object populated from the query conditions when no match is found
 *
 * @method     VolunteerHours findOneById(int $id) Return the first VolunteerHours filtered by the id column
 * @method     VolunteerHours findOneByTotalHours(double $total_hours) Return the first VolunteerHours filtered by the total_hours column
 * @method     VolunteerHours findOneByMileage(int $mileage) Return the first VolunteerHours filtered by the mileage column
 * @method     VolunteerHours findOneByComments(string $comments) Return the first VolunteerHours filtered by the comments column
 * @method     VolunteerHours findOneByDayOfMonth(int $day_of_month) Return the first VolunteerHours filtered by the day_of_month column
 * @method     VolunteerHours findOneByMonth(int $month) Return the first VolunteerHours filtered by the month column
 * @method     VolunteerHours findOneByYear(int $year) Return the first VolunteerHours filtered by the year column
 * @method     VolunteerHours findOneByVolunteerId(int $volunteer_id) Return the first VolunteerHours filtered by the volunteer_id column
 *
 * @method     array findById(int $id) Return VolunteerHours objects filtered by the id column
 * @method     array findByTotalHours(double $total_hours) Return VolunteerHours objects filtered by the total_hours column
 * @method     array findByMileage(int $mileage) Return VolunteerHours objects filtered by the mileage column
 * @method     array findByComments(string $comments) Return VolunteerHours objects filtered by the comments column
 * @method     array findByDayOfMonth(int $day_of_month) Return VolunteerHours objects filtered by the day_of_month column
 * @method     array findByMonth(int $month) Return VolunteerHours objects filtered by the month column
 * @method     array findByYear(int $year) Return VolunteerHours objects filtered by the year column
 * @method     array findByVolunteerId(int $volunteer_id) Return VolunteerHours objects filtered by the volunteer_id column
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseVolunteerHoursQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseVolunteerHoursQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'persistence', $modelName = 'VolunteerHours', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new VolunteerHoursQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    VolunteerHoursQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof VolunteerHoursQuery) {
			return $criteria;
		}
		$query = new VolunteerHoursQuery();
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
	 * @return    VolunteerHours|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = VolunteerHoursPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    VolunteerHoursQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(VolunteerHoursPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    VolunteerHoursQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(VolunteerHoursPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerHoursQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(VolunteerHoursPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the total_hours column
	 * 
	 * @param     double|array $totalHours The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerHoursQuery The current query, for fluid interface
	 */
	public function filterByTotalHours($totalHours = null, $comparison = null)
	{
		if (is_array($totalHours)) {
			$useMinMax = false;
			if (isset($totalHours['min'])) {
				$this->addUsingAlias(VolunteerHoursPeer::TOTAL_HOURS, $totalHours['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalHours['max'])) {
				$this->addUsingAlias(VolunteerHoursPeer::TOTAL_HOURS, $totalHours['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerHoursPeer::TOTAL_HOURS, $totalHours, $comparison);
	}

	/**
	 * Filter the query on the mileage column
	 * 
	 * @param     int|array $mileage The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerHoursQuery The current query, for fluid interface
	 */
	public function filterByMileage($mileage = null, $comparison = null)
	{
		if (is_array($mileage)) {
			$useMinMax = false;
			if (isset($mileage['min'])) {
				$this->addUsingAlias(VolunteerHoursPeer::MILEAGE, $mileage['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($mileage['max'])) {
				$this->addUsingAlias(VolunteerHoursPeer::MILEAGE, $mileage['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerHoursPeer::MILEAGE, $mileage, $comparison);
	}

	/**
	 * Filter the query on the comments column
	 * 
	 * @param     string $comments The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerHoursQuery The current query, for fluid interface
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
		return $this->addUsingAlias(VolunteerHoursPeer::COMMENTS, $comments, $comparison);
	}

	/**
	 * Filter the query on the day_of_month column
	 * 
	 * @param     int|array $dayOfMonth The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerHoursQuery The current query, for fluid interface
	 */
	public function filterByDayOfMonth($dayOfMonth = null, $comparison = null)
	{
		if (is_array($dayOfMonth)) {
			$useMinMax = false;
			if (isset($dayOfMonth['min'])) {
				$this->addUsingAlias(VolunteerHoursPeer::DAY_OF_MONTH, $dayOfMonth['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dayOfMonth['max'])) {
				$this->addUsingAlias(VolunteerHoursPeer::DAY_OF_MONTH, $dayOfMonth['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerHoursPeer::DAY_OF_MONTH, $dayOfMonth, $comparison);
	}

	/**
	 * Filter the query on the month column
	 * 
	 * @param     int|array $month The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerHoursQuery The current query, for fluid interface
	 */
	public function filterByMonth($month = null, $comparison = null)
	{
		if (is_array($month)) {
			$useMinMax = false;
			if (isset($month['min'])) {
				$this->addUsingAlias(VolunteerHoursPeer::MONTH, $month['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($month['max'])) {
				$this->addUsingAlias(VolunteerHoursPeer::MONTH, $month['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerHoursPeer::MONTH, $month, $comparison);
	}

	/**
	 * Filter the query on the year column
	 * 
	 * @param     int|array $year The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerHoursQuery The current query, for fluid interface
	 */
	public function filterByYear($year = null, $comparison = null)
	{
		if (is_array($year)) {
			$useMinMax = false;
			if (isset($year['min'])) {
				$this->addUsingAlias(VolunteerHoursPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($year['max'])) {
				$this->addUsingAlias(VolunteerHoursPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerHoursPeer::YEAR, $year, $comparison);
	}

	/**
	 * Filter the query on the volunteer_id column
	 * 
	 * @param     int|array $volunteerId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerHoursQuery The current query, for fluid interface
	 */
	public function filterByVolunteerId($volunteerId = null, $comparison = null)
	{
		if (is_array($volunteerId)) {
			$useMinMax = false;
			if (isset($volunteerId['min'])) {
				$this->addUsingAlias(VolunteerHoursPeer::VOLUNTEER_ID, $volunteerId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($volunteerId['max'])) {
				$this->addUsingAlias(VolunteerHoursPeer::VOLUNTEER_ID, $volunteerId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VolunteerHoursPeer::VOLUNTEER_ID, $volunteerId, $comparison);
	}

	/**
	 * Filter the query by a related Volunteer object
	 *
	 * @param     Volunteer $volunteer  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VolunteerHoursQuery The current query, for fluid interface
	 */
	public function filterByVolunteer($volunteer, $comparison = null)
	{
		return $this
			->addUsingAlias(VolunteerHoursPeer::VOLUNTEER_ID, $volunteer->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Volunteer relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VolunteerHoursQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     VolunteerHours $volunteerHours Object to remove from the list of results
	 *
	 * @return    VolunteerHoursQuery The current query, for fluid interface
	 */
	public function prune($volunteerHours = null)
	{
		if ($volunteerHours) {
			$this->addUsingAlias(VolunteerHoursPeer::ID, $volunteerHours->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseVolunteerHoursQuery
