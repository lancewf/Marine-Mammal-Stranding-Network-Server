<?php


/**
 * Base class that represents a query for the 'report_human_interaction_section' table.
 *
 * examined human interactions on the animal
 *
 * @method ReportHumanInteractionSectionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ReportHumanInteractionSectionQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method ReportHumanInteractionSectionQuery orderByIsExamined($order = Criteria::ASC) Order by the is_examined column
 * @method ReportHumanInteractionSectionQuery orderByPossibleHiLesion($order = Criteria::ASC) Order by the possible_hi_lesion column
 * @method ReportHumanInteractionSectionQuery orderByPossibleSource($order = Criteria::ASC) Order by the possible_source column
 * @method ReportHumanInteractionSectionQuery orderByScavengerDamage($order = Criteria::ASC) Order by the scavenger_damage column
 * @method ReportHumanInteractionSectionQuery orderByReportId($order = Criteria::ASC) Order by the report_id column
 *
 * @method ReportHumanInteractionSectionQuery groupById() Group by the id column
 * @method ReportHumanInteractionSectionQuery groupByName() Group by the name column
 * @method ReportHumanInteractionSectionQuery groupByIsExamined() Group by the is_examined column
 * @method ReportHumanInteractionSectionQuery groupByPossibleHiLesion() Group by the possible_hi_lesion column
 * @method ReportHumanInteractionSectionQuery groupByPossibleSource() Group by the possible_source column
 * @method ReportHumanInteractionSectionQuery groupByScavengerDamage() Group by the scavenger_damage column
 * @method ReportHumanInteractionSectionQuery groupByReportId() Group by the report_id column
 *
 * @method ReportHumanInteractionSectionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ReportHumanInteractionSectionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ReportHumanInteractionSectionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ReportHumanInteractionSectionQuery leftJoinReport($relationAlias = null) Adds a LEFT JOIN clause to the query using the Report relation
 * @method ReportHumanInteractionSectionQuery rightJoinReport($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Report relation
 * @method ReportHumanInteractionSectionQuery innerJoinReport($relationAlias = null) Adds a INNER JOIN clause to the query using the Report relation
 *
 * @method ReportHumanInteractionSection findOne(PropelPDO $con = null) Return the first ReportHumanInteractionSection matching the query
 * @method ReportHumanInteractionSection findOneOrCreate(PropelPDO $con = null) Return the first ReportHumanInteractionSection matching the query, or a new ReportHumanInteractionSection object populated from the query conditions when no match is found
 *
 * @method ReportHumanInteractionSection findOneByName(string $name) Return the first ReportHumanInteractionSection filtered by the name column
 * @method ReportHumanInteractionSection findOneByIsExamined(boolean $is_examined) Return the first ReportHumanInteractionSection filtered by the is_examined column
 * @method ReportHumanInteractionSection findOneByPossibleHiLesion(string $possible_hi_lesion) Return the first ReportHumanInteractionSection filtered by the possible_hi_lesion column
 * @method ReportHumanInteractionSection findOneByPossibleSource(string $possible_source) Return the first ReportHumanInteractionSection filtered by the possible_source column
 * @method ReportHumanInteractionSection findOneByScavengerDamage(string $scavenger_damage) Return the first ReportHumanInteractionSection filtered by the scavenger_damage column
 * @method ReportHumanInteractionSection findOneByReportId(int $report_id) Return the first ReportHumanInteractionSection filtered by the report_id column
 *
 * @method array findById(int $id) Return ReportHumanInteractionSection objects filtered by the id column
 * @method array findByName(string $name) Return ReportHumanInteractionSection objects filtered by the name column
 * @method array findByIsExamined(boolean $is_examined) Return ReportHumanInteractionSection objects filtered by the is_examined column
 * @method array findByPossibleHiLesion(string $possible_hi_lesion) Return ReportHumanInteractionSection objects filtered by the possible_hi_lesion column
 * @method array findByPossibleSource(string $possible_source) Return ReportHumanInteractionSection objects filtered by the possible_source column
 * @method array findByScavengerDamage(string $scavenger_damage) Return ReportHumanInteractionSection objects filtered by the scavenger_damage column
 * @method array findByReportId(int $report_id) Return ReportHumanInteractionSection objects filtered by the report_id column
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseReportHumanInteractionSectionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseReportHumanInteractionSectionQuery object.
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
            $modelName = 'ReportHumanInteractionSection';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ReportHumanInteractionSectionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ReportHumanInteractionSectionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ReportHumanInteractionSectionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ReportHumanInteractionSectionQuery) {
            return $criteria;
        }
        $query = new ReportHumanInteractionSectionQuery(null, null, $modelAlias);

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
     * @return   ReportHumanInteractionSection|ReportHumanInteractionSection[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ReportHumanInteractionSectionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ReportHumanInteractionSectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ReportHumanInteractionSection A model object, or null if the key is not found
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
     * @return                 ReportHumanInteractionSection A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `is_examined`, `possible_hi_lesion`, `possible_source`, `scavenger_damage`, `report_id` FROM `report_human_interaction_section` WHERE `id` = :p0';
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
            $obj = new ReportHumanInteractionSection();
            $obj->hydrate($row);
            ReportHumanInteractionSectionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ReportHumanInteractionSection|ReportHumanInteractionSection[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ReportHumanInteractionSection[]|mixed the list of results, formatted by the current formatter
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
     * @return ReportHumanInteractionSectionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ReportHumanInteractionSectionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ReportHumanInteractionSectionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ReportHumanInteractionSectionPeer::ID, $keys, Criteria::IN);
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
     * @return ReportHumanInteractionSectionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ReportHumanInteractionSectionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ReportHumanInteractionSectionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReportHumanInteractionSectionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportHumanInteractionSectionQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportHumanInteractionSectionPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the is_examined column
     *
     * Example usage:
     * <code>
     * $query->filterByIsExamined(true); // WHERE is_examined = true
     * $query->filterByIsExamined('yes'); // WHERE is_examined = true
     * </code>
     *
     * @param     boolean|string $isExamined The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportHumanInteractionSectionQuery The current query, for fluid interface
     */
    public function filterByIsExamined($isExamined = null, $comparison = null)
    {
        if (is_string($isExamined)) {
            $isExamined = in_array(strtolower($isExamined), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ReportHumanInteractionSectionPeer::IS_EXAMINED, $isExamined, $comparison);
    }

    /**
     * Filter the query on the possible_hi_lesion column
     *
     * Example usage:
     * <code>
     * $query->filterByPossibleHiLesion('fooValue');   // WHERE possible_hi_lesion = 'fooValue'
     * $query->filterByPossibleHiLesion('%fooValue%'); // WHERE possible_hi_lesion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $possibleHiLesion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportHumanInteractionSectionQuery The current query, for fluid interface
     */
    public function filterByPossibleHiLesion($possibleHiLesion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($possibleHiLesion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $possibleHiLesion)) {
                $possibleHiLesion = str_replace('*', '%', $possibleHiLesion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportHumanInteractionSectionPeer::POSSIBLE_HI_LESION, $possibleHiLesion, $comparison);
    }

    /**
     * Filter the query on the possible_source column
     *
     * Example usage:
     * <code>
     * $query->filterByPossibleSource('fooValue');   // WHERE possible_source = 'fooValue'
     * $query->filterByPossibleSource('%fooValue%'); // WHERE possible_source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $possibleSource The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportHumanInteractionSectionQuery The current query, for fluid interface
     */
    public function filterByPossibleSource($possibleSource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($possibleSource)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $possibleSource)) {
                $possibleSource = str_replace('*', '%', $possibleSource);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportHumanInteractionSectionPeer::POSSIBLE_SOURCE, $possibleSource, $comparison);
    }

    /**
     * Filter the query on the scavenger_damage column
     *
     * Example usage:
     * <code>
     * $query->filterByScavengerDamage('fooValue');   // WHERE scavenger_damage = 'fooValue'
     * $query->filterByScavengerDamage('%fooValue%'); // WHERE scavenger_damage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scavengerDamage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReportHumanInteractionSectionQuery The current query, for fluid interface
     */
    public function filterByScavengerDamage($scavengerDamage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scavengerDamage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $scavengerDamage)) {
                $scavengerDamage = str_replace('*', '%', $scavengerDamage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReportHumanInteractionSectionPeer::SCAVENGER_DAMAGE, $scavengerDamage, $comparison);
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
     * @return ReportHumanInteractionSectionQuery The current query, for fluid interface
     */
    public function filterByReportId($reportId = null, $comparison = null)
    {
        if (is_array($reportId)) {
            $useMinMax = false;
            if (isset($reportId['min'])) {
                $this->addUsingAlias(ReportHumanInteractionSectionPeer::REPORT_ID, $reportId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reportId['max'])) {
                $this->addUsingAlias(ReportHumanInteractionSectionPeer::REPORT_ID, $reportId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReportHumanInteractionSectionPeer::REPORT_ID, $reportId, $comparison);
    }

    /**
     * Filter the query by a related Report object
     *
     * @param   Report|PropelObjectCollection $report The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ReportHumanInteractionSectionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByReport($report, $comparison = null)
    {
        if ($report instanceof Report) {
            return $this
                ->addUsingAlias(ReportHumanInteractionSectionPeer::REPORT_ID, $report->getId(), $comparison);
        } elseif ($report instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ReportHumanInteractionSectionPeer::REPORT_ID, $report->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return ReportHumanInteractionSectionQuery The current query, for fluid interface
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
     * @param   ReportHumanInteractionSection $reportHumanInteractionSection Object to remove from the list of results
     *
     * @return ReportHumanInteractionSectionQuery The current query, for fluid interface
     */
    public function prune($reportHumanInteractionSection = null)
    {
        if ($reportHumanInteractionSection) {
            $this->addUsingAlias(ReportHumanInteractionSectionPeer::ID, $reportHumanInteractionSection->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
