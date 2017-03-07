<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * On1monedaConfigCont
 *
 * @ORM\Table(name="ON_1Moneda_Config_Cont")
 * @ORM\Entity
 */
class On1monedaConfigCont
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Fila", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fila;

    /**
     * @var integer
     *
     * @ORM\Column(name="Aplicar_a", type="smallint", nullable=false)
     */
    private $aplicarA;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta_I", type="string", length=50, nullable=false)
     */
    private $ctaI;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta_F", type="string", length=50, nullable=false)
     */
    private $ctaF;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta_Contrap", type="string", length=50, nullable=false)
     */
    private $ctaContrap;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Calculo", type="smallint", nullable=false)
     */
    private $tipoCalculo;

    /**
     * @var string
     *
     * @ORM\Column(name="Coeficiente", type="decimal", precision=17, scale=7, nullable=false)
     */
    private $coeficiente;

    /**
     * @var string
     *
     * @ORM\Column(name="IRPM", type="decimal", precision=17, scale=7, nullable=false)
     */
    private $irpm;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo", type="integer", nullable=false)
     */
    private $saldo;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Incluir", type="boolean", nullable=false)
     */
    private $incluir;



    /**
     * Get fila
     *
     * @return integer 
     */
    public function getFila()
    {
        return $this->fila;
    }

    /**
     * Set aplicarA
     *
     * @param integer $aplicarA
     * @return On1monedaConfigCont
     */
    public function setAplicarA($aplicarA)
    {
        $this->aplicarA = $aplicarA;

        return $this;
    }

    /**
     * Get aplicarA
     *
     * @return integer 
     */
    public function getAplicarA()
    {
        return $this->aplicarA;
    }

    /**
     * Set ctaI
     *
     * @param string $ctaI
     * @return On1monedaConfigCont
     */
    public function setCtaI($ctaI)
    {
        $this->ctaI = $ctaI;

        return $this;
    }

    /**
     * Get ctaI
     *
     * @return string 
     */
    public function getCtaI()
    {
        return $this->ctaI;
    }

    /**
     * Set ctaF
     *
     * @param string $ctaF
     * @return On1monedaConfigCont
     */
    public function setCtaF($ctaF)
    {
        $this->ctaF = $ctaF;

        return $this;
    }

    /**
     * Get ctaF
     *
     * @return string 
     */
    public function getCtaF()
    {
        return $this->ctaF;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return On1monedaConfigCont
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
     * Set ctaContrap
     *
     * @param string $ctaContrap
     * @return On1monedaConfigCont
     */
    public function setCtaContrap($ctaContrap)
    {
        $this->ctaContrap = $ctaContrap;

        return $this;
    }

    /**
     * Get ctaContrap
     *
     * @return string 
     */
    public function getCtaContrap()
    {
        return $this->ctaContrap;
    }

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return On1monedaConfigCont
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
     * Set tipoCalculo
     *
     * @param integer $tipoCalculo
     * @return On1monedaConfigCont
     */
    public function setTipoCalculo($tipoCalculo)
    {
        $this->tipoCalculo = $tipoCalculo;

        return $this;
    }

    /**
     * Get tipoCalculo
     *
     * @return integer 
     */
    public function getTipoCalculo()
    {
        return $this->tipoCalculo;
    }

    /**
     * Set coeficiente
     *
     * @param string $coeficiente
     * @return On1monedaConfigCont
     */
    public function setCoeficiente($coeficiente)
    {
        $this->coeficiente = $coeficiente;

        return $this;
    }

    /**
     * Get coeficiente
     *
     * @return string 
     */
    public function getCoeficiente()
    {
        return $this->coeficiente;
    }

    /**
     * Set irpm
     *
     * @param string $irpm
     * @return On1monedaConfigCont
     */
    public function setIrpm($irpm)
    {
        $this->irpm = $irpm;

        return $this;
    }

    /**
     * Get irpm
     *
     * @return string 
     */
    public function getIrpm()
    {
        return $this->irpm;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return On1monedaConfigCont
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
     * Set moneda
     *
     * @param string $moneda
     * @return On1monedaConfigCont
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set incluir
     *
     * @param boolean $incluir
     * @return On1monedaConfigCont
     */
    public function setIncluir($incluir)
    {
        $this->incluir = $incluir;

        return $this;
    }

    /**
     * Get incluir
     *
     * @return boolean 
     */
    public function getIncluir()
    {
        return $this->incluir;
    }
}
