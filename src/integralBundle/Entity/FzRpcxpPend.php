<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRpcxpPend
 *
 * @ORM\Table(name="Fz_RPCxP_Pend")
 * @ORM\Entity
 */
class FzRpcxpPend
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Recepcion", type="integer", nullable=false)
     */
    private $idRecepcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Recepcion", type="smallint", nullable=false)
     */
    private $anoRecepcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Despacho", type="datetime", nullable=false)
     */
    private $fechaDespacho;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FacturaProveedor", type="string", length=40, nullable=false)
     */
    private $idFacturaproveedor;

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
     * @ORM\Column(name="Imp_Pagado", type="integer", nullable=false)
     */
    private $impPagado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Pago_Canc", type="integer", nullable=false)
     */
    private $impPagoCanc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Devuelto", type="integer", nullable=false)
     */
    private $impDevuelto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_PorPagar", type="integer", nullable=false)
     */
    private $impPorpagar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_APagar1", type="integer", nullable=false)
     */
    private $impApagar1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_APagar2", type="integer", nullable=false)
     */
    private $impApagar2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_APagar3", type="integer", nullable=false)
     */
    private $impApagar3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_APagar4", type="integer", nullable=false)
     */
    private $impApagar4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_APagar5", type="integer", nullable=false)
     */
    private $impApagar5;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Organismo", type="string", length=10, nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="Contador_Rx", type="integer", nullable=false)
     */
    private $contadorRx;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rx_PreAssets", type="boolean", nullable=false)
     */
    private $rxPreassets;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Rx", type="string", length=10, nullable=false)
     */
    private $idClasifRx;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Deuda_DIR", type="boolean", nullable=false)
     */
    private $deudaDir;

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
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return FzRpcxpPend
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
     * Set idRecepcion
     *
     * @param integer $idRecepcion
     * @return FzRpcxpPend
     */
    public function setIdRecepcion($idRecepcion)
    {
        $this->idRecepcion = $idRecepcion;

        return $this;
    }

    /**
     * Get idRecepcion
     *
     * @return integer 
     */
    public function getIdRecepcion()
    {
        return $this->idRecepcion;
    }

    /**
     * Set anoRecepcion
     *
     * @param integer $anoRecepcion
     * @return FzRpcxpPend
     */
    public function setAnoRecepcion($anoRecepcion)
    {
        $this->anoRecepcion = $anoRecepcion;

        return $this;
    }

    /**
     * Get anoRecepcion
     *
     * @return integer 
     */
    public function getAnoRecepcion()
    {
        return $this->anoRecepcion;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return FzRpcxpPend
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
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return FzRpcxpPend
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
     * Set fechaDespacho
     *
     * @param \DateTime $fechaDespacho
     * @return FzRpcxpPend
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
     * Set idFacturaproveedor
     *
     * @param string $idFacturaproveedor
     * @return FzRpcxpPend
     */
    public function setIdFacturaproveedor($idFacturaproveedor)
    {
        $this->idFacturaproveedor = $idFacturaproveedor;

        return $this;
    }

    /**
     * Get idFacturaproveedor
     *
     * @return string 
     */
    public function getIdFacturaproveedor()
    {
        return $this->idFacturaproveedor;
    }

    /**
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return FzRpcxpPend
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
     * @return FzRpcxpPend
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
     * Set contrato
     *
     * @param string $contrato
     * @return FzRpcxpPend
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
     * @return FzRpcxpPend
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
     * @return FzRpcxpPend
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
     * Set impPagado
     *
     * @param integer $impPagado
     * @return FzRpcxpPend
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
     * Set impPagoCanc
     *
     * @param integer $impPagoCanc
     * @return FzRpcxpPend
     */
    public function setImpPagoCanc($impPagoCanc)
    {
        $this->impPagoCanc = $impPagoCanc;

        return $this;
    }

    /**
     * Get impPagoCanc
     *
     * @return integer 
     */
    public function getImpPagoCanc()
    {
        return $this->impPagoCanc;
    }

    /**
     * Set impDevuelto
     *
     * @param integer $impDevuelto
     * @return FzRpcxpPend
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
     * Set impPorpagar
     *
     * @param integer $impPorpagar
     * @return FzRpcxpPend
     */
    public function setImpPorpagar($impPorpagar)
    {
        $this->impPorpagar = $impPorpagar;

        return $this;
    }

    /**
     * Get impPorpagar
     *
     * @return integer 
     */
    public function getImpPorpagar()
    {
        return $this->impPorpagar;
    }

    /**
     * Set impApagar1
     *
     * @param integer $impApagar1
     * @return FzRpcxpPend
     */
    public function setImpApagar1($impApagar1)
    {
        $this->impApagar1 = $impApagar1;

        return $this;
    }

    /**
     * Get impApagar1
     *
     * @return integer 
     */
    public function getImpApagar1()
    {
        return $this->impApagar1;
    }

    /**
     * Set impApagar2
     *
     * @param integer $impApagar2
     * @return FzRpcxpPend
     */
    public function setImpApagar2($impApagar2)
    {
        $this->impApagar2 = $impApagar2;

        return $this;
    }

    /**
     * Get impApagar2
     *
     * @return integer 
     */
    public function getImpApagar2()
    {
        return $this->impApagar2;
    }

    /**
     * Set impApagar3
     *
     * @param integer $impApagar3
     * @return FzRpcxpPend
     */
    public function setImpApagar3($impApagar3)
    {
        $this->impApagar3 = $impApagar3;

        return $this;
    }

    /**
     * Get impApagar3
     *
     * @return integer 
     */
    public function getImpApagar3()
    {
        return $this->impApagar3;
    }

    /**
     * Set impApagar4
     *
     * @param integer $impApagar4
     * @return FzRpcxpPend
     */
    public function setImpApagar4($impApagar4)
    {
        $this->impApagar4 = $impApagar4;

        return $this;
    }

    /**
     * Get impApagar4
     *
     * @return integer 
     */
    public function getImpApagar4()
    {
        return $this->impApagar4;
    }

    /**
     * Set impApagar5
     *
     * @param integer $impApagar5
     * @return FzRpcxpPend
     */
    public function setImpApagar5($impApagar5)
    {
        $this->impApagar5 = $impApagar5;

        return $this;
    }

    /**
     * Get impApagar5
     *
     * @return integer 
     */
    public function getImpApagar5()
    {
        return $this->impApagar5;
    }

    /**
     * Set idOrganismo
     *
     * @param string $idOrganismo
     * @return FzRpcxpPend
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
     * @return FzRpcxpPend
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
     * @return FzRpcxpPend
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
     * Set contadorRx
     *
     * @param integer $contadorRx
     * @return FzRpcxpPend
     */
    public function setContadorRx($contadorRx)
    {
        $this->contadorRx = $contadorRx;

        return $this;
    }

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
     * Set rxPreassets
     *
     * @param boolean $rxPreassets
     * @return FzRpcxpPend
     */
    public function setRxPreassets($rxPreassets)
    {
        $this->rxPreassets = $rxPreassets;

        return $this;
    }

    /**
     * Get rxPreassets
     *
     * @return boolean 
     */
    public function getRxPreassets()
    {
        return $this->rxPreassets;
    }

    /**
     * Set idClasifRx
     *
     * @param string $idClasifRx
     * @return FzRpcxpPend
     */
    public function setIdClasifRx($idClasifRx)
    {
        $this->idClasifRx = $idClasifRx;

        return $this;
    }

    /**
     * Get idClasifRx
     *
     * @return string 
     */
    public function getIdClasifRx()
    {
        return $this->idClasifRx;
    }

    /**
     * Set deudaDir
     *
     * @param boolean $deudaDir
     * @return FzRpcxpPend
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
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return FzRpcxpPend
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
     * @return FzRpcxpPend
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
