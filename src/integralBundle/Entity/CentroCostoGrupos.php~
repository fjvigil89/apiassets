<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CentroCostoGrupos
 *
 * @ORM\Table(name="Centro_Costo_Grupos")
 * @ORM\Entity
 */
class CentroCostoGrupos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_GrupoCcosto", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupoccosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_GrupoCcosto", type="string", length=50, nullable=false)
     */
    private $descGrupoccosto;



    /**
     * Get idGrupoccosto
     *
     * @return string 
     */
    public function getIdGrupoccosto()
    {
        return $this->idGrupoccosto;
    }

    /**
     * Set descGrupoccosto
     *
     * @param string $descGrupoccosto
     * @return CentroCostoGrupos
     */
    public function setDescGrupoccosto($descGrupoccosto)
    {
        $this->descGrupoccosto = $descGrupoccosto;

        return $this;
    }

    /**
     * Get descGrupoccosto
     *
     * @return string 
     */
    public function getDescGrupoccosto()
    {
        return $this->descGrupoccosto;
    }
}
