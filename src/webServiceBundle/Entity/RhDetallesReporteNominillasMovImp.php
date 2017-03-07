<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteNominillasMovImp
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Nominillas_Mov_Imp", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Nominillas_Mov_Imp", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteNominillasMovImp
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
     * @ORM\Column(name="ItemLink", type="bigint", nullable=false)
     */
    private $itemlink;

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
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set itemlink
     *
     * @param integer $itemlink
     * @return RhDetallesReporteNominillasMovImp
     */
    public function setItemlink($itemlink)
    {
        $this->itemlink = $itemlink;

        return $this;
    }

    /**
     * Get itemlink
     *
     * @return integer 
     */
    public function getItemlink()
    {
        return $this->itemlink;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return RhDetallesReporteNominillasMovImp
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
     * @return RhDetallesReporteNominillasMovImp
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
     * @return RhDetallesReporteNominillasMovImp
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
     * @return RhDetallesReporteNominillasMovImp
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
     * @return RhDetallesReporteNominillasMovImp
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
     * @return RhDetallesReporteNominillasMovImp
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
     * @return RhDetallesReporteNominillasMovImp
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
     * @return RhDetallesReporteNominillasMovImp
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
     * @return RhDetallesReporteNominillasMovImp
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
     * @return RhDetallesReporteNominillasMovImp
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
     * @return RhDetallesReporteNominillasMovImp
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
     * @return RhDetallesReporteNominillasMovImp
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
}
