<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhEmpleadosCapacitacion
 *
 * @ORM\Table(name="RH_Empleados_Capacitacion")
 * @ORM\Entity
 */
class RhEmpleadosCapacitacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Curso", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCurso;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Curso", type="string", length=80, nullable=false)
     */
    private $descCurso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Curso", type="datetime", nullable=false)
     */
    private $fechaCurso;



    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhEmpleadosCapacitacion
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set idCurso
     *
     * @param string $idCurso
     * @return RhEmpleadosCapacitacion
     */
    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;

        return $this;
    }

    /**
     * Get idCurso
     *
     * @return string 
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }

    /**
     * Set descCurso
     *
     * @param string $descCurso
     * @return RhEmpleadosCapacitacion
     */
    public function setDescCurso($descCurso)
    {
        $this->descCurso = $descCurso;

        return $this;
    }

    /**
     * Get descCurso
     *
     * @return string 
     */
    public function getDescCurso()
    {
        return $this->descCurso;
    }

    /**
     * Set fechaCurso
     *
     * @param \DateTime $fechaCurso
     * @return RhEmpleadosCapacitacion
     */
    public function setFechaCurso($fechaCurso)
    {
        $this->fechaCurso = $fechaCurso;

        return $this;
    }

    /**
     * Get fechaCurso
     *
     * @return \DateTime 
     */
    public function getFechaCurso()
    {
        return $this->fechaCurso;
    }
}
