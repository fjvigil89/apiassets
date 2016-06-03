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
     * Set descOtroPago
     *
     * @param string $descOtroPago
     * @return RhOtrosPagos
     */
    public function setDescOtroPago($descOtroPago)
    {
        $this->descOtroPago = $descOtroPago;

        return $this;
    }

    /**
     * Get descOtroPago
     *
     * @return string 
     */
    public function getDescOtroPago()
    {
        return $this->descOtroPago;
    }

    /**
     * Set valorOtroPago
     *
     * @param integer $valorOtroPago
     * @return RhOtrosPagos
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
     * @return RhOtrosPagos
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
     * @return RhOtrosPagos
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
     * @return RhOtrosPagos
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
     * Set grupo
     *
     * @param integer $grupo
     * @return RhOtrosPagos
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return integer 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
}
