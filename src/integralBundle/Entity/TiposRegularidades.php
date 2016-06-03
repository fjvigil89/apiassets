<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposRegularidades
 *
 * @ORM\Table(name="Tipos_Regularidades")
 * @ORM\Entity
 */
class TiposRegularidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Tipo_Analisis", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoAnalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Analisis", type="string", length=50, nullable=false)
     */
    private $tipoAnalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Documento", type="string", length=10, nullable=false)
     */
    private $documento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Reg_SubCta", type="boolean", nullable=false)
     */
    private $regSubcta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Reg_Analisis", type="boolean", nullable=false)
     */
    private $regAnalisis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Reg_SubAnalisis", type="boolean", nullable=false)
     */
    private $regSubanalisis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Reg_Epigrafe", type="boolean", nullable=false)
     */
    private $regEpigrafe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Reg_Partida", type="boolean", nullable=false)
     */
    private $regPartida;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EsDe_MC", type="boolean", nullable=false)
     */
    private $esdeMc;



    /**
     * Get idTipoAnalisis
     *
     * @return integer 
     */
    public function getIdTipoAnalisis()
    {
        return $this->idTipoAnalisis;
    }

    /**
     * Set tipoAnalisis
     *
     * @param string $tipoAnalisis
     * @return TiposRegularidades
     */
    public function setTipoAnalisis($tipoAnalisis)
    {
        $this->tipoAnalisis = $tipoAnalisis;

        return $this;
    }

    /**
     * Get tipoAnalisis
     *
     * @return string 
     */
    public function getTipoAnalisis()
    {
        return $this->tipoAnalisis;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return TiposRegularidades
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set regSubcta
     *
     * @param boolean $regSubcta
     * @return TiposRegularidades
     */
    public function setRegSubcta($regSubcta)
    {
        $this->regSubcta = $regSubcta;

        return $this;
    }

    /**
     * Get regSubcta
     *
     * @return boolean 
     */
    public function getRegSubcta()
    {
        return $this->regSubcta;
    }

    /**
     * Set regAnalisis
     *
     * @param boolean $regAnalisis
     * @return TiposRegularidades
     */
    public function setRegAnalisis($regAnalisis)
    {
        $this->regAnalisis = $regAnalisis;

        return $this;
    }

    /**
     * Get regAnalisis
     *
     * @return boolean 
     */
    public function getRegAnalisis()
    {
        return $this->regAnalisis;
    }

    /**
     * Set regSubanalisis
     *
     * @param boolean $regSubanalisis
     * @return TiposRegularidades
     */
    public function setRegSubanalisis($regSubanalisis)
    {
        $this->regSubanalisis = $regSubanalisis;

        return $this;
    }

    /**
     * Get regSubanalisis
     *
     * @return boolean 
     */
    public function getRegSubanalisis()
    {
        return $this->regSubanalisis;
    }

    /**
     * Set regEpigrafe
     *
     * @param boolean $regEpigrafe
     * @return TiposRegularidades
     */
    public function setRegEpigrafe($regEpigrafe)
    {
        $this->regEpigrafe = $regEpigrafe;

        return $this;
    }

    /**
     * Get regEpigrafe
     *
     * @return boolean 
     */
    public function getRegEpigrafe()
    {
        return $this->regEpigrafe;
    }

    /**
     * Set regPartida
     *
     * @param boolean $regPartida
     * @return TiposRegularidades
     */
    public function setRegPartida($regPartida)
    {
        $this->regPartida = $regPartida;

        return $this;
    }

    /**
     * Get regPartida
     *
     * @return boolean 
     */
    public function getRegPartida()
    {
        return $this->regPartida;
    }

    /**
     * Set esdeMc
     *
     * @param boolean $esdeMc
     * @return TiposRegularidades
     */
    public function setEsdeMc($esdeMc)
    {
        $this->esdeMc = $esdeMc;

        return $this;
    }

    /**
     * Get esdeMc
     *
     * @return boolean 
     */
    public function getEsdeMc()
    {
        return $this->esdeMc;
    }
}
