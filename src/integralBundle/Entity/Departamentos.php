<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamentos
 *
 * @ORM\Table(name="Departamentos", uniqueConstraints={@ORM\UniqueConstraint(name="PK_Departamentos", columns={"Id_Area", "Id_Departamento"})})
 * @ORM\Entity
 */
class Departamentos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Area", type="string", length=15, nullable=true)
     */
    private $idArea;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Departamento", type="string", length=15, nullable=true)
     */
    private $idDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Departamento", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $descDepartamento;



    /**
     * Set idArea
     *
     * @param string $idArea
     * @return Departamentos
     */
    public function setIdArea($idArea)
    {
        $this->idArea = $idArea;

        return $this;
    }

    /**
     * Get idArea
     *
     * @return string 
     */
    public function getIdArea()
    {
        return $this->idArea;
    }

    /**
     * Set idDepartamento
     *
     * @param string $idDepartamento
     * @return Departamentos
     */
    public function setIdDepartamento($idDepartamento)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return string 
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }

    /**
     * Get descDepartamento
     *
     * @return string 
     */
    public function getDescDepartamento()
    {
        return $this->descDepartamento;
    }
}
