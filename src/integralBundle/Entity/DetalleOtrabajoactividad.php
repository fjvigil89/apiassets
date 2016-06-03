<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleOtrabajoactividad
 *
 * @ORM\Table(name="Detalle_OtrabajoActividad")
 * @ORM\Entity
 */
class DetalleOtrabajoactividad
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
     * @ORM\Column(name="Id_Actividad", type="string", length=10, nullable=false)
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Actividad", type="string", length=60, nullable=false)
     */
    private $descActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="HorasPlan", type="integer", nullable=false)
     */
    private $horasplan;

    /**
     * @var boolean
     *
     * @ORM\Column(name="FacturarReal", type="boolean", nullable=false)
     */
    private $facturarreal;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=255, nullable=false)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="HorasReal", type="integer", nullable=false)
     */
    private $horasreal;



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
     * Set idActividad
     *
     * @param string $idActividad
     * @return DetalleOtrabajoactividad
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
     * @return DetalleOtrabajoactividad
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
     * Set horasplan
     *
     * @param integer $horasplan
     * @return DetalleOtrabajoactividad
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
     * Set facturarreal
     *
     * @param boolean $facturarreal
     * @return DetalleOtrabajoactividad
     */
    public function setFacturarreal($facturarreal)
    {
        $this->facturarreal = $facturarreal;

        return $this;
    }

    /**
     * Get facturarreal
     *
     * @return boolean 
     */
    public function getFacturarreal()
    {
        return $this->facturarreal;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return DetalleOtrabajoactividad
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
     * Set horasreal
     *
     * @param integer $horasreal
     * @return DetalleOtrabajoactividad
     */
    public function setHorasreal($horasreal)
    {
        $this->horasreal = $horasreal;

        return $this;
    }

    /**
     * Get horasreal
     *
     * @return integer 
     */
    public function getHorasreal()
    {
        return $this->horasreal;
    }
}
