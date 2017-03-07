<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Existencia
 *
 * @ORM\Table(name="Existencia", indexes={@ORM\Index(name="IX_Producto_Existencia", columns={"Id_Producto", "Id_Almacen"})})
 * @ORM\Entity
 */
class Existencia
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlmacen;

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
     * @ORM\Column(name="Existencia_Actual", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $existenciaActual;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMB", type="integer", nullable=false)
     */
    private $importemb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMC", type="integer", nullable=false)
     */
    private $importemc;

    /**
     * @var string
     *
     * @ORM\Column(name="Minimo", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $minimo;

    /**
     * @var string
     *
     * @ORM\Column(name="Maximo", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $maximo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Lotes", type="integer", nullable=false)
     */
    private $lotes;

    /**
     * @var string
     *
     * @ORM\Column(name="Pto_Reorder", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $ptoReorder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Componentes", type="boolean", nullable=false)
     */
    private $componentes;

    /**
     * @var string
     *
     * @ORM\Column(name="Pto_Seguridad", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $ptoSeguridad;

    /**
     * @var string
     *
     * @ORM\Column(name="Venta_Promedio", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $ventaPromedio;

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
     * @var string
     *
     * @ORM\Column(name="ImpuestoMB", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $impuestomb;

    /**
     * @var string
     *
     * @ORM\Column(name="ABC_PorImporte", type="string", length=1, nullable=false)
     */
    private $abcPorimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="ABC_PorImporteValor", type="decimal", precision=9, scale=6, nullable=false)
     */
    private $abcPorimportevalor;

    /**
     * @var string
     *
     * @ORM\Column(name="ABC_PorConsumoProm", type="string", length=1, nullable=false)
     */
    private $abcPorconsumoprom;

    /**
     * @var string
     *
     * @ORM\Column(name="ABC_PorImpConsumoProm", type="decimal", precision=9, scale=6, nullable=false)
     */
    private $abcPorimpconsumoprom;

    /**
     * @var string
     *
     * @ORM\Column(name="ABC_PorVentaUM", type="string", length=1, nullable=false)
     */
    private $abcPorventaum;

    /**
     * @var string
     *
     * @ORM\Column(name="ABC_PorImpVentaUM", type="decimal", precision=9, scale=6, nullable=false)
     */
    private $abcPorimpventaum;

    /**
     * @var string
     *
     * @ORM\Column(name="ABC_PorRota", type="string", length=1, nullable=false)
     */
    private $abcPorrota;

    /**
     * @var string
     *
     * @ORM\Column(name="ABC_PorImpRota", type="decimal", precision=9, scale=6, nullable=false)
     */
    private $abcPorimprota;

    /**
     * @var string
     *
     * @ORM\Column(name="ABC_PorImporteCostoVenta", type="string", length=1, nullable=false)
     */
    private $abcPorimportecostoventa;

    /**
     * @var string
     *
     * @ORM\Column(name="ABC_PorImporteCostoVentaValor", type="decimal", precision=9, scale=6, nullable=false)
     */
    private $abcPorimportecostoventavalor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Empaque", type="integer", nullable=false)
     */
    private $empaque;

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
     * @ORM\Column(name="Id_ClasiInicio", type="string", length=12, nullable=false)
     */
    private $idClasiinicio;



    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return Existencia
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
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set valoraCosto
     *
     * @param integer $valoraCosto
     * @return Existencia
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
     * @return Existencia
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
     * @return Existencia
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
     * Set existenciaActual
     *
     * @param string $existenciaActual
     * @return Existencia
     */
    public function setExistenciaActual($existenciaActual)
    {
        $this->existenciaActual = $existenciaActual;

        return $this;
    }

    /**
     * Get existenciaActual
     *
     * @return string 
     */
    public function getExistenciaActual()
    {
        return $this->existenciaActual;
    }

    /**
     * Set importemb
     *
     * @param integer $importemb
     * @return Existencia
     */
    public function setImportemb($importemb)
    {
        $this->importemb = $importemb;

        return $this;
    }

    /**
     * Get importemb
     *
     * @return integer 
     */
    public function getImportemb()
    {
        return $this->importemb;
    }

    /**
     * Set importemc
     *
     * @param integer $importemc
     * @return Existencia
     */
    public function setImportemc($importemc)
    {
        $this->importemc = $importemc;

        return $this;
    }

    /**
     * Get importemc
     *
     * @return integer 
     */
    public function getImportemc()
    {
        return $this->importemc;
    }

    /**
     * Set minimo
     *
     * @param string $minimo
     * @return Existencia
     */
    public function setMinimo($minimo)
    {
        $this->minimo = $minimo;

        return $this;
    }

    /**
     * Get minimo
     *
     * @return string 
     */
    public function getMinimo()
    {
        return $this->minimo;
    }

    /**
     * Set maximo
     *
     * @param string $maximo
     * @return Existencia
     */
    public function setMaximo($maximo)
    {
        $this->maximo = $maximo;

        return $this;
    }

    /**
     * Get maximo
     *
     * @return string 
     */
    public function getMaximo()
    {
        return $this->maximo;
    }

    /**
     * Set lotes
     *
     * @param integer $lotes
     * @return Existencia
     */
    public function setLotes($lotes)
    {
        $this->lotes = $lotes;

        return $this;
    }

    /**
     * Get lotes
     *
     * @return integer 
     */
    public function getLotes()
    {
        return $this->lotes;
    }

    /**
     * Set ptoReorder
     *
     * @param string $ptoReorder
     * @return Existencia
     */
    public function setPtoReorder($ptoReorder)
    {
        $this->ptoReorder = $ptoReorder;

        return $this;
    }

    /**
     * Get ptoReorder
     *
     * @return string 
     */
    public function getPtoReorder()
    {
        return $this->ptoReorder;
    }

    /**
     * Set componentes
     *
     * @param boolean $componentes
     * @return Existencia
     */
    public function setComponentes($componentes)
    {
        $this->componentes = $componentes;

        return $this;
    }

    /**
     * Get componentes
     *
     * @return boolean 
     */
    public function getComponentes()
    {
        return $this->componentes;
    }

    /**
     * Set ptoSeguridad
     *
     * @param string $ptoSeguridad
     * @return Existencia
     */
    public function setPtoSeguridad($ptoSeguridad)
    {
        $this->ptoSeguridad = $ptoSeguridad;

        return $this;
    }

    /**
     * Get ptoSeguridad
     *
     * @return string 
     */
    public function getPtoSeguridad()
    {
        return $this->ptoSeguridad;
    }

    /**
     * Set ventaPromedio
     *
     * @param string $ventaPromedio
     * @return Existencia
     */
    public function setVentaPromedio($ventaPromedio)
    {
        $this->ventaPromedio = $ventaPromedio;

        return $this;
    }

    /**
     * Get ventaPromedio
     *
     * @return string 
     */
    public function getVentaPromedio()
    {
        return $this->ventaPromedio;
    }

    /**
     * Set precioCostoserviciomb
     *
     * @param integer $precioCostoserviciomb
     * @return Existencia
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
     * @return Existencia
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
     * Set impuestomb
     *
     * @param string $impuestomb
     * @return Existencia
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
     * Set abcPorimporte
     *
     * @param string $abcPorimporte
     * @return Existencia
     */
    public function setAbcPorimporte($abcPorimporte)
    {
        $this->abcPorimporte = $abcPorimporte;

        return $this;
    }

    /**
     * Get abcPorimporte
     *
     * @return string 
     */
    public function getAbcPorimporte()
    {
        return $this->abcPorimporte;
    }

    /**
     * Set abcPorimportevalor
     *
     * @param string $abcPorimportevalor
     * @return Existencia
     */
    public function setAbcPorimportevalor($abcPorimportevalor)
    {
        $this->abcPorimportevalor = $abcPorimportevalor;

        return $this;
    }

    /**
     * Get abcPorimportevalor
     *
     * @return string 
     */
    public function getAbcPorimportevalor()
    {
        return $this->abcPorimportevalor;
    }

    /**
     * Set abcPorconsumoprom
     *
     * @param string $abcPorconsumoprom
     * @return Existencia
     */
    public function setAbcPorconsumoprom($abcPorconsumoprom)
    {
        $this->abcPorconsumoprom = $abcPorconsumoprom;

        return $this;
    }

    /**
     * Get abcPorconsumoprom
     *
     * @return string 
     */
    public function getAbcPorconsumoprom()
    {
        return $this->abcPorconsumoprom;
    }

    /**
     * Set abcPorimpconsumoprom
     *
     * @param string $abcPorimpconsumoprom
     * @return Existencia
     */
    public function setAbcPorimpconsumoprom($abcPorimpconsumoprom)
    {
        $this->abcPorimpconsumoprom = $abcPorimpconsumoprom;

        return $this;
    }

    /**
     * Get abcPorimpconsumoprom
     *
     * @return string 
     */
    public function getAbcPorimpconsumoprom()
    {
        return $this->abcPorimpconsumoprom;
    }

    /**
     * Set abcPorventaum
     *
     * @param string $abcPorventaum
     * @return Existencia
     */
    public function setAbcPorventaum($abcPorventaum)
    {
        $this->abcPorventaum = $abcPorventaum;

        return $this;
    }

    /**
     * Get abcPorventaum
     *
     * @return string 
     */
    public function getAbcPorventaum()
    {
        return $this->abcPorventaum;
    }

    /**
     * Set abcPorimpventaum
     *
     * @param string $abcPorimpventaum
     * @return Existencia
     */
    public function setAbcPorimpventaum($abcPorimpventaum)
    {
        $this->abcPorimpventaum = $abcPorimpventaum;

        return $this;
    }

    /**
     * Get abcPorimpventaum
     *
     * @return string 
     */
    public function getAbcPorimpventaum()
    {
        return $this->abcPorimpventaum;
    }

    /**
     * Set abcPorrota
     *
     * @param string $abcPorrota
     * @return Existencia
     */
    public function setAbcPorrota($abcPorrota)
    {
        $this->abcPorrota = $abcPorrota;

        return $this;
    }

    /**
     * Get abcPorrota
     *
     * @return string 
     */
    public function getAbcPorrota()
    {
        return $this->abcPorrota;
    }

    /**
     * Set abcPorimprota
     *
     * @param string $abcPorimprota
     * @return Existencia
     */
    public function setAbcPorimprota($abcPorimprota)
    {
        $this->abcPorimprota = $abcPorimprota;

        return $this;
    }

    /**
     * Get abcPorimprota
     *
     * @return string 
     */
    public function getAbcPorimprota()
    {
        return $this->abcPorimprota;
    }

    /**
     * Set abcPorimportecostoventa
     *
     * @param string $abcPorimportecostoventa
     * @return Existencia
     */
    public function setAbcPorimportecostoventa($abcPorimportecostoventa)
    {
        $this->abcPorimportecostoventa = $abcPorimportecostoventa;

        return $this;
    }

    /**
     * Get abcPorimportecostoventa
     *
     * @return string 
     */
    public function getAbcPorimportecostoventa()
    {
        return $this->abcPorimportecostoventa;
    }

    /**
     * Set abcPorimportecostoventavalor
     *
     * @param string $abcPorimportecostoventavalor
     * @return Existencia
     */
    public function setAbcPorimportecostoventavalor($abcPorimportecostoventavalor)
    {
        $this->abcPorimportecostoventavalor = $abcPorimportecostoventavalor;

        return $this;
    }

    /**
     * Get abcPorimportecostoventavalor
     *
     * @return string 
     */
    public function getAbcPorimportecostoventavalor()
    {
        return $this->abcPorimportecostoventavalor;
    }

    /**
     * Set empaque
     *
     * @param integer $empaque
     * @return Existencia
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
     * Set idElemgasto
     *
     * @param string $idElemgasto
     * @return Existencia
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
     * @return Existencia
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
     * Set idElemgastomc
     *
     * @param string $idElemgastomc
     * @return Existencia
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
     * @return Existencia
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
     * Set idClasiinicio
     *
     * @param string $idClasiinicio
     * @return Existencia
     */
    public function setIdClasiinicio($idClasiinicio)
    {
        $this->idClasiinicio = $idClasiinicio;

        return $this;
    }

    /**
     * Get idClasiinicio
     *
     * @return string 
     */
    public function getIdClasiinicio()
    {
        return $this->idClasiinicio;
    }
}
