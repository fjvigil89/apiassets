<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhJornadasLaborales
 *
 * @ORM\Table(name="RH_Jornadas_Laborales")
 * @ORM\Entity
 */
class RhJornadasLaborales
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Jornada", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJornada;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Jornada", type="string", length=50, nullable=false)
     */
    private $descJornada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lun_Hora_Ini", type="datetime", nullable=false)
     */
    private $lunHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lun_Hora_Fin", type="datetime", nullable=false)
     */
    private $lunHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Mar_Hora_Ini", type="datetime", nullable=false)
     */
    private $marHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Mar_Hora_Fin", type="datetime", nullable=false)
     */
    private $marHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Mie_Hora_Ini", type="datetime", nullable=false)
     */
    private $mieHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Mie_Hora_Fin", type="datetime", nullable=false)
     */
    private $mieHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Jue_Hora_Ini", type="datetime", nullable=false)
     */
    private $jueHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Jue_Hora_Fin", type="datetime", nullable=false)
     */
    private $jueHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Vie_Hora_Ini", type="datetime", nullable=false)
     */
    private $vieHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Vie_Hora_Fin", type="datetime", nullable=false)
     */
    private $vieHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Sab_Hora_Ini", type="datetime", nullable=false)
     */
    private $sabHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Sab_Hora_Fin", type="datetime", nullable=false)
     */
    private $sabHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Dom_Hora_Ini", type="datetime", nullable=false)
     */
    private $domHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Dom_Hora_Fin", type="datetime", nullable=false)
     */
    private $domHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Lun_Hora_Ini", type="datetime", nullable=false)
     */
    private $lunchLunHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Lun_Hora_Fin", type="datetime", nullable=false)
     */
    private $lunchLunHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Mar_Hora_Ini", type="datetime", nullable=false)
     */
    private $lunchMarHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Mar_Hora_Fin", type="datetime", nullable=false)
     */
    private $lunchMarHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Mie_Hora_Ini", type="datetime", nullable=false)
     */
    private $lunchMieHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Mie_Hora_Fin", type="datetime", nullable=false)
     */
    private $lunchMieHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Jue_Hora_Ini", type="datetime", nullable=false)
     */
    private $lunchJueHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Jue_Hora_Fin", type="datetime", nullable=false)
     */
    private $lunchJueHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Vie_Hora_Ini", type="datetime", nullable=false)
     */
    private $lunchVieHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Vie_Hora_Fin", type="datetime", nullable=false)
     */
    private $lunchVieHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Sab_Hora_Ini", type="datetime", nullable=false)
     */
    private $lunchSabHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Sab_Hora_Fin", type="datetime", nullable=false)
     */
    private $lunchSabHoraFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Dom_Hora_Ini", type="datetime", nullable=false)
     */
    private $lunchDomHoraIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lunch_Dom_Hora_Fin", type="datetime", nullable=false)
     */
    private $lunchDomHoraFin;

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
     * Get idJornada
     *
     * @return string 
     */
    public function getIdJornada()
    {
        return $this->idJornada;
    }

    /**
     * Set descJornada
     *
     * @param string $descJornada
     * @return RhJornadasLaborales
     */
    public function setDescJornada($descJornada)
    {
        $this->descJornada = $descJornada;

        return $this;
    }

    /**
     * Get descJornada
     *
     * @return string 
     */
    public function getDescJornada()
    {
        return $this->descJornada;
    }

    /**
     * Set lunHoraIni
     *
     * @param \DateTime $lunHoraIni
     * @return RhJornadasLaborales
     */
    public function setLunHoraIni($lunHoraIni)
    {
        $this->lunHoraIni = $lunHoraIni;

        return $this;
    }

    /**
     * Get lunHoraIni
     *
     * @return \DateTime 
     */
    public function getLunHoraIni()
    {
        return $this->lunHoraIni;
    }

    /**
     * Set lunHoraFin
     *
     * @param \DateTime $lunHoraFin
     * @return RhJornadasLaborales
     */
    public function setLunHoraFin($lunHoraFin)
    {
        $this->lunHoraFin = $lunHoraFin;

        return $this;
    }

    /**
     * Get lunHoraFin
     *
     * @return \DateTime 
     */
    public function getLunHoraFin()
    {
        return $this->lunHoraFin;
    }

    /**
     * Set marHoraIni
     *
     * @param \DateTime $marHoraIni
     * @return RhJornadasLaborales
     */
    public function setMarHoraIni($marHoraIni)
    {
        $this->marHoraIni = $marHoraIni;

        return $this;
    }

    /**
     * Get marHoraIni
     *
     * @return \DateTime 
     */
    public function getMarHoraIni()
    {
        return $this->marHoraIni;
    }

    /**
     * Set marHoraFin
     *
     * @param \DateTime $marHoraFin
     * @return RhJornadasLaborales
     */
    public function setMarHoraFin($marHoraFin)
    {
        $this->marHoraFin = $marHoraFin;

        return $this;
    }

    /**
     * Get marHoraFin
     *
     * @return \DateTime 
     */
    public function getMarHoraFin()
    {
        return $this->marHoraFin;
    }

    /**
     * Set mieHoraIni
     *
     * @param \DateTime $mieHoraIni
     * @return RhJornadasLaborales
     */
    public function setMieHoraIni($mieHoraIni)
    {
        $this->mieHoraIni = $mieHoraIni;

        return $this;
    }

    /**
     * Get mieHoraIni
     *
     * @return \DateTime 
     */
    public function getMieHoraIni()
    {
        return $this->mieHoraIni;
    }

    /**
     * Set mieHoraFin
     *
     * @param \DateTime $mieHoraFin
     * @return RhJornadasLaborales
     */
    public function setMieHoraFin($mieHoraFin)
    {
        $this->mieHoraFin = $mieHoraFin;

        return $this;
    }

    /**
     * Get mieHoraFin
     *
     * @return \DateTime 
     */
    public function getMieHoraFin()
    {
        return $this->mieHoraFin;
    }

    /**
     * Set jueHoraIni
     *
     * @param \DateTime $jueHoraIni
     * @return RhJornadasLaborales
     */
    public function setJueHoraIni($jueHoraIni)
    {
        $this->jueHoraIni = $jueHoraIni;

        return $this;
    }

    /**
     * Get jueHoraIni
     *
     * @return \DateTime 
     */
    public function getJueHoraIni()
    {
        return $this->jueHoraIni;
    }

    /**
     * Set jueHoraFin
     *
     * @param \DateTime $jueHoraFin
     * @return RhJornadasLaborales
     */
    public function setJueHoraFin($jueHoraFin)
    {
        $this->jueHoraFin = $jueHoraFin;

        return $this;
    }

    /**
     * Get jueHoraFin
     *
     * @return \DateTime 
     */
    public function getJueHoraFin()
    {
        return $this->jueHoraFin;
    }

    /**
     * Set vieHoraIni
     *
     * @param \DateTime $vieHoraIni
     * @return RhJornadasLaborales
     */
    public function setVieHoraIni($vieHoraIni)
    {
        $this->vieHoraIni = $vieHoraIni;

        return $this;
    }

    /**
     * Get vieHoraIni
     *
     * @return \DateTime 
     */
    public function getVieHoraIni()
    {
        return $this->vieHoraIni;
    }

    /**
     * Set vieHoraFin
     *
     * @param \DateTime $vieHoraFin
     * @return RhJornadasLaborales
     */
    public function setVieHoraFin($vieHoraFin)
    {
        $this->vieHoraFin = $vieHoraFin;

        return $this;
    }

    /**
     * Get vieHoraFin
     *
     * @return \DateTime 
     */
    public function getVieHoraFin()
    {
        return $this->vieHoraFin;
    }

    /**
     * Set sabHoraIni
     *
     * @param \DateTime $sabHoraIni
     * @return RhJornadasLaborales
     */
    public function setSabHoraIni($sabHoraIni)
    {
        $this->sabHoraIni = $sabHoraIni;

        return $this;
    }

    /**
     * Get sabHoraIni
     *
     * @return \DateTime 
     */
    public function getSabHoraIni()
    {
        return $this->sabHoraIni;
    }

    /**
     * Set sabHoraFin
     *
     * @param \DateTime $sabHoraFin
     * @return RhJornadasLaborales
     */
    public function setSabHoraFin($sabHoraFin)
    {
        $this->sabHoraFin = $sabHoraFin;

        return $this;
    }

    /**
     * Get sabHoraFin
     *
     * @return \DateTime 
     */
    public function getSabHoraFin()
    {
        return $this->sabHoraFin;
    }

    /**
     * Set domHoraIni
     *
     * @param \DateTime $domHoraIni
     * @return RhJornadasLaborales
     */
    public function setDomHoraIni($domHoraIni)
    {
        $this->domHoraIni = $domHoraIni;

        return $this;
    }

    /**
     * Get domHoraIni
     *
     * @return \DateTime 
     */
    public function getDomHoraIni()
    {
        return $this->domHoraIni;
    }

    /**
     * Set domHoraFin
     *
     * @param \DateTime $domHoraFin
     * @return RhJornadasLaborales
     */
    public function setDomHoraFin($domHoraFin)
    {
        $this->domHoraFin = $domHoraFin;

        return $this;
    }

    /**
     * Get domHoraFin
     *
     * @return \DateTime 
     */
    public function getDomHoraFin()
    {
        return $this->domHoraFin;
    }

    /**
     * Set lunchLunHoraIni
     *
     * @param \DateTime $lunchLunHoraIni
     * @return RhJornadasLaborales
     */
    public function setLunchLunHoraIni($lunchLunHoraIni)
    {
        $this->lunchLunHoraIni = $lunchLunHoraIni;

        return $this;
    }

    /**
     * Get lunchLunHoraIni
     *
     * @return \DateTime 
     */
    public function getLunchLunHoraIni()
    {
        return $this->lunchLunHoraIni;
    }

    /**
     * Set lunchLunHoraFin
     *
     * @param \DateTime $lunchLunHoraFin
     * @return RhJornadasLaborales
     */
    public function setLunchLunHoraFin($lunchLunHoraFin)
    {
        $this->lunchLunHoraFin = $lunchLunHoraFin;

        return $this;
    }

    /**
     * Get lunchLunHoraFin
     *
     * @return \DateTime 
     */
    public function getLunchLunHoraFin()
    {
        return $this->lunchLunHoraFin;
    }

    /**
     * Set lunchMarHoraIni
     *
     * @param \DateTime $lunchMarHoraIni
     * @return RhJornadasLaborales
     */
    public function setLunchMarHoraIni($lunchMarHoraIni)
    {
        $this->lunchMarHoraIni = $lunchMarHoraIni;

        return $this;
    }

    /**
     * Get lunchMarHoraIni
     *
     * @return \DateTime 
     */
    public function getLunchMarHoraIni()
    {
        return $this->lunchMarHoraIni;
    }

    /**
     * Set lunchMarHoraFin
     *
     * @param \DateTime $lunchMarHoraFin
     * @return RhJornadasLaborales
     */
    public function setLunchMarHoraFin($lunchMarHoraFin)
    {
        $this->lunchMarHoraFin = $lunchMarHoraFin;

        return $this;
    }

    /**
     * Get lunchMarHoraFin
     *
     * @return \DateTime 
     */
    public function getLunchMarHoraFin()
    {
        return $this->lunchMarHoraFin;
    }

    /**
     * Set lunchMieHoraIni
     *
     * @param \DateTime $lunchMieHoraIni
     * @return RhJornadasLaborales
     */
    public function setLunchMieHoraIni($lunchMieHoraIni)
    {
        $this->lunchMieHoraIni = $lunchMieHoraIni;

        return $this;
    }

    /**
     * Get lunchMieHoraIni
     *
     * @return \DateTime 
     */
    public function getLunchMieHoraIni()
    {
        return $this->lunchMieHoraIni;
    }

    /**
     * Set lunchMieHoraFin
     *
     * @param \DateTime $lunchMieHoraFin
     * @return RhJornadasLaborales
     */
    public function setLunchMieHoraFin($lunchMieHoraFin)
    {
        $this->lunchMieHoraFin = $lunchMieHoraFin;

        return $this;
    }

    /**
     * Get lunchMieHoraFin
     *
     * @return \DateTime 
     */
    public function getLunchMieHoraFin()
    {
        return $this->lunchMieHoraFin;
    }

    /**
     * Set lunchJueHoraIni
     *
     * @param \DateTime $lunchJueHoraIni
     * @return RhJornadasLaborales
     */
    public function setLunchJueHoraIni($lunchJueHoraIni)
    {
        $this->lunchJueHoraIni = $lunchJueHoraIni;

        return $this;
    }

    /**
     * Get lunchJueHoraIni
     *
     * @return \DateTime 
     */
    public function getLunchJueHoraIni()
    {
        return $this->lunchJueHoraIni;
    }

    /**
     * Set lunchJueHoraFin
     *
     * @param \DateTime $lunchJueHoraFin
     * @return RhJornadasLaborales
     */
    public function setLunchJueHoraFin($lunchJueHoraFin)
    {
        $this->lunchJueHoraFin = $lunchJueHoraFin;

        return $this;
    }

    /**
     * Get lunchJueHoraFin
     *
     * @return \DateTime 
     */
    public function getLunchJueHoraFin()
    {
        return $this->lunchJueHoraFin;
    }

    /**
     * Set lunchVieHoraIni
     *
     * @param \DateTime $lunchVieHoraIni
     * @return RhJornadasLaborales
     */
    public function setLunchVieHoraIni($lunchVieHoraIni)
    {
        $this->lunchVieHoraIni = $lunchVieHoraIni;

        return $this;
    }

    /**
     * Get lunchVieHoraIni
     *
     * @return \DateTime 
     */
    public function getLunchVieHoraIni()
    {
        return $this->lunchVieHoraIni;
    }

    /**
     * Set lunchVieHoraFin
     *
     * @param \DateTime $lunchVieHoraFin
     * @return RhJornadasLaborales
     */
    public function setLunchVieHoraFin($lunchVieHoraFin)
    {
        $this->lunchVieHoraFin = $lunchVieHoraFin;

        return $this;
    }

    /**
     * Get lunchVieHoraFin
     *
     * @return \DateTime 
     */
    public function getLunchVieHoraFin()
    {
        return $this->lunchVieHoraFin;
    }

    /**
     * Set lunchSabHoraIni
     *
     * @param \DateTime $lunchSabHoraIni
     * @return RhJornadasLaborales
     */
    public function setLunchSabHoraIni($lunchSabHoraIni)
    {
        $this->lunchSabHoraIni = $lunchSabHoraIni;

        return $this;
    }

    /**
     * Get lunchSabHoraIni
     *
     * @return \DateTime 
     */
    public function getLunchSabHoraIni()
    {
        return $this->lunchSabHoraIni;
    }

    /**
     * Set lunchSabHoraFin
     *
     * @param \DateTime $lunchSabHoraFin
     * @return RhJornadasLaborales
     */
    public function setLunchSabHoraFin($lunchSabHoraFin)
    {
        $this->lunchSabHoraFin = $lunchSabHoraFin;

        return $this;
    }

    /**
     * Get lunchSabHoraFin
     *
     * @return \DateTime 
     */
    public function getLunchSabHoraFin()
    {
        return $this->lunchSabHoraFin;
    }

    /**
     * Set lunchDomHoraIni
     *
     * @param \DateTime $lunchDomHoraIni
     * @return RhJornadasLaborales
     */
    public function setLunchDomHoraIni($lunchDomHoraIni)
    {
        $this->lunchDomHoraIni = $lunchDomHoraIni;

        return $this;
    }

    /**
     * Get lunchDomHoraIni
     *
     * @return \DateTime 
     */
    public function getLunchDomHoraIni()
    {
        return $this->lunchDomHoraIni;
    }

    /**
     * Set lunchDomHoraFin
     *
     * @param \DateTime $lunchDomHoraFin
     * @return RhJornadasLaborales
     */
    public function setLunchDomHoraFin($lunchDomHoraFin)
    {
        $this->lunchDomHoraFin = $lunchDomHoraFin;

        return $this;
    }

    /**
     * Get lunchDomHoraFin
     *
     * @return \DateTime 
     */
    public function getLunchDomHoraFin()
    {
        return $this->lunchDomHoraFin;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return RhJornadasLaborales
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
     * @return RhJornadasLaborales
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
