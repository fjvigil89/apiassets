<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChReembolsosDet
 *
 * @ORM\Table(name="CH_Reembolsos_Det")
 * @ORM\Entity
 */
class ChReembolsosDet
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
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Doc", type="integer", nullable=false)
     */
    private $idDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Pago", type="integer", nullable=false)
     */
    private $contadorPago;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Pago", type="string", length=40, nullable=false)
     */
    private $idPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Doc", type="smallint", nullable=false)
     */
    private $anoDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Pago", type="datetime", nullable=false)
     */
    private $fechaPago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=10, nullable=false)
     */
    private $idConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Cobro", type="smallint", nullable=false)
     */
    private $tipoCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=20, nullable=false)
     */
    private $idProveedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado_Reembolsado", type="smallint", nullable=false)
     */
    private $estadoReembolsado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Reembolsado", type="datetime", nullable=false)
     */
    private $fechaReembolsado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="integer", nullable=false)
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FPago", type="string", length=3, nullable=false)
     */
    private $idFpago;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_AReembolsar", type="string", length=1, nullable=false)
     */
    private $docAreembolsar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden_Impresion", type="integer", nullable=false)
     */
    private $ordenImpresion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ReferenciaKK", type="string", length=40, nullable=false)
     */
    private $idReferenciakk;



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
     * Set ano
     *
     * @param integer $ano
     * @return ChReembolsosDet
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ChReembolsosDet
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
     * Set idDoc
     *
     * @param integer $idDoc
     * @return ChReembolsosDet
     */
    public function setIdDoc($idDoc)
    {
        $this->idDoc = $idDoc;

        return $this;
    }

    /**
     * Get idDoc
     *
     * @return integer 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set contadorPago
     *
     * @param integer $contadorPago
     * @return ChReembolsosDet
     */
    public function setContadorPago($contadorPago)
    {
        $this->contadorPago = $contadorPago;

        return $this;
    }

    /**
     * Get contadorPago
     *
     * @return integer 
     */
    public function getContadorPago()
    {
        return $this->contadorPago;
    }

    /**
     * Set idPago
     *
     * @param string $idPago
     * @return ChReembolsosDet
     */
    public function setIdPago($idPago)
    {
        $this->idPago = $idPago;

        return $this;
    }

    /**
     * Get idPago
     *
     * @return string 
     */
    public function getIdPago()
    {
        return $this->idPago;
    }

    /**
     * Set anoDoc
     *
     * @param integer $anoDoc
     * @return ChReembolsosDet
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
     * Set estado
     *
     * @param integer $estado
     * @return ChReembolsosDet
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechaPago
     *
     * @param \DateTime $fechaPago
     * @return ChReembolsosDet
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
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return ChReembolsosDet
     */
    public function setFechaVence($fechaVence)
    {
        $this->fechaVence = $fechaVence;

        return $this;
    }

    /**
     * Get fechaVence
     *
     * @return \DateTime 
     */
    public function getFechaVence()
    {
        return $this->fechaVence;
    }

    /**
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return ChReembolsosDet
     */
    public function setIdConcepto($idConcepto)
    {
        $this->idConcepto = $idConcepto;

        return $this;
    }

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
     * Set moneda
     *
     * @param string $moneda
     * @return ChReembolsosDet
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
     * Set tipoCobro
     *
     * @param integer $tipoCobro
     * @return ChReembolsosDet
     */
    public function setTipoCobro($tipoCobro)
    {
        $this->tipoCobro = $tipoCobro;

        return $this;
    }

    /**
     * Get tipoCobro
     *
     * @return integer 
     */
    public function getTipoCobro()
    {
        return $this->tipoCobro;
    }

    /**
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return ChReembolsosDet
     */
    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return string 
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return ChReembolsosDet
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return ChReembolsosDet
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
     * Set estadoReembolsado
     *
     * @param integer $estadoReembolsado
     * @return ChReembolsosDet
     */
    public function setEstadoReembolsado($estadoReembolsado)
    {
        $this->estadoReembolsado = $estadoReembolsado;

        return $this;
    }

    /**
     * Get estadoReembolsado
     *
     * @return integer 
     */
    public function getEstadoReembolsado()
    {
        return $this->estadoReembolsado;
    }

    /**
     * Set fechaReembolsado
     *
     * @param \DateTime $fechaReembolsado
     * @return ChReembolsosDet
     */
    public function setFechaReembolsado($fechaReembolsado)
    {
        $this->fechaReembolsado = $fechaReembolsado;

        return $this;
    }

    /**
     * Get fechaReembolsado
     *
     * @return \DateTime 
     */
    public function getFechaReembolsado()
    {
        return $this->fechaReembolsado;
    }

    /**
     * Set item
     *
     * @param integer $item
     * @return ChReembolsosDet
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set idFpago
     *
     * @param string $idFpago
     * @return ChReembolsosDet
     */
    public function setIdFpago($idFpago)
    {
        $this->idFpago = $idFpago;

        return $this;
    }

    /**
     * Get idFpago
     *
     * @return string 
     */
    public function getIdFpago()
    {
        return $this->idFpago;
    }

    /**
     * Set docAreembolsar
     *
     * @param string $docAreembolsar
     * @return ChReembolsosDet
     */
    public function setDocAreembolsar($docAreembolsar)
    {
        $this->docAreembolsar = $docAreembolsar;

        return $this;
    }

    /**
     * Get docAreembolsar
     *
     * @return string 
     */
    public function getDocAreembolsar()
    {
        return $this->docAreembolsar;
    }

    /**
     * Set ordenImpresion
     *
     * @param integer $ordenImpresion
     * @return ChReembolsosDet
     */
    public function setOrdenImpresion($ordenImpresion)
    {
        $this->ordenImpresion = $ordenImpresion;

        return $this;
    }

    /**
     * Get ordenImpresion
     *
     * @return integer 
     */
    public function getOrdenImpresion()
    {
        return $this->ordenImpresion;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return ChReembolsosDet
     */
    public function setXtrans($xtrans)
    {
        $this->xtrans = $xtrans;

        return $this;
    }

    /**
     * Get xtrans
     *
     * @return boolean 
     */
    public function getXtrans()
    {
        return $this->xtrans;
    }

    /**
     * Set idReferenciakk
     *
     * @param string $idReferenciakk
     * @return ChReembolsosDet
     */
    public function setIdReferenciakk($idReferenciakk)
    {
        $this->idReferenciakk = $idReferenciakk;

        return $this;
    }

    /**
     * Get idReferenciakk
     *
     * @return string 
     */
    public function getIdReferenciakk()
    {
        return $this->idReferenciakk;
    }
}
