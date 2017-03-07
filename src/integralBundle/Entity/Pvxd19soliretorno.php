<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pvxd19soliretorno
 *
 * @ORM\Table(name="PVXD_19SoliRetorno", indexes={@ORM\Index(name="IX_PVXD_19SoliRetorno", columns={"Contador"})})
 * @ORM\Entity
 */
class Pvxd19soliretorno
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
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $confirmada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_SoliMerca", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSolimerca;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_SoliMerca", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoSolimerca;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_SoliMerca", type="datetime", nullable=false)
     */
    private $fechaSolimerca;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMB", type="integer", nullable=false)
     */
    private $importetotalmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMC", type="integer", nullable=false)
     */
    private $importetotalmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=500, nullable=false)
     */
    private $nota;

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
     * @var integer
     *
     * @ORM\Column(name="ContadorProg", type="integer", nullable=false)
     */
    private $contadorprog;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Vuelo", type="string", length=12, nullable=false)
     */
    private $idVuelo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ruta", type="string", length=25, nullable=false)
     */
    private $idRuta;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Zona", type="string", length=25, nullable=false)
     */
    private $idZona;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Equipo", type="string", length=10, nullable=false)
     */
    private $idEquipo;



    /**
     * Set contador
     *
     * @param integer $contador
     * @return Pvxd19soliretorno
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
     * @return Pvxd19soliretorno
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
     * Set idSolimerca
     *
     * @param integer $idSolimerca
     * @return Pvxd19soliretorno
     */
    public function setIdSolimerca($idSolimerca)
    {
        $this->idSolimerca = $idSolimerca;

        return $this;
    }

    /**
     * Get idSolimerca
     *
     * @return integer 
     */
    public function getIdSolimerca()
    {
        return $this->idSolimerca;
    }

    /**
     * Set anoSolimerca
     *
     * @param integer $anoSolimerca
     * @return Pvxd19soliretorno
     */
    public function setAnoSolimerca($anoSolimerca)
    {
        $this->anoSolimerca = $anoSolimerca;

        return $this;
    }

    /**
     * Get anoSolimerca
     *
     * @return integer 
     */
    public function getAnoSolimerca()
    {
        return $this->anoSolimerca;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return Pvxd19soliretorno
     */
    public function setFechaConfirmacion($fechaConfirmacion)
    {
        $this->fechaConfirmacion = $fechaConfirmacion;

        return $this;
    }

    /**
     * Get fechaConfirmacion
     *
     * @return \DateTime 
     */
    public function getFechaConfirmacion()
    {
        return $this->fechaConfirmacion;
    }

    /**
     * Set fechaSolimerca
     *
     * @param \DateTime $fechaSolimerca
     * @return Pvxd19soliretorno
     */
    public function setFechaSolimerca($fechaSolimerca)
    {
        $this->fechaSolimerca = $fechaSolimerca;

        return $this;
    }

    /**
     * Get fechaSolimerca
     *
     * @return \DateTime 
     */
    public function getFechaSolimerca()
    {
        return $this->fechaSolimerca;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return Pvxd19soliretorno
     */
    public function setImportetotalmb($importetotalmb)
    {
        $this->importetotalmb = $importetotalmb;

        return $this;
    }

    /**
     * Get importetotalmb
     *
     * @return integer 
     */
    public function getImportetotalmb()
    {
        return $this->importetotalmb;
    }

    /**
     * Set importetotalmc
     *
     * @param integer $importetotalmc
     * @return Pvxd19soliretorno
     */
    public function setImportetotalmc($importetotalmc)
    {
        $this->importetotalmc = $importetotalmc;

        return $this;
    }

    /**
     * Get importetotalmc
     *
     * @return integer 
     */
    public function getImportetotalmc()
    {
        return $this->importetotalmc;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return Pvxd19soliretorno
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

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Pvxd19soliretorno
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
     * @return Pvxd19soliretorno
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

    /**
     * Set contadorprog
     *
     * @param integer $contadorprog
     * @return Pvxd19soliretorno
     */
    public function setContadorprog($contadorprog)
    {
        $this->contadorprog = $contadorprog;

        return $this;
    }

    /**
     * Get contadorprog
     *
     * @return integer 
     */
    public function getContadorprog()
    {
        return $this->contadorprog;
    }

    /**
     * Set idVuelo
     *
     * @param string $idVuelo
     * @return Pvxd19soliretorno
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
     * Set idRuta
     *
     * @param string $idRuta
     * @return Pvxd19soliretorno
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
     * Set idZona
     *
     * @param string $idZona
     * @return Pvxd19soliretorno
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
     * Set idEquipo
     *
     * @param string $idEquipo
     * @return Pvxd19soliretorno
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
}
