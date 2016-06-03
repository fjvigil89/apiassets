<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleOtrabajolabor
 *
 * @ORM\Table(name="Detalle_OtrabajoLabor")
 * @ORM\Entity
 */
class DetalleOtrabajolabor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Otrabajo", type="integer", nullable=false)
     */
    private $idOtrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Otrabajo", type="smallint", nullable=false)
     */
    private $anoOtrabajo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Inicio", type="datetime", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hora_Inicio", type="datetime", nullable=false)
     */
    private $horaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Fin", type="datetime", nullable=false)
     */
    private $fechaFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hora_Fin", type="datetime", nullable=false)
     */
    private $horaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Actividad", type="string", length=100, nullable=false)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=60, nullable=false)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad_Horas", type="integer", nullable=false)
     */
    private $cantidadHoras;

    /**
     * @var string
     *
     * @ORM\Column(name="Empleado", type="string", length=50, nullable=false)
     */
    private $empleado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado", type="boolean", nullable=false)
     */
    private $cerrado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Prod", type="string", length=255, nullable=false)
     */
    private $descProd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrar", type="boolean", nullable=false)
     */
    private $cerrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="HorasPlan", type="integer", nullable=false)
     */
    private $horasplan;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=10, nullable=false)
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Etapa", type="string", length=50, nullable=false)
     */
    private $etapa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="smallint", nullable=false)
     */
    private $items;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Extra", type="boolean", nullable=false)
     */
    private $extra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CierreActividad", type="datetime", nullable=false)
     */
    private $cierreactividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Brigada", type="string", length=10, nullable=false)
     */
    private $idBrigada;



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
     * Set idOtrabajo
     *
     * @param integer $idOtrabajo
     * @return DetalleOtrabajolabor
     */
    public function setIdOtrabajo($idOtrabajo)
    {
        $this->idOtrabajo = $idOtrabajo;

        return $this;
    }

    /**
     * Get idOtrabajo
     *
     * @return integer 
     */
    public function getIdOtrabajo()
    {
        return $this->idOtrabajo;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetalleOtrabajolabor
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
     * Set anoOtrabajo
     *
     * @param integer $anoOtrabajo
     * @return DetalleOtrabajolabor
     */
    public function setAnoOtrabajo($anoOtrabajo)
    {
        $this->anoOtrabajo = $anoOtrabajo;

        return $this;
    }

    /**
     * Get anoOtrabajo
     *
     * @return integer 
     */
    public function getAnoOtrabajo()
    {
        return $this->anoOtrabajo;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return DetalleOtrabajolabor
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     * @return DetalleOtrabajolabor
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime 
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return DetalleOtrabajolabor
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set horaFin
     *
     * @param \DateTime $horaFin
     * @return DetalleOtrabajolabor
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;

        return $this;
    }

    /**
     * Get horaFin
     *
     * @return \DateTime 
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * Set actividad
     *
     * @param string $actividad
     * @return DetalleOtrabajolabor
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string 
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return DetalleOtrabajolabor
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
     * Set cantidadHoras
     *
     * @param integer $cantidadHoras
     * @return DetalleOtrabajolabor
     */
    public function setCantidadHoras($cantidadHoras)
    {
        $this->cantidadHoras = $cantidadHoras;

        return $this;
    }

    /**
     * Get cantidadHoras
     *
     * @return integer 
     */
    public function getCantidadHoras()
    {
        return $this->cantidadHoras;
    }

    /**
     * Set empleado
     *
     * @param string $empleado
     * @return DetalleOtrabajolabor
     */
    public function setEmpleado($empleado)
    {
        $this->empleado = $empleado;

        return $this;
    }

    /**
     * Get empleado
     *
     * @return string 
     */
    public function getEmpleado()
    {
        return $this->empleado;
    }

    /**
     * Set cerrado
     *
     * @param boolean $cerrado
     * @return DetalleOtrabajolabor
     */
    public function setCerrado($cerrado)
    {
        $this->cerrado = $cerrado;

        return $this;
    }

    /**
     * Get cerrado
     *
     * @return boolean 
     */
    public function getCerrado()
    {
        return $this->cerrado;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return DetalleOtrabajolabor
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return string 
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set descProd
     *
     * @param string $descProd
     * @return DetalleOtrabajolabor
     */
    public function setDescProd($descProd)
    {
        $this->descProd = $descProd;

        return $this;
    }

    /**
     * Get descProd
     *
     * @return string 
     */
    public function getDescProd()
    {
        return $this->descProd;
    }

    /**
     * Set cerrar
     *
     * @param boolean $cerrar
     * @return DetalleOtrabajolabor
     */
    public function setCerrar($cerrar)
    {
        $this->cerrar = $cerrar;

        return $this;
    }

    /**
     * Get cerrar
     *
     * @return boolean 
     */
    public function getCerrar()
    {
        return $this->cerrar;
    }

    /**
     * Set horasplan
     *
     * @param integer $horasplan
     * @return DetalleOtrabajolabor
     */
    public function setHorasplan($horasplan)
    {
        $this->horasplan = $horasplan;

        return $this;
    }

    /**
     * Get horasplan
     *
     * @return integer 
     */
    public function getHorasplan()
    {
        return $this->horasplan;
    }

    /**
     * Set idActividad
     *
     * @param string $idActividad
     * @return DetalleOtrabajolabor
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
     * Set etapa
     *
     * @param string $etapa
     * @return DetalleOtrabajolabor
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get etapa
     *
     * @return string 
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return DetalleOtrabajolabor
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get items
     *
     * @return integer 
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set extra
     *
     * @param boolean $extra
     * @return DetalleOtrabajolabor
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra
     *
     * @return boolean 
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Set cierreactividad
     *
     * @param \DateTime $cierreactividad
     * @return DetalleOtrabajolabor
     */
    public function setCierreactividad($cierreactividad)
    {
        $this->cierreactividad = $cierreactividad;

        return $this;
    }

    /**
     * Get cierreactividad
     *
     * @return \DateTime 
     */
    public function getCierreactividad()
    {
        return $this->cierreactividad;
    }

    /**
     * Set confirmada
     *
     * @param integer $confirmada
     * @return DetalleOtrabajolabor
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
     * Set idBrigada
     *
     * @param string $idBrigada
     * @return DetalleOtrabajolabor
     */
    public function setIdBrigada($idBrigada)
    {
        $this->idBrigada = $idBrigada;

        return $this;
    }

    /**
     * Get idBrigada
     *
     * @return string 
     */
    public function getIdBrigada()
    {
        return $this->idBrigada;
    }
}
