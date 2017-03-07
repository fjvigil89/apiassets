<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRzzr5balSaldos
 *
 * @ORM\Table(name="Fz_RZzr5Bal_Saldos")
 * @ORM\Entity
 */
class FzRzzr5balSaldos
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
     * @var integer
     *
     * @ORM\Column(name="Saldo_Parcial", type="integer", nullable=false)
     */
    private $saldoParcial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo", type="integer", nullable=false)
     */
    private $saldo;

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
     * @return FzRzzr5balSaldos
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
     * @return FzRzzr5balSaldos
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
     * @return FzRzzr5balSaldos
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
     * @return FzRzzr5balSaldos
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
     * @return FzRzzr5balSaldos
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
     * @return FzRzzr5balSaldos
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
     * @return FzRzzr5balSaldos
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
     * @return FzRzzr5balSaldos
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
     * @return FzRzzr5balSaldos
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
     * Set saldoParcial
     *
     * @param integer $saldoParcial
     * @return FzRzzr5balSaldos
     */
    public function setSaldoParcial($saldoParcial)
    {
        $this->saldoParcial = $saldoParcial;

        return $this;
    }

    /**
     * Get saldoParcial
     *
     * @return integer 
     */
    public function getSaldoParcial()
    {
        return $this->saldoParcial;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return FzRzzr5balSaldos
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return integer 
     */
    public function getSaldo()
    {
        return $this->saldo;
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
