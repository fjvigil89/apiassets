<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenCompra
 *
 * @ORM\Table(name="Orden_Compra", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Orden_Compra", columns={"Contador"})})
 * @ORM\Entity
 */
class OrdenCompra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_OrdenCompra", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anoOrdencompra;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_OrdenCompra", type="integer", nullable=false)
     */
    private $idOrdencompra;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Proveedor", type="string", length=50, nullable=false)
     */
    private $descProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=5, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Empleado", type="string", length=50, nullable=false)
     */
    private $descEmpleado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Pedido", type="datetime", nullable=false)
     */
    private $fechaPedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Prometido_ParaFecha", type="datetime", nullable=false)
     */
    private $prometidoParafecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Entregar_A", type="string", length=50, nullable=false)
     */
    private $entregarA;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=500, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Terminos_Entrega", type="string", length=255, nullable=false)
     */
    private $terminosEntrega;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMn", type="integer", nullable=false)
     */
    private $importemn;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrada", type="boolean", nullable=false)
     */
    private $cerrada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_Cambio", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $tasaCambio;

    /**
     * @var string
     *
     * @ORM\Column(name="PrefijoOC", type="string", length=15, nullable=false)
     */
    private $prefijooc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContadorOC", type="integer", nullable=false)
     */
    private $contadoroc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Despacho", type="datetime", nullable=false)
     */
    private $fechaDespacho;

    /**
     * @var string
     *
     * @ORM\Column(name="CondicionesPago", type="string", length=255, nullable=false)
     */
    private $condicionespago;

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
     * @ORM\Column(name="Credito", type="smallint", nullable=false)
     */
    private $credito;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImpuestoProve", type="integer", nullable=false)
     */
    private $impuestoprove;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Ccosto", type="string", length=50, nullable=false)
     */
    private $descCcosto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Aprobada", type="boolean", nullable=false)
     */
    private $aprobada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Gen_Auto", type="boolean", nullable=false)
     */
    private $genAuto;



    /**
     * Get anoOrdencompra
     *
     * @return integer 
     */
    public function getAnoOrdencompra()
    {
        return $this->anoOrdencompra;
    }

    /**
     * Set idOrdencompra
     *
     * @param integer $idOrdencompra
     * @return OrdenCompra
     */
    public function setIdOrdencompra($idOrdencompra)
    {
        $this->idOrdencompra = $idOrdencompra;

        return $this;
    }

    /**
     * Get idOrdencompra
     *
     * @return integer 
     */
    public function getIdOrdencompra()
    {
        return $this->idOrdencompra;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return OrdenCompra
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
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return OrdenCompra
     */
    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return string 
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set descProveedor
     *
     * @param string $descProveedor
     * @return OrdenCompra
     */
    public function setDescProveedor($descProveedor)
    {
        $this->descProveedor = $descProveedor;

        return $this;
    }

    /**
     * Get descProveedor
     *
     * @return string 
     */
    public function getDescProveedor()
    {
        return $this->descProveedor;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return OrdenCompra
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return string 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set descEmpleado
     *
     * @param string $descEmpleado
     * @return OrdenCompra
     */
    public function setDescEmpleado($descEmpleado)
    {
        $this->descEmpleado = $descEmpleado;

        return $this;
    }

    /**
     * Get descEmpleado
     *
     * @return string 
     */
    public function getDescEmpleado()
    {
        return $this->descEmpleado;
    }

    /**
     * Set fechaPedido
     *
     * @param \DateTime $fechaPedido
     * @return OrdenCompra
     */
    public function setFechaPedido($fechaPedido)
    {
        $this->fechaPedido = $fechaPedido;

        return $this;
    }

    /**
     * Get fechaPedido
     *
     * @return \DateTime 
     */
    public function getFechaPedido()
    {
        return $this->fechaPedido;
    }

    /**
     * Set prometidoParafecha
     *
     * @param \DateTime $prometidoParafecha
     * @return OrdenCompra
     */
    public function setPrometidoParafecha($prometidoParafecha)
    {
        $this->prometidoParafecha = $prometidoParafecha;

        return $this;
    }

    /**
     * Get prometidoParafecha
     *
     * @return \DateTime 
     */
    public function getPrometidoParafecha()
    {
        return $this->prometidoParafecha;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return OrdenCompra
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
     * Set entregarA
     *
     * @param string $entregarA
     * @return OrdenCompra
     */
    public function setEntregarA($entregarA)
    {
        $this->entregarA = $entregarA;

        return $this;
    }

    /**
     * Get entregarA
     *
     * @return string 
     */
    public function getEntregarA()
    {
        return $this->entregarA;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return OrdenCompra
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
     * Set terminosEntrega
     *
     * @param string $terminosEntrega
     * @return OrdenCompra
     */
    public function setTerminosEntrega($terminosEntrega)
    {
        $this->terminosEntrega = $terminosEntrega;

        return $this;
    }

    /**
     * Get terminosEntrega
     *
     * @return string 
     */
    public function getTerminosEntrega()
    {
        return $this->terminosEntrega;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return OrdenCompra
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
     * Set importemn
     *
     * @param integer $importemn
     * @return OrdenCompra
     */
    public function setImportemn($importemn)
    {
        $this->importemn = $importemn;

        return $this;
    }

    /**
     * Get importemn
     *
     * @return integer 
     */
    public function getImportemn()
    {
        return $this->importemn;
    }

    /**
     * Set confirmada
     *
     * @param integer $confirmada
     * @return OrdenCompra
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
     * Set cerrada
     *
     * @param boolean $cerrada
     * @return OrdenCompra
     */
    public function setCerrada($cerrada)
    {
        $this->cerrada = $cerrada;

        return $this;
    }

    /**
     * Get cerrada
     *
     * @return boolean 
     */
    public function getCerrada()
    {
        return $this->cerrada;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return OrdenCompra
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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return OrdenCompra
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
     * Set moneda
     *
     * @param string $moneda
     * @return OrdenCompra
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
     * @return OrdenCompra
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
     * Set prefijooc
     *
     * @param string $prefijooc
     * @return OrdenCompra
     */
    public function setPrefijooc($prefijooc)
    {
        $this->prefijooc = $prefijooc;

        return $this;
    }

    /**
     * Get prefijooc
     *
     * @return string 
     */
    public function getPrefijooc()
    {
        return $this->prefijooc;
    }

    /**
     * Set contadoroc
     *
     * @param integer $contadoroc
     * @return OrdenCompra
     */
    public function setContadoroc($contadoroc)
    {
        $this->contadoroc = $contadoroc;

        return $this;
    }

    /**
     * Get contadoroc
     *
     * @return integer 
     */
    public function getContadoroc()
    {
        return $this->contadoroc;
    }

    /**
     * Set fechaDespacho
     *
     * @param \DateTime $fechaDespacho
     * @return OrdenCompra
     */
    public function setFechaDespacho($fechaDespacho)
    {
        $this->fechaDespacho = $fechaDespacho;

        return $this;
    }

    /**
     * Get fechaDespacho
     *
     * @return \DateTime 
     */
    public function getFechaDespacho()
    {
        return $this->fechaDespacho;
    }

    /**
     * Set condicionespago
     *
     * @param string $condicionespago
     * @return OrdenCompra
     */
    public function setCondicionespago($condicionespago)
    {
        $this->condicionespago = $condicionespago;

        return $this;
    }

    /**
     * Get condicionespago
     *
     * @return string 
     */
    public function getCondicionespago()
    {
        return $this->condicionespago;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return OrdenCompra
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
     * @return OrdenCompra
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
     * @return OrdenCompra
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
     * @return OrdenCompra
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
     * Set credito
     *
     * @param integer $credito
     * @return OrdenCompra
     */
    public function setCredito($credito)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito
     *
     * @return integer 
     */
    public function getCredito()
    {
        return $this->credito;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return OrdenCompra
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
     * Set impuestoprove
     *
     * @param integer $impuestoprove
     * @return OrdenCompra
     */
    public function setImpuestoprove($impuestoprove)
    {
        $this->impuestoprove = $impuestoprove;

        return $this;
    }

    /**
     * Get impuestoprove
     *
     * @return integer 
     */
    public function getImpuestoprove()
    {
        return $this->impuestoprove;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return OrdenCompra
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }

    /**
     * Set descCcosto
     *
     * @param string $descCcosto
     * @return OrdenCompra
     */
    public function setDescCcosto($descCcosto)
    {
        $this->descCcosto = $descCcosto;

        return $this;
    }

    /**
     * Get descCcosto
     *
     * @return string 
     */
    public function getDescCcosto()
    {
        return $this->descCcosto;
    }

    /**
     * Set aprobada
     *
     * @param boolean $aprobada
     * @return OrdenCompra
     */
    public function setAprobada($aprobada)
    {
        $this->aprobada = $aprobada;

        return $this;
    }

    /**
     * Get aprobada
     *
     * @return boolean 
     */
    public function getAprobada()
    {
        return $this->aprobada;
    }

    /**
     * Set genAuto
     *
     * @param boolean $genAuto
     * @return OrdenCompra
     */
    public function setGenAuto($genAuto)
    {
        $this->genAuto = $genAuto;

        return $this;
    }

    /**
     * Get genAuto
     *
     * @return boolean 
     */
    public function getGenAuto()
    {
        return $this->genAuto;
    }
}
