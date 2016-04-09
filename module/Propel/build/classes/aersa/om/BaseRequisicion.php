<?php


/**
 * Base class that represents a row from the 'requisicion' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseRequisicion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RequisicionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RequisicionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idrequisicion field.
     * @var        int
     */
    protected $idrequisicion;

    /**
     * The value for the idempresa field.
     * @var        int
     */
    protected $idempresa;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the idusuario field.
     * @var        int
     */
    protected $idusuario;

    /**
     * The value for the idauditor field.
     * @var        int
     */
    protected $idauditor;

    /**
     * The value for the idconceptosalida field.
     * @var        int
     */
    protected $idconceptosalida;

    /**
     * The value for the requisicion_fecha field.
     * @var        string
     */
    protected $requisicion_fecha;

    /**
     * The value for the requisicion_revisada field.
     * @var        boolean
     */
    protected $requisicion_revisada;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdauditor;

    /**
     * @var        Conceptosalida
     */
    protected $aConceptosalida;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        Sucursal
     */
    protected $aSucursal;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdusuario;

    /**
     * @var        PropelObjectCollection|Requisiciondetalle[] Collection to store aggregation of Requisiciondetalle objects.
     */
    protected $collRequisiciondetalles;
    protected $collRequisiciondetallesPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $requisiciondetallesScheduledForDeletion = null;

    /**
     * Get the [idrequisicion] column value.
     *
     * @return int
     */
    public function getIdrequisicion()
    {

        return $this->idrequisicion;
    }

    /**
     * Get the [idempresa] column value.
     *
     * @return int
     */
    public function getIdempresa()
    {

        return $this->idempresa;
    }

    /**
     * Get the [idsucursal] column value.
     *
     * @return int
     */
    public function getIdsucursal()
    {

        return $this->idsucursal;
    }

    /**
     * Get the [idusuario] column value.
     *
     * @return int
     */
    public function getIdusuario()
    {

        return $this->idusuario;
    }

    /**
     * Get the [idauditor] column value.
     *
     * @return int
     */
    public function getIdauditor()
    {

        return $this->idauditor;
    }

    /**
     * Get the [idconceptosalida] column value.
     *
     * @return int
     */
    public function getIdconceptosalida()
    {

        return $this->idconceptosalida;
    }

    /**
     * Get the [optionally formatted] temporal [requisicion_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getRequisicionFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->requisicion_fecha === null) {
            return null;
        }

        if ($this->requisicion_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->requisicion_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->requisicion_fecha, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [requisicion_revisada] column value.
     *
     * @return boolean
     */
    public function getRequisicionRevisada()
    {

        return $this->requisicion_revisada;
    }

    /**
     * Set the value of [idrequisicion] column.
     *
     * @param  int $v new value
     * @return Requisicion The current object (for fluent API support)
     */
    public function setIdrequisicion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idrequisicion !== $v) {
            $this->idrequisicion = $v;
            $this->modifiedColumns[] = RequisicionPeer::IDREQUISICION;
        }


        return $this;
    } // setIdrequisicion()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Requisicion The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = RequisicionPeer::IDEMPRESA;
        }

        if ($this->aEmpresa !== null && $this->aEmpresa->getIdempresa() !== $v) {
            $this->aEmpresa = null;
        }


        return $this;
    } // setIdempresa()

    /**
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Requisicion The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = RequisicionPeer::IDSUCURSAL;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getIdsucursal() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Requisicion The current object (for fluent API support)
     */
    public function setIdusuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = RequisicionPeer::IDUSUARIO;
        }

        if ($this->aUsuarioRelatedByIdusuario !== null && $this->aUsuarioRelatedByIdusuario->getIdusuario() !== $v) {
            $this->aUsuarioRelatedByIdusuario = null;
        }


        return $this;
    } // setIdusuario()

    /**
     * Set the value of [idauditor] column.
     *
     * @param  int $v new value
     * @return Requisicion The current object (for fluent API support)
     */
    public function setIdauditor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idauditor !== $v) {
            $this->idauditor = $v;
            $this->modifiedColumns[] = RequisicionPeer::IDAUDITOR;
        }

        if ($this->aUsuarioRelatedByIdauditor !== null && $this->aUsuarioRelatedByIdauditor->getIdusuario() !== $v) {
            $this->aUsuarioRelatedByIdauditor = null;
        }


        return $this;
    } // setIdauditor()

    /**
     * Set the value of [idconceptosalida] column.
     *
     * @param  int $v new value
     * @return Requisicion The current object (for fluent API support)
     */
    public function setIdconceptosalida($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idconceptosalida !== $v) {
            $this->idconceptosalida = $v;
            $this->modifiedColumns[] = RequisicionPeer::IDCONCEPTOSALIDA;
        }

        if ($this->aConceptosalida !== null && $this->aConceptosalida->getIdconceptosalida() !== $v) {
            $this->aConceptosalida = null;
        }


        return $this;
    } // setIdconceptosalida()

    /**
     * Sets the value of [requisicion_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Requisicion The current object (for fluent API support)
     */
    public function setRequisicionFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->requisicion_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->requisicion_fecha !== null && $tmpDt = new DateTime($this->requisicion_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->requisicion_fecha = $newDateAsString;
                $this->modifiedColumns[] = RequisicionPeer::REQUISICION_FECHA;
            }
        } // if either are not null


        return $this;
    } // setRequisicionFecha()

    /**
     * Sets the value of the [requisicion_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Requisicion The current object (for fluent API support)
     */
    public function setRequisicionRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->requisicion_revisada !== $v) {
            $this->requisicion_revisada = $v;
            $this->modifiedColumns[] = RequisicionPeer::REQUISICION_REVISADA;
        }


        return $this;
    } // setRequisicionRevisada()

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

            $this->idrequisicion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idsucursal = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idusuario = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idauditor = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->idconceptosalida = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->requisicion_fecha = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->requisicion_revisada = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = RequisicionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Requisicion object", $e);
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

        if ($this->aEmpresa !== null && $this->idempresa !== $this->aEmpresa->getIdempresa()) {
            $this->aEmpresa = null;
        }
        if ($this->aSucursal !== null && $this->idsucursal !== $this->aSucursal->getIdsucursal()) {
            $this->aSucursal = null;
        }
        if ($this->aUsuarioRelatedByIdusuario !== null && $this->idusuario !== $this->aUsuarioRelatedByIdusuario->getIdusuario()) {
            $this->aUsuarioRelatedByIdusuario = null;
        }
        if ($this->aUsuarioRelatedByIdauditor !== null && $this->idauditor !== $this->aUsuarioRelatedByIdauditor->getIdusuario()) {
            $this->aUsuarioRelatedByIdauditor = null;
        }
        if ($this->aConceptosalida !== null && $this->idconceptosalida !== $this->aConceptosalida->getIdconceptosalida()) {
            $this->aConceptosalida = null;
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
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RequisicionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUsuarioRelatedByIdauditor = null;
            $this->aConceptosalida = null;
            $this->aEmpresa = null;
            $this->aSucursal = null;
            $this->aUsuarioRelatedByIdusuario = null;
            $this->collRequisiciondetalles = null;

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
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RequisicionQuery::create()
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
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RequisicionPeer::addInstanceToPool($this);
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

            if ($this->aUsuarioRelatedByIdauditor !== null) {
                if ($this->aUsuarioRelatedByIdauditor->isModified() || $this->aUsuarioRelatedByIdauditor->isNew()) {
                    $affectedRows += $this->aUsuarioRelatedByIdauditor->save($con);
                }
                $this->setUsuarioRelatedByIdauditor($this->aUsuarioRelatedByIdauditor);
            }

            if ($this->aConceptosalida !== null) {
                if ($this->aConceptosalida->isModified() || $this->aConceptosalida->isNew()) {
                    $affectedRows += $this->aConceptosalida->save($con);
                }
                $this->setConceptosalida($this->aConceptosalida);
            }

            if ($this->aEmpresa !== null) {
                if ($this->aEmpresa->isModified() || $this->aEmpresa->isNew()) {
                    $affectedRows += $this->aEmpresa->save($con);
                }
                $this->setEmpresa($this->aEmpresa);
            }

            if ($this->aSucursal !== null) {
                if ($this->aSucursal->isModified() || $this->aSucursal->isNew()) {
                    $affectedRows += $this->aSucursal->save($con);
                }
                $this->setSucursal($this->aSucursal);
            }

            if ($this->aUsuarioRelatedByIdusuario !== null) {
                if ($this->aUsuarioRelatedByIdusuario->isModified() || $this->aUsuarioRelatedByIdusuario->isNew()) {
                    $affectedRows += $this->aUsuarioRelatedByIdusuario->save($con);
                }
                $this->setUsuarioRelatedByIdusuario($this->aUsuarioRelatedByIdusuario);
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

            if ($this->requisiciondetallesScheduledForDeletion !== null) {
                if (!$this->requisiciondetallesScheduledForDeletion->isEmpty()) {
                    RequisiciondetalleQuery::create()
                        ->filterByPrimaryKeys($this->requisiciondetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->requisiciondetallesScheduledForDeletion = null;
                }
            }

            if ($this->collRequisiciondetalles !== null) {
                foreach ($this->collRequisiciondetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = RequisicionPeer::IDREQUISICION;
        if (null !== $this->idrequisicion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RequisicionPeer::IDREQUISICION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RequisicionPeer::IDREQUISICION)) {
            $modifiedColumns[':p' . $index++]  = '`idrequisicion`';
        }
        if ($this->isColumnModified(RequisicionPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(RequisicionPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(RequisicionPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(RequisicionPeer::IDAUDITOR)) {
            $modifiedColumns[':p' . $index++]  = '`idauditor`';
        }
        if ($this->isColumnModified(RequisicionPeer::IDCONCEPTOSALIDA)) {
            $modifiedColumns[':p' . $index++]  = '`idconceptosalida`';
        }
        if ($this->isColumnModified(RequisicionPeer::REQUISICION_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`requisicion_fecha`';
        }
        if ($this->isColumnModified(RequisicionPeer::REQUISICION_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`requisicion_revisada`';
        }

        $sql = sprintf(
            'INSERT INTO `requisicion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idrequisicion`':
                        $stmt->bindValue($identifier, $this->idrequisicion, PDO::PARAM_INT);
                        break;
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`idusuario`':
                        $stmt->bindValue($identifier, $this->idusuario, PDO::PARAM_INT);
                        break;
                    case '`idauditor`':
                        $stmt->bindValue($identifier, $this->idauditor, PDO::PARAM_INT);
                        break;
                    case '`idconceptosalida`':
                        $stmt->bindValue($identifier, $this->idconceptosalida, PDO::PARAM_INT);
                        break;
                    case '`requisicion_fecha`':
                        $stmt->bindValue($identifier, $this->requisicion_fecha, PDO::PARAM_STR);
                        break;
                    case '`requisicion_revisada`':
                        $stmt->bindValue($identifier, (int) $this->requisicion_revisada, PDO::PARAM_INT);
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
        $this->setIdrequisicion($pk);

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

            if ($this->aUsuarioRelatedByIdauditor !== null) {
                if (!$this->aUsuarioRelatedByIdauditor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuarioRelatedByIdauditor->getValidationFailures());
                }
            }

            if ($this->aConceptosalida !== null) {
                if (!$this->aConceptosalida->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aConceptosalida->getValidationFailures());
                }
            }

            if ($this->aEmpresa !== null) {
                if (!$this->aEmpresa->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpresa->getValidationFailures());
                }
            }

            if ($this->aSucursal !== null) {
                if (!$this->aSucursal->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSucursal->getValidationFailures());
                }
            }

            if ($this->aUsuarioRelatedByIdusuario !== null) {
                if (!$this->aUsuarioRelatedByIdusuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuarioRelatedByIdusuario->getValidationFailures());
                }
            }


            if (($retval = RequisicionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collRequisiciondetalles !== null) {
                    foreach ($this->collRequisiciondetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = RequisicionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdrequisicion();
                break;
            case 1:
                return $this->getIdempresa();
                break;
            case 2:
                return $this->getIdsucursal();
                break;
            case 3:
                return $this->getIdusuario();
                break;
            case 4:
                return $this->getIdauditor();
                break;
            case 5:
                return $this->getIdconceptosalida();
                break;
            case 6:
                return $this->getRequisicionFecha();
                break;
            case 7:
                return $this->getRequisicionRevisada();
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
        if (isset($alreadyDumpedObjects['Requisicion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Requisicion'][$this->getPrimaryKey()] = true;
        $keys = RequisicionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdrequisicion(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getIdsucursal(),
            $keys[3] => $this->getIdusuario(),
            $keys[4] => $this->getIdauditor(),
            $keys[5] => $this->getIdconceptosalida(),
            $keys[6] => $this->getRequisicionFecha(),
            $keys[7] => $this->getRequisicionRevisada(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aUsuarioRelatedByIdauditor) {
                $result['UsuarioRelatedByIdauditor'] = $this->aUsuarioRelatedByIdauditor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aConceptosalida) {
                $result['Conceptosalida'] = $this->aConceptosalida->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuarioRelatedByIdusuario) {
                $result['UsuarioRelatedByIdusuario'] = $this->aUsuarioRelatedByIdusuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collRequisiciondetalles) {
                $result['Requisiciondetalles'] = $this->collRequisiciondetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RequisicionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdrequisicion($value);
                break;
            case 1:
                $this->setIdempresa($value);
                break;
            case 2:
                $this->setIdsucursal($value);
                break;
            case 3:
                $this->setIdusuario($value);
                break;
            case 4:
                $this->setIdauditor($value);
                break;
            case 5:
                $this->setIdconceptosalida($value);
                break;
            case 6:
                $this->setRequisicionFecha($value);
                break;
            case 7:
                $this->setRequisicionRevisada($value);
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
        $keys = RequisicionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdrequisicion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdsucursal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdusuario($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdauditor($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdconceptosalida($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRequisicionFecha($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRequisicionRevisada($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RequisicionPeer::DATABASE_NAME);

        if ($this->isColumnModified(RequisicionPeer::IDREQUISICION)) $criteria->add(RequisicionPeer::IDREQUISICION, $this->idrequisicion);
        if ($this->isColumnModified(RequisicionPeer::IDEMPRESA)) $criteria->add(RequisicionPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(RequisicionPeer::IDSUCURSAL)) $criteria->add(RequisicionPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(RequisicionPeer::IDUSUARIO)) $criteria->add(RequisicionPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(RequisicionPeer::IDAUDITOR)) $criteria->add(RequisicionPeer::IDAUDITOR, $this->idauditor);
        if ($this->isColumnModified(RequisicionPeer::IDCONCEPTOSALIDA)) $criteria->add(RequisicionPeer::IDCONCEPTOSALIDA, $this->idconceptosalida);
        if ($this->isColumnModified(RequisicionPeer::REQUISICION_FECHA)) $criteria->add(RequisicionPeer::REQUISICION_FECHA, $this->requisicion_fecha);
        if ($this->isColumnModified(RequisicionPeer::REQUISICION_REVISADA)) $criteria->add(RequisicionPeer::REQUISICION_REVISADA, $this->requisicion_revisada);

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
        $criteria = new Criteria(RequisicionPeer::DATABASE_NAME);
        $criteria->add(RequisicionPeer::IDREQUISICION, $this->idrequisicion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdrequisicion();
    }

    /**
     * Generic method to set the primary key (idrequisicion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdrequisicion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdrequisicion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Requisicion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempresa($this->getIdempresa());
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setIdusuario($this->getIdusuario());
        $copyObj->setIdauditor($this->getIdauditor());
        $copyObj->setIdconceptosalida($this->getIdconceptosalida());
        $copyObj->setRequisicionFecha($this->getRequisicionFecha());
        $copyObj->setRequisicionRevisada($this->getRequisicionRevisada());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getRequisiciondetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRequisiciondetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdrequisicion(NULL); // this is a auto-increment column, so set to default value
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
     * @return Requisicion Clone of current object.
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
     * @return RequisicionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RequisicionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Requisicion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuarioRelatedByIdauditor(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdauditor(NULL);
        } else {
            $this->setIdauditor($v->getIdusuario());
        }

        $this->aUsuarioRelatedByIdauditor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addRequisicionRelatedByIdauditor($this);
        }


        return $this;
    }


    /**
     * Get the associated Usuario object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Usuario The associated Usuario object.
     * @throws PropelException
     */
    public function getUsuarioRelatedByIdauditor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUsuarioRelatedByIdauditor === null && ($this->idauditor !== null) && $doQuery) {
            $this->aUsuarioRelatedByIdauditor = UsuarioQuery::create()->findPk($this->idauditor, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuarioRelatedByIdauditor->addRequisicionsRelatedByIdauditor($this);
             */
        }

        return $this->aUsuarioRelatedByIdauditor;
    }

    /**
     * Declares an association between this object and a Conceptosalida object.
     *
     * @param                  Conceptosalida $v
     * @return Requisicion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setConceptosalida(Conceptosalida $v = null)
    {
        if ($v === null) {
            $this->setIdconceptosalida(NULL);
        } else {
            $this->setIdconceptosalida($v->getIdconceptosalida());
        }

        $this->aConceptosalida = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Conceptosalida object, it will not be re-added.
        if ($v !== null) {
            $v->addRequisicion($this);
        }


        return $this;
    }


    /**
     * Get the associated Conceptosalida object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Conceptosalida The associated Conceptosalida object.
     * @throws PropelException
     */
    public function getConceptosalida(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aConceptosalida === null && ($this->idconceptosalida !== null) && $doQuery) {
            $this->aConceptosalida = ConceptosalidaQuery::create()->findPk($this->idconceptosalida, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aConceptosalida->addRequisicions($this);
             */
        }

        return $this->aConceptosalida;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Requisicion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpresa(Empresa $v = null)
    {
        if ($v === null) {
            $this->setIdempresa(NULL);
        } else {
            $this->setIdempresa($v->getIdempresa());
        }

        $this->aEmpresa = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empresa object, it will not be re-added.
        if ($v !== null) {
            $v->addRequisicion($this);
        }


        return $this;
    }


    /**
     * Get the associated Empresa object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Empresa The associated Empresa object.
     * @throws PropelException
     */
    public function getEmpresa(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpresa === null && ($this->idempresa !== null) && $doQuery) {
            $this->aEmpresa = EmpresaQuery::create()->findPk($this->idempresa, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpresa->addRequisicions($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Requisicion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSucursal(Sucursal $v = null)
    {
        if ($v === null) {
            $this->setIdsucursal(NULL);
        } else {
            $this->setIdsucursal($v->getIdsucursal());
        }

        $this->aSucursal = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Sucursal object, it will not be re-added.
        if ($v !== null) {
            $v->addRequisicion($this);
        }


        return $this;
    }


    /**
     * Get the associated Sucursal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Sucursal The associated Sucursal object.
     * @throws PropelException
     */
    public function getSucursal(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSucursal === null && ($this->idsucursal !== null) && $doQuery) {
            $this->aSucursal = SucursalQuery::create()->findPk($this->idsucursal, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSucursal->addRequisicions($this);
             */
        }

        return $this->aSucursal;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Requisicion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuarioRelatedByIdusuario(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdusuario(NULL);
        } else {
            $this->setIdusuario($v->getIdusuario());
        }

        $this->aUsuarioRelatedByIdusuario = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addRequisicionRelatedByIdusuario($this);
        }


        return $this;
    }


    /**
     * Get the associated Usuario object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Usuario The associated Usuario object.
     * @throws PropelException
     */
    public function getUsuarioRelatedByIdusuario(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUsuarioRelatedByIdusuario === null && ($this->idusuario !== null) && $doQuery) {
            $this->aUsuarioRelatedByIdusuario = UsuarioQuery::create()->findPk($this->idusuario, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuarioRelatedByIdusuario->addRequisicionsRelatedByIdusuario($this);
             */
        }

        return $this->aUsuarioRelatedByIdusuario;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Requisiciondetalle' == $relationName) {
            $this->initRequisiciondetalles();
        }
    }

    /**
     * Clears out the collRequisiciondetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Requisicion The current object (for fluent API support)
     * @see        addRequisiciondetalles()
     */
    public function clearRequisiciondetalles()
    {
        $this->collRequisiciondetalles = null; // important to set this to null since that means it is uninitialized
        $this->collRequisiciondetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collRequisiciondetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialRequisiciondetalles($v = true)
    {
        $this->collRequisiciondetallesPartial = $v;
    }

    /**
     * Initializes the collRequisiciondetalles collection.
     *
     * By default this just sets the collRequisiciondetalles collection to an empty array (like clearcollRequisiciondetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRequisiciondetalles($overrideExisting = true)
    {
        if (null !== $this->collRequisiciondetalles && !$overrideExisting) {
            return;
        }
        $this->collRequisiciondetalles = new PropelObjectCollection();
        $this->collRequisiciondetalles->setModel('Requisiciondetalle');
    }

    /**
     * Gets an array of Requisiciondetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Requisicion is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Requisiciondetalle[] List of Requisiciondetalle objects
     * @throws PropelException
     */
    public function getRequisiciondetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRequisiciondetallesPartial && !$this->isNew();
        if (null === $this->collRequisiciondetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRequisiciondetalles) {
                // return empty collection
                $this->initRequisiciondetalles();
            } else {
                $collRequisiciondetalles = RequisiciondetalleQuery::create(null, $criteria)
                    ->filterByRequisicion($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRequisiciondetallesPartial && count($collRequisiciondetalles)) {
                      $this->initRequisiciondetalles(false);

                      foreach ($collRequisiciondetalles as $obj) {
                        if (false == $this->collRequisiciondetalles->contains($obj)) {
                          $this->collRequisiciondetalles->append($obj);
                        }
                      }

                      $this->collRequisiciondetallesPartial = true;
                    }

                    $collRequisiciondetalles->getInternalIterator()->rewind();

                    return $collRequisiciondetalles;
                }

                if ($partial && $this->collRequisiciondetalles) {
                    foreach ($this->collRequisiciondetalles as $obj) {
                        if ($obj->isNew()) {
                            $collRequisiciondetalles[] = $obj;
                        }
                    }
                }

                $this->collRequisiciondetalles = $collRequisiciondetalles;
                $this->collRequisiciondetallesPartial = false;
            }
        }

        return $this->collRequisiciondetalles;
    }

    /**
     * Sets a collection of Requisiciondetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $requisiciondetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Requisicion The current object (for fluent API support)
     */
    public function setRequisiciondetalles(PropelCollection $requisiciondetalles, PropelPDO $con = null)
    {
        $requisiciondetallesToDelete = $this->getRequisiciondetalles(new Criteria(), $con)->diff($requisiciondetalles);


        $this->requisiciondetallesScheduledForDeletion = $requisiciondetallesToDelete;

        foreach ($requisiciondetallesToDelete as $requisiciondetalleRemoved) {
            $requisiciondetalleRemoved->setRequisicion(null);
        }

        $this->collRequisiciondetalles = null;
        foreach ($requisiciondetalles as $requisiciondetalle) {
            $this->addRequisiciondetalle($requisiciondetalle);
        }

        $this->collRequisiciondetalles = $requisiciondetalles;
        $this->collRequisiciondetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Requisiciondetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Requisiciondetalle objects.
     * @throws PropelException
     */
    public function countRequisiciondetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRequisiciondetallesPartial && !$this->isNew();
        if (null === $this->collRequisiciondetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRequisiciondetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRequisiciondetalles());
            }
            $query = RequisiciondetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRequisicion($this)
                ->count($con);
        }

        return count($this->collRequisiciondetalles);
    }

    /**
     * Method called to associate a Requisiciondetalle object to this object
     * through the Requisiciondetalle foreign key attribute.
     *
     * @param    Requisiciondetalle $l Requisiciondetalle
     * @return Requisicion The current object (for fluent API support)
     */
    public function addRequisiciondetalle(Requisiciondetalle $l)
    {
        if ($this->collRequisiciondetalles === null) {
            $this->initRequisiciondetalles();
            $this->collRequisiciondetallesPartial = true;
        }

        if (!in_array($l, $this->collRequisiciondetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRequisiciondetalle($l);

            if ($this->requisiciondetallesScheduledForDeletion and $this->requisiciondetallesScheduledForDeletion->contains($l)) {
                $this->requisiciondetallesScheduledForDeletion->remove($this->requisiciondetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Requisiciondetalle $requisiciondetalle The requisiciondetalle object to add.
     */
    protected function doAddRequisiciondetalle($requisiciondetalle)
    {
        $this->collRequisiciondetalles[]= $requisiciondetalle;
        $requisiciondetalle->setRequisicion($this);
    }

    /**
     * @param	Requisiciondetalle $requisiciondetalle The requisiciondetalle object to remove.
     * @return Requisicion The current object (for fluent API support)
     */
    public function removeRequisiciondetalle($requisiciondetalle)
    {
        if ($this->getRequisiciondetalles()->contains($requisiciondetalle)) {
            $this->collRequisiciondetalles->remove($this->collRequisiciondetalles->search($requisiciondetalle));
            if (null === $this->requisiciondetallesScheduledForDeletion) {
                $this->requisiciondetallesScheduledForDeletion = clone $this->collRequisiciondetalles;
                $this->requisiciondetallesScheduledForDeletion->clear();
            }
            $this->requisiciondetallesScheduledForDeletion[]= clone $requisiciondetalle;
            $requisiciondetalle->setRequisicion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Requisicion is new, it will return
     * an empty collection; or if this Requisicion has previously
     * been saved, it will retrieve related Requisiciondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Requisicion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisiciondetalle[] List of Requisiciondetalle objects
     */
    public function getRequisiciondetallesJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisiciondetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getRequisiciondetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idrequisicion = null;
        $this->idempresa = null;
        $this->idsucursal = null;
        $this->idusuario = null;
        $this->idauditor = null;
        $this->idconceptosalida = null;
        $this->requisicion_fecha = null;
        $this->requisicion_revisada = null;
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
            if ($this->collRequisiciondetalles) {
                foreach ($this->collRequisiciondetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aUsuarioRelatedByIdauditor instanceof Persistent) {
              $this->aUsuarioRelatedByIdauditor->clearAllReferences($deep);
            }
            if ($this->aConceptosalida instanceof Persistent) {
              $this->aConceptosalida->clearAllReferences($deep);
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }
            if ($this->aUsuarioRelatedByIdusuario instanceof Persistent) {
              $this->aUsuarioRelatedByIdusuario->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collRequisiciondetalles instanceof PropelCollection) {
            $this->collRequisiciondetalles->clearIterator();
        }
        $this->collRequisiciondetalles = null;
        $this->aUsuarioRelatedByIdauditor = null;
        $this->aConceptosalida = null;
        $this->aEmpresa = null;
        $this->aSucursal = null;
        $this->aUsuarioRelatedByIdusuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RequisicionPeer::DEFAULT_STRING_FORMAT);
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
