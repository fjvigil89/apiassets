<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteVacaciones
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Vacaciones", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Vacaciones", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteVacaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
     * @ORM\Column(name="Dias_Acumulado", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAcumulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado", type="integer", nullable=false)
     */
    private $salarioAcumulado;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Solicitados_Periodo", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasSolicitadosPeriodo;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Solicitados_Adelantados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasSolicitadosAdelantados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Solicitados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasSolicitados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Pagados_Periodo", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasPagadosPeriodo;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Pagados_Adelantados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasPagadosAdelantados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Pagados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasPagados;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Liquidacion", type="boolean", nullable=false)
     */
    private $liquidacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=false)
     */
    private $idDireccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Origen", type="smallint", nullable=false)
     */
    private $origen;

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
     * Set item
     *
     * @param integer $item
     * @return RhDetallesReporteVacaciones
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

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
     * @return RhDetallesReporteVacaciones
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
     * @return RhDetallesReporteVacaciones
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
     * @return RhDetallesReporteVacaciones
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
     * @return RhDetallesReporteVacaciones
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
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhDetallesReporteVacaciones
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
     * @return RhDetallesReporteVacaciones
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
     * Set diasAcumulado
     *
     * @param string $diasAcumulado
     * @return RhDetallesReporteVacaciones
     */
    public function setDiasAcumulado($diasAcumulado)
    {
        $this->diasAcumulado = $diasAcumulado;

        return $this;
    }

    /**
     * Get diasAcumulado
     *
     * @return string 
     */
    public function getDiasAcumulado()
    {
        return $this->diasAcumulado;
    }

    /**
     * Set salarioAcumulado
     *
     * @param integer $salarioAcumulado
     * @return RhDetallesReporteVacaciones
     */
    public function setSalarioAcumulado($salarioAcumulado)
    {
        $this->salarioAcumulado = $salarioAcumulado;

        return $this;
    }

    /**
     * Get salarioAcumulado
     *
     * @return integer 
     */
    public function getSalarioAcumulado()
    {
        return $this->salarioAcumulado;
    }

    /**
     * Set diasSolicitadosPeriodo
     *
     * @param string $diasSolicitadosPeriodo
     * @return RhDetallesReporteVacaciones
     */
    public function setDiasSolicitadosPeriodo($diasSolicitadosPeriodo)
    {
        $this->diasSolicitadosPeriodo = $diasSolicitadosPeriodo;

        return $this;
    }

    /**
     * Get diasSolicitadosPeriodo
     *
     * @return string 
     */
    public function getDiasSolicitadosPeriodo()
    {
        return $this->diasSolicitadosPeriodo;
    }

    /**
     * Set diasSolicitadosAdelantados
     *
     * @param string $diasSolicitadosAdelantados
     * @return RhDetallesReporteVacaciones
     */
    public function setDiasSolicitadosAdelantados($diasSolicitadosAdelantados)
    {
        $this->diasSolicitadosAdelantados = $diasSolicitadosAdelantados;

        return $this;
    }

    /**
     * Get diasSolicitadosAdelantados
     *
     * @return string 
     */
    public function getDiasSolicitadosAdelantados()
    {
        return $this->diasSolicitadosAdelantados;
    }

    /**
     * Set diasSolicitados
     *
     * @param string $diasSolicitados
     * @return RhDetallesReporteVacaciones
     */
    public function setDiasSolicitados($diasSolicitados)
    {
        $this->diasSolicitados = $diasSolicitados;

        return $this;
    }

    /**
     * Get diasSolicitados
     *
     * @return string 
     */
    public function getDiasSolicitados()
    {
        return $this->diasSolicitados;
    }

    /**
     * Set diasPagadosPeriodo
     *
     * @param string $diasPagadosPeriodo
     * @return RhDetallesReporteVacaciones
     */
    public function setDiasPagadosPeriodo($diasPagadosPeriodo)
    {
        $this->diasPagadosPeriodo = $diasPagadosPeriodo;

        return $this;
    }

    /**
     * Get diasPagadosPeriodo
     *
     * @return string 
     */
    public function getDiasPagadosPeriodo()
    {
        return $this->diasPagadosPeriodo;
    }

    /**
     * Set diasPagadosAdelantados
     *
     * @param string $diasPagadosAdelantados
     * @return RhDetallesReporteVacaciones
     */
    public function setDiasPagadosAdelantados($diasPagadosAdelantados)
    {
        $this->diasPagadosAdelantados = $diasPagadosAdelantados;

        return $this;
    }

    /**
     * Get diasPagadosAdelantados
     *
     * @return string 
     */
    public function getDiasPagadosAdelantados()
    {
        return $this->diasPagadosAdelantados;
    }

    /**
     * Set diasPagados
     *
     * @param string $diasPagados
     * @return RhDetallesReporteVacaciones
     */
    public function setDiasPagados($diasPagados)
    {
        $this->diasPagados = $diasPagados;

        return $this;
    }

    /**
     * Get diasPagados
     *
     * @return string 
     */
    public function getDiasPagados()
    {
        return $this->diasPagados;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return RhDetallesReporteVacaciones
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
     * Set liquidacion
     *
     * @param boolean $liquidacion
     * @return RhDetallesReporteVacaciones
     */
    public function setLiquidacion($liquidacion)
    {
        $this->liquidacion = $liquidacion;

        return $this;
    }

    /**
     * Get liquidacion
     *
     * @return boolean 
     */
    public function getLiquidacion()
    {
        return $this->liquidacion;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return RhDetallesReporteVacaciones
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set idDireccion
     *
     * @param string $idDireccion
     * @return RhDetallesReporteVacaciones
     */
    public function setIdDireccion($idDireccion)
    {
        $this->idDireccion = $idDireccion;

        return $this;
    }

    /**
     * Get idDireccion
     *
     * @return string 
     */
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }

    /**
     * Set origen
     *
     * @param integer $origen
     * @return RhDetallesReporteVacaciones
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen
     *
     * @return integer 
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set diasFeriadosPeriodo
     *
     * @param integer $diasFeriadosPeriodo
     * @return RhDetallesReporteVacaciones
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
     * @return RhDetallesReporteVacaciones
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
