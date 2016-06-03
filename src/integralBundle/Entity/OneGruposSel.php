<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OneGruposSel
 *
 * @ORM\Table(name="ONE_Grupos_Sel")
 * @ORM\Entity
 */
class OneGruposSel
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
     * @var integer
     *
     * @ORM\Column(name="UsarALL_Agrup", type="smallint", nullable=false)
     */
    private $usarallAgrup;



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
     * Set usarallAgrup
     *
     * @param integer $usarallAgrup
     * @return OneGruposSel
     */
    public function setUsarallAgrup($usarallAgrup)
    {
        $this->usarallAgrup = $usarallAgrup;

        return $this;
    }

    /**
     * Get usarallAgrup
     *
     * @return integer 
     */
    public function getUsarallAgrup()
    {
        return $this->usarallAgrup;
    }
}
