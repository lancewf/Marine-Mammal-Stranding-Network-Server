<?php


/**
 * Base class that represents a query for the 'attachment' table.
 *
 * attachments to a report
 *
 * @method     AttachmentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AttachmentQuery orderByFileName($order = Criteria::ASC) Order by the file_name column
 * @method     AttachmentQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method     AttachmentQuery orderByReportId($order = Criteria::ASC) Order by the report_id column
 *
 * @method     AttachmentQuery groupById() Group by the id column
 * @method     AttachmentQuery groupByFileName() Group by the file_name column
 * @method     AttachmentQuery groupByComments() Group by the comments column
 * @method     AttachmentQuery groupByReportId() Group by the report_id column
 *
 * @method     AttachmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AttachmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AttachmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AttachmentQuery leftJoinReport($relationAlias = '') Adds a LEFT JOIN clause to the query using the Report relation
 * @method     AttachmentQuery rightJoinReport($relationAlias = '') Adds a RIGHT JOIN clause to the query using the Report relation
 * @method     AttachmentQuery innerJoinReport($relationAlias = '') Adds a INNER JOIN clause to the query using the Report relation
 *
 * @method     Attachment findOne(PropelPDO $con = null) Return the first Attachment matching the query
 * @method     Attachment findOneOrCreate(PropelPDO $con = null) Return the first Attachment matching the query, or a new Attachment object populated from the query conditions when no match is found
 *
 * @method     Attachment findOneById(int $id) Return the first Attachment filtered by the id column
 * @method     Attachment findOneByFileName(string $file_name) Return the first Attachment filtered by the file_name column
 * @method     Attachment findOneByComments(string $comments) Return the first Attachment filtered by the comments column
 * @method     Attachment findOneByReportId(int $report_id) Return the first Attachment filtered by the report_id column
 *
 * @method     array findById(int $id) Return Attachment objects filtered by the id column
 * @method     array findByFileName(string $file_name) Return Attachment objects filtered by the file_name column
 * @method     array findByComments(string $comments) Return Attachment objects filtered by the comments column
 * @method     array findByReportId(int $report_id) Return Attachment objects filtered by the report_id column
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseAttachmentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAttachmentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'persistence', $modelName = 'Attachment', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AttachmentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AttachmentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AttachmentQuery) {
			return $criteria;
		}
		$query = new AttachmentQuery();
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
	 * @return    Attachment|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AttachmentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AttachmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AttachmentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AttachmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AttachmentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AttachmentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AttachmentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the file_name column
	 * 
	 * @param     string $fileName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AttachmentQuery The current query, for fluid interface
	 */
	public function filterByFileName($fileName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fileName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fileName)) {
				$fileName = str_replace('*', '%', $fileName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AttachmentPeer::FILE_NAME, $fileName, $comparison);
	}

	/**
	 * Filter the query on the comments column
	 * 
	 * @param     string $comments The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AttachmentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AttachmentPeer::COMMENTS, $comments, $comparison);
	}

	/**
	 * Filter the query on the report_id column
	 * 
	 * @param     int|array $reportId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AttachmentQuery The current query, for fluid interface
	 */
	public function filterByReportId($reportId = null, $comparison = null)
	{
		if (is_array($reportId)) {
			$useMinMax = false;
			if (isset($reportId['min'])) {
				$this->addUsingAlias(AttachmentPeer::REPORT_ID, $reportId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reportId['max'])) {
				$this->addUsingAlias(AttachmentPeer::REPORT_ID, $reportId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AttachmentPeer::REPORT_ID, $reportId, $comparison);
	}

	/**
	 * Filter the query by a related Report object
	 *
	 * @param     Report $report  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AttachmentQuery The current query, for fluid interface
	 */
	public function filterByReport($report, $comparison = null)
	{
		return $this
			->addUsingAlias(AttachmentPeer::REPORT_ID, $report->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Report relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AttachmentQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Attachment $attachment Object to remove from the list of results
	 *
	 * @return    AttachmentQuery The current query, for fluid interface
	 */
	public function prune($attachment = null)
	{
		if ($attachment) {
			$this->addUsingAlias(AttachmentPeer::ID, $attachment->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAttachmentQuery
