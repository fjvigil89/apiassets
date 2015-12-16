<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTemporalOtrosPagos
 *
 * @ORM\Table(name="RH_Temporal_Otros_Pagos")
 * @ORM\Entity
 */
class RhTemporalOtrosPagos
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
     * @var integer
     *
     * @ORM\Column(name="Importe_Otro_Pago", type="integer", nullable=false)
     */
    private $importeOtroPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado", type="integer", nullable=false)
     */
    private $salarioAcumulado;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Deducible", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasDeducible;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Lab", type="smallint", nullable=false)
     */
    private $diasLab;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa", type="integer", nullable=false)
     */
    private $tarifa;



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
     * Set ano
     *
     * @param integer $ano
     * @return RhTemporalOtrosPagos
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
     * @return RhTemporalOtrosPagos
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
     * @return RhTemporalOtrosPagos
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
     * @return RhTemporalOtrosPagos
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
     * Set idOtroPago
     *
     * @param string $idOtroPago
     * @return RhTemporalOtrosPagos
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
     * @return RhTemporalOtrosPagos
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
     * @return RhTemporalOtrosPagos
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
     * @return RhTemporalOtrosPagos
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
     * @return RhTemporalOtrosPagos
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
     * Set importeOtroPago
     *
     * @param integer $importeOtroPago
     * @return RhTemporalOtrosPagos
     */
    public function setImporteOtroPago($importeOtroPago)
    {
        $this->importeOtroPago = $importeOtroPago;

        return $this;
    }

    /**
     * Get importeOtroPago
     *
     * @return integer 
     */
    public function getImporteOtroPago()
    {
        return $this->importeOtroPago;
    }

    /**
     * Set salarioAcumulado
     *
     * @param integer $salarioAcumulado
     * @return RhTemporalOtrosPagos
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
     * Set diasDeducible
     *
     * @param string $diasDeducible
     * @return RhTemporalOtrosPagos
     */
    public function setDiasDeducible($diasDeducible)
    {
        $this->diasDeducible = $diasDeducible;

        return $this;
    }

    /**
     * Get diasDeducible
     *
     * @return string 
     */
    public function getDiasDeducible()
    {
        return $this->diasDeducible;
    }

    /**
     * Set diasLab
     *
     * @param integer $diasLab
     * @return RhTemporalOtrosPagos
     */
    public function setDiasLab($diasLab)
    {
        $this->diasLab = $diasLab;

        return $this;
    }

    /**
     * Get diasLab
     *
     * @return integer 
     */
    public function getDiasLab()
    {
        return $this->diasLab;
    }

    /**
     * Set tarifa
     *
     * @param integer $tarifa
     * @return RhTemporalOtrosPagos
     */
    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;

        return $this;
    }

    /**
     * Get tarifa
     *
     * @return integer 
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }
}
