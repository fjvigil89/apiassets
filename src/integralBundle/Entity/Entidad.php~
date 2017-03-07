<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidad
 *
 * @ORM\Table(name="Entidad", uniqueConstraints={@ORM\UniqueConstraint(name="PK_Entidad", columns={"Id_Compania", "Id_Entidad"})})
 * @ORM\Entity
 */
class Entidad
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Compania", type="string", length=50, nullable=true)
     */
    private $idCompania;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Entidad", type="string", length=50, nullable=true)
     */
    private $idEntidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Entidad", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $descEntidad;



    /**
     * Set idCompania
     *
     * @param string $idCompania
     * @return Entidad
     */
    public function setIdCompania($idCompania)
    {
        $this->idCompania = $idCompania;

        return $this;
    }

    /**
     * Get idCompania
     *
     * @return string 
     */
    public function getIdCompania()
    {
        return $this->idCompania;
    }

    /**
     * Set idEntidad
     *
     * @param string $idEntidad
     * @return Entidad
     */
    public function setIdEntidad($idEntidad)
    {
        $this->idEntidad = $idEntidad;

        return $this;
    }

    /**
     * Get idEntidad
     *
     * @return string 
     */
    public function getIdEntidad()
    {
        return $this->idEntidad;
    }

    /**
     * Get descEntidad
     *
     * @return string 
     */
    public function getDescEntidad()
    {
        return $this->descEntidad;
    }
}
