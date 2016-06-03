<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zerodayconfig
 *
 * @ORM\Table(name="ZeroDayConfig")
 * @ORM\Entity
 */
class Zerodayconfig
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Operacion", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fechaOperacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="TC", type="integer", nullable=false)
     */
    private $tc;

    /**
     * @var integer
     *
     * @ORM\Column(name="IRPM", type="integer", nullable=false)
     */
    private $irpm;

    /**
     * @var integer
     *
     * @ORM\Column(name="CUP", type="smallint", nullable=false)
     */
    private $cup;

    /**
     * @var string
     *
     * @ORM\Column(name="AF_Id_Movim_Activo", type="string", length=3, nullable=false)
     */
    private $afIdMovimActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="AF_Id_CausaMov", type="string", length=5, nullable=false)
     */
    private $afIdCausamov;

    /**
     * @var string
     *
     * @ORM\Column(name="AF_Nota_Mov", type="string", length=200, nullable=false)
     */
    private $afNotaMov;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ZeroDay", type="boolean", nullable=false)
     */
    private $zeroday;



    /**
     * Get fechaOperacion
     *
     * @return \DateTime 
     */
    public function getFechaOperacion()
    {
        return $this->fechaOperacion;
    }

    /**
     * Set tc
     *
     * @param integer $tc
     * @return Zerodayconfig
     */
    public function setTc($tc)
    {
        $this->tc = $tc;

        return $this;
    }

    /**
     * Get tc
     *
     * @return integer 
     */
    public function getTc()
    {
        return $this->tc;
    }

    /**
     * Set irpm
     *
     * @param integer $irpm
     * @return Zerodayconfig
     */
    public function setIrpm($irpm)
    {
        $this->irpm = $irpm;

        return $this;
    }

    /**
     * Get irpm
     *
     * @return integer 
     */
    public function getIrpm()
    {
        return $this->irpm;
    }

    /**
     * Set cup
     *
     * @param integer $cup
     * @return Zerodayconfig
     */
    public function setCup($cup)
    {
        $this->cup = $cup;

        return $this;
    }

    /**
     * Get cup
     *
     * @return integer 
     */
    public function getCup()
    {
        return $this->cup;
    }

    /**
     * Set afIdMovimActivo
     *
     * @param string $afIdMovimActivo
     * @return Zerodayconfig
     */
    public function setAfIdMovimActivo($afIdMovimActivo)
    {
        $this->afIdMovimActivo = $afIdMovimActivo;

        return $this;
    }

    /**
     * Get afIdMovimActivo
     *
     * @return string 
     */
    public function getAfIdMovimActivo()
    {
        return $this->afIdMovimActivo;
    }

    /**
     * Set afIdCausamov
     *
     * @param string $afIdCausamov
     * @return Zerodayconfig
     */
    public function setAfIdCausamov($afIdCausamov)
    {
        $this->afIdCausamov = $afIdCausamov;

        return $this;
    }

    /**
     * Get afIdCausamov
     *
     * @return string 
     */
    public function getAfIdCausamov()
    {
        return $this->afIdCausamov;
    }

    /**
     * Set afNotaMov
     *
     * @param string $afNotaMov
     * @return Zerodayconfig
     */
    public function setAfNotaMov($afNotaMov)
    {
        $this->afNotaMov = $afNotaMov;

        return $this;
    }

    /**
     * Get afNotaMov
     *
     * @return string 
     */
    public function getAfNotaMov()
    {
        return $this->afNotaMov;
    }

    /**
     * Set zeroday
     *
     * @param boolean $zeroday
     * @return Zerodayconfig
     */
    public function setZeroday($zeroday)
    {
        $this->zeroday = $zeroday;

        return $this;
    }

    /**
     * Get zeroday
     *
     * @return boolean 
     */
    public function getZeroday()
    {
        return $this->zeroday;
    }
}
