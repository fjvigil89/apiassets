<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportRecepciondetalle
 *
 * @ORM\Table(name="Import_RecepcionDetalle")
 * @ORM\Entity
 */
class ImportRecepciondetalle
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
     * @ORM\Column(name="Referencia", type="string", length=40, nullable=false)
     */
    private $referencia;

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
     * @return ImportRecepciondetalle
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
     * @return ImportRecepciondetalle
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
     * Set idRecepcion
     *
     * @param integer $idRecepcion
     * @return ImportRecepciondetalle
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
     * @return ImportRecepciondetalle
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
     * @return ImportRecepciondetalle
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
     * Set codigo
     *
     * @param string $codigo
     * @return ImportRecepciondetalle
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
     * @return ImportRecepciondetalle
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
     * @return ImportRecepciondetalle
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
     * @return ImportRecepciondetalle
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
     * @return ImportRecepciondetalle
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
     * Set enalmacen
     *
     * @param boolean $enalmacen
     * @return ImportRecepciondetalle
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
     * @return ImportRecepciondetalle
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
