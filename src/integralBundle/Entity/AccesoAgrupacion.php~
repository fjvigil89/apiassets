<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccesoAgrupacion
 *
 * @ORM\Table(name="Acceso_Agrupacion")
 * @ORM\Entity
 */
class AccesoAgrupacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idUser;

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
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAgrupacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Agrupacion", type="string", length=50, nullable=false)
     */
    private $agrupacion;



    /**
     * Set idUser
     *
     * @param string $idUser
     * @return AccesoAgrupacion
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
     * @return AccesoAgrupacion
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
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return AccesoAgrupacion
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

    /**
     * Set agrupacion
     *
     * @param string $agrupacion
     * @return AccesoAgrupacion
     */
    public function setAgrupacion($agrupacion)
    {
        $this->agrupacion = $agrupacion;

        return $this;
    }

    /**
     * Get agrupacion
     *
     * @return string 
     */
    public function getAgrupacion()
    {
        return $this->agrupacion;
    }
}
