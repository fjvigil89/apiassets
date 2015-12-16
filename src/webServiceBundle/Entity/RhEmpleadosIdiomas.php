<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhEmpleadosIdiomas
 *
 * @ORM\Table(name="RH_Empleados_Idiomas")
 * @ORM\Entity
 */
class RhEmpleadosIdiomas
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
     * @ORM\Column(name="Id_Idioma", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idIdioma;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Idioma", type="string", length=15, nullable=false)
     */
    private $descIdioma;

    /**
     * @var integer
     *
     * @ORM\Column(name="Lee", type="smallint", nullable=false)
     */
    private $lee;

    /**
     * @var integer
     *
     * @ORM\Column(name="Habla", type="smallint", nullable=false)
     */
    private $habla;

    /**
     * @var integer
     *
     * @ORM\Column(name="Escribe", type="smallint", nullable=false)
     */
    private $escribe;



    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhEmpleadosIdiomas
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
     * Set idIdioma
     *
     * @param string $idIdioma
     * @return RhEmpleadosIdiomas
     */
    public function setIdIdioma($idIdioma)
    {
        $this->idIdioma = $idIdioma;

        return $this;
    }

    /**
     * Get idIdioma
     *
     * @return string 
     */
    public function getIdIdioma()
    {
        return $this->idIdioma;
    }

    /**
     * Set descIdioma
     *
     * @param string $descIdioma
     * @return RhEmpleadosIdiomas
     */
    public function setDescIdioma($descIdioma)
    {
        $this->descIdioma = $descIdioma;

        return $this;
    }

    /**
     * Get descIdioma
     *
     * @return string 
     */
    public function getDescIdioma()
    {
        return $this->descIdioma;
    }

    /**
     * Set lee
     *
     * @param integer $lee
     * @return RhEmpleadosIdiomas
     */
    public function setLee($lee)
    {
        $this->lee = $lee;

        return $this;
    }

    /**
     * Get lee
     *
     * @return integer 
     */
    public function getLee()
    {
        return $this->lee;
    }

    /**
     * Set habla
     *
     * @param integer $habla
     * @return RhEmpleadosIdiomas
     */
    public function setHabla($habla)
    {
        $this->habla = $habla;

        return $this;
    }

    /**
     * Get habla
     *
     * @return integer 
     */
    public function getHabla()
    {
        return $this->habla;
    }

    /**
     * Set escribe
     *
     * @param integer $escribe
     * @return RhEmpleadosIdiomas
     */
    public function setEscribe($escribe)
    {
        $this->escribe = $escribe;

        return $this;
    }

    /**
     * Get escribe
     *
     * @return integer 
     */
    public function getEscribe()
    {
        return $this->escribe;
    }
}
