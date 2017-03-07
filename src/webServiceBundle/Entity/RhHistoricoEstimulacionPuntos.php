<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhHistoricoEstimulacionPuntos
 *
 * @ORM\Table(name="RH_Historico_Estimulacion_Puntos")
 * @ORM\Entity
 */
class RhHistoricoEstimulacionPuntos
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
     * @var integer
     *
     * @ORM\Column(name="CUCPromIndex", type="integer", nullable=false)
     */
    private $cucpromindex;

    /**
     * @var integer
     *
     * @ORM\Column(name="CUPEstimulo", type="integer", nullable=false)
     */
    private $cupestimulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="CUPEstimuloVac", type="integer", nullable=false)
     */
    private $cupestimulovac;



    /**
     * Set ano
     *
     * @param integer $ano
     * @return RhHistoricoEstimulacionPuntos
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
     * @return RhHistoricoEstimulacionPuntos
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
     * @return RhHistoricoEstimulacionPuntos
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
     * @return RhHistoricoEstimulacionPuntos
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
     * Set cucpromindex
     *
     * @param integer $cucpromindex
     * @return RhHistoricoEstimulacionPuntos
     */
    public function setCucpromindex($cucpromindex)
    {
        $this->cucpromindex = $cucpromindex;

        return $this;
    }

    /**
     * Get cucpromindex
     *
     * @return integer 
     */
    public function getCucpromindex()
    {
        return $this->cucpromindex;
    }

    /**
     * Set cupestimulo
     *
     * @param integer $cupestimulo
     * @return RhHistoricoEstimulacionPuntos
     */
    public function setCupestimulo($cupestimulo)
    {
        $this->cupestimulo = $cupestimulo;

        return $this;
    }

    /**
     * Get cupestimulo
     *
     * @return integer 
     */
    public function getCupestimulo()
    {
        return $this->cupestimulo;
    }

    /**
     * Set cupestimulovac
     *
     * @param integer $cupestimulovac
     * @return RhHistoricoEstimulacionPuntos
     */
    public function setCupestimulovac($cupestimulovac)
    {
        $this->cupestimulovac = $cupestimulovac;

        return $this;
    }

    /**
     * Get cupestimulovac
     *
     * @return integer 
     */
    public function getCupestimulovac()
    {
        return $this->cupestimulovac;
    }
}
