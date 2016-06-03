<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fzcobros
 *
 * @ORM\Table(name="FzCobros")
 * @ORM\Entity
 */
class Fzcobros
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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Pago", type="datetime", nullable=true)
     */
    private $fechaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=true)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=true)
     */
    private $tipoMoneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Doc", type="integer", nullable=true)
     */
    private $impDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Cobros", type="integer", nullable=true)
     */
    private $impCobros;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Pendiente", type="integer", nullable=true)
     */
    private $impPendiente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Antic_Canc", type="integer", nullable=true)
     */
    private $impAnticCanc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Anulado", type="integer", nullable=true)
     */
    private $impAnulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_CobroVsAntic_Canc", type="integer", nullable=true)
     */
    private $impCobrovsanticCanc;

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
     * @ORM\Column(name="Contador1", type="integer", nullable=true)
     */
    private $contador1;



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
     * @return Fzcobros
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
     * @return Fzcobros
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
     * @return Fzcobros
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
     * Set fechaPago
     *
     * @param \DateTime $fechaPago
     * @return Fzcobros
     */
    public function setFechaPago($fechaPago)
    {
        $this->fechaPago = $fechaPago;

        return $this;
    }

    /**
     * Get fechaPago
     *
     * @return \DateTime 
     */
    public function getFechaPago()
    {
        return $this->fechaPago;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return Fzcobros
     */
    public function setIdAgrupacion($idAgrupacion)
    {
        $this->idAgrupacion = $idAgrupacion;

        return $this;
    }

    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return Fzcobros
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
     * Set impDoc
     *
     * @param integer $impDoc
     * @return Fzcobros
     */
    public function setImpDoc($impDoc)
    {
        $this->impDoc = $impDoc;

        return $this;
    }

    /**
     * Get impDoc
     *
     * @return integer 
     */
    public function getImpDoc()
    {
        return $this->impDoc;
    }

    /**
     * Set impCobros
     *
     * @param integer $impCobros
     * @return Fzcobros
     */
    public function setImpCobros($impCobros)
    {
        $this->impCobros = $impCobros;

        return $this;
    }

    /**
     * Get impCobros
     *
     * @return integer 
     */
    public function getImpCobros()
    {
        return $this->impCobros;
    }

    /**
     * Set impPendiente
     *
     * @param integer $impPendiente
     * @return Fzcobros
     */
    public function setImpPendiente($impPendiente)
    {
        $this->impPendiente = $impPendiente;

        return $this;
    }

    /**
     * Get impPendiente
     *
     * @return integer 
     */
    public function getImpPendiente()
    {
        return $this->impPendiente;
    }

    /**
     * Set impAnticCanc
     *
     * @param integer $impAnticCanc
     * @return Fzcobros
     */
    public function setImpAnticCanc($impAnticCanc)
    {
        $this->impAnticCanc = $impAnticCanc;

        return $this;
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

    /**
     * Set impAnulado
     *
     * @param integer $impAnulado
     * @return Fzcobros
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

    /**
     * Set impCobrovsanticCanc
     *
     * @param integer $impCobrovsanticCanc
     * @return Fzcobros
     */
    public function setImpCobrovsanticCanc($impCobrovsanticCanc)
    {
        $this->impCobrovsanticCanc = $impCobrovsanticCanc;

        return $this;
    }

    /**
     * Get impCobrovsanticCanc
     *
     * @return integer 
     */
    public function getImpCobrovsanticCanc()
    {
        return $this->impCobrovsanticCanc;
    }

    /**
     * Set recargo
     *
     * @param integer $recargo
     * @return Fzcobros
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
     * @return Fzcobros
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
     * Set contador1
     *
     * @param integer $contador1
     * @return Fzcobros
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
