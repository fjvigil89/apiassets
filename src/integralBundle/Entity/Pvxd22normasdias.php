<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pvxd22normasdias
 *
 * @ORM\Table(name="PVXD_22NormasDias")
 * @ORM\Entity
 */
class Pvxd22normasdias
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
     * @ORM\Column(name="Dia", type="smallint", nullable=false)
     */
    private $dia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HoraSalida", type="datetime", nullable=false)
     */
    private $horasalida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HoraArribo", type="datetime", nullable=false)
     */
    private $horaarribo;



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
     * Set dia
     *
     * @param integer $dia
     * @return Pvxd22normasdias
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return integer 
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set horasalida
     *
     * @param \DateTime $horasalida
     * @return Pvxd22normasdias
     */
    public function setHorasalida($horasalida)
    {
        $this->horasalida = $horasalida;

        return $this;
    }

    /**
     * Get horasalida
     *
     * @return \DateTime 
     */
    public function getHorasalida()
    {
        return $this->horasalida;
    }

    /**
     * Set horaarribo
     *
     * @param \DateTime $horaarribo
     * @return Pvxd22normasdias
     */
    public function setHoraarribo($horaarribo)
    {
        $this->horaarribo = $horaarribo;

        return $this;
    }

    /**
     * Get horaarribo
     *
     * @return \DateTime 
     */
    public function getHoraarribo()
    {
        return $this->horaarribo;
    }
}
