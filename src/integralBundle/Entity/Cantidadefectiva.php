<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cantidadefectiva
 *
 * @ORM\Table(name="CantidadEfectiva")
 * @ORM\Entity
 */
class Cantidadefectiva
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
     * @var \DateTime
     *
     * @ORM\Column(name="FechaInicial", type="datetime", nullable=false)
     */
    private $fechainicial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaFinal", type="datetime", nullable=false)
     */
    private $fechafinal;

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
     * @ORM\Column(name="Um_Producto", type="string", length=5, nullable=false)
     */
    private $umProducto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;



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
     * Set fechainicial
     *
     * @param \DateTime $fechainicial
     * @return Cantidadefectiva
     */
    public function setFechainicial($fechainicial)
    {
        $this->fechainicial = $fechainicial;

        return $this;
    }

    /**
     * Get fechainicial
     *
     * @return \DateTime 
     */
    public function getFechainicial()
    {
        return $this->fechainicial;
    }

    /**
     * Set fechafinal
     *
     * @param \DateTime $fechafinal
     * @return Cantidadefectiva
     */
    public function setFechafinal($fechafinal)
    {
        $this->fechafinal = $fechafinal;

        return $this;
    }

    /**
     * Get fechafinal
     *
     * @return \DateTime 
     */
    public function getFechafinal()
    {
        return $this->fechafinal;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return Cantidadefectiva
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
     * @return Cantidadefectiva
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
     * Set umProducto
     *
     * @param string $umProducto
     * @return Cantidadefectiva
     */
    public function setUmProducto($umProducto)
    {
        $this->umProducto = $umProducto;

        return $this;
    }

    /**
     * Get umProducto
     *
     * @return string 
     */
    public function getUmProducto()
    {
        return $this->umProducto;
    }

    /**
     * Set confirmada
     *
     * @param integer $confirmada
     * @return Cantidadefectiva
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;

        return $this;
    }

    /**
     * Get confirmada
     *
     * @return integer 
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }
}
