<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccesoCr
 *
 * @ORM\Table(name="Acceso_CR")
 * @ORM\Entity
 */
class AccesoCr
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Modulo", type="string", length=2, nullable=false)
     */
    private $idModulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Opcion", type="string", length=5, nullable=false)
     */
    private $idOpcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Opcion", type="string", length=100, nullable=false)
     */
    private $descOpcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Acceso", type="string", length=8, nullable=false)
     */
    private $acceso;



    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idModulo
     *
     * @param string $idModulo
     * @return AccesoCr
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
     * @return AccesoCr
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
     * @return AccesoCr
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

    /**
     * Set acceso
     *
     * @param string $acceso
     * @return AccesoCr
     */
    public function setAcceso($acceso)
    {
        $this->acceso = $acceso;

        return $this;
    }

    /**
     * Get acceso
     *
     * @return string 
     */
    public function getAcceso()
    {
        return $this->acceso;
    }
}
