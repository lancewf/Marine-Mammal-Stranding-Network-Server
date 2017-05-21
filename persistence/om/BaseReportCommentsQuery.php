<?php


/**
 * Base class that represents a query for the 'report_comments' table.
 *
 * comments on a report
 *
 * @method     ReportCommentsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ReportCommentsQuery orderByIndex($order = Criteria::ASC) Order by the index column
 * @method     ReportCommentsQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method     ReportCommentsQuery orderByReportId($order = Criteria::ASC) Order by the report_id column
 * @method     ReportCommentsQuery orderByVolunteerId($order = Criteria::ASC) Order by the volunteer_id column
 *
 * @method     ReportCommentsQuery groupById() Group by the id column
 * @method     ReportCommentsQuery groupByIndex() Group by the index column
 * @method     ReportCommentsQuery groupByComments() Group by the comments column
 * @method     ReportCommentsQuery groupByReportId() Group by the report_id column
 * @method     ReportCommentsQuery groupByVolunteerId() Group by the volunteer_id column
 *
 * @method     ReportCommentsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ReportCommentsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ReportCommentsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ReportCommentsQuery leftJoinReport($relationAlias = null) Adds a LEFT JOIN clause to the query using the Report relation
 * @method     ReportCommentsQuery rightJoinReport($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Report relation
 * @method     ReportCommentsQuery innerJoinReport($relationAlias = null) Adds a INNER JOIN clause to the query using the Report relation
 *
 * @method     ReportCommentsQuery leftJoinVolunteer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Volunteer relation
 * @method     ReportCommentsQuery rightJoinVolunteer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Volunteer relation
 * @method     ReportCommentsQuery innerJoinVolunteer($relationAlias = null) Adds a INNER JOIN clause to the query using the Volunteer relation
 *
 * @method     ReportComments findOne(PropelPDO $con = null) Return the first ReportComments matching the query
 * @method     ReportComments findOneOrCreate(PropelPDO $con = null) Return the first ReportComments matching the query, or a new ReportComments object populated from the query conditions when no match is found
 *
 * @method     ReportComments findOneById(int $id) Return the first ReportComments filtered by the id column
 * @method     ReportComments findOneByIndex(int $index) Return the first ReportComments filtered by the index column
 * @method     ReportComments findOneByComments(string $comments) Return the first ReportComments filtered by the comments column
 * @method     ReportComments findOneByReportId(int $report_id) Return the first ReportComments filtered by the report_id column
 * @method     ReportComments findOneByVolunteerId(int $volunteer_id) Return the first ReportComments filtered by the volunteer_id column
 *
 * @method     array findById(int $id) Return ReportComments objects filtered by the id column
 * @method     array findByIndex(int $index) Return ReportComments objects filtered by the index column
 * @method     array findByComments(string $comments) Return ReportComments objects filtered by the comments column
 * @method     array findByReportId(int $report_id) Return ReportComments objects filtered by the report_id column
 * @method     array findByVolunteerId(int $volunteer_id) Return ReportComments objects filtered by the volunteer_id column
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseReportCommentsQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseReportCommentsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'persistence', $modelName = 'ReportComments', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ReportCommentsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ReportCommentsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ReportCommentsQuery) {
			return $criteria;
		}
		$query = new ReportCommentsQuery();
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
	 * @return    ReportComments|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ReportCommentsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ReportCommentsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ReportCommentsPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ReportCommentsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ReportCommentsPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportCommentsQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ReportCommentsPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the index column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIndex(1234); // WHERE index = 1234
	 * $query->filterByIndex(array(12, 34)); // WHERE index IN (12, 34)
	 * $query->filterByIndex(array('min' => 12)); // WHERE index > 12
	 * </code>
	 *
	 * @param     mixed $index The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportCommentsQuery The current query, for fluid interface
	 */
	public function filterByIndex($index = null, $comparison = null)
	{
		if (is_array($index)) {
			$useMinMax = false;
			if (isset($index['min'])) {
				$this->addUsingAlias(ReportCommentsPeer::INDEX, $index['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($index['max'])) {
				$this->addUsingAlias(ReportCommentsPeer::INDEX, $index['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReportCommentsPeer::INDEX, $index, $comparison);
	}

	/**
	 * Filter the query on the comments column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByComments('fooValue');   // WHERE comments = 'fooValue'
	 * $query->filterByComments('%fooValue%'); // WHERE comments LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $comments The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportCommentsQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ReportCommentsPeer::COMMENTS, $comments, $comparison);
	}

	/**
	 * Filter the query on the report_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByReportId(1234); // WHERE report_id = 1234
	 * $query->filterByReportId(array(12, 34)); // WHERE report_id IN (12, 34)
	 * $query->filterByReportId(array('min' => 12)); // WHERE report_id > 12
	 * </code>
	 *
	 * @see       filterByReport()
	 *
	 * @param     mixed $reportId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportCommentsQuery The current query, for fluid interface
	 */
	public function filterByReportId($reportId = null, $comparison = null)
	{
		if (is_array($reportId)) {
			$useMinMax = false;
			if (isset($reportId['min'])) {
				$this->addUsingAlias(ReportCommentsPeer::REPORT_ID, $reportId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reportId['max'])) {
				$this->addUsingAlias(ReportCommentsPeer::REPORT_ID, $reportId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReportCommentsPeer::REPORT_ID, $reportId, $comparison);
	}

	/**
	 * Filter the query on the volunteer_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByVolunteerId(1234); // WHERE volunteer_id = 1234
	 * $query->filterByVolunteerId(array(12, 34)); // WHERE volunteer_id IN (12, 34)
	 * $query->filterByVolunteerId(array('min' => 12)); // WHERE volunteer_id > 12
	 * </code>
	 *
	 * @see       filterByVolunteer()
	 *
	 * @param     mixed $volunteerId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportCommentsQuery The current query, for fluid interface
	 */
	public function filterByVolunteerId($volunteerId = null, $comparison = null)
	{
		if (is_array($volunteerId)) {
			$useMinMax = false;
			if (isset($volunteerId['min'])) {
				$this->addUsingAlias(ReportCommentsPeer::VOLUNTEER_ID, $volunteerId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($volunteerId['max'])) {
				$this->addUsingAlias(ReportCommentsPeer::VOLUNTEER_ID, $volunteerId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReportCommentsPeer::VOLUNTEER_ID, $volunteerId, $comparison);
	}

	/**
	 * Filter the query by a related Report object
	 *
	 * @param     Report|PropelCollection $report The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportCommentsQuery The current query, for fluid interface
	 */
	public function filterByReport($report, $comparison = null)
	{
		if ($report instanceof Report) {
			return $this
				->addUsingAlias(ReportCommentsPeer::REPORT_ID, $report->getId(), $comparison);
		} elseif ($report instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(ReportCommentsPeer::REPORT_ID, $report->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByReport() only accepts arguments of type Report or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Report relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ReportCommentsQuery The current query, for fluid interface
	 */
	public function joinReport($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
	public function useReportQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinReport($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Report', 'ReportQuery');
	}

	/**
	 * Filter the query by a related Volunteer object
	 *
	 * @param     Volunteer|PropelCollection $volunteer The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReportCommentsQuery The current query, for fluid interface
	 */
	public function filterByVolunteer($volunteer, $comparison = null)
	{
		if ($volunteer instanceof Volunteer) {
			return $this
				->addUsingAlias(ReportCommentsPeer::VOLUNTEER_ID, $volunteer->getId(), $comparison);
		} elseif ($volunteer instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(ReportCommentsPeer::VOLUNTEER_ID, $volunteer->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByVolunteer() only accepts arguments of type Volunteer or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Volunteer relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ReportCommentsQuery The current query, for fluid interface
	 */
	public function joinVolunteer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
	public function useVolunteerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinVolunteer($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Volunteer', 'VolunteerQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ReportComments $reportComments Object to remove from the list of results
	 *
	 * @return    ReportCommentsQuery The current query, for fluid interface
	 */
	public function prune($reportComments = null)
	{
		if ($reportComments) {
			$this->addUsingAlias(ReportCommentsPeer::ID, $reportComments->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseReportCommentsQuery
