<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleFactura
 *
 * @ORM\Table(name="Detalle_Factura")
 * @ORM\Entity
 */
class DetalleFactura
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
     * @ORM\Column(name="Id_Factura", type="integer", nullable=false)
     */
    private $idFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Factura", type="smallint", nullable=false)
     */
    private $anoFactura;

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
     * @ORM\Column(name="Um_Factura", type="string", length=5, nullable=false)
     */
    private $umFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="factor_Conversion", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $factorConversion;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaUmAlmacenMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentaumalmacenmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaUmAlmacenMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentaumalmacenmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaUmFacturaMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentaumfacturamb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaUmFacturaMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentaumfacturamc;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaTotalMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentatotalmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaTotalMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentatotalmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Existencia", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $existencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Disponibilidad", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $disponibilidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad_Factura", type="integer", nullable=false)
     */
    private $cantidadFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Almacen", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidadAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Reservadas", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $reservadas;

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
     * @ORM\Column(name="ArancelMB", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $arancelmb;

    /**
     * @var string
     *
     * @ORM\Column(name="ArancelMC", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $arancelmc;

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
     * @var integer
     *
     * @ORM\Column(name="Importe_MFact", type="integer", nullable=false)
     */
    private $importeMfact;

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
     * @var integer
     *
     * @ORM\Column(name="Tipo_Factura", type="smallint", nullable=false)
     */
    private $tipoFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="No_Serie", type="string", length=50, nullable=false)
     */
    private $noSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="Condiciones_Pago", type="string", length=255, nullable=false)
     */
    private $condicionesPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Devuelta", type="decimal", precision=13, scale=4, nullable=false)
     */
    private $cantidadDevuelta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Producto_OServicio_c", type="boolean", nullable=false)
     */
    private $productoOservicioC;

    /**
     * @var string
     *
     * @ORM\Column(name="Arancelario", type="string", length=20, nullable=false)
     */
    private $arancelario;

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
     * @ORM\Column(name="Importe_CostoMB", type="integer", nullable=false)
     */
    private $importeCostomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_CostoMC", type="integer", nullable=false)
     */
    private $importeCostomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_Venta_Original", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentaOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=200, nullable=false)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Paquete", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $paquete;

    /**
     * @var string
     *
     * @ORM\Column(name="Bultos", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $bultos;

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
     * @ORM\Column(name="ItemsComp", type="smallint", nullable=false)
     */
    private $itemscomp;

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
     * @ORM\Column(name="Precio_RecargoMB", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $precioRecargomb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_RecargoMC", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $precioRecargomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_DesctoMB", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $precioDesctomb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_DesctoMC", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $precioDesctomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_ArancelMB", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $precioArancelmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_ArancelMC", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $precioArancelmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="LoteSM", type="string", length=20, nullable=false)
     */
    private $lotesm;

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
     * @var string
     *
     * @ORM\Column(name="IRConsigna", type="string", length=20, nullable=false)
     */
    private $irconsigna;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaIRConsigna", type="integer", nullable=false)
     */
    private $contairconsigna;

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
     * @var integer
     *
     * @ORM\Column(name="Empaque", type="integer", nullable=false)
     */
    private $empaque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

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
     * @var integer
     *
     * @ORM\Column(name="Cubicaje", type="integer", nullable=false)
     */
    private $cubicaje;

    /**
     * @var integer
     *
     * @ORM\Column(name="PaqueteCubi", type="integer", nullable=false)
     */
    private $paquetecubi;

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemsCotiza", type="smallint", nullable=false)
     */
    private $itemscotiza;



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
     * Set idFactura
     *
     * @param integer $idFactura
     * @return DetalleFactura
     */
    public function setIdFactura($idFactura)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * Get idFactura
     *
     * @return integer 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetalleFactura
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
     * Set anoFactura
     *
     * @param integer $anoFactura
     * @return DetalleFactura
     */
    public function setAnoFactura($anoFactura)
    {
        $this->anoFactura = $anoFactura;

        return $this;
    }

    /**
     * Get anoFactura
     *
     * @return integer 
     */
    public function getAnoFactura()
    {
        return $this->anoFactura;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * Set precioVentaumalmacenmb
     *
     * @param string $precioVentaumalmacenmb
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * Set precioVentaumfacturamb
     *
     * @param string $precioVentaumfacturamb
     * @return DetalleFactura
     */
    public function setPrecioVentaumfacturamb($precioVentaumfacturamb)
    {
        $this->precioVentaumfacturamb = $precioVentaumfacturamb;

        return $this;
    }

    /**
     * Get precioVentaumfacturamb
     *
     * @return string 
     */
    public function getPrecioVentaumfacturamb()
    {
        return $this->precioVentaumfacturamb;
    }

    /**
     * Set precioVentaumfacturamc
     *
     * @param string $precioVentaumfacturamc
     * @return DetalleFactura
     */
    public function setPrecioVentaumfacturamc($precioVentaumfacturamc)
    {
        $this->precioVentaumfacturamc = $precioVentaumfacturamc;

        return $this;
    }

    /**
     * Get precioVentaumfacturamc
     *
     * @return string 
     */
    public function getPrecioVentaumfacturamc()
    {
        return $this->precioVentaumfacturamc;
    }

    /**
     * Set precioVentatotalmb
     *
     * @param string $precioVentatotalmb
     * @return DetalleFactura
     */
    public function setPrecioVentatotalmb($precioVentatotalmb)
    {
        $this->precioVentatotalmb = $precioVentatotalmb;

        return $this;
    }

    /**
     * Get precioVentatotalmb
     *
     * @return string 
     */
    public function getPrecioVentatotalmb()
    {
        return $this->precioVentatotalmb;
    }

    /**
     * Set precioVentatotalmc
     *
     * @param string $precioVentatotalmc
     * @return DetalleFactura
     */
    public function setPrecioVentatotalmc($precioVentatotalmc)
    {
        $this->precioVentatotalmc = $precioVentatotalmc;

        return $this;
    }

    /**
     * Get precioVentatotalmc
     *
     * @return string 
     */
    public function getPrecioVentatotalmc()
    {
        return $this->precioVentatotalmc;
    }

    /**
     * Set existencia
     *
     * @param string $existencia
     * @return DetalleFactura
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
     * Set disponibilidad
     *
     * @param string $disponibilidad
     * @return DetalleFactura
     */
    public function setDisponibilidad($disponibilidad)
    {
        $this->disponibilidad = $disponibilidad;

        return $this;
    }

    /**
     * Get disponibilidad
     *
     * @return string 
     */
    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }

    /**
     * Set cantidadFactura
     *
     * @param integer $cantidadFactura
     * @return DetalleFactura
     */
    public function setCantidadFactura($cantidadFactura)
    {
        $this->cantidadFactura = $cantidadFactura;

        return $this;
    }

    /**
     * Get cantidadFactura
     *
     * @return integer 
     */
    public function getCantidadFactura()
    {
        return $this->cantidadFactura;
    }

    /**
     * Set cantidadAlmacen
     *
     * @param string $cantidadAlmacen
     * @return DetalleFactura
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
     * Set reservadas
     *
     * @param string $reservadas
     * @return DetalleFactura
     */
    public function setReservadas($reservadas)
    {
        $this->reservadas = $reservadas;

        return $this;
    }

    /**
     * Get reservadas
     *
     * @return string 
     */
    public function getReservadas()
    {
        return $this->reservadas;
    }

    /**
     * Set descuentomb
     *
     * @param integer $descuentomb
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * Set tiporecargomb
     *
     * @param integer $tiporecargomb
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * Set arancelmb
     *
     * @param string $arancelmb
     * @return DetalleFactura
     */
    public function setArancelmb($arancelmb)
    {
        $this->arancelmb = $arancelmb;

        return $this;
    }

    /**
     * Get arancelmb
     *
     * @return string 
     */
    public function getArancelmb()
    {
        return $this->arancelmb;
    }

    /**
     * Set arancelmc
     *
     * @param string $arancelmc
     * @return DetalleFactura
     */
    public function setArancelmc($arancelmc)
    {
        $this->arancelmc = $arancelmc;

        return $this;
    }

    /**
     * Get arancelmc
     *
     * @return string 
     */
    public function getArancelmc()
    {
        return $this->arancelmc;
    }

    /**
     * Set importeMb
     *
     * @param integer $importeMb
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * Set importeMfact
     *
     * @param integer $importeMfact
     * @return DetalleFactura
     */
    public function setImporteMfact($importeMfact)
    {
        $this->importeMfact = $importeMfact;

        return $this;
    }

    /**
     * Get importeMfact
     *
     * @return integer 
     */
    public function getImporteMfact()
    {
        return $this->importeMfact;
    }

    /**
     * Set impuesto
     *
     * @param string $impuesto
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * Set tipoFactura
     *
     * @param integer $tipoFactura
     * @return DetalleFactura
     */
    public function setTipoFactura($tipoFactura)
    {
        $this->tipoFactura = $tipoFactura;

        return $this;
    }

    /**
     * Get tipoFactura
     *
     * @return integer 
     */
    public function getTipoFactura()
    {
        return $this->tipoFactura;
    }

    /**
     * Set noSerie
     *
     * @param string $noSerie
     * @return DetalleFactura
     */
    public function setNoSerie($noSerie)
    {
        $this->noSerie = $noSerie;

        return $this;
    }

    /**
     * Get noSerie
     *
     * @return string 
     */
    public function getNoSerie()
    {
        return $this->noSerie;
    }

    /**
     * Set condicionesPago
     *
     * @param string $condicionesPago
     * @return DetalleFactura
     */
    public function setCondicionesPago($condicionesPago)
    {
        $this->condicionesPago = $condicionesPago;

        return $this;
    }

    /**
     * Get condicionesPago
     *
     * @return string 
     */
    public function getCondicionesPago()
    {
        return $this->condicionesPago;
    }

    /**
     * Set cantidadDevuelta
     *
     * @param string $cantidadDevuelta
     * @return DetalleFactura
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
     * Set productoOservicioC
     *
     * @param boolean $productoOservicioC
     * @return DetalleFactura
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
     * Set arancelario
     *
     * @param string $arancelario
     * @return DetalleFactura
     */
    public function setArancelario($arancelario)
    {
        $this->arancelario = $arancelario;

        return $this;
    }

    /**
     * Get arancelario
     *
     * @return string 
     */
    public function getArancelario()
    {
        return $this->arancelario;
    }

    /**
     * Set precioCostoumalmacenmb
     *
     * @param string $precioCostoumalmacenmb
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * Set importeCostomb
     *
     * @param integer $importeCostomb
     * @return DetalleFactura
     */
    public function setImporteCostomb($importeCostomb)
    {
        $this->importeCostomb = $importeCostomb;

        return $this;
    }

    /**
     * Get importeCostomb
     *
     * @return integer 
     */
    public function getImporteCostomb()
    {
        return $this->importeCostomb;
    }

    /**
     * Set importeCostomc
     *
     * @param integer $importeCostomc
     * @return DetalleFactura
     */
    public function setImporteCostomc($importeCostomc)
    {
        $this->importeCostomc = $importeCostomc;

        return $this;
    }

    /**
     * Get importeCostomc
     *
     * @return integer 
     */
    public function getImporteCostomc()
    {
        return $this->importeCostomc;
    }

    /**
     * Set precioVentaOriginal
     *
     * @param string $precioVentaOriginal
     * @return DetalleFactura
     */
    public function setPrecioVentaOriginal($precioVentaOriginal)
    {
        $this->precioVentaOriginal = $precioVentaOriginal;

        return $this;
    }

    /**
     * Get precioVentaOriginal
     *
     * @return string 
     */
    public function getPrecioVentaOriginal()
    {
        return $this->precioVentaOriginal;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return DetalleFactura
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set paquete
     *
     * @param string $paquete
     * @return DetalleFactura
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
     * Set bultos
     *
     * @param string $bultos
     * @return DetalleFactura
     */
    public function setBultos($bultos)
    {
        $this->bultos = $bultos;

        return $this;
    }

    /**
     * Get bultos
     *
     * @return string 
     */
    public function getBultos()
    {
        return $this->bultos;
    }

    /**
     * Set comision
     *
     * @param string $comision
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * Set itemscomp
     *
     * @param integer $itemscomp
     * @return DetalleFactura
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
     * Set importeDevueltomb
     *
     * @param integer $importeDevueltomb
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * Set importeRecargomb
     *
     * @param integer $importeRecargomb
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * Set precioRecargomb
     *
     * @param string $precioRecargomb
     * @return DetalleFactura
     */
    public function setPrecioRecargomb($precioRecargomb)
    {
        $this->precioRecargomb = $precioRecargomb;

        return $this;
    }

    /**
     * Get precioRecargomb
     *
     * @return string 
     */
    public function getPrecioRecargomb()
    {
        return $this->precioRecargomb;
    }

    /**
     * Set precioRecargomc
     *
     * @param string $precioRecargomc
     * @return DetalleFactura
     */
    public function setPrecioRecargomc($precioRecargomc)
    {
        $this->precioRecargomc = $precioRecargomc;

        return $this;
    }

    /**
     * Get precioRecargomc
     *
     * @return string 
     */
    public function getPrecioRecargomc()
    {
        return $this->precioRecargomc;
    }

    /**
     * Set precioDesctomb
     *
     * @param string $precioDesctomb
     * @return DetalleFactura
     */
    public function setPrecioDesctomb($precioDesctomb)
    {
        $this->precioDesctomb = $precioDesctomb;

        return $this;
    }

    /**
     * Get precioDesctomb
     *
     * @return string 
     */
    public function getPrecioDesctomb()
    {
        return $this->precioDesctomb;
    }

    /**
     * Set precioDesctomc
     *
     * @param string $precioDesctomc
     * @return DetalleFactura
     */
    public function setPrecioDesctomc($precioDesctomc)
    {
        $this->precioDesctomc = $precioDesctomc;

        return $this;
    }

    /**
     * Get precioDesctomc
     *
     * @return string 
     */
    public function getPrecioDesctomc()
    {
        return $this->precioDesctomc;
    }

    /**
     * Set precioArancelmb
     *
     * @param string $precioArancelmb
     * @return DetalleFactura
     */
    public function setPrecioArancelmb($precioArancelmb)
    {
        $this->precioArancelmb = $precioArancelmb;

        return $this;
    }

    /**
     * Get precioArancelmb
     *
     * @return string 
     */
    public function getPrecioArancelmb()
    {
        return $this->precioArancelmb;
    }

    /**
     * Set precioArancelmc
     *
     * @param string $precioArancelmc
     * @return DetalleFactura
     */
    public function setPrecioArancelmc($precioArancelmc)
    {
        $this->precioArancelmc = $precioArancelmc;

        return $this;
    }

    /**
     * Get precioArancelmc
     *
     * @return string 
     */
    public function getPrecioArancelmc()
    {
        return $this->precioArancelmc;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return DetalleFactura
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
     * Set lotesm
     *
     * @param string $lotesm
     * @return DetalleFactura
     */
    public function setLotesm($lotesm)
    {
        $this->lotesm = $lotesm;

        return $this;
    }

    /**
     * Get lotesm
     *
     * @return string 
     */
    public function getLotesm()
    {
        return $this->lotesm;
    }

    /**
     * Set pesobruto
     *
     * @param integer $pesobruto
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * Set irconsigna
     *
     * @param string $irconsigna
     * @return DetalleFactura
     */
    public function setIrconsigna($irconsigna)
    {
        $this->irconsigna = $irconsigna;

        return $this;
    }

    /**
     * Get irconsigna
     *
     * @return string 
     */
    public function getIrconsigna()
    {
        return $this->irconsigna;
    }

    /**
     * Set contairconsigna
     *
     * @param integer $contairconsigna
     * @return DetalleFactura
     */
    public function setContairconsigna($contairconsigna)
    {
        $this->contairconsigna = $contairconsigna;

        return $this;
    }

    /**
     * Get contairconsigna
     *
     * @return integer 
     */
    public function getContairconsigna()
    {
        return $this->contairconsigna;
    }

    /**
     * Set descCcosto
     *
     * @param string $descCcosto
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * Set empaque
     *
     * @param integer $empaque
     * @return DetalleFactura
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
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return DetalleFactura
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
     * Set factorempaque
     *
     * @param string $factorempaque
     * @return DetalleFactura
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
     * @return DetalleFactura
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
     * @return DetalleFactura
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

    /**
     * Set cubicaje
     *
     * @param integer $cubicaje
     * @return DetalleFactura
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
     * Set paquetecubi
     *
     * @param integer $paquetecubi
     * @return DetalleFactura
     */
    public function setPaquetecubi($paquetecubi)
    {
        $this->paquetecubi = $paquetecubi;

        return $this;
    }

    /**
     * Get paquetecubi
     *
     * @return integer 
     */
    public function getPaquetecubi()
    {
        return $this->paquetecubi;
    }

    /**
     * Set itemscotiza
     *
     * @param integer $itemscotiza
     * @return DetalleFactura
     */
    public function setItemscotiza($itemscotiza)
    {
        $this->itemscotiza = $itemscotiza;

        return $this;
    }

    /**
     * Get itemscotiza
     *
     * @return integer 
     */
    public function getItemscotiza()
    {
        return $this->itemscotiza;
    }
}
