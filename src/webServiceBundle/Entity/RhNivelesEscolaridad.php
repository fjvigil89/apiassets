<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhNivelesEscolaridad
 *
 * @ORM\Table(name="RH_Niveles_Escolaridad")
 * @ORM\Entity
 */
class RhNivelesEscolaridad
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Nivel_Escolaridad", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNivelEscolaridad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Nivel_Escolaridad", type="string", length=50, nullable=false)
     */
    private $descNivelEscolaridad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Nivel_Escolaridad_Clasif", type="string", length=3, nullable=false)
     */
    private $idNivelEscolaridadClasif;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Siglas", type="string", length=3, nullable=false)
     */
    private $siglas;



    /**
     * Get idNivelEscolaridad
     *
     * @return string 
     */
    public function getIdNivelEscolaridad()
    {
        return $this->idNivelEscolaridad;
    }

    /**
     * Set descNivelEscolaridad
     *
     * @param string $descNivelEscolaridad
     * @return RhNivelesEscolaridad
     */
    public function setDescNivelEscolaridad($descNivelEscolaridad)
    {
        $this->descNivelEscolaridad = $descNivelEscolaridad;

        return $this;
    }

    /**
     * Get descNivelEscolaridad
     *
     * @return string 
     */
    public function getDescNivelEscolaridad()
    {
        return $this->descNivelEscolaridad;
    }

    /**
     * Set idNivelEscolaridadClasif
     *
     * @param string $idNivelEscolaridadClasif
     * @return RhNivelesEscolaridad
     */
    public function setIdNivelEscolaridadClasif($idNivelEscolaridadClasif)
    {
        $this->idNivelEscolaridadClasif = $idNivelEscolaridadClasif;

        return $this;
    }

    /**
     * Get idNivelEscolaridadClasif
     *
     * @return string 
     */
    public function getIdNivelEscolaridadClasif()
    {
        return $this->idNivelEscolaridadClasif;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return RhNivelesEscolaridad
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
     * Set siglas
     *
     * @param string $siglas
     * @return RhNivelesEscolaridad
     */
    public function setSiglas($siglas)
    {
        $this->siglas = $siglas;

        return $this;
    }

    /**
     * Get siglas
     *
     * @return string 
     */
    public function getSiglas()
    {
        return $this->siglas;
    }
}
