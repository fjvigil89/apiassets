<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetalleDevolucion
 *
 * @ORM\Table(name="RH_Detalle_Devolucion")
 * @ORM\Entity
 */
class RhDetalleDevolucion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Devolucion", type="integer", nullable=false)
     */
    private $idDevolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Devolucion", type="smallint", nullable=false)
     */
    private $anoDevolucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="smallint", nullable=false)
     */
    private $items;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Lote", type="string", length=20, nullable=false)
     */
    private $idLote;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto", type="string", length=255, nullable=false)
     */
    private $descProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Um_Almacen", type="string", length=5, nullable=false)
     */
    private $umAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Devuelta", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidadDevuelta;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Original", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidadOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_DocMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoDocmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_DocMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoDocmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_NuevoMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoNuevomb;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_NuevoMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoNuevomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteDoc_MB", type="integer", nullable=false)
     */
    private $importedocMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteDoc_MC", type="integer", nullable=false)
     */
    private $importedocMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteCosto_MB", type="integer", nullable=false)
     */
    private $importecostoMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteCosto_MC", type="integer", nullable=false)
     */
    private $importecostoMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_MB", type="integer", nullable=false)
     */
    private $importeMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_MC", type="integer", nullable=false)
     */
    private $importeMc;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_FacMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoFacmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_FacMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoFacmc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Encabezado_c", type="boolean", nullable=false)
     */
    private $encabezadoC;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Producto_Terminado_c", type="boolean", nullable=false)
     */
    private $productoTerminadoC;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Producto_OServicio_c", type="boolean", nullable=false)
     */
    private $productoOservicioC;

    /**
     * @var string
     *
     * @ORM\Column(name="Impuesto", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $impuesto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Impuesto", type="integer", nullable=false)
     */
    private $importeImpuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="Comision", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $comision;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Comision", type="integer", nullable=false)
     */
    private $importeComision;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_OriginalMB", type="integer", nullable=false)
     */
    private $importeOriginalmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_OriginalMC", type="integer", nullable=false)
     */
    private $importeOriginalmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemsComp", type="smallint", nullable=false)
     */
    private $itemscomp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=20, nullable=false)
     */
    private $idActivofijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_RecargoMB", type="integer", nullable=false)
     */
    private $importeRecargomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_RecargoMC", type="integer", nullable=false)
     */
    private $importeRecargomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_DesctoMB", type="integer", nullable=false)
     */
    private $importeDesctomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_DesctoMC", type="integer", nullable=false)
     */
    private $importeDesctomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_ArancelMB", type="integer", nullable=false)
     */
    private $importeArancelmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_ArancelMC", type="integer", nullable=false)
     */
    private $importeArancelmc;

    /**
     * @var string
     *
     * @ORM\Column(name="factor_Conversion", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $factorConversion;

    /**
     * @var string
     *
     * @ORM\Column(name="Existencia", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $existencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemLink", type="bigint", nullable=false)
     */
    private $itemlink;



    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set idDevolucion
     *
     * @param integer $idDevolucion
     * @return RhDetalleDevolucion
     */
    public function setIdDevolucion($idDevolucion)
    {
        $this->idDevolucion = $idDevolucion;

        return $this;
    }

    /**
     * Get idDevolucion
     *
     * @return integer 
     */
    public function getIdDevolucion()
    {
        return $this->idDevolucion;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return RhDetalleDevolucion
     */
    public function setIdAlmacen($idAlmacen)
    {
        $this->idAlmacen = $idAlmacen;

        return $this;
    }

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
     * Set anoDevolucion
     *
     * @param integer $anoDevolucion
     * @return RhDetalleDevolucion
     */
    public function setAnoDevolucion($anoDevolucion)
    {
        $this->anoDevolucion = $anoDevolucion;

        return $this;
    }

    /**
     * Get anoDevolucion
     *
     * @return integer 
     */
    public function getAnoDevolucion()
    {
        return $this->anoDevolucion;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return RhDetalleDevolucion
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get items
     *
     * @return integer 
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return RhDetalleDevolucion
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

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
     * Set idLote
     *
     * @param string $idLote
     * @return RhDetalleDevolucion
     */
    public function setIdLote($idLote)
    {
        $this->idLote = $idLote;

        return $this;
    }

    /**
     * Get idLote
     *
     * @return string 
     */
    public function getIdLote()
    {
        return $this->idLote;
    }

    /**
     * Set descProducto
     *
     * @param string $descProducto
     * @return RhDetalleDevolucion
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
     * Set umAlmacen
     *
     * @param string $umAlmacen
     * @return RhDetalleDevolucion
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
     * Set cantidadDevuelta
     *
     * @param string $cantidadDevuelta
     * @return RhDetalleDevolucion
     */
    public function setCantidadDevuelta($cantidadDevuelta)
    {
        $this->cantidadDevuelta = $cantidadDevuelta;

        return $this;
    }

    /**
     * Get cantidadDevuelta
     *
     * @return string 
     */
    public function getCantidadDevuelta()
    {
        return $this->cantidadDevuelta;
    }

    /**
     * Set cantidadOriginal
     *
     * @param string $cantidadOriginal
     * @return RhDetalleDevolucion
     */
    public function setCantidadOriginal($cantidadOriginal)
    {
        $this->cantidadOriginal = $cantidadOriginal;

        return $this;
    }

    /**
     * Get cantidadOriginal
     *
     * @return string 
     */
    public function getCantidadOriginal()
    {
        return $this->cantidadOriginal;
    }

    /**
     * Set costoDocmb
     *
     * @param string $costoDocmb
     * @return RhDetalleDevolucion
     */
    public function setCostoDocmb($costoDocmb)
    {
        $this->costoDocmb = $costoDocmb;

        return $this;
    }

    /**
     * Get costoDocmb
     *
     * @return string 
     */
    public function getCostoDocmb()
    {
        return $this->costoDocmb;
    }

    /**
     * Set costoDocmc
     *
     * @param string $costoDocmc
     * @return RhDetalleDevolucion
     */
    public function setCostoDocmc($costoDocmc)
    {
        $this->costoDocmc = $costoDocmc;

        return $this;
    }

    /**
     * Get costoDocmc
     *
     * @return string 
     */
    public function getCostoDocmc()
    {
        return $this->costoDocmc;
    }

    /**
     * Set costoNuevomb
     *
     * @param string $costoNuevomb
     * @return RhDetalleDevolucion
     */
    public function setCostoNuevomb($costoNuevomb)
    {
        $this->costoNuevomb = $costoNuevomb;

        return $this;
    }

    /**
     * Get costoNuevomb
     *
     * @return string 
     */
    public function getCostoNuevomb()
    {
        return $this->costoNuevomb;
    }

    /**
     * Set costoNuevomc
     *
     * @param string $costoNuevomc
     * @return RhDetalleDevolucion
     */
    public function setCostoNuevomc($costoNuevomc)
    {
        $this->costoNuevomc = $costoNuevomc;

        return $this;
    }

    /**
     * Get costoNuevomc
     *
     * @return string 
     */
    public function getCostoNuevomc()
    {
        return $this->costoNuevomc;
    }

    /**
     * Set importedocMb
     *
     * @param integer $importedocMb
     * @return RhDetalleDevolucion
     */
    public function setImportedocMb($importedocMb)
    {
        $this->importedocMb = $importedocMb;

        return $this;
    }

    /**
     * Get importedocMb
     *
     * @return integer 
     */
    public function getImportedocMb()
    {
        return $this->importedocMb;
    }

    /**
     * Set importedocMc
     *
     * @param integer $importedocMc
     * @return RhDetalleDevolucion
     */
    public function setImportedocMc($importedocMc)
    {
        $this->importedocMc = $importedocMc;

        return $this;
    }

    /**
     * Get importedocMc
     *
     * @return integer 
     */
    public function getImportedocMc()
    {
        return $this->importedocMc;
    }

    /**
     * Set importecostoMb
     *
     * @param integer $importecostoMb
     * @return RhDetalleDevolucion
     */
    public function setImportecostoMb($importecostoMb)
    {
        $this->importecostoMb = $importecostoMb;

        return $this;
    }

    /**
     * Get importecostoMb
     *
     * @return integer 
     */
    public function getImportecostoMb()
    {
        return $this->importecostoMb;
    }

    /**
     * Set importecostoMc
     *
     * @param integer $importecostoMc
     * @return RhDetalleDevolucion
     */
    public function setImportecostoMc($importecostoMc)
    {
        $this->importecostoMc = $importecostoMc;

        return $this;
    }

    /**
     * Get importecostoMc
     *
     * @return integer 
     */
    public function getImportecostoMc()
    {
        return $this->importecostoMc;
    }

    /**
     * Set importeMb
     *
     * @param integer $importeMb
     * @return RhDetalleDevolucion
     */
    public function setImporteMb($importeMb)
    {
        $this->importeMb = $importeMb;

        return $this;
    }

    /**
     * Get importeMb
     *
     * @return integer 
     */
    public function getImporteMb()
    {
        return $this->importeMb;
    }

    /**
     * Set importeMc
     *
     * @param integer $importeMc
     * @return RhDetalleDevolucion
     */
    public function setImporteMc($importeMc)
    {
        $this->importeMc = $importeMc;

        return $this;
    }

    /**
     * Get importeMc
     *
     * @return integer 
     */
    public function getImporteMc()
    {
        return $this->importeMc;
    }

    /**
     * Set costoFacmb
     *
     * @param string $costoFacmb
     * @return RhDetalleDevolucion
     */
    public function setCostoFacmb($costoFacmb)
    {
        $this->costoFacmb = $costoFacmb;

        return $this;
    }

    /**
     * Get costoFacmb
     *
     * @return string 
     */
    public function getCostoFacmb()
    {
        return $this->costoFacmb;
    }

    /**
     * Set costoFacmc
     *
     * @param string $costoFacmc
     * @return RhDetalleDevolucion
     */
    public function setCostoFacmc($costoFacmc)
    {
        $this->costoFacmc = $costoFacmc;

        return $this;
    }

    /**
     * Get costoFacmc
     *
     * @return string 
     */
    public function getCostoFacmc()
    {
        return $this->costoFacmc;
    }

    /**
     * Set encabezadoC
     *
     * @param boolean $encabezadoC
     * @return RhDetalleDevolucion
     */
    public function setEncabezadoC($encabezadoC)
    {
        $this->encabezadoC = $encabezadoC;

        return $this;
    }

    /**
     * Get encabezadoC
     *
     * @return boolean 
     */
    public function getEncabezadoC()
    {
        return $this->encabezadoC;
    }

    /**
     * Set productoTerminadoC
     *
     * @param boolean $productoTerminadoC
     * @return RhDetalleDevolucion
     */
    public function setProductoTerminadoC($productoTerminadoC)
    {
        $this->productoTerminadoC = $productoTerminadoC;

        return $this;
    }

    /**
     * Get productoTerminadoC
     *
     * @return boolean 
     */
    public function getProductoTerminadoC()
    {
        return $this->productoTerminadoC;
    }

    /**
     * Set productoOservicioC
     *
     * @param boolean $productoOservicioC
     * @return RhDetalleDevolucion
     */
    public function setProductoOservicioC($productoOservicioC)
    {
        $this->productoOservicioC = $productoOservicioC;

        return $this;
    }

    /**
     * Get productoOservicioC
     *
     * @return boolean 
     */
    public function getProductoOservicioC()
    {
        return $this->productoOservicioC;
    }

    /**
     * Set impuesto
     *
     * @param string $impuesto
     * @return RhDetalleDevolucion
     */
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    /**
     * Get impuesto
     *
     * @return string 
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Set importeImpuesto
     *
     * @param integer $importeImpuesto
     * @return RhDetalleDevolucion
     */
    public function setImporteImpuesto($importeImpuesto)
    {
        $this->importeImpuesto = $importeImpuesto;

        return $this;
    }

    /**
     * Get importeImpuesto
     *
     * @return integer 
     */
    public function getImporteImpuesto()
    {
        return $this->importeImpuesto;
    }

    /**
     * Set comision
     *
     * @param string $comision
     * @return RhDetalleDevolucion
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
     * Set importeComision
     *
     * @param integer $importeComision
     * @return RhDetalleDevolucion
     */
    public function setImporteComision($importeComision)
    {
        $this->importeComision = $importeComision;

        return $this;
    }

    /**
     * Get importeComision
     *
     * @return integer 
     */
    public function getImporteComision()
    {
        return $this->importeComision;
    }

    /**
     * Set importeOriginalmb
     *
     * @param integer $importeOriginalmb
     * @return RhDetalleDevolucion
     */
    public function setImporteOriginalmb($importeOriginalmb)
    {
        $this->importeOriginalmb = $importeOriginalmb;

        return $this;
    }

    /**
     * Get importeOriginalmb
     *
     * @return integer 
     */
    public function getImporteOriginalmb()
    {
        return $this->importeOriginalmb;
    }

    /**
     * Set importeOriginalmc
     *
     * @param integer $importeOriginalmc
     * @return RhDetalleDevolucion
     */
    public function setImporteOriginalmc($importeOriginalmc)
    {
        $this->importeOriginalmc = $importeOriginalmc;

        return $this;
    }

    /**
     * Get importeOriginalmc
     *
     * @return integer 
     */
    public function getImporteOriginalmc()
    {
        return $this->importeOriginalmc;
    }

    /**
     * Set itemscomp
     *
     * @param integer $itemscomp
     * @return RhDetalleDevolucion
     */
    public function setItemscomp($itemscomp)
    {
        $this->itemscomp = $itemscomp;

        return $this;
    }

    /**
     * Get itemscomp
     *
     * @return integer 
     */
    public function getItemscomp()
    {
        return $this->itemscomp;
    }

    /**
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return RhDetalleDevolucion
     */
    public function setIdActivofijo($idActivofijo)
    {
        $this->idActivofijo = $idActivofijo;

        return $this;
    }

    /**
     * Get idActivofijo
     *
     * @return string 
     */
    public function getIdActivofijo()
    {
        return $this->idActivofijo;
    }

    /**
     * Set importeRecargomb
     *
     * @param integer $importeRecargomb
     * @return RhDetalleDevolucion
     */
    public function setImporteRecargomb($importeRecargomb)
    {
        $this->importeRecargomb = $importeRecargomb;

        return $this;
    }

    /**
     * Get importeRecargomb
     *
     * @return integer 
     */
    public function getImporteRecargomb()
    {
        return $this->importeRecargomb;
    }

    /**
     * Set importeRecargomc
     *
     * @param integer $importeRecargomc
     * @return RhDetalleDevolucion
     */
    public function setImporteRecargomc($importeRecargomc)
    {
        $this->importeRecargomc = $importeRecargomc;

        return $this;
    }

    /**
     * Get importeRecargomc
     *
     * @return integer 
     */
    public function getImporteRecargomc()
    {
        return $this->importeRecargomc;
    }

    /**
     * Set importeDesctomb
     *
     * @param integer $importeDesctomb
     * @return RhDetalleDevolucion
     */
    public function setImporteDesctomb($importeDesctomb)
    {
        $this->importeDesctomb = $importeDesctomb;

        return $this;
    }

    /**
     * Get importeDesctomb
     *
     * @return integer 
     */
    public function getImporteDesctomb()
    {
        return $this->importeDesctomb;
    }

    /**
     * Set importeDesctomc
     *
     * @param integer $importeDesctomc
     * @return RhDetalleDevolucion
     */
    public function setImporteDesctomc($importeDesctomc)
    {
        $this->importeDesctomc = $importeDesctomc;

        return $this;
    }

    /**
     * Get importeDesctomc
     *
     * @return integer 
     */
    public function getImporteDesctomc()
    {
        return $this->importeDesctomc;
    }

    /**
     * Set importeArancelmb
     *
     * @param integer $importeArancelmb
     * @return RhDetalleDevolucion
     */
    public function setImporteArancelmb($importeArancelmb)
    {
        $this->importeArancelmb = $importeArancelmb;

        return $this;
    }

    /**
     * Get importeArancelmb
     *
     * @return integer 
     */
    public function getImporteArancelmb()
    {
        return $this->importeArancelmb;
    }

    /**
     * Set importeArancelmc
     *
     * @param integer $importeArancelmc
     * @return RhDetalleDevolucion
     */
    public function setImporteArancelmc($importeArancelmc)
    {
        $this->importeArancelmc = $importeArancelmc;

        return $this;
    }

    /**
     * Get importeArancelmc
     *
     * @return integer 
     */
    public function getImporteArancelmc()
    {
        return $this->importeArancelmc;
    }

    /**
     * Set factorConversion
     *
     * @param string $factorConversion
     * @return RhDetalleDevolucion
     */
    public function setFactorConversion($factorConversion)
    {
        $this->factorConversion = $factorConversion;

        return $this;
    }

    /**
     * Get factorConversion
     *
     * @return string 
     */
    public function getFactorConversion()
    {
        return $this->factorConversion;
    }

    /**
     * Set existencia
     *
     * @param string $existencia
     * @return RhDetalleDevolucion
     */
    public function setExistencia($existencia)
    {
        $this->existencia = $existencia;

        return $this;
    }

    /**
     * Get existencia
     *
     * @return string 
     */
    public function getExistencia()
    {
        return $this->existencia;
    }

    /**
     * Set itemlink
     *
     * @param integer $itemlink
     * @return RhDetalleDevolucion
     */
    public function setItemlink($itemlink)
    {
        $this->itemlink = $itemlink;

        return $this;
    }

    /**
     * Get itemlink
     *
     * @return integer 
     */
    public function getItemlink()
    {
        return $this->itemlink;
    }
}
