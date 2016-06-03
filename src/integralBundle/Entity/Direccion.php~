<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direccion
 *
 * @ORM\Table(name="Direccion", uniqueConstraints={@ORM\UniqueConstraint(name="PK_Direccion", columns={"Id_Direccion", "Id_Entidad"})})
 * @ORM\Entity
 */
class Direccion
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=true)
     */
    private $idDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Direccion", type="string", length=50, nullable=true)
     */
    private $descDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Entidad", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntidad;



    /**
     * Set idDireccion
     *
     * @param string $idDireccion
     * @return Direccion
     */
    public function setIdDireccion($idDireccion)
    {
        $this->idDireccion = $idDireccion;

        return $this;
    }

    /**
     * Get idDireccion
     *
     * @return string 
     */
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }

    /**
     * Set descDireccion
     *
     * @param string $descDireccion
     * @return Direccion
     */
    public function setDescDireccion($descDireccion)
    {
        $this->descDireccion = $descDireccion;

        return $this;
    }

    /**
     * Get descDireccion
     *
     * @return string 
     */
    public function getDescDireccion()
    {
        return $this->descDireccion;
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
}
