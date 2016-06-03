<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OneGrupos
 *
 * @ORM\Table(name="ONE_Grupos")
 * @ORM\Entity
 */
class OneGrupos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Grupo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=30, nullable=false)
     */
    private $descripcion;



    /**
     * Get idGrupo
     *
     * @return string 
     */
    public function getIdGrupo()
    {
        return $this->idGrupo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return OneGrupos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
