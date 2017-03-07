<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleOrdenproduccion
 *
 * @ORM\Table(name="Detalle_OrdenProduccion")
 * @ORM\Entity
 */
class DetalleOrdenproduccion
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
     * @ORM\Column(name="Id_OProduccion", type="integer", nullable=false)
     */
    private $idOproduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_OProduccion", type="smallint", nullable=false)
     */
    private $anoOproduccion;

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
     * @var integer
     *
     * @ORM\Column(name="ItemsVale", type="smallint", nullable=false)
     */
    private $itemsvale;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoEFMB", type="integer", nullable=false)
     */
    private $costoefmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoEFMC", type="integer", nullable=false)
     */
    private $costoefmc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cierre", type="datetime", nullable=false)
     */
    private $fechaCierre;



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
     * @return DetalleOrdenproduccion
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
     * Set idOproduccion
     *
     * @param integer $idOproduccion
     * @return DetalleOrdenproduccion
     */
    public function setIdOproduccion($idOproduccion)
    {
        $this->idOproduccion = $idOproduccion;

        return $this;
    }

    /**
     * Get idOproduccion
     *
     * @return integer 
     */
    public function getIdOproduccion()
    {
        return $this->idOproduccion;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetalleOrdenproduccion
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
     * Set anoOproduccion
     *
     * @param integer $anoOproduccion
     * @return DetalleOrdenproduccion
     */
    public function setAnoOproduccion($anoOproduccion)
    {
        $this->anoOproduccion = $anoOproduccion;

        return $this;
    }

    /**
     * Get anoOproduccion
     *
     * @return integer 
     */
    public function getAnoOproduccion()
    {
        return $this->anoOproduccion;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return DetalleOrdenproduccion
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
     * @return DetalleOrdenproduccion
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
     * @return DetalleOrdenproduccion
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
     * @return DetalleOrdenproduccion
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
     * @return DetalleOrdenproduccion
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
     * @return DetalleOrdenproduccion
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
     * @return DetalleOrdenproduccion
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
     * @return DetalleOrdenproduccion
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
     * @return DetalleOrdenproduccion
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
     * @return DetalleOrdenproduccion
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
     * @return DetalleOrdenproduccion
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
     * Set itemsvale
     *
     * @param integer $itemsvale
     * @return DetalleOrdenproduccion
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
     * Set costoefmb
     *
     * @param integer $costoefmb
     * @return DetalleOrdenproduccion
     */
    public function setCostoefmb($costoefmb)
    {
        $this->costoefmb = $costoefmb;

        return $this;
    }

    /**
     * Get costoefmb
     *
     * @return integer 
     */
    public function getCostoefmb()
    {
        return $this->costoefmb;
    }

    /**
     * Set costoefmc
     *
     * @param integer $costoefmc
     * @return DetalleOrdenproduccion
     */
    public function setCostoefmc($costoefmc)
    {
        $this->costoefmc = $costoefmc;

        return $this;
    }

    /**
     * Get costoefmc
     *
     * @return integer 
     */
    public function getCostoefmc()
    {
        return $this->costoefmc;
    }

    /**
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     * @return DetalleOrdenproduccion
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
}
