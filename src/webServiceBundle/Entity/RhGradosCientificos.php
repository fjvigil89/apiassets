<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhGradosCientificos
 *
 * @ORM\Table(name="RH_Grados_Cientificos")
 * @ORM\Entity
 */
class RhGradosCientificos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Grado_Cientifico", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGradoCientifico;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Grado_Cientifico", type="string", length=50, nullable=false)
     */
    private $descGradoCientifico;

    /**
     * @var string
     *
     * @ORM\Column(name="Identificacion", type="string", length=2, nullable=false)
     */
    private $identificacion;



    /**
     * Get idGradoCientifico
     *
     * @return string 
     */
    public function getIdGradoCientifico()
    {
        return $this->idGradoCientifico;
    }

    /**
     * Set descGradoCientifico
     *
     * @param string $descGradoCientifico
     * @return RhGradosCientificos
     */
    public function setDescGradoCientifico($descGradoCientifico)
    {
        $this->descGradoCientifico = $descGradoCientifico;

        return $this;
    }

    /**
     * Get descGradoCientifico
     *
     * @return string 
     */
    public function getDescGradoCientifico()
    {
        return $this->descGradoCientifico;
    }

    /**
     * Set identificacion
     *
     * @param string $identificacion
     * @return RhGradosCientificos
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    /**
     * Get identificacion
     *
     * @return string 
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }
}
