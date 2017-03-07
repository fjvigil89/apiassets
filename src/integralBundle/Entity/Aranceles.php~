<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aranceles
 *
 * @ORM\Table(name="Aranceles")
 * @ORM\Entity
 */
class Aranceles
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Partida", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPartida;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Partida", type="string", length=255, nullable=false)
     */
    private $descPartida;

    /**
     * @var integer
     *
     * @ORM\Column(name="TG", type="integer", nullable=false)
     */
    private $tg;

    /**
     * @var integer
     *
     * @ORM\Column(name="TNF", type="integer", nullable=false)
     */
    private $tnf;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=2, nullable=false)
     */
    private $moneda;



    /**
     * Get idPartida
     *
     * @return string 
     */
    public function getIdPartida()
    {
        return $this->idPartida;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Aranceles
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descPartida
     *
     * @param string $descPartida
     * @return Aranceles
     */
    public function setDescPartida($descPartida)
    {
        $this->descPartida = $descPartida;

        return $this;
    }

    /**
     * Get descPartida
     *
     * @return string 
     */
    public function getDescPartida()
    {
        return $this->descPartida;
    }

    /**
     * Set tg
     *
     * @param integer $tg
     * @return Aranceles
     */
    public function setTg($tg)
    {
        $this->tg = $tg;

        return $this;
    }

    /**
     * Get tg
     *
     * @return integer 
     */
    public function getTg()
    {
        return $this->tg;
    }

    /**
     * Set tnf
     *
     * @param integer $tnf
     * @return Aranceles
     */
    public function setTnf($tnf)
    {
        $this->tnf = $tnf;

        return $this;
    }

    /**
     * Get tnf
     *
     * @return integer 
     */
    public function getTnf()
    {
        return $this->tnf;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Aranceles
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }
}
