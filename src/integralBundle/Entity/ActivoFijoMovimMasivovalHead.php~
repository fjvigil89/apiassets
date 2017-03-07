<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoMovimMasivovalHead
 *
 * @ORM\Table(name="Activo_Fijo_Movim_MasivoVal_Head", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Activo_Fijo_Movim_MasivoVal_Head", columns={"Contador"})})
 * @ORM\Entity
 */
class ActivoFijoMovimMasivovalHead
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_MovVal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMovval;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_MovVal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoMovval;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Movim_Activo", type="string", length=3, nullable=false)
     */
    private $idMovimActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausaMov", type="string", length=5, nullable=false)
     */
    private $idCausamov;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Mov", type="datetime", nullable=false)
     */
    private $fechaMov;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabilizado", type="boolean", nullable=false)
     */
    private $contabilizado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Comprobante", type="integer", nullable=false)
     */
    private $idComprobante;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Comprobante", type="integer", nullable=false)
     */
    private $anoComprobante;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Comprobante", type="smallint", nullable=false)
     */
    private $mesComprobante;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="XTrans", type="boolean", nullable=false)
     */
    private $xtrans;

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
     * @var string
     *
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;



    /**
     * Set idMovval
     *
     * @param integer $idMovval
     * @return ActivoFijoMovimMasivovalHead
     */
    public function setIdMovval($idMovval)
    {
        $this->idMovval = $idMovval;

        return $this;
    }

    /**
     * Get idMovval
     *
     * @return integer 
     */
    public function getIdMovval()
    {
        return $this->idMovval;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return ActivoFijoMovimMasivovalHead
     */
    public function setIdAlmacen($idAlmacen)
    {
        $this->idAlmacen = $idAlmacen;

        return $this;
    }

    /**
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set anoMovval
     *
     * @param integer $anoMovval
     * @return ActivoFijoMovimMasivovalHead
     */
    public function setAnoMovval($anoMovval)
    {
        $this->anoMovval = $anoMovval;

        return $this;
    }

    /**
     * Get anoMovval
     *
     * @return integer 
     */
    public function getAnoMovval()
    {
        return $this->anoMovval;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return ActivoFijoMovimMasivovalHead
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
     * Set idMovimActivo
     *
     * @param string $idMovimActivo
     * @return ActivoFijoMovimMasivovalHead
     */
    public function setIdMovimActivo($idMovimActivo)
    {
        $this->idMovimActivo = $idMovimActivo;

        return $this;
    }

    /**
     * Get idMovimActivo
     *
     * @return string 
     */
    public function getIdMovimActivo()
    {
        return $this->idMovimActivo;
    }

    /**
     * Set idCausamov
     *
     * @param string $idCausamov
     * @return ActivoFijoMovimMasivovalHead
     */
    public function setIdCausamov($idCausamov)
    {
        $this->idCausamov = $idCausamov;

        return $this;
    }

    /**
     * Get idCausamov
     *
     * @return string 
     */
    public function getIdCausamov()
    {
        return $this->idCausamov;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return ActivoFijoMovimMasivovalHead
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
     * Set fechaMov
     *
     * @param \DateTime $fechaMov
     * @return ActivoFijoMovimMasivovalHead
     */
    public function setFechaMov($fechaMov)
    {
        $this->fechaMov = $fechaMov;

        return $this;
    }

    /**
     * Get fechaMov
     *
     * @return \DateTime 
     */
    public function getFechaMov()
    {
        return $this->fechaMov;
    }

    /**
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return ActivoFijoMovimMasivovalHead
     */
    public function setContabilizado($contabilizado)
    {
        $this->contabilizado = $contabilizado;

        return $this;
    }

    /**
     * Get contabilizado
     *
     * @return boolean 
     */
    public function getContabilizado()
    {
        return $this->contabilizado;
    }

    /**
     * Set idComprobante
     *
     * @param integer $idComprobante
     * @return ActivoFijoMovimMasivovalHead
     */
    public function setIdComprobante($idComprobante)
    {
        $this->idComprobante = $idComprobante;

        return $this;
    }

    /**
     * Get idComprobante
     *
     * @return integer 
     */
    public function getIdComprobante()
    {
        return $this->idComprobante;
    }

    /**
     * Set anoComprobante
     *
     * @param integer $anoComprobante
     * @return ActivoFijoMovimMasivovalHead
     */
    public function setAnoComprobante($anoComprobante)
    {
        $this->anoComprobante = $anoComprobante;

        return $this;
    }

    /**
     * Get anoComprobante
     *
     * @return integer 
     */
    public function getAnoComprobante()
    {
        return $this->anoComprobante;
    }

    /**
     * Set mesComprobante
     *
     * @param integer $mesComprobante
     * @return ActivoFijoMovimMasivovalHead
     */
    public function setMesComprobante($mesComprobante)
    {
        $this->mesComprobante = $mesComprobante;

        return $this;
    }

    /**
     * Get mesComprobante
     *
     * @return integer 
     */
    public function getMesComprobante()
    {
        return $this->mesComprobante;
    }

    /**
     * Set confirmada
     *
     * @param integer $confirmada
     * @return ActivoFijoMovimMasivovalHead
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
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return ActivoFijoMovimMasivovalHead
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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return ActivoFijoMovimMasivovalHead
     */
    public function setXtrans($xtrans)
    {
        $this->xtrans = $xtrans;

        return $this;
    }

    /**
     * Get xtrans
     *
     * @return boolean 
     */
    public function getXtrans()
    {
        return $this->xtrans;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return ActivoFijoMovimMasivovalHead
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
     * @return ActivoFijoMovimMasivovalHead
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
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return ActivoFijoMovimMasivovalHead
     */
    public function setDocPrimario($docPrimario)
    {
        $this->docPrimario = $docPrimario;

        return $this;
    }

    /**
     * Get docPrimario
     *
     * @return string 
     */
    public function getDocPrimario()
    {
        return $this->docPrimario;
    }
}
