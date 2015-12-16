<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteSubsidios
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Subsidios", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Subsidios", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteSubsidios
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
     * @ORM\Column(name="Tipo", type="smallint", nullable=false)
     */
    private $tipo;

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
     * @ORM\Column(name="Id_Clave", type="string", length=5, nullable=false)
     */
    private $idClave;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porciento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Carencia", type="boolean", nullable=false)
     */
    private $carencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Naturales", type="decimal", precision=9, scale=4, nullable=false)
     */
    private $diasNaturales;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar", type="decimal", precision=9, scale=4, nullable=false)
     */
    private $diasAPagar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Promedio", type="integer", nullable=false)
     */
    private $promedio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Valido", type="datetime", nullable=false)
     */
    private $fechaValido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Pago", type="datetime", nullable=false)
     */
    private $fechaPago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Resolucion", type="datetime", nullable=false)
     */
    private $fechaResolucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Certificado", type="smallint", nullable=false)
     */
    private $tipoCertificado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Feriados_Periodo", type="smallint", nullable=false)
     */
    private $diasFeriadosPeriodo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Feriados_Adelantados", type="smallint", nullable=false)
     */
    private $diasFeriadosAdelantados;



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
     * @return RhDetallesReporteSubsidios
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
     * @return RhDetallesReporteSubsidios
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
     * @return RhDetallesReporteSubsidios
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
     * @return RhDetallesReporteSubsidios
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
     * Set tipo
     *
     * @param integer $tipo
     * @return RhDetallesReporteSubsidios
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhDetallesReporteSubsidios
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
     * @return RhDetallesReporteSubsidios
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
     * Set idClave
     *
     * @param string $idClave
     * @return RhDetallesReporteSubsidios
     */
    public function setIdClave($idClave)
    {
        $this->idClave = $idClave;

        return $this;
    }

    /**
     * Get idClave
     *
     * @return string 
     */
    public function getIdClave()
    {
        return $this->idClave;
    }

    /**
     * Set porciento
     *
     * @param string $porciento
     * @return RhDetallesReporteSubsidios
     */
    public function setPorciento($porciento)
    {
        $this->porciento = $porciento;

        return $this;
    }

    /**
     * Get porciento
     *
     * @return string 
     */
    public function getPorciento()
    {
        return $this->porciento;
    }

    /**
     * Set carencia
     *
     * @param boolean $carencia
     * @return RhDetallesReporteSubsidios
     */
    public function setCarencia($carencia)
    {
        $this->carencia = $carencia;

        return $this;
    }

    /**
     * Get carencia
     *
     * @return boolean 
     */
    public function getCarencia()
    {
        return $this->carencia;
    }

    /**
     * Set diasNaturales
     *
     * @param string $diasNaturales
     * @return RhDetallesReporteSubsidios
     */
    public function setDiasNaturales($diasNaturales)
    {
        $this->diasNaturales = $diasNaturales;

        return $this;
    }

    /**
     * Get diasNaturales
     *
     * @return string 
     */
    public function getDiasNaturales()
    {
        return $this->diasNaturales;
    }

    /**
     * Set diasAPagar
     *
     * @param string $diasAPagar
     * @return RhDetallesReporteSubsidios
     */
    public function setDiasAPagar($diasAPagar)
    {
        $this->diasAPagar = $diasAPagar;

        return $this;
    }

    /**
     * Get diasAPagar
     *
     * @return string 
     */
    public function getDiasAPagar()
    {
        return $this->diasAPagar;
    }

    /**
     * Set promedio
     *
     * @param integer $promedio
     * @return RhDetallesReporteSubsidios
     */
    public function setPromedio($promedio)
    {
        $this->promedio = $promedio;

        return $this;
    }

    /**
     * Get promedio
     *
     * @return integer 
     */
    public function getPromedio()
    {
        return $this->promedio;
    }

    /**
     * Set fechaValido
     *
     * @param \DateTime $fechaValido
     * @return RhDetallesReporteSubsidios
     */
    public function setFechaValido($fechaValido)
    {
        $this->fechaValido = $fechaValido;

        return $this;
    }

    /**
     * Get fechaValido
     *
     * @return \DateTime 
     */
    public function getFechaValido()
    {
        return $this->fechaValido;
    }

    /**
     * Set fechaPago
     *
     * @param \DateTime $fechaPago
     * @return RhDetallesReporteSubsidios
     */
    public function setFechaPago($fechaPago)
    {
        $this->fechaPago = $fechaPago;

        return $this;
    }

    /**
     * Get fechaPago
     *
     * @return \DateTime 
     */
    public function getFechaPago()
    {
        return $this->fechaPago;
    }

    /**
     * Set fechaResolucion
     *
     * @param \DateTime $fechaResolucion
     * @return RhDetallesReporteSubsidios
     */
    public function setFechaResolucion($fechaResolucion)
    {
        $this->fechaResolucion = $fechaResolucion;

        return $this;
    }

    /**
     * Get fechaResolucion
     *
     * @return \DateTime 
     */
    public function getFechaResolucion()
    {
        return $this->fechaResolucion;
    }

    /**
     * Set tipoCertificado
     *
     * @param integer $tipoCertificado
     * @return RhDetallesReporteSubsidios
     */
    public function setTipoCertificado($tipoCertificado)
    {
        $this->tipoCertificado = $tipoCertificado;

        return $this;
    }

    /**
     * Get tipoCertificado
     *
     * @return integer 
     */
    public function getTipoCertificado()
    {
        return $this->tipoCertificado;
    }

    /**
     * Set diasFeriadosPeriodo
     *
     * @param integer $diasFeriadosPeriodo
     * @return RhDetallesReporteSubsidios
     */
    public function setDiasFeriadosPeriodo($diasFeriadosPeriodo)
    {
        $this->diasFeriadosPeriodo = $diasFeriadosPeriodo;

        return $this;
    }

    /**
     * Get diasFeriadosPeriodo
     *
     * @return integer 
     */
    public function getDiasFeriadosPeriodo()
    {
        return $this->diasFeriadosPeriodo;
    }

    /**
     * Set diasFeriadosAdelantados
     *
     * @param integer $diasFeriadosAdelantados
     * @return RhDetallesReporteSubsidios
     */
    public function setDiasFeriadosAdelantados($diasFeriadosAdelantados)
    {
        $this->diasFeriadosAdelantados = $diasFeriadosAdelantados;

        return $this;
    }

    /**
     * Get diasFeriadosAdelantados
     *
     * @return integer 
     */
    public function getDiasFeriadosAdelantados()
    {
        return $this->diasFeriadosAdelantados;
    }
}
