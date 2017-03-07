<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRzzccxcCobr
 *
 * @ORM\Table(name="Fz_RzzCCxC_Cobr")
 * @ORM\Entity
 */
class FzRzzccxcCobr
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
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

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
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsync;



    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return FzRzzccxcCobr
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
     * @return FzRzzccxcCobr
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
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return FzRzzccxcCobr
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return FzRzzccxcCobr
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
     * @return FzRzzccxcCobr
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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return FzRzzccxcCobr
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
     * @return FzRzzccxcCobr
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
     * @return FzRzzccxcCobr
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
     * @return FzRzzccxcCobr
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
     * Set cPago
     *
     * @param string $cPago
     * @return FzRzzccxcCobr
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
     * @return FzRzzccxcCobr
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
     * Set impFactura
     *
     * @param integer $impFactura
     * @return FzRzzccxcCobr
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
     * @return FzRzzccxcCobr
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
     * Get idsync
     *
     * @return uniqueidentifier 
     */
    public function getIdsync()
    {
        return $this->idsync;
    }
}
