<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzcoanticCanc
 *
 * @ORM\Table(name="FzCoAntic_Canc", indexes={@ORM\Index(name="CobrAnCancT21", columns={"Id_Doc", "Ano_Doc", "Forma_Pago", "Id_Cliente"})})
 * @ORM\Entity
 */
class FzcoanticCanc
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
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=true)
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Antic_Canc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $impAnticCanc;



    /**
     * Set idDoc
     *
     * @param string $idDoc
     * @return FzcoanticCanc
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
     * @return FzcoanticCanc
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
     * @return FzcoanticCanc
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
     * @return FzcoanticCanc
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
     * Get impAnticCanc
     *
     * @return integer 
     */
    public function getImpAnticCanc()
    {
        return $this->impAnticCanc;
    }
}
