<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhEspecialidadGraduado
 *
 * @ORM\Table(name="RH_Especialidad_Graduado")
 * @ORM\Entity
 */
class RhEspecialidadGraduado
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Especialidad", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEspecialidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Especialidad", type="string", length=50, nullable=false)
     */
    private $descEspecialidad;



    /**
     * Get idEspecialidad
     *
     * @return string 
     */
    public function getIdEspecialidad()
    {
        return $this->idEspecialidad;
    }

    /**
     * Set descEspecialidad
     *
     * @param string $descEspecialidad
     * @return RhEspecialidadGraduado
     */
    public function setDescEspecialidad($descEspecialidad)
    {
        $this->descEspecialidad = $descEspecialidad;

        return $this;
    }

    /**
     * Get descEspecialidad
     *
     * @return string 
     */
    public function getDescEspecialidad()
    {
        return $this->descEspecialidad;
    }
}
