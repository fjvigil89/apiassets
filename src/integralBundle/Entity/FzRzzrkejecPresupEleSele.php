<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRzzrkejecPresupEleSele
 *
 * @ORM\Table(name="Fz_RZZRkEjec_Presup_Ele_SEle")
 * @ORM\Entity
 */
class FzRzzrkejecPresupEleSele
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion_CALC", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgrupacionCalc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_MY", type="datetime", nullable=false)
     */
    private $fechaMy;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Elemento", type="string", length=10, nullable=false)
     */
    private $idElemento;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubElemento", type="string", length=15, nullable=false)
     */
    private $idSubelemento;

    /**
     * @var string
     *
     * @ORM\Column(name="C_Costo", type="string", length=10, nullable=false)
     */
    private $cCosto;

    /**
     * @var integer
     *
     * @ORM\Column(name="SumSaldo_Ant", type="integer", nullable=false)
     */
    private $sumsaldoAnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="SumSaldo_Per", type="integer", nullable=false)
     */
    private $sumsaldoPer;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Per", type="integer", nullable=false)
     */
    private $planPer;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     */
    private $idsync;



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
     * @return FzRzzrkejecPresupEleSele
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
     * Set idElemento
     *
     * @param string $idElemento
     * @return FzRzzrkejecPresupEleSele
     */
    public function setIdElemento($idElemento)
    {
        $this->idElemento = $idElemento;

        return $this;
    }

    /**
     * Get idElemento
     *
     * @return string 
     */
    public function getIdElemento()
    {
        return $this->idElemento;
    }

    /**
     * Set idSubelemento
     *
     * @param string $idSubelemento
     * @return FzRzzrkejecPresupEleSele
     */
    public function setIdSubelemento($idSubelemento)
    {
        $this->idSubelemento = $idSubelemento;

        return $this;
    }

    /**
     * Get idSubelemento
     *
     * @return string 
     */
    public function getIdSubelemento()
    {
        return $this->idSubelemento;
    }

    /**
     * Set cCosto
     *
     * @param string $cCosto
     * @return FzRzzrkejecPresupEleSele
     */
    public function setCCosto($cCosto)
    {
        $this->cCosto = $cCosto;

        return $this;
    }

    /**
     * Get cCosto
     *
     * @return string 
     */
    public function getCCosto()
    {
        return $this->cCosto;
    }

    /**
     * Set sumsaldoAnt
     *
     * @param integer $sumsaldoAnt
     * @return FzRzzrkejecPresupEleSele
     */
    public function setSumsaldoAnt($sumsaldoAnt)
    {
        $this->sumsaldoAnt = $sumsaldoAnt;

        return $this;
    }

    /**
     * Get sumsaldoAnt
     *
     * @return integer 
     */
    public function getSumsaldoAnt()
    {
        return $this->sumsaldoAnt;
    }

    /**
     * Set sumsaldoPer
     *
     * @param integer $sumsaldoPer
     * @return FzRzzrkejecPresupEleSele
     */
    public function setSumsaldoPer($sumsaldoPer)
    {
        $this->sumsaldoPer = $sumsaldoPer;

        return $this;
    }

    /**
     * Get sumsaldoPer
     *
     * @return integer 
     */
    public function getSumsaldoPer()
    {
        return $this->sumsaldoPer;
    }

    /**
     * Set planPer
     *
     * @param integer $planPer
     * @return FzRzzrkejecPresupEleSele
     */
    public function setPlanPer($planPer)
    {
        $this->planPer = $planPer;

        return $this;
    }

    /**
     * Get planPer
     *
     * @return integer 
     */
    public function getPlanPer()
    {
        return $this->planPer;
    }

    /**
     * Set idsync
     *
     * @param uniqueidentifier $idsync
     * @return FzRzzrkejecPresupEleSele
     */
    public function setIdsync($idsync)
    {
        $this->idsync = $idsync;

        return $this;
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
