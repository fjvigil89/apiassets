<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesSusdeudasBck
 *
 * @ORM\Table(name="Clientes_SusDeudas_Bck")
 * @ORM\Entity
 */
class ClientesSusdeudasBck
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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Deudor", type="smallint", nullable=false)
     */
    private $tipoDeudor;

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
     * @var integer
     *
     * @ORM\Column(name="Id_DocReferencia", type="integer", nullable=false)
     */
    private $idDocreferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

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
     * @ORM\Column(name="Id_Compro_Anulado", type="integer", nullable=false)
     */
    private $idComproAnulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Anul", type="smallint", nullable=false)
     */
    private $mesAnul;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Anulado", type="smallint", nullable=false)
     */
    private $anoAnulado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=2, nullable=false)
     */
    private $idConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Fa", type="string", length=10, nullable=false)
     */
    private $idClasifFa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Compro", type="integer", nullable=false)
     */
    private $contadorCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Compro_Canc", type="integer", nullable=false)
     */
    private $contadorComproCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

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
     * @ORM\Column(name="AplicaPlazoCobro", type="boolean", nullable=false)
     */
    private $aplicaplazocobro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EnPorciento", type="boolean", nullable=false)
     */
    private $enporciento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_MC", type="integer", nullable=false)
     */
    private $importeMc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cancelacion", type="datetime", nullable=false)
     */
    private $fechaCancelacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_Cambio", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $tasaCambio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Moneda", type="integer", nullable=false)
     */
    private $importeMoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Cobrador", type="string", length=50, nullable=false)
     */
    private $cobrador;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ClientesSusdeudasBck
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
     * Set tipoDeudor
     *
     * @param integer $tipoDeudor
     * @return ClientesSusdeudasBck
     */
    public function setTipoDeudor($tipoDeudor)
    {
        $this->tipoDeudor = $tipoDeudor;

        return $this;
    }

    /**
     * Get tipoDeudor
     *
     * @return integer 
     */
    public function getTipoDeudor()
    {
        return $this->tipoDeudor;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return ClientesSusdeudasBck
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
     * @return ClientesSusdeudasBck
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
     * Set idDocreferencia
     *
     * @param integer $idDocreferencia
     * @return ClientesSusdeudasBck
     */
    public function setIdDocreferencia($idDocreferencia)
    {
        $this->idDocreferencia = $idDocreferencia;

        return $this;
    }

    /**
     * Get idDocreferencia
     *
     * @return integer 
     */
    public function getIdDocreferencia()
    {
        return $this->idDocreferencia;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return ClientesSusdeudasBck
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return ClientesSusdeudasBck
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
     * @return ClientesSusdeudasBck
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
     * @return ClientesSusdeudasBck
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
     * @return ClientesSusdeudasBck
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
     * @return ClientesSusdeudasBck
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
     * Set idComproAnulado
     *
     * @param integer $idComproAnulado
     * @return ClientesSusdeudasBck
     */
    public function setIdComproAnulado($idComproAnulado)
    {
        $this->idComproAnulado = $idComproAnulado;

        return $this;
    }

    /**
     * Get idComproAnulado
     *
     * @return integer 
     */
    public function getIdComproAnulado()
    {
        return $this->idComproAnulado;
    }

    /**
     * Set mesAnul
     *
     * @param integer $mesAnul
     * @return ClientesSusdeudasBck
     */
    public function setMesAnul($mesAnul)
    {
        $this->mesAnul = $mesAnul;

        return $this;
    }

    /**
     * Get mesAnul
     *
     * @return integer 
     */
    public function getMesAnul()
    {
        return $this->mesAnul;
    }

    /**
     * Set anoAnulado
     *
     * @param integer $anoAnulado
     * @return ClientesSusdeudasBck
     */
    public function setAnoAnulado($anoAnulado)
    {
        $this->anoAnulado = $anoAnulado;

        return $this;
    }

    /**
     * Get anoAnulado
     *
     * @return integer 
     */
    public function getAnoAnulado()
    {
        return $this->anoAnulado;
    }

    /**
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return ClientesSusdeudasBck
     */
    public function setIdConcepto($idConcepto)
    {
        $this->idConcepto = $idConcepto;

        return $this;
    }

    /**
     * Get idConcepto
     *
     * @return string 
     */
    public function getIdConcepto()
    {
        return $this->idConcepto;
    }

    /**
     * Set idClasifFa
     *
     * @param string $idClasifFa
     * @return ClientesSusdeudasBck
     */
    public function setIdClasifFa($idClasifFa)
    {
        $this->idClasifFa = $idClasifFa;

        return $this;
    }

    /**
     * Get idClasifFa
     *
     * @return string 
     */
    public function getIdClasifFa()
    {
        return $this->idClasifFa;
    }

    /**
     * Set contadorCompro
     *
     * @param integer $contadorCompro
     * @return ClientesSusdeudasBck
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
     * Set contadorComproCanc
     *
     * @param integer $contadorComproCanc
     * @return ClientesSusdeudasBck
     */
    public function setContadorComproCanc($contadorComproCanc)
    {
        $this->contadorComproCanc = $contadorComproCanc;

        return $this;
    }

    /**
     * Get contadorComproCanc
     *
     * @return integer 
     */
    public function getContadorComproCanc()
    {
        return $this->contadorComproCanc;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return ClientesSusdeudasBck
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
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return ClientesSusdeudasBck
     */
    public function setFechaVence($fechaVence)
    {
        $this->fechaVence = $fechaVence;

        return $this;
    }

    /**
     * Get fechaVence
     *
     * @return \DateTime 
     */
    public function getFechaVence()
    {
        return $this->fechaVence;
    }

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return ClientesSusdeudasBck
     */
    public function setTipoMoneda($tipoMoneda)
    {
        $this->tipoMoneda = $tipoMoneda;

        return $this;
    }

    /**
     * Get tipoMoneda
     *
     * @return integer 
     */
    public function getTipoMoneda()
    {
        return $this->tipoMoneda;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return ClientesSusdeudasBck
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
     * @return ClientesSusdeudasBck
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
     * Set aplicaplazocobro
     *
     * @param boolean $aplicaplazocobro
     * @return ClientesSusdeudasBck
     */
    public function setAplicaplazocobro($aplicaplazocobro)
    {
        $this->aplicaplazocobro = $aplicaplazocobro;

        return $this;
    }

    /**
     * Get aplicaplazocobro
     *
     * @return boolean 
     */
    public function getAplicaplazocobro()
    {
        return $this->aplicaplazocobro;
    }

    /**
     * Set enporciento
     *
     * @param boolean $enporciento
     * @return ClientesSusdeudasBck
     */
    public function setEnporciento($enporciento)
    {
        $this->enporciento = $enporciento;

        return $this;
    }

    /**
     * Get enporciento
     *
     * @return boolean 
     */
    public function getEnporciento()
    {
        return $this->enporciento;
    }

    /**
     * Set importeMc
     *
     * @param integer $importeMc
     * @return ClientesSusdeudasBck
     */
    public function setImporteMc($importeMc)
    {
        $this->importeMc = $importeMc;

        return $this;
    }

    /**
     * Get importeMc
     *
     * @return integer 
     */
    public function getImporteMc()
    {
        return $this->importeMc;
    }

    /**
     * Set fechaCancelacion
     *
     * @param \DateTime $fechaCancelacion
     * @return ClientesSusdeudasBck
     */
    public function setFechaCancelacion($fechaCancelacion)
    {
        $this->fechaCancelacion = $fechaCancelacion;

        return $this;
    }

    /**
     * Get fechaCancelacion
     *
     * @return \DateTime 
     */
    public function getFechaCancelacion()
    {
        return $this->fechaCancelacion;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return ClientesSusdeudasBck
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
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return ClientesSusdeudasBck
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

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return ClientesSusdeudasBck
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set tasaCambio
     *
     * @param string $tasaCambio
     * @return ClientesSusdeudasBck
     */
    public function setTasaCambio($tasaCambio)
    {
        $this->tasaCambio = $tasaCambio;

        return $this;
    }

    /**
     * Get tasaCambio
     *
     * @return string 
     */
    public function getTasaCambio()
    {
        return $this->tasaCambio;
    }

    /**
     * Set importeMoneda
     *
     * @param integer $importeMoneda
     * @return ClientesSusdeudasBck
     */
    public function setImporteMoneda($importeMoneda)
    {
        $this->importeMoneda = $importeMoneda;

        return $this;
    }

    /**
     * Get importeMoneda
     *
     * @return integer 
     */
    public function getImporteMoneda()
    {
        return $this->importeMoneda;
    }

    /**
     * Set cobrador
     *
     * @param string $cobrador
     * @return ClientesSusdeudasBck
     */
    public function setCobrador($cobrador)
    {
        $this->cobrador = $cobrador;

        return $this;
    }

    /**
     * Get cobrador
     *
     * @return string 
     */
    public function getCobrador()
    {
        return $this->cobrador;
    }
}
