<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTemporalGeneral
 *
 * @ORM\Table(name="RH_Temporal_General")
 * @ORM\Entity
 */
class RhTemporalGeneral
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExpediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Neto_a_Cobrar", type="integer", nullable=false)
     */
    private $netoACobrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado", type="integer", nullable=false)
     */
    private $devengado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Deducciones", type="integer", nullable=false)
     */
    private $deducciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Subsidio", type="integer", nullable=false)
     */
    private $devengadoSubsidio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Vacaciones", type="integer", nullable=false)
     */
    private $devengadoVacaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado_Mes", type="integer", nullable=false)
     */
    private $salarioAcumuladoMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Recargo_Total", type="integer", nullable=false)
     */
    private $recargoTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Perfeccionamiento", type="integer", nullable=false)
     */
    private $perfeccionamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Descuento", type="integer", nullable=false)
     */
    private $descuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Divisa", type="integer", nullable=false)
     */
    private $devengadoDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_Fijo", type="integer", nullable=false)
     */
    private $idoneidadFijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_Movil", type="integer", nullable=false)
     */
    private $idoneidadMovil;

    /**
     * @var integer
     *
     * @ORM\Column(name="Retribucion_Complementaria", type="integer", nullable=false)
     */
    private $retribucionComplementaria;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Salario", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasSalario;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Subsidio", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasSubsidio;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Vacaciones", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasVacaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Acumulado_Mes", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasAcumuladoMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContraValor", type="integer", nullable=false)
     */
    private $contravalor;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMS", type="integer", nullable=false)
     */
    private $importems;

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
     * @ORM\Column(name="ImporteMS_ET", type="integer", nullable=false)
     */
    private $importemsEt;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMS_EE", type="integer", nullable=false)
     */
    private $importemsEe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor", type="integer", nullable=false)
     */
    private $pagoComedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor_Divisa", type="integer", nullable=false)
     */
    private $pagoComedorDivisa;



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
     * Set netoACobrar
     *
     * @param integer $netoACobrar
     * @return RhTemporalGeneral
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
     * Set devengado
     *
     * @param integer $devengado
     * @return RhTemporalGeneral
     */
    public function setDevengado($devengado)
    {
        $this->devengado = $devengado;

        return $this;
    }

    /**
     * Get devengado
     *
     * @return integer 
     */
    public function getDevengado()
    {
        return $this->devengado;
    }

    /**
     * Set deducciones
     *
     * @param integer $deducciones
     * @return RhTemporalGeneral
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
     * Set devengadoSubsidio
     *
     * @param integer $devengadoSubsidio
     * @return RhTemporalGeneral
     */
    public function setDevengadoSubsidio($devengadoSubsidio)
    {
        $this->devengadoSubsidio = $devengadoSubsidio;

        return $this;
    }

    /**
     * Get devengadoSubsidio
     *
     * @return integer 
     */
    public function getDevengadoSubsidio()
    {
        return $this->devengadoSubsidio;
    }

    /**
     * Set devengadoVacaciones
     *
     * @param integer $devengadoVacaciones
     * @return RhTemporalGeneral
     */
    public function setDevengadoVacaciones($devengadoVacaciones)
    {
        $this->devengadoVacaciones = $devengadoVacaciones;

        return $this;
    }

    /**
     * Get devengadoVacaciones
     *
     * @return integer 
     */
    public function getDevengadoVacaciones()
    {
        return $this->devengadoVacaciones;
    }

    /**
     * Set salarioAcumuladoMes
     *
     * @param integer $salarioAcumuladoMes
     * @return RhTemporalGeneral
     */
    public function setSalarioAcumuladoMes($salarioAcumuladoMes)
    {
        $this->salarioAcumuladoMes = $salarioAcumuladoMes;

        return $this;
    }

    /**
     * Get salarioAcumuladoMes
     *
     * @return integer 
     */
    public function getSalarioAcumuladoMes()
    {
        return $this->salarioAcumuladoMes;
    }

    /**
     * Set recargoTotal
     *
     * @param integer $recargoTotal
     * @return RhTemporalGeneral
     */
    public function setRecargoTotal($recargoTotal)
    {
        $this->recargoTotal = $recargoTotal;

        return $this;
    }

    /**
     * Get recargoTotal
     *
     * @return integer 
     */
    public function getRecargoTotal()
    {
        return $this->recargoTotal;
    }

    /**
     * Set perfeccionamiento
     *
     * @param integer $perfeccionamiento
     * @return RhTemporalGeneral
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
     * Set descuento
     *
     * @param integer $descuento
     * @return RhTemporalGeneral
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return integer 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set devengadoDivisa
     *
     * @param integer $devengadoDivisa
     * @return RhTemporalGeneral
     */
    public function setDevengadoDivisa($devengadoDivisa)
    {
        $this->devengadoDivisa = $devengadoDivisa;

        return $this;
    }

    /**
     * Get devengadoDivisa
     *
     * @return integer 
     */
    public function getDevengadoDivisa()
    {
        return $this->devengadoDivisa;
    }

    /**
     * Set idoneidadFijo
     *
     * @param integer $idoneidadFijo
     * @return RhTemporalGeneral
     */
    public function setIdoneidadFijo($idoneidadFijo)
    {
        $this->idoneidadFijo = $idoneidadFijo;

        return $this;
    }

    /**
     * Get idoneidadFijo
     *
     * @return integer 
     */
    public function getIdoneidadFijo()
    {
        return $this->idoneidadFijo;
    }

    /**
     * Set idoneidadMovil
     *
     * @param integer $idoneidadMovil
     * @return RhTemporalGeneral
     */
    public function setIdoneidadMovil($idoneidadMovil)
    {
        $this->idoneidadMovil = $idoneidadMovil;

        return $this;
    }

    /**
     * Get idoneidadMovil
     *
     * @return integer 
     */
    public function getIdoneidadMovil()
    {
        return $this->idoneidadMovil;
    }

    /**
     * Set retribucionComplementaria
     *
     * @param integer $retribucionComplementaria
     * @return RhTemporalGeneral
     */
    public function setRetribucionComplementaria($retribucionComplementaria)
    {
        $this->retribucionComplementaria = $retribucionComplementaria;

        return $this;
    }

    /**
     * Get retribucionComplementaria
     *
     * @return integer 
     */
    public function getRetribucionComplementaria()
    {
        return $this->retribucionComplementaria;
    }

    /**
     * Set diasSalario
     *
     * @param string $diasSalario
     * @return RhTemporalGeneral
     */
    public function setDiasSalario($diasSalario)
    {
        $this->diasSalario = $diasSalario;

        return $this;
    }

    /**
     * Get diasSalario
     *
     * @return string 
     */
    public function getDiasSalario()
    {
        return $this->diasSalario;
    }

    /**
     * Set diasSubsidio
     *
     * @param string $diasSubsidio
     * @return RhTemporalGeneral
     */
    public function setDiasSubsidio($diasSubsidio)
    {
        $this->diasSubsidio = $diasSubsidio;

        return $this;
    }

    /**
     * Get diasSubsidio
     *
     * @return string 
     */
    public function getDiasSubsidio()
    {
        return $this->diasSubsidio;
    }

    /**
     * Set diasVacaciones
     *
     * @param string $diasVacaciones
     * @return RhTemporalGeneral
     */
    public function setDiasVacaciones($diasVacaciones)
    {
        $this->diasVacaciones = $diasVacaciones;

        return $this;
    }

    /**
     * Get diasVacaciones
     *
     * @return string 
     */
    public function getDiasVacaciones()
    {
        return $this->diasVacaciones;
    }

    /**
     * Set diasAcumuladoMes
     *
     * @param string $diasAcumuladoMes
     * @return RhTemporalGeneral
     */
    public function setDiasAcumuladoMes($diasAcumuladoMes)
    {
        $this->diasAcumuladoMes = $diasAcumuladoMes;

        return $this;
    }

    /**
     * Get diasAcumuladoMes
     *
     * @return string 
     */
    public function getDiasAcumuladoMes()
    {
        return $this->diasAcumuladoMes;
    }

    /**
     * Set contravalor
     *
     * @param integer $contravalor
     * @return RhTemporalGeneral
     */
    public function setContravalor($contravalor)
    {
        $this->contravalor = $contravalor;

        return $this;
    }

    /**
     * Get contravalor
     *
     * @return integer 
     */
    public function getContravalor()
    {
        return $this->contravalor;
    }

    /**
     * Set importems
     *
     * @param integer $importems
     * @return RhTemporalGeneral
     */
    public function setImportems($importems)
    {
        $this->importems = $importems;

        return $this;
    }

    /**
     * Get importems
     *
     * @return integer 
     */
    public function getImportems()
    {
        return $this->importems;
    }

    /**
     * Set diasAcumulado
     *
     * @param string $diasAcumulado
     * @return RhTemporalGeneral
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
     * @return RhTemporalGeneral
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
     * Set importemsEt
     *
     * @param integer $importemsEt
     * @return RhTemporalGeneral
     */
    public function setImportemsEt($importemsEt)
    {
        $this->importemsEt = $importemsEt;

        return $this;
    }

    /**
     * Get importemsEt
     *
     * @return integer 
     */
    public function getImportemsEt()
    {
        return $this->importemsEt;
    }

    /**
     * Set importemsEe
     *
     * @param integer $importemsEe
     * @return RhTemporalGeneral
     */
    public function setImportemsEe($importemsEe)
    {
        $this->importemsEe = $importemsEe;

        return $this;
    }

    /**
     * Get importemsEe
     *
     * @return integer 
     */
    public function getImportemsEe()
    {
        return $this->importemsEe;
    }

    /**
     * Set pagoComedor
     *
     * @param integer $pagoComedor
     * @return RhTemporalGeneral
     */
    public function setPagoComedor($pagoComedor)
    {
        $this->pagoComedor = $pagoComedor;

        return $this;
    }

    /**
     * Get pagoComedor
     *
     * @return integer 
     */
    public function getPagoComedor()
    {
        return $this->pagoComedor;
    }

    /**
     * Set pagoComedorDivisa
     *
     * @param integer $pagoComedorDivisa
     * @return RhTemporalGeneral
     */
    public function setPagoComedorDivisa($pagoComedorDivisa)
    {
        $this->pagoComedorDivisa = $pagoComedorDivisa;

        return $this;
    }

    /**
     * Get pagoComedorDivisa
     *
     * @return integer 
     */
    public function getPagoComedorDivisa()
    {
        return $this->pagoComedorDivisa;
    }
}
