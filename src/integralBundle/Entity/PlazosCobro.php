<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlazosCobro
 *
 * @ORM\Table(name="Plazos_Cobro")
 * @ORM\Entity
 */
class PlazosCobro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Docum", type="string", length=1, nullable=false)
     */
    private $tipoDocum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias", type="smallint", nullable=false)
     */
    private $dias;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcientoMB", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMB", type="integer", nullable=false)
     */
    private $importemb;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoMB", type="integer", nullable=false)
     */
    private $saldomb;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcientoMC", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMC", type="integer", nullable=false)
     */
    private $importemc;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoMC", type="integer", nullable=false)
     */
    private $saldomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMO", type="integer", nullable=false)
     */
    private $importemo;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoMO", type="integer", nullable=false)
     */
    private $saldomo;



    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set tipoDocum
     *
     * @param string $tipoDocum
     * @return PlazosCobro
     */
    public function setTipoDocum($tipoDocum)
    {
        $this->tipoDocum = $tipoDocum;

        return $this;
    }

    /**
     * Get tipoDocum
     *
     * @return string 
     */
    public function getTipoDocum()
    {
        return $this->tipoDocum;
    }

    /**
     * Set dias
     *
     * @param integer $dias
     * @return PlazosCobro
     */
    public function setDias($dias)
    {
        $this->dias = $dias;

        return $this;
    }

    /**
     * Get dias
     *
     * @return integer 
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set porcientomb
     *
     * @param string $porcientomb
     * @return PlazosCobro
     */
    public function setPorcientomb($porcientomb)
    {
        $this->porcientomb = $porcientomb;

        return $this;
    }

    /**
     * Get porcientomb
     *
     * @return string 
     */
    public function getPorcientomb()
    {
        return $this->porcientomb;
    }

    /**
     * Set importemb
     *
     * @param integer $importemb
     * @return PlazosCobro
     */
    public function setImportemb($importemb)
    {
        $this->importemb = $importemb;

        return $this;
    }

    /**
     * Get importemb
     *
     * @return integer 
     */
    public function getImportemb()
    {
        return $this->importemb;
    }

    /**
     * Set saldomb
     *
     * @param integer $saldomb
     * @return PlazosCobro
     */
    public function setSaldomb($saldomb)
    {
        $this->saldomb = $saldomb;

        return $this;
    }

    /**
     * Get saldomb
     *
     * @return integer 
     */
    public function getSaldomb()
    {
        return $this->saldomb;
    }

    /**
     * Set porcientomc
     *
     * @param string $porcientomc
     * @return PlazosCobro
     */
    public function setPorcientomc($porcientomc)
    {
        $this->porcientomc = $porcientomc;

        return $this;
    }

    /**
     * Get porcientomc
     *
     * @return string 
     */
    public function getPorcientomc()
    {
        return $this->porcientomc;
    }

    /**
     * Set importemc
     *
     * @param integer $importemc
     * @return PlazosCobro
     */
    public function setImportemc($importemc)
    {
        $this->importemc = $importemc;

        return $this;
    }

    /**
     * Get importemc
     *
     * @return integer 
     */
    public function getImportemc()
    {
        return $this->importemc;
    }

    /**
     * Set saldomc
     *
     * @param integer $saldomc
     * @return PlazosCobro
     */
    public function setSaldomc($saldomc)
    {
        $this->saldomc = $saldomc;

        return $this;
    }

    /**
     * Get saldomc
     *
     * @return integer 
     */
    public function getSaldomc()
    {
        return $this->saldomc;
    }

    /**
     * Set importemo
     *
     * @param integer $importemo
     * @return PlazosCobro
     */
    public function setImportemo($importemo)
    {
        $this->importemo = $importemo;

        return $this;
    }

    /**
     * Get importemo
     *
     * @return integer 
     */
    public function getImportemo()
    {
        return $this->importemo;
    }

    /**
     * Set saldomo
     *
     * @param integer $saldomo
     * @return PlazosCobro
     */
    public function setSaldomo($saldomo)
    {
        $this->saldomo = $saldomo;

        return $this;
    }

    /**
     * Get saldomo
     *
     * @return integer 
     */
    public function getSaldomo()
    {
        return $this->saldomo;
    }
}
