<?php


/**
 * Base class that represents a row from the 'ordentablajeriadetalle' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseOrdentablajeriadetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OrdentablajeriadetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OrdentablajeriadetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idordentablajeriadetalle field.
     * @var        int
     */
    protected $idordentablajeriadetalle;

    /**
     * The value for the idordentablajeria field.
     * @var        int
     */
    protected $idordentablajeria;

    /**
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the ordentablajeriadetalle_cantidad field.
     * @var        double
     */
    protected $ordentablajeriadetalle_cantidad;

    /**
     * The value for the ordentablajeriadetalle_pesoporcion field.
     * @var        double
     */
    protected $ordentablajeriadetalle_pesoporcion;

    /**
     * The value for the ordentablajeriadetalle_precioporcion field.
     * @var        string
     */
    protected $ordentablajeriadetalle_precioporcion;

    /**
     * The value for the ordentablajeriadetalle_pesototal field.
     * @var        double
     */
    protected $ordentablajeriadetalle_pesototal;

    /**
     * The value for the ordentablajeriadetalle_subtotal field.
     * @var        string
     */
    protected $ordentablajeriadetalle_subtotal;

    /**
     * The value for the ordentablajeriadetalle_revisada field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $ordentablajeriadetalle_revisada;

    /**
     * @var        Ordentablajeria
     */
    protected $aOrdentablajeria;

    /**
     * @var        Producto
     */
    protected $aProducto;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->ordentablajeriadetalle_revisada = false;
    }

    /**
     * Initializes internal state of BaseOrdentablajeriadetalle object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idordentablajeriadetalle] column value.
     *
     * @return int
     */
    public function getIdordentablajeriadetalle()
    {

        return $this->idordentablajeriadetalle;
    }

    /**
     * Get the [idordentablajeria] column value.
     *
     * @return int
     */
    public function getIdordentablajeria()
    {

        return $this->idordentablajeria;
    }

    /**
     * Get the [idproducto] column value.
     *
     * @return int
     */
    public function getIdproducto()
    {

        return $this->idproducto;
    }

    /**
     * Get the [ordentablajeriadetalle_cantidad] column value.
     *
     * @return double
     */
    public function getOrdentablajeriadetalleCantidad()
    {

        return $this->ordentablajeriadetalle_cantidad;
    }

    /**
     * Get the [ordentablajeriadetalle_pesoporcion] column value.
     *
     * @return double
     */
    public function getOrdentablajeriadetallePesoporcion()
    {

        return $this->ordentablajeriadetalle_pesoporcion;
    }

    /**
     * Get the [ordentablajeriadetalle_precioporcion] column value.
     *
     * @return string
     */
    public function getOrdentablajeriadetallePrecioporcion()
    {

        return $this->ordentablajeriadetalle_precioporcion;
    }

    /**
     * Get the [ordentablajeriadetalle_pesototal] column value.
     *
     * @return double
     */
    public function getOrdentablajeriadetallePesototal()
    {

        return $this->ordentablajeriadetalle_pesototal;
    }

    /**
     * Get the [ordentablajeriadetalle_subtotal] column value.
     *
     * @return string
     */
    public function getOrdentablajeriadetalleSubtotal()
    {

        return $this->ordentablajeriadetalle_subtotal;
    }

    /**
     * Get the [ordentablajeriadetalle_revisada] column value.
     *
     * @return boolean
     */
    public function getOrdentablajeriadetalleRevisada()
    {

        return $this->ordentablajeriadetalle_revisada;
    }

    /**
     * Set the value of [idordentablajeriadetalle] column.
     *
     * @param  int $v new value
     * @return Ordentablajeriadetalle The current object (for fluent API support)
     */
    public function setIdordentablajeriadetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idordentablajeriadetalle !== $v) {
            $this->idordentablajeriadetalle = $v;
            $this->modifiedColumns[] = OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE;
        }


        return $this;
    } // setIdordentablajeriadetalle()

    /**
     * Set the value of [idordentablajeria] column.
     *
     * @param  int $v new value
     * @return Ordentablajeriadetalle The current object (for fluent API support)
     */
    public function setIdordentablajeria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idordentablajeria !== $v) {
            $this->idordentablajeria = $v;
            $this->modifiedColumns[] = OrdentablajeriadetallePeer::IDORDENTABLAJERIA;
        }

        if ($this->aOrdentablajeria !== null && $this->aOrdentablajeria->getIdordentablajeria() !== $v) {
            $this->aOrdentablajeria = null;
        }


        return $this;
    } // setIdordentablajeria()

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Ordentablajeriadetalle The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = OrdentablajeriadetallePeer::IDPRODUCTO;
        }

        if ($this->aProducto !== null && $this->aProducto->getIdproducto() !== $v) {
            $this->aProducto = null;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [ordentablajeriadetalle_cantidad] column.
     *
     * @param  double $v new value
     * @return Ordentablajeriadetalle The current object (for fluent API support)
     */
    public function setOrdentablajeriadetalleCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ordentablajeriadetalle_cantidad !== $v) {
            $this->ordentablajeriadetalle_cantidad = $v;
            $this->modifiedColumns[] = OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD;
        }


        return $this;
    } // setOrdentablajeriadetalleCantidad()

    /**
     * Set the value of [ordentablajeriadetalle_pesoporcion] column.
     *
     * @param  double $v new value
     * @return Ordentablajeriadetalle The current object (for fluent API support)
     */
    public function setOrdentablajeriadetallePesoporcion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ordentablajeriadetalle_pesoporcion !== $v) {
            $this->ordentablajeriadetalle_pesoporcion = $v;
            $this->modifiedColumns[] = OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOPORCION;
        }


        return $this;
    } // setOrdentablajeriadetallePesoporcion()

    /**
     * Set the value of [ordentablajeriadetalle_precioporcion] column.
     *
     * @param  string $v new value
     * @return Ordentablajeriadetalle The current object (for fluent API support)
     */
    public function setOrdentablajeriadetallePrecioporcion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ordentablajeriadetalle_precioporcion !== $v) {
            $this->ordentablajeriadetalle_precioporcion = $v;
            $this->modifiedColumns[] = OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PRECIOPORCION;
        }


        return $this;
    } // setOrdentablajeriadetallePrecioporcion()

    /**
     * Set the value of [ordentablajeriadetalle_pesototal] column.
     *
     * @param  double $v new value
     * @return Ordentablajeriadetalle The current object (for fluent API support)
     */
    public function setOrdentablajeriadetallePesototal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ordentablajeriadetalle_pesototal !== $v) {
            $this->ordentablajeriadetalle_pesototal = $v;
            $this->modifiedColumns[] = OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOTOTAL;
        }


        return $this;
    } // setOrdentablajeriadetallePesototal()

    /**
     * Set the value of [ordentablajeriadetalle_subtotal] column.
     *
     * @param  string $v new value
     * @return Ordentablajeriadetalle The current object (for fluent API support)
     */
    public function setOrdentablajeriadetalleSubtotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ordentablajeriadetalle_subtotal !== $v) {
            $this->ordentablajeriadetalle_subtotal = $v;
            $this->modifiedColumns[] = OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_SUBTOTAL;
        }


        return $this;
    } // setOrdentablajeriadetalleSubtotal()

    /**
     * Sets the value of the [ordentablajeriadetalle_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ordentablajeriadetalle The current object (for fluent API support)
     */
    public function setOrdentablajeriadetalleRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->ordentablajeriadetalle_revisada !== $v) {
            $this->ordentablajeriadetalle_revisada = $v;
            $this->modifiedColumns[] = OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_REVISADA;
        }


        return $this;
    } // setOrdentablajeriadetalleRevisada()

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
            if ($this->ordentablajeriadetalle_revisada !== false) {
                return false;
            }

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

            $this->idordentablajeriadetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idordentablajeria = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idproducto = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->ordentablajeriadetalle_cantidad = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
            $this->ordentablajeriadetalle_pesoporcion = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->ordentablajeriadetalle_precioporcion = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->ordentablajeriadetalle_pesototal = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->ordentablajeriadetalle_subtotal = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ordentablajeriadetalle_revisada = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = OrdentablajeriadetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ordentablajeriadetalle object", $e);
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

        if ($this->aOrdentablajeria !== null && $this->idordentablajeria !== $this->aOrdentablajeria->getIdordentablajeria()) {
            $this->aOrdentablajeria = null;
        }
        if ($this->aProducto !== null && $this->idproducto !== $this->aProducto->getIdproducto()) {
            $this->aProducto = null;
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
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OrdentablajeriadetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOrdentablajeria = null;
            $this->aProducto = null;
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
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OrdentablajeriadetalleQuery::create()
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
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OrdentablajeriadetallePeer::addInstanceToPool($this);
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

            if ($this->aOrdentablajeria !== null) {
                if ($this->aOrdentablajeria->isModified() || $this->aOrdentablajeria->isNew()) {
                    $affectedRows += $this->aOrdentablajeria->save($con);
                }
                $this->setOrdentablajeria($this->aOrdentablajeria);
            }

            if ($this->aProducto !== null) {
                if ($this->aProducto->isModified() || $this->aProducto->isNew()) {
                    $affectedRows += $this->aProducto->save($con);
                }
                $this->setProducto($this->aProducto);
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

        $this->modifiedColumns[] = OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE;
        if (null !== $this->idordentablajeriadetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idordentablajeriadetalle`';
        }
        if ($this->isColumnModified(OrdentablajeriadetallePeer::IDORDENTABLAJERIA)) {
            $modifiedColumns[':p' . $index++]  = '`idordentablajeria`';
        }
        if ($this->isColumnModified(OrdentablajeriadetallePeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeriadetalle_cantidad`';
        }
        if ($this->isColumnModified(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOPORCION)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeriadetalle_pesoporcion`';
        }
        if ($this->isColumnModified(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PRECIOPORCION)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeriadetalle_precioporcion`';
        }
        if ($this->isColumnModified(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOTOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeriadetalle_pesototal`';
        }
        if ($this->isColumnModified(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_SUBTOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeriadetalle_subtotal`';
        }
        if ($this->isColumnModified(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeriadetalle_revisada`';
        }

        $sql = sprintf(
            'INSERT INTO `ordentablajeriadetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idordentablajeriadetalle`':
                        $stmt->bindValue($identifier, $this->idordentablajeriadetalle, PDO::PARAM_INT);
                        break;
                    case '`idordentablajeria`':
                        $stmt->bindValue($identifier, $this->idordentablajeria, PDO::PARAM_INT);
                        break;
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`ordentablajeriadetalle_cantidad`':
                        $stmt->bindValue($identifier, $this->ordentablajeriadetalle_cantidad, PDO::PARAM_STR);
                        break;
                    case '`ordentablajeriadetalle_pesoporcion`':
                        $stmt->bindValue($identifier, $this->ordentablajeriadetalle_pesoporcion, PDO::PARAM_STR);
                        break;
                    case '`ordentablajeriadetalle_precioporcion`':
                        $stmt->bindValue($identifier, $this->ordentablajeriadetalle_precioporcion, PDO::PARAM_STR);
                        break;
                    case '`ordentablajeriadetalle_pesototal`':
                        $stmt->bindValue($identifier, $this->ordentablajeriadetalle_pesototal, PDO::PARAM_STR);
                        break;
                    case '`ordentablajeriadetalle_subtotal`':
                        $stmt->bindValue($identifier, $this->ordentablajeriadetalle_subtotal, PDO::PARAM_STR);
                        break;
                    case '`ordentablajeriadetalle_revisada`':
                        $stmt->bindValue($identifier, (int) $this->ordentablajeriadetalle_revisada, PDO::PARAM_INT);
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
        $this->setIdordentablajeriadetalle($pk);

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

            if ($this->aOrdentablajeria !== null) {
                if (!$this->aOrdentablajeria->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOrdentablajeria->getValidationFailures());
                }
            }

            if ($this->aProducto !== null) {
                if (!$this->aProducto->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProducto->getValidationFailures());
                }
            }


            if (($retval = OrdentablajeriadetallePeer::doValidate($this, $columns)) !== true) {
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
        $pos = OrdentablajeriadetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdordentablajeriadetalle();
                break;
            case 1:
                return $this->getIdordentablajeria();
                break;
            case 2:
                return $this->getIdproducto();
                break;
            case 3:
                return $this->getOrdentablajeriadetalleCantidad();
                break;
            case 4:
                return $this->getOrdentablajeriadetallePesoporcion();
                break;
            case 5:
                return $this->getOrdentablajeriadetallePrecioporcion();
                break;
            case 6:
                return $this->getOrdentablajeriadetallePesototal();
                break;
            case 7:
                return $this->getOrdentablajeriadetalleSubtotal();
                break;
            case 8:
                return $this->getOrdentablajeriadetalleRevisada();
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
        if (isset($alreadyDumpedObjects['Ordentablajeriadetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ordentablajeriadetalle'][$this->getPrimaryKey()] = true;
        $keys = OrdentablajeriadetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdordentablajeriadetalle(),
            $keys[1] => $this->getIdordentablajeria(),
            $keys[2] => $this->getIdproducto(),
            $keys[3] => $this->getOrdentablajeriadetalleCantidad(),
            $keys[4] => $this->getOrdentablajeriadetallePesoporcion(),
            $keys[5] => $this->getOrdentablajeriadetallePrecioporcion(),
            $keys[6] => $this->getOrdentablajeriadetallePesototal(),
            $keys[7] => $this->getOrdentablajeriadetalleSubtotal(),
            $keys[8] => $this->getOrdentablajeriadetalleRevisada(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOrdentablajeria) {
                $result['Ordentablajeria'] = $this->aOrdentablajeria->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProducto) {
                $result['Producto'] = $this->aProducto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = OrdentablajeriadetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdordentablajeriadetalle($value);
                break;
            case 1:
                $this->setIdordentablajeria($value);
                break;
            case 2:
                $this->setIdproducto($value);
                break;
            case 3:
                $this->setOrdentablajeriadetalleCantidad($value);
                break;
            case 4:
                $this->setOrdentablajeriadetallePesoporcion($value);
                break;
            case 5:
                $this->setOrdentablajeriadetallePrecioporcion($value);
                break;
            case 6:
                $this->setOrdentablajeriadetallePesototal($value);
                break;
            case 7:
                $this->setOrdentablajeriadetalleSubtotal($value);
                break;
            case 8:
                $this->setOrdentablajeriadetalleRevisada($value);
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
        $keys = OrdentablajeriadetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdordentablajeriadetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdordentablajeria($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdproducto($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOrdentablajeriadetalleCantidad($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOrdentablajeriadetallePesoporcion($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOrdentablajeriadetallePrecioporcion($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOrdentablajeriadetallePesototal($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOrdentablajeriadetalleSubtotal($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOrdentablajeriadetalleRevisada($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OrdentablajeriadetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE)) $criteria->add(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $this->idordentablajeriadetalle);
        if ($this->isColumnModified(OrdentablajeriadetallePeer::IDORDENTABLAJERIA)) $criteria->add(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, $this->idordentablajeria);
        if ($this->isColumnModified(OrdentablajeriadetallePeer::IDPRODUCTO)) $criteria->add(OrdentablajeriadetallePeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD)) $criteria->add(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD, $this->ordentablajeriadetalle_cantidad);
        if ($this->isColumnModified(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOPORCION)) $criteria->add(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOPORCION, $this->ordentablajeriadetalle_pesoporcion);
        if ($this->isColumnModified(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PRECIOPORCION)) $criteria->add(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PRECIOPORCION, $this->ordentablajeriadetalle_precioporcion);
        if ($this->isColumnModified(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOTOTAL)) $criteria->add(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOTOTAL, $this->ordentablajeriadetalle_pesototal);
        if ($this->isColumnModified(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_SUBTOTAL)) $criteria->add(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_SUBTOTAL, $this->ordentablajeriadetalle_subtotal);
        if ($this->isColumnModified(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_REVISADA)) $criteria->add(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_REVISADA, $this->ordentablajeriadetalle_revisada);

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
        $criteria = new Criteria(OrdentablajeriadetallePeer::DATABASE_NAME);
        $criteria->add(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $this->idordentablajeriadetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdordentablajeriadetalle();
    }

    /**
     * Generic method to set the primary key (idordentablajeriadetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdordentablajeriadetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdordentablajeriadetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ordentablajeriadetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdordentablajeria($this->getIdordentablajeria());
        $copyObj->setIdproducto($this->getIdproducto());
        $copyObj->setOrdentablajeriadetalleCantidad($this->getOrdentablajeriadetalleCantidad());
        $copyObj->setOrdentablajeriadetallePesoporcion($this->getOrdentablajeriadetallePesoporcion());
        $copyObj->setOrdentablajeriadetallePrecioporcion($this->getOrdentablajeriadetallePrecioporcion());
        $copyObj->setOrdentablajeriadetallePesototal($this->getOrdentablajeriadetallePesototal());
        $copyObj->setOrdentablajeriadetalleSubtotal($this->getOrdentablajeriadetalleSubtotal());
        $copyObj->setOrdentablajeriadetalleRevisada($this->getOrdentablajeriadetalleRevisada());

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
            $copyObj->setIdordentablajeriadetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Ordentablajeriadetalle Clone of current object.
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
     * @return OrdentablajeriadetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OrdentablajeriadetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Ordentablajeria object.
     *
     * @param                  Ordentablajeria $v
     * @return Ordentablajeriadetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOrdentablajeria(Ordentablajeria $v = null)
    {
        if ($v === null) {
            $this->setIdordentablajeria(NULL);
        } else {
            $this->setIdordentablajeria($v->getIdordentablajeria());
        }

        $this->aOrdentablajeria = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Ordentablajeria object, it will not be re-added.
        if ($v !== null) {
            $v->addOrdentablajeriadetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Ordentablajeria object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Ordentablajeria The associated Ordentablajeria object.
     * @throws PropelException
     */
    public function getOrdentablajeria(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOrdentablajeria === null && ($this->idordentablajeria !== null) && $doQuery) {
            $this->aOrdentablajeria = OrdentablajeriaQuery::create()->findPk($this->idordentablajeria, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOrdentablajeria->addOrdentablajeriadetalles($this);
             */
        }

        return $this->aOrdentablajeria;
    }

    /**
     * Declares an association between this object and a Producto object.
     *
     * @param                  Producto $v
     * @return Ordentablajeriadetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProducto(Producto $v = null)
    {
        if ($v === null) {
            $this->setIdproducto(NULL);
        } else {
            $this->setIdproducto($v->getIdproducto());
        }

        $this->aProducto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Producto object, it will not be re-added.
        if ($v !== null) {
            $v->addOrdentablajeriadetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Producto object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Producto The associated Producto object.
     * @throws PropelException
     */
    public function getProducto(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProducto === null && ($this->idproducto !== null) && $doQuery) {
            $this->aProducto = ProductoQuery::create()->findPk($this->idproducto, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProducto->addOrdentablajeriadetalles($this);
             */
        }

        return $this->aProducto;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idordentablajeriadetalle = null;
        $this->idordentablajeria = null;
        $this->idproducto = null;
        $this->ordentablajeriadetalle_cantidad = null;
        $this->ordentablajeriadetalle_pesoporcion = null;
        $this->ordentablajeriadetalle_precioporcion = null;
        $this->ordentablajeriadetalle_pesototal = null;
        $this->ordentablajeriadetalle_subtotal = null;
        $this->ordentablajeriadetalle_revisada = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
            if ($this->aOrdentablajeria instanceof Persistent) {
              $this->aOrdentablajeria->clearAllReferences($deep);
            }
            if ($this->aProducto instanceof Persistent) {
              $this->aProducto->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aOrdentablajeria = null;
        $this->aProducto = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OrdentablajeriadetallePeer::DEFAULT_STRING_FORMAT);
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
