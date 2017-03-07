<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetallePedido
 *
 * @ORM\Table(name="Detalle_Pedido")
 * @ORM\Entity
 */
class DetallePedido
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
     * @ORM\Column(name="Id_Pedido", type="integer", nullable=false)
     */
    private $idPedido;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Pedido", type="smallint", nullable=false)
     */
    private $anoPedido;

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
     * @ORM\Column(name="Um_Factura", type="string", length=5, nullable=false)
     */
    private $umFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Factor_Conversion", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $factorConversion;

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
     * @ORM\Column(name="Saldo_Disponible", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $saldoDisponible;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo_Existencia", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $saldoExistencia;

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
     * @ORM\Column(name="DescuentoMB", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $descuentomb;

    /**
     * @var string
     *
     * @ORM\Column(name="DescuentoMC", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $descuentomc;

    /**
     * @var string
     *
     * @ORM\Column(name="RecargoMB", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $recargomb;

    /**
     * @var string
     *
     * @ORM\Column(name="RecargoMC", type="decimal", precision=5, scale=2, nullable=false)
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
     * @var boolean
     *
     * @ORM\Column(name="Producto_oServicio", type="boolean", nullable=false)
     */
    private $productoOservicio;

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
     * @ORM\Column(name="ItemsComp", type="smallint", nullable=false)
     */
    private $itemscomp;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_Venta_Original", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentaOriginal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Facturar", type="boolean", nullable=false)
     */
    private $facturar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad_Facturada", type="integer", nullable=false)
     */
    private $cantidadFacturada;

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
     * @ORM\Column(name="Observaciones", type="string", length=200, nullable=false)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="FactorEmpaque", type="decimal", precision=12, scale=4, nullable=false)
     */
    private $factorempaque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Empaque", type="integer", nullable=false)
     */
    private $empaque;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmacenProd", type="string", length=5, nullable=false)
     */
    private $idAlmacenprod;

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
     * @var string
     *
     * @ORM\Column(name="Reservadas", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $reservadas;



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
     * Set idPedido
     *
     * @param integer $idPedido
     * @return DetallePedido
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get idPedido
     *
     * @return integer 
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetallePedido
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
     * Set anoPedido
     *
     * @param integer $anoPedido
     * @return DetallePedido
     */
    public function setAnoPedido($anoPedido)
    {
        $this->anoPedido = $anoPedido;

        return $this;
    }

    /**
     * Get anoPedido
     *
     * @return integer 
     */
    public function getAnoPedido()
    {
        return $this->anoPedido;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * Set cantidadFactura
     *
     * @param integer $cantidadFactura
     * @return DetallePedido
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
     * @return DetallePedido
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
     * Set saldoDisponible
     *
     * @param string $saldoDisponible
     * @return DetallePedido
     */
    public function setSaldoDisponible($saldoDisponible)
    {
        $this->saldoDisponible = $saldoDisponible;

        return $this;
    }

    /**
     * Get saldoDisponible
     *
     * @return string 
     */
    public function getSaldoDisponible()
    {
        return $this->saldoDisponible;
    }

    /**
     * Set saldoExistencia
     *
     * @param string $saldoExistencia
     * @return DetallePedido
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
     * Set precioVentaumalmacenmb
     *
     * @param string $precioVentaumalmacenmb
     * @return DetallePedido
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
     * @return DetallePedido
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
     * Set descuentomb
     *
     * @param string $descuentomb
     * @return DetallePedido
     */
    public function setDescuentomb($descuentomb)
    {
        $this->descuentomb = $descuentomb;

        return $this;
    }

    /**
     * Get descuentomb
     *
     * @return string 
     */
    public function getDescuentomb()
    {
        return $this->descuentomb;
    }

    /**
     * Set descuentomc
     *
     * @param string $descuentomc
     * @return DetallePedido
     */
    public function setDescuentomc($descuentomc)
    {
        $this->descuentomc = $descuentomc;

        return $this;
    }

    /**
     * Get descuentomc
     *
     * @return string 
     */
    public function getDescuentomc()
    {
        return $this->descuentomc;
    }

    /**
     * Set recargomb
     *
     * @param string $recargomb
     * @return DetallePedido
     */
    public function setRecargomb($recargomb)
    {
        $this->recargomb = $recargomb;

        return $this;
    }

    /**
     * Get recargomb
     *
     * @return string 
     */
    public function getRecargomb()
    {
        return $this->recargomb;
    }

    /**
     * Set recargomc
     *
     * @param string $recargomc
     * @return DetallePedido
     */
    public function setRecargomc($recargomc)
    {
        $this->recargomc = $recargomc;

        return $this;
    }

    /**
     * Get recargomc
     *
     * @return string 
     */
    public function getRecargomc()
    {
        return $this->recargomc;
    }

    /**
     * Set tiporecargomb
     *
     * @param integer $tiporecargomb
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @param integer $arancelmb
     * @return DetallePedido
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
     * @return DetallePedido
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
     * Set precioVentaumfacturamb
     *
     * @param string $precioVentaumfacturamb
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * Set importeMb
     *
     * @param integer $importeMb
     * @return DetallePedido
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
     * @return DetallePedido
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
     * Set importeCostomb
     *
     * @param integer $importeCostomb
     * @return DetallePedido
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
     * @return DetallePedido
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
     * Set productoOservicio
     *
     * @param boolean $productoOservicio
     * @return DetallePedido
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
     * Set impuesto
     *
     * @param string $impuesto
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * Set precioVentaOriginal
     *
     * @param string $precioVentaOriginal
     * @return DetallePedido
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
     * Set facturar
     *
     * @param boolean $facturar
     * @return DetallePedido
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
     * Set cantidadFacturada
     *
     * @param integer $cantidadFacturada
     * @return DetallePedido
     */
    public function setCantidadFacturada($cantidadFacturada)
    {
        $this->cantidadFacturada = $cantidadFacturada;

        return $this;
    }

    /**
     * Get cantidadFacturada
     *
     * @return integer 
     */
    public function getCantidadFacturada()
    {
        return $this->cantidadFacturada;
    }

    /**
     * Set importeRecargomb
     *
     * @param integer $importeRecargomb
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return DetallePedido
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
     * Set factorempaque
     *
     * @param string $factorempaque
     * @return DetallePedido
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
     * Set empaque
     *
     * @param integer $empaque
     * @return DetallePedido
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
     * Set idAlmacenprod
     *
     * @param string $idAlmacenprod
     * @return DetallePedido
     */
    public function setIdAlmacenprod($idAlmacenprod)
    {
        $this->idAlmacenprod = $idAlmacenprod;

        return $this;
    }

    /**
     * Get idAlmacenprod
     *
     * @return string 
     */
    public function getIdAlmacenprod()
    {
        return $this->idAlmacenprod;
    }

    /**
     * Set paquete
     *
     * @param string $paquete
     * @return DetallePedido
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
     * @return DetallePedido
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
     * Set cubicaje
     *
     * @param integer $cubicaje
     * @return DetallePedido
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
     * @return DetallePedido
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
     * Set reservadas
     *
     * @param string $reservadas
     * @return DetallePedido
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
}
