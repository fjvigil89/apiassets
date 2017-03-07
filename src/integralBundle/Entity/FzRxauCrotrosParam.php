<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRxauCrotrosParam
 *
 * @ORM\Table(name="Fz_RxAU_CROTROS_PARAM")
 * @ORM\Entity
 */
class FzRxauCrotrosParam
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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Fin", type="datetime", nullable=false)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Documento", type="smallint", nullable=false)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     */
    private $cta;

    /**
     * @var string
     *
     * @ORM\Column(name="subCta", type="string", length=20, nullable=false)
     */
    private $subcta;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis", type="string", length=20, nullable=false)
     */
    private $analisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=80, nullable=false)
     */
    private $descCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="C_Pago", type="string", length=10, nullable=false)
     */
    private $cPago;

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
     * @ORM\Column(name="Id_Organismo", type="string", length=80, nullable=false)
     */
    private $idOrganismo;

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
     * @var integer
     *
     * @ORM\Column(name="Imp_Vencido", type="integer", nullable=false)
     */
    private $impVencido;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=80, nullable=false)
     */
    private $idCliente;

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
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return FzRxauCrotrosParam
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return FzRxauCrotrosParam
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
     * Set documento
     *
     * @param integer $documento
     * @return FzRxauCrotrosParam
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return integer 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return FzRxauCrotrosParam
     */
    public function setCta($cta)
    {
        $this->cta = $cta;

        return $this;
    }

    /**
     * Get cta
     *
     * @return string 
     */
    public function getCta()
    {
        return $this->cta;
    }

    /**
     * Set subcta
     *
     * @param string $subcta
     * @return FzRxauCrotrosParam
     */
    public function setSubcta($subcta)
    {
        $this->subcta = $subcta;

        return $this;
    }

    /**
     * Get subcta
     *
     * @return string 
     */
    public function getSubcta()
    {
        return $this->subcta;
    }

    /**
     * Set analisis
     *
     * @param string $analisis
     * @return FzRxauCrotrosParam
     */
    public function setAnalisis($analisis)
    {
        $this->analisis = $analisis;

        return $this;
    }

    /**
     * Get analisis
     *
     * @return string 
     */
    public function getAnalisis()
    {
        return $this->analisis;
    }

    /**
     * Set descCliente
     *
     * @param string $descCliente
     * @return FzRxauCrotrosParam
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
     * Set cPago
     *
     * @param string $cPago
     * @return FzRxauCrotrosParam
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
     * Set impDoc
     *
     * @param integer $impDoc
     * @return FzRxauCrotrosParam
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
     * @return FzRxauCrotrosParam
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
     * Set impPorcobrar
     *
     * @param integer $impPorcobrar
     * @return FzRxauCrotrosParam
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
     * @return FzRxauCrotrosParam
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
     * @return FzRxauCrotrosParam
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
     * @return FzRxauCrotrosParam
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
     * @return FzRxauCrotrosParam
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
     * @return FzRxauCrotrosParam
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
     * @return FzRxauCrotrosParam
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
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return FzRxauCrotrosParam
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
     * @return FzRxauCrotrosParam
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
     * Set impVencido
     *
     * @param integer $impVencido
     * @return FzRxauCrotrosParam
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return FzRxauCrotrosParam
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
     * Set idsync
     *
     * @param uniqueidentifier $idsync
     * @return FzRxauCrotrosParam
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
