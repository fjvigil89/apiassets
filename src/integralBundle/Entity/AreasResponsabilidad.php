<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreasResponsabilidad
 *
 * @ORM\Table(name="Areas_Responsabilidad")
 * @ORM\Entity
 */
class AreasResponsabilidad
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AreaResponsabilidad", type="string", length=10, nullable=false)
     */
    private $idArearesponsabilidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_AreaResponsabilidad", type="string", length=50, nullable=false)
     */
    private $descArearesponsabilidad;



    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return AreasResponsabilidad
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }

    /**
     * Set idArearesponsabilidad
     *
     * @param string $idArearesponsabilidad
     * @return AreasResponsabilidad
     */
    public function setIdArearesponsabilidad($idArearesponsabilidad)
    {
        $this->idArearesponsabilidad = $idArearesponsabilidad;

        return $this;
    }

    /**
     * Get idArearesponsabilidad
     *
     * @return string 
     */
    public function getIdArearesponsabilidad()
    {
        return $this->idArearesponsabilidad;
    }

    /**
     * Set descArearesponsabilidad
     *
     * @param string $descArearesponsabilidad
     * @return AreasResponsabilidad
     */
    public function setDescArearesponsabilidad($descArearesponsabilidad)
    {
        $this->descArearesponsabilidad = $descArearesponsabilidad;

        return $this;
    }

    /**
     * Get descArearesponsabilidad
     *
     * @return string 
     */
    public function getDescArearesponsabilidad()
    {
        return $this->descArearesponsabilidad;
    }
}
