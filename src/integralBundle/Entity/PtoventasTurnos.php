<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtoventasTurnos
 *
 * @ORM\Table(name="PtoVentas_Turnos")
 * @ORM\Entity
 */
class PtoventasTurnos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $confirmada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaInicial", type="datetime", nullable=false)
     */
    private $fechainicial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hora_Inicial", type="datetime", nullable=false)
     */
    private $horaInicial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaFinal", type="datetime", nullable=false)
     */
    private $fechafinal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hora_Final", type="datetime", nullable=false)
     */
    private $horaFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;



    /**
     * Set contador
     *
     * @param integer $contador
     * @return PtoventasTurnos
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

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
     * Set confirmada
     *
     * @param integer $confirmada
     * @return PtoventasTurnos
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;

        return $this;
    }

    /**
     * Get confirmada
     *
     * @return integer 
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }

    /**
     * Set fechainicial
     *
     * @param \DateTime $fechainicial
     * @return PtoventasTurnos
     */
    public function setFechainicial($fechainicial)
    {
        $this->fechainicial = $fechainicial;

        return $this;
    }

    /**
     * Get fechainicial
     *
     * @return \DateTime 
     */
    public function getFechainicial()
    {
        return $this->fechainicial;
    }

    /**
     * Set horaInicial
     *
     * @param \DateTime $horaInicial
     * @return PtoventasTurnos
     */
    public function setHoraInicial($horaInicial)
    {
        $this->horaInicial = $horaInicial;

        return $this;
    }

    /**
     * Get horaInicial
     *
     * @return \DateTime 
     */
    public function getHoraInicial()
    {
        return $this->horaInicial;
    }

    /**
     * Set fechafinal
     *
     * @param \DateTime $fechafinal
     * @return PtoventasTurnos
     */
    public function setFechafinal($fechafinal)
    {
        $this->fechafinal = $fechafinal;

        return $this;
    }

    /**
     * Get fechafinal
     *
     * @return \DateTime 
     */
    public function getFechafinal()
    {
        return $this->fechafinal;
    }

    /**
     * Set horaFinal
     *
     * @param \DateTime $horaFinal
     * @return PtoventasTurnos
     */
    public function setHoraFinal($horaFinal)
    {
        $this->horaFinal = $horaFinal;

        return $this;
    }

    /**
     * Get horaFinal
     *
     * @return \DateTime 
     */
    public function getHoraFinal()
    {
        return $this->horaFinal;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return PtoventasTurnos
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
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return PtoventasTurnos
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }
}
