<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTmpContabilizacionDeduccVacation
 *
 * @ORM\Table(name="RH_Tmp_Contabilizacion_Deducc_Vacation")
 * @ORM\Entity
 */
class RhTmpContabilizacionDeduccVacation
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
     * @var string
     *
     * @ORM\Column(name="Id_Expediente_Deduccion", type="string", length=15, nullable=false)
     */
    private $idExpedienteDeduccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Deduccion", type="integer", nullable=false)
     */
    private $valorDeduccion;



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
     * Set idExpedienteDeduccion
     *
     * @param string $idExpedienteDeduccion
     * @return RhTmpContabilizacionDeduccVacation
     */
    public function setIdExpedienteDeduccion($idExpedienteDeduccion)
    {
        $this->idExpedienteDeduccion = $idExpedienteDeduccion;

        return $this;
    }

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
     * Set valorDeduccion
     *
     * @param integer $valorDeduccion
     * @return RhTmpContabilizacionDeduccVacation
     */
    public function setValorDeduccion($valorDeduccion)
    {
        $this->valorDeduccion = $valorDeduccion;

        return $this;
    }

    /**
     * Get valorDeduccion
     *
     * @return integer 
     */
    public function getValorDeduccion()
    {
        return $this->valorDeduccion;
    }
}
