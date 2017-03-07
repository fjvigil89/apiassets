<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRpcxpVenc
 *
 * @ORM\Table(name="Fz_RPCxP_Venc")
 * @ORM\Entity
 */
class FzRpcxpVenc
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
     * @var string
     *
     * @ORM\Column(name="Id_Recepcion", type="string", length=20, nullable=false)
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
     * @ORM\Column(name="Fecha_Proveedor", type="datetime", nullable=false)
     */
    private $fechaProveedor;

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
     * @ORM\Column(name="Imp_Vencido", type="integer", nullable=false)
     */
    private $impVencido;

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
     * @var integer
     *
     * @ORM\Column(name="Contador_Rx", type="integer", nullable=false)
     */
    private $contadorRx;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Rx", type="string", length=10, nullable=false)
     */
    private $idClasifRx;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FacturaProveedor", type="string", length=40, nullable=false)
     */
    private $idFacturaproveedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Recepcion_Int", type="integer", nullable=false)
     */
    private $idRecepcionInt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Deuda_DIR", type="smallint", nullable=false)
     */
    private $deudaDir;

    /**
     * @var string
     *
     * @ORM\Column(name="Sector", type="string", length=30, nullable=false)
     */
    private $sector;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rx_PreAssets", type="boolean", nullable=false)
     */
    private $rxPreassets;

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
     * @return FzRpcxpVenc
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
     * Set idRecepcion
     *
     * @param string $idRecepcion
     * @return FzRpcxpVenc
     */
    public function setIdRecepcion($idRecepcion)
    {
        $this->idRecepcion = $idRecepcion;

        return $this;
    }

    /**
     * Get idRecepcion
     *
     * @return string 
     */
    public function getIdRecepcion()
    {
        return $this->idRecepcion;
    }

    /**
     * Set anoRecepcion
     *
     * @param integer $anoRecepcion
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
     * Set fechaProveedor
     *
     * @param \DateTime $fechaProveedor
     * @return FzRpcxpVenc
     */
    public function setFechaProveedor($fechaProveedor)
    {
        $this->fechaProveedor = $fechaProveedor;

        return $this;
    }

    /**
     * Get fechaProveedor
     *
     * @return \DateTime 
     */
    public function getFechaProveedor()
    {
        return $this->fechaProveedor;
    }

    /**
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
     * Set fechaMy
     *
     * @param \DateTime $fechaMy
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
     * Set impDevuelto
     *
     * @param integer $impDevuelto
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
     * Set impVencido
     *
     * @param integer $impVencido
     * @return FzRpcxpVenc
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
     * Set impAcobrar1
     *
     * @param integer $impAcobrar1
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
     * Set contadorRx
     *
     * @param integer $contadorRx
     * @return FzRpcxpVenc
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
     * Set idClasifRx
     *
     * @param string $idClasifRx
     * @return FzRpcxpVenc
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
     * Set idFacturaproveedor
     *
     * @param string $idFacturaproveedor
     * @return FzRpcxpVenc
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
     * Set idRecepcionInt
     *
     * @param integer $idRecepcionInt
     * @return FzRpcxpVenc
     */
    public function setIdRecepcionInt($idRecepcionInt)
    {
        $this->idRecepcionInt = $idRecepcionInt;

        return $this;
    }

    /**
     * Get idRecepcionInt
     *
     * @return integer 
     */
    public function getIdRecepcionInt()
    {
        return $this->idRecepcionInt;
    }

    /**
     * Set deudaDir
     *
     * @param integer $deudaDir
     * @return FzRpcxpVenc
     */
    public function setDeudaDir($deudaDir)
    {
        $this->deudaDir = $deudaDir;

        return $this;
    }

    /**
     * Get deudaDir
     *
     * @return integer 
     */
    public function getDeudaDir()
    {
        return $this->deudaDir;
    }

    /**
     * Set sector
     *
     * @param string $sector
     * @return FzRpcxpVenc
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
     * Set rxPreassets
     *
     * @param boolean $rxPreassets
     * @return FzRpcxpVenc
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
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return FzRpcxpVenc
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
     * @return FzRpcxpVenc
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
