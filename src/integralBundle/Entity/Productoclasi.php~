<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productoclasi
 *
 * @ORM\Table(name="ProductoClasi")
 * @ORM\Entity
 */
class Productoclasi
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @ORM\Column(name="UM_Almacen", type="string", length=5, nullable=false)
     */
    private $umAlmacen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Priorizado", type="boolean", nullable=false)
     */
    private $priorizado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Clave", type="smallint", nullable=false)
     */
    private $idClave;

    /**
     * @var integer
     *
     * @ORM\Column(name="Indice_RP", type="integer", nullable=false)
     */
    private $indiceRp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tasa_cambio", type="integer", nullable=false)
     */
    private $tasaCambio;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_Original", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_Calculado", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCalculado;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_OriginalMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioOriginalmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContadorCP", type="integer", nullable=false)
     */
    private $contadorcp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tc_Irpm", type="smallint", nullable=false)
     */
    private $tcIrpm;

    /**
     * @var string
     *
     * @ORM\Column(name="Formula", type="string", length=255, nullable=false)
     */
    private $formula;



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
     * @return Productoclasi
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
     * @return Productoclasi
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
     * Set priorizado
     *
     * @param boolean $priorizado
     * @return Productoclasi
     */
    public function setPriorizado($priorizado)
    {
        $this->priorizado = $priorizado;

        return $this;
    }

    /**
     * Get priorizado
     *
     * @return boolean 
     */
    public function getPriorizado()
    {
        return $this->priorizado;
    }

    /**
     * Set idClave
     *
     * @param integer $idClave
     * @return Productoclasi
     */
    public function setIdClave($idClave)
    {
        $this->idClave = $idClave;

        return $this;
    }

    /**
     * Get idClave
     *
     * @return integer 
     */
    public function getIdClave()
    {
        return $this->idClave;
    }

    /**
     * Set indiceRp
     *
     * @param integer $indiceRp
     * @return Productoclasi
     */
    public function setIndiceRp($indiceRp)
    {
        $this->indiceRp = $indiceRp;

        return $this;
    }

    /**
     * Get indiceRp
     *
     * @return integer 
     */
    public function getIndiceRp()
    {
        return $this->indiceRp;
    }

    /**
     * Set tasaCambio
     *
     * @param integer $tasaCambio
     * @return Productoclasi
     */
    public function setTasaCambio($tasaCambio)
    {
        $this->tasaCambio = $tasaCambio;

        return $this;
    }

    /**
     * Get tasaCambio
     *
     * @return integer 
     */
    public function getTasaCambio()
    {
        return $this->tasaCambio;
    }

    /**
     * Set precioOriginal
     *
     * @param string $precioOriginal
     * @return Productoclasi
     */
    public function setPrecioOriginal($precioOriginal)
    {
        $this->precioOriginal = $precioOriginal;

        return $this;
    }

    /**
     * Get precioOriginal
     *
     * @return string 
     */
    public function getPrecioOriginal()
    {
        return $this->precioOriginal;
    }

    /**
     * Set precioCalculado
     *
     * @param string $precioCalculado
     * @return Productoclasi
     */
    public function setPrecioCalculado($precioCalculado)
    {
        $this->precioCalculado = $precioCalculado;

        return $this;
    }

    /**
     * Get precioCalculado
     *
     * @return string 
     */
    public function getPrecioCalculado()
    {
        return $this->precioCalculado;
    }

    /**
     * Set precioOriginalmc
     *
     * @param string $precioOriginalmc
     * @return Productoclasi
     */
    public function setPrecioOriginalmc($precioOriginalmc)
    {
        $this->precioOriginalmc = $precioOriginalmc;

        return $this;
    }

    /**
     * Get precioOriginalmc
     *
     * @return string 
     */
    public function getPrecioOriginalmc()
    {
        return $this->precioOriginalmc;
    }

    /**
     * Set contadorcp
     *
     * @param integer $contadorcp
     * @return Productoclasi
     */
    public function setContadorcp($contadorcp)
    {
        $this->contadorcp = $contadorcp;

        return $this;
    }

    /**
     * Get contadorcp
     *
     * @return integer 
     */
    public function getContadorcp()
    {
        return $this->contadorcp;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Productoclasi
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set tcIrpm
     *
     * @param integer $tcIrpm
     * @return Productoclasi
     */
    public function setTcIrpm($tcIrpm)
    {
        $this->tcIrpm = $tcIrpm;

        return $this;
    }

    /**
     * Get tcIrpm
     *
     * @return integer 
     */
    public function getTcIrpm()
    {
        return $this->tcIrpm;
    }

    /**
     * Set formula
     *
     * @param string $formula
     * @return Productoclasi
     */
    public function setFormula($formula)
    {
        $this->formula = $formula;

        return $this;
    }

    /**
     * Get formula
     *
     * @return string 
     */
    public function getFormula()
    {
        return $this->formula;
    }
}
