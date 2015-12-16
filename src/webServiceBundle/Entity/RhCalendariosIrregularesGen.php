<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCalendariosIrregularesGen
 *
 * @ORM\Table(name="RH_Calendarios_Irregulares_Gen")
 * @ORM\Entity
 */
class RhCalendariosIrregularesGen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Jornada", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idJornada;

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
     * @return RhCalendariosIrregularesGen
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
     * Set ano
     *
     * @param integer $ano
     * @return RhCalendariosIrregularesGen
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return RhCalendariosIrregularesGen
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set idJornada
     *
     * @param string $idJornada
     * @return RhCalendariosIrregularesGen
     */
    public function setIdJornada($idJornada)
    {
        $this->idJornada = $idJornada;

        return $this;
    }

    /**
     * Get idJornada
     *
     * @return string 
     */
    public function getIdJornada()
    {
        return $this->idJornada;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return RhCalendariosIrregularesGen
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
     * @return RhCalendariosIrregularesGen
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
