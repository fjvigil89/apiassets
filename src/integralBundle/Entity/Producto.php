<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="Producto")
 * @ORM\Entity
 */
class Producto
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto", type="string", length=255, nullable=false)
     */
    private $descProducto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Entrada", type="datetime", nullable=false)
     */
    private $fechaEntrada;

    /**
     * @var string
     *
     * @ORM\Column(name="UM_Almacen", type="string", length=5, nullable=false)
     */
    private $umAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="UM_Venta", type="string", length=5, nullable=false)
     */
    private $umVenta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Producto_oServicio", type="boolean", nullable=false)
     */
    private $productoOservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=10, nullable=false)
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubCategoria", type="string", length=10, nullable=false)
     */
    private $idSubcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Marca", type="string", length=10, nullable=false)
     */
    private $idMarca;

    /**
     * @var string
     *
     * @ORM\Column(name="Comision", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $comision;

    /**
     * @var string
     *
     * @ORM\Column(name="ImpuestoMB", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $impuestomb;

    /**
     * @var string
     *
     * @ORM\Column(name="Paquete", type="decimal", precision=18, scale=4, nullable=false)
     */
    private $paquete;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Partida", type="string", length=10, nullable=false)
     */
    private $idPartida;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaUMAlmacenMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentaumalmacenmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaUmAlmacenMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentaumalmacenmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_CostoServicioMB", type="integer", nullable=false)
     */
    private $precioCostoserviciomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_CostoServicioMC", type="integer", nullable=false)
     */
    private $precioCostoserviciomc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Asterisco", type="boolean", nullable=false)
     */
    private $asterisco;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Suspendido", type="boolean", nullable=false)
     */
    private $suspendido;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Producto_Terminado", type="boolean", nullable=false)
     */
    private $productoTerminado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ActivoFijo", type="boolean", nullable=false)
     */
    private $activofijo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Util", type="boolean", nullable=false)
     */
    private $util;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecargoMB", type="integer", nullable=false)
     */
    private $recargomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescuentoMB", type="integer", nullable=false)
     */
    private $descuentomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecargoMC", type="integer", nullable=false)
     */
    private $recargomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescuentoMC", type="integer", nullable=false)
     */
    private $descuentomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoRecargoMB", type="smallint", nullable=false)
     */
    private $tiporecargomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoRecargoMC", type="smallint", nullable=false)
     */
    private $tiporecargomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoDescuentoMB", type="smallint", nullable=false)
     */
    private $tipodescuentomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoDescuentoMC", type="smallint", nullable=false)
     */
    private $tipodescuentomc;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL1", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl1;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL2", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl2;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL3", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl3;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL4", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl4;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL5", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl5;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL1", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl1;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL2", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl2;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL3", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl3;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL4", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl4;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL5", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl5;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=255, nullable=false)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Encabezado", type="boolean", nullable=false)
     */
    private $encabezado;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioCostoCalculoMB", type="decimal", precision=18, scale=8, nullable=false)
     */
    private $preciocostocalculomb;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioCostoCalculoMC", type="decimal", precision=18, scale=8, nullable=false)
     */
    private $preciocostocalculomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_ArancelCalculoMB", type="decimal", precision=18, scale=8, nullable=false)
     */
    private $costoArancelcalculomb;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_ArancelCalculoMC", type="decimal", precision=18, scale=8, nullable=false)
     */
    private $costoArancelcalculomc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Seleccionado", type="boolean", nullable=false)
     */
    private $seleccionado;

    /**
     * @var string
     *
     * @ORM\Column(name="DatosTecnicos", type="string", length=3500, nullable=false)
     */
    private $datostecnicos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IncluirenVentas", type="boolean", nullable=false)
     */
    private $incluirenventas;

    /**
     * @var integer
     *
     * @ORM\Column(name="UnidadesporReceta", type="integer", nullable=false)
     */
    private $unidadesporreceta;

    /**
     * @var string
     *
     * @ORM\Column(name="Factor_ConversionAV", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $factorConversionav;

    /**
     * @var string
     *
     * @ORM\Column(name="CodDestino", type="string", length=10, nullable=false)
     */
    private $coddestino;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto_Caja", type="string", length=20, nullable=false)
     */
    private $idProductoCaja;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto_Caja", type="string", length=60, nullable=false)
     */
    private $descProductoCaja;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Producto_Semielaborado", type="boolean", nullable=false)
     */
    private $productoSemielaborado;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL6", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl6;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL7", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl7;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL8", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl8;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL9", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl9;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL10", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl10;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL6", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl6;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL7", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl7;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL8", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl8;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL9", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl9;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL10", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl10;

    /**
     * @var string
     *
     * @ORM\Column(name="Pais", type="string", length=5, nullable=false)
     */
    private $pais;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Certifica_Origen", type="boolean", nullable=false)
     */
    private $certificaOrigen;

    /**
     * @var integer
     *
     * @ORM\Column(name="SimulaPrecio_CostoServicioMB", type="integer", nullable=false)
     */
    private $simulaprecioCostoserviciomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="SimulaPrecio_CostoServicioMC", type="integer", nullable=false)
     */
    private $simulaprecioCostoserviciomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="SimulaUnidadesporReceta", type="integer", nullable=false)
     */
    private $simulaunidadesporreceta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Costo", type="smallint", nullable=false)
     */
    private $tipoCosto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Producto_Excipiente", type="boolean", nullable=false)
     */
    private $productoExcipiente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gasto_comun", type="boolean", nullable=false)
     */
    private $gastoComun;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ServImport", type="boolean", nullable=false)
     */
    private $servimport;

    /**
     * @var integer
     *
     * @ORM\Column(name="AplicarComo", type="smallint", nullable=false)
     */
    private $aplicarcomo;

    /**
     * @var integer
     *
     * @ORM\Column(name="PredMB", type="integer", nullable=false)
     */
    private $predmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="PredMC", type="integer", nullable=false)
     */
    private $predmc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IncCosto", type="boolean", nullable=false)
     */
    private $inccosto;

    /**
     * @var integer
     *
     * @ORM\Column(name="PesoBruto", type="integer", nullable=false)
     */
    private $pesobruto;

    /**
     * @var integer
     *
     * @ORM\Column(name="PesoNeto", type="integer", nullable=false)
     */
    private $pesoneto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Oferta", type="boolean", nullable=false)
     */
    private $oferta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado_Inicial", type="smallint", nullable=false)
     */
    private $estadoInicial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Consigna", type="boolean", nullable=false)
     */
    private $consigna;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_VentaOferUmAlmacenMB", type="integer", nullable=false)
     */
    private $precioVentaoferumalmacenmb;

    /**
     * @var string
     *
     * @ORM\Column(name="SubGrupo", type="string", length=4, nullable=false)
     */
    private $subgrupo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Priorizado", type="boolean", nullable=false)
     */
    private $priorizado;

    /**
     * @var string
     *
     * @ORM\Column(name="FactorEmpaque", type="decimal", precision=12, scale=4, nullable=false)
     */
    private $factorempaque;

    /**
     * @var string
     *
     * @ORM\Column(name="Factor_ConversionAC", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $factorConversionac;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cubicaje", type="integer", nullable=false)
     */
    private $cubicaje;

    /**
     * @var string
     *
     * @ORM\Column(name="Path_Image", type="string", length=255, nullable=false)
     */
    private $pathImage;



    /**
     * Get idProducto
     *
     * @return string 
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set descProducto
     *
     * @param string $descProducto
     * @return Producto
     */
    public function setDescProducto($descProducto)
    {
        $this->descProducto = $descProducto;

        return $this;
    }

    /**
     * Get descProducto
     *
     * @return string 
     */
    public function getDescProducto()
    {
        return $this->descProducto;
    }

    /**
     * Set fechaEntrada
     *
     * @param \DateTime $fechaEntrada
     * @return Producto
     */
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;

        return $this;
    }

    /**
     * Get fechaEntrada
     *
     * @return \DateTime 
     */
    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }

    /**
     * Set umAlmacen
     *
     * @param string $umAlmacen
     * @return Producto
     */
    public function setUmAlmacen($umAlmacen)
    {
        $this->umAlmacen = $umAlmacen;

        return $this;
    }

    /**
     * Get umAlmacen
     *
     * @return string 
     */
    public function getUmAlmacen()
    {
        return $this->umAlmacen;
    }

    /**
     * Set umVenta
     *
     * @param string $umVenta
     * @return Producto
     */
    public function setUmVenta($umVenta)
    {
        $this->umVenta = $umVenta;

        return $this;
    }

    /**
     * Get umVenta
     *
     * @return string 
     */
    public function getUmVenta()
    {
        return $this->umVenta;
    }

    /**
     * Set productoOservicio
     *
     * @param boolean $productoOservicio
     * @return Producto
     */
    public function setProductoOservicio($productoOservicio)
    {
        $this->productoOservicio = $productoOservicio;

        return $this;
    }

    /**
     * Get productoOservicio
     *
     * @return boolean 
     */
    public function getProductoOservicio()
    {
        return $this->productoOservicio;
    }

    /**
     * Set idCategoria
     *
     * @param string $idCategoria
     * @return Producto
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return string 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set idSubcategoria
     *
     * @param string $idSubcategoria
     * @return Producto
     */
    public function setIdSubcategoria($idSubcategoria)
    {
        $this->idSubcategoria = $idSubcategoria;

        return $this;
    }

    /**
     * Get idSubcategoria
     *
     * @return string 
     */
    public function getIdSubcategoria()
    {
        return $this->idSubcategoria;
    }

    /**
     * Set idMarca
     *
     * @param string $idMarca
     * @return Producto
     */
    public function setIdMarca($idMarca)
    {
        $this->idMarca = $idMarca;

        return $this;
    }

    /**
     * Get idMarca
     *
     * @return string 
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }

    /**
     * Set comision
     *
     * @param string $comision
     * @return Producto
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return string 
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set impuestomb
     *
     * @param string $impuestomb
     * @return Producto
     */
    public function setImpuestomb($impuestomb)
    {
        $this->impuestomb = $impuestomb;

        return $this;
    }

    /**
     * Get impuestomb
     *
     * @return string 
     */
    public function getImpuestomb()
    {
        return $this->impuestomb;
    }

    /**
     * Set paquete
     *
     * @param string $paquete
     * @return Producto
     */
    public function setPaquete($paquete)
    {
        $this->paquete = $paquete;

        return $this;
    }

    /**
     * Get paquete
     *
     * @return string 
     */
    public function getPaquete()
    {
        return $this->paquete;
    }

    /**
     * Set idPartida
     *
     * @param string $idPartida
     * @return Producto
     */
    public function setIdPartida($idPartida)
    {
        $this->idPartida = $idPartida;

        return $this;
    }

    /**
     * Get idPartida
     *
     * @return string 
     */
    public function getIdPartida()
    {
        return $this->idPartida;
    }

    /**
     * Set precioVentaumalmacenmb
     *
     * @param string $precioVentaumalmacenmb
     * @return Producto
     */
    public function setPrecioVentaumalmacenmb($precioVentaumalmacenmb)
    {
        $this->precioVentaumalmacenmb = $precioVentaumalmacenmb;

        return $this;
    }

    /**
     * Get precioVentaumalmacenmb
     *
     * @return string 
     */
    public function getPrecioVentaumalmacenmb()
    {
        return $this->precioVentaumalmacenmb;
    }

    /**
     * Set precioVentaumalmacenmc
     *
     * @param string $precioVentaumalmacenmc
     * @return Producto
     */
    public function setPrecioVentaumalmacenmc($precioVentaumalmacenmc)
    {
        $this->precioVentaumalmacenmc = $precioVentaumalmacenmc;

        return $this;
    }

    /**
     * Get precioVentaumalmacenmc
     *
     * @return string 
     */
    public function getPrecioVentaumalmacenmc()
    {
        return $this->precioVentaumalmacenmc;
    }

    /**
     * Set precioCostoserviciomb
     *
     * @param integer $precioCostoserviciomb
     * @return Producto
     */
    public function setPrecioCostoserviciomb($precioCostoserviciomb)
    {
        $this->precioCostoserviciomb = $precioCostoserviciomb;

        return $this;
    }

    /**
     * Get precioCostoserviciomb
     *
     * @return integer 
     */
    public function getPrecioCostoserviciomb()
    {
        return $this->precioCostoserviciomb;
    }

    /**
     * Set precioCostoserviciomc
     *
     * @param integer $precioCostoserviciomc
     * @return Producto
     */
    public function setPrecioCostoserviciomc($precioCostoserviciomc)
    {
        $this->precioCostoserviciomc = $precioCostoserviciomc;

        return $this;
    }

    /**
     * Get precioCostoserviciomc
     *
     * @return integer 
     */
    public function getPrecioCostoserviciomc()
    {
        return $this->precioCostoserviciomc;
    }

    /**
     * Set asterisco
     *
     * @param boolean $asterisco
     * @return Producto
     */
    public function setAsterisco($asterisco)
    {
        $this->asterisco = $asterisco;

        return $this;
    }

    /**
     * Get asterisco
     *
     * @return boolean 
     */
    public function getAsterisco()
    {
        return $this->asterisco;
    }

    /**
     * Set suspendido
     *
     * @param boolean $suspendido
     * @return Producto
     */
    public function setSuspendido($suspendido)
    {
        $this->suspendido = $suspendido;

        return $this;
    }

    /**
     * Get suspendido
     *
     * @return boolean 
     */
    public function getSuspendido()
    {
        return $this->suspendido;
    }

    /**
     * Set productoTerminado
     *
     * @param boolean $productoTerminado
     * @return Producto
     */
    public function setProductoTerminado($productoTerminado)
    {
        $this->productoTerminado = $productoTerminado;

        return $this;
    }

    /**
     * Get productoTerminado
     *
     * @return boolean 
     */
    public function getProductoTerminado()
    {
        return $this->productoTerminado;
    }

    /**
     * Set activofijo
     *
     * @param boolean $activofijo
     * @return Producto
     */
    public function setActivofijo($activofijo)
    {
        $this->activofijo = $activofijo;

        return $this;
    }

    /**
     * Get activofijo
     *
     * @return boolean 
     */
    public function getActivofijo()
    {
        return $this->activofijo;
    }

    /**
     * Set util
     *
     * @param boolean $util
     * @return Producto
     */
    public function setUtil($util)
    {
        $this->util = $util;

        return $this;
    }

    /**
     * Get util
     *
     * @return boolean 
     */
    public function getUtil()
    {
        return $this->util;
    }

    /**
     * Set recargomb
     *
     * @param integer $recargomb
     * @return Producto
     */
    public function setRecargomb($recargomb)
    {
        $this->recargomb = $recargomb;

        return $this;
    }

    /**
     * Get recargomb
     *
     * @return integer 
     */
    public function getRecargomb()
    {
        return $this->recargomb;
    }

    /**
     * Set descuentomb
     *
     * @param integer $descuentomb
     * @return Producto
     */
    public function setDescuentomb($descuentomb)
    {
        $this->descuentomb = $descuentomb;

        return $this;
    }

    /**
     * Get descuentomb
     *
     * @return integer 
     */
    public function getDescuentomb()
    {
        return $this->descuentomb;
    }

    /**
     * Set recargomc
     *
     * @param integer $recargomc
     * @return Producto
     */
    public function setRecargomc($recargomc)
    {
        $this->recargomc = $recargomc;

        return $this;
    }

    /**
     * Get recargomc
     *
     * @return integer 
     */
    public function getRecargomc()
    {
        return $this->recargomc;
    }

    /**
     * Set descuentomc
     *
     * @param integer $descuentomc
     * @return Producto
     */
    public function setDescuentomc($descuentomc)
    {
        $this->descuentomc = $descuentomc;

        return $this;
    }

    /**
     * Get descuentomc
     *
     * @return integer 
     */
    public function getDescuentomc()
    {
        return $this->descuentomc;
    }

    /**
     * Set tiporecargomb
     *
     * @param integer $tiporecargomb
     * @return Producto
     */
    public function setTiporecargomb($tiporecargomb)
    {
        $this->tiporecargomb = $tiporecargomb;

        return $this;
    }

    /**
     * Get tiporecargomb
     *
     * @return integer 
     */
    public function getTiporecargomb()
    {
        return $this->tiporecargomb;
    }

    /**
     * Set tiporecargomc
     *
     * @param integer $tiporecargomc
     * @return Producto
     */
    public function setTiporecargomc($tiporecargomc)
    {
        $this->tiporecargomc = $tiporecargomc;

        return $this;
    }

    /**
     * Get tiporecargomc
     *
     * @return integer 
     */
    public function getTiporecargomc()
    {
        return $this->tiporecargomc;
    }

    /**
     * Set tipodescuentomb
     *
     * @param integer $tipodescuentomb
     * @return Producto
     */
    public function setTipodescuentomb($tipodescuentomb)
    {
        $this->tipodescuentomb = $tipodescuentomb;

        return $this;
    }

    /**
     * Get tipodescuentomb
     *
     * @return integer 
     */
    public function getTipodescuentomb()
    {
        return $this->tipodescuentomb;
    }

    /**
     * Set tipodescuentomc
     *
     * @param integer $tipodescuentomc
     * @return Producto
     */
    public function setTipodescuentomc($tipodescuentomc)
    {
        $this->tipodescuentomc = $tipodescuentomc;

        return $this;
    }

    /**
     * Get tipodescuentomc
     *
     * @return integer 
     */
    public function getTipodescuentomc()
    {
        return $this->tipodescuentomc;
    }

    /**
     * Set preciovenmbl1
     *
     * @param string $preciovenmbl1
     * @return Producto
     */
    public function setPreciovenmbl1($preciovenmbl1)
    {
        $this->preciovenmbl1 = $preciovenmbl1;

        return $this;
    }

    /**
     * Get preciovenmbl1
     *
     * @return string 
     */
    public function getPreciovenmbl1()
    {
        return $this->preciovenmbl1;
    }

    /**
     * Set preciovenmbl2
     *
     * @param string $preciovenmbl2
     * @return Producto
     */
    public function setPreciovenmbl2($preciovenmbl2)
    {
        $this->preciovenmbl2 = $preciovenmbl2;

        return $this;
    }

    /**
     * Get preciovenmbl2
     *
     * @return string 
     */
    public function getPreciovenmbl2()
    {
        return $this->preciovenmbl2;
    }

    /**
     * Set preciovenmbl3
     *
     * @param string $preciovenmbl3
     * @return Producto
     */
    public function setPreciovenmbl3($preciovenmbl3)
    {
        $this->preciovenmbl3 = $preciovenmbl3;

        return $this;
    }

    /**
     * Get preciovenmbl3
     *
     * @return string 
     */
    public function getPreciovenmbl3()
    {
        return $this->preciovenmbl3;
    }

    /**
     * Set preciovenmbl4
     *
     * @param string $preciovenmbl4
     * @return Producto
     */
    public function setPreciovenmbl4($preciovenmbl4)
    {
        $this->preciovenmbl4 = $preciovenmbl4;

        return $this;
    }

    /**
     * Get preciovenmbl4
     *
     * @return string 
     */
    public function getPreciovenmbl4()
    {
        return $this->preciovenmbl4;
    }

    /**
     * Set preciovenmbl5
     *
     * @param string $preciovenmbl5
     * @return Producto
     */
    public function setPreciovenmbl5($preciovenmbl5)
    {
        $this->preciovenmbl5 = $preciovenmbl5;

        return $this;
    }

    /**
     * Get preciovenmbl5
     *
     * @return string 
     */
    public function getPreciovenmbl5()
    {
        return $this->preciovenmbl5;
    }

    /**
     * Set preciovenmcl1
     *
     * @param string $preciovenmcl1
     * @return Producto
     */
    public function setPreciovenmcl1($preciovenmcl1)
    {
        $this->preciovenmcl1 = $preciovenmcl1;

        return $this;
    }

    /**
     * Get preciovenmcl1
     *
     * @return string 
     */
    public function getPreciovenmcl1()
    {
        return $this->preciovenmcl1;
    }

    /**
     * Set preciovenmcl2
     *
     * @param string $preciovenmcl2
     * @return Producto
     */
    public function setPreciovenmcl2($preciovenmcl2)
    {
        $this->preciovenmcl2 = $preciovenmcl2;

        return $this;
    }

    /**
     * Get preciovenmcl2
     *
     * @return string 
     */
    public function getPreciovenmcl2()
    {
        return $this->preciovenmcl2;
    }

    /**
     * Set preciovenmcl3
     *
     * @param string $preciovenmcl3
     * @return Producto
     */
    public function setPreciovenmcl3($preciovenmcl3)
    {
        $this->preciovenmcl3 = $preciovenmcl3;

        return $this;
    }

    /**
     * Get preciovenmcl3
     *
     * @return string 
     */
    public function getPreciovenmcl3()
    {
        return $this->preciovenmcl3;
    }

    /**
     * Set preciovenmcl4
     *
     * @param string $preciovenmcl4
     * @return Producto
     */
    public function setPreciovenmcl4($preciovenmcl4)
    {
        $this->preciovenmcl4 = $preciovenmcl4;

        return $this;
    }

    /**
     * Get preciovenmcl4
     *
     * @return string 
     */
    public function getPreciovenmcl4()
    {
        return $this->preciovenmcl4;
    }

    /**
     * Set preciovenmcl5
     *
     * @param string $preciovenmcl5
     * @return Producto
     */
    public function setPreciovenmcl5($preciovenmcl5)
    {
        $this->preciovenmcl5 = $preciovenmcl5;

        return $this;
    }

    /**
     * Get preciovenmcl5
     *
     * @return string 
     */
    public function getPreciovenmcl5()
    {
        return $this->preciovenmcl5;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return Producto
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set encabezado
     *
     * @param boolean $encabezado
     * @return Producto
     */
    public function setEncabezado($encabezado)
    {
        $this->encabezado = $encabezado;

        return $this;
    }

    /**
     * Get encabezado
     *
     * @return boolean 
     */
    public function getEncabezado()
    {
        return $this->encabezado;
    }

    /**
     * Set preciocostocalculomb
     *
     * @param string $preciocostocalculomb
     * @return Producto
     */
    public function setPreciocostocalculomb($preciocostocalculomb)
    {
        $this->preciocostocalculomb = $preciocostocalculomb;

        return $this;
    }

    /**
     * Get preciocostocalculomb
     *
     * @return string 
     */
    public function getPreciocostocalculomb()
    {
        return $this->preciocostocalculomb;
    }

    /**
     * Set preciocostocalculomc
     *
     * @param string $preciocostocalculomc
     * @return Producto
     */
    public function setPreciocostocalculomc($preciocostocalculomc)
    {
        $this->preciocostocalculomc = $preciocostocalculomc;

        return $this;
    }

    /**
     * Get preciocostocalculomc
     *
     * @return string 
     */
    public function getPreciocostocalculomc()
    {
        return $this->preciocostocalculomc;
    }

    /**
     * Set costoArancelcalculomb
     *
     * @param string $costoArancelcalculomb
     * @return Producto
     */
    public function setCostoArancelcalculomb($costoArancelcalculomb)
    {
        $this->costoArancelcalculomb = $costoArancelcalculomb;

        return $this;
    }

    /**
     * Get costoArancelcalculomb
     *
     * @return string 
     */
    public function getCostoArancelcalculomb()
    {
        return $this->costoArancelcalculomb;
    }

    /**
     * Set costoArancelcalculomc
     *
     * @param string $costoArancelcalculomc
     * @return Producto
     */
    public function setCostoArancelcalculomc($costoArancelcalculomc)
    {
        $this->costoArancelcalculomc = $costoArancelcalculomc;

        return $this;
    }

    /**
     * Get costoArancelcalculomc
     *
     * @return string 
     */
    public function getCostoArancelcalculomc()
    {
        return $this->costoArancelcalculomc;
    }

    /**
     * Set seleccionado
     *
     * @param boolean $seleccionado
     * @return Producto
     */
    public function setSeleccionado($seleccionado)
    {
        $this->seleccionado = $seleccionado;

        return $this;
    }

    /**
     * Get seleccionado
     *
     * @return boolean 
     */
    public function getSeleccionado()
    {
        return $this->seleccionado;
    }

    /**
     * Set datostecnicos
     *
     * @param string $datostecnicos
     * @return Producto
     */
    public function setDatostecnicos($datostecnicos)
    {
        $this->datostecnicos = $datostecnicos;

        return $this;
    }

    /**
     * Get datostecnicos
     *
     * @return string 
     */
    public function getDatostecnicos()
    {
        return $this->datostecnicos;
    }

    /**
     * Set incluirenventas
     *
     * @param boolean $incluirenventas
     * @return Producto
     */
    public function setIncluirenventas($incluirenventas)
    {
        $this->incluirenventas = $incluirenventas;

        return $this;
    }

    /**
     * Get incluirenventas
     *
     * @return boolean 
     */
    public function getIncluirenventas()
    {
        return $this->incluirenventas;
    }

    /**
     * Set unidadesporreceta
     *
     * @param integer $unidadesporreceta
     * @return Producto
     */
    public function setUnidadesporreceta($unidadesporreceta)
    {
        $this->unidadesporreceta = $unidadesporreceta;

        return $this;
    }

    /**
     * Get unidadesporreceta
     *
     * @return integer 
     */
    public function getUnidadesporreceta()
    {
        return $this->unidadesporreceta;
    }

    /**
     * Set factorConversionav
     *
     * @param string $factorConversionav
     * @return Producto
     */
    public function setFactorConversionav($factorConversionav)
    {
        $this->factorConversionav = $factorConversionav;

        return $this;
    }

    /**
     * Get factorConversionav
     *
     * @return string 
     */
    public function getFactorConversionav()
    {
        return $this->factorConversionav;
    }

    /**
     * Set coddestino
     *
     * @param string $coddestino
     * @return Producto
     */
    public function setCoddestino($coddestino)
    {
        $this->coddestino = $coddestino;

        return $this;
    }

    /**
     * Get coddestino
     *
     * @return string 
     */
    public function getCoddestino()
    {
        return $this->coddestino;
    }

    /**
     * Set idProductoCaja
     *
     * @param string $idProductoCaja
     * @return Producto
     */
    public function setIdProductoCaja($idProductoCaja)
    {
        $this->idProductoCaja = $idProductoCaja;

        return $this;
    }

    /**
     * Get idProductoCaja
     *
     * @return string 
     */
    public function getIdProductoCaja()
    {
        return $this->idProductoCaja;
    }

    /**
     * Set descProductoCaja
     *
     * @param string $descProductoCaja
     * @return Producto
     */
    public function setDescProductoCaja($descProductoCaja)
    {
        $this->descProductoCaja = $descProductoCaja;

        return $this;
    }

    /**
     * Get descProductoCaja
     *
     * @return string 
     */
    public function getDescProductoCaja()
    {
        return $this->descProductoCaja;
    }

    /**
     * Set productoSemielaborado
     *
     * @param boolean $productoSemielaborado
     * @return Producto
     */
    public function setProductoSemielaborado($productoSemielaborado)
    {
        $this->productoSemielaborado = $productoSemielaborado;

        return $this;
    }

    /**
     * Get productoSemielaborado
     *
     * @return boolean 
     */
    public function getProductoSemielaborado()
    {
        return $this->productoSemielaborado;
    }

    /**
     * Set preciovenmbl6
     *
     * @param string $preciovenmbl6
     * @return Producto
     */
    public function setPreciovenmbl6($preciovenmbl6)
    {
        $this->preciovenmbl6 = $preciovenmbl6;

        return $this;
    }

    /**
     * Get preciovenmbl6
     *
     * @return string 
     */
    public function getPreciovenmbl6()
    {
        return $this->preciovenmbl6;
    }

    /**
     * Set preciovenmbl7
     *
     * @param string $preciovenmbl7
     * @return Producto
     */
    public function setPreciovenmbl7($preciovenmbl7)
    {
        $this->preciovenmbl7 = $preciovenmbl7;

        return $this;
    }

    /**
     * Get preciovenmbl7
     *
     * @return string 
     */
    public function getPreciovenmbl7()
    {
        return $this->preciovenmbl7;
    }

    /**
     * Set preciovenmbl8
     *
     * @param string $preciovenmbl8
     * @return Producto
     */
    public function setPreciovenmbl8($preciovenmbl8)
    {
        $this->preciovenmbl8 = $preciovenmbl8;

        return $this;
    }

    /**
     * Get preciovenmbl8
     *
     * @return string 
     */
    public function getPreciovenmbl8()
    {
        return $this->preciovenmbl8;
    }

    /**
     * Set preciovenmbl9
     *
     * @param string $preciovenmbl9
     * @return Producto
     */
    public function setPreciovenmbl9($preciovenmbl9)
    {
        $this->preciovenmbl9 = $preciovenmbl9;

        return $this;
    }

    /**
     * Get preciovenmbl9
     *
     * @return string 
     */
    public function getPreciovenmbl9()
    {
        return $this->preciovenmbl9;
    }

    /**
     * Set preciovenmbl10
     *
     * @param string $preciovenmbl10
     * @return Producto
     */
    public function setPreciovenmbl10($preciovenmbl10)
    {
        $this->preciovenmbl10 = $preciovenmbl10;

        return $this;
    }

    /**
     * Get preciovenmbl10
     *
     * @return string 
     */
    public function getPreciovenmbl10()
    {
        return $this->preciovenmbl10;
    }

    /**
     * Set preciovenmcl6
     *
     * @param string $preciovenmcl6
     * @return Producto
     */
    public function setPreciovenmcl6($preciovenmcl6)
    {
        $this->preciovenmcl6 = $preciovenmcl6;

        return $this;
    }

    /**
     * Get preciovenmcl6
     *
     * @return string 
     */
    public function getPreciovenmcl6()
    {
        return $this->preciovenmcl6;
    }

    /**
     * Set preciovenmcl7
     *
     * @param string $preciovenmcl7
     * @return Producto
     */
    public function setPreciovenmcl7($preciovenmcl7)
    {
        $this->preciovenmcl7 = $preciovenmcl7;

        return $this;
    }

    /**
     * Get preciovenmcl7
     *
     * @return string 
     */
    public function getPreciovenmcl7()
    {
        return $this->preciovenmcl7;
    }

    /**
     * Set preciovenmcl8
     *
     * @param string $preciovenmcl8
     * @return Producto
     */
    public function setPreciovenmcl8($preciovenmcl8)
    {
        $this->preciovenmcl8 = $preciovenmcl8;

        return $this;
    }

    /**
     * Get preciovenmcl8
     *
     * @return string 
     */
    public function getPreciovenmcl8()
    {
        return $this->preciovenmcl8;
    }

    /**
     * Set preciovenmcl9
     *
     * @param string $preciovenmcl9
     * @return Producto
     */
    public function setPreciovenmcl9($preciovenmcl9)
    {
        $this->preciovenmcl9 = $preciovenmcl9;

        return $this;
    }

    /**
     * Get preciovenmcl9
     *
     * @return string 
     */
    public function getPreciovenmcl9()
    {
        return $this->preciovenmcl9;
    }

    /**
     * Set preciovenmcl10
     *
     * @param string $preciovenmcl10
     * @return Producto
     */
    public function setPreciovenmcl10($preciovenmcl10)
    {
        $this->preciovenmcl10 = $preciovenmcl10;

        return $this;
    }

    /**
     * Get preciovenmcl10
     *
     * @return string 
     */
    public function getPreciovenmcl10()
    {
        return $this->preciovenmcl10;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return Producto
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set certificaOrigen
     *
     * @param boolean $certificaOrigen
     * @return Producto
     */
    public function setCertificaOrigen($certificaOrigen)
    {
        $this->certificaOrigen = $certificaOrigen;

        return $this;
    }

    /**
     * Get certificaOrigen
     *
     * @return boolean 
     */
    public function getCertificaOrigen()
    {
        return $this->certificaOrigen;
    }

    /**
     * Set simulaprecioCostoserviciomb
     *
     * @param integer $simulaprecioCostoserviciomb
     * @return Producto
     */
    public function setSimulaprecioCostoserviciomb($simulaprecioCostoserviciomb)
    {
        $this->simulaprecioCostoserviciomb = $simulaprecioCostoserviciomb;

        return $this;
    }

    /**
     * Get simulaprecioCostoserviciomb
     *
     * @return integer 
     */
    public function getSimulaprecioCostoserviciomb()
    {
        return $this->simulaprecioCostoserviciomb;
    }

    /**
     * Set simulaprecioCostoserviciomc
     *
     * @param integer $simulaprecioCostoserviciomc
     * @return Producto
     */
    public function setSimulaprecioCostoserviciomc($simulaprecioCostoserviciomc)
    {
        $this->simulaprecioCostoserviciomc = $simulaprecioCostoserviciomc;

        return $this;
    }

    /**
     * Get simulaprecioCostoserviciomc
     *
     * @return integer 
     */
    public function getSimulaprecioCostoserviciomc()
    {
        return $this->simulaprecioCostoserviciomc;
    }

    /**
     * Set simulaunidadesporreceta
     *
     * @param integer $simulaunidadesporreceta
     * @return Producto
     */
    public function setSimulaunidadesporreceta($simulaunidadesporreceta)
    {
        $this->simulaunidadesporreceta = $simulaunidadesporreceta;

        return $this;
    }

    /**
     * Get simulaunidadesporreceta
     *
     * @return integer 
     */
    public function getSimulaunidadesporreceta()
    {
        return $this->simulaunidadesporreceta;
    }

    /**
     * Set tipoCosto
     *
     * @param integer $tipoCosto
     * @return Producto
     */
    public function setTipoCosto($tipoCosto)
    {
        $this->tipoCosto = $tipoCosto;

        return $this;
    }

    /**
     * Get tipoCosto
     *
     * @return integer 
     */
    public function getTipoCosto()
    {
        return $this->tipoCosto;
    }

    /**
     * Set productoExcipiente
     *
     * @param boolean $productoExcipiente
     * @return Producto
     */
    public function setProductoExcipiente($productoExcipiente)
    {
        $this->productoExcipiente = $productoExcipiente;

        return $this;
    }

    /**
     * Get productoExcipiente
     *
     * @return boolean 
     */
    public function getProductoExcipiente()
    {
        return $this->productoExcipiente;
    }

    /**
     * Set gastoComun
     *
     * @param boolean $gastoComun
     * @return Producto
     */
    public function setGastoComun($gastoComun)
    {
        $this->gastoComun = $gastoComun;

        return $this;
    }

    /**
     * Get gastoComun
     *
     * @return boolean 
     */
    public function getGastoComun()
    {
        return $this->gastoComun;
    }

    /**
     * Set servimport
     *
     * @param boolean $servimport
     * @return Producto
     */
    public function setServimport($servimport)
    {
        $this->servimport = $servimport;

        return $this;
    }

    /**
     * Get servimport
     *
     * @return boolean 
     */
    public function getServimport()
    {
        return $this->servimport;
    }

    /**
     * Set aplicarcomo
     *
     * @param integer $aplicarcomo
     * @return Producto
     */
    public function setAplicarcomo($aplicarcomo)
    {
        $this->aplicarcomo = $aplicarcomo;

        return $this;
    }

    /**
     * Get aplicarcomo
     *
     * @return integer 
     */
    public function getAplicarcomo()
    {
        return $this->aplicarcomo;
    }

    /**
     * Set predmb
     *
     * @param integer $predmb
     * @return Producto
     */
    public function setPredmb($predmb)
    {
        $this->predmb = $predmb;

        return $this;
    }

    /**
     * Get predmb
     *
     * @return integer 
     */
    public function getPredmb()
    {
        return $this->predmb;
    }

    /**
     * Set predmc
     *
     * @param integer $predmc
     * @return Producto
     */
    public function setPredmc($predmc)
    {
        $this->predmc = $predmc;

        return $this;
    }

    /**
     * Get predmc
     *
     * @return integer 
     */
    public function getPredmc()
    {
        return $this->predmc;
    }

    /**
     * Set inccosto
     *
     * @param boolean $inccosto
     * @return Producto
     */
    public function setInccosto($inccosto)
    {
        $this->inccosto = $inccosto;

        return $this;
    }

    /**
     * Get inccosto
     *
     * @return boolean 
     */
    public function getInccosto()
    {
        return $this->inccosto;
    }

    /**
     * Set pesobruto
     *
     * @param integer $pesobruto
     * @return Producto
     */
    public function setPesobruto($pesobruto)
    {
        $this->pesobruto = $pesobruto;

        return $this;
    }

    /**
     * Get pesobruto
     *
     * @return integer 
     */
    public function getPesobruto()
    {
        return $this->pesobruto;
    }

    /**
     * Set pesoneto
     *
     * @param integer $pesoneto
     * @return Producto
     */
    public function setPesoneto($pesoneto)
    {
        $this->pesoneto = $pesoneto;

        return $this;
    }

    /**
     * Get pesoneto
     *
     * @return integer 
     */
    public function getPesoneto()
    {
        return $this->pesoneto;
    }

    /**
     * Set oferta
     *
     * @param boolean $oferta
     * @return Producto
     */
    public function setOferta($oferta)
    {
        $this->oferta = $oferta;

        return $this;
    }

    /**
     * Get oferta
     *
     * @return boolean 
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * Set estadoInicial
     *
     * @param integer $estadoInicial
     * @return Producto
     */
    public function setEstadoInicial($estadoInicial)
    {
        $this->estadoInicial = $estadoInicial;

        return $this;
    }

    /**
     * Get estadoInicial
     *
     * @return integer 
     */
    public function getEstadoInicial()
    {
        return $this->estadoInicial;
    }

    /**
     * Set consigna
     *
     * @param boolean $consigna
     * @return Producto
     */
    public function setConsigna($consigna)
    {
        $this->consigna = $consigna;

        return $this;
    }

    /**
     * Get consigna
     *
     * @return boolean 
     */
    public function getConsigna()
    {
        return $this->consigna;
    }

    /**
     * Set precioVentaoferumalmacenmb
     *
     * @param integer $precioVentaoferumalmacenmb
     * @return Producto
     */
    public function setPrecioVentaoferumalmacenmb($precioVentaoferumalmacenmb)
    {
        $this->precioVentaoferumalmacenmb = $precioVentaoferumalmacenmb;

        return $this;
    }

    /**
     * Get precioVentaoferumalmacenmb
     *
     * @return integer 
     */
    public function getPrecioVentaoferumalmacenmb()
    {
        return $this->precioVentaoferumalmacenmb;
    }

    /**
     * Set subgrupo
     *
     * @param string $subgrupo
     * @return Producto
     */
    public function setSubgrupo($subgrupo)
    {
        $this->subgrupo = $subgrupo;

        return $this;
    }

    /**
     * Get subgrupo
     *
     * @return string 
     */
    public function getSubgrupo()
    {
        return $this->subgrupo;
    }

    /**
     * Set priorizado
     *
     * @param boolean $priorizado
     * @return Producto
     */
    public function setPriorizado($priorizado)
    {
        $this->priorizado = $priorizado;

        return $this;
    }

    /**
     * Get priorizado
     *
     * @return boolean 
     */
    public function getPriorizado()
    {
        return $this->priorizado;
    }

    /**
     * Set factorempaque
     *
     * @param string $factorempaque
     * @return Producto
     */
    public function setFactorempaque($factorempaque)
    {
        $this->factorempaque = $factorempaque;

        return $this;
    }

    /**
     * Get factorempaque
     *
     * @return string 
     */
    public function getFactorempaque()
    {
        return $this->factorempaque;
    }

    /**
     * Set factorConversionac
     *
     * @param string $factorConversionac
     * @return Producto
     */
    public function setFactorConversionac($factorConversionac)
    {
        $this->factorConversionac = $factorConversionac;

        return $this;
    }

    /**
     * Get factorConversionac
     *
     * @return string 
     */
    public function getFactorConversionac()
    {
        return $this->factorConversionac;
    }

    /**
     * Set cubicaje
     *
     * @param integer $cubicaje
     * @return Producto
     */
    public function setCubicaje($cubicaje)
    {
        $this->cubicaje = $cubicaje;

        return $this;
    }

    /**
     * Get cubicaje
     *
     * @return integer 
     */
    public function getCubicaje()
    {
        return $this->cubicaje;
    }

    /**
     * Set pathImage
     *
     * @param string $pathImage
     * @return Producto
     */
    public function setPathImage($pathImage)
    {
        $this->pathImage = $pathImage;

        return $this;
    }

    /**
     * Get pathImage
     *
     * @return string 
     */
    public function getPathImage()
    {
        return $this->pathImage;
    }
}
