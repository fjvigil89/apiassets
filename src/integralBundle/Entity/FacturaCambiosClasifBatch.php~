<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturaCambiosClasifBatch
 *
 * @ORM\Table(name="Factura_Cambios_Clasif_Batch")
 * @ORM\Entity
 */
class FacturaCambiosClasifBatch
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Fa", type="integer", nullable=false)
     */
    private $contadorFa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Factura", type="integer", nullable=false)
     */
    private $idFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=50, nullable=false)
     */
    private $descCliente;

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
     * @ORM\Column(name="Observaciones", type="string", length=120, nullable=false)
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
     * @ORM\Column(name="PC_NAME", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pcName;

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
     * @var boolean
     *
     * @ORM\Column(name="A_Contabilizar", type="boolean", nullable=false)
     */
    private $aContabilizar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabilizado", type="boolean", nullable=false)
     */
    private $contabilizado;



    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return FacturaCambiosClasifBatch
     */
    public function setContador1($contador1)
    {
        $this->contador1 = $contador1;

        return $this;
    }

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
     * @return FacturaCambiosClasifBatch
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
     * Set idFactura
     *
     * @param integer $idFactura
     * @return FacturaCambiosClasifBatch
     */
    public function setIdFactura($idFactura)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * Get idFactura
     *
     * @return integer 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return FacturaCambiosClasifBatch
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return FacturaCambiosClasifBatch
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return FacturaCambiosClasifBatch
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set descCliente
     *
     * @param string $descCliente
     * @return FacturaCambiosClasifBatch
     */
    public function setDescCliente($descCliente)
    {
        $this->descCliente = $descCliente;

        return $this;
    }

    /**
     * Get descCliente
     *
     * @return string 
     */
    public function getDescCliente()
    {
        return $this->descCliente;
    }

    /**
     * Set idClasifFaIni
     *
     * @param string $idClasifFaIni
     * @return FacturaCambiosClasifBatch
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
     * @return FacturaCambiosClasifBatch
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
     * @return FacturaCambiosClasifBatch
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
     * @return FacturaCambiosClasifBatch
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
     * @return FacturaCambiosClasifBatch
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
     * @return FacturaCambiosClasifBatch
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
     * @return FacturaCambiosClasifBatch
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
     * @return FacturaCambiosClasifBatch
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
     * @return FacturaCambiosClasifBatch
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
     * @return FacturaCambiosClasifBatch
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
     * Set pcName
     *
     * @param string $pcName
     * @return FacturaCambiosClasifBatch
     */
    public function setPcName($pcName)
    {
        $this->pcName = $pcName;

        return $this;
    }

    /**
     * Get pcName
     *
     * @return string 
     */
    public function getPcName()
    {
        return $this->pcName;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return FacturaCambiosClasifBatch
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
     * @return FacturaCambiosClasifBatch
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
     * Set aContabilizar
     *
     * @param boolean $aContabilizar
     * @return FacturaCambiosClasifBatch
     */
    public function setAContabilizar($aContabilizar)
    {
        $this->aContabilizar = $aContabilizar;

        return $this;
    }

    /**
     * Get aContabilizar
     *
     * @return boolean 
     */
    public function getAContabilizar()
    {
        return $this->aContabilizar;
    }

    /**
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return FacturaCambiosClasifBatch
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
}
