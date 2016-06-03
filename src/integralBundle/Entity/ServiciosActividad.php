<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiciosActividad
 *
 * @ORM\Table(name="Servicios_Actividad")
 * @ORM\Entity
 */
class ServiciosActividad
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Servicio", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Actividad", type="string", length=60, nullable=false)
     */
    private $descActividad;

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
     * @var integer
     *
     * @ORM\Column(name="HorasPlan", type="integer", nullable=false)
     */
    private $horasplan;



    /**
     * Set idServicio
     *
     * @param string $idServicio
     * @return ServiciosActividad
     */
    public function setIdServicio($idServicio)
    {
        $this->idServicio = $idServicio;

        return $this;
    }

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
     * Set idActividad
     *
     * @param string $idActividad
     * @return ServiciosActividad
     */
    public function setIdActividad($idActividad)
    {
        $this->idActividad = $idActividad;

        return $this;
    }

    /**
     * Get idActividad
     *
     * @return string 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set descActividad
     *
     * @param string $descActividad
     * @return ServiciosActividad
     */
    public function setDescActividad($descActividad)
    {
        $this->descActividad = $descActividad;

        return $this;
    }

    /**
     * Get descActividad
     *
     * @return string 
     */
    public function getDescActividad()
    {
        return $this->descActividad;
    }

    /**
     * Set costomb
     *
     * @param integer $costomb
     * @return ServiciosActividad
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
     * @return ServiciosActividad
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
     * @return ServiciosActividad
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
     * Set horasplan
     *
     * @param integer $horasplan
     * @return ServiciosActividad
     */
    public function setHorasplan($horasplan)
    {
        $this->horasplan = $horasplan;

        return $this;
    }

    /**
     * Get horasplan
     *
     * @return integer 
     */
    public function getHorasplan()
    {
        return $this->horasplan;
    }
}
