<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionActividad
 *
 * @ORM\Table(name="Clasificacion_Actividad")
 * @ORM\Entity
 */
class ClasificacionActividad
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasificacion", type="string", length=60, nullable=false)
     */
    private $descClasificacion;

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
     * @var integer
     *
     * @ORM\Column(name="HorasPlan", type="integer", nullable=false)
     */
    private $horasplan;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=255, nullable=false)
     */
    private $nota;



    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set descClasificacion
     *
     * @param string $descClasificacion
     * @return ClasificacionActividad
     */
    public function setDescClasificacion($descClasificacion)
    {
        $this->descClasificacion = $descClasificacion;

        return $this;
    }

    /**
     * Get descClasificacion
     *
     * @return string 
     */
    public function getDescClasificacion()
    {
        return $this->descClasificacion;
    }

    /**
     * Set costomb
     *
     * @param integer $costomb
     * @return ClasificacionActividad
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
     * @return ClasificacionActividad
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
     * Set horasplan
     *
     * @param integer $horasplan
     * @return ClasificacionActividad
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

    /**
     * Set nota
     *
     * @param string $nota
     * @return ClasificacionActividad
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
