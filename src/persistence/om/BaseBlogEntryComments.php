<?php


/**
 * Base class that represents a row from the 'blog_entry_comments' table.
 *
 * comments on a blog entry
 *
 * @package    propel.generator.persistence.om
 */
abstract class BaseBlogEntryComments extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'BlogEntryCommentsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        BlogEntryCommentsPeer
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
     * The value for the index field.
     * @var        int
     */
    protected $index;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the blog_entry_id field.
     * @var        int
     */
    protected $blog_entry_id;

    /**
     * The value for the volunteer_id field.
     * @var        int
     */
    protected $volunteer_id;

    /**
     * @var        BlogEntry
     */
    protected $aBlogEntry;

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
     * Get the [index] column value.
     * order
     * @return int
     */
    public function getIndex()
    {

        return $this->index;
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
     * Get the [blog_entry_id] column value.
     *
     * @return int
     */
    public function getBlogEntryId()
    {

        return $this->blog_entry_id;
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
     * @return BlogEntryComments The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = BlogEntryCommentsPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [index] column.
     * order
     * @param  int $v new value
     * @return BlogEntryComments The current object (for fluent API support)
     */
    public function setIndex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->index !== $v) {
            $this->index = $v;
            $this->modifiedColumns[] = BlogEntryCommentsPeer::INDEX;
        }


        return $this;
    } // setIndex()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return BlogEntryComments The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = BlogEntryCommentsPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [blog_entry_id] column.
     *
     * @param  int $v new value
     * @return BlogEntryComments The current object (for fluent API support)
     */
    public function setBlogEntryId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->blog_entry_id !== $v) {
            $this->blog_entry_id = $v;
            $this->modifiedColumns[] = BlogEntryCommentsPeer::BLOG_ENTRY_ID;
        }

        if ($this->aBlogEntry !== null && $this->aBlogEntry->getId() !== $v) {
            $this->aBlogEntry = null;
        }


        return $this;
    } // setBlogEntryId()

    /**
     * Set the value of [volunteer_id] column.
     *
     * @param  int $v new value
     * @return BlogEntryComments The current object (for fluent API support)
     */
    public function setVolunteerId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->volunteer_id !== $v) {
            $this->volunteer_id = $v;
            $this->modifiedColumns[] = BlogEntryCommentsPeer::VOLUNTEER_ID;
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
            $this->index = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->comments = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->blog_entry_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->volunteer_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = BlogEntryCommentsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating BlogEntryComments object", $e);
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

        if ($this->aBlogEntry !== null && $this->blog_entry_id !== $this->aBlogEntry->getId()) {
            $this->aBlogEntry = null;
        }
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
            $con = Propel::getConnection(BlogEntryCommentsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = BlogEntryCommentsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aBlogEntry = null;
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
            $con = Propel::getConnection(BlogEntryCommentsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = BlogEntryCommentsQuery::create()
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
            $con = Propel::getConnection(BlogEntryCommentsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                BlogEntryCommentsPeer::addInstanceToPool($this);
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

            if ($this->aBlogEntry !== null) {
                if ($this->aBlogEntry->isModified() || $this->aBlogEntry->isNew()) {
                    $affectedRows += $this->aBlogEntry->save($con);
                }
                $this->setBlogEntry($this->aBlogEntry);
            }

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

        $this->modifiedColumns[] = BlogEntryCommentsPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . BlogEntryCommentsPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(BlogEntryCommentsPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(BlogEntryCommentsPeer::INDEX)) {
            $modifiedColumns[':p' . $index++]  = '`index`';
        }
        if ($this->isColumnModified(BlogEntryCommentsPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`comments`';
        }
        if ($this->isColumnModified(BlogEntryCommentsPeer::BLOG_ENTRY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`blog_entry_id`';
        }
        if ($this->isColumnModified(BlogEntryCommentsPeer::VOLUNTEER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`volunteer_id`';
        }

        $sql = sprintf(
            'INSERT INTO `blog_entry_comments` (%s) VALUES (%s)',
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
                    case '`index`':
                        $stmt->bindValue($identifier, $this->index, PDO::PARAM_INT);
                        break;
                    case '`comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
                        break;
                    case '`blog_entry_id`':
                        $stmt->bindValue($identifier, $this->blog_entry_id, PDO::PARAM_INT);
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

            if ($this->aBlogEntry !== null) {
                if (!$this->aBlogEntry->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aBlogEntry->getValidationFailures());
                }
            }

            if ($this->aVolunteer !== null) {
                if (!$this->aVolunteer->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aVolunteer->getValidationFailures());
                }
            }


            if (($retval = BlogEntryCommentsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = BlogEntryCommentsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIndex();
                break;
            case 2:
                return $this->getComments();
                break;
            case 3:
                return $this->getBlogEntryId();
                break;
            case 4:
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
        if (isset($alreadyDumpedObjects['BlogEntryComments'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['BlogEntryComments'][$this->getPrimaryKey()] = true;
        $keys = BlogEntryCommentsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIndex(),
            $keys[2] => $this->getComments(),
            $keys[3] => $this->getBlogEntryId(),
            $keys[4] => $this->getVolunteerId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aBlogEntry) {
                $result['BlogEntry'] = $this->aBlogEntry->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
        $pos = BlogEntryCommentsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIndex($value);
                break;
            case 2:
                $this->setComments($value);
                break;
            case 3:
                $this->setBlogEntryId($value);
                break;
            case 4:
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
        $keys = BlogEntryCommentsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIndex($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setComments($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setBlogEntryId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setVolunteerId($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(BlogEntryCommentsPeer::DATABASE_NAME);

        if ($this->isColumnModified(BlogEntryCommentsPeer::ID)) $criteria->add(BlogEntryCommentsPeer::ID, $this->id);
        if ($this->isColumnModified(BlogEntryCommentsPeer::INDEX)) $criteria->add(BlogEntryCommentsPeer::INDEX, $this->index);
        if ($this->isColumnModified(BlogEntryCommentsPeer::COMMENTS)) $criteria->add(BlogEntryCommentsPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(BlogEntryCommentsPeer::BLOG_ENTRY_ID)) $criteria->add(BlogEntryCommentsPeer::BLOG_ENTRY_ID, $this->blog_entry_id);
        if ($this->isColumnModified(BlogEntryCommentsPeer::VOLUNTEER_ID)) $criteria->add(BlogEntryCommentsPeer::VOLUNTEER_ID, $this->volunteer_id);

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
        $criteria = new Criteria(BlogEntryCommentsPeer::DATABASE_NAME);
        $criteria->add(BlogEntryCommentsPeer::ID, $this->id);

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
     * @param object $copyObj An object of BlogEntryComments (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIndex($this->getIndex());
        $copyObj->setComments($this->getComments());
        $copyObj->setBlogEntryId($this->getBlogEntryId());
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
     * @return BlogEntryComments Clone of current object.
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
     * @return BlogEntryCommentsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new BlogEntryCommentsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a BlogEntry object.
     *
     * @param                  BlogEntry $v
     * @return BlogEntryComments The current object (for fluent API support)
     * @throws PropelException
     */
    public function setBlogEntry(BlogEntry $v = null)
    {
        if ($v === null) {
            $this->setBlogEntryId(NULL);
        } else {
            $this->setBlogEntryId($v->getId());
        }

        $this->aBlogEntry = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the BlogEntry object, it will not be re-added.
        if ($v !== null) {
            $v->addBlogEntryComments($this);
        }


        return $this;
    }


    /**
     * Get the associated BlogEntry object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return BlogEntry The associated BlogEntry object.
     * @throws PropelException
     */
    public function getBlogEntry(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aBlogEntry === null && ($this->blog_entry_id !== null) && $doQuery) {
            $this->aBlogEntry = BlogEntryQuery::create()->findPk($this->blog_entry_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aBlogEntry->addBlogEntryCommentss($this);
             */
        }

        return $this->aBlogEntry;
    }

    /**
     * Declares an association between this object and a Volunteer object.
     *
     * @param                  Volunteer $v
     * @return BlogEntryComments The current object (for fluent API support)
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
            $v->addBlogEntryComments($this);
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
                $this->aVolunteer->addBlogEntryCommentss($this);
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
        $this->index = null;
        $this->comments = null;
        $this->blog_entry_id = null;
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
            if ($this->aBlogEntry instanceof Persistent) {
              $this->aBlogEntry->clearAllReferences($deep);
            }
            if ($this->aVolunteer instanceof Persistent) {
              $this->aVolunteer->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aBlogEntry = null;
        $this->aVolunteer = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(BlogEntryCommentsPeer::DEFAULT_STRING_FORMAT);
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
