<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acceso
 *
 * @ORM\Table(name="Acceso")
 * @ORM\Entity
 */
class Acceso
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
     *
     */
    private $idModulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Opcion", type="string", length=5, nullable=false)
     *
     *
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
     * @var string
     *
     * @ORM\Column(name="SQLBD_Name", type="string", length=50, nullable=false)
     *
     *
     */
    private $sqlbdName;



    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Acceso
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

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
     * @return Acceso
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
     * @return Acceso
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
     * @return Acceso
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
     * @return Acceso
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

    /**
     * Set sqlbdName
     *
     * @param string $sqlbdName
     * @return Acceso
     */
    public function setSqlbdName($sqlbdName)
    {
        $this->sqlbdName = $sqlbdName;

        return $this;
    }

    /**
     * Get sqlbdName
     *
     * @return string 
     */
    public function getSqlbdName()
    {
        return $this->sqlbdName;
    }
}
