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


}
