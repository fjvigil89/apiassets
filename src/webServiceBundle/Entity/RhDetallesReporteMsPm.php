<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteMsPm
 *
 * @ORM\Table(name="RH_Detalles_Reporte_MS_PM", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_MS_PM", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteMsPm
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
     * @var string
     *
     * @ORM\Column(name="CodIncidencia1", type="string", length=3, nullable=false)
     */
    private $codincidencia1;

    /**
     * @var string
     *
     * @ORM\Column(name="CodIncidencia2", type="string", length=3, nullable=false)
     */
    private $codincidencia2;

    /**
     * @var string
     *
     * @ORM\Column(name="CodIncidencia3", type="string", length=3, nullable=false)
     */
    private $codincidencia3;

    /**
     * @var string
     *
     * @ORM\Column(name="CodIncidencia4", type="string", length=3, nullable=false)
     */
    private $codincidencia4;

    /**
     * @var string
     *
     * @ORM\Column(name="CodIncidencia5", type="string", length=3, nullable=false)
     */
    private $codincidencia5;

    /**
     * @var string
     *
     * @ORM\Column(name="CodIncidencia6", type="string", length=3, nullable=false)
     */
    private $codincidencia6;

    /**
     * @var string
     *
     * @ORM\Column(name="CodIncidencia7", type="string", length=3, nullable=false)
     */
    private $codincidencia7;

    /**
     * @var string
     *
     * @ORM\Column(name="AusenciasJustificadas", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $ausenciasjustificadas;

    /**
     * @var string
     *
     * @ORM\Column(name="AusenciasInjustificadas", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $ausenciasinjustificadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Impuntualidades", type="smallint", nullable=false)
     */
    private $impuntualidades;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSPagoAntiguedad", type="boolean", nullable=false)
     */
    private $mspagoantiguedad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSPagoCoeficiente", type="boolean", nullable=false)
     */
    private $mspagocoeficiente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSPagoTurno", type="boolean", nullable=false)
     */
    private $mspagoturno;

    /**
     * @var string
     *
     * @ORM\Column(name="AfectacionAntiguedad", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $afectacionantiguedad;

    /**
     * @var string
     *
     * @ORM\Column(name="AfectacionCoeficiente", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $afectacioncoeficiente;

    /**
     * @var string
     *
     * @ORM\Column(name="AfectacionTurnos", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $afectacionturnos;

    /**
     * @var integer
     *
     * @ORM\Column(name="PagoAntiguedad", type="integer", nullable=false)
     */
    private $pagoantiguedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="PagoCoeficiente", type="integer", nullable=false)
     */
    private $pagocoeficiente;

    /**
     * @var integer
     *
     * @ORM\Column(name="PagoTurnos", type="integer", nullable=false)
     */
    private $pagoturnos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=false)
     */
    private $idDireccion;



    /**
     * Set item
     *
     * @param integer $item
     * @return RhDetallesReporteMsPm
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
     * @return RhDetallesReporteMsPm
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
     * @return RhDetallesReporteMsPm
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
     * @return RhDetallesReporteMsPm
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
     * @return RhDetallesReporteMsPm
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
     * @return RhDetallesReporteMsPm
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
     * @return RhDetallesReporteMsPm
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
     * Set codincidencia1
     *
     * @param string $codincidencia1
     * @return RhDetallesReporteMsPm
     */
    public function setCodincidencia1($codincidencia1)
    {
        $this->codincidencia1 = $codincidencia1;

        return $this;
    }

    /**
     * Get codincidencia1
     *
     * @return string 
     */
    public function getCodincidencia1()
    {
        return $this->codincidencia1;
    }

    /**
     * Set codincidencia2
     *
     * @param string $codincidencia2
     * @return RhDetallesReporteMsPm
     */
    public function setCodincidencia2($codincidencia2)
    {
        $this->codincidencia2 = $codincidencia2;

        return $this;
    }

    /**
     * Get codincidencia2
     *
     * @return string 
     */
    public function getCodincidencia2()
    {
        return $this->codincidencia2;
    }

    /**
     * Set codincidencia3
     *
     * @param string $codincidencia3
     * @return RhDetallesReporteMsPm
     */
    public function setCodincidencia3($codincidencia3)
    {
        $this->codincidencia3 = $codincidencia3;

        return $this;
    }

    /**
     * Get codincidencia3
     *
     * @return string 
     */
    public function getCodincidencia3()
    {
        return $this->codincidencia3;
    }

    /**
     * Set codincidencia4
     *
     * @param string $codincidencia4
     * @return RhDetallesReporteMsPm
     */
    public function setCodincidencia4($codincidencia4)
    {
        $this->codincidencia4 = $codincidencia4;

        return $this;
    }

    /**
     * Get codincidencia4
     *
     * @return string 
     */
    public function getCodincidencia4()
    {
        return $this->codincidencia4;
    }

    /**
     * Set codincidencia5
     *
     * @param string $codincidencia5
     * @return RhDetallesReporteMsPm
     */
    public function setCodincidencia5($codincidencia5)
    {
        $this->codincidencia5 = $codincidencia5;

        return $this;
    }

    /**
     * Get codincidencia5
     *
     * @return string 
     */
    public function getCodincidencia5()
    {
        return $this->codincidencia5;
    }

    /**
     * Set codincidencia6
     *
     * @param string $codincidencia6
     * @return RhDetallesReporteMsPm
     */
    public function setCodincidencia6($codincidencia6)
    {
        $this->codincidencia6 = $codincidencia6;

        return $this;
    }

    /**
     * Get codincidencia6
     *
     * @return string 
     */
    public function getCodincidencia6()
    {
        return $this->codincidencia6;
    }

    /**
     * Set codincidencia7
     *
     * @param string $codincidencia7
     * @return RhDetallesReporteMsPm
     */
    public function setCodincidencia7($codincidencia7)
    {
        $this->codincidencia7 = $codincidencia7;

        return $this;
    }

    /**
     * Get codincidencia7
     *
     * @return string 
     */
    public function getCodincidencia7()
    {
        return $this->codincidencia7;
    }

    /**
     * Set ausenciasjustificadas
     *
     * @param string $ausenciasjustificadas
     * @return RhDetallesReporteMsPm
     */
    public function setAusenciasjustificadas($ausenciasjustificadas)
    {
        $this->ausenciasjustificadas = $ausenciasjustificadas;

        return $this;
    }

    /**
     * Get ausenciasjustificadas
     *
     * @return string 
     */
    public function getAusenciasjustificadas()
    {
        return $this->ausenciasjustificadas;
    }

    /**
     * Set ausenciasinjustificadas
     *
     * @param string $ausenciasinjustificadas
     * @return RhDetallesReporteMsPm
     */
    public function setAusenciasinjustificadas($ausenciasinjustificadas)
    {
        $this->ausenciasinjustificadas = $ausenciasinjustificadas;

        return $this;
    }

    /**
     * Get ausenciasinjustificadas
     *
     * @return string 
     */
    public function getAusenciasinjustificadas()
    {
        return $this->ausenciasinjustificadas;
    }

    /**
     * Set impuntualidades
     *
     * @param integer $impuntualidades
     * @return RhDetallesReporteMsPm
     */
    public function setImpuntualidades($impuntualidades)
    {
        $this->impuntualidades = $impuntualidades;

        return $this;
    }

    /**
     * Get impuntualidades
     *
     * @return integer 
     */
    public function getImpuntualidades()
    {
        return $this->impuntualidades;
    }

    /**
     * Set mspagoantiguedad
     *
     * @param boolean $mspagoantiguedad
     * @return RhDetallesReporteMsPm
     */
    public function setMspagoantiguedad($mspagoantiguedad)
    {
        $this->mspagoantiguedad = $mspagoantiguedad;

        return $this;
    }

    /**
     * Get mspagoantiguedad
     *
     * @return boolean 
     */
    public function getMspagoantiguedad()
    {
        return $this->mspagoantiguedad;
    }

    /**
     * Set mspagocoeficiente
     *
     * @param boolean $mspagocoeficiente
     * @return RhDetallesReporteMsPm
     */
    public function setMspagocoeficiente($mspagocoeficiente)
    {
        $this->mspagocoeficiente = $mspagocoeficiente;

        return $this;
    }

    /**
     * Get mspagocoeficiente
     *
     * @return boolean 
     */
    public function getMspagocoeficiente()
    {
        return $this->mspagocoeficiente;
    }

    /**
     * Set mspagoturno
     *
     * @param boolean $mspagoturno
     * @return RhDetallesReporteMsPm
     */
    public function setMspagoturno($mspagoturno)
    {
        $this->mspagoturno = $mspagoturno;

        return $this;
    }

    /**
     * Get mspagoturno
     *
     * @return boolean 
     */
    public function getMspagoturno()
    {
        return $this->mspagoturno;
    }

    /**
     * Set afectacionantiguedad
     *
     * @param string $afectacionantiguedad
     * @return RhDetallesReporteMsPm
     */
    public function setAfectacionantiguedad($afectacionantiguedad)
    {
        $this->afectacionantiguedad = $afectacionantiguedad;

        return $this;
    }

    /**
     * Get afectacionantiguedad
     *
     * @return string 
     */
    public function getAfectacionantiguedad()
    {
        return $this->afectacionantiguedad;
    }

    /**
     * Set afectacioncoeficiente
     *
     * @param string $afectacioncoeficiente
     * @return RhDetallesReporteMsPm
     */
    public function setAfectacioncoeficiente($afectacioncoeficiente)
    {
        $this->afectacioncoeficiente = $afectacioncoeficiente;

        return $this;
    }

    /**
     * Get afectacioncoeficiente
     *
     * @return string 
     */
    public function getAfectacioncoeficiente()
    {
        return $this->afectacioncoeficiente;
    }

    /**
     * Set afectacionturnos
     *
     * @param string $afectacionturnos
     * @return RhDetallesReporteMsPm
     */
    public function setAfectacionturnos($afectacionturnos)
    {
        $this->afectacionturnos = $afectacionturnos;

        return $this;
    }

    /**
     * Get afectacionturnos
     *
     * @return string 
     */
    public function getAfectacionturnos()
    {
        return $this->afectacionturnos;
    }

    /**
     * Set pagoantiguedad
     *
     * @param integer $pagoantiguedad
     * @return RhDetallesReporteMsPm
     */
    public function setPagoantiguedad($pagoantiguedad)
    {
        $this->pagoantiguedad = $pagoantiguedad;

        return $this;
    }

    /**
     * Get pagoantiguedad
     *
     * @return integer 
     */
    public function getPagoantiguedad()
    {
        return $this->pagoantiguedad;
    }

    /**
     * Set pagocoeficiente
     *
     * @param integer $pagocoeficiente
     * @return RhDetallesReporteMsPm
     */
    public function setPagocoeficiente($pagocoeficiente)
    {
        $this->pagocoeficiente = $pagocoeficiente;

        return $this;
    }

    /**
     * Get pagocoeficiente
     *
     * @return integer 
     */
    public function getPagocoeficiente()
    {
        return $this->pagocoeficiente;
    }

    /**
     * Set pagoturnos
     *
     * @param integer $pagoturnos
     * @return RhDetallesReporteMsPm
     */
    public function setPagoturnos($pagoturnos)
    {
        $this->pagoturnos = $pagoturnos;

        return $this;
    }

    /**
     * Get pagoturnos
     *
     * @return integer 
     */
    public function getPagoturnos()
    {
        return $this->pagoturnos;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return RhDetallesReporteMsPm
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set idDireccion
     *
     * @param string $idDireccion
     * @return RhDetallesReporteMsPm
     */
    public function setIdDireccion($idDireccion)
    {
        $this->idDireccion = $idDireccion;

        return $this;
    }

    /**
     * Get idDireccion
     *
     * @return string 
     */
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }
}
