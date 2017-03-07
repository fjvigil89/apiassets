<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhHistoricoSubmayorVacaciones
 *
 * @ORM\Table(name="RH_Historico_Submayor_Vacaciones")
 * @ORM\Entity
 */
class RhHistoricoSubmayorVacaciones
{
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
     * @ORM\Column(name="SaldoInicialDias", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $saldoinicialdias;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoInicialImporte", type="integer", nullable=false)
     */
    private $saldoinicialimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="DevengadoDias", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $devengadodias;

    /**
     * @var integer
     *
     * @ORM\Column(name="DevengadoImporte", type="integer", nullable=false)
     */
    private $devengadoimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="VacacionesDias", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $vacacionesdias;

    /**
     * @var integer
     *
     * @ORM\Column(name="VacacionesImporte", type="integer", nullable=false)
     */
    private $vacacionesimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="AcumVacacionesDias", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $acumvacacionesdias;

    /**
     * @var integer
     *
     * @ORM\Column(name="AcumVacacionesImporte", type="integer", nullable=false)
     */
    private $acumvacacionesimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="AjusteDias", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $ajustedias;

    /**
     * @var integer
     *
     * @ORM\Column(name="AjusteImporte", type="integer", nullable=false)
     */
    private $ajusteimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoDias", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $saldodias;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoImporte", type="integer", nullable=false)
     */
    private $saldoimporte;



    /**
     * Set ano
     *
     * @param integer $ano
     * @return RhHistoricoSubmayorVacaciones
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
     * @return RhHistoricoSubmayorVacaciones
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
     * @return RhHistoricoSubmayorVacaciones
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
     * @return RhHistoricoSubmayorVacaciones
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
     * Set saldoinicialdias
     *
     * @param string $saldoinicialdias
     * @return RhHistoricoSubmayorVacaciones
     */
    public function setSaldoinicialdias($saldoinicialdias)
    {
        $this->saldoinicialdias = $saldoinicialdias;

        return $this;
    }

    /**
     * Get saldoinicialdias
     *
     * @return string 
     */
    public function getSaldoinicialdias()
    {
        return $this->saldoinicialdias;
    }

    /**
     * Set saldoinicialimporte
     *
     * @param integer $saldoinicialimporte
     * @return RhHistoricoSubmayorVacaciones
     */
    public function setSaldoinicialimporte($saldoinicialimporte)
    {
        $this->saldoinicialimporte = $saldoinicialimporte;

        return $this;
    }

    /**
     * Get saldoinicialimporte
     *
     * @return integer 
     */
    public function getSaldoinicialimporte()
    {
        return $this->saldoinicialimporte;
    }

    /**
     * Set devengadodias
     *
     * @param string $devengadodias
     * @return RhHistoricoSubmayorVacaciones
     */
    public function setDevengadodias($devengadodias)
    {
        $this->devengadodias = $devengadodias;

        return $this;
    }

    /**
     * Get devengadodias
     *
     * @return string 
     */
    public function getDevengadodias()
    {
        return $this->devengadodias;
    }

    /**
     * Set devengadoimporte
     *
     * @param integer $devengadoimporte
     * @return RhHistoricoSubmayorVacaciones
     */
    public function setDevengadoimporte($devengadoimporte)
    {
        $this->devengadoimporte = $devengadoimporte;

        return $this;
    }

    /**
     * Get devengadoimporte
     *
     * @return integer 
     */
    public function getDevengadoimporte()
    {
        return $this->devengadoimporte;
    }

    /**
     * Set vacacionesdias
     *
     * @param string $vacacionesdias
     * @return RhHistoricoSubmayorVacaciones
     */
    public function setVacacionesdias($vacacionesdias)
    {
        $this->vacacionesdias = $vacacionesdias;

        return $this;
    }

    /**
     * Get vacacionesdias
     *
     * @return string 
     */
    public function getVacacionesdias()
    {
        return $this->vacacionesdias;
    }

    /**
     * Set vacacionesimporte
     *
     * @param integer $vacacionesimporte
     * @return RhHistoricoSubmayorVacaciones
     */
    public function setVacacionesimporte($vacacionesimporte)
    {
        $this->vacacionesimporte = $vacacionesimporte;

        return $this;
    }

    /**
     * Get vacacionesimporte
     *
     * @return integer 
     */
    public function getVacacionesimporte()
    {
        return $this->vacacionesimporte;
    }

    /**
     * Set acumvacacionesdias
     *
     * @param string $acumvacacionesdias
     * @return RhHistoricoSubmayorVacaciones
     */
    public function setAcumvacacionesdias($acumvacacionesdias)
    {
        $this->acumvacacionesdias = $acumvacacionesdias;

        return $this;
    }

    /**
     * Get acumvacacionesdias
     *
     * @return string 
     */
    public function getAcumvacacionesdias()
    {
        return $this->acumvacacionesdias;
    }

    /**
     * Set acumvacacionesimporte
     *
     * @param integer $acumvacacionesimporte
     * @return RhHistoricoSubmayorVacaciones
     */
    public function setAcumvacacionesimporte($acumvacacionesimporte)
    {
        $this->acumvacacionesimporte = $acumvacacionesimporte;

        return $this;
    }

    /**
     * Get acumvacacionesimporte
     *
     * @return integer 
     */
    public function getAcumvacacionesimporte()
    {
        return $this->acumvacacionesimporte;
    }

    /**
     * Set ajustedias
     *
     * @param string $ajustedias
     * @return RhHistoricoSubmayorVacaciones
     */
    public function setAjustedias($ajustedias)
    {
        $this->ajustedias = $ajustedias;

        return $this;
    }

    /**
     * Get ajustedias
     *
     * @return string 
     */
    public function getAjustedias()
    {
        return $this->ajustedias;
    }

    /**
     * Set ajusteimporte
     *
     * @param integer $ajusteimporte
     * @return RhHistoricoSubmayorVacaciones
     */
    public function setAjusteimporte($ajusteimporte)
    {
        $this->ajusteimporte = $ajusteimporte;

        return $this;
    }

    /**
     * Get ajusteimporte
     *
     * @return integer 
     */
    public function getAjusteimporte()
    {
        return $this->ajusteimporte;
    }

    /**
     * Set saldodias
     *
     * @param string $saldodias
     * @return RhHistoricoSubmayorVacaciones
     */
    public function setSaldodias($saldodias)
    {
        $this->saldodias = $saldodias;

        return $this;
    }

    /**
     * Get saldodias
     *
     * @return string 
     */
    public function getSaldodias()
    {
        return $this->saldodias;
    }

    /**
     * Set saldoimporte
     *
     * @param integer $saldoimporte
     * @return RhHistoricoSubmayorVacaciones
     */
    public function setSaldoimporte($saldoimporte)
    {
        $this->saldoimporte = $saldoimporte;

        return $this;
    }

    /**
     * Get saldoimporte
     *
     * @return integer 
     */
    public function getSaldoimporte()
    {
        return $this->saldoimporte;
    }
}
