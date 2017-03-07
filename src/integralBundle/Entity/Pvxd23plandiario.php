<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pvxd23plandiario
 *
 * @ORM\Table(name="PVXD_23PlanDiario")
 * @ORM\Entity
 */
class Pvxd23plandiario
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Vuelo", type="string", length=12, nullable=false)
     */
    private $idVuelo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Equipo", type="string", length=10, nullable=false)
     */
    private $idEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ruta", type="string", length=25, nullable=false)
     */
    private $idRuta;

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
     * @var integer
     *
     * @ORM\Column(name="Prog", type="integer", nullable=false)
     */
    private $prog;

    /**
     * @var integer
     *
     * @ORM\Column(name="Solic", type="integer", nullable=false)
     */
    private $solic;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContadorSoli", type="integer", nullable=false)
     */
    private $contadorsoli;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContadorNorma", type="integer", nullable=false)
     */
    private $contadornorma;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;



    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set idVuelo
     *
     * @param string $idVuelo
     * @return Pvxd23plandiario
     */
    public function setIdVuelo($idVuelo)
    {
        $this->idVuelo = $idVuelo;

        return $this;
    }

    /**
     * Get idVuelo
     *
     * @return string 
     */
    public function getIdVuelo()
    {
        return $this->idVuelo;
    }

    /**
     * Set idEquipo
     *
     * @param string $idEquipo
     * @return Pvxd23plandiario
     */
    public function setIdEquipo($idEquipo)
    {
        $this->idEquipo = $idEquipo;

        return $this;
    }

    /**
     * Get idEquipo
     *
     * @return string 
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }

    /**
     * Set idRuta
     *
     * @param string $idRuta
     * @return Pvxd23plandiario
     */
    public function setIdRuta($idRuta)
    {
        $this->idRuta = $idRuta;

        return $this;
    }

    /**
     * Get idRuta
     *
     * @return string 
     */
    public function getIdRuta()
    {
        return $this->idRuta;
    }

    /**
     * Set horasalida
     *
     * @param \DateTime $horasalida
     * @return Pvxd23plandiario
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
     * @return Pvxd23plandiario
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

    /**
     * Set econida
     *
     * @param integer $econida
     * @return Pvxd23plandiario
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
     * @return Pvxd23plandiario
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
     * @return Pvxd23plandiario
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
     * @return Pvxd23plandiario
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
     * @return Pvxd23plandiario
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
     * @return Pvxd23plandiario
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
     * Set prog
     *
     * @param integer $prog
     * @return Pvxd23plandiario
     */
    public function setProg($prog)
    {
        $this->prog = $prog;

        return $this;
    }

    /**
     * Get prog
     *
     * @return integer 
     */
    public function getProg()
    {
        return $this->prog;
    }

    /**
     * Set solic
     *
     * @param integer $solic
     * @return Pvxd23plandiario
     */
    public function setSolic($solic)
    {
        $this->solic = $solic;

        return $this;
    }

    /**
     * Get solic
     *
     * @return integer 
     */
    public function getSolic()
    {
        return $this->solic;
    }

    /**
     * Set contadorsoli
     *
     * @param integer $contadorsoli
     * @return Pvxd23plandiario
     */
    public function setContadorsoli($contadorsoli)
    {
        $this->contadorsoli = $contadorsoli;

        return $this;
    }

    /**
     * Get contadorsoli
     *
     * @return integer 
     */
    public function getContadorsoli()
    {
        return $this->contadorsoli;
    }

    /**
     * Set contadornorma
     *
     * @param integer $contadornorma
     * @return Pvxd23plandiario
     */
    public function setContadornorma($contadornorma)
    {
        $this->contadornorma = $contadornorma;

        return $this;
    }

    /**
     * Get contadornorma
     *
     * @return integer 
     */
    public function getContadornorma()
    {
        return $this->contadornorma;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Pvxd23plandiario
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
}
