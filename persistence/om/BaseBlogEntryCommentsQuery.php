<?php


/**
 * Base class that represents a query for the 'blog_entry_comments' table.
 *
 * comments on a blog entry
 *
 * @method     BlogEntryCommentsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     BlogEntryCommentsQuery orderByIndex($order = Criteria::ASC) Order by the index column
 * @method     BlogEntryCommentsQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method     BlogEntryCommentsQuery orderByBlogEntryId($order = Criteria::ASC) Order by the blog_entry_id column
 * @method     BlogEntryCommentsQuery orderByVolunteerId($order = Criteria::ASC) Order by the volunteer_id column
 *
 * @method     BlogEntryCommentsQuery groupById() Group by the id column
 * @method     BlogEntryCommentsQuery groupByIndex() Group by the index column
 * @method     BlogEntryCommentsQuery groupByComments() Group by the comments column
 * @method     BlogEntryCommentsQuery groupByBlogEntryId() Group by the blog_entry_id column
 * @method     BlogEntryCommentsQuery groupByVolunteerId() Group by the volunteer_id column
 *
 * @method     BlogEntryCommentsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BlogEntryCommentsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BlogEntryCommentsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BlogEntryCommentsQuery leftJoinBlogEntry($relationAlias = null) Adds a LEFT JOIN clause to the query using the BlogEntry relation
 * @method     BlogEntryCommentsQuery rightJoinBlogEntry($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BlogEntry relation
 * @method     BlogEntryCommentsQuery innerJoinBlogEntry($relationAlias = null) Adds a INNER JOIN clause to the query using the BlogEntry relation
 *
 * @method     BlogEntryCommentsQuery leftJoinVolunteer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Volunteer relation
 * @method     BlogEntryCommentsQuery rightJoinVolunteer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Volunteer relation
 * @method     BlogEntryCommentsQuery innerJoinVolunteer($relationAlias = null) Adds a INNER JOIN clause to the query using the Volunteer relation
 *
 * @method     BlogEntryComments findOne(PropelPDO $con = null) Return the first BlogEntryComments matching the query
 * @method     BlogEntryComments findOneOrCreate(PropelPDO $con = null) Return the first BlogEntryComments matching the query, or a new BlogEntryComments object populated from the query conditions when no match is found
 *
 * @method     BlogEntryComments findOneById(int $id) Return the first BlogEntryComments filtered by the id column
 * @method     BlogEntryComments findOneByIndex(int $index) Return the first BlogEntryComments filtered by the index column
 * @method     BlogEntryComments findOneByComments(string $comments) Return the first BlogEntryComments filtered by the comments column
 * @method     BlogEntryComments findOneByBlogEntryId(int $blog_entry_id) Return the first BlogEntryComments filtered by the blog_entry_id column
 * @method     BlogEntryComments findOneByVolunteerId(int $volunteer_id) Return the first BlogEntryComments filtered by the volunteer_id column
 *
 * @method     array findById(int $id) Return BlogEntryComments objects filtered by the id column
 * @method     array findByIndex(int $index) Return BlogEntryComments objects filtered by the index column
 * @method     array findByComments(string $comments) Return BlogEntryComments objects filtered by the comments column
 * @method     array findByBlogEntryId(int $blog_entry_id) Return BlogEntryComments objects filtered by the blog_entry_id column
 * @method     array findByVolunteerId(int $volunteer_id) Return BlogEntryComments objects filtered by the volunteer_id column
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseBlogEntryCommentsQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBlogEntryCommentsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'persistence', $modelName = 'BlogEntryComments', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BlogEntryCommentsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BlogEntryCommentsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BlogEntryCommentsQuery) {
			return $criteria;
		}
		$query = new BlogEntryCommentsQuery();
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
	 * @return    BlogEntryComments|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BlogEntryCommentsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BlogEntryCommentsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BlogEntryCommentsPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BlogEntryCommentsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BlogEntryCommentsPeer::ID, $keys, Criteria::IN);
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
	 * @return    BlogEntryCommentsQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BlogEntryCommentsPeer::ID, $id, $comparison);
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
	 * @return    BlogEntryCommentsQuery The current query, for fluid interface
	 */
	public function filterByIndex($index = null, $comparison = null)
	{
		if (is_array($index)) {
			$useMinMax = false;
			if (isset($index['min'])) {
				$this->addUsingAlias(BlogEntryCommentsPeer::INDEX, $index['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($index['max'])) {
				$this->addUsingAlias(BlogEntryCommentsPeer::INDEX, $index['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogEntryCommentsPeer::INDEX, $index, $comparison);
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
	 * @return    BlogEntryCommentsQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BlogEntryCommentsPeer::COMMENTS, $comments, $comparison);
	}

	/**
	 * Filter the query on the blog_entry_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByBlogEntryId(1234); // WHERE blog_entry_id = 1234
	 * $query->filterByBlogEntryId(array(12, 34)); // WHERE blog_entry_id IN (12, 34)
	 * $query->filterByBlogEntryId(array('min' => 12)); // WHERE blog_entry_id > 12
	 * </code>
	 *
	 * @see       filterByBlogEntry()
	 *
	 * @param     mixed $blogEntryId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogEntryCommentsQuery The current query, for fluid interface
	 */
	public function filterByBlogEntryId($blogEntryId = null, $comparison = null)
	{
		if (is_array($blogEntryId)) {
			$useMinMax = false;
			if (isset($blogEntryId['min'])) {
				$this->addUsingAlias(BlogEntryCommentsPeer::BLOG_ENTRY_ID, $blogEntryId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blogEntryId['max'])) {
				$this->addUsingAlias(BlogEntryCommentsPeer::BLOG_ENTRY_ID, $blogEntryId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogEntryCommentsPeer::BLOG_ENTRY_ID, $blogEntryId, $comparison);
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
	 * @return    BlogEntryCommentsQuery The current query, for fluid interface
	 */
	public function filterByVolunteerId($volunteerId = null, $comparison = null)
	{
		if (is_array($volunteerId)) {
			$useMinMax = false;
			if (isset($volunteerId['min'])) {
				$this->addUsingAlias(BlogEntryCommentsPeer::VOLUNTEER_ID, $volunteerId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($volunteerId['max'])) {
				$this->addUsingAlias(BlogEntryCommentsPeer::VOLUNTEER_ID, $volunteerId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogEntryCommentsPeer::VOLUNTEER_ID, $volunteerId, $comparison);
	}

	/**
	 * Filter the query by a related BlogEntry object
	 *
	 * @param     BlogEntry|PropelCollection $blogEntry The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogEntryCommentsQuery The current query, for fluid interface
	 */
	public function filterByBlogEntry($blogEntry, $comparison = null)
	{
		if ($blogEntry instanceof BlogEntry) {
			return $this
				->addUsingAlias(BlogEntryCommentsPeer::BLOG_ENTRY_ID, $blogEntry->getId(), $comparison);
		} elseif ($blogEntry instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(BlogEntryCommentsPeer::BLOG_ENTRY_ID, $blogEntry->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByBlogEntry() only accepts arguments of type BlogEntry or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the BlogEntry relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BlogEntryCommentsQuery The current query, for fluid interface
	 */
	public function joinBlogEntry($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('BlogEntry');
		
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
			$this->addJoinObject($join, 'BlogEntry');
		}
		
		return $this;
	}

	/**
	 * Use the BlogEntry relation BlogEntry object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BlogEntryQuery A secondary query class using the current class as primary query
	 */
	public function useBlogEntryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinBlogEntry($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'BlogEntry', 'BlogEntryQuery');
	}

	/**
	 * Filter the query by a related Volunteer object
	 *
	 * @param     Volunteer|PropelCollection $volunteer The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogEntryCommentsQuery The current query, for fluid interface
	 */
	public function filterByVolunteer($volunteer, $comparison = null)
	{
		if ($volunteer instanceof Volunteer) {
			return $this
				->addUsingAlias(BlogEntryCommentsPeer::VOLUNTEER_ID, $volunteer->getId(), $comparison);
		} elseif ($volunteer instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(BlogEntryCommentsPeer::VOLUNTEER_ID, $volunteer->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    BlogEntryCommentsQuery The current query, for fluid interface
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
	 * @param     BlogEntryComments $blogEntryComments Object to remove from the list of results
	 *
	 * @return    BlogEntryCommentsQuery The current query, for fluid interface
	 */
	public function prune($blogEntryComments = null)
	{
		if ($blogEntryComments) {
			$this->addUsingAlias(BlogEntryCommentsPeer::ID, $blogEntryComments->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBlogEntryCommentsQuery
