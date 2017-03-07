<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteImpunt
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Impunt", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Impunt", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteImpunt
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
     * @var boolean
     *
     * @ORM\Column(name="Justificada", type="boolean", nullable=false)
     */
    private $justificada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad_Impuntualidad", type="smallint", nullable=false)
     */
    private $cantidadImpuntualidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Minutos_Impuntualidad", type="smallint", nullable=false)
     */
    private $minutosImpuntualidad;

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
     * @return RhDetallesReporteImpunt
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
     * @return RhDetallesReporteImpunt
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
     * @return RhDetallesReporteImpunt
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
     * @return RhDetallesReporteImpunt
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
     * @return RhDetallesReporteImpunt
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
     * @return RhDetallesReporteImpunt
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
     * @return RhDetallesReporteImpunt
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
     * Set justificada
     *
     * @param boolean $justificada
     * @return RhDetallesReporteImpunt
     */
    public function setJustificada($justificada)
    {
        $this->justificada = $justificada;

        return $this;
    }

    /**
     * Get justificada
     *
     * @return boolean 
     */
    public function getJustificada()
    {
        return $this->justificada;
    }

    /**
     * Set cantidadImpuntualidad
     *
     * @param integer $cantidadImpuntualidad
     * @return RhDetallesReporteImpunt
     */
    public function setCantidadImpuntualidad($cantidadImpuntualidad)
    {
        $this->cantidadImpuntualidad = $cantidadImpuntualidad;

        return $this;
    }

    /**
     * Get cantidadImpuntualidad
     *
     * @return integer 
     */
    public function getCantidadImpuntualidad()
    {
        return $this->cantidadImpuntualidad;
    }

    /**
     * Set minutosImpuntualidad
     *
     * @param integer $minutosImpuntualidad
     * @return RhDetallesReporteImpunt
     */
    public function setMinutosImpuntualidad($minutosImpuntualidad)
    {
        $this->minutosImpuntualidad = $minutosImpuntualidad;

        return $this;
    }

    /**
     * Get minutosImpuntualidad
     *
     * @return integer 
     */
    public function getMinutosImpuntualidad()
    {
        return $this->minutosImpuntualidad;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return RhDetallesReporteImpunt
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
     * @return RhDetallesReporteImpunt
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
     * @return RhDetallesReporteImpunt
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
}
