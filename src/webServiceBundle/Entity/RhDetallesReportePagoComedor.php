<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReportePagoComedor
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Pago_Comedor")
 * @ORM\Entity
 */
class RhDetallesReportePagoComedor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=152, nullable=false)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Comedor_CUC_R", type="boolean", nullable=false)
     */
    private $pagoComedorCucR;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Comedor_CUC_W", type="boolean", nullable=false)
     */
    private $pagoComedorCucW;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor_Tarifa_R", type="integer", nullable=false)
     */
    private $pagoComedorTarifaR;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor_Tarifa_W", type="integer", nullable=false)
     */
    private $pagoComedorTarifaW;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Laborables", type="smallint", nullable=false)
     */
    private $diasLaborables;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Ausencias_R", type="smallint", nullable=false)
     */
    private $diasAusenciasR;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Ausencias_W", type="smallint", nullable=false)
     */
    private $diasAusenciasW;



    /**
     * Set item
     *
     * @param integer $item
     * @return RhDetallesReportePagoComedor
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return RhDetallesReportePagoComedor
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
     * Set ano
     *
     * @param integer $ano
     * @return RhDetallesReportePagoComedor
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return RhDetallesReportePagoComedor
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set tipoPago
     *
     * @param integer $tipoPago
     * @return RhDetallesReportePagoComedor
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;

        return $this;
    }

    /**
     * Get tipoPago
     *
     * @return integer 
     */
    public function getTipoPago()
    {
        return $this->tipoPago;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhDetallesReportePagoComedor
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return RhDetallesReportePagoComedor
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set pagoComedorCucR
     *
     * @param boolean $pagoComedorCucR
     * @return RhDetallesReportePagoComedor
     */
    public function setPagoComedorCucR($pagoComedorCucR)
    {
        $this->pagoComedorCucR = $pagoComedorCucR;

        return $this;
    }

    /**
     * Get pagoComedorCucR
     *
     * @return boolean 
     */
    public function getPagoComedorCucR()
    {
        return $this->pagoComedorCucR;
    }

    /**
     * Set pagoComedorCucW
     *
     * @param boolean $pagoComedorCucW
     * @return RhDetallesReportePagoComedor
     */
    public function setPagoComedorCucW($pagoComedorCucW)
    {
        $this->pagoComedorCucW = $pagoComedorCucW;

        return $this;
    }

    /**
     * Get pagoComedorCucW
     *
     * @return boolean 
     */
    public function getPagoComedorCucW()
    {
        return $this->pagoComedorCucW;
    }

    /**
     * Set pagoComedorTarifaR
     *
     * @param integer $pagoComedorTarifaR
     * @return RhDetallesReportePagoComedor
     */
    public function setPagoComedorTarifaR($pagoComedorTarifaR)
    {
        $this->pagoComedorTarifaR = $pagoComedorTarifaR;

        return $this;
    }

    /**
     * Get pagoComedorTarifaR
     *
     * @return integer 
     */
    public function getPagoComedorTarifaR()
    {
        return $this->pagoComedorTarifaR;
    }

    /**
     * Set pagoComedorTarifaW
     *
     * @param integer $pagoComedorTarifaW
     * @return RhDetallesReportePagoComedor
     */
    public function setPagoComedorTarifaW($pagoComedorTarifaW)
    {
        $this->pagoComedorTarifaW = $pagoComedorTarifaW;

        return $this;
    }

    /**
     * Get pagoComedorTarifaW
     *
     * @return integer 
     */
    public function getPagoComedorTarifaW()
    {
        return $this->pagoComedorTarifaW;
    }

    /**
     * Set diasLaborables
     *
     * @param integer $diasLaborables
     * @return RhDetallesReportePagoComedor
     */
    public function setDiasLaborables($diasLaborables)
    {
        $this->diasLaborables = $diasLaborables;

        return $this;
    }

    /**
     * Get diasLaborables
     *
     * @return integer 
     */
    public function getDiasLaborables()
    {
        return $this->diasLaborables;
    }

    /**
     * Set diasAusenciasR
     *
     * @param integer $diasAusenciasR
     * @return RhDetallesReportePagoComedor
     */
    public function setDiasAusenciasR($diasAusenciasR)
    {
        $this->diasAusenciasR = $diasAusenciasR;

        return $this;
    }

    /**
     * Get diasAusenciasR
     *
     * @return integer 
     */
    public function getDiasAusenciasR()
    {
        return $this->diasAusenciasR;
    }

    /**
     * Set diasAusenciasW
     *
     * @param integer $diasAusenciasW
     * @return RhDetallesReportePagoComedor
     */
    public function setDiasAusenciasW($diasAusenciasW)
    {
        $this->diasAusenciasW = $diasAusenciasW;

        return $this;
    }

    /**
     * Get diasAusenciasW
     *
     * @return integer 
     */
    public function getDiasAusenciasW()
    {
        return $this->diasAusenciasW;
    }
}
