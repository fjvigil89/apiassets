<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportFacturadetalle
 *
 * @ORM\Table(name="Import_FacturaDetalle")
 * @ORM\Entity
 */
class ImportFacturadetalle
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
     * @var integer
     *
     * @ORM\Column(name="Items", type="integer", nullable=false)
     */
    private $items;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=20, nullable=false)
     */
    private $referencia;

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
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=20, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto", type="string", length=255, nullable=false)
     */
    private $descProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="UM_Almacen", type="string", length=5, nullable=false)
     */
    private $umAlmacen;

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
     * @var integer
     *
     * @ORM\Column(name="CostoMB", type="integer", nullable=false)
     */
    private $costomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoMC", type="integer", nullable=false)
     */
    private $costomc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EnAlmacen", type="boolean", nullable=false)
     */
    private $enalmacen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Producto_oServicio", type="boolean", nullable=false)
     */
    private $productoOservicio;



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
     * Set items
     *
     * @param integer $items
     * @return ImportFacturadetalle
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
     * Set referencia
     *
     * @param string $referencia
     * @return ImportFacturadetalle
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
     * Set idFactura
     *
     * @param integer $idFactura
     * @return ImportFacturadetalle
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
     * @return ImportFacturadetalle
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
     * @return ImportFacturadetalle
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
     * Set codigo
     *
     * @param string $codigo
     * @return ImportFacturadetalle
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descProducto
     *
     * @param string $descProducto
     * @return ImportFacturadetalle
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
     * @return ImportFacturadetalle
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
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return ImportFacturadetalle
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
     * @return ImportFacturadetalle
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
     * Set costomb
     *
     * @param integer $costomb
     * @return ImportFacturadetalle
     */
    public function setCostomb($costomb)
    {
        $this->costomb = $costomb;

        return $this;
    }

    /**
     * Get costomb
     *
     * @return integer 
     */
    public function getCostomb()
    {
        return $this->costomb;
    }

    /**
     * Set costomc
     *
     * @param integer $costomc
     * @return ImportFacturadetalle
     */
    public function setCostomc($costomc)
    {
        $this->costomc = $costomc;

        return $this;
    }

    /**
     * Get costomc
     *
     * @return integer 
     */
    public function getCostomc()
    {
        return $this->costomc;
    }

    /**
     * Set enalmacen
     *
     * @param boolean $enalmacen
     * @return ImportFacturadetalle
     */
    public function setEnalmacen($enalmacen)
    {
        $this->enalmacen = $enalmacen;

        return $this;
    }

    /**
     * Get enalmacen
     *
     * @return boolean 
     */
    public function getEnalmacen()
    {
        return $this->enalmacen;
    }

    /**
     * Set productoOservicio
     *
     * @param boolean $productoOservicio
     * @return ImportFacturadetalle
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
}
