<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Viewselection
 *
 * @ORM\Table(name="ViewSelection")
 * @ORM\Entity
 */
class Viewselection
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
     * @return Viewselection
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
     * @return Viewselection
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
     * @return Viewselection
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
     * @return Viewselection
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
     * @return Viewselection
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
}
