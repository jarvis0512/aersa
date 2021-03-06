<?php


/**
 * Base class that represents a query for the 'sucursal' table.
 *
 *
 *
 * @method SucursalQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method SucursalQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method SucursalQuery orderBySucursalNombre($order = Criteria::ASC) Order by the sucursal_nombre column
 * @method SucursalQuery orderBySucursalEstatus($order = Criteria::ASC) Order by the sucursal_estatus column
 * @method SucursalQuery orderBySucursalAnioactivo($order = Criteria::ASC) Order by the sucursal_anioactivo column
 * @method SucursalQuery orderBySucursalMesactivo($order = Criteria::ASC) Order by the sucursal_mesactivo column
 *
 * @method SucursalQuery groupByIdsucursal() Group by the idsucursal column
 * @method SucursalQuery groupByIdempresa() Group by the idempresa column
 * @method SucursalQuery groupBySucursalNombre() Group by the sucursal_nombre column
 * @method SucursalQuery groupBySucursalEstatus() Group by the sucursal_estatus column
 * @method SucursalQuery groupBySucursalAnioactivo() Group by the sucursal_anioactivo column
 * @method SucursalQuery groupBySucursalMesactivo() Group by the sucursal_mesactivo column
 *
 * @method SucursalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SucursalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SucursalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SucursalQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method SucursalQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method SucursalQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method SucursalQuery leftJoinAbonoproveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Abonoproveedor relation
 * @method SucursalQuery rightJoinAbonoproveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Abonoproveedor relation
 * @method SucursalQuery innerJoinAbonoproveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Abonoproveedor relation
 *
 * @method SucursalQuery leftJoinAjusteinventario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ajusteinventario relation
 * @method SucursalQuery rightJoinAjusteinventario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ajusteinventario relation
 * @method SucursalQuery innerJoinAjusteinventario($relationAlias = null) Adds a INNER JOIN clause to the query using the Ajusteinventario relation
 *
 * @method SucursalQuery leftJoinAlmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Almacen relation
 * @method SucursalQuery rightJoinAlmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Almacen relation
 * @method SucursalQuery innerJoinAlmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Almacen relation
 *
 * @method SucursalQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method SucursalQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method SucursalQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method SucursalQuery leftJoinCuentabancaria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cuentabancaria relation
 * @method SucursalQuery rightJoinCuentabancaria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cuentabancaria relation
 * @method SucursalQuery innerJoinCuentabancaria($relationAlias = null) Adds a INNER JOIN clause to the query using the Cuentabancaria relation
 *
 * @method SucursalQuery leftJoinCuentaporcobrar($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cuentaporcobrar relation
 * @method SucursalQuery rightJoinCuentaporcobrar($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cuentaporcobrar relation
 * @method SucursalQuery innerJoinCuentaporcobrar($relationAlias = null) Adds a INNER JOIN clause to the query using the Cuentaporcobrar relation
 *
 * @method SucursalQuery leftJoinDevolucion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devolucion relation
 * @method SucursalQuery rightJoinDevolucion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devolucion relation
 * @method SucursalQuery innerJoinDevolucion($relationAlias = null) Adds a INNER JOIN clause to the query using the Devolucion relation
 *
 * @method SucursalQuery leftJoinFlujoefectivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Flujoefectivo relation
 * @method SucursalQuery rightJoinFlujoefectivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Flujoefectivo relation
 * @method SucursalQuery innerJoinFlujoefectivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Flujoefectivo relation
 *
 * @method SucursalQuery leftJoinFoliocompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Foliocompra relation
 * @method SucursalQuery rightJoinFoliocompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Foliocompra relation
 * @method SucursalQuery innerJoinFoliocompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Foliocompra relation
 *
 * @method SucursalQuery leftJoinFoliorequisicion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Foliorequisicion relation
 * @method SucursalQuery rightJoinFoliorequisicion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Foliorequisicion relation
 * @method SucursalQuery innerJoinFoliorequisicion($relationAlias = null) Adds a INNER JOIN clause to the query using the Foliorequisicion relation
 *
 * @method SucursalQuery leftJoinFoliotablajeria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Foliotablajeria relation
 * @method SucursalQuery rightJoinFoliotablajeria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Foliotablajeria relation
 * @method SucursalQuery innerJoinFoliotablajeria($relationAlias = null) Adds a INNER JOIN clause to the query using the Foliotablajeria relation
 *
 * @method SucursalQuery leftJoinIngreso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ingreso relation
 * @method SucursalQuery rightJoinIngreso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ingreso relation
 * @method SucursalQuery innerJoinIngreso($relationAlias = null) Adds a INNER JOIN clause to the query using the Ingreso relation
 *
 * @method SucursalQuery leftJoinInventariomes($relationAlias = null) Adds a LEFT JOIN clause to the query using the Inventariomes relation
 * @method SucursalQuery rightJoinInventariomes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Inventariomes relation
 * @method SucursalQuery innerJoinInventariomes($relationAlias = null) Adds a INNER JOIN clause to the query using the Inventariomes relation
 *
 * @method SucursalQuery leftJoinNotacredito($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notacredito relation
 * @method SucursalQuery rightJoinNotacredito($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notacredito relation
 * @method SucursalQuery innerJoinNotacredito($relationAlias = null) Adds a INNER JOIN clause to the query using the Notacredito relation
 *
 * @method SucursalQuery leftJoinNotificacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notificacion relation
 * @method SucursalQuery rightJoinNotificacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notificacion relation
 * @method SucursalQuery innerJoinNotificacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Notificacion relation
 *
 * @method SucursalQuery leftJoinOrdentablajeria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordentablajeria relation
 * @method SucursalQuery rightJoinOrdentablajeria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordentablajeria relation
 * @method SucursalQuery innerJoinOrdentablajeria($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordentablajeria relation
 *
 * @method SucursalQuery leftJoinProductosucursalalmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productosucursalalmacen relation
 * @method SucursalQuery rightJoinProductosucursalalmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productosucursalalmacen relation
 * @method SucursalQuery innerJoinProductosucursalalmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Productosucursalalmacen relation
 *
 * @method SucursalQuery leftJoinRequisicionRelatedByIdsucursaldestino($relationAlias = null) Adds a LEFT JOIN clause to the query using the RequisicionRelatedByIdsucursaldestino relation
 * @method SucursalQuery rightJoinRequisicionRelatedByIdsucursaldestino($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RequisicionRelatedByIdsucursaldestino relation
 * @method SucursalQuery innerJoinRequisicionRelatedByIdsucursaldestino($relationAlias = null) Adds a INNER JOIN clause to the query using the RequisicionRelatedByIdsucursaldestino relation
 *
 * @method SucursalQuery leftJoinRequisicionRelatedByIdsucursalorigen($relationAlias = null) Adds a LEFT JOIN clause to the query using the RequisicionRelatedByIdsucursalorigen relation
 * @method SucursalQuery rightJoinRequisicionRelatedByIdsucursalorigen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RequisicionRelatedByIdsucursalorigen relation
 * @method SucursalQuery innerJoinRequisicionRelatedByIdsucursalorigen($relationAlias = null) Adds a INNER JOIN clause to the query using the RequisicionRelatedByIdsucursalorigen relation
 *
 * @method SucursalQuery leftJoinSemanarevisada($relationAlias = null) Adds a LEFT JOIN clause to the query using the Semanarevisada relation
 * @method SucursalQuery rightJoinSemanarevisada($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Semanarevisada relation
 * @method SucursalQuery innerJoinSemanarevisada($relationAlias = null) Adds a INNER JOIN clause to the query using the Semanarevisada relation
 *
 * @method SucursalQuery leftJoinTrabajadorespromedio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Trabajadorespromedio relation
 * @method SucursalQuery rightJoinTrabajadorespromedio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Trabajadorespromedio relation
 * @method SucursalQuery innerJoinTrabajadorespromedio($relationAlias = null) Adds a INNER JOIN clause to the query using the Trabajadorespromedio relation
 *
 * @method SucursalQuery leftJoinUsuariosucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuariosucursal relation
 * @method SucursalQuery rightJoinUsuariosucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuariosucursal relation
 * @method SucursalQuery innerJoinUsuariosucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuariosucursal relation
 *
 * @method SucursalQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method SucursalQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method SucursalQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method Sucursal findOne(PropelPDO $con = null) Return the first Sucursal matching the query
 * @method Sucursal findOneOrCreate(PropelPDO $con = null) Return the first Sucursal matching the query, or a new Sucursal object populated from the query conditions when no match is found
 *
 * @method Sucursal findOneByIdempresa(int $idempresa) Return the first Sucursal filtered by the idempresa column
 * @method Sucursal findOneBySucursalNombre(string $sucursal_nombre) Return the first Sucursal filtered by the sucursal_nombre column
 * @method Sucursal findOneBySucursalEstatus(boolean $sucursal_estatus) Return the first Sucursal filtered by the sucursal_estatus column
 * @method Sucursal findOneBySucursalAnioactivo(int $sucursal_anioactivo) Return the first Sucursal filtered by the sucursal_anioactivo column
 * @method Sucursal findOneBySucursalMesactivo(int $sucursal_mesactivo) Return the first Sucursal filtered by the sucursal_mesactivo column
 *
 * @method array findByIdsucursal(int $idsucursal) Return Sucursal objects filtered by the idsucursal column
 * @method array findByIdempresa(int $idempresa) Return Sucursal objects filtered by the idempresa column
 * @method array findBySucursalNombre(string $sucursal_nombre) Return Sucursal objects filtered by the sucursal_nombre column
 * @method array findBySucursalEstatus(boolean $sucursal_estatus) Return Sucursal objects filtered by the sucursal_estatus column
 * @method array findBySucursalAnioactivo(int $sucursal_anioactivo) Return Sucursal objects filtered by the sucursal_anioactivo column
 * @method array findBySucursalMesactivo(int $sucursal_mesactivo) Return Sucursal objects filtered by the sucursal_mesactivo column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseSucursalQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSucursalQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'aersa';
        }
        if (null === $modelName) {
            $modelName = 'Sucursal';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SucursalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SucursalQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SucursalQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SucursalQuery) {
            return $criteria;
        }
        $query = new SucursalQuery(null, null, $modelAlias);

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
     * @return   Sucursal|Sucursal[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SucursalPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Sucursal A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdsucursal($key, $con = null)
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
     * @return                 Sucursal A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idsucursal`, `idempresa`, `sucursal_nombre`, `sucursal_estatus`, `sucursal_anioactivo`, `sucursal_mesactivo` FROM `sucursal` WHERE `idsucursal` = :p0';
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
            $obj = new Sucursal();
            $obj->hydrate($row);
            SucursalPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Sucursal|Sucursal[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Sucursal[]|mixed the list of results, formatted by the current formatter
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
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idsucursal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursal(1234); // WHERE idsucursal = 1234
     * $query->filterByIdsucursal(array(12, 34)); // WHERE idsucursal IN (12, 34)
     * $query->filterByIdsucursal(array('min' => 12)); // WHERE idsucursal >= 12
     * $query->filterByIdsucursal(array('max' => 12)); // WHERE idsucursal <= 12
     * </code>
     *
     * @param     mixed $idsucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the idempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempresa(1234); // WHERE idempresa = 1234
     * $query->filterByIdempresa(array(12, 34)); // WHERE idempresa IN (12, 34)
     * $query->filterByIdempresa(array('min' => 12)); // WHERE idempresa >= 12
     * $query->filterByIdempresa(array('max' => 12)); // WHERE idempresa <= 12
     * </code>
     *
     * @see       filterByEmpresa()
     *
     * @param     mixed $idempresa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(SucursalPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(SucursalPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalPeer::IDEMPRESA, $idempresa, $comparison);
    }

    /**
     * Filter the query on the sucursal_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalNombre('fooValue');   // WHERE sucursal_nombre = 'fooValue'
     * $query->filterBySucursalNombre('%fooValue%'); // WHERE sucursal_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalNombre($sucursalNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalNombre)) {
                $sucursalNombre = str_replace('*', '%', $sucursalNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_NOMBRE, $sucursalNombre, $comparison);
    }

    /**
     * Filter the query on the sucursal_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalEstatus(true); // WHERE sucursal_estatus = true
     * $query->filterBySucursalEstatus('yes'); // WHERE sucursal_estatus = true
     * </code>
     *
     * @param     boolean|string $sucursalEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalEstatus($sucursalEstatus = null, $comparison = null)
    {
        if (is_string($sucursalEstatus)) {
            $sucursalEstatus = in_array(strtolower($sucursalEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_ESTATUS, $sucursalEstatus, $comparison);
    }

    /**
     * Filter the query on the sucursal_anioactivo column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalAnioactivo(1234); // WHERE sucursal_anioactivo = 1234
     * $query->filterBySucursalAnioactivo(array(12, 34)); // WHERE sucursal_anioactivo IN (12, 34)
     * $query->filterBySucursalAnioactivo(array('min' => 12)); // WHERE sucursal_anioactivo >= 12
     * $query->filterBySucursalAnioactivo(array('max' => 12)); // WHERE sucursal_anioactivo <= 12
     * </code>
     *
     * @param     mixed $sucursalAnioactivo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalAnioactivo($sucursalAnioactivo = null, $comparison = null)
    {
        if (is_array($sucursalAnioactivo)) {
            $useMinMax = false;
            if (isset($sucursalAnioactivo['min'])) {
                $this->addUsingAlias(SucursalPeer::SUCURSAL_ANIOACTIVO, $sucursalAnioactivo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sucursalAnioactivo['max'])) {
                $this->addUsingAlias(SucursalPeer::SUCURSAL_ANIOACTIVO, $sucursalAnioactivo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_ANIOACTIVO, $sucursalAnioactivo, $comparison);
    }

    /**
     * Filter the query on the sucursal_mesactivo column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalMesactivo(1234); // WHERE sucursal_mesactivo = 1234
     * $query->filterBySucursalMesactivo(array(12, 34)); // WHERE sucursal_mesactivo IN (12, 34)
     * $query->filterBySucursalMesactivo(array('min' => 12)); // WHERE sucursal_mesactivo >= 12
     * $query->filterBySucursalMesactivo(array('max' => 12)); // WHERE sucursal_mesactivo <= 12
     * </code>
     *
     * @param     mixed $sucursalMesactivo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalMesactivo($sucursalMesactivo = null, $comparison = null)
    {
        if (is_array($sucursalMesactivo)) {
            $useMinMax = false;
            if (isset($sucursalMesactivo['min'])) {
                $this->addUsingAlias(SucursalPeer::SUCURSAL_MESACTIVO, $sucursalMesactivo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sucursalMesactivo['max'])) {
                $this->addUsingAlias(SucursalPeer::SUCURSAL_MESACTIVO, $sucursalMesactivo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_MESACTIVO, $sucursalMesactivo, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(SucursalPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SucursalPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
        } else {
            throw new PropelException('filterByEmpresa() only accepts arguments of type Empresa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empresa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinEmpresa($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empresa');

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
            $this->addJoinObject($join, 'Empresa');
        }

        return $this;
    }

    /**
     * Use the Empresa relation Empresa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpresaQuery A secondary query class using the current class as primary query
     */
    public function useEmpresaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpresa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empresa', 'EmpresaQuery');
    }

    /**
     * Filter the query by a related Abonoproveedor object
     *
     * @param   Abonoproveedor|PropelObjectCollection $abonoproveedor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAbonoproveedor($abonoproveedor, $comparison = null)
    {
        if ($abonoproveedor instanceof Abonoproveedor) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $abonoproveedor->getIdsucursal(), $comparison);
        } elseif ($abonoproveedor instanceof PropelObjectCollection) {
            return $this
                ->useAbonoproveedorQuery()
                ->filterByPrimaryKeys($abonoproveedor->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAbonoproveedor() only accepts arguments of type Abonoproveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Abonoproveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinAbonoproveedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Abonoproveedor');

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
            $this->addJoinObject($join, 'Abonoproveedor');
        }

        return $this;
    }

    /**
     * Use the Abonoproveedor relation Abonoproveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AbonoproveedorQuery A secondary query class using the current class as primary query
     */
    public function useAbonoproveedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAbonoproveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Abonoproveedor', 'AbonoproveedorQuery');
    }

    /**
     * Filter the query by a related Ajusteinventario object
     *
     * @param   Ajusteinventario|PropelObjectCollection $ajusteinventario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAjusteinventario($ajusteinventario, $comparison = null)
    {
        if ($ajusteinventario instanceof Ajusteinventario) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $ajusteinventario->getIdsucursal(), $comparison);
        } elseif ($ajusteinventario instanceof PropelObjectCollection) {
            return $this
                ->useAjusteinventarioQuery()
                ->filterByPrimaryKeys($ajusteinventario->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAjusteinventario() only accepts arguments of type Ajusteinventario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ajusteinventario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinAjusteinventario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ajusteinventario');

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
            $this->addJoinObject($join, 'Ajusteinventario');
        }

        return $this;
    }

    /**
     * Use the Ajusteinventario relation Ajusteinventario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AjusteinventarioQuery A secondary query class using the current class as primary query
     */
    public function useAjusteinventarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAjusteinventario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ajusteinventario', 'AjusteinventarioQuery');
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacen($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $almacen->getIdsucursal(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            return $this
                ->useAlmacenQuery()
                ->filterByPrimaryKeys($almacen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAlmacen() only accepts arguments of type Almacen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Almacen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinAlmacen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Almacen');

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
            $this->addJoinObject($join, 'Almacen');
        }

        return $this;
    }

    /**
     * Use the Almacen relation Almacen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlmacenQuery A secondary query class using the current class as primary query
     */
    public function useAlmacenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAlmacen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Almacen', 'AlmacenQuery');
    }

    /**
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $compra->getIdsucursal(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            return $this
                ->useCompraQuery()
                ->filterByPrimaryKeys($compra->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompra() only accepts arguments of type Compra or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compra relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinCompra($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compra');

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
            $this->addJoinObject($join, 'Compra');
        }

        return $this;
    }

    /**
     * Use the Compra relation Compra object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompraQuery A secondary query class using the current class as primary query
     */
    public function useCompraQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompra($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compra', 'CompraQuery');
    }

    /**
     * Filter the query by a related Cuentabancaria object
     *
     * @param   Cuentabancaria|PropelObjectCollection $cuentabancaria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentabancaria($cuentabancaria, $comparison = null)
    {
        if ($cuentabancaria instanceof Cuentabancaria) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $cuentabancaria->getIdsucursal(), $comparison);
        } elseif ($cuentabancaria instanceof PropelObjectCollection) {
            return $this
                ->useCuentabancariaQuery()
                ->filterByPrimaryKeys($cuentabancaria->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCuentabancaria() only accepts arguments of type Cuentabancaria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cuentabancaria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinCuentabancaria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cuentabancaria');

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
            $this->addJoinObject($join, 'Cuentabancaria');
        }

        return $this;
    }

    /**
     * Use the Cuentabancaria relation Cuentabancaria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CuentabancariaQuery A secondary query class using the current class as primary query
     */
    public function useCuentabancariaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentabancaria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cuentabancaria', 'CuentabancariaQuery');
    }

    /**
     * Filter the query by a related Cuentaporcobrar object
     *
     * @param   Cuentaporcobrar|PropelObjectCollection $cuentaporcobrar  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentaporcobrar($cuentaporcobrar, $comparison = null)
    {
        if ($cuentaporcobrar instanceof Cuentaporcobrar) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $cuentaporcobrar->getIdsucursal(), $comparison);
        } elseif ($cuentaporcobrar instanceof PropelObjectCollection) {
            return $this
                ->useCuentaporcobrarQuery()
                ->filterByPrimaryKeys($cuentaporcobrar->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCuentaporcobrar() only accepts arguments of type Cuentaporcobrar or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cuentaporcobrar relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinCuentaporcobrar($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cuentaporcobrar');

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
            $this->addJoinObject($join, 'Cuentaporcobrar');
        }

        return $this;
    }

    /**
     * Use the Cuentaporcobrar relation Cuentaporcobrar object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CuentaporcobrarQuery A secondary query class using the current class as primary query
     */
    public function useCuentaporcobrarQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentaporcobrar($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cuentaporcobrar', 'CuentaporcobrarQuery');
    }

    /**
     * Filter the query by a related Devolucion object
     *
     * @param   Devolucion|PropelObjectCollection $devolucion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevolucion($devolucion, $comparison = null)
    {
        if ($devolucion instanceof Devolucion) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $devolucion->getIdsucursal(), $comparison);
        } elseif ($devolucion instanceof PropelObjectCollection) {
            return $this
                ->useDevolucionQuery()
                ->filterByPrimaryKeys($devolucion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDevolucion() only accepts arguments of type Devolucion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Devolucion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinDevolucion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Devolucion');

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
            $this->addJoinObject($join, 'Devolucion');
        }

        return $this;
    }

    /**
     * Use the Devolucion relation Devolucion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DevolucionQuery A secondary query class using the current class as primary query
     */
    public function useDevolucionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDevolucion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Devolucion', 'DevolucionQuery');
    }

    /**
     * Filter the query by a related Flujoefectivo object
     *
     * @param   Flujoefectivo|PropelObjectCollection $flujoefectivo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFlujoefectivo($flujoefectivo, $comparison = null)
    {
        if ($flujoefectivo instanceof Flujoefectivo) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $flujoefectivo->getIdsucursal(), $comparison);
        } elseif ($flujoefectivo instanceof PropelObjectCollection) {
            return $this
                ->useFlujoefectivoQuery()
                ->filterByPrimaryKeys($flujoefectivo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFlujoefectivo() only accepts arguments of type Flujoefectivo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Flujoefectivo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinFlujoefectivo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Flujoefectivo');

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
            $this->addJoinObject($join, 'Flujoefectivo');
        }

        return $this;
    }

    /**
     * Use the Flujoefectivo relation Flujoefectivo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FlujoefectivoQuery A secondary query class using the current class as primary query
     */
    public function useFlujoefectivoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFlujoefectivo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Flujoefectivo', 'FlujoefectivoQuery');
    }

    /**
     * Filter the query by a related Foliocompra object
     *
     * @param   Foliocompra|PropelObjectCollection $foliocompra  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFoliocompra($foliocompra, $comparison = null)
    {
        if ($foliocompra instanceof Foliocompra) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $foliocompra->getIdsucursal(), $comparison);
        } elseif ($foliocompra instanceof PropelObjectCollection) {
            return $this
                ->useFoliocompraQuery()
                ->filterByPrimaryKeys($foliocompra->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFoliocompra() only accepts arguments of type Foliocompra or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Foliocompra relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinFoliocompra($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Foliocompra');

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
            $this->addJoinObject($join, 'Foliocompra');
        }

        return $this;
    }

    /**
     * Use the Foliocompra relation Foliocompra object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FoliocompraQuery A secondary query class using the current class as primary query
     */
    public function useFoliocompraQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFoliocompra($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Foliocompra', 'FoliocompraQuery');
    }

    /**
     * Filter the query by a related Foliorequisicion object
     *
     * @param   Foliorequisicion|PropelObjectCollection $foliorequisicion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFoliorequisicion($foliorequisicion, $comparison = null)
    {
        if ($foliorequisicion instanceof Foliorequisicion) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $foliorequisicion->getIdsucursal(), $comparison);
        } elseif ($foliorequisicion instanceof PropelObjectCollection) {
            return $this
                ->useFoliorequisicionQuery()
                ->filterByPrimaryKeys($foliorequisicion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFoliorequisicion() only accepts arguments of type Foliorequisicion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Foliorequisicion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinFoliorequisicion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Foliorequisicion');

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
            $this->addJoinObject($join, 'Foliorequisicion');
        }

        return $this;
    }

    /**
     * Use the Foliorequisicion relation Foliorequisicion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FoliorequisicionQuery A secondary query class using the current class as primary query
     */
    public function useFoliorequisicionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFoliorequisicion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Foliorequisicion', 'FoliorequisicionQuery');
    }

    /**
     * Filter the query by a related Foliotablajeria object
     *
     * @param   Foliotablajeria|PropelObjectCollection $foliotablajeria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFoliotablajeria($foliotablajeria, $comparison = null)
    {
        if ($foliotablajeria instanceof Foliotablajeria) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $foliotablajeria->getIdsucursal(), $comparison);
        } elseif ($foliotablajeria instanceof PropelObjectCollection) {
            return $this
                ->useFoliotablajeriaQuery()
                ->filterByPrimaryKeys($foliotablajeria->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFoliotablajeria() only accepts arguments of type Foliotablajeria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Foliotablajeria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinFoliotablajeria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Foliotablajeria');

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
            $this->addJoinObject($join, 'Foliotablajeria');
        }

        return $this;
    }

    /**
     * Use the Foliotablajeria relation Foliotablajeria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FoliotablajeriaQuery A secondary query class using the current class as primary query
     */
    public function useFoliotablajeriaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFoliotablajeria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Foliotablajeria', 'FoliotablajeriaQuery');
    }

    /**
     * Filter the query by a related Ingreso object
     *
     * @param   Ingreso|PropelObjectCollection $ingreso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByIngreso($ingreso, $comparison = null)
    {
        if ($ingreso instanceof Ingreso) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $ingreso->getIdsucursal(), $comparison);
        } elseif ($ingreso instanceof PropelObjectCollection) {
            return $this
                ->useIngresoQuery()
                ->filterByPrimaryKeys($ingreso->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByIngreso() only accepts arguments of type Ingreso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ingreso relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinIngreso($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ingreso');

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
            $this->addJoinObject($join, 'Ingreso');
        }

        return $this;
    }

    /**
     * Use the Ingreso relation Ingreso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   IngresoQuery A secondary query class using the current class as primary query
     */
    public function useIngresoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinIngreso($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ingreso', 'IngresoQuery');
    }

    /**
     * Filter the query by a related Inventariomes object
     *
     * @param   Inventariomes|PropelObjectCollection $inventariomes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInventariomes($inventariomes, $comparison = null)
    {
        if ($inventariomes instanceof Inventariomes) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $inventariomes->getIdsucursal(), $comparison);
        } elseif ($inventariomes instanceof PropelObjectCollection) {
            return $this
                ->useInventariomesQuery()
                ->filterByPrimaryKeys($inventariomes->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInventariomes() only accepts arguments of type Inventariomes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Inventariomes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinInventariomes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Inventariomes');

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
            $this->addJoinObject($join, 'Inventariomes');
        }

        return $this;
    }

    /**
     * Use the Inventariomes relation Inventariomes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InventariomesQuery A secondary query class using the current class as primary query
     */
    public function useInventariomesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInventariomes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Inventariomes', 'InventariomesQuery');
    }

    /**
     * Filter the query by a related Notacredito object
     *
     * @param   Notacredito|PropelObjectCollection $notacredito  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacredito($notacredito, $comparison = null)
    {
        if ($notacredito instanceof Notacredito) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $notacredito->getIdsucursal(), $comparison);
        } elseif ($notacredito instanceof PropelObjectCollection) {
            return $this
                ->useNotacreditoQuery()
                ->filterByPrimaryKeys($notacredito->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNotacredito() only accepts arguments of type Notacredito or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Notacredito relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinNotacredito($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Notacredito');

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
            $this->addJoinObject($join, 'Notacredito');
        }

        return $this;
    }

    /**
     * Use the Notacredito relation Notacredito object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   NotacreditoQuery A secondary query class using the current class as primary query
     */
    public function useNotacreditoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNotacredito($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Notacredito', 'NotacreditoQuery');
    }

    /**
     * Filter the query by a related Notificacion object
     *
     * @param   Notificacion|PropelObjectCollection $notificacion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotificacion($notificacion, $comparison = null)
    {
        if ($notificacion instanceof Notificacion) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $notificacion->getIdsucursal(), $comparison);
        } elseif ($notificacion instanceof PropelObjectCollection) {
            return $this
                ->useNotificacionQuery()
                ->filterByPrimaryKeys($notificacion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNotificacion() only accepts arguments of type Notificacion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Notificacion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinNotificacion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Notificacion');

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
            $this->addJoinObject($join, 'Notificacion');
        }

        return $this;
    }

    /**
     * Use the Notificacion relation Notificacion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   NotificacionQuery A secondary query class using the current class as primary query
     */
    public function useNotificacionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNotificacion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Notificacion', 'NotificacionQuery');
    }

    /**
     * Filter the query by a related Ordentablajeria object
     *
     * @param   Ordentablajeria|PropelObjectCollection $ordentablajeria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajeria($ordentablajeria, $comparison = null)
    {
        if ($ordentablajeria instanceof Ordentablajeria) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $ordentablajeria->getIdsucursal(), $comparison);
        } elseif ($ordentablajeria instanceof PropelObjectCollection) {
            return $this
                ->useOrdentablajeriaQuery()
                ->filterByPrimaryKeys($ordentablajeria->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOrdentablajeria() only accepts arguments of type Ordentablajeria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ordentablajeria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinOrdentablajeria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ordentablajeria');

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
            $this->addJoinObject($join, 'Ordentablajeria');
        }

        return $this;
    }

    /**
     * Use the Ordentablajeria relation Ordentablajeria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdentablajeriaQuery A secondary query class using the current class as primary query
     */
    public function useOrdentablajeriaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdentablajeria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ordentablajeria', 'OrdentablajeriaQuery');
    }

    /**
     * Filter the query by a related Productosucursalalmacen object
     *
     * @param   Productosucursalalmacen|PropelObjectCollection $productosucursalalmacen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductosucursalalmacen($productosucursalalmacen, $comparison = null)
    {
        if ($productosucursalalmacen instanceof Productosucursalalmacen) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $productosucursalalmacen->getIdsucursal(), $comparison);
        } elseif ($productosucursalalmacen instanceof PropelObjectCollection) {
            return $this
                ->useProductosucursalalmacenQuery()
                ->filterByPrimaryKeys($productosucursalalmacen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductosucursalalmacen() only accepts arguments of type Productosucursalalmacen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productosucursalalmacen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinProductosucursalalmacen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productosucursalalmacen');

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
            $this->addJoinObject($join, 'Productosucursalalmacen');
        }

        return $this;
    }

    /**
     * Use the Productosucursalalmacen relation Productosucursalalmacen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductosucursalalmacenQuery A secondary query class using the current class as primary query
     */
    public function useProductosucursalalmacenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductosucursalalmacen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productosucursalalmacen', 'ProductosucursalalmacenQuery');
    }

    /**
     * Filter the query by a related Requisicion object
     *
     * @param   Requisicion|PropelObjectCollection $requisicion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicionRelatedByIdsucursaldestino($requisicion, $comparison = null)
    {
        if ($requisicion instanceof Requisicion) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $requisicion->getIdsucursaldestino(), $comparison);
        } elseif ($requisicion instanceof PropelObjectCollection) {
            return $this
                ->useRequisicionRelatedByIdsucursaldestinoQuery()
                ->filterByPrimaryKeys($requisicion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRequisicionRelatedByIdsucursaldestino() only accepts arguments of type Requisicion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RequisicionRelatedByIdsucursaldestino relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinRequisicionRelatedByIdsucursaldestino($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RequisicionRelatedByIdsucursaldestino');

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
            $this->addJoinObject($join, 'RequisicionRelatedByIdsucursaldestino');
        }

        return $this;
    }

    /**
     * Use the RequisicionRelatedByIdsucursaldestino relation Requisicion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisicionQuery A secondary query class using the current class as primary query
     */
    public function useRequisicionRelatedByIdsucursaldestinoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRequisicionRelatedByIdsucursaldestino($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RequisicionRelatedByIdsucursaldestino', 'RequisicionQuery');
    }

    /**
     * Filter the query by a related Requisicion object
     *
     * @param   Requisicion|PropelObjectCollection $requisicion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicionRelatedByIdsucursalorigen($requisicion, $comparison = null)
    {
        if ($requisicion instanceof Requisicion) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $requisicion->getIdsucursalorigen(), $comparison);
        } elseif ($requisicion instanceof PropelObjectCollection) {
            return $this
                ->useRequisicionRelatedByIdsucursalorigenQuery()
                ->filterByPrimaryKeys($requisicion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRequisicionRelatedByIdsucursalorigen() only accepts arguments of type Requisicion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RequisicionRelatedByIdsucursalorigen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinRequisicionRelatedByIdsucursalorigen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RequisicionRelatedByIdsucursalorigen');

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
            $this->addJoinObject($join, 'RequisicionRelatedByIdsucursalorigen');
        }

        return $this;
    }

    /**
     * Use the RequisicionRelatedByIdsucursalorigen relation Requisicion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisicionQuery A secondary query class using the current class as primary query
     */
    public function useRequisicionRelatedByIdsucursalorigenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRequisicionRelatedByIdsucursalorigen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RequisicionRelatedByIdsucursalorigen', 'RequisicionQuery');
    }

    /**
     * Filter the query by a related Semanarevisada object
     *
     * @param   Semanarevisada|PropelObjectCollection $semanarevisada  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySemanarevisada($semanarevisada, $comparison = null)
    {
        if ($semanarevisada instanceof Semanarevisada) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $semanarevisada->getIdsucursal(), $comparison);
        } elseif ($semanarevisada instanceof PropelObjectCollection) {
            return $this
                ->useSemanarevisadaQuery()
                ->filterByPrimaryKeys($semanarevisada->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySemanarevisada() only accepts arguments of type Semanarevisada or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Semanarevisada relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinSemanarevisada($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Semanarevisada');

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
            $this->addJoinObject($join, 'Semanarevisada');
        }

        return $this;
    }

    /**
     * Use the Semanarevisada relation Semanarevisada object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SemanarevisadaQuery A secondary query class using the current class as primary query
     */
    public function useSemanarevisadaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSemanarevisada($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Semanarevisada', 'SemanarevisadaQuery');
    }

    /**
     * Filter the query by a related Trabajadorespromedio object
     *
     * @param   Trabajadorespromedio|PropelObjectCollection $trabajadorespromedio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTrabajadorespromedio($trabajadorespromedio, $comparison = null)
    {
        if ($trabajadorespromedio instanceof Trabajadorespromedio) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $trabajadorespromedio->getIdsucursal(), $comparison);
        } elseif ($trabajadorespromedio instanceof PropelObjectCollection) {
            return $this
                ->useTrabajadorespromedioQuery()
                ->filterByPrimaryKeys($trabajadorespromedio->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTrabajadorespromedio() only accepts arguments of type Trabajadorespromedio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Trabajadorespromedio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinTrabajadorespromedio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Trabajadorespromedio');

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
            $this->addJoinObject($join, 'Trabajadorespromedio');
        }

        return $this;
    }

    /**
     * Use the Trabajadorespromedio relation Trabajadorespromedio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TrabajadorespromedioQuery A secondary query class using the current class as primary query
     */
    public function useTrabajadorespromedioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTrabajadorespromedio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Trabajadorespromedio', 'TrabajadorespromedioQuery');
    }

    /**
     * Filter the query by a related Usuariosucursal object
     *
     * @param   Usuariosucursal|PropelObjectCollection $usuariosucursal  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuariosucursal($usuariosucursal, $comparison = null)
    {
        if ($usuariosucursal instanceof Usuariosucursal) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $usuariosucursal->getIdsucursal(), $comparison);
        } elseif ($usuariosucursal instanceof PropelObjectCollection) {
            return $this
                ->useUsuariosucursalQuery()
                ->filterByPrimaryKeys($usuariosucursal->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuariosucursal() only accepts arguments of type Usuariosucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuariosucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinUsuariosucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuariosucursal');

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
            $this->addJoinObject($join, 'Usuariosucursal');
        }

        return $this;
    }

    /**
     * Use the Usuariosucursal relation Usuariosucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuariosucursalQuery A secondary query class using the current class as primary query
     */
    public function useUsuariosucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuariosucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuariosucursal', 'UsuariosucursalQuery');
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $venta->getIdsucursal(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            return $this
                ->useVentaQuery()
                ->filterByPrimaryKeys($venta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVenta() only accepts arguments of type Venta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Venta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinVenta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Venta');

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
            $this->addJoinObject($join, 'Venta');
        }

        return $this;
    }

    /**
     * Use the Venta relation Venta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentaQuery A secondary query class using the current class as primary query
     */
    public function useVentaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVenta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Venta', 'VentaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Sucursal $sucursal Object to remove from the list of results
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function prune($sucursal = null)
    {
        if ($sucursal) {
            $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $sucursal->getIdsucursal(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
