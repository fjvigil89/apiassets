<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concepto
 *
 * @ORM\Table(name="Concepto")
 * @ORM\Entity
 */
class Concepto
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Concepto", type="string", length=25, nullable=false)
     */
    private $descConcepto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Comision", type="boolean", nullable=false)
     */
    private $pagoComision;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;



    /**
     * Get idConcepto
     *
     * @return string 
     */
    public function getIdConcepto()
    {
        return $this->idConcepto;
    }

    /**
     * Set descConcepto
     *
     * @param string $descConcepto
     * @return Concepto
     */
    public function setDescConcepto($descConcepto)
    {
        $this->descConcepto = $descConcepto;

        return $this;
    }

    /**
     * Get descConcepto
     *
     * @return string 
     */
    public function getDescConcepto()
    {
        return $this->descConcepto;
    }

    /**
     * Set pagoComision
     *
     * @param boolean $pagoComision
     * @return Concepto
     */
    public function setPagoComision($pagoComision)
    {
        $this->pagoComision = $pagoComision;

        return $this;
    }

    /**
     * Get pagoComision
     *
     * @return boolean 
     */
    public function getPagoComision()
    {
        return $this->pagoComision;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return Concepto
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return integer 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }
}
