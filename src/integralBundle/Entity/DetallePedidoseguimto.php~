<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetallePedidoseguimto
 *
 * @ORM\Table(name="Detalle_PedidoSeguimto")
 * @ORM\Entity
 */
class DetallePedidoseguimto
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
     * @var string
     *
     * @ORM\Column(name="Actividad", type="string", length=255, nullable=false)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Responsable", type="string", length=50, nullable=false)
     */
    private $responsable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Plan", type="datetime", nullable=false)
     */
    private $fechaPlan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Real", type="datetime", nullable=false)
     */
    private $fechaReal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cumplido", type="boolean", nullable=false)
     */
    private $cumplido;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cancelado", type="boolean", nullable=false)
     */
    private $cancelado;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=255, nullable=false)
     */
    private $nota;



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
     * Set actividad
     *
     * @param string $actividad
     * @return DetallePedidoseguimto
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
     * Set responsable
     *
     * @param string $responsable
     * @return DetallePedidoseguimto
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set fechaPlan
     *
     * @param \DateTime $fechaPlan
     * @return DetallePedidoseguimto
     */
    public function setFechaPlan($fechaPlan)
    {
        $this->fechaPlan = $fechaPlan;

        return $this;
    }

    /**
     * Get fechaPlan
     *
     * @return \DateTime 
     */
    public function getFechaPlan()
    {
        return $this->fechaPlan;
    }

    /**
     * Set fechaReal
     *
     * @param \DateTime $fechaReal
     * @return DetallePedidoseguimto
     */
    public function setFechaReal($fechaReal)
    {
        $this->fechaReal = $fechaReal;

        return $this;
    }

    /**
     * Get fechaReal
     *
     * @return \DateTime 
     */
    public function getFechaReal()
    {
        return $this->fechaReal;
    }

    /**
     * Set cumplido
     *
     * @param boolean $cumplido
     * @return DetallePedidoseguimto
     */
    public function setCumplido($cumplido)
    {
        $this->cumplido = $cumplido;

        return $this;
    }

    /**
     * Get cumplido
     *
     * @return boolean 
     */
    public function getCumplido()
    {
        return $this->cumplido;
    }

    /**
     * Set cancelado
     *
     * @param boolean $cancelado
     * @return DetallePedidoseguimto
     */
    public function setCancelado($cancelado)
    {
        $this->cancelado = $cancelado;

        return $this;
    }

    /**
     * Get cancelado
     *
     * @return boolean 
     */
    public function getCancelado()
    {
        return $this->cancelado;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return DetallePedidoseguimto
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
}
