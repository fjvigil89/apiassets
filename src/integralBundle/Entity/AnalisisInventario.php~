<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnalisisInventario
 *
 * @ORM\Table(name="Analisis_Inventario")
 * @ORM\Entity
 */
class AnalisisInventario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_SPID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpid;

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
     */
    private $idAlmacen;

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
     * @var string
     *
     * @ORM\Column(name="Pto_Reorder", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $ptoReorder;

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
     * @var string
     *
     * @ORM\Column(name="Desc_Proveedor", type="string", length=50, nullable=false)
     */
    private $descProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto", type="string", length=255, nullable=false)
     */
    private $descProducto;

    /**
     * @var integer
     *
     * @ORM\Column(name="dias_reabastecer", type="smallint", nullable=false)
     */
    private $diasReabastecer;

    /**
     * @var string
     *
     * @ORM\Column(name="minimo_calculo", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $minimoCalculo;

    /**
     * @var string
     *
     * @ORM\Column(name="venta_calculado", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $ventaCalculado;

    /**
     * @var string
     *
     * @ORM\Column(name="ss_cubierto", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $ssCubierto;

    /**
     * @var string
     *
     * @ORM\Column(name="ss_real", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $ssReal;

    /**
     * @var string
     *
     * @ORM\Column(name="ss_var", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $ssVar;

    /**
     * @var string
     *
     * @ORM\Column(name="reorder_calculado", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $reorderCalculado;

    /**
     * @var string
     *
     * @ORM\Column(name="UM_Almacen", type="string", length=5, nullable=false)
     */
    private $umAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     */
    private $idProveedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_CostoMB", type="integer", nullable=false)
     */
    private $precioCostomb;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ProveHabitual", type="boolean", nullable=false)
     */
    private $provehabitual;

    /**
     * @var string
     *
     * @ORM\Column(name="maximo_calculo", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $maximoCalculo;



    /**
     * Get idSpid
     *
     * @return integer 
     */
    public function getIdSpid()
    {
        return $this->idSpid;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return AnalisisInventario
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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return AnalisisInventario
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
     * Set existenciaActual
     *
     * @param string $existenciaActual
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * Set ptoReorder
     *
     * @param string $ptoReorder
     * @return AnalisisInventario
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
     * Set ptoSeguridad
     *
     * @param string $ptoSeguridad
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * Set abcPorimporte
     *
     * @param string $abcPorimporte
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * @return AnalisisInventario
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
     * Set descProveedor
     *
     * @param string $descProveedor
     * @return AnalisisInventario
     */
    public function setDescProveedor($descProveedor)
    {
        $this->descProveedor = $descProveedor;

        return $this;
    }

    /**
     * Get descProveedor
     *
     * @return string 
     */
    public function getDescProveedor()
    {
        return $this->descProveedor;
    }

    /**
     * Set descProducto
     *
     * @param string $descProducto
     * @return AnalisisInventario
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
     * Set diasReabastecer
     *
     * @param integer $diasReabastecer
     * @return AnalisisInventario
     */
    public function setDiasReabastecer($diasReabastecer)
    {
        $this->diasReabastecer = $diasReabastecer;

        return $this;
    }

    /**
     * Get diasReabastecer
     *
     * @return integer 
     */
    public function getDiasReabastecer()
    {
        return $this->diasReabastecer;
    }

    /**
     * Set minimoCalculo
     *
     * @param string $minimoCalculo
     * @return AnalisisInventario
     */
    public function setMinimoCalculo($minimoCalculo)
    {
        $this->minimoCalculo = $minimoCalculo;

        return $this;
    }

    /**
     * Get minimoCalculo
     *
     * @return string 
     */
    public function getMinimoCalculo()
    {
        return $this->minimoCalculo;
    }

    /**
     * Set ventaCalculado
     *
     * @param string $ventaCalculado
     * @return AnalisisInventario
     */
    public function setVentaCalculado($ventaCalculado)
    {
        $this->ventaCalculado = $ventaCalculado;

        return $this;
    }

    /**
     * Get ventaCalculado
     *
     * @return string 
     */
    public function getVentaCalculado()
    {
        return $this->ventaCalculado;
    }

    /**
     * Set ssCubierto
     *
     * @param string $ssCubierto
     * @return AnalisisInventario
     */
    public function setSsCubierto($ssCubierto)
    {
        $this->ssCubierto = $ssCubierto;

        return $this;
    }

    /**
     * Get ssCubierto
     *
     * @return string 
     */
    public function getSsCubierto()
    {
        return $this->ssCubierto;
    }

    /**
     * Set ssReal
     *
     * @param string $ssReal
     * @return AnalisisInventario
     */
    public function setSsReal($ssReal)
    {
        $this->ssReal = $ssReal;

        return $this;
    }

    /**
     * Get ssReal
     *
     * @return string 
     */
    public function getSsReal()
    {
        return $this->ssReal;
    }

    /**
     * Set ssVar
     *
     * @param string $ssVar
     * @return AnalisisInventario
     */
    public function setSsVar($ssVar)
    {
        $this->ssVar = $ssVar;

        return $this;
    }

    /**
     * Get ssVar
     *
     * @return string 
     */
    public function getSsVar()
    {
        return $this->ssVar;
    }

    /**
     * Set reorderCalculado
     *
     * @param string $reorderCalculado
     * @return AnalisisInventario
     */
    public function setReorderCalculado($reorderCalculado)
    {
        $this->reorderCalculado = $reorderCalculado;

        return $this;
    }

    /**
     * Get reorderCalculado
     *
     * @return string 
     */
    public function getReorderCalculado()
    {
        return $this->reorderCalculado;
    }

    /**
     * Set umAlmacen
     *
     * @param string $umAlmacen
     * @return AnalisisInventario
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
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return AnalisisInventario
     */
    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return string 
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set precioCostomb
     *
     * @param integer $precioCostomb
     * @return AnalisisInventario
     */
    public function setPrecioCostomb($precioCostomb)
    {
        $this->precioCostomb = $precioCostomb;

        return $this;
    }

    /**
     * Get precioCostomb
     *
     * @return integer 
     */
    public function getPrecioCostomb()
    {
        return $this->precioCostomb;
    }

    /**
     * Set provehabitual
     *
     * @param boolean $provehabitual
     * @return AnalisisInventario
     */
    public function setProvehabitual($provehabitual)
    {
        $this->provehabitual = $provehabitual;

        return $this;
    }

    /**
     * Get provehabitual
     *
     * @return boolean 
     */
    public function getProvehabitual()
    {
        return $this->provehabitual;
    }

    /**
     * Set maximoCalculo
     *
     * @param string $maximoCalculo
     * @return AnalisisInventario
     */
    public function setMaximoCalculo($maximoCalculo)
    {
        $this->maximoCalculo = $maximoCalculo;

        return $this;
    }

    /**
     * Get maximoCalculo
     *
     * @return string 
     */
    public function getMaximoCalculo()
    {
        return $this->maximoCalculo;
    }
}
