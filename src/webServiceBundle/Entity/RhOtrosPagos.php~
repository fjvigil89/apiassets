<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhOtrosPagos
 *
 * @ORM\Table(name="RH_Otros_Pagos")
 * @ORM\Entity
 */
class RhOtrosPagos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Otro_Pago", type="string", length=7, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOtroPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Otro_Pago", type="string", length=50, nullable=false)
     */
    private $descOtroPago;

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
     * @ORM\Column(name="Grupo", type="smallint", nullable=false)
     */
    private $grupo;


}
