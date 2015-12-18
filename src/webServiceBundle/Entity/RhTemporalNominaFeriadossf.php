<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTemporalNominaFeriadossf
 *
 * @ORM\Table(name="RH_Temporal_Nomina_FeriadosSF")
 * @ORM\Entity
 */
class RhTemporalNominaFeriadossf
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
     * @var integer
     *
     * @ORM\Column(name="Salario_Basico", type="integer", nullable=false)
     */
    private $salarioBasico;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_por_Cargo", type="integer", nullable=false)
     */
    private $salarioPorCargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros", type="integer", nullable=false)
     */
    private $otros;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plus", type="integer", nullable=false)
     */
    private $plus;

    /**
     * @var integer
     *
     * @ORM\Column(name="Antiguedad", type="integer", nullable=false)
     */
    private $antiguedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Albergamiento", type="integer", nullable=false)
     */
    private $albergamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="HorarioIrregular", type="integer", nullable=false)
     */
    private $horarioirregular;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otras_CLA", type="integer", nullable=false)
     */
    private $otrasCla;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulacion", type="integer", nullable=false)
     */
    private $estimulacion;



    /**
     * Set ano
     *
     * @param integer $ano
     * @return RhTemporalNominaFeriadossf
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
     * @return RhTemporalNominaFeriadossf
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
     * @return RhTemporalNominaFeriadossf
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
     * Set salarioBasico
     *
     * @param integer $salarioBasico
     * @return RhTemporalNominaFeriadossf
     */
    public function setSalarioBasico($salarioBasico)
    {
        $this->salarioBasico = $salarioBasico;

        return $this;
    }

    /**
     * Get salarioBasico
     *
     * @return integer 
     */
    public function getSalarioBasico()
    {
        return $this->salarioBasico;
    }

    /**
     * Set salarioPorCargo
     *
     * @param integer $salarioPorCargo
     * @return RhTemporalNominaFeriadossf
     */
    public function setSalarioPorCargo($salarioPorCargo)
    {
        $this->salarioPorCargo = $salarioPorCargo;

        return $this;
    }

    /**
     * Get salarioPorCargo
     *
     * @return integer 
     */
    public function getSalarioPorCargo()
    {
        return $this->salarioPorCargo;
    }

    /**
     * Set otros
     *
     * @param integer $otros
     * @return RhTemporalNominaFeriadossf
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return integer 
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set plus
     *
     * @param integer $plus
     * @return RhTemporalNominaFeriadossf
     */
    public function setPlus($plus)
    {
        $this->plus = $plus;

        return $this;
    }

    /**
     * Get plus
     *
     * @return integer 
     */
    public function getPlus()
    {
        return $this->plus;
    }

    /**
     * Set antiguedad
     *
     * @param integer $antiguedad
     * @return RhTemporalNominaFeriadossf
     */
    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }

    /**
     * Get antiguedad
     *
     * @return integer 
     */
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    /**
     * Set albergamiento
     *
     * @param integer $albergamiento
     * @return RhTemporalNominaFeriadossf
     */
    public function setAlbergamiento($albergamiento)
    {
        $this->albergamiento = $albergamiento;

        return $this;
    }

    /**
     * Get albergamiento
     *
     * @return integer 
     */
    public function getAlbergamiento()
    {
        return $this->albergamiento;
    }

    /**
     * Set horarioirregular
     *
     * @param integer $horarioirregular
     * @return RhTemporalNominaFeriadossf
     */
    public function setHorarioirregular($horarioirregular)
    {
        $this->horarioirregular = $horarioirregular;

        return $this;
    }

    /**
     * Get horarioirregular
     *
     * @return integer 
     */
    public function getHorarioirregular()
    {
        return $this->horarioirregular;
    }

    /**
     * Set otrasCla
     *
     * @param integer $otrasCla
     * @return RhTemporalNominaFeriadossf
     */
    public function setOtrasCla($otrasCla)
    {
        $this->otrasCla = $otrasCla;

        return $this;
    }

    /**
     * Get otrasCla
     *
     * @return integer 
     */
    public function getOtrasCla()
    {
        return $this->otrasCla;
    }

    /**
     * Set estimulacion
     *
     * @param integer $estimulacion
     * @return RhTemporalNominaFeriadossf
     */
    public function setEstimulacion($estimulacion)
    {
        $this->estimulacion = $estimulacion;

        return $this;
    }

    /**
     * Get estimulacion
     *
     * @return integer 
     */
    public function getEstimulacion()
    {
        return $this->estimulacion;
    }
}
