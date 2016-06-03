<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OneGruposDet
 *
 * @ORM\Table(name="ONE_Grupos_Det")
 * @ORM\Entity
 */
class OneGruposDet
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Grupo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAgrupacion;



    /**
     * Set idGrupo
     *
     * @param string $idGrupo
     * @return OneGruposDet
     */
    public function setIdGrupo($idGrupo)
    {
        $this->idGrupo = $idGrupo;

        return $this;
    }

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
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return OneGruposDet
     */
    public function setIdAgrupacion($idAgrupacion)
    {
        $this->idAgrupacion = $idAgrupacion;

        return $this;
    }

    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }
}
