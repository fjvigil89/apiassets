<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRzzcanticipos
 *
 * @ORM\Table(name="Fz_RzzCAnticipos")
 * @ORM\Entity
 */
class FzRzzcanticipos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion_CALC", type="string", length=5, nullable=false)
     */
    private $idAgrupacionCalc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_MY", type="datetime", nullable=false)
     */
    private $fechaMy;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

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
     * @var integer
     *
     * @ORM\Column(name="Imp_Doc", type="integer", nullable=false)
     */
    private $impDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Cobrado", type="integer", nullable=false)
     */
    private $impCobrado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Pendiente", type="integer", nullable=false)
     */
    private $impPendiente;

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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsync;



    /**
     * Set idAgrupacionCalc
     *
     * @param string $idAgrupacionCalc
     * @return FzRzzcanticipos
     */
    public function setIdAgrupacionCalc($idAgrupacionCalc)
    {
        $this->idAgrupacionCalc = $idAgrupacionCalc;

        return $this;
    }

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
     * Set fechaMy
     *
     * @param \DateTime $fechaMy
     * @return FzRzzcanticipos
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
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return FzRzzcanticipos
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return FzRzzcanticipos
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
     * @return FzRzzcanticipos
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
     * Set idOrganismo
     *
     * @param string $idOrganismo
     * @return FzRzzcanticipos
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
     * @return FzRzzcanticipos
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
     * @return FzRzzcanticipos
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
     * @return FzRzzcanticipos
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
     * @return FzRzzcanticipos
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
     * Set impCobrado
     *
     * @param integer $impCobrado
     * @return FzRzzcanticipos
     */
    public function setImpCobrado($impCobrado)
    {
        $this->impCobrado = $impCobrado;

        return $this;
    }

    /**
     * Get impCobrado
     *
     * @return integer 
     */
    public function getImpCobrado()
    {
        return $this->impCobrado;
    }

    /**
     * Set impPendiente
     *
     * @param integer $impPendiente
     * @return FzRzzcanticipos
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
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return FzRzzcanticipos
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
     * @return FzRzzcanticipos
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
     * @return FzRzzcanticipos
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
     * @return FzRzzcanticipos
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return FzRzzcanticipos
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
     * @return FzRzzcanticipos
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
     * Set hasta30
     *
     * @param integer $hasta30
     * @return FzRzzcanticipos
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
     * @return FzRzzcanticipos
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
     * Get idsync
     *
     * @return uniqueidentifier 
     */
    public function getIdsync()
    {
        return $this->idsync;
    }
}
