<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRpanticipos
 *
 * @ORM\Table(name="Fz_RPAnticipos")
 * @ORM\Entity
 */
class FzRpanticipos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion_CALC", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgrupacionCalc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Doc", type="string", length=15, nullable=false)
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
     * @ORM\Column(name="Forma_Pago", type="string", length=50, nullable=false)
     */
    private $formaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Proveedor", type="string", length=50, nullable=false)
     */
    private $descProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Organismo", type="string", length=15, nullable=false)
     */
    private $idOrganismo;

    /**
     * @var string
     *
     * @ORM\Column(name="Organismo", type="string", length=50, nullable=false)
     */
    private $organismo;

    /**
     * @var string
     *
     * @ORM\Column(name="Sector", type="string", length=30, nullable=false)
     */
    private $sector;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_MY", type="datetime", nullable=false)
     */
    private $fechaMy;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Doc", type="integer", nullable=false)
     */
    private $impDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Pagado", type="integer", nullable=false)
     */
    private $impPagado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Pendiente", type="integer", nullable=false)
     */
    private $impPendiente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Recargo", type="integer", nullable=false)
     */
    private $recargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Descuento", type="integer", nullable=false)
     */
    private $descuento;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=15, nullable=false)
     */
    private $idConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Concepto", type="string", length=35, nullable=false)
     */
    private $descConcepto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Cobro", type="smallint", nullable=false)
     */
    private $tipoCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Contrato", type="string", length=20, nullable=false)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CCosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CCosto", type="string", length=50, nullable=false)
     */
    private $descCcosto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cont1_Pago", type="integer", nullable=false)
     */
    private $cont1Pago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Hasta_30", type="integer", nullable=false)
     */
    private $hasta30;

    /**
     * @var integer
     *
     * @ORM\Column(name="MasDe_30", type="integer", nullable=false)
     */
    private $masde30;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     */
    private $idsync;



    /**
     * Get idAgrupacionCalc
     *
     * @return string 
     */
    public function getIdAgrupacionCalc()
    {
        return $this->idAgrupacionCalc;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return FzRpanticipos
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
     * Set contador
     *
     * @param integer $contador
     * @return FzRpanticipos
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

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
     * Set idDoc
     *
     * @param string $idDoc
     * @return FzRpanticipos
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
     * @return FzRpanticipos
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
     * @return FzRpanticipos
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
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return FzRpanticipos
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
     * Set descProveedor
     *
     * @param string $descProveedor
     * @return FzRpanticipos
     */
    public function setDescProveedor($descProveedor)
    {
        $this->descProveedor = $descProveedor;

        return $this;
    }

    /**
     * Get descProveedor
     *
     * @return string 
     */
    public function getDescProveedor()
    {
        return $this->descProveedor;
    }

    /**
     * Set idOrganismo
     *
     * @param string $idOrganismo
     * @return FzRpanticipos
     */
    public function setIdOrganismo($idOrganismo)
    {
        $this->idOrganismo = $idOrganismo;

        return $this;
    }

    /**
     * Get idOrganismo
     *
     * @return string 
     */
    public function getIdOrganismo()
    {
        return $this->idOrganismo;
    }

    /**
     * Set organismo
     *
     * @param string $organismo
     * @return FzRpanticipos
     */
    public function setOrganismo($organismo)
    {
        $this->organismo = $organismo;

        return $this;
    }

    /**
     * Get organismo
     *
     * @return string 
     */
    public function getOrganismo()
    {
        return $this->organismo;
    }

    /**
     * Set sector
     *
     * @param string $sector
     * @return FzRpanticipos
     */
    public function setSector($sector)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return string 
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set fechaCheque
     *
     * @param \DateTime $fechaCheque
     * @return FzRpanticipos
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
     * @return FzRpanticipos
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
     * Set fechaMy
     *
     * @param \DateTime $fechaMy
     * @return FzRpanticipos
     */
    public function setFechaMy($fechaMy)
    {
        $this->fechaMy = $fechaMy;

        return $this;
    }

    /**
     * Get fechaMy
     *
     * @return \DateTime 
     */
    public function getFechaMy()
    {
        return $this->fechaMy;
    }

    /**
     * Set impDoc
     *
     * @param integer $impDoc
     * @return FzRpanticipos
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
     * Set impPagado
     *
     * @param integer $impPagado
     * @return FzRpanticipos
     */
    public function setImpPagado($impPagado)
    {
        $this->impPagado = $impPagado;

        return $this;
    }

    /**
     * Get impPagado
     *
     * @return integer 
     */
    public function getImpPagado()
    {
        return $this->impPagado;
    }

    /**
     * Set impPendiente
     *
     * @param integer $impPendiente
     * @return FzRpanticipos
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
     * Set recargo
     *
     * @param integer $recargo
     * @return FzRpanticipos
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
     * @return FzRpanticipos
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
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return FzRpanticipos
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
     * Set descConcepto
     *
     * @param string $descConcepto
     * @return FzRpanticipos
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
     * Set tipoCobro
     *
     * @param integer $tipoCobro
     * @return FzRpanticipos
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
     * Set moneda
     *
     * @param string $moneda
     * @return FzRpanticipos
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
     * Set contrato
     *
     * @param string $contrato
     * @return FzRpanticipos
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato
     *
     * @return string 
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return FzRpanticipos
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }

    /**
     * Set descCcosto
     *
     * @param string $descCcosto
     * @return FzRpanticipos
     */
    public function setDescCcosto($descCcosto)
    {
        $this->descCcosto = $descCcosto;

        return $this;
    }

    /**
     * Get descCcosto
     *
     * @return string 
     */
    public function getDescCcosto()
    {
        return $this->descCcosto;
    }

    /**
     * Set cont1Pago
     *
     * @param integer $cont1Pago
     * @return FzRpanticipos
     */
    public function setCont1Pago($cont1Pago)
    {
        $this->cont1Pago = $cont1Pago;

        return $this;
    }

    /**
     * Get cont1Pago
     *
     * @return integer 
     */
    public function getCont1Pago()
    {
        return $this->cont1Pago;
    }

    /**
     * Set hasta30
     *
     * @param integer $hasta30
     * @return FzRpanticipos
     */
    public function setHasta30($hasta30)
    {
        $this->hasta30 = $hasta30;

        return $this;
    }

    /**
     * Get hasta30
     *
     * @return integer 
     */
    public function getHasta30()
    {
        return $this->hasta30;
    }

    /**
     * Set masde30
     *
     * @param integer $masde30
     * @return FzRpanticipos
     */
    public function setMasde30($masde30)
    {
        $this->masde30 = $masde30;

        return $this;
    }

    /**
     * Get masde30
     *
     * @return integer 
     */
    public function getMasde30()
    {
        return $this->masde30;
    }

    /**
     * Set idsync
     *
     * @param uniqueidentifier $idsync
     * @return FzRpanticipos
     */
    public function setIdsync($idsync)
    {
        $this->idsync = $idsync;

        return $this;
    }

    /**
     * Get idsync
     *
     * @return uniqueidentifier 
     */
    public function getIdsync()
    {
        return $this->idsync;
    }
}
