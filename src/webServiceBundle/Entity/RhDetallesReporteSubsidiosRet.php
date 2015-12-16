<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteSubsidiosRet
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Subsidios_Ret", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Subsidios_Ret", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteSubsidiosRet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemLink", type="bigint", nullable=false)
     */
    private $itemlink;

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
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     */
    private $tipoPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo", type="smallint", nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente_Deduccion", type="string", length=15, nullable=false)
     */
    private $idExpedienteDeduccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Deduccion", type="integer", nullable=false)
     */
    private $valorDeduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Del_Mark", type="boolean", nullable=false)
     */
    private $delMark;



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
     * Set itemlink
     *
     * @param integer $itemlink
     * @return RhDetallesReporteSubsidiosRet
     */
    public function setItemlink($itemlink)
    {
        $this->itemlink = $itemlink;

        return $this;
    }

    /**
     * Get itemlink
     *
     * @return integer 
     */
    public function getItemlink()
    {
        return $this->itemlink;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return RhDetallesReporteSubsidiosRet
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
     * @return RhDetallesReporteSubsidiosRet
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
     * @return RhDetallesReporteSubsidiosRet
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
     * @return RhDetallesReporteSubsidiosRet
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
     * Set tipo
     *
     * @param integer $tipo
     * @return RhDetallesReporteSubsidiosRet
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idExpedienteDeduccion
     *
     * @param string $idExpedienteDeduccion
     * @return RhDetallesReporteSubsidiosRet
     */
    public function setIdExpedienteDeduccion($idExpedienteDeduccion)
    {
        $this->idExpedienteDeduccion = $idExpedienteDeduccion;

        return $this;
    }

    /**
     * Get idExpedienteDeduccion
     *
     * @return string 
     */
    public function getIdExpedienteDeduccion()
    {
        return $this->idExpedienteDeduccion;
    }

    /**
     * Set valorDeduccion
     *
     * @param integer $valorDeduccion
     * @return RhDetallesReporteSubsidiosRet
     */
    public function setValorDeduccion($valorDeduccion)
    {
        $this->valorDeduccion = $valorDeduccion;

        return $this;
    }

    /**
     * Get valorDeduccion
     *
     * @return integer 
     */
    public function getValorDeduccion()
    {
        return $this->valorDeduccion;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhDetallesReporteSubsidiosRet
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
     * Set estado
     *
     * @param integer $estado
     * @return RhDetallesReporteSubsidiosRet
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set delMark
     *
     * @param boolean $delMark
     * @return RhDetallesReporteSubsidiosRet
     */
    public function setDelMark($delMark)
    {
        $this->delMark = $delMark;

        return $this;
    }

    /**
     * Get delMark
     *
     * @return boolean 
     */
    public function getDelMark()
    {
        return $this->delMark;
    }
}
