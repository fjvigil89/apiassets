<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametroscom
 *
 * @ORM\Table(name="ParametrosCom")
 * @ORM\Entity
 */
class Parametroscom
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
     * @ORM\Column(name="Path_Envio", type="string", length=200, nullable=false)
     */
    private $pathEnvio;

    /**
     * @var string
     *
     * @ORM\Column(name="Path_Recibo", type="string", length=200, nullable=false)
     */
    private $pathRecibo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="CodNivel", type="string", length=5, nullable=false)
     */
    private $codnivel;



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
     * Set pathEnvio
     *
     * @param string $pathEnvio
     * @return Parametroscom
     */
    public function setPathEnvio($pathEnvio)
    {
        $this->pathEnvio = $pathEnvio;

        return $this;
    }

    /**
     * Get pathEnvio
     *
     * @return string 
     */
    public function getPathEnvio()
    {
        return $this->pathEnvio;
    }

    /**
     * Set pathRecibo
     *
     * @param string $pathRecibo
     * @return Parametroscom
     */
    public function setPathRecibo($pathRecibo)
    {
        $this->pathRecibo = $pathRecibo;

        return $this;
    }

    /**
     * Get pathRecibo
     *
     * @return string 
     */
    public function getPathRecibo()
    {
        return $this->pathRecibo;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return Parametroscom
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set codnivel
     *
     * @param string $codnivel
     * @return Parametroscom
     */
    public function setCodnivel($codnivel)
    {
        $this->codnivel = $codnivel;

        return $this;
    }

    /**
     * Get codnivel
     *
     * @return string 
     */
    public function getCodnivel()
    {
        return $this->codnivel;
    }
}
