<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pvxd24proganexo
 *
 * @ORM\Table(name="PVXD_24ProgAnexo")
 * @ORM\Entity
 */
class Pvxd24proganexo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Anexos", type="smallint", nullable=false)
     */
    private $anexos;

    /**
     * @var integer
     *
     * @ORM\Column(name="EconIda", type="integer", nullable=false)
     */
    private $econida;

    /**
     * @var integer
     *
     * @ORM\Column(name="EconReg", type="integer", nullable=false)
     */
    private $econreg;

    /**
     * @var integer
     *
     * @ORM\Column(name="TropIda", type="integer", nullable=false)
     */
    private $tropida;

    /**
     * @var integer
     *
     * @ORM\Column(name="TropReg", type="integer", nullable=false)
     */
    private $tropreg;

    /**
     * @var integer
     *
     * @ORM\Column(name="TripIda", type="integer", nullable=false)
     */
    private $tripida;

    /**
     * @var integer
     *
     * @ORM\Column(name="TripReg", type="integer", nullable=false)
     */
    private $tripreg;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado", type="boolean", nullable=false)
     */
    private $cerrado;



    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set anexos
     *
     * @param integer $anexos
     * @return Pvxd24proganexo
     */
    public function setAnexos($anexos)
    {
        $this->anexos = $anexos;

        return $this;
    }

    /**
     * Get anexos
     *
     * @return integer 
     */
    public function getAnexos()
    {
        return $this->anexos;
    }

    /**
     * Set econida
     *
     * @param integer $econida
     * @return Pvxd24proganexo
     */
    public function setEconida($econida)
    {
        $this->econida = $econida;

        return $this;
    }

    /**
     * Get econida
     *
     * @return integer 
     */
    public function getEconida()
    {
        return $this->econida;
    }

    /**
     * Set econreg
     *
     * @param integer $econreg
     * @return Pvxd24proganexo
     */
    public function setEconreg($econreg)
    {
        $this->econreg = $econreg;

        return $this;
    }

    /**
     * Get econreg
     *
     * @return integer 
     */
    public function getEconreg()
    {
        return $this->econreg;
    }

    /**
     * Set tropida
     *
     * @param integer $tropida
     * @return Pvxd24proganexo
     */
    public function setTropida($tropida)
    {
        $this->tropida = $tropida;

        return $this;
    }

    /**
     * Get tropida
     *
     * @return integer 
     */
    public function getTropida()
    {
        return $this->tropida;
    }

    /**
     * Set tropreg
     *
     * @param integer $tropreg
     * @return Pvxd24proganexo
     */
    public function setTropreg($tropreg)
    {
        $this->tropreg = $tropreg;

        return $this;
    }

    /**
     * Get tropreg
     *
     * @return integer 
     */
    public function getTropreg()
    {
        return $this->tropreg;
    }

    /**
     * Set tripida
     *
     * @param integer $tripida
     * @return Pvxd24proganexo
     */
    public function setTripida($tripida)
    {
        $this->tripida = $tripida;

        return $this;
    }

    /**
     * Get tripida
     *
     * @return integer 
     */
    public function getTripida()
    {
        return $this->tripida;
    }

    /**
     * Set tripreg
     *
     * @param integer $tripreg
     * @return Pvxd24proganexo
     */
    public function setTripreg($tripreg)
    {
        $this->tripreg = $tripreg;

        return $this;
    }

    /**
     * Get tripreg
     *
     * @return integer 
     */
    public function getTripreg()
    {
        return $this->tripreg;
    }

    /**
     * Set cerrado
     *
     * @param boolean $cerrado
     * @return Pvxd24proganexo
     */
    public function setCerrado($cerrado)
    {
        $this->cerrado = $cerrado;

        return $this;
    }

    /**
     * Get cerrado
     *
     * @return boolean 
     */
    public function getCerrado()
    {
        return $this->cerrado;
    }
}
