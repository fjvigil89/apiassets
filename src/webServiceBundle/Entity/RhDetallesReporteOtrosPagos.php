<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteOtrosPagos
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Otros_Pagos")
 * @ORM\Entity
 */
class RhDetallesReporteOtrosPagos
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
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=152, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Otro_Pago", type="string", length=7, nullable=false)
     */
    private $idOtroPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Otro_Pago", type="integer", nullable=false)
     */
    private $valorOtroPago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_Ausencias", type="boolean", nullable=false)
     */
    private $afectaAusencias;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Acumula_Vacaciones", type="boolean", nullable=false)
     */
    private $acumulaVacaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Incluir_SNC_225", type="boolean", nullable=false)
     */
    private $incluirSnc225;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rpt_Autom", type="boolean", nullable=false)
     */
    private $rptAutom;



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
     * @return RhDetallesReporteOtrosPagos
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
     * @return RhDetallesReporteOtrosPagos
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
     * @return RhDetallesReporteOtrosPagos
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
     * @return RhDetallesReporteOtrosPagos
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
     * @return RhDetallesReporteOtrosPagos
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
     * @return RhDetallesReporteOtrosPagos
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
     * Set idOtroPago
     *
     * @param string $idOtroPago
     * @return RhDetallesReporteOtrosPagos
     */
    public function setIdOtroPago($idOtroPago)
    {
        $this->idOtroPago = $idOtroPago;

        return $this;
    }

    /**
     * Get idOtroPago
     *
     * @return string 
     */
    public function getIdOtroPago()
    {
        return $this->idOtroPago;
    }

    /**
     * Set valorOtroPago
     *
     * @param integer $valorOtroPago
     * @return RhDetallesReporteOtrosPagos
     */
    public function setValorOtroPago($valorOtroPago)
    {
        $this->valorOtroPago = $valorOtroPago;

        return $this;
    }

    /**
     * Get valorOtroPago
     *
     * @return integer 
     */
    public function getValorOtroPago()
    {
        return $this->valorOtroPago;
    }

    /**
     * Set afectaAusencias
     *
     * @param boolean $afectaAusencias
     * @return RhDetallesReporteOtrosPagos
     */
    public function setAfectaAusencias($afectaAusencias)
    {
        $this->afectaAusencias = $afectaAusencias;

        return $this;
    }

    /**
     * Get afectaAusencias
     *
     * @return boolean 
     */
    public function getAfectaAusencias()
    {
        return $this->afectaAusencias;
    }

    /**
     * Set acumulaVacaciones
     *
     * @param boolean $acumulaVacaciones
     * @return RhDetallesReporteOtrosPagos
     */
    public function setAcumulaVacaciones($acumulaVacaciones)
    {
        $this->acumulaVacaciones = $acumulaVacaciones;

        return $this;
    }

    /**
     * Get acumulaVacaciones
     *
     * @return boolean 
     */
    public function getAcumulaVacaciones()
    {
        return $this->acumulaVacaciones;
    }

    /**
     * Set incluirSnc225
     *
     * @param boolean $incluirSnc225
     * @return RhDetallesReporteOtrosPagos
     */
    public function setIncluirSnc225($incluirSnc225)
    {
        $this->incluirSnc225 = $incluirSnc225;

        return $this;
    }

    /**
     * Get incluirSnc225
     *
     * @return boolean 
     */
    public function getIncluirSnc225()
    {
        return $this->incluirSnc225;
    }

    /**
     * Set rptAutom
     *
     * @param boolean $rptAutom
     * @return RhDetallesReporteOtrosPagos
     */
    public function setRptAutom($rptAutom)
    {
        $this->rptAutom = $rptAutom;

        return $this;
    }

    /**
     * Get rptAutom
     *
     * @return boolean 
     */
    public function getRptAutom()
    {
        return $this->rptAutom;
    }
}
