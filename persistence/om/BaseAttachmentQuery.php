<?php


/**
 * Base class that represents a query for the 'attachment' table.
 *
 * attachments to a report
 *
 * @method AttachmentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method AttachmentQuery orderByFileName($order = Criteria::ASC) Order by the file_name column
 * @method AttachmentQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method AttachmentQuery orderByReportId($order = Criteria::ASC) Order by the report_id column
 *
 * @method AttachmentQuery groupById() Group by the id column
 * @method AttachmentQuery groupByFileName() Group by the file_name column
 * @method AttachmentQuery groupByComments() Group by the comments column
 * @method AttachmentQuery groupByReportId() Group by the report_id column
 *
 * @method AttachmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AttachmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AttachmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AttachmentQuery leftJoinReport($relationAlias = null) Adds a LEFT JOIN clause to the query using the Report relation
 * @method AttachmentQuery rightJoinReport($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Report relation
 * @method AttachmentQuery innerJoinReport($relationAlias = null) Adds a INNER JOIN clause to the query using the Report relation
 *
 * @method Attachment findOne(PropelPDO $con = null) Return the first Attachment matching the query
 * @method Attachment findOneOrCreate(PropelPDO $con = null) Return the first Attachment matching the query, or a new Attachment object populated from the query conditions when no match is found
 *
 * @method Attachment findOneByFileName(string $file_name) Return the first Attachment filtered by the file_name column
 * @method Attachment findOneByComments(string $comments) Return the first Attachment filtered by the comments column
 * @method Attachment findOneByReportId(int $report_id) Return the first Attachment filtered by the report_id column
 *
 * @method array findById(int $id) Return Attachment objects filtered by the id column
 * @method array findByFileName(string $file_name) Return Attachment objects filtered by the file_name column
 * @method array findByComments(string $comments) Return Attachment objects filtered by the comments column
 * @method array findByReportId(int $report_id) Return Attachment objects filtered by the report_id column
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
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'persistence';
        }
        if (null === $modelName) {
            $modelName = 'Attachment';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AttachmentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AttachmentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AttachmentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AttachmentQuery) {
            return $criteria;
        }
        $query = new AttachmentQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Attachment|Attachment[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AttachmentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AttachmentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Attachment A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Attachment A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `file_name`, `comments`, `report_id` FROM `attachment` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Attachment();
            $obj->hydrate($row);
            AttachmentPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Attachment|Attachment[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Attachment[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return AttachmentQuery The current query, for fluid interface
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
     * @return AttachmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AttachmentPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AttachmentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(AttachmentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(AttachmentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttachmentPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the file_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFileName('fooValue');   // WHERE file_name = 'fooValue'
     * $query->filterByFileName('%fooValue%'); // WHERE file_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fileName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AttachmentQuery The current query, for fluid interface
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
     * @return AttachmentQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByReportId(1234); // WHERE report_id = 1234
     * $query->filterByReportId(array(12, 34)); // WHERE report_id IN (12, 34)
     * $query->filterByReportId(array('min' => 12)); // WHERE report_id >= 12
     * $query->filterByReportId(array('max' => 12)); // WHERE report_id <= 12
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
     * @return AttachmentQuery The current query, for fluid interface
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
     * @param   Report|PropelObjectCollection $report The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AttachmentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByReport($report, $comparison = null)
    {
        if ($report instanceof Report) {
            return $this
                ->addUsingAlias(AttachmentPeer::REPORT_ID, $report->getId(), $comparison);
        } elseif ($report instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AttachmentPeer::REPORT_ID, $report->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return AttachmentQuery The current query, for fluid interface
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
        if ($relationAlias) {
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
     * @return   ReportQuery A secondary query class using the current class as primary query
     */
    public function useReportQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinReport($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Report', 'ReportQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Attachment $attachment Object to remove from the list of results
     *
     * @return AttachmentQuery The current query, for fluid interface
     */
    public function prune($attachment = null)
    {
        if ($attachment) {
            $this->addUsingAlias(AttachmentPeer::ID, $attachment->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
