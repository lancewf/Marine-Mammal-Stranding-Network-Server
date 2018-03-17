<?php


/**
 * Base class that represents a query for the 'volunteer' table.
 *
 * a volunteer
 *
 * @method VolunteerQuery orderById($order = Criteria::ASC) Order by the id column
 * @method VolunteerQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method VolunteerQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method VolunteerQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method VolunteerQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method VolunteerQuery orderByZip($order = Criteria::ASC) Order by the zip column
 * @method VolunteerQuery orderByStreetaddress($order = Criteria::ASC) Order by the streetAddress column
 * @method VolunteerQuery orderByVehicle($order = Criteria::ASC) Order by the vehicle column
 * @method VolunteerQuery orderByIsland($order = Criteria::ASC) Order by the island column
 * @method VolunteerQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method VolunteerQuery orderByTraining($order = Criteria::ASC) Order by the training column
 * @method VolunteerQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method VolunteerQuery orderByPhonenumber($order = Criteria::ASC) Order by the phoneNumber column
 * @method VolunteerQuery orderBySundayFromHour($order = Criteria::ASC) Order by the sunday_from_hour column
 * @method VolunteerQuery orderByMondayFromHour($order = Criteria::ASC) Order by the monday_from_hour column
 * @method VolunteerQuery orderByTuesdayFromHour($order = Criteria::ASC) Order by the tuesday_from_hour column
 * @method VolunteerQuery orderByWednesdayFromHour($order = Criteria::ASC) Order by the wednesday_from_hour column
 * @method VolunteerQuery orderByThursdayFromHour($order = Criteria::ASC) Order by the thursday_from_hour column
 * @method VolunteerQuery orderByFridayFromHour($order = Criteria::ASC) Order by the friday_from_hour column
 * @method VolunteerQuery orderBySaturdayFromHour($order = Criteria::ASC) Order by the saturday_from_hour column
 * @method VolunteerQuery orderBySundayToHour($order = Criteria::ASC) Order by the sunday_to_hour column
 * @method VolunteerQuery orderByMondayToHour($order = Criteria::ASC) Order by the monday_to_hour column
 * @method VolunteerQuery orderByTuesdayToHour($order = Criteria::ASC) Order by the tuesday_to_hour column
 * @method VolunteerQuery orderByWednesdayToHour($order = Criteria::ASC) Order by the wednesday_to_hour column
 * @method VolunteerQuery orderByThursdayToHour($order = Criteria::ASC) Order by the thursday_to_hour column
 * @method VolunteerQuery orderByFridayToHour($order = Criteria::ASC) Order by the friday_to_hour column
 * @method VolunteerQuery orderBySaturdayToHour($order = Criteria::ASC) Order by the saturday_to_hour column
 * @method VolunteerQuery orderBySundayAnyTime($order = Criteria::ASC) Order by the sunday_any_time column
 * @method VolunteerQuery orderByMondayAnyTime($order = Criteria::ASC) Order by the monday_any_time column
 * @method VolunteerQuery orderByTuesdayAnyTime($order = Criteria::ASC) Order by the tuesday_any_time column
 * @method VolunteerQuery orderByWednesdayAnyTime($order = Criteria::ASC) Order by the wednesday_any_time column
 * @method VolunteerQuery orderByThursdayAnyTime($order = Criteria::ASC) Order by the thursday_any_time column
 * @method VolunteerQuery orderByFridayAnyTime($order = Criteria::ASC) Order by the friday_any_time column
 * @method VolunteerQuery orderBySaturdayAnyTime($order = Criteria::ASC) Order by the saturday_any_time column
 * @method VolunteerQuery orderBySundayNoTime($order = Criteria::ASC) Order by the sunday_no_time column
 * @method VolunteerQuery orderByMondayNoTime($order = Criteria::ASC) Order by the monday_no_time column
 * @method VolunteerQuery orderByTuesdayNoTime($order = Criteria::ASC) Order by the tuesday_no_time column
 * @method VolunteerQuery orderByWednesdayNoTime($order = Criteria::ASC) Order by the wednesday_no_time column
 * @method VolunteerQuery orderByThursdayNoTime($order = Criteria::ASC) Order by the thursday_no_time column
 * @method VolunteerQuery orderByFridayNoTime($order = Criteria::ASC) Order by the friday_no_time column
 * @method VolunteerQuery orderBySaturdayNoTime($order = Criteria::ASC) Order by the saturday_no_time column
 *
 * @method VolunteerQuery groupById() Group by the id column
 * @method VolunteerQuery groupByFirstName() Group by the first_name column
 * @method VolunteerQuery groupByLastName() Group by the last_name column
 * @method VolunteerQuery groupByCity() Group by the city column
 * @method VolunteerQuery groupByState() Group by the state column
 * @method VolunteerQuery groupByZip() Group by the zip column
 * @method VolunteerQuery groupByStreetaddress() Group by the streetAddress column
 * @method VolunteerQuery groupByVehicle() Group by the vehicle column
 * @method VolunteerQuery groupByIsland() Group by the island column
 * @method VolunteerQuery groupByEmail() Group by the email column
 * @method VolunteerQuery groupByTraining() Group by the training column
 * @method VolunteerQuery groupByComments() Group by the comments column
 * @method VolunteerQuery groupByPhonenumber() Group by the phoneNumber column
 * @method VolunteerQuery groupBySundayFromHour() Group by the sunday_from_hour column
 * @method VolunteerQuery groupByMondayFromHour() Group by the monday_from_hour column
 * @method VolunteerQuery groupByTuesdayFromHour() Group by the tuesday_from_hour column
 * @method VolunteerQuery groupByWednesdayFromHour() Group by the wednesday_from_hour column
 * @method VolunteerQuery groupByThursdayFromHour() Group by the thursday_from_hour column
 * @method VolunteerQuery groupByFridayFromHour() Group by the friday_from_hour column
 * @method VolunteerQuery groupBySaturdayFromHour() Group by the saturday_from_hour column
 * @method VolunteerQuery groupBySundayToHour() Group by the sunday_to_hour column
 * @method VolunteerQuery groupByMondayToHour() Group by the monday_to_hour column
 * @method VolunteerQuery groupByTuesdayToHour() Group by the tuesday_to_hour column
 * @method VolunteerQuery groupByWednesdayToHour() Group by the wednesday_to_hour column
 * @method VolunteerQuery groupByThursdayToHour() Group by the thursday_to_hour column
 * @method VolunteerQuery groupByFridayToHour() Group by the friday_to_hour column
 * @method VolunteerQuery groupBySaturdayToHour() Group by the saturday_to_hour column
 * @method VolunteerQuery groupBySundayAnyTime() Group by the sunday_any_time column
 * @method VolunteerQuery groupByMondayAnyTime() Group by the monday_any_time column
 * @method VolunteerQuery groupByTuesdayAnyTime() Group by the tuesday_any_time column
 * @method VolunteerQuery groupByWednesdayAnyTime() Group by the wednesday_any_time column
 * @method VolunteerQuery groupByThursdayAnyTime() Group by the thursday_any_time column
 * @method VolunteerQuery groupByFridayAnyTime() Group by the friday_any_time column
 * @method VolunteerQuery groupBySaturdayAnyTime() Group by the saturday_any_time column
 * @method VolunteerQuery groupBySundayNoTime() Group by the sunday_no_time column
 * @method VolunteerQuery groupByMondayNoTime() Group by the monday_no_time column
 * @method VolunteerQuery groupByTuesdayNoTime() Group by the tuesday_no_time column
 * @method VolunteerQuery groupByWednesdayNoTime() Group by the wednesday_no_time column
 * @method VolunteerQuery groupByThursdayNoTime() Group by the thursday_no_time column
 * @method VolunteerQuery groupByFridayNoTime() Group by the friday_no_time column
 * @method VolunteerQuery groupBySaturdayNoTime() Group by the saturday_no_time column
 *
 * @method VolunteerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VolunteerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VolunteerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VolunteerQuery leftJoinReport($relationAlias = null) Adds a LEFT JOIN clause to the query using the Report relation
 * @method VolunteerQuery rightJoinReport($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Report relation
 * @method VolunteerQuery innerJoinReport($relationAlias = null) Adds a INNER JOIN clause to the query using the Report relation
 *
 * @method VolunteerQuery leftJoinReportComments($relationAlias = null) Adds a LEFT JOIN clause to the query using the ReportComments relation
 * @method VolunteerQuery rightJoinReportComments($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ReportComments relation
 * @method VolunteerQuery innerJoinReportComments($relationAlias = null) Adds a INNER JOIN clause to the query using the ReportComments relation
 *
 * @method VolunteerQuery leftJoinBlogEntryComments($relationAlias = null) Adds a LEFT JOIN clause to the query using the BlogEntryComments relation
 * @method VolunteerQuery rightJoinBlogEntryComments($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BlogEntryComments relation
 * @method VolunteerQuery innerJoinBlogEntryComments($relationAlias = null) Adds a INNER JOIN clause to the query using the BlogEntryComments relation
 *
 * @method VolunteerQuery leftJoinVolunteerHours($relationAlias = null) Adds a LEFT JOIN clause to the query using the VolunteerHours relation
 * @method VolunteerQuery rightJoinVolunteerHours($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VolunteerHours relation
 * @method VolunteerQuery innerJoinVolunteerHours($relationAlias = null) Adds a INNER JOIN clause to the query using the VolunteerHours relation
 *
 * @method Volunteer findOne(PropelPDO $con = null) Return the first Volunteer matching the query
 * @method Volunteer findOneOrCreate(PropelPDO $con = null) Return the first Volunteer matching the query, or a new Volunteer object populated from the query conditions when no match is found
 *
 * @method Volunteer findOneByFirstName(string $first_name) Return the first Volunteer filtered by the first_name column
 * @method Volunteer findOneByLastName(string $last_name) Return the first Volunteer filtered by the last_name column
 * @method Volunteer findOneByCity(string $city) Return the first Volunteer filtered by the city column
 * @method Volunteer findOneByState(string $state) Return the first Volunteer filtered by the state column
 * @method Volunteer findOneByZip(string $zip) Return the first Volunteer filtered by the zip column
 * @method Volunteer findOneByStreetaddress(string $streetAddress) Return the first Volunteer filtered by the streetAddress column
 * @method Volunteer findOneByVehicle(string $vehicle) Return the first Volunteer filtered by the vehicle column
 * @method Volunteer findOneByIsland(string $island) Return the first Volunteer filtered by the island column
 * @method Volunteer findOneByEmail(string $email) Return the first Volunteer filtered by the email column
 * @method Volunteer findOneByTraining(string $training) Return the first Volunteer filtered by the training column
 * @method Volunteer findOneByComments(string $comments) Return the first Volunteer filtered by the comments column
 * @method Volunteer findOneByPhonenumber(string $phoneNumber) Return the first Volunteer filtered by the phoneNumber column
 * @method Volunteer findOneBySundayFromHour(int $sunday_from_hour) Return the first Volunteer filtered by the sunday_from_hour column
 * @method Volunteer findOneByMondayFromHour(int $monday_from_hour) Return the first Volunteer filtered by the monday_from_hour column
 * @method Volunteer findOneByTuesdayFromHour(int $tuesday_from_hour) Return the first Volunteer filtered by the tuesday_from_hour column
 * @method Volunteer findOneByWednesdayFromHour(int $wednesday_from_hour) Return the first Volunteer filtered by the wednesday_from_hour column
 * @method Volunteer findOneByThursdayFromHour(int $thursday_from_hour) Return the first Volunteer filtered by the thursday_from_hour column
 * @method Volunteer findOneByFridayFromHour(int $friday_from_hour) Return the first Volunteer filtered by the friday_from_hour column
 * @method Volunteer findOneBySaturdayFromHour(int $saturday_from_hour) Return the first Volunteer filtered by the saturday_from_hour column
 * @method Volunteer findOneBySundayToHour(int $sunday_to_hour) Return the first Volunteer filtered by the sunday_to_hour column
 * @method Volunteer findOneByMondayToHour(int $monday_to_hour) Return the first Volunteer filtered by the monday_to_hour column
 * @method Volunteer findOneByTuesdayToHour(int $tuesday_to_hour) Return the first Volunteer filtered by the tuesday_to_hour column
 * @method Volunteer findOneByWednesdayToHour(int $wednesday_to_hour) Return the first Volunteer filtered by the wednesday_to_hour column
 * @method Volunteer findOneByThursdayToHour(int $thursday_to_hour) Return the first Volunteer filtered by the thursday_to_hour column
 * @method Volunteer findOneByFridayToHour(int $friday_to_hour) Return the first Volunteer filtered by the friday_to_hour column
 * @method Volunteer findOneBySaturdayToHour(int $saturday_to_hour) Return the first Volunteer filtered by the saturday_to_hour column
 * @method Volunteer findOneBySundayAnyTime(boolean $sunday_any_time) Return the first Volunteer filtered by the sunday_any_time column
 * @method Volunteer findOneByMondayAnyTime(boolean $monday_any_time) Return the first Volunteer filtered by the monday_any_time column
 * @method Volunteer findOneByTuesdayAnyTime(boolean $tuesday_any_time) Return the first Volunteer filtered by the tuesday_any_time column
 * @method Volunteer findOneByWednesdayAnyTime(boolean $wednesday_any_time) Return the first Volunteer filtered by the wednesday_any_time column
 * @method Volunteer findOneByThursdayAnyTime(boolean $thursday_any_time) Return the first Volunteer filtered by the thursday_any_time column
 * @method Volunteer findOneByFridayAnyTime(boolean $friday_any_time) Return the first Volunteer filtered by the friday_any_time column
 * @method Volunteer findOneBySaturdayAnyTime(boolean $saturday_any_time) Return the first Volunteer filtered by the saturday_any_time column
 * @method Volunteer findOneBySundayNoTime(boolean $sunday_no_time) Return the first Volunteer filtered by the sunday_no_time column
 * @method Volunteer findOneByMondayNoTime(boolean $monday_no_time) Return the first Volunteer filtered by the monday_no_time column
 * @method Volunteer findOneByTuesdayNoTime(boolean $tuesday_no_time) Return the first Volunteer filtered by the tuesday_no_time column
 * @method Volunteer findOneByWednesdayNoTime(boolean $wednesday_no_time) Return the first Volunteer filtered by the wednesday_no_time column
 * @method Volunteer findOneByThursdayNoTime(boolean $thursday_no_time) Return the first Volunteer filtered by the thursday_no_time column
 * @method Volunteer findOneByFridayNoTime(boolean $friday_no_time) Return the first Volunteer filtered by the friday_no_time column
 * @method Volunteer findOneBySaturdayNoTime(boolean $saturday_no_time) Return the first Volunteer filtered by the saturday_no_time column
 *
 * @method array findById(int $id) Return Volunteer objects filtered by the id column
 * @method array findByFirstName(string $first_name) Return Volunteer objects filtered by the first_name column
 * @method array findByLastName(string $last_name) Return Volunteer objects filtered by the last_name column
 * @method array findByCity(string $city) Return Volunteer objects filtered by the city column
 * @method array findByState(string $state) Return Volunteer objects filtered by the state column
 * @method array findByZip(string $zip) Return Volunteer objects filtered by the zip column
 * @method array findByStreetaddress(string $streetAddress) Return Volunteer objects filtered by the streetAddress column
 * @method array findByVehicle(string $vehicle) Return Volunteer objects filtered by the vehicle column
 * @method array findByIsland(string $island) Return Volunteer objects filtered by the island column
 * @method array findByEmail(string $email) Return Volunteer objects filtered by the email column
 * @method array findByTraining(string $training) Return Volunteer objects filtered by the training column
 * @method array findByComments(string $comments) Return Volunteer objects filtered by the comments column
 * @method array findByPhonenumber(string $phoneNumber) Return Volunteer objects filtered by the phoneNumber column
 * @method array findBySundayFromHour(int $sunday_from_hour) Return Volunteer objects filtered by the sunday_from_hour column
 * @method array findByMondayFromHour(int $monday_from_hour) Return Volunteer objects filtered by the monday_from_hour column
 * @method array findByTuesdayFromHour(int $tuesday_from_hour) Return Volunteer objects filtered by the tuesday_from_hour column
 * @method array findByWednesdayFromHour(int $wednesday_from_hour) Return Volunteer objects filtered by the wednesday_from_hour column
 * @method array findByThursdayFromHour(int $thursday_from_hour) Return Volunteer objects filtered by the thursday_from_hour column
 * @method array findByFridayFromHour(int $friday_from_hour) Return Volunteer objects filtered by the friday_from_hour column
 * @method array findBySaturdayFromHour(int $saturday_from_hour) Return Volunteer objects filtered by the saturday_from_hour column
 * @method array findBySundayToHour(int $sunday_to_hour) Return Volunteer objects filtered by the sunday_to_hour column
 * @method array findByMondayToHour(int $monday_to_hour) Return Volunteer objects filtered by the monday_to_hour column
 * @method array findByTuesdayToHour(int $tuesday_to_hour) Return Volunteer objects filtered by the tuesday_to_hour column
 * @method array findByWednesdayToHour(int $wednesday_to_hour) Return Volunteer objects filtered by the wednesday_to_hour column
 * @method array findByThursdayToHour(int $thursday_to_hour) Return Volunteer objects filtered by the thursday_to_hour column
 * @method array findByFridayToHour(int $friday_to_hour) Return Volunteer objects filtered by the friday_to_hour column
 * @method array findBySaturdayToHour(int $saturday_to_hour) Return Volunteer objects filtered by the saturday_to_hour column
 * @method array findBySundayAnyTime(boolean $sunday_any_time) Return Volunteer objects filtered by the sunday_any_time column
 * @method array findByMondayAnyTime(boolean $monday_any_time) Return Volunteer objects filtered by the monday_any_time column
 * @method array findByTuesdayAnyTime(boolean $tuesday_any_time) Return Volunteer objects filtered by the tuesday_any_time column
 * @method array findByWednesdayAnyTime(boolean $wednesday_any_time) Return Volunteer objects filtered by the wednesday_any_time column
 * @method array findByThursdayAnyTime(boolean $thursday_any_time) Return Volunteer objects filtered by the thursday_any_time column
 * @method array findByFridayAnyTime(boolean $friday_any_time) Return Volunteer objects filtered by the friday_any_time column
 * @method array findBySaturdayAnyTime(boolean $saturday_any_time) Return Volunteer objects filtered by the saturday_any_time column
 * @method array findBySundayNoTime(boolean $sunday_no_time) Return Volunteer objects filtered by the sunday_no_time column
 * @method array findByMondayNoTime(boolean $monday_no_time) Return Volunteer objects filtered by the monday_no_time column
 * @method array findByTuesdayNoTime(boolean $tuesday_no_time) Return Volunteer objects filtered by the tuesday_no_time column
 * @method array findByWednesdayNoTime(boolean $wednesday_no_time) Return Volunteer objects filtered by the wednesday_no_time column
 * @method array findByThursdayNoTime(boolean $thursday_no_time) Return Volunteer objects filtered by the thursday_no_time column
 * @method array findByFridayNoTime(boolean $friday_no_time) Return Volunteer objects filtered by the friday_no_time column
 * @method array findBySaturdayNoTime(boolean $saturday_no_time) Return Volunteer objects filtered by the saturday_no_time column
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
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'persistence';
        }
        if (null === $modelName) {
            $modelName = 'Volunteer';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VolunteerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VolunteerQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VolunteerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VolunteerQuery) {
            return $criteria;
        }
        $query = new VolunteerQuery(null, null, $modelAlias);

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
     * @return   Volunteer|Volunteer[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VolunteerPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VolunteerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Volunteer A model object, or null if the key is not found
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
     * @return                 Volunteer A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `first_name`, `last_name`, `city`, `state`, `zip`, `streetAddress`, `vehicle`, `island`, `email`, `training`, `comments`, `phoneNumber`, `sunday_from_hour`, `monday_from_hour`, `tuesday_from_hour`, `wednesday_from_hour`, `thursday_from_hour`, `friday_from_hour`, `saturday_from_hour`, `sunday_to_hour`, `monday_to_hour`, `tuesday_to_hour`, `wednesday_to_hour`, `thursday_to_hour`, `friday_to_hour`, `saturday_to_hour`, `sunday_any_time`, `monday_any_time`, `tuesday_any_time`, `wednesday_any_time`, `thursday_any_time`, `friday_any_time`, `saturday_any_time`, `sunday_no_time`, `monday_no_time`, `tuesday_no_time`, `wednesday_no_time`, `thursday_no_time`, `friday_no_time`, `saturday_no_time` FROM `volunteer` WHERE `id` = :p0';
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
            $obj = new Volunteer();
            $obj->hydrate($row);
            VolunteerPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Volunteer|Volunteer[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Volunteer[]|mixed the list of results, formatted by the current formatter
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
     * @return VolunteerQuery The current query, for fluid interface
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
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VolunteerPeer::ID, $keys, Criteria::IN);
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
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(VolunteerPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(VolunteerPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VolunteerPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the first_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstName('fooValue');   // WHERE first_name = 'fooValue'
     * $query->filterByFirstName('%fooValue%'); // WHERE first_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByLastName('fooValue');   // WHERE last_name = 'fooValue'
     * $query->filterByLastName('%fooValue%'); // WHERE last_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByState('fooValue');   // WHERE state = 'fooValue'
     * $query->filterByState('%fooValue%'); // WHERE state LIKE '%fooValue%'
     * </code>
     *
     * @param     string $state The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByZip('fooValue');   // WHERE zip = 'fooValue'
     * $query->filterByZip('%fooValue%'); // WHERE zip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $zip The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByStreetaddress('fooValue');   // WHERE streetAddress = 'fooValue'
     * $query->filterByStreetaddress('%fooValue%'); // WHERE streetAddress LIKE '%fooValue%'
     * </code>
     *
     * @param     string $streetaddress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByVehicle('fooValue');   // WHERE vehicle = 'fooValue'
     * $query->filterByVehicle('%fooValue%'); // WHERE vehicle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vehicle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByIsland('fooValue');   // WHERE island = 'fooValue'
     * $query->filterByIsland('%fooValue%'); // WHERE island LIKE '%fooValue%'
     * </code>
     *
     * @param     string $island The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByTraining('fooValue');   // WHERE training = 'fooValue'
     * $query->filterByTraining('%fooValue%'); // WHERE training LIKE '%fooValue%'
     * </code>
     *
     * @param     string $training The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByPhonenumber('fooValue');   // WHERE phoneNumber = 'fooValue'
     * $query->filterByPhonenumber('%fooValue%'); // WHERE phoneNumber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phonenumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterBySundayFromHour(1234); // WHERE sunday_from_hour = 1234
     * $query->filterBySundayFromHour(array(12, 34)); // WHERE sunday_from_hour IN (12, 34)
     * $query->filterBySundayFromHour(array('min' => 12)); // WHERE sunday_from_hour >= 12
     * $query->filterBySundayFromHour(array('max' => 12)); // WHERE sunday_from_hour <= 12
     * </code>
     *
     * @param     mixed $sundayFromHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByMondayFromHour(1234); // WHERE monday_from_hour = 1234
     * $query->filterByMondayFromHour(array(12, 34)); // WHERE monday_from_hour IN (12, 34)
     * $query->filterByMondayFromHour(array('min' => 12)); // WHERE monday_from_hour >= 12
     * $query->filterByMondayFromHour(array('max' => 12)); // WHERE monday_from_hour <= 12
     * </code>
     *
     * @param     mixed $mondayFromHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByTuesdayFromHour(1234); // WHERE tuesday_from_hour = 1234
     * $query->filterByTuesdayFromHour(array(12, 34)); // WHERE tuesday_from_hour IN (12, 34)
     * $query->filterByTuesdayFromHour(array('min' => 12)); // WHERE tuesday_from_hour >= 12
     * $query->filterByTuesdayFromHour(array('max' => 12)); // WHERE tuesday_from_hour <= 12
     * </code>
     *
     * @param     mixed $tuesdayFromHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByWednesdayFromHour(1234); // WHERE wednesday_from_hour = 1234
     * $query->filterByWednesdayFromHour(array(12, 34)); // WHERE wednesday_from_hour IN (12, 34)
     * $query->filterByWednesdayFromHour(array('min' => 12)); // WHERE wednesday_from_hour >= 12
     * $query->filterByWednesdayFromHour(array('max' => 12)); // WHERE wednesday_from_hour <= 12
     * </code>
     *
     * @param     mixed $wednesdayFromHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByThursdayFromHour(1234); // WHERE thursday_from_hour = 1234
     * $query->filterByThursdayFromHour(array(12, 34)); // WHERE thursday_from_hour IN (12, 34)
     * $query->filterByThursdayFromHour(array('min' => 12)); // WHERE thursday_from_hour >= 12
     * $query->filterByThursdayFromHour(array('max' => 12)); // WHERE thursday_from_hour <= 12
     * </code>
     *
     * @param     mixed $thursdayFromHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByFridayFromHour(1234); // WHERE friday_from_hour = 1234
     * $query->filterByFridayFromHour(array(12, 34)); // WHERE friday_from_hour IN (12, 34)
     * $query->filterByFridayFromHour(array('min' => 12)); // WHERE friday_from_hour >= 12
     * $query->filterByFridayFromHour(array('max' => 12)); // WHERE friday_from_hour <= 12
     * </code>
     *
     * @param     mixed $fridayFromHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterBySaturdayFromHour(1234); // WHERE saturday_from_hour = 1234
     * $query->filterBySaturdayFromHour(array(12, 34)); // WHERE saturday_from_hour IN (12, 34)
     * $query->filterBySaturdayFromHour(array('min' => 12)); // WHERE saturday_from_hour >= 12
     * $query->filterBySaturdayFromHour(array('max' => 12)); // WHERE saturday_from_hour <= 12
     * </code>
     *
     * @param     mixed $saturdayFromHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterBySundayToHour(1234); // WHERE sunday_to_hour = 1234
     * $query->filterBySundayToHour(array(12, 34)); // WHERE sunday_to_hour IN (12, 34)
     * $query->filterBySundayToHour(array('min' => 12)); // WHERE sunday_to_hour >= 12
     * $query->filterBySundayToHour(array('max' => 12)); // WHERE sunday_to_hour <= 12
     * </code>
     *
     * @param     mixed $sundayToHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByMondayToHour(1234); // WHERE monday_to_hour = 1234
     * $query->filterByMondayToHour(array(12, 34)); // WHERE monday_to_hour IN (12, 34)
     * $query->filterByMondayToHour(array('min' => 12)); // WHERE monday_to_hour >= 12
     * $query->filterByMondayToHour(array('max' => 12)); // WHERE monday_to_hour <= 12
     * </code>
     *
     * @param     mixed $mondayToHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByTuesdayToHour(1234); // WHERE tuesday_to_hour = 1234
     * $query->filterByTuesdayToHour(array(12, 34)); // WHERE tuesday_to_hour IN (12, 34)
     * $query->filterByTuesdayToHour(array('min' => 12)); // WHERE tuesday_to_hour >= 12
     * $query->filterByTuesdayToHour(array('max' => 12)); // WHERE tuesday_to_hour <= 12
     * </code>
     *
     * @param     mixed $tuesdayToHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByWednesdayToHour(1234); // WHERE wednesday_to_hour = 1234
     * $query->filterByWednesdayToHour(array(12, 34)); // WHERE wednesday_to_hour IN (12, 34)
     * $query->filterByWednesdayToHour(array('min' => 12)); // WHERE wednesday_to_hour >= 12
     * $query->filterByWednesdayToHour(array('max' => 12)); // WHERE wednesday_to_hour <= 12
     * </code>
     *
     * @param     mixed $wednesdayToHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByThursdayToHour(1234); // WHERE thursday_to_hour = 1234
     * $query->filterByThursdayToHour(array(12, 34)); // WHERE thursday_to_hour IN (12, 34)
     * $query->filterByThursdayToHour(array('min' => 12)); // WHERE thursday_to_hour >= 12
     * $query->filterByThursdayToHour(array('max' => 12)); // WHERE thursday_to_hour <= 12
     * </code>
     *
     * @param     mixed $thursdayToHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByFridayToHour(1234); // WHERE friday_to_hour = 1234
     * $query->filterByFridayToHour(array(12, 34)); // WHERE friday_to_hour IN (12, 34)
     * $query->filterByFridayToHour(array('min' => 12)); // WHERE friday_to_hour >= 12
     * $query->filterByFridayToHour(array('max' => 12)); // WHERE friday_to_hour <= 12
     * </code>
     *
     * @param     mixed $fridayToHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterBySaturdayToHour(1234); // WHERE saturday_to_hour = 1234
     * $query->filterBySaturdayToHour(array(12, 34)); // WHERE saturday_to_hour IN (12, 34)
     * $query->filterBySaturdayToHour(array('min' => 12)); // WHERE saturday_to_hour >= 12
     * $query->filterBySaturdayToHour(array('max' => 12)); // WHERE saturday_to_hour <= 12
     * </code>
     *
     * @param     mixed $saturdayToHour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterBySundayAnyTime(true); // WHERE sunday_any_time = true
     * $query->filterBySundayAnyTime('yes'); // WHERE sunday_any_time = true
     * </code>
     *
     * @param     boolean|string $sundayAnyTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterBySundayAnyTime($sundayAnyTime = null, $comparison = null)
    {
        if (is_string($sundayAnyTime)) {
            $sundayAnyTime = in_array(strtolower($sundayAnyTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::SUNDAY_ANY_TIME, $sundayAnyTime, $comparison);
    }

    /**
     * Filter the query on the monday_any_time column
     *
     * Example usage:
     * <code>
     * $query->filterByMondayAnyTime(true); // WHERE monday_any_time = true
     * $query->filterByMondayAnyTime('yes'); // WHERE monday_any_time = true
     * </code>
     *
     * @param     boolean|string $mondayAnyTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterByMondayAnyTime($mondayAnyTime = null, $comparison = null)
    {
        if (is_string($mondayAnyTime)) {
            $mondayAnyTime = in_array(strtolower($mondayAnyTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::MONDAY_ANY_TIME, $mondayAnyTime, $comparison);
    }

    /**
     * Filter the query on the tuesday_any_time column
     *
     * Example usage:
     * <code>
     * $query->filterByTuesdayAnyTime(true); // WHERE tuesday_any_time = true
     * $query->filterByTuesdayAnyTime('yes'); // WHERE tuesday_any_time = true
     * </code>
     *
     * @param     boolean|string $tuesdayAnyTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterByTuesdayAnyTime($tuesdayAnyTime = null, $comparison = null)
    {
        if (is_string($tuesdayAnyTime)) {
            $tuesdayAnyTime = in_array(strtolower($tuesdayAnyTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::TUESDAY_ANY_TIME, $tuesdayAnyTime, $comparison);
    }

    /**
     * Filter the query on the wednesday_any_time column
     *
     * Example usage:
     * <code>
     * $query->filterByWednesdayAnyTime(true); // WHERE wednesday_any_time = true
     * $query->filterByWednesdayAnyTime('yes'); // WHERE wednesday_any_time = true
     * </code>
     *
     * @param     boolean|string $wednesdayAnyTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterByWednesdayAnyTime($wednesdayAnyTime = null, $comparison = null)
    {
        if (is_string($wednesdayAnyTime)) {
            $wednesdayAnyTime = in_array(strtolower($wednesdayAnyTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::WEDNESDAY_ANY_TIME, $wednesdayAnyTime, $comparison);
    }

    /**
     * Filter the query on the thursday_any_time column
     *
     * Example usage:
     * <code>
     * $query->filterByThursdayAnyTime(true); // WHERE thursday_any_time = true
     * $query->filterByThursdayAnyTime('yes'); // WHERE thursday_any_time = true
     * </code>
     *
     * @param     boolean|string $thursdayAnyTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterByThursdayAnyTime($thursdayAnyTime = null, $comparison = null)
    {
        if (is_string($thursdayAnyTime)) {
            $thursdayAnyTime = in_array(strtolower($thursdayAnyTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::THURSDAY_ANY_TIME, $thursdayAnyTime, $comparison);
    }

    /**
     * Filter the query on the friday_any_time column
     *
     * Example usage:
     * <code>
     * $query->filterByFridayAnyTime(true); // WHERE friday_any_time = true
     * $query->filterByFridayAnyTime('yes'); // WHERE friday_any_time = true
     * </code>
     *
     * @param     boolean|string $fridayAnyTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterByFridayAnyTime($fridayAnyTime = null, $comparison = null)
    {
        if (is_string($fridayAnyTime)) {
            $fridayAnyTime = in_array(strtolower($fridayAnyTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::FRIDAY_ANY_TIME, $fridayAnyTime, $comparison);
    }

    /**
     * Filter the query on the saturday_any_time column
     *
     * Example usage:
     * <code>
     * $query->filterBySaturdayAnyTime(true); // WHERE saturday_any_time = true
     * $query->filterBySaturdayAnyTime('yes'); // WHERE saturday_any_time = true
     * </code>
     *
     * @param     boolean|string $saturdayAnyTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterBySaturdayAnyTime($saturdayAnyTime = null, $comparison = null)
    {
        if (is_string($saturdayAnyTime)) {
            $saturdayAnyTime = in_array(strtolower($saturdayAnyTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::SATURDAY_ANY_TIME, $saturdayAnyTime, $comparison);
    }

    /**
     * Filter the query on the sunday_no_time column
     *
     * Example usage:
     * <code>
     * $query->filterBySundayNoTime(true); // WHERE sunday_no_time = true
     * $query->filterBySundayNoTime('yes'); // WHERE sunday_no_time = true
     * </code>
     *
     * @param     boolean|string $sundayNoTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterBySundayNoTime($sundayNoTime = null, $comparison = null)
    {
        if (is_string($sundayNoTime)) {
            $sundayNoTime = in_array(strtolower($sundayNoTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::SUNDAY_NO_TIME, $sundayNoTime, $comparison);
    }

    /**
     * Filter the query on the monday_no_time column
     *
     * Example usage:
     * <code>
     * $query->filterByMondayNoTime(true); // WHERE monday_no_time = true
     * $query->filterByMondayNoTime('yes'); // WHERE monday_no_time = true
     * </code>
     *
     * @param     boolean|string $mondayNoTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterByMondayNoTime($mondayNoTime = null, $comparison = null)
    {
        if (is_string($mondayNoTime)) {
            $mondayNoTime = in_array(strtolower($mondayNoTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::MONDAY_NO_TIME, $mondayNoTime, $comparison);
    }

    /**
     * Filter the query on the tuesday_no_time column
     *
     * Example usage:
     * <code>
     * $query->filterByTuesdayNoTime(true); // WHERE tuesday_no_time = true
     * $query->filterByTuesdayNoTime('yes'); // WHERE tuesday_no_time = true
     * </code>
     *
     * @param     boolean|string $tuesdayNoTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterByTuesdayNoTime($tuesdayNoTime = null, $comparison = null)
    {
        if (is_string($tuesdayNoTime)) {
            $tuesdayNoTime = in_array(strtolower($tuesdayNoTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::TUESDAY_NO_TIME, $tuesdayNoTime, $comparison);
    }

    /**
     * Filter the query on the wednesday_no_time column
     *
     * Example usage:
     * <code>
     * $query->filterByWednesdayNoTime(true); // WHERE wednesday_no_time = true
     * $query->filterByWednesdayNoTime('yes'); // WHERE wednesday_no_time = true
     * </code>
     *
     * @param     boolean|string $wednesdayNoTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterByWednesdayNoTime($wednesdayNoTime = null, $comparison = null)
    {
        if (is_string($wednesdayNoTime)) {
            $wednesdayNoTime = in_array(strtolower($wednesdayNoTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::WEDNESDAY_NO_TIME, $wednesdayNoTime, $comparison);
    }

    /**
     * Filter the query on the thursday_no_time column
     *
     * Example usage:
     * <code>
     * $query->filterByThursdayNoTime(true); // WHERE thursday_no_time = true
     * $query->filterByThursdayNoTime('yes'); // WHERE thursday_no_time = true
     * </code>
     *
     * @param     boolean|string $thursdayNoTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterByThursdayNoTime($thursdayNoTime = null, $comparison = null)
    {
        if (is_string($thursdayNoTime)) {
            $thursdayNoTime = in_array(strtolower($thursdayNoTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::THURSDAY_NO_TIME, $thursdayNoTime, $comparison);
    }

    /**
     * Filter the query on the friday_no_time column
     *
     * Example usage:
     * <code>
     * $query->filterByFridayNoTime(true); // WHERE friday_no_time = true
     * $query->filterByFridayNoTime('yes'); // WHERE friday_no_time = true
     * </code>
     *
     * @param     boolean|string $fridayNoTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterByFridayNoTime($fridayNoTime = null, $comparison = null)
    {
        if (is_string($fridayNoTime)) {
            $fridayNoTime = in_array(strtolower($fridayNoTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::FRIDAY_NO_TIME, $fridayNoTime, $comparison);
    }

    /**
     * Filter the query on the saturday_no_time column
     *
     * Example usage:
     * <code>
     * $query->filterBySaturdayNoTime(true); // WHERE saturday_no_time = true
     * $query->filterBySaturdayNoTime('yes'); // WHERE saturday_no_time = true
     * </code>
     *
     * @param     boolean|string $saturdayNoTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function filterBySaturdayNoTime($saturdayNoTime = null, $comparison = null)
    {
        if (is_string($saturdayNoTime)) {
            $saturdayNoTime = in_array(strtolower($saturdayNoTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VolunteerPeer::SATURDAY_NO_TIME, $saturdayNoTime, $comparison);
    }

    /**
     * Filter the query by a related Report object
     *
     * @param   Report|PropelObjectCollection $report  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VolunteerQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByReport($report, $comparison = null)
    {
        if ($report instanceof Report) {
            return $this
                ->addUsingAlias(VolunteerPeer::ID, $report->getVolunteerId(), $comparison);
        } elseif ($report instanceof PropelObjectCollection) {
            return $this
                ->useReportQuery()
                ->filterByPrimaryKeys($report->getPrimaryKeys())
                ->endUse();
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
     * @return VolunteerQuery The current query, for fluid interface
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
     * Filter the query by a related ReportComments object
     *
     * @param   ReportComments|PropelObjectCollection $reportComments  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VolunteerQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByReportComments($reportComments, $comparison = null)
    {
        if ($reportComments instanceof ReportComments) {
            return $this
                ->addUsingAlias(VolunteerPeer::ID, $reportComments->getVolunteerId(), $comparison);
        } elseif ($reportComments instanceof PropelObjectCollection) {
            return $this
                ->useReportCommentsQuery()
                ->filterByPrimaryKeys($reportComments->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByReportComments() only accepts arguments of type ReportComments or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ReportComments relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function joinReportComments($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
        if ($relationAlias) {
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
     * @return   ReportCommentsQuery A secondary query class using the current class as primary query
     */
    public function useReportCommentsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinReportComments($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ReportComments', 'ReportCommentsQuery');
    }

    /**
     * Filter the query by a related BlogEntryComments object
     *
     * @param   BlogEntryComments|PropelObjectCollection $blogEntryComments  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VolunteerQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBlogEntryComments($blogEntryComments, $comparison = null)
    {
        if ($blogEntryComments instanceof BlogEntryComments) {
            return $this
                ->addUsingAlias(VolunteerPeer::ID, $blogEntryComments->getVolunteerId(), $comparison);
        } elseif ($blogEntryComments instanceof PropelObjectCollection) {
            return $this
                ->useBlogEntryCommentsQuery()
                ->filterByPrimaryKeys($blogEntryComments->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBlogEntryComments() only accepts arguments of type BlogEntryComments or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BlogEntryComments relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function joinBlogEntryComments($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
        if ($relationAlias) {
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
     * @return   BlogEntryCommentsQuery A secondary query class using the current class as primary query
     */
    public function useBlogEntryCommentsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBlogEntryComments($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BlogEntryComments', 'BlogEntryCommentsQuery');
    }

    /**
     * Filter the query by a related VolunteerHours object
     *
     * @param   VolunteerHours|PropelObjectCollection $volunteerHours  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VolunteerQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVolunteerHours($volunteerHours, $comparison = null)
    {
        if ($volunteerHours instanceof VolunteerHours) {
            return $this
                ->addUsingAlias(VolunteerPeer::ID, $volunteerHours->getVolunteerId(), $comparison);
        } elseif ($volunteerHours instanceof PropelObjectCollection) {
            return $this
                ->useVolunteerHoursQuery()
                ->filterByPrimaryKeys($volunteerHours->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVolunteerHours() only accepts arguments of type VolunteerHours or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VolunteerHours relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function joinVolunteerHours($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
        if ($relationAlias) {
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
     * @return   VolunteerHoursQuery A secondary query class using the current class as primary query
     */
    public function useVolunteerHoursQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVolunteerHours($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VolunteerHours', 'VolunteerHoursQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Volunteer $volunteer Object to remove from the list of results
     *
     * @return VolunteerQuery The current query, for fluid interface
     */
    public function prune($volunteer = null)
    {
        if ($volunteer) {
            $this->addUsingAlias(VolunteerPeer::ID, $volunteer->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
