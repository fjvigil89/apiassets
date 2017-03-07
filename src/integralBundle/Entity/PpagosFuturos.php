<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PpagosFuturos
 *
 * @ORM\Table(name="PPagos_Futuros", uniqueConstraints={@ORM\UniqueConstraint(name="IX1_PPagos_Futuros", columns={"Contador1", "Contador1_Pago"})})
 * @ORM\Entity
 */
class PpagosFuturos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Rx", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contadorRx;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Doc", type="string", length=15, nullable=false)
     */
    private $idDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Doc", type="smallint", nullable=false)
     */
    private $anoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FormaPago", type="string", length=3, nullable=false)
     */
    private $idFormapago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=2, nullable=false)
     */
    private $idConcepto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Cobro", type="smallint", nullable=false)
     */
    private $tipoCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     */
    private $idProveedor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Pago", type="datetime", nullable=false)
     */
    private $fechaPago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cheque", type="datetime", nullable=false)
     */
    private $fechaCheque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Cobro", type="integer", nullable=false)
     */
    private $importeCobro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_vsAnticipo", type="boolean", nullable=false)
     */
    private $pagoVsanticipo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Anticipo_Preassets", type="boolean", nullable=false)
     */
    private $anticipoPreassets;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca", type="boolean", nullable=false)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=150, nullable=false)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1_Pago", type="integer", nullable=false)
     */
    private $contador1Pago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     */
    private $contador1;



    /**
     * Get contadorRx
     *
     * @return integer 
     */
    public function getContadorRx()
    {
        return $this->contadorRx;
    }

    /**
     * Set idDoc
     *
     * @param string $idDoc
     * @return PpagosFuturos
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
     * @return PpagosFuturos
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
     * Set idFormapago
     *
     * @param string $idFormapago
     * @return PpagosFuturos
     */
    public function setIdFormapago($idFormapago)
    {
        $this->idFormapago = $idFormapago;

        return $this;
    }

    /**
     * Get idFormapago
     *
     * @return string 
     */
    public function getIdFormapago()
    {
        return $this->idFormapago;
    }

    /**
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return PpagosFuturos
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
     * Set tipoCobro
     *
     * @param integer $tipoCobro
     * @return PpagosFuturos
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
     * @return PpagosFuturos
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
     * Set fechaPago
     *
     * @param \DateTime $fechaPago
     * @return PpagosFuturos
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
     * Set fechaCheque
     *
     * @param \DateTime $fechaCheque
     * @return PpagosFuturos
     */
    public function setFechaCheque($fechaCheque)
    {
        $this->fechaCheque = $fechaCheque;

        return $this;
    }

    /**
     * Get fechaCheque
     *
     * @return \DateTime 
     */
    public function getFechaCheque()
    {
        return $this->fechaCheque;
    }

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return PpagosFuturos
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
     * Set moneda
     *
     * @param string $moneda
     * @return PpagosFuturos
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
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return PpagosFuturos
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
     * Set importe
     *
     * @param integer $importe
     * @return PpagosFuturos
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
     * Set importeCobro
     *
     * @param integer $importeCobro
     * @return PpagosFuturos
     */
    public function setImporteCobro($importeCobro)
    {
        $this->importeCobro = $importeCobro;

        return $this;
    }

    /**
     * Get importeCobro
     *
     * @return integer 
     */
    public function getImporteCobro()
    {
        return $this->importeCobro;
    }

    /**
     * Set pagoVsanticipo
     *
     * @param boolean $pagoVsanticipo
     * @return PpagosFuturos
     */
    public function setPagoVsanticipo($pagoVsanticipo)
    {
        $this->pagoVsanticipo = $pagoVsanticipo;

        return $this;
    }

    /**
     * Get pagoVsanticipo
     *
     * @return boolean 
     */
    public function getPagoVsanticipo()
    {
        return $this->pagoVsanticipo;
    }

    /**
     * Set anticipoPreassets
     *
     * @param boolean $anticipoPreassets
     * @return PpagosFuturos
     */
    public function setAnticipoPreassets($anticipoPreassets)
    {
        $this->anticipoPreassets = $anticipoPreassets;

        return $this;
    }

    /**
     * Get anticipoPreassets
     *
     * @return boolean 
     */
    public function getAnticipoPreassets()
    {
        return $this->anticipoPreassets;
    }

    /**
     * Set marca
     *
     * @param boolean $marca
     * @return PpagosFuturos
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return boolean 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return PpagosFuturos
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set contador1Pago
     *
     * @param integer $contador1Pago
     * @return PpagosFuturos
     */
    public function setContador1Pago($contador1Pago)
    {
        $this->contador1Pago = $contador1Pago;

        return $this;
    }

    /**
     * Get contador1Pago
     *
     * @return integer 
     */
    public function getContador1Pago()
    {
        return $this->contador1Pago;
    }

    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return PpagosFuturos
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
