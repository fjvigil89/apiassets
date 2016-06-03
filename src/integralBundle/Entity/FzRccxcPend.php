<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRccxcPend
 *
 * @ORM\Table(name="Fz_RCCxC_Pend")
 * @ORM\Entity
 */
class FzRccxcPend
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Factura", type="integer", nullable=false)
     */
    private $idFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Factura", type="smallint", nullable=false)
     */
    private $anoFactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Despacho", type="datetime", nullable=false)
     */
    private $fechaDespacho;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Final", type="datetime", nullable=false)
     */
    private $fechaFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=50, nullable=false)
     */
    private $descCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Contrato", type="string", length=20, nullable=false)
     */
    private $contrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_MY", type="datetime", nullable=false)
     */
    private $fechaMy;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Factura", type="integer", nullable=false)
     */
    private $impFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Cobro", type="integer", nullable=false)
     */
    private $impCobro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Cobro_Canc", type="integer", nullable=false)
     */
    private $impCobroCanc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Devuelto", type="integer", nullable=false)
     */
    private $impDevuelto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_PorCobrar", type="integer", nullable=false)
     */
    private $impPorcobrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_ACobrar1", type="integer", nullable=false)
     */
    private $impAcobrar1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_ACobrar2", type="integer", nullable=false)
     */
    private $impAcobrar2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_ACobrar3", type="integer", nullable=false)
     */
    private $impAcobrar3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_ACobrar4", type="integer", nullable=false)
     */
    private $impAcobrar4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_ACobrar5", type="integer", nullable=false)
     */
    private $impAcobrar5;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Organismo", type="string", length=15, nullable=false)
     */
    private $idOrganismo;

    /**
     * @var string
     *
     * @ORM\Column(name="Sector", type="string", length=30, nullable=false)
     */
    private $sector;

    /**
     * @var string
     *
     * @ORM\Column(name="Conduce", type="string", length=22, nullable=false)
     */
    private $conduce;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Fa", type="integer", nullable=false)
     */
    private $contadorFa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fa_PreAssets", type="boolean", nullable=false)
     */
    private $faPreassets;

    /**
     * @var string
     *
     * @ORM\Column(name="C_Pago", type="string", length=60, nullable=false)
     */
    private $cPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Fa", type="string", length=10, nullable=false)
     */
    private $idClasifFa;

    /**
     * @var string
     *
     * @ORM\Column(name="Organismo", type="string", length=50, nullable=false)
     */
    private $organismo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cpago", type="string", length=50, nullable=false)
     */
    private $descCpago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     */
    private $idsync;



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
     * @return FzRccxcPend
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
     * Set idFactura
     *
     * @param integer $idFactura
     * @return FzRccxcPend
     */
    public function setIdFactura($idFactura)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * Get idFactura
     *
     * @return integer 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return FzRccxcPend
     */
    public function setIdAlmacen($idAlmacen)
    {
        $this->idAlmacen = $idAlmacen;

        return $this;
    }

    /**
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set anoFactura
     *
     * @param integer $anoFactura
     * @return FzRccxcPend
     */
    public function setAnoFactura($anoFactura)
    {
        $this->anoFactura = $anoFactura;

        return $this;
    }

    /**
     * Get anoFactura
     *
     * @return integer 
     */
    public function getAnoFactura()
    {
        return $this->anoFactura;
    }

    /**
     * Set fechaDespacho
     *
     * @param \DateTime $fechaDespacho
     * @return FzRccxcPend
     */
    public function setFechaDespacho($fechaDespacho)
    {
        $this->fechaDespacho = $fechaDespacho;

        return $this;
    }

    /**
     * Get fechaDespacho
     *
     * @return \DateTime 
     */
    public function getFechaDespacho()
    {
        return $this->fechaDespacho;
    }

    /**
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     * @return FzRccxcPend
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return \DateTime 
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return FzRccxcPend
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
     * Set descCliente
     *
     * @param string $descCliente
     * @return FzRccxcPend
     */
    public function setDescCliente($descCliente)
    {
        $this->descCliente = $descCliente;

        return $this;
    }

    /**
     * Get descCliente
     *
     * @return string 
     */
    public function getDescCliente()
    {
        return $this->descCliente;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     * @return FzRccxcPend
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
     * Set fechaMy
     *
     * @param \DateTime $fechaMy
     * @return FzRccxcPend
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
     * Set impFactura
     *
     * @param integer $impFactura
     * @return FzRccxcPend
     */
    public function setImpFactura($impFactura)
    {
        $this->impFactura = $impFactura;

        return $this;
    }

    /**
     * Get impFactura
     *
     * @return integer 
     */
    public function getImpFactura()
    {
        return $this->impFactura;
    }

    /**
     * Set impCobro
     *
     * @param integer $impCobro
     * @return FzRccxcPend
     */
    public function setImpCobro($impCobro)
    {
        $this->impCobro = $impCobro;

        return $this;
    }

    /**
     * Get impCobro
     *
     * @return integer 
     */
    public function getImpCobro()
    {
        return $this->impCobro;
    }

    /**
     * Set impCobroCanc
     *
     * @param integer $impCobroCanc
     * @return FzRccxcPend
     */
    public function setImpCobroCanc($impCobroCanc)
    {
        $this->impCobroCanc = $impCobroCanc;

        return $this;
    }

    /**
     * Get impCobroCanc
     *
     * @return integer 
     */
    public function getImpCobroCanc()
    {
        return $this->impCobroCanc;
    }

    /**
     * Set impDevuelto
     *
     * @param integer $impDevuelto
     * @return FzRccxcPend
     */
    public function setImpDevuelto($impDevuelto)
    {
        $this->impDevuelto = $impDevuelto;

        return $this;
    }

    /**
     * Get impDevuelto
     *
     * @return integer 
     */
    public function getImpDevuelto()
    {
        return $this->impDevuelto;
    }

    /**
     * Set impPorcobrar
     *
     * @param integer $impPorcobrar
     * @return FzRccxcPend
     */
    public function setImpPorcobrar($impPorcobrar)
    {
        $this->impPorcobrar = $impPorcobrar;

        return $this;
    }

    /**
     * Get impPorcobrar
     *
     * @return integer 
     */
    public function getImpPorcobrar()
    {
        return $this->impPorcobrar;
    }

    /**
     * Set impAcobrar1
     *
     * @param integer $impAcobrar1
     * @return FzRccxcPend
     */
    public function setImpAcobrar1($impAcobrar1)
    {
        $this->impAcobrar1 = $impAcobrar1;

        return $this;
    }

    /**
     * Get impAcobrar1
     *
     * @return integer 
     */
    public function getImpAcobrar1()
    {
        return $this->impAcobrar1;
    }

    /**
     * Set impAcobrar2
     *
     * @param integer $impAcobrar2
     * @return FzRccxcPend
     */
    public function setImpAcobrar2($impAcobrar2)
    {
        $this->impAcobrar2 = $impAcobrar2;

        return $this;
    }

    /**
     * Get impAcobrar2
     *
     * @return integer 
     */
    public function getImpAcobrar2()
    {
        return $this->impAcobrar2;
    }

    /**
     * Set impAcobrar3
     *
     * @param integer $impAcobrar3
     * @return FzRccxcPend
     */
    public function setImpAcobrar3($impAcobrar3)
    {
        $this->impAcobrar3 = $impAcobrar3;

        return $this;
    }

    /**
     * Get impAcobrar3
     *
     * @return integer 
     */
    public function getImpAcobrar3()
    {
        return $this->impAcobrar3;
    }

    /**
     * Set impAcobrar4
     *
     * @param integer $impAcobrar4
     * @return FzRccxcPend
     */
    public function setImpAcobrar4($impAcobrar4)
    {
        $this->impAcobrar4 = $impAcobrar4;

        return $this;
    }

    /**
     * Get impAcobrar4
     *
     * @return integer 
     */
    public function getImpAcobrar4()
    {
        return $this->impAcobrar4;
    }

    /**
     * Set impAcobrar5
     *
     * @param integer $impAcobrar5
     * @return FzRccxcPend
     */
    public function setImpAcobrar5($impAcobrar5)
    {
        $this->impAcobrar5 = $impAcobrar5;

        return $this;
    }

    /**
     * Get impAcobrar5
     *
     * @return integer 
     */
    public function getImpAcobrar5()
    {
        return $this->impAcobrar5;
    }

    /**
     * Set idOrganismo
     *
     * @param string $idOrganismo
     * @return FzRccxcPend
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
     * Set sector
     *
     * @param string $sector
     * @return FzRccxcPend
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
     * Set conduce
     *
     * @param string $conduce
     * @return FzRccxcPend
     */
    public function setConduce($conduce)
    {
        $this->conduce = $conduce;

        return $this;
    }

    /**
     * Get conduce
     *
     * @return string 
     */
    public function getConduce()
    {
        return $this->conduce;
    }

    /**
     * Set contadorFa
     *
     * @param integer $contadorFa
     * @return FzRccxcPend
     */
    public function setContadorFa($contadorFa)
    {
        $this->contadorFa = $contadorFa;

        return $this;
    }

    /**
     * Get contadorFa
     *
     * @return integer 
     */
    public function getContadorFa()
    {
        return $this->contadorFa;
    }

    /**
     * Set faPreassets
     *
     * @param boolean $faPreassets
     * @return FzRccxcPend
     */
    public function setFaPreassets($faPreassets)
    {
        $this->faPreassets = $faPreassets;

        return $this;
    }

    /**
     * Get faPreassets
     *
     * @return boolean 
     */
    public function getFaPreassets()
    {
        return $this->faPreassets;
    }

    /**
     * Set cPago
     *
     * @param string $cPago
     * @return FzRccxcPend
     */
    public function setCPago($cPago)
    {
        $this->cPago = $cPago;

        return $this;
    }

    /**
     * Get cPago
     *
     * @return string 
     */
    public function getCPago()
    {
        return $this->cPago;
    }

    /**
     * Set idClasifFa
     *
     * @param string $idClasifFa
     * @return FzRccxcPend
     */
    public function setIdClasifFa($idClasifFa)
    {
        $this->idClasifFa = $idClasifFa;

        return $this;
    }

    /**
     * Get idClasifFa
     *
     * @return string 
     */
    public function getIdClasifFa()
    {
        return $this->idClasifFa;
    }

    /**
     * Set organismo
     *
     * @param string $organismo
     * @return FzRccxcPend
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
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return FzRccxcPend
     */
    public function setDescAlmacen($descAlmacen)
    {
        $this->descAlmacen = $descAlmacen;

        return $this;
    }

    /**
     * Get descAlmacen
     *
     * @return string 
     */
    public function getDescAlmacen()
    {
        return $this->descAlmacen;
    }

    /**
     * Set descCpago
     *
     * @param string $descCpago
     * @return FzRccxcPend
     */
    public function setDescCpago($descCpago)
    {
        $this->descCpago = $descCpago;

        return $this;
    }

    /**
     * Get descCpago
     *
     * @return string 
     */
    public function getDescCpago()
    {
        return $this->descCpago;
    }

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return FzRccxcPend
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
     * Set idsync
     *
     * @param uniqueidentifier $idsync
     * @return FzRccxcPend
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
