<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhExpedientesMovimientos
 *
 * @ORM\Table(name="RH_Expedientes_Movimientos")
 * @ORM\Entity
 */
class RhExpedientesMovimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NoMovExped", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nomovexped;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ExpedienteOld", type="string", length=15, nullable=false)
     */
    private $idExpedienteold;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=152, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ExpedienteNew", type="string", length=15, nullable=false)
     */
    private $idExpedientenew;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=100, nullable=false)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

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
     * Get nomovexped
     *
     * @return integer 
     */
    public function getNomovexped()
    {
        return $this->nomovexped;
    }

    /**
     * Set idExpedienteold
     *
     * @param string $idExpedienteold
     * @return RhExpedientesMovimientos
     */
    public function setIdExpedienteold($idExpedienteold)
    {
        $this->idExpedienteold = $idExpedienteold;

        return $this;
    }

    /**
     * Get idExpedienteold
     *
     * @return string 
     */
    public function getIdExpedienteold()
    {
        return $this->idExpedienteold;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return RhExpedientesMovimientos
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
     * Set idExpedientenew
     *
     * @param string $idExpedientenew
     * @return RhExpedientesMovimientos
     */
    public function setIdExpedientenew($idExpedientenew)
    {
        $this->idExpedientenew = $idExpedientenew;

        return $this;
    }

    /**
     * Get idExpedientenew
     *
     * @return string 
     */
    public function getIdExpedientenew()
    {
        return $this->idExpedientenew;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return RhExpedientesMovimientos
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
     * Set estado
     *
     * @param integer $estado
     * @return RhExpedientesMovimientos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return RhExpedientesMovimientos
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
     * @return RhExpedientesMovimientos
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
