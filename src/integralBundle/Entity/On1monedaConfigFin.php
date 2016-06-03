<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * On1monedaConfigFin
 *
 * @ORM\Table(name="ON_1Moneda_Config_FIN")
 * @ORM\Entity
 */
class On1monedaConfigFin
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
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Forma_Pago", type="string", length=55, nullable=false)
     */
    private $formaPago;

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
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta_F", type="string", length=50, nullable=false)
     */
    private $ctaF;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Incluir", type="boolean", nullable=false)
     */
    private $incluir;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     */
    private $contador1;



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
     * @return On1monedaConfigFin
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
     * Set moneda
     *
     * @param string $moneda
     * @return On1monedaConfigFin
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return On1monedaConfigFin
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
     * Set formaPago
     *
     * @param string $formaPago
     * @return On1monedaConfigFin
     */
    public function setFormaPago($formaPago)
    {
        $this->formaPago = $formaPago;

        return $this;
    }

    /**
     * Get formaPago
     *
     * @return string 
     */
    public function getFormaPago()
    {
        return $this->formaPago;
    }

    /**
     * Set tipoCalculo
     *
     * @param integer $tipoCalculo
     * @return On1monedaConfigFin
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
     * @return On1monedaConfigFin
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
     * @return On1monedaConfigFin
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
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return On1monedaConfigFin
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
     * Set ctaF
     *
     * @param string $ctaF
     * @return On1monedaConfigFin
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
     * Set incluir
     *
     * @param boolean $incluir
     * @return On1monedaConfigFin
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

    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return On1monedaConfigFin
     */
    public function setContador1($contador1)
    {
        $this->contador1 = $contador1;

        return $this;
    }

    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }
}
