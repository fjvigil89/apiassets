<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhEmpleadosOtrosPagos
 *
 * @ORM\Table(name="RH_Empleados_Otros_Pagos")
 * @ORM\Entity
 */
class RhEmpleadosOtrosPagos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Otro_Pago", type="string", length=7, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOtroPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Otro_Pago", type="integer", nullable=false)
     */
    private $valorOtroPago;



    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhEmpleadosOtrosPagos
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
     * @return RhEmpleadosOtrosPagos
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
     * @return RhEmpleadosOtrosPagos
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
}
