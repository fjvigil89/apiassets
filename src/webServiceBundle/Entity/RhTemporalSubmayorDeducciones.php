<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTemporalSubmayorDeducciones
 *
 * @ORM\Table(name="RH_Temporal_Submayor_Deducciones")
 * @ORM\Entity
 */
class RhTemporalSubmayorDeducciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente_Deduccion", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExpedienteDeduccion;

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
     * @ORM\Column(name="Id_Deduccion", type="string", length=5, nullable=false)
     */
    private $idDeduccion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="RestaSaldo", type="boolean", nullable=false)
     */
    private $restasaldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cuota", type="integer", nullable=false)
     */
    private $cuota;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ajuste", type="integer", nullable=false)
     */
    private $ajuste;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoInicial", type="integer", nullable=false)
     */
    private $saldoinicial;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoFinal", type="integer", nullable=false)
     */
    private $saldofinal;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesPorSalario", type="integer", nullable=false)
     */
    private $deduccionesporsalario;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesPorVacaciones", type="integer", nullable=false)
     */
    private $deduccionesporvacaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesPorSubsidios", type="integer", nullable=false)
     */
    private $deduccionesporsubsidios;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesporEstipendio", type="integer", nullable=false)
     */
    private $deduccionesporestipendio;

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
     * Get idExpedienteDeduccion
     *
     * @return string 
     */
    public function getIdExpedienteDeduccion()
    {
        return $this->idExpedienteDeduccion;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return RhTemporalSubmayorDeducciones
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
     * @return RhTemporalSubmayorDeducciones
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
     * @return RhTemporalSubmayorDeducciones
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
     * @return RhTemporalSubmayorDeducciones
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
     * Set idDeduccion
     *
     * @param string $idDeduccion
     * @return RhTemporalSubmayorDeducciones
     */
    public function setIdDeduccion($idDeduccion)
    {
        $this->idDeduccion = $idDeduccion;

        return $this;
    }

    /**
     * Get idDeduccion
     *
     * @return string 
     */
    public function getIdDeduccion()
    {
        return $this->idDeduccion;
    }

    /**
     * Set restasaldo
     *
     * @param boolean $restasaldo
     * @return RhTemporalSubmayorDeducciones
     */
    public function setRestasaldo($restasaldo)
    {
        $this->restasaldo = $restasaldo;

        return $this;
    }

    /**
     * Get restasaldo
     *
     * @return boolean 
     */
    public function getRestasaldo()
    {
        return $this->restasaldo;
    }

    /**
     * Set cuota
     *
     * @param integer $cuota
     * @return RhTemporalSubmayorDeducciones
     */
    public function setCuota($cuota)
    {
        $this->cuota = $cuota;

        return $this;
    }

    /**
     * Get cuota
     *
     * @return integer 
     */
    public function getCuota()
    {
        return $this->cuota;
    }

    /**
     * Set ajuste
     *
     * @param integer $ajuste
     * @return RhTemporalSubmayorDeducciones
     */
    public function setAjuste($ajuste)
    {
        $this->ajuste = $ajuste;

        return $this;
    }

    /**
     * Get ajuste
     *
     * @return integer 
     */
    public function getAjuste()
    {
        return $this->ajuste;
    }

    /**
     * Set saldoinicial
     *
     * @param integer $saldoinicial
     * @return RhTemporalSubmayorDeducciones
     */
    public function setSaldoinicial($saldoinicial)
    {
        $this->saldoinicial = $saldoinicial;

        return $this;
    }

    /**
     * Get saldoinicial
     *
     * @return integer 
     */
    public function getSaldoinicial()
    {
        return $this->saldoinicial;
    }

    /**
     * Set saldofinal
     *
     * @param integer $saldofinal
     * @return RhTemporalSubmayorDeducciones
     */
    public function setSaldofinal($saldofinal)
    {
        $this->saldofinal = $saldofinal;

        return $this;
    }

    /**
     * Get saldofinal
     *
     * @return integer 
     */
    public function getSaldofinal()
    {
        return $this->saldofinal;
    }

    /**
     * Set deduccionesporsalario
     *
     * @param integer $deduccionesporsalario
     * @return RhTemporalSubmayorDeducciones
     */
    public function setDeduccionesporsalario($deduccionesporsalario)
    {
        $this->deduccionesporsalario = $deduccionesporsalario;

        return $this;
    }

    /**
     * Get deduccionesporsalario
     *
     * @return integer 
     */
    public function getDeduccionesporsalario()
    {
        return $this->deduccionesporsalario;
    }

    /**
     * Set deduccionesporvacaciones
     *
     * @param integer $deduccionesporvacaciones
     * @return RhTemporalSubmayorDeducciones
     */
    public function setDeduccionesporvacaciones($deduccionesporvacaciones)
    {
        $this->deduccionesporvacaciones = $deduccionesporvacaciones;

        return $this;
    }

    /**
     * Get deduccionesporvacaciones
     *
     * @return integer 
     */
    public function getDeduccionesporvacaciones()
    {
        return $this->deduccionesporvacaciones;
    }

    /**
     * Set deduccionesporsubsidios
     *
     * @param integer $deduccionesporsubsidios
     * @return RhTemporalSubmayorDeducciones
     */
    public function setDeduccionesporsubsidios($deduccionesporsubsidios)
    {
        $this->deduccionesporsubsidios = $deduccionesporsubsidios;

        return $this;
    }

    /**
     * Get deduccionesporsubsidios
     *
     * @return integer 
     */
    public function getDeduccionesporsubsidios()
    {
        return $this->deduccionesporsubsidios;
    }

    /**
     * Set deduccionesporestipendio
     *
     * @param integer $deduccionesporestipendio
     * @return RhTemporalSubmayorDeducciones
     */
    public function setDeduccionesporestipendio($deduccionesporestipendio)
    {
        $this->deduccionesporestipendio = $deduccionesporestipendio;

        return $this;
    }

    /**
     * Get deduccionesporestipendio
     *
     * @return integer 
     */
    public function getDeduccionesporestipendio()
    {
        return $this->deduccionesporestipendio;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return RhTemporalSubmayorDeducciones
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
     * @return RhTemporalSubmayorDeducciones
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
