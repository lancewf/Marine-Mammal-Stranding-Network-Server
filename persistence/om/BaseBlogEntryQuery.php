<?php


/**
 * Base class that represents a query for the 'blog_entry' table.
 *
 * attachments to a report
 *
 * @method     BlogEntryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     BlogEntryQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     BlogEntryQuery orderByMessage($order = Criteria::ASC) Order by the message column
 * @method     BlogEntryQuery orderByDate($order = Criteria::ASC) Order by the date column
 *
 * @method     BlogEntryQuery groupById() Group by the id column
 * @method     BlogEntryQuery groupByTitle() Group by the title column
 * @method     BlogEntryQuery groupByMessage() Group by the message column
 * @method     BlogEntryQuery groupByDate() Group by the date column
 *
 * @method     BlogEntryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BlogEntryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BlogEntryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BlogEntryQuery leftJoinBlogEntryComments($relationAlias = '') Adds a LEFT JOIN clause to the query using the BlogEntryComments relation
 * @method     BlogEntryQuery rightJoinBlogEntryComments($relationAlias = '') Adds a RIGHT JOIN clause to the query using the BlogEntryComments relation
 * @method     BlogEntryQuery innerJoinBlogEntryComments($relationAlias = '') Adds a INNER JOIN clause to the query using the BlogEntryComments relation
 *
 * @method     BlogEntry findOne(PropelPDO $con = null) Return the first BlogEntry matching the query
 * @method     BlogEntry findOneOrCreate(PropelPDO $con = null) Return the first BlogEntry matching the query, or a new BlogEntry object populated from the query conditions when no match is found
 *
 * @method     BlogEntry findOneById(int $id) Return the first BlogEntry filtered by the id column
 * @method     BlogEntry findOneByTitle(string $title) Return the first BlogEntry filtered by the title column
 * @method     BlogEntry findOneByMessage(string $message) Return the first BlogEntry filtered by the message column
 * @method     BlogEntry findOneByDate(string $date) Return the first BlogEntry filtered by the date column
 *
 * @method     array findById(int $id) Return BlogEntry objects filtered by the id column
 * @method     array findByTitle(string $title) Return BlogEntry objects filtered by the title column
 * @method     array findByMessage(string $message) Return BlogEntry objects filtered by the message column
 * @method     array findByDate(string $date) Return BlogEntry objects filtered by the date column
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseBlogEntryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBlogEntryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'persistence', $modelName = 'BlogEntry', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BlogEntryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BlogEntryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BlogEntryQuery) {
			return $criteria;
		}
		$query = new BlogEntryQuery();
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
	 * @return    BlogEntry|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BlogEntryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BlogEntryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BlogEntryPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BlogEntryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BlogEntryPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogEntryQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BlogEntryPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogEntryQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogEntryPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the message column
	 * 
	 * @param     string $message The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogEntryQuery The current query, for fluid interface
	 */
	public function filterByMessage($message = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($message)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $message)) {
				$message = str_replace('*', '%', $message);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogEntryPeer::MESSAGE, $message, $comparison);
	}

	/**
	 * Filter the query on the date column
	 * 
	 * @param     string|array $date The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogEntryQuery The current query, for fluid interface
	 */
	public function filterByDate($date = null, $comparison = null)
	{
		if (is_array($date)) {
			$useMinMax = false;
			if (isset($date['min'])) {
				$this->addUsingAlias(BlogEntryPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($date['max'])) {
				$this->addUsingAlias(BlogEntryPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogEntryPeer::DATE, $date, $comparison);
	}

	/**
	 * Filter the query by a related BlogEntryComments object
	 *
	 * @param     BlogEntryComments $blogEntryComments  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogEntryQuery The current query, for fluid interface
	 */
	public function filterByBlogEntryComments($blogEntryComments, $comparison = null)
	{
		return $this
			->addUsingAlias(BlogEntryPeer::ID, $blogEntryComments->getBlogEntryId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the BlogEntryComments relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BlogEntryQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     BlogEntry $blogEntry Object to remove from the list of results
	 *
	 * @return    BlogEntryQuery The current query, for fluid interface
	 */
	public function prune($blogEntry = null)
	{
		if ($blogEntry) {
			$this->addUsingAlias(BlogEntryPeer::ID, $blogEntry->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBlogEntryQuery
