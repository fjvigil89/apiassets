<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comproimportado
 *
 * @ORM\Table(name="ComproImportado")
 * @ORM\Entity
 */
class Comproimportado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CompNumero", type="smallint", nullable=true)
     */
    private $compnumero;

    /**
     * @var integer
     *
     * @ORM\Column(name="CompAno", type="smallint", nullable=true)
     */
    private $compano;

    /**
     * @var integer
     *
     * @ORM\Column(name="CompMes", type="smallint", nullable=true)
     */
    private $compmes;

    /**
     * @var string
     *
     * @ORM\Column(name="CompSubsi", type="string", length=2, nullable=true)
     */
    private $compsubsi;

    /**
     * @var string
     *
     * @ORM\Column(name="CompDescripcion", type="string", length=35, nullable=true)
     */
    private $compdescripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CompFecha", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $compfecha;



    /**
     * Set compnumero
     *
     * @param integer $compnumero
     * @return Comproimportado
     */
    public function setCompnumero($compnumero)
    {
        $this->compnumero = $compnumero;

        return $this;
    }

    /**
     * Get compnumero
     *
     * @return integer 
     */
    public function getCompnumero()
    {
        return $this->compnumero;
    }

    /**
     * Set compano
     *
     * @param integer $compano
     * @return Comproimportado
     */
    public function setCompano($compano)
    {
        $this->compano = $compano;

        return $this;
    }

    /**
     * Get compano
     *
     * @return integer 
     */
    public function getCompano()
    {
        return $this->compano;
    }

    /**
     * Set compmes
     *
     * @param integer $compmes
     * @return Comproimportado
     */
    public function setCompmes($compmes)
    {
        $this->compmes = $compmes;

        return $this;
    }

    /**
     * Get compmes
     *
     * @return integer 
     */
    public function getCompmes()
    {
        return $this->compmes;
    }

    /**
     * Set compsubsi
     *
     * @param string $compsubsi
     * @return Comproimportado
     */
    public function setCompsubsi($compsubsi)
    {
        $this->compsubsi = $compsubsi;

        return $this;
    }

    /**
     * Get compsubsi
     *
     * @return string 
     */
    public function getCompsubsi()
    {
        return $this->compsubsi;
    }

    /**
     * Set compdescripcion
     *
     * @param string $compdescripcion
     * @return Comproimportado
     */
    public function setCompdescripcion($compdescripcion)
    {
        $this->compdescripcion = $compdescripcion;

        return $this;
    }

    /**
     * Get compdescripcion
     *
     * @return string 
     */
    public function getCompdescripcion()
    {
        return $this->compdescripcion;
    }

    /**
     * Get compfecha
     *
     * @return \DateTime 
     */
    public function getCompfecha()
    {
        return $this->compfecha;
    }
}
