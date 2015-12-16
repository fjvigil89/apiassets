<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhHistoricoOtrosPagos
 *
 * @ORM\Table(name="RH_Historico_Otros_Pagos")
 * @ORM\Entity
 */
class RhHistoricoOtrosPagos
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
     * @return RhHistoricoOtrosPagos
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
     * @return RhHistoricoOtrosPagos
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
     * @return RhHistoricoOtrosPagos
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
     * @return RhHistoricoOtrosPagos
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
     * @return RhHistoricoOtrosPagos
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
     * @return RhHistoricoOtrosPagos
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
     * Set importeOtroPago
     *
     * @param integer $importeOtroPago
     * @return RhHistoricoOtrosPagos
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
     * @return RhHistoricoOtrosPagos
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
}
