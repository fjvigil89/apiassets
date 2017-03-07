<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTemporalVacaciones
 *
 * @ORM\Table(name="RH_Temporal_Vacaciones")
 * @ORM\Entity
 */
class RhTemporalVacaciones
{
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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Solicitados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasSolicitados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Pagados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasPagados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Pagados_Adelantados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasPagadosAdelantados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Acumulado", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAcumulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado", type="integer", nullable=false)
     */
    private $salarioAcumulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Pagado", type="integer", nullable=false)
     */
    private $importePagado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Periodo", type="integer", nullable=false)
     */
    private $importePeriodo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Adelantado", type="integer", nullable=false)
     */
    private $importeAdelantado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Deducciones", type="integer", nullable=false)
     */
    private $deducciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Neto_a_Cobrar", type="integer", nullable=false)
     */
    private $netoACobrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Perfeccionamiento", type="integer", nullable=false)
     */
    private $perfeccionamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Adelantado_Tarjeta", type="smallint", nullable=false)
     */
    private $anoAdelantadoTarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Adelantado_Tarjeta", type="smallint", nullable=false)
     */
    private $mesAdelantadoTarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="AjusteCentavos", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ajustecentavos;



    /**
     * Set ano
     *
     * @param integer $ano
     * @return RhTemporalVacaciones
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
     * @return RhTemporalVacaciones
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
     * @return RhTemporalVacaciones
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
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set diasSolicitados
     *
     * @param string $diasSolicitados
     * @return RhTemporalVacaciones
     */
    public function setDiasSolicitados($diasSolicitados)
    {
        $this->diasSolicitados = $diasSolicitados;

        return $this;
    }

    /**
     * Get diasSolicitados
     *
     * @return string 
     */
    public function getDiasSolicitados()
    {
        return $this->diasSolicitados;
    }

    /**
     * Set diasPagados
     *
     * @param string $diasPagados
     * @return RhTemporalVacaciones
     */
    public function setDiasPagados($diasPagados)
    {
        $this->diasPagados = $diasPagados;

        return $this;
    }

    /**
     * Get diasPagados
     *
     * @return string 
     */
    public function getDiasPagados()
    {
        return $this->diasPagados;
    }

    /**
     * Set diasPagadosAdelantados
     *
     * @param string $diasPagadosAdelantados
     * @return RhTemporalVacaciones
     */
    public function setDiasPagadosAdelantados($diasPagadosAdelantados)
    {
        $this->diasPagadosAdelantados = $diasPagadosAdelantados;

        return $this;
    }

    /**
     * Get diasPagadosAdelantados
     *
     * @return string 
     */
    public function getDiasPagadosAdelantados()
    {
        return $this->diasPagadosAdelantados;
    }

    /**
     * Set diasAcumulado
     *
     * @param string $diasAcumulado
     * @return RhTemporalVacaciones
     */
    public function setDiasAcumulado($diasAcumulado)
    {
        $this->diasAcumulado = $diasAcumulado;

        return $this;
    }

    /**
     * Get diasAcumulado
     *
     * @return string 
     */
    public function getDiasAcumulado()
    {
        return $this->diasAcumulado;
    }

    /**
     * Set salarioAcumulado
     *
     * @param integer $salarioAcumulado
     * @return RhTemporalVacaciones
     */
    public function setSalarioAcumulado($salarioAcumulado)
    {
        $this->salarioAcumulado = $salarioAcumulado;

        return $this;
    }

    /**
     * Get salarioAcumulado
     *
     * @return integer 
     */
    public function getSalarioAcumulado()
    {
        return $this->salarioAcumulado;
    }

    /**
     * Set importePagado
     *
     * @param integer $importePagado
     * @return RhTemporalVacaciones
     */
    public function setImportePagado($importePagado)
    {
        $this->importePagado = $importePagado;

        return $this;
    }

    /**
     * Get importePagado
     *
     * @return integer 
     */
    public function getImportePagado()
    {
        return $this->importePagado;
    }

    /**
     * Set importePeriodo
     *
     * @param integer $importePeriodo
     * @return RhTemporalVacaciones
     */
    public function setImportePeriodo($importePeriodo)
    {
        $this->importePeriodo = $importePeriodo;

        return $this;
    }

    /**
     * Get importePeriodo
     *
     * @return integer 
     */
    public function getImportePeriodo()
    {
        return $this->importePeriodo;
    }

    /**
     * Set importeAdelantado
     *
     * @param integer $importeAdelantado
     * @return RhTemporalVacaciones
     */
    public function setImporteAdelantado($importeAdelantado)
    {
        $this->importeAdelantado = $importeAdelantado;

        return $this;
    }

    /**
     * Get importeAdelantado
     *
     * @return integer 
     */
    public function getImporteAdelantado()
    {
        return $this->importeAdelantado;
    }

    /**
     * Set deducciones
     *
     * @param integer $deducciones
     * @return RhTemporalVacaciones
     */
    public function setDeducciones($deducciones)
    {
        $this->deducciones = $deducciones;

        return $this;
    }

    /**
     * Get deducciones
     *
     * @return integer 
     */
    public function getDeducciones()
    {
        return $this->deducciones;
    }

    /**
     * Set netoACobrar
     *
     * @param integer $netoACobrar
     * @return RhTemporalVacaciones
     */
    public function setNetoACobrar($netoACobrar)
    {
        $this->netoACobrar = $netoACobrar;

        return $this;
    }

    /**
     * Get netoACobrar
     *
     * @return integer 
     */
    public function getNetoACobrar()
    {
        return $this->netoACobrar;
    }

    /**
     * Set perfeccionamiento
     *
     * @param integer $perfeccionamiento
     * @return RhTemporalVacaciones
     */
    public function setPerfeccionamiento($perfeccionamiento)
    {
        $this->perfeccionamiento = $perfeccionamiento;

        return $this;
    }

    /**
     * Get perfeccionamiento
     *
     * @return integer 
     */
    public function getPerfeccionamiento()
    {
        return $this->perfeccionamiento;
    }

    /**
     * Set anoAdelantadoTarjeta
     *
     * @param integer $anoAdelantadoTarjeta
     * @return RhTemporalVacaciones
     */
    public function setAnoAdelantadoTarjeta($anoAdelantadoTarjeta)
    {
        $this->anoAdelantadoTarjeta = $anoAdelantadoTarjeta;

        return $this;
    }

    /**
     * Get anoAdelantadoTarjeta
     *
     * @return integer 
     */
    public function getAnoAdelantadoTarjeta()
    {
        return $this->anoAdelantadoTarjeta;
    }

    /**
     * Set mesAdelantadoTarjeta
     *
     * @param integer $mesAdelantadoTarjeta
     * @return RhTemporalVacaciones
     */
    public function setMesAdelantadoTarjeta($mesAdelantadoTarjeta)
    {
        $this->mesAdelantadoTarjeta = $mesAdelantadoTarjeta;

        return $this;
    }

    /**
     * Get mesAdelantadoTarjeta
     *
     * @return integer 
     */
    public function getMesAdelantadoTarjeta()
    {
        return $this->mesAdelantadoTarjeta;
    }

    /**
     * Set ajustecentavos
     *
     * @param string $ajustecentavos
     * @return RhTemporalVacaciones
     */
    public function setAjustecentavos($ajustecentavos)
    {
        $this->ajustecentavos = $ajustecentavos;

        return $this;
    }

    /**
     * Get ajustecentavos
     *
     * @return string 
     */
    public function getAjustecentavos()
    {
        return $this->ajustecentavos;
    }
}
