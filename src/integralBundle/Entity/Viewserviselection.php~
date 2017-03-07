<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Viewserviselection
 *
 * @ORM\Table(name="ViewServiSelection")
 * @ORM\Entity
 */
class Viewserviselection
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
     * @ORM\Column(name="Desc_Producto", type="string", length=255, nullable=false)
     */
    private $descProducto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Seleccion", type="boolean", nullable=false)
     */
    private $seleccion;



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
     * @return Viewserviselection
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
     * @return Viewserviselection
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
     * Set seleccion
     *
     * @param boolean $seleccion
     * @return Viewserviselection
     */
    public function setSeleccion($seleccion)
    {
        $this->seleccion = $seleccion;

        return $this;
    }

    /**
     * Get seleccion
     *
     * @return boolean 
     */
    public function getSeleccion()
    {
        return $this->seleccion;
    }
}
