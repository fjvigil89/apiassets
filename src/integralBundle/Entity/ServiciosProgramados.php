<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiciosProgramados
 *
 * @ORM\Table(name="Servicios_Programados")
 * @ORM\Entity
 */
class ServiciosProgramados
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Servicio", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=60, nullable=false)
     */
    private $descripcion;

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
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=255, nullable=false)
     */
    private $nota;



    /**
     * Get idServicio
     *
     * @return string 
     */
    public function getIdServicio()
    {
        return $this->idServicio;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ServiciosProgramados
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set costomb
     *
     * @param integer $costomb
     * @return ServiciosProgramados
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
     * @return ServiciosProgramados
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
     * Set nota
     *
     * @param string $nota
     * @return ServiciosProgramados
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
}
