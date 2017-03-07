<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecepcionCambiosClasif
 *
 * @ORM\Table(name="Recepcion_Cambios_Clasif", indexes={@ORM\Index(name="Ix1_Rx_Cambios_Clasif", columns={"Contador_Rx"})})
 * @ORM\Entity
 */
class RecepcionCambiosClasif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Rx", type="integer", nullable=false)
     */
    private $contadorRx;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Rx_Ini", type="string", length=10, nullable=false)
     */
    private $idClasifRxIni;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Rx_Fin", type="string", length=10, nullable=false)
     */
    private $idClasifRxFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=100, nullable=false)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Compro", type="smallint", nullable=false)
     */
    private $mesCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro", type="smallint", nullable=false)
     */
    private $anoCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Compro", type="integer", nullable=false)
     */
    private $contadorCompro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pre_Assets", type="boolean", nullable=false)
     */
    private $preAssets;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

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
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set contadorRx
     *
     * @param integer $contadorRx
     * @return RecepcionCambiosClasif
     */
    public function setContadorRx($contadorRx)
    {
        $this->contadorRx = $contadorRx;

        return $this;
    }

    /**
     * Get contadorRx
     *
     * @return integer 
     */
    public function getContadorRx()
    {
        return $this->contadorRx;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return RecepcionCambiosClasif
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
     * Set idClasifRxIni
     *
     * @param string $idClasifRxIni
     * @return RecepcionCambiosClasif
     */
    public function setIdClasifRxIni($idClasifRxIni)
    {
        $this->idClasifRxIni = $idClasifRxIni;

        return $this;
    }

    /**
     * Get idClasifRxIni
     *
     * @return string 
     */
    public function getIdClasifRxIni()
    {
        return $this->idClasifRxIni;
    }

    /**
     * Set idClasifRxFin
     *
     * @param string $idClasifRxFin
     * @return RecepcionCambiosClasif
     */
    public function setIdClasifRxFin($idClasifRxFin)
    {
        $this->idClasifRxFin = $idClasifRxFin;

        return $this;
    }

    /**
     * Get idClasifRxFin
     *
     * @return string 
     */
    public function getIdClasifRxFin()
    {
        return $this->idClasifRxFin;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return RecepcionCambiosClasif
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return RecepcionCambiosClasif
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set idCompro
     *
     * @param integer $idCompro
     * @return RecepcionCambiosClasif
     */
    public function setIdCompro($idCompro)
    {
        $this->idCompro = $idCompro;

        return $this;
    }

    /**
     * Get idCompro
     *
     * @return integer 
     */
    public function getIdCompro()
    {
        return $this->idCompro;
    }

    /**
     * Set mesCompro
     *
     * @param integer $mesCompro
     * @return RecepcionCambiosClasif
     */
    public function setMesCompro($mesCompro)
    {
        $this->mesCompro = $mesCompro;

        return $this;
    }

    /**
     * Get mesCompro
     *
     * @return integer 
     */
    public function getMesCompro()
    {
        return $this->mesCompro;
    }

    /**
     * Set anoCompro
     *
     * @param integer $anoCompro
     * @return RecepcionCambiosClasif
     */
    public function setAnoCompro($anoCompro)
    {
        $this->anoCompro = $anoCompro;

        return $this;
    }

    /**
     * Get anoCompro
     *
     * @return integer 
     */
    public function getAnoCompro()
    {
        return $this->anoCompro;
    }

    /**
     * Set contadorCompro
     *
     * @param integer $contadorCompro
     * @return RecepcionCambiosClasif
     */
    public function setContadorCompro($contadorCompro)
    {
        $this->contadorCompro = $contadorCompro;

        return $this;
    }

    /**
     * Get contadorCompro
     *
     * @return integer 
     */
    public function getContadorCompro()
    {
        return $this->contadorCompro;
    }

    /**
     * Set preAssets
     *
     * @param boolean $preAssets
     * @return RecepcionCambiosClasif
     */
    public function setPreAssets($preAssets)
    {
        $this->preAssets = $preAssets;

        return $this;
    }

    /**
     * Get preAssets
     *
     * @return boolean 
     */
    public function getPreAssets()
    {
        return $this->preAssets;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return RecepcionCambiosClasif
     */
    public function setIdAgrupacion($idAgrupacion)
    {
        $this->idAgrupacion = $idAgrupacion;

        return $this;
    }

    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return RecepcionCambiosClasif
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
     * @return RecepcionCambiosClasif
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
