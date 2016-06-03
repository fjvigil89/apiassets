<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EspecificacionesActivofijo
 *
 * @ORM\Table(name="Especificaciones_ActivoFijo")
 * @ORM\Entity
 */
class EspecificacionesActivofijo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Dato", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $descDato;

    /**
     * @var string
     *
     * @ORM\Column(name="Valor_Dato", type="string", length=255, nullable=false)
     */
    private $valorDato;



    /**
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return EspecificacionesActivofijo
     */
    public function setIdActivofijo($idActivofijo)
    {
        $this->idActivofijo = $idActivofijo;

        return $this;
    }

    /**
     * Get idActivofijo
     *
     * @return string 
     */
    public function getIdActivofijo()
    {
        return $this->idActivofijo;
    }

    /**
     * Set descDato
     *
     * @param string $descDato
     * @return EspecificacionesActivofijo
     */
    public function setDescDato($descDato)
    {
        $this->descDato = $descDato;

        return $this;
    }

    /**
     * Get descDato
     *
     * @return string 
     */
    public function getDescDato()
    {
        return $this->descDato;
    }

    /**
     * Set valorDato
     *
     * @param string $valorDato
     * @return EspecificacionesActivofijo
     */
    public function setValorDato($valorDato)
    {
        $this->valorDato = $valorDato;

        return $this;
    }

    /**
     * Get valorDato
     *
     * @return string 
     */
    public function getValorDato()
    {
        return $this->valorDato;
    }
}
