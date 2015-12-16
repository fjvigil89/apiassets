<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteVinculacionOtAn
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Vinculacion_OT_AN", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Vinculacion_OT_AN", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteVinculacionOtAn
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
     * @ORM\Column(name="Id_Actividad", type="string", length=15, nullable=false)
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Actividad", type="string", length=100, nullable=false)
     */
    private $descActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="UM", type="string", length=10, nullable=false)
     */
    private $um;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $tasa;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Norma", type="string", length=1, nullable=false)
     */
    private $tipoNorma;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Actividad", type="decimal", precision=12, scale=4, nullable=false)
     */
    private $cantidadActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Actividad", type="integer", nullable=false)
     */
    private $devengadoActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Actividad", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Otros", type="integer", nullable=false)
     */
    private $devengadoOtros;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Multioficio", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasMultioficio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Multioficio", type="integer", nullable=false)
     */
    private $devengadoMultioficio;

    /**
     * @var string
     *
     * @ORM\Column(name="CumplimNorma", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $cumplimnorma;

    /**
     * @var string
     *
     * @ORM\Column(name="PagoSobrecumplim", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $pagosobrecumplim;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Basico", type="integer", nullable=false)
     */
    private $salarioBasico;

    /**
     * @var string
     *
     * @ORM\Column(name="IddeOrdendeTrabajo", type="string", length=25, nullable=false)
     */
    private $iddeordendetrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Adelantadas", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasAdelantadas;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Interrupto", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasInterrupto;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Tasadas", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasTasadas;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Real_Trabajadas", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasRealTrabajadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Horas_Adelantadas", type="integer", nullable=false)
     */
    private $tarifaHorasAdelantadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Horas_Vinculacion", type="integer", nullable=false)
     */
    private $tarifaHorasVinculacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Interrupcion", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoInterrupcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Importe_Tasado", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoImporteTasado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Horas_Adelantadas", type="integer", nullable=false)
     */
    private $devengadoHorasAdelantadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Horas_Interrupcion", type="integer", nullable=false)
     */
    private $devengadoHorasInterrupcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Horas_Tasadas", type="integer", nullable=false)
     */
    private $devengadoHorasTasadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Total_Devengado", type="integer", nullable=false)
     */
    private $totalDevengado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;



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
     * @return RhDetallesReporteVinculacionOtAn
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
     * @return RhDetallesReporteVinculacionOtAn
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
     * @return RhDetallesReporteVinculacionOtAn
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
     * @return RhDetallesReporteVinculacionOtAn
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
     * @return RhDetallesReporteVinculacionOtAn
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
     * @return RhDetallesReporteVinculacionOtAn
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
     * @return RhDetallesReporteVinculacionOtAn
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
     * Set idActividad
     *
     * @param string $idActividad
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setIdActividad($idActividad)
    {
        $this->idActividad = $idActividad;

        return $this;
    }

    /**
     * Get idActividad
     *
     * @return string 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set descActividad
     *
     * @param string $descActividad
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setDescActividad($descActividad)
    {
        $this->descActividad = $descActividad;

        return $this;
    }

    /**
     * Get descActividad
     *
     * @return string 
     */
    public function getDescActividad()
    {
        return $this->descActividad;
    }

    /**
     * Set um
     *
     * @param string $um
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setUm($um)
    {
        $this->um = $um;

        return $this;
    }

    /**
     * Get um
     *
     * @return string 
     */
    public function getUm()
    {
        return $this->um;
    }

    /**
     * Set tasa
     *
     * @param string $tasa
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setTasa($tasa)
    {
        $this->tasa = $tasa;

        return $this;
    }

    /**
     * Get tasa
     *
     * @return string 
     */
    public function getTasa()
    {
        return $this->tasa;
    }

    /**
     * Set tipoNorma
     *
     * @param string $tipoNorma
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setTipoNorma($tipoNorma)
    {
        $this->tipoNorma = $tipoNorma;

        return $this;
    }

    /**
     * Get tipoNorma
     *
     * @return string 
     */
    public function getTipoNorma()
    {
        return $this->tipoNorma;
    }

    /**
     * Set cantidadActividad
     *
     * @param string $cantidadActividad
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setCantidadActividad($cantidadActividad)
    {
        $this->cantidadActividad = $cantidadActividad;

        return $this;
    }

    /**
     * Get cantidadActividad
     *
     * @return string 
     */
    public function getCantidadActividad()
    {
        return $this->cantidadActividad;
    }

    /**
     * Set devengadoActividad
     *
     * @param integer $devengadoActividad
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setDevengadoActividad($devengadoActividad)
    {
        $this->devengadoActividad = $devengadoActividad;

        return $this;
    }

    /**
     * Get devengadoActividad
     *
     * @return integer 
     */
    public function getDevengadoActividad()
    {
        return $this->devengadoActividad;
    }

    /**
     * Set horasActividad
     *
     * @param string $horasActividad
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setHorasActividad($horasActividad)
    {
        $this->horasActividad = $horasActividad;

        return $this;
    }

    /**
     * Get horasActividad
     *
     * @return string 
     */
    public function getHorasActividad()
    {
        return $this->horasActividad;
    }

    /**
     * Set devengadoOtros
     *
     * @param integer $devengadoOtros
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setDevengadoOtros($devengadoOtros)
    {
        $this->devengadoOtros = $devengadoOtros;

        return $this;
    }

    /**
     * Get devengadoOtros
     *
     * @return integer 
     */
    public function getDevengadoOtros()
    {
        return $this->devengadoOtros;
    }

    /**
     * Set horasMultioficio
     *
     * @param string $horasMultioficio
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setHorasMultioficio($horasMultioficio)
    {
        $this->horasMultioficio = $horasMultioficio;

        return $this;
    }

    /**
     * Get horasMultioficio
     *
     * @return string 
     */
    public function getHorasMultioficio()
    {
        return $this->horasMultioficio;
    }

    /**
     * Set devengadoMultioficio
     *
     * @param integer $devengadoMultioficio
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setDevengadoMultioficio($devengadoMultioficio)
    {
        $this->devengadoMultioficio = $devengadoMultioficio;

        return $this;
    }

    /**
     * Get devengadoMultioficio
     *
     * @return integer 
     */
    public function getDevengadoMultioficio()
    {
        return $this->devengadoMultioficio;
    }

    /**
     * Set cumplimnorma
     *
     * @param string $cumplimnorma
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setCumplimnorma($cumplimnorma)
    {
        $this->cumplimnorma = $cumplimnorma;

        return $this;
    }

    /**
     * Get cumplimnorma
     *
     * @return string 
     */
    public function getCumplimnorma()
    {
        return $this->cumplimnorma;
    }

    /**
     * Set pagosobrecumplim
     *
     * @param string $pagosobrecumplim
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setPagosobrecumplim($pagosobrecumplim)
    {
        $this->pagosobrecumplim = $pagosobrecumplim;

        return $this;
    }

    /**
     * Get pagosobrecumplim
     *
     * @return string 
     */
    public function getPagosobrecumplim()
    {
        return $this->pagosobrecumplim;
    }

    /**
     * Set salarioBasico
     *
     * @param integer $salarioBasico
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setSalarioBasico($salarioBasico)
    {
        $this->salarioBasico = $salarioBasico;

        return $this;
    }

    /**
     * Get salarioBasico
     *
     * @return integer 
     */
    public function getSalarioBasico()
    {
        return $this->salarioBasico;
    }

    /**
     * Set iddeordendetrabajo
     *
     * @param string $iddeordendetrabajo
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setIddeordendetrabajo($iddeordendetrabajo)
    {
        $this->iddeordendetrabajo = $iddeordendetrabajo;

        return $this;
    }

    /**
     * Get iddeordendetrabajo
     *
     * @return string 
     */
    public function getIddeordendetrabajo()
    {
        return $this->iddeordendetrabajo;
    }

    /**
     * Set horasAdelantadas
     *
     * @param string $horasAdelantadas
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setHorasAdelantadas($horasAdelantadas)
    {
        $this->horasAdelantadas = $horasAdelantadas;

        return $this;
    }

    /**
     * Get horasAdelantadas
     *
     * @return string 
     */
    public function getHorasAdelantadas()
    {
        return $this->horasAdelantadas;
    }

    /**
     * Set horasInterrupto
     *
     * @param string $horasInterrupto
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setHorasInterrupto($horasInterrupto)
    {
        $this->horasInterrupto = $horasInterrupto;

        return $this;
    }

    /**
     * Get horasInterrupto
     *
     * @return string 
     */
    public function getHorasInterrupto()
    {
        return $this->horasInterrupto;
    }

    /**
     * Set horasTasadas
     *
     * @param string $horasTasadas
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setHorasTasadas($horasTasadas)
    {
        $this->horasTasadas = $horasTasadas;

        return $this;
    }

    /**
     * Get horasTasadas
     *
     * @return string 
     */
    public function getHorasTasadas()
    {
        return $this->horasTasadas;
    }

    /**
     * Set horasRealTrabajadas
     *
     * @param string $horasRealTrabajadas
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setHorasRealTrabajadas($horasRealTrabajadas)
    {
        $this->horasRealTrabajadas = $horasRealTrabajadas;

        return $this;
    }

    /**
     * Get horasRealTrabajadas
     *
     * @return string 
     */
    public function getHorasRealTrabajadas()
    {
        return $this->horasRealTrabajadas;
    }

    /**
     * Set tarifaHorasAdelantadas
     *
     * @param integer $tarifaHorasAdelantadas
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setTarifaHorasAdelantadas($tarifaHorasAdelantadas)
    {
        $this->tarifaHorasAdelantadas = $tarifaHorasAdelantadas;

        return $this;
    }

    /**
     * Get tarifaHorasAdelantadas
     *
     * @return integer 
     */
    public function getTarifaHorasAdelantadas()
    {
        return $this->tarifaHorasAdelantadas;
    }

    /**
     * Set tarifaHorasVinculacion
     *
     * @param integer $tarifaHorasVinculacion
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setTarifaHorasVinculacion($tarifaHorasVinculacion)
    {
        $this->tarifaHorasVinculacion = $tarifaHorasVinculacion;

        return $this;
    }

    /**
     * Get tarifaHorasVinculacion
     *
     * @return integer 
     */
    public function getTarifaHorasVinculacion()
    {
        return $this->tarifaHorasVinculacion;
    }

    /**
     * Set porcientoInterrupcion
     *
     * @param string $porcientoInterrupcion
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setPorcientoInterrupcion($porcientoInterrupcion)
    {
        $this->porcientoInterrupcion = $porcientoInterrupcion;

        return $this;
    }

    /**
     * Get porcientoInterrupcion
     *
     * @return string 
     */
    public function getPorcientoInterrupcion()
    {
        return $this->porcientoInterrupcion;
    }

    /**
     * Set porcientoImporteTasado
     *
     * @param string $porcientoImporteTasado
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setPorcientoImporteTasado($porcientoImporteTasado)
    {
        $this->porcientoImporteTasado = $porcientoImporteTasado;

        return $this;
    }

    /**
     * Get porcientoImporteTasado
     *
     * @return string 
     */
    public function getPorcientoImporteTasado()
    {
        return $this->porcientoImporteTasado;
    }

    /**
     * Set devengadoHorasAdelantadas
     *
     * @param integer $devengadoHorasAdelantadas
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setDevengadoHorasAdelantadas($devengadoHorasAdelantadas)
    {
        $this->devengadoHorasAdelantadas = $devengadoHorasAdelantadas;

        return $this;
    }

    /**
     * Get devengadoHorasAdelantadas
     *
     * @return integer 
     */
    public function getDevengadoHorasAdelantadas()
    {
        return $this->devengadoHorasAdelantadas;
    }

    /**
     * Set devengadoHorasInterrupcion
     *
     * @param integer $devengadoHorasInterrupcion
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setDevengadoHorasInterrupcion($devengadoHorasInterrupcion)
    {
        $this->devengadoHorasInterrupcion = $devengadoHorasInterrupcion;

        return $this;
    }

    /**
     * Get devengadoHorasInterrupcion
     *
     * @return integer 
     */
    public function getDevengadoHorasInterrupcion()
    {
        return $this->devengadoHorasInterrupcion;
    }

    /**
     * Set devengadoHorasTasadas
     *
     * @param integer $devengadoHorasTasadas
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setDevengadoHorasTasadas($devengadoHorasTasadas)
    {
        $this->devengadoHorasTasadas = $devengadoHorasTasadas;

        return $this;
    }

    /**
     * Get devengadoHorasTasadas
     *
     * @return integer 
     */
    public function getDevengadoHorasTasadas()
    {
        return $this->devengadoHorasTasadas;
    }

    /**
     * Set totalDevengado
     *
     * @param integer $totalDevengado
     * @return RhDetallesReporteVinculacionOtAn
     */
    public function setTotalDevengado($totalDevengado)
    {
        $this->totalDevengado = $totalDevengado;

        return $this;
    }

    /**
     * Get totalDevengado
     *
     * @return integer 
     */
    public function getTotalDevengado()
    {
        return $this->totalDevengado;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return RhDetallesReporteVinculacionOtAn
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
}
