<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRzzccxcVenc
 *
 * @ORM\Table(name="Fz_RzzCCxC_Venc")
 * @ORM\Entity
 */
class FzRzzccxcVenc
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_MY", type="datetime", nullable=false)
     */
    private $fechaMy;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Factura", type="string", length=20, nullable=false)
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
     * @ORM\Column(name="Imp_Vencido", type="integer", nullable=false)
     */
    private $impVencido;

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
     * @ORM\Column(name="Conduce", type="string", length=22, nullable=false)
     */
    private $conduce;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Deuda_DIR", type="boolean", nullable=false)
     */
    private $deudaDir;

    /**
     * @var string
     *
     * @ORM\Column(name="C_Pago", type="string", length=20, nullable=false)
     */
    private $cPago;

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
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Credito", type="smallint", nullable=false)
     */
    private $credito;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsync;

    /**
     * @var integer
     *
     * @ORM\Column(name="Factura_Int", type="integer", nullable=false)
     */
    private $facturaInt;



    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return FzRzzccxcVenc
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
     * Set fechaMy
     *
     * @param \DateTime $fechaMy
     * @return FzRzzccxcVenc
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
     * Set idFactura
     *
     * @param string $idFactura
     * @return FzRzzccxcVenc
     */
    public function setIdFactura($idFactura)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * Get idFactura
     *
     * @return string 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return FzRzzccxcVenc
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
     * @return FzRzzccxcVenc
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
     * @return FzRzzccxcVenc
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return FzRzzccxcVenc
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
     * @return FzRzzccxcVenc
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
     * Set impFactura
     *
     * @param integer $impFactura
     * @return FzRzzccxcVenc
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
     * @return FzRzzccxcVenc
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
     * Set impVencido
     *
     * @param integer $impVencido
     * @return FzRzzccxcVenc
     */
    public function setImpVencido($impVencido)
    {
        $this->impVencido = $impVencido;

        return $this;
    }

    /**
     * Get impVencido
     *
     * @return integer 
     */
    public function getImpVencido()
    {
        return $this->impVencido;
    }

    /**
     * Set impPorcobrar
     *
     * @param integer $impPorcobrar
     * @return FzRzzccxcVenc
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
     * @return FzRzzccxcVenc
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
     * @return FzRzzccxcVenc
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
     * @return FzRzzccxcVenc
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
     * @return FzRzzccxcVenc
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
     * @return FzRzzccxcVenc
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
     * @return FzRzzccxcVenc
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
     * Set conduce
     *
     * @param string $conduce
     * @return FzRzzccxcVenc
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
     * Set deudaDir
     *
     * @param boolean $deudaDir
     * @return FzRzzccxcVenc
     */
    public function setDeudaDir($deudaDir)
    {
        $this->deudaDir = $deudaDir;

        return $this;
    }

    /**
     * Get deudaDir
     *
     * @return boolean 
     */
    public function getDeudaDir()
    {
        return $this->deudaDir;
    }

    /**
     * Set cPago
     *
     * @param string $cPago
     * @return FzRzzccxcVenc
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
     * Set descCpago
     *
     * @param string $descCpago
     * @return FzRzzccxcVenc
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
     * @return FzRzzccxcVenc
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
     * Set organismo
     *
     * @param string $organismo
     * @return FzRzzccxcVenc
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
     * @return FzRzzccxcVenc
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
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return FzRzzccxcVenc
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
     * Set credito
     *
     * @param integer $credito
     * @return FzRzzccxcVenc
     */
    public function setCredito($credito)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito
     *
     * @return integer 
     */
    public function getCredito()
    {
        return $this->credito;
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

    /**
     * Set facturaInt
     *
     * @param integer $facturaInt
     * @return FzRzzccxcVenc
     */
    public function setFacturaInt($facturaInt)
    {
        $this->facturaInt = $facturaInt;

        return $this;
    }

    /**
     * Get facturaInt
     *
     * @return integer 
     */
    public function getFacturaInt()
    {
        return $this->facturaInt;
    }
}
