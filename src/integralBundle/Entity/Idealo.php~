<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Idealo
 *
 * @ORM\Table(name="IdealO", indexes={@ORM\Index(name="Ix_Offi", columns={"Id_Producto", "Es_Producto", "Contador1"})})
 * @ORM\Entity
 */
class Idealo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=15, nullable=false)
     */
    private $idProducto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Es_Producto", type="boolean", nullable=false)
     */
    private $esProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Clave", type="string", length=8, nullable=false)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="UM", type="string", length=2, nullable=false)
     */
    private $um;

    /**
     * @var string
     *
     * @ORM\Column(name="Col001", type="string", length=225, nullable=false)
     */
    private $col001;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio1", type="string", length=10, nullable=false)
     */
    private $precio1;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio2", type="string", length=10, nullable=false)
     */
    private $precio2;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio3", type="string", length=10, nullable=false)
     */
    private $precio3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;



    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return Idealo
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
     * Set esProducto
     *
     * @param boolean $esProducto
     * @return Idealo
     */
    public function setEsProducto($esProducto)
    {
        $this->esProducto = $esProducto;

        return $this;
    }

    /**
     * Get esProducto
     *
     * @return boolean 
     */
    public function getEsProducto()
    {
        return $this->esProducto;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return Idealo
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set um
     *
     * @param string $um
     * @return Idealo
     */
    public function setUm($um)
    {
        $this->um = $um;

        return $this;
    }

    /**
     * Get um
     *
     * @return string 
     */
    public function getUm()
    {
        return $this->um;
    }

    /**
     * Set col001
     *
     * @param string $col001
     * @return Idealo
     */
    public function setCol001($col001)
    {
        $this->col001 = $col001;

        return $this;
    }

    /**
     * Get col001
     *
     * @return string 
     */
    public function getCol001()
    {
        return $this->col001;
    }

    /**
     * Set precio1
     *
     * @param string $precio1
     * @return Idealo
     */
    public function setPrecio1($precio1)
    {
        $this->precio1 = $precio1;

        return $this;
    }

    /**
     * Get precio1
     *
     * @return string 
     */
    public function getPrecio1()
    {
        return $this->precio1;
    }

    /**
     * Set precio2
     *
     * @param string $precio2
     * @return Idealo
     */
    public function setPrecio2($precio2)
    {
        $this->precio2 = $precio2;

        return $this;
    }

    /**
     * Get precio2
     *
     * @return string 
     */
    public function getPrecio2()
    {
        return $this->precio2;
    }

    /**
     * Set precio3
     *
     * @param string $precio3
     * @return Idealo
     */
    public function setPrecio3($precio3)
    {
        $this->precio3 = $precio3;

        return $this;
    }

    /**
     * Get precio3
     *
     * @return string 
     */
    public function getPrecio3()
    {
        return $this->precio3;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Idealo
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}
