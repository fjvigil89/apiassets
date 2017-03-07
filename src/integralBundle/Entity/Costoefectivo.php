<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Costoefectivo
 *
 * @ORM\Table(name="CostoEfectivo")
 * @ORM\Entity
 */
class Costoefectivo
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
     * @var \DateTime
     *
     * @ORM\Column(name="FechaInicial", type="datetime", nullable=false)
     */
    private $fechainicial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaFinal", type="datetime", nullable=false)
     */
    private $fechafinal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var integer
     *
     * @ORM\Column(name="No_Orden", type="integer", nullable=false)
     */
    private $noOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="Almacen_Orden", type="string", length=5, nullable=false)
     */
    private $almacenOrden;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Orden", type="integer", nullable=false)
     */
    private $anoOrden;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Orden", type="integer", nullable=false)
     */
    private $contadorOrden;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PorPeriodo", type="boolean", nullable=false)
     */
    private $porperiodo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_prod", type="smallint", nullable=false)
     */
    private $tipoProd;



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
     * Set fechainicial
     *
     * @param \DateTime $fechainicial
     * @return Costoefectivo
     */
    public function setFechainicial($fechainicial)
    {
        $this->fechainicial = $fechainicial;

        return $this;
    }

    /**
     * Get fechainicial
     *
     * @return \DateTime 
     */
    public function getFechainicial()
    {
        return $this->fechainicial;
    }

    /**
     * Set fechafinal
     *
     * @param \DateTime $fechafinal
     * @return Costoefectivo
     */
    public function setFechafinal($fechafinal)
    {
        $this->fechafinal = $fechafinal;

        return $this;
    }

    /**
     * Get fechafinal
     *
     * @return \DateTime 
     */
    public function getFechafinal()
    {
        return $this->fechafinal;
    }

    /**
     * Set confirmada
     *
     * @param integer $confirmada
     * @return Costoefectivo
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;

        return $this;
    }

    /**
     * Get confirmada
     *
     * @return integer 
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }

    /**
     * Set noOrden
     *
     * @param integer $noOrden
     * @return Costoefectivo
     */
    public function setNoOrden($noOrden)
    {
        $this->noOrden = $noOrden;

        return $this;
    }

    /**
     * Get noOrden
     *
     * @return integer 
     */
    public function getNoOrden()
    {
        return $this->noOrden;
    }

    /**
     * Set almacenOrden
     *
     * @param string $almacenOrden
     * @return Costoefectivo
     */
    public function setAlmacenOrden($almacenOrden)
    {
        $this->almacenOrden = $almacenOrden;

        return $this;
    }

    /**
     * Get almacenOrden
     *
     * @return string 
     */
    public function getAlmacenOrden()
    {
        return $this->almacenOrden;
    }

    /**
     * Set anoOrden
     *
     * @param integer $anoOrden
     * @return Costoefectivo
     */
    public function setAnoOrden($anoOrden)
    {
        $this->anoOrden = $anoOrden;

        return $this;
    }

    /**
     * Get anoOrden
     *
     * @return integer 
     */
    public function getAnoOrden()
    {
        return $this->anoOrden;
    }

    /**
     * Set contadorOrden
     *
     * @param integer $contadorOrden
     * @return Costoefectivo
     */
    public function setContadorOrden($contadorOrden)
    {
        $this->contadorOrden = $contadorOrden;

        return $this;
    }

    /**
     * Get contadorOrden
     *
     * @return integer 
     */
    public function getContadorOrden()
    {
        return $this->contadorOrden;
    }

    /**
     * Set porperiodo
     *
     * @param boolean $porperiodo
     * @return Costoefectivo
     */
    public function setPorperiodo($porperiodo)
    {
        $this->porperiodo = $porperiodo;

        return $this;
    }

    /**
     * Get porperiodo
     *
     * @return boolean 
     */
    public function getPorperiodo()
    {
        return $this->porperiodo;
    }

    /**
     * Set tipoProd
     *
     * @param integer $tipoProd
     * @return Costoefectivo
     */
    public function setTipoProd($tipoProd)
    {
        $this->tipoProd = $tipoProd;

        return $this;
    }

    /**
     * Get tipoProd
     *
     * @return integer 
     */
    public function getTipoProd()
    {
        return $this->tipoProd;
    }
}
