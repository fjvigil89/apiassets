<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ControlContabilidad
 *
 * @ORM\Table(name="Control_Contabilidad")
 * @ORM\Entity
 */
class ControlContabilidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec", type="integer", nullable=false)
     */
    private $consec;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado", type="boolean", nullable=false)
     */
    private $cerrado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AF", type="boolean", nullable=false)
     */
    private $af;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CI", type="boolean", nullable=false)
     */
    private $ci;

    /**
     * @var boolean
     *
     * @ORM\Column(name="FM", type="boolean", nullable=false)
     */
    private $fm;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PN", type="boolean", nullable=false)
     */
    private $pn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="UH", type="boolean", nullable=false)
     */
    private $uh;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PI", type="boolean", nullable=false)
     */
    private $pi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="TI", type="boolean", nullable=false)
     */
    private $ti;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CerradoBck", type="boolean", nullable=false)
     */
    private $cerradobck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Autorizado_Cerrar", type="boolean", nullable=false)
     */
    private $autorizadoCerrar;



    /**
     * Set ano
     *
     * @param integer $ano
     * @return ControlContabilidad
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return ControlContabilidad
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set consec
     *
     * @param integer $consec
     * @return ControlContabilidad
     */
    public function setConsec($consec)
    {
        $this->consec = $consec;

        return $this;
    }

    /**
     * Get consec
     *
     * @return integer 
     */
    public function getConsec()
    {
        return $this->consec;
    }

    /**
     * Set cerrado
     *
     * @param boolean $cerrado
     * @return ControlContabilidad
     */
    public function setCerrado($cerrado)
    {
        $this->cerrado = $cerrado;

        return $this;
    }

    /**
     * Get cerrado
     *
     * @return boolean 
     */
    public function getCerrado()
    {
        return $this->cerrado;
    }

    /**
     * Set af
     *
     * @param boolean $af
     * @return ControlContabilidad
     */
    public function setAf($af)
    {
        $this->af = $af;

        return $this;
    }

    /**
     * Get af
     *
     * @return boolean 
     */
    public function getAf()
    {
        return $this->af;
    }

    /**
     * Set ci
     *
     * @param boolean $ci
     * @return ControlContabilidad
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return boolean 
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * Set fm
     *
     * @param boolean $fm
     * @return ControlContabilidad
     */
    public function setFm($fm)
    {
        $this->fm = $fm;

        return $this;
    }

    /**
     * Get fm
     *
     * @return boolean 
     */
    public function getFm()
    {
        return $this->fm;
    }

    /**
     * Set pn
     *
     * @param boolean $pn
     * @return ControlContabilidad
     */
    public function setPn($pn)
    {
        $this->pn = $pn;

        return $this;
    }

    /**
     * Get pn
     *
     * @return boolean 
     */
    public function getPn()
    {
        return $this->pn;
    }

    /**
     * Set uh
     *
     * @param boolean $uh
     * @return ControlContabilidad
     */
    public function setUh($uh)
    {
        $this->uh = $uh;

        return $this;
    }

    /**
     * Get uh
     *
     * @return boolean 
     */
    public function getUh()
    {
        return $this->uh;
    }

    /**
     * Set pi
     *
     * @param boolean $pi
     * @return ControlContabilidad
     */
    public function setPi($pi)
    {
        $this->pi = $pi;

        return $this;
    }

    /**
     * Get pi
     *
     * @return boolean 
     */
    public function getPi()
    {
        return $this->pi;
    }

    /**
     * Set ti
     *
     * @param boolean $ti
     * @return ControlContabilidad
     */
    public function setTi($ti)
    {
        $this->ti = $ti;

        return $this;
    }

    /**
     * Get ti
     *
     * @return boolean 
     */
    public function getTi()
    {
        return $this->ti;
    }

    /**
     * Set cerradobck
     *
     * @param boolean $cerradobck
     * @return ControlContabilidad
     */
    public function setCerradobck($cerradobck)
    {
        $this->cerradobck = $cerradobck;

        return $this;
    }

    /**
     * Get cerradobck
     *
     * @return boolean 
     */
    public function getCerradobck()
    {
        return $this->cerradobck;
    }

    /**
     * Set autorizadoCerrar
     *
     * @param boolean $autorizadoCerrar
     * @return ControlContabilidad
     */
    public function setAutorizadoCerrar($autorizadoCerrar)
    {
        $this->autorizadoCerrar = $autorizadoCerrar;

        return $this;
    }

    /**
     * Get autorizadoCerrar
     *
     * @return boolean 
     */
    public function getAutorizadoCerrar()
    {
        return $this->autorizadoCerrar;
    }
}
