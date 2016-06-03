<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Almacen
 *
 * @ORM\Table(name="Almacen")
 * @ORM\Entity
 */
class Almacen
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=255, nullable=false)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valora_Costo", type="smallint", nullable=false)
     */
    private $valoraCosto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Criterio_Salida", type="smallint", nullable=false)
     */
    private $criterioSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=12, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Letra", type="string", length=2, nullable=false)
     */
    private $letra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Punto_Venta", type="boolean", nullable=false)
     */
    private $puntoVenta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Punto_Inventario", type="boolean", nullable=false)
     */
    private $puntoInventario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Almacen_Entidad", type="boolean", nullable=false)
     */
    private $almacenEntidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cuadre_Diario", type="boolean", nullable=false)
     */
    private $cuadreDiario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cuadre", type="datetime", nullable=false)
     */
    private $fechaCuadre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado_Cuadre", type="smallint", nullable=false)
     */
    private $estadoCuadre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_UltimoCuadre", type="datetime", nullable=false)
     */
    private $fechaUltimocuadre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Orden_Ptoreorder", type="boolean", nullable=false)
     */
    private $ordenPtoreorder;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden_Vale", type="smallint", nullable=false)
     */
    private $ordenVale;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Insumo", type="string", length=10, nullable=false)
     */
    private $idInsumo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Validar_Dispo", type="smallint", nullable=false)
     */
    private $validarDispo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=50, nullable=false)
     */
    private $descCliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FcierreM_CuadreD", type="datetime", nullable=false)
     */
    private $fcierremCuadred;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cierre_Apertura", type="boolean", nullable=false)
     */
    private $cierreApertura;

    /**
     * @var integer
     *
     * @ORM\Column(name="NoCaja", type="smallint", nullable=false)
     */
    private $nocaja;

    /**
     * @var integer
     *
     * @ORM\Column(name="ModeloCaja", type="smallint", nullable=false)
     */
    private $modelocaja;

    /**
     * @var boolean
     *
     * @ORM\Column(name="TipoCon", type="boolean", nullable=false)
     */
    private $tipocon;

    /**
     * @var string
     *
     * @ORM\Column(name="NoDetelef", type="string", length=15, nullable=false)
     */
    private $nodetelef;

    /**
     * @var integer
     *
     * @ORM\Column(name="TxSpeed", type="smallint", nullable=false)
     */
    private $txspeed;

    /**
     * @var integer
     *
     * @ORM\Column(name="TxCom", type="smallint", nullable=false)
     */
    private $txcom;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=5, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Empleado", type="string", length=50, nullable=false)
     */
    private $descEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Factura", type="string", length=15, nullable=false)
     */
    private $factura;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaFac", type="integer", nullable=false)
     */
    private $contafac;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IncluirenCuadre", type="boolean", nullable=false)
     */
    private $incluirencuadre;

    /**
     * @var integer
     *
     * @ORM\Column(name="ParaCliente", type="smallint", nullable=false)
     */
    private $paracliente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Valida_Empaque", type="boolean", nullable=false)
     */
    private $validaEmpaque;

    /**
     * @var string
     *
     * @ORM\Column(name="Adespacho", type="string", length=4, nullable=false)
     */
    private $adespacho;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CotizaMultiple", type="boolean", nullable=false)
     */
    private $cotizamultiple;

    /**
     * @var string
     *
     * @ORM\Column(name="IpCajas", type="string", length=15, nullable=false)
     */
    private $ipcajas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Almacen_Insumo", type="boolean", nullable=false)
     */
    private $almacenInsumo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaVale", type="integer", nullable=false)
     */
    private $contavale;

    /**
     * @var string
     *
     * @ORM\Column(name="Vale", type="string", length=15, nullable=false)
     */
    private $vale;



    /**
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return Almacen
     */
    public function setDescAlmacen($descAlmacen)
    {
        $this->descAlmacen = $descAlmacen;

        return $this;
    }

    /**
     * Get descAlmacen
     *
     * @return string 
     */
    public function getDescAlmacen()
    {
        return $this->descAlmacen;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Almacen
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set valoraCosto
     *
     * @param integer $valoraCosto
     * @return Almacen
     */
    public function setValoraCosto($valoraCosto)
    {
        $this->valoraCosto = $valoraCosto;

        return $this;
    }

    /**
     * Get valoraCosto
     *
     * @return integer 
     */
    public function getValoraCosto()
    {
        return $this->valoraCosto;
    }

    /**
     * Set criterioSalida
     *
     * @param integer $criterioSalida
     * @return Almacen
     */
    public function setCriterioSalida($criterioSalida)
    {
        $this->criterioSalida = $criterioSalida;

        return $this;
    }

    /**
     * Get criterioSalida
     *
     * @return integer 
     */
    public function getCriterioSalida()
    {
        return $this->criterioSalida;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return Almacen
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set letra
     *
     * @param string $letra
     * @return Almacen
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;

        return $this;
    }

    /**
     * Get letra
     *
     * @return string 
     */
    public function getLetra()
    {
        return $this->letra;
    }

    /**
     * Set puntoVenta
     *
     * @param boolean $puntoVenta
     * @return Almacen
     */
    public function setPuntoVenta($puntoVenta)
    {
        $this->puntoVenta = $puntoVenta;

        return $this;
    }

    /**
     * Get puntoVenta
     *
     * @return boolean 
     */
    public function getPuntoVenta()
    {
        return $this->puntoVenta;
    }

    /**
     * Set puntoInventario
     *
     * @param boolean $puntoInventario
     * @return Almacen
     */
    public function setPuntoInventario($puntoInventario)
    {
        $this->puntoInventario = $puntoInventario;

        return $this;
    }

    /**
     * Get puntoInventario
     *
     * @return boolean 
     */
    public function getPuntoInventario()
    {
        return $this->puntoInventario;
    }

    /**
     * Set almacenEntidad
     *
     * @param boolean $almacenEntidad
     * @return Almacen
     */
    public function setAlmacenEntidad($almacenEntidad)
    {
        $this->almacenEntidad = $almacenEntidad;

        return $this;
    }

    /**
     * Get almacenEntidad
     *
     * @return boolean 
     */
    public function getAlmacenEntidad()
    {
        return $this->almacenEntidad;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return Almacen
     */
    public function setIdAgrupacion($idAgrupacion)
    {
        $this->idAgrupacion = $idAgrupacion;

        return $this;
    }

    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return Almacen
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }

    /**
     * Set cuadreDiario
     *
     * @param boolean $cuadreDiario
     * @return Almacen
     */
    public function setCuadreDiario($cuadreDiario)
    {
        $this->cuadreDiario = $cuadreDiario;

        return $this;
    }

    /**
     * Get cuadreDiario
     *
     * @return boolean 
     */
    public function getCuadreDiario()
    {
        return $this->cuadreDiario;
    }

    /**
     * Set fechaCuadre
     *
     * @param \DateTime $fechaCuadre
     * @return Almacen
     */
    public function setFechaCuadre($fechaCuadre)
    {
        $this->fechaCuadre = $fechaCuadre;

        return $this;
    }

    /**
     * Get fechaCuadre
     *
     * @return \DateTime 
     */
    public function getFechaCuadre()
    {
        return $this->fechaCuadre;
    }

    /**
     * Set estadoCuadre
     *
     * @param integer $estadoCuadre
     * @return Almacen
     */
    public function setEstadoCuadre($estadoCuadre)
    {
        $this->estadoCuadre = $estadoCuadre;

        return $this;
    }

    /**
     * Get estadoCuadre
     *
     * @return integer 
     */
    public function getEstadoCuadre()
    {
        return $this->estadoCuadre;
    }

    /**
     * Set fechaUltimocuadre
     *
     * @param \DateTime $fechaUltimocuadre
     * @return Almacen
     */
    public function setFechaUltimocuadre($fechaUltimocuadre)
    {
        $this->fechaUltimocuadre = $fechaUltimocuadre;

        return $this;
    }

    /**
     * Get fechaUltimocuadre
     *
     * @return \DateTime 
     */
    public function getFechaUltimocuadre()
    {
        return $this->fechaUltimocuadre;
    }

    /**
     * Set ordenPtoreorder
     *
     * @param boolean $ordenPtoreorder
     * @return Almacen
     */
    public function setOrdenPtoreorder($ordenPtoreorder)
    {
        $this->ordenPtoreorder = $ordenPtoreorder;

        return $this;
    }

    /**
     * Get ordenPtoreorder
     *
     * @return boolean 
     */
    public function getOrdenPtoreorder()
    {
        return $this->ordenPtoreorder;
    }

    /**
     * Set ordenVale
     *
     * @param integer $ordenVale
     * @return Almacen
     */
    public function setOrdenVale($ordenVale)
    {
        $this->ordenVale = $ordenVale;

        return $this;
    }

    /**
     * Get ordenVale
     *
     * @return integer 
     */
    public function getOrdenVale()
    {
        return $this->ordenVale;
    }

    /**
     * Set idInsumo
     *
     * @param string $idInsumo
     * @return Almacen
     */
    public function setIdInsumo($idInsumo)
    {
        $this->idInsumo = $idInsumo;

        return $this;
    }

    /**
     * Get idInsumo
     *
     * @return string 
     */
    public function getIdInsumo()
    {
        return $this->idInsumo;
    }

    /**
     * Set validarDispo
     *
     * @param integer $validarDispo
     * @return Almacen
     */
    public function setValidarDispo($validarDispo)
    {
        $this->validarDispo = $validarDispo;

        return $this;
    }

    /**
     * Get validarDispo
     *
     * @return integer 
     */
    public function getValidarDispo()
    {
        return $this->validarDispo;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return Almacen
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set descCliente
     *
     * @param string $descCliente
     * @return Almacen
     */
    public function setDescCliente($descCliente)
    {
        $this->descCliente = $descCliente;

        return $this;
    }

    /**
     * Get descCliente
     *
     * @return string 
     */
    public function getDescCliente()
    {
        return $this->descCliente;
    }

    /**
     * Set fcierremCuadred
     *
     * @param \DateTime $fcierremCuadred
     * @return Almacen
     */
    public function setFcierremCuadred($fcierremCuadred)
    {
        $this->fcierremCuadred = $fcierremCuadred;

        return $this;
    }

    /**
     * Get fcierremCuadred
     *
     * @return \DateTime 
     */
    public function getFcierremCuadred()
    {
        return $this->fcierremCuadred;
    }

    /**
     * Set cierreApertura
     *
     * @param boolean $cierreApertura
     * @return Almacen
     */
    public function setCierreApertura($cierreApertura)
    {
        $this->cierreApertura = $cierreApertura;

        return $this;
    }

    /**
     * Get cierreApertura
     *
     * @return boolean 
     */
    public function getCierreApertura()
    {
        return $this->cierreApertura;
    }

    /**
     * Set nocaja
     *
     * @param integer $nocaja
     * @return Almacen
     */
    public function setNocaja($nocaja)
    {
        $this->nocaja = $nocaja;

        return $this;
    }

    /**
     * Get nocaja
     *
     * @return integer 
     */
    public function getNocaja()
    {
        return $this->nocaja;
    }

    /**
     * Set modelocaja
     *
     * @param integer $modelocaja
     * @return Almacen
     */
    public function setModelocaja($modelocaja)
    {
        $this->modelocaja = $modelocaja;

        return $this;
    }

    /**
     * Get modelocaja
     *
     * @return integer 
     */
    public function getModelocaja()
    {
        return $this->modelocaja;
    }

    /**
     * Set tipocon
     *
     * @param boolean $tipocon
     * @return Almacen
     */
    public function setTipocon($tipocon)
    {
        $this->tipocon = $tipocon;

        return $this;
    }

    /**
     * Get tipocon
     *
     * @return boolean 
     */
    public function getTipocon()
    {
        return $this->tipocon;
    }

    /**
     * Set nodetelef
     *
     * @param string $nodetelef
     * @return Almacen
     */
    public function setNodetelef($nodetelef)
    {
        $this->nodetelef = $nodetelef;

        return $this;
    }

    /**
     * Get nodetelef
     *
     * @return string 
     */
    public function getNodetelef()
    {
        return $this->nodetelef;
    }

    /**
     * Set txspeed
     *
     * @param integer $txspeed
     * @return Almacen
     */
    public function setTxspeed($txspeed)
    {
        $this->txspeed = $txspeed;

        return $this;
    }

    /**
     * Get txspeed
     *
     * @return integer 
     */
    public function getTxspeed()
    {
        return $this->txspeed;
    }

    /**
     * Set txcom
     *
     * @param integer $txcom
     * @return Almacen
     */
    public function setTxcom($txcom)
    {
        $this->txcom = $txcom;

        return $this;
    }

    /**
     * Get txcom
     *
     * @return integer 
     */
    public function getTxcom()
    {
        return $this->txcom;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return Almacen
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return string 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set descEmpleado
     *
     * @param string $descEmpleado
     * @return Almacen
     */
    public function setDescEmpleado($descEmpleado)
    {
        $this->descEmpleado = $descEmpleado;

        return $this;
    }

    /**
     * Get descEmpleado
     *
     * @return string 
     */
    public function getDescEmpleado()
    {
        return $this->descEmpleado;
    }

    /**
     * Set factura
     *
     * @param string $factura
     * @return Almacen
     */
    public function setFactura($factura)
    {
        $this->factura = $factura;

        return $this;
    }

    /**
     * Get factura
     *
     * @return string 
     */
    public function getFactura()
    {
        return $this->factura;
    }

    /**
     * Set contafac
     *
     * @param integer $contafac
     * @return Almacen
     */
    public function setContafac($contafac)
    {
        $this->contafac = $contafac;

        return $this;
    }

    /**
     * Get contafac
     *
     * @return integer 
     */
    public function getContafac()
    {
        return $this->contafac;
    }

    /**
     * Set incluirencuadre
     *
     * @param boolean $incluirencuadre
     * @return Almacen
     */
    public function setIncluirencuadre($incluirencuadre)
    {
        $this->incluirencuadre = $incluirencuadre;

        return $this;
    }

    /**
     * Get incluirencuadre
     *
     * @return boolean 
     */
    public function getIncluirencuadre()
    {
        return $this->incluirencuadre;
    }

    /**
     * Set paracliente
     *
     * @param integer $paracliente
     * @return Almacen
     */
    public function setParacliente($paracliente)
    {
        $this->paracliente = $paracliente;

        return $this;
    }

    /**
     * Get paracliente
     *
     * @return integer 
     */
    public function getParacliente()
    {
        return $this->paracliente;
    }

    /**
     * Set validaEmpaque
     *
     * @param boolean $validaEmpaque
     * @return Almacen
     */
    public function setValidaEmpaque($validaEmpaque)
    {
        $this->validaEmpaque = $validaEmpaque;

        return $this;
    }

    /**
     * Get validaEmpaque
     *
     * @return boolean 
     */
    public function getValidaEmpaque()
    {
        return $this->validaEmpaque;
    }

    /**
     * Set adespacho
     *
     * @param string $adespacho
     * @return Almacen
     */
    public function setAdespacho($adespacho)
    {
        $this->adespacho = $adespacho;

        return $this;
    }

    /**
     * Get adespacho
     *
     * @return string 
     */
    public function getAdespacho()
    {
        return $this->adespacho;
    }

    /**
     * Set cotizamultiple
     *
     * @param boolean $cotizamultiple
     * @return Almacen
     */
    public function setCotizamultiple($cotizamultiple)
    {
        $this->cotizamultiple = $cotizamultiple;

        return $this;
    }

    /**
     * Get cotizamultiple
     *
     * @return boolean 
     */
    public function getCotizamultiple()
    {
        return $this->cotizamultiple;
    }

    /**
     * Set ipcajas
     *
     * @param string $ipcajas
     * @return Almacen
     */
    public function setIpcajas($ipcajas)
    {
        $this->ipcajas = $ipcajas;

        return $this;
    }

    /**
     * Get ipcajas
     *
     * @return string 
     */
    public function getIpcajas()
    {
        return $this->ipcajas;
    }

    /**
     * Set almacenInsumo
     *
     * @param boolean $almacenInsumo
     * @return Almacen
     */
    public function setAlmacenInsumo($almacenInsumo)
    {
        $this->almacenInsumo = $almacenInsumo;

        return $this;
    }

    /**
     * Get almacenInsumo
     *
     * @return boolean 
     */
    public function getAlmacenInsumo()
    {
        return $this->almacenInsumo;
    }

    /**
     * Set contavale
     *
     * @param integer $contavale
     * @return Almacen
     */
    public function setContavale($contavale)
    {
        $this->contavale = $contavale;

        return $this;
    }

    /**
     * Get contavale
     *
     * @return integer 
     */
    public function getContavale()
    {
        return $this->contavale;
    }

    /**
     * Set vale
     *
     * @param string $vale
     * @return Almacen
     */
    public function setVale($vale)
    {
        $this->vale = $vale;

        return $this;
    }

    /**
     * Get vale
     *
     * @return string 
     */
    public function getVale()
    {
        return $this->vale;
    }
}
