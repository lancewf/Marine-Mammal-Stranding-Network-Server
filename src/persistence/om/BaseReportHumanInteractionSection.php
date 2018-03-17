<?php


/**
 * Base class that represents a row from the 'report_human_interaction_section' table.
 *
 * examined human interactions on the animal
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseReportHumanInteractionSection extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ReportHumanInteractionSectionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ReportHumanInteractionSectionPeer
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
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the is_examined field.
     * @var        boolean
     */
    protected $is_examined;

    /**
     * The value for the possible_hi_lesion field.
     * @var        string
     */
    protected $possible_hi_lesion;

    /**
     * The value for the possible_source field.
     * @var        string
     */
    protected $possible_source;

    /**
     * The value for the scavenger_damage field.
     * @var        string
     */
    protected $scavenger_damage;

    /**
     * The value for the report_id field.
     * @var        int
     */
    protected $report_id;

    /**
     * @var        Report
     */
    protected $aReport;

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
     * Get the [name] column value.
     * The name of the section of the animal examined
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [is_examined] column value.
     * Was the section examined
     * @return boolean
     */
    public function getIsExamined()
    {

        return $this->is_examined;
    }

    /**
     * Get the [possible_hi_lesion] column value.
     * was the section lesion caused by human interaction
     * @return string
     */
    public function getPossibleHiLesion()
    {

        return $this->possible_hi_lesion;
    }

    /**
     * Get the [possible_source] column value.
     * what was the souce of the lesion
     * @return string
     */
    public function getPossibleSource()
    {

        return $this->possible_source;
    }

    /**
     * Get the [scavenger_damage] column value.
     * does the section of the animal have scavenger damage
     * @return string
     */
    public function getScavengerDamage()
    {

        return $this->scavenger_damage;
    }

    /**
     * Get the [report_id] column value.
     * foreign id to the main report
     * @return int
     */
    public function getReportId()
    {

        return $this->report_id;
    }

    /**
     * Set the value of [id] column.
     * id
     * @param  int $v new value
     * @return ReportHumanInteractionSection The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = ReportHumanInteractionSectionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [name] column.
     * The name of the section of the animal examined
     * @param  string $v new value
     * @return ReportHumanInteractionSection The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = ReportHumanInteractionSectionPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Sets the value of the [is_examined] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Was the section examined
     * @param boolean|integer|string $v The new value
     * @return ReportHumanInteractionSection The current object (for fluent API support)
     */
    public function setIsExamined($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_examined !== $v) {
            $this->is_examined = $v;
            $this->modifiedColumns[] = ReportHumanInteractionSectionPeer::IS_EXAMINED;
        }


        return $this;
    } // setIsExamined()

    /**
     * Set the value of [possible_hi_lesion] column.
     * was the section lesion caused by human interaction
     * @param  string $v new value
     * @return ReportHumanInteractionSection The current object (for fluent API support)
     */
    public function setPossibleHiLesion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->possible_hi_lesion !== $v) {
            $this->possible_hi_lesion = $v;
            $this->modifiedColumns[] = ReportHumanInteractionSectionPeer::POSSIBLE_HI_LESION;
        }


        return $this;
    } // setPossibleHiLesion()

    /**
     * Set the value of [possible_source] column.
     * what was the souce of the lesion
     * @param  string $v new value
     * @return ReportHumanInteractionSection The current object (for fluent API support)
     */
    public function setPossibleSource($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->possible_source !== $v) {
            $this->possible_source = $v;
            $this->modifiedColumns[] = ReportHumanInteractionSectionPeer::POSSIBLE_SOURCE;
        }


        return $this;
    } // setPossibleSource()

    /**
     * Set the value of [scavenger_damage] column.
     * does the section of the animal have scavenger damage
     * @param  string $v new value
     * @return ReportHumanInteractionSection The current object (for fluent API support)
     */
    public function setScavengerDamage($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->scavenger_damage !== $v) {
            $this->scavenger_damage = $v;
            $this->modifiedColumns[] = ReportHumanInteractionSectionPeer::SCAVENGER_DAMAGE;
        }


        return $this;
    } // setScavengerDamage()

    /**
     * Set the value of [report_id] column.
     * foreign id to the main report
     * @param  int $v new value
     * @return ReportHumanInteractionSection The current object (for fluent API support)
     */
    public function setReportId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->report_id !== $v) {
            $this->report_id = $v;
            $this->modifiedColumns[] = ReportHumanInteractionSectionPeer::REPORT_ID;
        }

        if ($this->aReport !== null && $this->aReport->getId() !== $v) {
            $this->aReport = null;
        }


        return $this;
    } // setReportId()

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
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->is_examined = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
            $this->possible_hi_lesion = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->possible_source = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->scavenger_damage = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->report_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = ReportHumanInteractionSectionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ReportHumanInteractionSection object", $e);
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

        if ($this->aReport !== null && $this->report_id !== $this->aReport->getId()) {
            $this->aReport = null;
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
            $con = Propel::getConnection(ReportHumanInteractionSectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ReportHumanInteractionSectionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aReport = null;
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
            $con = Propel::getConnection(ReportHumanInteractionSectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ReportHumanInteractionSectionQuery::create()
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
            $con = Propel::getConnection(ReportHumanInteractionSectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ReportHumanInteractionSectionPeer::addInstanceToPool($this);
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

            if ($this->aReport !== null) {
                if ($this->aReport->isModified() || $this->aReport->isNew()) {
                    $affectedRows += $this->aReport->save($con);
                }
                $this->setReport($this->aReport);
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

        $this->modifiedColumns[] = ReportHumanInteractionSectionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ReportHumanInteractionSectionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::IS_EXAMINED)) {
            $modifiedColumns[':p' . $index++]  = '`is_examined`';
        }
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::POSSIBLE_HI_LESION)) {
            $modifiedColumns[':p' . $index++]  = '`possible_hi_lesion`';
        }
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::POSSIBLE_SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`possible_source`';
        }
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::SCAVENGER_DAMAGE)) {
            $modifiedColumns[':p' . $index++]  = '`scavenger_damage`';
        }
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::REPORT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`report_id`';
        }

        $sql = sprintf(
            'INSERT INTO `report_human_interaction_section` (%s) VALUES (%s)',
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
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`is_examined`':
                        $stmt->bindValue($identifier, (int) $this->is_examined, PDO::PARAM_INT);
                        break;
                    case '`possible_hi_lesion`':
                        $stmt->bindValue($identifier, $this->possible_hi_lesion, PDO::PARAM_STR);
                        break;
                    case '`possible_source`':
                        $stmt->bindValue($identifier, $this->possible_source, PDO::PARAM_STR);
                        break;
                    case '`scavenger_damage`':
                        $stmt->bindValue($identifier, $this->scavenger_damage, PDO::PARAM_STR);
                        break;
                    case '`report_id`':
                        $stmt->bindValue($identifier, $this->report_id, PDO::PARAM_INT);
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

            if ($this->aReport !== null) {
                if (!$this->aReport->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aReport->getValidationFailures());
                }
            }


            if (($retval = ReportHumanInteractionSectionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ReportHumanInteractionSectionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getName();
                break;
            case 2:
                return $this->getIsExamined();
                break;
            case 3:
                return $this->getPossibleHiLesion();
                break;
            case 4:
                return $this->getPossibleSource();
                break;
            case 5:
                return $this->getScavengerDamage();
                break;
            case 6:
                return $this->getReportId();
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
        if (isset($alreadyDumpedObjects['ReportHumanInteractionSection'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ReportHumanInteractionSection'][$this->getPrimaryKey()] = true;
        $keys = ReportHumanInteractionSectionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getIsExamined(),
            $keys[3] => $this->getPossibleHiLesion(),
            $keys[4] => $this->getPossibleSource(),
            $keys[5] => $this->getScavengerDamage(),
            $keys[6] => $this->getReportId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aReport) {
                $result['Report'] = $this->aReport->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = ReportHumanInteractionSectionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setName($value);
                break;
            case 2:
                $this->setIsExamined($value);
                break;
            case 3:
                $this->setPossibleHiLesion($value);
                break;
            case 4:
                $this->setPossibleSource($value);
                break;
            case 5:
                $this->setScavengerDamage($value);
                break;
            case 6:
                $this->setReportId($value);
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
        $keys = ReportHumanInteractionSectionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIsExamined($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPossibleHiLesion($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPossibleSource($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setScavengerDamage($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setReportId($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ReportHumanInteractionSectionPeer::DATABASE_NAME);

        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::ID)) $criteria->add(ReportHumanInteractionSectionPeer::ID, $this->id);
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::NAME)) $criteria->add(ReportHumanInteractionSectionPeer::NAME, $this->name);
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::IS_EXAMINED)) $criteria->add(ReportHumanInteractionSectionPeer::IS_EXAMINED, $this->is_examined);
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::POSSIBLE_HI_LESION)) $criteria->add(ReportHumanInteractionSectionPeer::POSSIBLE_HI_LESION, $this->possible_hi_lesion);
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::POSSIBLE_SOURCE)) $criteria->add(ReportHumanInteractionSectionPeer::POSSIBLE_SOURCE, $this->possible_source);
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::SCAVENGER_DAMAGE)) $criteria->add(ReportHumanInteractionSectionPeer::SCAVENGER_DAMAGE, $this->scavenger_damage);
        if ($this->isColumnModified(ReportHumanInteractionSectionPeer::REPORT_ID)) $criteria->add(ReportHumanInteractionSectionPeer::REPORT_ID, $this->report_id);

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
        $criteria = new Criteria(ReportHumanInteractionSectionPeer::DATABASE_NAME);
        $criteria->add(ReportHumanInteractionSectionPeer::ID, $this->id);

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
     * @param object $copyObj An object of ReportHumanInteractionSection (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setIsExamined($this->getIsExamined());
        $copyObj->setPossibleHiLesion($this->getPossibleHiLesion());
        $copyObj->setPossibleSource($this->getPossibleSource());
        $copyObj->setScavengerDamage($this->getScavengerDamage());
        $copyObj->setReportId($this->getReportId());

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
     * @return ReportHumanInteractionSection Clone of current object.
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
     * @return ReportHumanInteractionSectionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ReportHumanInteractionSectionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Report object.
     *
     * @param                  Report $v
     * @return ReportHumanInteractionSection The current object (for fluent API support)
     * @throws PropelException
     */
    public function setReport(Report $v = null)
    {
        if ($v === null) {
            $this->setReportId(NULL);
        } else {
            $this->setReportId($v->getId());
        }

        $this->aReport = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Report object, it will not be re-added.
        if ($v !== null) {
            $v->addReportHumanInteractionSection($this);
        }


        return $this;
    }


    /**
     * Get the associated Report object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Report The associated Report object.
     * @throws PropelException
     */
    public function getReport(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aReport === null && ($this->report_id !== null) && $doQuery) {
            $this->aReport = ReportQuery::create()->findPk($this->report_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aReport->addReportHumanInteractionSections($this);
             */
        }

        return $this->aReport;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->name = null;
        $this->is_examined = null;
        $this->possible_hi_lesion = null;
        $this->possible_source = null;
        $this->scavenger_damage = null;
        $this->report_id = null;
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
            if ($this->aReport instanceof Persistent) {
              $this->aReport->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aReport = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ReportHumanInteractionSectionPeer::DEFAULT_STRING_FORMAT);
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
