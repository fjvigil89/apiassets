<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzcobrosAnulados
 *
 * @ORM\Table(name="FzCobros_Anulados", indexes={@ORM\Index(name="CobrosAN21", columns={"Id_Doc", "Ano_Doc", "Forma_Pago", "Id_Cliente"})})
 * @ORM\Entity
 */
class FzcobrosAnulados
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Doc", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=true)
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Anulado", type="integer", nullable=true)
     */
    private $impAnulado;



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
     * @return FzcobrosAnulados
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
     * @return FzcobrosAnulados
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return FzcobrosAnulados
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
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
     * Set impAnulado
     *
     * @param integer $impAnulado
     * @return FzcobrosAnulados
     */
    public function setImpAnulado($impAnulado)
    {
        $this->impAnulado = $impAnulado;

        return $this;
    }

    /**
     * Get impAnulado
     *
     * @return integer 
     */
    public function getImpAnulado()
    {
        return $this->impAnulado;
    }
}
