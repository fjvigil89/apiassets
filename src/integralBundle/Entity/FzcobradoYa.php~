<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzcobradoYa
 *
 * @ORM\Table(name="FzCobrado_Ya", indexes={@ORM\Index(name="Cobrado21", columns={"Id_Doc", "Ano_Doc", "Forma_Pago", "Id_Cliente"})})
 * @ORM\Entity
 */
class FzcobradoYa
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Doc", type="string", length=15, nullable=true)
     */
    private $idDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Doc", type="smallint", nullable=true)
     */
    private $anoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Forma_Pago", type="string", length=50, nullable=true)
     */
    private $formaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Recargo", type="integer", nullable=true)
     */
    private $recargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Descuento", type="integer", nullable=true)
     */
    private $descuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Cobrado", type="integer", nullable=true)
     */
    private $impCobrado;



    /**
     * Set idDoc
     *
     * @param string $idDoc
     * @return FzcobradoYa
     */
    public function setIdDoc($idDoc)
    {
        $this->idDoc = $idDoc;

        return $this;
    }

    /**
     * Get idDoc
     *
     * @return string 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set anoDoc
     *
     * @param integer $anoDoc
     * @return FzcobradoYa
     */
    public function setAnoDoc($anoDoc)
    {
        $this->anoDoc = $anoDoc;

        return $this;
    }

    /**
     * Get anoDoc
     *
     * @return integer 
     */
    public function getAnoDoc()
    {
        return $this->anoDoc;
    }

    /**
     * Set formaPago
     *
     * @param string $formaPago
     * @return FzcobradoYa
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
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set recargo
     *
     * @param integer $recargo
     * @return FzcobradoYa
     */
    public function setRecargo($recargo)
    {
        $this->recargo = $recargo;

        return $this;
    }

    /**
     * Get recargo
     *
     * @return integer 
     */
    public function getRecargo()
    {
        return $this->recargo;
    }

    /**
     * Set descuento
     *
     * @param integer $descuento
     * @return FzcobradoYa
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return integer 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set impCobrado
     *
     * @param integer $impCobrado
     * @return FzcobradoYa
     */
    public function setImpCobrado($impCobrado)
    {
        $this->impCobrado = $impCobrado;

        return $this;
    }

    /**
     * Get impCobrado
     *
     * @return integer 
     */
    public function getImpCobrado()
    {
        return $this->impCobrado;
    }
}
