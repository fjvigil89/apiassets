<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesProvPlazosCobro
 *
 * @ORM\Table(name="Clientes_Prov_Plazos_Cobro")
 * @ORM\Entity
 */
class ClientesProvPlazosCobro
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
     * @ORM\Column(name="Tipo_Doc", type="string", length=1, nullable=false)
     */
    private $tipoDoc;

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
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set tipoDoc
     *
     * @param string $tipoDoc
     * @return ClientesProvPlazosCobro
     */
    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;

        return $this;
    }

    /**
     * Get tipoDoc
     *
     * @return string 
     */
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    /**
     * Set dias
     *
     * @param integer $dias
     * @return ClientesProvPlazosCobro
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
     * @return ClientesProvPlazosCobro
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
     * @return ClientesProvPlazosCobro
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
     * @return ClientesProvPlazosCobro
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
     * @return ClientesProvPlazosCobro
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
     * @return ClientesProvPlazosCobro
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
     * @return ClientesProvPlazosCobro
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
}
