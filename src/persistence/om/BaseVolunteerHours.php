<?php


/**
 * Base class that represents a row from the 'volunteer_hours' table.
 *
 * a volunteer
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseVolunteerHours extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'VolunteerHoursPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        VolunteerHoursPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the total_hours field.
     * @var        double
     */
    protected $total_hours;

    /**
     * The value for the mileage field.
     * @var        int
     */
    protected $mileage;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the day_of_month field.
     * @var        int
     */
    protected $day_of_month;

    /**
     * The value for the month field.
     * @var        int
     */
    protected $month;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the volunteer_id field.
     * @var        int
     */
    protected $volunteer_id;

    /**
     * @var        Volunteer
     */
    protected $aVolunteer;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [id] column value.
     * id
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [total_hours] column value.
     *
     * @return double
     */
    public function getTotalHours()
    {

        return $this->total_hours;
    }

    /**
     * Get the [mileage] column value.
     *
     * @return int
     */
    public function getMileage()
    {

        return $this->mileage;
    }

    /**
     * Get the [comments] column value.
     *
     * @return string
     */
    public function getComments()
    {

        return $this->comments;
    }

    /**
     * Get the [day_of_month] column value.
     *
     * @return int
     */
    public function getDayOfMonth()
    {

        return $this->day_of_month;
    }

    /**
     * Get the [month] column value.
     *
     * @return int
     */
    public function getMonth()
    {

        return $this->month;
    }

    /**
     * Get the [year] column value.
     *
     * @return int
     */
    public function getYear()
    {

        return $this->year;
    }

    /**
     * Get the [volunteer_id] column value.
     *
     * @return int
     */
    public function getVolunteerId()
    {

        return $this->volunteer_id;
    }

    /**
     * Set the value of [id] column.
     * id
     * @param  int $v new value
     * @return VolunteerHours The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = VolunteerHoursPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [total_hours] column.
     *
     * @param  double $v new value
     * @return VolunteerHours The current object (for fluent API support)
     */
    public function setTotalHours($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->total_hours !== $v) {
            $this->total_hours = $v;
            $this->modifiedColumns[] = VolunteerHoursPeer::TOTAL_HOURS;
        }


        return $this;
    } // setTotalHours()

    /**
     * Set the value of [mileage] column.
     *
     * @param  int $v new value
     * @return VolunteerHours The current object (for fluent API support)
     */
    public function setMileage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mileage !== $v) {
            $this->mileage = $v;
            $this->modifiedColumns[] = VolunteerHoursPeer::MILEAGE;
        }


        return $this;
    } // setMileage()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return VolunteerHours The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = VolunteerHoursPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [day_of_month] column.
     *
     * @param  int $v new value
     * @return VolunteerHours The current object (for fluent API support)
     */
    public function setDayOfMonth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->day_of_month !== $v) {
            $this->day_of_month = $v;
            $this->modifiedColumns[] = VolunteerHoursPeer::DAY_OF_MONTH;
        }


        return $this;
    } // setDayOfMonth()

    /**
     * Set the value of [month] column.
     *
     * @param  int $v new value
     * @return VolunteerHours The current object (for fluent API support)
     */
    public function setMonth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->month !== $v) {
            $this->month = $v;
            $this->modifiedColumns[] = VolunteerHoursPeer::MONTH;
        }


        return $this;
    } // setMonth()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return VolunteerHours The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = VolunteerHoursPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [volunteer_id] column.
     *
     * @param  int $v new value
     * @return VolunteerHours The current object (for fluent API support)
     */
    public function setVolunteerId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->volunteer_id !== $v) {
            $this->volunteer_id = $v;
            $this->modifiedColumns[] = VolunteerHoursPeer::VOLUNTEER_ID;
        }

        if ($this->aVolunteer !== null && $this->aVolunteer->getId() !== $v) {
            $this->aVolunteer = null;
        }


        return $this;
    } // setVolunteerId()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->total_hours = ($row[$startcol + 1] !== null) ? (double) $row[$startcol + 1] : null;
            $this->mileage = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->comments = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->day_of_month = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->month = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->year = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->volunteer_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = VolunteerHoursPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating VolunteerHours object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aVolunteer !== null && $this->volunteer_id !== $this->aVolunteer->getId()) {
            $this->aVolunteer = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(VolunteerHoursPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = VolunteerHoursPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aVolunteer = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(VolunteerHoursPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = VolunteerHoursQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(VolunteerHoursPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                VolunteerHoursPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aVolunteer !== null) {
                if ($this->aVolunteer->isModified() || $this->aVolunteer->isNew()) {
                    $affectedRows += $this->aVolunteer->save($con);
                }
                $this->setVolunteer($this->aVolunteer);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = VolunteerHoursPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . VolunteerHoursPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(VolunteerHoursPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(VolunteerHoursPeer::TOTAL_HOURS)) {
            $modifiedColumns[':p' . $index++]  = '`total_hours`';
        }
        if ($this->isColumnModified(VolunteerHoursPeer::MILEAGE)) {
            $modifiedColumns[':p' . $index++]  = '`mileage`';
        }
        if ($this->isColumnModified(VolunteerHoursPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`comments`';
        }
        if ($this->isColumnModified(VolunteerHoursPeer::DAY_OF_MONTH)) {
            $modifiedColumns[':p' . $index++]  = '`day_of_month`';
        }
        if ($this->isColumnModified(VolunteerHoursPeer::MONTH)) {
            $modifiedColumns[':p' . $index++]  = '`month`';
        }
        if ($this->isColumnModified(VolunteerHoursPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`year`';
        }
        if ($this->isColumnModified(VolunteerHoursPeer::VOLUNTEER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`volunteer_id`';
        }

        $sql = sprintf(
            'INSERT INTO `volunteer_hours` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`total_hours`':
                        $stmt->bindValue($identifier, $this->total_hours, PDO::PARAM_STR);
                        break;
                    case '`mileage`':
                        $stmt->bindValue($identifier, $this->mileage, PDO::PARAM_INT);
                        break;
                    case '`comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
                        break;
                    case '`day_of_month`':
                        $stmt->bindValue($identifier, $this->day_of_month, PDO::PARAM_INT);
                        break;
                    case '`month`':
                        $stmt->bindValue($identifier, $this->month, PDO::PARAM_INT);
                        break;
                    case '`year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`volunteer_id`':
                        $stmt->bindValue($identifier, $this->volunteer_id, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aVolunteer !== null) {
                if (!$this->aVolunteer->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aVolunteer->getValidationFailures());
                }
            }


            if (($retval = VolunteerHoursPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = VolunteerHoursPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getTotalHours();
                break;
            case 2:
                return $this->getMileage();
                break;
            case 3:
                return $this->getComments();
                break;
            case 4:
                return $this->getDayOfMonth();
                break;
            case 5:
                return $this->getMonth();
                break;
            case 6:
                return $this->getYear();
                break;
            case 7:
                return $this->getVolunteerId();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['VolunteerHours'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['VolunteerHours'][$this->getPrimaryKey()] = true;
        $keys = VolunteerHoursPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getTotalHours(),
            $keys[2] => $this->getMileage(),
            $keys[3] => $this->getComments(),
            $keys[4] => $this->getDayOfMonth(),
            $keys[5] => $this->getMonth(),
            $keys[6] => $this->getYear(),
            $keys[7] => $this->getVolunteerId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aVolunteer) {
                $result['Volunteer'] = $this->aVolunteer->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = VolunteerHoursPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setTotalHours($value);
                break;
            case 2:
                $this->setMileage($value);
                break;
            case 3:
                $this->setComments($value);
                break;
            case 4:
                $this->setDayOfMonth($value);
                break;
            case 5:
                $this->setMonth($value);
                break;
            case 6:
                $this->setYear($value);
                break;
            case 7:
                $this->setVolunteerId($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = VolunteerHoursPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTotalHours($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMileage($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setComments($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDayOfMonth($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMonth($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setYear($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setVolunteerId($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(VolunteerHoursPeer::DATABASE_NAME);

        if ($this->isColumnModified(VolunteerHoursPeer::ID)) $criteria->add(VolunteerHoursPeer::ID, $this->id);
        if ($this->isColumnModified(VolunteerHoursPeer::TOTAL_HOURS)) $criteria->add(VolunteerHoursPeer::TOTAL_HOURS, $this->total_hours);
        if ($this->isColumnModified(VolunteerHoursPeer::MILEAGE)) $criteria->add(VolunteerHoursPeer::MILEAGE, $this->mileage);
        if ($this->isColumnModified(VolunteerHoursPeer::COMMENTS)) $criteria->add(VolunteerHoursPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(VolunteerHoursPeer::DAY_OF_MONTH)) $criteria->add(VolunteerHoursPeer::DAY_OF_MONTH, $this->day_of_month);
        if ($this->isColumnModified(VolunteerHoursPeer::MONTH)) $criteria->add(VolunteerHoursPeer::MONTH, $this->month);
        if ($this->isColumnModified(VolunteerHoursPeer::YEAR)) $criteria->add(VolunteerHoursPeer::YEAR, $this->year);
        if ($this->isColumnModified(VolunteerHoursPeer::VOLUNTEER_ID)) $criteria->add(VolunteerHoursPeer::VOLUNTEER_ID, $this->volunteer_id);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(VolunteerHoursPeer::DATABASE_NAME);
        $criteria->add(VolunteerHoursPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of VolunteerHours (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTotalHours($this->getTotalHours());
        $copyObj->setMileage($this->getMileage());
        $copyObj->setComments($this->getComments());
        $copyObj->setDayOfMonth($this->getDayOfMonth());
        $copyObj->setMonth($this->getMonth());
        $copyObj->setYear($this->getYear());
        $copyObj->setVolunteerId($this->getVolunteerId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return VolunteerHours Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return VolunteerHoursPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new VolunteerHoursPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Volunteer object.
     *
     * @param                  Volunteer $v
     * @return VolunteerHours The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVolunteer(Volunteer $v = null)
    {
        if ($v === null) {
            $this->setVolunteerId(NULL);
        } else {
            $this->setVolunteerId($v->getId());
        }

        $this->aVolunteer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Volunteer object, it will not be re-added.
        if ($v !== null) {
            $v->addVolunteerHours($this);
        }


        return $this;
    }


    /**
     * Get the associated Volunteer object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Volunteer The associated Volunteer object.
     * @throws PropelException
     */
    public function getVolunteer(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aVolunteer === null && ($this->volunteer_id !== null) && $doQuery) {
            $this->aVolunteer = VolunteerQuery::create()->findPk($this->volunteer_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVolunteer->addVolunteerHourss($this);
             */
        }

        return $this->aVolunteer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->total_hours = null;
        $this->mileage = null;
        $this->comments = null;
        $this->day_of_month = null;
        $this->month = null;
        $this->year = null;
        $this->volunteer_id = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->aVolunteer instanceof Persistent) {
              $this->aVolunteer->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aVolunteer = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VolunteerHoursPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
