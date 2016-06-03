<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRpcxpPag
 *
 * @ORM\Table(name="Fz_RPCxP_Pag")
 * @ORM\Entity
 */
class FzRpcxpPag
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
     * @var integer
     *
     * @ORM\Column(name="Imp_Recep_Neto", type="integer", nullable=false)
     */
    private $impRecepNeto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Pagado", type="integer", nullable=false)
     */
    private $impPagado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

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
     * @ORM\Column(name="Desc_Cobro", type="integer", nullable=false)
     */
    private $descCobro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Rec_Cobro", type="integer", nullable=false)
     */
    private $recCobro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

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
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return FzRpcxpPag
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
     * @return FzRpcxpPag
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
     * Set impRecepNeto
     *
     * @param integer $impRecepNeto
     * @return FzRpcxpPag
     */
    public function setImpRecepNeto($impRecepNeto)
    {
        $this->impRecepNeto = $impRecepNeto;

        return $this;
    }

    /**
     * Get impRecepNeto
     *
     * @return integer 
     */
    public function getImpRecepNeto()
    {
        return $this->impRecepNeto;
    }

    /**
     * Set impPagado
     *
     * @param integer $impPagado
     * @return FzRpcxpPag
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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return FzRpcxpPag
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
     * Set idOrganismo
     *
     * @param string $idOrganismo
     * @return FzRpcxpPag
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
     * @return FzRpcxpPag
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
     * @return FzRpcxpPag
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
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return FzRpcxpPag
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
     * @return FzRpcxpPag
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
     * Set descCobro
     *
     * @param integer $descCobro
     * @return FzRpcxpPag
     */
    public function setDescCobro($descCobro)
    {
        $this->descCobro = $descCobro;

        return $this;
    }

    /**
     * Get descCobro
     *
     * @return integer 
     */
    public function getDescCobro()
    {
        return $this->descCobro;
    }

    /**
     * Set recCobro
     *
     * @param integer $recCobro
     * @return FzRpcxpPag
     */
    public function setRecCobro($recCobro)
    {
        $this->recCobro = $recCobro;

        return $this;
    }

    /**
     * Get recCobro
     *
     * @return integer 
     */
    public function getRecCobro()
    {
        return $this->recCobro;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return FzRpcxpPag
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
     * Set idsync
     *
     * @param uniqueidentifier $idsync
     * @return FzRpcxpPag
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
