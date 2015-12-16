<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTmpContabilizacionDeduccSalarios
 *
 * @ORM\Table(name="RH_Tmp_Contabilizacion_Deducc_Salarios")
 * @ORM\Entity
 */
class RhTmpContabilizacionDeduccSalarios
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


}
