<?php


/**
 * Base class that represents a query for the 'volunteer_hours' table.
 *
 * a volunteer
 *
 * @method VolunteerHoursQuery orderById($order = Criteria::ASC) Order by the id column
 * @method VolunteerHoursQuery orderByTotalHours($order = Criteria::ASC) Order by the total_hours column
 * @method VolunteerHoursQuery orderByMileage($order = Criteria::ASC) Order by the mileage column
 * @method VolunteerHoursQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method VolunteerHoursQuery orderByDayOfMonth($order = Criteria::ASC) Order by the day_of_month column
 * @method VolunteerHoursQuery orderByMonth($order = Criteria::ASC) Order by the month column
 * @method VolunteerHoursQuery orderByYear($order = Criteria::ASC) Order by the year column
 * @method VolunteerHoursQuery orderByVolunteerId($order = Criteria::ASC) Order by the volunteer_id column
 *
 * @method VolunteerHoursQuery groupById() Group by the id column
 * @method VolunteerHoursQuery groupByTotalHours() Group by the total_hours column
 * @method VolunteerHoursQuery groupByMileage() Group by the mileage column
 * @method VolunteerHoursQuery groupByComments() Group by the comments column
 * @method VolunteerHoursQuery groupByDayOfMonth() Group by the day_of_month column
 * @method VolunteerHoursQuery groupByMonth() Group by the month column
 * @method VolunteerHoursQuery groupByYear() Group by the year column
 * @method VolunteerHoursQuery groupByVolunteerId() Group by the volunteer_id column
 *
 * @method VolunteerHoursQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VolunteerHoursQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VolunteerHoursQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VolunteerHoursQuery leftJoinVolunteer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Volunteer relation
 * @method VolunteerHoursQuery rightJoinVolunteer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Volunteer relation
 * @method VolunteerHoursQuery innerJoinVolunteer($relationAlias = null) Adds a INNER JOIN clause to the query using the Volunteer relation
 *
 * @method VolunteerHours findOne(PropelPDO $con = null) Return the first VolunteerHours matching the query
 * @method VolunteerHours findOneOrCreate(PropelPDO $con = null) Return the first VolunteerHours matching the query, or a new VolunteerHours object populated from the query conditions when no match is found
 *
 * @method VolunteerHours findOneByTotalHours(double $total_hours) Return the first VolunteerHours filtered by the total_hours column
 * @method VolunteerHours findOneByMileage(int $mileage) Return the first VolunteerHours filtered by the mileage column
 * @method VolunteerHours findOneByComments(string $comments) Return the first VolunteerHours filtered by the comments column
 * @method VolunteerHours findOneByDayOfMonth(int $day_of_month) Return the first VolunteerHours filtered by the day_of_month column
 * @method VolunteerHours findOneByMonth(int $month) Return the first VolunteerHours filtered by the month column
 * @method VolunteerHours findOneByYear(int $year) Return the first VolunteerHours filtered by the year column
 * @method VolunteerHours findOneByVolunteerId(int $volunteer_id) Return the first VolunteerHours filtered by the volunteer_id column
 *
 * @method array findById(int $id) Return VolunteerHours objects filtered by the id column
 * @method array findByTotalHours(double $total_hours) Return VolunteerHours objects filtered by the total_hours column
 * @method array findByMileage(int $mileage) Return VolunteerHours objects filtered by the mileage column
 * @method array findByComments(string $comments) Return VolunteerHours objects filtered by the comments column
 * @method array findByDayOfMonth(int $day_of_month) Return VolunteerHours objects filtered by the day_of_month column
 * @method array findByMonth(int $month) Return VolunteerHours objects filtered by the month column
 * @method array findByYear(int $year) Return VolunteerHours objects filtered by the year column
 * @method array findByVolunteerId(int $volunteer_id) Return VolunteerHours objects filtered by the volunteer_id column
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
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'persistence';
        }
        if (null === $modelName) {
            $modelName = 'VolunteerHours';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VolunteerHoursQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VolunteerHoursQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VolunteerHoursQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VolunteerHoursQuery) {
            return $criteria;
        }
        $query = new VolunteerHoursQuery(null, null, $modelAlias);

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
     * @return   VolunteerHours|VolunteerHours[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VolunteerHoursPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VolunteerHoursPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 VolunteerHours A model object, or null if the key is not found
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
     * @return                 VolunteerHours A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `total_hours`, `mileage`, `comments`, `day_of_month`, `month`, `year`, `volunteer_id` FROM `volunteer_hours` WHERE `id` = :p0';
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
            $obj = new VolunteerHours();
            $obj->hydrate($row);
            VolunteerHoursPeer::addInstanceToPool($obj, (string) $key);
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
     * @return VolunteerHours|VolunteerHours[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|VolunteerHours[]|mixed the list of results, formatted by the current formatter
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
     * @return VolunteerHoursQuery The current query, for fluid interface
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
     * @return VolunteerHoursQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VolunteerHoursPeer::ID, $keys, Criteria::IN);
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
     * @return VolunteerHoursQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(VolunteerHoursPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(VolunteerHoursPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VolunteerHoursPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the total_hours column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalHours(1234); // WHERE total_hours = 1234
     * $query->filterByTotalHours(array(12, 34)); // WHERE total_hours IN (12, 34)
     * $query->filterByTotalHours(array('min' => 12)); // WHERE total_hours >= 12
     * $query->filterByTotalHours(array('max' => 12)); // WHERE total_hours <= 12
     * </code>
     *
     * @param     mixed $totalHours The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerHoursQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByMileage(1234); // WHERE mileage = 1234
     * $query->filterByMileage(array(12, 34)); // WHERE mileage IN (12, 34)
     * $query->filterByMileage(array('min' => 12)); // WHERE mileage >= 12
     * $query->filterByMileage(array('max' => 12)); // WHERE mileage <= 12
     * </code>
     *
     * @param     mixed $mileage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerHoursQuery The current query, for fluid interface
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
     * @return VolunteerHoursQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByDayOfMonth(1234); // WHERE day_of_month = 1234
     * $query->filterByDayOfMonth(array(12, 34)); // WHERE day_of_month IN (12, 34)
     * $query->filterByDayOfMonth(array('min' => 12)); // WHERE day_of_month >= 12
     * $query->filterByDayOfMonth(array('max' => 12)); // WHERE day_of_month <= 12
     * </code>
     *
     * @param     mixed $dayOfMonth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerHoursQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByMonth(1234); // WHERE month = 1234
     * $query->filterByMonth(array(12, 34)); // WHERE month IN (12, 34)
     * $query->filterByMonth(array('min' => 12)); // WHERE month >= 12
     * $query->filterByMonth(array('max' => 12)); // WHERE month <= 12
     * </code>
     *
     * @param     mixed $month The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerHoursQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByYear(1234); // WHERE year = 1234
     * $query->filterByYear(array(12, 34)); // WHERE year IN (12, 34)
     * $query->filterByYear(array('min' => 12)); // WHERE year >= 12
     * $query->filterByYear(array('max' => 12)); // WHERE year <= 12
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerHoursQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByVolunteerId(1234); // WHERE volunteer_id = 1234
     * $query->filterByVolunteerId(array(12, 34)); // WHERE volunteer_id IN (12, 34)
     * $query->filterByVolunteerId(array('min' => 12)); // WHERE volunteer_id >= 12
     * $query->filterByVolunteerId(array('max' => 12)); // WHERE volunteer_id <= 12
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
     * @return VolunteerHoursQuery The current query, for fluid interface
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
     * @param   Volunteer|PropelObjectCollection $volunteer The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VolunteerHoursQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVolunteer($volunteer, $comparison = null)
    {
        if ($volunteer instanceof Volunteer) {
            return $this
                ->addUsingAlias(VolunteerHoursPeer::VOLUNTEER_ID, $volunteer->getId(), $comparison);
        } elseif ($volunteer instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VolunteerHoursPeer::VOLUNTEER_ID, $volunteer->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return VolunteerHoursQuery The current query, for fluid interface
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
        if ($relationAlias) {
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
     * @return   VolunteerQuery A secondary query class using the current class as primary query
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
     * @param   VolunteerHours $volunteerHours Object to remove from the list of results
     *
     * @return VolunteerHoursQuery The current query, for fluid interface
     */
    public function prune($volunteerHours = null)
    {
        if ($volunteerHours) {
            $this->addUsingAlias(VolunteerHoursPeer::ID, $volunteerHours->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
