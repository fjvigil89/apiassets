<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRzzcefectos
 *
 * @ORM\Table(name="Fz_RzzCEfectos")
 * @ORM\Entity
 */
class FzRzzcefectos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion_CALC", type="string", length=5, nullable=false)
     */
    private $idAgrupacionCalc;

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
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=10, nullable=false)
     */
    private $idConcepto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

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
     * @return FzRzzcefectos
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
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return FzRzzcefectos
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
     * Set importe
     *
     * @param integer $importe
     * @return FzRzzcefectos
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
     * Set impPorpagar
     *
     * @param integer $impPorpagar
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * Set tipoCobro
     *
     * @param integer $tipoCobro
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * @return FzRzzcefectos
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
     * Get idsync
     *
     * @return uniqueidentifier 
     */
    public function getIdsync()
    {
        return $this->idsync;
    }
}
