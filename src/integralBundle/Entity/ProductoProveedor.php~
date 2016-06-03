<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoProveedor
 *
 * @ORM\Table(name="Producto_Proveedor")
 * @ORM\Entity
 */
class ProductoProveedor
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ProductoProveedor", type="string", length=30, nullable=false)
     */
    private $idProductoproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ProductoProveedor", type="string", length=255, nullable=false)
     */
    private $descProductoproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Um_Proveedor", type="string", length=5, nullable=false)
     */
    private $umProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Factor_Conversion", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $factorConversion;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Minima", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidadMinima;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Habitual", type="boolean", nullable=false)
     */
    private $habitual;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostomb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Suspendido", type="boolean", nullable=false)
     */
    private $suspendido;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Reabastecer", type="smallint", nullable=false)
     */
    private $diasReabastecer;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porc_MB", type="integer", nullable=false)
     */
    private $porcMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porc_MC", type="integer", nullable=false)
     */
    private $porcMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoImport", type="integer", nullable=false)
     */
    private $costoimport;

    /**
     * @var string
     *
     * @ORM\Column(name="MonedaImport", type="string", length=5, nullable=false)
     */
    private $monedaimport;



    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return ProductoProveedor
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
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return ProductoProveedor
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
     * Set idProductoproveedor
     *
     * @param string $idProductoproveedor
     * @return ProductoProveedor
     */
    public function setIdProductoproveedor($idProductoproveedor)
    {
        $this->idProductoproveedor = $idProductoproveedor;

        return $this;
    }

    /**
     * Get idProductoproveedor
     *
     * @return string 
     */
    public function getIdProductoproveedor()
    {
        return $this->idProductoproveedor;
    }

    /**
     * Set descProductoproveedor
     *
     * @param string $descProductoproveedor
     * @return ProductoProveedor
     */
    public function setDescProductoproveedor($descProductoproveedor)
    {
        $this->descProductoproveedor = $descProductoproveedor;

        return $this;
    }

    /**
     * Get descProductoproveedor
     *
     * @return string 
     */
    public function getDescProductoproveedor()
    {
        return $this->descProductoproveedor;
    }

    /**
     * Set umProveedor
     *
     * @param string $umProveedor
     * @return ProductoProveedor
     */
    public function setUmProveedor($umProveedor)
    {
        $this->umProveedor = $umProveedor;

        return $this;
    }

    /**
     * Get umProveedor
     *
     * @return string 
     */
    public function getUmProveedor()
    {
        return $this->umProveedor;
    }

    /**
     * Set factorConversion
     *
     * @param string $factorConversion
     * @return ProductoProveedor
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
     * Set cantidadMinima
     *
     * @param string $cantidadMinima
     * @return ProductoProveedor
     */
    public function setCantidadMinima($cantidadMinima)
    {
        $this->cantidadMinima = $cantidadMinima;

        return $this;
    }

    /**
     * Get cantidadMinima
     *
     * @return string 
     */
    public function getCantidadMinima()
    {
        return $this->cantidadMinima;
    }

    /**
     * Set habitual
     *
     * @param boolean $habitual
     * @return ProductoProveedor
     */
    public function setHabitual($habitual)
    {
        $this->habitual = $habitual;

        return $this;
    }

    /**
     * Get habitual
     *
     * @return boolean 
     */
    public function getHabitual()
    {
        return $this->habitual;
    }

    /**
     * Set precioCostomb
     *
     * @param string $precioCostomb
     * @return ProductoProveedor
     */
    public function setPrecioCostomb($precioCostomb)
    {
        $this->precioCostomb = $precioCostomb;

        return $this;
    }

    /**
     * Get precioCostomb
     *
     * @return string 
     */
    public function getPrecioCostomb()
    {
        return $this->precioCostomb;
    }

    /**
     * Set precioCostomc
     *
     * @param string $precioCostomc
     * @return ProductoProveedor
     */
    public function setPrecioCostomc($precioCostomc)
    {
        $this->precioCostomc = $precioCostomc;

        return $this;
    }

    /**
     * Get precioCostomc
     *
     * @return string 
     */
    public function getPrecioCostomc()
    {
        return $this->precioCostomc;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return ProductoProveedor
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set suspendido
     *
     * @param boolean $suspendido
     * @return ProductoProveedor
     */
    public function setSuspendido($suspendido)
    {
        $this->suspendido = $suspendido;

        return $this;
    }

    /**
     * Get suspendido
     *
     * @return boolean 
     */
    public function getSuspendido()
    {
        return $this->suspendido;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return ProductoProveedor
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set diasReabastecer
     *
     * @param integer $diasReabastecer
     * @return ProductoProveedor
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
     * Set porcMb
     *
     * @param integer $porcMb
     * @return ProductoProveedor
     */
    public function setPorcMb($porcMb)
    {
        $this->porcMb = $porcMb;

        return $this;
    }

    /**
     * Get porcMb
     *
     * @return integer 
     */
    public function getPorcMb()
    {
        return $this->porcMb;
    }

    /**
     * Set porcMc
     *
     * @param integer $porcMc
     * @return ProductoProveedor
     */
    public function setPorcMc($porcMc)
    {
        $this->porcMc = $porcMc;

        return $this;
    }

    /**
     * Get porcMc
     *
     * @return integer 
     */
    public function getPorcMc()
    {
        return $this->porcMc;
    }

    /**
     * Set costoimport
     *
     * @param integer $costoimport
     * @return ProductoProveedor
     */
    public function setCostoimport($costoimport)
    {
        $this->costoimport = $costoimport;

        return $this;
    }

    /**
     * Get costoimport
     *
     * @return integer 
     */
    public function getCostoimport()
    {
        return $this->costoimport;
    }

    /**
     * Set monedaimport
     *
     * @param string $monedaimport
     * @return ProductoProveedor
     */
    public function setMonedaimport($monedaimport)
    {
        $this->monedaimport = $monedaimport;

        return $this;
    }

    /**
     * Get monedaimport
     *
     * @return string 
     */
    public function getMonedaimport()
    {
        return $this->monedaimport;
    }
}
