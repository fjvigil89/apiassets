<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteReintegros
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Reintegros", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Reintegros", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteReintegros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     */
    private $tipoPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Nomina", type="smallint", nullable=false)
     */
    private $tipoNomina;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Reintegro", type="smallint", nullable=false)
     */
    private $tipoReintegro;

    /**
     * @var integer
     *
     * @ORM\Column(name="AnoNomina", type="smallint", nullable=false)
     */
    private $anonomina;

    /**
     * @var integer
     *
     * @ORM\Column(name="MesNomina", type="smallint", nullable=false)
     */
    private $mesnomina;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_PagoNomina", type="smallint", nullable=false)
     */
    private $tipoPagonomina;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=152, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Reintegrar", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $cantidadReintegrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Reintegrar", type="integer", nullable=false)
     */
    private $salarioReintegrar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaNomina", type="datetime", nullable=false)
     */
    private $fechanomina;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Nomina", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $cantidadNomina;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Nomina", type="integer", nullable=false)
     */
    private $devengadoNomina;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cuenta_por_Cobrar", type="boolean", nullable=false)
     */
    private $cuentaPorCobrar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Presupuesto_Estado", type="boolean", nullable=false)
     */
    private $presupuestoEstado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Presupuesto_Estado_Tmp", type="boolean", nullable=false)
     */
    private $presupuestoEstadoTmp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tarjeta", type="boolean", nullable=false)
     */
    private $tarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Extras", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $horasExtras;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Factura", type="smallint", nullable=false)
     */
    private $anoFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Factura", type="integer", nullable=false)
     */
    private $idFactura;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Devolucion_Confirmada", type="boolean", nullable=false)
     */
    private $devolucionConfirmada;



    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return RhDetallesReporteReintegros
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
     * Set ano
     *
     * @param integer $ano
     * @return RhDetallesReporteReintegros
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return RhDetallesReporteReintegros
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set tipoPago
     *
     * @param integer $tipoPago
     * @return RhDetallesReporteReintegros
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;

        return $this;
    }

    /**
     * Get tipoPago
     *
     * @return integer 
     */
    public function getTipoPago()
    {
        return $this->tipoPago;
    }

    /**
     * Set tipoNomina
     *
     * @param integer $tipoNomina
     * @return RhDetallesReporteReintegros
     */
    public function setTipoNomina($tipoNomina)
    {
        $this->tipoNomina = $tipoNomina;

        return $this;
    }

    /**
     * Get tipoNomina
     *
     * @return integer 
     */
    public function getTipoNomina()
    {
        return $this->tipoNomina;
    }

    /**
     * Set tipoReintegro
     *
     * @param integer $tipoReintegro
     * @return RhDetallesReporteReintegros
     */
    public function setTipoReintegro($tipoReintegro)
    {
        $this->tipoReintegro = $tipoReintegro;

        return $this;
    }

    /**
     * Get tipoReintegro
     *
     * @return integer 
     */
    public function getTipoReintegro()
    {
        return $this->tipoReintegro;
    }

    /**
     * Set anonomina
     *
     * @param integer $anonomina
     * @return RhDetallesReporteReintegros
     */
    public function setAnonomina($anonomina)
    {
        $this->anonomina = $anonomina;

        return $this;
    }

    /**
     * Get anonomina
     *
     * @return integer 
     */
    public function getAnonomina()
    {
        return $this->anonomina;
    }

    /**
     * Set mesnomina
     *
     * @param integer $mesnomina
     * @return RhDetallesReporteReintegros
     */
    public function setMesnomina($mesnomina)
    {
        $this->mesnomina = $mesnomina;

        return $this;
    }

    /**
     * Get mesnomina
     *
     * @return integer 
     */
    public function getMesnomina()
    {
        return $this->mesnomina;
    }

    /**
     * Set tipoPagonomina
     *
     * @param integer $tipoPagonomina
     * @return RhDetallesReporteReintegros
     */
    public function setTipoPagonomina($tipoPagonomina)
    {
        $this->tipoPagonomina = $tipoPagonomina;

        return $this;
    }

    /**
     * Get tipoPagonomina
     *
     * @return integer 
     */
    public function getTipoPagonomina()
    {
        return $this->tipoPagonomina;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhDetallesReporteReintegros
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return RhDetallesReporteReintegros
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
     * Set cantidadReintegrar
     *
     * @param string $cantidadReintegrar
     * @return RhDetallesReporteReintegros
     */
    public function setCantidadReintegrar($cantidadReintegrar)
    {
        $this->cantidadReintegrar = $cantidadReintegrar;

        return $this;
    }

    /**
     * Get cantidadReintegrar
     *
     * @return string 
     */
    public function getCantidadReintegrar()
    {
        return $this->cantidadReintegrar;
    }

    /**
     * Set salarioReintegrar
     *
     * @param integer $salarioReintegrar
     * @return RhDetallesReporteReintegros
     */
    public function setSalarioReintegrar($salarioReintegrar)
    {
        $this->salarioReintegrar = $salarioReintegrar;

        return $this;
    }

    /**
     * Get salarioReintegrar
     *
     * @return integer 
     */
    public function getSalarioReintegrar()
    {
        return $this->salarioReintegrar;
    }

    /**
     * Set fechanomina
     *
     * @param \DateTime $fechanomina
     * @return RhDetallesReporteReintegros
     */
    public function setFechanomina($fechanomina)
    {
        $this->fechanomina = $fechanomina;

        return $this;
    }

    /**
     * Get fechanomina
     *
     * @return \DateTime 
     */
    public function getFechanomina()
    {
        return $this->fechanomina;
    }

    /**
     * Set cantidadNomina
     *
     * @param string $cantidadNomina
     * @return RhDetallesReporteReintegros
     */
    public function setCantidadNomina($cantidadNomina)
    {
        $this->cantidadNomina = $cantidadNomina;

        return $this;
    }

    /**
     * Get cantidadNomina
     *
     * @return string 
     */
    public function getCantidadNomina()
    {
        return $this->cantidadNomina;
    }

    /**
     * Set devengadoNomina
     *
     * @param integer $devengadoNomina
     * @return RhDetallesReporteReintegros
     */
    public function setDevengadoNomina($devengadoNomina)
    {
        $this->devengadoNomina = $devengadoNomina;

        return $this;
    }

    /**
     * Get devengadoNomina
     *
     * @return integer 
     */
    public function getDevengadoNomina()
    {
        return $this->devengadoNomina;
    }

    /**
     * Set cuentaPorCobrar
     *
     * @param boolean $cuentaPorCobrar
     * @return RhDetallesReporteReintegros
     */
    public function setCuentaPorCobrar($cuentaPorCobrar)
    {
        $this->cuentaPorCobrar = $cuentaPorCobrar;

        return $this;
    }

    /**
     * Get cuentaPorCobrar
     *
     * @return boolean 
     */
    public function getCuentaPorCobrar()
    {
        return $this->cuentaPorCobrar;
    }

    /**
     * Set presupuestoEstado
     *
     * @param boolean $presupuestoEstado
     * @return RhDetallesReporteReintegros
     */
    public function setPresupuestoEstado($presupuestoEstado)
    {
        $this->presupuestoEstado = $presupuestoEstado;

        return $this;
    }

    /**
     * Get presupuestoEstado
     *
     * @return boolean 
     */
    public function getPresupuestoEstado()
    {
        return $this->presupuestoEstado;
    }

    /**
     * Set presupuestoEstadoTmp
     *
     * @param boolean $presupuestoEstadoTmp
     * @return RhDetallesReporteReintegros
     */
    public function setPresupuestoEstadoTmp($presupuestoEstadoTmp)
    {
        $this->presupuestoEstadoTmp = $presupuestoEstadoTmp;

        return $this;
    }

    /**
     * Get presupuestoEstadoTmp
     *
     * @return boolean 
     */
    public function getPresupuestoEstadoTmp()
    {
        return $this->presupuestoEstadoTmp;
    }

    /**
     * Set tarjeta
     *
     * @param boolean $tarjeta
     * @return RhDetallesReporteReintegros
     */
    public function setTarjeta($tarjeta)
    {
        $this->tarjeta = $tarjeta;

        return $this;
    }

    /**
     * Get tarjeta
     *
     * @return boolean 
     */
    public function getTarjeta()
    {
        return $this->tarjeta;
    }

    /**
     * Set horasExtras
     *
     * @param string $horasExtras
     * @return RhDetallesReporteReintegros
     */
    public function setHorasExtras($horasExtras)
    {
        $this->horasExtras = $horasExtras;

        return $this;
    }

    /**
     * Get horasExtras
     *
     * @return string 
     */
    public function getHorasExtras()
    {
        return $this->horasExtras;
    }

    /**
     * Set anoFactura
     *
     * @param integer $anoFactura
     * @return RhDetallesReporteReintegros
     */
    public function setAnoFactura($anoFactura)
    {
        $this->anoFactura = $anoFactura;

        return $this;
    }

    /**
     * Get anoFactura
     *
     * @return integer 
     */
    public function getAnoFactura()
    {
        return $this->anoFactura;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return RhDetallesReporteReintegros
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
     * Set idFactura
     *
     * @param integer $idFactura
     * @return RhDetallesReporteReintegros
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
     * Set devolucionConfirmada
     *
     * @param boolean $devolucionConfirmada
     * @return RhDetallesReporteReintegros
     */
    public function setDevolucionConfirmada($devolucionConfirmada)
    {
        $this->devolucionConfirmada = $devolucionConfirmada;

        return $this;
    }

    /**
     * Get devolucionConfirmada
     *
     * @return boolean 
     */
    public function getDevolucionConfirmada()
    {
        return $this->devolucionConfirmada;
    }
}
