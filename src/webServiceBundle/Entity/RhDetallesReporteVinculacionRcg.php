<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteVinculacionRcg
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Vinculacion_RCG", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Vinculacion_RCG", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteVinculacionRcg
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
     * @ORM\Column(name="Id_Colectivo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idColectivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
     * @ORM\Column(name="Tasa", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $tasa;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Actividad", type="decimal", precision=12, scale=4, nullable=false)
     */
    private $cantidadActividad;



    /**
     * Set item
     *
     * @param integer $item
     * @return RhDetallesReporteVinculacionRcg
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
     * @return RhDetallesReporteVinculacionRcg
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
     * @return RhDetallesReporteVinculacionRcg
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
     * @return RhDetallesReporteVinculacionRcg
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
     * @return RhDetallesReporteVinculacionRcg
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
     * @return RhDetallesReporteVinculacionRcg
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
     * @return RhDetallesReporteVinculacionRcg
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
     * @return RhDetallesReporteVinculacionRcg
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
     * Set tasa
     *
     * @param string $tasa
     * @return RhDetallesReporteVinculacionRcg
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
     * Set cantidadActividad
     *
     * @param string $cantidadActividad
     * @return RhDetallesReporteVinculacionRcg
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
}
