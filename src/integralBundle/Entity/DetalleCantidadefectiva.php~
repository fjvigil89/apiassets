<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleCantidadefectiva
 *
 * @ORM\Table(name="Detalle_CantidadEfectiva")
 * @ORM\Entity
 */
class DetalleCantidadefectiva
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
     * @ORM\Column(name="Referencia", type="string", length=20, nullable=false)
     */
    private $referencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="CantidadAjustada", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $cantidadajustada;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Prod", type="string", length=255, nullable=false)
     */
    private $descProd;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaOp", type="integer", nullable=false)
     */
    private $contaop;



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
     * Set referencia
     *
     * @param string $referencia
     * @return DetalleCantidadefectiva
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return DetalleCantidadefectiva
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return DetalleCantidadefectiva
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set cantidadajustada
     *
     * @param string $cantidadajustada
     * @return DetalleCantidadefectiva
     */
    public function setCantidadajustada($cantidadajustada)
    {
        $this->cantidadajustada = $cantidadajustada;

        return $this;
    }

    /**
     * Get cantidadajustada
     *
     * @return string 
     */
    public function getCantidadajustada()
    {
        return $this->cantidadajustada;
    }

    /**
     * Set descProd
     *
     * @param string $descProd
     * @return DetalleCantidadefectiva
     */
    public function setDescProd($descProd)
    {
        $this->descProd = $descProd;

        return $this;
    }

    /**
     * Get descProd
     *
     * @return string 
     */
    public function getDescProd()
    {
        return $this->descProd;
    }

    /**
     * Set contaop
     *
     * @param integer $contaop
     * @return DetalleCantidadefectiva
     */
    public function setContaop($contaop)
    {
        $this->contaop = $contaop;

        return $this;
    }

    /**
     * Get contaop
     *
     * @return integer 
     */
    public function getContaop()
    {
        return $this->contaop;
    }
}
