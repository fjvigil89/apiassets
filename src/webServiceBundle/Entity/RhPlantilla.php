<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhPlantilla
 *
 * @ORM\Table(name="RH_Plantilla", uniqueConstraints={@ORM\UniqueConstraint(name="IX_RH_Plantilla", columns={"Id_Clave"})})
 * @ORM\Entity
 */
class RhPlantilla
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Direccion", type="string", length=100, nullable=false)
     */
    private $descDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clave", type="string", length=17, nullable=false)
     */
    private $idClave;



    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return RhPlantilla
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set idDireccion
     *
     * @param string $idDireccion
     * @return RhPlantilla
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
     * @return RhPlantilla
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
     * Set idClave
     *
     * @param string $idClave
     * @return RhPlantilla
     */
    public function setIdClave($idClave)
    {
        $this->idClave = $idClave;

        return $this;
    }

    /**
     * Get idClave
     *
     * @return string 
     */
    public function getIdClave()
    {
        return $this->idClave;
    }
}
