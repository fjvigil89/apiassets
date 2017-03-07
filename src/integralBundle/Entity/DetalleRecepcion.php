<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleRecepcion
 *
 * @ORM\Table(name="Detalle_Recepcion")
 * @ORM\Entity
 */
class DetalleRecepcion
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
     * @ORM\Column(name="Items", type="smallint", nullable=false)
     */
    private $items;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Recepcion", type="integer", nullable=false)
     */
    private $idRecepcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Recepcion", type="smallint", nullable=false)
     */
    private $anoRecepcion;

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
     * @ORM\Column(name="Um_Factura", type="string", length=5, nullable=false)
     */
    private $umFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="factor_Conversion", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $factorConversion;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Almacen", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidadAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Factura", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidadFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Recibida", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidadRecibida;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo_Existencia", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $saldoExistencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_UmFacturaMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioUmfacturamb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_UmFacturaMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioUmfacturamc;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescuentoMB", type="integer", nullable=false)
     */
    private $descuentomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescuentoMC", type="integer", nullable=false)
     */
    private $descuentomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecargoMB", type="integer", nullable=false)
     */
    private $recargomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecargoMC", type="integer", nullable=false)
     */
    private $recargomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ArancelMB", type="integer", nullable=false)
     */
    private $arancelmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ArancelMC", type="integer", nullable=false)
     */
    private $arancelmc;

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
     * @ORM\Column(name="Costo_ArancelMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoArancelmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_ArancelMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoArancelmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteArancelMB", type="integer", nullable=false)
     */
    private $importearancelmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteArancelMC", type="integer", nullable=false)
     */
    private $importearancelmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_EstimadoMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoEstimadomb;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_EstimadoMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoEstimadomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteEstimadoMB", type="integer", nullable=false)
     */
    private $importeestimadomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteEstimadoMC", type="integer", nullable=false)
     */
    private $importeestimadomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_TotalMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoTotalmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_TotalMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoTotalmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMB", type="integer", nullable=false)
     */
    private $importetotalmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMC", type="integer", nullable=false)
     */
    private $importetotalmc;

    /**
     * @var string
     *
     * @ORM\Column(name="No_deSerie", type="string", length=15, nullable=false)
     */
    private $noDeserie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

    /**
     * @var string
     *
     * @ORM\Column(name="Seccion", type="string", length=10, nullable=false)
     */
    private $seccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Estante", type="string", length=10, nullable=false)
     */
    private $estante;

    /**
     * @var string
     *
     * @ORM\Column(name="Casilla", type="string", length=10, nullable=false)
     */
    private $casilla;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ElemGasto", type="string", length=10, nullable=false)
     */
    private $idElemgasto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubElemGasto", type="string", length=15, nullable=false)
     */
    private $idSubelemgasto;

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
     * @var integer
     *
     * @ORM\Column(name="ContaOrden", type="integer", nullable=false)
     */
    private $contaorden;

    /**
     * @var string
     *
     * @ORM\Column(name="RefOrden", type="string", length=15, nullable=false)
     */
    private $reforden;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ProdOrden", type="string", length=20, nullable=false)
     */
    private $idProdorden;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Devuelta", type="decimal", precision=13, scale=4, nullable=false)
     */
    private $cantidadDevuelta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_DevueltoMB", type="integer", nullable=false)
     */
    private $importeDevueltomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_DevueltoMC", type="integer", nullable=false)
     */
    private $importeDevueltomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

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
     * @var string
     *
     * @ORM\Column(name="RecargoMBF", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $recargombf;

    /**
     * @var string
     *
     * @ORM\Column(name="RecargoMCF", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $recargomcf;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ElemGastoMC", type="string", length=10, nullable=false)
     */
    private $idElemgastomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubElemGastoMC", type="string", length=15, nullable=false)
     */
    private $idSubelemgastomc;

    /**
     * @var string
     *
     * @ORM\Column(name="FacturaSevi", type="string", length=20, nullable=false)
     */
    private $facturasevi;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaFacturaServi", type="integer", nullable=false)
     */
    private $contafacturaservi;

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
     * @var string
     *
     * @ORM\Column(name="Desc_Ccosto", type="string", length=50, nullable=false)
     */
    private $descCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Destino", type="string", length=10, nullable=false)
     */
    private $idDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=10, nullable=false)
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=50, nullable=false)
     */
    private $descCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_DesctoMB", type="integer", nullable=false)
     */
    private $importeDesctomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Empaque", type="integer", nullable=false)
     */
    private $empaque;

    /**
     * @var string
     *
     * @ORM\Column(name="FactorEmpaque", type="decimal", precision=12, scale=4, nullable=false)
     */
    private $factorempaque;

    /**
     * @var string
     *
     * @ORM\Column(name="MonedaOriginal", type="string", length=5, nullable=false)
     */
    private $monedaoriginal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_MonedaOriginal", type="integer", nullable=false)
     */
    private $importeMonedaoriginal;



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
     * Set items
     *
     * @param integer $items
     * @return DetalleRecepcion
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
     * Set idRecepcion
     *
     * @param integer $idRecepcion
     * @return DetalleRecepcion
     */
    public function setIdRecepcion($idRecepcion)
    {
        $this->idRecepcion = $idRecepcion;

        return $this;
    }

    /**
     * Get idRecepcion
     *
     * @return integer 
     */
    public function getIdRecepcion()
    {
        return $this->idRecepcion;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetalleRecepcion
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
     * Set anoRecepcion
     *
     * @param integer $anoRecepcion
     * @return DetalleRecepcion
     */
    public function setAnoRecepcion($anoRecepcion)
    {
        $this->anoRecepcion = $anoRecepcion;

        return $this;
    }

    /**
     * Get anoRecepcion
     *
     * @return integer 
     */
    public function getAnoRecepcion()
    {
        return $this->anoRecepcion;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return DetalleRecepcion
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
     * @return DetalleRecepcion
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
     * @return DetalleRecepcion
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
     * @return DetalleRecepcion
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
     * Set umFactura
     *
     * @param string $umFactura
     * @return DetalleRecepcion
     */
    public function setUmFactura($umFactura)
    {
        $this->umFactura = $umFactura;

        return $this;
    }

    /**
     * Get umFactura
     *
     * @return string 
     */
    public function getUmFactura()
    {
        return $this->umFactura;
    }

    /**
     * Set factorConversion
     *
     * @param string $factorConversion
     * @return DetalleRecepcion
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
     * Set cantidadAlmacen
     *
     * @param string $cantidadAlmacen
     * @return DetalleRecepcion
     */
    public function setCantidadAlmacen($cantidadAlmacen)
    {
        $this->cantidadAlmacen = $cantidadAlmacen;

        return $this;
    }

    /**
     * Get cantidadAlmacen
     *
     * @return string 
     */
    public function getCantidadAlmacen()
    {
        return $this->cantidadAlmacen;
    }

    /**
     * Set cantidadFactura
     *
     * @param string $cantidadFactura
     * @return DetalleRecepcion
     */
    public function setCantidadFactura($cantidadFactura)
    {
        $this->cantidadFactura = $cantidadFactura;

        return $this;
    }

    /**
     * Get cantidadFactura
     *
     * @return string 
     */
    public function getCantidadFactura()
    {
        return $this->cantidadFactura;
    }

    /**
     * Set cantidadRecibida
     *
     * @param string $cantidadRecibida
     * @return DetalleRecepcion
     */
    public function setCantidadRecibida($cantidadRecibida)
    {
        $this->cantidadRecibida = $cantidadRecibida;

        return $this;
    }

    /**
     * Get cantidadRecibida
     *
     * @return string 
     */
    public function getCantidadRecibida()
    {
        return $this->cantidadRecibida;
    }

    /**
     * Set saldoExistencia
     *
     * @param string $saldoExistencia
     * @return DetalleRecepcion
     */
    public function setSaldoExistencia($saldoExistencia)
    {
        $this->saldoExistencia = $saldoExistencia;

        return $this;
    }

    /**
     * Get saldoExistencia
     *
     * @return string 
     */
    public function getSaldoExistencia()
    {
        return $this->saldoExistencia;
    }

    /**
     * Set precioUmfacturamb
     *
     * @param string $precioUmfacturamb
     * @return DetalleRecepcion
     */
    public function setPrecioUmfacturamb($precioUmfacturamb)
    {
        $this->precioUmfacturamb = $precioUmfacturamb;

        return $this;
    }

    /**
     * Get precioUmfacturamb
     *
     * @return string 
     */
    public function getPrecioUmfacturamb()
    {
        return $this->precioUmfacturamb;
    }

    /**
     * Set precioUmfacturamc
     *
     * @param string $precioUmfacturamc
     * @return DetalleRecepcion
     */
    public function setPrecioUmfacturamc($precioUmfacturamc)
    {
        $this->precioUmfacturamc = $precioUmfacturamc;

        return $this;
    }

    /**
     * Get precioUmfacturamc
     *
     * @return string 
     */
    public function getPrecioUmfacturamc()
    {
        return $this->precioUmfacturamc;
    }

    /**
     * Set descuentomb
     *
     * @param integer $descuentomb
     * @return DetalleRecepcion
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
     * Set descuentomc
     *
     * @param integer $descuentomc
     * @return DetalleRecepcion
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
     * Set recargomb
     *
     * @param integer $recargomb
     * @return DetalleRecepcion
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
     * Set recargomc
     *
     * @param integer $recargomc
     * @return DetalleRecepcion
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
     * Set arancelmb
     *
     * @param integer $arancelmb
     * @return DetalleRecepcion
     */
    public function setArancelmb($arancelmb)
    {
        $this->arancelmb = $arancelmb;

        return $this;
    }

    /**
     * Get arancelmb
     *
     * @return integer 
     */
    public function getArancelmb()
    {
        return $this->arancelmb;
    }

    /**
     * Set arancelmc
     *
     * @param integer $arancelmc
     * @return DetalleRecepcion
     */
    public function setArancelmc($arancelmc)
    {
        $this->arancelmc = $arancelmc;

        return $this;
    }

    /**
     * Get arancelmc
     *
     * @return integer 
     */
    public function getArancelmc()
    {
        return $this->arancelmc;
    }

    /**
     * Set precioCostoumalmacenmb
     *
     * @param string $precioCostoumalmacenmb
     * @return DetalleRecepcion
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
     * @return DetalleRecepcion
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
     * @return DetalleRecepcion
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
     * @return DetalleRecepcion
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
     * Set costoArancelmb
     *
     * @param string $costoArancelmb
     * @return DetalleRecepcion
     */
    public function setCostoArancelmb($costoArancelmb)
    {
        $this->costoArancelmb = $costoArancelmb;

        return $this;
    }

    /**
     * Get costoArancelmb
     *
     * @return string 
     */
    public function getCostoArancelmb()
    {
        return $this->costoArancelmb;
    }

    /**
     * Set costoArancelmc
     *
     * @param string $costoArancelmc
     * @return DetalleRecepcion
     */
    public function setCostoArancelmc($costoArancelmc)
    {
        $this->costoArancelmc = $costoArancelmc;

        return $this;
    }

    /**
     * Get costoArancelmc
     *
     * @return string 
     */
    public function getCostoArancelmc()
    {
        return $this->costoArancelmc;
    }

    /**
     * Set importearancelmb
     *
     * @param integer $importearancelmb
     * @return DetalleRecepcion
     */
    public function setImportearancelmb($importearancelmb)
    {
        $this->importearancelmb = $importearancelmb;

        return $this;
    }

    /**
     * Get importearancelmb
     *
     * @return integer 
     */
    public function getImportearancelmb()
    {
        return $this->importearancelmb;
    }

    /**
     * Set importearancelmc
     *
     * @param integer $importearancelmc
     * @return DetalleRecepcion
     */
    public function setImportearancelmc($importearancelmc)
    {
        $this->importearancelmc = $importearancelmc;

        return $this;
    }

    /**
     * Get importearancelmc
     *
     * @return integer 
     */
    public function getImportearancelmc()
    {
        return $this->importearancelmc;
    }

    /**
     * Set costoEstimadomb
     *
     * @param string $costoEstimadomb
     * @return DetalleRecepcion
     */
    public function setCostoEstimadomb($costoEstimadomb)
    {
        $this->costoEstimadomb = $costoEstimadomb;

        return $this;
    }

    /**
     * Get costoEstimadomb
     *
     * @return string 
     */
    public function getCostoEstimadomb()
    {
        return $this->costoEstimadomb;
    }

    /**
     * Set costoEstimadomc
     *
     * @param string $costoEstimadomc
     * @return DetalleRecepcion
     */
    public function setCostoEstimadomc($costoEstimadomc)
    {
        $this->costoEstimadomc = $costoEstimadomc;

        return $this;
    }

    /**
     * Get costoEstimadomc
     *
     * @return string 
     */
    public function getCostoEstimadomc()
    {
        return $this->costoEstimadomc;
    }

    /**
     * Set importeestimadomb
     *
     * @param integer $importeestimadomb
     * @return DetalleRecepcion
     */
    public function setImporteestimadomb($importeestimadomb)
    {
        $this->importeestimadomb = $importeestimadomb;

        return $this;
    }

    /**
     * Get importeestimadomb
     *
     * @return integer 
     */
    public function getImporteestimadomb()
    {
        return $this->importeestimadomb;
    }

    /**
     * Set importeestimadomc
     *
     * @param integer $importeestimadomc
     * @return DetalleRecepcion
     */
    public function setImporteestimadomc($importeestimadomc)
    {
        $this->importeestimadomc = $importeestimadomc;

        return $this;
    }

    /**
     * Get importeestimadomc
     *
     * @return integer 
     */
    public function getImporteestimadomc()
    {
        return $this->importeestimadomc;
    }

    /**
     * Set costoTotalmb
     *
     * @param string $costoTotalmb
     * @return DetalleRecepcion
     */
    public function setCostoTotalmb($costoTotalmb)
    {
        $this->costoTotalmb = $costoTotalmb;

        return $this;
    }

    /**
     * Get costoTotalmb
     *
     * @return string 
     */
    public function getCostoTotalmb()
    {
        return $this->costoTotalmb;
    }

    /**
     * Set costoTotalmc
     *
     * @param string $costoTotalmc
     * @return DetalleRecepcion
     */
    public function setCostoTotalmc($costoTotalmc)
    {
        $this->costoTotalmc = $costoTotalmc;

        return $this;
    }

    /**
     * Get costoTotalmc
     *
     * @return string 
     */
    public function getCostoTotalmc()
    {
        return $this->costoTotalmc;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return DetalleRecepcion
     */
    public function setImportetotalmb($importetotalmb)
    {
        $this->importetotalmb = $importetotalmb;

        return $this;
    }

    /**
     * Get importetotalmb
     *
     * @return integer 
     */
    public function getImportetotalmb()
    {
        return $this->importetotalmb;
    }

    /**
     * Set importetotalmc
     *
     * @param integer $importetotalmc
     * @return DetalleRecepcion
     */
    public function setImportetotalmc($importetotalmc)
    {
        $this->importetotalmc = $importetotalmc;

        return $this;
    }

    /**
     * Get importetotalmc
     *
     * @return integer 
     */
    public function getImportetotalmc()
    {
        return $this->importetotalmc;
    }

    /**
     * Set noDeserie
     *
     * @param string $noDeserie
     * @return DetalleRecepcion
     */
    public function setNoDeserie($noDeserie)
    {
        $this->noDeserie = $noDeserie;

        return $this;
    }

    /**
     * Get noDeserie
     *
     * @return string 
     */
    public function getNoDeserie()
    {
        return $this->noDeserie;
    }

    /**
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return DetalleRecepcion
     */
    public function setFechaVence($fechaVence)
    {
        $this->fechaVence = $fechaVence;

        return $this;
    }

    /**
     * Get fechaVence
     *
     * @return \DateTime 
     */
    public function getFechaVence()
    {
        return $this->fechaVence;
    }

    /**
     * Set seccion
     *
     * @param string $seccion
     * @return DetalleRecepcion
     */
    public function setSeccion($seccion)
    {
        $this->seccion = $seccion;

        return $this;
    }

    /**
     * Get seccion
     *
     * @return string 
     */
    public function getSeccion()
    {
        return $this->seccion;
    }

    /**
     * Set estante
     *
     * @param string $estante
     * @return DetalleRecepcion
     */
    public function setEstante($estante)
    {
        $this->estante = $estante;

        return $this;
    }

    /**
     * Get estante
     *
     * @return string 
     */
    public function getEstante()
    {
        return $this->estante;
    }

    /**
     * Set casilla
     *
     * @param string $casilla
     * @return DetalleRecepcion
     */
    public function setCasilla($casilla)
    {
        $this->casilla = $casilla;

        return $this;
    }

    /**
     * Get casilla
     *
     * @return string 
     */
    public function getCasilla()
    {
        return $this->casilla;
    }

    /**
     * Set idElemgasto
     *
     * @param string $idElemgasto
     * @return DetalleRecepcion
     */
    public function setIdElemgasto($idElemgasto)
    {
        $this->idElemgasto = $idElemgasto;

        return $this;
    }

    /**
     * Get idElemgasto
     *
     * @return string 
     */
    public function getIdElemgasto()
    {
        return $this->idElemgasto;
    }

    /**
     * Set idSubelemgasto
     *
     * @param string $idSubelemgasto
     * @return DetalleRecepcion
     */
    public function setIdSubelemgasto($idSubelemgasto)
    {
        $this->idSubelemgasto = $idSubelemgasto;

        return $this;
    }

    /**
     * Get idSubelemgasto
     *
     * @return string 
     */
    public function getIdSubelemgasto()
    {
        return $this->idSubelemgasto;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return DetalleRecepcion
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
     * @return DetalleRecepcion
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
     * Set contaorden
     *
     * @param integer $contaorden
     * @return DetalleRecepcion
     */
    public function setContaorden($contaorden)
    {
        $this->contaorden = $contaorden;

        return $this;
    }

    /**
     * Get contaorden
     *
     * @return integer 
     */
    public function getContaorden()
    {
        return $this->contaorden;
    }

    /**
     * Set reforden
     *
     * @param string $reforden
     * @return DetalleRecepcion
     */
    public function setReforden($reforden)
    {
        $this->reforden = $reforden;

        return $this;
    }

    /**
     * Get reforden
     *
     * @return string 
     */
    public function getReforden()
    {
        return $this->reforden;
    }

    /**
     * Set idProdorden
     *
     * @param string $idProdorden
     * @return DetalleRecepcion
     */
    public function setIdProdorden($idProdorden)
    {
        $this->idProdorden = $idProdorden;

        return $this;
    }

    /**
     * Get idProdorden
     *
     * @return string 
     */
    public function getIdProdorden()
    {
        return $this->idProdorden;
    }

    /**
     * Set cantidadDevuelta
     *
     * @param string $cantidadDevuelta
     * @return DetalleRecepcion
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
     * Set importeDevueltomb
     *
     * @param integer $importeDevueltomb
     * @return DetalleRecepcion
     */
    public function setImporteDevueltomb($importeDevueltomb)
    {
        $this->importeDevueltomb = $importeDevueltomb;

        return $this;
    }

    /**
     * Get importeDevueltomb
     *
     * @return integer 
     */
    public function getImporteDevueltomb()
    {
        return $this->importeDevueltomb;
    }

    /**
     * Set importeDevueltomc
     *
     * @param integer $importeDevueltomc
     * @return DetalleRecepcion
     */
    public function setImporteDevueltomc($importeDevueltomc)
    {
        $this->importeDevueltomc = $importeDevueltomc;

        return $this;
    }

    /**
     * Get importeDevueltomc
     *
     * @return integer 
     */
    public function getImporteDevueltomc()
    {
        return $this->importeDevueltomc;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return DetalleRecepcion
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
     * Set factura
     *
     * @param string $factura
     * @return DetalleRecepcion
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
     * @return DetalleRecepcion
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
     * Set recargombf
     *
     * @param string $recargombf
     * @return DetalleRecepcion
     */
    public function setRecargombf($recargombf)
    {
        $this->recargombf = $recargombf;

        return $this;
    }

    /**
     * Get recargombf
     *
     * @return string 
     */
    public function getRecargombf()
    {
        return $this->recargombf;
    }

    /**
     * Set recargomcf
     *
     * @param string $recargomcf
     * @return DetalleRecepcion
     */
    public function setRecargomcf($recargomcf)
    {
        $this->recargomcf = $recargomcf;

        return $this;
    }

    /**
     * Get recargomcf
     *
     * @return string 
     */
    public function getRecargomcf()
    {
        return $this->recargomcf;
    }

    /**
     * Set idElemgastomc
     *
     * @param string $idElemgastomc
     * @return DetalleRecepcion
     */
    public function setIdElemgastomc($idElemgastomc)
    {
        $this->idElemgastomc = $idElemgastomc;

        return $this;
    }

    /**
     * Get idElemgastomc
     *
     * @return string 
     */
    public function getIdElemgastomc()
    {
        return $this->idElemgastomc;
    }

    /**
     * Set idSubelemgastomc
     *
     * @param string $idSubelemgastomc
     * @return DetalleRecepcion
     */
    public function setIdSubelemgastomc($idSubelemgastomc)
    {
        $this->idSubelemgastomc = $idSubelemgastomc;

        return $this;
    }

    /**
     * Get idSubelemgastomc
     *
     * @return string 
     */
    public function getIdSubelemgastomc()
    {
        return $this->idSubelemgastomc;
    }

    /**
     * Set facturasevi
     *
     * @param string $facturasevi
     * @return DetalleRecepcion
     */
    public function setFacturasevi($facturasevi)
    {
        $this->facturasevi = $facturasevi;

        return $this;
    }

    /**
     * Get facturasevi
     *
     * @return string 
     */
    public function getFacturasevi()
    {
        return $this->facturasevi;
    }

    /**
     * Set contafacturaservi
     *
     * @param integer $contafacturaservi
     * @return DetalleRecepcion
     */
    public function setContafacturaservi($contafacturaservi)
    {
        $this->contafacturaservi = $contafacturaservi;

        return $this;
    }

    /**
     * Get contafacturaservi
     *
     * @return integer 
     */
    public function getContafacturaservi()
    {
        return $this->contafacturaservi;
    }

    /**
     * Set pesobruto
     *
     * @param integer $pesobruto
     * @return DetalleRecepcion
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
     * @return DetalleRecepcion
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
     * Set descCcosto
     *
     * @param string $descCcosto
     * @return DetalleRecepcion
     */
    public function setDescCcosto($descCcosto)
    {
        $this->descCcosto = $descCcosto;

        return $this;
    }

    /**
     * Get descCcosto
     *
     * @return string 
     */
    public function getDescCcosto()
    {
        return $this->descCcosto;
    }

    /**
     * Set idDestino
     *
     * @param string $idDestino
     * @return DetalleRecepcion
     */
    public function setIdDestino($idDestino)
    {
        $this->idDestino = $idDestino;

        return $this;
    }

    /**
     * Get idDestino
     *
     * @return string 
     */
    public function getIdDestino()
    {
        return $this->idDestino;
    }

    /**
     * Set idActividad
     *
     * @param string $idActividad
     * @return DetalleRecepcion
     */
    public function setIdActividad($idActividad)
    {
        $this->idActividad = $idActividad;

        return $this;
    }

    /**
     * Get idActividad
     *
     * @return string 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set descCliente
     *
     * @param string $descCliente
     * @return DetalleRecepcion
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
     * Set importeDesctomb
     *
     * @param integer $importeDesctomb
     * @return DetalleRecepcion
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
     * Set empaque
     *
     * @param integer $empaque
     * @return DetalleRecepcion
     */
    public function setEmpaque($empaque)
    {
        $this->empaque = $empaque;

        return $this;
    }

    /**
     * Get empaque
     *
     * @return integer 
     */
    public function getEmpaque()
    {
        return $this->empaque;
    }

    /**
     * Set factorempaque
     *
     * @param string $factorempaque
     * @return DetalleRecepcion
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
     * Set monedaoriginal
     *
     * @param string $monedaoriginal
     * @return DetalleRecepcion
     */
    public function setMonedaoriginal($monedaoriginal)
    {
        $this->monedaoriginal = $monedaoriginal;

        return $this;
    }

    /**
     * Get monedaoriginal
     *
     * @return string 
     */
    public function getMonedaoriginal()
    {
        return $this->monedaoriginal;
    }

    /**
     * Set importeMonedaoriginal
     *
     * @param integer $importeMonedaoriginal
     * @return DetalleRecepcion
     */
    public function setImporteMonedaoriginal($importeMonedaoriginal)
    {
        $this->importeMonedaoriginal = $importeMonedaoriginal;

        return $this;
    }

    /**
     * Get importeMonedaoriginal
     *
     * @return integer 
     */
    public function getImporteMonedaoriginal()
    {
        return $this->importeMonedaoriginal;
    }
}
