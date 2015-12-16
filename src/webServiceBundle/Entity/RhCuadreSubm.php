<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCuadreSubm
 *
 * @ORM\Table(name="RH_Cuadre_SubM")
 * @ORM\Entity
 */
class RhCuadreSubm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     */
    private $cta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="De_MB", type="boolean", nullable=false)
     */
    private $deMb;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta", type="string", length=20, nullable=false)
     */
    private $subcta;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis", type="string", length=20, nullable=false)
     */
    private $analisis;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis", type="string", length=20, nullable=false)
     */
    private $subanalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe", type="string", length=20, nullable=false)
     */
    private $epigrafe;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida", type="string", length=20, nullable=false)
     */
    private $partida;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Calcular", type="boolean", nullable=false)
     */
    private $calcular;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=10, nullable=false)
     */
    private $idClasificacion;



    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return RhCuadreSubm
     */
    public function setCta($cta)
    {
        $this->cta = $cta;

        return $this;
    }

    /**
     * Get cta
     *
     * @return string 
     */
    public function getCta()
    {
        return $this->cta;
    }

    /**
     * Set deMb
     *
     * @param boolean $deMb
     * @return RhCuadreSubm
     */
    public function setDeMb($deMb)
    {
        $this->deMb = $deMb;

        return $this;
    }

    /**
     * Get deMb
     *
     * @return boolean 
     */
    public function getDeMb()
    {
        return $this->deMb;
    }

    /**
     * Set subcta
     *
     * @param string $subcta
     * @return RhCuadreSubm
     */
    public function setSubcta($subcta)
    {
        $this->subcta = $subcta;

        return $this;
    }

    /**
     * Get subcta
     *
     * @return string 
     */
    public function getSubcta()
    {
        return $this->subcta;
    }

    /**
     * Set analisis
     *
     * @param string $analisis
     * @return RhCuadreSubm
     */
    public function setAnalisis($analisis)
    {
        $this->analisis = $analisis;

        return $this;
    }

    /**
     * Get analisis
     *
     * @return string 
     */
    public function getAnalisis()
    {
        return $this->analisis;
    }

    /**
     * Set subanalisis
     *
     * @param string $subanalisis
     * @return RhCuadreSubm
     */
    public function setSubanalisis($subanalisis)
    {
        $this->subanalisis = $subanalisis;

        return $this;
    }

    /**
     * Get subanalisis
     *
     * @return string 
     */
    public function getSubanalisis()
    {
        return $this->subanalisis;
    }

    /**
     * Set epigrafe
     *
     * @param string $epigrafe
     * @return RhCuadreSubm
     */
    public function setEpigrafe($epigrafe)
    {
        $this->epigrafe = $epigrafe;

        return $this;
    }

    /**
     * Get epigrafe
     *
     * @return string 
     */
    public function getEpigrafe()
    {
        return $this->epigrafe;
    }

    /**
     * Set partida
     *
     * @param string $partida
     * @return RhCuadreSubm
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return string 
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * Set calcular
     *
     * @param boolean $calcular
     * @return RhCuadreSubm
     */
    public function setCalcular($calcular)
    {
        $this->calcular = $calcular;

        return $this;
    }

    /**
     * Get calcular
     *
     * @return boolean 
     */
    public function getCalcular()
    {
        return $this->calcular;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return RhCuadreSubm
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }
}
