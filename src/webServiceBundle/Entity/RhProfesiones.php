<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhProfesiones
 *
 * @ORM\Table(name="RH_Profesiones")
 * @ORM\Entity
 */
class RhProfesiones
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Profesion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProfesion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Profesion", type="string", length=80, nullable=false)
     */
    private $descProfesion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Especialidad", type="string", length=3, nullable=false)
     */
    private $idEspecialidad;



    /**
     * Get idProfesion
     *
     * @return string 
     */
    public function getIdProfesion()
    {
        return $this->idProfesion;
    }

    /**
     * Set descProfesion
     *
     * @param string $descProfesion
     * @return RhProfesiones
     */
    public function setDescProfesion($descProfesion)
    {
        $this->descProfesion = $descProfesion;

        return $this;
    }

    /**
     * Get descProfesion
     *
     * @return string 
     */
    public function getDescProfesion()
    {
        return $this->descProfesion;
    }

    /**
     * Set idEspecialidad
     *
     * @param string $idEspecialidad
     * @return RhProfesiones
     */
    public function setIdEspecialidad($idEspecialidad)
    {
        $this->idEspecialidad = $idEspecialidad;

        return $this;
    }

    /**
     * Get idEspecialidad
     *
     * @return string 
     */
    public function getIdEspecialidad()
    {
        return $this->idEspecialidad;
    }
}
