<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpcionesSistema
 *
 * @ORM\Table(name="Opciones_Sistema")
 * @ORM\Entity
 */
class OpcionesSistema
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Modulo", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idModulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Opcion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOpcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Opcion", type="string", length=100, nullable=false)
     */
    private $descOpcion;



    /**
     * Set idModulo
     *
     * @param string $idModulo
     * @return OpcionesSistema
     */
    public function setIdModulo($idModulo)
    {
        $this->idModulo = $idModulo;

        return $this;
    }

    /**
     * Get idModulo
     *
     * @return string 
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * Set idOpcion
     *
     * @param string $idOpcion
     * @return OpcionesSistema
     */
    public function setIdOpcion($idOpcion)
    {
        $this->idOpcion = $idOpcion;

        return $this;
    }

    /**
     * Get idOpcion
     *
     * @return string 
     */
    public function getIdOpcion()
    {
        return $this->idOpcion;
    }

    /**
     * Set descOpcion
     *
     * @param string $descOpcion
     * @return OpcionesSistema
     */
    public function setDescOpcion($descOpcion)
    {
        $this->descOpcion = $descOpcion;

        return $this;
    }

    /**
     * Get descOpcion
     *
     * @return string 
     */
    public function getDescOpcion()
    {
        return $this->descOpcion;
    }
}
