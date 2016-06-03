<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturaCambiosClasif
 *
 * @ORM\Table(name="Factura_Cambios_Clasif", indexes={@ORM\Index(name="IX_Contador1", columns={"Contador_Fa"}), @ORM\Index(name="IX_Fecha", columns={"Fecha"})})
 * @ORM\Entity
 */
class FacturaCambiosClasif
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
     * @ORM\Column(name="Contador_Fa", type="integer", nullable=false)
     */
    private $contadorFa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Fa_Ini", type="string", length=10, nullable=false)
     */
    private $idClasifFaIni;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Fa_Fin", type="string", length=10, nullable=false)
     */
    private $idClasifFaFin;

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
     * Set contadorFa
     *
     * @param integer $contadorFa
     * @return FacturaCambiosClasif
     */
    public function setContadorFa($contadorFa)
    {
        $this->contadorFa = $contadorFa;

        return $this;
    }

    /**
     * Get contadorFa
     *
     * @return integer 
     */
    public function getContadorFa()
    {
        return $this->contadorFa;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return FacturaCambiosClasif
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
     * Set idClasifFaIni
     *
     * @param string $idClasifFaIni
     * @return FacturaCambiosClasif
     */
    public function setIdClasifFaIni($idClasifFaIni)
    {
        $this->idClasifFaIni = $idClasifFaIni;

        return $this;
    }

    /**
     * Get idClasifFaIni
     *
     * @return string 
     */
    public function getIdClasifFaIni()
    {
        return $this->idClasifFaIni;
    }

    /**
     * Set idClasifFaFin
     *
     * @param string $idClasifFaFin
     * @return FacturaCambiosClasif
     */
    public function setIdClasifFaFin($idClasifFaFin)
    {
        $this->idClasifFaFin = $idClasifFaFin;

        return $this;
    }

    /**
     * Get idClasifFaFin
     *
     * @return string 
     */
    public function getIdClasifFaFin()
    {
        return $this->idClasifFaFin;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return FacturaCambiosClasif
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
     * @return FacturaCambiosClasif
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
     * @return FacturaCambiosClasif
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
     * @return FacturaCambiosClasif
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
     * @return FacturaCambiosClasif
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
     * @return FacturaCambiosClasif
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
     * @return FacturaCambiosClasif
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
     * @return FacturaCambiosClasif
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
     * @return FacturaCambiosClasif
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
     * @return FacturaCambiosClasif
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
