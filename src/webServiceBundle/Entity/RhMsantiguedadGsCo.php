<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhMsantiguedadGsCo
 *
 * @ORM\Table(name="RH_MSAntiguedad_GS_CO")
 * @ORM\Entity
 */
class RhMsantiguedadGsCo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NGrupo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ngrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="LimiteInferior", type="smallint", nullable=false)
     */
    private $limiteinferior;

    /**
     * @var integer
     *
     * @ORM\Column(name="LimiteSuperior", type="smallint", nullable=false)
     */
    private $limitesuperior;

    /**
     * @var integer
     *
     * @ORM\Column(name="Obreros", type="integer", nullable=false)
     */
    private $obreros;

    /**
     * @var integer
     *
     * @ORM\Column(name="Servicios", type="integer", nullable=false)
     */
    private $servicios;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tecnicos", type="integer", nullable=false)
     */
    private $tecnicos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Administrativos", type="integer", nullable=false)
     */
    private $administrativos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dirigentes", type="integer", nullable=false)
     */
    private $dirigentes;



    /**
     * Set ngrupo
     *
     * @param integer $ngrupo
     * @return RhMsantiguedadGsCo
     */
    public function setNgrupo($ngrupo)
    {
        $this->ngrupo = $ngrupo;

        return $this;
    }

    /**
     * Get ngrupo
     *
     * @return integer 
     */
    public function getNgrupo()
    {
        return $this->ngrupo;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return RhMsantiguedadGsCo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return RhMsantiguedadGsCo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set limiteinferior
     *
     * @param integer $limiteinferior
     * @return RhMsantiguedadGsCo
     */
    public function setLimiteinferior($limiteinferior)
    {
        $this->limiteinferior = $limiteinferior;

        return $this;
    }

    /**
     * Get limiteinferior
     *
     * @return integer 
     */
    public function getLimiteinferior()
    {
        return $this->limiteinferior;
    }

    /**
     * Set limitesuperior
     *
     * @param integer $limitesuperior
     * @return RhMsantiguedadGsCo
     */
    public function setLimitesuperior($limitesuperior)
    {
        $this->limitesuperior = $limitesuperior;

        return $this;
    }

    /**
     * Get limitesuperior
     *
     * @return integer 
     */
    public function getLimitesuperior()
    {
        return $this->limitesuperior;
    }

    /**
     * Set obreros
     *
     * @param integer $obreros
     * @return RhMsantiguedadGsCo
     */
    public function setObreros($obreros)
    {
        $this->obreros = $obreros;

        return $this;
    }

    /**
     * Get obreros
     *
     * @return integer 
     */
    public function getObreros()
    {
        return $this->obreros;
    }

    /**
     * Set servicios
     *
     * @param integer $servicios
     * @return RhMsantiguedadGsCo
     */
    public function setServicios($servicios)
    {
        $this->servicios = $servicios;

        return $this;
    }

    /**
     * Get servicios
     *
     * @return integer 
     */
    public function getServicios()
    {
        return $this->servicios;
    }

    /**
     * Set tecnicos
     *
     * @param integer $tecnicos
     * @return RhMsantiguedadGsCo
     */
    public function setTecnicos($tecnicos)
    {
        $this->tecnicos = $tecnicos;

        return $this;
    }

    /**
     * Get tecnicos
     *
     * @return integer 
     */
    public function getTecnicos()
    {
        return $this->tecnicos;
    }

    /**
     * Set administrativos
     *
     * @param integer $administrativos
     * @return RhMsantiguedadGsCo
     */
    public function setAdministrativos($administrativos)
    {
        $this->administrativos = $administrativos;

        return $this;
    }

    /**
     * Get administrativos
     *
     * @return integer 
     */
    public function getAdministrativos()
    {
        return $this->administrativos;
    }

    /**
     * Set dirigentes
     *
     * @param integer $dirigentes
     * @return RhMsantiguedadGsCo
     */
    public function setDirigentes($dirigentes)
    {
        $this->dirigentes = $dirigentes;

        return $this;
    }

    /**
     * Get dirigentes
     *
     * @return integer 
     */
    public function getDirigentes()
    {
        return $this->dirigentes;
    }
}
