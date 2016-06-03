<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetalleFactura
 *
 * @ORM\Table(name="RH_Detalle_Factura")
 * @ORM\Entity
 */
class RhDetalleFactura
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
     * @ORM\Column(name="Precio_VentaUmAlmacenMB", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $precioVentaumalmacenmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaUmAlmacenMC", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $precioVentaumalmacenmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_VentaUmFacturaMB", type="integer", nullable=false)
     */
    private $precioVentaumfacturamb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_VentaUmFacturaMC", type="integer", nullable=false)
     */
    private $precioVentaumfacturamc;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaTotalMB", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $precioVentatotalmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaTotalMC", type="decimal", precision=19, scale=6, nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="Precio_Venta_Original", type="integer", nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
     */
    private $item;

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


}
