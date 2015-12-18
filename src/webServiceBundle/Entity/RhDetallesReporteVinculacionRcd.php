<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteVinculacionRcd
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Vinculacion_RCD", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Vinculacion_RCD", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteVinculacionRcd
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
     * @var string
     *
     * @ORM\Column(name="Id_Colectivo", type="string", length=5, nullable=false)
     */
    private $idColectivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=15, nullable=false)
     */
    private $idActividad;

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
     * @ORM\Column(name="Horas_Actividad", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Actividad", type="decimal", precision=12, scale=4, nullable=false)
     */
    private $cantidadActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa", type="integer", nullable=false)
     */
    private $tarifa;



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
     * @return RhDetallesReporteVinculacionRcd
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
     * @return RhDetallesReporteVinculacionRcd
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
     * @return RhDetallesReporteVinculacionRcd
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
     * @return RhDetallesReporteVinculacionRcd
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
     * Set idColectivo
     *
     * @param string $idColectivo
     * @return RhDetallesReporteVinculacionRcd
     */
    public function setIdColectivo($idColectivo)
    {
        $this->idColectivo = $idColectivo;

        return $this;
    }

    /**
     * Get idColectivo
     *
     * @return string 
     */
    public function getIdColectivo()
    {
        return $this->idColectivo;
    }

    /**
     * Set idActividad
     *
     * @param string $idActividad
     * @return RhDetallesReporteVinculacionRcd
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
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhDetallesReporteVinculacionRcd
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
     * @return RhDetallesReporteVinculacionRcd
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
     * Set horasActividad
     *
     * @param string $horasActividad
     * @return RhDetallesReporteVinculacionRcd
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
     * Set cantidadActividad
     *
     * @param string $cantidadActividad
     * @return RhDetallesReporteVinculacionRcd
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return RhDetallesReporteVinculacionRcd
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
     * Set tarifa
     *
     * @param integer $tarifa
     * @return RhDetallesReporteVinculacionRcd
     */
    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;

        return $this;
    }

    /**
     * Get tarifa
     *
     * @return integer 
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }
}
