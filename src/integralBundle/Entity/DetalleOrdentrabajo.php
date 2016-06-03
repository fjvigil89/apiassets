<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleOrdentrabajo
 *
 * @ORM\Table(name="Detalle_OrdenTrabajo")
 * @ORM\Entity
 */
class DetalleOrdentrabajo
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
     * @ORM\Column(name="Id_Otrabajo", type="integer", nullable=false)
     */
    private $idOtrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Otrabajo", type="smallint", nullable=false)
     */
    private $anoOtrabajo;

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
     * @ORM\Column(name="Cantidad_Entregada", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidadEntregada;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoUmAlmacenMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostoumalmacenmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoUmAlmacenMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostoumalmacenmc;

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
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=200, nullable=false)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Producto_oServicio", type="boolean", nullable=false)
     */
    private $productoOservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Etapa", type="string", length=50, nullable=false)
     */
    private $etapa;

    /**
     * @var string
     *
     * @ORM\Column(name="Factura", type="string", length=20, nullable=false)
     */
    private $factura;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaFactura", type="integer", nullable=false)
     */
    private $contafactura;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Facturar", type="boolean", nullable=false)
     */
    private $facturar;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=255, nullable=false)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemsVale", type="smallint", nullable=false)
     */
    private $itemsvale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Facturado", type="boolean", nullable=false)
     */
    private $facturado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_nofacturar", type="string", length=8, nullable=false)
     */
    private $idNofacturar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrar", type="boolean", nullable=false)
     */
    private $cerrar;

    /**
     * @var string
     *
     * @ORM\Column(name="Ref_Comprobante", type="string", length=18, nullable=false)
     */
    private $refComprobante;

    /**
     * @var string
     *
     * @ORM\Column(name="Ref_ComproCancela", type="string", length=18, nullable=false)
     */
    private $refComprocancela;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cierre", type="datetime", nullable=false)
     */
    private $fechaCierre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cancelacion", type="datetime", nullable=true)
     */
    private $fechaCancelacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabilizado", type="boolean", nullable=false)
     */
    private $contabilizado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Anulado_Contabilizado", type="boolean", nullable=false)
     */
    private $anuladoContabilizado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CierreActividad", type="datetime", nullable=false)
     */
    private $cierreactividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Especificacion", type="string", length=30, nullable=false)
     */
    private $especificacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ActividadCerrada", type="boolean", nullable=false)
     */
    private $actividadcerrada;



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
     * Set idOtrabajo
     *
     * @param integer $idOtrabajo
     * @return DetalleOrdentrabajo
     */
    public function setIdOtrabajo($idOtrabajo)
    {
        $this->idOtrabajo = $idOtrabajo;

        return $this;
    }

    /**
     * Get idOtrabajo
     *
     * @return integer 
     */
    public function getIdOtrabajo()
    {
        return $this->idOtrabajo;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetalleOrdentrabajo
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
     * Set anoOtrabajo
     *
     * @param integer $anoOtrabajo
     * @return DetalleOrdentrabajo
     */
    public function setAnoOtrabajo($anoOtrabajo)
    {
        $this->anoOtrabajo = $anoOtrabajo;

        return $this;
    }

    /**
     * Get anoOtrabajo
     *
     * @return integer 
     */
    public function getAnoOtrabajo()
    {
        return $this->anoOtrabajo;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return DetalleOrdentrabajo
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
     * @return DetalleOrdentrabajo
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
     * Set descProducto
     *
     * @param string $descProducto
     * @return DetalleOrdentrabajo
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
     * @return DetalleOrdentrabajo
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
     * Set cantidadEntregada
     *
     * @param string $cantidadEntregada
     * @return DetalleOrdentrabajo
     */
    public function setCantidadEntregada($cantidadEntregada)
    {
        $this->cantidadEntregada = $cantidadEntregada;

        return $this;
    }

    /**
     * Get cantidadEntregada
     *
     * @return string 
     */
    public function getCantidadEntregada()
    {
        return $this->cantidadEntregada;
    }

    /**
     * Set precioCostoumalmacenmb
     *
     * @param string $precioCostoumalmacenmb
     * @return DetalleOrdentrabajo
     */
    public function setPrecioCostoumalmacenmb($precioCostoumalmacenmb)
    {
        $this->precioCostoumalmacenmb = $precioCostoumalmacenmb;

        return $this;
    }

    /**
     * Get precioCostoumalmacenmb
     *
     * @return string 
     */
    public function getPrecioCostoumalmacenmb()
    {
        return $this->precioCostoumalmacenmb;
    }

    /**
     * Set precioCostoumalmacenmc
     *
     * @param string $precioCostoumalmacenmc
     * @return DetalleOrdentrabajo
     */
    public function setPrecioCostoumalmacenmc($precioCostoumalmacenmc)
    {
        $this->precioCostoumalmacenmc = $precioCostoumalmacenmc;

        return $this;
    }

    /**
     * Get precioCostoumalmacenmc
     *
     * @return string 
     */
    public function getPrecioCostoumalmacenmc()
    {
        return $this->precioCostoumalmacenmc;
    }

    /**
     * Set importecostoMb
     *
     * @param integer $importecostoMb
     * @return DetalleOrdentrabajo
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
     * @return DetalleOrdentrabajo
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
     * Set referencia
     *
     * @param string $referencia
     * @return DetalleOrdentrabajo
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return DetalleOrdentrabajo
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
     * Set productoOservicio
     *
     * @param boolean $productoOservicio
     * @return DetalleOrdentrabajo
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return DetalleOrdentrabajo
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
     * Set etapa
     *
     * @param string $etapa
     * @return DetalleOrdentrabajo
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get etapa
     *
     * @return string 
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * Set factura
     *
     * @param string $factura
     * @return DetalleOrdentrabajo
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
     * Set contafactura
     *
     * @param integer $contafactura
     * @return DetalleOrdentrabajo
     */
    public function setContafactura($contafactura)
    {
        $this->contafactura = $contafactura;

        return $this;
    }

    /**
     * Get contafactura
     *
     * @return integer 
     */
    public function getContafactura()
    {
        return $this->contafactura;
    }

    /**
     * Set facturar
     *
     * @param boolean $facturar
     * @return DetalleOrdentrabajo
     */
    public function setFacturar($facturar)
    {
        $this->facturar = $facturar;

        return $this;
    }

    /**
     * Get facturar
     *
     * @return boolean 
     */
    public function getFacturar()
    {
        return $this->facturar;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return DetalleOrdentrabajo
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
     * Set itemsvale
     *
     * @param integer $itemsvale
     * @return DetalleOrdentrabajo
     */
    public function setItemsvale($itemsvale)
    {
        $this->itemsvale = $itemsvale;

        return $this;
    }

    /**
     * Get itemsvale
     *
     * @return integer 
     */
    public function getItemsvale()
    {
        return $this->itemsvale;
    }

    /**
     * Set facturado
     *
     * @param boolean $facturado
     * @return DetalleOrdentrabajo
     */
    public function setFacturado($facturado)
    {
        $this->facturado = $facturado;

        return $this;
    }

    /**
     * Get facturado
     *
     * @return boolean 
     */
    public function getFacturado()
    {
        return $this->facturado;
    }

    /**
     * Set idNofacturar
     *
     * @param string $idNofacturar
     * @return DetalleOrdentrabajo
     */
    public function setIdNofacturar($idNofacturar)
    {
        $this->idNofacturar = $idNofacturar;

        return $this;
    }

    /**
     * Get idNofacturar
     *
     * @return string 
     */
    public function getIdNofacturar()
    {
        return $this->idNofacturar;
    }

    /**
     * Set cerrar
     *
     * @param boolean $cerrar
     * @return DetalleOrdentrabajo
     */
    public function setCerrar($cerrar)
    {
        $this->cerrar = $cerrar;

        return $this;
    }

    /**
     * Get cerrar
     *
     * @return boolean 
     */
    public function getCerrar()
    {
        return $this->cerrar;
    }

    /**
     * Set refComprobante
     *
     * @param string $refComprobante
     * @return DetalleOrdentrabajo
     */
    public function setRefComprobante($refComprobante)
    {
        $this->refComprobante = $refComprobante;

        return $this;
    }

    /**
     * Get refComprobante
     *
     * @return string 
     */
    public function getRefComprobante()
    {
        return $this->refComprobante;
    }

    /**
     * Set refComprocancela
     *
     * @param string $refComprocancela
     * @return DetalleOrdentrabajo
     */
    public function setRefComprocancela($refComprocancela)
    {
        $this->refComprocancela = $refComprocancela;

        return $this;
    }

    /**
     * Get refComprocancela
     *
     * @return string 
     */
    public function getRefComprocancela()
    {
        return $this->refComprocancela;
    }

    /**
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     * @return DetalleOrdentrabajo
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;

        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime 
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * Set fechaCancelacion
     *
     * @param \DateTime $fechaCancelacion
     * @return DetalleOrdentrabajo
     */
    public function setFechaCancelacion($fechaCancelacion)
    {
        $this->fechaCancelacion = $fechaCancelacion;

        return $this;
    }

    /**
     * Get fechaCancelacion
     *
     * @return \DateTime 
     */
    public function getFechaCancelacion()
    {
        return $this->fechaCancelacion;
    }

    /**
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return DetalleOrdentrabajo
     */
    public function setContabilizado($contabilizado)
    {
        $this->contabilizado = $contabilizado;

        return $this;
    }

    /**
     * Get contabilizado
     *
     * @return boolean 
     */
    public function getContabilizado()
    {
        return $this->contabilizado;
    }

    /**
     * Set anuladoContabilizado
     *
     * @param boolean $anuladoContabilizado
     * @return DetalleOrdentrabajo
     */
    public function setAnuladoContabilizado($anuladoContabilizado)
    {
        $this->anuladoContabilizado = $anuladoContabilizado;

        return $this;
    }

    /**
     * Get anuladoContabilizado
     *
     * @return boolean 
     */
    public function getAnuladoContabilizado()
    {
        return $this->anuladoContabilizado;
    }

    /**
     * Set cierreactividad
     *
     * @param \DateTime $cierreactividad
     * @return DetalleOrdentrabajo
     */
    public function setCierreactividad($cierreactividad)
    {
        $this->cierreactividad = $cierreactividad;

        return $this;
    }

    /**
     * Get cierreactividad
     *
     * @return \DateTime 
     */
    public function getCierreactividad()
    {
        return $this->cierreactividad;
    }

    /**
     * Set especificacion
     *
     * @param string $especificacion
     * @return DetalleOrdentrabajo
     */
    public function setEspecificacion($especificacion)
    {
        $this->especificacion = $especificacion;

        return $this;
    }

    /**
     * Get especificacion
     *
     * @return string 
     */
    public function getEspecificacion()
    {
        return $this->especificacion;
    }

    /**
     * Set actividadcerrada
     *
     * @param boolean $actividadcerrada
     * @return DetalleOrdentrabajo
     */
    public function setActividadcerrada($actividadcerrada)
    {
        $this->actividadcerrada = $actividadcerrada;

        return $this;
    }

    /**
     * Get actividadcerrada
     *
     * @return boolean 
     */
    public function getActividadcerrada()
    {
        return $this->actividadcerrada;
    }
}
