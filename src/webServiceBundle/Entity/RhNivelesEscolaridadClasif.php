<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhNivelesEscolaridadClasif
 *
 * @ORM\Table(name="RH_Niveles_Escolaridad_Clasif")
 * @ORM\Entity
 */
class RhNivelesEscolaridadClasif
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Nivel_Escolaridad_Clasif", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNivelEscolaridadClasif;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Nivel_Escolaridad_Clasif", type="string", length=15, nullable=false)
     */
    private $descNivelEscolaridadClasif;



    /**
     * Get idNivelEscolaridadClasif
     *
     * @return string 
     */
    public function getIdNivelEscolaridadClasif()
    {
        return $this->idNivelEscolaridadClasif;
    }

    /**
     * Set descNivelEscolaridadClasif
     *
     * @param string $descNivelEscolaridadClasif
     * @return RhNivelesEscolaridadClasif
     */
    public function setDescNivelEscolaridadClasif($descNivelEscolaridadClasif)
    {
        $this->descNivelEscolaridadClasif = $descNivelEscolaridadClasif;

        return $this;
    }

    /**
     * Get descNivelEscolaridadClasif
     *
     * @return string 
     */
    public function getDescNivelEscolaridadClasif()
    {
        return $this->descNivelEscolaridadClasif;
    }
}
