<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pvxd07normas
 *
 * @ORM\Table(name="PVXD_07Normas")
 * @ORM\Entity
 */
class Pvxd07normas
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
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hora", type="datetime", nullable=false)
     */
    private $hora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaD", type="datetime", nullable=false)
     */
    private $fechad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HoraD", type="datetime", nullable=false)
     */
    private $horad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Vuelo", type="string", length=12, nullable=false)
     */
    private $idVuelo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Vuelo", type="string", length=50, nullable=false)
     */
    private $descVuelo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ruta", type="string", length=25, nullable=false)
     */
    private $idRuta;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Ruta", type="string", length=50, nullable=false)
     */
    private $descRuta;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Zona", type="string", length=25, nullable=false)
     */
    private $idZona;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Zona", type="string", length=50, nullable=false)
     */
    private $descZona;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Equipo", type="string", length=10, nullable=false)
     */
    private $idEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Equipo", type="string", length=50, nullable=false)
     */
    private $descEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=500, nullable=false)
     */
    private $nota;



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
     * @return Pvxd07normas
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Pvxd07normas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

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
     * Set hora
     *
     * @param \DateTime $hora
     * @return Pvxd07normas
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime 
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set fechad
     *
     * @param \DateTime $fechad
     * @return Pvxd07normas
     */
    public function setFechad($fechad)
    {
        $this->fechad = $fechad;

        return $this;
    }

    /**
     * Get fechad
     *
     * @return \DateTime 
     */
    public function getFechad()
    {
        return $this->fechad;
    }

    /**
     * Set horad
     *
     * @param \DateTime $horad
     * @return Pvxd07normas
     */
    public function setHorad($horad)
    {
        $this->horad = $horad;

        return $this;
    }

    /**
     * Get horad
     *
     * @return \DateTime 
     */
    public function getHorad()
    {
        return $this->horad;
    }

    /**
     * Set idVuelo
     *
     * @param string $idVuelo
     * @return Pvxd07normas
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
     * Set descVuelo
     *
     * @param string $descVuelo
     * @return Pvxd07normas
     */
    public function setDescVuelo($descVuelo)
    {
        $this->descVuelo = $descVuelo;

        return $this;
    }

    /**
     * Get descVuelo
     *
     * @return string 
     */
    public function getDescVuelo()
    {
        return $this->descVuelo;
    }

    /**
     * Set idRuta
     *
     * @param string $idRuta
     * @return Pvxd07normas
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
     * Set descRuta
     *
     * @param string $descRuta
     * @return Pvxd07normas
     */
    public function setDescRuta($descRuta)
    {
        $this->descRuta = $descRuta;

        return $this;
    }

    /**
     * Get descRuta
     *
     * @return string 
     */
    public function getDescRuta()
    {
        return $this->descRuta;
    }

    /**
     * Set idZona
     *
     * @param string $idZona
     * @return Pvxd07normas
     */
    public function setIdZona($idZona)
    {
        $this->idZona = $idZona;

        return $this;
    }

    /**
     * Get idZona
     *
     * @return string 
     */
    public function getIdZona()
    {
        return $this->idZona;
    }

    /**
     * Set descZona
     *
     * @param string $descZona
     * @return Pvxd07normas
     */
    public function setDescZona($descZona)
    {
        $this->descZona = $descZona;

        return $this;
    }

    /**
     * Get descZona
     *
     * @return string 
     */
    public function getDescZona()
    {
        return $this->descZona;
    }

    /**
     * Set idEquipo
     *
     * @param string $idEquipo
     * @return Pvxd07normas
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
     * Set descEquipo
     *
     * @param string $descEquipo
     * @return Pvxd07normas
     */
    public function setDescEquipo($descEquipo)
    {
        $this->descEquipo = $descEquipo;

        return $this;
    }

    /**
     * Get descEquipo
     *
     * @return string 
     */
    public function getDescEquipo()
    {
        return $this->descEquipo;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return Pvxd07normas
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }
}
