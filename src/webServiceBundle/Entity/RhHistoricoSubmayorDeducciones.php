<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhHistoricoSubmayorDeducciones
 *
 * @ORM\Table(name="RH_Historico_Submayor_Deducciones")
 * @ORM\Entity
 */
class RhHistoricoSubmayorDeducciones
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
     * @ORM\Column(name="Id_Expediente_Deduccion", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExpedienteDeduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Deduccion", type="string", length=5, nullable=false)
     */
    private $idDeduccion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="RestaSaldo", type="boolean", nullable=false)
     */
    private $restasaldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cuota", type="integer", nullable=false)
     */
    private $cuota;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ajuste", type="integer", nullable=false)
     */
    private $ajuste;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoInicial", type="integer", nullable=false)
     */
    private $saldoinicial;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoFinal", type="integer", nullable=false)
     */
    private $saldofinal;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesporSalario", type="integer", nullable=false)
     */
    private $deduccionesporsalario;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesporVacaciones", type="integer", nullable=false)
     */
    private $deduccionesporvacaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesporSubsidios", type="integer", nullable=false)
     */
    private $deduccionesporsubsidios;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesporEstipendio", type="integer", nullable=false)
     */
    private $deduccionesporestipendio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=false)
     */
    private $idDireccion;


}
