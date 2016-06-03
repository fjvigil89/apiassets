<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NivelGrupo
 *
 * @ORM\Table(name="Nivel_Grupo")
 * @ORM\Entity
 */
class NivelGrupo
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
     * @ORM\Column(name="Grupo", type="string", length=50, nullable=false)
     */
    private $grupo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabilizar", type="boolean", nullable=false)
     */
    private $contabilizar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel_Padre", type="smallint", nullable=false)
     */
    private $nivelPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Padre", type="string", length=5, nullable=false)
     */
    private $idPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Padre", type="string", length=50, nullable=false)
     */
    private $descPadre;



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
     * Set grupo
     *
     * @param string $grupo
     * @return NivelGrupo
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set contabilizar
     *
     * @param boolean $contabilizar
     * @return NivelGrupo
     */
    public function setContabilizar($contabilizar)
    {
        $this->contabilizar = $contabilizar;

        return $this;
    }

    /**
     * Get contabilizar
     *
     * @return boolean 
     */
    public function getContabilizar()
    {
        return $this->contabilizar;
    }

    /**
     * Set nivelPadre
     *
     * @param integer $nivelPadre
     * @return NivelGrupo
     */
    public function setNivelPadre($nivelPadre)
    {
        $this->nivelPadre = $nivelPadre;

        return $this;
    }

    /**
     * Get nivelPadre
     *
     * @return integer 
     */
    public function getNivelPadre()
    {
        return $this->nivelPadre;
    }

    /**
     * Set idPadre
     *
     * @param string $idPadre
     * @return NivelGrupo
     */
    public function setIdPadre($idPadre)
    {
        $this->idPadre = $idPadre;

        return $this;
    }

    /**
     * Get idPadre
     *
     * @return string 
     */
    public function getIdPadre()
    {
        return $this->idPadre;
    }

    /**
     * Set descPadre
     *
     * @param string $descPadre
     * @return NivelGrupo
     */
    public function setDescPadre($descPadre)
    {
        $this->descPadre = $descPadre;

        return $this;
    }

    /**
     * Get descPadre
     *
     * @return string 
     */
    public function getDescPadre()
    {
        return $this->descPadre;
    }
}
