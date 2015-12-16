<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTmpContabilizacionReintegros
 *
 * @ORM\Table(name="RH_Tmp_Contabilizacion_Reintegros")
 * @ORM\Entity
 */
class RhTmpContabilizacionReintegros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Reintegro_Salario", type="integer", nullable=false)
     */
    private $importeReintegroSalario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Indebido_Salario", type="integer", nullable=false)
     */
    private $importeIndebidoSalario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Indebido_Salario_909", type="integer", nullable=false)
     */
    private $importeIndebidoSalario909;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_909", type="integer", nullable=false)
     */
    private $importe909;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Reintegro_Subsidio", type="integer", nullable=false)
     */
    private $importeReintegroSubsidio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Indebido_Subsidio", type="integer", nullable=false)
     */
    private $importeIndebidoSubsidio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Reintegro_Vacaciones", type="integer", nullable=false)
     */
    private $importeReintegroVacaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Indebido_Vacaciones", type="integer", nullable=false)
     */
    private $importeIndebidoVacaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Reintegro_Divisa", type="integer", nullable=false)
     */
    private $importeReintegroDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Indebido_Divisa", type="integer", nullable=false)
     */
    private $importeIndebidoDivisa;


}
