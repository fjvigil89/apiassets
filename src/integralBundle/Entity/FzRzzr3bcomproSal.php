<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRzzr3bcomproSal
 *
 * @ORM\Table(name="Fz_RZzr3BCompro_Sal")
 * @ORM\Entity
 */
class FzRzzr3bcomproSal
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion_CALC", type="string", length=5, nullable=false)
     */
    private $idAgrupacionCalc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_MY", type="datetime", nullable=false)
     */
    private $fechaMy;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     */
    private $cta;

    /**
     * @var string
     *
     * @ORM\Column(name="subCta", type="string", length=20, nullable=false)
     */
    private $subcta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Debe_Ant", type="integer", nullable=false)
     */
    private $debeAnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Haber_Ant", type="integer", nullable=false)
     */
    private $haberAnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Ant", type="integer", nullable=false)
     */
    private $saldoAnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Debe_Per", type="integer", nullable=false)
     */
    private $debePer;

    /**
     * @var integer
     *
     * @ORM\Column(name="Haber_Per", type="integer", nullable=false)
     */
    private $haberPer;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Per", type="integer", nullable=false)
     */
    private $saldoPer;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsync;



    /**
     * Set idAgrupacionCalc
     *
     * @param string $idAgrupacionCalc
     * @return FzRzzr3bcomproSal
     */
    public function setIdAgrupacionCalc($idAgrupacionCalc)
    {
        $this->idAgrupacionCalc = $idAgrupacionCalc;

        return $this;
    }

    /**
     * Get idAgrupacionCalc
     *
     * @return string 
     */
    public function getIdAgrupacionCalc()
    {
        return $this->idAgrupacionCalc;
    }

    /**
     * Set fechaMy
     *
     * @param \DateTime $fechaMy
     * @return FzRzzr3bcomproSal
     */
    public function setFechaMy($fechaMy)
    {
        $this->fechaMy = $fechaMy;

        return $this;
    }

    /**
     * Get fechaMy
     *
     * @return \DateTime 
     */
    public function getFechaMy()
    {
        return $this->fechaMy;
    }

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return FzRzzr3bcomproSal
     */
    public function setTipoMoneda($tipoMoneda)
    {
        $this->tipoMoneda = $tipoMoneda;

        return $this;
    }

    /**
     * Get tipoMoneda
     *
     * @return integer 
     */
    public function getTipoMoneda()
    {
        return $this->tipoMoneda;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return FzRzzr3bcomproSal
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
     * Set subcta
     *
     * @param string $subcta
     * @return FzRzzr3bcomproSal
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
     * Set debeAnt
     *
     * @param integer $debeAnt
     * @return FzRzzr3bcomproSal
     */
    public function setDebeAnt($debeAnt)
    {
        $this->debeAnt = $debeAnt;

        return $this;
    }

    /**
     * Get debeAnt
     *
     * @return integer 
     */
    public function getDebeAnt()
    {
        return $this->debeAnt;
    }

    /**
     * Set haberAnt
     *
     * @param integer $haberAnt
     * @return FzRzzr3bcomproSal
     */
    public function setHaberAnt($haberAnt)
    {
        $this->haberAnt = $haberAnt;

        return $this;
    }

    /**
     * Get haberAnt
     *
     * @return integer 
     */
    public function getHaberAnt()
    {
        return $this->haberAnt;
    }

    /**
     * Set saldoAnt
     *
     * @param integer $saldoAnt
     * @return FzRzzr3bcomproSal
     */
    public function setSaldoAnt($saldoAnt)
    {
        $this->saldoAnt = $saldoAnt;

        return $this;
    }

    /**
     * Get saldoAnt
     *
     * @return integer 
     */
    public function getSaldoAnt()
    {
        return $this->saldoAnt;
    }

    /**
     * Set debePer
     *
     * @param integer $debePer
     * @return FzRzzr3bcomproSal
     */
    public function setDebePer($debePer)
    {
        $this->debePer = $debePer;

        return $this;
    }

    /**
     * Get debePer
     *
     * @return integer 
     */
    public function getDebePer()
    {
        return $this->debePer;
    }

    /**
     * Set haberPer
     *
     * @param integer $haberPer
     * @return FzRzzr3bcomproSal
     */
    public function setHaberPer($haberPer)
    {
        $this->haberPer = $haberPer;

        return $this;
    }

    /**
     * Get haberPer
     *
     * @return integer 
     */
    public function getHaberPer()
    {
        return $this->haberPer;
    }

    /**
     * Set saldoPer
     *
     * @param integer $saldoPer
     * @return FzRzzr3bcomproSal
     */
    public function setSaldoPer($saldoPer)
    {
        $this->saldoPer = $saldoPer;

        return $this;
    }

    /**
     * Get saldoPer
     *
     * @return integer 
     */
    public function getSaldoPer()
    {
        return $this->saldoPer;
    }

    /**
     * Get idsync
     *
     * @return uniqueidentifier 
     */
    public function getIdsync()
    {
        return $this->idsync;
    }
}
